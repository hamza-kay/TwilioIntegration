@extends('layouts.master')

@section('content')
    {!! Form::open(['url' => route('notifications.send')]) !!}
    <div class="form-group">
        {!! Form::label('message') !!}
        {!! Form::text('message', '',
            ['class' => 'form-control', 'placeholder' => 'New things are happening!']) !!}
        <div class="text-danger">{{ $errors->first('message') }}</div>
    </div>
    <div class="form-group">
        {!! Form::label('Image URL') !!}
        {!! Form::text('imageUrl', '',
            ['class' => 'form-control', 'placeholder' => 'http://fake.twilio.com/some_image.png']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Send Message</button>
    {!! Form::close() !!}
@endsection
