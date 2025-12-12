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


    <section class="w-full pt-28 pb-10">
        <div
            class="relative w-full mx-auto h-[619px] bg-cover bg-center overflow-hidden"
            style="background-image: url('./assets/banners/Frame 227.png');">
            <!-- TOP PILL -->
            <div class="flex justify-center mt-5">
                <div class="flex w-[1020px] items-center justify-between bg-white shadow-md rounded-full px-6 py-3 gap-6">
                    <!-- Request Call Back -->
                    <button class="flex items-center gap-2 text-[#6C3130] font-medium px-4">
                        <img src="./assets/icons/call.png" class="w-7 h-7" alt="">
                        <span>Request Call Back</span>
                    </button>

                    <!-- Book Appointment (Active) -->
                    <button class="flex items-center gap-2 text-white font-medium px-6 py-2 rounded-full bg-[#F58220] shadow">
                        <img src="./assets/icons/schedule.png" class="w-7 h-7 invert" alt="">
                        <span>Book Appointment</span>
                    </button>

                    <!-- Book Ambulance -->
                    <button class="flex items-center gap-3 text-[#6C3130] font-medium px-4">
                        <img src="./assets/icons/ambulence.png" class="w-7 h-7" alt="">
                        <span>Book Ambulance</span>
                    </button>
                </div>
            </div>

            <!-- CONTENT ON IMAGE -->
            <div class="absolute top-1/2 -translate-y-1/2 left-36 text-white">
                <h1 class="text-3xl md:text-4xl text-[#6C3130] font-semibold mb-3 drop-shadow-xl">
                    All-Inclusive Care
                    <span class="text-[#F58220]">ONE Trusted Hospital</span>
                </h1>

                <p
                    class="text-xl xl:w-[650px] bg-[image:var(--gradient-brand)] md:text-4xl font-semibold text-white inline-block px-3 py-3 rounded drop-shadow-xl">
                    World Class Care, Under One Roof
                </p>
            </div>

            <!-- 🔽 SEARCH BAR FLOATING ON IMAGE (NOT AT BOTTOM) -->
            <div class="absolute top-[80%] left-1/2 -translate-x-1/2 w-[1020px] max-w-4xl">
                <div class="flex items-center bg-white rounded-full shadow-md px-0 py-0 w-full overflow-hidden">

                    <div class="flex flex-1 items-center gap-3 px-5 py-2">

                        <!-- Select Specialty -->
                        <div class="relative flex-1">
                            <select
                                class="w-full bg-[#f4f4f4] rounded-full px-8 py-3 text-sm text-[#6C3130] appearance-none outline-none cursor-pointer">
                                <option selected>Select Specialty</option>
                            </select>
                            <span class="pointer-events-none absolute right-6 top-1/2 -translate-y-1/2 text-[#6C3130] text-xs">▼</span>
                        </div>

                        <!-- Find a Doctor -->
                        <div class="relative flex-1">
                            <select
                                class="w-full bg-[#f4f4f4] rounded-full px-8 py-3 text-sm text-[#6C3130] appearance-none outline-none cursor-pointer">
                                <option selected>Find a Doctor</option>
                            </select>
                            <span class="pointer-events-none absolute right-6 top-1/2 -translate-y-1/2 text-[#6C3130] text-xs">▼</span>
                        </div>

                    </div>

                    <!-- FIXED BUTTON -->
                    <button
                        class="px-12 py-5 bg-[#F58220] text-white text-lg font-semibold rounded-r-full flex items-center justify-center gap-2 whitespace-nowrap h-full">
                        <span>Search</span>
                        <span class="text-base">→</span>
                    </button>
                </div>
            </div>



            <!-- 🔼 SEARCH BAR END -->
        </div>
    </section>
    <div class="flex justify-center mt-8 px-4">
        <div
            class="bg-[#f5f5f5] rounded-2xl p-4 md:p-6 lg:p-8 flex flex-col lg:flex-row items-stretch">
            <!-- LEFT: Text content -->
            <div
                class="w-full lg:w-[780px] lg:h-[704px] space-y-3
         text-sm md:text-base lg:text-3xl font-semibold
         p-4 md:p-8 lg:p-10 bg-white text-[#4b5563] leading-12">
                <p>
                    <span class="font-semibold text-2xl md:text-3xl lg:text-4xl text-[#f28c28]">
                        ENT
                    </span>
                    deals with the diagnosis and treatment of disorders related to the ear, nose,
                    throat, head, and neck. It includes the management of conditions such as hearing
                    loss, sinusitis, throat infections, voice problems, allergies, and balance
                    disorders. At MaAx Hospital, our ENT specialists provide advanced medical and
                    surgical care using modern diagnostic tools and minimally invasive techniques to
                    ensure accurate treatment and improved quality of life for patients of all ages.
                </p>
            </div>










            <!-- RIGHT: Image + button -->
            <div
                class="w-full lg:w-[735px] h-64 md:h-80 lg:h-[704px]
             relative rounded-b-2xl lg:rounded-b-none lg:rounded-r-2xl overflow-hidden mt-4 lg:mt-0">
                <img
                    src="./assets/angiography.jpg"
                    alt="Patient undergoing CT scan"
                    class="w-full h-full object-cover" />

                <!-- CTA Button -->
                <button
                    class="absolute bottom-4 left-4 md:bottom-5 md:left-5 bg-[#f28c28] text-white font-semibold
               text-xs sm:text-sm md:text-base px-4 py-2 md:px-6 md:py-3 rounded-md
               shadow-md hover:brightness-110 transition">
                    Book Consultation
                </button>
            </div>
        </div>
    </div>




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



    <section class="w-full bg-[#F5F7FB] py-12">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Top Heading -->
            <h2 class="text-2xl md:text-3xl font-semibold text-[#1F2933]">
                Your health matters —
                <span class="text-[#F97316] font-semibold">get the right information today.</span>
            </h2>

            <!-- Card -->
            <div
                class="mt-8 bg-white rounded-[20px] shadow-[0_10px_30px_rgba(15,23,42,0.08)] flex flex-col md:flex-row overflow-hidden">
                <!-- Left: Image -->
                <div class="md:w-[493px] md:h-[547px]">
                    <img
                        src="./assets/genrated-image.png"
                        alt="Doctor talking to patient"
                        class="w-full h-full object-cover" />
                </div>

                <!-- Right: Form -->
                <div class=" md:h-[547px] px-6 md:px-10 py-8 flex items-center">
                    <div class="w-full">
                        <p class="text-xs font-semibold tracking-[0.15em] text-gray-500 uppercase">
                            Talk to our <span class="text-[#F97316]">Health Advisor</span>
                        </p>

                        <form class="mt-6 space-y-4">
                            <!-- Full Name -->
                            <div class="flex flex-col gap-1">
                                <label
                                    for="fullName"
                                    class="text-sm font-medium text-gray-700">
                                    Full Name<span class="text-red-500">*</span>
                                </label>
                                <input
                                    id="fullName"
                                    type="text"
                                    class="h-11 w-full rounded-lg border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316] focus:border-[#F97316]"
                                    placeholder="Enter your full name" />
                            </div>

                            <!-- Email -->
                            <div class="flex flex-col gap-1">
                                <label
                                    for="email"
                                    class="text-sm font-medium text-gray-700">
                                    Email<span class="text-red-500">*</span>
                                </label>
                                <input
                                    id="email"
                                    type="email"
                                    class="h-11 w-full rounded-lg border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316] focus:border-[#F97316]"
                                    placeholder="Enter your email" />
                            </div>

                            <!-- Phone (Country + Number) -->
                            <div class="flex flex-col gap-1">
                                <label
                                    for="mobile"
                                    class="text-sm font-medium text-gray-700">
                                    Mobile Number<span class="text-red-500">*</span>
                                </label>

                                <div class="flex gap-2">
                                    <!-- Country Code -->
                                    <div class="w-28">
                                        <select
                                            class="h-11 w-full rounded-lg border border-gray-300 px-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316] focus:border-[#F97316]">
                                            <option value="+91">+91 IN</option>
                                            <option value="+1">+1 US</option>
                                            <option value="+44">+44 UK</option>
                                            <!-- add more if needed -->
                                        </select>
                                    </div>

                                    <!-- Mobile -->
                                    <input
                                        id="mobile"
                                        type="tel"
                                        class="h-11 flex-1 rounded-lg border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316] focus:border-[#F97316]"
                                        placeholder="Enter your mobile number" />
                                </div>
                            </div>
                            <!-- Consent -->
                            <label class="flex items-start gap-2 text-xs text-gray-600 cursor-pointer">
                                <input
                                    type="checkbox"
                                    class="mt-[3px] h-4 w-4 rounded border-gray-300 text-[#F97316] focus:ring-[#F97316]" />
                                <span>I consent maxX hospitals to contact me</span>
                            </label>

                            <!-- Button -->
                            <button
                                type="submit"
                                class="mt-2 w-full h-11 rounded-lg bg-[#F97316] text-white text-sm font-semibold shadow-md hover:bg-[#ea6a0e] transition-colors">
                                Request a Call Back
                            </button>
                        </form>
                    </div>
                </div>
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

</body>

</html>