@extends('inner/innerlayout')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">User profile</h1>
</div>
<div class="container">
    <div class="col-md-offset-2">
        <h1>Welcome,</h1>
        <h3>{{Auth::user()->name}}</h3><br>
        <img src="{{Auth::user()->getProfile->profilePic}}">
        <p>{{Auth::user()->getProfile->about}}</p>
        {{--<p>Name: {{$user->name}}</p>--}}
        {{--<p>Surname: {{$user->surname}}</p>--}}
        {{--<p>e-mail: {{$user->email}}</p>--}}
        {{--<p>Birth date: {{$user->birth_date}}</p>--}}
        <a href="/editProfile">edit profile</a>
    </div>
</div>
@stop