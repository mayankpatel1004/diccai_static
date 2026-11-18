<?php
$page_title = 'Our Objectives';
include 'header.php';
?>
<main class="flex-1">
  <section class="bg-navy-900 text-white py-14 border-b border-navy-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-xs font-semibold text-amber-400 uppercase tracking-wider mb-2"><a href="<?php echo $url;?>" class="hover:underline">Home</a> / Our Objectives</div>
      <h1 class="font-display font-extrabold text-3xl sm:text-5xl">Our Objectives</h1>
    </div>
  </section>
  <section class="py-16 bg-slate-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-white rounded-2xl p-6 sm:p-10 shadow-sm border border-slate-200">
        <p class="font-display font-bold text-lg text-navy-900 mb-6">
          Divyang Indian Chamber of Commerce and Industry was set-up to enable the following benefits to differently able people, disadvantaged and poor people living in urban and rural areas in the country.
        </p>
        <div class="space-y-4">
          <?php
          $objs = [
            'To provide access to quality education to make them a better citizen and bring them in the mainstream of the society.',
            'To provide skill enhancement and entrepreneurship development programmes to make them more employable and self-dependent.',
            'To support their ongoing income generation activities.',
            'To boost their morale and help them to live a normal life being financially independent.',
            'To take the benefits of Government schemes to the beneficiaries.',
            'To build sustainable infrastructure for differently abled, elderly, dependent women and orphaned children.',
            'To extend financial support by way of sponsored programs.'
          ];
          foreach ($objs as $i => $o): ?>
            <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-50 border border-slate-200">
              <span class="w-8 h-8 rounded-lg bg-navy-900 text-amber-400 font-display font-bold text-sm flex items-center justify-center shrink-0"><?php echo $i + 1; ?></span>
              <p class="text-slate-700 leading-relaxed pt-1"><?php echo htmlspecialchars($o); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>
