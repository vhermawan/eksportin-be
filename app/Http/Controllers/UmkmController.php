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
                    ->leftJoin('province', 'umkms.id_province', '=', 'province.prov_id')
                    ->leftJoin('city', 'umkms.id_city', '=', 'city.city_id')
                    ->leftJoin('district', 'umkms.id_district', '=', 'district.district_id')
                    ->leftJoin('subdistrict', 'umkms.id_subdistrict', '=', 'subdistrict.subdistrict_id')
                    ->whereNotNull('address')
                    ->whereNotNull('description')
                    ->whereNotNull('bussiness_entity')
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
            ->leftJoin('province', 'umkms.id_province', '=', 'province.prov_id')
            ->leftJoin('city', 'umkms.id_city', '=', 'city.city_id')
            ->leftJoin('district', 'umkms.id_district', '=', 'district.district_id')
            ->leftJoin('subdistrict', 'umkms.id_subdistrict', '=', 'subdistrict.subdistrict_id')
            ->where('id_category_umkms',$category)
            ->whereNotNull('address')
            ->whereNotNull('description')
            ->whereNotNull('bussiness_entity')
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
                ->leftJoin('province', 'umkms.id_province', '=', 'province.prov_id')
                ->leftJoin('city', 'umkms.id_city', '=', 'city.city_id')
                ->leftJoin('district', 'umkms.id_district', '=', 'district.district_id')
                ->leftJoin('subdistrict', 'umkms.id_subdistrict', '=', 'subdistrict.subdistrict_id')
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
                ->leftJoin('province', 'umkms.id_province', '=', 'province.prov_id')
                ->leftJoin('city', 'umkms.id_city', '=', 'city.city_id')
                ->leftJoin('district', 'umkms.id_district', '=', 'district.district_id')
                ->leftJoin('subdistrict', 'umkms.id_subdistrict', '=', 'subdistrict.subdistrict_id')
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
                ->leftJoin('province', 'umkms.id_province', '=', 'province.prov_id')
                ->leftJoin('city', 'umkms.id_city', '=', 'city.city_id')
                ->leftJoin('district', 'umkms.id_district', '=', 'district.district_id')
                ->leftJoin('subdistrict', 'umkms.id_subdistrict', '=', 'subdistrict.subdistrict_id')
                ->where('id_category_umkms',$category)
                ->whereNotNull('address')
                ->whereNotNull('description')
                ->whereNotNull('bussiness_entity')
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
