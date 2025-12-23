<!doctype html>
<html lang="id" class="h-full">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acara - JTI Tech Hub</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <script src="/_sdk/element_sdk.js"></script>
  <style>
    body {
      box-sizing: border-box;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    
    .hero-pattern {
      background: linear-gradient(135deg, #4A90E2 0%, #50E3C2 100%);
      position: relative;
      overflow: hidden;
    }
    
    .hero-pattern::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.08'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    
    .card-shadow {
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }
    
    .card-hover {
      transition: all 0.3s ease;
    }
    
    .card-hover:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
    }
    
    .btn-primary {
      background: linear-gradient(135deg, #4A90E2 0%, #3a7bc8 100%);
      transition: all 0.2s ease;
    }
    
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(74, 144, 226, 0.4);
    }
    
    .btn-outline {
      border: 2px solid #4A90E2;
      color: #4A90E2;
      transition: all 0.2s ease;
    }
    
    .btn-outline:hover {
      background: #4A90E2;
      color: white;
    }
    
    .filter-btn {
      transition: all 0.2s ease;
    }
    
    .filter-btn.active {
      background: #4A90E2;
      color: white;
    }
    
    .filter-btn:not(.active):hover {
      background: #f0f7ff;
    }
    
    .badge {
      font-size: 11px;
      font-weight: 600;
      padding: 4px 10px;
      border-radius: 20px;
    }
    
    .search-input:focus {
      outline: none;
      box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.2);
    }
    
    .status-upcoming {
      background: #e8f5e9;
      color: #2e7d32;
    }
    
    .status-ongoing {
      background: #fff3e0;
      color: #ef6c00;
    }
    
    .status-closed {
      background: #ffebee;
      color: #c62828;
    }
    
    .modal-overlay {
      background: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(4px);
    }
    
    .animate-fade-in {
      animation: fadeIn 0.3s ease;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .social-icon {
      transition: transform 0.2s ease;
    }
    
    .social-icon:hover {
      transform: scale(1.1);
    }
  </style>
  <style>@view-transition { navigation: auto; }</style>
  <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
 </head>
 <body class="h-full bg-gray-50">
  <div id="app-wrapper" class="w-full h-full overflow-auto">
   <div class="w-full min-h-full bg-white"><!-- Header -->
    <header class="h-[70px] px-8 lg:px-16 flex items-center justify-between bg-white shadow-sm sticky top-0 z-50">
     <div id="logo-text" class="text-[#4A90E2] font-bold text-[22px] tracking-wide">
      JTI TECH HUB
     </div>
     <nav class="hidden md:flex items-center gap-8"><a href="#" class="text-[#666666] text-[15px] font-medium hover:text-[#4A90E2] transition-colors">Beranda</a> <a href="#" class="text-[#4A90E2] text-[15px] font-semibold border-b-2 border-[#4A90E2] pb-1">Acara</a> <a href="#" class="text-[#666666] text-[15px] font-medium hover:text-[#4A90E2] transition-colors">Proyek</a> <a href="#" class="text-[#666666] text-[15px] font-medium hover:text-[#4A90E2] transition-colors">Tentang</a> <button class="btn-primary text-white text-[14px] font-semibold px-5 py-2.5 rounded-lg">Gabung</button>
     </nav><button class="menu-icon p-1 cursor-pointer md:hidden" aria-label="Menu">
      <svg width="28" height="28" viewbox="0 0 24 24" fill="none" stroke="#4A90E2" stroke-width="2.5" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6" /> <line x1="3" y1="12" x2="21" y2="12" /> <line x1="3" y1="18" x2="21" y2="18" />
      </svg></button>
    </header><!-- Hero Section -->
    <section class="hero-pattern px-8 lg:px-16 py-16 lg:py-20 relative">
     <div class="max-w-4xl mx-auto text-center relative z-10">
      <h1 id="page-title" class="text-white font-extrabold text-[36px] md:text-[48px] mb-4">Acara &amp; Kegiatan</h1>
      <p id="page-subtitle" class="text-white/90 text-[16px] md:text-[18px] max-w-2xl mx-auto">Temukan berbagai acara menarik untuk mengembangkan skill dan memperluas jaringanmu</p>
     </div>
    </section><!-- Search & Filter Section -->
    <section class="px-8 lg:px-16 py-8 bg-white border-b border-gray-100">
     <div class="max-w-6xl mx-auto"><!-- Search Bar -->
      <div class="flex flex-col md:flex-row gap-4 mb-6">
       <div class="flex-1 relative">
        <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg><input type="text" id="search-input" placeholder="Cari acara..." class="search-input w-full pl-12 pr-4 py-3 border border-gray-200 rounded-xl text-[15px]">
       </div><select id="month-filter" class="px-4 py-3 border border-gray-200 rounded-xl text-[15px] text-gray-600 bg-white cursor-pointer"> <option value="">Semua Bulan</option> <option value="1">Januari 2026</option> <option value="2">Februari 2026</option> <option value="3">Maret 2026</option> </select>
      </div><!-- Category Filter -->
      <div class="flex flex-wrap gap-3" id="filter-container"><button class="filter-btn active px-5 py-2 rounded-full text-[14px] font-medium bg-gray-100" data-filter="all">Semua</button> <button class="filter-btn px-5 py-2 rounded-full text-[14px] font-medium bg-gray-100 text-gray-600" data-filter="workshop">Workshop</button> <button class="filter-btn px-5 py-2 rounded-full text-[14px] font-medium bg-gray-100 text-gray-600" data-filter="seminar">Seminar</button> <button class="filter-btn px-5 py-2 rounded-full text-[14px] font-medium bg-gray-100 text-gray-600" data-filter="hackathon">Hackathon</button> <button class="filter-btn px-5 py-2 rounded-full text-[14px] font-medium bg-gray-100 text-gray-600" data-filter="sharing">Sharing Session</button>
      </div>
     </div>
    </section><!-- Events Grid -->
    <main class="px-8 lg:px-16 py-12">
     <div class="max-w-6xl mx-auto">
      <div class="flex items-center justify-between mb-8">
       <p id="results-count" class="text-gray-600 text-[15px]">Menampilkan <span class="font-semibold text-[#333]">8</span> acara</p><select id="sort-filter" class="px-4 py-2 border border-gray-200 rounded-lg text-[14px] text-gray-600 bg-white cursor-pointer"> <option value="newest">Terbaru</option> <option value="oldest">Terlama</option> <option value="popular">Terpopuler</option> </select>
      </div>
      <div id="events-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6"><!-- Event Card 1 -->
       <article class="event-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="workshop">
        <div class="h-[160px] bg-gradient-to-br from-[#4A90E2] to-[#6BA3E8] flex items-center justify-center relative"><span class="absolute top-3 left-3 badge status-upcoming">Pendaftaran Dibuka</span>
         <svg width="70" height="70" viewbox="0 0 40 40" fill="none"><rect x="5" y="8" width="30" height="22" rx="2" fill="rgba(255,255,255,0.95)" /> <rect x="8" y="12" width="10" height="7" rx="1" fill="#4A90E2" /> <rect x="20" y="12" width="12" height="3" rx="1" fill="#50E3C2" /> <rect x="20" y="17" width="8" height="2" rx="0.5" fill="#e0e0e0" /> <rect x="8" y="22" width="24" height="5" rx="1" fill="#f5f5f5" />
         </svg>
        </div>
        <div class="p-5"><span class="inline-block bg-blue-50 text-[#4A90E2] text-[11px] font-semibold px-3 py-1 rounded-full mb-3">Workshop</span>
         <h3 class="text-[#333333] text-[16px] font-bold mb-2 line-clamp-2">Workshop React JS untuk Pemula</h3>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg><span>5 Januari 2026</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg><span>09:00 - 16:00 WIB</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-4">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg><span>42/50 Peserta</span>
         </div><button class="btn-primary w-full text-white text-[13px] font-semibold py-2.5 rounded-lg" onclick="openModal('Workshop React JS untuk Pemula')">Daftar Sekarang</button>
        </div>
       </article><!-- Event Card 2 -->
       <article class="event-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="sharing">
        <div class="h-[160px] bg-gradient-to-br from-[#50E3C2] to-[#6EEBD3] flex items-center justify-center relative"><span class="absolute top-3 left-3 badge status-upcoming">Pendaftaran Dibuka</span>
         <svg width="70" height="70" viewbox="0 0 40 40" fill="none"><circle cx="20" cy="15" r="8" fill="rgba(255,255,255,0.95)" /> <path d="M8 32c0-6.627 5.373-12 12-12s12 5.373 12 12" fill="rgba(255,255,255,0.95)" /> <circle cx="20" cy="15" r="4" fill="#50E3C2" />
         </svg>
        </div>
        <div class="p-5"><span class="inline-block bg-green-50 text-emerald-600 text-[11px] font-semibold px-3 py-1 rounded-full mb-3">Sharing Session</span>
         <h3 class="text-[#333333] text-[16px] font-bold mb-2 line-clamp-2">Sharing AI &amp; Machine Learning</h3>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg><span>12 Januari 2026</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg><span>13:00 - 16:00 WIB</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-4">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg><span>78/100 Peserta</span>
         </div><button class="btn-primary w-full text-white text-[13px] font-semibold py-2.5 rounded-lg" onclick="openModal('Sharing AI &amp; Machine Learning')">Daftar Sekarang</button>
        </div>
       </article><!-- Event Card 3 -->
       <article class="event-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="hackathon">
        <div class="h-[160px] bg-gradient-to-br from-[#667eea] to-[#764ba2] flex items-center justify-center relative"><span class="absolute top-3 left-3 badge status-upcoming">Pendaftaran Dibuka</span>
         <svg width="70" height="70" viewbox="0 0 40 40" fill="none"><path d="M20 5 L35 15 L35 30 L20 35 L5 30 L5 15 Z" fill="rgba(255,255,255,0.95)" /> <path d="M20 10 L28 15 L28 25 L20 28 L12 25 L12 15 Z" fill="#667eea" />
         </svg>
        </div>
        <div class="p-5"><span class="inline-block bg-purple-50 text-purple-600 text-[11px] font-semibold px-3 py-1 rounded-full mb-3">Hackathon</span>
         <h3 class="text-[#333333] text-[16px] font-bold mb-2 line-clamp-2">JTI Hackathon 2026</h3>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg><span>20-22 Januari 2026</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg><span>48 Jam Non-Stop</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-4">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg><span>15/30 Tim</span>
         </div><button class="btn-primary w-full text-white text-[13px] font-semibold py-2.5 rounded-lg" onclick="openModal('JTI Hackathon 2026')">Daftar Sekarang</button>
        </div>
       </article><!-- Event Card 4 -->
       <article class="event-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="seminar">
        <div class="h-[160px] bg-gradient-to-br from-[#f093fb] to-[#f5576c] flex items-center justify-center relative"><span class="absolute top-3 left-3 badge status-upcoming">Pendaftaran Dibuka</span>
         <svg width="70" height="70" viewbox="0 0 40 40" fill="none"><rect x="8" y="10" width="24" height="18" rx="2" fill="rgba(255,255,255,0.95)" /> <circle cx="20" cy="17" r="4" fill="#f5576c" /> <rect x="14" y="23" width="12" height="2" rx="1" fill="#f093fb" />
         </svg>
        </div>
        <div class="p-5"><span class="inline-block bg-pink-50 text-pink-500 text-[11px] font-semibold px-3 py-1 rounded-full mb-3">Seminar</span>
         <h3 class="text-[#333333] text-[16px] font-bold mb-2 line-clamp-2">Tech Career Talk 2026</h3>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg><span>28 Januari 2026</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg><span>10:00 - 12:00 WIB</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-4">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg><span>150/200 Peserta</span>
         </div><button class="btn-primary w-full text-white text-[13px] font-semibold py-2.5 rounded-lg" onclick="openModal('Tech Career Talk 2026')">Daftar Sekarang</button>
        </div>
       </article><!-- Event Card 5 -->
       <article class="event-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="workshop">
        <div class="h-[160px] bg-gradient-to-br from-[#11998e] to-[#38ef7d] flex items-center justify-center relative"><span class="absolute top-3 left-3 badge status-ongoing">Sedang Berlangsung</span>
         <svg width="70" height="70" viewbox="0 0 40 40" fill="none"><rect x="6" y="8" width="28" height="20" rx="2" fill="rgba(255,255,255,0.95)" /> <rect x="10" y="12" width="8" height="6" rx="1" fill="#11998e" /> <rect x="20" y="12" width="10" height="2" rx="0.5" fill="#38ef7d" /> <rect x="20" y="16" width="8" height="2" rx="0.5" fill="#e0e0e0" /> <rect x="10" y="20" width="20" height="4" rx="1" fill="#f5f5f5" />
         </svg>
        </div>
        <div class="p-5"><span class="inline-block bg-blue-50 text-[#4A90E2] text-[11px] font-semibold px-3 py-1 rounded-full mb-3">Workshop</span>
         <h3 class="text-[#333333] text-[16px] font-bold mb-2 line-clamp-2">Flutter Development Bootcamp</h3>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg><span>1-7 Februari 2026</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg><span>19:00 - 21:00 WIB</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-4">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg><span>30/30 Peserta (Penuh)</span>
         </div><button class="btn-outline w-full text-[13px] font-semibold py-2.5 rounded-lg" disabled style="opacity: 0.5; cursor: not-allowed;">Kuota Penuh</button>
        </div>
       </article><!-- Event Card 6 -->
       <article class="event-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="sharing">
        <div class="h-[160px] bg-gradient-to-br from-[#fc4a1a] to-[#f7b733] flex items-center justify-center relative"><span class="absolute top-3 left-3 badge status-upcoming">Pendaftaran Dibuka</span>
         <svg width="70" height="70" viewbox="0 0 40 40" fill="none"><rect x="8" y="6" width="24" height="28" rx="2" fill="rgba(255,255,255,0.95)" /> <rect x="12" y="10" width="16" height="3" rx="1" fill="#fc4a1a" /> <rect x="12" y="16" width="14" height="2" rx="0.5" fill="#e0e0e0" /> <rect x="12" y="20" width="12" height="2" rx="0.5" fill="#e0e0e0" /> <rect x="12" y="24" width="10" height="2" rx="0.5" fill="#e0e0e0" /> <circle cx="28" cy="28" r="6" fill="#f7b733" /> <path d="M26 28 L28 30 L31 26" stroke="white" stroke-width="1.5" fill="none" />
         </svg>
        </div>
        <div class="p-5"><span class="inline-block bg-green-50 text-emerald-600 text-[11px] font-semibold px-3 py-1 rounded-full mb-3">Sharing Session</span>
         <h3 class="text-[#333333] text-[16px] font-bold mb-2 line-clamp-2">UI/UX Design Fundamentals</h3>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg><span>15 Februari 2026</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg><span>14:00 - 17:00 WIB</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-4">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg><span>25/60 Peserta</span>
         </div><button class="btn-primary w-full text-white text-[13px] font-semibold py-2.5 rounded-lg" onclick="openModal('UI/UX Design Fundamentals')">Daftar Sekarang</button>
        </div>
       </article><!-- Event Card 7 -->
       <article class="event-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="seminar">
        <div class="h-[160px] bg-gradient-to-br from-[#0f2027] via-[#203a43] to-[#2c5364] flex items-center justify-center relative"><span class="absolute top-3 left-3 badge status-closed">Pendaftaran Ditutup</span>
         <svg width="70" height="70" viewbox="0 0 40 40" fill="none"><circle cx="20" cy="20" r="14" fill="rgba(255,255,255,0.95)" /> <circle cx="20" cy="20" r="10" fill="#203a43" /> <circle cx="20" cy="20" r="6" fill="#2c5364" /> <circle cx="20" cy="20" r="2" fill="white" />
         </svg>
        </div>
        <div class="p-5"><span class="inline-block bg-pink-50 text-pink-500 text-[11px] font-semibold px-3 py-1 rounded-full mb-3">Seminar</span>
         <h3 class="text-[#333333] text-[16px] font-bold mb-2 line-clamp-2">Cyber Security Awareness</h3>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg><span>10 Desember 2025</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg><span>09:00 - 12:00 WIB</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-4">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg><span>200/200 Peserta</span>
         </div><button class="btn-outline w-full text-[13px] font-semibold py-2.5 rounded-lg" disabled style="opacity: 0.5; cursor: not-allowed;">Acara Selesai</button>
        </div>
       </article><!-- Event Card 8 -->
       <article class="event-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="workshop">
        <div class="h-[160px] bg-gradient-to-br from-[#ee0979] to-[#ff6a00] flex items-center justify-center relative"><span class="absolute top-3 left-3 badge status-upcoming">Pendaftaran Dibuka</span>
         <svg width="70" height="70" viewbox="0 0 40 40" fill="none"><rect x="5" y="10" width="30" height="20" rx="3" fill="rgba(255,255,255,0.95)" /> <polygon points="16,15 16,25 26,20" fill="#ee0979" />
         </svg>
        </div>
        <div class="p-5"><span class="inline-block bg-blue-50 text-[#4A90E2] text-[11px] font-semibold px-3 py-1 rounded-full mb-3">Workshop</span>
         <h3 class="text-[#333333] text-[16px] font-bold mb-2 line-clamp-2">Video Editing dengan DaVinci</h3>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg><span>25 Februari 2026</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg><span>10:00 - 15:00 WIB</span>
         </div>
         <div class="flex items-center gap-2 text-[#666666] text-[13px] mb-4">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg><span>12/25 Peserta</span>
         </div><button class="btn-primary w-full text-white text-[13px] font-semibold py-2.5 rounded-lg" onclick="openModal('Video Editing dengan DaVinci')">Daftar Sekarang</button>
        </div>
       </article>
      </div><!-- Empty State -->
      <div id="empty-state" class="hidden text-center py-16">
       <svg class="w-24 h-24 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
       </svg>
       <h3 class="text-[#333] text-[18px] font-semibold mb-2">Tidak ada acara ditemukan</h3>
       <p class="text-gray-500 text-[14px]">Coba ubah filter atau kata kunci pencarian</p>
      </div>
     </div>
    </main><!-- Registration Modal -->
    <div id="modal" class="fixed inset-0 z-50 hidden">
     <div class="modal-overlay absolute inset-0" onclick="closeModal()"></div>
     <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-md bg-white rounded-2xl p-6 animate-fade-in">
      <div class="flex items-center justify-between mb-6">
       <h3 class="text-[#333] text-[20px] font-bold">Daftar Acara</h3><button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg></button>
      </div>
      <p id="modal-event-name" class="text-[#4A90E2] font-semibold mb-4"></p>
      <form id="registration-form" onsubmit="submitRegistration(event)">
       <div class="mb-4"><label for="name" class="block text-[14px] font-medium text-gray-700 mb-1">Nama Lengkap</label> <input type="text" id="name" required class="w-full px-4 py-3 border border-gray-200 rounded-xl text-[14px] focus:outline-none focus:border-[#4A90E2]" placeholder="Masukkan nama lengkap">
       </div>
       <div class="mb-4"><label for="email" class="block text-[14px] font-medium text-gray-700 mb-1">Email</label> <input type="email" id="email" required class="w-full px-4 py-3 border border-gray-200 rounded-xl text-[14px] focus:outline-none focus:border-[#4A90E2]" placeholder="nama@email.com">
       </div>
       <div class="mb-4"><label for="phone" class="block text-[14px] font-medium text-gray-700 mb-1">No. WhatsApp</label> <input type="tel" id="phone" required class="w-full px-4 py-3 border border-gray-200 rounded-xl text-[14px] focus:outline-none focus:border-[#4A90E2]" placeholder="08xxxxxxxxxx">
       </div>
       <div class="mb-6"><label for="nim" class="block text-[14px] font-medium text-gray-700 mb-1">NIM (Opsional)</label> <input type="text" id="nim" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-[14px] focus:outline-none focus:border-[#4A90E2]" placeholder="Masukkan NIM">
       </div><button type="submit" class="btn-primary w-full text-white text-[15px] font-semibold py-3 rounded-xl">Kirim Pendaftaran</button>
      </form>
      <div id="success-message" class="hidden text-center py-8">
       <svg class="w-16 h-16 mx-auto mb-4 text-green-500" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
       </svg>
       <h4 class="text-[#333] text-[18px] font-bold mb-2">Pendaftaran Berhasil!</h4>
       <p class="text-gray-500 text-[14px]">Cek email kamu untuk informasi selanjutnya</p>
      </div>
     </div>
    </div><!-- Footer -->
    <footer class="px-8 lg:px-16 py-10 lg:py-12 bg-[#4A90E2]">
     <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
       <div class="md:col-span-1">
        <h3 class="text-white font-bold text-[20px] mb-4">JTI Tech Hub</h3>
        <p class="text-white/80 text-[14px] leading-relaxed">Wadah belajar, berkarya, dan berkolaborasi bagi mahasiswa Teknik Informatika.</p>
       </div>
       <div>
        <h4 class="text-white font-semibold text-[16px] mb-4">Menu</h4>
        <ul class="space-y-2">
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Beranda</a></li>
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Acara</a></li>
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Proyek</a></li>
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Tentang</a></li>
        </ul>
       </div>
       <div>
        <h4 class="text-white font-semibold text-[16px] mb-4">Resources</h4>
        <ul class="space-y-2">
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Blog</a></li>
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">Tutorial</a></li>
         <li><a href="#" class="text-white/80 text-[14px] hover:text-white transition-colors">FAQ</a></li>
        </ul>
       </div>
       <div>
        <h4 class="text-white font-semibold text-[16px] mb-4">Kontak</h4>
        <p id="footer-email" class="text-white/80 text-[14px] mb-4">hub.jtitech@gmail.com</p>
        <div class="flex gap-3"><a href="#" class="social-icon bg-white/20 p-2 rounded-lg hover:bg-white/30" aria-label="Instagram">
          <svg width="20" height="20" viewbox="0 0 24 24" fill="white"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg></a> <a href="#" class="social-icon bg-white/20 p-2 rounded-lg hover:bg-white/30" aria-label="GitHub">
          <svg width="20" height="20" viewbox="0 0 24 24" fill="white"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
          </svg></a> <a href="#" class="social-icon bg-white/20 p-2 rounded-lg hover:bg-white/30" aria-label="LinkedIn">
          <svg width="20" height="20" viewbox="0 0 24 24" fill="white"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
          </svg></a>
        </div>
       </div>
      </div>
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
      page_title: 'Acara & Kegiatan',
      page_subtitle: 'Temukan berbagai acara menarik untuk mengembangkan skill dan memperluas jaringanmu',
      search_placeholder: 'Cari acara...',
      footer_email: 'hub.jtitech@gmail.com',
      footer_copyright: '© 2026 JTI Tech Hub - Semua Hak Dilindungi',
      primary_color: '#4A90E2',
      secondary_color: '#50E3C2',
      background_color: '#FFFFFF',
      text_color: '#333333',
      muted_color: '#666666',
      font_family: 'Plus Jakarta Sans',
      font_size: 14
    };
    
    let activeFilter = 'all';
    let searchQuery = '';
    
    // Filter and search functionality
    function initFilters() {
      const filterButtons = document.querySelectorAll('.filter-btn');
      const searchInput = document.getElementById('search-input');
      
      filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          filterButtons.forEach(b => b.classList.remove('active'));
          btn.classList.add('active');
          activeFilter = btn.dataset.filter;
          filterEvents();
        });
      });
      
      searchInput.addEventListener('input', (e) => {
        searchQuery = e.target.value.toLowerCase();
        filterEvents();
      });
    }
    
    function filterEvents() {
      const cards = document.querySelectorAll('.event-card');
      let visibleCount = 0;
      
      cards.forEach(card => {
        const category = card.dataset.category;
        const title = card.querySelector('h3').textContent.toLowerCase();
        const matchesFilter = activeFilter === 'all' || category === activeFilter;
        const matchesSearch = title.includes(searchQuery);
        
        if (matchesFilter && matchesSearch) {
          card.style.display = 'block';
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });
      
      document.getElementById('results-count').innerHTML = `Menampilkan <span class="font-semibold text-[#333]">${visibleCount}</span> acara`;
      document.getElementById('empty-state').classList.toggle('hidden', visibleCount > 0);
      document.getElementById('events-grid').classList.toggle('hidden', visibleCount === 0);
    }
    
    // Modal functionality
    function openModal(eventName) {
      const modal = document.getElementById('modal');
      const modalEventName = document.getElementById('modal-event-name');
      const form = document.getElementById('registration-form');
      const successMessage = document.getElementById('success-message');
      
      modalEventName.textContent = eventName;
      form.classList.remove('hidden');
      successMessage.classList.add('hidden');
      modal.classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    }
    
    function closeModal() {
      const modal = document.getElementById('modal');
      modal.classList.add('hidden');
      document.body.style.overflow = 'auto';
      document.getElementById('registration-form').reset();
    }
    
    function submitRegistration(e) {
      e.preventDefault();
      const form = document.getElementById('registration-form');
      const successMessage = document.getElementById('success-message');
      
      form.classList.add('hidden');
      successMessage.classList.remove('hidden');
      
      setTimeout(() => {
        closeModal();
      }, 2500);
    }
    
    async function onConfigChange(config) {
      const logoEl = document.getElementById('logo-text');
      const pageTitleEl = document.getElementById('page-title');
      const pageSubtitleEl = document.getElementById('page-subtitle');
      const searchInputEl = document.getElementById('search-input');
      const footerEmailEl = document.getElementById('footer-email');
      const footerCopyrightEl = document.getElementById('footer-copyright');
      
      if (logoEl) logoEl.textContent = config.logo_text || defaultConfig.logo_text;
      if (pageTitleEl) pageTitleEl.textContent = config.page_title || defaultConfig.page_title;
      if (pageSubtitleEl) pageSubtitleEl.textContent = config.page_subtitle || defaultConfig.page_subtitle;
      if (searchInputEl) searchInputEl.placeholder = config.search_placeholder || defaultConfig.search_placeholder;
      if (footerEmailEl) footerEmailEl.textContent = config.footer_email || defaultConfig.footer_email;
      if (footerCopyrightEl) footerCopyrightEl.textContent = config.footer_copyright || defaultConfig.footer_copyright;
      
      const fontFamily = config.font_family || defaultConfig.font_family;
      document.body.style.fontFamily = `${fontFamily}, Plus Jakarta Sans, sans-serif`;
      
      const baseSize = config.font_size || defaultConfig.font_size;
      if (pageTitleEl) pageTitleEl.style.fontSize = `${baseSize * 2.5}px`;
      if (pageSubtitleEl) pageSubtitleEl.style.fontSize = `${baseSize * 1.1}px`;
      
      const primaryColor = config.primary_color || defaultConfig.primary_color;
      const secondaryColor = config.secondary_color || defaultConfig.secondary_color;
      const textColor = config.text_color || defaultConfig.text_color;
      const mutedColor = config.muted_color || defaultConfig.muted_color;
      const bgColor = config.background_color || defaultConfig.background_color;
      
      const footer = document.querySelector('footer');
      if (footer) footer.style.backgroundColor = primaryColor;
      
      const primaryBtns = document.querySelectorAll('.btn-primary');
      primaryBtns.forEach(btn => btn.style.background = `linear-gradient(135deg, ${primaryColor} 0%, ${primaryColor}dd 100%)`);
      
      const filterBtns = document.querySelectorAll('.filter-btn.active');
      filterBtns.forEach(btn => btn.style.backgroundColor = primaryColor);
      
      if (logoEl) logoEl.style.color = primaryColor;
      
      const activeNav = document.querySelector('nav a.border-b-2');
      if (activeNav) {
        activeNav.style.color = primaryColor;
        activeNav.style.borderColor = primaryColor;
      }
      
      const mainWrapper = document.querySelector('.min-h-full');
      if (mainWrapper) mainWrapper.style.backgroundColor = bgColor;
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
        ['page_title', config.page_title || defaultConfig.page_title],
        ['page_subtitle', config.page_subtitle || defaultConfig.page_subtitle],
        ['search_placeholder', config.search_placeholder || defaultConfig.search_placeholder],
        ['footer_email', config.footer_email || defaultConfig.footer_email],
        ['footer_copyright', config.footer_copyright || defaultConfig.footer_copyright]
      ]);
    }
    
    // Initialize
    initFilters();
    
    if (window.elementSdk) {
      window.elementSdk.init({
        defaultConfig,
        onConfigChange,
        mapToCapabilities,
        mapToEditPanelValues
      });
    }
  </script>
 <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9b26827ac3a99bda',t:'MTc2NjQ3ODc2MC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>