<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-surface-soft font-sans">
    <?php require "./header.php" ?>


    <section class="w-full pt-28 pb-10">
        <div
            class="relative w-full mx-auto h-[619px] bg-cover bg-center overflow-hidden"
            style="background-image: url('./assets/banners/blur.jpg');">

            <!-- TOP PILL (HIDDEN ON MOBILE) -->
            <div class="hidden md:flex justify-center mt-5">
                <div class="flex w-full max-w-[1020px] items-center justify-between bg-white shadow-md rounded-full px-4 md:px-6 py-3 gap-3 md:gap-6">

                    <!-- Request Call Back -->
                    <button class="flex items-center gap-2 text-[#6C3130] font-medium px-2 md:px-4">
                        <img src="./assets/icons/call.png" class="w-6 h-6 md:w-7 md:h-7" alt="">
                        <span class="text-sm md:text-base">Request Call Back</span>
                    </button>

                    <!-- Book Appointment (Active) -->
                    <button class="flex items-center gap-2 text-white font-medium px-4 md:px-6 py-2 rounded-full bg-[#F58220] shadow">
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
           bg-transparent backdrop-blur-md  /* transparent glass */
           rounded-2xl shadow-lg
           px-4 py-4 w-full overflow-hidden
           lg:flex-row lg:items-center lg:gap-0
           lg:bg-white lg:backdrop-blur-0 lg:px-0 lg:py-0 lg:rounded-full">

                    <!-- DROPDOWNS -->
                    <div class="flex flex-col flex-1 gap-3 lg:flex-row lg:items-center lg:px-5 lg:py-2">
                        <!-- Select Specialty -->
                        <div class="relative flex-1">
                            <select
                                class="w-full bg-white/70 backdrop-blur-md lg:bg-[#f4f4f4]
                 border border-white/40 lg:border-0
                 rounded-[10px] lg:rounded-full
                 px-4 lg:px-8 py-3 text-sm text-[#6C3130]
                 appearance-none outline-none cursor-pointer">
                                <option selected>Select Specialty</option>
                            </select>
                            <span
                                class="pointer-events-none absolute right-4 lg:right-6 top-1/2 -translate-y-1/2 text-[#6C3130] text-xs">
                                ▼
                            </span>
                        </div>

                        <!-- Find a Doctor -->
                        <div class="relative flex-1">
                            <select
                                class="w-full bg-white/70 backdrop-blur-md lg:bg-[#f4f4f4]
                 border border-white/40 lg:border-0
                 rounded-[10px] lg:rounded-full
                 px-4 lg:px-8 py-3 text-sm text-[#6C3130]
                 appearance-none outline-none cursor-pointer">
                                <option selected>Find a Doctor</option>
                            </select>
                            <span
                                class="pointer-events-none absolute right-4 lg:right-6 top-1/2 -translate-y-1/2 text-[#6C3130] text-xs">
                                ▼
                            </span>
                        </div>
                    </div>

                    <!-- SEARCH BUTTON -->
                    <button
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

            <!-- DOCTOR IMAGE -->
            <div
                class="mt-6 flex justify-center z-10
         lg:mt-0 lg:absolute lg:bottom-0 lg:right-10 lg:opacity-95">
                <img
                    src="./assets/banners/doctors.png"
                    class="lg:w-[962px] lg:h-[560px] md:h-[400px] -scale-x-100"
                    alt="">
            </div>


        </div>
    </section>



    <section class=" py-10">
        <!-- Heading + Tabs -->


        <!-- Doctor Cards -->
        <div class="flex flex-wrap justify-center  gap-x-5 gap-y-5 px-10">

            <!-- CARD 1 -->
            <div class="relative  w-[400px] h-[300px] rounded-[20px] border border-[#e4d5c6] p-5 shadow-sm bg-white flex flex-col justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-20 h-20 rounded-full border-[3px] border-orange-500 overflow-hidden">
                        <img src="/doctor.jpg" class="w-full h-full object-cover" />
                    </div>

                    <div>
                        <h3 class="text-[18px] font-semibold text-[#5c2c20] leading-snug">Dr Subhash S H</h3>
                        <p class="text-gray-600 text-sm mt-1">MBBS, MS</p>
                        <p class="text-orange-600 font-semibold text-base mt-1">Orthopedics</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                    <button class="bg-[#582F28] text-white py-3 text-sm font-medium">View Profile</button>
                    <button class="bg-white text-orange-600 py-3 text-sm font-semibold">Book Appointment</button>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="relative  w-[400px] h-[300px] rounded-[20px] border border-[#e4d5c6] p-5 shadow-sm bg-white flex flex-col justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-20 h-20 rounded-full border-[3px] border-orange-500 overflow-hidden">
                        <img src="/doctor.jpg" class="w-full h-full object-cover" />
                    </div>

                    <div>
                        <h3 class="text-[18px] font-semibold text-[#5c2c20] leading-snug">Dr Jane Doe</h3>
                        <p class="text-gray-600 text-sm mt-1">MBBS, MD</p>
                        <p class="text-orange-600 font-semibold text-base mt-1">Cardiology</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                    <button class="bg-[#582F28] text-white py-3 text-sm font-medium">View Profile</button>
                    <button class="bg-white text-orange-600 py-3 text-sm font-semibold">Book Appointment</button>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="relative  w-[400px] h-[300px] rounded-[20px] border border-[#e4d5c6] p-5 shadow-sm bg-white flex flex-col justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-20 h-20 rounded-full border-[3px] border-orange-500 overflow-hidden">
                        <img src="/doctor.jpg" class="w-full h-full object-cover" />
                    </div>

                    <div>
                        <h3 class="text-[18px] font-semibold text-[#5c2c20] leading-snug">Dr John Smith</h3>
                        <p class="text-gray-600 text-sm mt-1">MBBS, MS</p>
                        <p class="text-orange-600 font-semibold text-base mt-1">Neurology</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                    <button class="bg-[#582F28] text-white py-3 text-sm font-medium">View Profile</button>
                    <button class="bg-white text-orange-600 py-3 text-sm font-semibold">Book Appointment</button>
                </div>
            </div>
            <div class="relative  w-[400px] h-[300px] rounded-[20px] border border-[#e4d5c6] p-5 shadow-sm bg-white flex flex-col justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-20 h-20 rounded-full border-[3px] border-orange-500 overflow-hidden">
                        <img src="/doctor.jpg" class="w-full h-full object-cover" />
                    </div>

                    <div>
                        <h3 class="text-[18px] font-semibold text-[#5c2c20] leading-snug">Dr John Smith</h3>
                        <p class="text-gray-600 text-sm mt-1">MBBS, MS</p>
                        <p class="text-orange-600 font-semibold text-base mt-1">Neurology</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                    <button class="bg-[#582F28] text-white py-3 text-sm font-medium">View Profile</button>
                    <button class="bg-white text-orange-600 py-3 text-sm font-semibold">Book Appointment</button>
                </div>
            </div>
            <div class="relative  w-[400px] h-[300px] rounded-[20px] border border-[#e4d5c6] p-5 shadow-sm bg-white flex flex-col justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-20 h-20 rounded-full border-[3px] border-orange-500 overflow-hidden">
                        <img src="/doctor.jpg" class="w-full h-full object-cover" />
                    </div>

                    <div>
                        <h3 class="text-[18px] font-semibold text-[#5c2c20] leading-snug">Dr John Smith</h3>
                        <p class="text-gray-600 text-sm mt-1">MBBS, MS</p>
                        <p class="text-orange-600 font-semibold text-base mt-1">Neurology</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                    <button class="bg-[#582F28] text-white py-3 text-sm font-medium">View Profile</button>
                    <button class="bg-white text-orange-600 py-3 text-sm font-semibold">Book Appointment</button>
                </div>
            </div>
            <div class="relative  w-[400px] h-[300px] rounded-[20px] border border-[#e4d5c6] p-5 shadow-sm bg-white flex flex-col justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-20 h-20 rounded-full border-[3px] border-orange-500 overflow-hidden">
                        <img src="/doctor.jpg" class="w-full h-full object-cover" />
                    </div>

                    <div>
                        <h3 class="text-[18px] font-semibold text-[#5c2c20] leading-snug">Dr John Smith</h3>
                        <p class="text-gray-600 text-sm mt-1">MBBS, MS</p>
                        <p class="text-orange-600 font-semibold text-base mt-1">Neurology</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                    <button class="bg-[#582F28] text-white py-3 text-sm font-medium">View Profile</button>
                    <button class="bg-white text-orange-600 py-3 text-sm font-semibold">Book Appointment</button>
                </div>
            </div>
            <div class="relative  w-[400px] h-[300px] rounded-[20px] border border-[#e4d5c6] p-5 shadow-sm bg-white flex flex-col justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-20 h-20 rounded-full border-[3px] border-orange-500 overflow-hidden">
                        <img src="/doctor.jpg" class="w-full h-full object-cover" />
                    </div>

                    <div>
                        <h3 class="text-[18px] font-semibold text-[#5c2c20] leading-snug">Dr John Smith</h3>
                        <p class="text-gray-600 text-sm mt-1">MBBS, MS</p>
                        <p class="text-orange-600 font-semibold text-base mt-1">Neurology</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                    <button class="bg-[#582F28] text-white py-3 text-sm font-medium">View Profile</button>
                    <button class="bg-white text-orange-600 py-3 text-sm font-semibold">Book Appointment</button>
                </div>
            </div>
            <div class="relative  w-[400px] h-[300px] rounded-[20px] border border-[#e4d5c6] p-5 shadow-sm bg-white flex flex-col justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-20 h-20 rounded-full border-[3px] border-orange-500 overflow-hidden">
                        <img src="/doctor.jpg" class="w-full h-full object-cover" />
                    </div>

                    <div>
                        <h3 class="text-[18px] font-semibold text-[#5c2c20] leading-snug">Dr John Smith</h3>
                        <p class="text-gray-600 text-sm mt-1">MBBS, MS</p>
                        <p class="text-orange-600 font-semibold text-base mt-1">Neurology</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                    <button class="bg-[#582F28] text-white py-3 text-sm font-medium">View Profile</button>
                    <button class="bg-white text-orange-600 py-3 text-sm font-semibold">Book Appointment</button>
                </div>
            </div>

        </div>

        <!-- View All Button -->
        <div class="w-full flex justify-center mt-5">
            <button class="flex justify-center items-center gap-2 border border-[#f28c28] text-[#f28c28] px-5 py-2 rounded-full font-medium text-xl hover:bg-[#fff7ef] transition">
                view all
                <span class="text-lg">→</span>
            </button>
        </div>
    </section>




    <section>
        <div class="max-w-4xl mx-auto text-center">

            <!-- Heading -->
            <h2 class="text-2xl font-semibold">
                <span class="text-[#6C3130]">Explore</span>
                <span class="text-brand">Our Specialities</span>
            </h2>

            <!-- Tabs -->
            <div class="flex justify-center gap-10 mt-6 text-brand text-lg font-medium">

                <!-- Active Tab -->
                <button class="px-5 py-2 bg-brand text-white rounded-full">
                    Specialities
                </button>

                <!-- Inactive Tabs -->
                <button class="hover:text-[#c45d16] transition">Procedures</button>
                <button class="hover:text-[#c45d16] transition">Diagnostics</button>

            </div>

        </div>
      <section class="w-full py-10">
  <div class="max-w-md mx-auto">
    <!-- CARD -->
    <div class="w-[400px] h-[600px] bg-white rounded-[10px] shadow-[0_10px_30px_rgba(15,23,42,0.08)] overflow-hidden flex flex-col">

      <!-- TOP IMAGE + ORANGE OVERLAY -->
      <div class="relative w-full h-[260px]">
        <!-- Full Image -->
        <img
          src="./assets/elderly-consultation.php.jpg"
          alt="Patient & Doctor"
          class="w-full h-full object-cover z-0"
        />

        <!-- ORANGE BLOCK OVER IMAGE -->
        <div class="absolute inset-y-0 right-10 w-2/5 bg-orange-500 z-100"></div>

        <!-- TAG -->
        <div
          class="absolute left-1/2 -translate-x-1/2 top-6 bg-white px-5 py-1.5 rounded-full shadow text-sm font-semibold text-orange-500 z-30"
        >
          Angioplasty
        </div>
      </div>

      <!-- CONTENT -->
      <div class="flex-1 px-6 pt-8 pb-6 flex flex-col justify-between">
        <h3 class="text-lg font-semibold leading-relaxed text-[#111827]">
          Successful Heart and Kidney Treatment by Our Doctor
        </h3>

        <button
          class="mt-8 inline-flex items-center gap-2 font-semibold text-orange-500"
        >
          <span class="text-xl leading-none">➤</span>
          <span>Patient Recovery Story</span>
        </button>
      </div>
    </div>
  </div>
</section>



    </section>





</body>

</html>