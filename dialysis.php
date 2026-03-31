<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dialysis Treatment - maAx Hospital</title>

    <link href="../src/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .swiper-button-next,
        .swiper-button-prev {
            position: absolute !important;
            top: 50% !important;
            transform: translateY(-50%);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            display: none !important;
        }
    </style>
</head>

<body class="bg-surface-soft font-sans">

<?php require "./header.php" ?>

<!-- HERO -->
<section class="w-full pt-28 pb-10">
    <div class="relative w-full mx-auto h-[619px] bg-cover bg-center overflow-hidden"
        style="background-image: url('./assets/banners/dialysis-banner.jpg');">

        <div class="absolute top-1/2 -translate-y-1/2 left-36 text-white">
            <h1 class="text-3xl md:text-4xl text-[#6C3130] font-semibold mb-3">
                Advanced
                <span class="text-[#F58220]">Dialysis Care</span>
            </h1>

            <p class="text-xl md:text-3xl font-semibold text-white bg-[image:var(--gradient-brand)] px-4 py-3 rounded">
                Safe & Effective Kidney Support
            </p>
        </div>
    </div>
</section>

<!-- CONTENT -->
<div class="flex justify-center mt-8 px-4">
    <div class="bg-[#f5f5f5] rounded-2xl p-6 flex flex-col lg:flex-row">

        <!-- TEXT -->
        <div class="w-full lg:w-[780px] space-y-4 text-lg font-medium p-6 bg-white text-[#4b5563] leading-relaxed">
            <p>
                <span class="font-semibold text-3xl text-[#f28c28]">
                    Dialysis Treatment
                </span>
                is a life-saving procedure used to remove waste products, toxins, and excess fluids from the blood when the kidneys are unable to function properly.

                At maAx Super Specialty Hospital, we provide advanced dialysis services including hemodialysis and peritoneal dialysis in a safe and hygienic environment.

                Our expert nephrology team ensures personalized treatment plans, continuous monitoring, and strict infection control protocols. With modern dialysis machines and compassionate care, we aim to enhance patient comfort and improve long-term kidney health outcomes.
            </p>
        </div>

        <!-- IMAGE -->
        <div class="w-full lg:w-[735px] h-[400px] lg:h-auto relative overflow-hidden">
            <img src="./assets/dialysis.jpg" class="w-full h-full object-cover" />

            <button class="absolute bottom-5 left-5 bg-[#f28c28] text-white px-6 py-3 rounded-md font-semibold">
                Book Dialysis Appointment
            </button>
        </div>

    </div>
</div>

<!-- DOCTORS -->
<section class="w-full py-12 xl:px-40 bg-[#F5F7FB]">
    <div class="swiper doctorSwiper">
        <div class="swiper-wrapper">

            <!-- DOCTOR 1 -->
            <div class="swiper-slide">
                <article class="bg-white rounded-2xl shadow p-6 flex flex-col items-center">
                    <img src="images/doctor-1.png" class="w-24 h-24 rounded-full mb-4" />
                    <h3 class="font-semibold">Dr Ramesh K</h3>
                    <p class="text-sm text-gray-500">MBBS, MD (Nephrology)</p>
                    <p class="text-orange-500 text-sm">Nephrologist</p>
                </article>
            </div>

            <!-- DOCTOR 2 -->
            <div class="swiper-slide">
                <article class="bg-white rounded-2xl shadow p-6 flex flex-col items-center">
                    <img src="images/doctor-2.png" class="w-24 h-24 rounded-full mb-4" />
                    <h3 class="font-semibold">Dr Shweta Rao</h3>
                    <p class="text-sm text-gray-500">MBBS, DNB</p>
                    <p class="text-orange-500 text-sm">Kidney Specialist</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- FAQ -->
<section class="w-full py-12 bg-[#F5F7FB]">
    <div class="max-w-5xl mx-auto">

        <h2 class="text-2xl md:text-3xl font-semibold text-gray-800">
            FAQs on Dialysis at
            <span class="text-[#ec8b2a]">maAx Super Specialty Hospital</span>
        </h2>

        <div class="mt-6 border rounded-2xl divide-y">

            <details class="p-5">
                <summary class="font-semibold cursor-pointer">What is dialysis?</summary>
                <p class="mt-2 text-gray-600">Dialysis removes waste and excess fluid from blood when kidneys fail.</p>
            </details>

            <details class="p-5">
                <summary class="font-semibold cursor-pointer">Who needs dialysis?</summary>
                <p class="mt-2 text-gray-600">Patients with kidney failure or severe kidney disease.</p>
            </details>

            <details class="p-5">
                <summary class="font-semibold cursor-pointer">How often is dialysis required?</summary>
                <p class="mt-2 text-gray-600">Usually 2–3 times per week depending on condition.</p>
            </details>

            <details class="p-5">
                <summary class="font-semibold cursor-pointer">Is dialysis painful?</summary>
                <p class="mt-2 text-gray-600">Generally painless with minimal discomfort.</p>
            </details>

            <details class="p-5">
                <summary class="font-semibold cursor-pointer">Is dialysis permanent?</summary>
                <p class="mt-2 text-gray-600">It may be temporary or long-term depending on kidney condition.</p>
            </details>

        </div>
    </div>
</section>

<!-- SWIPER -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    new Swiper(".doctorSwiper", {
        spaceBetween: 20,
        breakpoints: {
            0: { slidesPerView: 1.2 },
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });
</script>

<?php require "./components/footer.php" ?>

</body>
</html>