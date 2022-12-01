<?php $profilepic="SELECT* FROM `users` WHERE `UID` = '2'"; ?>

<?php

    session_start();

    if (!isset($_SESSION['UID']))
    {
        header("Location: ./login.php");
    }

?>

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
            <div class="row">

                <div class="col-5">
                    <div class="row">
                        <div class="col-3">
                            <img src="https://proficon.stablenetwork.uk/api/identicon/2.svg" alt="Profile Pic"
                                style="max-width:100px;" />

                        </div>
                        <div class="col-7">
                            <h1 id="textmain" class="display-6"><?php $_SESSION['firstname']?>  <?php $_SESSION['lastname'] ?> </h1>
                        </div>
                    </div>
                    <div class="col-12 mt-1">
                        <p class="lead" style="color: white!important;">Birthday📆: <?php $_SESSION['dob'] ?> </p>
                        <p class="lead" style="color: white!important;">Join Date🎂: <?php $_SESSION['joindate'] ?></p>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button-lg" class="btn loginbutton">Account Settings</button>
                            <button type="button-lg" class="btn loginbutton">Logout</button>
                        </div>
                    </div>
                </div>

                <div class="col-7">
                    <div class="card mx-1 mt-1">
                        <form>
                            <div class="card-body">
                                <h5 class="card-title">New Post</h5>
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn loginbutton" type="button">Post✅</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card mx-1 mt-1">
                        <div class="card-body">
                            <h5 class="card-title"><img src="https://proficon.stablenetwork.uk/api/identicon/2.svg"
                                    alt="Profile Pic" style="max-width:25px;" /> Lewis Westcott</h5>
                            <p class="card-text">I think the functionality is excellent. I recieved no help whatsoever.</p>
                            <p class="card-text"><small class="text-muted">Posted 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card mx-1 mt-1">
                        <div class="card-body">
                            <h5 class="card-title"><img src="https://proficon.stablenetwork.uk/api/identicon/jackkimmins.svg"
                                    alt="Profile Pic" style="max-width:25px;" /> Jack Kimmins</h5>
                            <p class="card-text">I love fuckbook!!😀</p>
                            <p class="card-text"><small class="text-muted">Posted 1 day ago</small></p>
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