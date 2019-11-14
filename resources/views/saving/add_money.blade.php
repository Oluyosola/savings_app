@extends('layouts.new_app')
@section('content')
<form action= "/add_money_submit" method ="POST">
    {{ csrf_field() }}
    <label>Amount</label>
    <input type = "number" input name="amount" placeholder="₦" class ="form-control"><br>
    <label>Select Plan</label>
    <select name ="select" placeholder="please select "class="form-control">  
        @foreach($plans as $plan)
            <option value="{{$plan->id}}">{{$plan->name}}</option>
        @endforeach
    </select><br>
    <input type = "submit" input name="submit" class="btn btn-primary">
</form>
@endsection