<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bronchoscopy Services | maAx Super Specialty Hospital</title>
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
                        style="background-image: url('../assets/banners/bronchoscopy-banner.jpg');">
                        <img src="../assets/banners/bronchoscopy.webp"
                           class="h-full object-cover w-full"
                           >

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1 class="text-xl md:text-2xl p-3 lg:text-3xl font-semibold rounded-md text-white w-full "
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Bronchoscopy at<br>
                                    maAx 
                                </h1>

                              
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

                <a href="./bronchoscopy.php" class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
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

                <a href="./tmt.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>TMT</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./ultrasound.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Ultrasound</span>
                    <span class="text-xl">&gt;</span>
                </a>

            </div>

            <div class="w-full lg:w-2/3 space-y-6 ">

                <h1 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Bronchoscopy Diagnosis & Treatment at
                    <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamoga</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-lg">
                    Bronchoscopy is a specialized diagnostic procedure that allows doctors to examine your airways and lungs. At maAx Super Speciality Hospital, we use advanced flexible bronchoscopes to look inside the windpipe (trachea) and the smaller air passages (bronchi) to identify the root cause of respiratory issues.
                </p>

                <p class="text-gray-700 leading-relaxed text-lg">
                    Using high-definition imaging technology, our pulmonologists are able to visualize airway inflammation, infections, or abnormalities in real-time. This minimally invasive technique is essential for precise lung assessment, enabling our team to provide targeted treatment and interventions.
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
                        When is a Bronchoscopy Procedure Recommended? </h2>
                    <p class="text-gray-700 leading-relaxed text-base">
                        Bronchoscopy may be advised when symptoms suggest underlying lung disease or when a detailed view of the airway is required. Common indications include:
                    </p>
                    <ul class="list-disc ml-5 space-y-2">
                        <li class="text-gray-700 leading-relaxed text-base">Persistent or unexplained chronic cough</li>
                        <li class="text-gray-700 leading-relaxed text-base">Coughing up blood (Hemoptysis)</li>
                        <li class="text-gray-700 leading-relaxed text-base">Suspected lung infection or chronic pneumonia</li>
                        <li class="text-gray-700 leading-relaxed text-base">Abnormal findings on a chest X-ray or CT scan</li>
                        <li class="text-gray-700 leading-relaxed text-base">Noisy breathing (Stridor) or airway narrowing</li>
                        <li class="text-gray-700 leading-relaxed text-base">Removing foreign objects from the respiratory tract</li>
                        <li class="text-gray-700 leading-relaxed text-base">Evaluation of lung tumors or lung nodules</li>
                        <li class="text-gray-700 leading-relaxed text-base">Collecting tissue samples (Biopsy) for diagnosis</li>
                    </ul>
                    <p class="text-gray-700 leading-relaxed text-base">Early evaluation through Bronchoscopy services can help prevent lung complications and guide appropriate pulmonary care.</p>
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
                    Bronchoscopy procedures are performed by experienced pulmonologists in a sterile, closely monitored environment.
                </p>
                <p class="text-gray-700 leading-relaxed text-base mt-2">
                    A local anesthetic is typically sprayed into the throat to numb the area, and mild sedation is used to ensure patient comfort. A thin, flexible tube called a bronchoscope is then gently inserted through the nose or mouth and guided into the windpipe and air passages.
                </p>
                <p class="text-gray-700 leading-relaxed text-base mt-2">
                    As the scope moves through the airways, real-time images are projected onto a monitor. This allows the physician to inspect the lungs thoroughly and, if necessary, take fluid or tissue samples during the same session.
                </p>
            </div>
            <div>
                <h3 class="text-2xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                    Safety, Comfort, and Recovery </h3>
                <p class="text-gray-700 leading-relaxed text-base mt-2">
                    Bronchoscopy is a well-established and safe procedure performed under strict clinical protocols. Our medical team continuously monitors oxygen levels and vitals throughout the process.
                </p>
                <p class="text-gray-700 leading-relaxed text-base mt-2">
                    Patients receive clear guidance on preparation, such as fasting, before the procedure. After the examination, patients are observed in a recovery area until the effects of the sedative wear off.
                </p>
                <p class="text-gray-700 leading-relaxed text-base mt-2">
                    Recovery is usually quick, though patients may experience a mild sore throat or temporary cough. Most patients can return to their normal activities within 24 hours.
                </p>
            </div>
            <div>
                <h3 class="text-2xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                    Why Choose maAx Super Speciality Hospital for Bronchoscopy in Shivamogga? </h3>

                <ul class="list-disc ml-5 mt-4 space-y-2">
                    <li class="text-gray-700 leading-relaxed text-base">Experienced pulmonary and respiratory team</li>
                    <li class="text-gray-700 leading-relaxed text-base">Advanced flexible bronchoscopy equipment</li>
                    <li class="text-gray-700 leading-relaxed text-base">Specialized post-procedure recovery care</li>
                    <li class="text-gray-700 leading-relaxed text-base">Strict infection control and clinical safety protocols</li>
                    <li class="text-gray-700 leading-relaxed text-base">Comprehensive care from diagnostic imaging to treatment</li>
                </ul>
                <p class="text-gray-700 leading-relaxed text-base mt-4">maAx Super Speciality Hospital is a trusted centre for Bronchoscopy services in Shivamogga, offering accurate diagnosis and gentle care with patient safety at its core.</p>

            </div>

            <section class="w-full  py-12">
                <div class="container mx-auto px-4">
                    <h3 class="text-2xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                        Experiencing respiratory symptoms or advised for lung evaluation?
                    </h3>

                    <div class="mt-8 rounded-[20px] flex flex-col md:flex-row overflow-hidden p-5 shadow-sm border border-gray-100 bg-white  justify-center">
                        <div class="md:w-[493px] md:h-[547px]">
                            <img src="../assets/genrated-image.png" alt="Doctor talking to patient"
                                class="w-full h-full object-cover rounded-xl" />
                        </div>

                        <div class=" md:h-[547px] px-6 md:px-10 py-8 flex items-center ">
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
                                                    <option value="+1">+1 US</option>
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
                FAQs on Bronchoscopy at
                <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
            </h2>

            <div class="rounded-2xl border border-gray-300 divide-y">

                <details class="group">
                    <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                        <span>1. What is a Bronchoscopy and why is it needed?</span>
                        <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                    </summary>
                    <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                        Bronchoscopy is a procedure used to view the airways and lungs. It is needed to diagnose lung conditions, collect samples, or remove obstructions from the air passages.
                    </div>
                </details>

                <details class="group">
                    <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                        <span>2. Is Bronchoscopy a major surgery?</span>
                        <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                    </summary>
                    <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                        No. Bronchoscopy is a minimally invasive diagnostic procedure. It does not require external incisions and is typically performed using a thin, flexible scope via the nose or mouth.
                    </div>
                </details>

                <details class="group">
                    <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                        <span>3. How long does the procedure take?</span>
                        <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                    </summary>
                    <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                        The examination usually takes 15 to 30 minutes, though preparation and recovery time may extend your hospital stay by a few hours.
                    </div>
                </details>

                <details class="group">
                    <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-b-2xl">
                        <span>4. Is Bronchoscopy safe?</span>
                        <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                    </summary>
                    <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                        Yes. It is a routine and safe procedure. Our specialists follow strict clinical guidelines and use advanced technology to ensure the highest safety standards.
                    </div>
                </details>

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