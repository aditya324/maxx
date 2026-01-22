<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Procedures</title>

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f5f3f1]">

<?php require "header.php"; ?>

<section class="w-full py-12">
  <div class="max-w-6xl mx-auto px-4">

    <div class="text-center mb-10">
      <h2 class="text-2xl font-semibold">
        <span class="text-[#6C3130]">Explore</span>
        <span class="text-brand">Our Procedures</span>
      </h2>
    </div>

    <!-- GRID -->
    <div
      id="procedures"
      class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 justify-items-center">
    </div>

  </div>
</section>
<script>
const procedures = [
  { title: "Angiography", icon: "angiography.svg" },
  { title: "Angioplasty", icon: "angioplasty.svg" },
  { title: "Biopsy", icon: "biopsy.svg" },
  { title: "Brain Surgery", icon: "brain.svg" },
  { title: "Bypass Surgery", icon: "bypass.svg" },

  { title: "Bronchoscopy", icon: "bronchoscopy.svg" },
  { title: "Bypass Surgery", icon: "bypass.svg" },
  { title: "Cataract Surgery", icon: "cataract.svg" },
  { title: "C Section", icon: "c-section.svg" },
  { title: "Dialysis", icon: "dialysis.svg" },

  { title: "Endoscopy", icon: "endoscopy.svg" },
  { title: "Eye Laser", icon: "eye-laser.svg" },
  { title: "Fracture Repair", icon: "fracture.svg" },
  { title: "Gallbladder Removal", icon: "gallbladder.svg" },
  { title: "Hernia Repair", icon: "hernia.svg" },

  { title: "Joint Replacement", icon: "joint.svg" },
  { title: "Knee Surgery", icon: "knee.svg" },
  { title: "MRI Scan", icon: "mri.svg" },
  { title: "Pacemaker Implant", icon: "pacemaker.svg" },
  { title: "Pediatric Surgery", icon: "pediatric.svg" },

  { title: "Physiotherapy", icon: "physiotherapy.svg" },
  { title: "Sinus Surgery", icon: "sinus.svg" },
  { title: "Tonsil Removal", icon: "tonsil.svg" },
  { title: "Trauma Care", icon: "trauma.svg" },
  { title: "Ultrasound", icon: "ultrasound.svg" },

  { title: "Urology Surgery", icon: "urology.svg" },
  { title: "Valve Replacement", icon: "valve.svg" }
];

const container = document.getElementById("procedures");

procedures.forEach(p => {
  container.insertAdjacentHTML("beforeend", `
    <div class="w-[150px] h-[140px] bg-white rounded-xl
                border border-gray-200 shadow-sm
                flex flex-col items-center justify-center
                hover:shadow-md transition">

      <img src="./assets/procedures/${p.icon}"
           class="w-10 h-10 mb-2" />

      <p class="text-sm font-medium text-[#6C3130] text-center leading-tight">
        ${p.title}
      </p>
    </div>
  `);
});
</script>

</body>
</html>

