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
</head>

<body class="bg-surface-soft font-sans">
  <?php require "./header.php" ?>

  <div class="flex flex-col lg:block relative min-h-[600px] lg:mt-0 mt-20">

    <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0  z-0 lg:mt-20"
      style="background-image: url('./assets/banners/medical-care.jpg');">
      <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop" class="hidden" onerror="this.parentElement.style.backgroundImage = `url('${this.src}')`">

      <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

      <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
        <div class="max-w-lg">

          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight">
            Health Checkups
          </h1>

          <p class="text-sm md:text-base lg:text-xl text-gray-200 leading-relaxed mt-2 lg:mt-4">
            maAx Hospital offers comprehensive health checkup packages designed for early detection
            and prevention of diseases. With advanced diagnostics and expert medical evaluation,
            we help you stay proactive about your health and well-being.
          </p>

        </div>
      </div>
    </div>

    <div class="lg:py-12 py-5 px-4 lg:bg-transparent lg:p-0 lg:relative lg:z-10 lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px] mt-9 ">

      <div class="w-full max-w-md mx-auto bg-white rounded-2xl shadow-xl p-6 md:p-8 lg:ml-auto lg:mr-0">
        <h2 class="text-center text-2xl font-bold text-orange-500 mb-6 lg:hidden">
          Book An Appointment
        </h2>
        <h2 class="hidden lg:block text-left text-xl font-bold text-gray-800 mb-6 uppercase">
          Talk to our <span class="text-orange-500">Health Advisor</span>
        </h2>

        <form class="space-y-4">
          <div>
            <input type="text" placeholder="Full Name*"
              class="w-full px-4 py-3 rounded-lg border border-gray-300 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition" />
          </div>

          <div>
            <input type="email" placeholder="Email*"
              class="w-full px-4 py-3 rounded-lg border border-gray-300 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition" />
          </div>

          <div class="flex rounded-lg border border-gray-300 overflow-hidden focus-within:ring-2 focus-within:ring-orange-500 focus-within:border-transparent transition">
            <div class="bg-white border-r border-gray-300 px-3 py-3 flex items-center min-w-[90px] justify-between">
              <span class="text-gray-700 text-sm font-medium">+91 IN</span>
              <svg class="w-4 h-4 ml-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
            <input type="tel" placeholder="Mobile Number*"
              class="w-full px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none" />
          </div>

          <div class="flex items-start gap-2 mt-2">
            <input type="checkbox" id="consent" class="mt-1 w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
            <label for="consent" class="text-xs text-gray-600">
              I consent maAx Hospital to contact me
            </label>
          </div>

          <button type="button" class="w-full bg-brown-800 hover:bg-brown-900 lg:bg-orange-500 lg:hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300 transform active:scale-95 mt-4 text-lg">
            <span class="lg:hidden">Book Now</span>
            <span class=" lg:inline">Request a Call Back</span>
          </button>
        </form>
      </div>
    </div>
  </div>

 <section class="relative z-20 lg:mt-20 mb-10 px-4 lg:px-0">
  <div
    class="max-w-3xl mx-auto bg-white rounded-[14px]
         shadow-[0_10px_30px_rgba(15,23,42,0.12)]
         px-5 py-4 lg:px-8 lg:py-5">

    <h3 class="text-lg lg:text-xl font-semibold text-gray-900 mb-2">
      Health Checkups at <span class="text-[#f97316]">maAx Hospital</span>
    </h3>

    <p class="text-[13px] lg:text-[14px] leading-relaxed text-gray-700">
      At maAx Hospital, we offer comprehensive health checkup programs designed to promote
      early detection and prevention of diseases. Our packages include a wide range of
      screenings, diagnostic tests, and expert medical consultations tailored to different
      age groups and health needs.

      With advanced diagnostic technology and a team of experienced healthcare professionals,
      we ensure accurate results and personalized guidance. Regular health checkups at maAx
      Hospital help you stay informed about your health, manage risks proactively, and lead
      a healthier, more confident life.
    </p>

  </div>
