<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
  <?php require "./header.php" ?>

  <div class="flex flex-col   min-h-[600px] lg:mt-0 mt-20">

    <div class=" h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0  z-0 lg:mt-20"
      style="background-image: url('./assets/banners/about-banner.png');">
      <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop" class="hidden" onerror="this.parentElement.style.backgroundImage = `url('${this.src}')`">

      <div class="absolute inset-0 "></div>

      <section class="">
        <div class="container bg-[#FAFAFA] shadow-2xl mx-auto px-4 py-3 lg:py-4 flex items-center justify-center gap-6 mt-10">

          <!-- ABOUT US TEXT -->
          <h2 class="bg-gradient-to-r from-[#F58220] via-[#be6520] to-[#8F4C13] text-transparent bg-clip-text font-bold text-lg lg:text-4xl ">
            ABOUT US
          </h2>

          <!-- LOGO -->
          <img
            src="./assets/logo/logo 4.png"
            alt="maAx Super Specialty Hospital">

        </div>
      </section>

      <section class="relative lg:top-3/7 z-20  mb-10 px-4 lg:px-0">
        <div
          class="max-w-3xl mx-auto   rounded-md
           
           px-5 py-4 lg:px-8 lg:py-5">
          <iframe class="rounded-md" width="560" height="315" src="https://www.youtube.com/embed/2H37h1FtVnI?si=TqDgHEmrfELb86b8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </section>
    </div>


  </div>




  <div class="bg-[#E0E0E0]  ">
    <section class="container mx-auto p-6 mt-80  ">

      <!-- HEADING -->
      <h2 class="text-3xl font-bold text-center text-[#6C3130] tracking-wide">
        OUR STORY
      </h2>

      <!-- SUBTITLE -->
      <p class="mt-3 text-center bg-[#FAFAFA] py-2 font-semibold text-xl text-[#8B2E2C] mx-auto max-w-4xl rounded-md shadow-sm">
        MaAx Began as a Seed—<span class="text-[#FF8721]">Answering the Need for Exceptional Medical Care</span>
      </p>
      <p class="text-sm md:text-base leading-relaxed text-gray-700 mt-8">
        Established in 2016 under the aegis of Tadikela Subbaiah Trust (R), Shimoga, MaAx Super Speciality Hospital was born from a vision rooted in care and community. The Trust, founded in 2003 by Sri T. Subbaramaiah — an agriculturist by calling and a visionary by conviction — aimed to extend quality healthcare and education to the people of Shivamogga and beyond.
      </p>

      <!-- 2 COLUMN LAYOUT -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center mt-5">

        <!-- LEFT CONTENT -->
        <div class="space-y-6">

          <!-- PARA 01 -->

          <!-- POINT 02 -->
          <div class="flex gap-3 items-start">
            <span class="text-[#F58220] text-[22px] leading-tight">›</span>
            <p class="text-sm md:text-base leading-relaxed text-gray-700">
              Situated in Shivamogga, the gateway to the Malnad region, MaAx is dedicated to delivering advanced, ethical, and compassionate healthcare.
            </p>
          </div>

          <!-- POINT 03 -->
          <div class="flex gap-3 items-start">
            <span class="text-[#F58220] text-[22px] leading-tight">›</span>
            <p class="text-sm md:text-base leading-relaxed text-gray-700">
              Guided by the belief that meaningful progress begins with a single, purposeful step, the hospital was envisioned as a centre of specialised medical care that combines clinical excellence with heartfelt care.
            </p>
          </div>

          <!-- POINT 04 -->
          <div class="flex gap-3 items-start">
            <span class="text-[#F58220] text-[22px] leading-tight">›</span>
            <p class="text-sm md:text-base leading-relaxed text-gray-700">
              Under the continued stewardship of the Trust and its Board, MaAx Super Speciality Hospital remains steadfast in its mission to provide patient-centric healthcare, continually evolving with modern medical advancements.
            </p>
          </div>

        </div>

        <!-- RIGHT IMAGE -->
        <div class="flex justify-center">
          <div class=" p-3 rounded-lg ">
            <img
              src="./assets/maxx-hospital.png"
              alt="MaAx Hospital"
              class="rounded-md w-full h-auto object-cover">
          </div>
        </div>

      </div>


    </section>
    <section class="bg-[#EEEEEE] py-16">
      <div class="container mx-auto px-6">

        <h2 class="text-3xl font-semibold text-center bg-gradient-to-r from-[#F58220] via-[#be6520] to-[#8F4C13] text-transparent bg-clip-text tracking-wide mb-16">
          MEET OUR VISIONARIES
        </h2>
        <p class="text-sm md:text-base leading-relaxed text-gray-700 mt-8 text-center ">
          At maAx Super Speciality Hospital, our growth is guided by visionary leaders dedicated to turning our mission into reality for patients, staff, and the community. 
        </p>

        <!-- TOP ROW -->
        <div class="flex flex-wrap justify-center gap-36 mb-10">

          <!-- CARD 1 -->
          <div class="relative w-[350px] text-center">

            <img src="./assets/founders/Gemini_Generated_Image_wug634wug634wug6 1.png"
              class="w-56 mx-auto relative z-10 -mb-10"
              alt="">

            <div
              class="bg-white rounded-lg shadow-[0_10px_40px_rgba(0,0,0,0.25)]
           pt-12 pb-12 px-12
           transition-all duration-300
           hover:shadow-none hover:scale-[1.01]">

              <p class="text-lg font-semibold text-[#2A2A2A]">
                Hon. Sri. T. Subbaramaiah
              </p>
              <p class="text-sm text-[#F58220] font-medium">
                Chairman
              </p>
            </div>

          </div>


          <!-- CARD 2 -->
          <div class="relative w-[350px] text-center">

            <img src="./assets/founders/Gemini_Generated_Image_wug634wug634wug6 1.png"
              class="w-56 mx-auto relative z-10 -mb-10"
              alt="">

            <div
              class="bg-white rounded-lg shadow-[0_10px_40px_rgba(0,0,0,0.25)]
           pt-12 pb-12 px-12
           transition-all duration-300
           hover:shadow-none hover:scale-[1.01]">

              <p class="text-lg font-semibold text-[#2A2A2A]">
                Hon. Sri. T. Subbaramaiah
              </p>
              <p class="text-sm text-[#F58220] font-medium">
                Chairman
              </p>
            </div>

          </div>


          <!-- CARD 3 -->
          <div class="relative w-[350px] text-center">

            <img src="./assets/founders/Gemini_Generated_Image_wug634wug634wug6 1.png"
              class="w-56 mx-auto relative z-10 -mb-10"
              alt="">

            <div
              class="bg-white rounded-lg shadow-[0_10px_40px_rgba(0,0,0,0.25)]
           pt-12 pb-12 px-12
           transition-all duration-300
           hover:shadow-none hover:scale-[1.01]">

              <p class="text-lg font-semibold text-[#2A2A2A]">
                Hon. Sri. T. Subbaramaiah
              </p>
              <p class="text-sm text-[#F58220] font-medium">
                Chairman
              </p>
            </div>

          </div>


        </div>

        <!-- BOTTOM ROW -->
        <div class="flex flex-wrap justify-center gap-28">

          <!-- CARD 4 -->
          <div class="relative w-[350px] text-center">

            <img src="./assets/founders/Gemini_Generated_Image_wug634wug634wug6 1.png"
              class="w-56 mx-auto relative z-10 -mb-10"
              alt="">

            <div
              class="bg-white rounded-lg shadow-[0_10px_40px_rgba(0,0,0,0.25)]
           pt-12 pb-12 px-12
           transition-all duration-300
           hover:shadow-none hover:scale-[1.01]">

              <p class="text-lg font-semibold text-[#2A2A2A]">
                Hon. Sri. T. Subbaramaiah
              </p>
              <p class="text-sm text-[#F58220] font-medium">
                Chairman
              </p>
            </div>

          </div>


          <!-- CARD 5 -->
          <div class="relative w-[350px] text-center">

            <img src="./assets/founders/Gemini_Generated_Image_wug634wug634wug6 1.png"
              class="w-56 mx-auto relative z-10 -mb-10"
              alt="">

            <div
              class="bg-white rounded-lg shadow-[0_10px_40px_rgba(0,0,0,0.25)]
           pt-12 pb-12 px-12
           transition-all duration-300
           hover:shadow-none hover:scale-[1.01]">
              <p class="text-lg font-semibold text-[#2A2A2A]">
                Hon. Sri. T. Subbaramaiah
              </p>
              <p class="text-sm text-[#F58220] font-medium">
                Chairman
              </p>
            </div>

          </div>


        </div>

      </div>
    </section>



  </div>

  <div class="bg-[#E0E0E0] w-full text-center">
    <p class="text-3xl font-semibold text-center bg-gradient-to-r from-[#F58220] via-[#be6520] to-[#8F4C13] text-transparent bg-clip-text tracking-wide mb-16">ACCREDITATION & CERTIFICATIONS</p>

    <div class="flex justify-evenly gap-10 flex-wrap ">
      <img src="./assets/icons/nabh.png" alt="">
      <img src="./assets/icons/nabh2.png" alt="">
      <img src="./assets/icons/nabh3.png" alt="">
    </div>
  </div>





  <div >

  </div>




</body>

</html>