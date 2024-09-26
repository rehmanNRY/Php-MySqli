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
  <div class="w-full max-w-md bg-[#111111] rounded-lg p-8 border border-[#333333] shadow-lg">
    <h2 class="text-3xl font-bold text-center text-white mb-6">Login</h2>

    <!-- Login Form -->
    <form  action="../controller/main.php" method="POST">
      
      <!-- Username Field -->
      <div class="mb-6">
        <label for="username" class="block text-gray-400 text-lg font-semibold mb-2">Username</label>
        <input type="text" id="username" name="username" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your username" required>
      </div>
      
      <!-- Password Field -->
      <div class="mb-6">
        <label for="password" class="block text-gray-400 text-lg font-semibold mb-2">Password</label>
        <input type="password" id="password" name="password" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your password" required>
      </div>
      
      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" name="login" class="w-full p-3 rounded-lg bg-yellow-400 text-black font-bold hover:bg-yellow-500 transition duration-300">Login</button>
      </div>
      
    </form>

    <!-- Extra Links -->
    <div class="mt-4 text-center">
      <p class="text-gray-400">Don't have an account? <a href="#" class="text-yellow-400 hover:underline">Sign Up</a></p>
      <p class="text-gray-400 mt-2"><a href="#" class="text-yellow-400 hover:underline">Forgot Password?</a></p>
    </div>
  </div>
</section>


  </main>


</body>

</html>