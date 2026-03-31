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
                        style="background-image: url('../assets/kidney.jpg');">
                        <img src="../assets/kidney.jpg"
                            >

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                               <h1 class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white w-full"
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    kidney Care at<br>
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

    <!-- PRIMARY (Kidney Care) -->
    <a href="./procedures/dialysis.php"
        class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md">
        <span>Dialysis</span>
        <span class="text-xl">&gt;</span>
    </a>

    <!-- OTHER (Random Fill) -->
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

    <a href="./procedures/angiography.php"
        class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md">
        <span>Angiography</span>
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
                    <span class="text-[#ec8b2a]">Kidney Care</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    The kidneys play a vital role in filtering waste products, balancing fluids, and regulating blood pressure. When kidney function declines, patients may face serious complications such as chronic kidney disease, the need for dialysis, or kidney transplantation.
                    <br><br>
                    At maAx Super Speciality Hospital, our Kidney Care Department (Nephrology & Urology) offers comprehensive evaluation, diagnosis, and treatment for kidney-related disorders. We focus on preventive care, early detection, and advanced treatment options including dialysis, transplant programs, and minimally invasive urological surgeries. Our multidisciplinary approach ensures timely intervention and long-term renal health.
                </p>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Treatments
                    <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Chronic Kidney Disease Management –</strong> Medication, dietary guidance, and regular monitoring.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Dialysis Services –</strong> Hemodialysis and peritoneal dialysis using advanced machines.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Kidney Transplant Program –</strong> Complete care from evaluation and surgery to post-transplant follow-up.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Kidney Stone Treatment –</strong> Lithotripsy, endoscopic stone removal, and preventive counseling.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Urinary Tract Infection Care –</strong> Diagnosis and management of recurrent UTIs.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Hypertension & Kidney Health –</strong> Integrated blood pressure and renal care.
                    </p>
                    <p class="text-gray-700 text-base font-semibold">
                        <strong>Urological Surgeries –</strong> Prostate surgery, bladder reconstruction, and minimally invasive procedures.
                    </p>
                </div>

                <div class="w-full lg:w-full space-y-6 flex flex-col mt-10 ">

                    <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                        Why Choose
                        <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
                    </h2>

                    <div class="space-y-4">
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Expert Specialists:</strong> Experienced nephrologists and urologists with transplant expertise.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Advanced Dialysis Units:</strong> Modern dialysis facilities focused on patient safety and comfort.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Comprehensive Transplant Care:</strong> End-to-end support from donor evaluation to recovery.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Holistic Approach:</strong> Integrated care including diet planning, lifestyle guidance, and counseling.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base">
                            <strong>Emergency Readiness:</strong> Rapid response for acute kidney injuries and renal emergencies.
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
    <section class="flex justify-center">

        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

            <div class="flex justify-center -mt-2">
                <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                    <img src="./assets/doctors/Dr Dayanand A S.webp" alt="Dr. Dayanand A S" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr. Dayanand A S
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MD, DNB (Nephrology)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Nephrology
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-dayanand.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-dayanand.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

    </section>


    <div class="container w-full mx-auto mt-10">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Kidney Care at
            <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
        </h2>

        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What conditions are treated under Kidney Care?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70 rounded-b-2xl">
                    Kidney Care includes treatment for chronic kidney disease, kidney stones, urinary tract infections, hypertension-related kidney issues, dialysis needs, and kidney transplantation.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. When should I consult a nephrologist?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    You should consult a nephrologist if you have swelling, reduced urine output, persistent high blood pressure, abnormal kidney reports, or diabetes-related kidney issues.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. Is dialysis painful?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Dialysis is generally not painful. Patients may feel mild discomfort initially, but modern machines and trained staff ensure safety and comfort.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Do you provide kidney transplant services?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Yes. maAx Hospital offers complete kidney transplant care including evaluation, surgery, and long-term post-transplant follow-up.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium
                text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. Can kidney disease be prevented?</span>
                    <span class="transition-transform group-open:rotate-180 text-xl group-open:text-[#ec8b2a]">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 text-gray-600 leading-relaxed bg-orange-50/70">
                    Early screening, blood pressure control, diabetes management, proper hydration, and healthy lifestyle habits can help prevent or slow kidney disease.
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