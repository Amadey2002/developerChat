<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="styles/private.css"> -->
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
            <a class="nav-link" aria-current="page" href="myAccount.php">My accоunt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="http://localhost/pages/people.php">People</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:3000/" tabindex="-1" aria-disabled="true">General</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled active" href="private.php" tabindex="-1" aria-disabled="true">Private</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container">
    <div class="row gy-5">
      <?php
      session_start();
      $login  = $_SESSION['name'];
      $mysql = new mysqli('localhost', 'root', '', 'devChat');
      // echo $login;

      $result1 = $mysql->query("SELECT `name` FROM `private` WHERE `name` = '$login'");
      $user1 = $result1->fetch_assoc(); // Конвертируем в массив\
      if (isset($user1)) {
        echo "<a href='http://localhost:3001' target='blank' class='d-block p-2 bg-dark text-white'>Чат 1</a><br>";
        echo "<a href='http://localhost:3001' target='blank' class='d-block p-2 bg-dark text-white'>Чат 2</a>";
        echo "<a href='http://localhost:3001' target='blank' class='d-block p-2 bg-dark text-white'>Чат 3</a>";
        echo "<a href='http://localhost:3001' target='blank' class='d-block p-2 bg-dark text-white'>Чат 4</a>";
        echo "<a href='http://localhost:3001' target='blank' class='d-block p-2 bg-dark text-white  '>Чат 5</a>";
      }
      ?>
    </div>
    <div>
      <a type="submit" href="#" class="btn btn-dark fixed-bottom container">Создать приватный чат</a>
    </div>
  </main>
</body>

</html>