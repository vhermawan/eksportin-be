<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\CmsUser;
use App\Models\Umkm;
use App\Notifications\ActivateAccount;
use DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = request(['email', 'password']);
        if(!auth()->attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        
        if(auth()->user()->status == 'Inactive')
        {
            auth()->logout();
            return response()->json([
                'message' => 'Akun anda belum aktif silahkan lakukan aktivasi terlebih dahulu!'
            ], 401);
        }
        
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->save();

        $umkm = Umkm::select('umkms.*', 'category_umkms.name as category')
            ->leftJoin('category_umkms', 'umkms.id_category_umkms', '=', 'category_umkms.id')
            ->where('id_cms_users',$user->id)
            ->first();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'user' => $user,
            'umkm' => $umkm,
        ]);
    }

    public function register(Request $request){
        $request->validate([
            // 'email' => 'required|string|email|unique:cms_users',
            'password' => 'required|string|confirmed',
            'name' => 'required|string'
        ]);
        DB::beginTransaction();
        try{
            $cms_users = new CmsUser;
            $cms_users->name = $request->name;
            $cms_users->email = $request->email;
            $cms_users->password = bcrypt($request->password);
            $cms_users->id_cms_privileges=2;
            $cms_users->photo = 'uploads/avatar/avatar.png';
            $cms_users->status = 'Inactive';
            $cms_users->save();
        }catch(\Exception $e){
            DB::rollback();
            return response()->json(['status' => 'Register Failed', 'message' => $e->getMessage()],422);
        }
        try{
            $umkm= new Umkm;
            $umkm->id_cms_users  = $cms_users->id;
            $umkm->address = $request->address;
            $umkm->phone = $request->phone;
            $umkm->photo_url = 'uploads/avatar/avatar.png';
            $umkm->description = $request->description;
            $umkm->id_category_umkms = $request->id_category_umkms;
            $umkm->bussiness_entity = $request->bussiness_entity;
            $umkm->save();
        }catch(\Exception $e){
            DB::rollback();
            return response()->json(['status' => 'Register Failed', 'message' => $e->getMessage()]);
        }
        DB::commit();

        $details = [
            'greeting' =>'Hallo',
            'body' => 'Proses Registrasi Anda Berhasil Silahkan untuk melakukan verifikasi email',
            'actionText' => 'Verifikasi Email',
        ];

        $cms_users->notify(
            new ActivateAccount($cms_users->id,$details)
        );
        
        return response()->json([
            'status' => 201,
            'message' => 'Successfully created user!',
            'data' => [
                'user' => $umkm
             ],
        ], 201);
    }

    public function activateUser($id){
        $dataUser = CmsUser::where('id', $id)->first();
        if (!$dataUser)
            return response()->json([
            'message' => 'User not found.'
        ], 404);

        $dataUser->status = 'Active';
        $dataUser->save();

        $url = env('BASE_URL_APP');
        return redirect($url);
    }

    public function logout(Request $request)
    {
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
