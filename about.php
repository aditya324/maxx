<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php require "./header.php" ?>

  <div class="flex flex-col min-h-[500px] lg:mt-0 ">

    <div class="h-[420px] sm:h-[480px] h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0 z-0 lg:mt-20"
      style="background-image: url('./assets/banners/maax-banner.webp">

      <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop"
        class="hidden"
        onerror="this.parentElement.style.backgroundImage = `url('${this.src}')`">

      <div class="absolute inset-0 "></div>

      <!-- <section>
        <div class="max-w-7xl bg-[#FAFAFA] shadow-2xl mx-auto px-4 py-3 lg:py-4 flex flex-col sm:flex-row items-center justify-center gap-4 lg:gap-6 mt-6 lg:mt-10 text-center sm:text-left rounded-xl">

          <h2 class="bg-gradient-to-r from-[#F58220] via-[#be6520] to-[#8F4C13] text-transparent bg-clip-text font-bold text-lg sm:text-xl lg:text-4xl ">
            ABOUT US
          </h2>

          <img src="./assets/logo/logo 4.png"
            class="h-10 sm:h-12 lg:h-auto"
            alt="maAx Super Specialty Hospital">
        </div>
      </section> -->

      <!-- VIDEO -->
      <section class="relative lg:top-3/7 z-20 mb-10 px-4 lg:px-0 mt-6 lg:mt-0">
        <div class="max-w-3xl mx-auto rounded-md px-0 lg:px-8 lg:py-5">
          <div class="w-full aspect-video">
            <iframe class="rounded-md w-full h-full"
              src="https://www.youtube.com/embed/2H37h1FtVnI?si=TqDgHEmrfELb86b8"
              title="YouTube video player"
              referrerpolicy="strict-origin-when-cross-origin"
              frameborder="0"
              allowfullscreen></iframe>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- OUR STORY -->

  <section class="w-full bg-white py-16 lg:py-24 p-6  lg:mt-80">
    <div class="container mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-18 items-center">

        <!-- Left Image -->
        <div class="w-full">
          <img
            src="/assets/about-maxx.webp"
            alt="maAx Super Speciality Hospital Shivamogga"
            class="w-full h-[420px] object-cover rounded-2xl shadow-xl" />
        </div>

        <!-- Right Content -->
        <div class="container">
          <h2 class="text-3xl lg:text-2xl font-bold text-[#6C3130] leading-tight">
            About maAx Super Speciality Hospital
            <span class="block text-[#F58220] mt-2 text-xl font-semibold">
              Shivamogga, Karnataka
            </span>
          </h2>

          <p class="mt-6 text-gray-600 leading-relaxed text-[15.5px]">
            Established in 2016 under the aegis of Tadikela Subbaiah Trust (R), Shivamogga, maAx Super Speciality Hospital was born from a vision rooted in care and community. The Trust, founded in 2003 by Sri T. Subbaramaiah — an agriculturist by calling and a visionary by conviction — aimed to extend quality healthcare and education to the people of Shivamogga and beyond.
          </p>

          <!-- Highlight Points -->
          <div class="mt-8 space-y-5">

            <div class="flex items-start gap-4">
              <div class="mt-1 w-2 h-2 bg-[#F58220] rounded-full"></div>
              <p class="text-gray-700 leading-relaxed text-[15.5px] ">
                Situated in Shivamogga, the gateway to the Malnad region, maAx is dedicated to delivering advanced, ethical, and compassionate healthcare.
              </p>
            </div>

            <div class="flex items-start gap-4">
              <div class="mt-1 w-2 h-2 bg-[#F58220] rounded-full"></div>
              <p class="text-gray-700 leading-relaxed text-[15.5px]">
                Guided by the belief that meaningful progress begins with a single, purposeful step, the hospital was envisioned as a centre of specialised medical care that combines clinical excellence with heartfelt care.
              </p>
            </div>

            <div class="flex items-start gap-4">
              <div class="mt-1 w-2 h-2 bg-[#F58220] rounded-full"></div>
              <p class="text-gray-700 leading-relaxed text-[15.5px]">
                Under the continued stewardship of the Trust and its Board, maAx Super Speciality Hospital remains steadfast in its mission to provide patient-centric healthcare, continually evolving with modern medical advancements.
              </p>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="bg-[#EEEEEE] py-12 sm:py-14 lg:py-16">
    <div class="container mx-auto px-6">

      <h2 class="text-2xl sm:text-3xl font-semibold text-center bg-gradient-to-r from-[#F58220] via-[#be6520] to-[#8F4C13] text-transparent bg-clip-text tracking-wide mb-10 lg:mb-8">
        MEET OUR VISIONARIES
      </h2>

      <p class="text-sm md:text-base leading-relaxed text-gray-700 mt-6 lg:mt-28 text-center max-w-3xl mx-auto">
        At maAx Super Speciality Hospital, our growth is guided by visionary leaders dedicated to turning our mission into reality for patients, staff, and the community.
      </p>

      <!-- TOP ROW -->
      <div class="flex flex-wrap justify-center gap-10 sm:gap-16 lg:gap-36 mb-10">

        <!-- CARD -->
        <div class="relative w-[280px] sm:w-[320px] lg:w-[350px] text-center">
          <img src="./assets/founders/Hon. Sri. T. Subbaramaiah.webp"
            class="w-40 sm:w-48 lg:w-56 mx-auto relative z-10 -mb-10"
            alt="">
          <div class="bg-white rounded-lg shadow-[0_10px_40px_rgba(0,0,0,0.25)] pt-12 pb-10 lg:pb-12 px-6 sm:px-10 lg:px-12 transition-all duration-300 hover:shadow-none hover:scale-[1.01]">
            <p class="text-lg font-semibold text-[#2A2A2A]">Hon. Sri. T. Subbaramaiah</p>
            <p class="text-sm text-[#F58220] font-medium">Chairman</p>
          </div>
        </div>

        <div class="relative w-[280px] sm:w-[320px] lg:w-[350px] text-center">
          <img src="./assets/founders/Dr. Nagendra S.webp"
            class="w-40 sm:w-48 lg:w-56 mx-auto relative z-10 -mb-10"
            alt="">
          <div class="bg-white rounded-lg shadow-[0_10px_40px_rgba(0,0,0,0.25)] pt-12 pb-10 lg:pb-12 px-6 sm:px-10 lg:px-12 transition-all duration-300 hover:shadow-none hover:scale-[1.01]">
            <p class="text-lg font-semibold text-[#2A2A2A]">Dr. Nagendra S (MBBS,MD)</p>
            <p class="text-sm text-[#F58220] font-medium">Medical Director</p>
          </div>
        </div>
        <div class="relative w-[280px] sm:w-[320px] lg:w-[350px] text-center">
          <img src="./assets/founders/Dr. Shrinivas S.webp"
            class="w-40 sm:w-48 lg:w-56 mx-auto relative z-10 -mb-10"
            alt="">
          <div class="bg-white rounded-lg shadow-[0_10px_40px_rgba(0,0,0,0.25)] pt-12 pb-10 lg:pb-12 px-6 sm:px-10 lg:px-12 transition-all duration-300 hover:shadow-none hover:scale-[1.01]">
            <p class="text-lg font-semibold text-[#2A2A2A]">Dr. Shrinivas S (MBBS,MD)</p>
            <p class="text-sm text-[#F58220] font-medium">Trustee</p>
          </div>
        </div>
        <div class="relative w-[280px] sm:w-[320px] lg:w-[350px] text-center">
          <img src="./assets/founders/Dr. Lata R. Telang.webp"
            class="w-40 sm:w-48 lg:w-56 mx-auto relative z-10 -mb-10"
            alt="">
          <div class="bg-white rounded-lg shadow-[0_10px_40px_rgba(0,0,0,0.25)] pt-12 pb-10 lg:pb-12 px-6 sm:px-10 lg:px-12 transition-all duration-300 hover:shadow-none hover:scale-[1.01]">
            <p class="text-lg font-semibold text-[#2A2A2A]">Dr. Lata R. Telang (MBBS,DGO)</p>
            <p class="text-sm text-[#F58220] font-medium">Trustee, Executive Director</p>
          </div>
        </div>
        <div class="relative w-[280px] sm:w-[320px] lg:w-[350px] text-center">
          <img src="./assets/founders/Dr. Vinaya Shrinivas.webp"
            class="w-40 sm:w-48 lg:w-56 mx-auto relative z-10 -mb-10"
            alt="">
          <div class="bg-white rounded-lg shadow-[0_10px_40px_rgba(0,0,0,0.25)] pt-12 pb-10 lg:pb-12 px-6 sm:px-10 lg:px-12 transition-all duration-300 hover:shadow-none hover:scale-[1.01]">
            <p class="text-lg font-semibold text-[#2A2A2A]">Dr. Vinaya Shrinivas (MBBS,DCP)</p>
            <p class="text-sm text-[#F58220] font-medium">Trustee, Executive Director</p>
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
<section class="bg-gray-50 py-16 px-6 md:px-12 lg:px-20">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">

    <!-- LEFT: Chairman Image -->
    <div class="flex justify-center md:justify-start">
      <div class="relative">
        <img 
          src="./assets/founders/Dr. Nagendra S.webp" 
          alt="Chairman Nagendra"
          class="w-80 h-96 object-cover rounded-2xl "
        />

        <!-- Decorative Accent -->
        <div class="absolute -bottom-4 -right-4 w-full h-full border-4 border-orange-500 rounded-2xl -z-10"></div>
      </div>
    </div>

    <!-- RIGHT: Content -->
    <div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
        Chairman’s Note
      </h2>

      <!-- Blue underline -->
      <div class="w-16 h-1 bg-orange-500 mb-6"></div>

      <p class="text-gray-600 leading-relaxed mb-4">
        At <span class="font-semibold text-gray-900">MaAx Hospital, Shivamogga</span>, 
        our mission is to provide compassionate, ethical, and high-quality healthcare 
        that places patients at the center of everything we do.
      </p>

      <p class="text-gray-600 leading-relaxed mb-4">
        Healthcare is not just about treatment—it is about trust, dignity, and holistic care. 
        From advanced medical technology to experienced professionals, we ensure every patient 
        receives the best possible care.
      </p>

      <p class="text-gray-600 leading-relaxed mb-6">
        As Shivamogga continues to grow, we remain committed to evolving with it—bringing 
        modern healthcare solutions and continuously improving our services for the community.
      </p>

      <!-- Signature -->
      <div>
        <p class="font-semibold text-gray-900 text-lg">Mr. Nagendra</p>
        <p class="text-orange-500 font-medium">Chairman, MaAx Hospital</p>
      </div>
    </div>

  </div>
