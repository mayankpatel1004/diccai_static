<?php include 'header.php';?>
<style>
  body {
    font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    background-color: #f4f6f9;
    color: #212529;
  }
  .brand-navy {
    background-color: #0b2240;
    color: #ffffff;
  }
  .brand-green {
    background-color: #1b6b3a;
    color: #ffffff;
  }
  .brand-gold-text {
    color: #f5b800;
  }
  .brand-gold-bg {
    background-color: #f5b800;
    color: #0b2240;
  }
  .hero-banner {
    background: linear-gradient(135deg, #0b2240 0%, #153966 100%);
    border-top: 5px solid #1b6b3a;
    border-bottom: 5px solid #f5b800;
  }
  .feature-box {
    background: #ffffff;
    border-radius: 10px;
    padding: 18px 12px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.07);
    border-top: 4px solid #1b6b3a;
    height: 100%;
    transition: transform 0.2s ease;
  }
  .feature-box:hover {
    transform: translateY(-3px);
  }
  .revenue-badge {
    background: #ffffff;
    border: 1px solid #dee2e6;
    border-left: 4px solid #0b2240;
    border-radius: 8px;
    padding: 12px 10px;
    font-weight: 700;
    font-size: 0.9rem;
    color: #0b2240;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    height: 100%;
  }
  .role-strip {
    background-color: #0b2240;
    color: #ffffff;
    border-radius: 8px;
  }
  .location-strip {
    background-color: #fff3cd;
    border-left: 5px solid #f5b800;
    border-right: 5px solid #f5b800;
    font-weight: 600;
    color: #0b2240;
  }
</style>

