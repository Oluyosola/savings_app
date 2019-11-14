@extends('layouts.new_app')
@section('content')
<h1>you have successfully added {{$fund->amount}}</h2>
    <a href="/home" class = "btn btn-success">Go Back</a>
@endsection