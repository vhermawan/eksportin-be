<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryNews;
use App\Models\CategoryUmkm;
use App\Models\CategoryBuyer;
use App\Models\CategoryStakeholder;
use App\Models\CategoryCourse;
use App\Models\Province;
use App\Models\City;
use App\Models\District;
use App\Models\Subdistrict;

class MasterController extends Controller
{
    public function getCategoryNews(){
        $category = CategoryNews::all();
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($category),
            'data' => [
                'category' => $category->toArray()
            ],
        ],200); 
    }

    public function getCategoryBuyers(){
        $category = CategoryBuyer::all();
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($category),
            'data' => [
                'category' => $category->toArray()
            ],
        ],200); 
    }

    public function getCategoryStakeholders(){
        $category = CategoryStakeholder::all();
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($category),
            'data' => [
                'category' => $category->toArray()
            ],
        ],200); 
    }

    public function getCategoryUmkms(){
        $category = CategoryUmkm::all();
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($category),
            'data' => [
                'category' => $category->toArray()
            ],
        ],200); 
    }

    public function getCategoryCourses(){
        $category = CategoryCourse::all();
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($category),
            'data' => [
                'category' => $category->toArray()
            ],
        ],200); 
    }

    //get province
    public function getProvince(){
        $province = Province::all();
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($province),
            'data' => [
                'province' => $province->toArray()
            ],
        ],200); 
    }

    //get city
    public function getCity($id){
        $city = City::where('province_id',$id)->get();
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($city),
            'data' => [
                'city' => $city->toArray()
            ],
        ],200); 
    }

    //get district
    public function getDistrict($id){
        $district = District::where('city_id',$id)->get();
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($district),
            'data' => [
                'district' => $district->toArray()
            ],
        ],200); 
    }

    //get subdistrict
    public function getSubdistrict($id){
        $subdistrict = Subdistrict::where('district_id',$id)->get();
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($subdistrict),
            'data' => [
                'subdistrict' => $subdistrict->toArray()
            ],
        ],200); 
    }
}
