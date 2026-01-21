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
    </div>
  </div>

  <section class="max-w-7xl mx-auto px-6 py-8">

    <!-- SEARCH -->
    <div class="flex gap-2 mb-5">
      <input class="flex-1 px-4 py-3 rounded-lg border" placeholder="Search content..." />
      <button class="bg-orange-500 px-5 py-3 rounded-lg text-white">Search</button>
    </div>

    <!-- SECONDARY TABS -->
    <div id="secondary-tabs" class="flex gap-3 mb-6 overflow-x-auto"></div>

    <!-- CONTENT -->
    <div id="cards"></div>

  </section>

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
        recent: {
          large: [{
              title: "Causes for Liver Damage – Dr. Prasanna Basavarajappa",
              url: "https://www.youtube.com/watch?v=m1srf0jYd4s",
              duration: "1:01"
            },
            {
              title: "Understanding Liver Health",
              url: "https://www.youtube.com/watch?v=kSD8aIStTnw",
              duration: "1:12"
            }
          ],
          shorts: [{
              title: "Is Morning Stiffness a Sign of Arthritis?",
              url: "https://youtube.com/shorts/kZLCcPJUtjs?si=DuBkYmJMj7MwaBNV",

            },
            {
              title: "Bone Health Tips",
              url: "https://youtube.com/shorts/wqkXHQR744w?si=IsQ1Rw7O6Lps-xGe",

            }
          ]
        }
      }
    };

    let activeType = "blogs";
    let activeFilter = "recent";

    const cards = document.getElementById("cards");
    const secondaryTabs = document.getElementById("secondary-tabs");

    /* ===================== SECONDARY TABS ===================== */
    function renderSecondaryTabs() {
      secondaryTabs.innerHTML = "";

      if (activeType === "videos") {
        secondaryTabs.innerHTML = `
      <button class="secondary-tab active" data-filter="recent">Recent Videos</button>
    `;
      } else {
        secondaryTabs.innerHTML = `
      <button class="secondary-tab active" data-filter="recent">Recent Articles</button>
      <button class="secondary-tab" data-filter="trending">Trending Articles</button>
    `;
      }

      document.querySelectorAll(".secondary-tab").forEach(tab => {
        tab.onclick = () => {
          document.querySelectorAll(".secondary-tab").forEach(t => t.classList.remove("active"));
          tab.classList.add("active");
          activeFilter = tab.dataset.filter;
          renderCards();
        };
      });

      activeFilter = "recent";
    }

    /* ===================== RENDER CONTENT ===================== */
    function renderCards() {
      cards.innerHTML = "";

      /* -------- VIDEOS -------- */
      if (activeType === "videos") {
        const v = data.videos.recent;

        cards.innerHTML = `
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        ${v.large.map(video => `
          <a href="${video.url}" target="_blank"
            class="bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition">
            <div class="relative">
              <img src="${ytThumb(video.url)}"
                   class="w-full h-48 object-cover">
              <span class="absolute bottom-2 right-2 bg-black/80 text-white text-xs px-2 py-1 rounded">
                ${video.duration}
              </span>
            </div>
            <div class="p-4 font-semibold text-sm">
              ${video.title}
            </div>
          </a>
        `).join("")}
      </div>

      <div class="grid grid-cols-1 md:grid-cols-8 gap-4 mt-6">
        ${v.shorts.map(short => `
          <a href="${short.url}" target="_blank"
            class="bg-white rounded-lg overflow-hidden shadow hover:shadow-md transition">
            <img src="${ytThumb(short.url)}"
                 class="h-40 w-full object-cover">
            <div class="p-2 text-xs font-medium">${short.title}</div>
           
          </a>
        `).join("")}
      </div>
    `;
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

</body>

</html>