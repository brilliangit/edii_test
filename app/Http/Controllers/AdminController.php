<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use App\User;

class AdminController extends Controller {

    function daftar_pelamar(Request $request) {
       $result = Biodata::all();
        return view('admin_biodata')->with(compact('result'));
    }
    
    function show($id) {
        $user = $id ? $id : \Auth::user()->id;
        $data = [];
        $data['biodata'] = User::find($user)->biodata;
        $data['education'] = User::find($user)->education;
        $data['work'] = User::find($user)->work;
        $data['courses'] = User::find($user)->courses;
        return view('biodata', $data);
    }

}
