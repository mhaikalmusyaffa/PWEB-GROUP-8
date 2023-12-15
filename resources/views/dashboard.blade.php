@extends('layouts.master')
@section('title', 'dashboard')
@section('content')

<link rel="stylesheet" href="/css/dashboard.css">
    <main class="container">

        <h1>Hello, {{Str::upper(Auth::user()->name)}}!</h1>
        <hr class="hundo">
        <a href="/addmember" class="btn add">Add +</a>

        <div class="row">
            <h2>Data of Members</h2>
            @if ($message = Session::get('success'))
                <div class="alert" role='alert'>
                    {{$message}}
                </div>
                @elseif ($message = Session::get('editsuccess'))
                <div class="alert" role='alert'>
                    {{$message}}
                </div>
                @elseif ($message = Session::get('deletedsuccess'))
                <div class="alert" role='alert'>
                    {{$message}}
                </div>
            @endif

            <table>
                <thead>
                    <tr>
                        <th>NPM</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Action</th>
                      </tr>
                </thead>

                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td><p>{{$row->npm}}</p></td>
                        <td><p>{{$row->member_name}}</p></td>
                        <td>

                            @if ($row->jenis_kelamin == 'L')
                                <p>Man</p>
                            @else
                                <p>Woman</p>
                            @endif


                        </td>
                        <td>
                          <a href="/viewdata/{{$row->npm}}" class="btn edit">Edit</a>
                          <a href="/deletedata/{{$row->npm}}" class="btn delete" onclick="return confirm('Are You Sure Want to Delete {{Str::upper($row->member_name)}} ')">Delete</a>
                      </td>
                    </tr>

                    @endforeach

                </tbody>

              </table>
        </div>
    </main>
    @endsection
