<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //logindashboard for admin
    public function login_dashboard(Request $request)
    {
        $email=$request ->admin_email;
        $password=md5($request ->admin_password);
        $result =DB::table('admin_tbl')
        ->where('admin_email',$email)
        ->where('admin_password',$password)
        ->first();
        //return view('admin.dashboard');


        if($result){
            Session::put('admin_email',$result->admin_email);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/admin_dashboard');
            
        }
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/backend');
        }
    }

    //student login dashboard
    public function student_login_dashboard(Request $request)
    {
        $email=$request ->student_email;
        $password=md5($request ->student_password);
        $result =DB::table('student_tbl')
        ->where('student_email',$email)
        ->where('student_password',$password)
        ->first();
        //return view('admin.dashboard');


        if($result){
            Session::put('student_email',$result->student_email);
            Session::put('student_id',$result->student_id);
            return Redirect::to('/student_dashboard');
            
        }
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_dashboard()
    {
        return view('admin.dashboard');
    }

    //student login part
    public function student_dashboard()
    {
        return view('student.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    //logout
    public function logout()
    {
        Session::put('admin_nmae',null);
        Session::put('admin_id',null);

        return Redirect::to('/backend');
        
    }
    //student logout 
    public function student_logout()
    {
        Session::put('student_nmae',null);
        Session::put('student_id',null);

        return Redirect::to('/');
        
    }

    //view profile
    public function viewprofile()
    {
        return view('admin.view');
    }

    //
    public function setting()
    {
        return view('admin.setting');
    }

    public function studentsetting()
    {
        return view('student.student_setting');
    }

    
}
