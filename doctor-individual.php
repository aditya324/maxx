<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-surface-soft font-sans">
    <?php require "./header.php" ?>

    <section class="w-full py-12 lg:py-28 px-4 sm:px-8 ">
        <div
            class="mx-auto rounded-2xl p-4 lg:p-8 flex flex-col lg:flex-row flex-wrap gap-8 lg:gap-10">
            <!-- LEFT : DOCTOR IMAGE + BUTTON -->
            <div class="flex flex-col items-center lg:items-start gap-5 w-full lg:w-[30%]">
                <div
                    class="w-full max-w-[493px] h-auto lg:h-[493px] rounded-xl overflow-hidden shadow-md">
                    <img
                        src="./assets/doctor-individual.jpg"
                        alt="Doctor"
                        class="w-full h-full object-cover" />
                </div>

                <button
                    class="w-full max-w-[493px] h-12 rounded-lg bg-[#F58220] text-white font-semibold tracking-wide shadow hover:brightness-110 transition">
                    Request Call back
                </button>
            </div>

            <!-- MIDDLE : DOCTOR DETAILS -->
            <div class="flex flex-col gap-3 w-full lg:w-[40%]">
                <h2 class="text-xl lg:text-2xl font-semibold text-[#874746]">
                    Dr Subhash S H
                </h2>
                <p class="text-sm lg:text-base text-gray-700">
                    Lead Consultant - Medical Oncologist
                </p>

                <div class="space-y-4 lg:space-y-5 text-sm lg:text-lg text-gray-700">
                    <p>
                        <span class="font-semibold text-[#874746]">Qualification:</span> <br />
                        MBBS, MD (General Medicine), DM (Medical Oncology), FRCP (Edin.)
                    </p>

                    <p>
                        <span class="font-semibold text-[#874746]">Years of Practice:</span>
                        <br />
                        20
                    </p>

                    <p>
                        <span class="font-semibold text-[#874746]">Specialities:</span> <br />
                        Oncology, Medical Oncology
                    </p>

                    <p>
                        <span class="font-semibold text-[#874746]">Location:</span> <br />
                        RMR Road, Durgigudi Shivamogga
                    </p>

                    <p>
                        <span class="font-semibold text-[#874746]">Languages Spoken:</span>
                        <br />
                        English, Hindi, Kannada, Malayalam
                    </p>
                </div>
            </div>

            <!-- RIGHT : APPOINTMENT FORM -->
            <div
                class="w-full lg:w-[20%] lg:h-[460px] bg-white border border-gray-100 rounded-2xl shadow-[0_10px_30px_rgba(15,23,42,0.08)] p-5 lg:p-6 space-y-5">
                <h3 class="text-lg lg:text-xl font-semibold text-center text-[#D2691E]">
                    Book An Appointment
                </h3>

                <form class="space-y-4 lg:space-y-7">
                    <input
                        type="text"
                        placeholder="Full Name*"
                        class="w-full h-11 rounded-lg border border-gray-300 px-3 text-sm focus:border-[#F58220] focus:ring-1 focus:ring-[#F58220]" />

                    <input
                        type="email"
                        placeholder="Email*"
                        class="w-full h-11 rounded-lg border border-gray-300 px-3 text-sm focus:border-[#F58220] focus:ring-1 focus:ring-[#F58220]" />

                    <div class="flex flex-col sm:flex-row gap-2">
                        <select
                            class="w-full sm:w-28 h-11 rounded-lg border border-gray-300 px-2 text-sm focus:border-[#F58220] focus:ring-1 focus:ring-[#F58220]">
                            <option value="+91">+91 IN</option>
                        </select>

                        <input
                            type="tel"
                            placeholder="Mobile Number*"
                            class="flex-1 w-full h-11 rounded-lg border border-gray-300 px-3 text-sm focus:border-[#F58220] focus:ring-1 focus:ring-[#F58220]" />
                    </div>

                    <label class="flex items-start gap-2 text-xs text-gray-600">
                        <input type="checkbox" class="mt-0.5 h-4 w-4" />
                        <span>I consent max4 hospitals to contact me</span>
                    </label>

                    <button
                        type="submit"
                        class="w-full h-11 rounded-lg bg-[#7B2626] text-white font-semibold text-sm shadow hover:brightness-110 transition">
                        Book Now
                    </button>
                </form>
            </div>
        </div>
    </section>

