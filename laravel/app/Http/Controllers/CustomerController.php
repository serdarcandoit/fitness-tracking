<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $customers = Customer::all();
        return view('customers.list', compact('customers'));
        /*

        $customer = Customer::where("id","1")->get();
        
        $customer[0]->update([
            "name" => "John"
        ]);

        dd(Customer::all());


        // foreach döngüsü

        
        $customers = Customer::all();

        foreach($customers as  $customer){
            echo $customer->id . " - " . $customer->name . "<br/>"
        }
        */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /*
        Customer::create([
            "name" => "Serdar",
            "surname"=> "Balkı",
            "birthYear"=>2004,
            "gender" => "Male",
            "address" => "Istanbul, Turkey",

        ]);

        Customer::create([
            "name"=> "Jane",
            "surname" => "Doe",
            "birthYear"=> 1999,
            "gender"=> "Female",
            "address" => "London, UK",
        ]);
        */

        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $customer = Customer::create([
            'name' => $request->post('name'),
            'surname' => $request->post('surname'),
            'birthYear' => $request->post('birthYear'),
            'gender' => $request->post('gender'),
            'address' => $request->post('address')
        ]);

        // return view('customers.list');
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $customer->update([
            "surname"=> "abc"
        ]);

        dd(Customer::all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
