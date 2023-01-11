<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class CourseController extends Controller
{
    //
    public function index(){

        return view('courses.index');

    }
}
