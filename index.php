<?php include 'header.php';?>


<main class="flex-1">

    <!-- HERO BANNER SLIDER (Auto Slides) -->
    <section class="relative bg-navy-9501 text-white overflow-hidden">
        <div id="hero-slider-container" class="relative min-h-[220px] sm:min-h-[620px] flex items-center">

            <div class="hero-slide absolute inset-0 flex items-center opacity-100 z-10" data-slide="0">
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 w-full">
                    <img src="<?php echo $url;?>banners/item_2033_1_oad.webp" />
                </div>
            </div>

            <div class="hero-slide absolute inset-0 flex items-center opacity-0 z-0 pointer-events-none" data-slide="1">
                <!-- Background Image with Overlay -->
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 w-full">
                    <img src="<?php echo $url;?>banners/item_2035_1_ad1.webp" />
                </div>
            </div>

            <div class="hero-slide absolute inset-0 flex items-center opacity-0 z-0 pointer-events-none" data-slide="2">
                <!-- Background Image with Overlay -->
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 w-full">
                    <img src="<?php echo $url;?>banners/item_2048_1_-3.webp" />
                </div>
            </div>


            <!-- Slider Prev/Next Controls -->
            <button onclick="moveHeroSlide(-1)" aria-label="Previous Slide"
                class="hidden sm:flex absolute left-4 lg:left-8 z-20 w-11 h-11 rounded-full bg-white/15 hover:bg-amber-500 text-white hover:text-navy-950 items-center justify-center transition backdrop-blur-sm">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button onclick="moveHeroSlide(1)" aria-label="Next Slide"
                class="hidden sm:flex absolute right-4 lg:right-8 z-20 w-11 h-11 rounded-full bg-white/15 hover:bg-amber-500 text-white hover:text-navy-950 items-center justify-center transition backdrop-blur-sm">
                <i class="fa-solid fa-chevron-right"></i>
            </button>

            <!-- Slider Dots -->
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 flex items-center gap-2.5">

                <button onclick="goToHeroSlide(0)" aria-label="Slide 1"
                    class="hero-dot h-2.5 rounded-full transition-all w-8 bg-amber-400"></button>

                <button onclick="goToHeroSlide(1)" aria-label="Slide 2"
                    class="hero-dot h-2.5 rounded-full transition-all w-2.5 bg-white/40 hover:bg-white/70"></button>

                <button onclick="goToHeroSlide(2)" aria-label="Slide 3"
                    class="hero-dot h-2.5 rounded-full transition-all w-2.5 bg-white/40 hover:bg-white/70"></button>

            </div>
        </div>
    </section>
    <!-- ========== WELCOME INTRODUCTION ========== -->
    <section class="py-16 sm:py-20 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-12">
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-navy-900 mt-2 mb-5 leading-tight">
                        Welcome To Divyang Indian Chamber of Commerce &amp; Industry
                    </h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        The Divyang Indian Chamber of Commerce and Industry (DICCAI)'s objective is to make Divyang
                        people self-reliant by providing employment and various skill-learning opportunities to
                        Divyang
                        people who are also unable to work independently. For this, with the help of orphans,
                        Aboriginal
                        People, women's Self-Help groups, farmers, and people with some health issues like cancer,
                        thyroid disease, etc., DICCAI uses its talent, entrepreneurs, and product development and
                        manufacturing packages from all of them. DICCAI provides guidance, a marketplace,
                        advertisement,
                        and promotion exhibitions of Divyang products in and out of India. Divyang people run
                        Divyang
                        Executive Lounge along with some social NGOs and a few private companies.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        From the establishment of a well-equipped skill development center and starting a business
                        to
                        provide all types of Educational Aid for various schemes for self-employment and other
                        welfare
                        opportunities all over India, DICCAI is focused on several initiatives across the country
                        for
                        the differently-abled. DICCAI is also looking to create a market hub for selling goods made
                        for
                        the self-Help group of Divyang &amp; Anath people. Further support by way of starting a
                        Health Care
                        Centre, Rehabilitation &amp; Meditation Centre for Divyang, Vrudhang, and Anath people and
                        lastly to
                        create infrastructure for the development of Entertainment &amp; sports activities within
                        the
                        Divyang &amp; Anath people.
                    </p>
                    <!-- image -->
                </div>
            </div>
        </div>
    </section>

    <!-- ========== STATS / EMPLOYMENT SECTION (first row) ========== -->
    <section class="py-16 sm:py-20 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="flex justify-center md:justify-start">
                    <img src="https://www.diccai.com/uploads/media/media_1762432143_1.webp" alt="Cloudswift Solutions"
                        class="w-4/5 md:w-3/4 lg:w-2/3 rounded-xl shadow-sm object-cover" loading="lazy">
                </div>
                <div class="flex justify-center md:justify-end">
                    <p class="text-slate-600 leading-relaxed text-justify">
                        The latest Census data of India shows that out of the total
                        population, roughly 2.2 percent of the population i.e. 2.68 crore persons are “disabled”. Of
                        this only 36% of the disabled population (which is approximately 98lakh) are employed,
                        including
                        71 lakh men and 27lakh women. The brunt of disability seems to have heavily fallen on women
                        as
                        amongst disabled women; the literacy rate is only 45% whereas the overall women literacy
                        rate in
                        India is 65%. Amongst disabled men, the literacy rate is 62%. Less than 10 percent disabled
                        people have a graduate degree, making meaningful employment even more difficult for them,
                        rendering them suitable only for menial or low paying jobs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== TEXT LEFT / IMAGE RIGHT SECTION ========== -->
    <section class="py-16 sm:py-20 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <!-- text column first (left) -->
                <div>
                    <p class="text-slate-600 leading-relaxed text-justify mb-3">
                        Compared to the national average of 26%, 45% of Indians with
                        disabilities are illiterate.
                    </p>
                    <p class="text-slate-600 leading-relaxed text-justify mb-3">
                        Despite the promise of the universal access to education for all (Sarva Shiksha Abhiyaan),
                        children with special needs form the largest chunk of out-of-school children. A study of
                        government data reveals that even all disabilities are not equal as children with locomotor
                        or
                        visual disability are more likely to go to school with only about 20-30% out of school as
                        compared to over 64% children with mental disabilities out of school.
                    </p>
                    <p class="text-slate-600 leading-relaxed text-justify mb-3">
                        What keeps children out of school then? One of the major reasons is accessibility - both in
                        terms of physical access as well as attitudinal change of educators. While there are several
                        special needs school already operational, many lack the necessary equipment or software to
                        cater
                        to the needs of special needs children. Also many special need children can be integrated
                        into
                        regular schools provided with the willingness and acceptance from school managements. We
                        propose
                        to start workshops to sensitise schools to needs of special children, training for teachers,
                        providing teaching aids wherever necessary, getting industry to sponsor physical changes
                        like
                        building ramps, accessible toilets in schools and more.
                    </p>
                    <p class="text-slate-600 leading-relaxed text-justify">
                        Besides school education, adult and continuing education is an equally important area of
                        work
                        for disabled persons. It is important to note that while the number of special needs
                        students
                        enrolled in primary education is significant, the numbers see a sharp drop when it comes to
                        secondary and higher education, indicating a high drop-out rate. To enable such persons
                        later in
                        life, providing them adult and continuing education opportunities become important.
                    </p>
                </div>
                <!-- image column (right) -->
                <div class="flex justify-center md:justify-end">
                    <img src="https://www.diccai.com/uploads/media/media_1762432154_2.webp" alt="Cloudswift Solutions"
                        class="w-4/5 md:w-3/4 lg:w-2/3 rounded-xl shadow-sm object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- ========== IMAGE LEFT / TEXT RIGHT (with bullet list) ========== -->
    <section class="py-16 sm:py-20 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
                <!-- image column left -->
                <div class="flex justify-center md:justify-start">
                    <img src="https://www.diccai.com/uploads/media/media_1762432165_3.webp" alt="Cloudswift Solutions"
                        class="w-4/5 md:w-3/4 lg:w-2/3 rounded-xl shadow-sm object-cover" loading="lazy">
                </div>
                <!-- text column right -->
                <div>
                    <p class="text-slate-600 leading-relaxed text-justify mb-4">
                        To provide access to quality education to make them a better
                        citizen and bring them in the mainstream of the society.
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-slate-600 mb-4">
                        <li>To provide skill enhancement and entrepreneurship development programmes to make them
                            more
                            employable and self-dependent.</li>
                        <li>To support their ongoing income generation activities.</li>
                        <li>To boost their morale and help them to live a normal life being financially independent.
                        </li>
                        <li>To take the benefits of Government schemes to the beneficiaries.</li>
                        <li>To build sustainable infrastructure for differently abled, elderly, dependent women and
                            orphaned children.</li>
                        <li>To extend financial support by way of sponsored programs.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== DIVYANG EXECUTIVE LOUNGE + DICCAI CONCEPTS + SPECIAL INITIATIVES + CORE VALUES ========== -->
    <section class="py-16 sm:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Divyang Executive Lounge -->
            <div class="mb-14">
                <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-navy-900 mb-4">
                    Divyang Executive Lounge
                </h2>
                <p class="text-slate-600 leading-relaxed mb-3">
                    Divyang Service Lounge is run by Divyang people and is located over a Bus stand, railway
                    station, marketplace, highway, and many rush areas.
                </p>
                <p class="text-slate-600 leading-relaxed mb-3">
                    We will also be providing them with professional guidance about financial aid.
                </p>
                <p class="text-slate-600 leading-relaxed mb-4">
                    Professional trainers will give them Skill Development training.
                </p>
                <p class="text-slate-800 font-semibold mb-3">Divyang Executive Lounge as below :</p>
                <ul
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 text-slate-600 list-disc list-inside mb-6">
                    <li>E-Library</li>
                    <li>E-Toilet</li>
                    <li>Food Court</li>
                    <li>WiFi</li>
                    <li>Waiting Room</li>
                    <li>Hirkani Kaksha</li>
                </ul>
            </div>

            <!-- DICCAI Concepts / Plans -->
            <div class="mb-14">
                <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-navy-900 mb-4">
                    DICCAI Concepts / Plans
                </h2>
                <p class="text-slate-600 leading-relaxed mb-4">
                    For the overall development &amp; empowerment of differently-abled person through the joint
                    initiative &amp;
                    special concept of Hon'ble founder president of Divyang Indian Chamber of Commerce &amp;
                    Industry we have
                    brought 10 special concept &amp; schemes and this schemes will soon be implemented by the
                    support of
                    government, the philanthropist &amp; social Organization.
                </p>
                <ul class="list-disc list-inside space-y-1.5 text-slate-600 mb-6">
                    <li>Skill Development Program</li>
                    <li>Divyam's Service Lounge.</li>
                    <li>Food Insurance Scheme.</li>
                    <li>Caretaker for People with disability.</li>
                    <li>Request to waive GST for Divyangjan.</li>
                    <li>Demand for some percentage reservation in government tender for goods made by Divyang,</li>
                    <li>Demand to provide free or low cost medical services to the differently-abled.</li>
                    <li>Divyang Health Insurance for Persons with Disabilities for diseases like Cancer, etc.</li>
                    <li>Divyang Research Centre</li>
                    <li>To start a help center for the differently-abled.</li>
                </ul>
            </div>

            <!-- Special Initiatives -->
            <div class="mb-14">
                <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-navy-900 mb-4">
                    Special Initiatives of DICCAI
                </h2>
                <p class="text-slate-600 leading-relaxed mb-0">
                    While merely forming a <strong>Bachat Gat (SHG)</strong> is not a big achievement, sustaining it
                    and using it as a tool
                    for self and group development is essential. Most of the <strong>Self Help Group</strong> have
                    failed because they
                    lacked proper guidance and proper vision and a sense of direction. As a special initiative,
                    DICCAI would
                    provide guidance and support in setting up, registration as well as product development and sale
                    through
                    finding relevant markets.
                </p>
            </div>

            <!-- Core Values -->
            <div class="mb-12">
                <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-navy-900 mb-4">
                    Our Core Values
                </h2>
                <p class="text-slate-600 leading-relaxed mb-4">
                    We believe that every individual, irrespective of ability or disability, deserves a right to
                    work and the
                    dignity of financial independence.
                </p>
                <ol class="list-decimal list-inside space-y-2 text-slate-600 mb-6">
                    <li>We believe that every individual has skills and competence suitable for some type of gainful
                        employment
                        and aim to establish a system that enables to provide employment suitable for them</li>
                    <li>We believe that PWDs have skills and abilities that can contribute meaningfully and
                        economically to
                        society</li>
                    <li>We believe that PWDs deserve employment that is on par with their fully-abled counterparts
                        and to ensure
                        that they are not cheated of their rightful wages</li>
                    <li>We believe in educating and training PWDs to empower them</li>
                    <li>We believe that increasing diversity at workplaces can provide beneficial to employers and
                        companies who
                        can gain from the experience of PWD’s</li>
                </ol>
            </div>

            <!-- Registration & Bank details (small text) -->
            <div class="text-sm text-slate-500 border-t border-slate-200 pt-8 space-y-1">
                <div>Regd. No.:187079</div>
                <div>PAN No.: AAHCD4570E,</div>
                <div>I.T. Exemption Cert. No. (80G No.): AAHCD4570EF20221</div>
                <div>CIN No: U85320PN2019NPL187079,</div>
                <div>TAN No: PPNED15137D, 12A No AAHCD4570EE20206</div>
                <div>CSR1 ID: CSR00078734, Darpan Registration ID: MH/2025/0508435</div>
                <div>Bank Name : Kotak Mahindra Bank 8413238287</div>
                <div>Account No. : 8413238287,</div>
                <div>IFSC : KKBK0001769,</div>
                <div>Branch : F.C. Road Branch Pune</div>
            </div>
        </div>
    </section>

</main>
<?php include 'footer.php';?>