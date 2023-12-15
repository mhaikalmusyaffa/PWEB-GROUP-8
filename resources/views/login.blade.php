<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">

</head>
<body>
    <main class="container">
        <div class="card">
            <div class="card-body">

                <form action="/loginproc" class="form" method="post">
                    @csrf
                  <h1 class="login">Login</h1>
 
                  <h2>Email</h2>
                  <input
                    name="email"
                    type="email"
                    placeholder="email..."
                    class="inpt"
                    required
                  />

                  <h2>Password</h2>
                  <input
                    name="password"
                    type="password"
                    placeholder="password..."
                    class="inpt"
                    required
                  />
                    <div class="link">


                  <button class="login-btn">Login</button>
                  <a href="/register">Register Here</a>
                    </div>


                </form>
            </div>
        </div>
    </main>
</body>
</html>
