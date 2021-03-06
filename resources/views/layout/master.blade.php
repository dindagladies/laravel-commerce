<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Icon -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>G-Commerce</title>
        <style>
        .hover:hover {
            box-shadow : 10px 10px 9px -5px rgb(0 0 0 / 10%);
            cursor : pointer;
        }
        #disabled{
            pointer-events: none;
            cursor : default;
        }
        </style>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="card text-center">
            <div class="card-header bg-white">
                <div class="d-flex justify-content-between">
                    <!-- logo -->
                    <h2><a href="/" class="text-dark">G-Commerce</a></h2>
                    <!-- search -->
                    <div style="width:600px">
                        <div class="input-group" style="width:100%">
                            <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="input-group-append" style="font-size:18px;">
                                <button class="btn btn-sm btn-warning" type="button">
                                    <i class="material-icons text-white" style="font-size:18px;" >search</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- button -->
                    <!-- <ul class="nav justify-content-end">
                        <li class="nav-item mr-2">
                            <a href="/cart" class="btn btn-md btn-warning">
                                <i class="material-icons text-white" style="font-size:18px;" >add_shopping_cart</i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="btn btn-md btn-warning text-white">
                                Login / Register
                            </a>
                        </li>
                    </ul> -->
                    <!-- Authentication Links -->
                    <ul class="nav justify-content-end">
                        @if (Auth::guest())
                            <li class="nav-item mr-2">
                                <a href="{{ route('login') }}" class="btn btn-md btn-warning text-white">
                                    Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="btn btn-md btn-danger text-white">
                                    Register
                                </a>
                            </li>
                        @else
                            <li class="nav-item mr-2">
                                <a href="/cart" class="btn btn-md btn-warning">
                                    <i class="material-icons text-white" style="font-size:18px;" >add_shopping_cart</i>
                                </a>
                            </li>
                            <div class="dropdown">
                                <a href="#" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item mr-4" href="/user/profile">
                                        <i class="material-icons mb-1" style="font-size:18px;" >settings</i> Settings
                                    </a>
                                    <a class="dropdown-item mr-4" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="material-icons" style="font-size:18px;" >logout</i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- konten -->
            <div class="bg-light p-3">
                @yield('konten')
            </div>
            <!-- /konten -->
            <div class="card-footer text-muted">
                Support by bootstrap
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>