<?php
$page_title = 'About Us';
include 'header.php';
?>
<main class="flex-1">
  <section class="bg-navy-900 text-white py-14 sm:py-16 border-b border-navy-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-xs font-semibold text-amber-400 uppercase tracking-wider mb-2"><a href="<?php echo $url;?>" class="hover:underline">Home</a> / About Us</div>
      <h1 class="font-display font-extrabold text-3xl sm:text-5xl">About DICCAI</h1>
      <p class="text-slate-300 mt-3 max-w-2xl text-sm sm:text-base">Championing inclusive entrepreneurship, policy reform, and economic dignity for Divyang citizens across India.</p>
    </div>
  </section>
  <section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        <div class="lg:col-span-7 space-y-5 text-slate-600 leading-relaxed text-base">
          <span class="text-xs font-bold uppercase tracking-widest text-amber-600">Our Story &amp; Mission</span>
          <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-navy-900">Empowering Divyang Visionaries to Lead India's Growth Story</h2>
          <div class="section-title-bar"></div>
          <p>The <strong>Divyang Indian Chamber of Commerce and Industry (DICCAI)</strong> was established with a singular, transformative vision: to transition persons with disabilities from job seekers to job creators and industry leaders. Operating out of our hubs in Bhosari and Baner in Pune, Maharashtra, DICCAI serves as a dedicated catalyst for economic self-reliance, fostering an environment where talent and entrepreneurial spirit thrive without barriers.</p>
          <p>Across India, millions of Divyang individuals possess extraordinary ingenuity, resilience, and technical capability, yet frequently encounter hurdles in accessing seed capital, accessible infrastructure, and corporate supply chains. DICCAI bridges this gap by offering structured business incubation, financial literacy workshops, mentorship from seasoned industrialists, and direct market linkage programs tailored for Divyang-owned MSMEs and startups.</p>
          <p>Beyond enterprise support, DICCAI actively collaborates with central and state government ministries, public sector undertakings, and private corporations to advocate for inclusive procurement policies and accessible workplaces. Through national conclaves, trade exhibitions, and skill certification drives, we ensure that policy frameworks translate into tangible economic opportunities at the grassroots level.</p>
          <p>Today, DICCAI stands as a vibrant community of entrepreneurs, educators, technologists, and social advocates united by shared purpose. Whether launching a first micro-enterprise or scaling an established manufacturing unit, our members receive continuous guidance, legal and compliance advisory, and a supportive network committed to long-term prosperity.</p>
        </div>
        <div class="lg:col-span-5 space-y-6">
          <div class="rounded-2xl overflow-hidden shadow-lg border border-slate-200 bg-slate-50 p-2">
            <img src="<?php echo $url;?>banners/item_2033_1_oad.webp" alt="DICCAI Leadership" class="w-full h-72 object-cover rounded-xl" />
          </div>
          <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 space-y-4">
            <div class="flex items-start gap-3.5">
              <div class="w-10 h-10 rounded-xl bg-amber-500/15 text-amber-600 flex items-center justify-center shrink-0 mt-0.5"><i class="fa-solid fa-eye"></i></div>
              <div><h3 class="font-display font-bold text-navy-900 text-base">Our Vision</h3><p class="text-xs sm:text-sm text-slate-600 mt-1">To provide the necessary equipment to help people with disabilities stand on their own feet and become self-employed.</p></div>
            </div>
            <div class="flex items-start gap-3.5 pt-3 border-t border-slate-200">
              <div class="w-10 h-10 rounded-xl bg-navy-900 text-amber-400 flex items-center justify-center shrink-0 mt-0.5"><i class="fa-solid fa-bullseye"></i></div>
              <div><h3 class="font-display font-bold text-navy-900 text-base">Our Mission</h3><p class="text-xs sm:text-sm text-slate-600 mt-1">Delivering world-class incubation, skill training, policy representation, and community support across Maharashtra and nationwide.</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-16 sm:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-2xl mx-auto mb-12">
        <span class="text-xs font-bold uppercase tracking-widest text-amber-600">Leadership &amp; Governance</span>
        <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-navy-900 mt-2">Hierarchy of DICCAI</h2>
        <div class="section-title-bar mx-auto mt-3"></div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php
        $leaders = [
          ['Mr. Raghunath Yemul Guruji', 'Founder', 'Executive Leadership'],
          ['Mrs. Neelima Yemul', 'Executive', 'Administration & Welfare'],
          ['Mr. Nitin Kulkarni', 'Manager', 'Operations & Coordination'],
          ['Mr. Amit Agarwal', 'CEO', 'Strategy & Partnerships'],
          ['Mr. Shekhar Yadav', 'Secretory', 'Governance & Compliance'],
          ['Mr. Prashant Moholkar', 'Director', 'Enterprise Development'],
          ['Mr. Ravi Kale', 'Chief Adviser', 'Policy & Advisory']
        ];
        foreach ($leaders as $l): ?>
          <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg border border-slate-200 hover:border-amber-400 transition text-center">
            <div class="w-16 h-16 rounded-2xl bg-navy-900 text-amber-400 text-xl flex items-center justify-center mx-auto mb-4"><i class="fa-solid fa-user-tie"></i></div>
            <span class="inline-block px-2.5 py-0.5 rounded-full bg-amber-50 text-amber-700 text-[11px] font-bold mb-2"><?php echo htmlspecialchars($l[1]); ?></span>
            <h3 class="font-display font-bold text-base text-navy-900"><?php echo htmlspecialchars($l[0]); ?></h3>
            <p class="text-xs text-slate-500 mt-1"><?php echo htmlspecialchars($l[2]); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>
