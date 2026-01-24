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
                                    Brain & Nerve care at<br>
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

                <a href="./brain-and-nervecare.php" class="w-full flex items-center justify-between  bg-[#ec8b2a] text-white  font-medium py-3 px-4 rounded-md">
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
                    <span class="text-[#ec8b2a]">Brain & Nerve Care</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    The human brain and nervous system are the most intricate and vital networks in the body, responsible for controlling movement, sensation, thought, memory, and emotions. Even minor disruptions can have life-changing consequences. Neurological conditions may occur suddenly, such as stroke, seizures, or head injuries, or progress gradually like Parkinson’s disease and multiple sclerosis.
                    <br><br>
                    At MaAx Hospitals, our Brain & Nerve Care Department delivers advanced neurological diagnosis, treatment, and rehabilitation. Our team of neurologists, neurosurgeons, neurophysiologists, and rehabilitation specialists work collaboratively to provide personalized, world-class care. Using advanced neuroimaging, minimally invasive procedures, and comprehensive rehabilitation programs, we focus on restoring function, improving quality of life, and supporting patients and families through every stage of recovery.
                </p>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Treatments
                    <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Stroke Management & Rehabilitation –</strong> Immediate clot-busting therapies, surgical intervention, and structured rehabilitation programs.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Brain Tumor Surgery –</strong> Microsurgical and endoscopic techniques for benign and malignant tumors.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Spinal Cord Disorders & Surgery –</strong> Treatment for disc herniation, spinal stenosis, and spinal injuries.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Epilepsy Diagnosis & Surgery –</strong> Advanced EEG monitoring, medication management, and surgical solutions.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Parkinson’s & Movement Disorders –</strong> Medication, deep brain stimulation, and physiotherapy.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Migraine & Headache Clinics –</strong> Personalized treatment plans combining medication and lifestyle management.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Neurotrauma & Emergency Care –</strong> 24/7 management of head injuries, spinal trauma, and nerve damage.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Peripheral Nerve Surgery –</strong> Procedures to repair or decompress damaged nerves.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Neurorehabilitation –</strong> Physiotherapy, occupational therapy, and speech therapy for long-term recovery.
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
                            <strong>Expert Team:</strong> Highly experienced neurologists, neurosurgeons, and rehabilitation specialists.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Advanced Technology:</strong> MRI, CT, PET scans, intraoperative navigation, and neuro-monitoring systems.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Comprehensive Care:</strong> Emergency intervention, surgery, and long-term rehabilitation under one roof.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>24/7 Neurocritical Care:</strong> Dedicated ICUs for brain and spinal emergencies.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Patient-Centered Approach:</strong> Personalized care plans with emotional and family support.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Holistic Healing:</strong> Integrated physiotherapy, counseling, and lifestyle guidance.
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
                    <img src="./assets/doctors/Dr Shishir SM.webp" alt="Dr. Shishir S M" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr. Shishir S M
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, DNB, MS (Ortho)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Orthopedics
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-shishir.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-shishir.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

        <!-- Doctor 2 -->
        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

            <div class="flex justify-center -mt-2">
                <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                    <img src="./assets/doctors/Dr Sukruth P Patel.webp" alt="Dr. Sukruth P Patel" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr. Sukruth P Patel
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MS (Ortho), FIASM, FIJR
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Orthopedics
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-sukruth.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-sukruth.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

    </section>


    <div class="container w-full mx-auto">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Brain & Nerve Care at
            <span class="text-[#ec8b2a]">MaAx Super Specialty Hospital, Shimoga</span>
        </h2>

        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What conditions are treated under Brain & Nerve Care?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                    We treat stroke, epilepsy, brain tumors, spinal disorders, Parkinson’s disease, migraines, nerve injuries, and neurotrauma.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. When should I consult a neurologist?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Symptoms such as persistent headaches, seizures, weakness, numbness, memory loss, or movement difficulties require neurological evaluation.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Do you provide emergency neurological care?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. Our 24/7 neurocritical care unit manages stroke, head injuries, spinal trauma, and neurological emergencies.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Are minimally invasive neurosurgeries available?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. We perform advanced microsurgical and endoscopic procedures that reduce risk and recovery time.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. Is rehabilitation part of neurological treatment?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Absolutely. Neurorehabilitation including physiotherapy, occupational therapy, and speech therapy is essential for recovery.
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