</section>

  <section class="bg-[#f5f3f1] py-16 px-5">
    <div class="max-w-4xl mx-auto text-center">

      <!-- Section Heading -->
      <h2 class="text-2xl md:text-3xl font-semibold text-[#3b1f1f]">
        Accreditations <span class="text-[#f58220]">& Certification</span>
      </h2>

      <!-- Card -->
      <div class="mt-10 bg-white rounded-2xl shadow-md p-6 md:p-10 flex flex-col md:flex-row items-center md:items-start gap-6 md:gap-10 text-left">

        <!-- Logo -->
        <div class="flex-shrink-0">
          <img src="./assets/icons/nabh.png"
            alt="NABH Certification Logo"
            class="w-28 md:w-48">
        </div>

        <!-- Content -->
        <div>
          <h3 class="text-lg md:text-xl font-semibold text-[#3b1f1f] leading-snug">
            maAx Hospital —
            <span class="text-[#f58220]">Certified for Excellence in Patient Safety & Care Quality</span>
          </h3>

          <p class="mt-3 text-gray-600 text-sm md:text-base leading-relaxed max-w-2xl">
            This certification reflects maAx Hospital’ dedication to delivering safe,
            high-quality medical care. We prioritize risk reduction, clinical excellence,
            and continuous improvement to provide trusted, effective, and compassionate
            healthcare for every patient.
          </p>
        </div>

      </div>
    </div>
  </section>


  <!-- ACCREDITATIONS -->
  <!-- <div class="bg-[#E0E0E0] w-full text-center py-10 lg:py-0">
    <p class="text-2xl sm:text-3xl lg:text-3xl font-semibold text-center bg-gradient-to-r from-[#F58220] via-[#be6520] to-[#8F4C13] text-transparent bg-clip-text tracking-wide mb-10 lg:mb-16">
      ACCREDITATION & CERTIFICATIONS
    </p>

    <div class="flex justify-center sm:justify-evenly gap-8 sm:gap-10 flex-wrap px-6">
      <img src="./assets/icons/nabh.png" class="h-14 sm:h-16 lg:h-auto" alt="">
      <img src="./assets/icons/nabh2.png" class="h-14 sm:h-16 lg:h-auto" alt="">
      <img src="./assets/icons/nabh3.png" class="h-14 sm:h-16 lg:h-auto" alt="">
    </div>
  </div> -->
  <h2 class="text-2xl md:text-3xl font-semibold text-[#3b1f1f] text-center m-10">
    Join maAx Super Specialty Hospitals <span class="text-[#f58220]">— Apply for Open Positions</span>
  </h2>
  <div class="rounded-2xl shadow-2xl overflow-hidden w-full max-w-4xl mx-auto m-5 bg-white">
    <div class="flex flex-col md:flex-row">

      <!-- Left Image -->
      <div class="md:w-[380px] md:h-[460px]">
        <img
          src="./assets/maxx-carrier.webp"
          alt="Doctor"
          class="w-full h-full object-cover" />
      </div>

      <!-- Right Form -->
      <div class="flex-1 px-6 md:px-10 py-8 flex items-center">
        <div class="w-full">

          <!-- Heading -->
          <h2 class="text-lg md:text-xl font-bold tracking-wide text-gray-800">
            ENTER <span class="text-[#F97316]">YOUR DETAILS</span>
          </h2>

          <form class="mt-6 space-y-4">

            <!-- Full Name -->
            <div>
              <input
                type="text"
                placeholder="Full Name*"
                class="h-11 w-full rounded-md border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316]" />
            </div>

            <!-- Email -->
            <div>
              <input
                type="email"
                placeholder="Email*"
                class="h-11 w-full rounded-md border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316]" />
            </div>

            <!-- Phone -->
            <div class="flex gap-2">
              <select
                class="h-11 w-24 rounded-md border border-gray-300 px-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316]">
                <option>+91</option>
                <option>+1</option>
                <option>+44</option>
              </select>

              <input
                type="tel"
                placeholder="Mobile Number*"
                class="h-11 flex-1 rounded-md border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316]" />
            </div>

            <!-- Resume Upload -->
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">
                Upload Resume*
              </label>
              <div class="flex items-center gap-3">
                <label class="cursor-pointer bg-gray-200 hover:bg-gray-300 text-gray-700 text-sm px-4 py-2 rounded-md">
                  Choose File
                  <input type="file" class="hidden" />
                </label>
                <span class="text-xs text-gray-500">No File Chosen</span>
              </div>
            </div>

            <!-- Consent -->
            <label class="flex items-start gap-2 text-xs text-gray-600">
              <input type="checkbox"
                class=" h-4 w-4 rounded border-gray-300 text-[#F97316] focus:ring-[#F97316]" />
              <span>I consent maAx Super Speciality hospital to contact me</span>
            </label>

            <!-- Submit Button -->
            <button
              class="w-full h-11 rounded-md bg-[#F97316] text-white font-semibold text-sm hover:bg-[#ea6a0e] transition">
              SEND
            </button>

          </form>

        </div>
      </div>

    </div>

  </div>
  <!-- Email Resume CTA -->
  <!-- <div class="mt-10 text-center mb-10">
    <div class="inline-flex flex-wrap items-center justify-center gap-2 bg-white border border-gray-200 rounded-lg px-5 py-3 text-sm md:text-base shadow-md">
      <span class="text-gray-600">OR email your resume to</span>
      <a href="mailto:careers@maAxhospitals.com"
        class="text-[#F97316] font-semibold hover:underline">
        careers@maAxhospitals.com
      </a>
    </div>
  </div> -->



  <?php require "./components/footer.php" ?>
</body>

</html>