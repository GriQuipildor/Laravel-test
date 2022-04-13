<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
        return view('student.students');
    }

    public function new(){
        return view('student.new');
    }

    public function insertNewStudent(){
        dd($_POST);
    }

    public function list(){
        return view('student.list');
    }
}