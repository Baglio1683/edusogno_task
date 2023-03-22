
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../style/style.css" />
    <script src="main.js"></script>
    <script src="https://kit.fontawesome.com/2013c63b7f.js" crossorigin="anonymous"></script>
    <title>Edusogno_forgot</title>
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
            <div class="row justify-content-center mb-3">
                <div class="col-4">
                    <h2>Reimposta la password</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4">
                    <form action="send-email.php" method="POST" class="rounded">
                        <label for="email" class="col-12">Inserisci l'email</label>
                        <input type="email" id="email" name="email" class="col-12 mb-4 input-line" placeholder="name@example.com" required />

                        <button type="submit" value="Invia" class="btn btn-primary col-12 mb-2">
                            Invia
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>