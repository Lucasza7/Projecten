<?php include_once('../includes/header.php'); ?>

<!-- Public Profile Customization Section -->
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Public Profile Customization</h5>
        <form>
            <div class="form-group">
                <label for="banner">Banner Image</label>
                <input type="file" class="form-control-file" id="banner">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</div>

<!-- Change / Add Contact Info Section -->
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Change / Add Contact Info</h5>
        <form>
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" class="form-control" id="phoneNumber">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</div>

<!-- Overview of Projects and Change Project Name Section -->
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Your Projects</h5>
        <input type="text" class="form-control mb-3" placeholder="Search for a project...">
        <div id="projectCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Display a carousel of the user's projects -->
                <!-- Each project should have an image, name, and a link to edit its details -->
                <div class="carousel-item active">
                    <img src="project1.jpg" class="d-block w-100" alt="Project 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Project 1</h5>
                        <!-- Option to change project name appears on hover -->
                        <div class="change-project-name">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="projectName" value="Project 1">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="project2.jpg" class="d-block w-100" alt="Project 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Project 2</h5>
                        <!-- Option to change project name appears on hover -->
                        <div class="change-project-name">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="projectName" value="Project 2">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Add more carousel items for other projects -->
            </div>
            <a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
    

<!-- Privacy Settings Section -->
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Privacy Settings</h5>
        <form>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="privateProfile">
                    <label class="form-check-label" for="privateProfile">
                        Make my profile private
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</div>

<?php include_once('../includes/footer.php'); ?>
