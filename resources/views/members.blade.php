@extends('layouts.master')
@section('title','About Us')
@section('content')
<link rel="stylesheet" href="/css/members.css">
<main class="container">
    <div class="titles">
        <h1>MEMBERS</h1>
    </div>
    <hr>
    <div class="row">
        @foreach ($data as $row)
            <div class="profile-card">
                <div class="name">
                    <h1>{{$row->member_name}}</h1>
                </div>

                <div class="info">
                    <p>NPM : {{$row->npm}}</p>
                    <p>
                        @if ($row->jenis_kelamin == 'L')
                            <p>Gender : Man</p>
                        @else
                            <p>Gender : Woman</p>
                        @endif
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</main>

@endsection
