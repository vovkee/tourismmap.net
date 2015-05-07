@extends('inner/innerlayout')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">User profile</h1>
</div>
<div class="container">
    <br><br>
    <div class="container-fluid well span6" style="  margin-left: 155px; margin-top: -66px; margin-right: 10px;">
        <div class="row-fluid">
            <div class="span2" >
                <img src="{{Image::path(Auth::user()->profile->profilePic, 'resizeCrop, 200,200')}}" class="img-circle">
            </div>

            <div class="span8">
                <h3>{{Auth::user()->name}} {{Auth::user()->surname}}</h3>
                <h6>Email: {{Auth::user()->email}}</h6>
                <h6>Birth date: {{Auth::user()->birth_date}}</h6>
                <h6>AboutMe: {{Auth::user()->profile->about}}</h6>
            </div>

            <div class="span2">
                <div class="btn-group">
                    <a href="/editProfile"><span class="icon-wrench"></span> edit profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


{{--<div class="col-md-offset-2">--}}
    {{--<h4>Your name: {{Auth::user()->name}}</h4>--}}
    {{--<h3>Your surname: {{Auth::user()->surname}}</h3>--}}
    {{--<h3>Your name: {{Auth::user()->name}}</h3><br>--}}
    {{--<img src="{{Image::path(Auth::user()->profile->profilePic, 'resizeCrop, 200,200')}}">--}}
    {{--<p>{{Auth::user()->profile->about}}</p>--}}
    {{--<p>Name: {{$user->name}}</p>--}}
    {{--<p>Surname: {{$user->surname}}</p>--}}
    {{--<p>e-mail: {{$user->email}}</p>--}}
    {{--<p>Birth date: {{$user->birth_date}}</p>--}}
    {{--<a href="/editProfile">edit profile</a>--}}
{{--</div>--}}