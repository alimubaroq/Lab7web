<?= $this->extend('layout/simple'); ?>

<?= $this->section('content'); ?>

<!-- Import Vintage Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Vintage Contact Section -->
    <div style="max-width: 850px; margin: 50px auto 0 auto; background: linear-gradient(135deg, #f9f6f0 0%, #f0e6d2 100%); border-radius: 20px; box-shadow: 0 15px 40px rgba(107, 68, 35, 0.2), inset 0 2px 0 rgba(255, 255, 255, 0.3); padding: 4rem 3rem; border: 3px solid #d4af37; position: relative;">
        <!-- Vintage paper texture overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 25% 25%, rgba(184, 160, 130, 0.06) 1px, transparent 1px), radial-gradient(circle at 75% 50%, rgba(212, 197, 160, 0.06) 1px, transparent 1px), radial-gradient(circle at 50% 85%, rgba(184, 160, 130, 0.06) 1px, transparent 1px); background-size: 40px 40px, 60px 60px, 50px 50px; opacity: 0.4; pointer-events: none; z-index: 1; border-radius: 20px;"></div>

        <!-- Vintage ornamental corners -->
        <div style="position: absolute; top: 25px; left: 25px; width: 60px; height: 60px; border-top: 3px solid rgba(212, 175, 55, 0.4); border-left: 3px solid rgba(212, 175, 55, 0.4); border-top-left-radius: 15px; z-index: 1;"></div>
        <div style="position: absolute; top: 25px; right: 25px; width: 60px; height: 60px; border-top: 3px solid rgba(212, 175, 55, 0.4); border-right: 3px solid rgba(212, 175, 55, 0.4); border-top-right-radius: 15px; z-index: 1;"></div>
        <div style="position: absolute; bottom: 25px; left: 25px; width: 60px; height: 60px; border-bottom: 3px solid rgba(212, 175, 55, 0.4); border-left: 3px solid rgba(212, 175, 55, 0.4); border-bottom-left-radius: 15px; z-index: 1;"></div>
        <div style="position: absolute; bottom: 25px; right: 25px; width: 60px; height: 60px; border-bottom: 3px solid rgba(212, 175, 55, 0.4); border-right: 3px solid rgba(212, 175, 55, 0.4); border-bottom-right-radius: 15px; z-index: 1;"></div>

        <div style="position: relative; z-index: 2; text-align: center;">
            <!-- Vintage title with ornamental design -->
            <div style="position: relative; display: inline-block; margin-bottom: 3rem;">
                <h1 style="font-family: 'Playfair Display', serif; font-size: 48px; font-weight: 700; color: #5d4e37; letter-spacing: 3px; text-shadow: 3px 3px 6px rgba(93, 78, 55, 0.3); margin: 0; position: relative;"><?= esc($title); ?></h1>
                <!-- Decorative underline -->
                <div style="position: absolute; bottom: -12px; left: 50%; transform: translateX(-50%); width: 120px; height: 3px; background: linear-gradient(90deg, transparent, #d4af37, transparent); border-radius: 2px;"></div>
                <!-- Side ornaments -->
                <div style="position: absolute; top: 50%; left: -80px; transform: translateY(-50%); width: 60px; height: 2px; background: linear-gradient(90deg, transparent, #b8a082); border-radius: 1px;"></div>
                <div style="position: absolute; top: 50%; right: -80px; transform: translateY(-50%); width: 60px; height: 2px; background: linear-gradient(90deg, #b8a082, transparent); border-radius: 1px;"></div>
            </div>

            <!-- Contact Content Grid -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-bottom: 3rem; text-align: left;">
                <!-- Contact Information -->
                <div style="background: linear-gradient(135deg, #fefcf8 0%, #f9f6f0 100%); border-radius: 15px; padding: 2.5rem 2rem; border: 2px solid rgba(212, 175, 55, 0.2); box-shadow: 0 4px 20px rgba(107, 68, 35, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.5); position: relative;">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 24px; color: #5d4e37; margin-bottom: 1.5rem; font-weight: 600; text-align: center;">Informasi Kontak</h3>

                    <div style="space-y: 1rem;">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; padding: 1rem; background: rgba(212, 175, 55, 0.1); border-radius: 10px; border: 1px solid rgba(212, 175, 55, 0.2);">
                            <div style="width: 40px; height: 40px; background: #d4af37; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 18px;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <div style="font-family: 'Libre Baskerville', serif; font-weight: 700; color: #5d4e37; margin-bottom: 4px;">Email</div>
                                <div style="font-family: 'Crimson Text', serif; color: #8b6914; font-weight: 400;">info@luxarc.com</div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; padding: 1rem; background: rgba(212, 175, 55, 0.1); border-radius: 10px; border: 1px solid rgba(212, 175, 55, 0.2);">
                            <div style="width: 40px; height: 40px; background: #d4af37; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 18px;">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <div style="font-family: 'Libre Baskerville', serif; font-weight: 700; color: #5d4e37; margin-bottom: 4px;">Telepon</div>
                                <div style="font-family: 'Crimson Text', serif; color: #8b6914; font-weight: 400;">+62 123 456 789</div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; padding: 1rem; background: rgba(212, 175, 55, 0.1); border-radius: 10px; border: 1px solid rgba(212, 175, 55, 0.2);">
                            <div style="width: 40px; height: 40px; background: #d4af37; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 18px;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <div style="font-family: 'Libre Baskerville', serif; font-weight: 700; color: #5d4e37; margin-bottom: 4px;">Alamat</div>
                                <div style="font-family: 'Crimson Text', serif; color: #8b6914; font-weight: 400;">Jakarta, Indonesia</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Message -->
                <div style="background: linear-gradient(135deg, #fefcf8 0%, #f9f6f0 100%); border-radius: 15px; padding: 2.5rem 2rem; border: 2px solid rgba(212, 175, 55, 0.2); box-shadow: 0 4px 20px rgba(107, 68, 35, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.5); position: relative;">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 24px; color: #5d4e37; margin-bottom: 1.5rem; font-weight: 600; text-align: center;">Pesan Kami</h3>

                    <!-- Content decorative elements -->
                    <div style="position: absolute; top: 15px; left: 15px; width: 30px; height: 2px; background: linear-gradient(90deg, #d4af37, transparent); opacity: 0.6;"></div>
                    <div style="position: absolute; top: 15px; right: 15px; width: 30px; height: 2px; background: linear-gradient(90deg, transparent, #d4af37); opacity: 0.6;"></div>

                    <p style="font-size: 18px; color: #5d4e37; font-family: 'Crimson Text', serif; font-weight: 400; text-align: justify; line-height: 1.8; margin: 0; position: relative; z-index: 2;"><?= esc($content); ?></p>

                    <!-- Bottom decoration -->
                    <div style="position: absolute; bottom: 15px; left: 50%; transform: translateX(-50%); width: 80px; height: 2px; background: linear-gradient(90deg, transparent, #d4af37, transparent); opacity: 0.6;"></div>
                </div>
            </div>

            <!-- Social Media Links -->
            <div style="background: linear-gradient(135deg, #fefcf8 0%, #f9f6f0 100%); border-radius: 15px; padding: 2rem; border: 2px solid rgba(212, 175, 55, 0.2); box-shadow: 0 4px 20px rgba(107, 68, 35, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.5);">
                <h3 style="font-family: 'Playfair Display', serif; font-size: 24px; color: #5d4e37; margin-bottom: 1.5rem; font-weight: 600; text-align: center;">Ikuti Kami</h3>

                <div style="display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); color: #fff; transition: all 0.3s ease; text-decoration: none; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);">
                        <i class="fab fa-facebook-f" style="font-size: 20px;"></i>
                    </a>
                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); color: #fff; transition: all 0.3s ease; text-decoration: none; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);">
                        <i class="fab fa-twitter" style="font-size: 20px;"></i>
                    </a>
                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); color: #fff; transition: all 0.3s ease; text-decoration: none; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);">
                        <i class="fab fa-instagram" style="font-size: 20px;"></i>
                    </a>
                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); color: #fff; transition: all 0.3s ease; text-decoration: none; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);">
                        <i class="fab fa-linkedin-in" style="font-size: 20px;"></i>
                    </a>
                </div>
            </div>

            <!-- Vintage signature/footer -->
            <div style="margin-top: 2.5rem; padding-top: 2rem; border-top: 2px solid rgba(212, 175, 55, 0.3);">
                <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; color: #8b6914; font-family: 'Crimson Text', serif; font-style: italic; font-size: 16px; font-weight: 600;">
                    <div style="width: 40px; height: 1px; background: linear-gradient(90deg, transparent, #b8a082);"></div>
                    <span>Hubungi Kami Kapan Saja</span>
                    <div style="width: 40px; height: 1px; background: linear-gradient(90deg, #b8a082, transparent);"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Design -->
    <style>
    @media (max-width: 768px) {
        div[style*="grid-template-columns: 1fr 1fr"] {
            grid-template-columns: 1fr !important;
            gap: 2rem !important;
        }

        div[style*="gap: 1.5rem"] {
            gap: 1rem !important;
        }

        h1[style*="font-size: 48px"] {
            font-size: 36px !important;
        }

        div[style*="left: -80px"], div[style*="right: -80px"] {
            display: none !important;
        }
    }
    </style>
<?= $this->endSection(); ?>
