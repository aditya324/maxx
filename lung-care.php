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

                <div class="flex flex-col lg:block relative min-h-[600px] lg:mt-0 ">

                    <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0  z-0 "
                        style="background-image: url('../assets/banners/medical-care.jpg');">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop"
                            class="hidden"
                            onerror="this.parentElement.style.backgroundImage = `url('${this.src}')`">

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1 class="text-4xl md:text-4xl p-3 lg:text-6xl font-semibold rounded-md text-white w-full "
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Lung Care at<br>
                                    maAx Hospital
                                </h1>
                            </div>
                        </div>

                    </div>

                    <div
                        class=" = px-4 lg:bg-transparent lg:p-0 lg:relative lg:z-10 lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px] mt-9 ">

                        <?php require "./components/speciality-form.php" ?>
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

                <a href="./heart-and-vascular-care.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700    font-medium py-3 px-4 rounded-md">
                    <span>Heart & Vascular Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./brain-and-nervecare.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700   font-medium py-3 px-4 rounded-md">
                    <span>Brain Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./general-medicine.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Genral Medicine..</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./harmone-care.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700   font-medium py-3 px-4 rounded-md">
                    <span>Hormone Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./kidney-care.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700  font-medium py-3 px-4 rounded-md">
                    <span>Kidney Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./lung-care.php" class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
                    <span>Lung Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./skin-hair.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Skin & Hair Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./bone-and-joint.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Bone & Joint Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./women-health.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Women’s Health</span>
                    <span class="text-xl">&gt;</span>
                </a>
                <a href="./specialities.php" class="w-full flex items-center justify-between bg-[#763837] text-white font-medium py-3 px-4 rounded-md">
                    <span>View All Specialties</span>
                    <span class="text-xl">&gt;</span>
                </a>
            </div>
            <!-- RIGHT CONTENT -->
            <div class="w-full lg:w-2/3 space-y-6 ">

                <h1 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Overview
                    <span class="text-[#ec8b2a]">Lung & Breathing Care</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    Healthy lungs are essential for adequate oxygen supply and overall vitality. Respiratory conditions such as asthma, chronic obstructive pulmonary disease (COPD), tuberculosis, sleep apnea, and post-infectious lung disease can significantly affect daily life and long-term health.
                    <br><br>
                    At MaAx Hospitals, our Lung & Breathing Care Department (Pulmonology) specializes in the diagnosis and treatment of both acute and chronic respiratory disorders. We utilize advanced imaging, bronchoscopy, and comprehensive respiratory therapy programs to help patients breathe easier. Our approach focuses on prevention, early detection, effective treatment, and long-term rehabilitation.
                </p>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Treatments
                    <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Asthma & Allergy Clinics –</strong> Personalized inhaler therapy and allergy management.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>COPD Management –</strong> Medication, oxygen therapy, and pulmonary rehabilitation.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Tuberculosis Care –</strong> Comprehensive diagnosis, treatment, and follow-up programs.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Sleep Apnea Management –</strong> CPAP therapy, lifestyle guidance, and surgical options.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Lung Infections –</strong> Management of pneumonia, bronchitis, and post-COVID lung conditions.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Bronchoscopy & Imaging –</strong> Advanced diagnostic and interventional procedures.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Respiratory Therapy –</strong> Breathing exercises, physiotherapy, and rehabilitation programs.
                    </p>
                </div>

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

                    <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                        Why Choose
                        <span class="text-[#ec8b2a]">MaAx Hospitals</span>
                    </h2>

                    <div class="space-y-4">
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Expert Pulmonologists:</strong> Specialists with national and international training.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Advanced Facilities:</strong> Modern bronchoscopy suites, sleep labs, and imaging services.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Comprehensive Care:</strong> End-to-end respiratory care from prevention to rehabilitation.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Patient-Centric Programs:</strong> Treatments tailored to individual lifestyle and environment.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Emergency Readiness:</strong> Rapid response for acute respiratory distress and critical care.
                        </p>
                    </div>

                </div>




            </div>
        </section>


    </section>
    <h2 class="text-3xl md:text-3xl font-semibold text-[#6C3130] leading-tight text-center p-5">
        Our
        <span class="text-[#ec8b2a]">Doctors</span>
    </h2>
    <section class="flex justify-center">

        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

            <div class="flex justify-center -mt-2">
                <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                    <img src="./assets/doctors/Dr Anirudha Udupa K.webp" alt="Dr. Aniruddha Udupi K" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr. Aniruddha Udupi K
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MD (Pulmonology)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Pulmonology
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-anirudda.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-anirudda.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

    </section>


    <div class="container w-full mx-auto">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Lung & Breathing Care at
            <span class="text-[#ec8b2a]">MaAx Super Specialty Hospital, Shimoga</span>
        </h2>

        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What conditions are treated under Lung & Breathing Care?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                    We treat asthma, COPD, tuberculosis, sleep apnea, lung infections, post-COVID lung conditions, and other respiratory disorders.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. When should I see a pulmonologist?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Persistent cough, breathlessness, wheezing, chest tightness, frequent infections, or sleep-related breathing problems require pulmonology consultation.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Is bronchoscopy a safe procedure?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. Bronchoscopy is a safe, minimally invasive procedure performed by trained pulmonologists using advanced equipment.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Can asthma and COPD be controlled?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. With proper medication, inhaler use, lifestyle changes, and pulmonary rehabilitation, symptoms can be effectively controlled.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. Do you provide emergency respiratory care?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. MaAx Hospitals is equipped to handle acute respiratory distress, severe asthma attacks, and critical lung emergencies 24/7.
                </div>
            </details>

        </div>
    </div>




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

</html>s