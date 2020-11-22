@extends('base')
@section('main')

@foreach($contact->jobs as $job)
    <h1>{{$job->age}}</h1>
@endforeach

@endsection;