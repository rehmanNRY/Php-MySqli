
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-black text-white">
  <div class="max-w-4xl mx-auto mt-8 p-6 bg-[#1a1a1a] rounded-lg shadow-lg">
    <!-- Profile Info -->
    <div class="flex items-center space-x-6 mb-8">
      <img src="https://via.placeholder.com/150" class="w-32 h-32 rounded-full object-cover" alt="User Profile Picture">
      <div>
        <h2 class="text-3xl font-bold text-white">John Doe</h2>
        <p class="text-gray-400">@johndoe</p>
        <p class="mt-2 text-gray-400">AI Enthusiast | Tech Blogger | Innovator</p>
        <p class="mt-2 text-gray-400">Location: San Francisco, CA</p>
      </div>
    </div>
  
    <!-- About Section -->
    <div class="mb-6">
      <h3 class="text-xl font-semibold text-yellow-400 mb-2">About</h3>
      <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque sollicitudin dui, nec suscipit leo auctor nec. Nam laoreet erat ut tincidunt malesuada.</p>
    </div>
  
    <!-- Skills Section -->
    <div class="mb-6">
      <h3 class="text-xl font-semibold text-yellow-400 mb-2">Skills</h3>
      <ul class="flex flex-wrap gap-3">
        <li class="bg-[#222222] rounded-full px-4 py-2 text-yellow-400">AI Development</li>
        <li class="bg-[#222222] rounded-full px-4 py-2 text-yellow-400">Machine Learning</li>
        <li class="bg-[#222222] rounded-full px-4 py-2 text-yellow-400">Data Analysis</li>
        <li class="bg-[#222222] rounded-full px-4 py-2 text-yellow-400">Web Development</li>
      </ul>
    </div>
  
    <!-- Social Media Links -->
    <div class="mb-6">
      <h3 class="text-xl font-semibold text-yellow-400 mb-2">Social Media</h3>
      <div class="flex space-x-6 text-gray-400">
        <a href="#" class="hover:text-blue-500 transition-colors"><i class="bx bxl-facebook text-2xl"></i></a>
        <a href="#" class="hover:text-blue-500 transition-colors"><i class="bx bxl-twitter text-2xl"></i></a>
        <a href="#" class="hover:text-blue-500 transition-colors"><i class="bx bxl-linkedin text-2xl"></i></a>
        <a href="#" class="hover:text-blue-500 transition-colors"><i class="bx bxl-instagram text-2xl"></i></a>
      </div>
    </div>
  
    <!-- Blog Posts Section -->
    <div class="mb-6">
      <h3 class="text-xl font-semibold text-yellow-400 mb-2">Recent Blog Posts</h3>
      <ul class="space-y-4">
        <li class="p-4 bg-[#222222] rounded-lg shadow-lg">
          <h4 class="text-lg font-semibold text-white">AI and the Future of Work</h4>
          <p class="text-gray-400 text-sm">Posted on Sep 12, 2024</p>
          <p class="mt-2 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </li>
        <li class="p-4 bg-[#222222] rounded-lg shadow-lg">
          <h4 class="text-lg font-semibold text-white">Understanding Deep Learning Algorithms</h4>
          <p class="text-gray-400 text-sm">Posted on Sep 9, 2024</p>
          <p class="mt-2 text-gray-400">Curabitur convallis erat ut ex condimentum, a hendrerit erat blandit...</p>
        </li>
        <li class="p-4 bg-[#222222] rounded-lg shadow-lg">
          <h4 class="text-lg font-semibold text-white">The Ethics of Artificial Intelligence</h4>
          <p class="text-gray-400 text-sm">Posted on Sep 5, 2024</p>
          <p class="mt-2 text-gray-400">Praesent sit amet lectus vel libero volutpat malesuada...</p>
        </li>
      </ul>
    </div>
  
    <!-- Contact Section -->
    <div class="bg-[#282828] p-6 rounded-lg shadow-lg">
      <h3 class="text-xl font-semibold text-yellow-400 mb-2">Contact</h3>
      <form action="#" method="post" class="space-y-4">
        <div>
          <label for="email" class="block text-gray-400">Email:</label>
          <input type="email" id="email" name="email" class="w-full p-3 rounded-lg bg-[#222222] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>
        <div>
          <label for="message" class="block text-gray-400">Message:</label>
          <textarea id="message" name="message" class="w-full p-3 rounded-lg bg-[#222222] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
        </div>
        <button type="submit" class="w-full p-3 rounded-lg bg-yellow-400 text-black hover:bg-yellow-500 transition-colors">Send Message</button>
      </form>
    </div>
  </div>
  

</body>

</html>
