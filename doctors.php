<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-surface-soft font-sans">
    <?php require "./header.php" ?>





    <section class="px-10 py-6">
        <div class="max-w-6xl mx-auto flex items-center gap-4">

            <!-- Search Box -->
            <div class="flex items-center w-full bg-white rounded-full overflow-hidden">

                <!-- Search Icon -->
                <div class="pl-5 pr-3 text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg>
                </div>

                <!-- Input -->
                <input
                    id="searchInput"
                    type="text"
                    placeholder="Search for Doctor"
                    class="flex-1 bg-transparent px-2 py-3 text-gray-700 placeholder-gray-500 focus:outline-none" />

                <!-- Search Button -->
                <button
                    class=" px-8 py-3 rounded-full border border-orange-500 text-white bg-orange-500 font-medium hover:bg-orange-50 transition">
                    Search
                </button>
            </div>

            <!-- Specialty Dropdown -->
            <select
                id="specialtyFilter"
                class="px-6 py-3 rounded-full bg-orange-500 text-white font-medium
                   focus:outline-none cursor-pointer">
                <option value="">All Specialty</option>
            </select>

        </div>
    </section>


    <section class="py-10">
        <!-- Doctor Cards -->
        <div
            id="doctorCards"
            class="flex flex-wrap justify-center gap-x-5 gap-y-5 px-10">
        </div>

        <!-- View All Button -->
        <!-- <div class="w-full flex justify-center mt-5">
            <button
                class="flex justify-center items-center gap-2 border border-[#f28c28]
             text-[#f28c28] px-5 py-2 rounded-full font-medium text-xl
             hover:bg-[#fff7ef] transition">
                View All
                <span class="text-lg">→</span>
            </button>
        </div> -->
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
                "degree": "MBBS, MS, MCh (Surgical Gastro)",
                "designation": "Consultant – Gastroentrologist",
                "specialty": "Surgical Gastroentrology",
                "image": "./assets/doctors/Dr Prasanna Basavarajappa.webp",
                "url": "./dr-prasanna.php"
            },
            {
                "name": "Dr. Narayan Panji",
                "degree": "MBBS, DNB, MS, MCh (Neurosurgery)",
                "designation": "Chief Consultant – Neurosurgery",
                "specialty": "Neurosurgery",
                "image": "./assets/doctors/Dr Narayan Panji.webp",
                "url": "./dr-narayan-panji.php"
            },
            {
                "name": "Dr. Manjunath P. Pasalkar",
                "degree": "MBBS, MD, DM (Cardiology)",
                "designation": "Interventional Cardiologist",
                "specialty": "Cardiology",
                "image": "./assets/doctors/Dr Manjunath A Phasalkar.webp",
                "url": "./dr-manjunath.php"
            },
            {
                "name": "Dr. Akshay Pai",
                "degree": "MBBS, MS, MCh (Plastic Surgery)",
                "designation": "Plastic & Reconstructive Surgeon",
                "specialty": "Plastic Surgery",
                "image": "./assets/doctors/Dr Akshay Pai.webp",
                "url": "./dr-akshey.php"
            },
            {
                "name": "Dr. Shonali Manjunath",
                "degree": "MBBS, MS (OBG)",
                "designation": "Consultant – Infertility & Laparoscopy",
                "specialty": "Obstetrics & Gynecology",
                "image": "./assets/doctors/Dr Shonali Manjunath.webp",
                "url": "./dr-shonali.php"
            },
            {
                "name": "Dr. Praveenkumar Devarabhavi",
                "degree": "MBBS, MD (Endocrinology)",
                "designation": "Consultant – Endocrinology",
                "specialty": "Endocrinology",
                "image": "./assets/doctors/Dr Praveenkumar Devarabhavi.webp",
                "url":"./dr-praveen.php"
            
            },
            {
                "name": "Dr. Arun S",
                "degree": "MBBS, DNB (Neurosurgery)",
                "designation": "Consultant – Neurosurgery",
                "specialty": "Neurosurgery",
                "image": "./assets/doctors/Dr Arun S.webp",
                "url":"./dr-arun.php"
            },
            {
                "name": "Dr. S. Nagendra",
                "degree": "MBBS, MD (Internal Medicine)",
                "designation": "Consultant – Internal Medicine",
                "specialty": "Internal Medicine",
                "image": "./assets/doctors/Dr S Nagendra.webp",
                "url":"./dr-nagendra.php"
            },
            {
                "name": "Dr Shreyamsa M",
                "degree": "MBBS, MS (Endocrine Surgery)",
                "designation": "Consultant – Endocrine Surgery",
                "specialty": "Endocrine Surgery",
                "image": "./assets/doctors/Dr Shreyamsa M.webp",
                "url":"./dr-shreyamsa.php"
            },
            {
                "name": "Dr. Sudheer M Bhat",
                "degree": "MBBS, MS, MCh (CTVS)",
                "designation": "Consultant – CTVS",
                "specialty": "Cardio Thoracic Surgery",
                "image": "./assets/doctors/Sudheer Bhatt.webp",
                "url":"./dr-sudheer-m-bhat.php"
            },
            {
                "name": "Dr. Shishir S M",
                "degree": "MBBS, DNB, MS (Ortho)",
                "designation": "Consultant – Orthopedics",
                "specialty": "Orthopedics",
                "image": "./assets/doctors/Dr Shishir SM.webp",
                "url":"./dr-shishir.php"
            },
            {
                "name": "Dr Aniruddha Udupa K",
                "degree": "MBBS, MD (Pulmonology)",
                "designation": "Chief Consultant – Pulmonology",
                "specialty": "Pulmonology",
                "image": "./assets/doctors/Dr Anirudha Udupa K.webp",
                "url":"./dr-anirudda.php"
            },
            {
                "name": "Dr Sreenivas Hatwar",
                "degree": "MBBS, MD (Pediatrics)",
                "designation": "Consultant – Pediatrician",
                "specialty": "Pediatrics",
                "image": "./assets/doctors/Dr Sreenivas Hatwar.webp",
                "url":"./dr-srinivas.php"
            },
            {
                "name": "Dr Swathi V C",
                "degree": "MBBS, MD (Anaesthesia)",
                "designation": "Consultant – Intensive Care",
                "specialty": "Anaesthesiology",
                "image": "./assets/doctors/Dr Swathi V.C.webp",
                "url":"./dr-swathi.php"
            },
            {
                "name": "Dr Rouhi Kauser",
                "degree": "MBBS, MD (Anaesthesia)",
                "designation": "Consultant – Anaesthesia",
                "specialty": "Anaesthesiology",
                "image": "./assets/doctors/Dr Rouhi Kauser.webp",
                "url":"./dr-rohit-kauser.php"
            },
            {
                "name": "Dr Laxmi K S Murthy",
                "degree": "MBBS, MS (Ophthalmology)",
                "designation": "Pediatric & Squint Ophthalmologist",
                "specialty": "Ophthalmology",
                "image": "./assets/doctors/Dr Laxmi K.S. Murthy.webp",
                "url":"./dr-laxmi.php"
            },
            {
                "name": "Dr Anubhav Jannu",
                "degree": "MBBS, MDS",
                "designation": "Consultant – Oral & Maxillofacial Surgeon",
                "specialty": "Maxillofacial Surgery",
                "image": "./assets/doctors/Dr Anubhav Jannu.webp",
                "url":"./dr-anubhav.php"
            },
            {
                "name": "Dr Sukruth P Patel",
                "degree": "MBBS, MS (Ortho), FIASM, FIJR",
                "designation": "Consultant – Orthopedics",
                "specialty": "Orthopedics",
                "image": "./assets/doctors/Dr Sukruth P Patel.webp",
                "url":"./dr-sukruth.php"
            },
            {
                "name": "Dr Arun Kumar Mareka",
                "degree": "MBBS, MD (Radiodiagnosis)",
                "designation": "Consultant – Radiologist",
                "specialty": "Radiology",
                "image": "./assets/doctors/Dr Arun Kumar Marekar.webp",
                "url":"./dr-arun-kumar.php"
            },
            {
                "name": "Dr Dayanand A S",
                "degree": "MBBS, MD, DNB (Nephrology)",
                "designation": "Chief Consultant – Nephrology",
                "specialty": "Nephrology",
                "image": "./assets/doctors/Dr Dayanand A S.webp",
                "url":"./dr-dayanand.php"
            },
            {
                "name": "Dr Pooja Shah",
                "degree": "MBBS, MD (Anaesthesia)",
                "designation": "Consultant – Intensive Care",
                "specialty": "Anaesthesiology",
                "image": "./assets/doctors/Dr Pooja Shah.webp",
                "url":"./dr-pooja-shah.php"
            },
            {
                "name": "Dr Vidya B U",
                "degree": "MBBS, MD, DM (Neurology)",
                "designation": "Consultant – Neonatal Neurology",
                "specialty": "Neurology",
                "image": "./assets/doctors/Dr Vidya B U.webp",
                "url":"./dr-vidya.php"
            },
            {
                "name": "Dr Vangara Susmitha",
                "degree": "MBBS, MS (OBG)",
                "designation": "Consultant – Obstetrics & Gynecology",
                "specialty": "Obstetrics & Gynecology",
                "image": "./assets/doctors/Dr Vangara Sushmitha.webp",
                "url":"./dr-vangera.php"
            },
            {
                "name": "Dr Monika S Tashildar",
                "degree": "MBBS, DVL",
                "designation": "Consultant – Dermatology",
                "specialty": "Dermatology",
                "image": "./assets/doctors/Dr Monika B Tahasildar.webp",
                "url":"./dr-monika.php"
            },
            {
                "name": "Dr Rakesh Bisalahalli",
                "degree": "MBBS, MS, DNB (Urology)",
                "designation": "Consultant – Urologist",
                "specialty": "Urology",
                "image": "./assets/doctors/dr-rakesh.webp",
                "url":"./dr-rakesh.php"
            },
            {
                "name": "Dr Lata R Telang",
                "degree": "MBBS, DGO, MBA",
                "designation": "Consultant – Obstetrics & Gynecology",
                "specialty": "Obstetrics & Gynecology",
                "image": "./assets/doctors/dr-lata.webp",
                "url":"./dr-lata.php"
            },
            {
                "name": "Dr Sunil Kumar K P",
                "degree": "MBBS, MS (General Surgery)",
                "designation": "Consultant – General Surgery",
                "specialty": "General Surgery",
                "image": "./assets/doctors/Dr Sunil Kumar K.P.webp",
                "url":"./dr-sunil.php"
            },
            {
                "name": "Dr Lohith S",
                "degree": "MBBS, MS, DNB (ENT)",
                "designation": "Consultant – Head & Neck Surgery",
                "specialty": "ENT",
                "image": "./assets/doctors/dr-lohit.webp",
                "url":"./dr-lohit.php"
            }
        ]



        const container = document.getElementById("doctorCards");
        const searchInput = document.getElementById("searchInput");
        const specialtyFilter = document.getElementById("specialtyFilter");

        // Populate specialty dropdown (unique values)
        const specialties = [...new Set(doctors.map(d => d.specialty))].sort();
        specialties.forEach(spec => {
            const option = document.createElement("option");
            option.value = spec;
            option.textContent = spec;
            specialtyFilter.appendChild(option);
        });

        function renderDoctors(list) {
            container.innerHTML = list.map(doc => `
            <div class="w-[400px] rounded-[20px] border border-[#e4d5c6] bg-white shadow-md p-6 text-center">

                <div class="flex justify-center -mt-2">
                    <div class="w-36 h-36 rounded-full bg-[#e9ecef] overflow-hidden">
                        <img src="${doc.image}" alt="${doc.name}" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="mt-4">
                    <h3 class="text-[20px] font-semibold text-[#5c2c20] leading-tight">
                        ${doc.name}
                    </h3>

                    <p class="text-gray-700 text-[15px] mt-1">
                        ${doc.degree}
                    </p>

                    <p class="text-orange-500 text-[17px] font-semibold mt-2">
                        ${doc.specialty}
                    </p>
                </div>

                <div class="grid grid-cols-2 rounded-xl overflow-hidden border border-orange-500 mt-6">
                    <a href=${doc.url} class="bg-[#582F28] text-white py-3 text-sm font-medium">
                        View Profile
                    </a>
                    <a href=${doc.url} class="bg-white text-orange-600 py-3 text-sm font-semibold">
                        Book Appointment
                    </a>
                </div>
            </div>
        `).join("");
        }

        function filterDoctors() {
            const searchValue = searchInput.value.toLowerCase();
            const selectedSpecialty = specialtyFilter.value;

            const filtered = doctors.filter(doc => {
                const matchesSearch =
                    doc.name.toLowerCase().includes(searchValue) ||
                    doc.degree.toLowerCase().includes(searchValue);

                const matchesSpecialty = !selectedSpecialty || doc.specialty === selectedSpecialty;

                return matchesSearch && matchesSpecialty;
            });

            renderDoctors(filtered);
        }

        // Initial render
        renderDoctors(doctors);

        // Event listeners
        searchInput.addEventListener("input", filterDoctors);
        specialtyFilter.addEventListener("change", filterDoctors);
    </script>



<?php require "./components/footer.php" ?>
</body>

</html>