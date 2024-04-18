<?php 
    include('./controllers/auth.php');
    include('./controllers/todo.php');

    session_start();   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/todo.css">
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./scripts/scripts.js"></script>
</head>

<body>
    <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            include('./components/navbar.php');
        }
    ?>

    <main>
        <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                if (isset($_GET['page'])) {
                    if ($_GET['page'] === 'todo') {
                        include('./pages/todo.php');
                    }
                } else {
                    include('./pages/todo.php');
                }
            } else {
                if (isset($_GET['page']) && $_GET['page'] === 'login') {
                    include('./pages/login.php');
                } else {
                    include('./pages/login.php');
                }
            }
        ?>
    </main>
</body>

</html>