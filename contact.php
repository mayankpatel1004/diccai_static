<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | DICCAI - Divyang Indian Chamber of Commerce & Industry</title>
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
          <a href="contact.html" class="px-4 py-2.5 rounded-lg text-sm font-semibold bg-amber-50 text-amber-700">Contact</a>
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
              <a href="index.html"  class="hover:underline">Home</a> / Contact Us
            </div>
            <h1 class="font-display font-extrabold text-3xl sm:text-5xl">Contact DICCAI</h1>
            <p class="text-slate-300 mt-3 max-w-2xl text-sm sm:text-base">
              Reach out to our Pune offices for membership, incubation programs, partnerships, or general inquiries.
            </p>
          </div>
        </section>

        <!-- Location, Address, Contact Number & Email Cards + Inquiry Form -->
        <section class="py-16 bg-slate-50">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- 4 Contact Info Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-14">
              <!-- Location 1 -->
              <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:border-amber-400 transition">
                <div class="w-12 h-12 rounded-xl bg-navy-900 text-amber-400 flex items-center justify-center text-xl mb-4">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Location 1</span>
                <h3 class="font-display font-bold text-lg text-navy-900 mt-1 mb-2">Bhosari Office, Pune</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                  PL-451, S.No.-2, Indrayani Nagar, Bhosari , Pune Maharashtra - 411026
                </p>
              </div>

              <!-- Location 2 -->
              <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:border-amber-400 transition">
                <div class="w-12 h-12 rounded-xl bg-navy-900 text-amber-400 flex items-center justify-center text-xl mb-4">
                  <i class="fa-solid fa-building"></i>
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Location 2</span>
                <h3 class="font-display font-bold text-lg text-navy-900 mt-1 mb-2">Baner Office, Pune</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                  1005 Shree Dhawalgiri Chs Ivory Estate Baner Rd Pune Mh - 411045
                </p>
              </div>

              <!-- Contact Number -->
              <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:border-amber-400 transition">
                <div class="w-12 h-12 rounded-xl bg-amber-500 text-navy-950 flex items-center justify-center text-xl mb-4">
                  <i class="fa-solid fa-phone-volume"></i>
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Direct Helpline</span>
                <h3 class="font-display font-bold text-lg text-navy-900 mt-1 mb-2">Contact Number</h3>
                <a href="tel:9370383218" class="text-base font-bold text-navy-900 hover:text-amber-600 transition block">
                  937-038-3218
                </a>
                <p class="text-xs text-slate-500 mt-1">Mon – Sat: 10:00 AM to 6:00 PM</p>
              </div>

              <!-- Email Address -->
              <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:border-amber-400 transition">
                <div class="w-12 h-12 rounded-xl bg-amber-500 text-navy-950 flex items-center justify-center text-xl mb-4">
                  <i class="fa-solid fa-envelope-open-text"></i>
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Official Email</span>
                <h3 class="font-display font-bold text-lg text-navy-900 mt-1 mb-2">Email Address</h3>
                <a href="mailto:diccai.divyang@gmail.com" class="text-sm font-bold text-navy-900 hover:text-amber-600 transition break-all block">
                  diccai.divyang@gmail.com
                </a>
                <p class="text-xs text-slate-500 mt-1">We respond within 24 business hours</p>
              </div>
            </div>

            <!-- Contact Form & Pune Location Map Embed -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
              <!-- Send a Message Form -->
              <div class="lg:col-span-7 bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-slate-200">
                <h2 class="font-display font-extrabold text-2xl text-navy-900 mb-2">Send Us a Message</h2>
                <p class="text-sm text-slate-500 mb-6">Fill out the form below and our Pune team will connect with you promptly.</p>
                
                <form onsubmit="handleContactSubmit(event)" class="space-y-4">
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                      <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Full Name *</label>
                      <input type="text" required placeholder="Enter your full name" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-navy-900 focus:ring-2 focus:ring-navy-900/10 text-sm outline-none transition" />
                    </div>
                    <div>
                      <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Phone Number *</label>
                      <input type="tel" required placeholder="e.g. 937-038-3218" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-navy-900 focus:ring-2 focus:ring-navy-900/10 text-sm outline-none transition" />
                    </div>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                      <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Email Address *</label>
                      <input type="email" required placeholder="you@example.com" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-navy-900 focus:ring-2 focus:ring-navy-900/10 text-sm outline-none transition" />
                    </div>
                    <div>
                      <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Preferred Office</label>
                      <select class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-navy-900 focus:ring-2 focus:ring-navy-900/10 text-sm outline-none bg-white transition">
                        <option>Bhosari Office (Indrayani Nagar, Pune - 411026)</option>
                        <option>Baner Office (Baner Rd, Pune - 411045)</option>
                      </select>
                    </div>
                  </div>
                  <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Message / Inquiry *</label>
                    <textarea rows="4" required placeholder="How can DICCAI assist you?" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-navy-900 focus:ring-2 focus:ring-navy-900/10 text-sm outline-none transition"></textarea>
                  </div>
                  <button type="submit" class="px-7 py-3.5 rounded-xl bg-navy-900 hover:bg-amber-600 text-white font-bold text-sm shadow transition inline-flex items-center gap-2">
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>Submit Inquiry</span>
                  </button>
                </form>
              </div>

              <!-- Interactive Map Frame -->
              <div class="lg:col-span-5 flex flex-col gap-6">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 flex-1 flex flex-col">
                  <div class="p-4 bg-navy-900 text-white flex items-center justify-between">
                    <span class="text-sm font-bold flex items-center gap-2">
                      <i class="fa-solid fa-map-location-dot text-amber-400"></i> Pune Chapters Map
                    </span>
                    <span class="text-xs text-slate-300">Maharashtra, India</span>
                  </div>
                  <iframe 
                    title="DICCAI Pune Location Map"
                    class="w-full h-72 lg:h-full min-h-[280px] border-0"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.openstreetmap.org/export/embed.html?bbox=73.7600%2C18.5400%2C73.8700%2C18.6500&layer=mapnik&marker=18.6298%2C73.8478">
                  </iframe>
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