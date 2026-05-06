<?php
$services = [
    ["icon" => "✦", "title" => "Social Media Management", "desc" => "Kelola semua akun sosmed lo dari A-Z. Konten, jadwal posting, sampai reply komentar — semua beres!"],
    ["icon" => "◈", "title" => "Content Creation", "desc" => "Feed aesthetic, caption yang engaging, visual yang bikin orang berhenti scroll. Itu yang kita deliver."],
    ["icon" => "◉", "title" => "Copywriting & Caption", "desc" => "Kata-kata yang jualan tanpa keliatan jualan. Soft selling yang bikin followers jatuh cinta sama brand lo."],
    ["icon" => "✿", "title" => "Influencer Marketing", "desc" => "Koneksi ke ratusan kreator konten. Dari nano sampai macro influencer, kita handle semuanya buat lo."],
    ["icon" => "❋", "title" => "Analytics & Report", "desc" => "Data bukan cuma angka buat kita. Kita ubah insight jadi strategi yang bikin brand lo makin gede."],
    ["icon" => "◇", "title" => "Brand Identity", "desc" => "Visual brand yang konsisten dan memorable. Dari color palette sampai tone of voice — semua selaras."],
];

$testimonials = [
    ["name" => "Kirana Dewi", "role" => "Owner @kiranabakery", "text" => "Sejak handle sama Yura Creative, followers gw naik 300% dalam 3 bulan. Gak nyangka hasilnya secepet ini!", "avatar" => "K"],
    ["name" => "Rafi Pratama", "role" => "CEO Startup Lokal", "text" => "Tim Yura beneran ngerti vibe brand gw. Kontennya ngehit semua, engagement naik drastis. Recommended banget!", "avatar" => "R"],
    ["name" => "Sella Maharani", "role" => "UMKM Fashion", "text" => "Awalnya ragu, tapi ternyata worth it banget! Sales dari Instagram naik 5x lipat. Yura Creative the best!", "avatar" => "S"],
];

$stats = [
    ["number" => "500+", "label" => "Klien Puas"],
    ["number" => "10M+", "label" => "Total Reach"],
    ["number" => "98%", "label" => "Client Retention"],
    ["number" => "3 Tahun", "label" => "Pengalaman"],
];

