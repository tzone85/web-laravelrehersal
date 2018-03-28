<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--adding jquery ajax--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <title>Laravel</title>


    </head>
    <body>

    <div class="container">

        {{--@if(Request::is('/'))--}}
            {{--@include('inc.showcase')--}}
        {{--@endif--}}

        {{--*******************************************************--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12 col-lg-12">--}}
                {{--{!! Form::open(['url' => '/']) !!}--}}
                {{--<div class="form-group">--}}
                    {{--{{ Form::label('name', 'Book Name') }}--}}

                    {{--{{ Form::text('name','', ['class' => 'form-control', 'placeholder'=>'Enter Name']) }}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{{ Form::label('price', 'Price') }}--}}

                    {{--{{ Form::text('price','', ['class' => 'form-control', 'placeholder'=>'Enter Price']) }}--}}
                {{--</div>--}}

                {{--<div>--}}
                    {{--{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}--}}
                {{--</div>--}}
                {{--{!! Form::close() !!}--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--*************************************************************--}}





        <form id="bookForm">
            {{ csrf_field() }}
            <input type="hidden" id="book_id">
        Book Name <input type="text" id="name" required="required" name="name"><br>
        Price: <input type="number" id="price" required="required" name="price"><br>
        <input type="submit" />
        </form>
    </div>

    {{--Ajax call--}}
    <script type="text/javascript">



        $('#bookForm').on('submit', function(e) {

            e.preventDefault();

            $.ajax({
                url:'api/saveOrUpdate',
                type: 'POST',
                data:{user_id:$("#book_id").val(), name:$('#name').val(), price:$('#price').val()},
                success: function (response) {
                    alert(response.message);
//                    load();
                    //console.log(response);
                }
            });
        });
    </script>


    </body>
</html>
