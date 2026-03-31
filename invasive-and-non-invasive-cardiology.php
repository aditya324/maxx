<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intensive & Critical Care</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <?php require "./header.php" ?>

    <!-- SLIDER WRAPPER -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="relative min-h-[600px] flex flex-col lg:flex-row">

                    <!-- Background -->
                    <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0  z-0 "
                        style="background-image: url('../assets/critical-care.webp');">
                        <img src="../assets/critical-care.webp"
                            class="h-full w-full object-cover">

                        <div class="absolute inset-0 bg-black/60"></div>

                        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:container lg:mx-auto">
                            <h1 class="text-4xl lg:text-6xl font-semibold text-white p-3 rounded-md"
                                style="background: linear-gradient(90deg,rgba(245,130,32,1) 0%, rgba(143,76,19,1) 62%);">
                                Intensive & Critical Care<br>
                                at maAx
                            </h1>
                        </div>
                    </div>

                    <!-- FORM -->
                    <div class="relative z-10 px-4 lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px] mt-9">
                        <?php require "./components/speciality-form.php"; ?>
                    </div>

                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>
    </div>

    <!-- MAIN SECTION -->
    <section class="w-full bg-[#FFCDA6] py-10">
        <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-10">

            <!-- LEFT MENU -->
            <div class="w-full lg:w-1/4 flex flex-col gap-3">

                <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">
                    Top Procedures & Treatments
                </h2>

                <!-- PRIMARY (Closest Relevant) -->
                <a href="./procedures/trauma.php"
                    class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
                    <span>Trauma Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <!-- OTHER (Support + Critical Diagnostics) -->
                <a href="./procedures/ct-scan.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>CT Scan</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/mri-scan.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>MRI Scan</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/x-ray.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>X-Ray</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/angiography.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Angiography</span>
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
            <div class="w-full lg:w-2/3 space-y-6">

                <h1 class="text-3xl md:text-4xl font-semibold text-[#6C3130]">
                    Overview <span class="text-[#ec8b2a]">Intensive & Critical Care</span>
                </h1>

                <p class="text-gray-700 font-semibold">
                    Intensive & Critical Care is dedicated to managing life-threatening conditions that require constant monitoring, advanced medical support, and specialized treatment. Patients in critical condition need immediate attention, precision care, and continuous supervision.
                    <br><br>
                    At maAx Super Speciality Hospital, our Intensive Care Unit (ICU) is equipped with state-of-the-art technology and staffed by highly trained intensivists, nurses, and multidisciplinary specialists. We provide round-the-clock monitoring, advanced life support systems, and personalized care plans to ensure the best possible outcomes for critically ill patients.
                </p>

                <h2 class="text-3xl font-semibold text-[#6C3130]">
                    Treatments <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p><strong>24/7 Critical Care Monitoring –</strong> Continuous monitoring of vital signs and organ functions.</p>
                    <p><strong>Ventilator & Respiratory Support –</strong> Advanced support for patients with breathing difficulties.</p>
                    <p><strong>Cardiac Critical Care –</strong> Management of heart attacks, arrhythmias, and cardiac emergencies.</p>
                    <p><strong>Neurocritical Care –</strong> Treatment for stroke, brain injuries, and neurological emergencies.</p>
                    <p><strong>Trauma & Emergency Care –</strong> Immediate care for accident and trauma patients.</p>
                    <p><strong>Sepsis & Infection Management –</strong> Intensive treatment for severe infections and septic shock.</p>
                    <p><strong>Post-Surgical ICU Care –</strong> Monitoring and recovery after major surgeries.</p>
                    <p><strong>Multi-Organ Support –</strong> Advanced care for patients with multiple organ failure.</p>
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
                    <img src="./assets/doctors/Dr Swathi V.C.webp" alt="Dr Swathi V C" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr Swathi V C
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MD (Anaesthesia)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Anaesthesiology
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-swathi.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-swathi.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

        <!-- Doctor 2 -->
        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

            <div class="flex justify-center -mt-2">
                <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                    <img src="./assets/doctors/Dr Pooja Shah.webp" alt="Dr Pooja Shah" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr Pooja Shah
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MD (Anaesthesia)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Anaesthesiology
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-pooja-shah.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-pooja-shah.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

        <!-- Doctor 3 -->
        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

            <div class="flex justify-center -mt-2">
                <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                    <img src="./assets/doctors/Dr Rouhi Kauser.webp" alt="Dr Rouhi Kauser" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr Rouhi Kauser
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MD (Anaesthesia)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Anaesthesiology
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-rohit-kauser.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-rohit-kauser.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

    </section>

    <!-- FAQ -->
    <div class="container w-full mx-auto mt-10">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Intensive & Critical Care at
            <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
        </h2>

        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What is ICU care?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    ICU care provides intensive monitoring and treatment for critically ill patients requiring life support.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. Who needs intensive care?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Patients with severe illness, trauma, organ failure, or post-surgical complications require ICU care.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Is ICU care available 24/7?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Yes. Our ICU operates round-the-clock with continuous monitoring and medical support.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. What equipment is used in ICU?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Equipment includes ventilators, cardiac monitors, infusion pumps, and life-support systems.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. Can family members visit ICU patients?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Yes, but visits are usually restricted and scheduled to ensure patient safety and proper care.
                </div>
            </details>

        </div>
    </div>

    <?php require "./components/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }
        });
    </script>

</body>

</html>