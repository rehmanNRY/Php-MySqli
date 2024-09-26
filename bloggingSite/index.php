<?php
session_start();
require_once 'config/Database.php';
require_once 'models/Blog.php';
require_once 'models/User.php';

$db = new Database();
$blog = new Blog($db);
$user = new User($db);
$allBlogs = $blog->getAllBlogs();
$writers = $user->getAllWriters(); // Fetch writers

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Blog</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-black text-white">
<?php require './views/partials/_sidebar.php' ?>
<?php require './views/partials/_rightbar.php' ?>
<?php require './views/partials/_navbar.php' ?>



<!-- Toggle Sidebar Button (For Mobile) -->
<!-- <script>
  const menuToggle = document.getElementById('menuToggle');
  const sidebar = document.querySelector('aside');

  menuToggle.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-full');
  });
</script> -->

  

  <!-- Hero Section -->
  <main class="px-4 max-w-7xl py-10 mx-auto">
    <section class="flex mt-7 items-center justify-between gap-10 bg-gradient-to-r from-[#131214] via-[#1f1f1f] to-[#131214] p-8 rounded-lg shadow-lg">
      <!-- Text Section -->
      <div class="w-1/2 space-y-6">
        <h1 class="font-bold text-5xl leading-snug text-white">Unleashing Individual Potential: <span class="text-yellow-400">From Tools to Partners</span></h1>
        <p class="mt-5 text-gray-400 text-lg">Discover how AI can enhance your creative ventures and career with powerful tools built to unlock human potential.</p>
        
        <div class="flex mt-5 gap-3">
          <button class="rounded-lg px-6 py-3 bg-yellow-400 text-black font-semibold hover:bg-yellow-500 transition duration-300">Get Started</button>
          <button class="rounded-lg px-6 py-3 bg-transparent border border-gray-500 text-white font-semibold hover:bg-gray-800 transition duration-300">Post Blog</button>
        </div>
    
        <!-- Additional Text Below Buttons -->
        <p class="text-gray-500 text-sm mt-3">No credit card required • Free setup • Easy to use</p>
      </div>
      
      <!-- Image Section -->
      <div class="w-1/2 flex justify-center relative">
        <img src="https://hub-apac-1.lobeobjects.space/landing/overview/f4.webp" class="w-full rounded-lg object-cover shadow-lg transform hover:scale-105 transition duration-500" alt="AI Blog">
        <div class="absolute -bottom-5 left-5 bg-yellow-400 text-black px-3 py-1 rounded-lg shadow-md">#AIRevolution</div>
      </div>
    </section>
    
    <?php require './views/partials/_blogs.php' ?>


<!-- Meet Our Writers Section -->
<section class="mt-20 max-w-7xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">Meet Our Writers</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php if ($writers && $writers->num_rows > 0): ?>
            <?php while ($writer = $writers->fetch_assoc()): ?>
                <div class="bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg transition duration-300 hover:bg-[#1b1b1b]">
                    <img src="https://via.placeholder.com/150" alt="<?php echo $writer['full_name']; ?>" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold text-cyan-500"><?php echo $writer['full_name']; ?></h3>
                    <p class="text-gray-400"><?php echo $writer['username']; ?></p>
                    <p class="mt-2 text-gray-400"><?php echo $writer['bio']; ?></p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No writers found.</p>
        <?php endif; ?>
    </div>
</section>
  </main>
  <?php require './views/partials/_footer.php' ?>
</body>

</html>
