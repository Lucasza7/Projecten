<?php
// Start or resume the session
session_start();

// Check if the user is logged in
if(isset($_SESSION['user_id'])) {
    // If user is logged in, redirect to the home page
    header("Location: pages/home.php");
    exit;
}
?>

<?php include_once('includes/header.php'); ?>

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to ZZP Project</h1>
        <p class="lead">Manage your projects and hours effectively with our platform.</p>
        <hr class="my-4">
        <p>Are you ready to get started?</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="pages/home.php" role="button">Explore</a>
            <a class="btn btn-secondary btn-lg" href="pages/login.php" role="button">Login</a>
        </p>
    </div>
</div>

<?php include_once('includes/footer.php'); ?>
