<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="style/style.css" />
  <script src="https://kit.fontawesome.com/2013c63b7f.js" crossorigin="anonymous"></script>
  <script src="main.js"></script>
  <title>Edusogno_Registration</title>
</head>

<body>
  <header class="d-flex align-items-center">
    <div class="container">
      <div>
        <img src="style/img/logo.svg" alt="" class="logo" />
      </div>
    </div>
  </header>
  <main>
    <div class="container pt-5">
      <div class="row justify-content-center mb-3">
        <div class="col-3">
          <h2>Crea il tuo account</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-4">

          <form action="php/register.php" method="POST" class="rounded" name="myForm">

            <label for="name" class="col-12">Inserisci il Nome</label>
            <input type="text" id="name" name="name" placeholder="Mario" class="col-12 mb-4 input-line" required>

            <label for="surname" class="col-12">Inserisci il Cognome</label>
            <input type="text" id="surname" name="surname" placeholder="Rossi" class="col-12 mb-2 input-line" required>

            <label for="email" class="col-12">Inserisci l'email</label>
            <input type="email" id="email" name="email" class="col-12 mb-4  input-line" placeholder="name@example.com" required>

            <div class="position-relative">
              <label for="password" class="col-12">Inserisci la password</label>
              <input type="password" id="password" name="password" placeholder="Scrivila qui" class="col-12 mb-4  input-line" required>
              <i class="fa-solid fa-eye position-absolute" style="right: 5px ; top: 30px " onclick="myFunction()"></i>
            </div>

            <button type="submit" value="Invia" class="btn btn-primary col-12 mb-2">Invia</button>

            <p>Hai già un account ? <a href="login.html">Accedi</a></p>
          </form>

          <div id="notification-error"></div>

        </div>
      </div>
    </div>
  </main>
</body>


<script>
  function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>


</html>