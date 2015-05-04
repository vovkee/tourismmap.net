@extends('outerlayout')

@section('content')
    @if (Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif
    <div class="col-md-offset-4 col-md-4 well">
        {{ HTML::image('img/logo_white.png', '', array('class' => 'logo')) }}
        <!--<h4 class="form-signin-heading">Please sign in</h4>-->
        {{ Form::open(array('class' => 'form-signin', 'action' => 'loginUser')) }}
            <div class="form-group">
                {{ Form::email('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
                {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
            </div>

            {{ Form::submit('Log in', array('class'=>'btn btn-lg btn-primary btn-block'))}}
        {{ Form::close() }}
        <a href="/signup">First time?! Sign up</a>
    </div>


@stop