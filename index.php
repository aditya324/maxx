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

</body>

</html>