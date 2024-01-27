@extends('welcome')
@section('content')
    <div class="container">
        <div class="form-title text-center mt-3">
            <h3>Customer</h3>
        </div>
        {{-- Customer Register Form start --}}
        <div class="form-container">
            <form action="{{ route('customer.store') }}" method="post">
                @csrf
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="name">Customer</label>
                        <input required type="text" id="name" name="customer_name" class="form-control mt-3"
                            placeholder="Name *">
                    </div>
                    <div class="col-6">
                        <label for="name">Customer Phone</label>
                        <input required type="number" id="name" name="customer_phoneNo" class="form-control mt-3"
                            placeholder="Phone *">
                    </div>

                </div>
                <div class="row my-5 ">
                    <div class="col">
                        <label for="name">Customer Address</label>
                        <input required type="text" id="name" name="customer_address" class="form-control mt-3"
                            placeholder="Address *">
                    </div>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="name">Car Model</label>
                        <input required type="text" id="name" name="car_model" class="form-control mt-3"
                            placeholder="Model">
                    </div>
                    <div class="col-4">
                        <label for="name">Car Register Year</label>
                        <input required type="text" id="name" name="car_register_name" class="form-control mt-3"
                            placeholder="Reg-Year">
                    </div>
                    <div class="col-4">
                        <label for="name">Car Manu Year</label>
                        <input required type="text" id="name" name="car_manu_year" class="form-control mt-3"
                            placeholder="Manu">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-4">
                        <label for="name">Chassi Number</label>
                        <input required type="text" id="name" name="car_chassic_year" class="form-control mt-3"
                            placeholder="Chassi">
                    </div>
                    <div class="col-4">
                        <label for="name">Kilometer</label>
                        <input required type="text" id="name" name="car_kilometer" class="form-control mt-3"
                            placeholder="Kilo">
                    </div>
                    <div class="col-4">
                        <label for="name">Sold Date</label>
                        <input required type="date" id="name" name="car_sold_date" class="form-control mt-3"
                            placeholder="Sold Date ">
                    </div>
                </div>
                <div class="row mt-3">
                    <button type="submit" style="margin: 10px;"
                        class="btn btn-primary col-3 text-uppercase">Create</button>
                    <button type="button" style="margin: 10px;" class="btn btn-danger col-3"><a
                            href="{{ route('customer.index') }}"
                            class="text-uppercase text-decoration-none text-white">cancel</a></button>
                </div>
            </form>
        </div>
        {{-- customer register form end  --}}
    </div>
@endsection
