<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digestive Care</title>
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
                        style="background-image: url('../assets/digestive-care.jpg');">
                        <img src="../assets/digestive-care.jpg"
                        class="h-full w-full object-cover"
                            >

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1 class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white w-full"
                                style="background: linear-gradient(90deg,rgba(245,130,32,1) 0%, rgba(143,76,19,1) 62%);">
                                Digestive Care at<br>
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

    <!-- MAIN SECTION -->
    <section class="w-full bg-[#FFCDA6] py-10">
        <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-10">

            <!-- LEFT MENU -->
            <div class="w-full lg:w-1/4 flex flex-col gap-3">

    <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">
        Top Procedures & Treatments
    </h2>

    <!-- PRIMARY (Digestive Care) -->
    <a href="./procedures/endoscopy.php"
        class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
        <span>Endoscopy</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/gallbladder.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Gallbladder Removal</span>
        <span class="text-xl">&gt;</span>
    </a>

    <!-- OTHER (Support + Random Fill) -->
    <a href="./procedures/ultrasound.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Ultrasound</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/ct-scan.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>CT Scan</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/biopsy.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Biopsy</span>
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
                    Overview <span class="text-[#ec8b2a]">Digestive Care</span>
                </h1>

                <p class="text-gray-700 font-semibold">
                    Digestive health is essential for overall well-being, as the digestive system is responsible for breaking down food, absorbing nutrients, and eliminating waste. Disorders of the digestive tract can affect daily comfort and long-term health.
                    <br><br>
                    At maAx Hospital, our Digestive Care Department offers comprehensive diagnosis and treatment for a wide range of gastrointestinal conditions. Our specialists use advanced endoscopic techniques, imaging, and evidence-based treatments to provide accurate diagnosis and effective care. From common digestive issues to complex liver and intestinal disorders, we ensure personalized treatment and long-term management.
                </p>

                <h2 class="text-3xl font-semibold text-[#6C3130]">
                    Treatments <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p><strong>Acidity & GERD Management –</strong> Treatment for acid reflux, heartburn, and gastroesophageal reflux disease.</p>
                    <p><strong>Gastritis & Ulcer Treatment –</strong> Diagnosis and care for stomach inflammation and ulcers.</p>
                    <p><strong>Liver Disorders –</strong> Management of fatty liver, hepatitis, and liver-related conditions.</p>
                    <p><strong>Endoscopy & Colonoscopy –</strong> Advanced diagnostic and therapeutic procedures.</p>
                    <p><strong>Irritable Bowel Syndrome (IBS) –</strong> Management of chronic digestive discomfort and bowel issues.</p>
                    <p><strong>Constipation & Diarrhea Care –</strong> Treatment for acute and chronic bowel irregularities.</p>
                    <p><strong>Pancreatic Disorders –</strong> Diagnosis and treatment of pancreas-related conditions.</p>
                    <p><strong>Digestive Cancer Screening –</strong> Early detection and preventive screenings.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- FAQ -->
    <div class="container w-full mx-auto mt-10">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Digestive Care at
            <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
        </h2>

        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What symptoms indicate digestive problems?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Symptoms include abdominal pain, bloating, acidity, constipation, diarrhea, nausea, and unexplained weight loss.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. When should I consult a gastroenterologist?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    If you have persistent digestive issues like acidity, abdominal pain, or irregular bowel habits, you should seek medical advice.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Are endoscopy procedures safe?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Yes. Endoscopy and colonoscopy are safe, minimally invasive procedures performed by experienced specialists.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Can digestive problems be prevented?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Yes. A healthy diet, regular exercise, hydration, and avoiding alcohol and smoking help maintain digestive health.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. Do you provide long-term management for chronic conditions?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Yes. We offer ongoing care and monitoring for chronic digestive disorders like IBS, liver disease, and GERD.
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