<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DevChat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  active disabled" aria-current="page" href="myAccount.php">My accоunt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="http://localhost/pages/people.php">People</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:3000/" tabindex="-1" aria-disabled="true">General</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="private.php " tabindex="-1" aria-disabled="true">Private</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container">
    <img src="Zombi.jpg" alt="" class="rounded-circle">
    <?php
    session_start();

    $login = $_SESSION['email'];
    $admin = $_SESSION['admin'];

    if($admin){
      echo "<p>Администратор</p>";
    }
    echo "<p>Имя: " . $_SESSION["name"] . "</p>";
    echo "<p>Почта: " . $_SESSION["email"] . "</p>";
    ?>
    <form action="photo.php" method="post">
      <input type="file" class='btn btn-dark'>
      <input type="submit">
    </form>
  </main>

</body>

</html>