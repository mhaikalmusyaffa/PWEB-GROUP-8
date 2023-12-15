<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="/css/login.css">

</head>
<body>
    <main class="container">
        <div class="card">
            <div class="card-body">

                <form action="/registeruser" class="form" method="post">
                    @csrf
                  <h1 class="login">Register</h1>

                  <h2>Nama</h2>
                  <input
                    name="name"
                    type="text"
                    placeholder="your name..."
                    class="inpt"
                    required
                  />

                  <h2>Email</h2>
                  <input
                    name="email"
                    type="email"
                    placeholder="your email..."
                    class="inpt"
                    required
                  />
                  @error('npm')
                  <div class="alert-danger"> {{$message}} </div>
                  @enderror

                  <h2>Password</h2>
                  <input
                    name="password"
                    type="password"
                    placeholder="password..."
                    class="inpt"
                    required
                  />


                  <div class="link">

                      <button class="login-btn">Sign Up</button>
                      <a href="/login">Log In</a>
                  </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
