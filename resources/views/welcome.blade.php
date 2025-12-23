<!doctype html>
<html lang="id" class="h-full">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechHub Invokasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <script src="/_sdk/element_sdk.js"></script>
  <style>
    body {
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    .hero-bg {
      background: linear-gradient(135deg, rgba(74, 144, 226, 0.85) 0%, rgba(80, 227, 194, 0.75) 100%),
                  url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="%234A90E2"/><rect width="100" height="100" fill="url(%23grid)"/><circle cx="20" cy="30" r="15" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="70" r="20" fill="rgba(80,227,194,0.3)"/><circle cx="60" cy="20" r="8" fill="rgba(255,255,255,0.15)"/></svg>');
      background-size: cover;
      background-position: center;
    }

    .card-shadow {
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .btn-primary {
      background-color: #4A90E2;
      transition: all 0.2s ease;
    }

    .btn-primary:hover {
      background-color: #3a7bc8;
      transform: translateY(-1px);
    }

    .btn-secondary {
      background-color: #50E3C2;
      transition: all 0.2s ease;
    }

    .btn-secondary:hover {
      background-color: #3dd4b0;
      transform: translateY(-1px);
    }

    .menu-icon:hover {
      opacity: 0.8;
    }

    .card-hover {
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card-hover:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
    }

    .social-icon {
      transition: transform 0.2s ease;
    }

    .social-icon:hover {
      transform: scale(1.15);
    }
  </style>
  <style>@view-transition { navigation: auto; }</style>
  <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
 </head>
 <body class="h-full bg-gray-50">
  <div id="app-wrapper" class="w-full h-full overflow-auto">
   <div class="w-full mx-auto bg-white min-h-full"><!-- Header -->
    <header class="h-[70px] px-8 lg:px-16 flex items-center justify-between" style="background-color: #4A90E2;">
     <div id="logo-text" class="text-white font-bold text-[22px] tracking-wide">
      JTI TECH HUB
     </div>
     <nav class="hidden md:flex items-center gap-8"><a href="#" class="text-white text-[15px] font-medium hover:opacity-80 transition-opacity">Beranda</a> <a href="#" class="text-white text-[15px] font-medium hover:opacity-80 transition-opacity">Acara</a> <a href="#" class="text-white text-[15px] font-medium hover:opacity-80 transition-opacity">Proyek</a> <a href="#" class="text-white text-[15px] font-medium hover:opacity-80 transition-opacity">Tentang</a> <button class="btn-secondary text-white text-[14px] font-semibold px-5 py-2 rounded-lg">Gabung</button>
     </nav><button class="menu-icon p-1 cursor-pointer md:hidden" aria-label="Menu">
      <svg width="28" height="28" viewbox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6" /> <line x1="3" y1="12" x2="21" y2="12" /> <line x1="3" y1="18" x2="21" y2="18" />
      </svg></button>
    </header><!-- Hero Section -->
    <section class="hero-bg h-[400px] lg:h-[500px] px-8 lg:px-16 flex flex-col justify-center items-center text-center">
     <h1 id="hero-title" class="text-white font-bold text-[32px] md:text-[42px] lg:text-[52px] leading-tight mb-4 max-w-4xl">JTI Tech Hub: Wadah Belajar, Kreatif, dan Kolaborasi</h1>
     <p id="hero-subtitle" class="text-white text-[16px] md:text-[18px] lg:text-[20px] opacity-95 mb-8 max-w-2xl">Bergabung dan tingkatkan skill tech-mu bersama kami!</p>
     <div class="flex gap-4"><button id="btn-events" class="btn-primary text-white text-[15px] md:text-[16px] font-semibold px-7 py-3 rounded-xl shadow-lg"> Daftar Acara </button> <button id="btn-join" class="btn-secondary text-white text-[15px] md:text-[16px] font-semibold px-7 py-3 rounded-xl shadow-lg"> Gabung Kami </button>
     </div>
    </section><!-- Acara Mendatang Section -->
    <section class="px-8 lg:px-16 py-12 lg:py-16">
     <div class="text-center mb-10">
      <h2 id="events-section-title" class="text-[#333333] font-bold text-[24px] md:text-[32px] mb-3">Acara Mendatang</h2>
      <p class="text-[#666666] text-[15px] md:text-[16px]">Ikuti berbagai kegiatan menarik dari JTI Tech Hub</p>
     </div>
     <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto"><!-- Card 1 -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow card-hover">
       <div class="h-[140px] bg-gradient-to-br from-[#4A90E2] to-[#6BA3E8] flex items-center justify-center">
        <svg width="70" height="70" viewbox="0 0 40 40" fill="none"><rect x="5" y="8" width="30" height="22" rx="2" fill="rgba(255,255,255,0.9)" /> <rect x="8" y="12" width="8" height="6" rx="1" fill="#4A90E2" /> <rect x="18" y="12" width="8" height="6" rx="1" fill="#50E3C2" /> <rect x="28" y="12" width="6" height="6" rx="1" fill="#4A90E2" /> <rect x="8" y="20" width="6" height="6" rx="1" fill="#50E3C2" /> <rect x="16" y="20" width="8" height="6" rx="1" fill="#4A90E2" /> <circle cx="32" cy="6" r="4" fill="#50E3C2" />
        </svg>
       </div>
       <div class="p-5"><span class="inline-block bg-blue-100 text-[#4A90E2] text-[11px] font-semibold px-3 py-1 rounded-full mb-3">Workshop</span>
        <h3 class="text-[#333333] text-[16px] font-semibold mb-2">Workshop React JS</h3>
        <p class="text-[#666666] text-[13px] mb-4">5 Januari 2026 • 09:00 WIB</p><button class="btn-primary w-full text-white text-[13px] font-semibold py-2.5 rounded-lg">Daftar Sekarang</button>
       </div>
      </div><!-- Card 2 -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow card-hover">
       <div class="h-[140px] bg-gradient-to-br from-[#50E3C2] to-[#6EEBD3] flex items-center justify-center">
        <svg width="70" height="70" viewbox="0 0 40 40" fill="none"><rect x="4" y="6" width="32" height="24" rx="2" fill="rgba(255,255,255,0.9)" /> <line x1="8" y1="12" x2="32" y2="12" stroke="#50E3C2" stroke-width="2" /> <line x1="8" y1="18" x2="28" y2="18" stroke="#4A90E2" stroke-width="2" /> <line x1="8" y1="24" x2="24" y2="24" stroke="#50E3C2" stroke-width="2" /> <circle cx="32" cy="32" r="6" fill="#4A90E2" /> <path d="M30 32 L32 34 L35 30" stroke="white" stroke-width="1.5" fill="none" />
        </svg>
       </div>
       <div class="p-5"><span class="inline-block bg-green-100 text-[#50E3C2] text-[11px] font-semibold px-3 py-1 rounded-full mb-3">Sharing Session</span>
        <h3 class="text-[#333333] text-[16px] font-semibold mb-2">Sharing AI &amp; Machine Learning</h3>
        <p class="text-[#666666] text-[13px] mb-4">12 Januari 2026 • 13:00 WIB</p><button class="btn-primary w-full text-white text-[13px] font-semibold py-2.5 rounded-lg">Daftar Sekarang</button>
       </div>
      </div><!-- Card 3 -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow card-hover">
       <div class="h-[140px] bg-gradient-to-br from-[#667eea] to-[#764ba2] flex items-center justify-center">
        <svg width="70" height="70" viewbox="0 0 40 40" fill="none"><circle cx="20" cy="20" r="14" fill="rgba(255,255,255,0.9)" /> <path d="M15 20 L18 23 L25 16" stroke="#667eea" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
       </div>
       <div class="p-5"><span class="inline-block bg-purple-100 text-purple-600 text-[11px] font-semibold px-3 py-1 rounded-full mb-3">Hackathon</span>
        <h3 class="text-[#333333] text-[16px] font-semibold mb-2">Hackathon 2026</h3>
        <p class="text-[#666666] text-[13px] mb-4">20 Januari 2026 • 08:00 WIB</p><button class="btn-primary w-full text-white text-[13px] font-semibold py-2.5 rounded-lg">Daftar Sekarang</button>
       </div>
      </div><!-- Card 4 -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow card-hover">
       <div class="h-[140px] bg-gradient-to-br from-[#f093fb] to-[#f5576c] flex items-center justify-center">
        <svg width="70" height="70" viewbox="0 0 40 40" fill="none"><rect x="8" y="10" width="24" height="20" rx="2" fill="rgba(255,255,255,0.9)" /> <circle cx="20" cy="18" r="4" fill="#f5576c" /> <rect x="14" y="24" width="12" height="3" rx="1" fill="#f093fb" />
        </svg>
       </div>
       <div class="p-5"><span class="inline-block bg-pink-100 text-pink-500 text-[11px] font-semibold px-3 py-1 rounded-full mb-3">Seminar</span>
        <h3 class="text-[#333333] text-[16px] font-semibold mb-2">Tech Career Talk</h3>
        <p class="text-[#666666] text-[13px] mb-4">28 Januari 2026 • 10:00 WIB</p><button class="btn-primary w-full text-white text-[13px] font-semibold py-2.5 rounded-lg">Daftar Sekarang</button>
       </div>
      </div>
     </div>
    </section><!-- Proyek Terbaru Section -->
    <section class="px-8 lg:px-16 py-12 lg:py-16 bg-gray-50">
     <div class="text-center mb-10">
      <h2 id="projects-section-title" class="text-[#333333] font-bold text-[24px] md:text-[32px] mb-3">Proyek Terbaru</h2>
      <p class="text-[#666666] text-[15px] md:text-[16px]">Karya terbaik dari anggota JTI Tech Hub</p>
     </div>
     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto"><!-- Project 1 -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow card-hover">
       <div class="h-[180px] bg-gradient-to-br from-[#4A90E2] to-[#50E3C2] flex items-center justify-center">
        <svg width="100" height="100" viewbox="0 0 50 50" fill="none"><rect x="8" y="5" width="34" height="40" rx="4" fill="rgba(255,255,255,0.95)" /> <rect x="15" y="12" width="20" height="20" rx="2" fill="#4A90E2" /> <rect x="18" y="15" width="6" height="6" fill="white" /> <rect x="26" y="15" width="6" height="6" fill="white" /> <rect x="18" y="23" width="6" height="6" fill="white" /> <rect x="26" y="23" width="6" height="6" fill="white" /> <rect x="15" y="36" width="20" height="3" rx="1" fill="#50E3C2" />
        </svg>
       </div>
       <div class="p-6">
        <h3 class="text-[#333333] text-[18px] font-bold mb-2">Aplikasi Absensi QR</h3>
        <p class="text-[#666666] text-[14px] mb-4">Sistem absensi modern menggunakan QR Code dengan dashboard real-time.</p>
        <div class="flex flex-wrap gap-2 mb-4"><span class="bg-blue-50 text-[#4A90E2] text-[11px] font-medium px-3 py-1 rounded-full">Flutter</span> <span class="bg-green-50 text-[#50E3C2] text-[11px] font-medium px-3 py-1 rounded-full">Firebase</span>
        </div><button class="btn-secondary w-full text-white text-[14px] font-semibold py-2.5 rounded-lg">Lihat Detail</button>
       </div>
      </div><!-- Project 2 -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow card-hover">
       <div class="h-[180px] bg-gradient-to-br from-[#667eea] to-[#764ba2] flex items-center justify-center">
        <svg width="100" height="100" viewbox="0 0 50 50" fill="none"><rect x="5" y="10" width="40" height="28" rx="3" fill="rgba(255,255,255,0.95)" /> <rect x="10" y="15" width="15" height="10" rx="2" fill="#667eea" /> <rect x="28" y="15" width="12" height="4" rx="1" fill="#764ba2" /> <rect x="28" y="21" width="10" height="4" rx="1" fill="#667eea" /> <rect x="10" y="28" width="30" height="5" rx="1" fill="#e0e0e0" />
        </svg>
       </div>
       <div class="p-6">
        <h3 class="text-[#333333] text-[18px] font-bold mb-2">E-Learning Platform</h3>
        <p class="text-[#666666] text-[14px] mb-4">Platform pembelajaran online interaktif dengan fitur video streaming.</p>
        <div class="flex flex-wrap gap-2 mb-4"><span class="bg-purple-50 text-purple-600 text-[11px] font-medium px-3 py-1 rounded-full">React</span> <span class="bg-blue-50 text-blue-600 text-[11px] font-medium px-3 py-1 rounded-full">Node.js</span>
        </div><button class="btn-secondary w-full text-white text-[14px] font-semibold py-2.5 rounded-lg">Lihat Detail</button>
       </div>
      </div><!-- Project 3 -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow card-hover">
       <div class="h-[180px] bg-gradient-to-br from-[#f093fb] to-[#f5576c] flex items-center justify-center">
        <svg width="100" height="100" viewbox="0 0 50 50" fill="none"><circle cx="25" cy="25" r="18" fill="rgba(255,255,255,0.95)" /> <path d="M20 20 L30 25 L20 30 Z" fill="#f5576c" /> <circle cx="25" cy="25" r="3" fill="#f093fb" />
        </svg>
       </div>
       <div class="p-6">
        <h3 class="text-[#333333] text-[18px] font-bold mb-2">IoT Smart Campus</h3>
        <p class="text-[#666666] text-[14px] mb-4">Sistem monitoring ruangan kampus berbasis IoT dengan sensor suhu dan AC.</p>
        <div class="flex flex-wrap gap-2 mb-4"><span class="bg-pink-50 text-pink-500 text-[11px] font-medium px-3 py-1 rounded-full">Arduino</span> <span class="bg-orange-50 text-orange-500 text-[11px] font-medium px-3 py-1 rounded-full">Python</span>
        </div><button class="btn-secondary w-full text-white text-[14px] font-semibold py-2.5 rounded-lg">Lihat Detail</button>
       </div>
      </div>
     </div>
    </section><!-- Footer -->
    <footer class="px-8 lg:px-16 py-10 lg:py-14" style="background-color: #4A90E2;">
     <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-10"><!-- Brand -->
       <div class="md:col-span-1">
        <h3 class="text-white font-bold text-[20px] mb-4">JTI Tech Hub</h3>
        <p class="text-white/80 text-[14px] leading-relaxed">Wadah belajar, berkarya, dan berkolaborasi bagi mahasiswa Teknik Informatika.</p>
       </div><!-- Quick Links -->
       <div>
        <h4 class="text-white font-semibold text-[16px] mb-4">Menu</h4>
        <ul class="space-y-2">
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Beranda</a></li>
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Acara</a></li>
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Proyek</a></li>
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Tentang Kami</a></li>
        </ul>
       </div><!-- Resources -->
       <div>
        <h4 class="text-white font-semibold text-[16px] mb-4">Resources</h4>
        <ul class="space-y-2">
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Blog</a></li>
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Tutorial</a></li>
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Dokumentasi</a></li>
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">FAQ</a></li>
        </ul>
       </div><!-- Contact -->
       <div>
        <h4 class="text-white font-semibold text-[16px] mb-4">Kontak</h4>
        <p id="footer-email" class="text-white/80 text-[14px] mb-4">hub.jtitech@gmail.com</p>
        <div class="flex gap-4"><!-- Instagram --> <a href="#" class="social-icon bg-white/20 p-2 rounded-lg hover:bg-white/30 transition-colors" aria-label="Instagram">
          <svg width="22" height="22" viewbox="0 0 24 24" fill="white"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg></a> <!-- GitHub --> <a href="#" class="social-icon bg-white/20 p-2 rounded-lg hover:bg-white/30 transition-colors" aria-label="GitHub">
          <svg width="22" height="22" viewbox="0 0 24 24" fill="white"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
          </svg></a> <!-- LinkedIn --> <a href="#" class="social-icon bg-white/20 p-2 rounded-lg hover:bg-white/30 transition-colors" aria-label="LinkedIn">
          <svg width="22" height="22" viewbox="0 0 24 24" fill="white"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
          </svg></a>
        </div>
       </div>
      </div><!-- Bottom Bar -->
      <div class="border-t border-white/20 pt-6 text-center">
       <p id="footer-copyright" class="text-white/70 text-[13px]">© 2026 JTI Tech Hub - Semua Hak Dilindungi</p>
      </div>
     </div>
    </footer>
   </div>
  </div>
  <script>
    const defaultConfig = {
      logo_text: 'JTI TECH HUB',
      hero_title: 'JTI Tech Hub: Wadah Belajar, Kreatif, dan Kolaborasi',
      hero_subtitle: 'Bergabung dan tingkatkan skill tech-mu bersama kami!',
      button_events: 'Daftar Acara',
      button_join: 'Gabung Kami',
      events_title: 'Acara Mendatang',
      projects_title: 'Proyek Terbaru',
      footer_email: 'hub.jtitech@gmail.com',
      footer_copyright: '© 2026 JTI Tech Hub - Semua Hak Dilindungi',
      primary_color: '#4A90E2',
      secondary_color: '#50E3C2',
      background_color: '#FFFFFF',
      text_color: '#333333',
      muted_color: '#666666',
      font_family: 'Inter',
      font_size: 14
    };

    async function onConfigChange(config) {
      const logoEl = document.getElementById('logo-text');
      const heroTitleEl = document.getElementById('hero-title');
      const heroSubtitleEl = document.getElementById('hero-subtitle');
      const btnEventsEl = document.getElementById('btn-events');
      const btnJoinEl = document.getElementById('btn-join');
      const eventsTitleEl = document.getElementById('events-section-title');
      const projectsTitleEl = document.getElementById('projects-section-title');
      const footerEmailEl = document.getElementById('footer-email');
      const footerCopyrightEl = document.getElementById('footer-copyright');

      if (logoEl) logoEl.textContent = config.logo_text || defaultConfig.logo_text;
      if (heroTitleEl) heroTitleEl.textContent = config.hero_title || defaultConfig.hero_title;
      if (heroSubtitleEl) heroSubtitleEl.textContent = config.hero_subtitle || defaultConfig.hero_subtitle;
      if (btnEventsEl) btnEventsEl.textContent = config.button_events || defaultConfig.button_events;
      if (btnJoinEl) btnJoinEl.textContent = config.button_join || defaultConfig.button_join;
      if (eventsTitleEl) eventsTitleEl.textContent = config.events_title || defaultConfig.events_title;
      if (projectsTitleEl) projectsTitleEl.textContent = config.projects_title || defaultConfig.projects_title;
      if (footerEmailEl) footerEmailEl.textContent = config.footer_email || defaultConfig.footer_email;
      if (footerCopyrightEl) footerCopyrightEl.textContent = config.footer_copyright || defaultConfig.footer_copyright;

      const fontFamily = config.font_family || defaultConfig.font_family;
      document.body.style.fontFamily = `${fontFamily}, Inter, sans-serif`;

      const baseSize = config.font_size || defaultConfig.font_size;
      if (heroTitleEl) heroTitleEl.style.fontSize = `${baseSize * 1.7}px`;
      if (heroSubtitleEl) heroSubtitleEl.style.fontSize = `${baseSize}px`;

      const primaryColor = config.primary_color || defaultConfig.primary_color;
      const secondaryColor = config.secondary_color || defaultConfig.secondary_color;
      const textColor = config.text_color || defaultConfig.text_color;
      const mutedColor = config.muted_color || defaultConfig.muted_color;
      const bgColor = config.background_color || defaultConfig.background_color;

      const header = document.querySelector('header');
      if (header) header.style.backgroundColor = primaryColor;

      const primaryBtns = document.querySelectorAll('.btn-primary');
      primaryBtns.forEach(btn => btn.style.backgroundColor = primaryColor);

      const secondaryBtns = document.querySelectorAll('.btn-secondary');
      secondaryBtns.forEach(btn => btn.style.backgroundColor = secondaryColor);

      const socialIcons = document.querySelectorAll('.social-icon svg');
      socialIcons.forEach(icon => icon.setAttribute('fill', primaryColor));

      const textElements = document.querySelectorAll('[class*="text-[#333333]"]');
      textElements.forEach(el => el.style.color = textColor);

      const mutedElements = document.querySelectorAll('[class*="text-[#666666]"]');
      mutedElements.forEach(el => el.style.color = mutedColor);

      const mainContainer = document.querySelector('.max-w-\\[360px\\]');
      if (mainContainer) mainContainer.style.backgroundColor = bgColor;
    }

    function mapToCapabilities(config) {
      return {
        recolorables: [
          {
            get: () => config.background_color || defaultConfig.background_color,
            set: (value) => {
              config.background_color = value;
              window.elementSdk.setConfig({ background_color: value });
            }
          },
          {
            get: () => config.primary_color || defaultConfig.primary_color,
            set: (value) => {
              config.primary_color = value;
              window.elementSdk.setConfig({ primary_color: value });
            }
          },
          {
            get: () => config.text_color || defaultConfig.text_color,
            set: (value) => {
              config.text_color = value;
              window.elementSdk.setConfig({ text_color: value });
            }
          },
          {
            get: () => config.secondary_color || defaultConfig.secondary_color,
            set: (value) => {
              config.secondary_color = value;
              window.elementSdk.setConfig({ secondary_color: value });
            }
          },
          {
            get: () => config.muted_color || defaultConfig.muted_color,
            set: (value) => {
              config.muted_color = value;
              window.elementSdk.setConfig({ muted_color: value });
            }
          }
        ],
        borderables: [],
        fontEditable: {
          get: () => config.font_family || defaultConfig.font_family,
          set: (value) => {
            config.font_family = value;
            window.elementSdk.setConfig({ font_family: value });
          }
        },
        fontSizeable: {
          get: () => config.font_size || defaultConfig.font_size,
          set: (value) => {
            config.font_size = value;
            window.elementSdk.setConfig({ font_size: value });
          }
        }
      };
    }

    function mapToEditPanelValues(config) {
      return new Map([
        ['logo_text', config.logo_text || defaultConfig.logo_text],
        ['hero_title', config.hero_title || defaultConfig.hero_title],
        ['hero_subtitle', config.hero_subtitle || defaultConfig.hero_subtitle],
        ['button_events', config.button_events || defaultConfig.button_events],
        ['button_join', config.button_join || defaultConfig.button_join],
        ['events_title', config.events_title || defaultConfig.events_title],
        ['projects_title', config.projects_title || defaultConfig.projects_title],
        ['footer_email', config.footer_email || defaultConfig.footer_email],
        ['footer_copyright', config.footer_copyright || defaultConfig.footer_copyright]
      ]);
    }

    if (window.elementSdk) {
      window.elementSdk.init({
        defaultConfig,
        onConfigChange,
        mapToCapabilities,
        mapToEditPanelValues
      });
    }
  </script>
 <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9b26682e47f1f902',t:'MTc2NjQ3NzY4My4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
