<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Horizontal Expand Slider</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <style>
    /* Reduce GAP between cards */
    .slick-slide {
      margin: 0 5px !important;
    }

    .slick-list {
      margin: 0 -5px !important;
      padding: 20px 0 !important;
    }

    /* Expandable Card */
    .slide-content {
      height: 300px;
      width: 80%;
      /* smaller side cards, less gap */
      margin: 0 auto;
      transition: all 0.5s ease;
    }

    .slide-content img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 12px;
    }

    /* Expanded active card */
    .slick-center .slide-content {
      width: 100%;
      transform: scale(1.08);
      z-index: 10;
    }
  </style>
</head>

<body class="w-full bg-gray-100 p-5 ">

  <div class="w-full mx-auto overflow-x-hidden">
    <div class="slider">

      <div class="item">
        <div class="slide-content">
          <img src="./assets/sliders/slider-image.png">
        </div>
      </div>

      <div class="item">
        <div class="slide-content">
                  <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=800&q=80">

        </div>
      </div>

      <div class="item">
        <div class="slide-content">
          <img src="./assets/sliders/slider-image3.png">
        </div>
      </div>

      <div class="item">
        <div class="slide-content">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=800&q=80">
        </div>
      </div>

      

    </div>
    <div class="swiper-pagination"></div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    $(".slider").slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: true,
      pagination: {
        el: ".swiper-pagination",
      },
      effect: 'cube',
      centerMode: true,
      centerPadding: "0",
      focusOnSelect: true,
      autoplay: true,
      speed: 500,
      autoplaySpeed: 2500,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          centerMode: true
        }
      }]
    });
  </script>

</body>

</html>