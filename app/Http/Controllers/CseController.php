<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cse()
    {
        $csestudent_info=DB::table('student_tbl')
                            ->where(['student_department'=>1])
                            ->get();

        $manage_student=view('admin.cse')
                                ->with('cse_student_info',$csestudent_info);

        return view('layout')
                        ->with('cse',$manage_student);

    }

    
}
