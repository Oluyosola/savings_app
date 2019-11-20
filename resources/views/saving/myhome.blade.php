@extends('layouts.new_app')
@section('content')
<h1 style="text-align:center">TABLE OF PLANS</h1>
<table class ="table table-bordered">
    <tr>
      <th>Plan Name</th>
      <th> Balance</th>
      <th>Target Amount</th>
      <th>Target Date</th>
    </tr>
    @if (count($plan) >0)
        @foreach($plan as $plans)
            <tr>
                <td>{{$plans->name}}</td>
                <td>{{$plans->balance}}</td>
                <td>{{$plans->target_amount}}</td>
                <td>{{date("d,M,Y", strtotime($plans->end_date)) }}</td>
            </tr>
        @endforeach
     @endif
  </table>
@endsection