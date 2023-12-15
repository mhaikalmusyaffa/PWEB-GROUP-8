<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Legends : Bang-Bang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&family=Rubik+Glitch&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/addmember.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/js/sidebar.js"></script>
    <title>Add Member</title>

</head>
<body>
    <main class="container">


        <div class="tbl">
            <div class="card">
                <h1>Add a New Member </h1>
                <div class="card-body">
                    <form action="/insertdata" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="inpt">
                            <h2>NPM</h2>
                            <input type="text" name="npm" id="npm" placeholder="npm...">
                        </div>
                        @error('npm')
                            <div class="alert-danger"> {{$message}} </div>
                        @enderror

                        <div class="inpt" >
                            <h2 for="nama">Name</h2>
                            <input type="text" name="member_name" id="nama" placeholder="name...">
                        </div>
                        @error('member_name')
                            <div class="alert-danger"> {{$message}} </div>
                        @enderror

                        <div class="inpt">
                            <h2 for="jkel">Gender</h2>
                            <select name="jenis_kelamin" id="jkel">
                                <option disabled selected hidden>Choose Gender</option>
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
