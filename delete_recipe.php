<?php
  $id = $_GET["id"];

  $conn = pg_connect("host=localhost dbname=recipes_db user=postgres password=postgres");

  pg_query($conn, "DELETE FROM recipes WHERE id=$id;");

  header("Location: http://localhost:8000/", TRUE, 301);
  exit();
?>
