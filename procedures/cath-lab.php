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
                                    Cath Lab at<br>
                                    maAx Super Specialty Hospital, Shimoga
                                </h1>

                                <p class="text-sm md:text-base lg:text-2xl p-1 bg-white w-2xl rounded-md  leading-relaxed mt-2 lg:mt-4 text-[#6C3130]">
                                    <span class="text-[#F58220]">Accurate Lung Diagnosis</span>. Gentle Care. Trusted Experts.
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
                                <h2 class="text-4xl md:text-4xl p-3 lg:text-4xl font-semibold rounded-md text-white w-full "
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Cath Lab at<br>
                                    maAx Super Specialty Hospital, Shimoga
                                </h2>

                                <p class="text-sm md:text-base lg:text-2xl p-1 bg-white w-2xl rounded-md  leading-relaxed mt-2 lg:mt-4 text-[#6C3130]">
                                    <span class="text-[#F58220]">Accurate Lung Diagnosis</span>. Gentle Care. Trusted Experts.
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
                                <h2 class="text-4xl md:text-4xl p-3 lg:text-4xl font-semibold rounded-md text-white w-full "
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Cath Lab at<br>
                                    maAx Super Specialty Hospital, Shimoga
                                </h2>

                                <p class="text-sm md:text-base lg:text-2xl p-1 bg-white w-2xl rounded-md  leading-relaxed mt-2 lg:mt-4 text-[#6C3130]">
                                    <span class="text-[#F58220]">Accurate Lung Diagnosis</span>. Gentle Care. Trusted Experts.
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

                <a href="./cath-lab.php" class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
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

            <!-- RIGHT CONTENT -->
            <div class="w-full lg:w-2/3 space-y-6 ">

                <h1 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Cath Lab Diagnosis & Treatment at
                    <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamoga</span>
                </h1>



                <p class="text-gray-700 leading-relaxed text-lg">
                    The Cardiac Catheterisation Laboratory (Cath Lab) is a specialised facility used for the diagnosis and treatment of heart and blood vessel conditions. At maAx Super Speciality Hospital, the Cath Lab plays a critical role in evaluating coronary artery disease and performing minimally invasive cardiac procedures </p>

                <p class="text-gray-700 leading-relaxed text-lg">
                    Using advanced imaging technology, cardiologists are able to visualise blood flow within the heart and arteries in real time. This allows precise assessment of blockages, narrowing, and structural heart abnormalities, enabling timely and targeted intervention </p>



            </div>

        </div>
        <section class="w-full  py-14">
            <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-20 items-start justify-center">

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
                <div class="w-full lg:w-2/3 space-y-6 flex flex-col ">

                    <h2 class="text-3xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                        When is a Cath Lab Procedure Recommended? </h2>
                    <p class="text-gray-700 leading-relaxed text-base">
                        Cath Lab procedures may be advised when symptoms or test results suggest underlying heart disease or when immediate cardiac intervention is required. Common indications include:
                    <ul class="list-disc">
                        <li class="text-gray-700 leading-relaxed text-base">
                            Chest pain or discomfort (angina) </li>

                        <li class="text-gray-700 leading-relaxed text-base">

                            Shortness of breath related to heart conditions </li>

                        <li class="text-gray-700 leading-relaxed text-base">
                            Suspected or confirmed coronary artery disease </li>

                        <li class="text-gray-700 leading-relaxed text-base">
                            Heart attack (myocardial infarction) </li>
                        <li class="text-gray-700 leading-relaxed text-base">
                            Abnormal ECG, TMT, or echocardiogram findings </li>
                        <li class="text-gray-700 leading-relaxed text-base">
                            Valvular heart disease </li>
                        <li class="text-gray-700 leading-relaxed text-base">
                            Congenital heart defects </li>
                        <li class="text-gray-700 leading-relaxed text-base">
                            Evaluation of heart function before surgery </li>
                        <p class="text-gray-700 leading-relaxed text-base">Early evaluation through Cath Lab services can help prevent complications and guide appropriate cardiac care.</p>
                    </ul>
                    <h3 class="text-2xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                        What Conditions Can Be Evaluated or Treated in the Cath Lab? </h3>
                    <p class="text-gray-700 leading-relaxed text-base">
                        The Cath Lab is used for both diagnostic and interventional cardiac procedures, including:
                    <ul class="list-disc">
                        <li class="text-gray-700 leading-relaxed text-base">
                            Coronary angiography to detect artery blockages </li>

                        <li class="text-gray-700 leading-relaxed text-base">

                            Angioplasty and stent placement </li>

                        <li class="text-gray-700 leading-relaxed text-base">
                            Assessment of heart chamber pressures </li>

                        <li class="text-gray-700 leading-relaxed text-base">
                            Evaluation of heart valve disorders </li>
                        <li class="text-gray-700 leading-relaxed text-base">
                            Congenital heart defect assessment </li>
                        <li class="text-gray-700 leading-relaxed text-base">
                            Peripheral vascular disease evaluation </li>
                        <li class="text-gray-700 leading-relaxed text-base">
                            Emergency cardiac interventions during heart attack </li>

                        <p class="text-gray-700 leading-relaxed text-base">These procedures allow cardiologists to diagnose heart conditions accurately and, when required, treat them without open surgery.</p>

                    </ul>
                </div>

            </div>
        </section>


    </section>

    <section class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-12 items-start justify-center">
        <div class="flex-1 w-full space-y-10">
            <div>
                <h3 class="text-2xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                    How the Procedure Is Performed </h3>
                <p class="text-gray-700 leading-relaxed text-base">
                    Cath Lab procedures are performed by experienced cardiologists in a sterile, closely monitored environment.
                <p class="text-gray-700 leading-relaxed text-base">A thin catheter is inserted through a blood vessel—usually in the wrist or groin—and guided to the heart under imaging guidance. Contrast dye is used to visualise the coronary arteries and heart chambers clearly.</p>
                <p class="text-gray-700 leading-relaxed text-base">Depending on the procedure, diagnostic imaging alone may be performed, or treatment such as angioplasty or stent placement may be carried out during the same session.</p>

            </div>
            <div>
                <h3 class="text-2xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                    Safety, Comfort, and Recovery </h3>
                <p class="text-gray-700 leading-relaxed text-base">
                    Cath Lab procedures are well-established and routinely performed under strict safety protocols. Patients are continuously monitored throughout the procedure.
                <p class="text-gray-700 leading-relaxed text-base">Patients receive clear guidance on preparation before the procedure. Local anaesthesia and mild sedation are used to ensure comfort. The bronchoscope is gently introduced through the nose or mouth, allowing careful examination of the airways and lungs.</p>
                <p class="text-gray-700 leading-relaxed text-base">After the procedure, patients are observed for a specified period to ensure stability. Recovery time varies depending on the type of procedure performed. Many diagnostic procedures allow early mobilisation, while interventional procedures may require short hospital observation.</p>

            </div>
            <div>
                <h3 class="text-2xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                    Why Choose maAx Super Speciality Hospital for Cath Lab Services in Shivamogga? </h3>




                <ul class="list-disc">


                    <li class="text-gray-700 leading-relaxed text-base">

                        Experienced cardiology team</li>

                    <li class="text-gray-700 leading-relaxed text-base">

                        Advanced Cath Lab infrastructure </li>

                    <li class="text-gray-700 leading-relaxed text-base">
                        Emergency-ready cardiac care </li>
                    <li class="text-gray-700 leading-relaxed text-base">
                        Strict clinical and infection control protocols </li>
                    <li class="text-gray-700 leading-relaxed text-base">

                        Coordinated care from diagnosis to treatment</li>

                    <p class="text-gray-700 leading-relaxed text-base">maAx Super Speciality Hospital is a trusted centre for Cath Lab services in Shivamogga, offering accurate cardiac diagnosis and timely intervention with patient safety at the core.</p>

                </ul>

                <section class="w-full  py-12">
                    <div class="container mx-auto px-4">
                        <!-- Top Heading -->
                        <h3 class="text-2xl md:text-3xl font-semibold text-[#6C3130] leading-tight">
                            Experiencing heart-related symptoms or advised cardiac evaluation?

                            </h2>

                            <!-- Card -->
                            <div
                                class="mt-8  rounded-[20px]  flex flex-col md:flex-row overflow-hidden p-5">
                                <!-- Left: Image -->
                                <div class="md:w-[493px] md:h-[547px]">
                                    <img
                                        src="../assets/genrated-image.png"
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
                    <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
                        FAQs on Cath Lab at
                        <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shimoga</span>
                    </h2>

                    <!-- ACCORDION BOX -->
                    <div class="rounded-2xl border border-gray-300 divide-y">

                        <details class="group">
                            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                                <span>1.what is a Cath Lab and why is it needed?</span>
                                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                            </summary>
                            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                                A Cath Lab is a specialised facility used to diagnose and treat heart and blood vessel conditions using minimally invasive techniques. It helps evaluate blockages, blood flow, and heart function. </div>
                        </details>

                        <details class="group">
                            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                                <span>2. When is a Cath Lab procedure recommended?</span>
                                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                            </summary>
                            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                                Cath Lab procedures are advised for symptoms such as chest pain, breathlessness, abnormal cardiac test results, or during emergencies like heart attacks. </div>
                        </details>

                        <details class="group">
                            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                                <span>3. Is cardiac catheterisation a major surgery?</span>
                                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                            </summary>
                            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                                No. Cath Lab procedures are minimally invasive and do not require open-heart surgery. Most are performed through a small catheter inserted via the wrist or groin. </div>
                        </details>

                        <details class="group">
                            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                                <span>4. How long does a Cath Lab procedure take?</span>
                                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                            </summary>
                            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                                The duration depends on the procedure. Diagnostic angiography usually takes 30–60 minutes, while interventional procedures may take longer
                            </div>
                        </details>

                        <details class="group">
                            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                                <span>5. Is Cath Lab treatment safe?</span>
                                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                            </summary>
                            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                                Yes. Cath Lab procedures are routinely performed worldwide under strict monitoring and safety protocols by trained cardiologists. </div>
                        </details>

                    </div>
                </section>
            </div>
            <!-- TITLE -->




            <!-- BUTTON -->
            <div class="w-full flex justify-center">
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
        // navigation: {
        //   nextEl: ".swiper-button-next",
        //   prevEl: ".swiper-button-prev",
        // },
    });
</script>

</html>