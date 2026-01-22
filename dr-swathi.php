<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Profile</title>

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

  <!-- ================= DOCTOR PROFILE ================= -->
  <section class="w-full py-8 px-4 sm:px-8">
    <div class="mx-auto rounded-2xl p-4 lg:p-8 flex flex-col lg:flex-row flex-wrap gap-8 lg:gap-10">

      <!-- LEFT -->
      <div class="flex flex-col items-center lg:items-start gap-5 w-full lg:w-[30%]">
        <div class="w-full max-w-[493px] h-auto lg:h-[493px] rounded-xl overflow-hidden shadow-md">
          <img
            id="doctorImage"
            src=""
            alt=""
            class="w-full h-full object-cover" />
        </div>

        <button
          class="w-full max-w-[493px] h-12 rounded-lg bg-[#F58220] text-white font-semibold tracking-wide shadow">
          Request Call back
        </button>
      </div>

      <!-- MIDDLE -->
      <div class="flex flex-col gap-3 w-full lg:w-[40%]">
        <h2 id="doctorName" class="text-xl lg:text-2xl font-semibold text-[#874746]"></h2>

        <p id="doctorDesignation" class="text-sm lg:text-base text-gray-700"></p>

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

      <!-- RIGHT -->
      <?php require "./components/doctor-form.php" ?>
    </div>
  </section>

  <!-- ================= RELATED DOCTORS ================= -->
  <section class="w-full py-12 xl:px-28 bg-[#F5F7FB]">
    <h3 class="text-2xl text-[#6C3130] text-center font-semibold p-3">
      Our <span class="text-[#F58220]">Doctors</span>
    </h3>

    <div class="swiper doctorSwiper">
      <div class="swiper-wrapper" id="relatedDoctorsWrapper"></div>

      <div class="swiper-button-prev !w-12 !h-12 !bg-white !rounded-full shadow-md">
        <img src="./assets/icons/arrow.png" class="w-5 rotate-180" />
      </div>

      <div class="swiper-button-next !w-12 !h-12 !bg-white !rounded-full shadow-md">
        <img src="./assets/icons/arrow.png" class="w-5" />
      </div>

      <div class="swiper-pagination mt-6"></div>
    </div>
  </section>

  <!-- ================= JSON DATA ================= -->
  <script>
    const doctor = {
      name: "Dr Swathi V C",
      degree: "MBBS, MD (Anaesthesia)",
      designation: "Consultant – Intensive Care",
      specialty: "Anaesthesiology",
      image: "./assets/doctors/Dr Swathi V.C.webp",
      slug: "dr-swathi-v-c"
    };

    const relatedDoctors = [
      {
        name: "Dr Rouhi Kauser",
        degree: "MBBS, MD (Anaesthesia)",
        designation: "Consultant – Anaesthesia",
        specialty: "Anaesthesiology",
        image: "./assets/doctors/Dr Rouhi Kauser.webp",
        slug: "dr-Rouhi-kauser"
      },
      {
        name: "Dr Pooja Shah",
        degree: "MBBS, MD (Anaesthesia)",
        designation: "Consultant – Intensive Care",
        specialty: "Anaesthesiology",
        image: "./assets/doctors/Dr Pooja Shah.webp",
        slug: "dr-pooja-shah"
      }
    ];
  </script>

  <!-- ================= BIND DATA ================= -->
  <script>
    document.getElementById("doctorImage").src = doctor.image;
    document.getElementById("doctorImage").alt = doctor.name;
    document.getElementById("doctorName").textContent = doctor.name;
    document.getElementById("doctorDesignation").textContent = doctor.designation;
    document.getElementById("doctorDegree").textContent = doctor.degree;
    document.getElementById("doctorSpecialty").textContent = doctor.specialty;

    const wrapper = document.getElementById("relatedDoctorsWrapper");

    wrapper.innerHTML = relatedDoctors.map(doc => `
      <div class="swiper-slide">
        <article class="w-full h-full rounded-2xl bg-white shadow-[0_10px_30px_rgba(15,23,42,0.08)] px-6 pt-8 pb-6 flex flex-col items-center">

          <div class="w-28 h-28 rounded-full border-[5px] border-orange-500 overflow-hidden">
            <img src="${doc.image}" alt="${doc.name}" class="w-full h-full object-cover" />
          </div>

          <h3 class="mt-4 text-lg font-semibold text-[#111827] text-center">
            ${doc.name}
          </h3>

          <p class="text-sm text-[#6B7280] text-center">${doc.degree}</p>

          <p class="text-sm text-orange-500 font-medium mt-1 text-center">
            ${doc.specialty}
          </p>

          <div class="flex w-full mt-6 text-sm font-medium">
            <a
              href="doctor-profile.php?slug=${doc.slug}"
              class="flex-1 py-2.5 bg-[#532D29] text-white rounded-l-xl text-center">
              view profile
            </a>

            <button
              class="flex-1 py-2.5 border border-orange-500 text-orange-500 bg-white rounded-r-xl">
              Book Appointment
            </button>
          </div>
        </article>
      </div>
    `).join("");
  </script>

  <!-- ================= SWIPER ================= -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    new Swiper(".doctorSwiper", {
      spaceBetween: 20,
      breakpoints: {
        0: { slidesPerView: 1.2 },
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
        1200: { slidesPerView: 4 }
      },
      pagination: { el: ".swiper-pagination", clickable: true },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    });
  </script>

</body>
</html>
