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
            <a class="nav-link" aria-current="page" href="myAccount.php">My accоunt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active disabled" aria-current="page" href="http://localhost/pages/people.html">People</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:3000/" tabindex="-1" aria-disabled="true">General</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="private.php" tabindex="-1" aria-disabled="true">Private</a>
          </li>
        </ul>
      </div>
    </div>r
  </nav>

  <main>
    <div class="container">
      <?php
      session_start();
        $mysql = new mysqli('localhost', 'root', '', 'devChat');
        $sql = "SELECT * FROM users";

        $admin = $_SESSION['admin'];
      
        if($result = mysqli_query($mysql, $sql)){
          $rowsCount = mysqli_num_rows($result);
          echo "<form action='checkbox-form.php' method='post'>";
          foreach($result as $row){
            echo "<p>".$row["name"]." <input type='checkbox' name='nameUser[]'>"."</p>";
          }
        }else{
          echo "Что-то не так";
        }
        echo "<input type='submit' name='formSubmit' value='Submit' />";
        echo "</form>";
        echo "<br>Всего людей: ".$rowsCount;
      ?>
      <div id="selectedPeople"></div>
      <br>
      <input type="button" value="Добавить в закрытый чат" class="btn btn-dark">
      <input type="button" id="select" value="Выбрать всех" class="btn btn-dark" onclick="selectPeople()">
      <input type="button" id="selectNo" value="Снять выбор" class="btn btn-dark" disabled onclick="selectPeopleNo()">

      <?php
        if($admin){
            echo " <input type='button' value='Удалить пользователя' class='btn btn-dark'>";
          }
        
      ?>

    <script src="script.js"></script>
    <script>
      const mysql = require("mysql2");
  
    const connection = mysql.createConnection({
      host: "localhost",
      user: "root",
     database: "usersdb",
     password: "пароль_от_сервера"
  });
    </script>
    </div>
    
  </main>

</body>

</html>
