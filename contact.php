<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | maAx Super Speciality Hospital</title>
<script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind CSS CDN -->
 

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            burgundy: {
              DEFAULT: '#5E2120',
              mid:     '#7A2B2A',
              light:   '#A0413F',
            },
            saffron: {
              DEFAULT: '#E8740C',
              light:   '#F59640',
              pale:    '#FFF1E5',
            },
            cream: {
              DEFAULT: '#F9F3EC',
              dark:    '#EFE5D8',
            },
            linen:  '#FAF6F1',
            ivory:  '#FFFDF9',
            gold:   '#C9933A',
          },
          fontFamily: {
            serif: ['"Cormorant Garamond"', 'Georgia', 'serif'],
            sans:  ['"DM Sans"', 'sans-serif'],
          },
          keyframes: {
            fadeUp: {
              '0%':   { opacity: '0', transform: 'translateY(24px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            },
          },
          animation: {
            'fade-up-1': 'fadeUp 0.55s ease both',
            'fade-up-2': 'fadeUp 0.55s 0.1s ease both',
            'fade-up-3': 'fadeUp 0.55s 0.2s ease both',
            'fade-up-4': 'fadeUp 0.55s 0.3s ease both',
            'fade-up-r': 'fadeUp 0.6s  0.15s ease both',
          },
          backgroundImage: {
            'hero-radial': `
              radial-gradient(ellipse 70% 60% at 110% -10%, rgba(232,116,12,0.22) 0%, transparent 60%),
              radial-gradient(ellipse 50% 80% at -10% 110%, rgba(255,200,100,0.08) 0%, transparent 60%)
            `,
            'hero-lines': `
              repeating-linear-gradient(
                90deg,
                rgba(255,255,255,0.03) 0px,
                rgba(255,255,255,0.03) 1px,
                transparent 1px,
                transparent 80px
              )
            `,
          },
          boxShadow: {
            'card':     '0 18px 50px rgba(94,33,32,0.08)',
            'card-lg':  '0 20px 60px rgba(94,33,32,0.10)',
            'saffron':  '0 8px 28px rgba(232,116,12,0.38)',
            'burgundy': '0 8px 24px rgba(94,33,32,0.25)',
          },
        },
      },
    }
  </script>

  <style>
    /* noise overlay */
    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
      pointer-events: none;
      z-index: 0;
    }
    .hero-grid-lines {
      background-image: repeating-linear-gradient(
        90deg,
        rgba(255,255,255,0.03) 0px,
        rgba(255,255,255,0.03) 1px,
        transparent 1px,
        transparent 80px
      );
    }
    /* float-down on hero-right */
    .hero-float { transform: translateY(48px); }
    @media (max-width: 900px) { .hero-float { transform: none; } }

    /* card top-border reveal on hover */
    .why-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(90deg, #E8740C, transparent);
      border-radius: 24px 24px 0 0;
      opacity: 0;
      transition: opacity 0.25s;
    }
    .why-card:hover::before { opacity: 1; }

    /* visit-card orb accents */
    .visit-orb-1 {
      position: absolute;
      bottom: -40px; right: -40px;
      width: 200px; height: 200px;
      border-radius: 50%;
      background: rgba(232,116,12,0.1);
      pointer-events: none;
    }
    .visit-orb-2 {
      position: absolute;
      top: -60px; right: -20px;
      width: 150px; height: 150px;
      border-radius: 50%;
      background: rgba(255,255,255,0.04);
      pointer-events: none;
    }

    /* select arrow reset */
    select { appearance: none; }
  </style>
