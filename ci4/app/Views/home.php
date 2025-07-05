<?= $this->extend('layout/simple'); ?>

<?= $this->section('content'); ?>

<!-- Import Vintage Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <section style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 60vh; padding-top: 32px; padding-bottom: 24px; background: linear-gradient(135deg, #f4f1e8 0%, #e8dcc0 50%, #d4c5a0 100%); position: relative; overflow: hidden;">
        <!-- Vintage Paper Texture Overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 20% 30%, rgba(212, 197, 160, 0.1) 1px, transparent 1px), radial-gradient(circle at 80% 60%, rgba(184, 160, 130, 0.1) 1px, transparent 1px), radial-gradient(circle at 40% 90%, rgba(212, 197, 160, 0.1) 1px, transparent 1px); background-size: 50px 50px, 70px 70px, 60px 60px; opacity: 0.4; z-index: 0;"></div>

        <!-- Vintage Ornamental Corners -->
        <div style="position: absolute; top: 20px; left: 20px; width: 80px; height: 80px; border-top: 3px solid rgba(184, 160, 130, 0.3); border-left: 3px solid rgba(184, 160, 130, 0.3); border-top-left-radius: 20px; z-index: 0;"></div>
        <div style="position: absolute; top: 20px; right: 20px; width: 80px; height: 80px; border-top: 3px solid rgba(184, 160, 130, 0.3); border-right: 3px solid rgba(184, 160, 130, 0.3); border-top-right-radius: 20px; z-index: 0;"></div>
        <div style="position: absolute; bottom: 20px; left: 20px; width: 80px; height: 80px; border-bottom: 3px solid rgba(184, 160, 130, 0.3); border-left: 3px solid rgba(184, 160, 130, 0.3); border-bottom-left-radius: 20px; z-index: 0;"></div>
        <div style="position: absolute; bottom: 20px; right: 20px; width: 80px; height: 80px; border-bottom: 3px solid rgba(184, 160, 130, 0.3); border-right: 3px solid rgba(184, 160, 130, 0.3); border-bottom-right-radius: 20px; z-index: 0;"></div>

        <div style="width: 100%; max-width: 900px; text-align: center; margin-bottom: 36px; position: relative; z-index: 1;">
            <h1 style="font-family: 'Playfair Display', serif; font-size: 64px; color: #5d4e37; font-weight: 700; margin-bottom: 12px; letter-spacing: 4px; text-shadow: 3px 3px 6px rgba(93, 78, 55, 0.4), 0 0 25px rgba(212, 197, 160, 0.6); position: relative;">
                <span style="position: relative; z-index: 2;">luxarc</span>
                <div style="position: absolute; top: -10px; left: -10px; right: -10px; bottom: -10px; border: 3px solid #b8a082; border-radius: 15px; opacity: 0.3; z-index: 1;"></div>
            </h1>
            <div style="font-size: 26px; color: #8b6914; margin-bottom: 38px; font-family: 'Crimson Text', serif; letter-spacing: 2px; text-shadow: 1px 1px 2px rgba(139, 105, 20, 0.3); font-style: italic; position: relative; font-weight: 600;">
                <span style="border-bottom: 2px solid #d4af37; padding-bottom: 4px;">Media Artikel & Berita</span>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; gap: 0;">
                <div style="background: linear-gradient(135deg, #f9f6f0 0%, #f0e6d2 100%); border-radius: 20px; padding: 44px 38px 32px 38px; box-shadow: 0 8px 32px rgba(107, 68, 35, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.3); margin-bottom: 0; border: 3px solid #d4af37; max-width: 900px; width: 100%; position: relative; transition: all 0.3s ease; animation: fadeInUp 0.8s cubic-bezier(.39,.575,.565,1) 0.1s both;">
                    <div style="display: flex; flex-direction: column; align-items: center; gap: 12px;">
                        <h2 style="font-family: 'Playfair Display', serif; font-size: 32px; color: #5d4e37; font-weight: 600; margin: 0 0 8px 0; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(93, 78, 55, 0.3);">Selamat Datang di Luxarc!</h2>
                        <p style="font-size: 18px; color: #8b6914; margin: 0 0 18px 0; font-family: 'Crimson Text', serif; max-width: 700px; text-align: justify; line-height: 1.6; text-shadow: 0 1px 1px rgba(139, 105, 20, 0.1); font-weight: 400;">Selamat datang di web kami, tempat Anda menemukan artikel-artikel terbaru seputar teknologi dan olahraga, disajikan secara informatif dan menarik untuk menambah wawasan Anda tentang inovasi digital terkini serta dinamika dunia olahraga yang penuh semangat dan inspirasi.</p>
                        <a href="<?= base_url('/artikel'); ?>" style="display: inline-block; background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); color: #fff; font-family: 'Libre Baskerville', serif; font-size: 20px; font-weight: 700; padding: 16px 48px; border-radius: 8px; text-decoration: none; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.2); transition: all 0.3s ease; letter-spacing: 1px; border: 2px solid #b8860b; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); animation: fadeInUp 0.8s cubic-bezier(.39,.575,.565,1) 0.2s both; position: relative; overflow: hidden;">
                            <span style="position: relative; z-index: 2;">Jelajahi Artikel</span>
                            <div style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent); transition: left 0.5s; z-index: 1;"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 100%; max-width: 900px; margin-bottom: 32px; position: relative; z-index: 1;">
            <form method="get" style="display: flex; gap: 16px; justify-content: center; align-items: center; margin-bottom: 26px; background: linear-gradient(135deg, #f9f6f0 0%, #f0e6d2 100%); border-radius: 12px; box-shadow: 0 4px 20px rgba(107, 68, 35, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.3); padding: 20px 16px; border: 2px solid #d4af37; animation: fadeInUp 0.8s cubic-bezier(.39,.575,.565,1) 0.3s both; position: relative;">
                <!-- Vintage decorative border -->
                <div style="position: absolute; top: 8px; left: 8px; right: 8px; bottom: 8px; border: 1px solid #b8a082; border-radius: 8px; opacity: 0.3; pointer-events: none;"></div>

                <input type="text" name="q" value="<?= esc($q ?? ''); ?>" placeholder="Cari artikel..." style="padding: 14px 18px; border-radius: 6px; border: 2px solid #b8a082; width: 240px; font-family: 'Crimson Text', serif; font-weight: 400; font-size: 16px; background: #faf8f3; color: #5d4e37; box-shadow: inset 0 2px 4px rgba(107, 68, 35, 0.1); transition: all 0.3s ease; position: relative; z-index: 2;">
                <select name="kategori_id" style="padding: 14px 18px; border-radius: 6px; border: 2px solid #b8a082; font-family: 'Crimson Text', serif; font-weight: 400; font-size: 16px; background: #faf8f3; color: #5d4e37; box-shadow: inset 0 2px 4px rgba(107, 68, 35, 0.1); transition: all 0.3s ease; position: relative; z-index: 2;">
                    <option value="">Semua Kategori</option>
                    <?php foreach ($kategori as $k): ?>
                        <option value="<?= esc($k['id_kategori']); ?>" <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>>
                            <?= esc($k['nama_kategori']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" style="padding: 14px 32px; border-radius: 6px; border: 2px solid #b8860b; background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); color: #fff; font-family: 'Libre Baskerville', serif; font-weight: 700; font-size: 16px; cursor: pointer; box-shadow: 0 3px 12px rgba(212, 175, 55, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.2); letter-spacing: 1px; transition: all 0.3s ease; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); animation: fadeInUp 0.8s cubic-bezier(.39,.575,.565,1) 0.4s both; position: relative; z-index: 2; overflow: hidden;">
                    <span style="position: relative; z-index: 2;">Cari</span>
                    <div style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent); transition: left 0.5s; z-index: 1;"></div>
                </button>
            </form>
        </div>

        <!-- Vintage Section Title with Ornamental Design -->
        <div style="width: 100%; max-width: 900px; text-align: center; margin-bottom: 34px; position: relative; z-index: 1; animation: fadeInUp 0.8s cubic-bezier(.39,.575,.565,1) 0.5s both;">
            <div style="position: relative; display: inline-block;">
                <h2 style="font-family: 'Playfair Display', serif; font-size: 42px; color: #5d4e37; font-weight: 700; letter-spacing: 3px; text-shadow: 3px 3px 6px rgba(93, 78, 55, 0.3); margin: 0; position: relative; z-index: 2;">Artikel Terbaru</h2>
                <!-- Decorative underline -->
                <div style="position: absolute; bottom: -8px; left: 50%; transform: translateX(-50%); width: 120px; height: 3px; background: linear-gradient(90deg, transparent, #d4af37, transparent); border-radius: 2px;"></div>
                <!-- Side ornaments -->
                <div style="position: absolute; top: 50%; left: -60px; transform: translateY(-50%); width: 40px; height: 2px; background: linear-gradient(90deg, transparent, #b8a082); border-radius: 1px;"></div>
                <div style="position: absolute; top: 50%; right: -60px; transform: translateY(-50%); width: 40px; height: 2px; background: linear-gradient(90deg, #b8a082, transparent); border-radius: 1px;"></div>
            </div>
        </div>
        <div style="width: 100%; max-width: 1200px; position: relative; z-index: 1;">
        <?php if (!empty($artikel)): ?>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 36px; justify-content: center; align-items: stretch; margin: 0 auto;">
                <?php foreach ($artikel as $row): ?>
                    <div class="artikel-card-home" style="background: linear-gradient(135deg, #f9f6f0 0%, #f0e6d2 100%); border-radius: 15px; box-shadow: 0 8px 25px rgba(107, 68, 35, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.3); overflow: hidden; border: 3px solid #d4af37; transition: all 0.3s ease; display: flex; flex-direction: column; min-height: 380px; max-width: 420px; margin: 0 auto; padding: 0; position: relative; will-change: transform, box-shadow, border;">
                        <!-- Vintage paper texture overlay for card -->
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 20% 20%, rgba(184, 160, 130, 0.08) 1px, transparent 1px), radial-gradient(circle at 80% 40%, rgba(212, 197, 160, 0.08) 1px, transparent 1px), radial-gradient(circle at 40% 80%, rgba(184, 160, 130, 0.08) 1px, transparent 1px); background-size: 25px 25px, 35px 35px, 30px 30px; opacity: 0.3; pointer-events: none; z-index: 1;"></div>

                        <?php if (!empty($row['gambar'])): ?>
                            <div style="position: relative; overflow: hidden;">
                                <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= esc($row['judul']); ?>" style="width: 100%; height: 200px; object-fit: cover; filter: sepia(20%) brightness(0.95) contrast(1.1); transition: all 0.3s ease;">
                                <!-- Vintage photo frame effect -->
                                <div style="position: absolute; top: 8px; left: 8px; right: 8px; bottom: 8px; border: 2px solid rgba(212, 175, 55, 0.3); pointer-events: none;"></div>
                            </div>
                        <?php endif; ?>

                        <div style="padding: 32px 28px 28px 28px; flex: 1; display: flex; flex-direction: column; justify-content: space-between; position: relative; z-index: 2;">
                            <h3 style="font-family: 'Playfair Display', serif; font-size: 24px; color: #5d4e37; margin-bottom: 18px; font-weight: 600; letter-spacing: 1px; text-shadow: 2px 2px 4px rgba(93, 78, 55, 0.2); line-height: 1.3;">
                                <a href="<?= base_url('/artikel/' . ($row['slug'] ?: 'artikel-' . $row['id'])); ?>" style="text-decoration: none; color: #5d4e37; transition: color 0.3s ease;"> <?= esc($row['judul']); ?> </a>
                            </h3>

                            <!-- Vintage date styling -->
                            <div style="display: flex; align-items: center; margin-bottom: 24px; color: #8b6914; font-size: 14px; font-family: 'Crimson Text', serif; font-style: italic; font-weight: 600;">
                                <div style="width: 20px; height: 1px; background: linear-gradient(90deg, #b8a082, transparent); margin-right: 8px;"></div>
                                <span><?= date('d M Y', strtotime($row['created_at'] ?? date('Y-m-d'))); ?></span>
                                <div style="width: 20px; height: 1px; background: linear-gradient(90deg, transparent, #b8a082); margin-left: 8px;"></div>
                            </div>

                            <a href="<?= base_url('/artikel/' . ($row['slug'] ?: 'artikel-' . $row['id'])); ?>" style="color: #fff; background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); padding: 14px 32px; border-radius: 6px; text-decoration: none; font-family: 'Libre Baskerville', serif; font-size: 16px; font-weight: 700; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.2); letter-spacing: 1px; transition: all 0.3s ease; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); border: 2px solid #b8860b; text-align: center; position: relative; overflow: hidden;">
                                <span style="position: relative; z-index: 2;">Baca Selengkapnya</span>
                                <div style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent); transition: left 0.5s; z-index: 1;"></div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div style="text-align: center; padding: 40px; background: linear-gradient(135deg, #f9f6f0 0%, #f0e6d2 100%); border-radius: 15px; border: 2px solid #d4af37; box-shadow: 0 4px 20px rgba(107, 68, 35, 0.15);">
                <p style="color: #5d4e37; font-family: 'Crimson Text', serif; font-size: 18px; font-style: italic; font-weight: 600; margin: 0;">Tidak ada artikel yang cocok dengan pencarian Anda.</p>
            </div>
        <?php endif; ?>
        </div>
        <style>
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(40px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        /* Vintage hover effects */
        .artikel-card-home:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 40px rgba(107, 68, 35, 0.3), inset 0 2px 0 rgba(255, 255, 255, 0.4);
            border-color: #b8860b;
        }

        .artikel-card-home:hover img {
            filter: sepia(30%) brightness(1.05) contrast(1.2);
        }

        /* Vintage button hover effects */
        a[style*="background: linear-gradient(135deg, #d4af37"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.5), inset 0 2px 0 rgba(255, 255, 255, 0.3) !important;
        }

        a[style*="background: linear-gradient(135deg, #d4af37"]:hover > div {
            left: 0 !important;
        }

        /* Input focus effects */
        input:focus, select:focus {
            border-color: #d4af37 !important;
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.2), inset 0 2px 4px rgba(107, 68, 35, 0.1) !important;
            outline: none;
        }

        /* Responsive design */
        @media (max-width: 900px) {
            .artikel-card-home {
                min-width: 90vw;
                max-width: 98vw;
            }

            h1 {
                font-size: 48px !important;
            }

            h2 {
                font-size: 32px !important;
            }

            form {
                flex-direction: column !important;
                gap: 12px !important;
            }

            input, select {
                width: 100% !important;
                max-width: 300px;
            }
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 36px !important;
                letter-spacing: 2px !important;
            }

            .artikel-card-home {
                min-height: 320px !important;
            }
        }
        </style>
    </section>
<?= $this->endSection(); ?>
