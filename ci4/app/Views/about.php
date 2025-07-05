<?= $this->extend('layout/simple'); ?>

<?= $this->section('content'); ?>

<!-- Import Vintage Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Vintage About Section -->
    <div style="max-width: 800px; margin: 50px auto 0 auto; background: linear-gradient(135deg, #f9f6f0 0%, #f0e6d2 100%); border-radius: 20px; box-shadow: 0 15px 40px rgba(107, 68, 35, 0.2), inset 0 2px 0 rgba(255, 255, 255, 0.3); padding: 4rem 3rem; border: 3px solid #d4af37; text-align: center; position: relative;">
        <!-- Vintage paper texture overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 20% 30%, rgba(184, 160, 130, 0.06) 1px, transparent 1px), radial-gradient(circle at 80% 60%, rgba(212, 197, 160, 0.06) 1px, transparent 1px), radial-gradient(circle at 40% 90%, rgba(184, 160, 130, 0.06) 1px, transparent 1px); background-size: 50px 50px, 70px 70px, 60px 60px; opacity: 0.4; pointer-events: none; z-index: 1; border-radius: 20px;"></div>

        <!-- Vintage ornamental corners -->
        <div style="position: absolute; top: 25px; left: 25px; width: 60px; height: 60px; border-top: 3px solid rgba(212, 175, 55, 0.4); border-left: 3px solid rgba(212, 175, 55, 0.4); border-top-left-radius: 15px; z-index: 1;"></div>
        <div style="position: absolute; top: 25px; right: 25px; width: 60px; height: 60px; border-top: 3px solid rgba(212, 175, 55, 0.4); border-right: 3px solid rgba(212, 175, 55, 0.4); border-top-right-radius: 15px; z-index: 1;"></div>
        <div style="position: absolute; bottom: 25px; left: 25px; width: 60px; height: 60px; border-bottom: 3px solid rgba(212, 175, 55, 0.4); border-left: 3px solid rgba(212, 175, 55, 0.4); border-bottom-left-radius: 15px; z-index: 1;"></div>
        <div style="position: absolute; bottom: 25px; right: 25px; width: 60px; height: 60px; border-bottom: 3px solid rgba(212, 175, 55, 0.4); border-right: 3px solid rgba(212, 175, 55, 0.4); border-bottom-right-radius: 15px; z-index: 1;"></div>

        <div style="position: relative; z-index: 2;">
            <!-- Vintage title with ornamental design -->
            <div style="position: relative; display: inline-block; margin-bottom: 2.5rem;">
                <h1 style="font-family: 'Playfair Display', serif; font-size: 48px; font-weight: 700; color: #5d4e37; letter-spacing: 3px; text-shadow: 3px 3px 6px rgba(93, 78, 55, 0.3); margin: 0; position: relative;"><?= esc($title); ?></h1>
                <!-- Decorative underline -->
                <div style="position: absolute; bottom: -12px; left: 50%; transform: translateX(-50%); width: 120px; height: 3px; background: linear-gradient(90deg, transparent, #d4af37, transparent); border-radius: 2px;"></div>
                <!-- Side ornaments -->
                <div style="position: absolute; top: 50%; left: -80px; transform: translateY(-50%); width: 60px; height: 2px; background: linear-gradient(90deg, transparent, #b8a082); border-radius: 1px;"></div>
                <div style="position: absolute; top: 50%; right: -80px; transform: translateY(-50%); width: 60px; height: 2px; background: linear-gradient(90deg, #b8a082, transparent); border-radius: 1px;"></div>
            </div>

            <!-- Vintage content styling -->
            <div style="background: linear-gradient(135deg, #fefcf8 0%, #f9f6f0 100%); border-radius: 15px; padding: 2.5rem 2rem; border: 2px solid rgba(212, 175, 55, 0.2); box-shadow: 0 4px 20px rgba(107, 68, 35, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.5); position: relative;">
                <!-- Content decorative elements -->
                <div style="position: absolute; top: 15px; left: 15px; width: 30px; height: 2px; background: linear-gradient(90deg, #d4af37, transparent); opacity: 0.6;"></div>
                <div style="position: absolute; top: 15px; right: 15px; width: 30px; height: 2px; background: linear-gradient(90deg, transparent, #d4af37); opacity: 0.6;"></div>

                <p style="font-size: 20px; color: #5d4e37; font-family: 'Crimson Text', serif; font-weight: 400; text-align: justify; line-height: 1.8; margin: 0; position: relative; z-index: 2;"><?= esc($content); ?></p>

                <!-- Bottom decoration -->
                <div style="position: absolute; bottom: 15px; left: 50%; transform: translateX(-50%); width: 80px; height: 2px; background: linear-gradient(90deg, transparent, #d4af37, transparent); opacity: 0.6;"></div>
            </div>

            <!-- Vintage signature/footer -->
            <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid rgba(212, 175, 55, 0.3);">
                <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; color: #8b6914; font-family: 'Crimson Text', serif; font-style: italic; font-size: 16px; font-weight: 600;">
                    <div style="width: 40px; height: 1px; background: linear-gradient(90deg, transparent, #b8a082);"></div>
                    <span>Luxarc Media</span>
                    <div style="width: 40px; height: 1px; background: linear-gradient(90deg, #b8a082, transparent);"></div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>
