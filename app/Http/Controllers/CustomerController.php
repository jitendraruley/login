<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laravel;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use DB;

class CustomerController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        //
    }

    /**
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $user = new laravel;
        $user->name = Input::get("name");
        $user->email = Input::get("email");
        $user->number = Input::get("number");
        $user->address = Input::get("address");
        $user->save();
        return ("Customer Data inserted successfully in database");
//        $this->validate($request [
//            'name'      =>  'required',
//            'email'     =>  'required',
//            'number'    =>  'required',
//            'address'   =>  'required'
//            ]);
//
//        $custmore = new CustomerModel([
//
//            'name'      =>  $request->get('name'),
//            'email'     =>  $request->get('email'),
//            'number'    =>  $request->get('number'),
//            'address'   =>  $request->get('address')
//        ]);
//
//        $custmore->save();
//
//    return redirect()->route('/home');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function destroy($id)
    {

    }
}
