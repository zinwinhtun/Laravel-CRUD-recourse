@extends('welcome')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <h3 class="text-uppercase col">Customer List</h3>
            <button class="btn btn-success col-2 offset-6 text-uppercase">
                <a href="{{ route('customer.create') }}" class="text-white text-decoration-none">Create</a>
            </button>
        </div>
        {{-- customer list table start --}}
        <table class=" table table-hover mt-3">
            <tr>
                <th>#</th>
                <th>Customer Name</th>
                <th>Customer Phone No:</th>
                <th>Car Register Name</th>
                <th>Car Model</th>
                <th>Chassi</th>
                <th>Kilometer</th>
                <th>Sold Date</th>
                <th>Tools</th>
            </tr>
            @foreach ($customers as $cus)
                <tr>
                    <td class="border-right-1-solid">{{ $loop->iteration }}</td>
                    <td>{{ $cus->customer_name }}</td>
                    <td>{{ $cus->customer_phoneNo }}</td>
                    <td>{{ $cus->car_register_name }}</td>
                    <td>{{ $cus->car_model }}</td>
                    <td>{{ $cus->car_chassic_year }}</td>
                    <td>{{ $cus->car_kilometer }}</td>
                    <td>{{ $cus->car_sold_date }}</td>
                    <td>
                        <div class="row ">
                            <div class="col-3">
                                <a href="{{ route('customer.show', $cus->id) }}"><button class="btn btn-info"><i
                                            class="fa-regular fa-eye text-dark"></i></button></a>
                            </div>
                            <div class="col-3">
                                <a href="{{ route('customer.edit', $cus->id) }}"><button class="btn btn-warning"><i
                                            class="fa-solid fa-pen-nib  text-dark"></i></button></a>
                            </div>
                            <div class="col-3">

                                <form action="{{ route('customer.destroy', $cus->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can  text-dark"></i></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $customers->links() }}
        {{-- customer list table end --}}
    </div>
@endsection
