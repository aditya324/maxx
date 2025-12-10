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
          <button class="flex items-center gap-2 text-[#6C3130] font-medium px-2 md:px-4 cursor-pointer"  onclick="openPopup()">
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

<section class="block lg:hidden fixed bottom-0 inset-x-0 z-50 ">
  <div class="bg-[#FFE4CF] w-full p-5 flex gap-5 font-medium text-sm text-center justify-center">

    <!-- Button 1: Gradient Border Only -->
    <div class="inline-block bg-gradient-to-r from-[#F58220] to-[#6C3130] rounded-full p-[2px]">
      <div class="bg-white rounded-full">
        <div class="flex items-center justify-center gap-2 px-4 py-3">
          <img src="./assets/icons/telephone.png" class="h-5 w-5" alt="">
          <p class="text-[#6C3130]">Request A Callback</p>
        </div>
      </div>
    </div>

    <!-- Button 2: Solid Gradient Fill -->
    <div class="inline-block bg-gradient-to-r from-[#F58220] to-[#6C3130] rounded-full">
      <div class="flex items-center justify-center gap-2 px-4 py-3">
        <img src="./assets/icons/appointment.png" class="h-5 w-5" alt="">
        <p class="text-white">Book An Appointment</p>
      </div>
    </div>

  </div>
