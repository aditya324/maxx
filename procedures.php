<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./src/output.css" rel="stylesheet">

</head>

<body class="bg-surface-soft font-sans">
    <?php require "./header.php" ?>








    <!-- OPTIONAL: Put this in your <head> or before the section -->
    <!-- Put this in your <head> or before the section -->
    <!-- Add this in <head> or above the section -->
    <style>
        /* Base state for tab content */
        .tab-content {
            opacity: 0;
            transform: translateY(10px);
        }

        /* Visible + animated state */
        .tab-content.show {
            animation: fadeInUp 0.35s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Tab button animation */
        .tab-btn {
            transition: background-color 0.2s ease, color 0.2s ease,
                transform 0.2s ease, box-shadow 0.2s ease;
        }

        .tab-btn.active-tab {
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.12);
        }

        /* Card hover effect */
        .card-hover {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
    </style>

    <section class="w-full py-10">
        <div class="max-w-4xl mx-auto text-center">

            <!-- Heading -->
            <h2 class="text-2xl font-semibold">
                <span class="text-[#6C3130]">Explore</span>
                <span class="text-brand">Our Procedures</span>
            </h2>

            <!-- Tabs -->

        </div>

        <!-- 🔽 A–Z DROPDOWN FOR SPECIALITIES -->
        <!-- <div class="max-w-5xl mx-auto mt-6 flex justify-start px-4">
    <label class="flex items-center gap-2 text-sm text-[#5c2c20]">
      <span class="hidden sm:inline">Filter A–Z:</span>
      <select
        id="specialityFilter"
        class="border border-[#e4d5c6] rounded-full px-3 py-1 text-sm bg-white focus:outline-none focus:ring-1 focus:ring-[#f28c28]">
        <option value="all">Filter</option>
        <option value="all">All</option>
      </select>
    </label>
  </div> -->

        <!-- ============ SPECIALITIES (ALL CARDS, DEFAULT VISIBLE) ============ -->
        <div
            id="specialities"
            class="tab-content show flex flex-wrap justify-center gap-y-10 gap-10 justify-items-center mt-6 md:px-12">
        </div>


    </section>

    <!-- ============ JS: Tabs + A–Z filter ============ -->
    <script>
        const specialities = [{
                "name": "Angiography",
                "url": "./procedures/angiography.php",
                "icon": "./assets/icons/heart.png"
            },
            {
                "name": "Angioplasty",
                "url": "./procedures/angioplasty.php",
                "icon": "./assets/icons/angolplasty.webp"
            },
            {
                "name": "Biopsy",
                "url": "./procedures/biopsy.php",
                "icon": "./assets/icons/biopsy.webp"
            },
            {
                "name": "Brain Surgery",
                "url": "./procedures/brain-surgery.php",
                "icon": "./assets/icons/brain-surgery.webp"
            },
            {
                "name": "Bypass Surgery",
                "url": "./procedures/bypass-surgery.php",
                "icon": "./assets/icons/bypass-surgery.webp"
            },
            {
                "name": "Bronchoscopy",
                "url": "./procedures/bronchoscopy.php",
                "icon": "./assets/icons/branchioscopy.webp"
            },
            {
                "name": "Cataract Surgery",
                "url": "./procedures/cataract-surgery.php",
                "icon": "./assets/icons/cataract-surgery.webp"
            },
            {
                "name": "C Section",
                "url": "./procedures/cesarian-section.php",
                "icon": "./assets/icons/c-section.webp"
            },
            {
                "name": "Dialysis",
                "url": "./dialysis.php",
                "icon": "./assets/icons/dialysis.webp"
            },
            {
                "name": "Endoscopy",
                "url": "./procedures/endoscopy.php",
                "icon": "./assets/icons/endoscopy.webp"
            },
            {
                "name": "Eye Laser",
                "url": "./procedures/eye-laser.php",
                "icon": "./assets/icons/eye-laser.webp"
            },
            {
                "name": "Fracture Repair",
                "url": "./procedures/fracture-repair.php",
                "icon": "./assets/icons/bone-fracture.webp"
            },
            {
                "name": "Gallbladder Removal",
                "url": "./procedures/gallbladder.php",
                "icon": "./assets/icons/gallbladder-removal.webp"
            },
            {
                "name": "Hernia Repair",
                "url": "./procedures/hernia-repair.php",
                "icon": "./assets/icons/hernia.webp"
            },
            {
                "name": "Joint Replacement",
                "url": "./procedures/joint-replacement.php",
                "icon": "./assets/icons/joint.webp"
            },
            {
                "name": "Knee Surgery",
                "url": "./procedures/knee-surgery.php",
                "icon": "./assets/icons/knee.webp"
            },
            {
                "name": "MRI Scan",
                "url": "./procedures/mri-scan.php",
                "icon": "./assets/icons/mri-scan.webp"
            },
            {
                "name": "Pacemaker Implant",
                "url": "./procedures/pac",
                "icon": "./assets/icons/pacemaker.webp"
            },
            {
                "name": "Pediatric Surgery",
                "url": "./procedures/pediatric-surgery.php",
                "icon": "./assets/icons/pediatric.webp"
            },
            {
                "name": "Physiotherapy",
                "url": "./procedures/physiotheraphy.php",
                "icon": "./assets/icons/physiotherapgy.webp"
            },
            {
                "name": "Sinus Surgery",
                "url": "./procedures/sinus-surgery.php",
                "icon": "./assets/icons/sinus.webp"
            },
            {
                "name": "Tonsil Removal",
                "url": "./procedures/",
                "icon": "./assets/icons/tonsil.webp"
            },
            {
                "name": "Trauma Care",
                "url": "#",
                "icon": "./assets/icons/trauma.webp"
            },
            {
                "name": "Ultrasound",
                "url": "#",
                "icon": "./assets/icons/ultrasound.webp"
            },
            {
                "name": "Urology Surgery",
                "url": "#",
                "icon": "./assets/icons/urology.webp"
            },
            {
                "name": "Valve Replacement",
                "url": "#",
                "icon": "./assets/icons/valve-replacement.webp"
            }
        ]


        const container = document.getElementById("specialities");

        specialities.forEach(item => {
            container.innerHTML += `
    <a href="${item.url}">
      <div class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center" data-name="${item.name}">
        <img src="${item.icon}" class="w-20 h-20 mb-3" />
        <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">${item.name}</h3>
      </div>
    </a>
  `;
        });
    </script>






    <!-- ==== SCRIPT (tabs + A–Z filter) ==== -->






















</body>

</html>