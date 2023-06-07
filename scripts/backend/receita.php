<?php
  $title = $_POST["titulo"];
  $description = $_POST["descricao"];
  $conn = pg_connect("host=localhost dbname=recipes_db user=postgres password=postgres");

  pg_query($conn, "INSERT INTO recipes (title, description) VALUES ('$title', '$description');");

  $id = pg_fetch_result(pg_query($conn, "SELECT MAX(id) FROM recipes"), 0, 0);
  header("Location: http://localhost:8000/recipes.php?id=$id", TRUE, 301);
  exit();
?>
