<?php
namespace App\Http\Controllers;

use App\CustomerModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CustomerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }

    public function create()
    {
        //
    }

    /**
     * @param Request $request
     * @return string
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $data = new CustomerModel;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->number = $request->number;
        $data->address = $request->address;
        $data->save();

       return ("Customer Data inserted successfully in database");
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
