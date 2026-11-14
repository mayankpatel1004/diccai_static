<?php include 'connection.php';?>
<!DOCTYPE php>
<php lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home | DICCAI - Divyang Indian Chamber of Commerce & Industry</title>
  <link rel="icon" href="<?php echo $url;?>images/favicon.png" type="image/png" />
  <script src="tailwind.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $url?>all.min.css" />
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
    .bg-navy-9501{background:none;}
  </style>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8fafc;
    }

    /* Header & Navbar */
    .navbar {
      background-color: #ffffff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .nav-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      height: 76px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    /* Left Side Logo */
    .nav-logo {
      display: flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
    }

    .nav-logo img {
      height: 48px;
      width: auto;
      object-fit: contain;
    }

    .nav-logo span {
      font-size: 1.4rem;
      font-weight: 700;
      color: #0f3d68;
      letter-spacing: 0.5px;
    }

    /* Right Side Menu */
    .nav-menu {
      list-style: none;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .nav-item {
      position: relative;
    }

    .nav-link {
      display: flex;
      align-items: center;
      gap: 6px;
      padding: 10px 16px;
      text-decoration: none;
      color: #1e293b;
      font-size: 15px;
      font-weight: 600;
      border-radius: 6px;
      transition: all 0.25s ease;
    }

    .nav-link:hover,
    .nav-link.active {
      color: #0f3d68;
      background-color: #eff6ff;
    }

    .arrow {
      font-size: 11px;
      transition: transform 0.25s ease;
    }

    /* Submenu Dropdown */
    .submenu {
      list-style: none;
      position: absolute;
      top: 100%;
      left: 0;
      min-width: 230px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
      border-top: 3px solid #f59e0b;
      padding: 8px 0;
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px);
      transition: all 0.25s ease;
      z-index: 999;
    }

    .submenu li a {
      display: block;
      padding: 10px 18px;
      color: #334155;
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      transition: all 0.2s ease;
    }

    .submenu li a:hover {
      background-color: #f1f5f9;
      color: #0f3d68;
      padding-left: 24px;
    }

    /* Desktop Hover States */
    @media (min-width: 769px) {
      .nav-item:hover .submenu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
      }

      .nav-item:hover .arrow {
        transform: rotate(180deg);
      }
    }

    /* Mobile Hamburger Button */
    .menu-toggle {
      display: none;
      background: none;
      border: none;
      font-size: 26px;
      color: #0f3d68;
      cursor: pointer;
    }

    /* Responsive Mobile Menu */
    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }

      .nav-menu {
        position: absolute;
        top: 76px;
        left: 0;
        width: 100%;
        background-color: #ffffff;
        flex-direction: column;
        align-items: stretch;
        padding: 12px 20px 20px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        display: none;
      }

      .nav-menu.open {
        display: flex;
      }

      .nav-link {
        justify-content: space-between;
        padding: 12px 14px;
      }

      .submenu {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        box-shadow: none;
        border-top: none;
        border-left: 3px solid #f59e0b;
        margin: 4px 0 8px 16px;
        padding: 4px 0;
        background-color: #f8fafc;
        display: none;
      }

      .nav-item.submenu-open .submenu {
        display: block;
      }

      .nav-item.submenu-open .arrow {
        transform: rotate(180deg);
      }
    }
  </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen">

  <!-- Top Navigation Menu -->
  <header class="navbar">
    <div class="nav-container">
      <!-- Left Side Logo -->
      <a href="<?php echo $url;?>" class="nav-logo">
        <img src="<?php echo $url;?>images/logo.webp" alt="DICCAI Logo" class="h-12 w-auto object-contain rounded" />
      </a>

      <!-- Mobile Toggle -->
      <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu">&#9776;</button>

      <!-- Right Side Navigation Links with Submenus -->
      <ul class="nav-menu" id="navMenu">
        <li class="nav-item">
          <a href="<?php echo $url;?>" class="nav-link active">Home</a>
        </li>

        <li class="nav-item has-submenu">
          <a href="<?php echo $url;?>achivements.php?gallery=1" class="nav-link">
            Contribution <span class="arrow">&#9662;</span>
          </a>
          <ul class="submenu">
            <li><a href="<?php echo $url;?>achivements.php?gallery=1">Achivements 1</a></li>
            <li><a href="<?php echo $url;?>achivements.php?gallery=2">Achivements 2</a></li>
            <li><a href="<?php echo $url;?>achivements.php?gallery=3">Achivements 3</a></li>
            <li><a href="<?php echo $url;?>achivements.php?gallery=4">Achivements 4</a></li>
            <li><a href="<?php echo $url;?>achivements.php?gallery=5">Achivements 5</a></li>
            <li><a href="<?php echo $url;?>achivements.php?gallery=6">Achivements 6</a></li>
            <li><a href="<?php echo $url;?>achivements.php?gallery=7">Achivements 7</a></li>
            <li><a href="<?php echo $url;?>achivements.php?gallery=8">Achivements 8</a></li>
          </ul>
        </li>

        <li class="nav-item has-submenu">
          <a href="<?php echo $url;?>gallery.php?gallery=1" class="nav-link">
            Gallery <span class="arrow">&#9662;</span>
          </a>
          <ul class="submenu">
            <li><a href="<?php echo $url;?>gallery.php?gallery=1">Gallery 1</a></li>
            <li><a href="<?php echo $url;?>gallery.php?gallery=2">Gallery 2</a></li>
            <li><a href="<?php echo $url;?>gallery.php?gallery=3">Gallery 3</a></li>
            <li><a href="<?php echo $url;?>gallery.php?gallery=4">Gallery 4</a></li>
            <li><a href="<?php echo $url;?>gallery.php?gallery=5">Gallery 5</a></li>
          </ul>
        </li>

        <li class="nav-item has-submenu">
          <a href="<?php echo $url;?>social-initiatives.php" class="nav-link">
            Social Initiatives <span class="arrow">&#9662;</span>
          </a>
          <ul class="submenu">
            <li><a href="<?php echo $url;?>social-initiatives.php">Awards</a></li>
            <li><a href="<?php echo $url;?>vip-mart.php">VIP Mart</a></li>
            <li><a href="<?php echo $url;?>social-launge.php">Social Launge</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="<?php echo $url;?>our-objectives.php" class="nav-link">Our Objectives</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $url;?>csr-funds.php" class="nav-link">CSR Funds</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $url;?>qr-code.php" class="nav-link">Donate Now</a>
        </li>
        <li>
          
        </li>
      </ul>
    </div>
  </header>
  