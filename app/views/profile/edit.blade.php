@extends('inner/innerlayout')

@section('content')
    <div class="container">
        <div class="col-md-3 col-md-offset-1">
            <br>
            <h4 id="title" style="text-align: center">Change Profile Picture</h4>
            <img src="{{asset('img/Anony.jpg')}}" id="profileImage" class="col-md-12">
            <div class="col-lg-12">&nbsp;</div>
            <input type="file" id="profilePicture" name="profilePicture" onchange="changeProfilePicture()">
            <br>
            <textarea class="form-control" id="aboutMe" placeholder="About you"></textarea>
            <br>
            <div id="mediaProgress" class="progress progress-striped active" style="display: none">
                <div id="progressBar" class="progress-bar progress-bar-primary"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    <span class="sr-only">45% Complete</span>
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