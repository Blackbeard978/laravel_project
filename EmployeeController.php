<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getData(){
        $employeeData = DB::table('employees')->paginate(3);
        return view('\dashboard', compact('employeeData'));
      }
}
