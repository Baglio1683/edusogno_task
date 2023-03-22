<?php

require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // controlla che l'email sia stata inviata
  if (empty($_POST['email'])) {
    echo "Devi inserire l'email.";
    exit;
  }

  //token di reset univoco
  $token = bin2hex(random_bytes(32));

  // costruisci l'URL di reset della password
  $reset_url = sprintf('https://www.example.com/reset-password.php?token=%s', $token);

  // costruisci l'email
  $to = $_POST['email'];
  $subject = 'Reset della password';
  $message = "Ciao,\n\nHai richiesto il reset della password. Clicca sul seguente link per impostare una nuova password:\n\n$reset_url\n\nSe non hai richiesto il reset della password, ignora questa email.\n\nGrazie,\nIl team di esempio";
  mail($to, $subject, $message); 

  // invia l'email
  if (mail($to, $subject, $message)) {
    echo "Un'email con il link di reset è stata inviata all'indirizzo $to.";
  } else {
    echo "C'è stato un errore nell'invio dell'email.";
  }
}
?>


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
    <title>Edusogno_send-email</title>
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
    </main>
</body>
</html>