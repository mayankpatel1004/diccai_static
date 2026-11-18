<?php
$page_title = 'CSR Funds';
include 'header.php';
?>
<main class="flex-1">
  <section class="bg-navy-900 text-white py-14 border-b border-navy-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-xs font-semibold text-amber-400 uppercase tracking-wider mb-2"><a href="<?php echo $url;?>" class="hover:underline">Home</a> / CSR Funds</div>
      <h1 class="font-display font-extrabold text-3xl sm:text-5xl">Utilization of CSR Funds</h1>
    </div>
  </section>
  <section class="py-16 bg-slate-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-white rounded-2xl p-6 sm:p-10 shadow-sm border border-slate-200">
        <p class="text-slate-700 text-base leading-relaxed mb-8">
          We partner with multiple stakeholders, judiciously utilizing their investment for development. Our work in several areas is impacting people including differently abled, elderly, dependent women, and orphaned children.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
          <?php
          $areas = [
            ['IMPACTFUL EDUCATION DELIVERY', 'Our impactful education interventions such as IT Labs, Smart Class, STEM Labs & Teacher Training programs are helping enhance education delivery for differently abled children.'],
            ['SUSTAINABLE SKILL DEVELOPMENT', 'Our diverse skill-based programs for the youth are enabling them to become self-dependent and support their family.'],
            ['PROMOTING TALENT IN ARTS & SPORTS', 'Focused interventions from DICCAI are helping identify and support potential talent in sports & arts amongst differently-abled children and youth.'],
            ['SUPPORTING EMPLOYABILITY AND LIVELIHOOD', 'Initiatives from DICCAI are helping several beneficiaries from the under-served sections of society become micro-entrepreneurs.'],
            ['HEALTH MANAGEMENT', 'Leveraging technology, DICCAI aims to provide primary healthcare access to the differently abled, elderly, and orphaned children.'],
            ['COMMERCIAL INFRASTRUCTURE FOR DIFFERENTLY ABLED', 'DICCAI aims to create a connected ecosystem of differently abled friendly infrastructure across public spaces to make the world a more inclusive place for all members of society.']
          ];
          foreach ($areas as $a): ?>
            <div class="p-5 rounded-xl bg-slate-50 border border-slate-200 border-l-4 border-l-amber-500">
              <h3 class="font-display font-bold text-navy-900 text-sm mb-2"><?php echo htmlspecialchars($a[0]); ?></h3>
              <p class="text-sm text-slate-600 leading-relaxed"><?php echo htmlspecialchars($a[1]); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="bg-navy-950 text-slate-200 rounded-2xl p-6 text-sm space-y-1.5">
          <div><strong class="text-amber-400">Regd. No.:</strong> 187079</div>
          <div><strong class="text-amber-400">PAN No.:</strong> AAHCD4570E</div>
          <div><strong class="text-amber-400">I.T. Exemption Cert. No. (80G No.):</strong> AAHCD4570EF20221</div>
          <div><strong class="text-amber-400">CIN No:</strong> U85320PN2019NPL187079</div>
          <div><strong class="text-amber-400">TAN No:</strong> PPNED15137D, 12A No AAHCD4570EE20206</div>
          <div><strong class="text-amber-400">CSR1 ID:</strong> CSR00078734, Darpan Registration ID: MH/2025/0508435</div>
          <div><strong class="text-amber-400">Bank Name:</strong> Kotak Mahindra Bank 8413238287</div>
          <div><strong class="text-amber-400">Account No.:</strong> 8413238287</div>
          <div><strong class="text-amber-400">IFSC:</strong> KKBK0001769</div>
          <div><strong class="text-amber-400">Branch:</strong> F.C. Road Branch Pune</div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>
