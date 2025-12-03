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

    <section>

        <section class="w-full py-10 ">
            <div class="max-w-4xl mx-auto text-center">

                <!-- Heading -->
                <h2 class="text-2xl font-semibold">
                    <span class="text-[#6C3130]">Explore</span>
                    <span class="text-brand">Our Specialities</span>
                </h2>

                <!-- Tabs -->
                <div class="flex justify-center gap-10 mt-6 text-brand text-lg font-medium">

                    <!-- Active Tab -->
                    <button class="hover:text-[#c45d16] transition">
                        Specialities
                    </button>

                    <!-- Inactive Tabs -->
                    <button class="px-5 py-2 bg-brand text-white rounded-full">Procedures</button>
                    <button class="hover:text-[#c45d16] transition">Diagnostics</button>

                </div>

            </div>
        </section>

        <div class="grid  xl:grid-cols-6 lg:grid-cols-5 md:grid-cols-3 gap-5 lg:gap-10 justify-items-center grid-cols-1">
            <div class="w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
            flex flex-col items-center justify-center opacity-100">

                <!-- Icon -->
                <img src="./assets/icons/heart.png"
                    alt="Angiography Icon"
                    class="w-20 h-20 mb-3 select-none" />

                <!-- Title -->
                <h3 class="text-[22px] font-semibold text-[#5c2c20]">
                    Angiography
                </h3>

            </div>
            <div class="w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
            flex flex-col items-center justify-center opacity-100">

                <!-- Icon -->
                <img src="./assets/icons/heart.png"
                    alt="Angiography Icon"
                    class="w-20 h-20 mb-3 select-none" />

                <!-- Title -->
                <h3 class="text-[22px] font-semibold text-[#5c2c20]">
                    Angiography
                </h3>

            </div>
            <div class="w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
            flex flex-col items-center justify-center opacity-100">

                <!-- Icon -->
                <img src="./assets/icons/heart.png"
                    alt="Angiography Icon"
                    class="w-20 h-20 mb-3 select-none" />

                <!-- Title -->
                <h3 class="text-[22px] font-semibold text-[#5c2c20]">
                    Angiography
                </h3>

            </div>
            <div class="w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
            flex flex-col items-center justify-center opacity-100">

                <!-- Icon -->
                <img src="./assets/icons/heart.png"
                    alt="Angiography Icon"
                    class="w-20 h-20 mb-3 select-none" />

                <!-- Title -->
                <h3 class="text-[22px] font-semibold text-[#5c2c20]">
                    Angiography
                </h3>

            </div>
            <div class="w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
            flex flex-col items-center justify-center opacity-100">

                <!-- Icon -->
                <img src="./assets/icons/heart.png"
                    alt="Angiography Icon"
                    class="w-20 h-20 mb-3 select-none" />

                <!-- Title -->
                <h3 class="text-[22px] font-semibold text-[#5c2c20]">
                    Angiography
                </h3>

            </div>
            <div class="w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
            flex flex-col items-center justify-center opacity-100">

                <!-- Icon -->
                <img src="./assets/icons/heart.png"
                    alt="Angiography Icon"
                    class="w-20 h-20 mb-3 select-none" />

                <!-- Title -->
                <h3 class="text-[22px] font-semibold text-[#5c2c20]">
                    Angiography
                </h3>

            </div>
            <div class="w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
            flex flex-col items-center justify-center opacity-100">

                <!-- Icon -->
                <img src="./assets/icons/heart.png"
                    alt="Angiography Icon"
                    class="w-20 h-20 mb-3 select-none" />

                <!-- Title -->
                <h3 class="text-[22px] font-semibold text-[#5c2c20]">
                    Angiography
                </h3>

            </div>
            <div class="w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
            flex flex-col items-center justify-center opacity-100">

                <!-- Icon -->
                <img src="./assets/icons/heart.png"
                    alt="Angiography Icon"
                    class="w-20 h-20 mb-3 select-none" />

                <!-- Title -->
                <h3 class="text-[22px] font-semibold text-[#5c2c20]">
                    Angiography
                </h3>

            </div>
            <div class="w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
            flex flex-col items-center justify-center opacity-100">

                <!-- Icon -->
                <img src="./assets/icons/heart.png"
                    alt="Angiography Icon"
                    class="w-20 h-20 mb-3 select-none" />

                <!-- Title -->
                <h3 class="text-[22px] font-semibold text-[#5c2c20]">
                    Angiography
                </h3>

            </div>
            <div class="w-[241px] h-[226px] bg-white rounded-[20px] shadow-md 
            flex flex-col items-center justify-center opacity-100">

                <!-- Icon -->
                <img src="./assets/icons/heart.png"
                    alt="Angiography Icon"
                    class="w-20 h-20 mb-3 select-none" />

                <!-- Title -->
                <h3 class="text-[22px] font-semibold text-[#5c2c20]">
                    Angiography
                </h3>

            </div>


        </div>


</body>

</html>