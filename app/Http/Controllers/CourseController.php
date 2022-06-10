<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseUmkm;
use Auth;

class CourseController extends Controller
{
    public function getCourses($category){
        if($category == 'all'){
            $courses = Course::select('courses.*', 'category_courses.name as category', 'speakers.name as speaker')
                    ->leftJoin('category_courses', 'courses.id_category_courses', '=', 'category_courses.id')
                    ->leftJoin('speakers', 'courses.id_speakers', '=', 'speakers.id')
                    ->paginate(9);;
            return response()->json([
                'status' => 'Success',
                'size' => sizeof($courses),
                'data' => [
                    'courses' => $courses->toArray()
                ],
            ],200);
        }else{
            $courses = Course::select('*', 'category_courses.name as category', 'speakers.name as speaker')
                    ->leftJoin('category_courses', 'courses.id_category_courses', '=', 'category_courses.id')
                    ->leftJoin('speakers', 'courses.id_speakers', '=', 'speakers.id')
                    ->where('id_category_courses',$category)
                    ->paginate(9);
            return response()->json([
                'status' => 'Success',
                'size' => sizeof($courses),
                'data' => [
                    'courses' => $courses->toArray()
                ],
            ],200); 
        } 
    }

    public function getDetailCourseAndRegisterCourse($slug){

        $userId = Auth::user()->id;

        $course = Course::select('courses.*', 'category_courses.name as category', 'speakers.name as speaker')
                    ->leftJoin('category_courses', 'courses.id_category_courses', '=', 'category_courses.id')
                    ->leftJoin('speakers', 'courses.id_speakers', '=', 'speakers.id')
                    ->where('slug',$slug)
                    ->first();

        $courseUmkm = CourseUmkm::where('id_umkms', '=', $userId)
                     ->where('id_courses', '=',$course->id)
                     ->first();

        if($courseUmkm == null){
            $registerCourse = new CourseUmkm;
            $registerCourse->id_umkms = $userId;
            $registerCourse->id_courses = $course->id;
            $registerCourse->save();
        }

        return response()->json([
            'status' => 'Success',
            'data' => [
                'course' => $course
            ],
        ],200); 
    }

    public function getCoursesByCategory($category){
        $courses = Course::where('id_category_courses',$category)->paginate(10);
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($courses),
            'data' => [
                'courses' => $courses->toArray()
            ],
        ],200); 
    }

    public function getCourseBySpeakers($id_speaker){
        $course = Course::select('courses.*', 'category_courses.name as category', 'speakers.name as speaker')
                ->leftJoin('category_courses', 'courses.id_category_courses', '=', 'category_courses.id')
                ->leftJoin('speakers', 'courses.id_speakers', '=', 'speakers.id')
                ->where('courses.id_speakers',$id_speaker)
                ->paginate(3);
        
        return response()->json([
            'status' => 'Success',
            'data' => [
                'course' => $course
            ],
        ],200); 
    }
}
