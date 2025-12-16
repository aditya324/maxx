<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="./src/output.css" rel="stylesheet">
  <style>
    /* ------------ CONFIG: change this value if you want different panel height */
    :root {
      --mega-height: 480px;
    }

    /* ===============================
   MEGA MENU BASE STYLES (fixed panel)
   =============================== */

    li.special {
      position: relative;
    }

    /* hidden by default - panel now has a fixed height */
    .mega {
      display: none;
      position: absolute;
      left: 0;
      top: 100%;
      margin-top: 12px;
      background: #ffffff;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      border: 1px solid #e6e6e6;
      border-radius: 10px;
      padding: 20px 28px;
      /* slightly smaller vertical padding to fit height */
      z-index: 9999;
      width: 950px;
      box-sizing: border-box;

      /* new: fixed height so panel doesn't resize — only Procedures scrolls */
      height: var(--mega-height);
      align-items: flex-start;
      /* keep column headers at top */
    }

    /* show on hover (desktop) */
    li.special:hover>.mega,
    li.special:focus-within>.mega {
      display: flex !important;
    }

    /* when toggled by JS on mobile */
    li.special.open>.mega {
      display: flex !important;
    }

    /* column layout - ensure columns do not stretch vertically */
    .mega .col {
      width: 33.333%;
      padding-right: 20px;
      box-sizing: border-box;
      overflow: visible;
      /* important: content can flow, but not create extra scroll for panel */
    }

    /* keep headings pinned at the top of their column */
    .mega .col h3 {
      margin-top: 0;
      margin-bottom: 12px;
      flex: 0 0 auto;
    }

    /* ===============================
   PROCEDURES: make ONLY the list scrollable
   =============================== */

    /* target the UL inside the procedures column to control scroll */
    .mega .col-middle>ul {
      /* calculate available space: panel height minus vertical paddings and header height
     If your h3 or padding sizes differ, tweak the calc() numbers accordingly. */
      max-height: calc(var(--mega-height) - 80px);
      /* 80px is a safe estimate for top padding + heading + bottom padding */
      overflow-y: auto;
      padding-right: 8px;
      margin: 0;
      box-sizing: border-box;
    }

    /* keep the Procedures column container from creating its own scroll */
    .mega .col-middle {
      display: flex;
      flex-direction: column;
    }

    /* ensure other columns flow naturally and don't produce internal scrollbars */
    .mega .col:not(.col-middle) ul {
      max-height: calc(var(--mega-height) - 40px);
      overflow: visible;
    }

    /* ===============================
   SLIM + DARK SCROLLBAR (WebKit + Firefox)
   =============================== */

    /* Webkit browsers */
    .mega .col-middle>ul::-webkit-scrollbar {
      width: 4px !important;
    }

    .mega .col-middle>ul::-webkit-scrollbar-track {
      background: transparent !important;
    }

    .mega .col-middle>ul::-webkit-scrollbar-thumb {
      background: #222 !important;
      border-radius: 10px !important;
    }

    .mega .col-middle>ul::-webkit-scrollbar-thumb:hover {
      background: #000 !important;
    }

    /* Firefox */
    .mega .col-middle>ul {
      scrollbar-width: thin !important;
      scrollbar-color: #222 transparent !important;
    }

    /* Safety: ensure the UL is scrollable in case something else changed overflow */
    .mega .col-middle>ul {
      overflow-y: auto !important;
    }

    /* ===============================
   RESPONSIVE (mobile) - panel becomes stacked & natural height
   =============================== */

    @media (max-width: 767px) {
      .mega {
        position: static;
        width: 100%;
        margin-top: 8px;
        border-radius: 8px;
        display: none;
        flex-direction: column;
        height: auto;
        /* allow height to grow on mobile */
        padding: 16px;
      }

      .mega .col {
        width: 100%;
        padding-right: 0;
      }

      /* on mobile let each UL have its own limited height if desired */
      .mega .col-middle>ul {
        max-height: 220px;
      }
    }
  </style>



</head>

