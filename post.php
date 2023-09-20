<?php include './conn.php';
// deve essere loggato
// controlli di privilegi 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com">

  </script>

</head>

<body>
  <form action="/sara/creaPost.php" method="POST">

    <input text="text" name="titolo" id="titolo" placeholder="titolo">
    <input type="text" name="desc" id="desc" placeholder="descrizione">
    <input type="hidden" name="location" value="/sara">

    <button type="submit">Crea</button>

  </form>
</body>

</html>