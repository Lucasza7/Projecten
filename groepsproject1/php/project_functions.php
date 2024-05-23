<?php

include_once('../includes/db.php');

class ProjectManager {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function addProject($user_id, $name, $imageURL, $description, $startDate, $endDate, $additionalFiles, $tags) {
        try {
            // Prepare SQL statement
            $sql = "INSERT INTO projects (user_id, project_name, image_url, description, start_date, end_date, additional_files, tags) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);

            // Execute SQL statement
            $stmt->execute([$user_id, $name, $imageURL, $description, $startDate, $endDate, $additionalFiles, $tags]);


            // Return true if insertion was successful
            return true;
        } catch (PDOException $e) {
            // Return false and handle the error
            echo "Error: " . $e->getMessage();
            return false;
        }
}

    

    // Function to get details of a specific project by its ID
    public function getProjectById($projectId) {
        try {
            // Prepare SQL statement
            $sql = "SELECT * FROM projects WHERE project_id = ?";
            $stmt = $this->pdo->prepare($sql);

            // Execute SQL statement
            $stmt->execute([$projectId]);

            // Fetch project details
            $project = $stmt->fetch(PDO::FETCH_ASSOC);

            // Return project details
            return $project;
        } catch (PDOException $e) {
            // Handle the error
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Function to update project details
    public function updateProject($projectId, $name, $imageURL, $description, $startDate, $endDate, $additionalFiles, $tags) {
        try {
            // Prepare SQL statement
            $sql = "UPDATE projects SET project_name = ?, image_url = ?, description = ?, start_date = ?, end_date = ?, additional_files = ?, tags = ? WHERE project_id = ?";
            $stmt = $this->pdo->prepare($sql);

            // Execute SQL statement
            $stmt->execute([$name, $imageURL, $description, $startDate, $endDate, $additionalFiles, $tags, $projectId]);

            // Return true if update was successful
            return true;
        } catch (PDOException $e) {
            // Return false and handle the error
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Function to delete a project from the database
    public function deleteProject($projectId) {
        try {
            // Prepare SQL statement
            $sql = "DELETE FROM projects WHERE project_id = ?";
            $stmt = $this->pdo->prepare($sql);

            // Execute SQL statement
            $stmt->execute([$projectId]);

            // Return true if deletion was successful
            return true;
        } catch (PDOException $e) {
            // Return false and handle the error
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Function to retrieve all projects from the database
    public function getAllProjects() {
        try {
            // Prepare SQL statement
            $sql = "SELECT * FROM projects";
            $stmt = $this->pdo->prepare($sql);

            // Execute SQL statement
            $stmt->execute();

            // Fetch all projects
            $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Return projects
            return $projects;
        } catch (PDOException $e) {
            // Handle the error
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}




?>
