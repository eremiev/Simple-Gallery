@extends('welcome')

@section('content')

    {!! Form::open(['route' => ['photos.store'],
               'files' => true,
               'method' => 'POST']) !!}

    @include('errors.validation')

    <label for="name" class="control-label col-sm-2">Име</label>
    <input class="form-control" id="name" type="text" name="translation[name]"/>

    <label for="description" class="control-label col-sm-2">Описание</label>
    <input class="form-control" id="description" type="text" name="translation[description]"/>

    <input class="form-control" type="hidden" name="translation[lang]" value="bg"/>

    {!! Form::file('photo') !!}

    {!! Form::submit('Качи') !!}

    {!! Form::close() !!}

@endsection