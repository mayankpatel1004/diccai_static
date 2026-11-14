<?php 
include 'header.php';

/* ---------------------------------------------------------
   Gallery definitions (dynamic)
   Each entry: id => [ 'title' => ..., 'images' => [ ... ] ]
   --------------------------------------------------------- */
$galleries = [
  '1' => [
    'title'  => 'DICCAI Gallery 1',
    'images' => [
      "uploads/items/gall_2049_0_d1.jpg",
      "uploads/items/gall_2049_1_d2.jpg",
      "uploads/items/gall_2049_0_d4.jpg",
      "uploads/items/gall_2049_1_d5.jpg",
      "uploads/items/gall_2049_2_d6.jpg",
      "uploads/items/gall_2049_3_d7.jpg",
      "uploads/items/gall_2049_0_d8.jpg",
      "uploads/items/gall_2049_1_d9.jpg",
      "uploads/items/gall_2049_2_d10.jpg",
      "uploads/items/gall_2049_3_d11.jpg",
      "uploads/items/gall_2049_0_d12.jpg",
      "uploads/items/gall_2049_1_d13.jpg",
      "uploads/items/gall_2049_2_d15.jpg",
      "uploads/items/gall_2049_3_d16.jpg",
      "uploads/items/gall_2049_0_d17.jpg",
      "uploads/items/gall_2049_1_d18.jpg",
      "uploads/items/gall_2049_2_d19.jpg",
      "uploads/items/gall_2049_3_d20.jpg",
      "uploads/items/gall_2049_0_d21.jpg",
      "uploads/items/gall_2049_1_d22.jpg",
      "uploads/items/gall_2049_2_d23.jpg",
      "uploads/items/gall_2049_3_d24.jpg",
      "uploads/items/gall_2049_0_d25.jpg",
      "uploads/items/gall_2049_1_d26.jpg",
      "uploads/items/gall_2049_2_d27.jpg",
      "uploads/items/gall_2049_3_d28.jpg",
      "uploads/items/gall_2049_0_d29.jpg",
      "uploads/items/gall_2049_1_d30.jpg",
      "uploads/items/gall_2049_2_d31.jpg",
      "uploads/items/gall_2049_3_d32.jpg",
      "uploads/items/gall_2049_0_d33.jpg",
      "uploads/items/gall_2049_1_d34.jpg",
      "uploads/items/gall_2049_2_d35.jpg",
      "uploads/items/gall_2049_3_d36.jpg"
    ],
  ],
  '2' => [
    'title'  => 'DICCAI Gallery 2',
    'images' => [
      "uploads/items/gall_2052_0_d38.jpg",
      "uploads/items/gall_2052_1_d39.jpg",
      "uploads/items/gall_2052_2_d40.jpg",
      "uploads/items/gall_2052_3_d41.jpg",
      "uploads/items/gall_2052_0_d42.jpg",
      "uploads/items/gall_2052_1_d43.jpg",
      "uploads/items/gall_2052_2_d44.jpg",
      "uploads/items/gall_2052_3_d45.jpg",
      "uploads/items/gall_2052_0_d46.jpg",
      "uploads/items/gall_2052_1_d47.jpg",
      "uploads/items/gall_2052_2_d48.jpg",
      "uploads/items/gall_2052_3_d49.jpg",
      "uploads/items/gall_2052_0_d50.jpg",
      "uploads/items/gall_2052_1_d51.jpg",
      "uploads/items/gall_2052_2_d52.jpg",
      "uploads/items/gall_2052_3_d53.jpg",
      "uploads/items/gall_2052_0_d54.jpg",
      "uploads/items/gall_2052_1_d55.jpg",
      "uploads/items/gall_2052_2_d56.jpg",
      "uploads/items/gall_2052_3_d57.jpg",
      "uploads/items/gall_2052_0_d58.jpg",
      "uploads/items/gall_2052_1_d59.jpg",
      "uploads/items/gall_2052_2_d60.jpg",
      "uploads/items/gall_2052_3_d61.jpg",
      "uploads/items/gall_2052_0_d62.jpg",
      "uploads/items/gall_2052_1_d63.jpg",
      "uploads/items/gall_2052_2_d64.jpg",
      "uploads/items/gall_2052_3_d65.jpg",
      "uploads/items/gall_2052_0_d66.jpg",
      "uploads/items/gall_2052_1_d67.jpg",
      "uploads/items/gall_2052_2_d68.jpg",
      "uploads/items/gall_2052_3_d69.jpg"
    ],
  ],
  '3' => [
    'title'  => 'DICCAI Gallery 3',
    'images' => [
      "uploads/items/gall_2053_0_d71.jpg",
      "uploads/items/gall_2053_1_d72.jpg",
      "uploads/items/gall_2053_2_d73.jpg",
      "uploads/items/gall_2053_3_d74.jpg",
      "uploads/items/gall_2053_0_d75.jpg",
      "uploads/items/gall_2053_1_d76.jpg",
      "uploads/items/gall_2053_2_d77.jpg",
      "uploads/items/gall_2053_3_d78.jpg",
      "uploads/items/gall_2053_0_d79.jpg",
      "uploads/items/gall_2053_1_d80.jpg",
      "uploads/items/gall_2053_2_d81.jpg",
      "uploads/items/gall_2053_3_d82.jpg",
      "uploads/items/gall_2053_0_d83.jpg",
      "uploads/items/gall_2053_1_d84.jpg",
      "uploads/items/gall_2053_2_d85.jpg",
      "uploads/items/gall_2053_3_d86.jpg",
      "uploads/items/gall_2053_0_d87.jpg",
      "uploads/items/gall_2053_1_d88.jpg",
      "uploads/items/gall_2053_2_d89.jpg",
      "uploads/items/gall_2053_3_d90.jpg",
      "uploads/items/gall_2053_0_d91.jpg",
      "uploads/items/gall_2053_1_d92.jpg",
      "uploads/items/gall_2053_2_d93.jpg",
      "uploads/items/gall_2053_0_14.jpg",
      "uploads/items/gall_2053_0_1.jpg",
      "uploads/items/gall_2053_1_2.jpg",
      "uploads/items/gall_2053_2_3.jpg",
      "uploads/items/gall_2053_3_4.jpg",
      "uploads/items/gall_2053_0_5.jpg",
      "uploads/items/gall_2053_1_6.jpg",
      "uploads/items/gall_2053_2_7.jpg",
      "uploads/items/gall_2053_3_8.jpg",
      "uploads/items/gall_2053_0_9.jpg",
      "uploads/items/gall_2053_1_10.jpg",
      "uploads/items/gall_2053_2_11.jpg",
      "uploads/items/gall_2053_3_12.jpg",
      "uploads/items/gall_2053_0_14.jpg",
      "uploads/items/gall_2053_1_15.jpg",
      "uploads/items/gall_2053_2_16.jpg",
      "uploads/items/gall_2053_3_17.jpg",
      "uploads/items/gall_2053_0_18.jpg",
      "uploads/items/gall_2053_1_19.jpg",
      "uploads/items/gall_2053_2_20.jpg",
      "uploads/items/gall_2053_3_21.jpg",
      "uploads/items/gall_2053_0_22.jpg",
      "uploads/items/gall_2053_1_23.jpg",
      "uploads/items/gall_2053_2_24.jpg",
      "uploads/items/gall_2053_3_25.jpg"
    ],
  ],
  '4' => [
    'title'  => 'DICCAI Gallery 4',
    'images' => [
      "uploads/items/gall_2054_0_27.jpg",
      "uploads/items/gall_2054_1_28.jpg",
      "uploads/items/gall_2054_2_29.jpg",
      "uploads/items/gall_2054_3_30.jpg",
      "uploads/items/gall_2054_0_31.jpg",
      "uploads/items/gall_2054_1_32.jpg",
      "uploads/items/gall_2054_2_33.jpg",
      "uploads/items/gall_2054_3_34.jpg",
      "uploads/items/gall_2054_0_35.jpg",
      "uploads/items/gall_2054_1_36.jpg",
      "uploads/items/gall_2054_2_37.jpg",
      "uploads/items/gall_2054_3_38.jpg",
      "uploads/items/gall_2054_0_39.jpg",
      "uploads/items/gall_2054_1_40.jpg",
      "uploads/items/gall_2054_2_41.jpg",
      "uploads/items/gall_2054_3_42.jpg",
      "uploads/items/gall_2054_0_43.jpg",
      "uploads/items/gall_2054_1_44.jpg",
      "uploads/items/gall_2054_2_45.jpg",
      "uploads/items/gall_2054_3_46.jpg",
      "uploads/items/gall_2054_0_47.jpg",
      "uploads/items/gall_2054_1_48.jpg",
      "uploads/items/gall_2054_2_49.jpg",
      "uploads/items/gall_2054_3_50.jpg",
      "uploads/items/gall_2054_0_51.jpg",
      "uploads/items/gall_2054_1_52.jpg",
      "uploads/items/gall_2054_2_53.jpg",
      "uploads/items/gall_2054_3_54.jpg",
      "uploads/items/gall_2054_0_55.jpg",
      "uploads/items/gall_2054_1_56.jpg",
      "uploads/items/gall_2054_2_57.jpg",
      "uploads/items/gall_2054_3_58.jpg",
      "uploads/items/gall_2054_0_59.jpg",
      "uploads/items/gall_2054_1_60.jpg",
      "uploads/items/gall_2054_2_61.jpg",
      "uploads/items/gall_2054_3_62.jpg",
      "uploads/items/gall_2054_0_63.jpg",
      "uploads/items/gall_2054_1_64.jpg",
      "uploads/items/gall_2054_2_65.jpg",
      "uploads/items/gall_2054_3_66.jpg"
    ],
  ],
  '5' => [
    'title'  => 'DICCAI Gallery 5',
    'images' => [
      "uploads/items/gall_2059_1_68.jpg",
      "uploads/items/gall_2059_2_69.jpg",
      "uploads/items/gall_2059_3_70.jpg",
      "uploads/items/gall_2059_0_71.jpg",
      "uploads/items/gall_2059_1_72.jpg",
      "uploads/items/gall_2059_2_73.jpg",
      "uploads/items/gall_2059_3_74.jpg",
      "uploads/items/gall_2059_0_75.jpg",
      "uploads/items/gall_2059_1_76.jpg",
      "uploads/items/gall_2059_2_77.jpg",
      "uploads/items/gall_2059_3_78.jpeg",
      "uploads/items/gall_2059_0_78.jpg",
      "uploads/items/gall_2059_1_79.jpg",
      "uploads/items/gall_2059_2_80.jpg",
      "uploads/items/gall_2059_3_81.jpg",
      "uploads/items/gall_2059_0_82.jpg",
      "uploads/items/gall_2059_1_83.jpg",
      "uploads/items/gall_2059_2_85.jpg",
      "uploads/items/gall_2059_0_86.jpg",
      "uploads/items/gall_2059_1_87.jpg",
      "uploads/items/gall_2059_2_88.jpg",
      "uploads/items/gall_2059_3_89.jpg",
      "uploads/items/gall_2059_0_90.jpg",
      "uploads/items/gall_2059_1_91.jpg"
    ],
  ],
];

