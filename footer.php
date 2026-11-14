
  <!-- 4-Column Footer -->
  <footer class="bg-navy-950 text-slate-300 border-t border-navy-800 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
        
        <div>
          <h3 class="text-white font-display font-bold text-lg mb-5">ABOUT DICCAI</h3>
          <ul class="space-y-3 text-sm">
            <li><a href="<?php echo $url;?>about-diccai">About DICCAI</a></li>
            <li><a href="<?php echo $url;?>images/12A provisional.pdf" target="_blank">12A Provisional</a></li>
            <li><a href="<?php echo $url;?>images/80G provisional.pdf" target="_blank">80G Provisional</a></li>
            <li><a href="<?php echo $url;?>images/Approval Letter for form CSR1 (3).PDF" target="_blank">CSR1</a></li>
            <li><a href="<?php echo $url;?>images/Certificate of Incorporation.pdf" target="_blank">Incorporation Certificate</a></li>
            <li><a href="<?php echo $url;?>images/121126/ITR1.pdf" target="_blank">ITR-1087960016(1)</a></li>
            <li><a href="<?php echo $url;?>images/121126/ITR2.pdf" target="_blank">ITR-1087960088(1)</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-white font-display font-bold text-lg mb-5">Hierarchy OF DICCAI</h3>
          <ul class="space-y-3 text-sm">
            <li><a href="javascript:void(0)" class="hover:text-amber-400">Mr. Raghunath Yemul Guruji (Founder)</a></li>
            <li><a href="javascript:void(0)" class="hover:text-amber-400">Mrs. Neelima Yemul (Executive)</a></li>
            <li><a href="javascript:void(0)" class="hover:text-amber-400">Mr. Nitin Kulkarni (Manager)</a></li>
            <li><a href="javascript:void(0)" class="hover:text-amber-400">Mr. Amit Agarwal (CEO)</a></li>
            <li><a href="javascript:void(0)" class="hover:text-amber-400">Mr. Shekhar Yadav (Secretory)</a></li>
            <li><a href="javascript:void(0)" class="hover:text-amber-400">Mr. Prashant Moholkar (Director)</a></li>
            <li><a href="javascript:void(0)" class="hover:text-amber-400">Mr. Ravi Kale (Chief Adviser)</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-white font-display font-bold text-lg mb-5">Location</h3>
          <ul class="space-y-3 text-sm">
            <li><strong class="text-amber-400 block text-xs"></strong> PL-451, S.No.-2, Indrayani Nagar, Bhosari, Pune Maharashtra - 411026</li>
            <li><strong class="text-amber-400 block text-xs"></strong> 1005 Shree Dhawalgiri Chs Ivory Estate Baner Rd Pune Mh - 411045</li>
          </ul>
        </div>
        <div>
          <h3 class="text-white font-display font-bold text-lg mb-5">Contacts</h3>
          <ul class="space-y-3 text-sm">
            
            <li><a href="tel:9370383218" class="hover:text-amber-400">Phone: 937-038-3218</a></li>
            <li><a href="mailto:diccai.divyang@gmail.com" class="hover:text-amber-400">Email: diccai.divyang@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="bg-black/30 border-t border-navy-800 py-4 text-center text-xs text-slate-400">
      &copy; 2026 DICCAI (Divyang Indian Chamber of Commerce and Industry). All Rights Reserved.
    </div>
  </footer>

  
  <script>
    let sIdx = 0;
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hero-dot');
    function showSlide(n) {
      sIdx = (n + slides.length) % slides.length;
      slides.forEach((el, i) => {
        el.classList.toggle('opacity-100', i === sIdx);
        el.classList.toggle('z-10', i === sIdx);
        el.classList.toggle('opacity-0', i !== sIdx);
        el.classList.toggle('z-0', i !== sIdx);
        el.classList.toggle('pointer-events-none', i !== sIdx);
      });
      dots.forEach((d, i) => {
        d.className = i === sIdx ? 'hero-dot h-2.5 rounded-full transition-all w-8 bg-amber-400' : 'hero-dot h-2.5 rounded-full transition-all w-2.5 bg-white/40';
      });
    }
    function moveHeroSlide(step) { showSlide(sIdx + step); }
    function goToHeroSlide(idx) { showSlide(idx); }
    setInterval(() => moveHeroSlide(1), 4500);
  </script>
  <script>
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    const submenuItems = document.querySelectorAll('.has-submenu');

    // Toggle mobile navigation
    menuToggle.addEventListener('click', () => {
      navMenu.classList.toggle('open');
    });

    // Toggle submenus on mobile click
    submenuItems.forEach((item) => {
      const link = item.querySelector('.nav-link');
      link.addEventListener('click', (e) => {
        if (window.innerWidth <= 768) {
          e.preventDefault();
          item.classList.toggle('submenu-open');
        }
      });
    });
  </script>
  
</body>
</html>