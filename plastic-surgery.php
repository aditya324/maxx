<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plastic Surgery</title>
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
                            <h1 class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white"
                                style="background: linear-gradient(90deg,rgba(245,130,32,1) 0%, rgba(143,76,19,1) 62%);">
                                Plastic Surgery at<br>
                                maAx
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

                <!-- NO PRIMARY (none in your dataset) -->

                <!-- OTHER (Random Fill Only) -->
                <a href="./procedures/biopsy.php"
                    class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
                    <span>Biopsy</span>
                    <span class="text-xl">&gt;</span>
                </a>

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

                <a href="./procedures/ultrasound.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Ultrasound</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/endoscopy.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Endoscopy</span>
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
                    Overview <span class="text-[#ec8b2a]">Plastic Surgery</span>
                </h1>

                <p class="text-gray-700 font-semibold">
                    Plastic Surgery focuses on reconstructing, restoring, and enhancing physical appearance and function. It includes both reconstructive procedures for medical conditions and cosmetic procedures aimed at improving appearance and confidence.
                    <br><br>
                    At maAx Super Speciality Hospital, our Plastic Surgery Department offers advanced surgical solutions using modern techniques and precision care. Our experienced surgeons specialize in both reconstructive and aesthetic procedures, ensuring safe outcomes, minimal scarring, and faster recovery. We aim to improve both function and appearance, enhancing overall quality of life.
                </p>

                <h2 class="text-3xl font-semibold text-[#6C3130]">
                    Treatments <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p><strong>Reconstructive Surgery –</strong> Treatment for trauma, burns, congenital defects, and post-surgical reconstruction.</p>
                    <p><strong>Cosmetic (Aesthetic) Surgery –</strong> Procedures to enhance appearance including facial and body contouring.</p>
                    <p><strong>Burn Care & Reconstruction –</strong> Specialized treatment for burn injuries and scar correction.</p>
                    <p><strong>Scar Revision Surgery –</strong> Improving the appearance of scars and skin deformities.</p>
                    <p><strong>Hand Surgery –</strong> Treatment of hand injuries, nerve damage, and functional disorders.</p>
                    <p><strong>Skin Grafting & Flap Surgery –</strong> Advanced techniques for wound coverage and healing.</p>
                    <p><strong>Maxillofacial Procedures –</strong> Surgical treatment of facial injuries and deformities.</p>
                    <p><strong>Non-Surgical Aesthetic Treatments –</strong> Procedures like fillers and skin rejuvenation.</p>
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
                    <img src="./assets/doctors/Dr Prasanna Basavarajappa.webp" alt="Dr. Prasanna Basavarajappa" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr. Prasanna Basavarajappa
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MS, MCh (Plastic Surgery)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Plastic & Reconstructive Surgery
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-prasanna.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-prasanna.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

        <!-- Doctor 2 -->
        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

            <div class="flex justify-center -mt-2">
                <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                    <img src="./assets/doctors/Dr Akshay Pai.webp" alt="Dr. Akshay Pai" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr. Akshay Pai
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MS, MCh (Plastic Surgery)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Plastic Surgery
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-akshey.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-akshey.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

    </section>

    <!-- FAQ -->
    <div class="container w-full mx-auto mt-10">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Plastic Surgery at
            <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
        </h2>

        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What is the difference between plastic and cosmetic surgery?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Plastic surgery includes reconstructive procedures, while cosmetic surgery focuses on enhancing appearance.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. Are plastic surgery procedures safe?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Yes. When performed by experienced surgeons using modern techniques, procedures are safe and effective.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Is recovery time long?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Recovery depends on the procedure, but many modern techniques allow quicker healing and minimal downtime.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Can scars be completely removed?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Scars can be significantly improved but may not be completely removed.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. Do you offer non-surgical treatments?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Yes. We provide non-surgical aesthetic treatments like fillers, skin rejuvenation, and cosmetic procedures.
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