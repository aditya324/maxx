<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-surface-soft font-sans">
  <?php require "./header.php" ?>


  <section class="w-full pt-28 ">
    <div
      class="relative w-full mx-auto h-[619px] bg-cover bg-center overflow-hidden"
      style="background-image: url('./assets/banners/blur.jpg');">

      <!-- TOP PILL (HIDDEN ON MOBILE) -->
      <div class="hidden md:flex justify-center mt-5 fixed w-full z-50">
        <div class="flex w-full max-w-[1020px] items-center justify-between bg-white shadow-md rounded-full px-4 md:px-6 py-3 gap-3 md:gap-6">

          <!-- Request Call Back -->
          <button class="flex items-center gap-2 text-[#6C3130] font-medium px-2 md:px-4 cursor-pointer" onclick="openPopup()">
            <img src="./assets/icons/call.png" class="w-6 h-6 md:w-7 md:h-7" alt="">
            <span class="text-sm md:text-base">Request Call Back</span>
          </button>

          <!-- Book Appointment (Active) -->
          <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="flex items-center gap-2 text-white font-medium px-4 md:px-6 py-2 rounded-full bg-[#F58220] shadow">
            <img src="./assets/icons/schedule.png" class="w-6 h-6 md:w-7 md:h-7 invert" alt="">
            <span class="text-sm md:text-base">Book Appointment</span>
          </button>

          <!-- Book Ambulance -->
          <button class="flex items-center gap-2 text-[#6C3130] font-medium px-2 md:px-4">
            <img src="./assets/icons/ambulence.png" class="w-6 h-6 md:w-7 md:h-7" alt="">
            <span class="text-sm md:text-base">Book Ambulance</span>
          </button>

        </div>
      </div>

      <!-- TEXT CONTENT -->
      <div
        class="relative z-20 px-4 pt-6 text-center
             lg:text-left lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:left-36">
        <h1 class="text-2xl sm:text-3xl md:text-4xl text-[#6C3130] font-semibold mb-3 drop-shadow-xl">
          All-Inclusive Care
          <span class="block sm:inline text-[#F58220]">ONE Trusted Hospital</span>
        </h1>

        <p
          class="text-lg sm:text-xl md:text-2xl xl:w-[650px]
               bg-[image:var(--gradient-brand)]
               md:text-4xl font-semibold text-white inline-block px-3 py-3 rounded drop-shadow-xl">
          World Class Care, Under One Roof
        </p>
      </div>

      <!-- SEARCH BAR -->
      <!-- SEARCH BAR -->
      <div
        class="absolute top-[58%] sm:top-[70%] left-0 w-full px-4 z-30
   lg:top-[80%] lg:left-1/2 lg:-translate-x-1/2
   lg:px-0 lg:w-[1020px] lg:max-w-4xl ">

        <div
          class="flex flex-col gap-3
     bg-transparent backdrop-blur-md
     rounded-2xl shadow-lg
     px-4 py-4 w-full overflow-hidden
     lg:flex-row lg:items-center lg:gap-0
     lg:bg-white lg:backdrop-blur-0 lg:px-0 lg:py-0 lg:rounded-full">

          <!-- DROPDOWNS -->
          <div class="flex flex-col flex-1 gap-3 lg:flex-row lg:items-center lg:px-5 lg:py-2">

            <!-- Select Specialty -->
            <div class="relative flex-1">
              <select
                id="specialtySelect"
                class="w-full bg-white/70 backdrop-blur-md lg:bg-[#f4f4f4]
             border border-white/40 lg:border-0
             rounded-[10px] lg:rounded-full
             px-4 lg:px-8 py-3 text-sm text-[#6C3130]
             appearance-none outline-none cursor-pointer">
                <option value="">Select Specialty</option>
                <option value="./angiography.php">Cardiology</option>
                <option value="/specialty/anaesthesia">Anaesthesia</option>
                <option value="/specialty/dermatology">Dermatology</option>
                <option value="/specialty/critical-care">Critical Care</option>
                <!-- Add all specialties here -->
              </select>

              <span
                class="pointer-events-none absolute right-4 lg:right-6 top-1/2 -translate-y-1/2 text-[#6C3130] text-xs">
                ▼
              </span>
            </div>

            <!-- Find a Doctor -->
            <div class="relative flex-1">
              <select
                id="doctorSelect"
                class="w-full bg-white/70 backdrop-blur-md lg:bg-[#f4f4f4]
             border border-white/40 lg:border-0
             rounded-[10px] lg:rounded-full
             px-4 lg:px-8 py-3 text-sm text-[#6C3130]
             appearance-none outline-none cursor-pointer">
                <option value="">Find a Doctor</option>
                <option value="/doctor/dr-john-smith">Dr. John Smith</option>
                <option value="/doctor/dr-ravi-kumar">Dr. Ravi Kumar</option>
                <option value="/doctor/dr-anita-patil">Dr. Anita Patil</option>
                <!-- Add all doctors with their slugs -->
              </select>

              <span
                class="pointer-events-none absolute right-4 lg:right-6 top-1/2 -translate-y-1/2 text-[#6C3130] text-xs">
                ▼
              </span>
            </div>
          </div>

          <!-- SEARCH BUTTON -->
          <button
            id="searchBtn"
            class="mt-2 w-full px-6 py-3 text-base font-semibold
         bg-[#F58220]/90 text-white rounded-[10px]
         backdrop-blur-md
         flex items-center justify-center gap-2 whitespace-nowrap
         lg:mt-0 lg:w-auto lg:px-12 lg:py-5 lg:text-lg
         lg:rounded-none lg:rounded-r-full h-full">
            <span>Search</span>
            <span class="text-base">→</span>
          </button>
        </div>
      </div>






      <div
        class="mt-6 flex justify-center z-10
         lg:mt-0 lg:absolute lg:bottom-0 lg:right-10 lg:opacity-95">
        <img
          src="./assets/banners/family-home.png"
          class="lg:w-[900px] lg:h-[560px] md:h-[400px] "
          alt="">
      </div>


    </div>
  </section>
    
</body>
</html>