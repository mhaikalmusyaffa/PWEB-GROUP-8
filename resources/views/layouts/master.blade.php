<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&family=Rubik+Glitch&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/js/sidebar.js"></script>
    <script src="/js/changetheme.js"></script>
    <title>@yield('title')</title>
</head>
<body>

    <header>
        <nav>
            <div class="menubar">
                <i class="fa fa-bars" onclick="openBar()"></i>
            </div>
            <div id="sidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeBar()">&times;</a>
                <div id="toogle">
                    <i class="indicator" ></i>
                </div>
                <hr>
                <a href="/dashboard">Dashboard</a>
                @auth
                <a href="/logout">Logout</a>
            @else
                <a href="/login">Login</a>
            @endauth

              </div>
              <div class="category">

                  <p class="titlecard">Mobile
                      Legends :
                      Bang-Bang
                    </p>
                    <div class="pages">
                      <a href="/">Home</a>
                      <a href="/heroes">Heroes</a>
                      <a href="/members">Members</a></p>
                  </div>
              </div>


        </nav>

    </header>

    @yield('content')

    <hr>

    <footer>

        <div class="creator">
            <h2>Project Created By</h2>
            <h3>Group 8</h3>
            <div class="creator-body">

                <div class="creator-card">
                    <div class="name">
                        <h4>Danar Adhytia Wibowo</h4>
                    </div>
                    <div class="info">
                        <p>NPM : 50421325</p>
                        <p>Gender : Man</p>
                    </div>
                </div>

                <div class="creator-card">
                    <div class="name">
                        <h4>Dheril Ismail Octavians</h4>
                    </div>
                    <div class="info">
                        <p>NPM : 50421364</p>
                        <p>Gender : Man</p>
                    </div>
                </div>

                <div class="creator-card">
                    <div class="name">
                        <h4>Muhammad Haikal Musyaffa
                        </h4>
                    </div>
                    <div class="info">
                        <p>NPM : 50421978</p>
                        <p>Gender : Man</p>
                    </div>
                </div>
            </div>


        </div>
    </footer>
</body>
</html>
