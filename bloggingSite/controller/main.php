<?php
session_start();
require_once '../config/Database.php';
require_once '../models/User.php';
require_once '../models/Blog.php';

$db = new Database();
$user = new User($db);
$blog = new Blog($db);

// Signup
if (isset($_POST['signup'])) {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $bio = $_POST['bio'];
    $role = $_POST['role']; // 'writer' or 'reader'
    
    if ($user->signup($username, $password, $role, $full_name, $bio)) {
        header('Location: ../index.php');
    }
}


// Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($user->login($username, $password)) {
        header('Location: ../blog.php');
    } else {
        echo "Invalid credentials.";
    }
}

// Switch Role
if (isset($_POST['switch_role'])) {
    $newRole = $_POST['new_role']; // 'writer' or 'reader'
    if ($user->switchRole($newRole)) {
        header('Location: ../blog.php');
    }
}

// Create Blog
if (isset($_POST['create_blog'])) {
    if ($_SESSION['user']['role'] === 'writer') {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $userId = $_SESSION['user']['id'];
        if ($blog->createBlog($userId, $title, $content)) {
            header('Location: ../blog.php');
        }
    }
}

// Delete Blog
if (isset($_POST['delete_blog'])) {
    $blogId = $_POST['blog_id'];
    $userId = $_SESSION['user']['id'];
    if ($blog->deleteBlog($blogId, $userId)) {
        header('Location: ../blog.php');
    }
}

// Get All Blogs
$allBlogs = $blog->getAllBlogs();
// Get All Writers
$writers = $user->getAllWriters();
