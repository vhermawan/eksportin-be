<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;

class UmkmController extends Controller
{
    public function getUmkms($category){
        if($category == 'all'){
            $umkms = Umkm::select('*', 'category_umkms.name as category', 'cms_users.name as name_umkm')
                    ->leftJoin('category_umkms', 'umkms.id_category_umkms', '=', 'category_umkms.id')
                    ->leftJoin('cms_users', 'umkms.id_cms_users', '=', 'cms_users.id')
                    ->leftJoin('provinces', 'umkms.id_province', '=', 'provinces.prov_id')
                    ->leftJoin('cities', 'umkms.id_city', '=', 'cities.city_id')
                    ->leftJoin('districts', 'umkms.id_district', '=', 'districts.dis_id')
                    ->leftJoin('subdistricts', 'umkms.id_subdistrict', '=', 'subdistricts.subdis_id')
                    ->whereNotNull('address')
                    ->whereNotNull('description')
                    ->whereNotNull('umkms.id_category_umkms')
                    ->paginate(9);

            return response()->json([
                'status' => 'Success',
                'size' => sizeof($umkms),
                'data' => [
                    'umkms' => $umkms->toArray()
                ],
            ],200); 
        }else{
            $umkm = Umkm::select('*', 'category_umkms.name as category','cms_users.name as name_umkm')
            ->leftJoin('category_umkms', 'umkms.id_category_umkms', '=', 'category_umkms.id')
            ->leftJoin('cms_users', 'umkms.id_cms_users', '=', 'cms_users.id')
            ->leftJoin('provinces', 'umkms.id_province', '=', 'provinces.prov_id')
            ->leftJoin('cities', 'umkms.id_city', '=', 'cities.city_id')
            ->leftJoin('districts', 'umkms.id_district', '=', 'districts.dis_id')
            ->leftJoin('subdistricts', 'umkms.id_subdistrict', '=', 'subdistricts.subdis_id')
            ->where('id_category_umkms',$category)
            ->whereNotNull('address')
            ->whereNotNull('description')
            ->whereNotNull('umkms.id_category_umkms')
            ->paginate(9);
    
            return response()->json([
                'status' => 'Success',
                'size' => sizeof($umkm),
                'data' => [
                    'umkms' => $umkm
                ],
            ],200); 
        }
    }

    public function getDetailUmkm($slug){
        $umkm = Umkm::select('umkms.*', 'category_umkms.name as category', 'cms_users.name as name')
                ->leftJoin('cms_users', 'umkms.id_cms_users', '=', 'cms_users.id')
                ->leftJoin('category_umkms', 'umkms.id_category_umkms', '=', 'category_umkms.id')
                ->leftJoin('provinces', 'umkms.id_province', '=', 'provinces.prov_id')
                ->leftJoin('cities', 'umkms.id_city', '=', 'cities.city_id')
                ->leftJoin('districts', 'umkms.id_district', '=', 'districts.dis_id')
                ->leftJoin('subdistricts', 'umkms.id_subdistrict', '=', 'subdistricts.subdis_id')
                ->where('slug',$slug)->first();
        return response()->json([
            'status' => 'Success',
            'data' => [
                'umkm' => $umkm
            ],
        ],200); 
    }

    //get umkm with category as parameter
    public function getUmkmCategory($category){
        $umkm = Umkm::select('*', 'category_umkms.name as category','cms_users.name as name')
                ->leftJoin('cms_users', 'umkms.id_cms_users', '=', 'cms_users.id')
                ->leftJoin('category_umkms', 'umkms.id_category_umkms', '=', 'category_umkms.id')
                ->leftJoin('provinces', 'umkms.id_province', '=', 'provinces.prov_id')
                ->leftJoin('cities', 'umkms.id_city', '=', 'cities.city_id')
                ->leftJoin('districts', 'umkms.id_district', '=', 'districts.dis_id')
                ->leftJoin('subdistricts', 'umkms.id_subdistrict', '=', 'subdistricts.subdis_id')
                ->where('id_category_umkms',$category)
                ->paginate(10);
        
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($umkm),
            'data' => [
                'umkm' => $umkm
            ],
        ],200); 
    }

    //get umkm with 3 last umkm
    public function getLastUmkm($category){
        $umkm = Umkm::select('*', 'category_umkms.name as category','cms_users.name as name_umkm')
                ->leftJoin('cms_users', 'umkms.id_cms_users', '=', 'cms_users.id')
                ->leftJoin('category_umkms', 'umkms.id_category_umkms', '=', 'category_umkms.id')
                ->leftJoin('provinces', 'umkms.id_province', '=', 'provinces.prov_id')
                ->leftJoin('cities', 'umkms.id_city', '=', 'cities.city_id')
                ->leftJoin('districts', 'umkms.id_district', '=', 'districts.dis_id')
                ->leftJoin('subdistricts', 'umkms.id_subdistrict', '=', 'subdistricts.subdis_id')
                ->where('id_category_umkms',$category)
                ->whereNotNull('address')
                ->whereNotNull('description')
                
                ->whereNotNull('umkms.id_category_umkms')
                ->paginate(3);
        
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($umkm),
            'data' => [
                'umkm' => $umkm
            ],
        ],200); 
    }
}