</head>
<?php require "./header.php" ?>
<body class="bg-cream font-sans text-[#3A1515] overflow-x-hidden">

  <!-- ════════════════════════════════════════════════
       HERO
  ════════════════════════════════════════════════ -->
  <section class="relative bg-burgundy overflow-hidden px-6 pt-20 pb-0 lg:px-10 min-h-[520px] flex items-end">
    <!-- bg radials -->
    <div class="absolute inset-0 pointer-events-none"
         style="background: radial-gradient(ellipse 70% 60% at 110% -10%, rgba(232,116,12,0.22) 0%, transparent 60%), radial-gradient(ellipse 50% 80% at -10% 110%, rgba(255,200,100,0.08) 0%, transparent 60%);">
    </div>
    <!-- grid lines -->
    <div class="absolute inset-0 pointer-events-none hero-grid-lines"></div>

    <div class="relative z-10 mx-auto max-w-6xl w-full grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-end">

      <!-- LEFT -->
      <div class="pb-16">

        <!-- eyebrow -->
        <div class="animate-fade-up-1 inline-flex items-center gap-2.5 bg-white/10 border border-white/20 rounded-full pl-2 pr-5 py-1.5 mb-7 backdrop-blur-sm">
          <span class="w-6 h-6 rounded-full bg-saffron flex items-center justify-center flex-shrink-0">
            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" stroke="white" stroke-width="1.4" stroke-linecap="round"><path d="M6 1v5l3 1.5"/></svg>
          </span>
          <span class="text-[10px] font-semibold tracking-[0.2em] uppercase text-saffron-light">Contact &amp; Appointments</span>
        </div>

        <h1 class="animate-fade-up-2 font-serif text-4xl md:text-5xl lg:text-[56px] font-semibold leading-[1.1] text-white tracking-tight">
          We are here to guide you to the
          <em class="not-italic text-saffron-light">right care</em>, faster.
        </h1>

        <p class="animate-fade-up-3 mt-5 text-white/65 text-sm md:text-base leading-7 max-w-[460px]">
          Connect with maAx Super Speciality Hospital for appointments, specialist guidance, health enquiries, and visit support. Our team responds with warmth and clarity.
        </p>

        <div class="animate-fade-up-4 mt-9 flex flex-wrap gap-3.5">
          <a href="tel:+918182269400"
             class="inline-flex items-center gap-2 bg-saffron text-white text-[13px] font-semibold tracking-wide px-7 py-3.5 rounded-full shadow-saffron transition-all duration-200 hover:bg-[#d4660a] hover:-translate-y-0.5 hover:shadow-[0_12px_36px_rgba(232,116,12,0.48)]">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.1-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/>
            </svg>
            Call 081 822 69400
          </a>
          <a href="mailto:info@maAxhospital.com"
             class="inline-flex items-center gap-2 bg-transparent text-white/85 text-[13px] font-medium px-7 py-3.5 rounded-full border border-white/25 transition-all duration-200 hover:bg-white/10 hover:border-white/45 hover:text-white">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
            </svg>
            Email Our Team
          </a>
        </div>
      </div>

      <!-- RIGHT — floats down to overlap the next section -->
      <div class="animate-fade-up-r hero-float flex flex-col gap-3.5 pb-0">

        <!-- Phone -->
        <div class="flex items-center gap-4 bg-white/[0.07] border border-white/[0.13] rounded-2xl px-5 py-4 backdrop-blur-md transition hover:bg-white/10">
          <div class="w-11 h-11 rounded-[14px] bg-saffron/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#F59640" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.1-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/>
            </svg>
          </div>
          <div>
            <p class="text-[10px] font-semibold tracking-[0.18em] uppercase text-saffron-light mb-0.5">Hospital Phone</p>
            <a href="tel:+918182269400" class="font-serif text-[20px] font-semibold text-white hover:text-saffron-light transition-colors">081 822 69400</a>
          </div>
        </div>

        <!-- Email -->
        <div class="flex items-center gap-4 bg-white/[0.07] border border-white/[0.13] rounded-2xl px-5 py-4 backdrop-blur-md transition hover:bg-white/10">
          <div class="w-11 h-11 rounded-[14px] bg-saffron/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#F59640" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
            </svg>
          </div>
          <div>
            <p class="text-[10px] font-semibold tracking-[0.18em] uppercase text-saffron-light mb-0.5">Email Support</p>
            <a href="mailto:info@maAxhospital.com" class="font-serif text-[17px] font-semibold text-white hover:text-saffron-light transition-colors break-all">info@maAxhospital.com</a>
          </div>
        </div>

        <!-- Address -->
        <div class="flex items-center gap-4 bg-white/[0.07] border border-white/[0.13] rounded-2xl px-5 py-4 backdrop-blur-md transition hover:bg-white/10">
          <div class="w-11 h-11 rounded-[14px] bg-saffron/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#F59640" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 21c4.97-4.11 8-7.6 8-11a8 8 0 10-16 0c0 3.4 3.03 6.89 8 11z"/><circle cx="12" cy="10" r="2.5"/>
            </svg>
          </div>
          <div>
            <p class="text-[10px] font-semibold tracking-[0.18em] uppercase text-saffron-light mb-0.5">Visit Us</p>
            <span class="font-serif text-[17px] font-semibold text-white leading-tight">RMR Road, Durgigudi, Shivamogga</span>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ════════════════════════════════════════════════
       WHY CARDS
  ════════════════════════════════════════════════ -->
  <div class="mx-auto max-w-6xl px-6 lg:px-10 pt-24 pb-14">
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">

      <!-- Card 1 -->
      <div class="why-card relative bg-ivory border border-cream-dark rounded-3xl p-7 overflow-hidden transition-all duration-250 hover:-translate-y-1 hover:shadow-card">
        <p class="font-serif text-[40px] font-normal text-cream-dark leading-none mb-5">01</p>
        <div class="w-12 h-12 rounded-[14px] bg-gradient-to-br from-[#FFF3E8] to-[#FFE5C8] flex items-center justify-center mb-4">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#E8740C" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="8" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="12" y2="18"/>
          </svg>
        </div>
        <h3 class="font-serif text-[22px] font-semibold text-burgundy mb-2.5 leading-tight">Appointment Help</h3>
        <p class="text-[13.5px] text-[#7A5050] leading-[1.7]">Connect with the right department and specialist quickly with guidance from our patient support team.</p>
      </div>

      <!-- Card 2 -->
      <div class="why-card relative bg-ivory border border-cream-dark rounded-3xl p-7 overflow-hidden transition-all duration-250 hover:-translate-y-1 hover:shadow-card">
        <p class="font-serif text-[40px] font-normal text-cream-dark leading-none mb-5">02</p>
        <div class="w-12 h-12 rounded-[14px] bg-gradient-to-br from-[#FFF3E8] to-[#FFE5C8] flex items-center justify-center mb-4">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#E8740C" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 21c4.97-4.11 8-7.6 8-11a8 8 0 10-16 0c0 3.4 3.03 6.89 8 11z"/><circle cx="12" cy="10" r="2.5"/>
          </svg>
        </div>
        <h3 class="font-serif text-[22px] font-semibold text-burgundy mb-2.5 leading-tight">Hospital Location</h3>
        <p class="text-[13.5px] text-[#7A5050] leading-[1.7]">Centrally located in Shivamogga with easy access for patients and families across the Malnad region.</p>
      </div>

      <!-- Card 3 -->
      <div class="why-card relative bg-ivory border border-cream-dark rounded-3xl p-7 overflow-hidden transition-all duration-250 hover:-translate-y-1 hover:shadow-card">
        <p class="font-serif text-[40px] font-normal text-cream-dark leading-none mb-5">03</p>
        <div class="w-12 h-12 rounded-[14px] bg-gradient-to-br from-[#FFF3E8] to-[#FFE5C8] flex items-center justify-center mb-4">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#E8740C" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
          </svg>
        </div>
        <h3 class="font-serif text-[22px] font-semibold text-burgundy mb-2.5 leading-tight">Email Enquiries</h3>
        <p class="text-[13.5px] text-[#7A5050] leading-[1.7]">Send your questions and our experienced staff will guide you to the best next step for your care.</p>
      </div>

      <!-- Card 4 -->
      <div class="why-card relative bg-ivory border border-cream-dark rounded-3xl p-7 overflow-hidden transition-all duration-250 hover:-translate-y-1 hover:shadow-card">
        <p class="font-serif text-[40px] font-normal text-cream-dark leading-none mb-5">04</p>
        <div class="w-12 h-12 rounded-[14px] bg-gradient-to-br from-[#FFF3E8] to-[#FFE5C8] flex items-center justify-center mb-4">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#E8740C" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
          </svg>
        </div>
        <h3 class="font-serif text-[22px] font-semibold text-burgundy mb-2.5 leading-tight">Quick Response</h3>
        <p class="text-[13.5px] text-[#7A5050] leading-[1.7]">Use the form below and expect a prompt callback from our hospital team at a time that suits you.</p>
      </div>

    </div>
  </div>


  <!-- ════════════════════════════════════════════════
       FORM + INFO
  ════════════════════════════════════════════════ -->
  <div class="mx-auto max-w-6xl px-6 lg:px-10 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-[1.1fr_0.9fr] gap-7">

      <!-- ── FORM CARD ── -->
      <div class="bg-ivory border border-cream-dark rounded-[32px] p-9 md:p-11 shadow-card-lg">

        <!-- kicker -->
        <div class="flex items-center gap-2 mb-3">
          <span class="block w-5 h-0.5 rounded-full bg-saffron"></span>
          <span class="text-[11px] font-semibold tracking-[0.22em] uppercase text-saffron">Send an Enquiry</span>
        </div>

        <h2 class="font-serif text-[38px] font-semibold text-burgundy leading-[1.15] tracking-tight">
          Tell us how<br>we can help
        </h2>
        <p class="mt-3 text-sm text-[#7A5050] leading-7 max-w-md">
          Share your details and our team will reach out promptly. This form is ready for backend integration with email, CRM, or WhatsApp workflows.
        </p>

        <!-- Form fields -->
        <div class="mt-8 flex flex-col gap-4">

          <!-- Name + Email row -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col gap-1.5">
              <label class="text-[11px] font-semibold tracking-[0.1em] uppercase text-[#7A5050]">Full Name *</label>
              <input type="text" placeholder="Your full name"
                class="bg-cream border-[1.5px] border-cream-dark rounded-2xl px-4 py-3 text-sm text-[#3A1515] font-sans placeholder-[#B5977A] outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/10" />
            </div>
            <div class="flex flex-col gap-1.5">
              <label class="text-[11px] font-semibold tracking-[0.1em] uppercase text-[#7A5050]">Email Address *</label>
              <input type="email" placeholder="you@email.com"
                class="bg-cream border-[1.5px] border-cream-dark rounded-2xl px-4 py-3 text-sm text-[#3A1515] font-sans placeholder-[#B5977A] outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/10" />
            </div>
          </div>

          <!-- Phone -->
          <div class="flex flex-col gap-1.5">
            <label class="text-[11px] font-semibold tracking-[0.1em] uppercase text-[#7A5050]">Mobile Number *</label>
            <div class="grid grid-cols-[100px_1fr] gap-2.5">
              <div class="flex items-center justify-center gap-1.5 bg-cream-dark border-[1.5px] border-cream-dark rounded-2xl text-[13px] font-semibold text-burgundy">
                🇮🇳 +91
              </div>
              <input type="tel" placeholder="98765 43210"
                class="bg-cream border-[1.5px] border-cream-dark rounded-2xl px-4 py-3 text-sm text-[#3A1515] font-sans placeholder-[#B5977A] outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/10" />
            </div>
          </div>

          <!-- Department -->
          <div class="flex flex-col gap-1.5">
            <label class="text-[11px] font-semibold tracking-[0.1em] uppercase text-[#7A5050]">Department / Subject</label>
            <div class="relative">
              <select class="w-full bg-cream border-[1.5px] border-cream-dark rounded-2xl px-4 py-3 text-sm text-[#3A1515] font-sans outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/10 cursor-pointer">
                <option value="" disabled selected>Select a department</option>
                <option>General Enquiry</option>
                <option>Appointment Booking</option>
                <option>Emergency &amp; Trauma</option>
                <option>Cardiology</option>
                <option>Orthopaedics</option>
                <option>Neurology</option>
                <option>Oncology</option>
                <option>Paediatrics</option>
                <option>Other</option>
              </select>
              <!-- custom arrow -->
              <div class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2">
                <svg class="w-4 h-4 text-[#7A5050]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="6 9 12 15 18 9"/></svg>
              </div>
            </div>
          </div>

          <!-- Message -->
          <div class="flex flex-col gap-1.5">
            <label class="text-[11px] font-semibold tracking-[0.1em] uppercase text-[#7A5050]">Message *</label>
            <textarea rows="5" placeholder="Describe your concern or question…"
              class="bg-cream border-[1.5px] border-cream-dark rounded-2xl px-4 py-3 text-sm text-[#3A1515] font-sans placeholder-[#B5977A] outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/10 resize-y"></textarea>
          </div>

          <!-- Consent -->
          <label class="flex items-start gap-3 bg-[#FFF8F2] border border-[#F5DFC4] rounded-2xl p-4 cursor-pointer">
            <input type="checkbox" class="mt-0.5 w-4 h-4 accent-saffron flex-shrink-0" />
            <span class="text-[13px] text-[#7A5050] leading-[1.65]">I consent to maAx Super Speciality Hospital contacting me regarding my enquiry via call or email.</span>
          </label>

          <!-- Submit -->
          <div>
            <button type="button"
              class="inline-flex items-center gap-2.5 bg-burgundy text-white text-[13px] font-semibold tracking-wide px-8 py-3.5 rounded-full shadow-burgundy border-none cursor-pointer transition-all duration-200 hover:bg-[#3E1111] hover:-translate-y-0.5 hover:shadow-[0_12px_32px_rgba(94,33,32,0.35)]">
              Request a Call Back
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
              </svg>
            </button>
          </div>

        </div>
      </div>

      <!-- ── RIGHT COLUMN ── -->
      <div class="flex flex-col gap-5">

    <!-- Map -->