$packages = [
    ["name" => "Starter", "price" => "350.000", "color" => "#f9a8d4", "features" => ["Konsep Desain Sosial Media", "Copywriting Menjual", "12 Post Feed Instagram", "2 Feed Carousel", "2 Video Story" , "Free Highlight Cover" , "Admin Post Feed" , "Caption & Hashtag" ]],
    ["name" => "Growth", "price" => "600.000", "color" => "#ec4899", "popular" => true, "features" => ["Konsep Desain Sosial Media", "Copywriting Menjual", "25 Post Feed Instagram", "6 Feed Carousel", "5 Video Story", "Free Highlight Cover", "Admin Post Feed", "Caption & Hashtag"]],
    ["name" => "Premium", "price" => "1.200.000", "color" => "#be185d", "features" => ["Semua fitur Paket Growth", "Pembuatan Website Perusahaan (Landing Page / Company Profile)", "Integrasi WhatsApp / Contact Form", "Desain Website Menyesuaikan Branding", "Free Maintenance Website (basic)", "Support konsultasi digital"]],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Yura Creative</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
:root {
  --pink-50: #fdf2f8;
  --pink-100: #fce7f3;
  --pink-200: #fbcfe8;
  --pink-300: #f9a8d4;
  --pink-400: #f472b6;
  --pink-500: #ec4899;
  --pink-600: #db2777;
  --pink-700: #be185d;
  --pink-800: #9d174d;
  --white: #ffffff;
  --off-white: #fefcfe;
  --gray-100: #f5f0f4;
  --text-dark: #1a0a12;
  --text-mid: #4a2040;
  --text-light: #9d6b8a;
  --ff-display: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  --ff-body: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  --ease-spring: cubic-bezier(0.34, 1.56, 0.64, 1);
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html { scroll-behavior: smooth; }

body {
  font-family: var(--ff-body);
  background: var(--off-white);
  color: var(--text-dark);
  overflow-x: hidden;
}

/* CURSOR */
.cursor {
  width: 12px; height: 12px;
  background: var(--pink-500);
  border-radius: 50%;
  position: fixed; z-index: 9999;
  pointer-events: none;
  transform: translate(-50%, -50%);
  transition: width 0.2s, height 0.2s, background 0.2s;
  mix-blend-mode: multiply;
}
.cursor-ring {
  width: 40px; height: 40px;
  border: 1.5px solid var(--pink-400);
  border-radius: 50%;
  position: fixed; z-index: 9998;
  pointer-events: none;
  transform: translate(-50%, -50%);
  transition: all 0.15s ease;
}

/* NOISE OVERLAY */
body::before {
  content: '';
  position: fixed; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.03'/%3E%3C/svg%3E");
  z-index: 0; pointer-events: none; opacity: 0.4;
}

/* NAV */
nav {
  position: fixed; top: 0; width: 100%; z-index: 1000;
  padding: 20px 60px;
  display: flex; justify-content: space-between; align-items: center;
  background: rgba(253, 242, 248, 0.85);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid rgba(249, 168, 212, 0.2);
  transition: all 0.3s ease;
}
nav.scrolled {
  padding: 14px 60px;
  box-shadow: 0 4px 30px rgba(236, 72, 153, 0.08);
}
.nav-logo {
  font-family: var(--ff-display);
  font-size: 1.5rem; font-weight: 800;
  color: var(--pink-600);
  letter-spacing: -0.03em;
}
.nav-logo span { color: var(--pink-300); }
.nav-links { display: flex; gap: 40px; list-style: none; }
.nav-links a {
  text-decoration: none;
  font-size: 0.875rem; font-weight: 500;
  color: var(--text-mid);
  position: relative; padding-bottom: 4px;
  transition: color 0.3s;
}
.nav-links a::after {
  content: ''; position: absolute; bottom: 0; left: 0;
  width: 0; height: 1.5px;
  background: var(--pink-500);
  transition: width 0.3s var(--ease-spring);
}
.nav-links a:hover { color: var(--pink-600); }
.nav-links a:hover::after { width: 100%; }
.nav-cta {
  background: var(--pink-500);
  color: white !important;
  padding: 10px 24px !important;
  border-radius: 100px;
  transition: all 0.3s var(--ease-spring) !important;
}
.nav-cta::after { display: none !important; }
.nav-cta:hover {
  background: var(--pink-600) !important;
  transform: translateY(-2px) scale(1.03);
  box-shadow: 0 8px 25px rgba(236, 72, 153, 0.35) !important;
}

/* HERO */
.hero {
  min-height: 100vh;
  display: flex; align-items: center;
  padding: 120px 60px 80px;
  position: relative; overflow: hidden;
  background: linear-gradient(135deg, #fff5fb 0%, #fce7f3 40%, #fff0f8 100%);
}

.hero-blobs { position: absolute; inset: 0; pointer-events: none; overflow: hidden; }
.blob {
  position: absolute; border-radius: 50%;
  filter: blur(80px); opacity: 0.5;
  animation: blobFloat 8s ease-in-out infinite;
}
.blob-1 { width: 500px; height: 500px; background: radial-gradient(circle, #f9a8d4, #fbcfe8); top: -100px; right: -100px; animation-delay: 0s; }
.blob-2 { width: 350px; height: 350px; background: radial-gradient(circle, #ec4899, #f472b6); bottom: 50px; left: -80px; animation-delay: -3s; opacity: 0.25; }
.blob-3 { width: 250px; height: 250px; background: radial-gradient(circle, #fce7f3, #fdf2f8); top: 50%; left: 40%; animation-delay: -5s; opacity: 0.6; }

@keyframes blobFloat {
  0%, 100% { transform: translate(0, 0) scale(1); }
  33% { transform: translate(30px, -30px) scale(1.05); }
  66% { transform: translate(-20px, 20px) scale(0.95); }
}

.hero-content { max-width: 680px; position: relative; z-index: 1; }
.hero-badge {
  display: inline-flex; align-items: center; gap: 8px;
  background: rgba(255,255,255,0.8);
  border: 1px solid var(--pink-200);
  padding: 8px 18px; border-radius: 100px;
  font-size: 0.8rem; font-weight: 500; color: var(--pink-600);
  margin-bottom: 32px;
  animation: fadeUp 0.8s var(--ease-spring) both;
}
.badge-dot { width: 8px; height: 8px; background: var(--pink-500); border-radius: 50%; animation: pulse 2s infinite; }
@keyframes pulse { 0%,100%{transform:scale(1);opacity:1} 50%{transform:scale(1.4);opacity:0.7} }

.hero-title {
  font-family: var(--ff-display);
  font-size: clamp(2.8rem, 5vw, 4.5rem);
  line-height: 1.1; font-weight: 800;
  color: var(--text-dark);
  margin-bottom: 24px;
  animation: fadeUp 0.8s var(--ease-spring) 0.1s both;
  letter-spacing: -0.02em;
}
.hero-title em { font-style: normal; color: var(--pink-600); font-weight: 800; }
.hero-title .stroke {
  font-family: var(--ff-display);
  font-size: clamp(2.8rem, 5vw, 4.5rem);
  line-height: 1.1; font-weight: 800;
  color: var(--text-dark);
  margin-bottom: 24px;
  animation: fadeUp 0.8s var(--ease-spring) 0.1s both;
  letter-spacing: -0.02em;
}

.hero-desc {
  font-size: 1.1rem; line-height: 1.7;
  color: var(--text-mid); max-width: 540px;
  margin-bottom: 40px;
  animation: fadeUp 0.8s var(--ease-spring) 0.2s both;
}

.hero-actions {
  display: flex; gap: 16px; flex-wrap: wrap;
  animation: fadeUp 0.8s var(--ease-spring) 0.3s both;
}
.btn-primary {
  background: linear-gradient(135deg, var(--pink-500), var(--pink-600));
  color: white; border: none;
  padding: 16px 36px; border-radius: 100px;
  font-family: var(--ff-body); font-size: 0.95rem; font-weight: 600;
  cursor: pointer; text-decoration: none;
  display: inline-flex; align-items: center; gap: 8px;
  transition: all 0.3s var(--ease-spring);
  box-shadow: 0 4px 20px rgba(236, 72, 153, 0.3);
}
.btn-primary:hover { transform: translateY(-3px) scale(1.02); box-shadow: 0 12px 35px rgba(236, 72, 153, 0.45); }
.btn-secondary {
  background: white; color: var(--pink-600);
  border: 1.5px solid var(--pink-200);
  padding: 16px 36px; border-radius: 100px;
  font-family: var(--ff-body); font-size: 0.95rem; font-weight: 600;
  cursor: pointer; text-decoration: none;
  display: inline-flex; align-items: center; gap: 8px;
  transition: all 0.3s var(--ease-spring);
}
.btn-secondary:hover { border-color: var(--pink-400); transform: translateY(-3px); box-shadow: 0 8px 25px rgba(236, 72, 153, 0.15); }

.hero-visual {
  position: absolute; right: 60px; top: 50%; transform: translateY(-50%);
  animation: fadeUp 1s var(--ease-spring) 0.4s both;
}
.hero-card-stack { position: relative; width: 340px; height: 420px; }
.floating-card {
  position: absolute; background: white;
  border-radius: 20px; padding: 20px;
  box-shadow: 0 20px 60px rgba(236, 72, 153, 0.12);
  border: 1px solid rgba(249, 168, 212, 0.2);
}
.card-main {
  width: 280px; top: 50%; left: 50%; transform: translate(-50%, -50%);
  z-index: 3;
}
.card-behind-1 {
  width: 260px; top: calc(50% - 20px); left: calc(50% + 20px);
  transform: translate(-50%, -50%) rotate(6deg);
  z-index: 2; opacity: 0.7;
}
.card-behind-2 {
  width: 260px; top: calc(50% + 10px); left: calc(50% - 20px);
  transform: translate(-50%, -50%) rotate(-5deg);
  z-index: 1; opacity: 0.5;
}
.card-avatar { width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, var(--pink-300), var(--pink-500)); margin-bottom: 12px; display:flex; align-items:center; justify-content:center; color:white; font-family:var(--ff-display); font-weight:700; letter-spacing: -0.01em; }
.card-name { font-weight: 600; font-size: 0.9rem; color: var(--text-dark); }
.card-sub { font-size: 0.75rem; color: var(--text-light); margin-bottom: 16px; }
.card-metrics { display:flex; gap:12px; }
.metric { text-align:center; }
.metric-num { font-family: var(--ff-display); font-weight: 700; font-size: 1.1rem; color: var(--pink-600); letter-spacing: -0.01em; }
.metric-label { font-size: 0.65rem; color: var(--text-light); }
.card-bar { height: 6px; background: var(--pink-100); border-radius: 3px; margin-top: 14px; overflow: hidden; }
.card-bar-fill { height: 100%; background: linear-gradient(90deg, var(--pink-300), var(--pink-500)); border-radius: 3px; animation: barGrow 2s var(--ease-spring) 1s both; }
@keyframes barGrow { from { width: 0; } to { width: 78%; } }

.floating-tag {
  position: absolute; background: white;
  border-radius: 100px; padding: 10px 16px;
  box-shadow: 0 8px 30px rgba(236, 72, 153, 0.15);
  font-size: 0.8rem; font-weight: 600;
  display: flex; align-items: center; gap: 8px;
  animation: tagFloat 3s ease-in-out infinite;
}
.tag-1 { top: 10px; left: -20px; color: var(--pink-600); animation-delay: 0s; }
.tag-2 { bottom: 30px; right: -30px; color: var(--pink-600); animation-delay: -1.5s; }
@keyframes tagFloat { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-8px)} }

/* STATS */
.stats {
  padding: 80px 60px;
  background: linear-gradient(135deg, var(--pink-600) 0%, var(--pink-700) 100%);
  position: relative; overflow: hidden;
}
.stats::before {
  content: ''; position: absolute; inset: 0;
  background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.stats-grid {
  display: grid; grid-template-columns: repeat(4, 1fr);
  gap: 40px; position: relative; z-index: 1;
  max-width: 1200px; margin: 0 auto;
}
.stat-item { text-align: center; }
.stat-num {
  font-family: var(--ff-display); font-size: clamp(2.5rem, 4vw, 3.5rem);
  font-weight: 800; color: white; line-height: 1;
  margin-bottom: 8px;
  letter-spacing: -0.02em;
}
.stat-label { font-size: 0.9rem; color: rgba(255,255,255,0.7); font-weight: 400; }

/* SERVICES */
.services {
  padding: 120px 60px;
  background: var(--off-white);
}
.section-header { text-align: center; margin-bottom: 72px; }
.section-tag {
  display: inline-block;
  background: var(--pink-100); color: var(--pink-600);
  padding: 6px 18px; border-radius: 100px;
  font-size: 0.8rem; font-weight: 600;
  letter-spacing: 0.5px; text-transform: uppercase;
  margin-bottom: 20px;
}
.section-title {
  font-family: var(--ff-display);
  font-size: clamp(2rem, 3.5vw, 3rem);
  font-weight: 800; line-height: 1.15;
  color: var(--text-dark);
  letter-spacing: -0.02em;
}
.section-title em { font-style: normal; color: var(--pink-500); font-weight: 800; }
.section-desc {
  margin-top: 16px; font-size: 1rem;
  color: var(--text-light); max-width: 500px; margin-inline: auto;
  line-height: 1.7;
}

.services-grid {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 28px; max-width: 1200px; margin: 0 auto;
}
.service-card {
  background: white; border-radius: 24px;
  padding: 36px 32px;
  border: 1px solid var(--pink-100);
  transition: all 0.4s var(--ease-spring);
  position: relative; overflow: hidden;
  cursor: default;
}
.service-card::before {
  content: ''; position: absolute;
  inset: 0; background: linear-gradient(135deg, var(--pink-50), transparent);
  opacity: 0; transition: opacity 0.4s;
}
.service-card:hover { transform: translateY(-8px) scale(1.01); border-color: var(--pink-300); box-shadow: 0 25px 60px rgba(236,72,153,0.12); }
.service-card:hover::before { opacity: 1; }
.service-icon {
  font-size: 2rem; color: var(--pink-400);
  margin-bottom: 20px; display: block;
  transition: transform 0.4s var(--ease-spring);
}
.service-card:hover .service-icon { transform: scale(1.2) rotate(15deg); }
.service-title { font-family: var(--ff-display); font-size: 1.2rem; font-weight: 700; color: var(--text-dark); margin-bottom: 12px; letter-spacing: -0.01em; }
.service-desc { font-size: 0.9rem; color: var(--text-light); line-height: 1.7; }

/* ABOUT */
.about {
  padding: 120px 60px;
  background: linear-gradient(135deg, #fff5fb, #fce7f3);
  position: relative; overflow: hidden;
}
.about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; max-width: 1200px; margin: 0 auto; }
.about-visual { position: relative; }
.about-img-wrap {
  background: white; border-radius: 32px;
  padding: 48px; text-align: center;
  box-shadow: 0 30px 80px rgba(236,72,153,0.1);
  border: 1px solid var(--pink-100);
}
.about-icon-big { font-size: 6rem; display: block; margin-bottom: 24px; }
.about-title { font-family: var(--ff-display); font-size: 1.5rem; font-weight: 700; color: var(--pink-600); margin-bottom: 12px; letter-spacing: -0.01em; }
.about-text { font-size: 0.9rem; color: var(--text-light); line-height: 1.7; }
.floating-badge {
  position: absolute;
  background: var(--pink-500); color: white;
  border-radius: 20px; padding: 16px 20px;
  box-shadow: 0 15px 40px rgba(236,72,153,0.3);
  animation: tagFloat 4s ease-in-out infinite;
}
.fb-1 { top: -20px; right: -20px; font-size: 0.85rem; font-weight: 600; }
.fb-2 { bottom: -10px; left: -30px; font-size: 0.85rem; font-weight: 600; animation-delay: -2s; }
.fb-num { font-family: var(--ff-display); font-size: 1.5rem; font-weight: 800; letter-spacing: -0.01em; }
.about-content .section-header { text-align: left; }
.about-content .section-desc { margin-inline: 0; }
.about-features { margin-top: 36px; display: flex; flex-direction: column; gap: 16px; }
.about-feature { display: flex; align-items: flex-start; gap: 16px; }
.feat-icon { width: 44px; height: 44px; border-radius: 14px; background: var(--pink-100); color: var(--pink-500); display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0; }
.feat-text h4 { font-weight: 600; font-size: 0.95rem; color: var(--text-dark); margin-bottom: 4px; }
.feat-text p { font-size: 0.85rem; color: var(--text-light); line-height: 1.5; }

/* PRICING */
.pricing {
  padding: 120px 60px;
  background: var(--off-white);
}
.pricing-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; max-width: 1100px; margin: 0 auto; }
.pricing-card {
  background: white; border-radius: 28px;
  padding: 40px 36px;
  border: 1.5px solid var(--pink-100);
  transition: all 0.4s var(--ease-spring);
  position: relative;
}
.pricing-card.popular {
  background: linear-gradient(135deg, var(--pink-500), var(--pink-700));
  border-color: var(--pink-500);
  transform: scale(1.05);
  box-shadow: 0 30px 80px rgba(236,72,153,0.3);
}
.pricing-card:hover:not(.popular) { transform: translateY(-8px); box-shadow: 0 20px 60px rgba(236,72,153,0.1); }
.popular-badge {
  position: absolute; top: -14px; left: 50%; transform: translateX(-50%);
  background: white; color: var(--pink-600);
  font-size: 0.75rem; font-weight: 700;
  padding: 6px 18px; border-radius: 100px;
  border: 1.5px solid var(--pink-300);
  white-space: nowrap;
}
.pkg-name { font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; color: var(--text-light); margin-bottom: 16px; }
.popular .pkg-name { color: rgba(255,255,255,0.7); }
.pkg-price { display: flex; align-items: baseline; gap: 4px; margin-bottom: 28px; }
.pkg-currency { font-size: 1.2rem; font-weight: 600; color: var(--pink-600); }
.popular .pkg-currency { color: rgba(255,255,255,0.9); }
.pkg-amount { font-family: var(--ff-display); font-size: 3rem; font-weight: 800; color: var(--text-dark); line-height: 1; letter-spacing: -0.02em; }
.popular .pkg-amount { color: white; }
.pkg-period { font-size: 0.85rem; color: var(--text-light); }
.popular .pkg-period { color: rgba(255,255,255,0.6); }
.pkg-features { list-style: none; margin-bottom: 32px; display: flex; flex-direction: column; gap: 12px; }
.pkg-features li { display: flex; align-items: center; gap: 10px; font-size: 0.9rem; color: var(--text-mid); }
.popular .pkg-features li { color: rgba(255,255,255,0.9); }
.feat-check { width: 20px; height: 20px; border-radius: 50%; background: var(--pink-100); color: var(--pink-500); display: flex; align-items: center; justify-content: center; font-size: 0.65rem; flex-shrink: 0; font-weight: 700; }
.popular .feat-check { background: rgba(255,255,255,0.2); color: white; }
.pkg-btn {
  width: 100%; padding: 14px;
  border-radius: 100px; border: 1.5px solid var(--pink-300);
  background: transparent; color: var(--pink-600);
  font-family: var(--ff-body); font-size: 0.9rem; font-weight: 600;
  cursor: pointer; transition: all 0.3s var(--ease-spring);
}
.pkg-btn:hover { background: var(--pink-500); color: white; border-color: var(--pink-500); transform: translateY(-2px); }
.popular .pkg-btn { background: white; color: var(--pink-600); border-color: white; }
.popular .pkg-btn:hover { background: rgba(255,255,255,0.9); }

/* TESTIMONIALS */
.testimonials {
  padding: 120px 60px;
  background: linear-gradient(180deg, var(--pink-50) 0%, white 100%);
}
.testi-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; max-width: 1200px; margin: 0 auto; }
.testi-card {
  background: white; border-radius: 24px; padding: 36px;
  border: 1px solid var(--pink-100);
  transition: all 0.4s var(--ease-spring);
}
.testi-card:hover { transform: translateY(-6px); box-shadow: 0 20px 50px rgba(236,72,153,0.1); }
.testi-stars { color: var(--pink-400); font-size: 1rem; margin-bottom: 16px; letter-spacing: 2px; }
.testi-text { font-size: 0.95rem; color: var(--text-mid); line-height: 1.7; margin-bottom: 24px; font-style: italic; }
.testi-author { display: flex; align-items: center; gap: 12px; }
.testi-avatar { width: 44px; height: 44px; border-radius: 50%; background: linear-gradient(135deg, var(--pink-300), var(--pink-500)); display: flex; align-items: center; justify-content: center; font-family: var(--ff-display); font-weight: 700; color: white; font-size: 1.1rem; letter-spacing: -0.01em; }
.testi-name { font-weight: 600; font-size: 0.9rem; color: var(--text-dark); }
.testi-role { font-size: 0.8rem; color: var(--text-light); }

/* CTA */
.cta-section {
  padding: 120px 60px;
  background: linear-gradient(135deg, var(--pink-600), var(--pink-800));
  text-align: center; position: relative; overflow: hidden;
}
.cta-section::before {
  content: '✦'; position: absolute;
  font-size: 20rem; opacity: 0.04; color: white;
  top: -40px; left: -40px; font-family: serif; line-height: 1;
}
.cta-section::after {
  content: '◈'; position: absolute;
  font-size: 15rem; opacity: 0.04; color: white;
  bottom: -30px; right: 60px; font-family: serif; line-height: 1;
}
.cta-title {
  font-family: var(--ff-display);
  font-size: clamp(2rem, 4vw, 3.5rem);
  font-weight: 800; color: white; line-height: 1.2;
  margin-bottom: 20px; position: relative; z-index: 1;
  letter-spacing: -0.02em;
}
.cta-desc { font-size: 1.1rem; color: rgba(255,255,255,0.8); margin-bottom: 40px; position: relative; z-index: 1; }
.cta-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 1; }
.btn-white { background: white; color: var(--pink-600); padding: 16px 40px; border-radius: 100px; font-family: var(--ff-body); font-size: 0.95rem; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s var(--ease-spring); box-shadow: 0 4px 20px rgba(0,0,0,0.15); }
.btn-white:hover { transform: translateY(-3px) scale(1.02); box-shadow: 0 12px 35px rgba(0,0,0,0.2); }
.btn-outline-white { background: transparent; color: white; padding: 16px 40px; border-radius: 100px; border: 1.5px solid rgba(255,255,255,0.5); font-family: var(--ff-body); font-size: 0.95rem; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s var(--ease-spring); }
.btn-outline-white:hover { background: rgba(255,255,255,0.15); border-color: white; transform: translateY(-3px); }

/* FOOTER */
footer {
  background: var(--text-dark);
  padding: 80px 60px 40px;
}
.footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 60px; margin-bottom: 60px; }
.footer-brand .nav-logo { color: var(--pink-300); margin-bottom: 16px; display: block; font-size: 1.8rem; }
.footer-brand p { font-size: 0.9rem; color: rgba(255,255,255,0.5); line-height: 1.7; max-width: 280px; }
.footer-socials { display: flex; gap: 12px; margin-top: 24px; }
.social-btn { width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.08); display: flex; align-items: center; justify-content: center; color: rgba(255,255,255,0.6); text-decoration: none; font-size: 0.9rem; transition: all 0.3s; }
.social-btn:hover { background: var(--pink-500); color: white; transform: translateY(-3px); }
.footer-col h4 { color: white; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px; }
.footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 10px; }
.footer-col ul li a { text-decoration: none; color: rgba(255,255,255,0.5); font-size: 0.875rem; transition: color 0.3s; }
.footer-col ul li a:hover { color: var(--pink-300); }
.footer-bottom { border-top: 1px solid rgba(255,255,255,0.08); padding-top: 32px; display: flex; justify-content: space-between; align-items: center; }
.footer-copy { font-size: 0.85rem; color: rgba(255,255,255,0.4); }
.footer-copy span { color: var(--pink-400); }

/* ANIMATIONS */
@keyframes fadeUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}
.reveal { opacity: 0; transform: translateY(40px); transition: all 0.7s var(--ease-spring); }
.reveal.visible { opacity: 1; transform: translateY(0); }
.reveal-delay-1 { transition-delay: 0.1s; }
.reveal-delay-2 { transition-delay: 0.2s; }
.reveal-delay-3 { transition-delay: 0.3s; }
.reveal-delay-4 { transition-delay: 0.4s; }

