<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= ucfirst($page) ?></title>
    <link rel="stylesheet" href="<?= PATH ?>assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>
    <!-- <h1><?= ucfirst($page) ?> View</h1> -->

    <main>
        <?php include_once 'views/' . $page . '_view.php'; ?>
    </main>

    <footer></footer>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
    <script src="<?= PATH ?>assets/js/main.js"></script> 
  
</body>
</html>