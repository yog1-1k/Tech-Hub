<!doctype html>
<html lang="id" class="h-full">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyek - JTI Tech Hub</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&amp;family=DM+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <script src="/_sdk/element_sdk.js"></script>
  <style>
    body {
      box-sizing: border-box;
      font-family: 'DM Sans', sans-serif;
    }
    
    .hero-gradient {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
      position: relative;
      overflow: hidden;
    }
    
    .hero-gradient::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
    }
    
    .card-shadow {
      box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
    }
    
    .card-hover {
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .card-hover:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
    }
    
    .card-hover:hover .project-image {
      transform: scale(1.05);
    }
    
    .project-image {
      transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .btn-primary {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
    }
    
    .btn-outline {
      border: 2px solid #667eea;
      color: #667eea;
      transition: all 0.3s ease;
    }
    
    .btn-outline:hover {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border-color: transparent;
    }
    
    .filter-btn {
      transition: all 0.2s ease;
      position: relative;
      overflow: hidden;
    }
    
    .filter-btn.active {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
    }
    
    .filter-btn:not(.active):hover {
      background: #f3f0ff;
      color: #667eea;
    }
    
    .tech-tag {
      background: linear-gradient(135deg, #f3f0ff 0%, #ede9fe 100%);
      color: #667eea;
      font-size: 11px;
      font-weight: 600;
      padding: 4px 10px;
      border-radius: 6px;
    }
    
    .status-badge {
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }
    
    .status-completed {
      background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
      color: #047857;
    }
    
    .status-ongoing {
      background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
      color: #b45309;
    }
    
    .status-planning {
      background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
      color: #1d4ed8;
    }
    
    .search-input:focus {
      outline: none;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
      border-color: #667eea;
    }
    
    .modal-overlay {
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(8px);
    }
    
    .animate-fade-in {
      animation: fadeIn 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px) scale(0.95); }
      to { opacity: 1; transform: translateY(0) scale(1); }
    }
    
    .stat-card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .cta-gradient {
      background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
    }
    
    .team-avatar {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-size: 12px;
      color: white;
      border: 2px solid white;
      margin-left: -8px;
    }
    
    .team-avatar:first-child {
      margin-left: 0;
    }
    
    .gradient-text {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
  </style>
  <style>@view-transition { navigation: auto; }</style>
  <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
 </head>
 <body class="h-full bg-[#fafafa]">
  <div id="app-wrapper" class="w-full h-full overflow-auto">
   <div class="w-full min-h-full"><!-- Header -->
    <header class="h-[70px] px-8 lg:px-16 flex items-center justify-between bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50">
     <div id="logo-text" class="gradient-text font-bold text-[22px] tracking-wide" style="font-family: 'Space Grotesk', sans-serif;">
      JTI TECH HUB
     </div>
     <nav class="hidden md:flex items-center gap-8"><a href="#" class="text-[#64748b] text-[15px] font-medium hover:text-[#667eea] transition-colors">Beranda</a> <a href="#" class="text-[#64748b] text-[15px] font-medium hover:text-[#667eea] transition-colors">Acara</a> <a href="#" class="text-[#667eea] text-[15px] font-semibold border-b-2 border-[#667eea] pb-1">Proyek</a> <a href="#" class="text-[#64748b] text-[15px] font-medium hover:text-[#667eea] transition-colors">Tentang</a> <button class="btn-primary text-white text-[14px] font-semibold px-5 py-2.5 rounded-xl">Gabung</button>
     </nav><button class="menu-icon p-1 cursor-pointer md:hidden" aria-label="Menu">
      <svg width="28" height="28" viewbox="0 0 24 24" fill="none" stroke="#667eea" stroke-width="2.5" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6" /> <line x1="3" y1="12" x2="21" y2="12" /> <line x1="3" y1="18" x2="21" y2="18" />
      </svg></button>
    </header><!-- Hero Section -->
    <section class="hero-gradient px-8 lg:px-16 py-16 lg:py-24 relative">
     <div class="max-w-6xl mx-auto relative z-10">
      <div class="text-center mb-12">
       <h1 id="page-title" class="text-white font-extrabold text-[40px] md:text-[56px] mb-4" style="font-family: 'Space Grotesk', sans-serif;">Proyek Mahasiswa</h1>
       <p id="page-subtitle" class="text-white/85 text-[17px] md:text-[19px] max-w-2xl mx-auto leading-relaxed">Jelajahi karya-karya inovatif dari mahasiswa JTI. Dari aplikasi mobile hingga sistem AI canggih.</p>
      </div><!-- Stats -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl mx-auto">
       <div class="stat-card rounded-2xl p-5 text-center">
        <div class="text-white font-bold text-[32px]" style="font-family: 'Space Grotesk', sans-serif;">
         48+
        </div>
        <div class="text-white/70 text-[13px] font-medium">
         Total Proyek
        </div>
       </div>
       <div class="stat-card rounded-2xl p-5 text-center">
        <div class="text-white font-bold text-[32px]" style="font-family: 'Space Grotesk', sans-serif;">
         156
        </div>
        <div class="text-white/70 text-[13px] font-medium">
         Kontributor
        </div>
       </div>
       <div class="stat-card rounded-2xl p-5 text-center">
        <div class="text-white font-bold text-[32px]" style="font-family: 'Space Grotesk', sans-serif;">
         12
        </div>
        <div class="text-white/70 text-[13px] font-medium">
         Proyek Aktif
        </div>
       </div>
       <div class="stat-card rounded-2xl p-5 text-center">
        <div class="text-white font-bold text-[32px]" style="font-family: 'Space Grotesk', sans-serif;">
         8
        </div>
        <div class="text-white/70 text-[13px] font-medium">
         Penghargaan
        </div>
       </div>
      </div>
     </div>
    </section><!-- Search & Filter Section -->
    <section class="px-8 lg:px-16 py-8 bg-white border-b border-gray-100">
     <div class="max-w-6xl mx-auto"><!-- Search Bar -->
      <div class="flex flex-col md:flex-row gap-4 mb-6">
       <div class="flex-1 relative">
        <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg><input type="text" id="search-input" placeholder="Cari proyek..." class="search-input w-full pl-12 pr-4 py-3.5 border border-gray-200 rounded-xl text-[15px]">
       </div><select id="status-filter" class="px-4 py-3.5 border border-gray-200 rounded-xl text-[15px] text-gray-600 bg-white cursor-pointer"> <option value="">Semua Status</option> <option value="completed">Selesai</option> <option value="ongoing">Sedang Berjalan</option> <option value="planning">Perencanaan</option> </select>
      </div><!-- Category Filter -->
      <div class="flex flex-wrap gap-3" id="filter-container"><button class="filter-btn active px-5 py-2.5 rounded-full text-[14px] font-medium bg-gray-100" data-filter="all">Semua</button> <button class="filter-btn px-5 py-2.5 rounded-full text-[14px] font-medium bg-gray-100 text-gray-600" data-filter="web">Web App</button> <button class="filter-btn px-5 py-2.5 rounded-full text-[14px] font-medium bg-gray-100 text-gray-600" data-filter="mobile">Mobile</button> <button class="filter-btn px-5 py-2.5 rounded-full text-[14px] font-medium bg-gray-100 text-gray-600" data-filter="ai">AI / ML</button> <button class="filter-btn px-5 py-2.5 rounded-full text-[14px] font-medium bg-gray-100 text-gray-600" data-filter="iot">IoT</button> <button class="filter-btn px-5 py-2.5 rounded-full text-[14px] font-medium bg-gray-100 text-gray-600" data-filter="game">Game</button>
      </div>
     </div>
    </section><!-- Projects Grid -->
    <main class="px-8 lg:px-16 py-12">
     <div class="max-w-6xl mx-auto">
      <div class="flex items-center justify-between mb-8">
       <p id="results-count" class="text-gray-600 text-[15px]">Menampilkan <span class="font-semibold text-[#1e293b]">8</span> proyek</p><select id="sort-filter" class="px-4 py-2 border border-gray-200 rounded-lg text-[14px] text-gray-600 bg-white cursor-pointer"> <option value="newest">Terbaru</option> <option value="popular">Terpopuler</option> <option value="name">Nama A-Z</option> </select>
      </div>
      <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6"><!-- Project Card 1 -->
       <article class="project-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="web" data-status="completed">
        <div class="h-[180px] bg-gradient-to-br from-[#667eea] to-[#764ba2] flex items-center justify-center relative overflow-hidden"><span class="absolute top-3 right-3 status-badge status-completed px-3 py-1 rounded-full">Selesai</span>
         <div class="project-image">
          <svg width="80" height="80" viewbox="0 0 80 80" fill="none"><rect x="10" y="15" width="60" height="45" rx="4" fill="rgba(255,255,255,0.95)" /> <rect x="10" y="15" width="60" height="10" rx="4" fill="#667eea" /> <circle cx="18" cy="20" r="2" fill="#ff6b6b" /> <circle cx="25" cy="20" r="2" fill="#feca57" /> <circle cx="32" cy="20" r="2" fill="#48dbfb" /> <rect x="15" y="30" width="20" height="25" rx="2" fill="#f0f0f0" /> <rect x="40" y="30" width="25" height="10" rx="2" fill="#667eea" fill-opacity="0.2" /> <rect x="40" y="45" width="18" height="10" rx="2" fill="#764ba2" fill-opacity="0.2" /> <rect x="25" y="65" width="30" height="5" rx="1" fill="#e0e0e0" />
          </svg>
         </div>
        </div>
        <div class="p-5">
         <div class="flex items-center gap-2 mb-3"><span class="tech-tag">React</span> <span class="tech-tag">Node.js</span>
         </div>
         <h3 class="text-[#1e293b] text-[17px] font-bold mb-2 line-clamp-2">Smart Campus Portal</h3>
         <p class="text-[#64748b] text-[13px] mb-4 line-clamp-2">Sistem informasi kampus terintegrasi untuk mahasiswa dan dosen dengan fitur real-time.</p>
         <div class="flex items-center justify-between">
          <div class="flex items-center">
           <div class="team-avatar" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            A
           </div>
           <div class="team-avatar" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
            B
           </div>
           <div class="team-avatar" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
            C
           </div><span class="text-[12px] text-[#64748b] ml-2">+2</span>
          </div><button class="text-[#667eea] text-[13px] font-semibold hover:underline" onclick="openProjectModal(0)">Detail →</button>
         </div>
        </div>
       </article><!-- Project Card 2 -->
       <article class="project-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="mobile" data-status="ongoing">
        <div class="h-[180px] bg-gradient-to-br from-[#11998e] to-[#38ef7d] flex items-center justify-center relative overflow-hidden"><span class="absolute top-3 right-3 status-badge status-ongoing px-3 py-1 rounded-full">Berjalan</span>
         <div class="project-image">
          <svg width="80" height="80" viewbox="0 0 80 80" fill="none"><rect x="22" y="8" width="36" height="64" rx="6" fill="rgba(255,255,255,0.95)" /> <rect x="25" y="16" width="30" height="44" rx="2" fill="#f5f5f5" /> <circle cx="40" cy="66" r="3" fill="#11998e" /> <rect x="35" y="11" width="10" height="2" rx="1" fill="#e0e0e0" /> <rect x="28" y="20" width="24" height="12" rx="2" fill="#38ef7d" fill-opacity="0.3" /> <rect x="28" y="35" width="10" height="10" rx="2" fill="#11998e" fill-opacity="0.4" /> <rect x="42" y="35" width="10" height="10" rx="2" fill="#38ef7d" fill-opacity="0.4" /> <rect x="28" y="48" width="24" height="8" rx="2" fill="#e8e8e8" />
          </svg>
         </div>
        </div>
        <div class="p-5">
         <div class="flex items-center gap-2 mb-3"><span class="tech-tag">Flutter</span> <span class="tech-tag">Firebase</span>
         </div>
         <h3 class="text-[#1e293b] text-[17px] font-bold mb-2 line-clamp-2">JTI Health App</h3>
         <p class="text-[#64748b] text-[13px] mb-4 line-clamp-2">Aplikasi kesehatan untuk tracking aktivitas dan konsultasi online dengan dokter kampus.</p>
         <div class="flex items-center justify-between">
          <div class="flex items-center">
           <div class="team-avatar" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
            D
           </div>
           <div class="team-avatar" style="background: linear-gradient(135deg, #fc4a1a 0%, #f7b733 100%);">
            E
           </div><span class="text-[12px] text-[#64748b] ml-2">+1</span>
          </div><button class="text-[#667eea] text-[13px] font-semibold hover:underline" onclick="openProjectModal(1)">Detail →</button>
         </div>
        </div>
       </article><!-- Project Card 3 -->
       <article class="project-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="ai" data-status="completed">
        <div class="h-[180px] bg-gradient-to-br from-[#0f2027] via-[#203a43] to-[#2c5364] flex items-center justify-center relative overflow-hidden"><span class="absolute top-3 right-3 status-badge status-completed px-3 py-1 rounded-full">Selesai</span>
         <div class="project-image">
          <svg width="80" height="80" viewbox="0 0 80 80" fill="none"><circle cx="40" cy="40" r="25" fill="rgba(255,255,255,0.1)" stroke="rgba(255,255,255,0.3)" stroke-width="2" /> <circle cx="40" cy="40" r="15" fill="rgba(255,255,255,0.15)" /> <circle cx="40" cy="40" r="6" fill="#4facfe" /> <circle cx="25" cy="30" r="4" fill="#00f2fe" /> <circle cx="55" cy="30" r="4" fill="#00f2fe" /> <circle cx="25" cy="50" r="4" fill="#4facfe" /> <circle cx="55" cy="50" r="4" fill="#4facfe" /> <line x1="40" y1="40" x2="25" y2="30" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" /> <line x1="40" y1="40" x2="55" y2="30" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" /> <line x1="40" y1="40" x2="25" y2="50" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" /> <line x1="40" y1="40" x2="55" y2="50" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" />
          </svg>
         </div>
        </div>
        <div class="p-5">
         <div class="flex items-center gap-2 mb-3"><span class="tech-tag">Python</span> <span class="tech-tag">TensorFlow</span>
         </div>
         <h3 class="text-[#1e293b] text-[17px] font-bold mb-2 line-clamp-2">AI Attendance System</h3>
         <p class="text-[#64748b] text-[13px] mb-4 line-clamp-2">Sistem absensi berbasis face recognition dengan akurasi 99.2% untuk perkuliahan.</p>
         <div class="flex items-center justify-between">
          <div class="flex items-center">
           <div class="team-avatar" style="background: linear-gradient(135deg, #0f2027 0%, #2c5364 100%);">
            F
           </div>
           <div class="team-avatar" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
            G
           </div>
           <div class="team-avatar" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            H
           </div>
          </div><button class="text-[#667eea] text-[13px] font-semibold hover:underline" onclick="openProjectModal(2)">Detail →</button>
         </div>
        </div>
       </article><!-- Project Card 4 -->
       <article class="project-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="iot" data-status="ongoing">
        <div class="h-[180px] bg-gradient-to-br from-[#f093fb] to-[#f5576c] flex items-center justify-center relative overflow-hidden"><span class="absolute top-3 right-3 status-badge status-ongoing px-3 py-1 rounded-full">Berjalan</span>
         <div class="project-image">
          <svg width="80" height="80" viewbox="0 0 80 80" fill="none"><rect x="15" y="25" width="50" height="35" rx="4" fill="rgba(255,255,255,0.95)" /> <rect x="20" y="30" width="18" height="12" rx="2" fill="#f5576c" fill-opacity="0.3" /> <rect x="42" y="30" width="18" height="12" rx="2" fill="#f093fb" fill-opacity="0.3" /> <rect x="20" y="46" width="40" height="8" rx="2" fill="#f0f0f0" /> <circle cx="55" cy="50" r="2" fill="#4ade80" /> <rect x="35" y="60" width="10" height="8" fill="#e0e0e0" /> <rect x="30" y="68" width="20" height="4" rx="1" fill="#c0c0c0" /> <path d="M40 10 L40 20 M32 14 L40 20 L48 14" stroke="rgba(255,255,255,0.8)" stroke-width="2" fill="none" />
          </svg>
         </div>
        </div>
        <div class="p-5">
         <div class="flex items-center gap-2 mb-3"><span class="tech-tag">Arduino</span> <span class="tech-tag">ESP32</span>
         </div>
         <h3 class="text-[#1e293b] text-[17px] font-bold mb-2 line-clamp-2">Smart Classroom IoT</h3>
         <p class="text-[#64748b] text-[13px] mb-4 line-clamp-2">Sistem otomatisasi kelas pintar dengan kontrol AC, lampu, dan monitoring suhu real-time.</p>
         <div class="flex items-center justify-between">
          <div class="flex items-center">
           <div class="team-avatar" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
            I
           </div>
           <div class="team-avatar" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%); color: #333;">
            J
           </div>
          </div><button class="text-[#667eea] text-[13px] font-semibold hover:underline" onclick="openProjectModal(3)">Detail →</button>
         </div>
        </div>
       </article><!-- Project Card 5 -->
       <article class="project-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="game" data-status="completed">
        <div class="h-[180px] bg-gradient-to-br from-[#ff6b6b] to-[#feca57] flex items-center justify-center relative overflow-hidden"><span class="absolute top-3 right-3 status-badge status-completed px-3 py-1 rounded-full">Selesai</span>
         <div class="project-image">
          <svg width="80" height="80" viewbox="0 0 80 80" fill="none"><rect x="12" y="22" width="56" height="36" rx="8" fill="rgba(255,255,255,0.95)" /> <circle cx="28" cy="40" r="8" fill="#ff6b6b" fill-opacity="0.3" /> <circle cx="28" cy="40" r="4" fill="#ff6b6b" /> <circle cx="52" cy="36" r="4" fill="#feca57" /> <circle cx="60" cy="40" r="4" fill="#48dbfb" /> <circle cx="52" cy="44" r="4" fill="#ff6b6b" /> <circle cx="44" cy="40" r="4" fill="#4ade80" /> <rect x="32" y="58" width="16" height="6" rx="2" fill="#e0e0e0" />
          </svg>
         </div>
        </div>
        <div class="p-5">
         <div class="flex items-center gap-2 mb-3"><span class="tech-tag">Unity</span> <span class="tech-tag">C#</span>
         </div>
         <h3 class="text-[#1e293b] text-[17px] font-bold mb-2 line-clamp-2">JTI Quest Adventure</h3>
         <p class="text-[#64748b] text-[13px] mb-4 line-clamp-2">Game edukasi berbasis petualangan untuk mengenalkan kampus JTI kepada mahasiswa baru.</p>
         <div class="flex items-center justify-between">
          <div class="flex items-center">
           <div class="team-avatar" style="background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%);">
            K
           </div>
           <div class="team-avatar" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); color: #333;">
            L
           </div>
           <div class="team-avatar" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            M
           </div><span class="text-[12px] text-[#64748b] ml-2">+1</span>
          </div><button class="text-[#667eea] text-[13px] font-semibold hover:underline" onclick="openProjectModal(4)">Detail →</button>
         </div>
        </div>
       </article><!-- Project Card 6 -->
       <article class="project-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="web" data-status="planning">
        <div class="h-[180px] bg-gradient-to-br from-[#4facfe] to-[#00f2fe] flex items-center justify-center relative overflow-hidden"><span class="absolute top-3 right-3 status-badge status-planning px-3 py-1 rounded-full">Perencanaan</span>
         <div class="project-image">
          <svg width="80" height="80" viewbox="0 0 80 80" fill="none"><rect x="10" y="20" width="60" height="40" rx="4" fill="rgba(255,255,255,0.95)" /> <rect x="15" y="26" width="25" height="28" rx="2" fill="#f5f5f5" /> <rect x="18" y="30" width="19" height="3" rx="1" fill="#4facfe" /> <rect x="18" y="36" width="15" height="2" rx="0.5" fill="#e0e0e0" /> <rect x="18" y="41" width="17" height="2" rx="0.5" fill="#e0e0e0" /> <rect x="18" y="46" width="12" height="2" rx="0.5" fill="#e0e0e0" /> <rect x="45" y="26" width="20" height="28" rx="2" fill="#00f2fe" fill-opacity="0.2" /> <circle cx="55" cy="36" r="6" fill="#4facfe" fill-opacity="0.5" /> <rect x="48" y="46" width="14" height="4" rx="1" fill="#4facfe" />
          </svg>
         </div>
        </div>
        <div class="p-5">
         <div class="flex items-center gap-2 mb-3"><span class="tech-tag">Next.js</span> <span class="tech-tag">PostgreSQL</span>
         </div>
         <h3 class="text-[#1e293b] text-[17px] font-bold mb-2 line-clamp-2">E-Library 2.0</h3>
         <p class="text-[#64748b] text-[13px] mb-4 line-clamp-2">Sistem perpustakaan digital dengan fitur AI recommendation dan reading analytics.</p>
         <div class="flex items-center justify-between">
          <div class="flex items-center">
           <div class="team-avatar" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
            N
           </div>
           <div class="team-avatar" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            O
           </div>
          </div><button class="text-[#667eea] text-[13px] font-semibold hover:underline" onclick="openProjectModal(5)">Detail →</button>
         </div>
        </div>
       </article><!-- Project Card 7 -->
       <article class="project-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="ai" data-status="ongoing">
        <div class="h-[180px] bg-gradient-to-br from-[#a8edea] to-[#fed6e3] flex items-center justify-center relative overflow-hidden"><span class="absolute top-3 right-3 status-badge status-ongoing px-3 py-1 rounded-full">Berjalan</span>
         <div class="project-image">
          <svg width="80" height="80" viewbox="0 0 80 80" fill="none"><rect x="15" y="15" width="50" height="50" rx="8" fill="rgba(255,255,255,0.95)" /> <rect x="22" y="22" width="36" height="24" rx="3" fill="#fed6e3" /> <path d="M30 32 Q40 26 50 32 Q40 38 30 32" fill="#a8edea" /> <circle cx="35" cy="32" r="2" fill="#333" /> <circle cx="45" cy="32" r="2" fill="#333" /> <path d="M36 38 Q40 42 44 38" stroke="#333" stroke-width="1.5" fill="none" /> <rect x="22" y="50" width="36" height="8" rx="2" fill="#f0f0f0" /> <rect x="25" y="53" width="8" height="2" rx="1" fill="#a8edea" />
          </svg>
         </div>
        </div>
        <div class="p-5">
         <div class="flex items-center gap-2 mb-3"><span class="tech-tag">Python</span> <span class="tech-tag">OpenAI</span>
         </div>
         <h3 class="text-[#1e293b] text-[17px] font-bold mb-2 line-clamp-2">JTI ChatBot Assistant</h3>
         <p class="text-[#64748b] text-[13px] mb-4 line-clamp-2">Asisten virtual berbasis AI untuk menjawab pertanyaan seputar akademik dan kampus.</p>
         <div class="flex items-center justify-between">
          <div class="flex items-center">
           <div class="team-avatar" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); color: #333;">
            P
           </div>
           <div class="team-avatar" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            Q
           </div>
           <div class="team-avatar" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
            R
           </div>
          </div><button class="text-[#667eea] text-[13px] font-semibold hover:underline" onclick="openProjectModal(6)">Detail →</button>
         </div>
        </div>
       </article><!-- Project Card 8 -->
       <article class="project-card bg-white rounded-2xl overflow-hidden card-shadow card-hover" data-category="mobile" data-status="completed">
        <div class="h-[180px] bg-gradient-to-br from-[#ee0979] to-[#ff6a00] flex items-center justify-center relative overflow-hidden"><span class="absolute top-3 right-3 status-badge status-completed px-3 py-1 rounded-full">Selesai</span>
         <div class="project-image">
          <svg width="80" height="80" viewbox="0 0 80 80" fill="none"><rect x="22" y="8" width="36" height="64" rx="6" fill="rgba(255,255,255,0.95)" /> <rect x="25" y="16" width="30" height="44" rx="2" fill="#f5f5f5" /> <circle cx="40" cy="66" r="3" fill="#ee0979" /> <rect x="35" y="11" width="10" height="2" rx="1" fill="#e0e0e0" /> <circle cx="40" cy="32" r="10" fill="#ff6a00" fill-opacity="0.2" /> <path d="M35 32 L40 27 L45 32 L40 37 Z" fill="#ee0979" /> <rect x="28" y="46" width="24" height="3" rx="1" fill="#e8e8e8" /> <rect x="28" y="52" width="18" height="3" rx="1" fill="#e8e8e8" />
          </svg>
         </div>
        </div>
        <div class="p-5">
         <div class="flex items-center gap-2 mb-3"><span class="tech-tag">Kotlin</span> <span class="tech-tag">Maps API</span>
         </div>
         <h3 class="text-[#1e293b] text-[17px] font-bold mb-2 line-clamp-2">Campus Navigator</h3>
         <p class="text-[#64748b] text-[13px] mb-4 line-clamp-2">Aplikasi navigasi indoor untuk membantu menemukan ruangan di kampus dengan AR guide.</p>
         <div class="flex items-center justify-between">
          <div class="flex items-center">
           <div class="team-avatar" style="background: linear-gradient(135deg, #ee0979 0%, #ff6a00 100%);">
            S
           </div>
           <div class="team-avatar" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
            T
           </div>
          </div><button class="text-[#667eea] text-[13px] font-semibold hover:underline" onclick="openProjectModal(7)">Detail →</button>
         </div>
        </div>
       </article>
      </div><!-- Empty State -->
      <div id="empty-state" class="hidden text-center py-16">
       <svg class="w-24 h-24 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
       </svg>
       <h3 class="text-[#1e293b] text-[18px] font-semibold mb-2">Tidak ada proyek ditemukan</h3>
       <p class="text-gray-500 text-[14px]">Coba ubah filter atau kata kunci pencarian</p>
      </div>
     </div>
    </main><!-- CTA Section -->
    <section class="cta-gradient px-8 lg:px-16 py-16 lg:py-20">
     <div class="max-w-4xl mx-auto text-center">
      <h2 id="cta-title" class="text-white font-bold text-[32px] md:text-[40px] mb-4" style="font-family: 'Space Grotesk', sans-serif;">Punya Ide Proyek?</h2>
      <p id="cta-description" class="text-white/80 text-[16px] md:text-[18px] mb-8 max-w-2xl mx-auto">Ajukan proyekmu dan dapatkan dukungan dari komunitas JTI Tech Hub. Kami siap membantu mewujudkan idemu!</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center"><button class="btn-primary text-white text-[15px] font-semibold px-8 py-3.5 rounded-xl">Ajukan Proyek</button> <button class="bg-white/10 border border-white/30 text-white text-[15px] font-semibold px-8 py-3.5 rounded-xl hover:bg-white/20 transition-colors">Pelajari Lebih Lanjut</button>
      </div>
     </div>
    </section><!-- Project Detail Modal -->
    <div id="modal" class="fixed inset-0 z-50 hidden">
     <div class="modal-overlay absolute inset-0" onclick="closeModal()"></div>
     <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-lg bg-white rounded-2xl overflow-hidden animate-fade-in max-h-[90%] overflow-y-auto">
      <div id="modal-header" class="h-[200px] bg-gradient-to-br from-[#667eea] to-[#764ba2] flex items-center justify-center relative"><button onclick="closeModal()" class="absolute top-4 right-4 bg-white/20 hover:bg-white/30 p-2 rounded-full transition-colors">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg></button>
       <div id="modal-icon"></div>
      </div>
      <div class="p-6">
       <div class="flex items-center gap-2 mb-3" id="modal-tags"></div>
       <h3 id="modal-title" class="text-[#1e293b] text-[22px] font-bold mb-3"></h3>
       <p id="modal-description" class="text-[#64748b] text-[14px] mb-6 leading-relaxed"></p>
       <div class="mb-6">
        <h4 class="text-[#1e293b] text-[14px] font-semibold mb-3">Tim Pengembang</h4>
        <div id="modal-team" class="flex flex-wrap gap-3"></div>
       </div>
       <div class="mb-6">
        <h4 class="text-[#1e293b] text-[14px] font-semibold mb-3">Teknologi</h4>
        <div id="modal-tech" class="flex flex-wrap gap-2"></div>
       </div>
       <div class="flex gap-3"><button class="btn-primary flex-1 text-white text-[14px] font-semibold py-3 rounded-xl">Lihat Demo</button> <button class="btn-outline flex-1 text-[14px] font-semibold py-3 rounded-xl">GitHub</button>
       </div>
      </div>
     </div>
    </div><!-- Footer -->
    <footer class="px-8 lg:px-16 py-10 lg:py-12 bg-gradient-to-br from-[#667eea] to-[#764ba2]">
     <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
       <div class="md:col-span-1">
        <h3 class="text-white font-bold text-[20px] mb-4" style="font-family: 'Space Grotesk', sans-serif;">JTI Tech Hub</h3>
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
        <div class="flex gap-3"><a href="#" class="bg-white/20 p-2 rounded-lg hover:bg-white/30 transition-colors" aria-label="Instagram">
          <svg width="20" height="20" viewbox="0 0 24 24" fill="white"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg></a> <a href="#" class="bg-white/20 p-2 rounded-lg hover:bg-white/30 transition-colors" aria-label="GitHub">
          <svg width="20" height="20" viewbox="0 0 24 24" fill="white"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
          </svg></a> <a href="#" class="bg-white/20 p-2 rounded-lg hover:bg-white/30 transition-colors" aria-label="LinkedIn">
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
      page_title: 'Proyek Mahasiswa',
      page_subtitle: 'Jelajahi karya-karya inovatif dari mahasiswa JTI. Dari aplikasi mobile hingga sistem AI canggih.',
      search_placeholder: 'Cari proyek...',
      cta_title: 'Punya Ide Proyek?',
      cta_description: 'Ajukan proyekmu dan dapatkan dukungan dari komunitas JTI Tech Hub. Kami siap membantu mewujudkan idemu!',
      footer_email: 'hub.jtitech@gmail.com',
      footer_copyright: '© 2026 JTI Tech Hub - Semua Hak Dilindungi',
      primary_color: '#667eea',
      secondary_color: '#764ba2',
      background_color: '#fafafa',
      text_color: '#1e293b',
      muted_color: '#64748b',
      font_family: 'DM Sans',
      font_size: 14
    };
    
    // Project data for modal
    const projects = [
      {
        title: 'Smart Campus Portal',
        description: 'Sistem informasi kampus terintegrasi yang memungkinkan mahasiswa dan dosen mengakses berbagai layanan akademik secara real-time. Fitur meliputi jadwal kuliah, nilai, pengumuman, dan forum diskusi.',
        tags: ['Web App'],
        tech: ['React', 'Node.js', 'MongoDB', 'Socket.io'],
        team: [
          { name: 'Ahmad Fadli', role: 'Frontend', color: '#667eea' },
          { name: 'Bella Sari', role: 'Backend', color: '#f093fb' },
          { name: 'Chandra Wijaya', role: 'UI/UX', color: '#4facfe' }
        ],
        gradient: 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)'
      },
      {
        title: 'JTI Health App',
        description: 'Aplikasi kesehatan komprehensif untuk komunitas kampus. Tracking aktivitas harian, konsultasi online dengan dokter kampus, reminder minum obat, dan integrasi dengan wearable devices.',
        tags: ['Mobile'],
        tech: ['Flutter', 'Firebase', 'Google Fit API'],
        team: [
          { name: 'Dimas Pratama', role: 'Mobile Dev', color: '#11998e' },
          { name: 'Eka Putri', role: 'Backend', color: '#fc4a1a' }
        ],
        gradient: 'linear-gradient(135deg, #11998e 0%, #38ef7d 100%)'
      },
      {
        title: 'AI Attendance System',
        description: 'Sistem absensi otomatis menggunakan teknologi face recognition dengan akurasi 99.2%. Mampu mendeteksi wajah dalam berbagai kondisi pencahayaan dan sudut pandang.',
        tags: ['AI / ML'],
        tech: ['Python', 'TensorFlow', 'OpenCV', 'Flask'],
        team: [
          { name: 'Fahmi Hakim', role: 'ML Engineer', color: '#0f2027' },
          { name: 'Gita Rahmawati', role: 'Data Scientist', color: '#4facfe' },
          { name: 'Hendra Kusuma', role: 'Backend', color: '#667eea' }
        ],
        gradient: 'linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%)'
      },
      {
        title: 'Smart Classroom IoT',
        description: 'Sistem otomatisasi kelas pintar yang mengontrol AC, lampu, proyektor, dan kipas secara otomatis berdasarkan kehadiran dan preferensi pengguna. Monitoring energi real-time.',
        tags: ['IoT'],
        tech: ['Arduino', 'ESP32', 'MQTT', 'React Dashboard'],
        team: [
          { name: 'Irfan Maulana', role: 'IoT Engineer', color: '#f093fb' },
          { name: 'Julia Andini', role: 'Frontend', color: '#ffecd2' }
        ],
        gradient: 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)'
      },
      {
        title: 'JTI Quest Adventure',
        description: 'Game edukasi 3D berbasis petualangan untuk mengenalkan kampus JTI kepada mahasiswa baru. Fitur mini-games, quiz interaktif, dan virtual tour gedung kampus.',
        tags: ['Game'],
        tech: ['Unity', 'C#', 'Blender', 'Firebase'],
        team: [
          { name: 'Kevin Hartono', role: 'Game Dev', color: '#ff6b6b' },
          { name: 'Lina Susanti', role: '3D Artist', color: '#a8edea' },
          { name: 'Mario Gunawan', role: 'Sound Design', color: '#667eea' }
        ],
        gradient: 'linear-gradient(135deg, #ff6b6b 0%, #feca57 100%)'
      },
      {
        title: 'E-Library 2.0',
        description: 'Sistem perpustakaan digital next-gen dengan AI recommendation engine, reading analytics, social reading features, dan integrasi dengan database jurnal internasional.',
        tags: ['Web App'],
        tech: ['Next.js', 'PostgreSQL', 'Redis', 'OpenAI API'],
        team: [
          { name: 'Nadia Permata', role: 'Fullstack', color: '#4facfe' },
          { name: 'Oscar Firmansyah', role: 'AI Engineer', color: '#667eea' }
        ],
        gradient: 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)'
      },
      {
        title: 'JTI ChatBot Assistant',
        description: 'Asisten virtual berbasis Large Language Model yang mampu menjawab pertanyaan seputar akademik, jadwal, prosedur administrasi, dan informasi kampus 24/7.',
        tags: ['AI / ML'],
        tech: ['Python', 'OpenAI API', 'LangChain', 'FastAPI'],
        team: [
          { name: 'Putri Handayani', role: 'AI Engineer', color: '#a8edea' },
          { name: 'Qomarudin', role: 'Backend', color: '#667eea' },
          { name: 'Rina Marlina', role: 'NLP Specialist', color: '#f093fb' }
        ],
        gradient: 'linear-gradient(135deg, #a8edea 0%, #fed6e3 100%)'
      },
      {
        title: 'Campus Navigator',
        description: 'Aplikasi navigasi indoor menggunakan Augmented Reality untuk membantu menemukan ruangan, lab, dan fasilitas di kampus. Termasuk fitur voice guidance.',
        tags: ['Mobile'],
        tech: ['Kotlin', 'ARCore', 'Maps API', 'Room DB'],
        team: [
          { name: 'Satria Putra', role: 'Android Dev', color: '#ee0979' },
          { name: 'Tania Wijaya', role: 'AR Developer', color: '#11998e' }
        ],
        gradient: 'linear-gradient(135deg, #ee0979 0%, #ff6a00 100%)'
      }
    ];
    
    let activeFilter = 'all';
    let activeStatus = '';
    let searchQuery = '';
    
    // Filter functionality
    function initFilters() {
      const filterButtons = document.querySelectorAll('.filter-btn');
      const searchInput = document.getElementById('search-input');
      const statusFilter = document.getElementById('status-filter');
      
      filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          filterButtons.forEach(b => b.classList.remove('active'));
          btn.classList.add('active');
          activeFilter = btn.dataset.filter;
          filterProjects();
        });
      });
      
      searchInput.addEventListener('input', (e) => {
        searchQuery = e.target.value.toLowerCase();
        filterProjects();
      });
      
      statusFilter.addEventListener('change', (e) => {
        activeStatus = e.target.value;
        filterProjects();
      });
    }
    
    function filterProjects() {
      const cards = document.querySelectorAll('.project-card');
      let visibleCount = 0;
      
      cards.forEach(card => {
        const category = card.dataset.category;
        const status = card.dataset.status;
        const title = card.querySelector('h3').textContent.toLowerCase();
        const matchesFilter = activeFilter === 'all' || category === activeFilter;
        const matchesStatus = !activeStatus || status === activeStatus;
        const matchesSearch = title.includes(searchQuery);
        
        if (matchesFilter && matchesStatus && matchesSearch) {
          card.style.display = 'block';
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });
      
      document.getElementById('results-count').innerHTML = `Menampilkan <span class="font-semibold text-[#1e293b]">${visibleCount}</span> proyek`;
      document.getElementById('empty-state').classList.toggle('hidden', visibleCount > 0);
      document.getElementById('projects-grid').classList.toggle('hidden', visibleCount === 0);
    }
    
    // Modal functionality
    function openProjectModal(index) {
      const project = projects[index];
      const modal = document.getElementById('modal');
      
      document.getElementById('modal-header').style.background = project.gradient;
      document.getElementById('modal-title').textContent = project.title;
      document.getElementById('modal-description').textContent = project.description;
      
      // Tags
      const tagsContainer = document.getElementById('modal-tags');
      tagsContainer.innerHTML = project.tags.map(tag => 
        `<span class="tech-tag">${tag}</span>`
      ).join('');
      
      // Tech
      const techContainer = document.getElementById('modal-tech');
      techContainer.innerHTML = project.tech.map(tech => 
        `<span class="px-3 py-1.5 bg-gray-100 text-gray-700 text-[12px] font-medium rounded-lg">${tech}</span>`
      ).join('');
      
      // Team
      const teamContainer = document.getElementById('modal-team');
      teamContainer.innerHTML = project.team.map(member => 
        `<div class="flex items-center gap-2 bg-gray-50 px-3 py-2 rounded-lg">
          <div class="w-8 h-8 rounded-full flex items-center justify-center text-white text-[12px] font-semibold" style="background: ${member.color};">${member.name.charAt(0)}</div>
          <div>
            <div class="text-[13px] font-medium text-[#1e293b]">${member.name}</div>
            <div class="text-[11px] text-[#64748b]">${member.role}</div>
          </div>
        </div>`
      ).join('');
      
      modal.classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    }
    
    function closeModal() {
      document.getElementById('modal').classList.add('hidden');
      document.body.style.overflow = 'auto';
    }
    
    async function onConfigChange(config) {
      const logoEl = document.getElementById('logo-text');
      const pageTitleEl = document.getElementById('page-title');
      const pageSubtitleEl = document.getElementById('page-subtitle');
      const searchInputEl = document.getElementById('search-input');
      const ctaTitleEl = document.getElementById('cta-title');
      const ctaDescriptionEl = document.getElementById('cta-description');
      const footerEmailEl = document.getElementById('footer-email');
      const footerCopyrightEl = document.getElementById('footer-copyright');
      
      if (logoEl) logoEl.textContent = config.logo_text || defaultConfig.logo_text;
      if (pageTitleEl) pageTitleEl.textContent = config.page_title || defaultConfig.page_title;
      if (pageSubtitleEl) pageSubtitleEl.textContent = config.page_subtitle || defaultConfig.page_subtitle;
      if (searchInputEl) searchInputEl.placeholder = config.search_placeholder || defaultConfig.search_placeholder;
      if (ctaTitleEl) ctaTitleEl.textContent = config.cta_title || defaultConfig.cta_title;
      if (ctaDescriptionEl) ctaDescriptionEl.textContent = config.cta_description || defaultConfig.cta_description;
      if (footerEmailEl) footerEmailEl.textContent = config.footer_email || defaultConfig.footer_email;
      if (footerCopyrightEl) footerCopyrightEl.textContent = config.footer_copyright || defaultConfig.footer_copyright;
      
      const fontFamily = config.font_family || defaultConfig.font_family;
      document.body.style.fontFamily = `${fontFamily}, DM Sans, sans-serif`;
      
      const baseSize = config.font_size || defaultConfig.font_size;
      if (pageTitleEl) pageTitleEl.style.fontSize = `${baseSize * 3}px`;
      if (pageSubtitleEl) pageSubtitleEl.style.fontSize = `${baseSize * 1.2}px`;
      if (ctaTitleEl) ctaTitleEl.style.fontSize = `${baseSize * 2.2}px`;
      if (ctaDescriptionEl) ctaDescriptionEl.style.fontSize = `${baseSize * 1.1}px`;
      
      const primaryColor = config.primary_color || defaultConfig.primary_color;
      const secondaryColor = config.secondary_color || defaultConfig.secondary_color;
      const bgColor = config.background_color || defaultConfig.background_color;
      
      const mainWrapper = document.querySelector('.min-h-full');
      if (mainWrapper) mainWrapper.style.backgroundColor = bgColor;
      
      const primaryBtns = document.querySelectorAll('.btn-primary');
      primaryBtns.forEach(btn => btn.style.background = `linear-gradient(135deg, ${primaryColor} 0%, ${secondaryColor} 100%)`);
      
      const filterBtns = document.querySelectorAll('.filter-btn.active');
      filterBtns.forEach(btn => btn.style.background = `linear-gradient(135deg, ${primaryColor} 0%, ${secondaryColor} 100%)`);
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
        ['cta_title', config.cta_title || defaultConfig.cta_title],
        ['cta_description', config.cta_description || defaultConfig.cta_description],
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
 <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9b26a6b2f3a5f93f',t:'MTc2NjQ4MDI0NC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>