<main class="flex-1">
  <section class="py-16 sm:py-20 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-12">

          <!-- Main DIVYA SERVICE LOUNGE Banner -->
          <section class="hero-banner text-white py-4 rounded">
            <div class="max-w-7xl mx-auto px-4 text-center">
              <h2 class="text-4xl sm:text-5xl font-bold mb-3">
                DIVYA <span class="brand-gold-text">SERVICE</span> LOUNGE
              </h2>
              <p class="text-lg font-bold mb-3">
                Clean &bull; Accessible &bull; Dignified &bull; Self-Sustainable
              </p>
              <div class="inline-block brand-gold-bg px-4 py-2 rounded-full font-bold shadow mb-2">
                Clean &amp; Hygienic Toilets for All | Divyang-Friendly | Senior-Citizen-Friendly
              </div>
              <p class="mb-0 font-bold text-gray-100">
                Waiting Lounge &bull; Essential Services &bull; Divya VIP Mart
              </p>
            </div>
          </section>

          <!-- Facility Highlights & Inclusivity Banner -->
          <section class="py-4 bg-white border-b">
            <div class="max-w-7xl mx-auto px-4">

              <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-3 text-center mb-6">
                <div>
                  <div class="p-3 border rounded bg-gray-50 h-full flex items-center justify-center">
                    <div class="font-bold text-sm">Divyang Friendly</div>
                  </div>
                </div>
                <div>
                  <div class="p-3 border rounded bg-gray-50 h-full flex items-center justify-center">
                    <div class="font-bold text-sm">Senior Citizen Friendly</div>
                  </div>
                </div>
                <div>
                  <div class="p-3 border rounded bg-gray-50 h-full flex items-center justify-center">
                    <div class="font-bold text-sm">Clean &amp; Hygienic</div>
                  </div>
                </div>
                <div>
                  <div class="p-3 border rounded bg-gray-50 h-full flex items-center justify-center">
                    <div class="font-bold text-sm">Baby Care</div>
                  </div>
                </div>
                <div>
                  <div class="p-3 border rounded bg-gray-50 h-full flex items-center justify-center">
                    <div class="font-bold text-sm">Drinking Water</div>
                  </div>
                </div>
                <div>
                  <div class="p-3 border rounded brand-navy h-full flex flex-col justify-center">
                    <div class="font-bold text-sm brand-gold-text">Inclusion &bull; Dignity<br>Comfort For Everyone</div>
                  </div>
                </div>
              </div>

              <!-- Integrated Complex Zones -->
              <div class="grid grid-cols-1 md:grid-cols-4 gap-3 text-center">
                <div>
                  <div class="p-3 rounded brand-green font-bold">Waiting Lounge</div>
                </div>
                <div>
                  <div class="p-3 rounded brand-navy font-bold">Food Court</div>
                </div>
                <div>
                  <div class="p-3 rounded brand-green font-bold">Divya VIP Mart</div>
                </div>
                <div>
                  <div class="p-3 rounded brand-navy font-bold">Divyangjan Made Products</div>
                </div>
              </div>
            </div>
          </section>

          <!-- Core Service Pillars (6 Cards) -->
          <section class="py-5">
            <div class="max-w-7xl mx-auto px-4">
              <div class="text-center mb-4">
                <span class="inline-block bg-blue-700 text-white text-xs font-bold uppercase tracking-wider px-3 py-2 rounded">
                  Service Beyond Barriers &bull; Local to Global
                </span>
                <h3 class="font-bold mt-2 text-[#0b2240]">Core Facilities &amp; Services</h3>
              </div>

              <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-center">
                <div class="mb-4">
                  <div class="feature-box">
                    <h6 class="font-bold mb-1">Clean &amp; Hygienic Toilets</h6>
                    <small class="text-gray-500">For All Visitors</small>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="feature-box">
                    <h6 class="font-bold mb-1">Divyang-Friendly</h6>
                    <small class="text-gray-500">Accessible Toilets</small>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="feature-box">
                    <h6 class="font-bold mb-1">Senior-Citizen</h6>
                    <small class="text-gray-500">Friendly Facilities</small>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="feature-box">
                    <h6 class="font-bold mb-1">Waiting / Sitting</h6>
                    <small class="text-gray-500">Comfortable Lounge</small>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="feature-box">
                    <h6 class="font-bold mb-1">Drinking Water</h6>
                    <small class="text-gray-500">&amp; Essential Services</small>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="feature-box">
                    <h6 class="font-bold mb-1">Divya VIP Mart</h6>
                    <small class="text-gray-500">Retail &amp; Kiosk</small>
                  </div>
                </div>
              </div>

              <!-- Divyangjan Empowerment Strip -->
              <div class="role-strip p-4 text-center shadow-sm mb-12">
                <h5 class="brand-gold-text font-bold mb-2">
                  Divyangjan as Operator | Manager | Seller | Service Provider | Franchise Partner | Entrepreneur
                </h5>
                <p class="mb-0 font-bold text-gray-100">
                  Creating Sustainable Livelihoods and Enterprises
                </p>
              </div>

              <!-- Self-Sustainable Business Model -->
              <div class="bg-white p-4 rounded shadow-sm">
                <div class="text-center mb-4">
                  <h4 class="font-bold uppercase mb-1 text-[#0b2240]">Self-Sustainable Business Model</h4>
                  <p class="text-gray-500 text-sm mb-0">Multiple Revenue Streams for Financial Independence</p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 text-center mb-4">
                  <div class="mb-3">
                    <div class="revenue-badge">Product Sales</div>
                  </div>
                  <div class="mb-3">
                    <div class="revenue-badge">Service Revenue</div>
                  </div>
                  <div class="mb-3">
                    <div class="revenue-badge">Advertising Boards</div>
                  </div>
                  <div class="mb-3">
                    <div class="revenue-badge">Digital Screens</div>
                  </div>
                  <div class="mb-3">
                    <div class="revenue-badge">Brand Sponsorship</div>
                  </div>
                  <div class="mb-3">
                    <div class="revenue-badge">Kiosk / Space Revenue</div>
                  </div>
                  <div class="mb-3">
                    <div class="revenue-badge">CSR Support</div>
                  </div>
                  <div class="mb-3">
                    <div class="revenue-badge">Franchise / Revenue Sharing</div>
                  </div>
                </div>

                <!-- Partnership & Execution Models -->
                <div class="bg-gray-100 text-center mb-0 font-bold py-3 px-4 rounded">
                  <span class="text-gray-900">Developed through:</span>
                  PPP &bull; Private Company Partnership &bull; NGO Partnership &bull; CSR &bull; JV &bull; Franchise &bull; Revenue Sharing &bull; Concession Model
                </div>
              </div>

              <!-- Target Locations Strip -->
              <div class="location-strip p-3 rounded mt-4 text-center shadow-sm">
                <span class="text-red-600 font-bold mr-2">Locations:</span>
                Highways &bull; Railway Stations &bull; Airports &bull; मंदिर एवं तीर्थ क्षेत्र (Temples &amp; Pilgrimage Sites) &bull; Market Places &bull; High-Footfall Areas
              </div>
            </div>
          </section>

          <!-- Contact & Leadership Section -->
          <section class="bg-white py-4 border-t">
            <div class="max-w-7xl mx-auto px-4">
              <div class="grid grid-cols-1 md:grid-cols-3 gap-2 text-center mb-4">
                <div>
                  <a href="tel:+918005896807" class="text-gray-900 font-bold no-underline">+91 80058 96807</a>
                </div>
                <div>
                  <a href="mailto:Info@diccai.com" class="text-gray-900 font-bold no-underline">Info@diccai.com</a>
                </div>
                <div>
                  <a href="https://www.diccai.com" target="_blank" rel="noopener noreferrer" class="text-gray-900 font-bold no-underline">www.diccai.com</a>
                </div>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-3 gap-3 items-center text-center">
                <div>
                  <h5 class="font-bold mb-0 text-[#0b2240]">Raghunath Yemul Guruji</h5>
                  <small class="text-gray-500 font-bold">Founder &amp; Chairman &ndash; DICCAI</small>
                </div>
                <div>
                  <p class="italic font-bold text-green-700 mb-0">Inclusive Services for a Better Tomorrow</p>
                </div>
                <div>
                  <h5 class="font-bold mb-0 text-[#0b2240]">Amit Agarwal</h5>
                  <small class="text-gray-500 font-bold">CEO &ndash; DICCAI</small>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.php';?>