<section class="mt-20 max-w-7xl mx-auto">
  <h2 class="text-4xl font-bold text-center mb-10 text-white">Featured Blogs</h2>
  <?php if ($allBlogs && $allBlogs->num_rows > 0): ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Blog Card 1 -->
      <?php while ($blog = $allBlogs->fetch_assoc()): ?>
        <div class="card border bg-[#111111] border-[#212121] rounded-xl overflow-hidden cursor-pointer transform hover:scale-105 transition-transform duration-300 shadow-lg">
          <img src="https://hub-apac-1.lobeobjects.space/landing/overview/f4.webp" class="w-full h-60 object-cover" alt="blog-cover">
          <div class="p-5 space-y-3">
            <h3 class="font-bold text-xl text-white"><?php echo $blog['title']; ?></h3>
            <p class="text-[#aaaaaa]"><?php echo $blog['content']; ?></p>

            <!-- Author & Date -->
            <div class="flex justify-between items-center text-gray-400 text-sm">
              <span>By John Doe</span>
              <span><?php echo $blog['created_at']; ?></span>
            </div>

            <!-- Read More & Social Sharing -->
            <div class="flex justify-between items-center mt-3">
              <a href="#" class="text-yellow-400 hover:underline">Read More</a>
              <?php if (isset($_SESSION['user'])): ?>
                <?php if ($_SESSION['user']['id'] == $blog['user_id']): ?>
                  <form action="../../controller/main.php" method="POST">
                    <input type="hidden" name="blog_id" value="<?php echo $blog['id']; ?>">
                    <button type="submit" name="delete_blog">Delete Blog</button>
                  </form>
                <?php endif; ?>
              <?php endif; ?>

              <div class="flex gap-3">
                <a href="#" class="text-gray-500 hover:text-white"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="text-gray-500 hover:text-white"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="text-gray-500 hover:text-white"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <p>No blogs found.</p>
  <?php endif; ?>
</section>