/* ---------------------------------------------------------
   Resolve requested gallery (default = '1')
   Accepts ?gallery=, ?id=, ?cat=
   --------------------------------------------------------- */
$galleryParam = $_GET['gallery'] ?? $_GET['id'] ?? $_GET['cat'] ?? '1';
$galleryId    = array_key_exists($galleryParam, $galleries) ? $galleryParam : '1';
$currentGallery = $galleries[$galleryId];
?>

<style>
  .container { max-width: 1240px; margin: 0 auto; padding: 40px 20px 0; }
  .gallery-header { text-align: center; margin-bottom: 24px; }
  .gallery-header h1 { color: #0f3d68; font-size: 2rem; margin-bottom: 8px; }
  .gallery-header p { color: #64748b; font-size: 15px; }
  .gallery-tabs { display: flex; justify-content: center; flex-wrap: wrap; gap: 12px; margin-bottom: 28px; }
  .gallery-tab { padding: 8px 20px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 14px; border: 1px solid #cbd5e1; color: #1e293b; background-color: #ffffff; transition: all 0.2s ease; }
  .gallery-tab:hover, .gallery-tab.active { background-color: #0f3d68; color: #ffffff; border-color: #0f3d68; }
  .gallery-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 18px; }
  .gallery-card { position: relative; border-radius: 10px; overflow: hidden; background-color: #e2e8f0; aspect-ratio: 4 / 3; cursor: pointer; box-shadow: 0 4px 12px rgba(0,0,0,0.08); transition: transform .25s ease, box-shadow .25s ease; }
  .gallery-card:hover { transform: translateY(-4px); box-shadow: 0 10px 22px rgba(0,0,0,0.14); }
  .gallery-card img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .35s ease; }
  .gallery-card:hover img { transform: scale(1.08); }
  .gallery-overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(15,61,104,.75), transparent 55%); opacity: 0; transition: opacity .25s ease; display: flex; align-items: flex-end; justify-content: space-between; padding: 14px; color: #fff; font-size: 13px; font-weight: 600; }
  .gallery-card:hover .gallery-overlay { opacity: 1; }
  .lightbox { display: none; position: fixed; inset: 0; background-color: rgba(15,23,42,.92); z-index: 9999; align-items: center; justify-content: center; flex-direction: column; padding: 20px; }
  .lightbox.active { display: flex; }
  .lightbox-img-wrapper { max-width: 90vw; max-height: 78vh; overflow: hidden; display: flex; align-items: center; justify-content: center; }
  .lightbox-img { max-width: 90vw; max-height: 78vh; border-radius: 8px; box-shadow: 0 12px 35px rgba(0,0,0,.5); transition: transform .3s ease; cursor: zoom-in; }
  .lightbox-img.zoomed { transform: scale(1.5); cursor: zoom-out; }
  .lightbox-controls { margin-top: 16px; display: flex; align-items: center; gap: 16px; color: #fff; font-size: 14px; }
  .lightbox-btn { background-color: rgba(255,255,255,.15); color: #fff; border: 1px solid rgba(255,255,255,.25); padding: 8px 16px; border-radius: 6px; cursor: pointer; font-size: 14px; font-weight: 600; transition: background .2s ease; }
  .lightbox-btn:hover { background-color: #f59e0b; color: #0f172a; border-color: #f59e0b; }
  .lightbox-close { position: absolute; top: 20px; right: 28px; background: none; border: none; color: #fff; font-size: 36px; cursor: pointer; line-height: 1; }
  .lightbox-nav { position: absolute; top: 50%; transform: translateY(-50%); background-color: rgba(255,255,255,.15); color: #fff; border: none; width: 48px; height: 48px; border-radius: 50%; font-size: 22px; cursor: pointer; transition: background .2s ease; }
  .lightbox-nav:hover { background-color: #f59e0b; color: #0f172a; }
  .lightbox-prev { left: 20px; }
  .lightbox-next { right: 20px; }
</style>

<main class="flex-1">
  <section class="relative bg-navy-9501 overflow-hidden">
    <div class="container">
      <div class="gallery-header">
        <h1><?php echo htmlspecialchars($currentGallery['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
        <p id="imageCount"></p>
      </div>

      <!-- Dynamically generated gallery tabs -->
      <div class="gallery-tabs">
        <?php foreach ($galleries as $id => $g): ?>
          <a href="?gallery=<?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>"
             class="gallery-tab <?php echo ($id === $galleryId) ? 'active' : ''; ?>">
            Gallery <?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>
          </a>
        <?php endforeach; ?>
      </div>

      <div class="gallery-grid" id="galleryGrid"></div>
    </div>

    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox">
      <button class="lightbox-close" id="closeBtn" title="Close">&times;</button>
      <button class="lightbox-nav lightbox-prev" id="prevBtn" title="Previous">&#10094;</button>
      <div class="lightbox-img-wrapper">
        <img src="" alt="DICCAI Gallery Preview" class="lightbox-img" id="lightboxImg" />
      </div>
      <button class="lightbox-nav lightbox-next" id="nextBtn" title="Next">&#10095;</button>
      <div class="lightbox-controls">
        <span id="lightboxCounter">1 / 1</span>
        <button class="lightbox-btn" id="zoomBtn">Toggle Zoom</button>
      </div>
    </div>
  </section>
  <br /><br /><br />
</main>

<script>
  const baseUrl = "<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>";

  // All galleries injected from PHP — single source of truth
  const galleries = <?php echo json_encode(
      array_map(
          function ($g) {
              return [
                  'title'  => $g['title'],
                  'images' => array_map(function ($p) { return $p; }, $g['images']),
              ];
          },
          $galleries
      ),
      JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT
  ); ?>;

  // Resolve requested gallery (mirrors PHP fallback logic)
  const urlParams    = new URLSearchParams(window.location.search);
  const selectedParam = "<?php echo $galleryId; ?>" || urlParams.get("gallery") || urlParams.get("id") || urlParams.get("cat") || "1";
  const currentGallery = galleries[selectedParam] || galleries["1"];
  const activeImages = currentGallery.images.map(path => baseUrl + path);

  // DOM refs
  const galleryTitle   = document.getElementById("galleryTitle");
  const galleryGrid    = document.getElementById("galleryGrid");
  const imageCount     = document.getElementById("imageCount");
  const lightbox       = document.getElementById("lightbox");
  const lightboxImg    = document.getElementById("lightboxImg");
  const lightboxCounter= document.getElementById("lightboxCounter");
  const closeBtn       = document.getElementById("closeBtn");
  const prevBtn        = document.getElementById("prevBtn");
  const nextBtn        = document.getElementById("nextBtn");
  const zoomBtn        = document.getElementById("zoomBtn");

  let currentIndex = 0;

  // Title is already rendered server-side; just set image count
  imageCount.textContent = `Showing ${activeImages.length} images`;

  // Render gallery cards
  const fragment = document.createDocumentFragment();
  activeImages.forEach((url, index) => {
    const card = document.createElement("div");
    card.className = "gallery-card";
    card.innerHTML = `
      <img src="${url}" alt="${currentGallery.title} - Photo ${index + 1}" loading="lazy" />
      <div class="gallery-overlay">
        <span>Photo #${index + 1}</span>
        <span>Click to View</span>
      </div>
    `;
    card.addEventListener("click", () => openLightbox(index));
    fragment.appendChild(card);
  });
  galleryGrid.appendChild(fragment);

  function openLightbox(index) {
    currentIndex = index;
    updateLightbox();
    lightbox.classList.add("active");
  }
  function closeLightbox() {
    lightbox.classList.remove("active");
    lightboxImg.classList.remove("zoomed");
  }
  function updateLightbox() {
    lightboxImg.classList.remove("zoomed");
    lightboxImg.src = activeImages[currentIndex];
    lightboxCounter.textContent = `${currentIndex + 1} / ${activeImages.length}`;
  }
  function showPrev() {
    currentIndex = (currentIndex - 1 + activeImages.length) % activeImages.length;
    updateLightbox();
  }
  function showNext() {
    currentIndex = (currentIndex + 1) % activeImages.length;
    updateLightbox();
  }

  closeBtn.addEventListener("click", closeLightbox);
  prevBtn.addEventListener("click", showPrev);
  nextBtn.addEventListener("click", showNext);
  zoomBtn.addEventListener("click", () => lightboxImg.classList.toggle("zoomed"));
  lightboxImg.addEventListener("click", () => lightboxImg.classList.toggle("zoomed"));
  lightbox.addEventListener("click", (e) => { if (e.target === lightbox) closeLightbox(); });
  document.addEventListener("keydown", (e) => {
    if (!lightbox.classList.contains("active")) return;
    if (e.key === "Escape") closeLightbox();
    if (e.key === "ArrowLeft") showPrev();
    if (e.key === "ArrowRight") showNext();
  });
</script>

<?php include 'footer.php';?>