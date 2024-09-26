<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register your account</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-black text-white">
  <main class="max-w-4xl mx-auto p-6 mt-10 bg-[#131214] rounded-lg shadow-lg">
  <section class="flex justify-center items-center bg-[#131214]">
  <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'writer'): ?>
  <div class="w-full max-w-3xl bg-[#111111] rounded-lg p-8 border border-[#333333] shadow-lg">
    <h2 class="text-3xl font-bold text-center text-white mb-6">Create a Blog Post</h2>

    <!-- Blog Post Form -->
    <form action="../controller/main.php" method="POST">
      
      <!-- Title Field -->
      <div class="mb-6">
        <label for="title" class="block text-gray-400 text-lg font-semibold mb-2">Title</label>
        <input type="text" id="title" name="title" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter post title" required>
      </div>
      
      <!-- Content Field -->
      <div class="mb-6">
        <label for="content" class="block text-gray-400 text-lg font-semibold mb-2">Content</label>
        <textarea id="content" name="content" rows="10" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Write your post content here..." required></textarea>
      </div>

      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" name="create_blog" class="w-full p-3 rounded-lg bg-yellow-400 text-black font-bold hover:bg-yellow-500 transition duration-300">Submit Post</button>
      </div>
      
    </form>
  </div>
  <?php endif; ?>
</section>



  </main>


</body>

</html>