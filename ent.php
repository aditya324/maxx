<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENT Care</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <?php require "./header.php" ?>

    <!-- SLIDER WRAPPER -->
    <div class="swiper mySwiper">
        <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- SLIDE 01 -->
            <div class="swiper-slide">
                <div class="flex flex-col lg:block relative min-h-[600px] lg:mt-0 ">

                    <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0  z-0 "
                        style="background-image: url('../assets/ent.jpg');">
                        <img src="../assets/ent.jpg"
                            >
                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1 class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white w-full"
                                style="background: linear-gradient(90deg,rgba(245,130,32,1) 0%, rgba(143,76,19,1) 62%);">
                                ENT Care at<br>
                                maAx 
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

    <!-- PRIMARY (ENT Related) -->
    <a href="./procedures/sinus-surgery.php"
        class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
        <span>Sinus Surgery</span>
        <span class="text-xl">&gt;</span>
    </a>

    <a href="./procedures/tonsil-removal.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Tonsil Removal</span>
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

                <h1 class="text-3xl md:text-4xl font-semibold text-[#6C3130]">
                    Overview <span class="text-[#ec8b2a]">ENT Care</span>
                </h1>

                <p class="text-gray-700 font-semibold">
                    Ear, Nose, and Throat (ENT) care focuses on diagnosing and treating conditions related to hearing, breathing, speech, and balance. These systems are closely interconnected, and even minor issues can significantly affect daily comfort and quality of life.
                    <br><br>
                    At maAx Super Speciality Hospital, our ENT Department provides comprehensive care for both routine and complex conditions. Our specialists use advanced diagnostic tools and minimally invasive techniques to ensure accurate diagnosis and effective treatment. From infections and allergies to sinus disorders and hearing issues, we deliver personalized care tailored to each patient’s needs.
                </p>

                <h2 class="text-3xl font-semibold text-[#6C3130]">
                    Treatments <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p><strong>Ear Infections & Hearing Disorders –</strong> Treatment for ear infections, hearing loss, tinnitus, and balance issues.</p>
                    <p><strong>Sinus & Allergy Treatment –</strong> Management of sinusitis, nasal allergies, and congestion.</p>
                    <p><strong>Tonsillitis & Throat Disorders –</strong> Treatment for throat infections and swallowing problems.</p>
                    <p><strong>Voice & Speech Disorders –</strong> Care for voice changes and speech-related conditions.</p>
                    <p><strong>Nasal & Septum Correction –</strong> Treatment for deviated septum and nasal blockage.</p>
                    <p><strong>Endoscopic ENT Procedures –</strong> Minimally invasive sinus and nasal surgeries.</p>
                    <p><strong>Head & Neck Conditions –</strong> Diagnosis of lumps, infections, and disorders.</p>
                    <p><strong>Pediatric ENT Care –</strong> Specialized ENT care for children.</p>
                </div>

            </div>

        </div>
    </section>


    <h2 class="text-3xl md:text-3xl font-semibold text-[#6C3130] leading-tight text-center p-5">
        Our
        <span class="text-[#ec8b2a]">Doctors</span>
    </h2>

    <!-- FAQ -->
   <section class="flex justify-center gap-8 flex-wrap">

    <!-- Doctor 1 -->
    <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

        <div class="flex justify-center -mt-2">
            <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                <img src="./assets/doctors/dr-lohit.webp" alt="Dr Lohith S" class="w-full h-full object-cover" />
            </div>
        </div>

        <div class="mt-4">
            <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                Dr Lohith S
            </h3>

            <p class="text-gray-700 text-[15px] mt-1">
                MBBS, MS, DNB (ENT)
            </p>

            <p class="text-orange-500 text-[17px] font-semibold mt-2">
                ENT
            </p>
        </div>

        <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
            <a href="./dr-lohit.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                View Profile
            </a>
            <a href="./dr-lohit.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                Book Appointment
            </a>
        </div>

    </div>

</section>


<div class="container w-full mx-auto mt-10">
    <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
        FAQs on ENT Care at
        <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
    </h2>

    <div class="rounded-2xl border border-gray-300 divide-y">

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                <span>1. What conditions are treated under ENT Care?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                We treat ear infections, hearing loss, sinusitis, allergies, throat infections, tonsillitis, nasal blockage, voice disorders, and balance-related conditions.
            </div>
        </details>

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                <span>2. When should I consult an ENT specialist?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                You should consult an ENT specialist if you have persistent ear pain, hearing issues, nasal congestion, sinus problems, throat pain, voice changes, or frequent infections.
            </div>
        </details>

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                <span>3. Do you offer treatment for sinus and allergy issues?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                Yes. We provide advanced diagnosis and treatment for sinusitis and allergies, including medical management and minimally invasive procedures like endoscopic sinus surgery.
            </div>
        </details>

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                <span>4. Is surgery required for all ENT problems?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                No. Many ENT conditions can be managed with medications and lifestyle changes. Surgery is recommended only when necessary, such as in chronic sinus issues, tonsil problems, or structural abnormalities.
            </div>
        </details>

        <details class="group">
            <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
            text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                <span>5. Do you provide hearing tests and treatments?</span>
                <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
            </summary>
            <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                Yes. We offer comprehensive hearing evaluations, audiometry tests, and treatment options including hearing aids and management of hearing disorders.
            </div>
        </details>

    </div>
</div>

    <?php require "./components/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: { delay: 5000 },
            loop: true,
            pagination: { el: ".swiper-pagination", clickable: true }
        });
    </script>

</body>
</html>