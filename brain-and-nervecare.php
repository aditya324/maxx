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
                    <div class="relative h-[280px] sm:h-[360px] md:h-[420px] lg:h-[619px] 
                            bg-cover bg-center lg:absolute lg:inset-0 z-0"
                        style="background-image: url('../assets/brain-nerve-science.jpg');">

                        <!-- ❌ REMOVE THIS (causing issues) -->
                        <!-- <img src="../assets/brain-nerve-science.jpg"> -->

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <!-- TEXT -->
                        <div class="absolute inset-0 flex flex-col justify-center items-center 
                                text-center px-4
                                lg:text-left lg:items-start lg:justify-center 
                                lg:container lg:mx-auto lg:px-6">

                            <div class="max-w-full">
                                <h1 class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white w-full"
                                    style="background: linear-gradient(90deg,rgba(245,130,32,1) 0%, rgba(143,76,19,1) 62%);">
                                    Brain Care <br>
                                    at maAx
                                </h1>
                            </div>
                        </div>

                    </div>

                    <!-- FORM SECTION -->
                    <div class="px-4 mt-5 sm:mt-6 md:mt-8
                            lg:bg-transparent lg:p-0 lg:relative lg:z-10 
                            lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px]">

                        <?php require "./components/speciality-form.php" ?>
                    </div>

                </div>
            </div>

        </div>

        <!-- PAGINATION -->
        <div class="swiper-pagination"></div>
    </div>
    <section class="w-full bg-[#FFCDA6] py-10">
        <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-10">

            <!-- LEFT MENU -->
            <div class="w-full lg:w-1/4 flex flex-col gap-3">

                <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">
                    Top Procedures & Treatments
                </h2>

                <!-- PRIMARY (Brain & Neuro) -->
                <a href="./procedures/brain-surgery.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Brain Surgery</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/mri-scan.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>MRI Scan</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/ct-scan.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>CT Scan</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <!-- OTHER (Random Fill - Balanced) -->
                <a href="./procedures/knee-surgery.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Knee Surgery</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/angioplasty.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Angioplasty</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/endoscopy.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Endoscopy</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/ultrasound.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Ultrasound</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <!-- CTA -->
                <a href="./procedures.php"
                    class="w-full flex items-center justify-between bg-[#763837] text-white font-medium py-3 px-4 rounded-md">
                    <span>View All Procedures</span>
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
                    At maAx Super Speciality Hospital, our Brain & Nerve Care Department delivers advanced neurological diagnosis, treatment, and rehabilitation. Our team of neurologists, neurosurgeons, neurophysiologists, and rehabilitation specialists work collaboratively to provide personalized, world-class care. Using advanced neuroimaging, minimally invasive procedures, and comprehensive rehabilitation programs, we focus on restoring function, improving quality of life, and supporting patients and families through every stage of recovery.
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
                <div class="w-full lg:w-full space-y-6 flex flex-col  mt-10">

                    <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight w-full">
                        Why Choose
                        <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
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


        </div>




    </section>
    <h2 class="text-3xl md:text-3xl font-semibold text-[#6C3130] leading-tight text-center p-5">
        Our
        <span class="text-[#ec8b2a]">Doctors</span>
    </h2>
    <section class="flex justify-center gap-8 flex-wrap">

        <!-- Doctor 1 -->
        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

            <div class="flex justify-center -mt-2">
                <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                    <img src="./assets/doctors/Dr Narayan Panji.webp" alt="Dr. Narayan Panji" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr. Narayan Panji
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, DNB, MS, MCh (Neurosurgery)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Neurosurgery
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-narayan-panji.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-narayan-panji.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

        <!-- Doctor 2 -->
        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

            <div class="flex justify-center -mt-2">
                <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                    <img src="./assets/doctors/Dr Arun S.webp" alt="Dr. Arun S" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr. Arun S
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, DNB (Neurosurgery)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Neurosurgery
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-arun.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-arun.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

        <!-- Doctor 3 -->


    </section>


    <div class="container w-full mx-auto mt-10">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Brain & Nerve Care at
            <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
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