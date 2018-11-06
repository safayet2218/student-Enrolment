<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function addteacher()
    {
        return view('admin.add_teacher');
    }
    public function saveteacher(Request $request)
    {
        $data= array();
        $data['teachers_name']=$request->teachers_name;
        $data['teachers_phone']=$request->teachers_phone;
        $data['teachers_address']=$request->teachers_address;
        $data['teachers_department']=$request->teachers_department;
        $image=$request->file('teachers_image');
        if($image){
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['teachers_image']=$image_url;

                DB::table('teachers_tbl')->insert($data);
                Session::put('exception','Teacher added successfully!!');
                return Redirect::to('allteacher');
            }
        }
        $data['image']=$image_url;
            DB::table('teachers_tbl')->insert($data);
            Session::put('exception','teacher added successfully!!');
            return Redirect::to('/allteacher');


            DB::table('teachers_tbls')->insert($data);
            Session::put('exception','teacher added successfully!!');
            return Redirect::to('/allteacher');    
        }

        //all teacher shows
        public function allteacher()
    {
        
        $allteacher_info=DB::table('teachers_tbl')
                            ->get();

        $manage_teacher=view('admin.allteacher')
                                ->with('all_teacher_info',$allteacher_info);

        return view('layout')
                        ->with('allteacher',$manage_teacher);

        //return view('admin.allstudent');
        //
    }

    
}
