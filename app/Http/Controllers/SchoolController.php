<?php

namespace App\Http\Controllers;
use App\Models\Schools;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    function create(){


        return view('school.create');

    }
    function store(){

        $school = new Schools();
        $school->name = request('schoolName');
        $school->save();

        error_log($school->name);

        return redirect('/');
    }
}
