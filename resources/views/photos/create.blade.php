@extends('welcome')

@section('content')

{!! Form::open(['route' => ['photos.store'],
           'files' => true,
           'method' => 'POST']) !!}

{{--@include('errors.validation')--}}

{!! Form::file('photo') !!}

{!! Form::submit('Качи') !!}

{!! Form::close() !!}

@endsection