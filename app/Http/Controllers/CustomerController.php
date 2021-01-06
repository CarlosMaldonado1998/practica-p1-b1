<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return Customers::all();
    }
    public function show(Customers $customer)
    {
        return $customer;
    }
    public function store(Request $request)
    {
        $customer = Customers::create($request->all());
        return response()->json($customer, 201);
    }
    public function update(Request $request, Customers $customer)
    {
        $customer->update($request->all());
        return response()->json($customer, 200);
    }
    public function delete(Customers $customer)
    {
        $customer->delete();
        return response()->json(null, 204);
    }
}
