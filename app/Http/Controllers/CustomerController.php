<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers=CustomerModel::paginate(10);
        return view("Customer",compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CustomerRegisterPage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $data = $this->GetData($request);
        CustomerModel::create($request->all());
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request , $id)
    {
        $customer = CustomerModel::findOrFail($id);
        // dd($customer->toArray());
         return view('CustomerView',compact('customer'));
    }

    /*
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $customer = CustomerModel::findOrFail($id);
        return view('CustomerEdit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        // $CusData = $this->GetData($request);
        $CusData = CustomerModel::findOrfail($id)->update($request->all());
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        CustomerModel::findOrFail($id)->delete();
        return redirect()->route('customer.index');
    }

    private function GetData(Request $request){
        return [
            'customer_name' => $request['CustomerName'],
            'customer_address' => $request['CustomerAddress'],
            'customer_phoneNo' => $request['CustomerPhoneNumber'],
            'car_model' => $request['CarModel'],
            'car_register_name' => $request['CarRegsiterYear'],
            'car_manu_year' => $request['CarManuYear'],
            'car_chassic_year' => $request['CarChassiNumber'],
            'car_kilometer' => $request['CarKilometer'],
            'car_sold_date' => $request['SoldDate'],
        ];
    }
}
