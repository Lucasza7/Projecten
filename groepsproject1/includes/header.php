<?php
// Check if a session is not already active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['username']);

// Define navigation links
$navLinks = array(
    array('url' => '/zzp_project/pages/home.php', 'text' => 'Home'),
    array('url' => '/zzp_project/pages/projects.php', 'text' => 'Projects'),
    array('url' => '/zzp_project/pages/add_project.php', 'text' => 'Create'),
);

// Add login and register links if not logged in
if (!$isLoggedIn) {
    $navLinks[] = array('url' => '/zzp_project/pages/login.php', 'text' => 'Login');
    $navLinks[] = array('url' => '/zzp_project/pages/register.php', 'text' => 'Register');
} else {
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZZP Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/zzp_project/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ZZP Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <?php
            // Loop through navigation links and display them
            foreach ($navLinks as $link) {
                echo "<li class='nav-item'><a class='nav-link' href='{$link['url']}'>{$link['text']}</a></li>";
            }
            ?>
        </ul>
        <?php if ($isLoggedIn) : ?>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/zzp_project/pages/profile.php"><?php echo $_SESSION['username']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/zzp_project/pages/logout.php">Logout</a>
                </li>
            </ul>
        <?php endif; ?>
    </div>
</nav>


<div class="container">

