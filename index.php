<?php include './conn.php' ?>

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
  <?php include_once('./components/header.php'); ?>

  <section>
    <h3>Lista dei post</h3>
    <div class="s">

      <?php
      $response = $conn->query("select titolo, descrizione from post");

      while ($post = $response->fetch_assoc()) {
      ?>

        <div class="">
          <p>titolo: <?= $post['titolo'] ?> </p>
          <p>desc: <?= $post['descrizione'] ?>
          <p>
        </div>

      <?php } ?>

    </div>
  </section>

</body>



</html>