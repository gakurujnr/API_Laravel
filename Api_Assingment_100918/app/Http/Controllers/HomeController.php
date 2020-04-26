<?php

namespace App\Http\Controllers;

use App\Fee;
use App\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function display()
    {
        $fees = Fee::has('students')->get();
        return view('gakuru.fees.show')->with('fees', $fees);
    }
}
