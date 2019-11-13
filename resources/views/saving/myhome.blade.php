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
    {{-- <tr> --}}
      {{-- <td>@foreach($plans as $plan)
        <option value="{{$plan->id}}">{{$plan->name}}</option></td> --}}
    {{-- </tr> --}}
  </table>
@endsection