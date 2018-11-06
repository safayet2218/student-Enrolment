<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AllstudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allstudent()
    {
        
        $allstudent_info=DB::table('student_tbl')
                            ->get();

        $manage_student=view('admin.allstudent')
                                ->with('allstudent_info',$allstudent_info);

        return view('layout')
                        ->with('allstudent',$manage_student);

        //return view('admin.allstudent');
        //
    }
    //student delete method
    public function studentdelete($student_id)
    {
        DB::table('student_tbl')
            ->where('student_id',$student_id)
            ->delete();
        return Redirect::to('/allstudent');        
    }

//student information view
    public function studentview($student_id){
        $student_description_view=DB::table('student_tbl')
                                    ->select('*')
                                    ->where('student_id',$student_id)
                                    ->first();


        $manage_description_student=view('admin.view')
                                    ->with('student_description_profile',$student_description_view);

        return view('layout')
                ->with('view',$manage_description_student);
    }

    //student edite
    public function studentedite($student_id){

        $student_description_view=DB::table('student_tbl')
                                    ->select('*')
                                    ->where('student_id',$student_id)
                                    ->first();


        $manage_description_student=view('admin.student_edite')
                                    ->with('student_description_profile',$student_description_view);

        return view('layout')
                ->with('student_edite',$manage_description_student);
    }

    //sudent update
    public function studentupdate(Request $request,$student_id){
        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_roll']=$request->student_roll;
        $data['student_fathername']=$request->student_fathername;
        $data['student_mothername']=$request->student_mothername;
        $data['student_email']=$request->student_email;
        $data['student_phone']=$request->student_phone;
        $data['student_address']=$request->student_address;
        $data['student_password']=$request->student_password;
        $data['student_admissionyear']=$request->student_admissionyear;

        DB::table('student_tbl')
                ->where('student_id',$student_id)
                ->update($data);

        Session::put('exception','Student update successfully');
        return Redirect::to('/allstudent');

    }
    
}