</section>




  <section class="flex justify-center  pt-20 ">
    <div class="flex flex-col  ">
      <div>
        <img src="./assets/banners/home-screen.png" class="lg:w-[1453px] lg:h-[840px] lg:px-0 px-5 rounded-2xl" alt="">
      </div>
      <div class="hidden md:flex justify-between flex-wrap xl:px-0 px-5">

        <div class="w-full max-w-[470px] max-h-80 bg-[#FE9C3E] rounded-2xl p-6 text-white">
          <div class="flex items-start gap-4">
            <div>
              <div class="flex justify-baseline">
                <img src="./assets/icons/trophy-icon.png" alt="">
                <h3 class="text-2xl font-bold ml-5 mt-5">
                  High Quality<br />Medical Care
                </h3>
              </div>

              <p class="mt-3 text-[20px] leading-relaxed font-medium">
                At MaAx Hospitals, we deliver top-quality medical care
                with specialised services, advanced treatments, and
                expert support — all under one roof.
              </p>
            </div>
          </div>
        </div>

        <div class="w-full max-w-[470px] max-h-80 bg-[#6C3130] rounded-2xl p-6 text-white">
          <div class="flex items-start gap-4">
            <div>
              <div class="flex justify-baseline">
                <img src="./assets/icons/help-icon.png" alt="">
                <h3 class="text-2xl font-bold ml-5 mt-5">
                  Patient-Centric<br />Care
                </h3>
              </div>

              <p class="mt-3 text-[20px] leading-relaxed font-medium">
                At MaAx Hospitals, we deliver top-quality medical care with specialised services, advanced treatments, and expert support — all under one roof.
              </p>
            </div>
          </div>
        </div>

        <div class="w-full max-w-[470px] max-h-80 bg-[#FE9C3E] rounded-2xl p-6 text-white">
          <div class="flex items-start gap-4">
            <div>
              <div class="flex justify-baseline">
                <img src="./assets/icons/lotus-icon.png" alt="">
                <h3 class="text-2xl font-bold ml-5 mt-5">
                  Holistic Healthcare<br />Services
                </h3>
              </div>

              <p class="mt-3 text-[20px] leading-relaxed font-medium">
                At MaAx Hospitals, we deliver top-quality medical care
                with specialised services, advanced treatments, and
                expert support — all under one roof.
              </p>
            </div>
          </div>
        </div>

      </div>
      <!-- MOBILE: accordion style -->
      <div class="md:hidden w-full px-5 mt-6">
        <div class="max-w-[470px] mx-auto space-y-4">

          <!-- Item 1: High Quality Medical Care (open by default) -->
          <details class="group rounded-2xl shadow-[0_10px_30px_rgba(15,23,42,0.08)] bg-white open:bg-[#6C3130]" open>
            <summary class="flex items-center justify-between gap-3 px-4 py-3 cursor-pointer list-none rounded-2xl group-open:bg-[#6C3130]">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center bg-[#FE9C3E]">
                  <img src="./assets/icons/trophy-icon.png" alt="" class="w-6 h-6">
                </div>
                <p class="font-semibold text-base text-[#6C3130] group-open:text-white">
                  High Quality Medical Care
                </p>
              </div>
              <span class="text-xl text-[#6C3130] group-open:text-white transform transition-transform group-open:rotate-180">
                ▲
              </span>
            </summary>

            <div class="px-4 pb-4 pt-1 text-sm leading-relaxed text-white">
              At MaAx Hospitals, we deliver top-quality medical care
              with specialised services, advanced treatments, and
              expert support — all under one roof.
            </div>
          </details>

          <!-- Item 2: Patient-Centric care -->
          <!-- Item 2: Patient-Centric care -->
          <details class="group rounded-2xl shadow-[0_10px_30px_rgba(15,23,42,0.08)] bg-white open:bg-[#6C3130]">
            <summary class="flex items-center justify-between gap-3 px-4 py-3 cursor-pointer list-none rounded-2xl group-open:bg-[#6C3130]">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center bg-[#FE9C3E]">
                  <img src="./assets/icons/help-icon.png" alt="" class="w-6 h-6">
                </div>
                <p class="font-semibold text-base text-[#6C3130] group-open:text-white">
                  Patient-Centric care
                </p>
              </div>
              <span class="text-xl text-[#6C3130] group-open:text-white transform transition-transform group-open:rotate-180">
                ▲
              </span>
            </summary>

            <div class="px-4 pb-4 pt-1 text-sm leading-relaxed text-[#6C3130] group-open:text-white">
              At MaAx Hospitals, we deliver top-quality medical care with specialised services,
              advanced treatments, and expert support — all under one roof.
            </div>
          </details>


          <!-- Item 3: Holistic Healthcare Services -->
          <!-- Item 3: Holistic Healthcare Services -->
          <details class="group rounded-2xl shadow-[0_10px_30px_rgba(15,23,42,0.08)] bg-white open:bg-[#6C3130]">
            <summary class="flex items-center justify-between gap-3 px-4 py-3 cursor-pointer list-none rounded-2xl group-open:bg-[#6C3130]">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center bg-[#FE9C3E]">
                  <img src="./assets/icons/lotus-icon.png" alt="" class="w-6 h-6">
                </div>
                <p class="font-semibold text-base text-[#6C3130] group-open:text-white">
                  Holistic Healthcare Services
                </p>
              </div>
              <span class="text-xl text-[#6C3130] group-open:text-white transform transition-transform group-open:rotate-180">
                ▲
              </span>
            </summary>

            <div class="px-4 pb-4 pt-1 text-sm leading-relaxed text-[#6C3130] group-open:text-white">
              At MaAx Hospitals, we deliver top-quality medical care with specialised
              services, advanced treatments, and expert support — all under one roof.
            </div>
          </details>


        </div>
      </div>

    </div>
  </section>


  <section class="w-full py-10 ">
    <div class="max-w-4xl mx-auto text-center">

      <!-- Heading -->
      <h2 class="text-2xl font-semibold">
        <span class="text-[#6C3130]">Explore</span>
        <span class="text-brand">Our Specialities</span>
      </h2>

      <!-- Tabs -->
      <div class="flex justify-center gap-10 mt-6 text-brand text-lg font-medium flex-wrap">

        <!-- Active Tab -->
        <button class="px-5 py-2 bg-brand text-white rounded-full">
          Specialities
        </button>

        <!-- Inactive Tabs -->
        <button class="hover:text-[#c45d16] transition">Procedures</button>
        <button class="hover:text-[#c45d16] transition">Diagnostics</button>

      </div>

    </div>



    <div class="flex flex-wrap justify-center gap-3 mt-5">
      <div class="max-w- mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
        <!-- Title -->
        <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
          Heart & Vascular Care
        </h3>

        <!-- Image -->
        <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
          <img
            src="./assets/heart-care.jpg"
            alt="Heart & Vascular Care"
            class="w-full h-full object-cover" />
        </div>

        <!-- Button -->
        <div class="flex justify-center">
          <button
            class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
            Read more
          </button>
        </div>
      </div>
      <div class="max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
        <!-- Title -->
        <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
          Heart & Vascular Care
        </h3>

        <!-- Image -->
        <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
          <img
            src="./assets/heart-care.jpg"
            alt="Heart & Vascular Care"
            class="w-full h-full object-cover" />
        </div>

        <!-- Button -->
        <div class="flex justify-center">
          <button
            class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
            Read more
          </button>
        </div>
      </div>
      <div class="max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
        <!-- Title -->
        <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
          Heart & Vascular Care
        </h3>

        <!-- Image -->
        <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
          <img
            src="./assets/heart-care.jpg"
            alt="Heart & Vascular Care"
            class="w-full h-full object-cover" />
        </div>

        <!-- Button -->
        <div class="flex justify-center">
          <button
            class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
            Read more
          </button>
        </div>
      </div>
      <div class="max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
        <!-- Title -->
        <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
          Heart & Vascular Care
        </h3>

        <!-- Image -->
        <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
          <img
            src="./assets/heart-care.jpg"
            alt="Heart & Vascular Care"
            class="w-full h-full object-cover" />
        </div>

        <!-- Button -->
        <div class="flex justify-center">
          <button
            class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
            Read more
          </button>
        </div>
      </div>
      <div class="max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
        <!-- Title -->
        <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
          Heart & Vascular Care
        </h3>

        <!-- Image -->
        <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
          <img
            src="./assets/heart-care.jpg"
            alt="Heart & Vascular Care"
            class="w-full h-full object-cover" />
        </div>

        <!-- Button -->
        <div class="flex justify-center">
          <button
            class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
            Read more
          </button>
        </div>
      </div>
      <div class="max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
        <!-- Title -->
        <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
          Heart & Vascular Care
        </h3>

        <!-- Image -->
        <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
          <img
            src="./assets/heart-care.jpg"
            alt="Heart & Vascular Care"
            class="w-full h-full object-cover" />
        </div>

        <!-- Button -->
        <div class="flex justify-center">
          <button
            class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
            Read more
          </button>
        </div>
      </div>
      <div class="max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
        <!-- Title -->
        <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
          Heart & Vascular Care
        </h3>

        <!-- Image -->
        <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
          <img
            src="./assets/heart-care.jpg"
            alt="Heart & Vascular Care"
            class="w-full h-full object-cover" />
        </div>

        <!-- Button -->
        <div class="flex justify-center">
          <button
            class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
            Read more
          </button>
        </div>
      </div>
      <div class="max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
        <!-- Title -->
        <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
          Heart & Vascular Care
        </h3>

        <!-- Image -->
        <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
          <img
            src="./assets/heart-care.jpg"
            alt="Heart & Vascular Care"
            class="w-full h-full object-cover" />
        </div>

        <!-- Button -->
        <div class="flex justify-center">
          <button
            class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
            Read more
          </button>
        </div>
      </div>
      <div class="max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
        <!-- Title -->
        <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
          Heart & Vascular Care
        </h3>

        <!-- Image -->
        <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
          <img
            src="./assets/heart-care.jpg"
            alt="Heart & Vascular Care"
            class="w-full h-full object-cover" />
        </div>

        <!-- Button -->
        <div class="flex justify-center">
          <button
            class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
            Read more
          </button>
        </div>
      </div>
      <div class="max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
        <!-- Title -->
        <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
          Heart & Vascular Care
        </h3>

        <!-- Image -->
        <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
          <img
            src="./assets/heart-care.jpg"
            alt="Heart & Vascular Care"
            class="w-full h-full object-cover" />
        </div>

        <!-- Button -->
        <div class="flex justify-center">
          <button
            class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
            Read more
          </button>
        </div>
      </div>
    </div>

    <div class="w-full flex justify-center mt-5">
      <button class="  flex justify-center items-center gap-2 border border-[#f28c28] text-[#f28c28] 
               px-5 py-2 rounded-full font-medium text-xl hover:bg-[#fff7ef] transition">
        view all
        <span class="text-lg">→</span>
      </button>
    </div>



  </section>




  <section class="container mx-auto mt-32 mb-10 px-5 lg:px-0 overflow-visible">

    <div class="relative bg-[#6D3333] rounded-[2rem] shadow-xl flex flex-col md:flex-row md:items-center px-6 pb-8 pt-0 md:pr-8 md:pl-0 md:py-10 z-0">

      <div class="relative z-20 w-full md:w-auto flex justify-center md:block -mt-32 md:mt-0 mb-6 md:mb-0">
        <img src="./assets/banners/machine.png"
          class="
          w-56 h-auto drop-shadow-2xl
          
    
          md:absolute md:w-[350px] md:-bottom-10 md:-left-10
          

          lg:w-[450px] lg:h-[450px] lg:-bottom-48 lg:-left-16
          
          max-w-none
        "
          alt="Robotic Surgery Machine">
      </div>

      <div class="w-full md:w-2/3 md:ml-auto lg:pl-32 text-white relative z-10">

        <h2 class="text-2xl md:text-3xl font-bold mb-4 text-center md:text-left">
          State-of-the-Art Medical infrastructure
        </h2>

        <p class="text-sm md:text-base text-gray-200 mb-8 leading-relaxed text-center md:text-left">
          MaAx Super Specialty Hospitals offers state-of-the-art facilities and advanced technology to ensure high-quality care and better patient outcomes — all delivered with compassion and expertise.
        </p>

        <div class="bg-gradient-to-r from-orange-400 to-orange-500 rounded-2xl md:rounded-full p-5 md:px-8 md:py-4 shadow-lg">

          <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-6 gap-x-2 lg:gap-4 items-center">

            <div class="flex flex-col sm:flex-row items-center sm:space-x-2 text-center sm:text-left lg:border-r border-orange-300/50 lg:last:border-0 border-none">
              <img src="./assets/icons/liver.png" class="w-10 h-10 md:w-16 md:h-16 text-white mb-2 sm:mb-0 shrink-0" alt="">
              <div>
                <span class="block text-lg md:text-xl font-medium text-white">400+</span>
                <span class="text-xs md:text-lg text-white/90 leading-tight block">Liver Transplants</span>
              </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center sm:space-x-2 text-center sm:text-left lg:border-r border-orange-300/50 lg:last:border-0 border-none">
              <img src="./assets/icons/bone.png" class="w-10 h-10 md:w-16 md:h-16 text-white mb-2 sm:mb-0 shrink-0" alt="">
              <div>
                <span class="block text-lg md:text-xl font-medium text-white">850+</span>
                <span class="text-xs md:text-lg text-white/90 leading-tight block">Bone Marrow</span>
              </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center sm:space-x-2 text-center sm:text-left lg:border-r border-orange-300/50 lg:last:border-0 border-none">
              <img src="./assets/icons/brain.png" class="w-10 h-10 md:w-16 md:h-16 text-white mb-2 sm:mb-0 shrink-0" alt="">
              <div>
                <span class="block text-lg md:text-xl font-medium text-white">1000+</span>
                <span class="text-xs md:text-lg text-white/90 leading-tight block">Neuro Surgeries</span>
              </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center sm:space-x-2 text-center sm:text-left">
              <img src="./assets/icons/knife.png" class="w-10 h-10 md:w-16 md:h-16 text-white mb-2 sm:mb-0 shrink-0" alt="">
              <div>
                <span class="block text-lg md:text-xl font-medium text-white">20k+</span>
                <span class="text-xs md:text-lg text-white/90 leading-tight block">General Surgeries</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>




  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
            <!-- Modal header -->
            <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                <h3 class="text-lg font-medium text-heading">
                    Terms of Service
                </h3>
                <button type="button" class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="space-y-4 md:space-y-6 py-4 md:py-6">
                <p class="leading-relaxed text-body">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="leading-relaxed text-body">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center border-t border-default space-x-4 pt-4 md:pt-5">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">I accept</button>
                <button data-modal-hide="default-modal" type="button" class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Decline</button>
            </div>
        </div>
    </div>
</div>



<!-- OVERLAY -->
<div id="overlay"
     class="fixed inset-0 bg-black/60 z-40 hidden">
</div>

<!-- POPUP CONTAINER -->
<div id="popupDialog"
     class="fixed inset-0 z-50 hidden flex items-center justify-center p-4">

  <!-- Card -->
  <div class="bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-w-3xl relative">

    <!-- Close Button -->
    <button onclick="closePopup()"
      class="absolute right-4 top-4 text-gray-400 hover:text-gray-600 text-3xl leading-none">
      &times;
    </button>

    <div class="flex flex-col md:flex-row">

      <!-- Image -->
      <div class="md:w-[360px] md:h-[420px]">
        <img
          src="./assets/genrated-image.png"
          class="w-full h-full object-cover"
          alt="Doctor" />
      </div>

      <!-- Form Section -->
      <div class="px-6 md:px-8 py-6 flex items-center md:h-[420px]">
        <div class="w-full">

          <p class="text-xs font-semibold tracking-[0.15em] text-gray-500 uppercase">
            Talk to our <span class="text-[#F97316]">Health Advisor</span>
          </p>

          <form class="mt-5 space-y-4">

            <!-- Full Name -->
            <div class="flex flex-col gap-1">
              <label class="text-sm font-medium text-gray-700">
                Full Name<span class="text-red-500">*</span>
              </label>
              <input
                type="text"
                class="h-10 w-full rounded-lg border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316]"
                placeholder="Enter your full name" />
            </div>

            <!-- Email -->
            <div class="flex flex-col gap-1">
              <label class="text-sm font-medium text-gray-700">
                Email<span class="text-red-500">*</span>
              </label>
              <input
                type="email"
                class="h-10 w-full rounded-lg border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316]"
                placeholder="Enter your email" />
            </div>

            <!-- Mobile -->
            <div class="flex flex-col gap-1">
              <label class="text-sm font-medium text-gray-700">
                Mobile Number<span class="text-red-500">*</span>
              </label>

              <div class="flex gap-2">
                <!-- Country Code -->
                <select
                  class="h-10 w-24 rounded-lg border border-gray-300 px-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316]">
                  <option value="+91">+91 IN</option>
                  <option value="+1">+1 US</option>
                  <option value="+44">+44 UK</option>
                </select>

                <!-- Number -->
                <input
                  type="tel"
                  class="h-10 flex-1 rounded-lg border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316]"
                  placeholder="Enter your mobile number" />
              </div>
            </div>

            <!-- Checkbox -->
            <label class="flex items-start gap-2 text-xs text-gray-600 cursor-pointer">
              <input type="checkbox"
                     class="mt-[3px] h-4 w-4 rounded border-gray-300 text-[#F97316] focus:ring-[#F97316]" />
              <span>I consent maxX hospitals to contact me</span>
            </label>

            <!-- Button -->
            <button
              class="mt-2 w-full h-10 rounded-lg bg-[#F97316] text-white text-sm font-semibold shadow hover:bg-[#ea6a0e] transition">
              Request a Call Back
            </button>

          </form>

        </div>
      </div>

    </div>

  </div>
</div>

<script>
  function openPopup() {
    document.getElementById("overlay").classList.remove("hidden");
    document.getElementById("popupDialog").classList.remove("hidden");
  }

  function closePopup() {
    document.getElementById("overlay").classList.add("hidden");
    document.getElementById("popupDialog").classList.add("hidden");
  }
</script>

<script>
  document.getElementById("searchBtn").addEventListener("click", function () {
    const specialty = document.getElementById("specialtySelect").value;
    const doctor = document.getElementById("doctorSelect").value;


    if (doctor) {
      window.location.href = doctor;
      return;
    }

    if (specialty) {
      window.location.href = specialty;
      return;
    }

    alert("Please select a specialty or a doctor.");
  });
</script>




  <!-- <section class="mx-auto max-w-7xl px-4 py-10">

    <h2 class="text-center text-xl md:text-2xl font-semibold text-[#6C3130] mb-6">
      Happy Patients, Happy Stories
    </h2>


    <div
      class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-10">
 
      <div class="shrink-0 w-[260px] md:w-72">
        <img
          src="./assets/testimonials.png"
          alt="Patient Testimonial"
          class="w-full h-auto rounded-2xl shadow-md object-cover" />
      </div>

  
      <div class="shrink-0 w-[260px] md:w-72">
        <img
          src="./assets/testimonials/image 32.png"
          alt="Patient Testimonial"
          class="w-full h-auto rounded-2xl shadow-md object-cover" />
      </div>


      <div class="shrink-0 w-[260px] md:w-72">
        <img
          src="./assets/testimonials/image 33.png"
          alt="Patient Testimonial"
          class="w-full h-auto rounded-2xl shadow-md object-cover" />
      </div>


      <div class="shrink-0 w-[260px] md:w-72">
        <img
          src="./assets/testimonials/image 34.png"
          alt="Patient Testimonial"
          class="w-full h-auto rounded-2xl shadow-md object-cover" />
      </div>
    </div>

  </section> -->







  <section class="max-w-7xl mx-auto">

    <div class="max-w-4xl mx-auto text-center ">

      <!-- Heading -->
      <h2 class="text-2xl font-semibold">
        <span class="text-[#6C3130]">Real Patients,</span>
        <span class="text-brand"> Real Stories</span>
      </h2>

      <!-- Tabs -->


    </div>
    <div class="grid md:grid-cols-3 grid-cols-1 justify-items-center gap-10 mt-5 lg:px-0 px-5 ">


      <div class="max-w-sm rounded overflow-hidden shadow-lg">

        <div class="w-full relative p-5">
          <!-- Gradient Overlay -->

          <!-- Image -->
          <img class="w-full h-full object-cover rounded-2xl " src="./assets/testimonial.png" alt="Sunset in the mountains">

          <!-- Title -->

        </div>

        <div class="px-6 py-4 flex gap-5">

          <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
          <p class="text-[#525252] text-xl  font-medium ">
            Successful Heart and lungs Treatment by Our Doctor
          </p>
        </div>

      </div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg">

        <div class="w-full relative p-5">
          <!-- Gradient Overlay -->

          <!-- Image -->
          <img class="w-full h-full object-cover rounded-2xl " src="./assets/testimonial.png" alt="Sunset in the mountains">

          <!-- Title -->

        </div>

        <div class="px-6 py-4 flex gap-5">

          <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
          <p class="text-[#525252] text-xl  font-medium ">
            Successful Heart and lungs Treatment by Our Doctor
          </p>
        </div>

      </div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg">

        <div class="w-full relative p-5">
          <!-- Gradient Overlay -->

          <!-- Image -->
          <img class="w-full h-full object-cover rounded-2xl " src="./assets/testimonial.png" alt="Sunset in the mountains">

          <!-- Title -->

        </div>

        <div class="px-6 py-4 flex gap-5">

          <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
          <p class="text-[#525252] text-xl  font-medium ">
            Successful Heart and lungs Treatment by Our Doctor
          </p>
        </div>

      </div>
    </div>


  </section>


  <section class="max-w-7xl mx-auto mt-10">

    <div class="max-w-4xl mx-auto text-center">

      <!-- Heading -->
      <h2 class="text-2xl font-semibold">
        <span class="text-[#6C3130]">Explore</span>
        <span class="text-brand">Our Health Blogs</span>
      </h2>

      <!-- Tabs -->
      <div class="flex justify-center gap-10 mt-6 text-brand text-lg font-medium">

        <!-- Active Tab -->
        <button class="px-5 py-2 bg-brand text-white rounded-full">
          Sucess Stories
        </button>

        <!-- Inactive Tabs -->
        <button class="hover:text-[#c45d16] transition border border-[#c45d16] p-3 rounded-full">Blogs from Our Experts</button>


      </div>

    </div>
    <div class="grid md:grid-cols-3 grid-cols-1 justify-items-center gap-10 mt-5 lg:px-0 px-5 ">


      <div class="max-w-sm rounded overflow-hidden shadow-lg">

        <div class="w-full relative">
          <!-- Gradient Overlay -->
          <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>

          <!-- Image -->
          <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">

          <!-- Title -->
          <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
            Angioplasty
          </p>
        </div>

        <div class="px-6 py-4">
          <div class=" text-xl font-medium mb-2 text-[#525252]">Successful Heart and Kidney Treatment by Our Doctor
          </div>
          <div class="flex items-center  pt-10 gap-5 ">
            <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
            <p class="text-[#6C3130] text-xl  font-medium ">
              Patient Recovery Story </p>
          </div>
        </div>

      </div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg">

        <div class="w-full relative">
          <!-- Gradient Overlay -->
          <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>

          <!-- Image -->
          <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">

          <!-- Title -->
          <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
            Angioplasty
          </p>
        </div>

        <div class="px-6 py-4">
          <div class=" text-xl font-medium mb-2 text-[#525252]">Successful Heart and Kidney Treatment by Our Doctor
          </div>
          <div class="flex items-center  pt-10 gap-5 ">
            <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
            <p class="text-[#6C3130] text-xl  font-medium ">
              Patient Recovery Story </p>
          </div>
        </div>

      </div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg">

        <div class="w-full relative">
          <!-- Gradient Overlay -->
          <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>

          <!-- Image -->
          <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">

          <!-- Title -->
          <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
            Angioplasty
          </p>
        </div>

        <div class="px-6 py-4">
          <div class=" text-xl font-medium mb-2 text-[#525252]">Successful Heart and Kidney Treatment by Our Doctor
          </div>
          <div class="flex items-center  pt-10 gap-5 ">
            <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
            <p class="text-[#6C3130] text-xl  font-medium ">
              Patient Recovery Story </p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="xl:max-w-[1500px] max-w-7xl mx-auto px-4 py-16 font-poppins pt-24">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-[#A85045]">
        At maAx Hospitals, <span class="text-orange-500">Get Better in 3 Easy Steps</span>
      </h2>
    </div>

    <div class="relative w-full bg-transparent md:bg-[#FFDCC2] rounded-3xl">

      <div class="absolute inset-0 overflow-visible md:overflow-hidden rounded-3xl z-0 pointer-events-none">
        <div class="absolute bg-[#E89F85] opacity-50 md:opacity-30 rounded-full 
                      w-72 h-72 top-4 left-1/2 -translate-x-1/2 
                      md:w-80 md:h-80 md:top-auto md:left-auto md:translate-x-0 md:-bottom-10 md:-right-10 z-0">
        </div>
      </div>

      <div class="relative z-10 flex flex-col md:flex-row items-center md:items-center lg:items-end justify-between px-0 md:px-6 lg:px-10 pt-0 md:pt-14 pb-0 md:pb-0">

        <div class="w-full md:w-3/5 xl:w-1/2 space-y-6 order-2 md:order-1 pb-0 md:pb-14 mt-12 md:mt-0 px-4 md:px-0">

          <div class="bg-white p-5 rounded-xl shadow-md border border-gray-100 flex items-start gap-5 w-full md:max-w-md transition-transform hover:-translate-y-1 duration-300">
            <div class="bg-[#D66A6A] text-white text-3xl font-bold w-12 h-12 flex items-center justify-center rounded-lg shrink-0 leading-none">
              1
            </div>
            <div>
              <h3 class="font-bold text-xl text-gray-800">
                Get the <span class="text-orange-500">Right Diagnosis</span>
              </h3>
              <p class="text-gray-500 text-sm mt-1 leading-relaxed">
                Clear, accurate answers you can trust to understand your condition
              </p>
            </div>
          </div>

          <div class="bg-white p-5 rounded-xl shadow-md border border-gray-100 flex items-start gap-5 w-full md:max-w-md md:ml-6 lg:ml-12 xl:ml-28 transition-transform hover:-translate-y-1 duration-300">
            <div class="bg-[#A85045] text-white text-3xl font-bold w-12 h-12 flex items-center justify-center rounded-lg shrink-0 leading-none">
              2
            </div>
            <div>
              <h3 class="font-bold text-lg text-gray-800">
                Get the <span class="text-orange-500">Right Treatment & Cost</span>
              </h3>
              <p class="text-gray-500 text-sm mt-1 leading-relaxed">
                Clear, accurate answers you can trust to understand your condition
              </p>
            </div>
          </div>

          <div class="bg-white p-5 rounded-xl shadow-md border border-gray-100 flex items-start gap-5 w-full md:max-w-md md:ml-12 lg:ml-24 xl:ml-60 transition-transform hover:-translate-y-1 duration-300">
            <div class="bg-[#5D3333] text-white text-3xl font-bold w-12 h-12 flex items-center justify-center rounded-lg shrink-0 leading-none">
              3
            </div>
            <div>
              <h3 class="font-bold text-lg text-gray-800">
                Get the <span class="text-orange-500">Right Care for Recovery</span>
              </h3>
              <p class="text-gray-500 text-sm mt-1 leading-relaxed">
                Clear, accurate answers you can trust to understand your condition
              </p>
            </div>
          </div>

        </div>

        <div class="w-full md:w-2/5 xl:w-5/12 flex justify-center md:justify-end relative order-1 md:order-2 z-20">
          <img src="./assets/3-steps-image.png"
            alt="Doctor and Patient"
            class="w-auto h-auto 
                            max-w-[280px] md:max-w-[300px] lg:max-w-[450px] xl:max-w-[650px] 
                            object-contain 
                            md:-mt-16 lg:-mt-24 xl:-mt-32">
        </div>

      </div>
    </div>
  </section>





  <!-- <?php require "./demo.php" ?> -->




</body>

</html>