@extends('layouts.new_app')
@section('content')
<form action= "/withdraw_money" method ="POST">
    {{ csrf_field() }}
    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
    @endif
    <label>Amount</label>
    <input type = "number" input name="amount" placeholder="₦" class ="form-control"><br>
    <label>Select Plan</label>
    <select name ="select" placeholder="please select "class="form-control">  
        @foreach($plans as $plan)
            <option value="{{$plan->id}}">{{$plan->name}}</option>
        @endforeach
    </select><br>
    <label>Reason for withdrawal</label>
<textarea name="reason" cols="30" rows="10" placeholder="type your reason" class ="form-control"></textarea><br>
    <input type = "submit" input name="submit" class="btn btn-primary">
</form>
@endsection