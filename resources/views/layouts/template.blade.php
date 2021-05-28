<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/font-awsome.min.css')}}" rel="stylesheet" />
    <!-- Material Kit CSS -->
    <link href="{{asset('css/material-dashboard.min.css')}}" rel="stylesheet" />
    <link href="{{asset('js/jquery.js')}}" rel="text/javascript" />
    <link href="{{asset('js/material-dashboard.min.js')}}" rel="text/javascript" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-background-color="white">
            <div class="logo">
                <a href="#" class="simple-text logo-mini">

                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">

                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item @yield('home')">
                        <a class="nav-link" href="{{route('home')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item @yield('clienteform')">
                        <a class="nav-link" href="{{route('cliente')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Novo Cliente</p>
                        </a>
                    </li>
                    <li class="nav-item @yield('clientetable')">
                        <a class="nav-link" href="{{route('tableClientes')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Lista de Clientes</p>
                        </a>
                    </li>
                    <li class="nav-item @yield('propostaform')">
                        <a class="nav-link" href="{{route('proposta')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Cadastrar Proposta</p>
                        </a>
                    </li>
                    <li class="nav-item @yield('propostatable')">
                        <a class="nav-link" href="{{route('tablePropostas')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Propostas Cadastradas</p>
                        </a>
                    </li>
                    <li class="nav-item @yield('usuario')">
                        <a class="nav-link" href="{{route('usuario')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Criar Usuário</p>
                        </a>
                    </li>
                    <!-- your sidebar here -->
                </ul>
            </div>
        </div>
        <!-- Navbar -->
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="{{route('home')}}">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <!-- your navbar here -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
                    <!-- your footer here -->
                </div>
            </footer>
        </div>
    </div>
</body>

</html>