<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body>

    <div class="container">

        {{--@if(Request::is('/'))--}}
            {{--@include('inc.showcase')--}}
        {{--@endif--}}

        <div class="row">
            <div class="col-md-12 col-lg-12">
                {!! Form::open(['url' => '/']) !!}
                <div class="form-group">
                    {{ Form::label('name', 'Book Name') }}

                    {{ Form::text('name','', ['class' => 'form-control', 'placeholder'=>'Enter Name']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('email', 'Email') }}

                    {{ Form::text('email','', ['class' => 'form-control', 'placeholder'=>'Enter Email']) }}
                </div>

                <div>
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


    </body>
</html>
