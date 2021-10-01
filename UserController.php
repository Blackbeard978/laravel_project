<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class UserController extends Controller
{
    public function getData(){
      $employeeData = DB::table('blog')->paginate(4);;
      return view('/home', compact('employeeData'));
    }
}