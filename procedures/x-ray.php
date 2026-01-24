<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <?php require "./header.php" ?>
    <!-- SLIDER WRAPPER -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- SLIDE 01 -->
            <div class="swiper-slide">

                <div class="flex flex-col lg:block relative min-h-[600px] lg:mt-0 mt-20">

                    <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0  z-0 lg:mt-20"
                        style="background-image: url('../assets/banners/medical-care.jpg');">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop"
                            class="hidden"
                            onerror="this.parentElement.style.backgroundImage = `url('${this.src}')`">

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1 class="text-4xl md:text-4xl p-3 lg:text-4xl font-semibold rounded-md text-white w-full "
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Ultrasound Scan at<br>
                                    maAx Super Specialty Hospital, Shimoga
                                </h1>

                                <p class="text-sm md:text-base lg:text-2xl p-1 bg-white w-2xl rounded-md leading-relaxed mt-2 lg:mt-4 text-[#6C3130]">
                                    <span class="text-[#F58220]">Safe Imaging</span>. Clear Results. Expert Diagnosis.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="lg:py-12 py-5 px-4 lg:bg-transparent lg:p-0 lg:relative lg:z-10 lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px] mt-9 ">

                        <div
                            class="w-full max-w-md mx-auto bg-white rounded-2xl shadow-xl p-6 md:p-8 lg:ml-auto lg:mr-0">
                            <h2 class="text-center text-2xl font-bold text-orange-500 mb-6 lg:hidden">
                                Book An Appointment
                            </h2>
                            <h2 class="hidden lg:block text-left text-xl font-bold text-gray-800 mb-6 uppercase">
                                Talk to our <span class="text-orange-500">Health Advisor</span>
                            </h2>

                            <form class="space-y-3">
                                <div>
                                    <input type="text" placeholder="Full Name*"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition" />
                                </div>

                                <div>
                                    <input type="email" placeholder="Email*"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition" />
                                </div>

                                <div
                                    class="flex rounded-lg border border-gray-300 overflow-hidden focus-within:ring-2 focus-within:ring-orange-500 focus-within:border-transparent transition">
                                    <div
                                        class="bg-white border-r border-gray-300 px-3 py-3 flex items-center min-w-[90px] justify-between">
                                        <span class="text-gray-700 text-sm font-medium">+91 IN</span>
                                        <svg class="w-4 h-4 ml-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                    <input type="tel" placeholder="Mobile Number*"
                                        class="w-full px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none" />
                                </div>

                                <div class="flex items-start gap-2 mt-2">
                                    <input type="checkbox" id="consent"
                                        class="mt-1 w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                    <label for="consent" class="text-xs text-gray-600">
                                        I consent maAx hospitals to contact me
                                    </label>
                                </div>

                                <button type="button"
                                    class="w-full bg-brown-800 hover:bg-brown-900 lg:bg-orange-500 lg:hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300 transform active:scale-95 mt-4 text-lg">
                                    <span class="lg:hidden">Book Now</span>
                                    <span class=" lg:inline">Request a Call Back</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">

                <div class="flex flex-col lg:block relative min-h-[600px] lg:mt-0 mt-20">

                    <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0  z-0 lg:mt-20"
                        style="background-image: url('../assets/banners/medical-care.jpg');">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop"
                            class="hidden"
                            onerror="this.parentElement.style.backgroundImage = `url('${this.src}')`">

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>
                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1 class="text-4xl md:text-4xl p-3 lg:text-4xl font-semibold rounded-md text-white w-full "
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Ultrasound Scan at<br>
                                    maAx Super Specialty Hospital, Shimoga
                                </h1>

                                <p class="text-sm md:text-base lg:text-2xl p-1 bg-white w-2xl rounded-md leading-relaxed mt-2 lg:mt-4 text-[#6C3130]">
                                    <span class="text-[#F58220]">Safe Imaging</span>. Clear Results. Expert Diagnosis.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div
                        class="lg:py-12 py-5 px-4 lg:bg-transparent lg:p-0 lg:relative lg:z-10 lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px] mt-9 ">

                        <div
                            class="w-full max-w-md mx-auto bg-white rounded-2xl shadow-xl p-6 md:p-8 lg:ml-auto lg:mr-0">
                            <h2 class="text-center text-2xl font-bold text-orange-500 mb-6 lg:hidden">
                                Book An Appointment
                            </h2>
                            <h2 class="hidden lg:block text-left text-xl font-bold text-gray-800 mb-6 uppercase">
                                Talk to our <span class="text-orange-500">Health Advisor</span>
                            </h2>

                            <form class="space-y-3">
                                <div>
                                    <input type="text" placeholder="Full Name*"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition" />
                                </div>

                                <div>
                                    <input type="email" placeholder="Email*"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition" />
                                </div>

                                <div
                                    class="flex rounded-lg border border-gray-300 overflow-hidden focus-within:ring-2 focus-within:ring-orange-500 focus-within:border-transparent transition">
                                    <div
                                        class="bg-white border-r border-gray-300 px-3 py-3 flex items-center min-w-[90px] justify-between">
                                        <span class="text-gray-700 text-sm font-medium">+91 IN</span>
                                        <svg class="w-4 h-4 ml-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                    <input type="tel" placeholder="Mobile Number*"
                                        class="w-full px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none" />
                                </div>

                                <div class="flex items-start gap-2 mt-2">
                                    <input type="checkbox" id="consent"
                                        class="mt-1 w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                    <label for="consent" class="text-xs text-gray-600">
                                        I consent maAx hospitals to contact me
                                    </label>
                                </div>

                                <button type="button"
                                    class="w-full bg-brown-800 hover:bg-brown-900 lg:bg-orange-500 lg:hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300 transform active:scale-95 mt-4 text-lg">
                                    <span class="lg:hidden">Book Now</span>
                                    <span class=" lg:inline">Request a Call Back</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">

                <div class="flex flex-col lg:block relative min-h-[600px] lg:mt-0 mt-20">

                    <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0  z-0 lg:mt-20"
                        style="background-image: url('../assets/banners/medical-care.jpg');">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop"
                            class="hidden"
                            onerror="this.parentElement.style.backgroundImage = `url('${this.src}')`">

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1 class="text-4xl md:text-4xl p-3 lg:text-4xl font-semibold rounded-md text-white w-full "
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Ultrasound Scan at<br>
                                    maAx Super Specialty Hospital, Shimoga
                                </h1>

                                <p class="text-sm md:text-base lg:text-2xl p-1 bg-white w-2xl rounded-md leading-relaxed mt-2 lg:mt-4 text-[#6C3130]">
                                    <span class="text-[#F58220]">Safe Imaging</span>. Clear Results. Expert Diagnosis.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div
                        class="lg:py-12 py-5 px-4 lg:bg-transparent lg:p-0 lg:relative lg:z-10 lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px] mt-9 ">

                        <div
                            class="w-full max-w-md mx-auto bg-white rounded-2xl shadow-xl p-6 md:p-8 lg:ml-auto lg:mr-0">
                            <h2 class="text-center text-2xl font-bold text-orange-500 mb-6 lg:hidden">
                                Book An Appointment
                            </h2>
                            <h2 class="hidden lg:block text-left text-xl font-bold text-gray-800 mb-6 uppercase">
                                Talk to our <span class="text-orange-500">Health Advisor</span>
                            </h2>

                            <form class="space-y-3">
                                <div>
                                    <input type="text" placeholder="Full Name*"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition" />
                                </div>

                                <div>
                                    <input type="email" placeholder="Email*"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition" />
                                </div>

                                <div
                                    class="flex rounded-lg border border-gray-300 overflow-hidden focus-within:ring-2 focus-within:ring-orange-500 focus-within:border-transparent transition">
                                    <div
                                        class="bg-white border-r border-gray-300 px-3 py-3 flex items-center min-w-[90px] justify-between">
                                        <span class="text-gray-700 text-sm font-medium">+91 IN</span>
                                        <svg class="w-4 h-4 ml-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                    <input type="tel" placeholder="Mobile Number*"
                                        class="w-full px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none" />
                                </div>

                                <div class="flex items-start gap-2 mt-2">
                                    <input type="checkbox" id="consent"
                                        class="mt-1 w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                    <label for="consent" class="text-xs text-gray-600">
                                        I consent maAx hospitals to contact me
                                    </label>
                                </div>

                                <button type="button"
                                    class="w-full bg-brown-800 hover:bg-brown-900 lg:bg-orange-500 lg:hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300 transform active:scale-95 mt-4 text-lg">
                                    <span class="lg:hidden">Book Now</span>
                                    <span class=" lg:inline">Request a Call Back</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ADD MORE SLIDES HERE -->
            <!-- <div class="swiper-slide">Your Slide 2 Content</div> -->
            <!-- <div class="swiper-slide">Your Slide 3 Content</div> -->

        </div>

        <!-- PAGINATION -->
        <div class="swiper-pagination"></div>

        <!-- NAVIGATION -->
        <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    </div>
    <section class="w-full bg-[#FFCDA6] py-10">
        <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-10">

            <!-- LEFT MENU -->
            <div class="w-full lg:w-1/4 flex flex-col gap-3">

                <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">Diagnostic Services</h2>

                <a href="./bronchoscopy.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Bronchoscopy</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./cath-lab.php" class="w-full flex items-center justify-between  font-medium py-3 px-4 rounded-md bg-gray-100 text-gray-700">
                    <span>Cath lab</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./dialysis.php" class="w-full flex items-center justify-between   font-medium py-3 px-4 rounded-md bg-gray-100 text-gray-700">
                    <span>Dialysis</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./endoscopy.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700   font-medium py-3 px-4 rounded-md">
                    <span>Endoscopy</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./ct-scan.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700  font-medium py-3 px-4 rounded-md">
                    <span>CT Scan</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./mri-scan.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700  font-medium py-3 px-4 rounded-md">
                    <span>MRI Scan</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./pulmanory-function-test.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700   font-medium py-3 px-4 rounded-md">
                    <span>Pulmonary function test</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./tmt.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700  font-medium py-3 px-4 rounded-md">
                    <span>TMT</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./ultrasound.php" class="w-full flex items-center justify-between bg-[#ec8b2a] text-white  font-medium py-3 px-4 rounded-md">
                    <span>Ultrasound</span>
                    <span class="text-xl">&gt;</span>
                </a>

            </div>

            <!-- RIGHT CONTENT -->
            <!-- LEFT CONTENT -->
            <div class="w-full lg:w-2/3 space-y-6 ">

                <h1 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Ultrasound Scan at
                    <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamoga</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base">
                    MaAx Super Specialty Hospital offers advanced ultrasound imaging to evaluate internal organs, blood flow, soft tissues, and pregnancy-related conditions. Ultrasound uses safe, high-frequency sound waves to produce real-time images and does not involve radiation exposure, making it ideal for routine diagnostics and emergency care.
                </p>

                <p class="text-gray-700 leading-relaxed text-base">
                    Our ultrasound unit is equipped with modern high-resolution digital imaging technology that supports abdominal, pelvis, thyroid, vascular, musculoskeletal, breast, obstetric, and fetal scans. Skilled radiologists and trained sonographers ensure accurate imaging and precise interpretation.
                </p>

                <p class="text-gray-700 leading-relaxed text-base">
                    Ultrasound scans are painless, quick, and non-invasive. They are commonly used to diagnose abdominal pain, lumps, cysts, organ enlargement, pregnancy growth, gallbladder stones, kidney disease, and blood vessel abnormalities.
                </p>

                <p class="text-gray-700 leading-relaxed text-base">
                    MaAx provides affordable ultrasound services in Shivamogga along with clear pre-scan and post-scan guidance. Reports are shared promptly to support timely diagnosis and treatment planning.
                </p>

                <p class="text-gray-700 leading-relaxed text-base">
                    If you require fast, safe, and accurate imaging, MaAx Super Specialty Hospital is a trusted ultrasound centre in Shivamogga offering diagnostic excellence with compassionate care.
                </p>

            </div>





        </div>

        <section class="w-full  py-14">
            <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-12 items-start justify-center">

                <!-- LEFT BOX -->
                <div class="w-full lg:w-[350px] bg-[#663330] text-white rounded-2xl px-8 py-10 space-y-6">
                    <h3 class="text-2xl font-bold text-center">WORKING HOURS</h3>

                    <div class="space-y-3 text-base font-medium">
                        <p>Monday..............Open 24 Hours</p>
                        <p>Tuesday.............Open 24 Hours</p>
                        <p>Wednesday......Open 24 Hours</p>
                        <p>Thursday............Open 24 Hours</p>
                        <p>Friday..................Open 24 Hours</p>
                        <p>Saturday............Open 24 Hours</p>
                        <p>Sunday...............Open 24 Hours</p>
                    </div>

                    <button class="w-full bg-[#ec8b2a] text-white font-semibold py-3 rounded-lg">
                        Book An Appointment
                    </button>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="flex-1 w-full space-y-10">

                    <!-- TITLE -->
                    <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
                        FAQs on Ultrasound at
                        <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shimoga</span>
                    </h2>

                    <!-- ACCORDION BOX -->
                    <div class="rounded-2xl border border-gray-300 divide-y">

                        <details class="group">
                            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                                <span>1. What is an ultrasound scan and why is it done?</span>
                                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                            </summary>
                            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                                An ultrasound scan uses high-frequency sound waves to create images of internal organs, tissues, and blood flow. It helps diagnose abdominal, pelvic, vascular, thyroid, musculoskeletal, and pregnancy-related conditions.
                            </div>
                        </details>

                        <details class="group">
                            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                                <span>2. Is ultrasound safe?</span>
                                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                            </summary>
                            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                                Yes. Ultrasound is completely safe and does not use radiation. It is suitable for adults, children, and pregnant patients.
                            </div>
                        </details>

                        <details class="group">
                            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                                <span>3. How much does an ultrasound scan cost in Shivamogga?</span>
                                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                            </summary>
                            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                                Scan cost varies depending on body area and scan complexity. Pricing details are shared clearly before the test.
                            </div>
                        </details>

                        <details class="group">
                            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                                <span>4. Why choose MaAx Super Specialty Hospital for ultrasound?</span>
                                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                            </summary>
                            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                                MaAx offers high-resolution imaging, skilled radiologists, fast reporting, modern ultrasound technology, and comprehensive diagnostic support.
                            </div>
                        </details>

                        <details class="group">
                            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                                <span>5. How long does an ultrasound scan take?</span>
                                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                            </summary>
                            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                                Most scans take 10–20 minutes depending on the area being examined.
                            </div>
                        </details>

                    </div>




                    <!-- BUTTON -->
                    <div class="w-full flex justify-center">
                        <button class="border border-[#ec8b2a] text-[#ec8b2a] rounded-lg py-3 px-10 font-semibold hover:bg-[#fff7ef] transition">
                            Request a Call Back
                        </button>
                    </div>

                </div>



            </div>
        </section>


    </section>





<?php require "./components/footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },
        effect: "slide",
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        // navigation: {
        //   nextEl: ".swiper-button-next",
        //   prevEl: ".swiper-button-prev",
        // },
    });
</script>

</html>