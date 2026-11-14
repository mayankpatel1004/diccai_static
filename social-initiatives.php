<?php 
include 'header.php';

/* ---------------------------------------------------------
   Gallery definitions (dynamic)
   Each entry: id => [ 'title' => ..., 'images' => [ ... ] ]
   --------------------------------------------------------- */
$galleries = [
  '1' => [
    'title'  => 'DICCAI Social Inititaives',
    'images' => [
      "images/121126//page_01_img_01.png",
      "images/121126//page_01_img_02.png",
      "images/121126//page_02_img_01.png",
      "images/121126//page_02_img_02.png",
      "images/121126//page_03_img_01.png",
      "images/121126//page_03_img_02.png",
      "images/121126//page_04_img_01.png",
      "images/121126//page_04_img_02.png",
      "images/121126//page_05_img_01.png",
      "images/121126//page_05_img_02.png",
      "images/121126//page_06_img_01.png",
      "images/121126//page_06_img_02.png",
      "images/121126//page_07_img_01.png",
      "images/121126//page_07_img_02.png",
      "images/121126//page_08_img_01.png",
      "images/121126//page_08_img_02.png",
      "images/121126//page_09_img_01.png",
      "images/121126//page_09_img_02.png",
      "images/121126//page_10_img_01.png",
      "images/121126//page_10_img_02.png",
      "images/121126//page_11_img_01.png",
      "images/121126//page_11_img_02.png",
      "images/121126//page_12_img_01.png",
      "images/121126//page_12_img_02.png",
      "images/121126//page_13_img_01.png",
      "images/121126//page_13_img_02.png",
      "images/121126//page_14_img_01.png",
      "images/121126//page_14_img_02.png",
      "images/121126//page_15_img_01.png",
      "images/121126//page_15_img_02.png",
      "images/121126//page_16_img_01.png",
      "images/121126//page_16_img_02.png",
      "images/121126//page_17_img_01.png",
      "images/121126//page_17_img_02.png",
      "images/121126//page_18_img_01.png",
      "images/121126//page_18_img_02.png",
      "images/121126//page_19_img_01.png",
      "images/121126//page_19_img_02.png",
      "images/121126//page_20_img_01.png",
      "images/121126//page_20_img_02.png",
      "images/121126//page_21_img_01.png",
      "images/121126//page_21_img_02.png",
      "images/121126//page_22_img_01.png",
      "images/121126//page_22_img_02.png",
      "images/121126//page_23_img_01.png",
      "images/121126//page_23_img_02.png",
      "images/121126//page_24_img_01.png",
      "images/121126//page_24_img_02.png",
      "images/121126//page_25_img_01.png",
      "images/121126//page_25_img_02.png",
      "images/121126//page_26_img_01.png",
      "images/121126//page_26_img_02.png",
      "images/121126//page_27_img_01.png",
      "images/121126//page_27_img_02.png",
      "images/121126//page_28_img_01.png",
      "images/121126//page_28_img_02.png",
      "images/121126//page_29_img_01.png",
      "images/121126//page_29_img_02.png",
      "images/121126//page_30_img_01.png",
      "images/121126//page_30_img_02.png",
      "images/121126//page_31_img_01.png",
      "images/121126//page_31_img_02.png",
      "images/121126//page_32_img_01.png",
      "images/121126//page_32_img_02.png",
      "images/121126//page_33_img_01.png",
      "images/121126//page_33_img_02.png",
      "images/121126//page_34_img_01.png",
      "images/121126//page_34_img_02.png",
      "images/121126//page_35_img_01.png",
      "images/121126//page_35_img_02.png",
      "images/121126//page_36_img_01.png",
      "images/121126//page_36_img_02.png",
      "images/121126//page_37_img_01.png",
      "images/121126//page_37_img_02.png",
      "images/121126//page_38_img_01.png",
      "images/121126//page_38_img_02.png",
      "images/121126//page_39_img_01.png",
      "images/121126//page_39_img_02.png",
      "images/121126//page_40_img_01.png",
      "images/121126//page_40_img_02.png",
      "images/121126//page_41_img_01.png",
      "images/121126//page_41_img_02.png",
      "images/121126//page_42_img_01.png",
      "images/121126//page_42_img_02.png",
      "images/121126//page_43_img_01.png",
      "images/121126//page_43_img_02.png",
      "images/121126//page_44_img_01.png",
      "images/121126//page_44_img_02.png",
      "images/121126//page_45_img_01.png",
      "images/121126//page_45_img_02.png",
      "images/121126//page_46_img_01.png",
      "images/121126//page_46_img_02.png",
      "images/121126//page_47_img_01.png",
      "images/121126//page_47_img_02.png",
      "images/121126//page_48_img_01.png",
      "images/121126//page_48_img_02.png",
      "images/121126//page_49_img_01.png",
      "images/121126//page_49_img_02.png",
      "images/121126//page_50_img_01.png",
      "images/121126//page_50_img_02.png",
      "images/121126//page_51_img_01.png",
      "images/121126//page_51_img_02.png",
      "images/121126//page_52_img_01.png",
      "images/121126//page_52_img_02.png",
      "images/121126//page_53_img_01.png",
      "images/121126//page_53_img_02.png",
      "images/121126//page_54_img_01.png",
      "images/121126//page_54_img_02.png",
      "images/121126//page_55_img_01.png",
      "images/121126//page_55_img_02.png",
      "images/121126//page_56_img_01.png",
      "images/121126//page_56_img_02.png",
      "images/121126//page_57_img_01.png",
      "images/121126//page_57_img_02.png"
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
      <!-- <div class="gallery-tabs">
        <?php foreach ($galleries as $id => $g): ?>
          <a href="?gallery=<?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>"
             class="gallery-tab <?php echo ($id === $galleryId) ? 'active' : ''; ?>">
            Gallery <?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>
          </a>
        <?php endforeach; ?>
      </div> -->

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