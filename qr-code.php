<?php include 'header.php';?>

<main class="flex-1">
    <section class="py-1 sm:py-0 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-8">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden p-6 sm:p-10">
                
                <!-- Responsive Flex Container: Stacked on mobile, side-by-side on medium+ screens -->
                <div class="flex flex-col md:flex-row items-center justify-around gap-8">
                    
                    <!-- Left Side: Donate Now Button -->
                    <div class="w-full md:w-5/12 flex flex-col items-center justify-center text-center">
                        <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-navy-900 mb-6">
                            Donate Online
                        </h2>
                        <div class="flex justify-center">
                            <form>
                                <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_QoxbpNp8X9oqIp" async></script>
                            </form>
                        </div>
                    </div>

                    <!-- Center Divider ("OR" with responsive lines) -->
                    <div class="flex md:flex-col items-center justify-center w-full md:w-auto">
                        <div class="h-px w-full md:w-px md:h-24 bg-slate-200"></div>
                        <span class="px-4 py-2 font-display font-extrabold text-lg sm:text-xl text-slate-400">
                            OR
                        </span>
                        <div class="h-px w-full md:w-px md:h-24 bg-slate-200"></div>
                    </div>

                    <!-- Right Side: QR Code Scanner -->
                    <div class="w-full md:w-5/12 flex flex-col items-center justify-center text-center">
                        <h1 class="font-display font-extrabold text-2xl sm:text-3xl text-navy-900 mb-6">
                            Scan QR Code
                        </h1>
                        <div class="flex justify-center">
                            <img src="https://www.diccai.com/theme/default/images/diccai-qr.jpeg" 
                                 alt="DICCAI QR Code"
                                 class="w-48 h-auto rounded-lg shadow-sm border border-slate-100 object-contain" 
                                 loading="lazy">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
</main>
<?php include 'footer.php';?>