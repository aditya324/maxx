<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-[#f4f4f4]">
    <?php require "./header.php" ?>
    <!-- SLIDER WRAPPER -->

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="flex flex-col lg:block relative lg:min-h-[600px]">
                    <div
                        class="relative h-[300px] sm:h-[380px] md:h-[450px] lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0 z-0"
                        style="background-image: url('../assets/banners/angioplasty.webp');">

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1
                                    class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white w-full"
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Angiography at<br>
                                    maAx
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="px-4 mt-6 sm:mt-8 md:mt-10 lg:bg-transparent lg:p-0 lg:relative lg:z-10 lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px]">
                        <?php require "../components/speciality-form.php" ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
    </div>

    <section class="w-full py-10">
  <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-10">

    <!-- ================= LEFT SIDEBAR ================= -->
    <div class="w-full lg:w-1/4 space-y-6">

      <!-- Procedures Menu -->
      <div class=" rounded-xl  p-5">
        <h3 class="text-lg font-bold text-[#6C3130] mb-4">Top Procedures & Treatments</h3>

        <div class="space-y-2 text-sm font-medium">
          <a href="./angiography.php" class="flex justify-between items-center bg-[#ec8b2a] text-white px-4 py-2 rounded">
            Angiography <span>›</span>
          </a>
          <a href="./biopsy.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Biopsy <span>›</span></a>
          <a href="./cesarian-section.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">C-section <span>›</span></a>
          <a href="./dialysis.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Dialysis <span>›</span></a>
          <a href="./endoscopy.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Endoscopy <span>›</span></a>
          <a href="./eye-laser.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Eye Laser <span>›</span></a>
          <a href="./pacemaker.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Pacemaker Implant <span>›</span></a>
          <a href="./sinus-surgery.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Sinus Surgery <span>›</span></a>
          <a href="./joint-replacement.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Joint Replacement <span>›</span></a>
        </div>

        <a href="../procedures.php" class="block mt-4 bg-[#6C3130] text-white text-center py-2 rounded">View All Procedures</a>
      </div>

      <!-- Working Hours -->
      <div class="bg-[#6C3130] text-white rounded-xl p-5 text-sm">
        <h3 class="text-lg font-bold text-center mb-4">WORKING HOURS</h3>
        <div class="space-y-1">
          <p>Monday — Open 24 Hours</p>
          <p>Tuesday — Open 24 Hours</p>
          <p>Wednesday — Open 24 Hours</p>
          <p>Thursday — Open 24 Hours</p>
          <p>Friday — Open 24 Hours</p>
          <p>Saturday — Open 24 Hours</p>
          <p>Sunday — Open 24 Hours</p>
        </div>
        <button class="mt-4 w-full bg-[#ec8b2a] py-2 rounded font-semibold">Book An Appointment</button>
      </div>

      <!-- Callback Form -->
      <div class="bg-white shadow-md rounded-xl p-5">
        <h3 class="text-[#ec8b2a] font-bold mb-3">Your health matters — get the right information today</h3>
        <form class="space-y-3">
          <input type="text" placeholder="Full Name" class="w-full border rounded px-3 py-2 text-sm">
          <input type="email" placeholder="Email" class="w-full border rounded px-3 py-2 text-sm">
          <input type="tel" placeholder="+91 — Mobile Number" class="w-full border rounded px-3 py-2 text-sm">
          <button class="w-full bg-[#ec8b2a] text-white py-2 rounded font-semibold">Request a Call Back</button>
        </form>
      </div>

    </div>

    <!-- ================= RIGHT CONTENT ================= -->
    <div class="w-full lg:w-3/4 space-y-8">

      <!-- Title -->
      <div>
        <h1 class="text-3xl md:text-4xl font-bold text-[#6C3130]">
          Angiography at <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
        </h1>
      </div>

      <!-- What & Why -->
      <div>
        <h2 class="text-xl font-bold text-[#6C3130] mb-2">What the Treatment Is & Why It's Done</h2>
        <p class="text-gray-700 leading-relaxed">
          Angiography is a diagnostic imaging procedure used to visualize blood vessels in the heart, brain,
          kidneys, or other parts of the body. It helps doctors detect blockages, narrowing, or abnormalities
          in arteries and veins. By injecting contrast dye and capturing X-ray images, doctors can clearly
          assess blood flow and plan appropriate treatments.
        </p>
      </div>

      <!-- How Performed -->
      <div>
        <h2 class="text-xl font-bold text-[#6C3130] mb-2">How the Treatment Is Performed</h2>
        <p class="text-gray-700 leading-relaxed">
          Performed in a specialized Cath Lab, a thin catheter is inserted through the wrist or groin and
          guided to the target blood vessel. Contrast dye is injected and X-ray images are taken.
          The procedure usually takes 30–60 minutes under local anesthesia, and most patients return home the same day.
        </p>
      </div>

      <!-- Benefits & Risks -->
      <div>
        <h2 class="text-xl font-bold text-[#6C3130] mb-4">Benefits & Possible Risks</h2>
        <div class="grid md:grid-cols-2 gap-6">

          <div class="bg-green-50 border border-green-200 rounded-xl p-4">
            <h3 class="font-semibold text-green-700 mb-2">Benefits</h3>
            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
              <li>Accurate diagnosis of vascular conditions</li>
              <li>Helps plan life-saving treatments</li>
              <li>Minimally invasive procedure</li>
              <li>Quick recovery time</li>
            </ul>
          </div>

          <div class="bg-red-50 border border-red-200 rounded-xl p-4">
            <h3 class="font-semibold text-red-700 mb-2">Possible Risks</h3>
            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
              <li>Minor bleeding or bruising</li>
              <li>Allergic reaction to contrast dye (rare)</li>
              <li>Temporary kidney stress</li>
              <li>Very rare risk of infection</li>
            </ul>
          </div>

        </div>
      </div>

      <!-- FAQs -->
      <div>
        <h2 class="text-xl font-bold text-[#6C3130] mb-4">
          FAQs on Angiography at <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
        </h2>

        <div class="border rounded-xl divide-y">

          <details class="p-4 group">
            <summary class="cursor-pointer font-medium flex justify-between items-center">
              What is angiography used for?
              <span class="group-open:rotate-180 transition">⌃</span>
            </summary>
            <p class="mt-2 text-sm text-gray-600">It helps diagnose blocked or narrowed blood vessels and guides treatment planning.</p>
          </details>

          <details class="p-4 group">
            <summary class="cursor-pointer font-medium flex justify-between items-center">
              Is angiography painful?
              <span class="group-open:rotate-180 transition">⌃</span>
            </summary>
            <p class="mt-2 text-sm text-gray-600">The procedure is done under local anesthesia, so discomfort is minimal.</p>
          </details>

          <details class="p-4 group">
            <summary class="cursor-pointer font-medium flex justify-between items-center">
              How long does the procedure take?
              <span class="group-open:rotate-180 transition">⌃</span>
            </summary>
            <p class="mt-2 text-sm text-gray-600">Usually between 30 minutes to one hour.</p>
          </details>

          <details class="p-4 group">
            <summary class="cursor-pointer font-medium flex justify-between items-center">
              When can I resume normal activities?
              <span class="group-open:rotate-180 transition">⌃</span>
            </summary>
            <p class="mt-2 text-sm text-gray-600">Most patients resume routine activities within a day.</p>
          </details>

        </div>
      </div>

    </div>
  </div>
</section>

  


 







<?php require "../components/footer.php" ?>
</body>
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
            clickable: true,
        },
        // navigation: {
        //   nextEl: ".swiper-button-next",
        //   prevEl: ".swiper-button-prev",
        // },
    });
</script>

</html>