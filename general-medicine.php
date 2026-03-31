<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Medicine</title>
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
                        style="background-image: url('../assets/general-medicine.jpg');">
                        <img src="../assets/general-medicine.jpg"
                            >

                        <div class="absolute inset-0 bg-black/60"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1 class="text-2xl md:text-3xl p-3 lg:text-5xl font-semibold rounded-md text-white w-full"
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    General Medicine at<br>
                                    maAx 
                                </h1>
                            </div>
                        </div>

                    </div>

                    <div class="px-4 lg:bg-transparent lg:p-0 lg:relative lg:z-10 lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px] mt-9 ">
                        <?php require "./components/speciality-form.php" ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>
    </div>

    <section class="w-full bg-[#FFCDA6] py-10">
        <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-10">

            <!-- LEFT MENU -->
            <div class="w-full lg:w-1/4 flex flex-col gap-3">

    <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">
        Top Procedures & Treatments
    </h2>

    <!-- PRIMARY (General Medicine / Internal Care) -->
    <a href="./procedures/mri-scan.php"
        class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
        <span>MRI Scan</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/ct-scan.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>CT Scan</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/ultrasound.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Ultrasound</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/biopsy.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Biopsy</span>
        <span class="text-xl">&gt;</span>
    </a>

    <!-- OTHER (Random Fill) -->
    <a href="./procedures/angioplasty.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Angioplasty</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/knee-surgery.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Knee Surgery</span>
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
                    <span class="text-[#ec8b2a]">General Medicine</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    General Medicine is the cornerstone of healthcare, focusing on the prevention, diagnosis, and non-surgical treatment of a wide range of diseases affecting adults. It is often the first point of contact for patients seeking medical attention for both acute and chronic conditions.
                    <br><br>
                    At maAx Super Speciality Hospital, our General Medicine Department offers comprehensive and patient-centered care delivered by highly experienced physicians. We manage everything from common infections to complex chronic illnesses using advanced diagnostic tools, evidence-based treatment protocols, and continuous monitoring. Our goal is to ensure early detection, effective treatment, and long-term health maintenance for every patient.
                </p>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Treatments
                    <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Fever & Infection Management –</strong> Diagnosis and treatment of viral, bacterial, and seasonal infections including dengue, malaria, and typhoid.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Diabetes Management –</strong> Blood sugar monitoring, medication management, and lifestyle guidance for long-term control.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Hypertension Care –</strong> Diagnosis, treatment, and prevention of high blood pressure and related complications.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Respiratory Disorders –</strong> Treatment for asthma, bronchitis, and respiratory infections.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Gastrointestinal Disorders –</strong> Management of acidity, ulcers, liver conditions, and digestive issues.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Thyroid & Hormonal Disorders –</strong> Diagnosis and treatment of thyroid imbalances.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Preventive Health Checkups –</strong> Routine screenings for early detection and prevention of diseases.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Chronic Disease Management –</strong> Long-term care for conditions like diabetes, hypertension, and heart disease.
                    </p>
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
                    <img src="./assets/doctors/Dr S Nagendra.webp" alt="Dr. S. Nagendra" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr. S. Nagendra
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MD (Internal Medicine)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Internal Medicine
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-nagendra.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-nagendra.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

    </section>

    <div class="container w-full mx-auto mt-10">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on General Medicine at
            <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
        </h2>

        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What conditions are treated under General Medicine?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                    General Medicine covers a wide range of conditions including fever, infections, diabetes, hypertension, respiratory issues, digestive disorders, and other chronic illnesses.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. When should I consult a general physician?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    You should consult a general physician for symptoms like fever, fatigue, cough, infections, unexplained pain, or for regular health checkups and chronic disease management.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Do you provide preventive health checkups?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. We offer comprehensive preventive health checkups to detect diseases early and maintain overall health.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Can chronic diseases be managed effectively?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. Conditions like diabetes, hypertension, and thyroid disorders can be effectively managed with proper medication, monitoring, and lifestyle changes.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. Do I need a specialist referral?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Not always. A general physician evaluates your condition first and refers you to a specialist only if required.
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
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

</body>

</html>