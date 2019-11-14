@extends('layouts.new_app')
@section('content')
<h1>withdrawal of {{ $withdrawal->amount}} successful</h1>
    <a href="/home" class = "btn btn-success">Go Back</a>
@endsection