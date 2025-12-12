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

            <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 
            lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                <div class="max-w-lg">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight">
                        Surgery & Laparoscopy
                    </h1>
                    <p class="text-sm md:text-base lg:text-xl text-gray-200 leading-relaxed mt-2 lg:mt-4">
                        Our General Surgery and Laparoscopy team provides advanced surgical care using minimally
                        invasive techniques that ensure faster recovery, reduced pain, and superior precision.
                        From routine surgeries to complex gastrointestinal and abdominal procedures, we deliver
                        safe, effective, and patient-centered surgical outcomes.
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
                            I consent maAx hospitals to contact me
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
                Department of <span class="text-[#f97316]">Surgery & Laparoscopy</span>
            </h3>

            <p class="text-[13px] lg:text-[14px] leading-relaxed text-gray-700">
                The Department of Surgery & Laparoscopy at maAx Hospitals offers a wide spectrum
                of surgical treatments with a strong focus on minimally invasive laparoscopic
                techniques. Our surgeons combine precision, advanced technology, and patient-first
                care to ensure safe procedures, fewer complications, and quicker recovery for
                every patient.
            </p>
        </div>


    </section>


    <section class="w-full py-12 xl:px-40 bg-[#F5F7FB]">
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



    <section class="w-full bg-[#F5F7FB] py-10 lg:px-0 px-5">
        <div
            class="w-full max-w-[865px] mx-auto bg-white rounded-2xl shadow-[0_10px_30px_rgba(15,23,42,0.08)] overflow-hidden">
            <div class="grid md:grid-cols-[1.4fr_1fr]">
                <!-- LEFT CONTENT (second on mobile, first on md+) -->
                <div class="order-2 md:order-1 px-6 py-8 md:px-10 md:py-10">
                    <h2 class="text-2xl md:text-[26px] font-semibold text-[#333333] mb-6">
                        Treatments <span class="text-[#F58220]">Offered</span>
                    </h2>

                    <!-- SERVICES LIST -->
                    <ul class="space-y-3 md:space-y-3.5 text-[15px] md:text-2xl leading-5 font-semibold">

                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-6 w-6 flex items-center justify-center rounded-full
                 bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
                            <span>Laparoscopic Appendectomy & Gallbladder Surgery</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-6 w-6 flex items-center justify-center rounded-full
                 bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
                            <span>Hernia Repair (Open & Laparoscopic)</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-6 w-6 flex items-center justify-center rounded-full
                 bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
                            <span>GI & Abdominal Surgeries</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-6 w-6 flex items-center justify-center rounded-full
                 bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
                            <span>Piles, Fissure & Fistula Treatment (Laser & Surgical)</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-6 w-6 flex items-center justify-center rounded-full
                 bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
                            <span>Thyroid, Breast & Minor Soft Tissue Surgeries</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-6 w-6 flex items-center justify-center rounded-full
                 bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
                            <span>Trauma & Emergency Surgical Care</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-6 w-6 flex items-center justify-center rounded-full
                 bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
                            <span>Laparoscopic Adhesiolysis & Exploratory Surgery</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-6 w-6 flex items-center justify-center rounded-full
                 bg-[#7B3F34] text-white text-xs shrink-0">✓</span>
                            <span>Advanced Minimally Invasive Surgical Procedures</span>
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
                World-Class Specialties <br />
                <span class="text-[var(--orange)]">at your fingertips</span>
            </p>

            <!-- Swiper Container -->
            <div class="swiper mySwiper mt-6">
                <div class="swiper-wrapper">

                    <!-- SLIDE 1 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col">
                            <div class="flex justify-center  mt-5">
                                <img src="./assets/sliders/slider-image.jpg"
                                    class="h-52 rounded-xl"
                                    alt="">
                            </div>
                            <div class="text-white px-5 mt-5 text-center">
                                <p class="font-bold text-xl">Book an in-person Appointment</p>
                                <p class="xl:text-lg md:text-base">Schedule your consultation at a convenient time at our Shivomogga Hospital</p>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 2 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col">
                            <div class="flex justify-center mt-5">
                                <img src="./assets/sliders/slider-image.jpg"
                                    class="h-52 rounded-xl"
                                    alt="">
                            </div>
                            <div class="text-white px-5 mt-5 text-center">
                                <p class="font-bold text-xl">Meet Top Specialists</p>
                                <p class="xl:text-lg md:text-base">Connect with our expert doctors across multiple departments</p>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 3 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col">
                            <div class="flex justify-center mt-5">
                                <img src="./assets/sliders/slider-image.jpg"
                                    class="h-52 rounded-lg"
                                    alt="">
                            </div>
                            <div class="text-white px-5 mt-5 text-center">
                                <p class="font-bold text-xl">24/7 Emergency Care</p>
                                <p class="xl:text-lg md:text-base">Always available when you need urgent medical attention</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col">
                            <div class="flex justify-center mt-5">
                                <img src="./assets/sliders/slider-image.jpg"
                                    class="h-52 rounded-lg"
                                    alt="">
                            </div>
                            <div class="text-white px-5 mt-5 text-center">
                                <p class="font-bold text-xl">24/7 Emergency Care</p>
                                <p class="xl:text-lg md:text-base">Always available when you need urgent medical attention</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col">
                            <div class="flex justify-center mt-5">
                                <img src="./assets/sliders/slider-image.jpg"
                                    class="h-52 rounded-lg"
                                    alt="">
                            </div>
                            <div class="text-white px-5 mt-5 text-center">
                                <p class="font-bold text-xl">24/7 Emergency Care</p>
                                <p class="xl:text-lg md:text-base">Always available when you need urgent medical attention</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev !w-12 !h-12 !flex !items-center !justify-center !bg-white !rounded-full shadow-md hover:shadow-lg transition">
                    <img src="./assets/icons/arrow.png" class="w-5 rotate-180" alt="">
                </div>

                <div class="swiper-button-next !w-12 !h-12 !flex !items-center !justify-center !bg-white !rounded-full shadow-md hover:shadow-lg transition">
                    <img src="./assets/icons/arrow.png" class="w-5" alt="">
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination mt-6"></div>
                <!-- Pagination Dots -->

            </div>
        </div>
    </section>


    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-3xl md:text-4xl font-bold text-gray-800 mb-12">
                Patient <span class="text-orange-500">Stories</span>
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-items-center">

                <div class="relative w-full max-w-[312px] h-[266px] bg-gradient-to-br from-orange-400 to-orange-600 rounded-[10px]   overflow-hidden shadow-md transition-transform duration-300 hover:-translate-y-1 cursor-pointer">
                    <img src="./assets/testimonials.png" alt="">
                    <img src="./assets/icons/yt-icon.png" class="absolute bottom-5 right-32" alt="">
                </div>

                <!-- <div class="relative w-full max-w-[312px] h-[266px] bg-gradient-to-br from-orange-400 to-orange-600 rounded-[10px] border border-transparent hover:border-orange-300 overflow-hidden shadow-sm transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                    <div class="flex justify-between items-start p-5">
                        <div class="w-2 h-2 bg-orange-800 rounded-full opacity-60"></div>
                        <div class="text-white font-bold text-lg opacity-90 flex items-center">
                            <svg class="h-6 w-6 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 00-.707.293l-1 1A1 1 0 009 4v1a1 1 0 00.293.707l1 1A1 1 0 0011 6V5a1 1 0 00-.293-.707l-1-1A1 1 0 0010 2zM5 6a1 1 0 00-.707.293l-1 1A1 1 0 004 8v1a1 1 0 00.293.707l1 1A1 1 0 006 10V9a1 1 0 00-.293-.707l-1-1A1 1 0 005 6zM15 6a1 1 0 00-.707.293l-1 1A1 1 0 0014 8v1a1 1 0 00.293.707l1 1A1 1 0 0016 10V9a1 1 0 00-.293-.707l-1-1A1 1 0 0015 6zM3 12a1 1 0 00-.707.293l-1 1A1 1 0 002 14v1a1 1 0 00.293.707l1 1A1 1 0 004 16v-1a1 1 0 00-.293-.707l-1-1A1 1 0 003 12zM17 12a1 1 0 00-.707.293l-1 1A1 1 0 0016 14v1a1 1 0 00.293.707l1 1A1 1 0 0018 16v-1a1 1 0 00-.293-.707l-1-1A1 1 0 0017 12zM8 16a1 1 0 00-.707.293l-1 1A1 1 0 007 18v1a1 1 0 00.293.707l1 1A1 1 0 009 20v-1a1 1 0 00-.293-.707l-1-1A1 1 0 008 16zM12 16a1 1 0 00-.707.293l-1 1A1 1 0 0011 18v1a1 1 0 00.293.707l1 1A1 1 0 0013 20v-1a1 1 0 00-.293-.707l-1-1A1 1 0 0012 16z"/></svg>
                            maAx
                        </div>
                    </div>
                    <div class="text-center relative z-10 -mt-2">
                        <p class="text-white text-4xl font-dancing-script opacity-90">Patient</p>
                        <p class="text-white text-2xl font-bold uppercase tracking-wider leading-none text-shadow-sm">TESTIMONIAL</p>
                    </div>
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-[45%] w-36 h-36 rounded-full border-4 border-white/30 overflow-hidden z-0 group">
                        <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Patient Testimonial" class="w-full h-full object-cover grayscale opacity-70 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-12 h-12 bg-[#FF0000] rounded-full flex items-center justify-center shadow-lg scale-90 group-hover:scale-100 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white fill-current pl-1" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                    </div>
                </div> -->




                <div class="relative w-full max-w-[312px] h-[266px] bg-gradient-to-br from-orange-400 to-orange-600 rounded-[10px]  overflow-hidden shadow-md transition-transform duration-300 hover:-translate-y-1 cursor-pointer">
                    <img src="./assets/testimonials.png" alt="">
                    <img src="./assets/icons/yt-icon.png" class="absolute bottom-5 right-32" alt="">
                </div>
                <div class="relative w-full max-w-[312px] h-[266px] bg-gradient-to-br from-orange-400 to-orange-600 rounded-[10px]   overflow-hidden shadow-md transition-transform duration-300 hover:-translate-y-1 cursor-pointer">
                    <img src="./assets/testimonials.png" alt="">
                    <img src="./assets/icons/yt-icon.png" class="absolute bottom-5 right-32" alt="">
                </div>
                <div class="relative w-full max-w-[312px] h-[266px] bg-gradient-to-br from-orange-400 to-orange-600 rounded-[10px] overflow-hidden shadow-md transition-transform duration-300 hover:-translate-y-1 cursor-pointer">
                    <img src="./assets/testimonials.png" alt="">
                    <img src="./assets/icons/yt-icon.png" class="absolute bottom-5 right-32" alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-12">
        <!-- Heading -->
        <h2 class="text-2xl md:text-3xl font-semibold text-gray-700 mb-6">
            Frequently <span class="text-[#FEAE01]">Asked Questions</span>
        </h2>

        <!-- 2 Column Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- LEFT COLUMN -->
            <div class="space-y-4">
                <!-- Accordion Item -->
                <div class="border border-[#FEAE01] rounded-lg bg-white">
                    <button
                        class="w-full flex justify-between items-center px-5 py-4"
                        onclick="toggleAccordion(this)">
                        <span class="text-gray-700 text-xl font-semibold">What is the Digital Marketing Masterclass?</span>

                        <span
                            class="w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold transition-all">
                            +
                        </span>
                    </button>

                    <div class="hidden px-5 pb-4 text-gray-600 text-sm">
                        This is the answer section. Add your description here.
                    </div>
                </div>

                <!-- Copy same structure 3 more times -->
                <div class="border border-[#FEAE01] rounded-lg bg-white">
                    <button
                        class="w-full flex justify-between items-center px-5 py-4"
                        onclick="toggleAccordion(this)">
                        <span class="text-gray-700 text-xl font-semibold">What is the Digital Marketing Masterclass?</span>
                        <span
                            class="w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
                    </button>
                    <div class="hidden px-5 pb-4 text-gray-600 text-sm">
                        Add your answer here.
                    </div>
                </div>

                <div class="border border-[#FEAE01] rounded-lg bg-white">
                    <button
                        class="w-full flex justify-between items-center px-5 py-4"
                        onclick="toggleAccordion(this)">
                        <span class="text-gray-700 text-xl font-semibold">What is the Digital Marketing Masterclass?</span>
                        <span
                            class="w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
                    </button>
                    <div class="hidden px-5 pb-4 text-gray-600 text-sm">
                        Add your answer here.
                    </div>
                </div>

                <div class="border border-[#FEAE01] rounded-lg bg-white">
                    <button
                        class="w-full flex justify-between items-center px-5 py-4"
                        onclick="toggleAccordion(this)">
                        <span class="text-gray-700 text-xl font-semibold">What is the Digital Marketing Masterclass?</span>
                        <span
                            class="w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
                    </button>
                    <div class="hidden px-5 pb-4 text-gray-600 text-sm">
                        Add your answer here.
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="space-y-4">
                <div class="border border-[#FEAE01] rounded-lg bg-white">
                    <button
                        class="w-full flex justify-between items-center px-5 py-4"
                        onclick="toggleAccordion(this)">
                        <span class="text-gray-700 text-xl font-semibold">What if I miss a Live Class?</span>
                        <span
                            class="w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
                    </button>
                    <div class="hidden px-5 pb-4 text-gray-600 text-sm">
                        Your answer here.
                    </div>
                </div>

                <div class="border border-[#FEAE01] rounded-lg bg-white">
                    <button
                        class="w-full flex justify-between items-center px-5 py-4"
                        onclick="toggleAccordion(this)">
                        <span class="text-gray-700 text-xl font-semibold">What if I miss a Live Class?</span>
                        <span
                            class="w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
                    </button>
                    <div class="hidden px-5 pb-4 text-gray-600 text-sm">
                        Your answer here.
                    </div>
                </div>

                <div class="border border-[#FEAE01] rounded-lg bg-white">
                    <button
                        class="w-full flex justify-between items-center px-5 py-4"
                        onclick="toggleAccordion(this)">
                        <span class="text-gray-700 text-xl font-semibold">What if I miss a Live Class?</span>
                        <span
                            class="w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
                    </button>
                    <div class="hidden px-5 pb-4 text-gray-600 text-sm">
                        Your answer here.
                    </div>
                </div>

                <div class="border border-[#FEAE01] rounded-lg bg-white">
                    <button
                        class="w-full flex justify-between items-center px-5 py-4"
                        onclick="toggleAccordion(this)">
                        <span class="text-gray-700 text-xl font-semibold">What if I miss a Live Class?</span>
                        <span
                            class="w-7 h-7 border border-[#FEAE01] rounded-full flex items-center justify-center text-[#FEAE01] font-bold">+</span>
                    </button>
                    <div class="hidden px-5 pb-4 text-gray-600 text-sm">
                        Your answer here.
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
</body>