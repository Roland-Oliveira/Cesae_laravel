<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')

    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--js-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
</head>

<body>

    <style>
        body {
            background-color: #707070;

        }

        h1{
            color: #fff;
        }

        .rodape{
            text-align: center;
            color: #fff;
            background-color: rgb(34, 34, 34);
            padding: 20px;
            position: fixed;
width: 100%;
  bottom: 0;

        }

    </style>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"> <span class="text-danger">Lara</span>vel </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('showusers')}}">Todos os utilizadores</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('allTasks')}}">Todas as tarefas</a>
                  </li>

                  <li class="nav-item">
                    <a href="{{route('adduser')}}" class="nav-link">Adcionar Users</a>
                  </li>

                  <li class="nav-item">
                    <a href="{{route('add_task')}}" class="nav-link">Adcionar Task</a>
                  </li>


                </ul>

              </div>
            </div>
          </nav>
    </header>
















    @yield('content')

    <footer>
        <div class="rodape">Copyright 2023 ©</div>
    </footer>
</body>
</html>
