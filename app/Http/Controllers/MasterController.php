<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryNews;
use App\Models\CategoryUmkm;
use App\Models\CategoryBuyer;
use App\Models\CategoryStakeholder;
use App\Models\CategoryCourse;

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
}
