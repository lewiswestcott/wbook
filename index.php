<?php $profilepic="SELECT* FROM `users` WHERE `UID` = '2'"; ?>

<?php

    session_start();

    if (!isset($_SESSION['UID']))
    {
        header("Location: ./login.php");
    }

    require("./res/php/connect.php");

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
                            <img src="https://proficon.stablenetwork.uk/api/identicon/<?= $_SESSION['UID'] ?>.svg" alt="Profile Pic"
                                style="max-width:100px;" />

                        </div>
                        <div class="col-7">
                            <h1 id="textmain" class="display-6"><?= htmlspecialchars($_SESSION['firstname'])?>  <?= htmlspecialchars($_SESSION['lastname']) ?> </h1>
                        </div>
                    </div>
                    <div class="col-12 mt-1">
                        <p class="lead" style="color: white!important;">Birthday📆: <?= $_SESSION['dob'] ?> </p>
                        <p class="lead" style="color: white!important;">Join Date🎂: <?= $_SESSION['joindate'] ?></p>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button-lg" class="btn loginbutton">Account Settings</button>
                            <button type="button-lg"  class="btn loginbutton"><a href="./res/php/logout.php">Logout</a></button>
                        </div>
                    </div>
                </div>

                <div class="col-7">
                    <div class="card mx-1 mt-1">
                        <form action="./res/php/newpost.php" method="post" >
                            <div class="card-body">
                                <h5 class="card-title">New Post</h5>
                                <div class="mb-3">
                                    <textarea class="form-control" name="post" id="post" rows="3"></textarea>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn loginbutton" type="submit">Post✅</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    

                    <?php
                        $sql = "SELECT * FROM `posts` ORDER BY `posts`.`PID` DESC";
                        $result = mysqli_query($connect, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $usercheck = "SELECT * FROM `users` WHERE `UID` = '".$row['UID']."'";
                                $userresult = mysqli_query($connect, $usercheck);
                                $userrow = mysqli_fetch_assoc($userresult);
                                echo '<div class="card mx-1 mt-1">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="https://proficon.stablenetwork.uk/api/identicon/'.$userrow['UID'].'.svg"
                                            alt="Profile Pic" style="max-width:25px;" /> '.htmlspecialchars($userrow['firstname']).' '.htmlspecialchars($userrow['lastname']).'</h5>
                                    <p class="card-text">'.htmlspecialchars($row['post']).'</p>
                                    <p class="card-text"><small class="text-muted">Post# '.$row['PID'].'</small></p>
                                </div>
                            </div>';
                            }
                        }




                    ?>

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