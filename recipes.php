<?php
  $id = $_GET["id"];
  $conn = pg_connect("host=localhost dbname=recipes_db user=postgres password=postgres");
  $result = pg_query($conn, "SELECT * FROM recipes WHERE id = $id LIMIT 1");
  $row = pg_fetch_assoc($result);
  $title = $row["title"];
  $description = $row["description"];
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Receitas do Dezão</title>
    <body>
        <div class="container">
            <header>
                <h1>Receitas do Dezão</h1>
            </header>
            <main class="main">
                <nav role="navigation" class="menu">
                    <ul>
                        <li>
                            <a class="menu-link" href="#">Home</a>
                        </li>
                        <li>
                            <a class="menu-link" href="receita.html">Receitas</a>
                        </li>
                        <li>
                            <a class="menu-link" href="#">Contato</a>
                        </li>
                    </ul>
                </nav>
                <div class="recipes">
                    <div class="recipe">
                      <h4><?php echo $title ?></h4>
                      <p><?php echo $description ?></p>
                    </div>
                </div>
            </main>
            <footer>
                <p>&copy; 2023 Receitas do Dezão</p>
            </footer>
        </div>
    </body>
</html>
