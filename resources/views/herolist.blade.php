@extends('layouts.master')
@section('title','Hero List')
@section('content')
<link rel="stylesheet" href="/css/herolist.css">
<script src="/js/changeheropage.js"></script>
<main class="container">
    <div class="titles">
        <h1>List of Mobile Legends Heroes</h1>
    </div>

    <hr>
    <form class="searchform" action="/heroes" method="GET">
        <h3>Search Hero</h3>
        <div class="search">
            <input type="search" name="search">
        </div>
    </form>
    <div class="row">
        @foreach ($data['hero'] as $row)
        <div class="hero-card" id="hero-card" onclick="changepage({{$row['hero_id']}})">
            <div class="img">
                <img src="/image/{{$row['hero_name']}}.webp" alt="hero avatar" width="300px">
            </div>
            <div class="name">
                <a href="/heroes/{{$row['hero_id']}}">{{$row['hero_name']}}</a>
            </div>
            <div class="info">
                <p>Role : {{$row['hero_role']}} </p>
                <p>Specially : {{$row['hero_specially']}} </p>
            </div>
        </div>
        @endforeach
    </div>
</main>

@endsection
