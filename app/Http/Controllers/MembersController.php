<?php

namespace App\Http\Controllers;

use App\Models\Members;

use App\Models\Schools;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    function index(){
        $members = Members::all();
        $schools = Schools::all();
        return view('members.index', ['members'=> $members, 'schools'=>$schools]);
    }

    function show(){
        $memberArr = [];
        $schoolArr = [];
        $schoolName = request('school');
        $members = Members::all();

        foreach($members as $member){
            $schools = $member->school;
            foreach($schools as $school){
                if($schoolName === $school){
                   $school = $member->school;
                   array_push($memberArr,$member);
                   array_push($schoolArr,$school);
                }
            }
        }
        
        return view('members.show',['memberArr' => $memberArr, 'schoolArr' => $schoolArr, 'schoolName'=> $schoolName]);
    }

    function create(){

        $schools = Schools::all();
        return view('members.create', ['schools'=>$schools]);
    }

    function store(){

        $member = new Members();
        $member->name = request('name');
        $member->email = request('email');
        $member->school = request('school');

        $member->save();

        return redirect('/members/create')->with('msg', 'Successfully Added Member!');

    }
}
