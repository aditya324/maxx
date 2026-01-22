<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dr Shishir S M | Doctor Profile</title>

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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

  <!-- ================= MAIN DOCTOR PROFILE ================= -->
  <section class="w-full py-8 px-4 sm:px-8">
    <div class="mx-auto rounded-2xl p-4 lg:p-8 flex flex-col lg:flex-row gap-8 lg:gap-10">

      <!-- LEFT : IMAGE + BUTTON -->
      <div class="flex flex-col items-center lg:items-start gap-5 w-full lg:w-[30%]">
        <div class="w-full max-w-[493px] h-auto lg:h-[493px] rounded-xl overflow-hidden shadow-md">
          <img
            id="doctorImage"
            class="w-full h-full object-cover"
            alt="Doctor Image">
        </div>

        <button
          class="w-full max-w-[493px] h-12 rounded-lg bg-[#F58220] text-white font-semibold tracking-wide shadow hover:brightness-110 transition">
          Request Call back
        </button>
      </div>

      <!-- MIDDLE : DETAILS -->
      <div class="flex flex-col gap-3 w-full lg:w-[40%]">
        <h2
          id="doctorName"
          class="text-xl lg:text-2xl font-semibold text-[#874746]">
        </h2>

        <p
          id="doctorDesignation"
          class="text-sm lg:text-base text-gray-700">
        </p>

        <div class="space-y-4 lg:space-y-5 text-sm lg:text-lg text-gray-700">
          <p>
            <span class="font-semibold text-[#874746]">Qualification:</span><br />
            <span id="doctorDegree"></span>
          </p>

          <p>
            <span class="font-semibold text-[#874746]">Specialities:</span><br />
            <span id="doctorSpecialty"></span>
          </p>
        </div>
      </div>

      <!-- RIGHT : FORM -->
      <?php require "./components/doctor-form.php" ?>
    </div>
  </section>

  <!-- ================= RELATED DOCTORS ================= -->
  <section class="w-full py-12 xl:px-28 bg-[#F5F7FB]">
    <h3 class="text-2xl text-[#6C3130] text-center font-semibold mb-6">
      Related <span class="text-[#F58220]">Doctors</span>
    </h3>

    <div class="swiper doctorSwiper">
      <div class="swiper-wrapper" id="relatedDoctorsWrapper"></div>

      <div class="swiper-button-prev !w-12 !h-12 !bg-white !rounded-full shadow-md">
        <img src="./assets/icons/arrow.png" class="w-5 rotate-180">
      </div>

      <div class="swiper-button-next !w-12 !h-12 !bg-white !rounded-full shadow-md">
        <img src="./assets/icons/arrow.png" class="w-5">
      </div>

      <div class="swiper-pagination mt-6"></div>
    </div>
  </section>

  <!-- ================= JSON DATA ================= -->
  <script>
    const doctor = {
      name: "Dr. Shishir S M",
      degree: "MBBS, DNB, MS (Ortho)",
      designation: "Consultant – Orthopedics",
      specialty: "Orthopedics",
      image: "./assets/doctors/Dr Shishir SM.webp"
    };

    const relatedDoctors = [
      {
        name: "Dr Sukruth P Patel",
        degree: "MBBS, MS (Ortho), FIASM, FIJR",
        designation: "Consultant – Orthopedics",
        specialty: "Orthopedics",
        image: "./assets/doctors/Dr Sukruth P Patel.webp",
        slug: "dr-sukruth-p-patel"
      }
    ];
  </script>

  <!-- ================= BIND MAIN DOCTOR ================= -->
  <script>
    doctorImage.src = doctor.image;
    doctorImage.alt = doctor.name;
    doctorName.textContent = doctor.name;
    doctorDesignation.textContent = doctor.designation;
    doctorDegree.textContent = doctor.degree;
    doctorSpecialty.textContent = doctor.specialty;
  </script>

  <!-- ================= RELATED DOCTORS (MAIN PAGE STYLE) ================= -->
  <script>
    relatedDoctorsWrapper.innerHTML = relatedDoctors.map(doc => `
      <div class="swiper-slide">
        <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center mx-auto">

          <div class="flex justify-center -mt-2">
            <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
              <img src="${doc.image}" alt="${doc.name}" class="w-full h-full object-cover">
            </div>
          </div>

          <div class="mt-4">
            <h3 class="text-[20px] font-semibold text-[#5c2c20]">
              ${doc.name}
            </h3>

            <p class="text-gray-700 text-[15px] mt-1">
              ${doc.degree}
            </p>

            <p class="text-orange-500 text-[17px] font-semibold mt-2">
              ${doc.specialty}
            </p>
          </div>

          <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
            <a href="doctor-profile.php?slug=${doc.slug}"
               class="bg-[#582F28] text-white py-3 text-sm font-medium">
              View Profile
            </a>
            <button class="bg-white text-orange-600 py-3 text-sm font-semibold">
              Book Appointment
            </button>
          </div>
        </div>
      </div>
    `).join("");
  </script>

  <!-- ================= SWIPER INIT ================= -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    new Swiper(".doctorSwiper", {
      spaceBetween: 20,
      breakpoints: {
        0: { slidesPerView: 1.1 },
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    });
  </script>

</body>
</html>
