<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surgery & Laparoscopy</title>
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
                    <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0"
                        style="background-image: url('../assets/banners/medical-care.jpg');">

                        <div class="absolute inset-0 bg-black/60"></div>

                        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:container lg:mx-auto">
                            <h1 class="text-4xl lg:text-6xl font-semibold text-white p-3 rounded-md"
                                style="background: linear-gradient(90deg,rgba(245,130,32,1) 0%, rgba(143,76,19,1) 62%);">
                                Surgery & Laparoscopy<br>
                                at maAx Hospital
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

                <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">Diagnostic Services</h2>

                <a href="./heart-and-vascular-care.php" class="bg-gray-100 py-3 px-4 rounded-md">Heart & Vascular Care</a>
                <a href="./brain-and-nervecare.php" class="bg-gray-100 py-3 px-4 rounded-md">Brain Care</a>
                <a href="./general-medicine.php" class="bg-gray-100 py-3 px-4 rounded-md">General Medicine</a>
                <a href="./surgery-laparoscopy.php" class="bg-[#ec8b2a] text-white py-3 px-4 rounded-md">Surgery & Laparoscopy</a>
                <a href="./general-surgery.php" class="bg-gray-100 py-3 px-4 rounded-md">General Surgery</a>
                <a href="./digestive-care.php" class="bg-gray-100 py-3 px-4 rounded-md">Digestive Care</a>
                <a href="./urology.php" class="bg-gray-100 py-3 px-4 rounded-md">Urology</a>
                <a href="./kidney-care.php" class="bg-gray-100 py-3 px-4 rounded-md">Kidney Care</a>
                <a href="./lung-care.php" class="bg-gray-100 py-3 px-4 rounded-md">Lung Care</a>
                <a href="./bone-and-joint.php" class="bg-gray-100 py-3 px-4 rounded-md">Bone & Joint Care</a>

            </div>

            <!-- RIGHT CONTENT -->
            <div class="w-full lg:w-2/3 space-y-6">

                <h1 class="text-3xl md:text-4xl font-semibold text-[#6C3130]">
                    Overview <span class="text-[#ec8b2a]">Surgery & Laparoscopy</span>
                </h1>

                <p class="text-gray-700 font-semibold">
                    Surgery and Laparoscopy focus on treating various medical conditions through operative procedures, including minimally invasive techniques. Laparoscopic (keyhole) surgery allows faster recovery, less pain, and minimal scarring compared to traditional open surgery.
                    <br><br>
                    At maAx Hospital, we offer advanced surgical care using state-of-the-art laparoscopic technology and experienced surgeons. Our goal is to provide safe, precise, and effective surgical treatment with faster healing and improved patient outcomes.
                </p>

                <h2 class="text-3xl font-semibold text-[#6C3130]">
                    Treatments <span class="text-[#ec8b2a]">Provided</span>
                </h2>

                <div class="space-y-2">
                    <p><strong>Laparoscopic (Keyhole) Surgery –</strong> Minimally invasive procedures with small incisions and faster recovery.</p>
                    <p><strong>Gallbladder Surgery –</strong> Removal of gallstones using laparoscopic techniques.</p>
                    <p><strong>Appendix Surgery –</strong> Laparoscopic appendectomy for appendicitis.</p>
                    <p><strong>Hernia Repair –</strong> Advanced repair of inguinal, umbilical, and incisional hernias.</p>
                    <p><strong>Gastrointestinal Surgeries –</strong> Procedures involving stomach and intestinal disorders.</p>
                    <p><strong>Diagnostic Laparoscopy –</strong> Minimally invasive diagnostic procedures.</p>
                    <p><strong>Emergency Surgeries –</strong> Immediate surgical intervention for critical conditions.</p>
                    <p><strong>Post-Surgical Care –</strong> Comprehensive recovery and rehabilitation support.</p>
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
                    <img src="./assets/doctors/Dr Sunil Kumar K.P.webp" alt="Dr Sunil Kumar K P" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr Sunil Kumar K P
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MS (General Surgery)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    General Surgery
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-sunil.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-sunil.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

        <!-- Doctor 2 -->
        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

            <div class="flex justify-center -mt-2">
                <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                    <img src="./assets/doctors/Dr Shonali Manjunath.webp" alt="Dr Shonali Manjunath" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                    Dr Shonali Manjunath
                </h3>

                <p class="text-gray-700 text-[15px] mt-1">
                    MBBS, MS (OBG)
                </p>

                <p class="text-orange-500 text-[17px] font-semibold mt-2">
                    Obstetrics & Gynecology
                </p>
            </div>

            <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                <a href="./dr-shonali.php" class="bg-[#582F28] text-white py-3 text-sm font-medium">
                    View Profile
                </a>
                <a href="./dr-shonali.php" class="bg-white text-orange-600 py-3 text-sm font-semibold">
                    Book Appointment
                </a>
            </div>

        </div>

    </section>

    <!-- FAQ -->
    <div class="container w-full mx-auto mt-10">
        <h2 class="text-2xl md:text-3xl font-semibold leading-snug text-gray-800">
            FAQs on Surgery & Laparoscopy at
            <span class="text-[#ec8b2a]">maAx Super Specialty Hospital, Shivamogga</span>
        </h2>

        <div class="rounded-2xl border border-gray-300 divide-y">

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70 rounded-t-2xl">
                    <span>1. What is laparoscopic surgery?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    It is a minimally invasive surgery performed using small incisions and a camera for faster recovery.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>2. Is laparoscopic surgery better than open surgery?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    In many cases, yes. It offers less pain, smaller scars, and quicker recovery.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>3. How long is recovery after laparoscopic surgery?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Most patients recover faster compared to traditional surgery, often within a few days to weeks.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>4. Are these procedures safe?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Yes. With experienced surgeons and modern equipment, laparoscopic procedures are safe and effective.
                </div>
            </details>

            <details class="group">
                <summary class="flex justify-between items-center py-4 px-6 cursor-pointer font-medium text-gray-700 group-open:text-[#ec8b2a] group-open:bg-orange-50/70">
                    <span>5. Do you handle emergency surgeries?</span>
                    <span class="transition-transform group-open:rotate-180">▲</span>
                </summary>
                <div class="px-6 pb-4 pt-2 bg-orange-50/70">
                    Yes. We provide 24/7 emergency surgical care for critical conditions.
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