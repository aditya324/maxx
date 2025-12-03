<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="./src/output.css" rel="stylesheet">

</head>
<body class="font-sans">



<nav class="fixed top-0 left-0 w-full bg-[#F4F4F4]  z-20">
  <div class="flex items-center justify-between w-full px-6 py-3">

    <!-- LEFT: LOGOS -->
    <div class="flex items-center gap-6 shrink-0">
      <img src="./assets/logo/logo.png" class="h-full" alt="Maax Logo">
      <!-- <img src="./images/10th-anniversary.png" class="h-10" alt="10th Anniversary"> -->
    </div>

    <!-- HAMBURGER (MOBILE ONLY) -->
    <button 
      data-collapse-toggle="navbar-menu"
      type="button"
      class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-[#6b2e26] hover:bg-[#efdcd4] focus:ring-2 focus:ring-[#cba89e]"
    >
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- DESKTOP MENU -->
    <ul class="hidden md:flex flex-1 justify-evenly text-[#6b2e26] font-normal text-lg ">
      <li><a href="#" class="">About Us</a></li>
      <li><a href="#" class="hover:text-[#a6533f]">Our Specialities</a></li>
      <li><a href="#" class="hover:text-[#a6533f]">Our Doctors</a></li>
      <li class="flex items-center gap-1">
        <span class="text-lg">🩺</span>
        <a href="#" class="hover:text-[#a6533f]">Health Checkup</a>
      </li>
      <li><a href="#" class="hover:text-[#a6533f]">Patient’s Corner</a></li>
    </ul>

  </div>

  <!-- MOBILE MENU -->
  <div id="navbar-menu" class="hidden md:hidden bg-[#fdf7f3] border-t border-[#e8ddd8]">
    <ul class="flex flex-col gap-3 px-6 py-4 text-[#6b2e26] text-sm font-medium">
      <li><a href="#" class="block hover:text-[#a6533f]">About Us</a></li>
      <li><a href="#" class="block hover:text-[#a6533f]">Our Specialities</a></li>
      <li><a href="#" class="block hover:text-[#a6533f]">Our Doctors</a></li>
      <li class="flex items-center gap-2">
        <span class="text-lg">🩺</span>
        <a href="#" class="hover:text-[#a6533f]">Health Checkup</a>
      </li>
      <li><a href="#" class="block hover:text-[#a6533f]">Patient’s Corner</a></li>
    </ul>
  </div>
</nav>



    
</body>
</html>