@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://freeiconshop.com/wp-content/uploads/edd/code-solid.png" class="rounded-circle">
        </div>

        <div class = "col-9 pt-5">
            
                <div class="d-flex justify-content-between align-items">
                    <h1> {{ $user->profile->title ?? "not available" }}</h1>
                
                    <a href="#">Add new post</a>
                </div>

                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>

                <div class="pt-4 font-weight-bold" >CodePage</div>
                <div>{{ $user->profiel->description  ?? "not available" }}</div>
                <div><a href="#">{{ $user->profiel->url ?? "not available" }}</a></div>


        </div>


        <div class="row pt-5">
            <div class="col-4">
            <img src="https://cdn.hasselblad.com/hasselblad-com/6cb604081ef3086569319ddb5adcae66298a28c5_x1d-ii-sample-01-web.jpg?auto=format&q=97" class="w-100"></div>
            </div>
            <div class="col-4">
            <img src="https://cdn.hasselblad.com/hasselblad-com/6cb604081ef3086569319ddb5adcae66298a28c5_x1d-ii-sample-01-web.jpg?auto=format&q=97" class="w-100"></div>
            </div>
            <div class="col-4">
            <img src="https://cdn.hasselblad.com/hasselblad-com/6cb604081ef3086569319ddb5adcae66298a28c5_x1d-ii-sample-01-web.jpg?auto=format&q=97" class="w-100"></div>
            </div>
        
    </div>
</div>
@endsection
