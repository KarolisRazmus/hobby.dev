@extends('main')

@section('title', trans('app.form_person'))

    @section('content')

        @if(isset($name))
            <div>{{$name}} sukurtas sėkmingai!</div>
        @endif


        {!! Form::open(['url' => route('create.person')]) !!}

        {!! Form::label('person', 'Person') !!}
        {!! Form::text('person')!!}<br/>

        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email') !!}<br/>

        {!! Form::label('phone', 'Phone') !!}
        {!! Form::text('phone') !!}<br/>

        {{Form::select('city',$cities)}}<br/>

        <ul>
            @foreach($hobbies as $key => $hobby)
                <li>{{Form::label($hobby, $hobby)}}
                    {{Form::checkbox('hobbies[]', $key)}}</li>
            @endforeach
        </ul>

        {!! Form::submit('Add Person!') !!}

        {!! Form::close() !!}

    @endsection