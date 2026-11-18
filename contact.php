<?php
$page_title = 'Contact Us';
include 'header.php';
?>
<main class="flex-1">
  <section class="bg-navy-900 text-white py-14 sm:py-16 border-b border-navy-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-xs font-semibold text-amber-400 uppercase tracking-wider mb-2"><a href="<?php echo $url;?>" class="hover:underline">Home</a> / Contact Us</div>
      <h1 class="font-display font-extrabold text-3xl sm:text-5xl">Contact DICCAI</h1>
      <p class="text-slate-300 mt-3 max-w-2xl text-sm sm:text-base">Reach out to our Pune offices for membership, incubation programs, partnerships, or general inquiries.</p>
    </div>
  </section>
  <section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-14">
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:border-amber-400 transition">
          <div class="w-12 h-12 rounded-xl bg-navy-900 text-amber-400 flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-location-dot"></i></div>
          <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Location 1</span>
          <h3 class="font-display font-bold text-lg text-navy-900 mt-1 mb-2">Bhosari Office, Pune</h3>
          <p class="text-sm text-slate-600 leading-relaxed">PL-451, S.No.-2, Indrayani Nagar, Bhosari, Pune Maharashtra - 411026</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:border-amber-400 transition">
          <div class="w-12 h-12 rounded-xl bg-navy-900 text-amber-400 flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-building"></i></div>
          <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Location 2</span>
          <h3 class="font-display font-bold text-lg text-navy-900 mt-1 mb-2">Baner Office, Pune</h3>
          <p class="text-sm text-slate-600 leading-relaxed">1005 Shree Dhawalgiri Chs Ivory Estate Baner Rd Pune Mh - 411045</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:border-amber-400 transition">
          <div class="w-12 h-12 rounded-xl bg-amber-500 text-navy-950 flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-phone-volume"></i></div>
          <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Direct Helpline</span>
          <h3 class="font-display font-bold text-lg text-navy-900 mt-1 mb-2">Contact Number</h3>
          <a href="tel:8005896807" class="text-base font-bold text-navy-900 hover:text-amber-600 transition block">800-589-6807</a>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:border-amber-400 transition">
          <div class="w-12 h-12 rounded-xl bg-amber-500 text-navy-950 flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-envelope-open-text"></i></div>
          <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Official Email</span>
          <h3 class="font-display font-bold text-lg text-navy-900 mt-1 mb-2">Email Address</h3>
          <a href="mailto:info@diccai.com" class="text-sm font-bold text-navy-900 hover:text-amber-600 transition break-all block">info@diccai.com</a>
        </div>
      </div>
      
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>
