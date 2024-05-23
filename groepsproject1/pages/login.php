<?php

// Start the session
session_start();

// Include the UserManager class
include_once('../php/user_functions.php');
include_once('../includes/db.php');

// Initialize variables
$username = $password = "";
$errorMessage = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Create a new instance of UserManager
    $userManager = new UserManager($pdo);

    // Attempt to log in the user
    $user = $userManager->loginUser($username, $password);

    // Check if login was successful
    if ($user) {
        // Login successful, set session variable
        $_SESSION['username'] = $username;

        // Redirect to home page or dashboard
        header("Location: home.php"); // Change to appropriate page
        exit();
    } else {
        // Login failed, display error message
        $errorMessage = "Incorrect username or password. Please try again.";
    }
}

?>

<?php include_once('../includes/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Login</h2>
                    <!-- Display error message if login failed -->
                    <?php if (!empty($errorMessage)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $errorMessage; ?>
                        </div>
                    <?php endif; ?>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-block">Login</button>
                    </form>
                    <p class="text-center mt-3">Don't have an account? <a href="register.php">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../includes/footer.php'); ?>

