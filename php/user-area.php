<?php

session_start();

if (!isset($_SESSION['logged']) || $_SESSION['logged'] != true) {
    header("location:login.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../style/style.css" />
    <title>Area Utente</title>

</head>

<body>

    <header class="d-flex align-items-center">
        <div class="container">
            <div>
                <img src="../style/img/logo.svg" alt="" class="logo" />
            </div>
        </div>
    </header>




    <main>
        <div class="container pt-5">
            <div class="row justify-content-center mb-5">
                <div class="col-6 text-center">

                    <h2>
                        <?php

                        echo 'Ciao ' . $_SESSION['name'] . ' ecco i tuoi eventi';

                        ?>
                    </h2>

                </div>
            </div>

            <div class="row justify-content-between">
                <div class="card col-3">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title col-12">Nome Evento</h5>
                            <p class="card-text col-12">15-10-2022 15:00</p>
                            <a href="#" class="btn btn-primary col-12">JOIN</a>
                        </div>
                    </div>
                </div>

                <div class="card col-3">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title col-12">Nome Evento</h5>
                            <p class="card-text col-12">15-10-2022 15:00</p>
                            <a href="#" class="btn btn-primary col-12">JOIN</a>
                        </div>
                    </div>
                </div>

                <div class="card col-3">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title col-12">Nome Evento</h5>
                            <p class="card-text col-12">15-10-2022 15:00</p>
                            <a href="#" class="btn btn-primary col-12">JOIN</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>



</body>

</html>