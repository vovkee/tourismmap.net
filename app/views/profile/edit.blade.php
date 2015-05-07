@extends('inner/innerlayout')

@section('content')
    <div class="container">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Edit User profile</h1>
        </div>
        <div class="col-md-3 col-md-offset-2">
            <div class="span2" >
                <img src="{{Image::path(Auth::user()->profile->profilePic, 'resizeCrop, 200,200')}}" id="profileImage" class="img-circle col-md-12">
            </div>
            {{--<img src="{{Image::path(Auth::user()->profile->profilePic, 'resizeCrop, 200,200')}}" id="profileImage" class="col-md-12">--}}
            <div class="col-lg-12">&nbsp;</div>
            <input type="file" id="profilePicture" name="profilePicture" onchange="changeProfilePicture()">
            <br>
            <div class="span8">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" id="name" value="{{Auth::user()->name}}">

                    <label for="surname">Surname</label>
                    <input class="form-control" id="surname" value="{{Auth::user()->surname}}">

                    <label for="email">Email</label>
                    <input class="form-control" id="email" value="{{Auth::user()->email}}">

                    <label class="control-label">Birth date:</label>
                    <input id="birth" class="form-control" type="date" value="{{Auth::user()->birth_date}}">

                    <label>Write something about yourself:</label>
                    <textarea class="form-control" id="aboutMe" placeholder="About you"></textarea>
                </div>
                <div id="mediaProgress" class="progress progress-striped active" style="display: none">
                    <div id="progressBar" class="progress-bar progress-bar-primary"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        <span class="sr-only">45% Complete</span>
                    </div>
                </div>
            </div>
            <button type="button" id="uploadButton" class="btn btn-primary disabled pull-right" onclick="uploadProfilePicture()">Upload</button>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="../../js/editProfile.js"></script>
@stop