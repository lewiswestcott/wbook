<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link href="./res/css/all.css" rel="stylesheet">
    <link href="./res/css/loginform.css" rel="stylesheet">

    <title>wbook</title>

    
</head>

<body class="body">
    <div class="container px-5">

        <section>
            <nav class="navbar navbar-light ">
                <div class="container">
                    <p class="navbartext" href="#">
                        wbook
                    </p>
                </div>


            </nav>
        </section>

        <section id="mainhomepage">
            <div class="row ">




                <div class="col-5 ">
                    <img src="./res/img/1.jpg" class="img-fluid" alt="a buidling">
                </div>
                <div class="col-7 ">
                    <div class="card mb-2 ">
                        <div class="card-body">
                            <p class="tri">Welcome! We are glad that you're here! Fill in the fields below and we'll create your account.</p>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form action="./res/php/registeruser.php" method="post">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="first">
                                            <p class="secondary mx-1">First Name</p>
                                        </label>
                                        <input type="text" class="form-control" id="first"
                                            aria-describedby="first" placeholder="First Name">

                                    </div>
                                    <div class="form-group col-6">
                                        <label for="last">
                                            <p class="secondary mx-1">Last Name</p>
                                        </label>
                                        <input type="text" class="form-control" id="last"
                                            aria-describedby="last" placeholder="Last Name">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        <p class="secondary mx-1">Email address</p>
                                    </label>
                                    <input type="email" class="form-control" id="email"
                                        aria-describedby="emailHelp" placeholder="Enter email">

                                </div>
                                <div class="form-group">
                                    <label for="password">
                                        <p class="secondary mx-1">Password</p>
                                    </label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Password">
                                </div>

                                <div class="row">
                                    <div class="col-6 mx-auto">
                                        <button type="submit" class="btn-lg loginbutton mt-3 w-100">Enter!</button>
                                    </div>
                                    
                                </div>
                        </div>

                    </div>
                </div>
        </section>

        <footer>
            <div class="border-top mt-2">
                <div class="container ">
                    <p class="navbartext mx-auto text-center" href="#">
                        westcott book &trade;
                    </p>
                    <p class="tri mx-auto text-center">Social Media.</p>
                </div>
            </div>

        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


</body>

</html>