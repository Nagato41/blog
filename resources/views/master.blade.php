<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Nutrients Food</title>
    </head>
    <body>
        @section('topbar')
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="/">
                    Nutrition 
                </a>
            </nav>
        @show

        <div class="container-fluid">
            <div class="row">
                        @section('sidebar')
                    <nav class="col-sm-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="food">
                        Food
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="patients">
                        Patients
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history">
                        History
                        </a>
                    </li>
                    </ul>
                </div>
                </nav> 
                    @show
                <div class="col-md-8">
                    @yield('content1')
                </div>
                <div class="col-md-2">
                    @yield('content2')
                </div>
                <div class="col-md-2">
                    @yield('content3')
                </div>
            </div>
        </div>
          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>