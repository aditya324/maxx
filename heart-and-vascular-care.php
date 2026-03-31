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

        <div class="flex flex-col lg:block relative lg:min-h-[600px]">

            <!-- IMAGE SECTION -->
            <div class="relative h-[300px] sm:h-[380px] md:h-[450px] lg:h-[619px] 
                        bg-cover bg-center lg:absolute lg:inset-0 z-0"
                style="background-image: url('../assets/heart-vascularcare.webp');">

                <!-- REMOVE THIS IMAGE (causing issues) -->
                <!-- <img src="../assets/heart-vascularcare.webp"> -->

                <!-- Overlay -->
                <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                <!-- TEXT -->
                <div class="absolute inset-0 flex flex-col justify-center items-center 
                            text-center px-4 
                            lg:text-left lg:items-start lg:justify-center 
                            lg:container lg:mx-auto lg:px-6">

                    <div class="max-w-full">
                        <h1 class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white w-full"
                            style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                            Heart Care at<br>
                            maAx 
                        </h1>
                    </div>
                </div>

            </div>

            <!-- FORM SECTION -->
            <div class="px-4 mt-6 sm:mt-8 md:mt-10
                        lg:bg-transparent lg:p-0 lg:relative lg:z-10 
                        lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px]">

                <?php require "./components/speciality-form.php" ?>
            </div>

        </div>
    </div>

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

                <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">Top Procedures & Treatments</h2>

                <a href="./procedures/angiography.php" class="w-full flex items-center justify-between  bg-gray-100 text-gray-700    font-medium py-3 px-4 rounded-md">
                    <span>Angiography</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/angioplasty.php" class="w-full flex items-center justify-between  bg-gray-100 text-gray-700  font-medium py-3 px-4 rounded-md">
                    <span>Angioplasty</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/bypass-surgery.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Bypass Surgery (CABG)</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/pacemaker.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Pacemaker Implant</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./kidney-care.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Kidney Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/valve-replacement.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Valve Replacement</span>
                    <span class="text-xl">&gt;</span>
                </a>

                
                <a href="./procedures.php" class="w-full flex items-center justify-between bg-[#763837] text-white font-medium py-3 px-4 rounded-md">
                    <span>View All Procedures</span>
                    <span class="text-xl">&gt;</span>
                </a>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="w-full lg:w-2/3 space-y-6 ">

                <h1 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Overview
                    <span class="text-[#ec8b2a]">Heart & Vascular Care </span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    The heart is the body’s powerhouse, pumping blood and oxygen to every organ. Cardiovascular diseases are among the leading causes of death worldwide, but with timely intervention, many conditions can be prevented or treated successfully. At maAx Super Speciality Hospital, our Heart & Vascular Care Department offers comprehensive services ranging from preventive cardiology to complex cardiac surgeries. Our cardiologists, cardiac surgeons, and vascular specialists work together to diagnose and treat heart disease, arrhythmias, valve disorders, and vascular complications. We emphasize preventive care, lifestyle management, and advanced interventions such as catheter-based procedures and minimally invasive surgeries. Patients benefit from personalized care plans that address both immediate concerns and long-term wellness. </p>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Treatments
                    <span class="text-[#ec8b2a]">Offered</span>
                </h2>

                <div class="space-y-2">
                    <p class="text-gray-700  text-base font-semibold">
                        <strong>Preventive Cardiology-</strong>Risk assessment, lifestyle counseling, and early detection programs.
                    </p>
                    <p class="text-gray-700  text-base font-semibold">
                        <strong>Interventional Cardiology-</strong> Angioplasty, stent placement, and catheter-based procedures.
                    </p>
                    <p class="text-gray-700  text-base font-semibold">
                        <strong>Cardiac Surgery-</strong>Bypass surgery, valve repair/replacement, and congenital heart defect correction
                    </p>
                    <p class="text-gray-700  text-base font-semibold">
                        <strong>Arrhythmia Management-</strong> Pacemaker implantation, defibrillators, and ablation therapies.
                    </p>
                    <p class="text-gray-700  text-base font-semibold">
                        <strong>Vascular Surgery-</strong>Treatment for aneurysms, varicose veins, and peripheral artery disease.
                    </p>
                    <p class="text-gray-700  text-base font-semibold">
                        <strong>Heart Failure Management-</strong>Medication, device therapy, and advanced surgical options.
                    </p>
                    <p class="text-gray-700  text-base font-semibold">
                        <strong>Emergency Cardiac Care-</strong> 24/7 heart attack and cardiac arrest response teams.
                    </p>
                    <p class="text-gray-700  text-base font-semibold">
                        <strong>Rehabilitation Programs-</strong> Cardiac rehab to restore strength and confidence post-surgery
                    </p>
                </div>


                <div class="w-full lg:w-full space-y-6 flex flex-col mt-10">

                    <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                        Why Choose
                        <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
                    </h2>
                    <div class="space-y-4">
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Expertise:</strong>Renowned cardiologists and surgeons with decades of experience.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Technology:</strong> Cath labs, advanced imaging, and minimally invasive surgical suites.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Comprehensive Care:</strong>Preventive, interventional, and surgical services under one roof.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Emergency Readiness:</strong>24/7 cardiac emergency response teams.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Patient-Centered:</strong>Personalized care plans and rehabilitation support.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Holistic Approach:</strong>Lifestyle counseling, diet management, and stress reduction programs
                        </p>
                    </div>
                </div>

            </div>

        </div>

       

    </section>
    <h2 class="text-3xl md:text-3xl font-semibold text-[#6C3130] leading-tight text-center p-5">
        Our
        <span class="text-[#ec8b2a]">Doctors</span>
    </h2>
    <section class="flex justify-center gap-8">

        <!-- Doctor 1 -->
        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

            <div class="flex justify-center -mt-2">
                <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                    <img src="./assets/doctors/Dr Manjunath A Phasalkar.webp" alt="Dr. Manjunath P. Pasalkar" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
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
                <a href="./dr-manjunath.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-manjunath.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>
        </div>

        <!-- Doctor 2 -->
        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

            <div class="flex justify-center -mt-2">
                <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                    <img src="./assets/doctors/Sudheer Bhatt.webp" alt="Dr. Sudheer M Bhat" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
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
                <a href="./dr-sudheer-m-bhat.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-sudheer-m-bhat.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>
        </div>

    </section>


   <div class="container w-full mx-auto mt-10">
    <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
        FAQs on Heart & Vascular Care at
        <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
    </h2>

    <!-- ACCORDION BOX -->
    <div class="rounded-2xl border border-gray-300 divide-y">

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                <span>1. What is heart and vascular care?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                Heart and vascular care focuses on diagnosing and treating conditions related to the heart and blood vessels, including coronary artery disease, hypertension, stroke risk, and peripheral vascular disease.
            </div>
        </details>

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                <span>2. What are common symptoms of heart problems?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                Common symptoms include chest pain, shortness of breath, fatigue, palpitations, dizziness, and swelling in the legs. Immediate medical attention is recommended if symptoms are severe.
            </div>
        </details>

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                <span>3. What tests are done for heart and vascular diseases?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                Diagnostic tests may include ECG, echocardiography, stress tests, CT angiography, Doppler studies, and coronary angiography, depending on the condition.
            </div>
        </details>

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                <span>4. What treatments are available for heart conditions?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                Treatments range from lifestyle changes and medications to advanced procedures like angioplasty, stenting, pacemaker implantation, and cardiac surgeries.
            </div>
        </details>

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                <span>5. How can I prevent heart disease?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                Prevention includes maintaining a healthy diet, regular exercise, controlling blood pressure and diabetes, avoiding smoking, managing stress, and undergoing regular health check-ups.
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