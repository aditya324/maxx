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
                                    Heart & Vascular Care at<br>
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

                <a href="./heart-and-vascular-care.php" class="w-full flex items-center justify-between  bg-[#ec8b2a] text-white    font-medium py-3 px-4 rounded-md">
                    <span>Heart & Vascular Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./brain-and-nervecare.php" class="w-full flex items-center justify-between  bg-gray-100 text-gray-700  font-medium py-3 px-4 rounded-md">
                    <span>Brain Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./general-medicine.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Genral Medicine..</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./harmone-care.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Hormone Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./kidney-care.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Kidney Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./lung-care.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
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
                    <span class="text-[#ec8b2a]">Heart & Vascular Care </span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    The heart is the body’s powerhouse, pumping blood and oxygen to every organ. Cardiovascular diseases are among the leading causes of death worldwide, but with timely intervention, many conditions can be prevented or treated successfully. At MaAx Hospitals, our Heart & Vascular Care Department offers comprehensive services ranging from preventive cardiology to complex cardiac surgeries. Our cardiologists, cardiac surgeons, and vascular specialists work together to diagnose and treat heart disease, arrhythmias, valve disorders, and vascular complications. We emphasize preventive care, lifestyle management, and advanced interventions such as catheter-based procedures and minimally invasive surgeries. Patients benefit from personalized care plans that address both immediate concerns and long-term wellness. </p>

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
        </section>


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


    <div class="container w-full mx-auto">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Bronchoscopy at
            <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shimoga</span>
        </h2>

        <!-- ACCORDION BOX -->
        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What is bronchoscopy and why is it done?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                    Bronchoscopy is a minimally invasive test that allows pulmonologists to examine your airways and lungs using a flexible tube with a camera. It helps diagnose chronic cough, infections, lung diseases, tumors, and airway blockages.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. Is bronchoscopy a safe procedure?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. When performed by trained pulmonologists, bronchoscopy is considered safe, with very low complication rates. Local anesthesia or sedation is used to ensure comfort.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. How much does bronchoscopy cost in Shivamogga?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Costs vary based on clinical findings, complexity, and additional tests. Our team shares clear pricing details before the procedure.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Why choose MaAx Hospitals for bronchoscopy in Shivamogga?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    MaAx offers expert pulmonologists, modern bronchoscopy equipment, and comprehensive clinical support under one roof.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                    text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. How long does the bronchoscopy procedure and recovery take?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    The bronchoscopy usually takes 30–45 minutes. Most patients resume daily activities within 24 hours, depending on their condition.
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