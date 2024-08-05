<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Komputer</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <style>
        body {
            color: white; /* Mengubah warna teks seluruh body menjadi putih */
        }
        .nav-links a,
        .text-box h1,
        .text-box p,
        .hero-btn,
        .social-media-icons a {
            color: white !important; /* Memastikan warna teks link dan tombol juga putih */
        }
        .nav-item.active a span {
            color: white !important; /* Memastikan warna teks item navigasi aktif juga putih */
        }
    </style>
</head>
<body>
    <section class="header">
        <nav>
            <img src="<?php echo e(asset('image/Logo.png')); ?>" alt="Deskripsi Gambar">

            </a>
            <div class="nav-links">
                <ul>
                    <li class="nav-item<?php echo e(request()->is('/awal') ? ' active' : ''); ?>">
                        <a href="<?php echo e(url('/awal')); ?>">
                            <span class="nav-item text-white">HOME</span>
                        </a>
                    </li>
                    <li class="nav-item<?php echo e(request()->is('/pegawai') ? ' active' : ''); ?>">
                        <a href="<?php echo e(url('/pegawai')); ?>">
                            <span class="nav-item text-white">DATA KOMPUTER SERVICE</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(url('/login')); ?>" class="hero-btn">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1>Service Komputer <br>XD</h1>
            <p>Selamat Datang di Service Komputer XD<BR>
                Kami adalah penyedia layanan perbaikan dan perawatan komputer terpercaya<BR></p>
            <a href="https://wa.me/6285828063177" class="hero-btn">Hubungi Kami</a>
            <p>Atau</p>
            <div class="social-media-icons">
                <a href="https://www.facebook.com/mus.w.566?mibextid=ZbWKwL" target="_blank">
                    <img src="<?php echo e(asset('image/fb.jpg')); ?>" alt="Facebook">
                </a>
                <a href="https://wa.me/6285828063177" target="_blank">
                    <img src="<?php echo e(asset('image/wa.jpg')); ?>" alt="WhatsApp">
                </a>
                <a href="https://www.instagram.com/xaxxax.xx?igsh=Z3Nqa2FoMG9wMHFm" target="_blank">
                    <img src="<?php echo e(asset('image/ig.jpg')); ?>" alt="Instagram">
            </div>
        </div>
    </section>
</body>
</html>
<?php /**PATH C:\laragon\www\servis-komputer\resources\views/awal/index.blade.php ENDPATH**/ ?>