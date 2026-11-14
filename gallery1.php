<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Image Gallery | DICCAI - Divyang Indian Chamber of Commerce & Industry</title>
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
          <a href="about.html" class="px-4 py-2.5 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-100">About</a>
          <a href="contact.html" class="px-4 py-2.5 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-100">Contact</a>
          <a href="gallery.html" class="px-4 py-2.5 rounded-lg text-sm font-semibold bg-amber-50 text-amber-700">Image Gallery</a>
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
              <a href="index.html"  class="hover:underline">Home</a> / Image Gallery
            </div>
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
              <div>
                <h1 class="font-display font-extrabold text-3xl sm:text-5xl">DICCAI Image Gallery</h1>
                <p class="text-slate-300 mt-3 max-w-2xl text-sm sm:text-base">
                  Explore 40 moments from our national summits, entrepreneurship workshops, MSME expos, and community initiatives. Click any photo to zoom and slide.
                </p>
              </div>
              <span class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-amber-500/20 text-amber-300 border border-amber-400/30 text-xs font-bold self-start">
                <i class="fa-solid fa-images"></i> Showing 40 of 40 Photos
              </span>
            </div>
          </div>
        </section>

        <!-- Category Filter Bar + 40 Images Grid -->
        <section class="py-14 bg-slate-50">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Category Filter Pills -->
            <div class="flex flex-wrap items-center justify-between gap-4 mb-8">
              <div class="flex flex-wrap items-center gap-2">
                
                  <button onclick="setGalleryFilter('All')" class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition bg-navy-900 text-white shadow">
                    All (40)
                  </button>
                
                  <button onclick="setGalleryFilter('Summits')" class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition bg-white text-slate-700 hover:bg-amber-50 border border-slate-200">
                    Summits 
                  </button>
                
                  <button onclick="setGalleryFilter('Workshops')" class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition bg-white text-slate-700 hover:bg-amber-50 border border-slate-200">
                    Workshops 
                  </button>
                
                  <button onclick="setGalleryFilter('Events')" class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition bg-white text-slate-700 hover:bg-amber-50 border border-slate-200">
                    Events 
                  </button>
                
                  <button onclick="setGalleryFilter('Community')" class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition bg-white text-slate-700 hover:bg-amber-50 border border-slate-200">
                    Community 
                  </button>
                
              </div>
              <p class="text-xs text-slate-500"><i class="fa-solid fa-magnifying-glass-plus text-amber-600 mr-1"></i> Click any image for Lightbox Zoom & Next/Prev Slider</p>
            </div>

            <!-- Responsive 40-Image Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
              
                <div onclick="openLightbox(0)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=80" alt="National Divyang Entrepreneurship Conclave #1" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #1 • Summits
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">National Divyang Entrepreneurship Conclave #1</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Keynote address and networking session in Pune.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(1)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=800&q=80" alt="Startup Incubation & Pitch Workshop #2" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #2 • Workshops
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Startup Incubation & Pitch Workshop #2</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Mentoring emerging Divyang founders on business scaling.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(2)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=800&q=80" alt="DICCAI Annual Trade & MSME Expo #3" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #3 • Events
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">DICCAI Annual Trade & MSME Expo #3</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Showcasing products crafted by Divyang-led enterprises.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(3)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Skill Development Certification Ceremony #4" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #4 • Community
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Skill Development Certification Ceremony #4</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Celebrating graduates of our vocational empowerment program.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(4)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=800&q=80" alt="National Divyang Entrepreneurship Conclave #5" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #5 • Summits
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">National Divyang Entrepreneurship Conclave #5</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Keynote address and networking session in Pune.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(5)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Startup Incubation & Pitch Workshop #6" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #6 • Workshops
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Startup Incubation & Pitch Workshop #6</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Mentoring emerging Divyang founders on business scaling.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(6)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="DICCAI Annual Trade & MSME Expo #7" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #7 • Events
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">DICCAI Annual Trade & MSME Expo #7</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Showcasing products crafted by Divyang-led enterprises.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(7)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=800&q=80" alt="Skill Development Certification Ceremony #8" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #8 • Community
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Skill Development Certification Ceremony #8</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Celebrating graduates of our vocational empowerment program.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(8)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=800&q=80" alt="National Divyang Entrepreneurship Conclave #9" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #9 • Summits
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">National Divyang Entrepreneurship Conclave #9</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Keynote address and networking session in Pune.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(9)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?auto=format&fit=crop&w=800&q=80" alt="Startup Incubation & Pitch Workshop #10" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #10 • Workshops
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Startup Incubation & Pitch Workshop #10</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Mentoring emerging Divyang founders on business scaling.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(10)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=80" alt="DICCAI Annual Trade & MSME Expo #11" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #11 • Events
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">DICCAI Annual Trade & MSME Expo #11</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Showcasing products crafted by Divyang-led enterprises.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(11)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=800&q=80" alt="Skill Development Certification Ceremony #12" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #12 • Community
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Skill Development Certification Ceremony #12</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Celebrating graduates of our vocational empowerment program.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(12)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=800&q=80" alt="National Divyang Entrepreneurship Conclave #13" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #13 • Summits
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">National Divyang Entrepreneurship Conclave #13</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Keynote address and networking session in Pune.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(13)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Startup Incubation & Pitch Workshop #14" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #14 • Workshops
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Startup Incubation & Pitch Workshop #14</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Mentoring emerging Divyang founders on business scaling.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(14)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=800&q=80" alt="DICCAI Annual Trade & MSME Expo #15" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #15 • Events
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">DICCAI Annual Trade & MSME Expo #15</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Showcasing products crafted by Divyang-led enterprises.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(15)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Skill Development Certification Ceremony #16" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #16 • Community
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Skill Development Certification Ceremony #16</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Celebrating graduates of our vocational empowerment program.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(16)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="National Divyang Entrepreneurship Conclave #17" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #17 • Summits
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">National Divyang Entrepreneurship Conclave #17</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Keynote address and networking session in Pune.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(17)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=800&q=80" alt="Startup Incubation & Pitch Workshop #18" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #18 • Workshops
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Startup Incubation & Pitch Workshop #18</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Mentoring emerging Divyang founders on business scaling.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(18)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=800&q=80" alt="DICCAI Annual Trade & MSME Expo #19" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #19 • Events
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">DICCAI Annual Trade & MSME Expo #19</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Showcasing products crafted by Divyang-led enterprises.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(19)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?auto=format&fit=crop&w=800&q=80" alt="Skill Development Certification Ceremony #20" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #20 • Community
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Skill Development Certification Ceremony #20</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Celebrating graduates of our vocational empowerment program.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(20)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=80" alt="National Divyang Entrepreneurship Conclave #21" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #21 • Summits
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">National Divyang Entrepreneurship Conclave #21</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Keynote address and networking session in Pune.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(21)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=800&q=80" alt="Startup Incubation & Pitch Workshop #22" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #22 • Workshops
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Startup Incubation & Pitch Workshop #22</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Mentoring emerging Divyang founders on business scaling.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(22)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=800&q=80" alt="DICCAI Annual Trade & MSME Expo #23" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #23 • Events
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">DICCAI Annual Trade & MSME Expo #23</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Showcasing products crafted by Divyang-led enterprises.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(23)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Skill Development Certification Ceremony #24" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #24 • Community
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Skill Development Certification Ceremony #24</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Celebrating graduates of our vocational empowerment program.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(24)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=800&q=80" alt="National Divyang Entrepreneurship Conclave #25" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #25 • Summits
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">National Divyang Entrepreneurship Conclave #25</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Keynote address and networking session in Pune.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(25)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Startup Incubation & Pitch Workshop #26" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #26 • Workshops
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Startup Incubation & Pitch Workshop #26</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Mentoring emerging Divyang founders on business scaling.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(26)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="DICCAI Annual Trade & MSME Expo #27" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #27 • Events
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">DICCAI Annual Trade & MSME Expo #27</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Showcasing products crafted by Divyang-led enterprises.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(27)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=800&q=80" alt="Skill Development Certification Ceremony #28" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #28 • Community
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Skill Development Certification Ceremony #28</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Celebrating graduates of our vocational empowerment program.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(28)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=800&q=80" alt="National Divyang Entrepreneurship Conclave #29" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #29 • Summits
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">National Divyang Entrepreneurship Conclave #29</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Keynote address and networking session in Pune.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(29)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?auto=format&fit=crop&w=800&q=80" alt="Startup Incubation & Pitch Workshop #30" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #30 • Workshops
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Startup Incubation & Pitch Workshop #30</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Mentoring emerging Divyang founders on business scaling.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(30)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=80" alt="DICCAI Annual Trade & MSME Expo #31" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #31 • Events
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">DICCAI Annual Trade & MSME Expo #31</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Showcasing products crafted by Divyang-led enterprises.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(31)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=800&q=80" alt="Skill Development Certification Ceremony #32" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #32 • Community
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Skill Development Certification Ceremony #32</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Celebrating graduates of our vocational empowerment program.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(32)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=800&q=80" alt="National Divyang Entrepreneurship Conclave #33" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #33 • Summits
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">National Divyang Entrepreneurship Conclave #33</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Keynote address and networking session in Pune.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(33)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Startup Incubation & Pitch Workshop #34" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #34 • Workshops
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Startup Incubation & Pitch Workshop #34</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Mentoring emerging Divyang founders on business scaling.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(34)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=800&q=80" alt="DICCAI Annual Trade & MSME Expo #35" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #35 • Events
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">DICCAI Annual Trade & MSME Expo #35</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Showcasing products crafted by Divyang-led enterprises.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(35)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Skill Development Certification Ceremony #36" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #36 • Community
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Skill Development Certification Ceremony #36</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Celebrating graduates of our vocational empowerment program.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(36)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="National Divyang Entrepreneurship Conclave #37" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #37 • Summits
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">National Divyang Entrepreneurship Conclave #37</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Keynote address and networking session in Pune.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(37)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=800&q=80" alt="Startup Incubation & Pitch Workshop #38" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #38 • Workshops
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Startup Incubation & Pitch Workshop #38</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Mentoring emerging Divyang founders on business scaling.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(38)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=800&q=80" alt="DICCAI Annual Trade & MSME Expo #39" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #39 • Events
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">DICCAI Annual Trade & MSME Expo #39</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Showcasing products crafted by Divyang-led enterprises.</p>
                  </div>
                </div>
              
                <div onclick="openLightbox(39)" class="gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 cursor-pointer">
                  <div class="aspect-[4/3] overflow-hidden bg-slate-200 relative">
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?auto=format&fit=crop&w=800&q=80" alt="Skill Development Certification Ceremony #40" loading="lazy" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/50 transition-all duration-300 flex items-center justify-center">
                      <span class="opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300 w-11 h-11 rounded-full bg-amber-500 text-navy-950 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                      </span>
                    </div>
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-navy-900/85 text-white text-[10px] font-bold backdrop-blur-sm">
                      #40 • Community
                    </span>
                  </div>
                  <div class="p-3.5">
                    <h3 class="font-display font-bold text-sm text-navy-900 truncate group-hover:text-amber-600 transition">Skill Development Certification Ceremony #40</h3>
                    <p class="text-xs text-slate-500 truncate mt-0.5">Celebrating graduates of our vocational empowerment program.</p>
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

  

  
  <!-- Lightbox Popup for Gallery -->
  <div id="gallery-lightbox" class="fixed inset-0 z-50 hidden bg-slate-950/95 flex items-center justify-center p-4">
    <button onclick="closeLightbox()" class="absolute top-5 right-5 w-11 h-11 rounded-full bg-white/15 hover:bg-amber-500 text-white flex items-center justify-center text-xl"><i class="fa-solid fa-xmark"></i></button>
    <button onclick="changeLightboxSlide(-1)" class="absolute left-5 w-12 h-12 rounded-full bg-white/15 hover:bg-amber-500 text-white flex items-center justify-center"><i class="fa-solid fa-chevron-left"></i></button>
    <div class="max-w-4xl text-center">
      <img id="lightbox-img" src="" alt="Gallery Zoom" onclick="this.classList.toggle('scale-150')" class="max-h-[75vh] mx-auto rounded-xl transition-transform duration-300 cursor-zoom-in" />
      <p id="lightbox-caption" class="text-white font-bold mt-3"></p>
    </div>
    <button onclick="changeLightboxSlide(1)" class="absolute right-5 w-12 h-12 rounded-full bg-white/15 hover:bg-amber-500 text-white flex items-center justify-center"><i class="fa-solid fa-chevron-right"></i></button>
  </div>
  <script>
    const imgs = Array.from(document.querySelectorAll('.gallery-item img')).map(el => ({ src: el.src, alt: el.alt }));
    let cur = 0;
    function openLightbox(i) { cur = i; updateLB(); document.getElementById('gallery-lightbox').classList.remove('hidden'); }
    function closeLightbox() { document.getElementById('gallery-lightbox').classList.add('hidden'); }
    function changeLightboxSlide(d) { cur = (cur + d + imgs.length) % imgs.length; updateLB(); }
    function updateLB() {
      const img = document.getElementById('lightbox-img');
      img.classList.remove('scale-150');
      img.src = imgs[cur].src;
      document.getElementById('lightbox-caption').textContent = 'Image ' + (cur + 1) + ' of ' + imgs.length + ' — ' + imgs[cur].alt;
    }
    function setGalleryFilter(cat) {
      document.querySelectorAll('.gallery-item').forEach(card => {
        const badge = card.querySelector('span').textContent;
        card.style.display = (cat === 'All' || badge.includes(cat)) ? '' : 'none';
      });
    }
  </script>
</body>
</html>