<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>


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

<body class="bg-surface-soft font-sans">
  <?php require "./header.php" ?>


  <section class="w-full ">
    <div
      class="relative w-full mx-auto h-[619px] bg-cover bg-center overflow-hidden"
      style="background-image: url('./assets/banners/blur.jpg');">

      <!-- TOP PILL (HIDDEN ON MOBILE) -->
      <div class="hidden md:flex justify-center mt-5 fixed w-full z-50">
        <div class="flex w-full max-w-[1020px] items-center justify-between bg-white shadow-md rounded-full px-4 md:px-6 py-3 gap-3 md:gap-6">

          <!-- Request Call Back -->
          <button class="flex items-center gap-2 text-[#6C3130] font-medium px-2 md:px-4 cursor-pointer" onclick="openPopup()">
            <img src="./assets/icons/call.png" class="w-6 h-6 md:w-7 md:h-7" alt="">
            <span class="text-sm md:text-base">Request Call Back</span>
          </button>

          <!-- Book Appointment (Active) -->
          <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="flex items-center gap-2 text-white font-medium px-4 md:px-6 py-2 rounded-full bg-[#F58220] shadow">
            <img src="./assets/icons/schedule.png" class="w-6 h-6 md:w-7 md:h-7 invert" alt="">
            <span class="text-sm md:text-base">Book Appointment</span>
          </button>

          <!-- Book Ambulance -->
          <a href="tel:+919876543210"
            class="flex items-center gap-2 text-[#6C3130] font-medium px-2 md:px-4">

            <img src="./assets/icons/ambulence.png"
              class="w-6 h-6 md:w-7 md:h-7"
              alt="Ambulance Call">

            <span class="text-sm md:text-base">Book Ambulance</span>
          </a>


        </div>
      </div>

      <!-- TEXT CONTENT -->
      <div
        class="relative z-20 px-4 pt-6 text-center
             lg:text-left lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:left-36">
        <h1 class="text-2xl sm:text-3xl md:text-4xl text-[#6C3130] font-semibold mb-3 drop-shadow-xl">
          All-Inclusive Care
          <span class="block sm:inline text-[#F58220]">ONE Trusted Hospital</span>
        </h1>

        <p
          class="text-lg sm:text-xl md:text-2xl xl:w-[650px]
               bg-[image:var(--gradient-brand)]
               md:text-4xl font-semibold text-white inline-block px-3 py-3 rounded drop-shadow-xl">
          World Class Care, Under One Roof
        </p>
      </div>

      <!-- SEARCH BAR -->
      <!-- SEARCH BAR -->
      <div
        class="absolute top-[58%] sm:top-[70%] left-0 w-full px-4 z-30
   lg:top-[80%] lg:left-1/2 lg:-translate-x-1/2
   lg:px-0 lg:w-[1020px] lg:max-w-4xl ">

        <div
          class="flex flex-col gap-3
     bg-transparent backdrop-blur-md
     rounded-2xl shadow-lg
     px-4 py-4 w-full overflow-hidden
     lg:flex-row lg:items-center lg:gap-0
     lg:bg-white lg:backdrop-blur-0 lg:px-0 lg:py-0 lg:rounded-full">

          <!-- DROPDOWNS -->
          <div class="flex flex-col flex-1 gap-3 lg:flex-row lg:items-center lg:px-5 lg:py-2">

            <!-- Select Specialty -->
            <div class="relative flex-1">
              <select
                id="specialtySelect"
                class="w-full bg-white/70 backdrop-blur-md lg:bg-[#f4f4f4]
             border border-white/40 lg:border-0
             rounded-[10px] lg:rounded-full
             px-4 lg:px-8 py-3 text-sm text-[#6C3130]
             appearance-none outline-none cursor-pointer">
                <option value="">Select Specialty</option>
                <option value="./angiography.php">Cardiology</option>
                <option value="/specialty/anaesthesia">Anaesthesia</option>
                <option value="/specialty/dermatology">Dermatology</option>
                <option value="/specialty/critical-care">Critical Care</option>
                <!-- Add all specialties here -->
              </select>

              <span
                class="pointer-events-none absolute right-4 lg:right-6 top-1/2 -translate-y-1/2 text-[#6C3130] text-xs">
                ▼
              </span>
            </div>

            <!-- Find a Doctor -->
            <div class="relative flex-1">
              <select
                id="doctorSelect"
                class="w-full bg-white/70 backdrop-blur-md lg:bg-[#f4f4f4]
             border border-white/40 lg:border-0
             rounded-[10px] lg:rounded-full
             px-4 lg:px-8 py-3 text-sm text-[#6C3130]
             appearance-none outline-none cursor-pointer">
                <option value="/doctors/dr-narayan-panji">Dr. Narayan Panji</option>
                <option value="/doctors/dr-arun-s">Dr. Arun S.</option>
                <option value="/doctors/dr-vinay-bm">Dr. Vinay B.M.</option>

                <!-- Maxillofacial Surgery -->
                <option value="/doctors/dr-anubav-jannu">Dr. Anubav Jannu</option>
                <option value="/doctors/dr-mithun-km">Dr. Mithun K.M.</option>

                <!-- Endocrine Sciences -->
                <option value="/doctors/dr-praveenkumar-devarabatti">Dr. Praveenkumar Devarabatti</option>
                <option value="/doctors/dr-shreyas-m">Dr. Shreyas M.</option>

                <!-- Cardiology & CT Surgery -->
                <option value="/doctors/dr-manjunath-p-hasalkar">Dr. Manjunath P. Hasalkar</option>
                <option value="/doctors/dr-sudheer-m-bhat">Dr. Sudheer M. Bhat</option>
                <option value="/doctors/dr-rakesh-r">Dr. Rakesh R.</option>

                <!-- Urology -->
                <option value="/doctors/dr-rakesh-bisalahalli">Dr. Rakesh Bisalahalli</option>

                <!-- Surgical Gastroenterology -->
                <option value="/doctors/dr-prasanna-basavarajappa">Dr. Prasanna Basavarajappa</option>

                <!-- Plastic & Reconstructive Surgery -->
                <option value="/doctors/dr-akshay-pai-a">Dr. Akshay Pai A.</option>

                <!-- General Surgery -->
                <option value="/doctors/dr-sunil-kumar-kp">Dr. Sunil Kumar K.P.</option>

                <!-- Internal Medicine -->
                <option value="/doctors/dr-s-nagendra">Dr. S. Nagendra</option>
                <option value="/doctors/dr-satish-bc">Dr. Satish B.C.</option>
                <option value="/doctors/dr-m-fareed">Dr. M. Fareed</option>
                <option value="/doctors/dr-suresh-bn">Dr. Suresh B.N.</option>

                <!-- Nephrology -->
                <option value="/doctors/dr-dayanand-as">Dr. Dayanand A.S.</option>
                <option value="/doctors/dr-lingaraju">Dr. Lingaraju</option>

                <!-- ENT -->
                <option value="/doctors/dr-venkatesh-ballal">Dr. Venkatesh Ballal</option>
                <option value="/doctors/dr-lohith-s">Dr. Lohith S.</option>

                <!-- OBG -->
                <option value="/doctors/dr-lata-r-telang">Dr. Lata R. Telang</option>
                <option value="/doctors/dr-shonali-manjunath">Dr. Shonali Manjunath</option>
                <option value="/doctors/dr-vangara-susmitha">Dr. Vangara Susmitha</option>

                <!-- Pediatrics -->
                <option value="/doctors/dr-srinivasa-hatwar">Dr. Srinivasa Hatwar</option>
                <option value="/doctors/dr-surabhi-nk">Dr. Surabhi N.K.</option>

                <!-- Ophthalmology -->
                <option value="/doctors/dr-ashok-t">Dr. Ashok T.</option>
                <option value="/doctors/dr-laxmi-ks-murthy">Dr. Laxmi K.S. Murthy</option>

                <!-- Orthopedics -->
                <option value="/doctors/dr-shivkumar-hc">Dr. Shivkumar H.C.</option>
                <option value="/doctors/dr-shishir-sm">Dr. Shishir S.M.</option>
                <option value="/doctors/dr-sukruth-p-patel">Dr. Sukruth P. Patel</option>

                <!-- Radiology -->
                <option value="/doctors/dr-arun-kumar-marak">Dr. Arun Kumar Marak</option>
                <option value="/doctors/dr-harish-kiran">Dr. Harish Kiran</option>
                <option value="/doctors/dr-kiran-kumar-rg">Dr. Kiran Kumar R.G.</option>

                <!-- Dermatology -->
                <option value="/doctors/dr-s-srinivas">Dr. S. Srinivas</option>
                <option value="/doctors/dr-monika-b-thashildar">Dr. Monika B. Thashildar</option>

                <!-- Pulmonology -->
                <option value="/doctors/dr-anirudha-lindur">Dr. Anirudha Lindur</option>

                <!-- Psychiatry -->
                <option value="/doctors/dr-muzaffar-afthab-ahmed">Dr. Muzaffar Afthab Ahmed</option>

                <!-- Anaesthesiology & Critical Care -->
                <option value="/doctors/dr-shivkumar-mc">Dr. Shivkumar M.C.</option>
                <option value="/doctors/dr-sandhya">Dr. Sandhya</option>
                <option value="/doctors/dr-basavaraj">Dr. Basavaraj</option>
                <option value="/doctors/dr-srinivasa-ramchandra">Dr. Srinivasa Ramchandra</option>
                <option value="/doctors/dr-pooja-shah">Dr. Pooja Shah</option>
                <option value="/doctors/dr-swathi-vc">Dr. Swathi V.C.</option>
                <option value="/doctors/dr-trupthi-bp">Dr. Trupthi B.P.</option>
                <option value="/doctors/dr-rouhi-kausar">Dr. Rouhi Kausar</option>
                <option value="/doctors/dr-ekanth-s">Dr. Ekanth S.</option>
                <option value="/doctors/dr-sunil-kumar-tc">Dr. Sunil Kumar T.C.</option>
                <option value="/doctors/dr-rini-dsouza">Dr. Rini D’Souza</option>
                <option value="/doctors/dr-geetha-ravindra">Dr. Geetha Ravindra</option>
                <option value="/doctors/dr-amitha-hegde">Dr. Amitha Hegde</option>
                <option value="/doctors/dr-vidya-bu">Dr. Vidya B.U.</option>
                <!-- Add all doctors with their slugs -->
              </select>

              <span
                class="pointer-events-none absolute right-4 lg:right-6 top-1/2 -translate-y-1/2 text-[#6C3130] text-xs">
                ▼
              </span>
            </div>
          </div>

          <!-- SEARCH BUTTON -->
          <button
            id="searchBtn"
            class="mt-2 w-full px-6 py-3 text-base font-semibold
         bg-[#F58220]/90 text-white rounded-[10px]
         backdrop-blur-md
         flex items-center justify-center gap-2 whitespace-nowrap
         lg:mt-0 lg:w-auto lg:px-12 lg:py-5 lg:text-lg
         lg:rounded-none lg:rounded-r-full h-full">
            <span>Search</span>
            <span class="text-base">→</span>
          </button>
        </div>
      </div>






      <div
        class="mt-6 flex justify-center z-10
         lg:mt-0 lg:absolute lg:bottom-0 lg:right-10 lg:opacity-95">
        <img
          src="./assets/banners/family-home.png"
          class="lg:w-[900px] lg:h-[560px] md:h-[400px] "
          alt="">
      </div>


    </div>
  </section>

  <section class="block lg:hidden fixed bottom-0 inset-x-0 z-50  " data-aos="fade-up">
    <div class="bg-[#FFE4CF] w-full p-5 flex gap-5 font-medium text-sm text-center justify-center">

      <!-- Button 1: Gradient Border Only -->
      <div class="inline-block bg-gradient-to-r from-[#F58220] to-[#6C3130] rounded-full p-[2px]" onclick="openPopup()">
        <div class="bg-white rounded-full">
          <div class="flex items-center justify-center gap-2 px-4 py-3">
            <img src="./assets/icons/telephone.png" class="h-5 w-5" alt="">
            <p class="text-[#6C3130]">Request A Callback</p>
          </div>
        </div>
      </div>

      <!-- Button 2: Solid Gradient Fill -->
      <div class="inline-block bg-gradient-to-r from-[#F58220] to-[#6C3130] rounded-full">
        <div class="flex items-center justify-center gap-2 px-4 py-3">
          <img src="./assets/icons/appointment.png" class="h-5 w-5" alt="">
          <p class="text-white">Book An Appointment</p>
        </div>
      </div>

    </div>
  </section>







  <section class="flex justify-center  pt-20  ">
    <div class="flex flex-col  ">
      <div>
        <div class="w-full flex justify-center lg:block hidden">
          <img
            src="./assets/banners/Frame 274.png"
            class=" w-full h-full !important"
            alt="">
        </div>
      </div>
      <div class="hidden md:flex justify-between flex-wrap xl:px-0 px-5">

        <div class="w-full max-w-[470px] max-h-80 bg-[#FE9C3E] rounded-2xl p-6 text-white">
          <div class="flex items-start gap-4">
            <div>
              <div class="flex justify-baseline">
                <img src="./assets/icons/trophy-icon.png" alt="">
                <h3 class="text-green-50  font-bold ml-5 mt-5">
                  High Quality Medical Care
                </h3>
              </div>

              <p class="mt-3 text-[20px] leading-relaxed font-medium">
                At MaAx Hospitals, we deliver top-quality medical care
                with specialised services, advanced treatments, and
                expert support — all under one roof.
              </p>
            </div>
          </div>
        </div>

        <div class="w-full max-w-[470px] max-h-80 bg-[#6C3130] rounded-2xl p-6 text-white">
          <div class="flex items-start gap-4">
            <div>
              <div class="flex justify-baseline">
                <img src="./assets/icons/help-icon.png" alt="">
                <h3 class="text-2xl font-bold ml-5 mt-5">
                  Patient-Centric<br />Care
                </h3>
              </div>

              <p class="mt-3 text-[20px] leading-relaxed font-medium">
                At MaAx Hospitals, we deliver top-quality medical care with specialised services, advanced treatments, and expert support — all under one roof.
              </p>
            </div>
          </div>
        </div>

        <div class="w-full max-w-[470px] max-h-80 bg-[#FE9C3E] rounded-2xl p-6 text-white">
          <div class="flex items-start gap-4">
            <div>
              <div class="flex justify-baseline">
                <img src="./assets/icons/lotus-icon.png" alt="">
                <h3 class="text-2xl font-bold ml-5 mt-5">
                  Holistic Healthcare<br />Services
                </h3>
              </div>

              <p class="mt-3 text-[20px] leading-relaxed font-medium">
                At MaAx Hospitals, we deliver top-quality medical care
                with specialised services, advanced treatments, and
                expert support — all under one roof.
              </p>
            </div>
          </div>
        </div>

      </div>
      <!-- MOBILE: accordion style -->
      <div class="md:hidden w-full px-5 mt-6">
        <div class="max-w-[470px] mx-auto space-y-4">

          <!-- Item 1: High Quality Medical Care (open by default) -->
          <details class="group rounded-2xl shadow-[0_10px_30px_rgba(15,23,42,0.08)] bg-white open:bg-[#6C3130]" open>
            <summary class="flex items-center justify-between gap-3 px-4 py-3 cursor-pointer list-none rounded-2xl group-open:bg-[#6C3130]">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center bg-[#FE9C3E]">
                  <img src="./assets/icons/trophy-icon.png" alt="" class="w-6 h-6">
                </div>
                <p class="font-semibold text-base text-[#6C3130] group-open:text-white">
                  High Quality Medical Care
                </p>
              </div>
              <span class="text-xl text-[#6C3130] group-open:text-white transform transition-transform group-open:rotate-180">
                ▲
              </span>
            </summary>

            <div class="px-4 pb-4 pt-1 text-sm leading-relaxed text-white">
              At MaAx Hospitals, we deliver top-quality medical care
              with specialised services, advanced treatments, and
              expert support — all under one roof.
            </div>
          </details>

          <!-- Item 2: Patient-Centric care -->
          <!-- Item 2: Patient-Centric care -->
          <details class="group rounded-2xl shadow-[0_10px_30px_rgba(15,23,42,0.08)] bg-white open:bg-[#6C3130]">
            <summary class="flex items-center justify-between gap-3 px-4 py-3 cursor-pointer list-none rounded-2xl group-open:bg-[#6C3130]">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center bg-[#FE9C3E]">
                  <img src="./assets/icons/help-icon.png" alt="" class="w-6 h-6">
                </div>
                <p class="font-semibold text-base text-[#6C3130] group-open:text-white">
                  Patient-Centric care
                </p>
              </div>
              <span class="text-xl text-[#6C3130] group-open:text-white transform transition-transform group-open:rotate-180">
                ▲
              </span>
            </summary>

            <div class="px-4 pb-4 pt-1 text-sm leading-relaxed text-[#6C3130] group-open:text-white">
              At MaAx Hospitals, we deliver top-quality medical care with specialised services,
              advanced treatments, and expert support — all under one roof.
            </div>
          </details>


          <!-- Item 3: Holistic Healthcare Services -->
          <!-- Item 3: Holistic Healthcare Services -->
          <details class="group rounded-2xl shadow-[0_10px_30px_rgba(15,23,42,0.08)] bg-white open:bg-[#6C3130]">
            <summary class="flex items-center justify-between gap-3 px-4 py-3 cursor-pointer list-none rounded-2xl group-open:bg-[#6C3130]">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center bg-[#FE9C3E]">
                  <img src="./assets/icons/lotus-icon.png" alt="" class="w-6 h-6">
                </div>
                <p class="font-semibold text-base text-[#6C3130] group-open:text-white">
                  Holistic Healthcare Services
                </p>
              </div>
              <span class="text-xl text-[#6C3130] group-open:text-white transform transition-transform group-open:rotate-180">
                ▲
              </span>
            </summary>

            <div class="px-4 pb-4 pt-1 text-sm leading-relaxed text-[#6C3130] group-open:text-white">
              At MaAx Hospitals, we deliver top-quality medical care with specialised
              services, advanced treatments, and expert support — all under one roof.
            </div>
          </details>


        </div>
      </div>

    </div>
  </section>


  <section class="w-full py-10">
    <div class="max-w-4xl mx-auto text-center">

      <!-- Heading -->
      <h2 class="text-2xl font-semibold">
        <span class="text-[#6C3130]">Explore</span>
        <span class="text-brand">Our Specialities</span>
      </h2>

      <!-- Tabs -->
      <div class="flex justify-center gap-10 mt-6 text-brand text-lg font-medium flex-wrap">
        <button
          class="tab-btn active-tab px-5 py-2 bg-brand text-white rounded-full"
          data-target="specialities">
          Specialities
        </button>

        <button
          class="tab-btn hover:text-[#c45d16] transition px-5 py-2 rounded-full"
          data-target="procedures">
          Procedures
        </button>

        <button
          class="tab-btn hover:text-[#c45d16] transition px-5 py-2 rounded-full"
          data-target="diagnostics">
          Diagnostics
        </button>
      </div>
    </div>

    <!-- 🔽 A–Z DROPDOWN FOR SPECIALITIES -->
    <div class="max-w-5xl mx-auto mt-6 flex justify-start px-4">
      <label class="flex items-center gap-2 text-sm text-[#5c2c20]">
        <span class="hidden sm:inline">Filter A–Z:</span>
        <select
          id="specialityFilter"
          class="border border-[#e4d5c6] rounded-full px-3 py-1 text-sm bg-white focus:outline-none focus:ring-1 focus:ring-[#f28c28]">
          <option value="all">Filter</option>
          <option value="all">All</option>
          <!-- A–Z options will be added by JS -->
        </select>
      </label>
    </div>

    <!-- ============ SPECIALITIES (ALL CARDS, DEFAULT VISIBLE) ============ -->
    <div
      id="specialities"
      class="tab-content show flex flex-wrap justify-center gap-y-10 gap-10 justify-items-center mt-6 md:px-28">

      <!-- 1. Anaesthesia -->
      <a href="./anaesthesia.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Invasive & Non-Invasive Cardiology">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
            Anesthesia
          </h3>
        </div>
      </a>

      <!-- 2. Invasive & Non-Invasive Cardiology -->
      <a href="./invasive-and-non-invasive-cardiology.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Invasive & Non-Invasive Cardiology">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
            Invasive & Non-Invasive Cardiology
          </h3>
        </div>
      </a>

      <!-- 3. Cardiac Thoracic Surgery -->
      <a href="./cardiac-thoracic-surgery.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Cardiac Thoracic Surgery">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
            Cardiac Thoracic Surgery
          </h3>
        </div>
      </a>

      <!-- 4. Critical Care Medicine -->
      <a href="./critical-care.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Critical Care Medicine">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
            Critical Care Medicine
          </h3>
        </div>
      </a>

      <!-- 5. Dermatology -->
      <a href="./dermatology.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Dermatology">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">Dermatology</h3>
        </div>
      </a>

      <!-- 6. Emergency Medicine -->
      <a href="./emergency-medicine.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Emergency Medicine">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
            Emergency Medicine
          </h3>
        </div>
      </a>

      <!-- 7. Endocrine Surgery -->
      <a href="./endocrine-medicine.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Endocrine Surgery">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
            Endocrine Surgery
          </h3>
        </div>
      </a>

      <!-- 8. Endocrinology -->
      <a href="./endocrinology.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Endocrinology">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">Endocrinology</h3>
        </div>
      </a>

      <!-- 9. ENT -->
      <a href="./ent.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="ENT">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">ENT</h3>
        </div>
      </a>

      <!-- 10. General Medicine -->
      <a href="./general-medicine.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="General Medicine">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
            General Medicine
          </h3>
        </div>
      </a>

      <!-- 11. General & Laparoscopic Surgery -->
      <a href="./general-and-laproscopic-surgery.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="General & Laparoscopic Surgery">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
            General & Laparoscopic Surgery
          </h3>
        </div>
      </a>

      <!-- 12. Interventional Radiology -->
      <a href="./interventional-radiology.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Interventional Radiology">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
            Interventional Radiology
          </h3>
        </div>
      </a>

      <!-- 13. Surgical Gastroenterology -->
      <a href="./surgical-gastroentology.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Surgical Gastroenterology">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
            Surgical Gastroenterology
          </h3>
        </div>
      </a>

      <!-- 14. Oral & Maxillo Facial Surgery -->
      <a href="./oral-and-maxillo-surgery.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Oral & Maxillo Facial Surgery">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
            Oral & Maxillo Facial Surgery
          </h3>
        </div>
      </a>

      <!-- 15. Nephrology & Dialysis -->
      <a href="./nephrology-and-dialysis.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Nephrology & Dialysis">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
            Nephrology & Dialysis
          </h3>
        </div>
      </a>

      <!-- 16. Neurology -->
      <a href="./neurology.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Neurology">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">Neurology</h3>
        </div>
      </a>

      <!-- 17. Neurosurgery -->
      <a href="./neurosurgery.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Neurosurgery">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">Neurosurgery</h3>
        </div>
      </a>

      <!-- 18. Ophthalmology -->
      <a href="./ophthalmology.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Ophthalmology">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
            Ophthalmology
          </h3>
        </div>
      </a>

      <!-- 19. Orthopedics & Joint Replacement -->
      <a href="./orthopedics-and-joint-replacement.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Orthopedics & Joint Replacement">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
            Orthopedics & Joint Replacement
          </h3>
        </div>
      </a>

      <!-- 20. Obstetrics & Gynecology -->
      <a href="./obstrcts-and-gynacology.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Obstetrics & Gynecology">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
            Obstetrics & Gynecology
          </h3>
        </div>
      </a>

      <!-- 21. Pediatrics -->
      <a href="./pediatrics.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Pediatrics">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">Pediatrics</h3>
        </div>
      </a>

      <!-- 22. Pediatric Surgery -->
      <a href="./pediatric-surgery.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Pediatric Surgery">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
            Pediatric Surgery
          </h3>
        </div>
      </a>

      <!-- 23. Plastic Surgery -->
      <a href="./plastic-surgery.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Plastic Surgery">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
            Plastic Surgery
          </h3>
        </div>
      </a>

      <!-- 24. Pulmonology -->
      <a href="./pulmonology.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Pulmonology">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
            Pulmonology
          </h3>
        </div>

      </a>
      <!-- 25. Pathology -->
      <a href="./pathology.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Pathology">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
            Pathology
          </h3>
        </div>
      </a>

      <!-- 26. Physiotherapy & Rehabilitation -->
      <a href="./psyiotherphy.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Physiotherapy & Rehabilitation">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[17px] font-semibold text-[#5c2c20] text-center">
            Physiotherapy & Rehabilitation
          </h3>
        </div>
      </a>

      <!-- 27. Psychiatry (OPD Only) -->
      <a href="./psychiatry.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Psychiatry (OPD Only)">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
            Psychiatry (OPD Only)
          </h3>
        </div>
      </a>

      <!-- 28. Radiology & Imaging -->
      <a href="./radiology-and-imaging.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Radiology & Imaging">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
            Radiology & Imaging
          </h3>
        </div>
      </a>

      <!-- 29. Urology -->
      <a href="./urology.php">
        <div
          class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
          data-name="Urology">
          <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
          <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">Urology</h3>
        </div>
      </a>

    </div>

    <!-- ============ PROCEDURES (HIDDEN INITIALLY) ============ -->
    <div
      id="procedures"
      class="tab-content hidden mt-8">

      <div class="flex flex-wrap justify-center gap-3 mt-5">
        <div class="card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
          <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
            Heart & Vascular Care
          </h3>
          <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
            <img
              src="./assets/heart-care.jpg"
              alt="Heart & Vascular Care"
              class="w-full h-full object-cover" />
          </div>
          <div class="flex justify-center">
            <button
              class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
              Read more
            </button>
          </div>
        </div>

        <!-- Repeat your remaining procedure cards here (same as before)... -->
      </div>

      <div class="w-full flex justify-center mt-5">
        <button class="flex justify-center items-center gap-2 border border-[#f28c28] text-[#f28c28] 
        px-5 py-2 rounded-full font-medium text-xl hover:bg-[#fff7ef] transition">
          view all
          <span class="text-lg">→</span>
        </button>
      </div>
    </div>

    <!-- ============ DIAGNOSTICS (HIDDEN INITIALLY) ============ -->
    <div
      id="diagnostics"
      class="tab-content hidden grid xl:grid-cols-6 lg:grid-cols-5 md:grid-cols-3 gap-5 lg:gap-10 justify-items-center grid-cols-1 mt-6 px-4">

      <div class="flex flex-wrap justify-center gap-3 mt-5">
        <div class="card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
          <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
            <img
              src="./assets/branchoscopy.webp"
              alt="Heart & Vascular Care"
              class="w-full h-full object-cover" />
          </div>
          <div class="flex justify-center">
            <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
              Bronchoscopy
            </h3>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-3 mt-5">
        <div class="card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
          <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
            <img
              src="./assets/cath-lab.webp"
              alt="Heart & Vascular Care"
              class="w-full h-full object-cover" />
          </div>
          <div class="flex justify-center">
            <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
              Cath Lab
            </h3>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-3 mt-5">
        <div class="card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
          <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
            <img
              src="./assets/dialysis.webp"
              alt="Heart & Vascular Care"
              class="w-full h-full object-cover" />
          </div>
          <div class="flex justify-center">
            <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
              Dialysis
            </h3>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-3 mt-5">
        <div class="card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
          <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
            <img
              src="./assets/endoscopy.webp"
              alt="Heart & Vascular Care"
              class="w-full h-full object-cover" />
          </div>
          <div class="flex justify-center">
            <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
              Endoscopy
            </h3>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-3 mt-5">
        <div class="card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
          <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
            <img
              src="./assets/ct-scan.webp"
              alt="Heart & Vascular Care"
              class="w-full h-full object-cover" />
          </div>
          <div class="flex justify-center">
            <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
              Ct Scan
            </h3>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-3 mt-5">
        <div class="card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
          <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
            <img
              src="./assets/mr-scan.webp"
              alt="Heart & Vascular Care"
              class="w-full h-full object-cover" />
          </div>
          <div class="flex justify-center">
            <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
              MRI Scan
            </h3>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-3 mt-5">
        <div class="card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
          <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
            <img
              src="./assets/pulmanology.webp"
              alt="Heart & Vascular Care"
              class="w-full h-full object-cover" />
          </div>
          <div class="flex justify-center">
            <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
              Pulmanory function test
            </h3>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-3 mt-5">
        <div class="card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
          <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
            <img
              src="./assets/tmt.webp"
              alt="Heart & Vascular Care"
              class="w-full h-full object-cover" />
          </div>
          <div class="flex justify-center">
            <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
              TMT
            </h3>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-3 mt-5">
        <div class="card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
          <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
            <img
              src="./assets/ultrasound.webp"
              alt="Heart & Vascular Care"
              class="w-full h-full object-cover" />
          </div>
          <div class="flex justify-center">
            <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
              ultrasound
            </h3>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ============ JS: Tabs + A–Z filter ============ -->
  <script>
    const tabs = document.querySelectorAll(".tab-btn");
    const contents = document.querySelectorAll(".tab-content");

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        const target = tab.getAttribute("data-target");
        const targetEl = document.getElementById(target);

        tabs.forEach((t) =>
          t.classList.remove("bg-brand", "text-white", "active-tab")
        );

        // hide all contents
        contents.forEach((c) => {
          c.classList.add("hidden");
          c.classList.remove("show");
        });

        // activate clicked tab
        tab.classList.add("bg-brand", "text-white", "active-tab");

        // show target content and trigger animation
        targetEl.classList.remove("hidden");
        void targetEl.offsetWidth; // force reflow to restart animation
        targetEl.classList.add("show");
      });
    });

    // ========== A–Z FILTER FOR SPECIALITIES ==========
    const filterSelect = document.getElementById("specialityFilter");
    const specialityCards = document.querySelectorAll(".speciality-card");

    // Dynamically add A–Z options
    const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ".split("");
    letters.forEach((letter) => {
      const option = document.createElement("option");
      option.value = letter;
      option.textContent = letter;
      filterSelect.appendChild(option);
    });

    filterSelect.addEventListener("change", (e) => {
      const value = e.target.value;

      specialityCards.forEach((card) => {
        const name = (card.dataset.name || "").trim().toUpperCase();
        const firstLetter = name.charAt(0);

        if (value === "all" || firstLetter === value) {
          card.classList.remove("hidden");
        } else {
          card.classList.add("hidden");
        }
      });
    });
  </script>




  <section class="container mx-auto mt-32 mb-10 px-5 lg:px-0 overflow-visible" data-aos="fade-up">

    <div class="relative bg-[#6D3333] rounded-[2rem] shadow-xl flex flex-col md:flex-row md:items-center px-6 pb-8 pt-0 md:pr-8 md:pl-0 md:py-10 z-0">

      <div class="relative z-20 w-full md:w-auto flex justify-center md:block -mt-32 md:mt-0 mb-6 md:mb-0">
        <img src="./assets/banners/machine.png"
          class="
          w-56 h-auto drop-shadow-2xl
          
    
          md:absolute md:w-[350px] md:-bottom-10 md:-left-10
          

          lg:w-[450px] lg:h-[450px] lg:-bottom-48 lg:-left-16
          
          max-w-none
        "
          alt="Robotic Surgery Machine">
      </div>

      <div class="w-full md:w-2/3 md:ml-auto lg:pl-32 text-white relative z-10">

        <h2 class="text-2xl md:text-3xl font-bold mb-4 text-center md:text-left">
          State-of-the-Art Medical infrastructure
        </h2>

        <p class="text-sm md:text-base text-gray-200 mb-8 leading-relaxed text-center md:text-left">
          MaAx Super Specialty Hospitals offers state-of-the-art facilities and advanced technology to ensure high-quality care and better patient outcomes — all delivered with compassion and expertise.
        </p>

        <div class="bg-gradient-to-r from-orange-400 to-orange-500 rounded-2xl md:rounded-full p-5 md:px-8 md:py-4 shadow-lg">

          <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-6 gap-x-2 lg:gap-4 items-center">

            <div class="flex flex-col sm:flex-row items-center sm:space-x-2 text-center sm:text-left lg:border-r border-orange-300/50 lg:last:border-0 border-none">
              <img src="./assets/icons/liver.png" class="w-10 h-10 md:w-16 md:h-16 text-white mb-2 sm:mb-0 shrink-0" alt="">
              <div>
                <span class="block text-lg md:text-xl font-medium text-white">400+</span>
                <span class="text-xs md:text-lg text-white/90 leading-tight block">Liver Transplants</span>
              </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center sm:space-x-2 text-center sm:text-left lg:border-r border-orange-300/50 lg:last:border-0 border-none">
              <img src="./assets/icons/bone.png" class="w-10 h-10 md:w-16 md:h-16 text-white mb-2 sm:mb-0 shrink-0" alt="">
              <div>
                <span class="block text-lg md:text-xl font-medium text-white">850+</span>
                <span class="text-xs md:text-lg text-white/90 leading-tight block">Bone Marrow</span>
              </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center sm:space-x-2 text-center sm:text-left lg:border-r border-orange-300/50 lg:last:border-0 border-none">
              <img src="./assets/icons/brain.png" class="w-10 h-10 md:w-16 md:h-16 text-white mb-2 sm:mb-0 shrink-0" alt="">
              <div>
                <span class="block text-lg md:text-xl font-medium text-white">1000+</span>
                <span class="text-xs md:text-lg text-white/90 leading-tight block">Neuro Surgeries</span>
              </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center sm:space-x-2 text-center sm:text-left">
              <img src="./assets/icons/knife.png" class="w-10 h-10 md:w-16 md:h-16 text-white mb-2 sm:mb-0 shrink-0" alt="">
              <div>
                <span class="block text-lg md:text-xl font-medium text-white">20k+</span>
                <span class="text-xs md:text-lg text-white/90 leading-tight block">General Surgeries</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>




  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
        <!-- Modal header -->
        <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
          <h3 class="text-lg font-medium text-heading">
            Terms of Service
          </h3>
          <button type="button" class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <!-- Modal body -->
        <div class="space-y-4 md:space-y-6 py-4 md:py-6">
          <p class="leading-relaxed text-body">
            With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
          </p>
          <p class="leading-relaxed text-body">
            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
          </p>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center border-t border-default space-x-4 pt-4 md:pt-5">
          <button data-modal-hide="default-modal" type="button" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">I accept</button>
          <button data-modal-hide="default-modal" type="button" class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Decline</button>
        </div>
      </div>
    </div>
  </div>



  <!-- OVERLAY -->
  <div id="overlay"
    class="fixed inset-0 bg-black/60 z-40 hidden">
  </div>

  <!-- POPUP CONTAINER -->
  <div id="popupDialog"
    class="fixed inset-0 z-50 hidden flex items-center justify-center p-4">

    <!-- Card -->
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-w-3xl relative">

      <!-- Close Button -->
      <button onclick="closePopup()"
        class="absolute right-4 top-4 text-gray-400 hover:text-gray-600 text-3xl leading-none">
        &times;
      </button>

      <div class="flex flex-col md:flex-row">

        <!-- Image -->
        <div class="md:w-[360px] md:h-[420px]">
          <img
            src="./assets/genrated-image.png"
            class="w-full h-full object-cover"
            alt="Doctor" />
        </div>

        <!-- Form Section -->
        <div class="px-6 md:px-8 py-6 flex items-center md:h-[420px]">
          <div class="w-full">

            <p class="text-xs font-semibold tracking-[0.15em] text-gray-500 uppercase">
              Talk to our <span class="text-[#F97316]">Health Advisor</span>
            </p>

            <form class="mt-5 space-y-4">

              <!-- Full Name -->
              <div class="flex flex-col gap-1">
                <label class="text-sm font-medium text-gray-700">
                  Full Name<span class="text-red-500">*</span>
                </label>
                <input
                  type="text"
                  class="h-10 w-full rounded-lg border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316]"
                  placeholder="Enter your full name" />
              </div>

              <!-- Email -->
              <div class="flex flex-col gap-1">
                <label class="text-sm font-medium text-gray-700">
                  Email<span class="text-red-500">*</span>
                </label>
                <input
                  type="email"
                  class="h-10 w-full rounded-lg border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316]"
                  placeholder="Enter your email" />
              </div>

              <!-- Mobile -->
              <div class="flex flex-col gap-1">
                <label class="text-sm font-medium text-gray-700">
                  Mobile Number<span class="text-red-500">*</span>
                </label>

                <div class="flex gap-2">
                  <!-- Country Code -->
                  <select
                    class="h-10 w-24 rounded-lg border border-gray-300 px-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316]">
                    <option value="+91">+91 IN</option>
                    <option value="+1">+1 US</option>
                    <option value="+44">+44 UK</option>
                  </select>

                  <!-- Number -->
                  <input
                    type="tel"
                    class="h-10 flex-1 rounded-lg border border-gray-300 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#F97316]"
                    placeholder="Enter your mobile number" />
                </div>
              </div>

              <!-- Checkbox -->
              <label class="flex items-start gap-2 text-xs text-gray-600 cursor-pointer">
                <input type="checkbox"
                  class="mt-[3px] h-4 w-4 rounded border-gray-300 text-[#F97316] focus:ring-[#F97316]" />
                <span>I consent maxX hospitals to contact me</span>
              </label>

              <!-- Button -->
              <button
                class="mt-2 w-full h-10 rounded-lg bg-[#F97316] text-white text-sm font-semibold shadow hover:bg-[#ea6a0e] transition">
                Request a Call Back
              </button>

            </form>

          </div>
        </div>

      </div>

    </div>
  </div>

  <script>
    function openPopup() {
      document.getElementById("overlay").classList.remove("hidden");
      document.getElementById("popupDialog").classList.remove("hidden");
    }

    function closePopup() {
      document.getElementById("overlay").classList.add("hidden");
      document.getElementById("popupDialog").classList.add("hidden");
    }
  </script>

  <script>
    document.getElementById("searchBtn").addEventListener("click", function() {
      const specialty = document.getElementById("specialtySelect").value;
      const doctor = document.getElementById("doctorSelect").value;


      if (doctor) {
        window.location.href = doctor;
        return;
      }

      if (specialty) {
        window.location.href = specialty;
        return;
      }

      alert("Please select a specialty or a doctor.");
    });
  </script>




  <!-- <section class="mx-auto max-w-7xl px-4 py-10">

    <h2 class="text-center text-xl md:text-2xl font-semibold text-[#6C3130] mb-6">
      Happy Patients, Happy Stories
    </h2>


    <div
      class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-10">
 
      <div class="shrink-0 w-[260px] md:w-72">
        <img
          src="./assets/testimonials.png"
          alt="Patient Testimonial"
          class="w-full h-auto rounded-2xl shadow-md object-cover" />
      </div>

  
      <div class="shrink-0 w-[260px] md:w-72">
        <img
          src="./assets/testimonials/image 32.png"
          alt="Patient Testimonial"
          class="w-full h-auto rounded-2xl shadow-md object-cover" />
      </div>


      <div class="shrink-0 w-[260px] md:w-72">
        <img
          src="./assets/testimonials/image 33.png"
          alt="Patient Testimonial"
          class="w-full h-auto rounded-2xl shadow-md object-cover" />
      </div>


      <div class="shrink-0 w-[260px] md:w-72">
        <img
          src="./assets/testimonials/image 34.png"
          alt="Patient Testimonial"
          class="w-full h-auto rounded-2xl shadow-md object-cover" />
      </div>
    </div>

  </section> -->







  <section class="max-w-7xl mx-auto">

    <div class="max-w-4xl mx-auto text-center ">

      <!-- Heading -->
      <h2 class="text-2xl font-semibold">
        <span class="text-[#6C3130]">Real Patients,</span>
        <span class="text-brand"> Real Stories</span>
      </h2>

      <!-- Tabs -->


    </div>
    <div class="grid md:grid-cols-3 grid-cols-1 justify-items-center gap-10 mt-5 lg:px-0 px-5 ">


      <div class="max-w-sm rounded overflow-hidden shadow-lg">

        <div class="w-full relative p-5">
          <!-- Gradient Overlay -->

          <!-- Image -->
          <img class="w-full h-full object-cover rounded-2xl " src="./assets/testimonial.png" alt="Sunset in the mountains">

          <!-- Title -->

        </div>

        <div class="px-6 py-4 flex gap-5">

          <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
          <p class="text-[#525252] text-xl  font-medium ">
            Successful Heart and lungs Treatment by Our Doctor
          </p>
        </div>

      </div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg">

        <div class="w-full relative p-5">
          <!-- Gradient Overlay -->

          <!-- Image -->
          <img class="w-full h-full object-cover rounded-2xl " src="./assets/testimonial.png" alt="Sunset in the mountains">

          <!-- Title -->

        </div>

        <div class="px-6 py-4 flex gap-5">

          <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
          <p class="text-[#525252] text-xl  font-medium ">
            Successful Heart and lungs Treatment by Our Doctor
          </p>
        </div>

      </div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg">

        <div class="w-full relative p-5">
          <!-- Gradient Overlay -->

          <!-- Image -->
          <img class="w-full h-full object-cover rounded-2xl " src="./assets/testimonial.png" alt="Sunset in the mountains">

          <!-- Title -->

        </div>

        <div class="px-6 py-4 flex gap-5">

          <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
          <p class="text-[#525252] text-xl  font-medium ">
            Successful Heart and lungs Treatment by Our Doctor
          </p>
        </div>

      </div>
    </div>


  </section>



  <section>
    <h2 class="text-2xl font-semibold text-center pt-10">
      <span class="text-[#6C3130]">Hear From Us</span>
      <span class="text-brand">To Stay Healthy</span>
    </h2>



    <div class="flex justify-center pt-10 gap-10 flex-wrap">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/qm7WG4GhBe0?si=OFtzKummv-3lsChb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/4mJgzujgE18?si=yeEK_jKYebkbgea9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
  </section>





  <section class="max-w-7xl mx-auto mt-10">

    <div class="max-w-4xl mx-auto text-center">

      <!-- Heading -->
      <h2 class="text-2xl font-semibold">
        <span class="text-[#6C3130]">Explore</span>
        <span class="text-brand">Our Health Blogs</span>
      </h2>

      <!-- Tabs -->
      <div class="flex justify-center gap-10 mt-6 text-brand text-lg font-medium">

        <!-- Active Tab -->
        <button class="px-5 py-2 bg-brand text-white rounded-full">
          Sucess Stories
        </button>

        <!-- Inactive Tabs -->
        <button class="hover:text-[#c45d16] transition border border-[#c45d16] p-3 rounded-full">Blogs from Our Experts</button>


      </div>

    </div>
    <div class="grid md:grid-cols-3 grid-cols-1 justify-items-center gap-10 mt-5 lg:px-0 px-5 ">


      <div class="max-w-sm rounded overflow-hidden shadow-lg">

        <div class="w-full relative">
          <!-- Gradient Overlay -->
          <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>

          <!-- Image -->
          <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">

          <!-- Title -->
          <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
            Angioplasty
          </p>
        </div>

        <div class="px-6 py-4">
          <div class=" text-xl font-medium mb-2 text-[#525252]">Successful Heart and Kidney Treatment by Our Doctor
          </div>
          <div class="flex items-center  pt-10 gap-5 ">
            <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
            <p class="text-[#6C3130] text-xl  font-medium ">
              Patient Recovery Story </p>
          </div>
        </div>

      </div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg">

        <div class="w-full relative">
          <!-- Gradient Overlay -->
          <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>

          <!-- Image -->
          <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">

          <!-- Title -->
          <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
            Angioplasty
          </p>
        </div>

        <div class="px-6 py-4">
          <div class=" text-xl font-medium mb-2 text-[#525252]">Successful Heart and Kidney Treatment by Our Doctor
          </div>
          <div class="flex items-center  pt-10 gap-5 ">
            <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
            <p class="text-[#6C3130] text-xl  font-medium ">
              Patient Recovery Story </p>
          </div>
        </div>

      </div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg">

        <div class="w-full relative">
          <!-- Gradient Overlay -->
          <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>

          <!-- Image -->
          <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">

          <!-- Title -->
          <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
            Angioplasty
          </p>
        </div>

        <div class="px-6 py-4">
          <div class=" text-xl font-medium mb-2 text-[#525252]">Successful Heart and Kidney Treatment by Our Doctor
          </div>
          <div class="flex items-center  pt-10 gap-5 ">
            <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
            <p class="text-[#6C3130] text-xl  font-medium ">
              Patient Recovery Story </p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="xl:max-w-[1500px] max-w-7xl mx-auto px-4 py-16 font-poppins pt-24">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-[#A85045]">
        At maAx Hospitals, <span class="text-orange-500">Get Better in 3 Easy Steps</span>
      </h2>
    </div>

    <div class="relative  bg-transparent md:bg-[#FFDCC2] rounded-3xl">

      <div class="absolute inset-0 overflow-visible md:overflow-hidden rounded-3xl z-0 pointer-events-none">
        <div class="absolute bg-[#E89F85] opacity-50 md:opacity-30 rounded-full 
                      w-72 h-72 top-4 left-1/2 -translate-x-1/2 
                      md:w-80 md:h-80 md:top-auto md:left-auto md:translate-x-0 md:-bottom-10 md:-right-10 z-0">
        </div>
      </div>

      <div class="relative z-10 flex flex-col md:flex-row items-center md:items-center lg:items-end justify-between px-0 md:px-6 lg:px-10 pt-0 md:pt-14 pb-0 md:pb-0">

        <div class="w-full md:w-3/5 xl:w-1/2 space-y-6 order-2 md:order-1 pb-0 md:pb-14 mt-12 md:mt-0 px-4 md:px-0">

          <div class="bg-white p-5 rounded-xl shadow-md border border-gray-100 flex items-start gap-5 w-full md:max-w-md transition-transform hover:-translate-y-1 duration-300">
            <div class="bg-[#D66A6A] text-white text-3xl font-bold w-12 h-12 flex items-center justify-center rounded-lg shrink-0 leading-none">
              1
            </div>
            <div>
              <h3 class="font-bold text-xl text-gray-800">
                Get the <span class="text-orange-500">Right Diagnosis</span>
              </h3>
              <p class="text-gray-500 text-sm mt-1 leading-relaxed">
                Clear, accurate answers you can trust to understand your condition
              </p>
            </div>
          </div>

          <div class="bg-white p-5 rounded-xl shadow-md border border-gray-100 flex items-start gap-5 w-full md:max-w-md md:ml-6 lg:ml-12 xl:ml-28 transition-transform hover:-translate-y-1 duration-300">
            <div class="bg-[#A85045] text-white text-3xl font-bold w-12 h-12 flex items-center justify-center rounded-lg shrink-0 leading-none">
              2
            </div>
            <div>
              <h3 class="font-bold text-lg text-gray-800">
                Get the <span class="text-orange-500">Right Treatment & Cost</span>
              </h3>
              <p class="text-gray-500 text-sm mt-1 leading-relaxed">
                Clear, accurate answers you can trust to understand your condition
              </p>
            </div>
          </div>

          <div class="bg-white p-5 rounded-xl shadow-md border border-gray-100 flex items-start gap-5 w-full md:max-w-md md:ml-12 lg:ml-24 xl:ml-60 transition-transform hover:-translate-y-1 duration-300">
            <div class="bg-[#5D3333] text-white text-3xl font-bold w-12 h-12 flex items-center justify-center rounded-lg shrink-0 leading-none">
              3
            </div>
            <div>
              <h3 class="font-bold text-lg text-gray-800">
                Get the <span class="text-orange-500">Right Care for Recovery</span>
              </h3>
              <p class="text-gray-500 text-sm mt-1 leading-relaxed">
                Clear, accurate answers you can trust to understand your condition
              </p>
            </div>
          </div>

        </div>

        <div class="w-full md:w-2/5 xl:w-5/12 flex justify-center md:justify-end relative order-1 md:order-2 z-20">
          <img src="./assets/3-steps-image.png"
            alt="Doctor and Patient"
            class="w-auto h-auto 
                            max-w-[280px] md:max-w-[300px] lg:max-w-[450px] xl:max-w-[650px] 
                            object-contain 
                            md:-mt-16 lg:-mt-24 xl:-mt-32">
        </div>

      </div>
    </div>
  </section>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      // Global settings:
      disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
      initClassName: 'aos-init', // class applied after initialization
      animatedClassName: 'aos-animate', // class applied on animation
      useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
      disableMutationObserver: false, // disables automatic mutations' detections (advanced)
      debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
      throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


      // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      offset: 120, // offset (in px) from the original trigger point
      delay: 0, // values from 0 to 3000, with step 50ms
      duration: 400, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
  </script>



  <?php require "./demo.php" ?>




</body>

</html>