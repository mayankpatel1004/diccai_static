<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | DICCAI - Divyang Indian Chamber of Commerce & Industry</title>
  <link rel="icon" href="https://www.diccai.com/theme/default/images/favicon.png" type="image/png" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Inter', 'sans-serif'], display: ['Plus Jakarta Sans', 'sans-serif'] },
          colors: {
            navy: { 800: '#163A66', 900: '#0F294A', 950: '#091A30' },
            saffron: { 500: '#F59E0B', 600: '#D97706', 700: '#B45309' }
          }
        }
      }
    }
  </script>
  <style>
    body { font-family: 'Inter', sans-serif; }
    h1, h2, h3, h4, .font-display { font-family: 'Plus Jakarta Sans', sans-serif; }
    .hero-slide { transition: opacity 0.7s ease-in-out; }
    .gallery-item img { transition: transform 0.45s ease; }
    .gallery-item:hover img { transform: scale(1.08); }
  </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen">

  <!-- Top Info Bar -->
  <div class="bg-navy-950 text-slate-200 text-xs py-2 border-b border-navy-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap justify-between items-center gap-2">
      <div class="flex flex-wrap items-center gap-6">
        <a href="tel:9370383218" class="hover:text-amber-400 transition flex items-center gap-1.5">
          <i class="fa-solid fa-phone text-amber-400"></i> <span>937-038-3218</span>
        </a>
        <a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-400 transition flex items-center gap-1.5">
          <i class="fa-solid fa-envelope text-amber-400"></i> <span>diccai.divyang@gmail.com</span>
        </a>
      </div>
      <div class="flex items-center gap-3 text-sm">
        <a href="#" aria-label="Facebook" class="hover:text-amber-400"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" aria-label="LinkedIn" class="hover:text-amber-400"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#" aria-label="Instagram" class="hover:text-amber-400"><i class="fa-brands fa-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- Top Navigation Menu -->
  <header class="bg-white shadow-sm border-b border-slate-200 sticky top-0 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-20">
        <a href="index.html" class="flex items-center gap-3">
          <img src="https://www.diccai.com/theme/default/images/logo.png" alt="DICCAI Logo" class="h-12 w-auto object-contain rounded" />
          <div>
            <span class="font-display font-extrabold text-2xl tracking-tight text-navy-900 block">DICCAI</span>
            <span class="text-[11px] font-medium text-slate-500 hidden sm:block">Divyang Indian Chamber of Commerce & Industry</span>
          </div>
        </a>
        <nav class="hidden md:flex items-center space-x-2">
          <a href="index.html" class="px-4 py-2.5 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-100">Home</a>
          <a href="about.html" class="px-4 py-2.5 rounded-lg text-sm font-semibold bg-amber-50 text-amber-700">About</a>
          <a href="contact.html" class="px-4 py-2.5 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-100">Contact</a>
          <a href="gallery.html" class="px-4 py-2.5 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-100">Image Gallery</a>
        </nav>
        <button onclick="document.getElementById('mobile-nav').classList.toggle('hidden')" class="md:hidden p-2.5 rounded-xl text-slate-700 hover:bg-slate-100">
          <i class="fa-solid fa-bars text-xl"></i>
        </button>
      </div>
    </div>
    <div id="mobile-nav" class="hidden md:hidden bg-white border-t border-slate-100 px-4 py-3 space-y-1">
      <a href="index.html" class="block px-4 py-2.5 rounded-lg font-semibold">Home</a>
      <a href="about.html" class="block px-4 py-2.5 rounded-lg font-semibold">About</a>
      <a href="contact.html" class="block px-4 py-2.5 rounded-lg font-semibold">Contact</a>
      <a href="gallery.html" class="block px-4 py-2.5 rounded-lg font-semibold">Image Gallery</a>
    </div>
  </header>

  <main class="flex-1">
    
        <!-- Page Banner -->
        <section class="bg-navy-900 text-white py-14 sm:py-16 border-b border-navy-800">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-xs font-semibold text-amber-400 uppercase tracking-wider mb-2">
              <a href="index.html"  class="hover:underline">Home</a> / About Us
            </div>
            <h1 class="font-display font-extrabold text-3xl sm:text-5xl">About DICCAI</h1>
            <p class="text-slate-300 mt-3 max-w-2xl text-sm sm:text-base">
              Championing inclusive entrepreneurship, policy reform, and economic dignity for Divyang citizens across India.
            </p>
          </div>
        </section>

        <!-- 3-4 Paragraphs of About Us -->
        <section class="py-16 bg-white border-b border-slate-200">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
              <div class="lg:col-span-7 space-y-5 text-slate-600 leading-relaxed text-base">
                <span class="text-xs font-bold uppercase tracking-widest text-amber-600">Our Story & Mission</span>
                <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-navy-900">
                  Empowering Divyang Visionaries to Lead India's Growth Story
                </h2>
                <p>
                  The <strong>Divyang Indian Chamber of Commerce and Industry (DICCAI)</strong> was established with a singular, transformative vision: to transition persons with disabilities from job seekers to job creators and industry leaders. Operating out of our hubs in Bhosari and Baner in Pune, Maharashtra, DICCAI serves as a dedicated catalyst for economic self-reliance, fostering an environment where talent and entrepreneurial spirit thrive without barriers.
                </p>
                <p>
                  Across India, millions of Divyang individuals possess extraordinary ingenuity, resilience, and technical capability, yet frequently encounter hurdles in accessing seed capital, accessible infrastructure, and corporate supply chains. DICCAI bridges this gap by offering structured business incubation, financial literacy workshops, mentorship from seasoned industrialists, and direct market linkage programs tailored for Divyang-owned MSMEs and startups.
                </p>
                <p>
                  Beyond enterprise support, DICCAI actively collaborates with central and state government ministries, public sector undertakings, and private corporations to advocate for inclusive procurement policies and accessible workplaces. Through national conclaves, trade exhibitions, and skill certification drives, we ensure that policy frameworks translate into tangible economic opportunities at the grassroots level.
                </p>
                <p>
                  Today, DICCAI stands as a vibrant community of entrepreneurs, educators, technologists, and social advocates united by shared purpose. Whether launching a first micro-enterprise or scaling an established manufacturing unit, our members receive continuous guidance, legal and compliance advisory, and a supportive network committed to long-term prosperity.
                </p>
              </div>

              <div class="lg:col-span-5 space-y-6">
                <div class="rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                  <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=900&q=80" alt="DICCAI Leadership and Members" class="w-full h-72 object-cover" />
                </div>
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 space-y-4">
                  <div class="flex items-start gap-3.5">
                    <div class="w-10 h-10 rounded-xl bg-amber-500/15 text-amber-600 flex items-center justify-center shrink-0 mt-0.5">
                      <i class="fa-solid fa-eye"></i>
                    </div>
                    <div>
                      <h3 class="font-display font-bold text-navy-900 text-base">Our Vision</h3>
                      <p class="text-xs sm:text-sm text-slate-600 mt-1">To build a barrier-free, inclusive Indian economy where every Divyang entrepreneur has equal opportunity to innovate, compete, and prosper.</p>
                    </div>
                  </div>
                  <div class="flex items-start gap-3.5 pt-3 border-t border-slate-200">
                    <div class="w-10 h-10 rounded-xl bg-navy-900 text-amber-400 flex items-center justify-center shrink-0 mt-0.5">
                      <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <div>
                      <h3 class="font-display font-bold text-navy-900 text-base">Our Mission</h3>
                      <p class="text-xs sm:text-sm text-slate-600 mt-1">Delivering world-class incubation, skill training, policy representation, and community support across Maharashtra and nationwide.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- List of 10 Team Members in Grid Format -->
        <section class="py-16 sm:py-20 bg-slate-50">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
              <span class="text-xs font-bold uppercase tracking-widest text-amber-600">Leadership & Governance</span>
              <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-navy-900 mt-2">
                Meet Our 10-Member Executive Team
              </h2>
              <p class="text-slate-600 mt-2 text-sm sm:text-base">
                Dedicated professionals, entrepreneurs, and advocates guiding DICCAI's mission.
              </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
              
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 group flex flex-col">
                  <div class="relative h-56 overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=500&q=80" alt="Dr. Rajesh Kulkarni" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 left-3 px-2.5 py-0.5 rounded-full bg-navy-900/85 text-amber-400 text-[10px] font-bold">
                      #1
                    </span>
                  </div>
                  <div class="p-4 flex-1 flex flex-col justify-between text-center">
                    <div>
                      <h3 class="font-display font-bold text-base text-navy-900 group-hover:text-amber-600 transition">Dr. Rajesh Kulkarni</h3>
                      <p class="text-xs font-semibold text-amber-600 mt-0.5">National President</p>
                      <p class="text-[11px] text-slate-500 mt-1">Executive Leadership</p>
                    </div>
                    <div class="mt-3 pt-3 border-t border-slate-100 flex justify-center gap-3 text-slate-400 text-xs">
                      <a href="#linkedin" onclick="showToast('Connecting with Dr. Rajesh Kulkarni')" class="hover:text-navy-900 transition"><i class="fa-brands fa-linkedin"></i></a>
                      <a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-600 transition"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                  </div>
                </div>
              
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 group flex flex-col">
                  <div class="relative h-56 overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=500&q=80" alt="Sunita Deshmukh" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 left-3 px-2.5 py-0.5 rounded-full bg-navy-900/85 text-amber-400 text-[10px] font-bold">
                      #2
                    </span>
                  </div>
                  <div class="p-4 flex-1 flex flex-col justify-between text-center">
                    <div>
                      <h3 class="font-display font-bold text-base text-navy-900 group-hover:text-amber-600 transition">Sunita Deshmukh</h3>
                      <p class="text-xs font-semibold text-amber-600 mt-0.5">Vice President</p>
                      <p class="text-[11px] text-slate-500 mt-1">Policy & Government Affairs</p>
                    </div>
                    <div class="mt-3 pt-3 border-t border-slate-100 flex justify-center gap-3 text-slate-400 text-xs">
                      <a href="#linkedin" onclick="showToast('Connecting with Sunita Deshmukh')" class="hover:text-navy-900 transition"><i class="fa-brands fa-linkedin"></i></a>
                      <a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-600 transition"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                  </div>
                </div>
              
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 group flex flex-col">
                  <div class="relative h-56 overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=500&q=80" alt="Amitabh Joshi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 left-3 px-2.5 py-0.5 rounded-full bg-navy-900/85 text-amber-400 text-[10px] font-bold">
                      #3
                    </span>
                  </div>
                  <div class="p-4 flex-1 flex flex-col justify-between text-center">
                    <div>
                      <h3 class="font-display font-bold text-base text-navy-900 group-hover:text-amber-600 transition">Amitabh Joshi</h3>
                      <p class="text-xs font-semibold text-amber-600 mt-0.5">General Secretary</p>
                      <p class="text-[11px] text-slate-500 mt-1">Chamber Operations</p>
                    </div>
                    <div class="mt-3 pt-3 border-t border-slate-100 flex justify-center gap-3 text-slate-400 text-xs">
                      <a href="#linkedin" onclick="showToast('Connecting with Amitabh Joshi')" class="hover:text-navy-900 transition"><i class="fa-brands fa-linkedin"></i></a>
                      <a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-600 transition"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                  </div>
                </div>
              
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 group flex flex-col">
                  <div class="relative h-56 overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=500&q=80" alt="Priya Nair" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 left-3 px-2.5 py-0.5 rounded-full bg-navy-900/85 text-amber-400 text-[10px] font-bold">
                      #4
                    </span>
                  </div>
                  <div class="p-4 flex-1 flex flex-col justify-between text-center">
                    <div>
                      <h3 class="font-display font-bold text-base text-navy-900 group-hover:text-amber-600 transition">Priya Nair</h3>
                      <p class="text-xs font-semibold text-amber-600 mt-0.5">Treasurer</p>
                      <p class="text-[11px] text-slate-500 mt-1">Finance & Grants</p>
                    </div>
                    <div class="mt-3 pt-3 border-t border-slate-100 flex justify-center gap-3 text-slate-400 text-xs">
                      <a href="#linkedin" onclick="showToast('Connecting with Priya Nair')" class="hover:text-navy-900 transition"><i class="fa-brands fa-linkedin"></i></a>
                      <a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-600 transition"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                  </div>
                </div>
              
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 group flex flex-col">
                  <div class="relative h-56 overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=500&q=80" alt="Vikramaditya Pawar" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 left-3 px-2.5 py-0.5 rounded-full bg-navy-900/85 text-amber-400 text-[10px] font-bold">
                      #5
                    </span>
                  </div>
                  <div class="p-4 flex-1 flex flex-col justify-between text-center">
                    <div>
                      <h3 class="font-display font-bold text-base text-navy-900 group-hover:text-amber-600 transition">Vikramaditya Pawar</h3>
                      <p class="text-xs font-semibold text-amber-600 mt-0.5">Director - Incubation</p>
                      <p class="text-[11px] text-slate-500 mt-1">Startup Mentorship</p>
                    </div>
                    <div class="mt-3 pt-3 border-t border-slate-100 flex justify-center gap-3 text-slate-400 text-xs">
                      <a href="#linkedin" onclick="showToast('Connecting with Vikramaditya Pawar')" class="hover:text-navy-900 transition"><i class="fa-brands fa-linkedin"></i></a>
                      <a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-600 transition"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                  </div>
                </div>
              
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 group flex flex-col">
                  <div class="relative h-56 overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1598550874175-4d0ef436c909?auto=format&fit=crop&w=500&q=80" alt="Meera Gokhale" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 left-3 px-2.5 py-0.5 rounded-full bg-navy-900/85 text-amber-400 text-[10px] font-bold">
                      #6
                    </span>
                  </div>
                  <div class="p-4 flex-1 flex flex-col justify-between text-center">
                    <div>
                      <h3 class="font-display font-bold text-base text-navy-900 group-hover:text-amber-600 transition">Meera Gokhale</h3>
                      <p class="text-xs font-semibold text-amber-600 mt-0.5">Head of Skill Development</p>
                      <p class="text-[11px] text-slate-500 mt-1">Training & Workshops</p>
                    </div>
                    <div class="mt-3 pt-3 border-t border-slate-100 flex justify-center gap-3 text-slate-400 text-xs">
                      <a href="#linkedin" onclick="showToast('Connecting with Meera Gokhale')" class="hover:text-navy-900 transition"><i class="fa-brands fa-linkedin"></i></a>
                      <a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-600 transition"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                  </div>
                </div>
              
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 group flex flex-col">
                  <div class="relative h-56 overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=500&q=80" alt="Sandeep Chavan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 left-3 px-2.5 py-0.5 rounded-full bg-navy-900/85 text-amber-400 text-[10px] font-bold">
                      #7
                    </span>
                  </div>
                  <div class="p-4 flex-1 flex flex-col justify-between text-center">
                    <div>
                      <h3 class="font-display font-bold text-base text-navy-900 group-hover:text-amber-600 transition">Sandeep Chavan</h3>
                      <p class="text-xs font-semibold text-amber-600 mt-0.5">Regional Coordinator - Pune</p>
                      <p class="text-[11px] text-slate-500 mt-1">Maharashtra Chapter</p>
                    </div>
                    <div class="mt-3 pt-3 border-t border-slate-100 flex justify-center gap-3 text-slate-400 text-xs">
                      <a href="#linkedin" onclick="showToast('Connecting with Sandeep Chavan')" class="hover:text-navy-900 transition"><i class="fa-brands fa-linkedin"></i></a>
                      <a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-600 transition"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                  </div>
                </div>
              
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 group flex flex-col">
                  <div class="relative h-56 overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=500&q=80" alt="Ananya Sharma" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 left-3 px-2.5 py-0.5 rounded-full bg-navy-900/85 text-amber-400 text-[10px] font-bold">
                      #8
                    </span>
                  </div>
                  <div class="p-4 flex-1 flex flex-col justify-between text-center">
                    <div>
                      <h3 class="font-display font-bold text-base text-navy-900 group-hover:text-amber-600 transition">Ananya Sharma</h3>
                      <p class="text-xs font-semibold text-amber-600 mt-0.5">Corporate Partnerships Lead</p>
                      <p class="text-[11px] text-slate-500 mt-1">CSR & Industry Connect</p>
                    </div>
                    <div class="mt-3 pt-3 border-t border-slate-100 flex justify-center gap-3 text-slate-400 text-xs">
                      <a href="#linkedin" onclick="showToast('Connecting with Ananya Sharma')" class="hover:text-navy-900 transition"><i class="fa-brands fa-linkedin"></i></a>
                      <a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-600 transition"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                  </div>
                </div>
              
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 group flex flex-col">
                  <div class="relative h-56 overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=500&q=80" alt="Rohan Patwardhan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 left-3 px-2.5 py-0.5 rounded-full bg-navy-900/85 text-amber-400 text-[10px] font-bold">
                      #9
                    </span>
                  </div>
                  <div class="p-4 flex-1 flex flex-col justify-between text-center">
                    <div>
                      <h3 class="font-display font-bold text-base text-navy-900 group-hover:text-amber-600 transition">Rohan Patwardhan</h3>
                      <p class="text-xs font-semibold text-amber-600 mt-0.5">Accessibility & Tech Advisor</p>
                      <p class="text-[11px] text-slate-500 mt-1">Digital Inclusion</p>
                    </div>
                    <div class="mt-3 pt-3 border-t border-slate-100 flex justify-center gap-3 text-slate-400 text-xs">
                      <a href="#linkedin" onclick="showToast('Connecting with Rohan Patwardhan')" class="hover:text-navy-900 transition"><i class="fa-brands fa-linkedin"></i></a>
                      <a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-600 transition"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                  </div>
                </div>
              
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 group flex flex-col">
                  <div class="relative h-56 overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=500&q=80" alt="Kavita Bhosale" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 left-3 px-2.5 py-0.5 rounded-full bg-navy-900/85 text-amber-400 text-[10px] font-bold">
                      #10
                    </span>
                  </div>
                  <div class="p-4 flex-1 flex flex-col justify-between text-center">
                    <div>
                      <h3 class="font-display font-bold text-base text-navy-900 group-hover:text-amber-600 transition">Kavita Bhosale</h3>
                      <p class="text-xs font-semibold text-amber-600 mt-0.5">Community Outreach Director</p>
                      <p class="text-[11px] text-slate-500 mt-1">Member Welfare</p>
                    </div>
                    <div class="mt-3 pt-3 border-t border-slate-100 flex justify-center gap-3 text-slate-400 text-xs">
                      <a href="#linkedin" onclick="showToast('Connecting with Kavita Bhosale')" class="hover:text-navy-900 transition"><i class="fa-brands fa-linkedin"></i></a>
                      <a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-600 transition"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                  </div>
                </div>
              
            </div>
          </div>
        </section>
      
  </main>

  <!-- 4-Column Footer -->
  <footer class="bg-navy-950 text-slate-300 border-t border-navy-800 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
        <div>
          <div class="flex items-center gap-3 mb-4">
            <img src="https://www.diccai.com/theme/default/images/logo.png" alt="DICCAI" class="h-10 w-auto bg-white rounded-lg p-1" />
            <span class="font-display font-extrabold text-2xl text-white">DICCAI</span>
          </div>
          <p class="text-sm text-slate-300 leading-relaxed">
            DICCAI empowers Divyang entrepreneurs and professionals across India.<br />
            We foster inclusive economic growth through mentorship and innovation.<br />
            Connecting businesses, policymakers, and skilled talent nationwide.<br />
            Building a barrier-free ecosystem for sustainable self-reliance.
          </p>
        </div>
        <div>
          <h3 class="text-white font-display font-bold text-lg mb-5">Quick Links</h3>
          <ul class="space-y-3 text-sm">
            <li><a href="index.html" class="hover:text-amber-400">Home</a></li>
            <li><a href="about.html" class="hover:text-amber-400">About Us</a></li>
            <li><a href="gallery.html" class="hover:text-amber-400">Image Gallery</a></li>
            <li><a href="contact.html" class="hover:text-amber-400">Contact Us</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-white font-display font-bold text-lg mb-5">Resources</h3>
          <ul class="space-y-3 text-sm">
            <li><a href="privacy-policy.html" class="hover:text-amber-400">Privacy Policy</a></li>
            <li><a href="terms-conditions.html" class="hover:text-amber-400">Terms & Conditions</a></li>
            <li><a href="refunds.html" class="hover:text-amber-400">Refunds & Cancellation</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-white font-display font-bold text-lg mb-5">Get In Touch</h3>
          <ul class="space-y-3 text-sm">
            <li><strong class="text-amber-400 block text-xs">Location 1:</strong> PL-451, S.No.-2, Indrayani Nagar, Bhosari , Pune Maharashtra - 411026</li>
            <li><strong class="text-amber-400 block text-xs">Location 2:</strong> 1005 Shree Dhawalgiri Chs Ivory Estate Baner Rd Pune Mh - 411045</li>
            <li><a href="tel:9370383218" class="hover:text-amber-400">Phone: 937-038-3218</a></li>
            <li><a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-400">Email: diccai.divyang@gmail.com</a></li>
          </ul>
          <div class="mt-4 flex gap-3">
            <a href="#" class="w-8 h-8 rounded-full bg-navy-800 flex items-center justify-center hover:bg-amber-500 hover:text-navy-950"><i class="fa-brands fa-facebook-f text-xs"></i></a>
            <a href="#" class="w-8 h-8 rounded-full bg-navy-800 flex items-center justify-center hover:bg-amber-500 hover:text-navy-950"><i class="fa-brands fa-linkedin-in text-xs"></i></a>
            <a href="#" class="w-8 h-8 rounded-full bg-navy-800 flex items-center justify-center hover:bg-amber-500 hover:text-navy-950"><i class="fa-brands fa-instagram text-xs"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-black/30 border-t border-navy-800 py-4 text-center text-xs text-slate-400">
      &copy; 2026 DICCAI (Divyang Indian Chamber of Commerce and Industry). All Rights Reserved.
    </div>
  </footer>

  

  
</body>
</html>