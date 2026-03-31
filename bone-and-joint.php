<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bone & Joint Care</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <?php require "./header.php" ?>

    <!-- SLIDER WRAPPER -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- SLIDE 01 -->
            <div class="swiper-slide">
                <div class="flex flex-col lg:block relative min-h-[600px] lg:mt-0 flex-wrap">

                     <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0  z-0 "
                        style="background-image: url('../assets/bone-and-joint.jpg');">
                        <img src="../assets/bone-and-joint.jpg"
                            >
                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                 <h1 class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white w-full"
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                     Bone & Joint Care <br>
                                    at maAx 
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="px-4 lg:bg-transparent lg:p-0 lg:relative lg:z-10 lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px] mt-9">
                        <?php require "./components/speciality-form.php" ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>
    </div>

    <!-- MAIN SECTION -->
    <section class="w-full bg-[#FFCDA6] py-10">
        <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-10">

            <!-- LEFT MENU (UNCHANGED) -->
           <div class="w-full lg:w-1/4 flex flex-col gap-3">

    <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">
        Top Procedures & Treatments
    </h2>

    <!-- PRIMARY (Bone & Joint Related) -->
    <a href="./procedures/knee-surgery.php"
        class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
        <span>Knee Surgery</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/joint-replacement.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Joint Replacement</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/fracture-repair.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Fracture Repair</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/physiotherapy.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Physiotherapy</span>
        <span class="text-xl">&gt;</span>
    </a>

    <!-- OTHER (Random Fill) -->
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
            <div class="w-full lg:w-2/3 space-y-6">

                <h1 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Overview <span class="text-[#ec8b2a]">Bone & Joint Care</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    Bone and Joint Care at maAx Super Speciality Hospital is dedicated to the diagnosis, treatment, and long-term management of disorders affecting bones, joints, muscles, ligaments, tendons, and the spine. The department addresses conditions that limit mobility, cause chronic pain, or result from injury, ageing, lifestyle factors, or underlying medical diseases.
                </p>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    Musculoskeletal problems often begin silently — mild knee pain, back stiffness, or reduced flexibility — but can gradually interfere with daily activities, independence, and overall quality of life. At maAx Super Speciality Hospital, Bone and Joint Care focuses not only on relieving pain but also on restoring movement, strength, and confidence through timely medical intervention and structured rehabilitation.
                </p>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    Care is delivered through a patient-centred approach, combining clinical expertise, accurate diagnosis, modern surgical techniques, and comprehensive post-treatment recovery support.
                </p>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Procedures / Treatments <span class="text-[#ec8b2a]">Offered</span>
                </h2>

                <div class="space-y-2 text-gray-700 text-base font-semibold">
                    <p><strong>Non-Surgical Treatments —</strong> Pain management, physiotherapy, posture correction, and osteoporosis care.</p>
                    <p><strong>Minimally Invasive Procedures —</strong> Arthroscopy, image-guided injections, and sports injury repair.</p>
                    <p><strong>Surgical Treatments —</strong> Fracture fixation, joint replacements, spine surgery, and deformity correction.</p>
                </div>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Conditions <span class="text-[#ec8b2a]">Treated</span>
                </h2>

                <div class="space-y-2 text-gray-700 text-base font-semibold">
                    <p>Osteoarthritis, degenerative disc disease, spondylosis</p>
                    <p>Fractures, sports injuries, ligament tears</p>
                    <p>Chronic back pain, sciatica, slipped disc</p>
                    <p>Osteoporosis, rheumatoid arthritis, inflammatory joint disorders</p>
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


<div class="container w-full mx-auto mt-10">
    <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
        FAQs on Bone & Joint Care at
        <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
    </h2>

    <div class="rounded-2xl border border-gray-300 divide-y">

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                <span>1. What conditions are treated under Bone & Joint Care?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                We treat fractures, arthritis, joint pain, ligament injuries, sports injuries, spine disorders, osteoporosis, and degenerative joint conditions.
            </div>
        </details>

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                <span>2. When should I consult an orthopedic specialist?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                You should consult if you experience persistent joint pain, swelling, stiffness, limited movement, injuries, or difficulty in walking or performing daily activities.
            </div>
        </details>

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                <span>3. Do you offer joint replacement surgeries?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                Yes. We provide advanced knee, hip, and shoulder joint replacement surgeries using minimally invasive techniques for faster recovery.
            </div>
        </details>

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                <span>4. Is surgery always required for bone and joint problems?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                No. Many conditions can be managed with medication, physiotherapy, lifestyle changes, and minimally invasive procedures. Surgery is recommended only when necessary.
            </div>
        </details>

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                <span>5. Do you provide rehabilitation after surgery or injury?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                Yes. Our rehabilitation programs include physiotherapy and guided exercises to restore strength, mobility, and function after surgery or injury.
            </div>
        </details>

    </div>
</div>

    <?php require "./components/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: { delay: 5000, disableOnInteraction: false, pauseOnMouseEnter: true },
            effect: "slide",
            loop: true,
            pagination: { el: ".swiper-pagination", clickable: true }
        });
    </script>

</body>
</html>