<div class=" w-full   px-6 sm:px-8    rounded-xl   overflow-hidden " >

  <!-- ITEM 1 -->
  <details class="group border-b border-gray-200">
    <summary
      class="flex items-center gap-4 cursor-pointer py-4 px-6 list-none select-none"
    >
      <img src="./icons/about.svg" class="w-6 h-6" />
      <span class="text-lg text-gray-800 font-medium">About</span>

      <!-- Arrow -->
      <svg
        class="ml-auto w-5 h-5 text-gray-500 transition-transform group-open:rotate-180"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        viewBox="0 0 24 24"
      >
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M19 9l-7 7-7-7"></path>
      </svg>
    </summary>

    <div class="px-6 pb-4 text-gray-600">
      Your "About" content goes here...
    </div>
  </details>

  <!-- ITEM 2 -->
  <details class="group border-b border-gray-200">
    <summary class="flex items-center gap-4 cursor-pointer py-4 px-6 list-none select-none">
      <img src="./icons/expertise.svg" class="w-6 h-6" />
      <span class="text-lg text-gray-800 font-medium">Expertise</span>

      <svg
        class="ml-auto w-5 h-5 text-gray-500 transition-transform group-open:rotate-180"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        viewBox="0 0 24 24"
      >
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M19 9l-7 7-7-7"></path>
      </svg>
    </summary>

    <div class="px-6 pb-4 text-gray-600">
      Expertise content here...
    </div>
  </details>

  <!-- ITEM 3 -->
  <details class="group border-b border-gray-200">
    <summary class="flex items-center gap-4 cursor-pointer py-4 px-6 list-none select-none">
      <img src="./icons/training.svg" class="w-6 h-6" />
      <span class="text-lg text-gray-800 font-medium">Training and Certifications</span>

      <svg
        class="ml-auto w-5 h-5 text-gray-500 transition-transform group-open:rotate-180"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        viewBox="0 0 24 24"
      >
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M19 9l-7 7-7-7"></path>
      </svg>
    </summary>

    <div class="px-6 pb-4 text-gray-600">
      Training and certification content...
    </div>
  </details>

  <!-- ITEM 4 -->
  <details class="group border-b border-gray-200">
    <summary class="flex items-center gap-4 cursor-pointer py-4 px-6 list-none select-none">
      <img src="./icons/awards.svg" class="w-6 h-6" />
      <span class="text-lg text-gray-800 font-medium">Awards and Recognitions</span>

      <svg
        class="ml-auto w-5 h-5 text-gray-500 transition-transform group-open:rotate-180"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        viewBox="0 0 24 24"
      >
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M19 9l-7 7-7-7"></path>
      </svg>
    </summary>

    <div class="px-6 pb-4 text-gray-600">
      Awards content...
    </div>
  </details>

  <!-- ITEM 5 -->
  <details class="group border-b border-gray-200">
    <summary class="flex items-center gap-4 cursor-pointer py-4 px-6 list-none select-none">
      <img src="./icons/interest.svg" class="w-6 h-6" />
      <span class="text-lg text-gray-800 font-medium">Area of Interest</span>

      <svg
        class="ml-auto w-5 h-5 text-gray-500 transition-transform group-open:rotate-180"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        viewBox="0 0 24 24"
      >
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M19 9l-7 7-7-7"></path>
      </svg>
    </summary>

    <div class="px-6 pb-4 text-gray-600">
      Area of interest content...
    </div>
  </details>

  <!-- ITEM 6 -->
  <details class="group">
    <summary class="flex items-center gap-4 cursor-pointer py-4 px-6 list-none select-none">
      <img src="./icons/research.svg" class="w-6 h-6" />
      <span class="text-lg text-gray-800 font-medium">Publications and Research</span>

      <svg
        class="ml-auto w-5 h-5 text-gray-500 transition-transform group-open:rotate-180"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        viewBox="0 0 24 24"
      >
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M19 9l-7 7-7-7"></path>
      </svg>
    </summary>

    <div class="px-6 pb-4 text-gray-600">
      Research content here...
    </div>
  </details>

</div>





</body>