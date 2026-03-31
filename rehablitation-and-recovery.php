<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehabilitation & Recovery</title>
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
                        style="background-image: url('../assets/physiothraphy.jpg');">
                        <img src="../assets/physiothraphy.jpg"
                            >

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                 <h1 class="text-2xl md:text-3xl p-3 lg:text-3xl xl:text-5xl font-semibold rounded-md text-white w-full"
                                style="background: linear-gradient(90deg,rgba(245,130,32,1) 0%, rgba(143,76,19,1) 62%);">
                                Rehabilitation & Recovery<br>
                                at maAx 
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

    <!-- MAIN SECTION -->
    <section class="w-full bg-[#FFCDA6] py-10">
        <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-10">

            <!-- LEFT MENU -->
            <div class="w-full lg:w-1/4 flex flex-col gap-3">

    <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">
        Top Procedures & Treatments
    </h2>

    <!-- PRIMARY (Rehabilitation Related) -->
    <a href="./procedures/physiotheraphy.php"
        class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
        <span>Physiotherapy</span>
        <span class="text-xl">&gt;</span>
    </a>

    <!-- OTHER (Support + Random Fill) -->
    <a href="./procedures/fracture-repair.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Fracture Repair</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/joint-replacement.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Joint Replacement</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/knee-surgery.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Knee Surgery</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/ultrasound.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Ultrasound</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/mri-scan.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>MRI Scan</span>
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
                    Overview <span class="text-[#ec8b2a]">Rehabilitation & Recovery</span>
                </h1>

                <p class="text-gray-700 font-semibold">
                    Rehabilitation and recovery play a vital role in restoring strength, mobility, and independence after injury, surgery, or illness. It focuses on improving physical, mental, and functional abilities to help patients return to their normal daily activities.
                    <br><br>
                    At maAx Super Speciality Hospital, our Rehabilitation & Recovery Department provides comprehensive, multidisciplinary care tailored to each patient’s needs. Our team of physiotherapists, occupational therapists, speech therapists, and rehabilitation specialists work together to ensure effective recovery. Using modern techniques and personalized programs, we aim to accelerate healing, reduce pain, and enhance overall quality of life.
                </p>

                <h2 class="text-3xl font-semibold text-[#6C3130]">
                    Treatments <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p><strong>Physiotherapy –</strong> Exercises and therapies to restore movement, strength, and flexibility.</p>
                    <p><strong>Post-Surgical Rehabilitation –</strong> Recovery programs after orthopedic, neurological, or cardiac surgeries.</p>
                    <p><strong>Neurological Rehabilitation –</strong> Recovery support for stroke, spinal injuries, and nerve disorders.</p>
                    <p><strong>Orthopedic Rehabilitation –</strong> Treatment for fractures, joint replacements, and musculoskeletal injuries.</p>
                    <p><strong>Pain Management Therapy –</strong> Techniques to reduce chronic pain and improve mobility.</p>
                    <p><strong>Occupational Therapy –</strong> Helping patients regain independence in daily activities.</p>
                    <p><strong>Speech & Swallow Therapy –</strong> Treatment for speech, language, and swallowing difficulties.</p>
                    <p><strong>Sports Injury Rehabilitation –</strong> Recovery programs for athletes and active individuals.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- FAQ (Accordion Style Same as Others) -->
    <div class="container w-full mx-auto mt-10">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Rehabilitation & Recovery at
            <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
        </h2>

        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. Who needs rehabilitation therapy?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Patients recovering from surgery, injury, stroke, or chronic conditions benefit from rehabilitation therapy.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. How long does rehabilitation take?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Recovery time varies depending on the condition, severity, and individual progress.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Is rehabilitation painful?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Some discomfort may occur initially, but therapy is designed to reduce pain and improve function safely.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Do you provide home-based rehabilitation?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Yes. We offer guidance and programs that can be continued at home for better recovery outcomes.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. What therapies are included?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Physiotherapy, occupational therapy, speech therapy, and pain management therapies are included.
                </div>
            </details>

        </div>
    </div>

    <?php require "./components/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: { delay: 5000, disableOnInteraction: false },
            loop: true,
            pagination: { el: ".swiper-pagination", clickable: true }
        });
    </script>

</body>
</html>