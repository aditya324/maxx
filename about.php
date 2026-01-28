<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php require "./header.php" ?>

  <div class="flex flex-col min-h-[500px] lg:mt-0 mt-20">

    <div class="h-[420px] sm:h-[480px] h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0 z-0 lg:mt-20"
      style="background-image: url('./assets/banners/about-banner.png');">

      <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop"
        class="hidden"
        onerror="this.parentElement.style.backgroundImage = `url('${this.src}')`">

      <div class="absolute inset-0 "></div>

      <section>
        <div class="container bg-[#FAFAFA] shadow-2xl mx-auto px-4 py-3 lg:py-4 flex flex-col sm:flex-row items-center justify-center gap-4 lg:gap-6 mt-6 lg:mt-10 text-center sm:text-left">

          <h2 class="bg-gradient-to-r from-[#F58220] via-[#be6520] to-[#8F4C13] text-transparent bg-clip-text font-bold text-lg sm:text-xl lg:text-4xl ">
            ABOUT US
          </h2>

          <img src="./assets/logo/logo 4.png"
            class="h-10 sm:h-12 lg:h-auto"
            alt="maAx Super Specialty Hospital">
        </div>
      </section>

      <!-- VIDEO -->
      <section class="relative lg:top-3/7 z-20 mb-10 px-4 lg:px-0 mt-6 lg:mt-0">
        <div class="max-w-3xl mx-auto rounded-md px-0 lg:px-8 lg:py-5">
          <div class="w-full aspect-video">
            <iframe class="rounded-md w-full h-full"
              src="https://www.youtube.com/embed/2H37h1FtVnI?si=TqDgHEmrfELb86b8"
              title="YouTube video player"
              frameborder="0"
              allowfullscreen></iframe>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- OUR STORY -->
  <div class="bg-[#E0E0E0]">
    <section class="container mx-auto p-6 mt-16 sm:mt-24 md:mt-32 lg:mt-80">

      <h2 class="text-2xl sm:text-3xl font-bold text-center text-[#6C3130] tracking-wide">
        OUR STORY
      </h2>

      <p class="mt-3 text-center bg-[#FAFAFA] py-2 font-semibold text-lg sm:text-xl text-[#8B2E2C] mx-auto max-w-4xl rounded-md shadow-sm">
        MaAx Began as a Seed—<span class="text-[#FF8721]">Answering the Need for Exceptional Medical Care</span>
      </p>

      <p class="text-sm md:text-base leading-relaxed text-gray-700 mt-8">
        Established in 2016 under the aegis of Tadikela Subbaiah Trust (R), Shimoga, MaAx Super Speciality Hospital was born from a vision rooted in care and community. The Trust, founded in 2003 by Sri T. Subbaramaiah — an agriculturist by calling and a visionary by conviction — aimed to extend quality healthcare and education to the people of Shivamogga and beyond.
      </p>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center mt-5">

        <div class="space-y-6">

          <div class="flex gap-3 items-start">
            <span class="text-[#F58220] text-[22px] leading-tight">›</span>
            <p class="text-sm md:text-base leading-relaxed text-gray-700">
              Situated in Shivamogga, the gateway to the Malnad region, MaAx is dedicated to delivering advanced, ethical, and compassionate healthcare.
            </p>
          </div>

          <div class="flex gap-3 items-start">
            <span class="text-[#F58220] text-[22px] leading-tight">›</span>
            <p class="text-sm md:text-base leading-relaxed text-gray-700">
              Guided by the belief that meaningful progress begins with a single, purposeful step, the hospital was envisioned as a centre of specialised medical care that combines clinical excellence with heartfelt care.
            </p>
          </div>

          <div class="flex gap-3 items-start">
            <span class="text-[#F58220] text-[22px] leading-tight">›</span>
            <p class="text-sm md:text-base leading-relaxed text-gray-700">
              Under the continued stewardship of the Trust and its Board, MaAx Super Speciality Hospital remains steadfast in its mission to provide patient-centric healthcare, continually evolving with modern medical advancements.
            </p>
          </div>

        </div>

        <div class="flex justify-center">
          <div class="p-3 rounded-lg">
            <img src="./assets/maxx-hospital.png"
              alt="MaAx Hospital"
              class="rounded-md w-full h-auto object-cover max-w-md sm:max-w-lg lg:max-w-full">
          </div>
        </div>

      </div>
    </section>

    <!-- VISIONARIES -->
    <section class="bg-[#EEEEEE] py-12 sm:py-14 lg:py-16">
      <div class="container mx-auto px-6">

        <h2 class="text-2xl sm:text-3xl font-semibold text-center bg-gradient-to-r from-[#F58220] via-[#be6520] to-[#8F4C13] text-transparent bg-clip-text tracking-wide mb-10 lg:mb-16">
          MEET OUR VISIONARIES
        </h2>

        <p class="text-sm md:text-base leading-relaxed text-gray-700 mt-6 lg:mt-8 text-center max-w-3xl mx-auto">
          At maAx Super Speciality Hospital, our growth is guided by visionary leaders dedicated to turning our mission into reality for patients, staff, and the community.
        </p>

        <!-- TOP ROW -->
        <div class="flex flex-wrap justify-center gap-10 sm:gap-16 lg:gap-36 mb-10">

          <!-- CARD -->
          <div class="relative w-[280px] sm:w-[320px] lg:w-[350px] text-center">
            <img src="./assets/founders/Gemini_Generated_Image_wug634wug634wug6 1.png"
              class="w-40 sm:w-48 lg:w-56 mx-auto relative z-10 -mb-10"
              alt="">
            <div class="bg-white rounded-lg shadow-[0_10px_40px_rgba(0,0,0,0.25)] pt-12 pb-10 lg:pb-12 px-6 sm:px-10 lg:px-12 transition-all duration-300 hover:shadow-none hover:scale-[1.01]">
              <p class="text-lg font-semibold text-[#2A2A2A]">Hon. Sri. T. Subbaramaiah</p>
              <p class="text-sm text-[#F58220] font-medium">Chairman</p>
            </div>
          </div>

          <!-- repeat cards unchanged except width scaling -->
          <!-- COPY SAME BLOCK FOR OTHER CARDS -->

        </div>

        <!-- BOTTOM ROW -->
        <div class="flex flex-wrap justify-center gap-10 sm:gap-16 lg:gap-28">

          <!-- repeat same responsive card blocks -->

        </div>

      </div>
    </section>
  </div>

  <!-- ACCREDITATIONS -->
  <div class="bg-[#E0E0E0] w-full text-center py-10 lg:py-0">
    <p class="text-2xl sm:text-3xl lg:text-3xl font-semibold text-center bg-gradient-to-r from-[#F58220] via-[#be6520] to-[#8F4C13] text-transparent bg-clip-text tracking-wide mb-10 lg:mb-16">
      ACCREDITATION & CERTIFICATIONS
    </p>

    <div class="flex justify-center sm:justify-evenly gap-8 sm:gap-10 flex-wrap px-6">
      <img src="./assets/icons/nabh.png" class="h-14 sm:h-16 lg:h-auto" alt="">
      <img src="./assets/icons/nabh2.png" class="h-14 sm:h-16 lg:h-auto" alt="">
      <img src="./assets/icons/nabh3.png" class="h-14 sm:h-16 lg:h-auto" alt="">
    </div>
  </div>

  <?php require "./components/footer.php" ?>
</body>
</html>
