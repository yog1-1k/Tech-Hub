<!doctype html>
<html lang="id" class="h-full">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang - JTI Tech Hub</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <script src="/_sdk/element_sdk.js"></script>
  <style>
    body {
      box-sizing: border-box;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    
    .hero-section {
      background: linear-gradient(160deg, #1a1a2e 0%, #16213e 40%, #0f3460 70%, #1a1a2e 100%);
      position: relative;
      overflow: hidden;
    }
    
    .hero-section::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle at 30% 70%, rgba(102, 126, 234, 0.15) 0%, transparent 50%),
                  radial-gradient(circle at 70% 30%, rgba(240, 147, 251, 0.1) 0%, transparent 40%);
      animation: float 20s ease-in-out infinite;
    }
    
    @keyframes float {
      0%, 100% { transform: translate(0, 0) rotate(0deg); }
      33% { transform: translate(2%, 2%) rotate(1deg); }
      66% { transform: translate(-1%, 1%) rotate(-1deg); }
    }
    
    .grid-pattern {
      position: absolute;
      inset: 0;
      background-image: 
        linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
      background-size: 60px 60px;
    }
    
    .glow-orb {
      position: absolute;
      border-radius: 50%;
      filter: blur(80px);
      opacity: 0.4;
    }
    
    .gradient-text {
      background: linear-gradient(135deg, #667eea 0%, #f093fb 50%, #4facfe 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .card-glass {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }
    
    .value-card {
      background: white;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
    }
    
    .value-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #667eea 0%, #f093fb 100%);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s ease;
    }
    
    .value-card:hover::before {
      transform: scaleX(1);
    }
    
    .value-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 25px 50px rgba(102, 126, 234, 0.15);
    }
    
    .team-card {
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .team-card:hover {
      transform: translateY(-6px) scale(1.02);
    }
    
    .team-card:hover .team-avatar {
      transform: scale(1.1);
    }
    
    .team-avatar {
      transition: transform 0.4s ease;
    }
    
    .stat-item {
      position: relative;
    }
    
    .stat-item::after {
      content: '';
      position: absolute;
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      height: 60%;
      width: 1px;
      background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.2), transparent);
    }
    
    .stat-item:last-child::after {
      display: none;
    }
    
    .timeline-item {
      position: relative;
      padding-left: 32px;
    }
    
    .timeline-item::before {
      content: '';
      position: absolute;
      left: 0;
      top: 8px;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: linear-gradient(135deg, #667eea 0%, #f093fb 100%);
      box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.2);
    }
    
    .timeline-item::after {
      content: '';
      position: absolute;
      left: 5px;
      top: 24px;
      width: 2px;
      height: calc(100% - 8px);
      background: linear-gradient(to bottom, #667eea, #f093fb);
      opacity: 0.3;
    }
    
    .timeline-item:last-child::after {
      display: none;
    }
    
    .btn-primary {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }
    
    .btn-primary::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s ease;
    }
    
    .btn-primary:hover::before {
      left: 100%;
    }
    
    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
    }
    
    .feature-icon {
      background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(240, 147, 251, 0.1) 100%);
      transition: all 0.3s ease;
    }
    
    .value-card:hover .feature-icon {
      background: linear-gradient(135deg, #667eea 0%, #f093fb 100%);
      transform: scale(1.1) rotate(5deg);
    }
    
    .value-card:hover .feature-icon svg {
      stroke: white;
    }
    
    .partner-logo {
      filter: grayscale(100%);
      opacity: 0.5;
      transition: all 0.3s ease;
    }
    
    .partner-logo:hover {
      filter: grayscale(0%);
      opacity: 1;
    }
    
    .scroll-indicator {
      animation: bounce 2s infinite;
    }
    
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
      40% { transform: translateY(10px); }
      60% { transform: translateY(5px); }
    }
    
    .animate-fade-up {
      animation: fadeUp 0.8s ease forwards;
    }
    
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .section-divider {
      height: 2px;
      background: linear-gradient(90deg, transparent, #667eea, #f093fb, transparent);
      opacity: 0.3;
    }
  </style>
  <style>@view-transition { navigation: auto; }</style>
  <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
 </head>
 <body class="h-full bg-[#fafafa]">
  <div id="app-wrapper" class="w-full h-full overflow-auto">
   <div class="w-full min-h-full"><!-- Header -->
    <header class="h-[70px] px-8 lg:px-16 flex items-center justify-between bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50">
     <div id="logo-text" class="gradient-text font-extrabold text-[22px] tracking-wide" style="font-family: 'Outfit', sans-serif;">
      JTI TECH HUB
     </div>
     <nav class="hidden md:flex items-center gap-8"><a href="#" class="text-[#64748b] text-[15px] font-medium hover:text-[#667eea] transition-colors">Beranda</a> <a href="#" class="text-[#64748b] text-[15px] font-medium hover:text-[#667eea] transition-colors">Acara</a> <a href="#" class="text-[#64748b] text-[15px] font-medium hover:text-[#667eea] transition-colors">Proyek</a> <a href="#" class="text-[#667eea] text-[15px] font-semibold border-b-2 border-[#667eea] pb-1">Tentang</a> <button class="btn-primary text-white text-[14px] font-semibold px-5 py-2.5 rounded-xl">Gabung</button>
     </nav><button class="menu-icon p-1 cursor-pointer md:hidden" aria-label="Menu">
      <svg width="28" height="28" viewbox="0 0 24 24" fill="none" stroke="#667eea" stroke-width="2.5" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6" /> <line x1="3" y1="12" x2="21" y2="12" /> <line x1="3" y1="18" x2="21" y2="18" />
      </svg></button>
    </header><!-- Hero Section -->
    <section class="hero-section min-h-[600px] px-8 lg:px-16 py-20 lg:py-28 relative">
     <div class="grid-pattern"></div>
     <div class="glow-orb w-[400px] h-[400px] bg-[#667eea] top-[-100px] left-[-100px]"></div>
     <div class="glow-orb w-[300px] h-[300px] bg-[#f093fb] bottom-[-50px] right-[-50px]"></div>
     <div class="max-w-6xl mx-auto relative z-10">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
       <div class="animate-fade-up"><span class="inline-block px-4 py-2 bg-white/10 text-white/80 text-[13px] font-medium rounded-full mb-6 backdrop-blur-sm border border-white/10"> ✨ Komunitas Teknologi #1 di JTI </span>
        <h1 id="hero-title" class="text-white font-extrabold text-[44px] md:text-[58px] leading-tight mb-6" style="font-family: 'Outfit', sans-serif;">Tentang <span class="gradient-text">Kami</span></h1>
        <p id="hero-subtitle" class="text-white/75 text-[17px] md:text-[19px] leading-relaxed mb-8 max-w-lg">Mengenal lebih dekat komunitas teknologi terbesar di Jurusan Teknologi Informasi. Tempat di mana ide bertemu aksi.</p><!-- Stats -->
        <div class="card-glass rounded-2xl p-6 flex flex-wrap gap-6 md:gap-0 md:flex-nowrap">
         <div class="stat-item flex-1 text-center px-4">
          <div class="text-white font-bold text-[36px]" style="font-family: 'Outfit', sans-serif;">
           500+
          </div>
          <div class="text-white/60 text-[13px] font-medium">
           Anggota Aktif
          </div>
         </div>
         <div class="stat-item flex-1 text-center px-4">
          <div class="text-white font-bold text-[36px]" style="font-family: 'Outfit', sans-serif;">
           48
          </div>
          <div class="text-white/60 text-[13px] font-medium">
           Proyek Selesai
          </div>
         </div>
         <div class="stat-item flex-1 text-center px-4">
          <div class="text-white font-bold text-[36px]" style="font-family: 'Outfit', sans-serif;">
           5
          </div>
          <div class="text-white/60 text-[13px] font-medium">
           Tahun Berdiri
          </div>
         </div>
         <div class="stat-item flex-1 text-center px-4">
          <div class="text-white font-bold text-[36px]" style="font-family: 'Outfit', sans-serif;">
           12
          </div>
          <div class="text-white/60 text-[13px] font-medium">
           Penghargaan
          </div>
         </div>
        </div>
       </div>
       <div class="hidden lg:block relative">
        <div class="absolute inset-0 bg-gradient-to-br from-[#667eea]/20 to-[#f093fb]/20 rounded-3xl blur-3xl"></div>
        <div class="relative card-glass rounded-3xl p-8">
         <svg viewbox="0 0 400 350" class="w-full"><!-- Abstract tech illustration --> <defs>
           <lineargradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#667eea;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#f093fb;stop-opacity:1" />
           </lineargradient>
           <lineargradient id="grad2" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#4facfe;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#00f2fe;stop-opacity:1" />
           </lineargradient>
          </defs> <!-- Central hub --> <circle cx="200" cy="175" r="60" fill="url(#grad1)" opacity="0.9" /> <circle cx="200" cy="175" r="45" fill="#1a1a2e" /> <circle cx="200" cy="175" r="30" fill="url(#grad1)" opacity="0.6" /> <!-- Tech nodes --> <circle cx="80" cy="100" r="25" fill="url(#grad2)" opacity="0.8" /> <circle cx="320" cy="100" r="25" fill="url(#grad2)" opacity="0.8" /> <circle cx="80" cy="250" r="25" fill="url(#grad1)" opacity="0.8" /> <circle cx="320" cy="250" r="25" fill="url(#grad1)" opacity="0.8" /> <circle cx="200" cy="50" r="20" fill="url(#grad2)" opacity="0.7" /> <circle cx="200" cy="300" r="20" fill="url(#grad2)" opacity="0.7" /> <!-- Connections --> <line x1="105" y1="100" x2="155" y2="145" stroke="url(#grad1)" stroke-width="2" opacity="0.4" /> <line x1="295" y1="100" x2="245" y2="145" stroke="url(#grad1)" stroke-width="2" opacity="0.4" /> <line x1="105" y1="250" x2="155" y2="205" stroke="url(#grad2)" stroke-width="2" opacity="0.4" /> <line x1="295" y1="250" x2="245" y2="205" stroke="url(#grad2)" stroke-width="2" opacity="0.4" /> <line x1="200" y1="70" x2="200" y2="115" stroke="url(#grad2)" stroke-width="2" opacity="0.4" /> <line x1="200" y1="280" x2="200" y2="235" stroke="url(#grad2)" stroke-width="2" opacity="0.4" /> <!-- Icons in nodes --> <text x="200" y="182" text-anchor="middle" fill="white" font-size="28">
           🚀
          </text> <text x="80" y="107" text-anchor="middle" fill="white" font-size="16">
           💻
          </text> <text x="320" y="107" text-anchor="middle" fill="white" font-size="16">
           🎨
          </text> <text x="80" y="257" text-anchor="middle" fill="white" font-size="16">
           🤖
          </text> <text x="320" y="257" text-anchor="middle" fill="white" font-size="16">
           📱
          </text> <text x="200" y="57" text-anchor="middle" fill="white" font-size="14">
           ☁️
          </text> <text x="200" y="307" text-anchor="middle" fill="white" font-size="14">
           🔐
          </text>
         </svg>
        </div>
       </div>
      </div><!-- Scroll indicator -->
      <div class="scroll-indicator absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2"><span class="text-white/50 text-[12px]">Scroll untuk lebih</span>
       <svg width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.5)" stroke-width="2"><path d="M12 5v14M19 12l-7 7-7-7" />
       </svg>
      </div>
     </div>
    </section><!-- Mission & Vision -->
    <section class="px-8 lg:px-16 py-20 bg-white">
     <div class="max-w-6xl mx-auto">
      <div class="grid md:grid-cols-2 gap-8"><!-- Mission -->
       <div class="p-8 lg:p-10 rounded-3xl bg-gradient-to-br from-[#667eea] to-[#764ba2] text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full translate-y-1/2 -translate-x-1/2"></div>
        <div class="relative z-10">
         <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mb-6">
          <svg width="28" height="28" viewbox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2" />
          </svg>
         </div>
         <h2 id="mission-title" class="text-[28px] font-bold mb-4" style="font-family: 'Outfit', sans-serif;">Misi Kami</h2>
         <p class="text-white/90 text-[15px] leading-relaxed">Membangun ekosistem teknologi yang inklusif di mana setiap mahasiswa dapat belajar, berkembang, dan berkolaborasi. Kami berkomitmen untuk:</p>
         <ul class="mt-4 space-y-3">
          <li class="flex items-start gap-3">
           <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
           </svg><span class="text-[14px] text-white/85">Menyediakan platform pembelajaran praktis</span></li>
          <li class="flex items-start gap-3">
           <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
           </svg><span class="text-[14px] text-white/85">Memfasilitasi kolaborasi antar mahasiswa</span></li>
          <li class="flex items-start gap-3">
           <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
           </svg><span class="text-[14px] text-white/85">Menghubungkan talenta dengan industri</span></li>
         </ul>
        </div>
       </div><!-- Vision -->
       <div class="p-8 lg:p-10 rounded-3xl bg-gradient-to-br from-[#0f3460] to-[#1a1a2e] text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-40 h-40 bg-[#4facfe]/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-[#f093fb]/10 rounded-full translate-y-1/2 -translate-x-1/2"></div>
        <div class="relative z-10">
         <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mb-6">
          <svg width="28" height="28" viewbox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10" /> <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" /> <path d="M2 12h20" />
          </svg>
         </div>
         <h2 id="vision-title" class="text-[28px] font-bold mb-4" style="font-family: 'Outfit', sans-serif;">Visi Kami</h2>
         <p class="text-white/90 text-[15px] leading-relaxed mb-6">Menjadi komunitas teknologi mahasiswa terdepan yang menghasilkan inovator-inovator digital berkelas nasional dan global.</p>
         <div class="flex flex-wrap gap-3"><span class="px-4 py-2 bg-white/10 rounded-full text-[13px] font-medium">🎯 Inovasi</span> <span class="px-4 py-2 bg-white/10 rounded-full text-[13px] font-medium">🤝 Kolaborasi</span> <span class="px-4 py-2 bg-white/10 rounded-full text-[13px] font-medium">🌟 Ekselen</span> <span class="px-4 py-2 bg-white/10 rounded-full text-[13px] font-medium">💡 Kreativitas</span>
         </div>
        </div>
       </div>
      </div>
     </div>
    </section><!-- Our Values -->
    <section class="px-8 lg:px-16 py-20 bg-[#f8fafc]">
     <div class="max-w-6xl mx-auto">
      <div class="text-center mb-14"><span class="inline-block px-4 py-1.5 bg-[#667eea]/10 text-[#667eea] text-[13px] font-semibold rounded-full mb-4">NILAI-NILAI KAMI</span>
       <h2 class="text-[#1e293b] font-bold text-[32px] md:text-[40px] mb-4" style="font-family: 'Outfit', sans-serif;">Apa yang Kami Yakini</h2>
       <p class="text-[#64748b] text-[16px] max-w-2xl mx-auto">Nilai-nilai inti yang menjadi fondasi setiap aktivitas dan keputusan di JTI Tech Hub</p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6"><!-- Value 1 -->
       <div class="value-card rounded-2xl p-6 shadow-sm">
        <div class="feature-icon w-14 h-14 rounded-xl flex items-center justify-center mb-5">
         <svg width="26" height="26" viewbox="0 0 24 24" fill="none" stroke="#667eea" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
         </svg>
        </div>
        <h3 class="text-[#1e293b] text-[18px] font-bold mb-2">Pembelajaran Berkelanjutan</h3>
        <p class="text-[#64748b] text-[14px] leading-relaxed">Selalu haus akan pengetahuan baru dan tidak pernah berhenti belajar.</p>
       </div><!-- Value 2 -->
       <div class="value-card rounded-2xl p-6 shadow-sm">
        <div class="feature-icon w-14 h-14 rounded-xl flex items-center justify-center mb-5">
         <svg width="26" height="26" viewbox="0 0 24 24" fill="none" stroke="#667eea" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /> <circle cx="9" cy="7" r="4" /> <path d="M23 21v-2a4 4 0 0 0-3-3.87" /> <path d="M16 3.13a4 4 0 0 1 0 7.75" />
         </svg>
        </div>
        <h3 class="text-[#1e293b] text-[18px] font-bold mb-2">Kolaborasi Tim</h3>
        <p class="text-[#64748b] text-[14px] leading-relaxed">Bersama-sama kita lebih kuat. Setiap kontribusi dihargai dan bermakna.</p>
       </div><!-- Value 3 -->
       <div class="value-card rounded-2xl p-6 shadow-sm">
        <div class="feature-icon w-14 h-14 rounded-xl flex items-center justify-center mb-5">
         <svg width="26" height="26" viewbox="0 0 24 24" fill="none" stroke="#667eea" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
         </svg>
        </div>
        <h3 class="text-[#1e293b] text-[18px] font-bold mb-2">Keunggulan</h3>
        <p class="text-[#64748b] text-[14px] leading-relaxed">Berkomitmen memberikan yang terbaik dalam setiap proyek dan inisiatif.</p>
       </div><!-- Value 4 -->
       <div class="value-card rounded-2xl p-6 shadow-sm">
        <div class="feature-icon w-14 h-14 rounded-xl flex items-center justify-center mb-5">
         <svg width="26" height="26" viewbox="0 0 24 24" fill="none" stroke="#667eea" stroke-width="2"><path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
         </svg>
        </div>
        <h3 class="text-[#1e293b] text-[18px] font-bold mb-2">Inovasi Tanpa Batas</h3>
        <p class="text-[#64748b] text-[14px] leading-relaxed">Berani bereksperimen dan menciptakan solusi kreatif untuk masalah nyata.</p>
       </div>
      </div>
     </div>
    </section><!-- Timeline -->
    <section class="px-8 lg:px-16 py-20 bg-white">
     <div class="max-w-4xl mx-auto">
      <div class="text-center mb-14"><span class="inline-block px-4 py-1.5 bg-[#f093fb]/10 text-[#764ba2] text-[13px] font-semibold rounded-full mb-4">PERJALANAN KAMI</span>
       <h2 class="text-[#1e293b] font-bold text-[32px] md:text-[40px] mb-4" style="font-family: 'Outfit', sans-serif;">Milestone &amp; Pencapaian</h2>
      </div>
      <div class="space-y-8">
       <div class="timeline-item pb-8">
        <div class="flex items-center gap-3 mb-2"><span class="text-[#667eea] font-bold text-[14px]">2021</span> <span class="px-2 py-0.5 bg-[#667eea]/10 text-[#667eea] text-[11px] font-semibold rounded">AWAL MULA</span>
        </div>
        <h3 class="text-[#1e293b] text-[18px] font-bold mb-2">Lahirnya JTI Tech Hub</h3>
        <p class="text-[#64748b] text-[14px] leading-relaxed">Didirikan oleh 5 mahasiswa dengan visi menciptakan komunitas teknologi yang inklusif di JTI Politeknik Negeri Malang.</p>
       </div>
       <div class="timeline-item pb-8">
        <div class="flex items-center gap-3 mb-2"><span class="text-[#667eea] font-bold text-[14px]">2022</span> <span class="px-2 py-0.5 bg-[#11998e]/10 text-[#11998e] text-[11px] font-semibold rounded">PERTUMBUHAN</span>
        </div>
        <h3 class="text-[#1e293b] text-[18px] font-bold mb-2">100+ Anggota &amp; Workshop Series</h3>
        <p class="text-[#64748b] text-[14px] leading-relaxed">Mencapai 100 anggota aktif dan meluncurkan program workshop mingguan dengan berbagai topik teknologi.</p>
       </div>
       <div class="timeline-item pb-8">
        <div class="flex items-center gap-3 mb-2"><span class="text-[#667eea] font-bold text-[14px]">2023</span> <span class="px-2 py-0.5 bg-[#f093fb]/10 text-[#764ba2] text-[11px] font-semibold rounded">EKSPANSI</span>
        </div>
        <h3 class="text-[#1e293b] text-[18px] font-bold mb-2">Hackathon Nasional &amp; Kemitraan</h3>
        <p class="text-[#64748b] text-[14px] leading-relaxed">Menyelenggarakan hackathon pertama dengan 50+ tim dan menjalin kemitraan dengan 5 perusahaan teknologi.</p>
       </div>
       <div class="timeline-item pb-8">
        <div class="flex items-center gap-3 mb-2"><span class="text-[#667eea] font-bold text-[14px]">2024</span> <span class="px-2 py-0.5 bg-[#4facfe]/10 text-[#4facfe] text-[11px] font-semibold rounded">INOVASI</span>
        </div>
        <h3 class="text-[#1e293b] text-[18px] font-bold mb-2">Juara Nasional &amp; AI Lab</h3>
        <p class="text-[#64748b] text-[14px] leading-relaxed">Tim kami meraih juara 1 kompetisi nasional dan mendirikan AI Lab sebagai pusat riset mahasiswa.</p>
       </div>
       <div class="timeline-item">
        <div class="flex items-center gap-3 mb-2"><span class="text-[#667eea] font-bold text-[14px]">2025</span> <span class="px-2 py-0.5 bg-[#ff6b6b]/10 text-[#ff6b6b] text-[11px] font-semibold rounded">SEKARANG</span>
        </div>
        <h3 class="text-[#1e293b] text-[18px] font-bold mb-2">500+ Anggota &amp; Dampak Nyata</h3>
        <p class="text-[#64748b] text-[14px] leading-relaxed">Komunitas terbesar di JTI dengan 48 proyek selesai, 12 penghargaan, dan alumni yang bekerja di perusahaan top.</p>
       </div>
      </div>
     </div>
    </section><!-- Team Section -->
    <section class="px-8 lg:px-16 py-20 bg-[#f8fafc]">
     <div class="max-w-6xl mx-auto">
      <div class="text-center mb-14"><span class="inline-block px-4 py-1.5 bg-[#4facfe]/10 text-[#4facfe] text-[13px] font-semibold rounded-full mb-4">TIM INTI</span>
       <h2 class="text-[#1e293b] font-bold text-[32px] md:text-[40px] mb-4" style="font-family: 'Outfit', sans-serif;">Pengurus 2025/2026</h2>
       <p class="text-[#64748b] text-[16px] max-w-2xl mx-auto">Orang-orang di balik kesuksesan JTI Tech Hub</p>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6"><!-- Team Member 1 -->
       <div class="team-card bg-white rounded-2xl p-5 text-center shadow-sm">
        <div class="team-avatar w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-[#667eea] to-[#764ba2] flex items-center justify-center text-white text-[28px] font-bold mb-4">
         A
        </div>
        <h4 class="text-[#1e293b] text-[15px] font-bold mb-1">Ahmad Rizky</h4>
        <p class="text-[#667eea] text-[12px] font-semibold mb-2">Ketua</p>
        <p class="text-[#94a3b8] text-[11px]">Full Stack Developer</p>
       </div><!-- Team Member 2 -->
       <div class="team-card bg-white rounded-2xl p-5 text-center shadow-sm">
        <div class="team-avatar w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-[#f093fb] to-[#f5576c] flex items-center justify-center text-white text-[28px] font-bold mb-4">
         S
        </div>
        <h4 class="text-[#1e293b] text-[15px] font-bold mb-1">Sarah Amelia</h4>
        <p class="text-[#f093fb] text-[12px] font-semibold mb-2">Wakil Ketua</p>
        <p class="text-[#94a3b8] text-[11px]">UI/UX Designer</p>
       </div><!-- Team Member 3 -->
       <div class="team-card bg-white rounded-2xl p-5 text-center shadow-sm">
        <div class="team-avatar w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-[#4facfe] to-[#00f2fe] flex items-center justify-center text-white text-[28px] font-bold mb-4">
         B
        </div>
        <h4 class="text-[#1e293b] text-[15px] font-bold mb-1">Budi Santoso</h4>
        <p class="text-[#4facfe] text-[12px] font-semibold mb-2">Tech Lead</p>
        <p class="text-[#94a3b8] text-[11px]">Backend Engineer</p>
       </div><!-- Team Member 4 -->
       <div class="team-card bg-white rounded-2xl p-5 text-center shadow-sm">
        <div class="team-avatar w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-[#11998e] to-[#38ef7d] flex items-center justify-center text-white text-[28px] font-bold mb-4">
         D
        </div>
        <h4 class="text-[#1e293b] text-[15px] font-bold mb-1">Dina Pratiwi</h4>
        <p class="text-[#11998e] text-[12px] font-semibold mb-2">Event Manager</p>
        <p class="text-[#94a3b8] text-[11px]">Project Manager</p>
       </div><!-- Team Member 5 -->
       <div class="team-card bg-white rounded-2xl p-5 text-center shadow-sm">
        <div class="team-avatar w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-[#ff6b6b] to-[#feca57] flex items-center justify-center text-white text-[28px] font-bold mb-4">
         E
        </div>
        <h4 class="text-[#1e293b] text-[15px] font-bold mb-1">Eko Wijaya</h4>
        <p class="text-[#ff6b6b] text-[12px] font-semibold mb-2">Media &amp; Content</p>
        <p class="text-[#94a3b8] text-[11px]">Creative Director</p>
       </div>
      </div>
     </div>
    </section><!-- CTA Section -->
    <section class="px-8 lg:px-16 py-20 bg-gradient-to-br from-[#1a1a2e] via-[#16213e] to-[#0f3460] relative overflow-hidden">
     <div class="absolute inset-0 opacity-30">
      <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#667eea] rounded-full filter blur-[100px]"></div>
      <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-[#f093fb] rounded-full filter blur-[100px]"></div>
     </div>
     <div class="max-w-4xl mx-auto text-center relative z-10">
      <h2 id="cta-title" class="text-white font-bold text-[32px] md:text-[44px] mb-5" style="font-family: 'Outfit', sans-serif;">Siap Bergabung?</h2>
      <p id="cta-description" class="text-white/80 text-[16px] md:text-[18px] mb-10 max-w-2xl mx-auto leading-relaxed">Jadilah bagian dari komunitas teknologi terbesar di JTI. Belajar, berkarya, dan bertumbuh bersama kami!</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center"><button class="btn-primary text-white text-[15px] font-semibold px-8 py-4 rounded-xl inline-flex items-center justify-center gap-2"> <span>Daftar Sekarang</span>
        <svg width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7" />
        </svg></button> <button class="bg-white/10 border border-white/20 text-white text-[15px] font-semibold px-8 py-4 rounded-xl hover:bg-white/20 transition-all"> Hubungi Kami </button>
      </div>
     </div>
    </section><!-- Footer -->
    <footer class="px-8 lg:px-16 py-12 bg-[#0f172a]">
     <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-10">
       <div class="md:col-span-1">
        <h3 class="gradient-text font-extrabold text-[22px] mb-4" style="font-family: 'Outfit', sans-serif;">JTI Tech Hub</h3>
        <p class="text-[#94a3b8] text-[14px] leading-relaxed mb-6">Wadah belajar, berkarya, dan berkolaborasi bagi mahasiswa Teknik Informatika.</p>
        <div class="flex gap-3"><a href="#" class="w-10 h-10 bg-white/5 hover:bg-[#667eea] rounded-lg flex items-center justify-center transition-all" aria-label="Instagram">
          <svg width="18" height="18" viewbox="0 0 24 24" fill="#94a3b8"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg></a> <a href="#" class="w-10 h-10 bg-white/5 hover:bg-[#667eea] rounded-lg flex items-center justify-center transition-all" aria-label="GitHub">
          <svg width="18" height="18" viewbox="0 0 24 24" fill="#94a3b8"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
          </svg></a> <a href="#" class="w-10 h-10 bg-white/5 hover:bg-[#667eea] rounded-lg flex items-center justify-center transition-all" aria-label="LinkedIn">
          <svg width="18" height="18" viewbox="0 0 24 24" fill="#94a3b8"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
          </svg></a> <a href="#" class="w-10 h-10 bg-white/5 hover:bg-[#667eea] rounded-lg flex items-center justify-center transition-all" aria-label="YouTube">
          <svg width="18" height="18" viewbox="0 0 24 24" fill="#94a3b8"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
          </svg></a>
        </div>
       </div>
       <div>
        <h4 class="text-white font-semibold text-[15px] mb-5">Menu</h4>
        <ul class="space-y-3">
         <li><a href="#" class="text-[#94a3b8] text-[14px] hover:text-white transition-colors">Beranda</a></li>
         <li><a href="#" class="text-[#94a3b8] text-[14px] hover:text-white transition-colors">Acara</a></li>
         <li><a href="#" class="text-[#94a3b8] text-[14px] hover:text-white transition-colors">Proyek</a></li>
         <li><a href="#" class="text-[#94a3b8] text-[14px] hover:text-white transition-colors">Tentang</a></li>
        </ul>
       </div>
       <div>
        <h4 class="text-white font-semibold text-[15px] mb-5">Resources</h4>
        <ul class="space-y-3">
         <li><a href="#" class="text-[#94a3b8] text-[14px] hover:text-white transition-colors">Blog</a></li>
         <li><a href="#" class="text-[#94a3b8] text-[14px] hover:text-white transition-colors">Tutorial</a></li>
         <li><a href="#" class="text-[#94a3b8] text-[14px] hover:text-white transition-colors">FAQ</a></li>
         <li><a href="#" class="text-[#94a3b8] text-[14px] hover:text-white transition-colors">Dokumentasi</a></li>
        </ul>
       </div>
       <div>
        <h4 class="text-white font-semibold text-[15px] mb-5">Kontak</h4>
        <ul class="space-y-3">
         <li class="flex items-center gap-3">
          <svg width="16" height="16" viewbox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" /> <polyline points="22,6 12,13 2,6" />
          </svg><span id="footer-email" class="text-[#94a3b8] text-[14px]">hub.jtitech@gmail.com</span></li>
         <li class="flex items-center gap-3">
          <svg width="16" height="16" viewbox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" /> <circle cx="12" cy="10" r="3" />
          </svg><span class="text-[#94a3b8] text-[14px]">Politeknik Negeri Malang</span></li>
        </ul>
       </div>
      </div>
      <div class="section-divider mb-8"></div>
      <div class="flex flex-col md:flex-row items-center justify-between gap-4">
       <p id="footer-copyright" class="text-[#64748b] text-[13px]">© 2026 JTI Tech Hub - Semua Hak Dilindungi</p>
       <div class="flex gap-6"><a href="#" class="text-[#64748b] text-[13px] hover:text-white transition-colors">Kebijakan Privasi</a> <a href="#" class="text-[#64748b] text-[13px] hover:text-white transition-colors">Syarat &amp; Ketentuan</a>
       </div>
      </div>
     </div>
    </footer>
   </div>
  </div>
  <script>
    const defaultConfig = {
      logo_text: 'JTI TECH HUB',
      hero_title: 'Tentang Kami',
      hero_subtitle: 'Mengenal lebih dekat komunitas teknologi terbesar di Jurusan Teknologi Informasi. Tempat di mana ide bertemu aksi.',
      mission_title: 'Misi Kami',
      vision_title: 'Visi Kami',
      cta_title: 'Siap Bergabung?',
      cta_description: 'Jadilah bagian dari komunitas teknologi terbesar di JTI. Belajar, berkarya, dan bertumbuh bersama kami!',
      footer_email: 'hub.jtitech@gmail.com',
      footer_copyright: '© 2026 JTI Tech Hub - Semua Hak Dilindungi',
      background_color: '#fafafa',
      primary_color: '#667eea',
      text_color: '#1e293b',
      secondary_color: '#764ba2',
      muted_color: '#64748b',
      font_family: 'Plus Jakarta Sans',
      font_size: 14
    };
    
    async function onConfigChange(config) {
      const logoEl = document.getElementById('logo-text');
      const heroTitleEl = document.getElementById('hero-title');
      const heroSubtitleEl = document.getElementById('hero-subtitle');
      const missionTitleEl = document.getElementById('mission-title');
      const visionTitleEl = document.getElementById('vision-title');
      const ctaTitleEl = document.getElementById('cta-title');
      const ctaDescriptionEl = document.getElementById('cta-description');
      const footerEmailEl = document.getElementById('footer-email');
      const footerCopyrightEl = document.getElementById('footer-copyright');
      
      if (logoEl) logoEl.textContent = config.logo_text || defaultConfig.logo_text;
      if (heroTitleEl) {
        const title = config.hero_title || defaultConfig.hero_title;
        heroTitleEl.innerHTML = `${title.split(' ')[0]} <span class="gradient-text">${title.split(' ').slice(1).join(' ') || ''}</span>`;
      }
      if (heroSubtitleEl) heroSubtitleEl.textContent = config.hero_subtitle || defaultConfig.hero_subtitle;
      if (missionTitleEl) missionTitleEl.textContent = config.mission_title || defaultConfig.mission_title;
      if (visionTitleEl) visionTitleEl.textContent = config.vision_title || defaultConfig.vision_title;
      if (ctaTitleEl) ctaTitleEl.textContent = config.cta_title || defaultConfig.cta_title;
      if (ctaDescriptionEl) ctaDescriptionEl.textContent = config.cta_description || defaultConfig.cta_description;
      if (footerEmailEl) footerEmailEl.textContent = config.footer_email || defaultConfig.footer_email;
      if (footerCopyrightEl) footerCopyrightEl.textContent = config.footer_copyright || defaultConfig.footer_copyright;
      
      // Apply font
      const fontFamily = config.font_family || defaultConfig.font_family;
      document.body.style.fontFamily = `${fontFamily}, Plus Jakarta Sans, sans-serif`;
      
      // Apply font size scaling
      const baseSize = config.font_size || defaultConfig.font_size;
      if (heroTitleEl) heroTitleEl.style.fontSize = `${baseSize * 3.5}px`;
      if (heroSubtitleEl) heroSubtitleEl.style.fontSize = `${baseSize * 1.2}px`;
      if (ctaTitleEl) ctaTitleEl.style.fontSize = `${baseSize * 2.8}px`;
      if (ctaDescriptionEl) ctaDescriptionEl.style.fontSize = `${baseSize * 1.15}px`;
      
      // Apply colors
      const bgColor = config.background_color || defaultConfig.background_color;
      const primaryColor = config.primary_color || defaultConfig.primary_color;
      const secondaryColor = config.secondary_color || defaultConfig.secondary_color;
      
      const mainSection = document.querySelector('.bg-\\[\\#f8fafc\\]');
      if (mainSection) mainSection.style.backgroundColor = bgColor;
      
      const primaryBtns = document.querySelectorAll('.btn-primary');
      primaryBtns.forEach(btn => {
        btn.style.background = `linear-gradient(135deg, ${primaryColor} 0%, ${secondaryColor} 100%)`;
      });
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
        ['mission_title', config.mission_title || defaultConfig.mission_title],
        ['vision_title', config.vision_title || defaultConfig.vision_title],
        ['cta_title', config.cta_title || defaultConfig.cta_title],
        ['cta_description', config.cta_description || defaultConfig.cta_description],
        ['footer_email', config.footer_email || defaultConfig.footer_email],
        ['footer_copyright', config.footer_copyright || defaultConfig.footer_copyright]
      ]);
    }
    
    // Initialize SDK
    if (window.elementSdk) {
      window.elementSdk.init({
        defaultConfig,
        onConfigChange,
        mapToCapabilities,
        mapToEditPanelValues
      });
    }
  </script>
 <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9b26b437073b5545',t:'MTc2NjQ4MDc5Ny4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>