<?php include_once('../includes/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Projects</h2>
                    <div class="row">
                        <!-- Project Cards -->
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project Image">
                                <div class="card-body">
                                    <h5 class="card-title">Project 1</h5>
                                    <p class="card-text">Project description goes here.</p>
                                    <div class="btn-group d-flex justify-content-between" role="group">
                                        <a href="#" class="btn btn-primary">View</a>
                                        <div></div> <!-- Empty div for spacing -->
                                        <a href="#" class="btn btn-secondary">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat the above card structure for each project -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../includes/footer.php'); ?>
