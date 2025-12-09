<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-[#F4F4F4]">
    <?php require "./header.php" ?>

    <div class="flex flex-col lg:block relative min-h-[600px] lg:mt-0 mt-20">

        <div class="relative h-96 lg:h-[619px] bg-cover bg-center lg:absolute lg:inset-0  z-0 lg:mt-20"
            style="background-image: url('./assets/banners/medical-care.jpg');">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop" class="hidden" onerror="this.parentElement.style.backgroundImage = `url('${this.src}')`">

            <div class="absolute inset-0 bg-black/50 lg:bg-black/60"></div>

            <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:text-left lg:items-start lg:justify-center lg:container lg:mx-auto lg:px-6">
                <div class="max-w-xl">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight">Patient’s Corner</h1>
                    <p class="text-sm md:text-base lg:text-xl text-gray-200 leading-relaxed mt-2 lg:mt-4">
                        Our Expert Cardiologists provide advanced diagnostic and interventional care for a wide range of heart conditions
                    </p>
                </div>
            </div>
        </div>

        <div class="lg:py-12 py-5 px-4 lg:bg-transparent lg:p-0 lg:relative lg:z-10 lg:container lg:mx-auto lg:flex lg:items-center lg:h-[600px] mt-9 ">

            <div class="w-full max-w-md mx-auto bg-white rounded-2xl shadow-xl p-6 md:p-8 lg:ml-auto lg:mr-0">
                <h2 class="text-center text-2xl font-bold text-orange-500 mb-6 lg:hidden">
                    Book An Appointment
                </h2>
                <h2 class="hidden lg:block text-left text-xl font-bold text-gray-800 mb-6 uppercase">
                    Talk to our <span class="text-orange-500">Health Advisor</span>
                </h2>

                <form class="space-y-4">
                    <div>
                        <input type="text" placeholder="Full Name*"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition" />
                    </div>

                    <div>
                        <input type="email" placeholder="Email*"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition" />
                    </div>

                    <div class="flex rounded-lg border border-gray-300 overflow-hidden focus-within:ring-2 focus-within:ring-orange-500 focus-within:border-transparent transition">
                        <div class="bg-white border-r border-gray-300 px-3 py-3 flex items-center min-w-[90px] justify-between">
                            <span class="text-gray-700 text-sm font-medium">+91 IN</span>
                            <svg class="w-4 h-4 ml-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <input type="tel" placeholder="Mobile Number*"
                            class="w-full px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none" />
                    </div>

                    <div class="flex items-start gap-2 mt-2">
                        <input type="checkbox" id="consent" class="mt-1 w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                        <label for="consent" class="text-xs text-gray-600">
                            I consent maAx hospitals to contact me
                        </label>
                    </div>

                    <button type="button" class="w-full bg-brown-800 hover:bg-brown-900 lg:bg-orange-500 lg:hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300 transform active:scale-95 mt-4 text-lg">
                        <span class="lg:hidden">Book Now</span>
                        <span class=" lg:inline">Request a Call Back</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    <section class="w-full xl:px-40 mx-auto mt-56 ">

        <!-- Swiper Container -->
        <div class="swiper myBlogSwiper px-5 lg:px-0">

            <!-- Wrapper -->
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide flex justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">

                        <div class="w-full relative">
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>

                            <!-- Image -->
                            <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">

                            <!-- Title -->
                            <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
                                Angioplasty
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            <div class="text-xl font-medium mb-2 text-[#525252]">
                                Successful Heart and Kidney Treatment by Our Doctor
                            </div>
                            <div class="flex items-center pt-10 gap-5">
                                <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
                                <p class="text-[#6C3130] text-xl font-medium">
                                    Patient Recovery Story
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide flex justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">

                        <div class="w-full relative">
                            <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>
                            <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">
                            <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
                                Angioplasty
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            <div class="text-xl font-medium mb-2 text-[#525252]">
                                Successful Heart and Kidney Treatment by Our Doctor
                            </div>
                            <div class="flex items-center pt-10 gap-5">
                                <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
                                <p class="text-[#6C3130] text-xl font-medium">
                                    Patient Recovery Story
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide flex justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">

                        <div class="w-full relative">
                            <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>
                            <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">
                            <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
                                Angioplasty
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            <div class="text-xl font-medium mb-2 text-[#525252]">
                                Successful Heart and Kidney Treatment by Our Doctor
                            </div>
                            <div class="flex items-center pt-10 gap-5">
                                <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
                                <p class="text-[#6C3130] text-xl font-medium">
                                    Patient Recovery Story
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide flex justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">

                        <div class="w-full relative">
                            <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>
                            <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">
                            <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
                                Angioplasty
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            <div class="text-xl font-medium mb-2 text-[#525252]">
                                Successful Heart and Kidney Treatment by Our Doctor
                            </div>
                            <div class="flex items-center pt-10 gap-5">
                                <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
                                <p class="text-[#6C3130] text-xl font-medium">
                                    Patient Recovery Story
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide flex justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">

                        <div class="w-full relative">
                            <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>
                            <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">
                            <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
                                Angioplasty
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            <div class="text-xl font-medium mb-2 text-[#525252]">
                                Successful Heart and Kidney Treatment by Our Doctor
                            </div>
                            <div class="flex items-center pt-10 gap-5">
                                <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
                                <p class="text-[#6C3130] text-xl font-medium">
                                    Patient Recovery Story
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide flex justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">

                        <div class="w-full relative">
                            <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>
                            <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">
                            <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
                                Angioplasty
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            <div class="text-xl font-medium mb-2 text-[#525252]">
                                Successful Heart and Kidney Treatment by Our Doctor
                            </div>
                            <div class="flex items-center pt-10 gap-5">
                                <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
                                <p class="text-[#6C3130] text-xl font-medium">
                                    Patient Recovery Story
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide flex justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">

                        <div class="w-full relative">
                            <div class="absolute inset-0 bg-gradient-to-b from-[#f4f4f466] via-[#73737366] to-[#00000066]"></div>
                            <img class="w-full h-full object-cover" src="./assets/blogs/blog-1.jpg" alt="Sunset in the mountains">
                            <p class="absolute bottom-10 text-center w-full bg-[#F6AC6C] text-2xl p-2 text-[#6C3130] font-semibold">
                                Angioplasty
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            <div class="text-xl font-medium mb-2 text-[#525252]">
                                Successful Heart and Kidney Treatment by Our Doctor
                            </div>
                            <div class="flex items-center pt-10 gap-5">
                                <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
                                <p class="text-[#6C3130] text-xl font-medium">
                                    Patient Recovery Story
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- You can add more .swiper-slide here -->

            </div>

            <!-- Pagination dots -->
            <div class="swiper-pagination mt-6"></div>

            <!-- (Optional) Custom arrows -->

            <div class="swiper-button-prev !text-[#6C3130]"></div>
            <div class="swiper-button-next !text-[#6C3130]"></div>

        </div>
    </section>

    <section class="w-full xl:px-40 mx-auto mt-20 ">

        <div class="max-w-4xl mx-auto text-center">
            <!-- Heading -->
            <h2 class="text-2xl font-semibold">
                <span class="text-[#6C3130]">Real Patients,</span>
                <span class="text-brand"> Real Stories</span>
            </h2>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper testimonialSwiper px-5 lg:px-0 mt-10">

            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide flex justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="w-full relative p-5">
                            <img class="w-full h-full object-cover rounded-2xl"
                                src="./assets/testimonial.png" alt="Testimonial">
                        </div>

                        <div class="px-6 py-4 flex gap-5">
                            <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
                            <p class="text-[#525252] text-xl font-medium">
                                Successful Heart and Lungs Treatment by Our Doctor
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide flex justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="w-full relative p-5">
                            <img class="w-full h-full object-cover rounded-2xl"
                                src="./assets/testimonial.png" alt="Testimonial">
                        </div>

                        <div class="px-6 py-4 flex gap-5">
                            <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
                            <p class="text-[#525252] text-xl font-medium">
                                Successful Heart and Lungs Treatment by Our Doctor
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide flex justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="w-full relative p-5">
                            <img class="w-full h-full object-cover rounded-2xl"
                                src="./assets/testimonial.png" alt="Testimonial">
                        </div>

                        <div class="px-6 py-4 flex gap-5">
                            <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
                            <p class="text-[#525252] text-xl font-medium">
                                Successful Heart and Lungs Treatment by Our Doctor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide flex justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="w-full relative p-5">
                            <img class="w-full h-full object-cover rounded-2xl"
                                src="./assets/testimonial.png" alt="Testimonial">
                        </div>

                        <div class="px-6 py-4 flex gap-5">
                            <img src="./assets/icons/arrow.png" class="w-6 h-6" alt="">
                            <p class="text-[#525252] text-xl font-medium">
                                Successful Heart and Lungs Treatment by Our Doctor
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <div class="swiper-pagination mt-6"></div>
        </div>

    </section>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const blogSwiper = new Swiper(".myBlogSwiper", {
            loop: true,
            spaceBetween: 24,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // Uncomment below to use custom arrows
            // navigation: {
            //   nextEl: ".swiper-button-next",
            //   prevEl: ".swiper-button-prev",
            // },
            breakpoints: {
                0: {
                    slidesPerView: 1.2,
                },
                768: {
                    slidesPerView: 2,
                },
                1100: {
                    slidesPerView: 3,
                },
                1280: {
                    slidesPerView: 4,
                },
            },
        });
    </script>


    <script>
        const testimonialSwiper = new Swiper(".testimonialSwiper", {
            loop: true,
            spaceBetween: 24,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // Uncomment below to use custom arrows
            // navigation: {
            //   nextEl: ".swiper-button-next",
            //   prevEl: ".swiper-button-prev",
            // },
            breakpoints: {
                0: {
                    slidesPerView: 1.2,
                },
                768: {
                    slidesPerView: 2,
                },
                1100: {
                    slidesPerView: 3,
                },
                1280: {
                    slidesPerView: 4,
                },
            },
        });
    </script>


</body>

</html>