<body class="font-sans">



  <nav class="fixed top-0 left-0 w-full bg-[#F4F4F4] z-100">
    <div class="flex items-center justify-between w-full px-6 py-3">

      <!-- LEFT: LOGOS -->
      <div class="flex items-center gap-6 shrink-0">
        <a href="./index.php"><img src="./assets/logo/logo.png" class="h-full" alt="Maax Logo"></a>
        <!-- <img src="./images/10th-anniversary.png" class="h-10" alt="10th Anniversary"> -->
      </div>

      <!-- HAMBURGER (MOBILE ONLY) -->
      <button
        data-collapse-toggle="navbar-menu"
        type="button"
        class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-[#6b2e26] hover:bg-[#efdcd4] focus:ring-2 focus:ring-[#cba89e]">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- DESKTOP MENU -->
      <ul class="hidden md:flex flex-1 justify-evenly text-[#6b2e26] font-normal text-lg ">
        <li><a href="./about.php" class="hover:text-[#a6533f]">About Us</a></li>
        <li class="special">
          <a href="#" class="" id="specialToggle">Our Specialities</a>

          <!-- MEGA (keeps your look but plain-css controlled visibility) -->
          <div class="mega" aria-hidden="true" id="megaMenu">
            <div class="col">
              <h3 class="text-[#F58220] font-semibold mb-4">Specialty</h3>
              <ul class="space-y-3 text-[#6C3130]">
                <li><a href="./cardiology.php">Heart Care</a></li>
                <li><a href="./bone-and-joint.php">Bone &amp; Joint Care</a></li>
                <li><a href="./women-health.php">Women’s Health</a></li>
                <li><a href="./child-care.php">Child Care</a></li>
                <li><a href="./brain-and-spine-care.php">Brain &amp; Spine Care</a></li>
                <li><a href="./kidney-care.php">Kidney Care</a></li>
                <li><a href="./surgery-and-laparoscopy.php">Surgery &amp; Laparoscopy</a></li>
                <li><a href="./critical-care.php">Critical Care &amp; ICU</a></li>
                <li><a href="./emergency-care.php">Emergency Care</a></li>
                <li><a href="./rehablitation-and-recovery.php">Rehabilitation &amp; Recovery</a></li>
              </ul>
            </div>

            <div class="col col-middle">
              <h3 class="text-[#F58220] font-semibold mb-4">Procedures</h3>
              <ul class="space-y-3 text-[#6C3130]">
                <li><a href="./angiography.php">Angiography</a></li>
                <li><a href="./angioplasty.php">Angioplasty</a></li>
                <li><a href="./appendectomy.php">Appendectomy</a></li>
                <li><a href="./biopsy.php">Biopsy</a></li>
                <li><a href="./Brain-surgery.php">Brain Surgery</a></li>
                <li><a href="./bronchoscopy.php">Bronchoscopy</a></li>
                <li><a href="./bypass-surgery.php">Bypass Surgery</a></li>
                <li><a href="./cataract-surgery.php">Cataract Surgery</a></li>
                <li><a href="./c-section.php">C-Section</a></li>
                <li><a href="./dialysis.php">Dialysis</a></li>
                <li><a href="./endoscopy.php">Endoscopy</a></li>
                <li><a href="./laser-surgery.php">Laser Surgery</a></li>
              </ul>
            </div>

            <div class="col">
              <h3 class="text-[#F58220] font-semibold mb-4">Diagnostic services</h3>
              <ul class="space-y-3 text-[#6C3130]">
                <li>Bronchoscopy</li>
                <li>Cath lab</li>
                <li>Dialysis</li>
                <li>Endoscopy</li>
                <li>CT</li>
                <li>MRI</li>
                <li>Pulmonary function test</li>
                <li>TMT</li>
                <li>Ultrasound</li>
                <li>X-RAY</li>
              </ul>
            </div>
          </div>
        </li>


        <li><a href="./doctors.php" class="hover:text-[#a6533f]">Our Doctors</a></li>
        <li class="flex items-center gap-1">

          <a href="./cardiology.php" class="hover:text-[#a6533f]">Health Checkup</a>
        </li>
        <li><a href="./patients-corner.php" class="hover:text-[#a6533f]">Patient’s Corner</a></li>
      </ul>

    </div>

    <!-- MOBILE MENU -->
    <div id="navbar-menu" class="hidden md:hidden bg-[#fdf7f3] border-t border-[#e8ddd8]">
      <ul class="flex flex-col gap-3 px-6 py-4 text-[#6b2e26] text-sm font-medium">
        <li><a href="./about.php" class="block hover:text-[#a6533f]">About Us</a></li>
        <li><a href="./specialities.php" class="block hover:text-[#a6533f]">Our Specialities</a></li>
        <li><a href="./doctors.php" class="block hover:text-[#a6533f]">Our Doctors</a></li>
        <li class="flex items-center gap-2">

          <a href="./cardiology.php" class="hover:text-[#a6533f]">Health Checkup</a>
        </li>
        <li><a href="./patients-corner.php" class="block hover:text-[#a6533f]">Patient’s Corner</a></li>
      </ul>
    </div>
  </nav>




</body>

<script>
  (function() {
    const li = document.querySelector('li.special');
    const toggle = document.getElementById('specialToggle');
    const mega = document.getElementById('megaMenu');

    // allow click/tap to toggle (useful on mobile where hover isn't available)
    toggle.addEventListener('click', function(e) {
      // prevent default only on touch/click toggling; keep links functional if you change to <a href="...">
      e.preventDefault();
      const isOpen = li.classList.toggle('open');
      mega.setAttribute('aria-hidden', !isOpen);
    });

    // close when clicking outside
    document.addEventListener('click', function(e) {
      if (!li.contains(e.target)) {
        li.classList.remove('open');
        mega.setAttribute('aria-hidden', 'true');
      }
    });

    // close on Escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        li.classList.remove('open');
        mega.setAttribute('aria-hidden', 'true');
      }
    });
  })();
</script>
<script>
  (function() {
    const css = `
/* High-specificity selector to avoid Tailwind overrides */
nav li.special .mega .col-middle::-webkit-scrollbar { width: 4px !important; }
nav li.special .mega .col-middle::-webkit-scrollbar-track { background: transparent !important; }
nav li.special .mega .col-middle::-webkit-scrollbar-thumb { background: #222 !important; border-radius: 10px !important; }
nav li.special .mega .col-middle::-webkit-scrollbar-thumb:hover { background: #000 !important; }

/* Firefox */
nav li.special .mega .col-middle { scrollbar-width: thin !important; scrollbar-color: #222 transparent !important; }

/* Safety: ensure .mega is not set to overflow hidden accidentally */
nav li.special .mega .col-middle { overflow-y: auto !important; }

/* If your .col-middle isn't nested exactly like that, also target a bit more generally */
.mega .col-middle::-webkit-scrollbar { width: 4px !important; }
.mega .col-middle::-webkit-scrollbar-track { background: transparent !important; }
.mega .col-middle::-webkit-scrollbar-thumb { background: #222 !important; border-radius: 10px !important; }
.mega .col-middle { scrollbar-width: thin !important; scrollbar-color: #222 transparent !important; overflow-y: auto !important; }
  `;

    const st = document.createElement('style');
    st.setAttribute('data-injected', 'mega-scrollbar-fix');
    st.appendChild(document.createTextNode(css));
    document.head.appendChild(st);
  })();
</script>


</html>