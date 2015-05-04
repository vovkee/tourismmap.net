@extends('inner/innerlayout')

@section('content')
    {{ HTML::script('js/jquery/jquery.js') }}
    {{ HTML::script('js/jquery/jquery-jvectormap-2.0.2.min.js') }}
    {{ HTML::script('js/jquery/jquery-jvectormap-europe-mill-en.js') }}
    {{ HTML::script('js/visited_data.js') }}
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Your Map</h1>
</div>
<div class="container">
    <div class="ourMap">
        <div class="col-md-offset-2">
            <div id="map" style="width: 600px; height: 500px"></div>
            {{ HTML::script('js/map.js') }}
        </div>
    </div>
</div>
@stop