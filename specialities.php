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


    <section class="w-full pt-28 pb-10">
        <div
            class="relative w-full mx-auto h-[619px] bg-cover bg-center overflow-hidden"
            style="background-image: url('./assets/banners/Frame 227.png');">
            <!-- TOP PILL -->
            <div class="flex justify-center mt-5">
                <div class="flex w-[1020px] items-center justify-between bg-white shadow-md rounded-full px-6 py-3 gap-6">
                    <!-- Request Call Back -->
                    <button class="flex items-center gap-2 text-[#6C3130] font-medium px-4">
                        <img src="./assets/icons/call.png" class="w-7 h-7" alt="">
                        <span>Request Call Back</span>
                    </button>

                    <!-- Book Appointment (Active) -->
                    <button class="flex items-center gap-2 text-white font-medium px-6 py-2 rounded-full bg-[#F58220] shadow">
                        <img src="./assets/icons/schedule.png" class="w-7 h-7 invert" alt="">
                        <span>Book Appointment</span>
                    </button>

                    <!-- Book Ambulance -->
                    <button class="flex items-center gap-3 text-[#6C3130] font-medium px-4">
                        <img src="./assets/icons/ambulence.png" class="w-7 h-7" alt="">
                        <span>Book Ambulance</span>
                    </button>
                </div>
            </div>

            <!-- CONTENT ON IMAGE -->
            <div class="absolute top-1/2 -translate-y-1/2 left-36 text-white">
                <h1 class="text-3xl md:text-4xl text-[#6C3130] font-semibold mb-3 drop-shadow-xl">
                    All-Inclusive Care
                    <span class="text-[#F58220]">ONE Trusted Hospital</span>
                </h1>

                <p
                    class="text-xl xl:w-[650px] bg-[image:var(--gradient-brand)] md:text-4xl font-semibold text-white inline-block px-3 py-3 rounded drop-shadow-xl">
                    World Class Care, Under One Roof
                </p>
            </div>

            <!-- 🔽 SEARCH BAR FLOATING ON IMAGE (NOT AT BOTTOM) -->
            <div class="absolute top-[80%] left-1/2 -translate-x-1/2 w-[1020px] max-w-4xl">
                <div class="flex items-center bg-white rounded-full shadow-md px-0 py-0 w-full overflow-hidden">

                    <div class="flex flex-1 items-center gap-3 px-5 py-2">

                        <!-- Select Specialty -->
                        <div class="relative flex-1">
                            <select
                                class="w-full bg-[#f4f4f4] rounded-full px-8 py-3 text-sm text-[#6C3130] appearance-none outline-none cursor-pointer">
                                <option selected>Select Specialty</option>
                            </select>
                            <span class="pointer-events-none absolute right-6 top-1/2 -translate-y-1/2 text-[#6C3130] text-xs">▼</span>
                        </div>

                        <!-- Find a Doctor -->
                        <div class="relative flex-1">
                            <select
                                class="w-full bg-[#f4f4f4] rounded-full px-8 py-3 text-sm text-[#6C3130] appearance-none outline-none cursor-pointer">
                                <option selected>Find a Doctor</option>
                            </select>
                            <span class="pointer-events-none absolute right-6 top-1/2 -translate-y-1/2 text-[#6C3130] text-xs">▼</span>
                        </div>

                    </div>

                    <!-- FIXED BUTTON -->
                    <button
                        class="px-12 py-5 bg-[#F58220] text-white text-lg font-semibold rounded-r-full flex items-center justify-center gap-2 whitespace-nowrap h-full">
                        <span>Search</span>
                        <span class="text-base">→</span>
                    </button>
                </div>
            </div>



            <!-- 🔼 SEARCH BAR END -->
        </div>
    </section>





    <!-- ==== STYLES (put in <head> or before closing </body>) ==== -->
    <style>
        /* Tab content base state */
        .tab-content {
            opacity: 0;
            transform: translateY(10px);
        }

        /* Visible + animated */
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

        /* Card hover */
        .card-hover {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
    </style>

    <!-- ==== MAIN SECTION ==== -->
    <section class="w-full py-10">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Heading -->
            <h2 class="text-2xl font-semibold">
                <span class="text-[#6C3130]">Explore</span>
                <span class="text-brand">Our Specialities</span>
            </h2>

            <!-- Tabs -->
            <div class="flex justify-center gap-10 mt-6 text-brand text-lg font-medium">
                <button
                    class="tab-btn active-tab px-5 py-2 bg-brand text-white rounded-full"
                    data-target="specialities">
                    Specialities
                </button>

                <button
                    class="tab-btn hover:text-[#c45d16] transition"
                    data-target="procedures">
                    Procedures
                </button>

                <button
                    class="tab-btn hover:text-[#c45d16] transition"
                    data-target="diagnostics">
                    Diagnostics
                </button>
            </div>
        </div>

        <!-- 🔽 A–Z DROPDOWN FOR SPECIALITIES (only visible on Specialities tab) -->
        <div
            id="specialityFilterWrapper"
            class="max-w-6xl mx-auto mt-6 flex justify-end px-4">
            <label class="flex items-center gap-2 text-sm text-[#5c2c20]">
                <span class="hidden sm:inline">Filter A–Z:</span>
                <select
                    id="specialityFilter"
                    class="border border-[#e4d5c6] rounded-full px-3 py-1 text-sm bg-white focus:outline-none focus:ring-1 focus:ring-[#f28c28]">
                    <option value="all">All</option>
                    <!-- A–Z options will be added via JS -->
                </select>
            </label>
        </div>

        <!-- ============ SPECIALITIES (full list) ============ -->
        <div
            id="specialities"
            class="tab-content show grid xl:grid-cols-6 lg:grid-cols-5 md:grid-cols-3 grid-cols-1 gap-5 lg:gap-10 justify-items-center mt-6 px-4">

            <!-- 1. Anaesthesia -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Anaesthesia">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">Anaesthesia</h3>
            </div>

            <!-- 2. Invasive & Non-Invasive Cardiology -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Invasive & Non-Invasive Cardiology">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[16px] font-semibold text-[#5c2c20] text-center">
                    Invasive & Non-Invasive Cardiology
                </h3>
            </div>

            <!-- 3. Cardiac Thoracic Surgery -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Cardiac Thoracic Surgery">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
                    Cardiac Thoracic Surgery
                </h3>
            </div>

            <!-- 4. Critical Care Medicine -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Critical Care Medicine">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
                    Critical Care Medicine
                </h3>
            </div>

            <!-- 5. Dermatology -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Dermatology">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">Dermatology</h3>
            </div>

            <!-- 6. Emergency Medicine -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Emergency Medicine">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
                    Emergency Medicine
                </h3>
            </div>

            <!-- 7. Endocrine Surgery -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Endocrine Surgery">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
                    Endocrine Surgery
                </h3>
            </div>

            <!-- 8. Endocrinology -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Endocrinology">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
                    Endocrinology
                </h3>
            </div>

            <!-- 9. ENT -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="ENT">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">ENT</h3>
            </div>

            <!-- 10. General Medicine -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="General Medicine">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
                    General Medicine
                </h3>
            </div>

            <!-- 11. General & Laparoscopic Surgery -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="General & Laparoscopic Surgery">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[16px] font-semibold text-[#5c2c20] text-center">
                    General & Laparoscopic Surgery
                </h3>
            </div>

            <!-- 12. Interventional Radiology -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Interventional Radiology">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[16px] font-semibold text-[#5c2c20] text-center">
                    Interventional Radiology
                </h3>
            </div>

            <!-- 13. Surgical Gastroenterology -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Surgical Gastroenterology">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[16px] font-semibold text-[#5c2c20] text-center">
                    Surgical Gastroenterology
                </h3>
            </div>

            <!-- 14. Oral - Maxillo Facial Surgery -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Oral Maxillo Facial Surgery">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[16px] font-semibold text-[#5c2c20] text-center">
                    Oral & Maxillo Facial Surgery
                </h3>
            </div>

            <!-- 15. Nephrology and Dialysis -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Nephrology and Dialysis">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[16px] font-semibold text-[#5c2c20] text-center">
                    Nephrology & Dialysis
                </h3>
            </div>

            <!-- 16. Neurology -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Neurology">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">Neurology</h3>
            </div>

            <!-- 17. Neurosurgery -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Neurosurgery">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">Neurosurgery</h3>
            </div>

            <!-- 18. Ophthalmology -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Ophthalmology">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
                    Ophthalmology
                </h3>
            </div>

            <!-- 19. Orthopedics including Joint Replacement Surgery -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Orthopedics including Joint Replacement Surgery">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[16px] font-semibold text-[#5c2c20] text-center">
                    Orthopedics & Joint Replacement
                </h3>
            </div>

            <!-- 20. Obstetrics and Gynecology -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Obstetrics and Gynecology">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[16px] font-semibold text-[#5c2c20] text-center">
                    Obstetrics & Gynecology
                </h3>
            </div>

            <!-- 21. Pediatrics -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Pediatrics">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
                    Pediatrics
                </h3>
            </div>

            <!-- 22. Pediatric Surgery -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Pediatric Surgery">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
                    Pediatric Surgery
                </h3>
            </div>

            <!-- 23. Plastic Surgery -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Plastic Surgery">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
                    Plastic Surgery
                </h3>
            </div>

            <!-- 24. Pulmonology -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Pulmonology">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
                    Pulmonology
                </h3>
            </div>

            <!-- 25. Pathology -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Pathology">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
                    Pathology
                </h3>
            </div>

            <!-- 26. Physiotherapy & Rehabilitation -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Physiotherapy & Rehabilitation">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[16px] font-semibold text-[#5c2c20] text-center">
                    Physiotherapy & Rehabilitation
                </h3>
            </div>

            <!-- 27. Psychiatry ( Only OPD) -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Psychiatry">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
                    Psychiatry (OPD Only)
                </h3>
            </div>

            <!-- 28. Radiology & Imaging -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Radiology & Imaging">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[18px] font-semibold text-[#5c2c20] text-center">
                    Radiology & Imaging
                </h3>
            </div>

            <!-- 29. Urology -->
            <div
                class="speciality-card card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md flex flex-col items-center justify-center"
                data-name="Urology">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">
                    Urology
                </h3>
            </div>
        </div>

        <!-- ============ PROCEDURES ============ -->
        <div
            id="procedures"
            class="tab-content hidden mt-8">

            <div class="flex flex-wrap justify-center gap-3 mt-5 px-4">
                <!-- Dummy Procedure Card 1 -->
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

                <!-- Duplicate this block for more procedure cards -->
                <div class="card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
                    <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
                        Joint Replacement
                    </h3>
                    <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
                        <img
                            src="./assets/heart-care.jpg"
                            alt="Joint Replacement"
                            class="w-full h-full object-cover" />
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
                            Read more
                        </button>
                    </div>
                </div>

                <div class="card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white">
                    <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
                        Laparoscopic Surgery
                    </h3>
                    <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
                        <img
                            src="./assets/heart-care.jpg"
                            alt="Laparoscopic Surgery"
                            class="w-full h-full object-cover" />
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="px-5 py-2 rounded-full border border-[#e4d5c6] text-[#5c2c20] hover:bg-[#f7eee7] transition">
                            Read more
                        </button>
                    </div>
                </div>

            </div>

            <div class="w-full flex justify-center mt-5">
                <button class="flex justify-center items-center gap-2 border border-[#f28c28] text-[#f28c28] 
        px-5 py-2 rounded-full font-medium text-xl hover:bg-[#fff7ef] transition">
                    view all
                    <span class="text-lg">→</span>
                </button>
            </div>
        </div>

        <!-- ============ DIAGNOSTICS ============ -->
        <div id="diagnostics"
            class="tab-content hidden gap-5 mt-8 grid lg:grid-cols-6 md:grid-cols-4 grid-cols-1">

            <div class="card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
      flex flex-col items-center justify-center">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">MRI & CT Scan</h3>
            </div>

            <div class="card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
      flex flex-col items-center justify-center">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">X-Ray</h3>
            </div>

            <div class="card-hover w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
      flex flex-col items-center justify-center">
                <img src="./assets/icons/heart.png" class="w-20 h-20 mb-3" />
                <h3 class="text-[20px] font-semibold text-[#5c2c20] text-center">Ultrasound</h3>
            </div>
        </div>
    </section>

    <!-- ==== SCRIPT (tabs + A–Z filter) ==== -->
    <script>
        const tabs = document.querySelectorAll(".tab-btn");
        const contents = document.querySelectorAll(".tab-content");
        const specialityFilterWrapper = document.getElementById("specialityFilterWrapper");

        tabs.forEach((tab) => {
            tab.addEventListener("click", () => {
                const target = tab.getAttribute("data-target");
                const targetEl = document.getElementById(target);

                // remove active state from all tabs
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

                // show target content + animate
                targetEl.classList.remove("hidden");
                void targetEl.offsetWidth; // restart animation
                targetEl.classList.add("show");

                // show/hide A–Z filter depending on active tab
                if (target === "specialities") {
                    specialityFilterWrapper.classList.remove("hidden");
                } else {
                    specialityFilterWrapper.classList.add("hidden");
                }
            });
        });

        // ========== A–Z FILTER FOR SPECIALITIES ==========
        const filterSelect = document.getElementById("specialityFilter");
        const specialityCards = document.querySelectorAll(".speciality-card");

        // collect first letters actually used
        const usedLettersSet = new Set();

        specialityCards.forEach((card) => {
            const name = (card.dataset.name || "").trim().toUpperCase();
            const firstLetter = name.charAt(0);
            if (firstLetter >= "A" && firstLetter <= "Z") {
                usedLettersSet.add(firstLetter);
            }
        });

        // sort and add options
        const usedLetters = Array.from(usedLettersSet).sort();

        usedLetters.forEach((letter) => {
            const option = document.createElement("option");
            option.value = letter;
            option.textContent = letter;
            filterSelect.appendChild(option);
        });

        // filter cards on change
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





















</body>

</html>