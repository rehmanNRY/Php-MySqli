<?php
class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function signup($username, $password, $role, $full_name, $bio) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT); // Hash the password
        $query = "INSERT INTO users (username, password, role, full_name, bio) VALUES ('$username', '$passwordHash', '$role', '$full_name', '$bio')";
        return $this->db->query($query);
    }
    

    public function login($username, $password) {
        $username = $this->db->escape_string($username);
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->db->query($query);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                return true;
            }
        }
        return false;
    }

    public function switchRole($newRole) {
        $userId = $_SESSION['user']['id'];
        $newRole = $this->db->escape_string($newRole);
        $query = "UPDATE users SET role = '$newRole' WHERE id = '$userId'";
        if ($this->db->query($query)) {
            $_SESSION['user']['role'] = $newRole;
            return true;
        }
        return false;
    }
    public function getAllWriters() {
        $query = "SELECT * FROM users WHERE role = 'writer'";
        return $this->db->query($query);
    }
    
}
?>
