@extends('welcome')
@section('content')
    <div class="container">
        <div class="form-title text-center mt-3">
            <h3>Customer Edit Form</h3>
        </div>
        {{-- Customer edit Form start --}}
        <div class="form-container">
            <form action="{{ route('customer.update', $customer->id) }}" method="post">
                @csrf @method('PUT')
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="name">Customer</label>
                        <input type="text" id="name" name="customer_name" class="form-control mt-3"
                            value="{{ $customer->customer_name }}">
                    </div>
                    <div class="col-6">
                        <label for="name">Customer Phone</label>
                        <input type="number" id="name" name="customer_phoneNo" class="form-control mt-3"
                            value="{{ $customer->customer_phoneNo }}">
                    </div>

                </div>
                <div class="row my-5 ">
                    <div class="col">
                        <label for="name">Customer Address</label>
                        <input type="text" id="name" name="customer_address" class="form-control mt-3"
                            value="{{ $customer->customer_address }}">
                    </div>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="name">Car Model</label>
                        <input type="text" id="name" name="car_model" class="form-control mt-3"
                            value="{{ $customer->car_model }}">
                    </div>
                    <div class="col-4">
                        <label for="name">Car Register Year</label>
                        <input type="text" id="name" name="car_register_name" class="form-control mt-3"
                            value="{{ $customer->car_register_name }}">
                    </div>
                    <div class="col-4">
                        <label for="name">Car Manu Year</label>
                        <input type="text" id="name" name="car_manu_year" class="form-control mt-3"
                            value="{{ $customer->car_manu_year }}">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-4">
                        <label for="name">Chassi Number</label>
                        <input type="text" id="name" name="car_chassic_year" class="form-control mt-3"
                            value="{{ $customer->car_chassic_year }}">
                    </div>
                    <div class="col-4">
                        <label for="name">Kilometer</label>
                        <input type="text" id="name" name="car_kilometer" class="form-control mt-3"
                            value="{{ $customer->car_kilometer }}">
                    </div>
                    <div class="col-4">
                        <label for="name">Sold Date</label>
                        <input type="date" id="name" name="car_sold_date" class="form-control mt-3"
                            value="{{ $customer->car_sold_date }}">
                    </div>
                </div>
                <div class="row mt-3">
                    <button type="submit" style="margin: 10px;"
                        class="btn btn-primary col-3 text-uppercase">Update</button>
                    <button type="button" style="margin: 10px;" class="btn btn-danger col-3"><a
                            href="{{ route('customer.index') }}"
                            class="text-uppercase text-decoration-none text-white">cancel</a></button>
                </div>
            </form>
        </div>
        {{-- customer edit form end  --}}
    </div>
@endsection