</section>

  <!-- <section class="w-full py-12 xl:px-40 bg-[#F5F7FB]">
    <div class=" mx-auto ">
      <div class="swiper doctorSwiper">
        <div class="swiper-wrapper ">

    
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

      
        <div class="swiper-button-prev !w-12 !h-12 !flex !items-center !justify-center !bg-white !rounded-full shadow-md hover:shadow-lg transition">
          <img src="./assets/icons/arrow.png" class="w-5 rotate-180" alt="">
        </div>

        <div class="swiper-button-next !w-12 !h-12 !flex !items-center !justify-center !bg-white !rounded-full shadow-md hover:shadow-lg transition">
          <img src="./assets/icons/arrow.png" class="w-5" alt="">
        </div>

    
        <div class="swiper-pagination mt-6"></div>

      </div>
    </div>
  </section> -->

  <section class="flex justify-center gap-8 flex-wrap">

    <!-- Cardiologist -->
    <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">
      <div class="flex justify-center -mt-2">
        <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
          <img src="./assets/doctors/Dr Manjunath A Phasalkar.webp" alt="Dr. Manjunath P. Pasalkar" class="w-full h-full object-cover" />
        </div>
      </div>

      <div class="mt-4">
        <h3 class="text-[20px] font-semibold text-[#5c2c20]">
          Dr. Manjunath P. Pasalkar
        </h3>
        <p class="text-gray-700 text-[15px] mt-1">
          MBBS, MD, DM (Cardiology)
        </p>
        <p class="text-orange-500 text-[17px] font-semibold mt-2">
          Cardiology
        </p>
      </div>

      <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
        <a href="./dr-manjunath.php" class="bg-[#582F28] text-white py-3 text-sm">View Profile</a>
        <a href="./dr-manjunath.php" class="bg-white text-orange-600 py-3 text-sm">Book Appointment</a>
      </div>
    </div>

    <!-- Cardiac Surgeon -->
    <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">
      <div class="flex justify-center -mt-2">
        <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
          <img src="./assets/doctors/Sudheer Bhatt.webp" alt="Dr. Sudheer M Bhat" class="w-full h-full object-cover" />
        </div>
      </div>

      <div class="mt-4">
        <h3 class="text-[20px] font-semibold text-[#5c2c20]">
          Dr. Sudheer M Bhat
        </h3>
        <p class="text-gray-700 text-[15px] mt-1">
          MBBS, MS, MCh (CTVS)
        </p>
        <p class="text-orange-500 text-[17px] font-semibold mt-2">
          Cardio Thoracic Surgery
        </p>
      </div>

      <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
        <a href="./dr-sudheer-m-bhat.php" class="bg-[#582F28] text-white py-3 text-sm">View Profile</a>
        <a href="./dr-sudheer-m-bhat.php" class="bg-white text-orange-600 py-3 text-sm">Book Appointment</a>
      </div>
    </div>

  </section>

  <section class="w-full bg-[#F5F7FB] py-10 lg:px-0 px-5">
    <div
      class="w-full max-w-[865px] mx-auto bg-white rounded-2xl shadow-[0_10px_30px_rgba(15,23,42,0.08)] overflow-hidden">
      <div class="grid md:grid-cols-[1.4fr_1fr]">
        <!-- LEFT CONTENT (second on mobile, first on md+) -->
        <div class="order-2 md:order-1 px-6 py-8 md:px-10 md:py-10">
          <h2 class="text-2xl md:text-[26px] font-semibold text-[#333333] mb-6">
            Treatments <span class="text-[#F58220]">Offered</span>
          </h2>

          <ul class="space-y-5 md:space-y-5 text-[15px] md:text-2xl leading-5 font-semibold tracking-wide">
            <li class="flex items-start gap-3">
              <span
                class="mt-1 h-6 w-6 flex items-center justify-center rounded-full bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
              <span>ECG &amp; 2D Echocardiography</span>
            </li>

            <li class="flex items-start gap-3">
              <span
                class="mt-1 h-6 w-6 flex items-center justify-center rounded-full bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
              <span>Treadmill Test (TMT)</span>
            </li>

            <li class="flex items-start gap-3">
              <span
                class="mt-1 h-6 w-6 flex items-center justify-center rounded-full bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
              <span>Holter Monitoring</span>
            </li>

            <li class="flex items-start gap-3">
              <span
                class="mt-1 h-6 w-6 flex items-center justify-center rounded-full bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
              <span>Ambulatory BP Monitoring</span>
            </li>

            <li class="flex items-start gap-3">
              <span
                class="mt-1 h-6 w-6 flex items-center justify-center rounded-full bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
              <span>Coronary Angiogram</span>
            </li>

            <li class="flex items-start gap-3">
              <span
                class="mt-1 h-6 w-6 flex items-center justify-center rounded-full bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
              <span>Angioplasty and Stenting</span>
            </li>

            <li class="flex items-start gap-3">
              <span
                class="mt-1 h-6 w-6 flex items-center justify-center rounded-full bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
              <span>Pacemaker and Device</span>
            </li>

            <li class="flex items-start gap-3">
              <span
                class="mt-1 h-6 w-6 flex items-center justify-center rounded-full bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
              <span>Implantation</span>
            </li>

            <li class="flex items-start gap-3">
              <span
                class="mt-1 h-6 w-6 flex items-center justify-center rounded-full bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
              <span>Heart Failure Management</span>
            </li>

            <li class="flex items-start gap-3">
              <span
                class="mt-1 h-6 w-6 flex items-center justify-center rounded-full bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
              <span>Preventive Cardiac Screenings</span>
            </li>

            <li class="flex items-start gap-3">
              <span
                class="mt-1 h-6 w-6 flex items-center justify-center rounded-full bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
              <span>Cardiovascular Risk Assessment</span>
            </li>
          </ul>
        </div>

        <!-- RIGHT IMAGE (first on mobile, second on md+) -->
        <div class="order-1 md:order-2 h-[220px] sm:h-[260px] md:h-[637px]">
          <img
            src="./assets/heart-device.jpg"
            alt="Medical equipment"
            class="w-full md:w-[405px] h-full object-cover" />
        </div>
      </div>
    </div>
  </section>



  <section class="w-full bg-[var(--brown)] p-5 xl:px-40 ">
    <div>
      <p class="text-center text-white text-xl font-semibold">
        Advanced Healthcare Services <br />
        <span class="text-[var(--orange)]">at maAx Super Specialty Hospital</span>
      </p>

      <!-- Swiper Container -->
      <div class="swiper mySwiper mt-6">
        <div class="swiper-wrapper">

          <!-- SLIDE 1 -->
          <div class="swiper-slide">
            <div class="flex flex-col">
              <div class="flex justify-center mt-5">
                <img src="./assets/book-appointment.webp"
                  class="h-52 rounded-xl"
                  alt="">
              </div>
              <div class="text-white px-5 mt-5 text-center">
                <p class="font-bold text-xl">Book an Appointment</p>
                <p class="xl:text-lg md:text-base">
                  Schedule your visit with expert doctors at maAx Super Specialty Hospital, Shivamogga
                </p>
              </div>
            </div>
          </div>

          <!-- SLIDE 2 -->
          <div class="swiper-slide">
            <div class="flex flex-col">
              <div class="flex justify-center mt-5">
                <img src="./assets/expert.webp"
                  class="h-52 rounded-xl"
                  alt="">
              </div>
              <div class="text-white px-5 mt-5 text-center">
                <p class="font-bold text-xl">Expert Medical Specialists</p>
                <p class="xl:text-lg md:text-base">
                  Get treated by highly qualified specialists across multiple departments
                </p>
              </div>
            </div>
          </div>

          <!-- SLIDE 3 -->
          <div class="swiper-slide">
            <div class="flex flex-col">
              <div class="flex justify-center mt-5">
                <img src="./assets/24x7.webp"
                  class="h-52 rounded-lg"
                  alt="">
              </div>
              <div class="text-white px-5 mt-5 text-center">
                <p class="font-bold text-xl">24/7 Emergency & Critical Care</p>
                <p class="xl:text-lg md:text-base">
                  Immediate medical attention with round-the-clock emergency services
                </p>
              </div>
            </div>
          </div>

          <!-- SLIDE 4 -->
          <div class="swiper-slide">
            <div class="flex flex-col">
              <div class="flex justify-center mt-5">
                <img src="./assets/advanced-diagnostics.webp"
                  class="h-52 rounded-lg"
                  alt="">
              </div>
              <div class="text-white px-5 mt-5 text-center">
                <p class="font-bold text-xl">Advanced Diagnostics</p>
                <p class="xl:text-lg md:text-base">
                  Accurate diagnosis with modern imaging and laboratory facilities
                </p>
              </div>
            </div>
          </div>

          <!-- SLIDE 5 -->
          <div class="swiper-slide">
            <div class="flex flex-col">
              <div class="flex justify-center mt-5">
                <img src="./assets/surgical-care.webp"
                  class="h-52 rounded-lg"
                  alt="">
              </div>
              <div class="text-white px-5 mt-5 text-center">
                <p class="font-bold text-xl">Comprehensive Surgical Care</p>
                <p class="xl:text-lg md:text-base">
                  Expertise in general, laparoscopic, and specialized surgical procedures
                </p>
              </div>
            </div>
          </div>

        </div>

        <!-- Navigation Buttons -->
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


  <section class="container mx-auto">



    <h2 class="text-2xl font-semibold text-center pt-12 pb-2">
      <span class="text-[#6C3130]">Real Patients,</span>
      <span class="text-brand">Real Stories</span>
    </h2>
    <!-- <div class="grid md:grid-cols-3 grid-cols-1 justify-items-center gap-10 mt-5 lg:px-0 px-5 ">


      <div class="max-w-sm rounded overflow-hidden shadow-lg yt-video-card" data-yt-video="hwH9BO1QEL8" referrerPolicy="strict-origin-when-cross-origin">

        <div class="w-full relative p-5">
       

     
          <img class="w-full h-full object-cover rounded-2xl " src="./assets/testimonials/image 107 (1).png" alt="Sunset in the mountains">



        </div>

        <div class="px-6 py-4 flex gap-5">

          <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
          <p class="text-[#525252] text-xl  font-medium ">
            Successful Heart and lungs Treatment by Our Doctor
          </p>
        </div>

      </div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg yt-video-card" data-yt-video="HPm9wgRENnM" referrerPolicy="strict-origin-when-cross-origin">

        <div class="w-full relative p-5">
        

        
          <img class="w-full h-full object-cover rounded-2xl " src="./assets/testimonial.png" alt="Sunset in the mountains">

  

        </div>

        <div class="px-6 py-4 flex gap-5">

          <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
          <p class="text-[#525252] text-xl  font-medium ">
            Successful Heart and lungs Treatment by Our Doctor
          </p>
        </div>

      </div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg yt-video-card" data-yt-video="8yc3498d-dA" referrerPolicy="strict-origin-when-cross-origin">

        <div class="w-full relative p-5">
        
          <img class="w-full h-full object-cover rounded-2xl " src="./assets/testimonials/Mask group.png" alt="Sunset in the mountains">

 
        </div>

        <div class="px-6 py-4 flex gap-5">

          <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
          <p class="text-[#525252] text-xl  font-medium ">
            Successful Heart and lungs Treatment by Our Doctor
          </p>
        </div>

      </div>
    </div> -->


    <div class=" container flex justify-center pt-10 gap-10 flex-wrap px-5 mx-auto">
      <iframe width="450" height="315" src="https://www.youtube.com/embed/hwH9BO1QEL8?si=3oowtPoHMVTP3_kl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe width="450" height="315" src="https://www.youtube.com/embed/HPm9wgRENnM?si=AmZT9pzbi90zVR5X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe width="450" height="315" src="https://www.youtube.com/embed/8yc3498d-dA?si=t9xSbGHsFuMe4NLI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>



    <div class="w-full flex justify-center mt-10">
      <a href="./patients-corner.php?type=videos" class="flex justify-center items-center gap-2 border border-[#f28c28] text-[#f28c28] 
        px-5 py-2 rounded-full font-medium text-lg hover:bg-[#fff7ef] transition bg-white">
        View All Patient Testimonials
        <span class="text-lg">→</span>
      </a>
    </div>

  </section>

  <section class="max-w-6xl mx-auto px-6 py-12">
    <h2 class="text-2xl md:text-3xl font-semibold text-gray-700 mb-6">
      Frequently <span class="text-[#FEAE01]">Asked Questions</span>
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      <!-- LEFT -->
      <div class="space-y-4">

        <div class="border border-[#FEAE01] rounded-lg bg-white">
          <button class="w-full flex justify-between items-center px-5 py-4" onclick="toggleAccordion(this)">
            <span class="text-gray-700 text-lg font-semibold">What services are offered?</span>
            <span class="accordion-icon w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
          </button>
          <div class="accordion-content hidden px-5 pb-4 text-gray-600 text-sm">
            We provide general medicine, surgery, cardiology, orthopedics, ENT, pediatrics, and more.
          </div>
        </div>

        <div class="border border-[#FEAE01] rounded-lg bg-white">
          <button class="w-full flex justify-between items-center px-5 py-4" onclick="toggleAccordion(this)">
            <span class="text-gray-700 text-lg font-semibold">How to book appointment?</span>
            <span class="accordion-icon w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
          </button>
          <div class="accordion-content hidden px-5 pb-4 text-gray-600 text-sm">
            You can book online, call the hospital, or visit the reception directly.
          </div>
        </div>

        <div class="border border-[#FEAE01] rounded-lg bg-white">
          <button class="w-full flex justify-between items-center px-5 py-4" onclick="toggleAccordion(this)">
            <span class="text-gray-700 text-lg font-semibold">Emergency available?</span>
            <span class="accordion-icon w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
          </button>
          <div class="accordion-content hidden px-5 pb-4 text-gray-600 text-sm">
            Yes, 24/7 emergency and ICU services are available.
          </div>
        </div>

        <div class="border border-[#FEAE01] rounded-lg bg-white">
          <button class="w-full flex justify-between items-center px-5 py-4" onclick="toggleAccordion(this)">
            <span class="text-gray-700 text-lg font-semibold">Diagnostics available?</span>
            <span class="accordion-icon w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
          </button>
          <div class="accordion-content hidden px-5 pb-4 text-gray-600 text-sm">
            Yes, MRI, CT scan, X-ray, ultrasound, and lab tests are available.
          </div>
        </div>

      </div>

      <!-- RIGHT -->
      <div class="space-y-4">

        <div class="border border-[#FEAE01] rounded-lg bg-white">
          <button class="w-full flex justify-between items-center px-5 py-4" onclick="toggleAccordion(this)">
            <span class="text-gray-700 text-lg font-semibold">Specialist doctors?</span>
            <span class="accordion-icon w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
          </button>
          <div class="accordion-content hidden px-5 pb-4 text-gray-600 text-sm">
            Yes, experienced specialists are available across all departments.
          </div>
        </div>

        <div class="border border-[#FEAE01] rounded-lg bg-white">
          <button class="w-full flex justify-between items-center px-5 py-4" onclick="toggleAccordion(this)">
            <span class="text-gray-700 text-lg font-semibold">Surgery available?</span>
            <span class="accordion-icon w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
          </button>
          <div class="accordion-content hidden px-5 pb-4 text-gray-600 text-sm">
            Yes, general, laparoscopic, and advanced surgeries are performed.
          </div>
        </div>

        <div class="border border-[#FEAE01] rounded-lg bg-white">
          <button class="w-full flex justify-between items-center px-5 py-4" onclick="toggleAccordion(this)">
            <span class="text-gray-700 text-lg font-semibold">Insurance accepted?</span>
            <span class="accordion-icon w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
          </button>
          <div class="accordion-content hidden px-5 pb-4 text-gray-600 text-sm">
            Yes, most major insurance providers are accepted.
          </div>
        </div>

        <div class="border border-[#FEAE01] rounded-lg bg-white">
          <button class="w-full flex justify-between items-center px-5 py-4" onclick="toggleAccordion(this)">
            <span class="text-gray-700 text-lg font-semibold">Where is hospital?</span>
            <span class="accordion-icon w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
          </button>
          <div class="accordion-content hidden px-5 pb-4 text-gray-600 text-sm">
            Located in Shivamogga, Karnataka with easy access.
          </div>
        </div>

      </div>

    </div>
  </section>

  <div class="text-center">
    <p class="font-normal text-3xl">
      Confused about symptoms, treatment, or costs? Talk to us.
    </p>

  </div>

  <div class="flex justify-center mb-5">
    <button
      class="mt-4 w-56 px-4 py-2 rounded-full bg-gradient-to-r from-[#FEAE01] to-[#FF7101] text-white text-sm md:text-xl font-semibold shadow">
      Request Call Back
    </button>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>




  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: false,
      grabCursor: true,
      spaceBetween: 10, // gap between cards

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
  <script>
    function toggleAccordion(button) {
      const content = button.nextElementSibling;
      const icon = button.querySelector("span:last-child");

      // Close all others (optional UX)
      document.querySelectorAll(".accordion-content").forEach((el) => {
        if (el !== content) {
          el.classList.add("hidden");
        }
      });

      document.querySelectorAll(".accordion-icon").forEach((el) => {
        if (el !== icon) {
          el.innerText = "+";
        }
      });

      // Toggle current
      content.classList.toggle("hidden");
      icon.innerText = content.classList.contains("hidden") ? "+" : "−";
    }
  </script>
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