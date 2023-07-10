


@extends('admin.layouts.app')
@section('admin-content')
    <div class="content">
    <h2>Top 3 Product Terlaris</h2>
        <p></p>

       
        <table class="table table-striped">
            <thead>
                <tr>
                   
                <th>Product Name</th>
                <th>Total Quantity Sales</th>
                </tr>
            </thead>
            <tbody>
            @foreach($topProducts as $d)
                    <tr>
                 
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->total_sales }}</td>

                @endforeach

            </tbody>
        </table>
    @endsection


