@extends('layouts.new_app')

@section('content')
    <h1 style ="text-align: center;">Create your plan</h1>
<form action ="/submit" method="GET">
    {{csrf_field()}}
    <label><h5>Name of plan</h5></label>
        <input type="text" name="name_of_plan" placeholder="type here" class="form-control"><br>
    <label><h5>Brief description of plan</h5></label>
        <textarea name="Brief_description_of_plan" cols="30" rows="10" placeholder="type here" class="form-control"></textarea><br>
        <label><h5>End date of plan</h5></label>
        <input type="text" name="end_date_of_plan" class="form-control" id = "datepicker-3"><br>
         <label><h5>Target Amount</h5></label>
        <input type="number" name="target_amount" placeholder="₦" class="form-control"><br>
        <label><h5>Balance</h5></label>
        <input type="number" name="balance" placeholder="₦" class="form-control"><br> 
        <input type="submit" name="submit" class ="btn btn-primary"> 
</form>
@endsection
{{-- {!! Form::open(['action' => 'ResourceController@store', 'method' => 'POST']) !!}
<div class ="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}} --}}
</div>

