<?php
$page_title = 'Home';
include 'header.php';
?>

<main class="flex-1">
  <!-- HERO BANNER SLIDER + 4-PILLAR ACTION BAR -->
  <section class="relative bg-navy-950 overflow-hidden border-b border-navy-800">
    <div id="hero-slider-container" class="relative w-full h-[240px] sm:h-[420px] md:h-[520px] lg:h-[600px] bg-navy-950">
      <div class="hero-slide absolute inset-0 opacity-100 z-10" data-slide="0">
        <img src="<?php echo $url;?>banners/item_2033_1_oad.webp" alt="DICCAI Inclusive Workplace" class="w-full h-full object-cover object-center" />
        <div class="absolute inset-0 bg-gradient-to-r from-navy-950/85 via-navy-950/45 to-transparent flex items-center">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-xl text-white">
              <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/20 border border-amber-400/40 text-amber-300 text-xs font-bold uppercase tracking-wider mb-3">
                <i class="fa-solid fa-star"></i> Empowering Divyang Entrepreneurs
              </span>
              <h1 class="font-display font-extrabold text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Divyang Indian Chamber of Commerce &amp; Industry
              </h1>
              <p class="text-slate-200 text-xs sm:text-base mb-5 hidden sm:block leading-relaxed">
                Transitioning differently-abled citizens from job seekers to self-reliant business leaders, creators, and nation builders.
              </p>
              <div class="flex flex-wrap gap-3">
                <a href="<?php echo $url;?>qr-code" class="px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl bg-amber-500 hover:bg-amber-400 text-navy-950 font-bold text-xs sm:text-sm shadow-lg transition inline-flex items-center gap-2">
                  <i class="fa-solid fa-hand-holding-heart"></i> Support Our Mission
                </a>
                <a href="<?php echo $url;?>about" class="px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl bg-white/15 hover:bg-white/25 backdrop-blur-sm text-white border border-white/25 font-semibold text-xs sm:text-sm transition">
                  Explore DICCAI
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="hero-slide absolute inset-0 opacity-0 z-0 pointer-events-none" data-slide="1">
        <img src="<?php echo $url;?>banners/item_2035_1_ad1.webp" alt="DICCAI Vision" class="w-full h-full object-contain bg-[#eef7e6]" />
      </div>

      <div class="hero-slide absolute inset-0 opacity-0 z-0 pointer-events-none" data-slide="2">
        <img src="<?php echo $url;?>banners/item_2048_1_-3.webp" alt="DICCAI Core Initiatives" class="w-full h-full object-contain bg-[#eaf6e3]" />
      </div>

      <button onclick="moveHeroSlide(-1)" aria-label="Previous Slide" class="hidden sm:flex absolute left-4 lg:left-8 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-navy-950/60 hover:bg-amber-500 text-white hover:text-navy-950 items-center justify-center transition backdrop-blur-sm border border-white/20">
        <i class="fa-solid fa-chevron-left"></i>
      </button>
      <button onclick="moveHeroSlide(1)" aria-label="Next Slide" class="hidden sm:flex absolute right-4 lg:right-8 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-navy-950/60 hover:bg-amber-500 text-white hover:text-navy-950 items-center justify-center transition backdrop-blur-sm border border-white/20">
        <i class="fa-solid fa-chevron-right"></i>
      </button>

      <div class="absolute bottom-4 sm:bottom-6 left-1/2 -translate-x-1/2 z-20 flex items-center gap-2.5 bg-navy-950/50 px-3 py-1.5 rounded-full backdrop-blur-sm">
        <button onclick="goToHeroSlide(0)" aria-label="Slide 1" class="hero-dot h-2.5 rounded-full transition-all w-8 bg-amber-400"></button>
        <button onclick="goToHeroSlide(1)" aria-label="Slide 2" class="hero-dot h-2.5 rounded-full transition-all w-2.5 bg-white/50 hover:bg-white/80"></button>
        <button onclick="goToHeroSlide(2)" aria-label="Slide 3" class="hero-dot h-2.5 rounded-full transition-all w-2.5 bg-white/50 hover:bg-white/80"></button>
      </div>
    </div>

    <!-- 4-Pillar Action Strip -->
    <div class="bg-navy-900 border-t border-navy-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
          <a href="<?php echo $url;?>our-objectives" class="flex items-center gap-3.5 p-3 rounded-xl bg-navy-800/60 hover:bg-navy-800 border border-navy-700/70 transition group">
            <div class="w-11 h-11 rounded-lg bg-amber-500/15 text-amber-400 flex items-center justify-center text-lg shrink-0 group-hover:bg-amber-500 group-hover:text-navy-950 transition"><i class="fa-solid fa-bullseye"></i></div>
            <div><div class="text-white font-display font-bold text-sm">Our Objectives</div><div class="text-slate-400 text-xs">7 Core Development Goals</div></div>
          </a>
          <a href="<?php echo $url;?>vip-mart" class="flex items-center gap-3.5 p-3 rounded-xl bg-navy-800/60 hover:bg-navy-800 border border-navy-700/70 transition group">
            <div class="w-11 h-11 rounded-lg bg-emerald-600/25 text-emerald-400 flex items-center justify-center text-lg shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition"><i class="fa-solid fa-store"></i></div>
            <div><div class="text-white font-display font-bold text-sm">Divya VIP Mart</div><div class="text-slate-400 text-xs">Local to Global Retail Hub</div></div>
          </a>
          <a href="<?php echo $url;?>social-launge" class="flex items-center gap-3.5 p-3 rounded-xl bg-navy-800/60 hover:bg-navy-800 border border-navy-700/70 transition group">
            <div class="w-11 h-11 rounded-lg bg-amber-500/15 text-amber-400 flex items-center justify-center text-lg shrink-0 group-hover:bg-amber-500 group-hover:text-navy-950 transition"><i class="fa-solid fa-hands-holding-circle"></i></div>
            <div><div class="text-white font-display font-bold text-sm">Executive Lounge</div><div class="text-slate-400 text-xs">Accessible Public Hubs</div></div>
          </a>
          <a href="<?php echo $url;?>csr-funds" class="flex items-center gap-3.5 p-3 rounded-xl bg-navy-800/60 hover:bg-navy-800 border border-navy-700/70 transition group">
            <div class="w-11 h-11 rounded-lg bg-emerald-600/25 text-emerald-400 flex items-center justify-center text-lg shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition"><i class="fa-solid fa-handshake-angle"></i></div>
            <div><div class="text-white font-display font-bold text-sm">CSR Partnerships</div><div class="text-slate-400 text-xs">80G &amp; CSR-1 Certified</div></div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- WELCOME INTRODUCTION + CENSUS SNAPSHOT -->
  <section class="py-16 sm:py-20 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
        <div class="lg:col-span-8">
          <span class="text-xs font-bold uppercase tracking-widest text-amber-600">Welcome to DICCAI</span>
          <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-navy-900 mt-1.5 mb-3 leading-tight">
            Welcome To Divyang Indian Chamber of Commerce &amp; Industry
          </h2>
          <div class="section-title-bar mb-6"></div>
          <p class="text-slate-600 leading-relaxed mb-4">
            The Divyang Indian Chamber of Commerce and Industry (DICCAI)'s objective is to make Divyang
            people self-reliant by providing employment and various skill-learning opportunities to
            Divyang people who are also unable to work independently. For this, with the help of orphans,
            Aboriginal People, women's Self-Help groups, farmers, and people with some health issues like cancer,
            thyroid disease, etc., DICCAI uses its talent, entrepreneurs, and product development and
            manufacturing packages from all of them. DICCAI provides guidance, a marketplace,
            advertisement, and promotion exhibitions of Divyang products in and out of India. Divyang people run
            Divyang Executive Lounge along with some social NGOs and a few private companies.
          </p>
          <p class="text-slate-600 leading-relaxed mb-6">
            From the establishment of a well-equipped skill development center and starting a business
            to provide all types of Educational Aid for various schemes for self-employment and other
            welfare opportunities all over India, DICCAI is focused on several initiatives across the country
            for the differently-abled. DICCAI is also looking to create a market hub for selling goods made
            for the self-Help group of Divyang &amp; Anath people. Further support by way of starting a
            Health Care Centre, Rehabilitation &amp; Meditation Centre for Divyang, Vrudhang, and Anath people and
            lastly to create infrastructure for the development of Entertainment &amp; sports activities within
            the Divyang &amp; Anath people.
          </p>
          <div class="flex flex-wrap gap-3">
            <a href="<?php echo $url;?>about" class="px-6 py-3 rounded-xl bg-navy-900 hover:bg-navy-800 text-white font-bold text-sm shadow-sm transition inline-flex items-center gap-2">Read Full Story <i class="fa-solid fa-arrow-right"></i></a>
            <a href="<?php echo $url;?>achivements?gallery=1" class="px-6 py-3 rounded-xl bg-slate-100 hover:bg-amber-50 text-navy-900 hover:text-amber-700 border border-slate-200 font-bold text-sm transition inline-flex items-center gap-2"><i class="fa-solid fa-trophy text-amber-600"></i> View Achievements</a>
          </div>
        </div>

        <div class="lg:col-span-4 bg-slate-50 rounded-2xl p-6 sm:p-7 border border-slate-200 shadow-sm">
          <div class="flex items-center gap-3 mb-5 pb-4 border-b border-slate-200">
            <div class="w-11 h-11 rounded-xl bg-navy-900 text-amber-400 flex items-center justify-center text-lg"><i class="fa-solid fa-chart-pie"></i></div>
            <div><h3 class="font-display font-bold text-lg text-navy-900">National Census Context</h3><p class="text-xs text-slate-500">India Disability Statistics</p></div>
          </div>
          <div class="grid grid-cols-2 gap-3.5 mb-5">
            <div class="bg-white p-4 rounded-xl border border-slate-200 text-center"><div class="font-display font-extrabold text-2xl text-navy-900">2.68 Cr</div><div class="text-xs text-slate-500 mt-1">Disabled Population (2.2%)</div></div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 text-center"><div class="font-display font-extrabold text-2xl text-amber-600">36%</div><div class="text-xs text-slate-500 mt-1">Employed (~98 Lakh)</div></div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 text-center"><div class="font-display font-extrabold text-2xl text-emerald-700">45%</div><div class="text-xs text-slate-500 mt-1">Disabled Women Literacy</div></div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 text-center"><div class="font-display font-extrabold text-2xl text-navy-900">&lt;10%</div><div class="text-xs text-slate-500 mt-1">Graduate Degree Holders</div></div>
          </div>
          <a href="<?php echo $url;?>qr-code" class="w-full py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm text-center block transition shadow-sm">
            <i class="fa-solid fa-heart mr-1.5"></i> Contribute to Empowerment
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- EMPLOYMENT & LITERACY REALITY -->
  <section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5 flex justify-center">
          <div class="bg-white p-3 rounded-2xl shadow-md border border-slate-200 w-full max-w-md">
            <img src="https://www.diccai.com/uploads/media/media_1762432143_1.webp" alt="DICCAI Employment Statistics" class="w-full h-auto rounded-xl object-cover" loading="lazy">
          </div>
        </div>
        <div class="lg:col-span-7">
          <span class="text-xs font-bold uppercase tracking-widest text-emerald-700">Livelihood &amp; Inclusion</span>
          <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-navy-900 mt-1 mb-3">Bridging the Employment &amp; Literacy Gap</h2>
          <div class="section-title-bar mb-5"></div>
          <p class="text-slate-600 leading-relaxed text-justify">
            The latest Census data of India shows that out of the total
            population, roughly 2.2 percent of the population i.e. 2.68 crore persons are “disabled”. Of
            this only 36% of the disabled population (which is approximately 98lakh) are employed,
            including 71 lakh men and 27lakh women. The brunt of disability seems to have heavily fallen on women
            as amongst disabled women; the literacy rate is only 45% whereas the overall women literacy
            rate in India is 65%. Amongst disabled men, the literacy rate is 62%. Less than 10 percent disabled
            people have a graduate degree, making meaningful employment even more difficult for them,
            rendering them suitable only for menial or low paying jobs.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- INCLUSIVE EDUCATION -->
  <section class="py-16 sm:py-20 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-7 order-2 lg:order-1 space-y-3.5 text-slate-600 leading-relaxed text-justify">
          <span class="text-xs font-bold uppercase tracking-widest text-amber-600">Education &amp; Accessibility</span>
          <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-navy-900 mt-1 mb-3">Inclusive Education &amp; Continuing Learning</h2>
          <div class="section-title-bar mb-5"></div>
          <p>Compared to the national average of 26%, 45% of Indians with disabilities are illiterate.</p>
          <p>
            Despite the promise of the universal access to education for all (Sarva Shiksha Abhiyaan),
            children with special needs form the largest chunk of out-of-school children. A study of
            government data reveals that even all disabilities are not equal as children with locomotor
            or visual disability are more likely to go to school with only about 20-30% out of school as
            compared to over 64% children with mental disabilities out of school.
          </p>
          <p>
            What keeps children out of school then? One of the major reasons is accessibility - both in
            terms of physical access as well as attitudinal change of educators. While there are several
            special needs school already operational, many lack the necessary equipment or software to
            cater to the needs of special needs children. Also many special need children can be integrated
            into regular schools provided with the willingness and acceptance from school managements. We
            propose to start workshops to sensitise schools to needs of special children, training for teachers,
            providing teaching aids wherever necessary, getting industry to sponsor physical changes
            like building ramps, accessible toilets in schools and more.
          </p>
          <p>
            Besides school education, adult and continuing education is an equally important area of
            work for disabled persons. It is important to note that while the number of special needs
            students enrolled in primary education is significant, the numbers see a sharp drop when it comes to
            secondary and higher education, indicating a high drop-out rate. To enable such persons
            later in life, providing them adult and continuing education opportunities become important.
          </p>
        </div>
        <div class="lg:col-span-5 order-1 lg:order-2 flex justify-center">
          <div class="bg-slate-50 p-3 rounded-2xl shadow-md border border-slate-200 w-full max-w-md">
            <img src="https://www.diccai.com/uploads/media/media_1762432154_2.webp" alt="DICCAI Education Programs" class="w-full h-auto rounded-xl object-cover" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- KEY OBJECTIVES ROADMAP -->
  <section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5 flex justify-center">
          <div class="bg-white p-3 rounded-2xl shadow-md border border-slate-200 w-full max-w-md">
            <img src="https://www.diccai.com/uploads/media/media_1762432165_3.webp" alt="DICCAI Empowerment Objectives" class="w-full h-auto rounded-xl object-cover" loading="lazy">
          </div>
        </div>
        <div class="lg:col-span-7">
          <span class="text-xs font-bold uppercase tracking-widest text-emerald-700">Strategic Roadmap</span>
          <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-navy-900 mt-1 mb-3">Key Objectives of DICCAI</h2>
          <div class="section-title-bar mb-5"></div>
          <p class="text-slate-700 font-medium leading-relaxed mb-4">
            To provide access to quality education to make them a better citizen and bring them in the mainstream of the society.
          </p>
          <ul class="space-y-3 text-slate-600">
            <li class="flex items-start gap-3 bg-white p-3.5 rounded-xl border border-slate-200"><i class="fa-solid fa-circle-check text-emerald-600 mt-1 shrink-0"></i><span>To provide skill enhancement and entrepreneurship development programmes to make them more employable and self-dependent.</span></li>
            <li class="flex items-start gap-3 bg-white p-3.5 rounded-xl border border-slate-200"><i class="fa-solid fa-circle-check text-emerald-600 mt-1 shrink-0"></i><span>To support their ongoing income generation activities.</span></li>
            <li class="flex items-start gap-3 bg-white p-3.5 rounded-xl border border-slate-200"><i class="fa-solid fa-circle-check text-emerald-600 mt-1 shrink-0"></i><span>To boost their morale and help them to live a normal life being financially independent.</span></li>
            <li class="flex items-start gap-3 bg-white p-3.5 rounded-xl border border-slate-200"><i class="fa-solid fa-circle-check text-emerald-600 mt-1 shrink-0"></i><span>To take the benefits of Government schemes to the beneficiaries.</span></li>
            <li class="flex items-start gap-3 bg-white p-3.5 rounded-xl border border-slate-200"><i class="fa-solid fa-circle-check text-emerald-600 mt-1 shrink-0"></i><span>To build sustainable infrastructure for differently abled, elderly, dependent women and orphaned children.</span></li>
            <li class="flex items-start gap-3 bg-white p-3.5 rounded-xl border border-slate-200"><i class="fa-solid fa-circle-check text-emerald-600 mt-1 shrink-0"></i><span>To extend financial support by way of sponsored programs.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- EXECUTIVE LOUNGE + 10 CONCEPTS + SPECIAL INITIATIVES + CORE VALUES + CREDENTIALS -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
      <div class="bg-gradient-to-br from-navy-900 to-navy-950 text-white rounded-3xl p-7 sm:p-10 shadow-lg border border-navy-800">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
          <div class="lg:col-span-7">
            <span class="inline-block px-3 py-1 rounded-full bg-amber-500/20 text-amber-300 text-xs font-bold uppercase tracking-wider mb-3">Flagship Infrastructure</span>
            <h2 class="font-display font-extrabold text-2xl sm:text-4xl mb-4">Divyang Executive Lounge</h2>
            <p class="text-slate-300 leading-relaxed mb-3">Divyang Service Lounge is run by Divyang people and is located over a Bus stand, railway station, marketplace, highway, and many rush areas.</p>
            <p class="text-slate-300 leading-relaxed mb-3">We will also be providing them with professional guidance about financial aid.</p>
            <p class="text-slate-300 leading-relaxed mb-6">Professional trainers will give them Skill Development training.</p>
            <a href="<?php echo $url;?>social-launge" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-400 text-navy-950 font-bold text-sm transition">Explore Divya Service Lounge <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="lg:col-span-5 bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/15">
            <p class="text-amber-300 font-display font-bold text-sm uppercase tracking-wider mb-4">Divyang Executive Lounge as below:</p>
            <div class="grid grid-cols-2 gap-3 text-sm font-semibold">
              <div class="bg-navy-950/70 p-3.5 rounded-xl border border-white/10"><i class="fa-solid fa-book-open-reader text-amber-400 mr-2"></i>E-Library</div>
              <div class="bg-navy-950/70 p-3.5 rounded-xl border border-white/10"><i class="fa-solid fa-restroom text-amber-400 mr-2"></i>E-Toilet</div>
              <div class="bg-navy-950/70 p-3.5 rounded-xl border border-white/10"><i class="fa-solid fa-utensils text-amber-400 mr-2"></i>Food Court</div>
              <div class="bg-navy-950/70 p-3.5 rounded-xl border border-white/10"><i class="fa-solid fa-wifi text-amber-400 mr-2"></i>WiFi</div>
              <div class="bg-navy-950/70 p-3.5 rounded-xl border border-white/10"><i class="fa-solid fa-couch text-amber-400 mr-2"></i>Waiting Room</div>
              <div class="bg-navy-950/70 p-3.5 rounded-xl border border-white/10"><i class="fa-solid fa-baby-carriage text-amber-400 mr-2"></i>Hirkani Kaksha</div>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="max-w-3xl mb-8">
          <span class="text-xs font-bold uppercase tracking-widest text-amber-600">Visionary Policy &amp; Welfare</span>
          <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-navy-900 mt-1 mb-3">DICCAI Concepts / Plans</h2>
          <div class="section-title-bar mb-4"></div>
          <p class="text-slate-600 leading-relaxed">
            For the overall development &amp; empowerment of differently-abled person through the joint
            initiative &amp; special concept of Hon'ble founder president of Divyang Indian Chamber of Commerce &amp;
            Industry we have brought 10 special concept &amp; schemes and this schemes will soon be implemented by the
            support of government, the philanthropist &amp; social Organization.
          </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
          <?php
          $concepts = [
            'Skill Development Program',
            "Divyam's Service Lounge.",
            'Food Insurance Scheme.',
            'Caretaker for People with disability.',
            'Request to waive GST for Divyangjan.',
            'Demand for some percentage reservation in government tender for goods made by Divyang,',
            'Demand to provide free or low cost medical services to the differently-abled.',
            'Divyang Health Insurance for Persons with Disabilities for diseases like Cancer, etc.',
            'Divyang Research Centre',
            'To start a help center for the differently-abled.'
          ];
          foreach ($concepts as $i => $c): ?>
            <div class="bg-slate-50 hover:bg-white rounded-2xl p-5 border border-slate-200 hover:border-amber-400 hover:shadow-md transition">
              <span class="w-8 h-8 rounded-lg bg-navy-900 text-amber-400 font-display font-bold text-xs flex items-center justify-center mb-3"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
              <p class="text-sm font-semibold text-navy-900 leading-snug"><?php echo htmlspecialchars($c); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
        <div class="lg:col-span-5 bg-amber-50/70 rounded-2xl p-7 border border-amber-200 flex flex-col justify-between">
          <div>
            <span class="text-xs font-bold uppercase tracking-widest text-amber-700">Grassroots Enterprise</span>
            <h2 class="font-display font-extrabold text-2xl text-navy-900 mt-1 mb-3">Special Initiatives of DICCAI</h2>
            <div class="section-title-bar mb-5"></div>
            <p class="text-slate-700 leading-relaxed">
              While merely forming a <strong>Bachat Gat (SHG)</strong> is not a big achievement, sustaining it
              and using it as a tool for self and group development is essential. Most of the <strong>Self Help Group</strong> have
              failed because they lacked proper guidance and proper vision and a sense of direction. As a special initiative,
              DICCAI would provide guidance and support in setting up, registration as well as product development and sale
              through finding relevant markets.
            </p>
          </div>
          <div class="mt-6 pt-5 border-t border-amber-200/80 flex items-center justify-between">
            <span class="text-xs font-bold text-navy-900 uppercase">Marketplace Access</span>
            <a href="<?php echo $url;?>vip-mart" class="text-sm font-bold text-amber-700 hover:text-navy-900 transition">Divya VIP Mart &rarr;</a>
          </div>
        </div>

        <div class="lg:col-span-7 bg-slate-50 rounded-2xl p-7 border border-slate-200">
          <span class="text-xs font-bold uppercase tracking-widest text-emerald-700">Guiding Principles</span>
          <h2 class="font-display font-extrabold text-2xl text-navy-900 mt-1 mb-3">Our Core Values</h2>
          <div class="section-title-bar mb-4"></div>
          <p class="text-slate-600 leading-relaxed mb-4">
            We believe that every individual, irrespective of ability or disability, deserves a right to
            work and the dignity of financial independence.
          </p>
          <ol class="space-y-2.5 text-sm text-slate-700">
            <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-navy-900 text-white text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">1</span><span>We believe that every individual has skills and competence suitable for some type of gainful employment and aim to establish a system that enables to provide employment suitable for them</span></li>
            <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-navy-900 text-white text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">2</span><span>We believe that PWDs have skills and abilities that can contribute meaningfully and economically to society</span></li>
            <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-navy-900 text-white text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">3</span><span>We believe that PWDs deserve employment that is on par with their fully-abled counterparts and to ensure that they are not cheated of their rightful wages</span></li>
            <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-navy-900 text-white text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">4</span><span>We believe in educating and training PWDs to empower them</span></li>
            <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-navy-900 text-white text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">5</span><span>We believe that increasing diversity at workplaces can provide beneficial to employers and companies who can gain from the experience of PWD’s</span></li>
          </ol>
        </div>
      </div>

      <div class="bg-slate-50 rounded-2xl p-6 sm:p-8 border border-slate-200">
        <div class="flex flex-wrap items-center justify-between gap-2 mb-5 pb-3 border-b border-slate-200">
          <h3 class="font-display font-bold text-lg text-navy-900"><i class="fa-solid fa-shield-halved text-emerald-700 mr-2"></i>Official Registration &amp; Banking Details</h3>
          <span class="text-xs font-semibold px-3 py-1 rounded-full bg-emerald-600/10 text-emerald-700">80G &amp; 12A Tax Exempt</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-slate-600">
          <div class="space-y-1.5">
            <div><strong class="text-navy-900">Regd. No.:</strong> 187079</div>
            <div><strong class="text-navy-900">PAN No.:</strong> AAHCD4570E</div>
            <div><strong class="text-navy-900">I.T. Exemption Cert. No. (80G No.):</strong> AAHCD4570EF20221</div>
            <div><strong class="text-navy-900">CIN No:</strong> U85320PN2019NPL187079</div>
            <div><strong class="text-navy-900">TAN No:</strong> PPNED15137D &bull; <strong class="text-navy-900">12A No:</strong> AAHCD4570EE20206</div>
            <div><strong class="text-navy-900">CSR1 ID:</strong> CSR00078734 &bull; <strong class="text-navy-900">Darpan Registration ID:</strong> MH/2025/0508435</div>
          </div>
          <div class="bg-white p-4 rounded-xl border border-slate-200 space-y-1.5">
            <div><strong class="text-navy-900">Bank Name:</strong> Kotak Mahindra Bank 8413238287</div>
            <div><strong class="text-navy-900">Account No.:</strong> 8413238287</div>
            <div><strong class="text-navy-900">IFSC:</strong> KKBK0001769</div>
            <div><strong class="text-navy-900">Branch:</strong> F.C. Road Branch Pune</div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.php';?>
