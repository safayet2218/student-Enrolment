<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BbaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bba()
    {
        $bbastudent_info=DB::table('student_tbl')
                            ->where(['student_department'=>2])
                            ->get();

        $manage_student=view('admin.bba')
                                ->with('bba_student_info',$bbastudent_info);

        return view('layout')
                        ->with('bba',$manage_student);

    }

}
