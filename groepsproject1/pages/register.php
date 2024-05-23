<?php

// Include the UserManager class
include_once('../php/user_functions.php');
include_once('../includes/db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Create a new instance of UserManager
    $userManager = new UserManager($pdo);

    // Attempt to register the user
    $registrationSuccess = $userManager->registerUser($username, $email, $password);

    // Check if registration was successful
    if ($registrationSuccess) {
        // Registration successful, redirect to login page
        header("Location: login.php");
        exit();
    } else {
        // Registration failed, display error message
        $errorMessage = "Failed to register user name already in use. Please try again.";
    }
}

?>

<?php include_once('../includes/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Register</h2>
                    <!-- Display error message if registration failed -->
                    <?php if (isset($errorMessage)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $errorMessage; ?>
                        </div>
                    <?php endif; ?>
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-block">Register</button>
                    </form>
                    <p class="text-center mt-3">Already have an account? <a href="login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../includes/footer.php'); ?>

