<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bypass Surgery (CABG) Treatment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-[#f4f4f4]">
    <?php require "./header.php" ?>


    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="flex flex-col lg:block relative lg:min-h-[600px]">
                    <div
                        class="relative h-[300px] sm:h-[380px] md:h-[450px] lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0 z-0"
                        style="background-image: url('../assets/procedures/bypass-surgery.webp');">

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1
                                    class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white w-full"
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Bypass Surgery at<br>
                                    maAx
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="px-4 mt-6 sm:mt-8 md:mt-10 lg:bg-transparent lg:p-0 lg:relative lg:z-10 lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px]">
                        <?php require "../components/speciality-form.php" ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
    </div>

    <section class="w-full py-10">
        <div class="container mx-auto px-5 lg:px-10 flex flex-col lg:flex-row gap-10">

            <!-- ================= LEFT SIDEBAR ================= -->
            <div class="w-full lg:w-1/4 space-y-6">

                <div class=" rounded-xl  p-5">
                    <h3 class="text-lg font-bold text-[#6C3130] mb-4">Top Procedures & Treatments</h3>

                    <div class="space-y-2 text-sm font-medium">
                        <a href="./angiography.php" class="flex justify-between items-center bg-gray-100  px-4 py-2 rounded">
                            Angiography <span>›</span>
                        </a>
                        <a href="./biopsy.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Biopsy <span>›</span></a>
                        <a href="./cesarian-section.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">C-section <span>›</span></a>
                        <a href="./dialysis.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Dialysis <span>›</span></a>
                        <a href="./endoscopy.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Endoscopy <span>›</span></a>
                        <a href="./eye-laser.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Eye Laser <span>›</span></a>
                        <a href="./pacemaker.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Pacemaker Implant <span>›</span></a>
                        <a href="./sinus-surgery.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Sinus Surgery <span>›</span></a>
                        <a href="./joint-replacement.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Joint Replacement <span>›</span></a>
                    </div>

                    <a href="../procedures.php" class="block mt-4 bg-[#6C3130] text-white text-center py-2 rounded">View All Procedures</a>
                </div>

                <!-- Working Hours -->
                <div class="bg-[#6C3130] text-white rounded-xl p-5 text-sm">
                    <h3 class="text-lg font-bold text-center mb-4">WORKING HOURS</h3>
                    <div class="space-y-1">
                        <p>Monday — Open 24 Hours</p>
                        <p>Tuesday — Open 24 Hours</p>
                        <p>Wednesday — Open 24 Hours</p>
                        <p>Thursday — Open 24 Hours</p>
                        <p>Friday — Open 24 Hours</p>
                        <p>Saturday — Open 24 Hours</p>
                        <p>Sunday — Open 24 Hours</p>
                    </div>
                    <button class="mt-4 w-full bg-[#ec8b2a] py-2 rounded font-semibold">Book An Appointment</button>
                </div>

                <!-- Callback Form -->
                <div class="bg-white shadow-md rounded-xl p-5">
                    <h3 class="text-[#ec8b2a] font-bold mb-3">Your health matters — get the right information today</h3>
                    <form class="space-y-3">
                        <input type="text" placeholder="Full Name" class="w-full border rounded px-3 py-2 text-sm">
                        <input type="email" placeholder="Email" class="w-full border rounded px-3 py-2 text-sm">
                        <input type="tel" placeholder="+91 — Mobile Number" class="w-full border rounded px-3 py-2 text-sm">
                        <button class="w-full bg-[#ec8b2a] text-white py-2 rounded font-semibold">Request a Call Back</button>
                    </form>
                </div>

            </div>

            <!-- ================= RIGHT CONTENT ================= -->
            <div class="w-full lg:w-3/4 space-y-8">

                <!-- Title -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold text-[#6C3130]">
                            Bypass Surgery at <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
                        </h1>
                    </div>
                </div>

                <!-- What & Why -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-2">What the Treatment Is & Why It’s Done</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Bypass surgery, also known as Coronary Artery Bypass Grafting (CABG), is performed to restore blood flow
                        to the heart when coronary arteries are blocked or severely narrowed. At maAx Super Speciality Hospital,
                        this procedure is recommended for patients with advanced coronary artery disease, multiple blockages,
                        or those who are not suitable candidates for angioplasty.
                    </p>
                    <p class="text-gray-700 leading-relaxed mt-3">
                        The surgery creates a new pathway for blood to reach the heart muscle, reducing chest pain (angina),
                        improving heart function, and lowering the risk of heart attack.
                    </p>
                </div>

                <!-- How Performed -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-2">How the Treatment Is Performed</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>A healthy blood vessel (usually from the leg, arm, or chest) is harvested.</li>
                        <li>The surgeon attaches this vessel to bypass the blocked artery, creating a new route for blood flow.</li>
                        <li>The procedure is performed under general anesthesia and may take 3–6 hours.</li>
                        <li>Patients are monitored in the intensive care unit (ICU) after surgery.</li>
                    </ul>
                    <p class="text-gray-700 leading-relaxed mt-3">
                        Recovery involves a hospital stay of 5–7 days, followed by cardiac rehabilitation.
                    </p>
                </div>

                <!-- Benefits & Risks -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-4">Benefits & Possible Risks</h2>
                    <div class="grid md:grid-cols-2 gap-6">

                        <div class="bg-green-50 border border-green-200 rounded-xl p-4">
                            <h3 class="font-semibold text-green-700 mb-2">Benefits</h3>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Restores blood flow to the heart</li>
                                <li>Reduces chest pain and improves quality of life</li>
                                <li>Lowers risk of heart attack and prolongs survival</li>
                            </ul>
                        </div>

                        <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                            <h3 class="font-semibold text-red-700 mb-2">Possible Risks</h3>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Infection or bleeding</li>
                                <li>Irregular heart rhythms</li>
                                <li>Rare complications such as stroke or kidney problems</li>
                            </ul>
                        </div>

                    </div>

                    <p class="text-gray-700 leading-relaxed mt-4">
                        At maAx Super Speciality Hospital, advanced surgical techniques and dedicated cardiac ICUs ensure
                        maximum safety and recovery success.
                    </p>
                </div>

                <!-- FAQs -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-4">
                        FAQs on Bypass Surgery at <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
                    </h2>

                    <div class="border rounded-xl divide-y">

                        <details class="p-4 group">
                            <summary class="cursor-pointer font-medium flex justify-between items-center">
                                How long does bypass surgery take?
                                <span class="group-open:rotate-180 transition">⌃</span>
                            </summary>
                            <p class="mt-2 text-sm text-gray-600">The surgery usually takes between 3 and 6 hours depending on the number of bypasses required.</p>
                        </details>

                        <details class="p-4 group">
                            <summary class="cursor-pointer font-medium flex justify-between items-center">
                                How long will I stay in the hospital?
                                <span class="group-open:rotate-180 transition">⌃</span>
                            </summary>
                            <p class="mt-2 text-sm text-gray-600">Most patients stay in the hospital for about 5 to 7 days, including ICU monitoring.</p>
                        </details>

                        <details class="p-4 group">
                            <summary class="cursor-pointer font-medium flex justify-between items-center">
                                When can I return to normal activities?
                                <span class="group-open:rotate-180 transition">⌃</span>
                            </summary>
                            <p class="mt-2 text-sm text-gray-600">Recovery takes several weeks, and cardiac rehabilitation helps patients safely regain strength.</p>
                        </details>

                        <details class="p-4 group">
                            <summary class="cursor-pointer font-medium flex justify-between items-center">
                                Is bypass surgery permanent?
                                <span class="group-open:rotate-180 transition">⌃</span>
                            </summary>
                            <p class="mt-2 text-sm text-gray-600">Bypass grafts can last many years, especially with proper lifestyle changes and medical care.</p>
                        </details>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php require "../components/footer.php" ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },
        effect: "slide",
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

</html>