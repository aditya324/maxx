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
                        style="background-image: url('../assets/child-newborn.jpg');">
                        <img src="../assets/child-newborn.jpg">

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1 class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white w-full"
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Child & Newborn Care at<br>
                                    maAx
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

                <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">
                    Top Procedures & Treatments
                </h2>

                <!-- PRIMARY (Women’s Health) -->
                <a href="./procedures/c-section.php"
                    class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
                    <span>C Section</span>
                    <span class="text-xl">&gt;</span>
                </a>

                <!-- OTHER (Random Fill) -->
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
            <div class="w-full lg:w-2/3 space-y-6 ">

                <h1 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Overview
                    <span class="text-[#ec8b2a]">Child & Newborn Care</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    Children require specialized medical attention to support healthy growth, development, and overall well-being from birth through adolescence. Early diagnosis, preventive care, and timely treatment play a crucial role in ensuring long-term health.
                    <br><br>
                    At maAx Super Speciality Hospital, our Child & Newborn Care Department (Pediatrics & Neonatology) offers comprehensive preventive, diagnostic, and therapeutic services for infants, children, and adolescents. Our pediatricians focus on immunizations, growth monitoring, and management of childhood illnesses, while our neonatologists provide advanced care for newborns through well-equipped Neonatal Intensive Care Units (NICU). We emphasize preventive healthcare and family-centered support to help every child thrive.
                </p>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Treatments
                    <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Preventive Pediatric Care –</strong> Vaccinations, growth monitoring, and routine wellness checkups.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Neonatal Intensive Care (NICU) –</strong> Specialized medical support for premature and critically ill newborns.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Childhood Illness Management –</strong> Treatment for infections, fevers, respiratory, and common pediatric conditions.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Developmental Disorder Care –</strong> Evaluation and support for autism, ADHD, and learning difficulties.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Nutritional Counseling –</strong> Guidance to ensure healthy growth and balanced nutrition.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Adolescent Health Programs –</strong> Counseling for puberty-related concerns, mental health, and lifestyle issues.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Emergency Pediatric Care –</strong> 24/7 readiness to manage acute and critical pediatric conditions.
                    </p>
                </div>

                <div class="w-full lg:w-full space-y-6 flex flex-col mt-10 ">

                    <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                        Why Choose
                        <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
                    </h2>

                    <div class="space-y-4">
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Expert Specialists:</strong> Experienced pediatricians and neonatologists with specialized training.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Advanced NICU Facilities:</strong> State-of-the-art neonatal intensive care units for critical newborn care.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Comprehensive Child Health Programs:</strong> Continuous care from infancy through adolescence.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Patient-Centric Approach:</strong> Family-centered care involving parents in every decision.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Holistic Healing:</strong> Integrated nutrition guidance, counseling, and preventive healthcare.
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
        <section class="flex justify-center gap-8 flex-wrap">

            <!-- Doctor 1 -->
            <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

                <div class="flex justify-center -mt-2">
                    <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                        <img src="./assets/doctors/Dr Sreenivas Hatwar.webp" alt="Dr Sreenivas Hatwar" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="mt-4">
                    <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                        Dr Sreenivas Hatwar
                    </h3>

                    <p class="text-gray-700 text-[15px] mt-1">
                        MBBS, MD (Pediatrics)
                    </p>

                    <p class="text-orange-500 text-[17px] font-semibold mt-2">
                        Pediatrics
                    </p>
                </div>

                <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                    <a href="./dr-srinivas.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                        View Profile
                    </a>
                    <a href="./dr-srinivas.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                        Book Appointment
                    </a>
                </div>

            </div>

        </section>

    </section>


    <div class="container w-full mx-auto mt-10">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Child & Newborn Care at
            <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
        </h2>

        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What services are included in Child & Newborn Care?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                    Our services include newborn care, NICU support, pediatric consultations, vaccinations, growth monitoring, treatment for childhood illnesses, and developmental assessments.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. When should I take my child to a pediatrician?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    You should visit a pediatrician for regular check-ups, vaccinations, fever, infections, feeding issues, delayed milestones, or any concerns regarding your child’s health and development.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Do you provide NICU facilities for newborns?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. Our Neonatal Intensive Care Unit (NICU) is equipped to care for premature babies, low birth weight infants, and newborns requiring specialized medical attention.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Are vaccinations available for children?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. We follow recommended immunization schedules and provide all essential vaccines to protect children from serious diseases.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. Do you offer guidance for child growth and nutrition?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. We provide expert guidance on nutrition, feeding practices, growth tracking, and developmental milestones to ensure healthy growth of your child.
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

</html>