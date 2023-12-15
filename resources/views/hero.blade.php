@extends('layouts.master')
@section('title', 'Hero')
@section('content')
<link rel="stylesheet" href="/css/hero.css">
<script src="/js/changecolortext.js"></script>
<main class="container">
    <div class="titles">
        <h1>{{ $data['hero'][0]['hero_name'] }}</h1>
    </div>
    <hr>

    <div class="row">

        <div class="hero-card">
            <div class="img">
                <img src="/image/{{ $data['hero'][0]['hero_name'] }}.webp" alt="hero avatar" width="300px">
            </div>

            <div class="info">
                <h2>Role</h2>
                <p>{{ $data['hero'][0]['hero_role'] }} </p>
                <h2>Specially</h2>
                <p>{{ $data['hero'][0]['hero_specially'] }} </p>
                <h2>Overview</h2>
                <div class="overview">
                <table>
                    <thead>
                        <tr>
                            <th>Durability</th>
                            <th>Offence</th>
                            <th>Ability</th>
                            <th>Difficulty</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="durability">{{ $data['hero'][0]['hero_overview']['hero_durability'] }}</td>
                            <td id="offence">{{ $data['hero'][0]['hero_overview']['hero_offence'] }}</td>
                            <td id="ability">{{ $data['hero'][0]['hero_overview']['hero_ability'] }}</td>
                            <td id="difficulty">{{ $data['hero'][0]['hero_overview']['hero_difficulty'] }}</td>
                        </tr>
                    </tbody>
                </table>


                </div>


            </div>
        </div>

    </div>
</main>

@endsection
