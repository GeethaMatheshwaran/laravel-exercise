@extends('layouts.default')
@section('expect-title','HOME PAGE')
@section('main-content')
{{-- <h1 align="center">This is home page</h1> --}}
<p>{{$heading}}</p>
<p><?=($heading)?></p>
<p>{!!$heading!!}</p>

@if ($no ==1)
<br><p>No : One</p>
@elseif ($no==2)
<br><p>No :TWO</p>
@else
<br><p>No : Numbers</p>
@endif

@unless ($status)
<br><p>Status : Online</p>
@endunless

<h3>List Of Names</h3>
@foreach ($names as $names)
<p>{{$names}}</p>
@endforeach
@endsection
