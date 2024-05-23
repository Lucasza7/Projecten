<?php

class UserManager {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    // Function to register a regular user
    public function registerUser($username, $email, $password) {
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL statement to insert user data into the database
        $sql = "INSERT INTO users (username, email, password_hash, role) VALUES (?, ?, ?, 'user')";

        // Execute the query using the generic method
        return $this->executeQuery($sql, [$username, $email, $hashedPassword]);
    }

    // Function to register an admin
    


    // Function to log in a user using either username or email
public function loginUser($identifier, $password) {
    // Fetch user from database based on username or email
    $user = $this->getUserByIdentifier($identifier);

    // Check if user exists
    if ($user) {
        // Verify password
        if (password_verify($password, $user['password_hash'])) {
            // Password is correct, return user data
            return $user;
        }
    }

    // User not found or incorrect password
    return null;
}

// Function to fetch user from database based on username or email
private function getUserByIdentifier($identifier) {
    // Prepare the SQL statement to select user by username or email
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?";

    // Prepare and execute the statement
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$identifier, $identifier]);

    // Fetch user data
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $user;
}

    // Generic method for CRUD operations
    public function executeQuery($sql, $params = []) {
        try {
            // Prepare and execute the statement
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);

            // Return the result of the operation
            return $stmt;
        } catch (PDOException $e) {
            // Handle any errors
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    function getUserIdFromDatabase($username) {
        // Assuming you have a PDO instance named $pdo
        global $pdo;
    
        try {
            // Prepare SQL statement
            $sql = "SELECT user_id FROM users WHERE username = ?";
            $stmt = $pdo->prepare($sql);
    
            // Bind parameters and execute the query
            $stmt->execute([$username]);
    
            // Fetch the user ID
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($result) {
                return $result['user_id'];
            } else {
                return false; // User ID not found
            }
        } catch (PDOException $e) {
            // Handle database error
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    
}
?>
