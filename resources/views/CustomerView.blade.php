@extends('welcome')
@section('content')
    <div class="container">
        <div class="row my-4">
            <h3 class="text-uppercase text-center col-5">Customer Detail</h3>
            <button class="col-3 offset-4 btn btn-info"><a href="{{ route('customer.index') }}"
                    class=" text-capitalize text-decoration-none text-white">Back</a></button>
        </div>

        <table class="table">
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Model</th>
                <th>Register Name</th>
                <th>Manu Year</th>
                <th>Chassi No:</th>
                <th>Kilometer</th>
                <th>Sold Date</th>
            </tr>
            <tr>
                <td>{{ $customer->customer_name }}</td>
                <td>{{ $customer->customer_phoneNo }}</td>
                <td>{{ $customer->customer_address }}</td>
                <td>{{ $customer->car_model }}</td>
                <td>{{ $customer->car_register_name }}</td>
                <td>{{ $customer->car_manu_year }}</td>
                <td>{{ $customer->car_chassic_year }}</td>
                <td>{{ $customer->car_kilometer }}</td>
                <td>{{ $customer->car_sold_date }}</td>
            </tr>
        </table>
    </div>
@endsection
