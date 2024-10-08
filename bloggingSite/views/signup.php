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
  <section class="mt-20 max-w-lg mx-auto bg-[#111111] rounded-lg p-8 border border-[#333333] shadow-lg">
    <h2 class="text-3xl font-bold text-center text-white mb-6">Sign Up</h2>

    <!-- Form Starts Here -->
    <form action="../controller/main.php" method="POST">

        <!-- Full Name Field -->
        <div class="mb-6">
            <label for="full_name" class="block text-gray-400 text-lg font-semibold mb-2">Full Name</label>
            <input type="text" id="full_name" name="full_name" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your full name" required>
        </div>

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

        <!-- Bio Field -->
        <div class="mb-6">
            <label for="bio" class="block text-gray-400 text-lg font-semibold mb-2">Bio</label>
            <textarea id="bio" name="bio" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Tell us about yourself" required></textarea>
        </div>

        <!-- Select Role Field -->
        <div class="mb-6">
            <label for="role" class="block text-gray-400 text-lg font-semibold mb-2">Select Role</label>
            <select id="role" name="role" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
                <option value="">Select Role</option>
                <option value="writer">Writer</option>
                <option value="reader">Reader</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" name="signup" class="w-full p-3 rounded-lg bg-yellow-400 text-black font-bold hover:bg-yellow-500 transition duration-300">Sign Up</button>
        </div>

    </form>
</section>


  </main>


</body>

</html>