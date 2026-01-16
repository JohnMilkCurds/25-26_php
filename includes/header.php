<html>
<head>
    <title>Welcome to the App!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>PHP Example Application</h1>
        <p>All the Examples</p>
    </div>
    <nav class="navbar navbar-default navbar-expand-sm bg-success navbar-dark">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>

                <!-- Dropdown Start -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Drop 1</a></li>
                        <li><a class="dropdown-item" href="#">Drop 2</a></li>
                        <li><a class="dropdown-item" href="#">Drop 3</a></li>
                    </ul>

                </li>
                <!-- Dropdown End -->

            </ul>


        </div>
    </nav>
</div>
</body>