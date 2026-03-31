<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urology Care</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <?php require "./header.php" ?>



    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- SLIDE 01 -->
            <div class="swiper-slide">

                <div class="flex flex-col lg:block relative min-h-[600px] lg:mt-0 ">

                    <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0  z-0 "
                        style="background-image: url('../assets/urology.jpg');">
                        <img src="../assets/urology.jpg"
                            class="h-full w-full object-cover">

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:container lg:mx-auto">
                            <h1 class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white "
                                style="background: linear-gradient(90deg,rgba(245,130,32,1) 0%, rgba(143,76,19,1) 62%);">
                                Urology Care at<br>
                                maAx
                            </h1>
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

    <!-- SLIDER WRAPPER -->


    <!-- MAIN SECTION -->
    <section class="w-full bg-[#FFCDA6] py-10">
        <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-10">

            <!-- LEFT MENU -->
            <div class="w-full lg:w-1/4 flex flex-col gap-3">

                <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">
                    Top Procedures & Treatments
                </h2>

                <!-- PRIMARY (Urology Care) -->
                <a href="./procedures/urology-surgery.php"
                    class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
                    <span>Urology Surgery</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/dialysis.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Dialysis</span>
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

                <a href="./procedures/mri-scan.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>MRI Scan</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <a href="./procedures/biopsy.php"
                    class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
                    <span>Biopsy</span>
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
                    Overview <span class="text-[#ec8b2a]">Urology Care</span>
                </h1>

                <p class="text-gray-700 font-semibold">
                    Urology focuses on the diagnosis and treatment of conditions related to the urinary tract and male reproductive system. These include disorders of the kidneys, ureters, bladder, urethra, and prostate.
                    <br><br>
                    At maAx Super Speciality Hospital, our Urology Department offers advanced care for a wide range of urological conditions using modern diagnostic tools and minimally invasive techniques. Our experienced urologists provide personalized treatment plans to ensure effective management, faster recovery, and improved quality of life.
                </p>

                <h2 class="text-3xl font-semibold text-[#6C3130]">
                    Treatments <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p><strong>Kidney Stone Treatment –</strong> Non-surgical and surgical removal of kidney and urinary stones.</p>
                    <p><strong>Prostate Disorders –</strong> Management of enlarged prostate (BPH) and prostate-related conditions.</p>
                    <p><strong>Urinary Tract Infections (UTIs) –</strong> Diagnosis and treatment of infections in the urinary system.</p>
                    <p><strong>Urological Endoscopy –</strong> Minimally invasive procedures for diagnosis and treatment.</p>
                    <p><strong>Bladder Disorders –</strong> Treatment for incontinence, bladder control issues, and infections.</p>
                    <p><strong>Male Infertility & Reproductive Health –</strong> Evaluation and treatment of male reproductive issues.</p>
                    <p><strong>Uro-Oncology –</strong> Diagnosis and treatment of cancers affecting the urinary system.</p>
                    <p><strong>Laparoscopic Urology Surgery –</strong> Advanced minimally invasive surgical procedures.</p>
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
                    <img src="./assets/doctors/dr-rakesh.webp" alt="Dr Rakesh Bisalahalli" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr Rakesh Bisalahalli
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MS, DNB (Urology)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Urology
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-rakesh.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-rakesh.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

    </section>

    <!-- FAQ -->
    <div class="container w-full mx-auto mt-10">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Urology Care at
            <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
        </h2>

        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What symptoms indicate urological problems?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Symptoms include pain during urination, frequent urination, blood in urine, lower abdominal pain, or difficulty in urination.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. When should I consult a urologist?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    If you experience persistent urinary symptoms, kidney pain, or reproductive health concerns, consult a urologist.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Are kidney stones treatable without surgery?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Yes. Many kidney stones can be treated with medication or non-invasive procedures like lithotripsy.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Is urological surgery safe?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Yes. With modern minimally invasive techniques, urological surgeries are safe and have faster recovery times.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. Can urological conditions be prevented?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Maintaining hydration, a healthy diet, and regular checkups can help prevent many urological conditions.
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