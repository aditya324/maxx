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

    <!-- 1. Anaesthesia -->
    <a href="./anaesthesia.php">
      <div
      class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
      data-name="Anaesthesia">
      <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
      <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">Anaesthesia</h3>
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





    <!-- ==== SCRIPT (tabs + A–Z filter) ==== -->
 





















</body>

</html>