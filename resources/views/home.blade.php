@extends('layouts.logged')

@section('app-content')

<div class="col-md-9 col-sm-9 col-xs-12">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 ">
            <a href="{{url('note/create')}}">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Create a new note
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="col-md-9 col-sm-9 col-xs-12">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Hello {{\Auth::user()->first_name}} {{\Auth::user()->last_name}}! 
                    <br>
                    You can create a note, create a category, or display your notes. Enjoy the app!
                    Feel free to contact us for any queries!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
