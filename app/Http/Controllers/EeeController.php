<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eee()
    {
        $eeestudent_info=DB::table('student_tbl')
                            ->where(['student_department'=>3])
                            ->get();

        $manage_student=view('admin.eee')
                                ->with('eee_student_info',$eeestudent_info);

        return view('layout')
                        ->with('eee',$manage_student);

    }
    
}
