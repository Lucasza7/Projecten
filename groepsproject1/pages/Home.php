<?php include_once('../includes/header.php'); ?>

<div class="container">
    <!-- Hero Section -->
    <section id="hero">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to ZZP Project</h1>
        <p class="lead">Manage your projects and hours effectively with our platform.</p>
        <hr class="my-4">
        
        </p>
    </div>
</section>


<section id="featured-projects">
    <h2>Featured Projects</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project Image">
                <div class="card-body">
                    <h5 class="card-title">Project Title</h5>
                    <p class="card-text">Project description goes here.</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <!-- Add more project cards here -->
    </div>
</section>


<section id="testimonials">
    <h2>Testimonials</h2>
    <div class="row">
        <div class="col-md-6">
            <blockquote class="blockquote">
                <p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</p>
                <footer class="blockquote-footer">John Doe</footer>
            </blockquote>
        </div>
        <!-- Add more testimonials here -->
    </div>
</section>

<section id="cta">
    <div class="jumbotron">
        <h1 class="display-4">Ready to get started?</h1>
        <p class="lead">Sign up for an account to manage your projects efficiently or log in if you already have one.</p>
        <hr class="my-4">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="register.php" role="button">Sign Up</a>
            <a class="btn btn-secondary btn-lg" href="login.php" role="button">Login</a>
        </p>
    </div>
</section>
</div>

<?php include_once('../includes/footer.php'); ?>