/* MARQUEE */
.marquee-section { padding: 28px 0; background: var(--pink-500); overflow: hidden; }
.marquee-track { display: flex; gap: 60px; animation: marquee 20s linear infinite; white-space: nowrap; }
.marquee-item { color: white; font-family: var(--ff-display); font-size: 1rem; font-weight: 700; display: flex; align-items: center; gap: 20px; letter-spacing: -0.01em; }
.marquee-item span { color: rgba(255,255,255,0.4); font-size: 1.2rem; }
@keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }

/* SCROLLBAR */
::-webkit-scrollbar { width: 6px; }
::-webkit-scrollbar-track { background: var(--pink-50); }
::-webkit-scrollbar-thumb { background: var(--pink-300); border-radius: 3px; }
::-webkit-scrollbar-thumb:hover { background: var(--pink-500); }

/* RESPONSIVE TOUCH */
@media (max-width: 1024px) {
  nav { padding: 16px 32px; }
  .hero { padding: 100px 32px 60px; }
  .hero-visual { display: none; }
  .services-grid, .pricing-grid, .testi-grid { grid-template-columns: 1fr 1fr; }
  .about-grid { grid-template-columns: 1fr; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
  .stats-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 640px) {
  nav { padding: 14px 20px; }
  .nav-links { display: none; }
  .hero, .services, .pricing, .testimonials, .about, .cta-section, footer { padding-left: 24px; padding-right: 24px; }
  .services-grid, .pricing-grid, .testi-grid { grid-template-columns: 1fr; }
  .pricing-card.popular { transform: scale(1); }
  .stats-grid { grid-template-columns: repeat(2, 1fr); gap: 24px; }
  .footer-grid { grid-template-columns: 1fr; }
}

/* WHATSAPP FLOAT */
.wa-float {
  position: fixed; bottom: 30px; right: 30px; z-index: 999;
  width: 56px; height: 56px;
  background: #25D366; border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  box-shadow: 0 8px 30px rgba(37,211,102,0.4);
  text-decoration: none; color: white; font-size: 1.5rem;
  animation: waPulse 2s infinite;
  transition: transform 0.3s var(--ease-spring);
}
.wa-float:hover { transform: scale(1.15); }
@keyframes waPulse {
  0% { box-shadow: 0 0 0 0 rgba(37,211,102,0.4); }
  70% { box-shadow: 0 0 0 16px rgba(37,211,102,0); }
  100% { box-shadow: 0 0 0 0 rgba(37,211,102,0); }
}
</style>
</head>
<body>

<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<!-- NAV -->
<nav id="navbar">
  <div class="nav-logo">Yura Creative <span>✦</span></div>
  <ul class="nav-links">
    <li><a href="#services">Layanan</a></li>
    <li><a href="#about">Tentang</a></li>
    <li><a href="#pricing">Paket</a></li>
    <li><a href="#testimonials">Klien</a></li>
    <li><a href="#contact" class="nav-cta">Mulai Sekarang</a></li>
  </ul>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-blobs">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
  </div>
  <div class="hero-content">
    <div class="hero-badge">
      <div class="badge-dot"></div>
      Social Media Agency #1 Indonesia
    </div>
    <h1 class="hero-title">
      Bikin Brand Lo<br>
      <em>Viral &amp; Dikenal</em><br>
      <span class="stroke">Seluruh Indonesia</span>
    </h1>
    <p class="hero-desc">
      Yura Creative hadir buat lo yang pengen sosmed beneran ngasilin hasil. Dari konten, strategy, sampai engagement — kita handle semua supaya brand lo makin gede.
    </p>
    <div class="hero-actions">
      <a href="#contact" class="btn-primary">Konsultasi Gratis ✦</a>
      <a href="#services" class="btn-secondary">Lihat Layanan →</a>
    </div>
  </div>
  <div class="hero-visual">
    <div class="hero-card-stack">
      <div class="floating-card card-behind-2"></div>
      <div class="floating-card card-behind-1"></div>
      <div class="floating-card card-main">
        <div class="card-avatar">YC</div>
        <div class="card-name">@yuracreative</div>
        <div class="card-metrics">
          <div class="metric"><div class="metric-num">48K</div><div class="metric-label">Followers</div></div>
          <div class="metric"><div class="metric-num">8.4%</div><div class="metric-label">Eng. Rate</div></div>
          <div class="metric"><div class="metric-num">↑124%</div><div class="metric-label">Reach</div></div>
        </div>
        <div class="card-bar"><div class="card-bar-fill"></div></div>
      </div>
      <div class="floating-tag tag-1">🚀 +300% Followers</div>
    </div>
  </div>
</section>

<!-- MARQUEE -->
<div class="marquee-section">
  <div class="marquee-track">
    <?php $words = ["Instagram", "TikTok", "YouTube", "Twitter/X", "LinkedIn", "Facebook", "Threads", "Pinterest"]; for($i=0;$i<4;$i++) foreach($words as $w) echo "<div class='marquee-item'>$w <span>✦</span></div>"; ?>
  </div>
</div>

<!-- STATS -->
<section class="stats">
  <div class="stats-grid">
    <?php foreach($stats as $s): ?>
    <div class="stat-item reveal">
      <div class="stat-num"><?= $s['number'] ?></div>
      <div class="stat-label"><?= $s['label'] ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- SERVICES -->
<section class="services" id="services">
  <div class="section-header reveal">
    <div class="section-tag">Layanan Kami</div>
    <h2 class="section-title">Semua yang Lo Butuh<br><em>Ada di Sini</em></h2>
    <p class="section-desc">End-to-end social media management yang bikin brand lo standout di tengah keramaian.</p>
  </div>
  <div class="services-grid">
    <?php foreach($services as $i => $s): ?>
    <div class="service-card reveal reveal-delay-<?= ($i % 3) + 1 ?>">
      <span class="service-icon"><?= $s['icon'] ?></span>
      <h3 class="service-title"><?= $s['title'] ?></h3>
      <p class="service-desc"><?= $s['desc'] ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ABOUT -->
<section class="about" id="about">
  <div class="about-grid">
    <div class="about-visual reveal">
      <div class="about-img-wrap">
        <span class="about-icon-big"> </span>
        <div class="about-title">Yura Creative</div>
        <p class="about-text">Creative agency yang passionate soal pertumbuhan brand. Tim kita terdiri dari kreator, stratejis, dan data analyst yang udah bantu ratusan bisnis berkembang.</p>
      </div>
      <div class="floating-badge fb-1">
        <div class="fb-num">500+</div>
        Klien Happy
      </div>
      <div class="floating-badge fb-2">
        <div class="fb-num">3 Tahun</div>
        Pengalaman
      </div>
    </div>
    <div class="about-content">
      <div class="section-header reveal">
        <div class="section-tag">Tentang Yura Creative</div>
        <h2 class="section-title">Bukan Agency<br><em>Biasa-Biasa</em></h2>
        <p class="section-desc">Kita bukan yang asal posting terus nagih. Kita tim yang genuinely peduli sama pertumbuhan brand lo dan treat bisnis lo kayak bisnis kita sendiri.</p>
      </div>
      <div class="about-features">
        <?php $feats = [["✦","Data-Driven Strategy","Setiap keputusan berdasarkan data nyata, bukan feeling. Kita riset, kita analisis, baru kita eksekusi."],["◈","Tim Berpengalaman","Full-team bersertifikasi dengan portfolio yang solid. Kreator, copywriter, designer, semua ada."],["◉","Transparan & Reportable","Lo tau setiap rupiah kemana. Laporan rutin yang jelas dan bisa dipahami semua orang."]]; foreach($feats as $f): ?>
        <div class="about-feature reveal">
          <div class="feat-icon"><?= $f[0] ?></div>
          <div class="feat-text"><h4><?= $f[1] ?></h4><p><?= $f[2] ?></p></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- PRICING -->
<section class="pricing" id="pricing">
  <div class="section-header reveal">
    <div class="section-tag">Harga Paket</div>
    <h2 class="section-title">Transparan, <em>No Hidden Fee</em></h2>
    <p class="section-desc">Pilih paket yang sesuai sama kebutuhan dan budget lo. Semua bisa dikustomisasi!</p>
  </div>
  <div class="pricing-grid">
    <?php foreach($packages as $i => $pkg): ?>
    <div class="pricing-card <?= isset($pkg['popular']) ? 'popular' : '' ?> reveal reveal-delay-<?= $i+1 ?>">
      <?php if(isset($pkg['popular'])): ?><div class="popular-badge">⭐ Most Popular</div><?php endif; ?>
      <div class="pkg-name"><?= $pkg['name'] ?></div>
      <div class="pkg-price">
        <span class="pkg-currency">Rp</span>
        <span class="pkg-amount"><?= $pkg['price'] ?></span>
        <span class="pkg-period">/bulan</span>
      </div>
      <ul class="pkg-features">
        <?php foreach($pkg['features'] as $f): ?>
        <li><div class="feat-check">✓</div><?= $f ?></li>
        <?php endforeach; ?>
      </ul>
      <button class="pkg-btn">Pilih Paket Ini</button>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials" id="testimonials">
  <div class="section-header reveal">
    <div class="section-tag">Kata Klien Kami</div>
    <h2 class="section-title">Mereka Udah<br><em>Buktin Sendiri</em></h2>
  </div>
  <div class="testi-grid">
    <?php foreach($testimonials as $i => $t): ?>
    <div class="testi-card reveal reveal-delay-<?= $i+1 ?>">
      <div class="testi-stars">★★★★★</div>
      <p class="testi-text">"<?= $t['text'] ?>"</p>
      <div class="testi-author">
        <div class="testi-avatar"><?= $t['avatar'] ?></div>
        <div>
          <div class="testi-name"><?= $t['name'] ?></div>
          <div class="testi-role"><?= $t['role'] ?></div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section class="cta-section" id="contact">
  <h2 class="cta-title reveal">Siap Bawa Brand Lo<br>ke Level Berikutnya?</h2>
  <p class="cta-desc reveal">Konsultasi gratis, tanpa commitment. Kita obrolin dulu kebutuhan lo!</p>
  <div class="cta-btns reveal">
    <a href="https://wa.me/6283865716262" class="btn-white" target="_blank">💬 Chat WhatsApp</a>
    <a href="mailto:yuracreative14@gmail.com" class="btn-outline-white">📧 Kirim Email</a>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <span class="nav-logo">Yura<span style="color:var(--pink-500)">✦</span>Creative</span>
      <p>Jasa handle sosial media profesional yang bantu brand lo tumbuh organik dan sustainable. Dipercaya 500+ klien seluruh Indonesia.</p>

    </div>
    <div class="footer-col">
      <h4>Layanan</h4>
      <ul>
        <?php foreach($services as $s): ?><li><a href="#"><?= $s['title'] ?></a></li><?php endforeach; ?>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Perusahaan</h4>
      <ul>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Karir</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Kontak</h4>
      <ul>
        <li><a href="#">📍 Jakarta, Indonesia</a></li>
        <li><a href="#">📞 +62 838-6571-6262</a></li>
        <li><a href="#">✉️ yuracreative14@gmail.com</a></li>
        <li><a href="#">⏰ Mon–Fri, 9am–6pm</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span class="footer-copy">© 2025 <span>Yura Creative</span>. All rights reserved.</span>
    <span class="footer-copy">Made with <span>♥️</span> in Indonesia</span>
  </div>
</footer>

<!-- WhatsApp Float -->
<a href="https://wa.me/6283865716262" class="wa-float" target="_blank" title="Chat WhatsApp">💬</a>

<script>
// Custom cursor
const cursor = document.getElementById('cursor');
const ring = document.getElementById('cursorRing');
let mx = 0, my = 0, rx = 0, ry = 0;
document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; cursor.style.left = mx+'px'; cursor.style.top = my+'px'; });
function animRing() { rx += (mx-rx)*0.12; ry += (my-ry)*0.12; ring.style.left=rx+'px'; ring.style.top=ry+'px'; requestAnimationFrame(animRing); }
animRing();
document.querySelectorAll('a,button,.service-card,.testi-card,.pricing-card').forEach(el => {
  el.addEventListener('mouseenter', () => { cursor.style.width='20px'; cursor.style.height='20px'; ring.style.width='60px'; ring.style.height='60px'; });
  el.addEventListener('mouseleave', () => { cursor.style.width='12px'; cursor.style.height='12px'; ring.style.width='40px'; ring.style.height='40px'; });
});

// Nav scroll
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => { navbar.classList.toggle('scrolled', window.scrollY > 60); });

// Reveal on scroll
const revealEls = document.querySelectorAll('.reveal');
const obs = new IntersectionObserver((entries) => {
  entries.forEach(e => { if(e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } });
}, { threshold: 0.15 });
revealEls.forEach(el => obs.observe(el));

// Counter animation
function animateCounters() {
  document.querySelectorAll('.stat-num').forEach(el => {
    const text = el.textContent;
    const num = parseFloat(text.replace(/[^0-9.]/g,''));
    if(isNaN(num)) return;
    let start = 0; const dur = 2000; const step = 16;
    const timer = setInterval(() => {
      start += num / (dur / step);
      if(start >= num) { start = num; clearInterval(timer); }
      const suffix = text.replace(/[0-9.]/g,'');
      el.textContent = (Number.isInteger(num) ? Math.floor(start) : start.toFixed(1)) + suffix;
    }, step);
  });
}
const statsObs = new IntersectionObserver(entries => {
  if(entries[0].isIntersecting) { animateCounters(); statsObs.disconnect(); }
}, {threshold: 0.5});
const statsEl = document.querySelector('.stats');
if(statsEl) statsObs.observe(statsEl);
</script>
</body>
</html>