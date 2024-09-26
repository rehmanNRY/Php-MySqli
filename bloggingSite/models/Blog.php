<?php
class Blog {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createBlog($userId, $title, $content) {
        $title = $this->db->escape_string($title);
        $content = $this->db->escape_string($content);

        $query = "INSERT INTO blogs (user_id, title, content) VALUES ('$userId', '$title', '$content')";
        return $this->db->query($query);
    }

    public function deleteBlog($blogId, $userId) {
        $query = "DELETE FROM blogs WHERE id = '$blogId' AND user_id = '$userId'";
        return $this->db->query($query);
    }

    public function getAllBlogs() {
        $query = "SELECT * FROM blogs";
        return $this->db->query($query);
    }
}
?>
