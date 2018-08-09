<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?=$title?></title>
</head>
<body>
  <nav>
    <header>
      <h1>Internet joke database</h1>
    </header>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="connection.php">Jokes List</a></li>
      <li><a href="addjoke.php">Add a new joke</a></li>
    </ul>
    <main>
      <?=$output?>
    </main>
    <footer>
      &copy;IJDB 2017;
    </footer>
</body>
</html>
