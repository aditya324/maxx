<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<footer class="bg-[#5B2B2B] text-white pt-14 pb-10">
  <div class="container mx-auto px-6 lg:px-12">

    <!-- TOP GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

      <!-- Column 1 -->
      <div>
        <h3 class="font-semibold text-lg mb-4">For Patients</h3>
        <ul class="space-y-2 text-sm text-gray-200">
          <li><a href="./specialities.php" class="hover:text-orange-300">Specialities</a></li>
          <li><a href="../procedures.php" class="hover:text-orange-300">Procedures</a></li>
          <li><a href="./patients-corner.php?type=videos" class="hover:text-orange-300">Doctor Videos</a></li>
          <li><a href="./patients-corner.php" class="hover:text-orange-300">Health Blogs</a></li>
          <li><a href="./patients-corner.php?type=podcasts" class="hover:text-orange-300">Health Podcast</a></li>

        </ul>

        <!-- Social Icons -->
        <div class="mt-6">
          <p class="text-sm font-medium mb-3">Follow us on</p>
          <div class="flex gap-3">
            <a href="https://www.instagram.com/maax_hospital/?hl=en" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-full bg-white text-[#5B2B2B] hover:bg-orange-400 hover:text-white transition">
              <i class="fab fa-instagram text-sm"></i>
            </a>
            <a href="https://www.facebook.com/maaxhospitalshivamogga/" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-full bg-white text-[#5B2B2B] hover:bg-orange-400 hover:text-white transition">
              <i class="fab fa-facebook-f text-sm"></i>
            </a>
            <a href="https://x.com/maax_hospital/with_replies" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-full bg-white text-[#5B2B2B] hover:bg-orange-400 hover:text-white transition">
              <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="https://www.youtube.com/c/maaxhospital" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-full bg-white text-[#5B2B2B] hover:bg-orange-400 hover:text-white transition">
              <i class="fab fa-youtube text-sm"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Column 2 -->
      <div>
        <h3 class="font-semibold text-lg mb-4">Top Searches</h3>
        <ul class="space-y-2 text-sm text-gray-200">
          <li><a href="./anaesthesia.php" class="hover:text-orange-300">Anaesthesia</a></li>
          <li><a href="../procedures/dialysis.php" class="hover:text-orange-300">Dialysis</a></li>
          <li><a href="../procedures/cesarian-section.php" class="hover:text-orange-300">C-Section</a></li>
          <li><a href="../procedures/fracture-repair.php" class="hover:text-orange-300">Fracture Repair</a></li>
          <li><a href="../procedures/joint-replacement.php" class="hover:text-orange-300">Joint Replacement</a></li>
          <li><a href="../procedures/bronchoscopy.php" class="hover:text-orange-300">Bronchoscopy</a></li>
          <li><a href="../procedures.php" class="hover:text-orange-300">View All</a></li>
        </ul>
      </div>

      <!-- Column 3 -->
      <div>
        <h3 class="font-semibold text-lg mb-4">For Medical Professionals</h3>
        <ul class="space-y-2 text-sm text-gray-200">
          <li><a href="#" class="hover:text-orange-300">Apply For Medical Careers</a></li>

        </ul>
      </div>

      <!-- Column 4 -->
      <div>
        <h3 class="font-semibold text-lg mb-4">For Corporates</h3>
        <ul class="space-y-2 text-sm text-gray-200">
          <li><a href="#" class="hover:text-orange-300">Careers</a></li>
          <li><a href="../about.php" class="hover:text-orange-300">About Us</a></li>
          <li><a href="#" class="hover:text-orange-300">Sister Concerns</a></li>
          <li><a href="./patients-corner.php?type=events" class="hover:text-orange-300">News & Events</a></li>

          <li><a href="tel:+919876543210" class="hover:text-orange-300">Contact Us</a></li>
        </ul>
      </div>
    </div>

    <!-- SEARCH BAR -->

    <div class="border-t border-white/20 mt-12 pt-6 text-center text-sm text-gray-300">
      © <span id="year"></span> Maax Hospital. All rights reserved.
      Made by <a href="https://sunrisedigital.co.in/" class="text-orange-400 font-medium">SunriseDigital</a>
    </div>

    <script>
      document.getElementById("year").textContent = new Date().getFullYear();
    </script>
  </div>
</footer>