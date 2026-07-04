<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
   
   
   
    <title>EZA SECURITY | Jasa Pemasangan CCTV</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <meta name="description" content="Jasa pemasangan CCTV profesional, maintenance, remote monitoring dan system repair.">

    <style>
        html{
            scroll-behavior:smooth;
        }

        .hero-bg{
            background: linear-gradient(135deg,#0f172a 0%,#1d4ed8 55%,#2563eb 100%);
        }

        body{
    font-family:'Inter',sans-serif;
}

.hero-title{
    font-family:'Oswald',sans-serif;
    letter-spacing:1px;
    line-height:1.05;
    text-transform:uppercase;
}

    </style>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- ================= NAVBAR ================= -->
<nav class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
    <div class="max-w-7xl mx-auto">

        <div class="flex justify-between items-center px-6 py-4">

            <!-- Logo -->
            <a href="#" class="flex items-center space-x-3">
               <img
                src="{{ asset('images/logo.svg') }}"
                alt="EZA SECURITY"
                class="h-12 w-auto">

                <div>
                    <h1 class="font-bold text-lg text-blue-900">
                        EZA SECURITY
                    </h1>
                    <p class="text-xs text-gray-500">
                        CCTV Professional
                    </p>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">

                <a href="#layanan" class="hover:text-blue-600 transition">
                    Layanan
                </a>

                <a href="#tentang" class="hover:text-blue-600 transition">
                    Tentang Kami
                </a>

                <a href="#kontak" class="hover:text-blue-600 transition">
                    Kontak
                </a>

            </div>

            <!-- CTA -->
            <div class="hidden md:block">
                <a href="https://wa.me/6285219855424"
                   class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold shadow-lg transition">
                    📞 Ayo Pasang Sekarang
                </a>
            </div>

            <!-- Mobile Button -->
            <button id="menuBtn" class="md:hidden">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-8 h-8"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>

                </svg>

            </button>

        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden border-t">

            <div class="flex flex-col p-5 gap-4">

                <a href="#layanan">Layanan</a>

                <a href="#tentang">Tentang Kami</a>

                <a href="#kontak">Kontak</a>

                <a href="https://wa.me/6285219855424"
                   class="bg-orange-500 text-center text-white py-3 rounded-lg font-semibold">
                    Ayo Pasang Sekarang
                </a>

            </div>

        </div>

    </div>
</nav>


<!-- ================= HERO ================= -->
<section class="relative overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img
            src="https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=1600&q=80"
            alt="Security Background"
            class="w-full h-full object-cover">

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-slate-950/75"></div>

        <!-- Blue Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-950/80 via-blue-900/60 to-blue-600/40"></div>

        <!-- Pattern Overlay -->
        <div class="absolute inset-0 opacity-15"
             style="
             background-image:
             radial-gradient(circle at 1px 1px, rgba(255,255,255,.35) 1px, transparent 0);
             background-size:32px 32px;">
        </div>
    </div>

    <!-- Decorative Blur -->
    <div class="absolute -top-24 -left-20 w-96 h-96 bg-blue-500/20 blur-[120px] rounded-full"></div>

    <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-400/20 blur-[120px] rounded-full"></div>

    <!-- Content -->
    <div class="relative max-w-7xl mx-auto px-6 py-32">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- Left -->
            <div>

                <span class="inline-flex items-center gap-2 bg-orange-500 text-white px-5 py-2 rounded-full text-sm font-semibold shadow-lg">

                    🛡 CCTV Berkualitas & Teknisi Profesional

                </span>

               <h1 class="hero-title mt-8 text-5xl md:text-7xl xl:text-8xl font-bold text-white">

    Lindungi Rumah
    <br>

    <span class="text-orange-400">
        dan Tempat Anda
    </span>

    <br>

    <span class="text-white">
        dari Maraknya
    </span>

    <br>

    <span class="text-red-500">
        Aksi Kejahatan
    </span>

</h1>

                <p class="mt-8 text-lg text-slate-200 leading-8 max-w-xl">

                    EZA SECURITY menyediakan berbagai paket CCTV
                    berkualitas dengan pemasangan profesional,
                    maintenance berkala, perbaikan sistem,
                    hingga monitoring melalui smartphone.

                </p>

                <div class="mt-10 flex flex-col sm:flex-row gap-5">

                    <a href="https://wa.me/6285219855424"
                       class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-xl font-bold shadow-2xl transition duration-300 hover:scale-105">

                        🚀 Ayo Pasang Sekarang

                    </a>

                    <a href="#layanan"
                       class="border border-white/40 text-white px-8 py-4 rounded-xl backdrop-blur hover:bg-white hover:text-blue-900 transition">

                        Lihat Layanan

                    </a>

                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 mt-14">

                    <div>

                        <h3 class="text-3xl font-bold text-white">
                            100%
                        </h3>

                        <p class="text-slate-300 text-sm mt-1">
                            Instalasi Rapi
                        </p>

                    </div>

                    <div>

                        <h3 class="text-3xl font-bold text-white">
                            24/7
                        </h3>

                        <p class="text-slate-300 text-sm mt-1">
                            Monitoring
                        </p>

                    </div>

                    <div>

                        <h3 class="text-3xl font-bold text-white">
                            Fast
                        </h3>

                        <p class="text-slate-300 text-sm mt-1">
                            Response
                        </p>

                    </div>

                </div>

            </div>

            <!-- Right -->
            <div class="relative">

                <!-- Glow -->
                <div class="absolute inset-0 bg-blue-500 blur-3xl opacity-20 rounded-full"></div>

                <img
                    src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=900&q=80"
                    alt="CCTV Camera"
                    class="relative rounded-3xl shadow-[0_20px_80px_rgba(0,0,0,.5)] border border-white/10">

                <!-- Floating Card -->
                <div class="absolute -bottom-8 left-8 bg-white rounded-2xl shadow-2xl p-5">

                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white text-xl">

                            ✓

                        </div>

                        <div>

                            <h4 class="font-bold text-slate-800">

                                Gratis Konsultasi

                            </h4>

                            <p class="text-sm text-gray-500">

                                Hubungi kami sekarang juga

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Bottom Wave -->
    <svg class="absolute bottom-0 left-0 w-full text-gray-50"
         xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 1440 120"
         fill="currentColor">

        <path d="M0,64L80,58.7C160,53,320,43,480,53.3C640,64,800,96,960,101.3C1120,107,1280,85,1360,74.7L1440,64V120H0Z"/>

    </svg>

</section>




<!-- ================= ABOUT ================= -->

<section id="tentang" class="py-20 bg-white">

    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-bold text-blue-900">

            Kenapa Memilih EZA SECURITY?

        </h2>

        <p class="mt-6 text-gray-600 max-w-3xl mx-auto leading-8">

            Kami menyediakan layanan pemasangan CCTV profesional,
            maintenance berkala, perbaikan sistem keamanan,
            hingga konfigurasi monitoring dari smartphone
            agar Anda dapat memantau rumah maupun tempat usaha kapan saja.

        </p>

    </div>

</section>

<!-- ================= SERVICES ================= -->

<section id="layanan" class="py-20 bg-gray-100">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center">

            <h2 class="text-4xl font-bold text-blue-900">

                Layanan Kami

            </h2>


    <!-- ================= PAKET CCTV ================= -->
<section id="paket" class="py-24 bg-gradient-to-b from-gray-50 to-white">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto">

            <span class="inline-flex items-center rounded-full bg-blue-100 px-5 py-2 text-sm font-semibold text-blue-700">
                📹 Paket CCTV Profesional
            </span>

            <h2 class="mt-6 text-4xl md:text-5xl font-bold text-slate-900">
                Pilih Paket CCTV Sesuai Kebutuhan Anda
            </h2>

            <p class="mt-5 text-lg text-gray-600">
                Kami menyediakan berbagai pilihan paket CCTV dengan perangkat berkualitas,
                instalasi profesional, serta layanan purna jual terbaik.
            </p>

        </div>

        <!-- CARD -->
        <div class="grid gap-8 mt-16 md:grid-cols-2 xl:grid-cols-4">

            <!-- Paket 1 -->
            <div class="bg-white rounded-3xl shadow-xl border border-gray-200 overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition">

                <div class="bg-blue-700 py-8 text-center text-white">

                    <h3 class="text-3xl font-bold">
                        Paket 1
                    </h3>

                    <p class="text-blue-100 mt-2">
                        2 Channel
                    </p>

                </div>

                <div class="p-7">

                    <ul class="space-y-4">

                        <li>📹 2 Kamera (Indoor / Outdoor)</li>
                        <li>📺 1 DVR</li>
                        <li>💾 Hardisk 500 GB</li>
                        <li>🔌 Free Kabel Kamera</li>
                        <li>🔧 BNC Kamera</li>

                    </ul>

                    <div class="border-t mt-8 pt-5 space-y-3">

                        <div class="flex justify-between">

                            <span class="text-gray-500">
                                Status
                            </span>

                            <span class="font-semibold text-green-600">
                                ✓ Ready
                            </span>

                        </div>

                        <div class="flex justify-between">

                            <span class="text-gray-500">
                                Instalasi
                            </span>

                            <span class="font-semibold text-blue-700">
                                Gratis
                            </span>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Paket 2 -->
            <div class="bg-white rounded-3xl shadow-xl border border-gray-200 overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition">

                <div class="bg-blue-700 py-8 text-center text-white">

                    <h3 class="text-3xl font-bold">
                        Paket 2
                    </h3>

                    <p class="text-blue-100 mt-2">
                        4 Channel
                    </p>

                </div>

                <div class="p-7">

                    <ul class="space-y-4">

                        <li>📹 4 Kamera (Indoor / Outdoor)</li>
                        <li>📺 1 DVR</li>
                        <li>💾 Hardisk 500 GB</li>
                        <li>🔌 Free Kabel Kamera</li>
                        <li>🔧 BNC Kamera</li>

                    </ul>

                    <div class="border-t mt-8 pt-5 space-y-3">

                        <div class="flex justify-between">

                            <span class="text-gray-500">
                                Status
                            </span>

                            <span class="font-semibold text-green-600">
                                ✓ Ready
                            </span>

                        </div>

                        <div class="flex justify-between">

                            <span class="text-gray-500">
                                Instalasi
                            </span>

                            <span class="font-semibold text-blue-700">
                                Gratis
                            </span>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Paket 3 -->
            <div class="relative bg-white rounded-3xl border-4 border-orange-500 shadow-2xl overflow-hidden scale-105">

                <div class="absolute top-4 right-4 bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-bold">
                    ⭐ TERLARIS
                </div>

                <div class="bg-gradient-to-r from-blue-700 to-blue-900 py-8 text-center text-white">

                    <h3 class="text-3xl font-bold">
                        Paket 3
                    </h3>

                    <p class="text-blue-100 mt-2">
                        6 Channel
                    </p>

                </div>

                <div class="p-7">

                    <ul class="space-y-4">

                        <li>📹 6 Kamera (Indoor / Outdoor)</li>
                        <li>📺 1 DVR</li>
                        <li>💾 Hardisk 500 GB</li>
                        <li>🔌 Free Kabel Kamera</li>
                        <li>🔧 BNC Kamera</li>

                    </ul>

                    <div class="border-t mt-8 pt-5 space-y-3">

                        <div class="flex justify-between">

                            <span class="text-gray-500">
                                Status
                            </span>

                            <span class="font-semibold text-green-600">
                                ✓ Ready
                            </span>

                        </div>

                        <div class="flex justify-between">

                            <span class="text-gray-500">
                                Instalasi
                            </span>

                            <span class="font-semibold text-blue-700">
                                Gratis
                            </span>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Paket 4 -->
            <div class="bg-white rounded-3xl shadow-xl border border-gray-200 overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition">

                <div class="bg-blue-700 py-8 text-center text-white">

                    <h3 class="text-3xl font-bold">
                        Paket 4
                    </h3>

                    <p class="text-blue-100 mt-2">
                        8 Channel
                    </p>

                </div>

                <div class="p-7">

                    <ul class="space-y-4">

                        <li>📹 8 Kamera (Indoor /Outdoor)</li>
                        <li>📺 1 DVR</li>
                        <li>💾 Hardisk 1 TB</li>
                        <li>🔌 Free Kabel Kamera</li>
                        <li>🔧 BNC Kamera</li>

                    </ul>

                    <div class="border-t mt-8 pt-5 space-y-3">

                        <div class="flex justify-between">

                            <span class="text-gray-500">
                                Status
                            </span>

                            <span class="font-semibold text-green-600">
                                ✓ Ready
                            </span>

                        </div>

                        <div class="flex justify-between">

                            <span class="text-gray-500">
                                Instalasi
                            </span>

                            <span class="font-semibold text-blue-700">
                                Gratis
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- BENEFIT -->
        <div class="mt-20 bg-gradient-to-r from-slate-900 via-blue-900 to-slate-900 rounded-3xl p-10">

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 text-white">

                <div class="text-center">

                    <div class="text-5xl mb-4">🛠</div>

                    <h3 class="font-bold text-xl">
                        Gratis Pasang
                    </h3>

                    <p class="text-blue-100 mt-2">
                        Instalasi dilakukan oleh teknisi profesional.
                    </p>

                </div>

                <div class="text-center">

                    <div class="text-5xl mb-4">🚚</div>

                    <h3 class="font-bold text-xl">
                        Gratis Ongkir
                    </h3>

                    <p class="text-blue-100 mt-2">
                        Tanpa biaya pengiriman sesuai area layanan.
                    </p>

                </div>

                <div class="text-center">

                    <div class="text-5xl mb-4">⭐</div>

                    <h3 class="font-bold text-xl">
                        Request Merk DVR
                    </h3>

                    <p class="text-blue-100 mt-2">
                        Merk DVR dapat disesuaikan dengan kebutuhan pelanggan.
                    </p>

                </div>

                <div class="text-center">

                    <div class="text-5xl mb-4">💰</div>

                    <h3 class="font-bold text-xl">
                        Harga Fleksibel
                    </h3>

                    <p class="text-blue-100 mt-2">
                        Harga menyesuaikan merk DVR yang dipilih.
                    </p>

                </div>

            </div>

        </div>

        <!-- CTA -->
        <div class="text-center mt-20">

            <h2 class="text-4xl font-bold text-slate-900">
                Siap Meningkatkan Keamanan Rumah atau Usaha Anda?
            </h2>

            <p class="mt-5 text-lg text-gray-600 max-w-2xl mx-auto">
                Konsultasikan kebutuhan CCTV Anda sekarang juga. Tim EZA SECURITY siap membantu memilih paket terbaik sesuai kebutuhan dan anggaran Anda.
            </p>

            <a href="https://wa.me/6285219855424"
               class="inline-flex items-center gap-3 mt-10 bg-orange-500 hover:bg-orange-600 px-10 py-5 rounded-2xl text-white text-lg font-bold shadow-2xl transition hover:scale-105">

                📞 Konsultasi Gratis via WhatsApp

            </a>

        </div>

    </div>

</section>


            <p class="text-gray-600 mt-4">

                Solusi keamanan lengkap untuk rumah maupun bisnis.

            </p>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-14">

            <!-- Card -->

            <div class="bg-white rounded-2xl shadow-lg p-8 hover:-translate-y-2 transition">

                <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-8 h-8 text-blue-700"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8v4l3 3"/>

                    </svg>

                </div>

                <h3 class="font-bold text-xl mt-6">
                    Maintenance
                </h3>

                <p class="mt-4 text-gray-600">
                    Perawatan berkala agar CCTV selalu bekerja maksimal.
                </p>

            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 hover:-translate-y-2 transition">

                <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-8 h-8 text-blue-700"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14"/>

                    </svg>

                </div>

                <h3 class="font-bold text-xl mt-6">
                    CCTV Installation
                </h3>

                <p class="mt-4 text-gray-600">
                    Instalasi rapi oleh teknisi profesional.
                </p>

            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 hover:-translate-y-2 transition">

                <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-8 h-8 text-blue-700"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M5 13l4 4L19 7"/>

                    </svg>

                </div>

                <h3 class="font-bold text-xl mt-6">
                    System Repair
                </h3>

                <p class="mt-4 text-gray-600">
                    Perbaikan DVR, NVR, kamera hingga jaringan.
                </p>

            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 hover:-translate-y-2 transition">

                <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-8 h-8 text-blue-700"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M8 16l4-4 4 4m0-8l-4 4-4-4"/>

                    </svg>

                </div>

                <h3 class="font-bold text-xl mt-6">
                    Remote Monitoring
                </h3>

                <p class="mt-4 text-gray-600">
                    Pantau CCTV langsung melalui smartphone Anda.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= PROMO ================= -->

<section class="bg-gradient-to-r from-red-600 to-orange-500 py-12">

    <div class="max-w-6xl mx-auto px-6">

        <div class="flex flex-col lg:flex-row justify-between items-center gap-6">

            <div>

                <h2 class="text-white text-3xl font-bold">

                    Ayo Pasang Sekarang!

                </h2>

                <p class="text-red-100 mt-2">

                    Hubungi kami untuk mendapatkan penawaran terbaik.

                </p>

            </div>

            <a href="https://wa.me/6285219855424"
               class="bg-white text-red-600 font-bold px-8 py-4 rounded-xl shadow-xl hover:scale-105 transition">

                Hubungi WhatsApp

            </a>

        </div>

    </div>

</section>

<!-- ================= FOOTER ================= -->

<footer id="kontak" class="bg-slate-900 text-gray-300 py-12">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-3 gap-10">

            <div>

                <h3 class="font-bold text-white text-2xl">

                    EZA SECURITY

                </h3>

                <p class="mt-4">

                    Solusi pemasangan CCTV profesional dengan kualitas terbaik.

                </p>

            </div>

           

            <div>

                <h4 class="font-semibold text-white">

                    Hubungi Kami

                </h4>

                <div class="space-y-2 mt-3">

                    <a href="tel:085219855424" class="block hover:text-white">
                        📞 085219855424
                    </a>

                    <a href="https://wa.me/6285219855424" class="block hover:text-white">
                        💬 WhatsApp
                    </a>

                </div>

            </div>

        </div>

        <div class="border-t border-gray-700 mt-10 pt-6 text-center text-sm">

            © {{ date('Y') }} EZA SECURITY.
            All Rights Reserved.

        </div>

    </div>

</footer>

<script>

const btn=document.getElementById('menuBtn');
const menu=document.getElementById('mobileMenu');

btn.addEventListener('click',()=>{

menu.classList.toggle('hidden');

});

</script>

</body>
</html>
```
