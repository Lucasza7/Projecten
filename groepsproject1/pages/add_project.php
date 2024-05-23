<?php
session_start();
// Include header
include_once('../includes/header.php');

// Include project functions
include_once('../php/project_functions.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $imageURL = $_POST['image']; // URL of the image
    $description = $_POST['description'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $additionalFiles = $_FILES['additional_files']; // Uploaded files
    $tags = $_POST['tags'];

    // Handle file uploads
    $additionalFilesPaths = [];
    if (!empty($additionalFiles['name'][0])) {
        foreach ($additionalFiles['tmp_name'] as $key => $tmp_name) {
            $file_name = $additionalFiles['name'][$key];
            $file_tmp = $additionalFiles['tmp_name'][$key];
            $file_type = $additionalFiles['type'][$key];
            $file_size = $additionalFiles['size'][$key];
            $file_error = $additionalFiles['error'][$key];
            
            // Move uploaded file to the destination directory
            $upload_dir = '../uploads/'; // Adjust the upload directory as needed
            $upload_file = $upload_dir . basename($file_name);
            
            if (move_uploaded_file($file_tmp, $upload_file)) {
                $additionalFilesPaths[] = $upload_file;
            } else {
                // Handle file upload error
            }
        }
    }

    // Create an instance of ProjectManager
    $projectManager = new ProjectManager($pdo);

    // Call the addProject function
    $success = $projectManager->addProject($user_id, $name, $imageURL, $description, $startDate, $endDate, $additionalFiles, $tags);

    if ($success) {
        // Project added successfully
        header('Location: myproject.php'); // Redirect to success page
        exit();
    } else {
        // Handle database insertion error
        echo "Failed to add project. Please try again.";
    }
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Add Project</h2>
                    <!-- Project Form -->
                    <form action="add_project.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Project Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Project Image (URL)</label>
                            <input type="url" class="form-control" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="file">Image Upload</label>
                            <input type="file" class="form-control-file" id="file" name="file">
                        </div>
                        <div class="form-group">
                            <label for="description">Project Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                        <div class="form-group">
                            <label for="additional_files">Additional Files</label>
                            <input type="file" class="form-control-file" id="additional_files" name="additional_files[]" multiple>
                            <small id="additionalFilesHelp" class="form-text text-muted">Add any additional files needed for your project.</small>
                        </div>
                        <div class="form-group">
                            <label for="tags">Project Tags</label>
                            <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter tags separated by commas">
                            <small id="tagsHelp" class="form-text text-muted">Add tags to help categorize your project (e.g., #webdesign, #development).</small>
                        </div>
                    
                        
                        <button type="submit" class="btn btn-secondary btn-block">Add Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../includes/footer.php'); ?>
