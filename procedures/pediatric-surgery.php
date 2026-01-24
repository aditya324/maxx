<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pediatric Surgery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-[#f4f4f4]">
    <?php require "./header.php" ?>

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
                            Pediatric Surgery at <span class="text-[#ec8b2a]">MaAx Super Speciality Hospital</span>
                        </h1>
                    </div>
                    <img src="../assets/procedures/pediatric surgery.webp" alt="Pediatric Surgery" class="w-full md:w-96 rounded-lg shadow">
                </div>

                <!-- What & Why -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-2">What the Treatment Is & Why It’s Done</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Pediatric surgery involves surgical procedures performed on infants, children, and adolescents.
                        At MaAx Super Speciality Hospital, pediatric surgery is recommended for congenital anomalies,
                        trauma, or conditions that cannot be managed medically.
                    </p>
                    <p class="text-gray-700 leading-relaxed mt-3">
                        The goal is to correct abnormalities, restore function, and ensure healthy growth and development.
                    </p>
                </div>

                <!-- How Performed -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-2">How the Treatment Is Performed</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li><strong>Congenital Anomaly Corrections:</strong> Surgery for cleft lip, palate, or intestinal malformations.</li>
                        <li><strong>Emergency Surgeries:</strong> For trauma, appendicitis, or hernia complications.</li>
                        <li><strong>Minimally Invasive Techniques:</strong> Laparoscopic procedures for faster recovery.</li>
                        <li><strong>Neonatal Surgeries:</strong> Specialized procedures for newborns with critical conditions.</li>
                    </ul>
                    <p class="text-gray-700 leading-relaxed mt-3">
                        Surgeries are performed under general anesthesia, with child-friendly care and parental involvement throughout.
                    </p>
                </div>

                <!-- Benefits & Risks -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-4">Benefits & Possible Risks</h2>
                    <div class="grid md:grid-cols-2 gap-6">

                        <div class="bg-green-50 border border-green-200 rounded-xl p-4">
                            <h3 class="font-semibold text-green-700 mb-2">Benefits</h3>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Corrects birth defects and abnormalities</li>
                                <li>Prevents life-threatening complications</li>
                                <li>Minimally invasive options reduce pain and recovery time</li>
                            </ul>
                        </div>

                        <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                            <h3 class="font-semibold text-red-700 mb-2">Possible Risks</h3>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Infection or bleeding</li>
                                <li>Risks associated with anesthesia</li>
                                <li>Rare complications depending on the condition treated</li>
                            </ul>
                        </div>

                    </div>

                    <p class="text-gray-700 leading-relaxed mt-4">
                        At MaAx Super Speciality Hospital, pediatric surgeons, anesthetists, and child-care specialists
                        ensure safe, compassionate, and effective surgical care.
                    </p>
                </div>

                <!-- FAQs -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-4">
                        FAQs on Pediatric Surgery at <span class="text-[#ec8b2a]">MaAx Super Speciality Hospital</span>
                    </h2>

                    <div class="border rounded-xl divide-y">

                        <details class="p-4 group">
                            <summary class="cursor-pointer font-medium flex justify-between items-center">
                                Is pediatric surgery safe?
                                <span class="group-open:rotate-180 transition">⌃</span>
                            </summary>
                            <p class="mt-2 text-sm text-gray-600">Yes, pediatric surgeries are performed by specialized surgeons with child-focused anesthesia and care protocols.</p>
                        </details>

                        <details class="p-4 group">
                            <summary class="cursor-pointer font-medium flex justify-between items-center">
                                How should I prepare my child for surgery?
                                <span class="group-open:rotate-180 transition">⌃</span>
                            </summary>
                            <p class="mt-2 text-sm text-gray-600">Doctors will provide fasting instructions and guidance. Emotional reassurance and parental presence are encouraged.</p>
                        </details>

                        <details class="p-4 group">
                            <summary class="cursor-pointer font-medium flex justify-between items-center">
                                How long is recovery after pediatric surgery?
                                <span class="group-open:rotate-180 transition">⌃</span>
                            </summary>
                            <p class="mt-2 text-sm text-gray-600">Recovery time depends on the procedure, but minimally invasive surgeries usually allow faster healing.</p>
                        </details>

                        <details class="p-4 group">
                            <summary class="cursor-pointer font-medium flex justify-between items-center">
                                Will my child feel pain after surgery?
                                <span class="group-open:rotate-180 transition">⌃</span>
                            </summary>
                            <p class="mt-2 text-sm text-gray-600">Pain is managed with child-safe medications and careful monitoring to keep your child comfortable.</p>
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