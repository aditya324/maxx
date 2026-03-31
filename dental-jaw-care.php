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
                        style="background-image: url('../assets/dental-jaw.jpg');">
                        <img src="../assets/dental-jaw.jpg"
                            class="h-full w-full object-cover">

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1 class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white w-full"
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Dental, Jaw Care at<br>
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

    <!-- NO PRIMARY (since none exist in your data) -->

    <!-- OTHER (Random Fill Only) -->
    <a href="./procedures/angioplasty.php"
        class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
        <span>Angioplasty</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/endoscopy.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Endoscopy</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/knee-surgery.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Knee Surgery</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/biopsy.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Biopsy</span>
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
                    <span class="text-[#ec8b2a]">Dental, Jaw & Facial Surgery</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    Oral health plays a crucial role in overall well-being, influencing nutrition, speech, confidence, and facial appearance. Dental, jaw, and facial conditions can impact both function and aesthetics, requiring specialized and comprehensive care.
                    <br><br>
                    At maAx Super Speciality Hospital, our Dental, Jaw & Facial Surgery Department (Dentistry & Maxillofacial Surgery) offers complete care for teeth, gums, jaws, and facial structures. We combine routine dental services with advanced maxillofacial surgical procedures to restore function, correct deformities, and enhance facial aesthetics. Our experienced team focuses on precision, patient comfort, and long-term outcomes.
                </p>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Treatments
                    <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>General Dentistry –</strong> Fillings, root canal treatments, and preventive dental care.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Orthodontics –</strong> Braces, clear aligners, and bite correction.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Dental Implants –</strong> Permanent and natural-looking solutions for missing teeth.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Maxillofacial Surgery –</strong> Corrective jaw surgeries, facial trauma reconstruction, and deformity correction.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Cosmetic Dentistry –</strong> Teeth whitening, veneers, and smile design procedures.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Oral Cancer Screening & Surgery –</strong> Early detection and surgical management.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Pediatric Dentistry –</strong> Specialized, child-friendly dental care.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Emergency Dental Care –</strong> Immediate treatment for dental pain, infections, or facial trauma.
                    </p>
                </div>

                <div class="w-full lg:w-full space-y-6 flex flex-col  mt-10">

                    <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                        Why Choose
                        <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
                    </h2>

                    <div class="space-y-4">
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Expert Specialists:</strong> Highly trained dentists and maxillofacial surgeons with extensive experience.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>State-of-the-Art Facilities:</strong> Advanced digital imaging, modern dental units, and surgical suites.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Comprehensive Care:</strong> Complete services from preventive dentistry to complex facial surgeries.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Patient-Centric Approach:</strong> Focus on comfort, safety, and patient confidence.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Holistic Healing:</strong> Integrated care that balances functional restoration with aesthetic outcomes.
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
                    <img src="./assets/doctors/Dr Anubhav Jannu.webp" alt="Dr Anubhav Jannu" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr Anubhav Jannu
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MDS
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Maxillofacial Surgery
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-anubhav.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-anubhav.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

    </section>


    <div class="container w-full mx-auto mt-10">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Dental, Jaw & Facial Surgery at
            <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
        </h2>

        <!-- ACCORDION BOX -->
        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What services are provided under Dental, Jaw & Facial Surgery?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                    The department offers general dentistry, orthodontics, dental implants, cosmetic dentistry, maxillofacial surgery, oral cancer treatment, pediatric dentistry, and emergency dental care.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. Are dental implants safe and long-lasting?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. Dental implants are a safe and durable solution for missing teeth when placed by trained specialists and maintained with proper oral hygiene.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Is maxillofacial surgery painful?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Procedures are performed under local or general anesthesia, ensuring patient comfort. Post-procedure discomfort is managed effectively with medication and follow-up care.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Do you provide dental care for children?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. Our pediatric dentistry services are designed to provide gentle, child-friendly dental care in a comfortable environment.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. When should I seek emergency dental care?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Emergency dental care is required for severe tooth pain, facial swelling, trauma, bleeding, or sudden dental injuries.
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