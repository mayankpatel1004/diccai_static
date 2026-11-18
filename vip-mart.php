<?php include 'header.php';?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
  /* Small custom helpers that are cleaner as CSS than long Tailwind class chains */
  .brand-navy      { background-color: #0b2240; color: #ffffff; }
  .brand-green     { background-color: #1b6b3a; color: #ffffff; }
  .brand-gold-text { color: #f5b800; }
  .brand-gold-bg   { background-color: #f5b800; color: #0b2240; }

  .hero-banner {
    background: linear-gradient(135deg, #0b2240 0%, #153966 100%);
    border-top: 5px solid #1b6b3a;
    border-bottom: 5px solid #f5b800;
  }

  .pillar-icon {
    width: 64px; height: 64px; border-radius: 50%;
    background-color: #1b6b3a; color: #fff;
    display: inline-flex; align-items: center; justify-content: center;
    font-size: 1.6rem; margin-bottom: 10px;
    box-shadow: 0 3px 8px rgba(27,107,58,.3);
  }

  .cta-badge {
    background: linear-gradient(135deg, #1b6b3a 0%, #0b2240 100%);
    color: #fff; border-radius: 12px; padding: 18px 24px;
    font-weight: 800; letter-spacing: 1px;
    box-shadow: 0 4px 12px rgba(0,0,0,.15);
  }

  .location-strip {
    background-color: #fff3cd;
    border-left: 5px solid #f5b800;
    border-right: 5px solid #f5b800;
    color: #0b2240;
  }
</style>

<main class="flex-1">
  <section class="py-16 sm:py-20 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Hero Banner -->
      <section class="hero-banner text-white py-4 rounded">
        <div class="max-w-7xl mx-auto px-4 text-center">
          <div class="flex flex-wrap justify-center items-center gap-3 mb-2">
            <i class="fas fa-shopping-cart text-5xl brand-gold-text"></i>
            <h2 class="text-4xl sm:text-5xl font-bold mb-0">
              DIVYA <span class="brand-gold-text">VIP</span> MART<sup class="text-xl">&trade;</sup>
            </h2>
          </div>
          <p class="text-lg font-bold mb-3">
            <span class="brand-gold-text">V</span>intage &bull;
            <span class="brand-gold-text">I</span>nnovative &bull;
            <span class="brand-gold-text">P</span>rachin &bull;
            Trust &bull; Test &bull; Support
          </p>
          <div class="inline-block brand-gold-bg px-4 py-2 rounded-full font-bold shadow">
            A Modern Retail + Digital Marketplace &mdash; From Local to Global
          </div>
        </div>
      </section>

      <!-- Storefront Concept Showcase -->
      <section class="py-4 bg-white border-b">
        <div class="max-w-7xl mx-auto px-4">
          <div class="grid grid-cols-1 md:grid-cols-12 gap-3 text-center items-stretch">

            <!-- Left navy card -->
            <div class="md:col-span-3">
              <div class="brand-navy h-full p-4 rounded flex flex-col justify-center">
                <h5 class="font-bold uppercase mb-3 text-lg leading-tight">Shop<br>Support<br>Empower</h5>
                <i class="fas fa-shopping-cart text-3xl brand-gold-text"></i>
              </div>
            </div>

            <!-- Middle white card -->
            <div class="md:col-span-6">
              <div class="bg-gray-50 border h-full p-4 rounded flex flex-col justify-center">
                <span class="bg-green-600 text-white text-xs font-semibold mb-2 mx-auto px-3 py-1 rounded-full">Storefront Retail Zones</span>
                <h4 class="font-bold text-gray-900 text-xl">DIVYA <span class="text-green-600">VIP</span> MART</h4>
                <p class="text-gray-500 text-sm mb-3">From Local to Global</p>
                <div class="grid grid-cols-3 gap-2">
                  <div class="p-2 bg-white border rounded font-bold text-xs text-blue-700">50+ YEARS BRANDS</div>
                  <div class="p-2 bg-white border rounded font-bold text-xs text-green-700">NGO PRODUCTS</div>
                  <div class="p-2 bg-white border rounded font-bold text-xs text-gray-900">DIVYANGJAN MADE PRODUCTS</div>
                </div>
              </div>
            </div>

            <!-- Right light card -->
            <div class="md:col-span-3">
              <div class="bg-gray-50 border h-full p-4 rounded flex flex-col justify-center">
                <i class="fas fa-wheelchair text-2xl text-blue-700 mb-2"></i>
                <h6 class="font-bold text-blue-700 mb-1">DICCAI</h6>
                <p class="font-bold text-gray-900 mb-0 text-sm">Inclusive Shopping<br>Stronger India</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Three Product Category Columns -->
      <section class="py-5">
        <div class="max-w-7xl mx-auto px-4">
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

            <!-- Column 1 -->
            <div class="mb-4 lg:mb-0">
              <div class="h-full border-0 rounded-lg shadow-md hover:-translate-y-1 transition-transform duration-200 bg-white overflow-hidden">
                <div class="brand-navy text-center py-3 font-bold text-lg rounded-t-lg">
                  50+ &amp; 100+<br>Years Old Trusted Brands
                </div>
                <div class="p-4">
                  <ul class="list-none m-0 p-0">
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-utensils text-blue-700 mr-2"></i> Food &amp; Beverages</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-cookie-bite text-blue-700 mr-2"></i> Snacks &amp; Packaged Food</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-box-open text-blue-700 mr-2"></i> Daily Use Products</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-heartbeat text-blue-700 mr-2"></i> Personal Care &amp; Healthcare</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-om text-blue-700 mr-2"></i> Pooja Kits &amp; Spiritual Products</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-gift text-blue-700 mr-2"></i> Gift Articles &amp; Handicrafts</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-home text-blue-700 mr-2"></i> Home &amp; Kitchen Products</li>
                    <li class="py-1.5 text-sm"><i class="fas fa-globe text-blue-700 mr-2"></i> Global &amp; Indian Brands</li>
                  </ul>
                </div>
                <div class="bg-white text-center font-bold text-gray-900 border-t py-3">
                  Famous &amp; Trustworthy Brands
                </div>
              </div>
            </div>

            <!-- Column 2 -->
            <div class="mb-4 lg:mb-0">
              <div class="h-full border-0 rounded-lg shadow-md hover:-translate-y-1 transition-transform duration-200 bg-white overflow-hidden">
                <div class="brand-green text-center py-3 font-bold text-lg rounded-t-lg">
                  NGO / SHG /<br>Social Enterprise Products
                </div>
                <div class="p-4">
                  <ul class="list-none m-0 p-0">
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-hands-helping text-green-700 mr-2"></i> Products from NGOs</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-female text-green-700 mr-2"></i> Women Self Help Groups</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-users text-green-700 mr-2"></i> Rural &amp; Tribal Products</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-leaf text-green-700 mr-2"></i> Eco-friendly &amp; Sustainable Items</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-palette text-green-700 mr-2"></i> Handicrafts &amp; Traditional Products</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-seedling text-green-700 mr-2"></i> Organic &amp; Natural Products</li>
                    <li class="py-1.5 text-sm"><i class="fas fa-hand-holding-heart text-green-700 mr-2"></i> Social Impact Enterprises</li>
                  </ul>
                </div>
                <div class="bg-white text-center font-bold text-green-700 border-t py-3">
                  Support Social Causes
                </div>
              </div>
            </div>

            <!-- Column 3 -->
            <div>
              <div class="h-full border-0 rounded-lg shadow-md hover:-translate-y-1 transition-transform duration-200 bg-white overflow-hidden">
                <div class="brand-navy text-center py-3 font-bold text-lg rounded-t-lg">
                  Divyangjan-<br>Made Products
                </div>
                <div class="p-4">
                  <ul class="list-none m-0 p-0">
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-cogs text-blue-700 mr-2"></i> Divyangjan Assembled Products</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-paint-brush text-blue-700 mr-2"></i> Handmade &amp; Innovative Items</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-wheelchair text-blue-700 mr-2"></i> Assistive Devices &amp; Accessibility Products</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-shopping-bag text-blue-700 mr-2"></i> Daily Use &amp; Utility Items</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-pen-fancy text-blue-700 mr-2"></i> Stationery, Gifts, Decorative Items</li>
                    <li class="py-1.5 border-b border-dashed border-gray-200 text-sm"><i class="fas fa-lightbulb text-blue-700 mr-2"></i> Technology &amp; Simple Solutions</li>
                    <li class="py-1.5 text-sm"><i class="fas fa-award text-blue-700 mr-2"></i> Made with Ability, Sold with Pride</li>
                  </ul>
                </div>
                <div class="bg-white text-center font-bold text-gray-900 border-t py-3">
                  Made with Ability &bull; Sold with Pride
                </div>
              </div>
            </div>
          </div>

          <!-- Value Proposition & Impact Pillars -->
          <div class="bg-white p-4 rounded shadow-sm mt-3">
            <h5 class="text-center font-bold text-gray-900 mb-4">
              Trust &amp; Tested Products bring customers to the Mart and help NGO &amp; Divyangjan products get market, identity and sales.
            </h5>

            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 gap-4 items-center text-center">
              <div>
                <div class="pillar-icon"><i class="fas fa-shopping-cart"></i></div>
                <div class="font-bold text-sm">Shopping Experience</div>
              </div>
              <div>
                <div class="pillar-icon"><i class="fas fa-certificate"></i></div>
                <div class="font-bold text-sm">Quality Products</div>
              </div>
              <div>
                <div class="pillar-icon"><i class="fas fa-users"></i></div>
                <div class="font-bold text-sm">Support NGOs</div>
              </div>
              <div>
                <div class="pillar-icon"><i class="fas fa-wheelchair"></i></div>
                <div class="font-bold text-sm">Empower Divyangjan</div>
              </div>
              <div>
                <div class="pillar-icon"><i class="fas fa-leaf"></i></div>
                <div class="font-bold text-sm">Sustainable Future</div>
              </div>
              <div class="col-span-2 sm:col-span-4 md:col-span-1">
                <div class="cta-badge">
                  BUY<br>SUPPORT<br><span class="brand-gold-text">EMPOWER</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Target Locations Strip -->
          <div class="location-strip p-3 rounded mt-4 text-center shadow-sm font-semibold">
            <span class="text-red-600 font-bold mr-2"><i class="fas fa-map-marker-alt"></i> Locations:</span>
            Highways &bull; Railway Stations &bull; Airports &bull; मंदिर एवं तीर्थ क्षेत्र (Temples &amp; Pilgrimage Sites) &bull; Market Places &bull; High-Footfall Areas
          </div>
        </div>
      </section>

      <!-- Contact & Leadership Section -->
      <section class="bg-white py-4 border-t">
        <div class="max-w-7xl mx-auto px-4">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-2 text-center mb-4">
            <div>
              <a href="tel:+918005896807" class="text-gray-900 font-bold no-underline">
                <i class="fas fa-phone-alt text-green-700 mr-2"></i> +91 80058 96807
              </a>
            </div>
            <div>
              <a href="mailto:info@diccai.com" class="text-gray-900 font-bold no-underline">
                <i class="fas fa-envelope text-blue-700 mr-2"></i> info@diccai.com
              </a>
            </div>
            <div>
              <a href="https://www.diccai.com" target="_blank" rel="noopener noreferrer" class="text-gray-900 font-bold no-underline">
                <i class="fas fa-globe text-green-700 mr-2"></i> www.diccai.com
              </a>
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-3 items-center text-center">
            <div>
              <h5 class="font-bold mb-0 text-[#0b2240]">Raghunath Yemul Guruji</h5>
              <small class="text-gray-500 font-bold">Founder &amp; Chairman &ndash; DICCAI</small>
            </div>
            <div>
              <p class="italic font-bold text-green-700 mb-0">Inclusive Business for a Brighter Tomorrow</p>
            </div>
            <div>
              <h5 class="font-bold mb-0 text-[#0b2240]">Amit Agarwal</h5>
              <small class="text-gray-500 font-bold">CEO &ndash; DICCAI</small>
            </div>
          </div>
        </div>
      </section>

    </div>
  </section>
</main>
<?php include 'footer.php';?>