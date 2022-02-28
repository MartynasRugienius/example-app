<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class Logic extends Controller
{
    public function create(Request $request){
        $request->validate([
            'name'=>'string|required',
            'code'=>'alpha_dash|required',
            'pvm_code'=>'alpha_dash|required',
            'adress'=>'string|required',
            'telephone'=>'string|required',
            'email'=>'email:rfc,dns|required',
            'CEO'=>'string|required'
        ]);
        $companies=new Companies([
            'name'=>$request->get('name'),
            'code'=>$request->get('code'),
            'pvm_code'=>$request->get('pvm_code'),
            'adress'=>$request->get('adress'),
            'telephone'=>$request->get('telephone'),
            'email'=>$request->get('email'),
            'CEO'=>$request->get('CEO')
        ]);
        $companies->save();
        return redirect('/');
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'string|required',
            'code'=>'alpha_dash|required',
            'pvm_code'=>'alpha_dash|required',
            'adress'=>'string|required',
            'telephone'=>'string|required',
            'email'=>'email:rfc,dns|required',
            'CEO'=>'string|required'
        ]);
        $company = Companies::find($id);

        $company->code      = $request->get('code');
        $company->name      = $request->get('name');
        $company->pvm_code  = $request->get('pvm_code');
        $company->adress    = $request->get('adress');
        $company->telephone = $request->get('telephone');
        $company->email     = $request->get('email');
        $company->CEO       = $request->get('CEO');

        $company->save();

        return redirect('/');

    }


    public function search(Request $request){
        $request->validate([
            'name'=>'alpha'
        ]);
        $name=$request->get('name');
        $companies=Companies::where('name', 'LIKE', "%$name%")->get();
        return view('index', ['companies'=>$companies]);
    }

}
