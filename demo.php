<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Healthcare Gallery Slider</title>

  <!-- Tailwind CSS -->
  <link href="./src/output.css" rel="stylesheet">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .swiper-button-next,
    .swiper-button-prev {
      position: absolute !important;
      top: 50% !important;
      transform: translateY(-50%);
      color: #9ca3af;
    }

    .healthcareSwiper .swiper-slide {
      transition: all 0.4s ease;
      position: relative;
    }

    /* Blur & dim all NON-active slides */
    .healthcareSwiper .swiper-slide:not(.swiper-slide-active) img {
      filter: blur(3px);
      opacity: 0.45;
      transform: scale(0.95);
    }

    /* Active slide */
    .healthcareSwiper .swiper-slide-active img {
      filter: blur(0);
      opacity: 1;
      transform: scale(1);
    }

    /* Dark overlay on side slides */
    .healthcareSwiper .swiper-slide:not(.swiper-slide-active)::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.25);
      border-radius: 1.5rem;
      pointer-events: none;
    }
  </style>
</head>

<body class="w-full bg-gray-100 p-5 ">
  <h2 class="text-2xl font-semibold text-center">

    <span class="text-brand  ">Hospital Tour</span>
  </h2>
  <section class="w-full py-14">
    <div class="container mx-auto px-6">
      <div class="relative">

        <!-- Swiper -->
        <div class="swiper healthcareSwiper">
          <div class="swiper-wrapper">

            <!-- Slides -->
            <!-- Repeat this block for each image -->
            <div class="swiper-slide">
              <div class="rounded-3xl overflow-hidden">
                <img src="./assets/gallery/1.1 1.webp" class="w-full h-[320px] object-cover" />
              </div>
            </div>

            <div class="swiper-slide">
              <div class="rounded-3xl overflow-hidden">
                <img src="./assets/gallery/10.0 1.webp" class="w-full h-[320px] object-cover" />
              </div>
            </div>

            <div class="swiper-slide">
              <div class="rounded-3xl overflow-hidden">
                <img src="./assets/gallery/11.1 1.webp" class="w-full h-[320px] object-cover" />
              </div>
            </div>

            <div class="swiper-slide">
              <div class="rounded-3xl overflow-hidden">
                <img src="./assets/gallery/12.1 1.webp" class="w-full h-[320px] object-cover" />
              </div>
            </div>

            <div class="swiper-slide">
              <div class="rounded-3xl overflow-hidden">
                <img src="./assets/gallery/13.1 1.webp" class="w-full h-[320px] object-cover" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="rounded-3xl overflow-hidden">
                <img src="./assets/gallery/13.1 1.webp" class="w-full h-[320px] object-cover" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="rounded-3xl overflow-hidden">
                <img src="./assets/gallery/15.1 1.webp" class="w-full h-[320px] object-cover" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="rounded-3xl overflow-hidden">
                <img src="./assets/gallery/16.1 1.webp" class="w-full h-[320px] object-cover" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="rounded-3xl overflow-hidden">
                <img src="./assets/gallery/17.1 1.webp" class="w-full h-[320px] object-cover" />
              </div>
            </div>
          </div>
        </div>

        <!-- Navigation Arrows -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

      </div>
    </div>
  </section>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    const swiper = new Swiper(".healthcareSwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      coverflowEffect: {
        rotate: 0,
        stretch: 80,
        depth: 200,
        modifier: 1,
        slideShadows: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1.2
        },
        768: {
          slidesPerView: 2.2
        },
        1024: {
          slidesPerView: 2
        },
      },
    });
  </script>

  <?php require "./components/footer.php" ?>
</body>

</html>