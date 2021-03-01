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
        </style>
    </head>
    <body>
        <div class="card text-center">
            <div class="card-header bg-white">
                <div class="d-flex justify-content-between">
                    <!-- logo -->
                    <h2><a href="/index" class="text-dark">G-Commerce</a></h2>
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
                    <ul class="nav justify-content-end">
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
                    </ul>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>