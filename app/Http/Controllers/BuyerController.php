<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;

class BuyerController extends Controller
{
public function getBuyers($category){
    if($category == 'all'){
        $buyers = Buyer::select('*', 'category_buyers.name as category', 'buyers.name as title')
                ->leftJoin('category_buyers', 'buyers.id_category_buyers', '=', 'category_buyers.id')
                ->paginate(9);
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($buyers),
            'data' => [
                'buyers' => $buyers->toArray()
            ],
        ],200); 
    }else{
        $buyers = Buyer::select('*', 'category_buyers.name as category','buyers.name as title')
                ->leftJoin('category_buyers', 'buyers.id_category_buyers', '=', 'category_buyers.id')
                ->where('category_buyers.id', $category)
                ->paginate(9);
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($buyers),
            'data' => [
                'buyers' => $buyers->toArray()
            ],
        ],200); 
    }
}

    public function getDetailBuyer($slug){
        $buyer = Buyer::select('buyers.*', 'category_buyers.name as category')
                ->leftJoin('category_buyers', 'buyers.id_category_buyers', '=', 'category_buyers.id')
                ->where('slug',$slug)
                ->first();
        return response()->json([
            'status' => 'Success',
            'data' => [
                'buyer' => $buyer
            ],
        ],200); 
    }

    public function searchBuyer(Request $request,$category) {
        if($category == 'all'){
            $buyers = Buyer::select('buyers.*', 'category_buyers.name as category','buyers.name as title')
                    ->leftJoin('category_buyers', 'buyers.id_category_buyers', '=', 'category_buyers.id')
                    ->where([
                ['buyers.name','LIKE','%'.$request->name .'%']
            ])->get();

            return response()->json([
                'status' => 'Success',
                'size' => sizeof($buyers),
                'data' => [
                    'buyer' => $buyers
                ],
            ],200);
        }else{
            $buyers = Buyer::select('buyers.*', 'category_buyers.name as category','buyers.name as title')
                    ->leftJoin('category_buyers', 'buyers.id_category_buyers', '=', 'category_buyers.id')
                    ->where([
                        ['buyers.name','LIKE','%'.$request->name .'%']
                    ])->where('category_buyers.id', $category)
                    ->get();

            return response()->json([
                'status' => 'Success',
                'size' => sizeof($buyers),
                'data' => [
                    'buyer' => $buyers
                ],
            ],200);
        }
    }
}
