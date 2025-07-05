<?= $this->extend('layout/simple'); ?>

<?= $this->section('content'); ?>

<!-- Import Vintage Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Vintage Section Title with Ornamental Design -->
    <div style="text-align: center; margin-bottom: 50px; position: relative;">
        <div style="position: relative; display: inline-block;">
            <h1 style="font-family: 'Playfair Display', serif; font-size: 48px; color: #5d4e37; font-weight: 700; letter-spacing: 3px; text-shadow: 3px 3px 6px rgba(93, 78, 55, 0.3); margin: 0 0 12px 0; position: relative; z-index: 2;"><?= esc($title); ?></h1>
            <!-- Decorative underline -->
            <div style="position: absolute; bottom: -8px; left: 50%; transform: translateX(-50%); width: 120px; height: 3px; background: linear-gradient(90deg, transparent, #d4af37, transparent); border-radius: 2px;"></div>
            <!-- Side ornaments -->
            <div style="position: absolute; top: 50%; left: -80px; transform: translateY(-50%); width: 60px; height: 2px; background: linear-gradient(90deg, transparent, #b8a082); border-radius: 1px;"></div>
            <div style="position: absolute; top: 50%; right: -80px; transform: translateY(-50%); width: 60px; height: 2px; background: linear-gradient(90deg, #b8a082, transparent); border-radius: 1px;"></div>
        </div>
        <p style="color: #8b6914; font-size: 22px; font-family: 'Crimson Text', serif; font-style: italic; font-weight: 600; margin-top: 20px; text-shadow: 1px 1px 2px rgba(139, 105, 20, 0.2);">Temukan artikel menarik dan informatif dari kami</p>
    </div>

    <?php if (!empty($artikel)): ?>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 40px; justify-content: center; align-items: stretch; margin: 0 auto; max-width: 1200px;">
            <?php foreach ($artikel as $row): ?>
                <div class="artikel-card-daftar" style="background: linear-gradient(135deg, #f9f6f0 0%, #f0e6d2 100%); border-radius: 15px; box-shadow: 0 8px 25px rgba(107, 68, 35, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.3); overflow: hidden; border: 3px solid #d4af37; transition: all 0.3s ease; display: flex; flex-direction: column; min-height: 400px; max-width: 420px; margin: 0 auto; padding: 0; position: relative; will-change: transform, box-shadow, border;">
                    <!-- Vintage paper texture overlay for card -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 20% 20%, rgba(184, 160, 130, 0.08) 1px, transparent 1px), radial-gradient(circle at 80% 40%, rgba(212, 197, 160, 0.08) 1px, transparent 1px), radial-gradient(circle at 40% 80%, rgba(184, 160, 130, 0.08) 1px, transparent 1px); background-size: 25px 25px, 35px 35px, 30px 30px; opacity: 0.3; pointer-events: none; z-index: 1;"></div>

                    <?php if (!empty($row['gambar'])): ?>
                        <div style="position: relative; overflow: hidden;">
                            <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= esc($row['judul']); ?>" style="width: 100%; height: 190px; object-fit: cover; filter: sepia(20%) brightness(0.95) contrast(1.1); transition: all 0.3s ease;">
                            <!-- Vintage photo frame effect -->
                            <div style="position: absolute; top: 8px; left: 8px; right: 8px; bottom: 8px; border: 2px solid rgba(212, 175, 55, 0.3); pointer-events: none;"></div>
                        </div>
                    <?php endif; ?>

                    <div style="padding: 28px 24px 24px 24px; flex: 1; display: flex; flex-direction: column; justify-content: space-between; position: relative; z-index: 2;">
                        <!-- Vintage category badge -->
                        <div style="display: inline-block; background: linear-gradient(135deg, #8b6914 0%, #6b4423 100%); color: #fff; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-family: 'Libre Baskerville', serif; font-weight: 700; letter-spacing: 1px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); margin-bottom: 16px; align-self: flex-start; box-shadow: 0 2px 8px rgba(107, 68, 35, 0.3);">
                            <?= esc($row['nama_kategori'] ?? 'Artikel'); ?>
                        </div>

                        <h2 style="font-size: 24px; font-family: 'Playfair Display', serif; font-weight: 600; margin-bottom: 14px; color: #5d4e37; letter-spacing: 1px; text-shadow: 1px 1px 2px rgba(93, 78, 55, 0.2); line-height: 1.3;">
                            <a href="<?= base_url('/artikel/' . ($row['slug'] ?: 'artikel-' . $row['id'])); ?>" style="text-decoration: none; color: #5d4e37; transition: color 0.3s ease;"> <?= esc($row['judul']); ?> </a>
                        </h2>

                        <!-- Vintage date styling -->
                        <div style="display: flex; align-items: center; margin-bottom: 18px; color: #8b6914; font-size: 14px; font-family: 'Crimson Text', serif; font-style: italic; font-weight: 600;">
                            <div style="width: 20px; height: 1px; background: linear-gradient(90deg, #b8a082, transparent); margin-right: 8px;"></div>
                            <span><?= date('d M Y', strtotime($row['created_at'] ?? date('Y-m-d'))); ?></span>
                            <div style="width: 20px; height: 1px; background: linear-gradient(90deg, transparent, #b8a082); margin-left: 8px;"></div>
                        </div>

                        <p style="color: #5d4e37; font-size: 16px; margin-bottom: 22px; font-family: 'Crimson Text', serif; line-height: 1.6; opacity: 0.8; font-weight: 400;"> <?= esc(substr(strip_tags($row['isi'] ?? ''), 0, 120)); ?>...</p>

                        <a href="<?= base_url('/artikel/' . ($row['slug'] ?: 'artikel-' . $row['id'])); ?>" style="color: #fff; background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); padding: 12px 28px; border-radius: 6px; text-decoration: none; font-family: 'Libre Baskerville', serif; font-size: 16px; font-weight: 700; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.2); letter-spacing: 1px; transition: all 0.3s ease; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); border: 2px solid #b8860b; text-align: center; position: relative; overflow: hidden;">
                            <span style="position: relative; z-index: 2;">Baca Selengkapnya</span>
                            <div style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent); transition: left 0.5s; z-index: 1;"></div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <style>
        /* Vintage hover effects */
        .artikel-card-daftar:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 40px rgba(107, 68, 35, 0.3), inset 0 2px 0 rgba(255, 255, 255, 0.4);
            border-color: #b8860b;
        }

        .artikel-card-daftar:hover img {
            filter: sepia(30%) brightness(1.05) contrast(1.2);
        }

        /* Vintage button hover effects */
        .artikel-card-daftar a[style*="background: linear-gradient(135deg, #d4af37"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.5), inset 0 2px 0 rgba(255, 255, 255, 0.3) !important;
        }

        .artikel-card-daftar a[style*="background: linear-gradient(135deg, #d4af37"]:hover > div {
            left: 0 !important;
        }

        /* Responsive design */
        @media (max-width: 900px) {
            .artikel-card-daftar {
                min-width: 90vw;
                max-width: 98vw;
            }
        }

        @media (max-width: 600px) {
            .artikel-card-daftar {
                min-height: 350px !important;
            }
        }
        </style>
    <?php else: ?>
        <div style="text-align: center; padding: 60px 40px; background: linear-gradient(135deg, #f9f6f0 0%, #f0e6d2 100%); border-radius: 15px; border: 2px solid #d4af37; box-shadow: 0 4px 20px rgba(107, 68, 35, 0.15); max-width: 600px; margin: 0 auto;">
            <div style="font-size: 48px; color: #b8a082; margin-bottom: 20px;">📚</div>
            <h3 style="color: #5d4e37; font-family: 'Playfair Display', serif; font-size: 24px; margin-bottom: 12px; font-weight: 600;">Belum Ada Artikel</h3>
            <p style="color: #8b6914; font-family: 'Crimson Text', serif; font-size: 18px; font-style: italic; font-weight: 400; margin: 0;">Artikel sedang dalam proses penulisan. Silakan kembali lagi nanti.</p>
        </div>
    <?php endif; ?>

<?= $this->endSection(); ?>
