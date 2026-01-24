<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .swiper-button-next,
    .swiper-button-prev {
      position: absolute !important;
      top: 50% !important;
      transform: translateY(-50%);
    }
  </style>
  <style>
    /* Hide default swiper arrows */
    .swiper-button-next::after,
    .swiper-button-prev::after {
      display: none !important;
    }
  </style>
</head>

<body class="bg-surface-soft font-sans">
  <?php require "./header.php" ?>

  <section class="w-full py-8  px-4 sm:px-8 ">
    <div
      class="mx-auto rounded-2xl p-4 lg:p-8 flex flex-col lg:flex-row flex-wrap gap-8 lg:gap-10">
      <!-- LEFT : DOCTOR IMAGE + BUTTON -->
      <div class="flex flex-col items-center lg:items-start gap-5 w-full lg:w-[30%]">
        <div
          class="w-full max-w-[493px] h-auto lg:h-[493px] rounded-xl overflow-hidden shadow-md">
          <img
            src="./assets/doctor-individual.jpg"
            alt="Doctor"
            class="w-full h-full object-cover" />
        </div>

        <button
          class="w-full max-w-[493px] h-12 rounded-lg bg-[#F58220] text-white font-semibold tracking-wide shadow hover:brightness-110 transition">
          Request Call back
        </button>
      </div>

      <!-- MIDDLE : DOCTOR DETAILS -->
      <div class="flex flex-col gap-3 w-full lg:w-[40%]">
        <h2 class="text-xl lg:text-2xl font-semibold text-[#874746]">
          Dr Subhash S H
        </h2>
        <p class="text-sm lg:text-base text-gray-700">
          Lead Consultant - Medical Oncologist
        </p>

        <div class="space-y-4 lg:space-y-5 text-sm lg:text-lg text-gray-700">
          <p>
            <span class="font-semibold text-[#874746]">Qualification:</span> <br />
            MBBS, MD (General Medicine), DM (Medical Oncology), FRCP (Edin.)
          </p>

          <p>
            <span class="font-semibold text-[#874746]">Years of Practice:</span>
            <br />
            20
          </p>

          <p>
            <span class="font-semibold text-[#874746]">Specialities:</span> <br />
            Oncology, Medical Oncology
          </p>

          <p>
            <span class="font-semibold text-[#874746]">Location:</span> <br />
            RMR Road, Durgigudi Shivamogga
          </p>


        </div>
      </div>

      <!-- RIGHT : APPOINTMENT FORM -->
      <?php require "./components/doctor-form.php" ?>
    </div>
  </section>



  <section class="w-full py-12 xl:px-28 bg-[#F5F7FB]">
    <h3 class="text-2xl text-[#6C3130] text-center font-semibold p-3">Our <span class="text-[#F58220]">Doctors</span></h3>
    <div class=" mx-auto ">
      <div class="swiper doctorSwiper">
        <div class="swiper-wrapper ">

          <!-- SLIDE 1 -->
          <div class="swiper-slide">
            <article
              class="w-full h-full rounded-2xl bg-white shadow-[0_10px_30px_rgba(15,23,42,0.08)] px-6 pt-8 pb-6 flex flex-col items-center">
              <div
                class="w-28 h-28 rounded-full border-[5px] border-orange-500 overflow-hidden flex items-center justify-center">
                <img src="images/doctor-1.png" alt="Dr Prasanna B"
                  class="w-full h-full object-cover" />
              </div>

              <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
                Dr Prasanna B
              </h3>
              <p class="text-sm text-[#6B7280] text-center">MBBS, MS</p>
              <p class="text-sm text-orange-500 font-medium mt-1 text-center">
                Physician
              </p>

              <div class="flex w-full mt-6 text-sm font-medium">
                <button
                  class="flex-1 py-2.5 bg-[#532D29] text-white rounded-l-xl">
                  view profile
                </button>
                <button
                  class="flex-1 py-2.5 border border-orange-500 text-orange-500 bg-white rounded-r-xl">
                  Book Appointment
                </button>
              </div>
            </article>
          </div>

          <!-- SLIDE 2 -->
          <div class="swiper-slide">
            <article
              class="w-full h-full rounded-2xl bg-white shadow-[0_10px_30px_rgba(15,23,42,0.08)] px-6 pt-8 pb-6 flex flex-col items-center">
              <div
                class="w-28 h-28 rounded-full border-[5px] border-orange-500 overflow-hidden flex items-center justify-center">
                <img src="images/doctor-2.png" alt="Dr Anil Kumar"
                  class="w-full h-full object-cover" />
              </div>

              <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
                Dr Anil Kumar
              </h3>
              <p class="text-sm text-[#6B7280] text-center">MD, DM</p>
              <p class="text-sm text-orange-500 font-medium mt-1 text-center">
                Cardiologist
              </p>

              <div class="flex w-full mt-6 text-sm font-medium">
                <button
                  class="flex-1 py-2.5 bg-[#532D29] text-white rounded-l-xl">
                  view profile
                </button>
                <button
                  class="flex-1 py-2.5 border border-orange-500 text-orange-500 bg-white rounded-r-xl">
                  Book Appointment
                </button>
              </div>
            </article>
          </div>

          <!-- SLIDE 3 -->
          <div class="swiper-slide">
            <article
              class="w-full h-full rounded-2xl bg-white shadow-[0_10px_30px_rgba(15,23,42,0.08)] px-6 pt-8 pb-6 flex flex-col items-center">
              <div
                class="w-28 h-28 rounded-full border-[5px] border-orange-500 overflow-hidden flex items-center justify-center">
                <img src="images/doctor-3.png" alt="Dr Neha R"
                  class="w-full h-full object-cover" />
              </div>

              <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
                Dr Neha R
              </h3>
              <p class="text-sm text-[#6B7280] text-center">MBBS, DGO</p>
              <p class="text-sm text-orange-500 font-medium mt-1 text-center">
                Gynecologist
              </p>

              <div class="flex w-full mt-6 text-sm font-medium">
                <button
                  class="flex-1 py-2.5 bg-[#532D29] text-white rounded-l-xl">
                  view profile
                </button>
                <button
                  class="flex-1 py-2.5 border border-orange-500 text-orange-500 bg-white rounded-r-xl">
                  Book Appointment
                </button>
              </div>
            </article>
          </div>

          <!-- SLIDE 4 -->
          <div class="swiper-slide">
            <article
              class="w-full h-full rounded-2xl bg-white shadow-[0_10px_30px_rgba(15,23,42,0.08)] px-6 pt-8 pb-6 flex flex-col items-center">
              <div
                class="w-28 h-28 rounded-full border-[5px] border-orange-500 overflow-hidden flex items-center justify-center">
                <img src="images/doctor-4.png" alt="Dr Neha R"
                  class="w-full h-full object-cover" />
              </div>

              <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
                Dr Neha R
              </h3>
              <p class="text-sm text-[#6B7280] text-center">MBBS, DGO</p>
              <p class="text-sm text-orange-500 font-medium mt-1 text-center">
                Gynecologist
              </p>

              <div class="flex w-full mt-6 text-sm font-medium">
                <button
                  class="flex-1 py-2.5 bg-[#532D29] text-white rounded-l-xl">
                  view profile
                </button>
                <button
                  class="flex-1 py-2.5 border border-orange-500 text-orange-500 bg-white rounded-r-xl">
                  Book Appointment
                </button>
              </div>
            </article>
          </div>
          <div class="swiper-slide">
            <article
              class="w-full h-full rounded-2xl bg-white shadow-[0_10px_30px_rgba(15,23,42,0.08)] px-6 pt-8 pb-6 flex flex-col items-center">
              <div
                class="w-28 h-28 rounded-full border-[5px] border-orange-500 overflow-hidden flex items-center justify-center">
                <img src="images/doctor-4.png" alt="Dr Neha R"
                  class="w-full h-full object-cover" />
              </div>

              <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
                Dr Neha R
              </h3>
              <p class="text-sm text-[#6B7280] text-center">MBBS, DGO</p>
              <p class="text-sm text-orange-500 font-medium mt-1 text-center">
                Gynecologist
              </p>

              <div class="flex w-full mt-6 text-sm font-medium">
                <button
                  class="flex-1 py-2.5 bg-[#532D29] text-white rounded-l-xl">
                  view profile
                </button>
                <button
                  class="flex-1 py-2.5 border border-orange-500 text-orange-500 bg-white rounded-r-xl">
                  Book Appointment
                </button>
              </div>
            </article>
          </div>
          <div class="swiper-slide">
            <article
              class="w-full h-full rounded-2xl bg-white shadow-[0_10px_30px_rgba(15,23,42,0.08)] px-6 pt-8 pb-6 flex flex-col items-center">
              <div
                class="w-28 h-28 rounded-full border-[5px] border-orange-500 overflow-hidden flex items-center justify-center">
                <img src="images/doctor-4.png" alt="Dr Neha R"
                  class="w-full h-full object-cover" />
              </div>

              <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
                Dr Neha R
              </h3>
              <p class="text-sm text-[#6B7280] text-center">MBBS, DGO</p>
              <p class="text-sm text-orange-500 font-medium mt-1 text-center">
                Gynecologist
              </p>

              <div class="flex w-full mt-6 text-sm font-medium">
                <button
                  class="flex-1 py-2.5 bg-[#532D29] text-white rounded-l-xl">
                  view profile
                </button>
                <button
                  class="flex-1 py-2.5 border border-orange-500 text-orange-500 bg-white rounded-r-xl">
                  Book Appointment
                </button>
              </div>
            </article>
          </div>
        </div>

        <!-- Custom Navigation -->
        <div class="swiper-button-prev !w-12 !h-12 !flex !items-center !justify-center !bg-white !rounded-full shadow-md hover:shadow-lg transition">
          <img src="./assets/icons/arrow.png" class="w-5 rotate-180" alt="">
        </div>

        <div class="swiper-button-next !w-12 !h-12 !flex !items-center !justify-center !bg-white !rounded-full shadow-md hover:shadow-lg transition">
          <img src="./assets/icons/arrow.png" class="w-5" alt="">
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination mt-6"></div>

      </div>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    const doctorSwiper = new Swiper(".doctorSwiper", {
      loop: false,
      grabCursor: true,
      spaceBetween: 20, // gap between cards

      breakpoints: {
        0: {
          slidesPerView: 1.2
        },
        640: {
          slidesPerView: 2
        },
        1024: {
          slidesPerView: 3
        }, // 4 cards on desktop
        1200: {
          slidesPerView: 4
        },
      },

      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>




<?php require "./components/footer.php" ?>
</body>