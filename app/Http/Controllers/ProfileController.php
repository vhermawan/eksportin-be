<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CmsUser;
use App\Models\Umkm;
use App\Models\CourseUmkm;
use Auth;
use Validator;
use File;
use Storage;
use Illuminate\Support\Carbon;


class ProfileController extends Controller
{
    public function getProfile(){
        $auth = Auth::user();
        $id = $auth->id;
        $umkm = CmsUser::leftJoin('cms_users', 'umkms.id_cms_users', '=', 'cms_users.id')->findOrFail($id);
        return response()->json([
            'status' => 'Success',
            'data' => [
               'user' => $umkm,
            ],
       ]);
    }

    public function changePassword(Request $request){
        $request_data = $request->all();
        $current_password = Auth::user()->password;
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|confirmed|min:8|different:old_password'
        ]);
        if ($validator->fails()) {    
            return response()->json($validator->messages(), 422);
        }
        $old_password = $request->old_password;
        
        if(Hash::check($old_password, $current_password))
        {           
            $user_id = Auth::user()->id;                       
            $obj_user = CmsUser::find($user_id);
            $obj_user->password = Hash::make($request->password);
            $obj_user->save(); 
            return response()->json([
                'status' => 'Success',
                'message' => 'Password Successfully Change'
           ]);
        }else {
            return response()->json([
                'status' => 'Error',
                'message' => 'Password not match'
            ]);

        }
    }

    public function changeProfile($id_umkm,Request $request){
        $umkm = Umkm::select('umkms.*', 'category_umkms.name as category')
                ->leftJoin('category_umkms', 'umkms.id_category_umkms', '=', 'category_umkms.id')
                ->findOrFail($id_umkm);

        $user = CmsUser::findOrFail($umkm->id_cms_users);
        $previous_name = $umkm->photo_url;
        $umkm->address = $request->address;
        $umkm->phone = $request->phone;
        $umkm->description = $request->description;
        $umkm->id_category_umkms = $request->id_category_umkms;
        $umkm->instagram = $request->instagram;
        $umkm->facebook = $request->facebook;
        $umkm->shopee = $request->shopee;
        $umkm->tokopedia = $request->tokopedia;
        $umkm->slug = str_slug($request->name);
        $umkm->save();
       
        if($request->hasFile('photo'))
        {
            $uploadedFile = $request->file('photo');
            $filename = time() . '.' . $uploadedFile->getClientOriginalExtension();
            Storage::disk('local')->putFileAs(
                'uploads/'.$umkm->id_cms_users.'/'.Carbon::now()->format('Y-m'),
                $uploadedFile,
                $filename
            );
            $umkm->photo_url = 'uploads/'.$umkm->id_cms_users.'/'.Carbon::now()->format('Y-m').'/'.$filename;
            $umkm->save();
        }
        $user->update($request->all());
        
        return response()->json([
            'status' => 'Success',
            'message' => 'Successfully updated user!',
            'data' => [
               'user' => $user,
               'umkm' => $umkm,
            ],
       ]);
    }

    public function getListRegisteredCourses(){
        $userId = Auth::user()->id;

        $courseUmkm = CourseUmkm::select('course_umkms.id_courses','course_umkms.id as id_course_umkm','courses.*', 'category_courses.name as category', 'speakers.name as speaker')
                    ->leftJoin('courses','course_umkms.id_courses','=','courses.id')
                    ->leftJoin('category_courses', 'courses.id_category_courses', '=', 'category_courses.id')
                    ->leftJoin('speakers', 'courses.id_speakers', '=', 'speakers.id')
                    ->where('course_umkms.id_umkms', '=', $userId)
                    ->paginate(3);

        return response()->json([
            'status' => 'Success',
            'size' => sizeof($courseUmkm),
            'data' => [
                'courseUmkm' => $courseUmkm
            ],
        ],200);             
    }

    public function deleteCourse($id){

        $courseUmkm = CourseUmkm::find($id)->delete();
        return response()->json([
            'status' => 'Success',
            'message' => 'Delete success',
            'data' => [
                'courseUmkm' => $courseUmkm
            ],
        ],200);  
    }
}
