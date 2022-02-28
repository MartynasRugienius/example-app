<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class Views extends Controller
{
    
    public function index(){
        return view('index', ['companies'=>[]]);
    }
    public function all(){
        $companies=Companies::all();
        return view('all', ['companies'=>$companies]);
    }
    public function create(){
        return view('create');
    }
    public function company($id){
        $companies=Companies::find($id);
        return view('company',['companies'=>$companies]);
    }
    public function update($id){
        $companies=Companies::find($id);
        return view('update', ['companies'=>$companies]);
    }
}
