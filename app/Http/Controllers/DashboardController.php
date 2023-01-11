<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    //public function index(){
     //   return view('tenant.dashboard');
    //}

      //
      public function index(){

       // dd('user',Auth::user());

        if(Auth::user()->hasRole('admin')){

          return view('dashboard.admin');

         }elseif(Auth::user()->hasRole('instructor')){

             return view('dashboard.instructor');
         }
         elseif(Auth::user()->hasRole('learner')){


            return view('dashboard.users');
        }


    }
}