<!-- Map -->
<div class="rounded-[28px] overflow-hidden border border-cream-dark shadow-card flex-shrink-0">
  <iframe
    title="maAx Super Speciality Hospital Location"
    src="https://maps.google.com/maps?q=maAx%20Super%20Speciality%20Hospital%20Shivamogga&z=18&output=embed"
    class="w-full h-64 block border-0"
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

        <!-- Visit Card -->
        <div class="relative bg-burgundy rounded-[28px] p-9 text-white overflow-hidden shadow-[0_24px_60px_rgba(94,33,32,0.18)]">
          <div class="visit-orb-1"></div>
          <div class="visit-orb-2"></div>

          <!-- kicker -->
          <div class="flex items-center gap-2 mb-3">
            <span class="block w-5 h-0.5 rounded-full bg-white/25"></span>
            <span class="text-[10px] font-semibold tracking-[0.18em] uppercase text-white/45">Visit Details</span>
          </div>

          <h3 class="font-serif text-[26px] font-semibold text-white leading-tight mb-7">
            maAx Super Speciality Hospital
          </h3>

          <div class="flex flex-col gap-4 relative z-10">

            <!-- Address -->
            <div class="flex items-start gap-3.5">
              <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#F59640" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 21c4.97-4.11 8-7.6 8-11a8 8 0 10-16 0c0 3.4 3.03 6.89 8 11z"/><circle cx="12" cy="10" r="2.5"/>
                </svg>
              </div>
              <div>
                <p class="text-[10px] font-semibold tracking-[0.15em] uppercase text-white/45 mb-0.5">Address</p>
                <p class="text-sm text-white/90 leading-relaxed">RMR Road, Durgigudi,<br>Shivamogga, Karnataka</p>
              </div>
            </div>

            <div class="h-px bg-white/10"></div>

            <!-- Phone -->
            <div class="flex items-start gap-3.5">
              <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#F59640" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.1-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/>
                </svg>
              </div>
              <div>
                <p class="text-[10px] font-semibold tracking-[0.15em] uppercase text-white/45 mb-0.5">Phone</p>
                <a href="tel:+918182269400" class="text-sm text-white/90 hover:text-saffron-light transition-colors">081 822 69400</a>
              </div>
            </div>

            <div class="h-px bg-white/10"></div>

            <!-- Email -->
            <div class="flex items-start gap-3.5">
              <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#F59640" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
                </svg>
              </div>
              <div>
                <p class="text-[10px] font-semibold tracking-[0.15em] uppercase text-white/45 mb-0.5">Email</p>
                <a href="mailto:info@maAxhospital.com" class="text-sm text-white/90 hover:text-saffron-light transition-colors break-all">info@maAxhospital.com</a>
              </div>
            </div>

          </div>

          <!-- Note -->
          <div class="mt-6 relative z-10 bg-white/[0.07] border border-white/10 rounded-2xl p-4 text-[13px] text-white/70 leading-[1.7]">
            <strong class="text-saffron-light font-semibold">Planning a visit?</strong>
            Call ahead if you need specialist guidance, appointment support, or directions — we'll make sure you reach the right place.
          </div>

        </div>
      </div>

    </div>
  </div>


  <!-- ════════════════════════════════════════════════
       FOOTER STRIP
  ════════════════════════════════════════════════ -->
 <?php require "./components/footer.php" ?>

</body>
</html>