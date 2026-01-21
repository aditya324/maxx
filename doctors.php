<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-surface-soft font-sans">
    <?php require "./header.php" ?>






    <section class="py-10">
        <!-- Doctor Cards -->
        <div
            id="doctorCards"
            class="flex flex-wrap justify-center gap-x-5 gap-y-5 px-10">
        </div>

        <!-- View All Button -->
        <div class="w-full flex justify-center mt-5">
            <button
                class="flex justify-center items-center gap-2 border border-[#f28c28]
             text-[#f28c28] px-5 py-2 rounded-full font-medium text-xl
             hover:bg-[#fff7ef] transition">
                View All
                <span class="text-lg">→</span>
            </button>
        </div>
    </section>





    <!-- <section>
        <div class="max-w-4xl mx-auto text-center">


            <h2 class="text-2xl font-semibold">
                <span class="text-[#6C3130]">Explore</span>
                <span class="text-brand">Our Specialities</span>
            </h2>


            <div class="flex justify-center gap-10 mt-6 text-brand text-lg font-medium">


                <button class="px-5 py-2 bg-brand text-white rounded-full">
                    Specialities
                </button>


                <button class="hover:text-[#c45d16] transition">Procedures</button>
                <button class="hover:text-[#c45d16] transition">Diagnostics</button>

            </div>

        </div>
        <section class="w-full py-10">
            <div class="max-w-md mx-auto">

                <div class="w-[400px] h-[600px] bg-white rounded-[10px] shadow-[0_10px_30px_rgba(15,23,42,0.08)] overflow-hidden flex flex-col">


                    <div class="relative w-full h-[260px]">

                        <img
                            src="./assets/elderly-consultation.php.jpg"
                            alt="Patient & Doctor"
                            class="w-full h-full object-cover z-0" />


                        <div class="absolute inset-y-0 right-10 w-2/5 bg-orange-500 z-100"></div>


                        <div
                            class="absolute left-1/2 -translate-x-1/2 top-6 bg-white px-5 py-1.5 rounded-full shadow text-sm font-semibold text-orange-500 z-30">
                            Angioplasty
                        </div>
                    </div>


                    <div class="flex-1 px-6 pt-8 pb-6 flex flex-col justify-between">
                        <h3 class="text-lg font-semibold leading-relaxed text-[#111827]">
                            Successful Heart and Kidney Treatment by Our Doctor
                        </h3>

                        <button
                            class="mt-8 inline-flex items-center gap-2 font-semibold text-orange-500">
                            <span class="text-xl leading-none">➤</span>
                            <span>Patient Recovery Story</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>



    </section> -->


    <script>
        const doctors = [{
                "name": "Dr. Prasanna Basavarajappa",
                "degree": "MBBS, MS, MCh (Plastic Surgery)",
                "designation": "Consultant – Cosmetic Surgery",
                "specialty": "Plastic & Reconstructive Surgery",
                "image": "./assets/doctors/Dr Prasanna Basavarajappa.webp"
            },
            {
                "name": "Dr. Narayan Panji",
                "degree": "MBBS, DNB, MS, MCh (Neurosurgery)",
                "designation": "Chief Consultant – Neurosurgery",
                "specialty": "Neurosurgery",
                "image": "./assets/doctors/Dr Narayan Panji.webp"
            },
            {
                "name": "Dr. Manjunath P. Hasalkar",
                "degree": "MBBS, MD, DM (Cardiology)",
                "designation": "Interventional Cardiologist",
                "specialty": "Cardiology",
                "image": "./assets/doctors/Dr Manjunath A Phasalkar.webp"
            },
            {
                "name": "Dr. Akshay Pai",
                "degree": "MBBS, MS, MCh (Plastic Surgery)",
                "designation": "Plastic & Reconstructive Surgeon",
                "specialty": "Plastic Surgery",
                "image": "./assets/doctors/Dr Akshay Pai.webp"
            },
            {
                "name": "Dr. Shonali Manjunath",
                "degree": "MBBS, MS (OBG)",
                "designation": "Consultant – Infertility & Laparoscopy",
                "specialty": "Obstetrics & Gynecology",
                "image": "/images/doctors/dr-shonali-manjunath.jpg"
            },
            {
                "name": "Dr. Praveenkumar Devarabatti",
                "degree": "MBBS, MD (Endocrinology)",
                "designation": "Consultant – Endocrinology",
                "specialty": "Endocrinology",
                "image": "/images/doctors/dr-praveenkumar-devarabatti.jpg"
            },
            {
                "name": "Dr. Arun S",
                "degree": "MBBS, DNB (Neurosurgery)",
                "designation": "Consultant – Neurosurgery",
                "specialty": "Neurosurgery",
                "image": "/images/doctors/dr-arun-s.jpg"
            },
            {
                "name": "Dr. S. Nagendra",
                "degree": "MBBS, MD (Internal Medicine)",
                "designation": "Consultant – Internal Medicine",
                "specialty": "Internal Medicine",
                "image": "/images/doctors/dr-s-nagendra.jpg"
            },
            {
                "name": "Dr. Shreyas M",
                "degree": "MBBS, MS (Endocrine Surgery)",
                "designation": "Consultant – Endocrine Surgery",
                "specialty": "Endocrine Surgery",
                "image": "/images/doctors/dr-shreyas-m.jpg"
            },
            {
                "name": "Dr. Sudheer M Bhat",
                "degree": "MBBS, MS, MCh (CTVS)",
                "designation": "Consultant – CTVS",
                "specialty": "Cardio Thoracic Surgery",
                "image": "/images/doctors/dr-sudheer-m-bhat.jpg"
            },
            {
                "name": "Dr. Shishir S M",
                "degree": "MBBS, DNB, MS (Ortho)",
                "designation": "Consultant – Orthopedics",
                "specialty": "Orthopedics",
                "image": "/images/doctors/dr-shishir-sm.jpg"
            },
            {
                "name": "Dr Aniruddha Udupi K",
                "degree": "MBBS, MD (Pulmonology)",
                "designation": "Chief Consultant – Pulmonology",
                "specialty": "Pulmonology",
                "image": "/images/doctors/dr-aniruddha-udupi-k.jpg"
            },
            {
                "name": "Dr Sreenivas Hatwar",
                "degree": "MBBS, MD (Pediatrics)",
                "designation": "Consultant – Pediatrician",
                "specialty": "Pediatrics",
                "image": "/images/doctors/dr-sreenivas-hatwar.jpg"
            },
            {
                "name": "Dr Swathi V C",
                "degree": "MBBS, MD (Anaesthesia)",
                "designation": "Consultant – Intensive Care",
                "specialty": "Anaesthesiology",
                "image": "/images/doctors/dr-swathi-vc.jpg"
            },
            {
                "name": "Dr Rohit Kauser",
                "degree": "MBBS, MD (Anaesthesia)",
                "designation": "Consultant – Anaesthesia",
                "specialty": "Anaesthesiology",
                "image": "/images/doctors/dr-rohit-kauser.jpg"
            },
            {
                "name": "Dr Laxmi K S Murthy",
                "degree": "MBBS, MS (Ophthalmology)",
                "designation": "Pediatric & Squint Ophthalmologist",
                "specialty": "Ophthalmology",
                "image": "/images/doctors/dr-laxmi-ks-murthy.jpg"
            },
            {
                "name": "Dr Anubhav Jannu",
                "degree": "MBBS, MDS",
                "designation": "Consultant – Oral & Maxillofacial Surgeon",
                "specialty": "Maxillofacial Surgery",
                "image": "/images/doctors/dr-anubhav-jannu.jpg"
            },
            {
                "name": "Dr Sukruth P Patel",
                "degree": "MBBS, MS (Ortho), FIASM, FIJR",
                "designation": "Consultant – Orthopedics",
                "specialty": "Orthopedics",
                "image": "/images/doctors/dr-sukruth-p-patel.jpg"
            },
            {
                "name": "Dr Arun Kumar Mareka",
                "degree": "MBBS, MD (Radiodiagnosis)",
                "designation": "Consultant – Radiologist",
                "specialty": "Radiology",
                "image": "/images/doctors/dr-arun-kumar-mareka.jpg"
            },
            {
                "name": "Dr Dayanand A S",
                "degree": "MBBS, MD, DNB (Nephrology)",
                "designation": "Chief Consultant – Nephrology",
                "specialty": "Nephrology",
                "image": "/images/doctors/dr-dayanand-as.jpg"
            },
            {
                "name": "Dr Pooja Shah",
                "degree": "MBBS, MD (Anaesthesia)",
                "designation": "Consultant – Intensive Care",
                "specialty": "Anaesthesiology",
                "image": "/images/doctors/dr-pooja-shah.jpg"
            },
            {
                "name": "Dr Vidya B U",
                "degree": "MBBS, MD, DM (Neurology)",
                "designation": "Consultant – Neonatal Neurology",
                "specialty": "Neurology",
                "image": "/images/doctors/dr-vidya-bu.jpg"
            },
            {
                "name": "Dr Vangara Susmitha",
                "degree": "MBBS, MS (OBG)",
                "designation": "Consultant – Obstetrics & Gynecology",
                "specialty": "Obstetrics & Gynecology",
                "image": "/images/doctors/dr-vangara-susmitha.jpg"
            },
            {
                "name": "Dr Monika S Tashildar",
                "degree": "MBBS, DVL",
                "designation": "Consultant – Dermatology",
                "specialty": "Dermatology",
                "image": "/images/doctors/dr-monika-tashildar.jpg"
            },
            {
                "name": "Dr Rakesh Bisalahalli",
                "degree": "MBBS, MS, DNB (Urology)",
                "designation": "Consultant – Urologist",
                "specialty": "Urology",
                "image": "/images/doctors/dr-rakesh-bisalahalli.jpg"
            },
            {
                "name": "Dr Lata R Telang",
                "degree": "MBBS, DGO, MBA",
                "designation": "Consultant – Obstetrics & Gynecology",
                "specialty": "Obstetrics & Gynecology",
                "image": "/images/doctors/dr-lata-telang.jpg"
            },
            {
                "name": "Dr Sunil Kumar K P",
                "degree": "MBBS, MS (General Surgery)",
                "designation": "Consultant – General Surgery",
                "specialty": "General Surgery",
                "image": "/images/doctors/dr-sunil-kumar-kp.jpg"
            },
            {
                "name": "Dr Lohith S",
                "degree": "MBBS, MS, DNB (ENT)",
                "designation": "Consultant – Head & Neck Surgery",
                "specialty": "ENT",
                "image": "/images/doctors/dr-lohith-s.jpg"
            }
        ]



        const container = document.getElementById("doctorCards");

        container.innerHTML = doctors.map(doc => `
  <div class="relative w-[400px] h-[300px] rounded-[20px]
              border border-[#e4d5c6] p-5 shadow-sm bg-white
              flex flex-col justify-between">

    <div class="flex items-center gap-4">
      <div class="w-20 h-20 rounded-full border-[3px] border-orange-500 overflow-hidden">
        <img src="/doctor.jpg" class="w-full h-full object-cover" />
      </div>

      <div>
        <h3 class="text-[18px] font-semibold text-[#5c2c20] leading-snug">
          ${doc.name}
        </h3>
        <p class="text-gray-600 text-sm mt-1">${doc.degree}</p>
        <p class="text-orange-600 font-semibold text-base mt-1">
          ${doc.specialty}
        </p>
      </div>
    </div>

    <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
      <button class="bg-[#582F28] text-white py-3 text-sm font-medium">
        View Profile
      </button>
      <button class="bg-white text-orange-600 py-3 text-sm font-semibold">
        Book Appointment
      </button>
    </div>
  </div>
`).join("");
    </script>



</body>

</html>