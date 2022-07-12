<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stakeholder;

class StakeholderController extends Controller
{
    public function getStakeholders($category){
        if($category == 'all'){
            $stakeholders = Stakeholder::select('*', 'category_stakeholders.name as category','stakeholders.name as name_stakeholder')
                    ->leftJoin('category_stakeholders', 'stakeholders.id_category_stakeholders', '=', 'category_stakeholders.id')
                    ->paginate(9);
            return response()->json([
                'status' => 'Success',
                'size' => sizeof($stakeholders),
                'data' => [
                    'stakeholders' => $stakeholders->toArray()
                ],
            ],200);
        }else{
            $stakeholders = Stakeholder::select('*', 'category_stakeholders.name as category','stakeholders.name as name_stakeholder')
                            ->leftJoin('category_stakeholders', 'stakeholders.id_category_stakeholders', '=', 'category_stakeholders.id')
                            ->where('id_category_stakeholders',$category)
                            ->paginate(10);
            return response()->json([
                'status' => 'Success',
                'size' => sizeof($stakeholders),
                'data' => [
                    'stakeholders' => $stakeholders->toArray()
                ],
            ],200); 
        }
    }

    public function getDetailStakeholder($slug){
        $stakeholder = Stakeholder::select('*', 'category_stakeholders.name as category','stakeholders.name as name_stakeholder')
                      ->leftJoin('category_stakeholders', 'stakeholders.id_category_stakeholders', '=', 'category_stakeholders.id')
                      ->where('slug',$slug)
                      ->first();
        return response()->json([
            'status' => 'Success',
            'data' => [
                'stakeholder' => $stakeholder
            ],
        ],200); 
    }

    //get stakeholder with category as parameter
    public function getStakeholderCategory($category){
        $stakeholder = Stakeholder::select('*', 'category_stakeholders.name as category','stakeholders.name as name_stakeholder')
                      ->leftJoin('category_stakeholders', 'news.id_category_stakeholders', '=', 'category_stakeholders.id')
                      ->where('id_category_stakeholders',$category)
                      ->paginate(10);
        
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($stakeholder),
            'data' => [
                'stakeholder' => $stakeholder
            ],
        ],200); 
    }

    public function searchStakeholder(Request $request,$category){
        if($category == 'all'){
            $stakeholders = Stakeholder::select('*', 'category_stakeholders.name as category','stakeholders.name as name_stakeholder')
            ->leftJoin('category_stakeholders', 'stakeholders.id_category_stakeholders', '=', 'category_stakeholders.id')
            ->where([
                ['stakeholders.name','LIKE','%'.$request->name .'%']
            ])->get();
            return response()->json([
                'status' => 'Success',
                'size' => sizeof($stakeholders),
                'data' => [
                    'stakeholders' => $stakeholders->toArray()
                ],
            ],200);
        }else{
            $stakeholders = Stakeholder::select('*', 'category_stakeholders.name as category')
                    ->leftJoin('category_stakeholders', 'stakeholders.id_category_stakeholders', '=', 'category_stakeholders.id')
                    ->where([
                        ['stakeholders.name','LIKE','%'.$request->name .'%']
                    ])->where('id_category_stakeholders',$category)
                    ->get();
            return response()->json([
                'status' => 'Success',
                'size' => sizeof($stakeholders),
                'data' => [
                    'stakeholders' => $stakeholders->toArray()
                ],
            ],200);
        }
        
    }
}
