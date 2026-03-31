<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-Ray Services | maAx Super Specialty Hospital</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php require "./header.php" ?>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">

                <div class="flex flex-col lg:block relative min-h-[600px] lg:mt-0 mt-20">

                    <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0  z-0 lg:mt-20"
                        style="background-image: url('../assets/banners/x-ray.webp');">
                        <img src="../assets/banners/x-ray.webp"
                            class="hidden"
                            onerror="this.parentElement.style.backgroundImage = `url('${this.src}')`">

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1 class="text-xl md:text-2xl p-3 lg:text-3xl font-semibold rounded-md text-white w-full "
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Digital X-Ray at<br>
                                    maAx 
                                </h1>

                               
                            </div>
                        </div>

                    </div>

                    <div
                        class="lg:py-12 py-5 px-4 lg:bg-transparent lg:p-0 lg:relative lg:z-10 lg:container lg:mx-auto lg:px-6 lg:flex lg:items-center lg:h-[600px] mt-9 ">

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
                                        I consent maAx Super Speciality Hospital to contact me
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
        </div>

        <div class="swiper-pagination"></div>
    </div>

    <section class="w-full bg-[#FFCDA6] py-10">
        <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-10">

            <div class="w-full lg:w-1/4 flex flex-col gap-3">

                <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">Diagnostic Services</h2>

                <a href="./bronchoscopy.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Bronchoscopy</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./cath-lab.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Cath lab</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./dialysis.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Dialysis</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./endoscopy.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Endoscopy</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./ct-scan.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>CT Scan</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./mri-scan.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>MRI Scan</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./pulmanory-function-test.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Pulmonary function test</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./xray.php" class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
                    <span>Digital X-Ray</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./ultrasound.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Ultrasound</span>
                    <span class="text-xl">&gt;</span>
                </a>

            </div>

            <div class="w-full lg:w-2/3 space-y-6 ">

                <h1 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    High-Definition Digital X-Ray at
                    <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamoga</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-lg">
                    X-ray imaging is the most common and widely used diagnostic tool in modern medicine. At maAx Super Speciality Hospital, our radiology department uses advanced digital X-ray technology that captures images instantly and provides superior clarity compared to traditional film-based X-rays.
                </p>

                <p class="text-gray-700 leading-relaxed text-lg">
                    Digital X-rays allow for faster diagnosis, as images can be zoomed and adjusted by our radiologists to detect subtle fractures or abnormalities. Additionally, digital technology significantly reduces radiation exposure, ensuring a safer diagnostic experience for all our patients.
                </p>

            </div>

        </div>
        <section class="w-full  py-14">
            <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-20 items-start justify-center">

                <div class="w-full lg:w-[350px] bg-[#663330] text-white rounded-2xl px-8 py-10 space-y-6">
                    <h3 class="text-2xl font-bold text-center uppercase">Working Hours</h3>

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

                <div class="w-full lg:w-2/3 space-y-6 flex flex-col ">

                    <h2 class="text-3xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                        When is an X-Ray Recommended? </h2>
                    <p class="text-gray-700 leading-relaxed text-base">
                        X-rays are primarily used to look at bones and certain organs. Your doctor may advise an X-ray to help diagnose various conditions, such as:
                    </p>
                    <ul class="list-disc ml-5 space-y-2">
                        <li class="text-gray-700 leading-relaxed text-base">Detecting bone fractures, dislocations, or infections</li>
                        <li class="text-gray-700 leading-relaxed text-base">Evaluating joint health and identifying signs of arthritis</li>
                        <li class="text-gray-700 leading-relaxed text-base">Diagnosing chest conditions like pneumonia or lung infections</li>
                        <li class="text-gray-700 leading-relaxed text-base">Checking for heart-related changes in chest X-rays</li>
                        <li class="text-gray-700 leading-relaxed text-base">Detecting swallowed foreign objects</li>
                        <li class="text-gray-700 leading-relaxed text-base">Monitoring the healing progress of bones after surgery</li>
                        <li class="text-gray-700 leading-relaxed text-base">Scoliosis screening and spinal alignment checks</li>
                    </ul>
                    <p class="text-gray-700 leading-relaxed text-base">Because X-rays are fast and non-invasive, they are often the first step in emergency diagnosis and clinical screening.</p>
                </div>

            </div>
        </section>


    </section>

    <section class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-12 items-start justify-center">
        <div class="flex-1 w-full space-y-10">
            <div>
                <h3 class="text-2xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                    How the Procedure Is Performed </h3>
                <p class="text-gray-700 leading-relaxed text-base mt-2">
                    X-rays are performed by certified radiographers in a specialized, lead-lined imaging room to ensure safety.
                </p>
                <p class="text-gray-700 leading-relaxed text-base mt-2">
                    Depending on the part of the body being examined, you may be asked to stand, sit, or lie on a table. The technologist will position you to get the best angle. It is important to stay very still while the image is being taken to prevent blurring.
                </p>
                <p class="text-gray-700 leading-relaxed text-base mt-2">
                    In most cases, the exposure takes less than a second. You will not feel anything during the scan. Once the technologist confirms that the digital image is clear, the procedure is complete. The entire visit usually takes only 10 to 15 minutes.
                </p>
            </div>
            <div>
                <h3 class="text-2xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                    Safety and Preparation </h3>
                <p class="text-gray-700 leading-relaxed text-base mt-2">
                    At maAx Super Speciality Hospital, we follow "ALARA" (As Low As Reasonably Achievable) principles for radiation. Our digital systems require significantly lower doses than traditional film. 
                </p>
                <p class="text-gray-700 leading-relaxed text-base mt-2">
                    To prepare, you should wear comfortable, loose-fitting clothing. You will be asked to remove any jewelry, zippers, or metal objects from the area being scanned. Lead aprons or shields may be used to protect specific parts of your body.
                </p>
                <p class="text-gray-700 leading-relaxed text-base mt-2">
                    **Note:** It is essential to inform our staff if you are or might be pregnant, so we can take extra precautions to protect the fetus.
                </p>
            </div>
            <div>
                <h3 class="text-2xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                    Why Choose maAx Super Speciality Hospital for X-Ray in Shivamogga? </h3>

                <ul class="list-disc ml-5 mt-4 space-y-2">
                    <li class="text-gray-700 leading-relaxed text-base">Advanced High-Frequency Digital X-ray systems</li>
                    <li class="text-gray-700 leading-relaxed text-base">Skilled Radiographers and experienced Radiologists</li>
                    <li class="text-gray-700 leading-relaxed text-base">Minimum radiation exposure with instant digital reporting</li>
                    <li class="text-gray-700 leading-relaxed text-base">24/7 availability for emergency trauma cases</li>
                    <li class="text-gray-700 leading-relaxed text-base">Affordable and fast diagnostic services</li>
                </ul>
                <p class="text-gray-700 leading-relaxed text-base mt-4">maAx Super Speciality Hospital is a trusted provider of diagnostic imaging, offering reliable X-ray services to help you get the right treatment faster.</p>

            </div>

            <section class="w-full  py-12">
                <div class="container mx-auto px-4">
                    <h3 class="text-2xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                        Advised for an X-ray or seeking a fast orthopedic diagnosis?
                    </h3>

                    <div class="mt-8 rounded-[20px] flex flex-col md:flex-row overflow-hidden p-5 shadow-sm border border-gray-100 bg-white">
                        <div class="md:w-[493px] md:h-[547px]">
                            <img src="../assets/genrated-image.png" alt="Doctor talking to patient"
                                class="w-full h-full object-cover rounded-xl" />
                        </div>

                        <div class=" md:h-[547px] px-6 md:px-10 py-8 flex items-center">
                            <div class="w-full">
                                <p class="text-xs font-semibold tracking-[0.15em] text-gray-500 uppercase">
                                    Talk to our <span class="text-[#F97316]">Health Advisor</span>
                                </p>

                                <form class="mt-6 space-y-4">
                                    <div class="flex flex-col gap-1">
                                        <label for="fullName" class="text-sm font-medium text-gray-700">
                                            Full Name<span class="text-red-500">*</span>
                                        </label>
                                        <input id="fullName" type="text"
                                            class="h-11 w-full rounded-lg border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316] focus:border-[#F97316]"
                                            placeholder="Enter your full name" />
                                    </div>

                                    <div class="flex flex-col gap-1">
                                        <label for="email" class="text-sm font-medium text-gray-700">
                                            Email<span class="text-red-500">*</span>
                                        </label>
                                        <input id="email" type="email"
                                            class="h-11 w-full rounded-lg border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316] focus:border-[#F97316]"
                                            placeholder="Enter your email" />
                                    </div>

                                    <div class="flex flex-col gap-1">
                                        <label for="mobile" class="text-sm font-medium text-gray-700">
                                            Mobile Number<span class="text-red-500">*</span>
                                        </label>
                                        <div class="flex gap-2">
                                            <div class="w-28">
                                                <select
                                                    class="h-11 w-full rounded-lg border border-gray-300 px-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316] focus:border-[#F97316]">
                                                    <option value="+91">+91 IN</option>
                                                </select>
                                            </div>
                                            <input id="mobile" type="tel"
                                                class="h-11 flex-1 rounded-lg border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316] focus:border-[#F97316]"
                                                placeholder="Enter mobile number" />
                                        </div>
                                    </div>
                                    <label class="flex items-start gap-2 text-xs text-gray-600 cursor-pointer">
                                        <input type="checkbox"
                                            class="mt-[3px] h-4 w-4 rounded border-gray-300 text-[#F97316] focus:ring-[#F97316]" />
                                        <span>I consent maAx Super Speciality Hospital to contact me</span>
                                    </label>

                                    <button type="submit"
                                        class="mt-2 w-full h-11 rounded-lg bg-[#F97316] text-white text-sm font-semibold shadow-md hover:bg-[#ea6a0e] transition-colors">
                                        Request a Call Back
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
                FAQs on Digital X-Ray at
                <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
            </h2>

            <div class="rounded-2xl border border-gray-300 divide-y">

                <details class="group">
                    <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                        <span>1. Is the radiation from a Digital X-ray dangerous?</span>
                        <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                    </summary>
                    <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                        Digital X-rays use very low amounts of radiation. At maAx Super Speciality Hospital, our advanced sensors are much more sensitive than film, meaning we can capture high-quality images with even less exposure than standard X-rays.
                    </div>
                </details>

                <details class="group">
                    <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                        <span>2. Do I need to make an appointment for an X-ray?</span>
                        <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                    </summary>
                    <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                        Most X-rays are "walk-in" services and do not require a prior appointment. However, for specific specialized X-rays, it is always best to call ahead and confirm availability.
                    </div>
                </details>

                <details class="group">
                    <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                        <span>3. Can I get an X-ray if I am pregnant?</span>
                        <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                    </summary>
                    <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                        Routine X-rays of the chest or limbs are generally safe, but abdominal X-rays should be avoided if possible. Always inform your technologist if you are pregnant so we can provide specialized shielding or suggest an alternative test like Ultrasound.
                    </div>
                </details>

                <details class="group">
                    <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-b-2xl">
                        <span>4. When will I get my report?</span>
                        <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                    </summary>
                    <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                        The digital image is generated instantly. A formal report from a radiologist is typically available within an hour for urgent cases, or by the end of the day for routine check-ups.
                    </div>
                </details>

            </div>

            <div class="w-full flex justify-center py-6">
                <button class="border border-[#ec8b2a] text-[#ec8b2a] rounded-lg py-3 px-10 font-semibold hover:bg-[#fff7ef] transition">
                    Request a Call Back
                </button>
            </div>

        </div>
    </section>

    <?php require "../components/footer.php" ?>
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
    });
</script>

</html>