<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eye Laser Surgery (LASIK)</title>
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
                        style="background-image: url('../assets/procedures/Eye Laser.webp');">

                        <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

                        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                            <div class="max-w-full">
                                <h1
                                    class="text-2xl md:text-3xl p-3 lg:text-4xl xl:text-6xl font-semibold rounded-md text-white w-full"
                                    style="background: linear-gradient(90deg,rgba(245, 130, 32, 1) 0%, rgba(143, 76, 19, 1) 62%);">
                                    Eye Laser at<br>
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
                        <a href="./eye-laser.php" class="flex justify-between items-center bg-brand text-white px-4 py-2 rounded">Eye Laser <span>›</span></a>
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
                            Eye Laser Surgery at <span class="text-[#ec8b2a]">maAx Super Speciality Hospital</span>
                        </h1>
                    </div>
                </div>

                <!-- What & Why -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-2">What the Treatment Is & Why It’s Done</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Eye laser surgery, commonly known as LASIK or laser vision correction, is performed to correct refractive errors
                        such as myopia (nearsightedness), hyperopia (farsightedness), and astigmatism. At maAx Super Speciality Hospital,
                        eye laser surgery is recommended for patients who want freedom from glasses or contact lenses.
                    </p>
                </div>

                <!-- How Performed -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-2">How the Treatment Is Performed</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>The cornea is reshaped using a precise laser beam.</li>
                        <li>This allows light entering the eye to focus correctly on the retina.</li>
                        <li>The procedure takes 15–30 minutes and is performed under local anesthesia with numbing eye drops.</li>
                        <li>Patients usually experience improved vision within 24–48 hours.</li>
                    </ul>
                </div>

                <!-- Benefits & Risks -->
                <div>
                    <h2 class="text-xl font-bold text-[#6C3130] mb-4">Benefits & Possible Risks</h2>
                    <div class="grid md:grid-cols-2 gap-6">

                        <div class="bg-green-50 border border-green-200 rounded-xl p-4">
                            <h3 class="font-semibold text-green-700 mb-2">Benefits</h3>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Permanent correction of vision problems</li>
                                <li>Quick recovery with minimal discomfort</li>
                                <li>High success rate and improved quality of life</li>
                            </ul>
                        </div>

                        <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                            <h3 class="font-semibold text-red-700 mb-2">Possible Risks</h3>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Temporary dryness or glare</li>
                                <li>Rare complications such as infection or under/over-correction</li>
                                <li>Not suitable for patients with certain eye conditions</li>
                            </ul>
                        </div>

                    </div>

                    <p class="text-gray-700 leading-relaxed mt-4">
                        At maAx Super Speciality Hospital, advanced laser technology and experienced ophthalmologists ensure
                        precision, safety, and excellent visual outcomes.
                    </p>
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