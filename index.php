<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
        }
        .hero {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        .skill-bar {
            height: 10px;
            background: #e2e8f0;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
        }
        .skill-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, #4f46e5, #7c3aed);
            transition: width 0.5s ease;
            width: 0%;
        }
        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Hero Section -->
        <div class="hero p-8 mb-8 reveal">
            <div class="flex items-center">
                <div class="w-32 h-32 rounded-full overflow-hidden shadow-lg mr-6">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/22d709a2-7928-4e5c-a4e8-7fbfa61a83aa.png" alt="Potret profesional seorang pria muda dengan senyuman ramah, rambut pendek gelap, mengenakan kemeja putih formal dengan latar belakang netral, menunjukkan ekspresi percaya diri dan pendekatan" />
                </div>
                <div>
                    <h1 class="text-4xl font-bold text-gray-800 mb-2">muhamad fatih</h1>
                    <p class="text-xl text-gray-600 mb-4">Software Engineer & Web Developer</p>
                    <p class="text-gray-700">Saya adalah seorang pengembang web yang antusias dengan 5 tahun pengalaman dalam membuat aplikasi modern dan responsif.</p>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8 reveal">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Tentang Saya</h2>
            <p class="text-gray-700 leading-relaxed">
                Hai, fatih! Saya suka membuat aplikasi web yang tidak hanya fungsional tapi juga indah dan mudah digunakan. Di luar kode, saya menikmati hiking, membaca buku sains fiksi, dan memasak makanan dari berbagai kultur. Mari berkolaborasi dan buat sesuatu yang hebat bersama!
            </p>
        </div>

        <!-- Skills Section -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8 reveal">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Keterampilan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-700 font-medium">JavaScript</span>
                        <span class="text-gray-600">90%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-bar-fill" style="width: 90%;"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-700 font-medium">React</span>
                        <span class="text-gray-600">85%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-bar-fill" style="width: 85%;"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-700 font-medium">Node.js</span>
                        <span class="text-gray-600">80%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-bar-fill" style="width: 80%;"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-700 font-medium">HTML/CSS</span>
                        <span class="text-gray-600">95%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-bar-fill" style="width: 95%;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Section -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8 reveal">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Pekerjaan Terakhir</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="border rounded-lg p-4 hover:shadow-lg transition">
                    <div class="h-48 rounded-lg overflow-hidden mb-4 shadow-sm">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/fdb5b884-9883-4004-9ace-932c8bc1f7d5.png" alt="Tangkapan layar aplikasi e-commerce responsif dengan desain modern, produk seperti laptop dan pakaian ditampilkan dalam tata letak kartu dengan tombol belanja hijau, mem showcasing design cinta untuk pengalaman pengguna yang lancar" class="w-full h-full object-cover" />
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Aplikasi E-Commerce</h3>
                    <p class="text-gray-600">Platform belanja online dengan integrasi pembayaran dan manajemen inventori yang sederhana.</p>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition">
                    <div class="h-48 rounded-lg overflow-hidden mb-4 shadow-sm">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2a3e1133-aa5b-4d99-9a04-71a7d6eac4ea.png" alt="Potret dasbor analitik data dengan grafik batang interaktif, diagram pai, dan tabel data dengan tema warna biru dan putih, menunjukkan metrik performa website dengan ikon simbolis mata engagement pengguna dan sebagai ikon hati untuk interaksi positif" class="w-full h-full object-cover" />
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Dashboard Analytics</h3>
                    <p class="text-gray-600">Visualisasi data real-time untuk bisnis dengan laporan otomatis dan notifikasi.</p>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="bg-white rounded-lg shadow-lg p-6 reveal">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Kontak Saya</h2>
            <div class="flex flex-col md:flex-row items-start md:items-center gap-4">
                <div class="flex items-center">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/31b23818-593b-4efc-b883-58e29168d54e.png" alt="Ikon envelope menunjukkan pengiriman pesan melalui email" class="w-6 h-6 mr-2" />
                    <span class="text-gray-700">mf2360604@gmail.com</span>
                </div>
                <div class="flex items-center">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/3fbe01e4-10b0-41d5-a54b-0de7c072443b.png" alt="Ikon telepon gantung menunjukkan panggilan suara atau kontak telepon" class="w-6 h-6 mr-2" />
                    <span class="text-gray-700">+62 8829-7246-421</span>
                </div>
                <div class="flex items-center">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a16596eb-0744-48e4-baca-3f51b4126262.png" alt="Logo GitHub dengan ikon kucing hitam pada latar belakang putih" class="w-6 h-6 mr-2" />
                    <a href="https://github.com/johndoe" class="text-blue-600 hover:underline">GitHub Profile</a>
                </div>
                <div class="flex items-center">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/8b2bc0a3-8cc7-4042-8b46-fc11e58d92f7.png" alt="Logo LinkedIn dengan ikon huruf i dalam kotak" class="w-6 h-6 mr-2" />
                    <a href="https://linkedin.com/in/johndoe" class="text-blue-600 hover:underline">LinkedIn Profile</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Intersection Observer for reveal animation
        const reveals = document.querySelectorAll('.reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        reveals.forEach(reveal => observer.observe(reveal));

        // Animate skill bars on scroll
        window.addEventListener('scroll', () => {
            const skillBars = document.querySelectorAll('.skill-bar-fill');
            skillBars.forEach(bar => {
                const rect = bar.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    const originalWidth = bar.style.width;
                    bar.style.width = '0%';
                    setTimeout(() => bar.style.width = originalWidth, 100);
                }
            });
        });
    </script>
</body>
</html>
</content>
</create_file>