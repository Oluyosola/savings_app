@extends('layouts.new_app')
@section('content')
<form action= "/" method ="GET">
    <label>Amount</label>
    <input type = "number" input name="amount" placeholder="add amount" class ="form-control">
</form>
@endsection