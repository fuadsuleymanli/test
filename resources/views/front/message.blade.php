@extends('front.master.app')

@section('content')
    @if($result == 'true')
        <center><h4 class="alert alert-success">{{ $msg }}</h4></center>
    @elseif($result == 'false')
        <center><h4 class="alert alert-danger">{{ $msg }}</h4></center>
    @endif
@endsection