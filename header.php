<?php
include 'connection.php';
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | ' : ''; ?>DICCAI - Divyang Indian Chamber of Commerce &amp; Industry</title>
  <link rel="icon" href="<?php echo $url;?>images/favicon.png" type="image/png" />
  <script src="<?php echo $url;?>tailwind.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $url;?>all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Inter', 'sans-serif'], display: ['Plus Jakarta Sans', 'sans-serif'] },
          colors: {
            navy: { 700: '#1E4B82', 800: '#163A66', 900: '#0F294A', 950: '#091A30' },
            saffron: { 400: '#FBBF24', 500: '#F59E0B', 600: '#D97706', 700: '#B45309' },
            emerald: { 600: '#1B6B3A', 700: '#14532D' }
          }
        }
      }
    }
  </script>
  <style>
    * { box-sizing: border-box; }
    body { font-family: 'Inter', sans-serif; background-color: #f8fafc; color: #1e293b; }
    h1, h2, h3, h4, h5, h6, .font-display { font-family: 'Plus Jakarta Sans', sans-serif; }
    .navbar { background-color: #ffffff; border-bottom: 1px solid #e2e8f0; box-shadow: 0 4px 20px rgba(9, 26, 48, 0.06); position: sticky; top: 0; z-index: 1000; }
    .nav-container { max-width: 1280px; margin: 0 auto; padding: 0 20px; height: 82px; display: flex; align-items: center; justify-content: space-between; }
    .nav-logo { display: flex; align-items: center; gap: 12px; text-decoration: none; }
    .nav-logo img { height: 54px; width: auto; object-fit: contain; }
    .nav-menu { list-style: none; display: flex; align-items: center; gap: 4px; margin: 0; padding: 0; }
    .nav-item { position: relative; }
    .nav-link { display: flex; align-items: center; gap: 6px; padding: 10px 13px; text-decoration: none; color: #0F294A; font-size: 14px; font-weight: 600; border-radius: 8px; transition: all 0.2s ease; white-space: nowrap; }
    .nav-link:hover, .nav-link.active { color: #D97706; background-color: #FFFBEB; }
    .nav-link.donate-cta { background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%); color: #091A30 !important; font-weight: 700; padding: 10px 18px; box-shadow: 0 4px 12px rgba(245, 158, 11, 0.28); }
    .arrow { font-size: 10px; transition: transform 0.25s ease; }
    .submenu { list-style: none; position: absolute; top: calc(100% + 4px); left: 0; min-width: 220px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 12px 30px rgba(9, 26, 48, 0.14); border: 1px solid #e2e8f0; border-top: 3px solid #F59E0B; padding: 6px 0; opacity: 0; visibility: hidden; transform: translateY(8px); transition: all 0.22s ease; z-index: 999; }
    .submenu li a { display: block; padding: 9px 18px; color: #334155; text-decoration: none; font-size: 13.5px; font-weight: 500; transition: all 0.18s ease; }
    .submenu li a:hover { background-color: #f8fafc; color: #0F294A; font-weight: 600; padding-left: 22px; }
    @media (min-width: 1024px) {
      .nav-item:hover .submenu { opacity: 1; visibility: visible; transform: translateY(0); }
      .nav-item:hover .arrow { transform: rotate(180deg); }
    }
    .menu-toggle { display: none; background: #f1f5f9; border: 1px solid #e2e8f0; border-radius: 8px; padding: 8px 12px; font-size: 20px; color: #0F294A; cursor: pointer; }
    @media (max-width: 1023px) {
      .menu-toggle { display: block; }
      .nav-menu { position: absolute; top: 82px; left: 0; width: 100%; background-color: #ffffff; flex-direction: column; align-items: stretch; padding: 16px 20px 24px; border-bottom: 1px solid #e2e8f0; box-shadow: 0 15px 30px rgba(9, 26, 48, 0.12); display: none; max-height: calc(100vh - 82px); overflow-y: auto; }
      .nav-menu.open { display: flex; }
      .nav-link { justify-content: space-between; padding: 12px 14px; }
      .submenu { position: static; opacity: 1; visibility: visible; transform: none; box-shadow: none; border: none; border-left: 3px solid #F59E0B; border-radius: 0; margin: 4px 0 8px 14px; padding: 4px 0; background-color: #f8fafc; display: none; }
      .nav-item.submenu-open .submenu { display: block; }
      .nav-item.submenu-open .arrow { transform: rotate(180deg); }
    }
    .hero-slide { transition: opacity 0.7s ease-in-out; }
    .section-title-bar { width: 64px; height: 4px; background: linear-gradient(90deg, #F59E0B 0%, #1B6B3A 100%); border-radius: 999px; }
    .bg-navy-9501 { background: none; }
  </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen">

  <!-- DICCI-Style Institutional Top Utility Bar -->
  <div class="bg-navy-950 text-slate-200 text-xs border-b border-navy-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 flex flex-wrap justify-between items-center gap-2">
      <div class="flex flex-wrap items-center gap-4 sm:gap-6">
        <span class="hidden md:inline-flex items-center gap-1.5 text-amber-400 font-semibold">
          <i class="fa-solid fa-landmark"></i> Divyang Indian Chamber of Commerce &amp; Industry
        </span>
        <a href="tel:8005896807" class="hover:text-amber-400 transition inline-flex items-center gap-1.5">
          <i class="fa-solid fa-phone text-amber-400"></i> <span>800-589-6807</span>
        </a>
        <a href="mailto:info@diccai.com" class="hover:text-amber-400 transition inline-flex items-center gap-1.5">
          <i class="fa-solid fa-envelope text-amber-400"></i> <span>info@diccai.com</span>
        </a>
      </div>
      <div class="flex items-center gap-4">
        <a href="<?php echo $url;?>about" class="hover:text-amber-400 transition hidden sm:inline">About Us</a>
        <span class="text-slate-600 hidden sm:inline">|</span>
        <a href="<?php echo $url;?>contact" class="hover:text-amber-400 transition hidden sm:inline">Contact</a>
        <div class="flex items-center gap-2.5 pl-2 border-l border-navy-800">
          <a href="#" aria-label="Facebook" class="w-6 h-6 rounded-full bg-navy-800 hover:bg-amber-500 hover:text-navy-950 flex items-center justify-center transition"><i class="fa-brands fa-facebook-f text-[11px]"></i></a>
          <a href="#" aria-label="LinkedIn" class="w-6 h-6 rounded-full bg-navy-800 hover:bg-amber-500 hover:text-navy-950 flex items-center justify-center transition"><i class="fa-brands fa-linkedin-in text-[11px]"></i></a>
          <a href="#" aria-label="Instagram" class="w-6 h-6 rounded-full bg-navy-800 hover:bg-amber-500 hover:text-navy-950 flex items-center justify-center transition"><i class="fa-brands fa-instagram text-[11px]"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Sticky Navigation Bar -->
  <header class="navbar">
    <div class="nav-container">
      <a href="<?php echo $url;?>" class="nav-logo">
        <img src="<?php echo $url;?>images/logo.webp" alt="DICCAI Logo" class="rounded" />
        
      </a>

      <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu">
        <i class="fa-solid fa-bars"></i>
      </button>

      <ul class="nav-menu" id="navMenu">
        <li class="nav-item">
          <a href="<?php echo $url;?>" class="nav-link <?php echo $current_page === 'index.php' ? 'active' : ''; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $url;?>about" class="nav-link <?php echo $current_page === 'about.php' ? 'active' : ''; ?>">About</a>
        </li>
        <li class="nav-item has-submenu">
          <a href="<?php echo $url;?>achivements?gallery=1" class="nav-link <?php echo $current_page === 'achivements.php' ? 'active' : ''; ?>">
            Contribution <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>
          </a>
          <ul class="submenu">
            <?php for ($g = 1; $g <= 8; $g++): ?>
              <li><a href="<?php echo $url;?>achivements?gallery=<?php echo $g; ?>">Achievements <?php echo $g; ?></a></li>
            <?php endfor; ?>
          </ul>
        </li>
        <li class="nav-item has-submenu">
          <a href="<?php echo $url;?>gallery?gallery=1" class="nav-link <?php echo $current_page === 'gallery.php' ? 'active' : ''; ?>">
            Gallery <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>
          </a>
          <ul class="submenu">
            <?php for ($g = 1; $g <= 5; $g++): ?>
              <li><a href="<?php echo $url;?>gallery?gallery=<?php echo $g; ?>">Gallery <?php echo $g; ?></a></li>
            <?php endfor; ?>
          </ul>
        </li>
        <li class="nav-item has-submenu">
          <a href="<?php echo $url;?>social-initiatives" class="nav-link <?php echo in_array($current_page, ['social-initiatives.php', 'vip-mart.php', 'social-launge.php']) ? 'active' : ''; ?>">
            Initiatives <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>
          </a>
          <ul class="submenu">
            <li><a href="<?php echo $url;?>social-initiatives">Awards &amp; Social Initiatives</a></li>
            <li><a href="<?php echo $url;?>vip-mart">Divya VIP Mart</a></li>
            <li><a href="<?php echo $url;?>social-launge">Divya Service Lounge</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?php echo $url;?>our-objectives" class="nav-link <?php echo $current_page === 'our-objectives.php' ? 'active' : ''; ?>">Objectives</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $url;?>csr-funds" class="nav-link <?php echo $current_page === 'csr-funds.php' ? 'active' : ''; ?>">CSR Funds</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $url;?>contact" class="nav-link <?php echo $current_page === 'contact.php' ? 'active' : ''; ?>">Contact</a>
        </li>
        <li class="nav-item lg:ml-2 mt-2 lg:mt-0">
          <a href="<?php echo $url;?>qr-code" class="nav-link donate-cta justify-center">
            <i class="fa-solid fa-hand-holding-heart"></i> Donate Now
          </a>
        </li>
      </ul>
    </div>
  </header>
