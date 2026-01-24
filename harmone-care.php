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
                                    Hormone Care at<br>
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

                <a href="./harmone-care.php" class="w-full flex items-center justify-between bg-[#ec8b2a] text-white  font-medium py-3 px-4 rounded-md">
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
                    <span class="text-[#ec8b2a]">Hormone Care</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    Hormones are chemical messengers that regulate growth, metabolism, reproduction, and overall balance in the body. When hormonal systems are disrupted, patients may experience fatigue, weight changes, mood swings, infertility, or chronic illnesses.
                    <br><br>
                    At MaAx Hospitals, our Hormone Care Department (Endocrinology) specializes in diagnosing and treating disorders of the thyroid, pancreas, adrenal glands, pituitary gland, and reproductive hormones. Many endocrine conditions require long-term management, and our specialists create personalized treatment plans combining medication, lifestyle guidance, and advanced monitoring to ensure long-term stability and wellness.
                </p>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Treatments
                    <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Diabetes Management –</strong> Insulin therapy, oral medications, diet counseling, and continuous glucose monitoring.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Thyroid Disorders –</strong> Treatment for hypothyroidism, hyperthyroidism, thyroid nodules, and thyroid cancer.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Adrenal & Pituitary Disorders –</strong> Management of Cushing’s syndrome, Addison’s disease, and pituitary tumors.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Metabolic Syndrome Care –</strong> Treatment for obesity, cholesterol imbalance, and hypertension.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Reproductive Hormone Disorders –</strong> PCOS, infertility, and menopause management.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Growth Disorders –</strong> Pediatric endocrinology for growth hormone deficiencies.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Bone Health –</strong> Osteoporosis prevention and treatment.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Hormone Replacement Therapy –</strong> Tailored hormone programs for men and women.
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
                            <strong>Expert Endocrinologists:</strong> Specialists with advanced training in hormone-related disorders.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Advanced Diagnostics:</strong> Comprehensive hormone assays, imaging, and monitoring tools.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Integrated Care:</strong> Collaboration with dieticians, gynecologists, pediatricians, and physicians.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Patient-Centric Approach:</strong> Personalized treatment focusing on lifestyle and emotional well-being.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Holistic Programs:</strong> Specialized care for diabetes, thyroid disorders, and reproductive health.
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
                    <img src="./assets/doctors/Dr Praveenkumar Devarabhavi.webp" alt="Dr. Praveenkumar Devarabatti" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr. Praveenkumar Devarabatti
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MD (Endocrinology)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Endocrinology
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-praveen.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-praveen.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

        <!-- Doctor 2 -->
        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

            <div class="flex justify-center -mt-2">
                <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                    <img src="./assets/doctors/Dr Shreyamsa M.webp" alt="Dr. Shreyamsa M" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr. Shreyamsa M
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MS (Endocrine Surgery)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Endocrine Surgery
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-shreyamsa.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-shreyamsa.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

    </section>


    <div class="container w-full mx-auto">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Hormone Care at
            <span class="text-[#ec8b2a]">MaAx Super Specialty Hospital, Shimoga</span>
        </h2>

        <!-- ACCORDION BOX -->
        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What conditions are treated under Hormone Care?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                    Hormone Care (Endocrinology) treats diabetes, thyroid disorders, adrenal and pituitary conditions, PCOS, infertility, growth disorders, osteoporosis, and other hormonal imbalances.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. When should I consult an endocrinologist?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    You should consult an endocrinologist if you experience unexplained weight changes, fatigue, mood swings, irregular periods, infertility, excessive thirst, or blood sugar issues.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Is diabetes a lifelong condition?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Diabetes often requires long-term management, but with proper medication, diet, lifestyle changes, and monitoring, patients can lead healthy and active lives.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Are thyroid disorders treatable?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. Most thyroid conditions can be effectively managed with medication, monitoring, and in some cases surgery or radioiodine therapy.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. Do you provide lifestyle and diet guidance along with treatment?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. Hormone care at MaAx Hospitals includes lifestyle counseling, diet planning, and long-term follow-up to ensure sustained hormonal balance and overall well-being.
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