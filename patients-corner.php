<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .primary-tab {
            position: relative;
            padding: 10px 6px;
            font-weight: 500;
            cursor: pointer;

        }

        .primary-tab.active::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 3px;
            color: #6C3130;
            background: #6C3130;
        }

        .secondary-tab {
            padding: 6px 14px;
            border-radius: 9999px;
            border: 1px solid #f97316;
            color: #f97316;
            font-size: 14px;
            cursor: pointer;
            white-space: nowrap;
        }

        .secondary-tab.active {
            background: #f97316;
            color: #fff;
        }
    </style>
</head>

<body class="bg-surface-soft font-sans">
    <?php require "./header.php" ?>


    <img src="./assets/banners/patient-testimonails.webp" class="w-full" alt="">

    <div style="background: linear-gradient(to right, #F58220, #8F4C13);">
        <div class="max-w-6xl mx-auto flex gap-10 justify-between px-6 py-4 text-white ">
            <button class="primary-tab active" data-type="blogs">Blogs</button>
            <button class="primary-tab" data-type="podcasts">Podcasts</button>
            <button class="primary-tab" data-type="videos">Videos</button>
            <button class="primary-tab" data-type="events">News & Events</button>
            <button class="primary-tab" data-type="gallery">Hospital Gallery</button>

        </div>
    </div>

    <section class="max-w-7xl mx-auto px-6 py-8">

        <!-- SEARCH -->


        <!-- SECONDARY TABS -->
        <div id="secondary-tabs" class="flex gap-3 mb-6 overflow-x-auto"></div>

        <!-- CONTENT -->
        <div id="cards"></div>

    </section>


    <!-- VIDEO MODAL -->
    <div
        id="videoModal"
        class="fixed inset-0 bg-black/70 hidden items-center justify-center z-50">
        <div class="bg-black w-[90%] max-w-3xl aspect-video relative rounded-lg overflow-hidden">
            <button
                onclick="closeVideo()"
                class="absolute top-2 right-2 bg-white text-black px-2 py-1 text-sm rounded">
                ✕
            </button>
            <iframe
                id="videoFrame"
                class="w-full h-full"
                frameborder="0"
                referrerpolicy="strict-origin-when-cross-origin"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>


    <script>
        let activeType = "blogs";
            let activeFilter = "recent";
        function getQueryParam(param) {
            
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        const allowedTypes = ["blogs", "podcasts", "videos", "events", "gallery"];

        const urlType = getQueryParam("type");

        if (urlType && allowedTypes.includes(urlType)) {
            activeType = urlType;

            // Set active class on correct primary tab
            document.querySelectorAll(".primary-tab").forEach(tab => {
                tab.classList.remove("active");
                if (tab.dataset.type === urlType) {
                    tab.classList.add("active");
                }
            });
        }
    </script>


    <script>
        /* ===================== HELPERS ===================== */
        function getYouTubeId(url) {
            const reg =
                /(?:youtube\.com\/(?:watch\?v=|shorts\/)|youtu\.be\/)([^\s&?/]+)/;
            return url.match(reg)?.[1];
        }

        function ytThumb(url) {
            return `https://img.youtube.com/vi/${getYouTubeId(url)}/hqdefault.jpg`;
        }

        /* ===================== DATA ===================== */
        const data = {
            blogs: {
                recent: [{
                        title: "Laparoscopic Surgery: Benefits & Recovery Time",
                        desc: "One of the most sought-after procedures in modern..",
                        image: "./assets/blogs/laproscopic-surgery.webp",
                        url: "./laproscopic-surgery.php"
                    },
                    {
                        title: "When Is Surgery Required for Gallstones?",
                        desc: "Gallstones are a common digestive health issue affecting people...",
                        image: "./assets/blogs/gallbaldder.webp",
                        url: "./gallsones-surgery.php"
                    },
                    {
                        title: "Minimally Invasive Surgery vs Open Surgery",
                        desc: "Surgery has evolved tremendously over the years...",
                        image: "./assets/blogs/minimally-invasive-surgery.webp",
                        url: "./minimally-invasive-surgery.php"
                    },
                    {
                        title: "Kidney Stone Surgery: Treatment Options Explained",
                        desc: "Kidney stones are a common and painful urinary...",
                        image: "./assets/blogs/kidney-stones.webp",
                        url: "./kidney-stones.php"
                    },
                ],
                trending: []
            },

            videos: {
                youtube: [{
                        title: "Video 1",
                        url: "https://youtu.be/hwH9BO1QEL8"
                    },
                    {
                        title: "Video 2",
                        url: "https://youtu.be/HPm9wgRENnM"
                    },
                    {
                        title: "Video 3",
                        url: "https://youtu.be/8yc3498d-dA"
                    },
                    {
                        title: "Video 4",
                        url: "https://youtu.be/WZ-LPayu6U0"
                    },
                    {
                        title: "Video 5",
                        url: "https://youtu.be/tp_yMmbbWuk"
                    }
                ],

                shorts: [{
                        title: "Short 1",
                        url: "https://youtu.be/D9_4bJlwUBE"
                    },
                    {
                        title: "Short 2",
                        url: "https://youtu.be/V7NU3iws4ek"
                    },
                    {
                        title: "Short 3",
                        url: "https://youtu.be/i5yGo9L9bqM"
                    }
                ],

                instagram: [{
                    title: "Instagram Reel 1",
                    url: "https://www.instagram.com/maax_hospital/reel/CuMarmMpJd8/",
                    type: "instagram"
                }]
            },
            gallery: {
                hospital: [{
                        image: "./assets/gallery/DJI_0018 1.webp"
                    },
                    {
                        image: "./assets/gallery/1.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/10.0 1.webp"
                    },
                    {
                        image: "./assets/gallery/12.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/13.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/14.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/15.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/16.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/17.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/16.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/17.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/18.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/19.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/2.2 1.webp"
                    },
                    {
                        image: "./assets/gallery/20.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/21.1 1.webp"
                    },
                    {
                        image: "./assets/gallery/22.2 1.webp"
                    },
                    {
                        image: "./assets/gallery/23.3 1.webp"
                    },
                    {
                        image: "./assets/gallery/3.3 1.webp"
                    },
                    {
                        image: "./assets/gallery/2.2 1.webp"
                    },
                    {
                        image: "./assets/gallery/4.4 1.webp"
                    },
                    {
                        image: "./assets/gallery/5.5 1.webp"
                    },
                    {
                        image: "./assets/gallery/6.6 1.webp"
                    },
                    {
                        image: "./assets/gallery/7.7 1.webp"
                    },
                    {
                        image: "./assets/gallery/8.8 1.webp"
                    },
                    {
                        image: "./assets/gallery/9.9 1.webp"
                    },
                    {
                        image: "./assets/gallery/DJI_0018 1.webp"
                    },
                    {
                        image: "./assets/gallery/DJI_0025 2.webp"
                    },
                    {
                        image: "./assets/gallery/DJI_0030 1.webp"
                    },
                    {
                        image: "./assets/gallery/DJI_0034 1.webp"
                    },
                    {
                        image: "./assets/gallery/Gemini_Generated_Image_6oiz8w6oiz8w6oiz 3.webp"
                    },
                    {
                        image: "./assets/gallery/envato-labs-image-edit (41) 1.webp"
                    },

                ]
            }

        };


        const cards = document.getElementById("cards");
        const secondaryTabs = document.getElementById("secondary-tabs");

        /* ===================== SECONDARY TABS ===================== */
        function renderSecondaryTabs() {
            secondaryTabs.innerHTML = "";

            if (activeType === "videos") {
                secondaryTabs.innerHTML = `
            <button class="secondary-tab active" data-filter="youtube">YouTube Videos</button>
            <button class="secondary-tab" data-filter="shorts">YouTube Shorts</button>
            <button class="secondary-tab" data-filter="instagram">Instagram</button>
        `;
                activeFilter = "youtube";
            } else if (activeType === "gallery") {
                secondaryTabs.innerHTML = `
            <button class="secondary-tab active" data-filter="hospital">Hospital Gallery</button>
        `;
                activeFilter = "hospital";
            } else {
                secondaryTabs.innerHTML = `
            <button class="secondary-tab active" data-filter="recent">Recent Articles</button>
            <button class="secondary-tab" data-filter="trending">Trending Articles</button>
        `;
                activeFilter = "recent";
            }

            document.querySelectorAll(".secondary-tab").forEach(tab => {
                tab.onclick = () => {
                    document.querySelectorAll(".secondary-tab").forEach(t => t.classList.remove("active"));
                    tab.classList.add("active");
                    activeFilter = tab.dataset.filter;
                    renderCards();
                };
            });
        }



        /* ===================== RENDER CONTENT ===================== */
        function renderCards() {
            cards.innerHTML = "";

            /* -------- VIDEOS -------- */
            /* -------- VIDEOS -------- */
            /* -------- VIDEOS -------- */
            /* -------- VIDEOS (UNIFIED CARDS) -------- */
            if (activeType === "videos") {
                const items = data.videos[activeFilter] || [];

                cards.className =
                    "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6";

                if (!items.length) {
                    cards.innerHTML =
                        `<p class="text-center text-gray-500 col-span-full">No videos available</p>`;
                    return;
                }

                cards.innerHTML = items.map(video => `
    <div
      class="bg-white rounded-xl shadow cursor-pointer hover:shadow-lg transition"
      onclick="${
  video.type === 'instagram'
    ? `openInstagram('${video.url}')`
    : `openVideo('${video.url}')`
}"
    >
      <div class="relative h-[200px] overflow-hidden rounded-t-xl">
        <img
          src="${ytThumb(video.url)}"
          class="w-full h-full object-cover"
        />

        <div class="absolute inset-0 flex items-center justify-center">
          <div class="bg-black/60 rounded-full p-3">
            ▶
          </div>
        </div>
      </div>

      <div class="p-3 text-sm font-semibold">
        ${video.title}
      </div>
    </div>
  `).join("");

                return;
            }


            if (activeType === "gallery") {
                const items = data.gallery[activeFilter] || [];

                cards.className = "grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6";

                if (!items.length) {
                    cards.innerHTML = `<p class="text-center text-gray-500 col-span-full">No images available</p>`;
                    return;
                }

                cards.innerHTML = items.map(img => `
        <div class="overflow-hidden rounded-xl shadow hover:shadow-lg transition cursor-pointer">
            <img src="${img.image}" class="w-full h-48 object-cover hover:scale-105 transition duration-300">
        </div>
    `).join("");

                return;
            }


            /* -------- BLOGS -------- */
            const items = data[activeType][activeFilter] || [];

            if (!items.length) {
                cards.innerHTML = `<p class="text-center text-gray-500">No content available</p>`;
                return;
            }

            cards.className = "grid grid-cols-1 md:grid-cols-3 gap-8";

            items.forEach(item => {
                cards.innerHTML += `
      <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="relative h-[240px]">
          <img src="${item.image}" class="w-full h-full object-cover">
          <p class="absolute bottom-0 w-full bg-[#F6AC6C] text-center py-2 font-semibold text-[#6C3130]">
            ${item.title}
          </p>
        </div>
        <div class="p-6">
          <p class="text-gray-700 mb-6">${item.desc}</p>
          <div class="flex justify-center">
  <a
    href="${item.url}"
    class="block w-full text-center text-[#6C3130] font-medium"
  >
    Read more
  </a>
</div>

        </div>
      </div>
    `;
            });
        }

        /* ===================== PRIMARY TABS ===================== */
        document.querySelectorAll(".primary-tab").forEach(tab => {
            tab.onclick = () => {
                document.querySelectorAll(".primary-tab").forEach(t => t.classList.remove("active"));
                tab.classList.add("active");
                activeType = tab.dataset.type;
                renderSecondaryTabs();
                renderCards();
            };
        });

        /* INIT */
        renderSecondaryTabs();
        renderCards();
    </script>

    <script>
        function getYouTubeEmbedUrl(url) {
            const match = url.match(
                /(?:youtube\.com\/(?:watch\?v=|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]+)/
            );
            return match ? `https://www.youtube.com/embed/${match[1]}` : "";
        }
    </script>
    <script>
        function openInstagram(url) {
            window.open(url, "_blank", "noopener,noreferrer");
        }
    </script>

    <script>
        function openVideo(url) {
            const embedUrl = getYouTubeEmbedUrl(url);

            const frame = document.getElementById("videoFrame");
            frame.src = embedUrl + "?autoplay=1&rel=0";

            const modal = document.getElementById("videoModal");
            modal.classList.remove("hidden");
            modal.classList.add("flex");
        }

        function closeVideo() {
            const frame = document.getElementById("videoFrame");
            frame.src = "";

            const modal = document.getElementById("videoModal");
            modal.classList.add("hidden");
            modal.classList.remove("flex");
        }
    </script>



    <?php require "./components/footer.php" ?>
</body>

</html>