<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class CourseController extends Controller
{
    //
    public function index(){

        //return Inertia:: render('');
        return view('courses.index');

    }
}
