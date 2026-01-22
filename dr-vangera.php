<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr Vangara Susmitha | Doctor Profile</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .swiper-button-next,
        .swiper-button-prev {
            top: 50% !important;
            transform: translateY(-50%);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            display: none;
        }
    </style>
</head>

<body class="bg-surface-soft font-sans">
    <?php require "./header.php" ?>

    <section class="w-full py-8 px-4 sm:px-8">
        <div class="mx-auto rounded-2xl p-4 lg:p-8 flex flex-col lg:flex-row gap-8">

            <!-- LEFT -->
            <div class="w-full lg:w-[30%]">
                <img id="doctorImage" class="w-full rounded-xl shadow-md object-cover">
                <button class="w-full mt-4 h-12 rounded-lg bg-[#F58220] text-white font-semibold">
                    Request Call back
                </button>
            </div>

            <!-- MIDDLE -->
            <div class="w-full lg:w-[40%]">
                <h2 id="doctorName" class="text-2xl font-semibold text-[#874746]"></h2>
                <p id="doctorDesignation" class="text-gray-700"></p>

                <p class="mt-4"><strong>Qualification:</strong><br><span id="doctorDegree"></span></p>
                <p class="mt-2"><strong>Specialities:</strong><br><span id="doctorSpecialty"></span></p>
            </div>

            <?php require "./components/doctor-form.php" ?>
        </div>
    </section>

    <!-- RELATED -->
    <section class="py-12 bg-[#F5F7FB]">
        <h3 class="text-center text-2xl font-semibold text-[#6C3130] mb-6">
            Related <span class="text-[#F58220]">Doctors</span>
        </h3>

        <div class="swiper doctorSwiper">
            <div class="swiper-wrapper" id="relatedDoctorsWrapper"></div>
            <div class="swiper-button-prev"><img src="./assets/icons/arrow.png" class="w-5 rotate-180"></div>
            <div class="swiper-button-next"><img src="./assets/icons/arrow.png" class="w-5"></div>
        </div>
    </section>

    <script>
        const doctor = {
            name: "Dr Vangara Susmitha",
            degree: "MBBS, MS (OBG)",
            designation: "Consultant – Obstetrics & Gynecology",
            specialty: "Obstetrics & Gynecology",
            image: "./assets/doctors/Dr Vangara Sushmitha.webp"
        };

        const relatedDoctors = [{
                name: "Dr. Shonali Manjunath",
                degree: "MBBS, MS (OBG)",
                specialty: "Obstetrics & Gynecology",
                image: "./assets/doctors/Dr Shonali Manjunath.webp",
                slug: "dr-shonali-manjunath"
            },
            {
                name: "Dr Lata R Telang",
                degree: "MBBS, DGO, MBA",
                specialty: "Obstetrics & Gynecology",
                image: "./assets/doctors/dr-lata.webp",
                slug: "dr-lata-r-telang"
            }
        ];

        doctorImage.src = doctor.image;
        doctorName.textContent = doctor.name;
        doctorDesignation.textContent = doctor.designation;
        doctorDegree.textContent = doctor.degree;
        doctorSpecialty.textContent = doctor.specialty;

        relatedDoctorsWrapper.innerHTML = relatedDoctors.map(d => `
<div class="swiper-slide">
  <div class="w-[360px] bg-white rounded-xl shadow-md p-6 text-center mx-auto">
    <img src="${d.image}" class="w-28 h-28 rounded-full mx-auto object-cover">
    <h4 class="mt-4 font-semibold">${d.name}</h4>
    <p class="text-sm">${d.degree}</p>
    <p class="text-orange-500 font-medium">${d.specialty}</p>
    <a href="doctor-profile.php?slug=${d.slug}" class="block mt-4 bg-[#582F28] text-white py-2 rounded">
      View Profile
    </a>
  </div>
</div>
`).join("");
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        new Swiper(".doctorSwiper", {
            slidesPerView: 1.1,
            spaceBetween: 20,
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });
    </script>
</body>

</html>