@extends('layouts.app')

@section('content')
   <div>
    <div class="slider">
      <h1>SLIDER</h1>
    </div>
       <div class="filter">
      <a href="{{ url('pages/contactus')}} ">contact</a>
      <a href="{{ url('pages/signup')}} ">signup</a>
      <a href="{{url('pages/signin')}}">signin</a>
    </div>
  </div>
 @endsection
