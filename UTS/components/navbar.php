<?php
    $user_name = $_SESSION['user_name'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'Logout') {
        logout();
    }
?>

<header class="container">
    <section class="navbar">
        <p class="navbar-title">Todo App</p>
        <ul class="navbar-left-items">
            <li>Welcome, <?php echo $user_name; ?></li>
        </ul>
        <ul class="navbar-right-items">
            <li>
                <a href="index.php?page=todo">Todo</a>
            </li>
            <li>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <input type="submit" name="action" value="Logout" class="btn btn-danger btn-sm">
                </form>
            </li>
        </ul>
    </section>
</header>