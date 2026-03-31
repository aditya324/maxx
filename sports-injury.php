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
                                    Bone, Joint & Sports Care at<br>
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

                <a href="./lung-care.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Lung Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./skin-hair.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700  font-medium py-3 px-4 rounded-md">
                    <span>Skin & Hair Care</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./bone-and-joint.php" class="w-full flex items-center justify-between bg-brand text-white font-medium py-3 px-4 rounded-md">
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
                    <span class="text-[#ec8b2a]">Bone, Joint & Sports Injury Care</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    Bones and joints form the foundation of movement, stability, and strength. Conditions such as fractures, arthritis, ligament injuries, and degenerative joint disorders can significantly limit mobility and affect quality of life.
                    <br><br>
                    At maAx Super Speciality Hospital, our Bone, Joint & Sports Injury Care Department (Orthopaedics & Sports Medicine) is dedicated to restoring movement and function through advanced medical, surgical, and rehabilitative care. We manage traumatic injuries, sports-related conditions, and chronic orthopaedic disorders using both surgical and non-surgical techniques. Our structured rehabilitation programs help patients regain strength, flexibility, and confidence—whether they are athletes or active individuals.
                </p>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Treatments
                    <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Fracture Management –</strong> Casting, fixation, and surgical repair of bone fractures.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Joint Replacement Surgery –</strong> Hip, knee, and shoulder replacement procedures.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Arthroscopy & Ligament Repair –</strong> Minimally invasive procedures for sports injuries.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Arthritis Care –</strong> Medical management, physiotherapy, and surgical treatment options.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Spinal Surgery –</strong> Treatment for spinal deformities, disc prolapse, and instability.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Sports Medicine Programs –</strong> Injury prevention, performance care, and rehabilitation.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Pediatric Orthopaedics –</strong> Care for congenital, developmental, and growth-related bone conditions.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Rehabilitation Services –</strong> Physiotherapy and occupational therapy for functional recovery.
                    </p>
                </div>

                 <div class="w-full lg:w-full mt-10 space-y-6 flex flex-col ">

                    <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                        Why Choose
                        <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
                    </h2>

                    <div class="space-y-4">
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Expert Specialists:</strong> Experienced orthopaedic surgeons and sports medicine experts.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Advanced Technology:</strong> Arthroscopy systems and robotic-assisted joint replacement.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Comprehensive Care:</strong> From emergency trauma care to long-term rehabilitation.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Patient-Centric Approach:</strong> Focused on restoring mobility, independence, and quality of life.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Holistic Healing:</strong> Integrated physiotherapy, nutrition guidance, and lifestyle support.
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
            FAQs on General & Keyhole Surgery at
            <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
        </h2>

        <!-- ACCORDION BOX -->
        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What is keyhole (laparoscopic) surgery?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                    Keyhole surgery is a minimally invasive technique performed through small incisions using a camera and specialized instruments. It results in less pain, minimal scarring, and faster recovery.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. Which conditions are treated under General & Keyhole Surgery?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    The department treats appendicitis, hernias, gallbladder disease, bowel conditions, thyroid and breast disorders, and various emergency surgical conditions.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Is laparoscopic surgery safe?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. When performed by experienced surgeons, laparoscopic surgery is very safe and often has fewer complications compared to open surgery.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. How long does recovery take after keyhole surgery?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Recovery is usually quicker than open surgery. Most patients resume normal activities within a few days to one week, depending on the procedure.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. Do you provide emergency surgical services?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. maAx Super Speciality Hospital offers 24/7 emergency surgical care for trauma, acute abdominal pain, and other urgent conditions.
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