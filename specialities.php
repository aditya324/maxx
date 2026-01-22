<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Specialities</title>
  <link href="./src/output.css" rel="stylesheet">
</head>

<body class="bg-surface-soft font-sans">
  <?php require "./header.php" ?>

  <section class="w-full py-10">
    <div class="max-w-4xl mx-auto text-center mb-10">
      <h2 class="text-2xl font-semibold">
        <span class="text-[#6C3130]">Explore</span>
        <span class="text-brand">Our Specialities</span>
      </h2>
    </div>

    <!-- SPECIALITIES GRID -->
    <div
      id="specialityGrid"
      class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 px-5">
    </div>
  </section>

  <!-- DATA + MAPPING SCRIPT -->
  <script>
    const specialities = [{
        title: "Heart & Vascular Care",
        image: "./assets/heart-care.jpg"
      },
      {
        title: "Brain & Nerve Sciences",
        image: "./assets/procedure/brain-and-neuro-science.webp"
      },
      {
        title: "Bone, Joint & Movement",
        image: "./assets/procedure/bone-and-joint.webp"
      },
      {
        title: "ENT",
        image: "./assets/procedure/ent.webp"
      },
      {
        title: "General Medicine & Internal Care",
        image: "./assets/procedure/genral-medicine.webp"
      },
      {
        title: "Child & Newborn Care",
        image: "./assets/procedure/child-care.webp"
      },
      {
        title: "Kidney & Dialysis Care",
        image: "./assets/procedure/kidney-care.webp"
      },
      {
        title: "Skin & Hair Care",
        image: "./assets/procedure/skin-care.webp"
      },
      {
        title: "Hormone Care",
        image: "./assets/procedure/harmone-care.webp"
      },
      {
        title: "Physiotherapy & Recovery Care",
        image: "./assets/procedure/physiotheraphy.webp"
      },
      {
        title: "Lung & Breathing Care",
        image: "./assets/procedure/lung-care.webp"
      },
      {
        title: "Dental, Jaw & Facial Surgery",
        image: "./assets/procedure/dental-care.webp"
      },
      {
        title: "Digestive System Care",
        image: "./assets/procedure/digestive-care.webp"
      },
      {
        title: "General Surgeries & Allied",
        image: "./assets/procedure/general-surgery.webp"
      },
      {
        title: "Women's Health (OBG / OBGYN)",
        image: "./assets/procedure/women-health.webp"
      },
      {
        title: "Eye Care",
        image: "./assets/procedure/eye-care.webp"
      },
      {
        title: "Urinary & Men's Health Care",
        image: "./assets/procedure/urinary.webp"
      },
      {
        title: "Plastic & Reconstructive Care",
        image: "./assets/procedure/plastic-reconstructive.webp"
      },
      {
        title: "Intensive & Critical Care",
        image: "./assets/procedure/intensive-care.png"
      },
      {
        title: "Surgery Support & Pain Care",
        image: "./assets/procedure/surgery-support.webp"
      }
    ];

    const grid = document.getElementById("specialityGrid");

    grid.innerHTML = specialities.map(item => `
            <div class="card-hover rounded-2xl border border-[#f58220] p-5 shadow-sm bg-white">
                <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
                    ${item.title}
                </h3>

                <div class="w-full h-48 overflow-hidden rounded-xl mb-4">
                    <img
                        src="${item.image}"
                        alt="${item.title}"
                        class="w-full h-full object-cover" />
                </div>

                <div class="flex justify-center">
                    <a href="#"
                        class="px-5 py-2 rounded-full border border-[#f58220]
                               text-[#f58220] hover:bg-[#f7eee7] transition">
                        Read more
                    </a>
                </div>
            </div>
        `).join("");
  </script>

</body>

</html>