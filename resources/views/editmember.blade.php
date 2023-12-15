<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&family=Rubik+Glitch&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/editmember.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/js/sidebar.js"></script>
    <title>Add Member</title>

</head>
<body>
    <main class="container">


        <div class="tbl">
            <div class="card">
                <h1>Edit Member</h1>
                <div class="card-body">
                    <form action="/updatedata/{{$data->npm}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="inpt">
                            <h2 for="npm">NPM</h2>
                            <input type="text" name="npm" id="npm" placeholder="npm..." value="{{$data->npm}}">
                        </div>
                        @error('npm')
                        <div class="alert-danger"> {{$message}} </div>
                        @enderror

                        <div class="inpt">
                            <h2 for="nama">Name</h2>
                            <input type="text" name="member_name" id="nama" placeholder="name..." value="{{$data->member_name}}">
                        </div>
                        @error('member_name')
                        <div class="alert-danger"> {{$message}} </div>
                        @enderror

                        <div  class="inpt">
                            <h2 for="jkel">Gender</h2>
                            <select name="jenis_kelamin" id="jkel">

                                    @if ($data->jenis_kelamin == 'L')
                                    <option selected hidden value="L">Man</option>
                                    @else
                                    <option selected hidden value="P">Woman</option>
                                    @endif

                                <option value="L">Man</option>
                                <option value="P">Woman</option>
                            </select>
                        </div>
                        @error('jenis_kelamin')
                            <div class="alert-danger"> {{$message}} </div>
                        @enderror
                        <button class="sbmt firm" type="submit">Confirm</button>
                        <a href="/dashboard" class="sbmt cancel" type="button">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </main>


</body>
</html>
