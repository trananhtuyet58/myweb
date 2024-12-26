<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
       // $students = Student::all();
      //  return view('Student', compact('students'));
      return view('Book');
    }
}
