<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trauma Care</title>
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
                        style="background-image: url('../assets/procedures/trauma.webp');">

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1
                                    class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white w-full"
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Trauma Care  at<br>
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
                        <a href="./angiography.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Angiography <span>›</span></a>
                        <a href="./biopsy.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Biopsy <span>›</span></a>
                        <a href="./cesarian-section.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">C-section <span>›</span></a>
                        <a href="./dialysis.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Dialysis <span>›</span></a>
                        <a href="./endoscopy.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Endoscopy <span>›</span></a>
                        <a href="./eye-laser.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Eye Laser <span>›</span></a>
                        <a href="./pacemaker.php" class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded">Pacemaker Implant <span>›</span></a>
                        <a href="./trauma.php" class="flex justify-between items-center bg-brand text-white px-4 py-2 rounded">Trauma Care <span>›</span></a>
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

              
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold text-[#6C3130]">
                            Trauma Care at <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
                        </h1>
                    </div>
                </div>

                <!-- What & Why -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-2">What the Treatment Is & Why It’s Done</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Trauma care involves the immediate assessment, resuscitation, and treatment of patients
                        suffering from serious injuries caused by accidents, falls, burns, or violence. It is a
                        critical medical service that focuses on stabilizing patients and preventing life-threatening complications.
                    </p>
                    <p class="text-gray-700 leading-relaxed mt-3">
                        At maAx Super Speciality Hospital, trauma care is provided by a multidisciplinary team to manage
                        injuries such as fractures, head injuries, internal bleeding, and organ damage.
                    </p>
                </div>

                <!-- How Performed -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-2">How the Treatment Is Performed</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Rapid assessment and stabilization using emergency protocols (ABC – Airway, Breathing, Circulation).</li>
                        <li>Imaging tests such as X-rays, CT scans, or ultrasound to evaluate injuries.</li>
                        <li>Immediate surgical or medical intervention if required.</li>
                    </ul>
                    <p class="text-gray-700 leading-relaxed mt-3">
                        Trauma care is highly time-sensitive and often involves intensive monitoring and critical care support.
                    </p>
                </div>

                <!-- Benefits & Risks -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-4">Benefits & Possible Risks</h2>
                    <div class="grid md:grid-cols-2 gap-6">

                        <div class="bg-green-50 border border-green-200 rounded-xl p-4">
                            <h3 class="font-semibold text-green-700 mb-2">Benefits</h3>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Immediate life-saving interventions</li>
                                <li>Comprehensive care for multiple injuries</li>
                                <li>Reduced risk of long-term complications</li>
                            </ul>
                        </div>

                        <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                            <h3 class="font-semibold text-red-700 mb-2">Possible Risks</h3>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Complications depending on severity of injury</li>
                                <li>Risk associated with emergency surgeries</li>
                                <li>Need for prolonged recovery or rehabilitation</li>
                            </ul>
                        </div>

                    </div>

                    <p class="text-gray-700 leading-relaxed mt-4">
                        At maAx Super Speciality Hospital, advanced emergency facilities and experienced specialists
                        ensure rapid response and effective trauma management.
                    </p>
                </div>

                <!-- FAQs -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-4">
                        FAQs on Trauma Care at <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
                    </h2>

                    <div class="border rounded-xl divide-y">

                        <details class="p-4 group">
                            <summary class="cursor-pointer font-medium flex justify-between items-center">
                                What is considered a trauma emergency?
                                <span class="group-open:rotate-180 transition">⌃</span>
                            </summary>
                            <p class="mt-2 text-sm text-gray-600">Severe injuries such as head trauma, fractures, internal bleeding, burns, or road accidents require immediate trauma care.</p>
                        </details>

                        <details class="p-4 group">
                            <summary class="cursor-pointer font-medium flex justify-between items-center">
                                Is trauma care available 24/7?
                                <span class="group-open:rotate-180 transition">⌃</span>
                            </summary>
                            <p class="mt-2 text-sm text-gray-600">Yes, trauma care services are available round the clock for emergencies.</p>
                        </details>

                        <details class="p-4 group">
                            <summary class="cursor-pointer font-medium flex justify-between items-center">
                                Do all trauma cases require surgery?
                                <span class="group-open:rotate-180 transition">⌃</span>
                            </summary>
                            <p class="mt-2 text-sm text-gray-600">No, treatment depends on the injury. Some cases require monitoring and medication, while others need surgery.</p>
                        </details>

                        <details class="p-4 group">
                            <summary class="cursor-pointer font-medium flex justify-between items-center">
                                How important is early treatment in trauma?
                                <span class="group-open:rotate-180 transition">⌃</span>
                            </summary>
                            <p class="mt-2 text-sm text-gray-600">Early treatment is critical and can significantly improve survival rates and recovery outcomes.</p>
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