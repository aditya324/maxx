<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plastic Surgery</title>
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

                    <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0 z-0"
                        style="background-image: url('../assets/banners/medical-care.jpg');">
                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1 class="text-4xl md:text-4xl p-3 lg:text-6xl font-semibold rounded-md text-white w-full"
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Advanced Plastic Surgery Care at<br>
                                    Nano Hospital
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

    <!-- MAIN SECTION -->
    <section class="w-full bg-[#FFCDA6] py-10">
        <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-10">

            <!-- LEFT MENU -->
            <div class="w-full lg:w-1/4 flex flex-col gap-3">
                <h2 class="text-2xl font-semibold text-[#6C3130] mb-2">Diagnostic Services</h2>

                <a href="./heart-and-vascular-care.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md"><span>Heart & Vascular Care</span><span class="text-xl">&gt;</span></a>
                <a href="./brain-and-nervecare.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md"><span>Brain Care</span><span class="text-xl">&gt;</span></a>
                <a href="./general-medicine.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md"><span>General Medicine</span><span class="text-xl">&gt;</span></a>
                <a href="./harmone-care.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md"><span>Hormone Care</span><span class="text-xl">&gt;</span></a>
                <a href="./kidney-care.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md"><span>Kidney Care</span><span class="text-xl">&gt;</span></a>
                <a href="./lung-care.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md"><span>Lung Care</span><span class="text-xl">&gt;</span></a>
                <a href="./skin-hair.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md"><span>Skin & Hair Care</span><span class="text-xl">&gt;</span></a>
                <a href="./bone-and-joint.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md"><span>Bone & Joint Care</span><span class="text-xl">&gt;</span></a>
                <a href="./plastic-surgery.php" class="w-full flex items-center justify-between bg-[#ec8b2a] text-white font-medium py-3 px-4 rounded-md"><span>Plastic Surgery</span><span class="text-xl">&gt;</span></a>
                <a href="./women-health.php" class="w-full flex items-center justify-between bg-gray-100 text-gray-700 font-medium py-3 px-4 rounded-md"><span>Women’s Health</span><span class="text-xl">&gt;</span></a>
                <a href="./specialities.php" class="w-full flex items-center justify-between bg-[#763837] text-white font-medium py-3 px-4 rounded-md"><span>View All Specialties</span><span class="text-xl">&gt;</span></a>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="w-full lg:w-2/3 space-y-6">

                <h1 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Overview <span class="text-[#ec8b2a]">Plastic Surgery</span>
                </h1>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    Plastic Surgery at Nano Hospitals is dedicated to the restoration, reconstruction, and enhancement of the body’s form and function. The department manages a wide range of conditions involving the skin, soft tissues, face, hands, breasts, and body, addressing both medical and aesthetic concerns.
                </p>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    Plastic surgery is not limited to cosmetic improvement — it plays a vital role in treating injuries, congenital deformities, burns, scars, and post-cancer reconstruction. Conditions affecting appearance can also impact confidence, emotional wellbeing, and quality of life.
                </p>

                <p class="text-gray-700 leading-relaxed text-base font-semibold">
                    Care is delivered through a patient-centred approach combining surgical expertise, advanced techniques, and personalized treatment planning to ensure safe outcomes and natural-looking results.
                </p>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Procedures / Treatments <span class="text-[#ec8b2a]">Offered</span>
                </h2>

                <div class="space-y-2 text-gray-700 text-base font-semibold">
                    <p><strong>Reconstructive Surgery —</strong> Treatment for trauma, burns, birth defects, and post-cancer reconstruction.</p>
                    <p><strong>Cosmetic Surgery —</strong> Procedures such as rhinoplasty, liposuction, tummy tuck, facelift, and breast enhancement.</p>
                    <p><strong>Hand Surgery —</strong> Treatment for injuries, nerve compression, and congenital hand deformities.</p>
                    <p><strong>Scar Revision —</strong> Surgical and non-surgical techniques to improve the appearance of scars.</p>
                    <p><strong>Burn Care & Reconstruction —</strong> Acute burn management and corrective surgeries.</p>
                </div>

                <h2 class="text-3xl md:text-4xl font-semibold text-[#6C3130] leading-tight">
                    Conditions <span class="text-[#ec8b2a]">Treated</span>
                </h2>

                <div class="space-y-2 text-gray-700 text-base font-semibold">
                    <p>Facial deformities and trauma</p>
                    <p>Burn injuries and scar contractures</p>
                    <p>Congenital anomalies such as cleft lip and palate</p>
                    <p>Breast reconstruction after mastectomy</p>
                    <p>Skin and soft tissue tumors</p>
                    <p>Aesthetic concerns related to face and body</p>
                </div>

            </div>
        </div>
    </section>

    <?php require "./components/footer.php" ?>

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
                clickable: true
            }
        });
    </script>

</body>

</html>