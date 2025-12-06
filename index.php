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
          src="./assets/banners/family-home.png"
          class="lg:w-[900px] lg:h-[560px] md:h-[400px] "
          alt="">
      </div>


    </div>
  </section>



  <section class="flex justify-center  ">
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



    <div class="flex flex-wrap justify-center gap-3 mt-5">
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




  <section class="mx-auto max-w-7xl px-4 py-10">

  <!-- Heading (optional – remove if you already have one) -->
  <h2 class="text-center text-xl md:text-2xl font-semibold text-[#6C3130] mb-6">
    Happy Patients, Happy Stories
  </h2>

  <!-- Cards wrapper -->
  <div
    class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-10"
  >
    <!-- Card 1 -->
    <div class="shrink-0 w-[260px] md:w-72">
      <img
        src="./assets/testimonials.png"
        alt="Patient Testimonial"
        class="w-full h-auto rounded-2xl shadow-md object-cover"
      />
    </div>

    <!-- Card 2 -->
      <div class="shrink-0 w-[260px] md:w-72">
      <img
        src="./assets/testimonials/image 32.png"
        alt="Patient Testimonial"
        class="w-full h-auto rounded-2xl shadow-md object-cover"
      />
    </div>

    <!-- Card 3 -->
    <div class="shrink-0 w-[260px] md:w-72">
      <img
        src="./assets/testimonials/image 33.png"
        alt="Patient Testimonial"
        class="w-full h-auto rounded-2xl shadow-md object-cover"
      />
    </div>

    <!-- Card 4 -->
 <div class="shrink-0 w-[260px] md:w-72">
      <img
        src="./assets/testimonials/image 34.png"
        alt="Patient Testimonial"
        class="w-full h-auto rounded-2xl shadow-md object-cover"
      />
    </div>
  </div>

</section>


</body>

</html>