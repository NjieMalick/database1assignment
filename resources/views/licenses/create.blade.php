<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Database Project UTG | License</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">Manufacturers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">Productkeys</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">License Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">Devices</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <br>
            <br>
            <h2 style="text-align: center " class="mt-5">Database Systems I</h2>
            <h4 style="text-align: center " class="mt-5">Software License Manager</h4>
            <br>

            <form method="post" action="{{ route('licenses.store') }}">
                {{ csrf_field() }}

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Warning!</strong> Please check your fields<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="form-group">
                    <label for="topic">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="topic">Version</label>
                    <input type="text" class="form-control" name="version">
                </div>
                <div class="form-group">
                    <label for="topic">Customer</label>
                    <p class="pull-right" style="color:red;"><a href="{{ route('customers.create') }}">Add</a></p>
                    <select name="customer_id" class="form-control">
                        @foreach($customers as $customer)
                        <option value="{{$customer->id}}" @if ($loop->last) selected @endif>{{$customer->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="topic">Product Key</label>
                    <select name="product_key_id" class="form-control">
                        @foreach($tokens as $token)
                        <!-- <option value="{{ $token->id }}">{{$token->toke}}</option> -->
                        <option value="{{$token->id}}" @if ($loop->last) selected @endif>{{$token->toke}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="topic">Category</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="topic">Manufacturer</label>
                    <select name="manufacturer_id" class="form-control">
                        @foreach($manufacturers as $manufacturer)
                        <option value="{{ $manufacturer->id }}">{{$manufacturer->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="topic">Activation Date</label>
                    <input type="date" class="form-control" placeholder="Enter License Activation Date" name="activation_date">
                </div>
                <div class="form-group">
                    <label for="topic">Expiry Date</label>
                    <input type="date" class="form-control" placeholder="Enter License Expiry Date" name="expiry_date">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="3" placeholer="Enter description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="topic">Status</label>
                    <select name="status_id" class="form-control">
                        @foreach($statuses as $status)
                        <option value="{{ $status->id }}">{{$status->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">By Malick Njie & Mammie Sarr / UTG</span>
        </div>
    </footer>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>