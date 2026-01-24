<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dr Rakesh Bisalahalli | Doctor Profile</title>
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

<?php require "./components/footer.php" ?>
  <script>
    const doctor = {
      name: "Dr Rakesh Bisalahalli",
      degree: "MBBS, MS, DNB (Urology)",
      designation: "Consultant – Urologist",
      specialty: "Urology",
      image: "./assets/doctors/dr-rakesh.webp"
    };
  </script>

  <!-- ================= BIND DATA ================= -->
  <script>
    document.getElementById("doctorImage").src = doctor.image;
    document.getElementById("doctorImage").alt = doctor.name;

    document.getElementById("doctorName").textContent = doctor.name;
    document.getElementById("doctorDesignation").textContent = doctor.designation;
    document.getElementById("doctorDegree").textContent = doctor.degree;
    document.getElementById("doctorSpecialty").textContent = doctor.specialty;
  </script>

<?php require "./components/footer.php" ?>
</body>
</html>
