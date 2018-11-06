<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ece()
    {
    
        $ecestudent_info=DB::table('student_tbl')
                            ->where(['student_department'=>4])
                            ->get();

        $manage_student=view('admin.ece')
                                ->with('ece_student_info',$ecestudent_info);

        return view('layout')
                        ->with('ece',$manage_student);

    }

    
}
