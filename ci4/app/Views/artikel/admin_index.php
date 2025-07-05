<?= $this->include('template/admin_header'); ?>

<!-- Import Vintage Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<!-- Vintage Alert Messages -->
<?php if(session()->getFlashdata('success')): ?>
    <div style="background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); color: #5d4e37; padding: 1.2rem 1.8rem; border-radius: 15px; border: 3px solid #d4af37; margin-bottom: 2rem; box-shadow: 0 8px 25px rgba(107, 68, 35, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.3); font-family: 'Crimson Text', serif; font-size: 17px; position: relative;">
        <div style="position: absolute; top: 10px; left: 10px; width: 25px; height: 2px; background: linear-gradient(90deg, #d4af37, transparent); opacity: 0.7;"></div>
        <div style="position: absolute; top: 10px; right: 10px; width: 25px; height: 2px; background: linear-gradient(90deg, transparent, #d4af37); opacity: 0.7;"></div>
        <i class="fas fa-check-circle" style="color: #d4af37; margin-right: 10px; font-size: 18px;"></i>
        <strong><?= session()->getFlashdata('success') ?></strong>
    </div>
<?php endif; ?>
<?php if(session()->getFlashdata('error')): ?>
    <div style="background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%); color: #5d4e37; padding: 1.2rem 1.8rem; border-radius: 15px; border: 3px solid #d4af37; margin-bottom: 2rem; box-shadow: 0 8px 25px rgba(107, 68, 35, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.3); font-family: 'Crimson Text', serif; font-size: 17px; position: relative;">
        <div style="position: absolute; top: 10px; left: 10px; width: 25px; height: 2px; background: linear-gradient(90deg, #d4af37, transparent); opacity: 0.7;"></div>
        <div style="position: absolute; top: 10px; right: 10px; width: 25px; height: 2px; background: linear-gradient(90deg, transparent, #d4af37); opacity: 0.7;"></div>
        <i class="fas fa-exclamation-triangle" style="color: #d4af37; margin-right: 10px; font-size: 18px;"></i>
        <strong><?= session()->getFlashdata('error') ?></strong>
    </div>
<?php endif; ?>

<!-- Vintage Header Section -->
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 3rem; background: linear-gradient(135deg, #f4f1e8 0%, #e8dcc0 100%); padding: 2.5rem; border-radius: 20px; border: 4px solid #d4af37; box-shadow: 0 12px 35px rgba(107, 68, 35, 0.2), inset 0 2px 0 rgba(255, 255, 255, 0.4); position: relative; overflow: hidden;">
    <!-- Enhanced vintage paper texture -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 15% 25%, rgba(139, 105, 20, 0.08) 1px, transparent 1px), radial-gradient(circle at 85% 65%, rgba(184, 160, 130, 0.08) 1px, transparent 1px), radial-gradient(circle at 45% 85%, rgba(139, 105, 20, 0.08) 1px, transparent 1px); background-size: 60px 60px, 90px 90px, 75px 75px; opacity: 0.6; pointer-events: none; z-index: 1; border-radius: 20px;"></div>

    <!-- Ornamental corners -->
    <div style="position: absolute; top: 20px; left: 20px; width: 50px; height: 50px; border-top: 4px solid rgba(212, 175, 55, 0.5); border-left: 4px solid rgba(212, 175, 55, 0.5); border-top-left-radius: 12px; z-index: 1;"></div>
    <div style="position: absolute; top: 20px; right: 20px; width: 50px; height: 50px; border-top: 4px solid rgba(212, 175, 55, 0.5); border-right: 4px solid rgba(212, 175, 55, 0.5); border-top-right-radius: 12px; z-index: 1;"></div>
    <div style="position: absolute; bottom: 20px; left: 20px; width: 50px; height: 50px; border-bottom: 4px solid rgba(212, 175, 55, 0.5); border-left: 4px solid rgba(212, 175, 55, 0.5); border-bottom-left-radius: 12px; z-index: 1;"></div>
    <div style="position: absolute; bottom: 20px; right: 20px; width: 50px; height: 50px; border-bottom: 4px solid rgba(212, 175, 55, 0.5); border-right: 4px solid rgba(212, 175, 55, 0.5); border-bottom-right-radius: 12px; z-index: 1;"></div>

    <div style="position: relative; z-index: 2;">
        <!-- Ornamental title design -->
        <div style="position: relative; display: inline-block;">
            <h2 style="font-size: 42px; font-family: 'Playfair Display', serif; font-weight: 700; color: #5d4e37; letter-spacing: 2px; text-shadow: 3px 3px 6px rgba(93, 78, 55, 0.3); margin: 0; position: relative;">
                Daftar Artikel
            </h2>
            <!-- Decorative underline with ornaments -->
            <div style="position: absolute; bottom: -15px; left: 50%; transform: translateX(-50%); width: 150px; height: 4px; background: linear-gradient(90deg, transparent, #d4af37, transparent); border-radius: 2px;"></div>
            <!-- Side ornaments -->
            <div style="position: absolute; top: 50%; left: -60px; transform: translateY(-50%); width: 40px; height: 3px; background: linear-gradient(90deg, transparent, #b8860b); border-radius: 2px;"></div>
            <div style="position: absolute; top: 50%; right: -60px; transform: translateY(-50%); width: 40px; height: 3px; background: linear-gradient(90deg, #b8860b, transparent); border-radius: 2px;"></div>
            <!-- Decorative circles -->
            <div style="position: absolute; top: -10px; left: -20px; width: 8px; height: 8px; border-radius: 50%; background: #d4af37; opacity: 0.7;"></div>
            <div style="position: absolute; top: -10px; right: -20px; width: 8px; height: 8px; border-radius: 50%; background: #d4af37; opacity: 0.7;"></div>
        </div>
        <p style="color: #8b6914; font-family: 'Crimson Text', serif; font-style: italic; font-size: 18px; margin: 1.5rem 0 0 0; font-weight: 400;">Kelola dan atur semua artikel dengan sistem manajemen vintage</p>
    </div>

    <a href="<?= base_url('/admin/artikel/add'); ?>" style="background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); color: #fff; padding: 1.2rem 2.5rem; border-radius: 12px; text-decoration: none; font-family: 'Libre Baskerville', serif; font-weight: 700; font-size: 17px; letter-spacing: 1.5px; box-shadow: 0 8px 25px rgba(212, 175, 55, 0.4), inset 0 2px 0 rgba(255, 255, 255, 0.3); text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); border: 3px solid #b8860b; transition: all 0.3s ease; position: relative; z-index: 2; overflow: hidden;">
        <i class="fas fa-feather-alt" style="margin-right: 10px; font-size: 16px;"></i>
        Tulis Artikel Baru
    </a>
</div>
<!-- Enhanced Vintage Search Form -->
<form method="get" style="margin-bottom: 3rem; background: linear-gradient(135deg, #faf8f3 0%, #f2ede3 100%); border-radius: 18px; box-shadow: 0 10px 30px rgba(107, 68, 35, 0.18), inset 0 2px 0 rgba(255, 255, 255, 0.6); padding: 2.5rem; border: 3px solid #d4af37; position: relative; overflow: hidden;">
    <!-- Enhanced paper texture -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 20% 20%, rgba(139, 105, 20, 0.06) 1px, transparent 1px), radial-gradient(circle at 80% 80%, rgba(184, 160, 130, 0.06) 1px, transparent 1px); background-size: 50px 50px, 70px 70px; opacity: 0.5; pointer-events: none; z-index: 1; border-radius: 18px;"></div>

    <!-- Ornamental header -->
    <div style="text-align: center; margin-bottom: 2rem; position: relative; z-index: 2;">
        <h3 style="font-family: 'Playfair Display', serif; font-size: 28px; font-weight: 600; color: #5d4e37; margin: 0; letter-spacing: 1px;">Pencarian Artikel</h3>
        <div style="width: 80px; height: 3px; background: linear-gradient(90deg, transparent, #d4af37, transparent); margin: 0.8rem auto; border-radius: 2px;"></div>
        <p style="font-family: 'Crimson Text', serif; font-style: italic; color: #8b6914; margin: 0; font-size: 16px;">Temukan artikel dengan mudah menggunakan filter pencarian</p>
    </div>

    <!-- Decorative corner elements -->
    <div style="position: absolute; top: 20px; left: 20px; width: 35px; height: 35px; border-top: 3px solid rgba(212, 175, 55, 0.4); border-left: 3px solid rgba(212, 175, 55, 0.4); border-top-left-radius: 8px; z-index: 1;"></div>
    <div style="position: absolute; top: 20px; right: 20px; width: 35px; height: 35px; border-top: 3px solid rgba(212, 175, 55, 0.4); border-right: 3px solid rgba(212, 175, 55, 0.4); border-top-right-radius: 8px; z-index: 1;"></div>
    <div style="position: absolute; bottom: 20px; left: 20px; width: 35px; height: 35px; border-bottom: 3px solid rgba(212, 175, 55, 0.4); border-left: 3px solid rgba(212, 175, 55, 0.4); border-bottom-left-radius: 8px; z-index: 1;"></div>
    <div style="position: absolute; bottom: 20px; right: 20px; width: 35px; height: 35px; border-bottom: 3px solid rgba(212, 175, 55, 0.4); border-right: 3px solid rgba(212, 175, 55, 0.4); border-bottom-right-radius: 8px; z-index: 1;"></div>

    <div style="display: grid; grid-template-columns: 2fr 1fr auto; gap: 1.5rem; align-items: end; position: relative; z-index: 2;">
        <div>
            <label style="display: block; margin-bottom: 0.8rem; font-family: 'Libre Baskerville', serif; font-weight: 700; color: #5d4e37; font-size: 16px; letter-spacing: 0.5px;">
                <i class="fas fa-search" style="margin-right: 8px; color: #d4af37;"></i>
                Cari Artikel
            </label>
            <input type="text" name="q" value="<?= esc($q); ?>" placeholder="Masukkan judul atau kata kunci artikel..." style="width: 100%; padding: 1rem 1.2rem; border-radius: 12px; border: 3px solid rgba(212, 175, 55, 0.3); font-family: 'Crimson Text', serif; font-size: 17px; background: linear-gradient(135deg, #fff 0%, #fefcf8 100%); transition: all 0.3s ease; box-shadow: inset 0 3px 6px rgba(107, 68, 35, 0.1);">
        </div>

        <div>
            <label style="display: block; margin-bottom: 0.8rem; font-family: 'Libre Baskerville', serif; font-weight: 700; color: #5d4e37; font-size: 16px; letter-spacing: 0.5px;">
                <i class="fas fa-tags" style="margin-right: 8px; color: #d4af37;"></i>
                Kategori
            </label>
            <select name="kategori_id" style="width: 100%; padding: 1rem 1.2rem; border-radius: 12px; border: 3px solid rgba(212, 175, 55, 0.3); font-family: 'Crimson Text', serif; font-size: 17px; background: linear-gradient(135deg, #fff 0%, #fefcf8 100%); transition: all 0.3s ease; box-shadow: inset 0 3px 6px rgba(107, 68, 35, 0.1);">
                <option value="">Semua Kategori</option>
                <?php if (isset($kategori) && is_array($kategori)): ?>
                    <?php foreach ($kategori as $k): ?>
                        <option value="<?= esc($k['id_kategori']); ?>" <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>>
                            <?= esc($k['nama_kategori']); ?>
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>

        <div>
            <button type="submit" style="background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); color: #fff; padding: 1rem 2rem; border-radius: 12px; border: none; font-family: 'Libre Baskerville', serif; font-weight: 700; font-size: 17px; letter-spacing: 1.2px; box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4), inset 0 2px 0 rgba(255, 255, 255, 0.3); text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); cursor: pointer; transition: all 0.3s ease; border: 2px solid #b8860b; position: relative; overflow: hidden;">
                <i class="fas fa-search" style="margin-right: 10px; font-size: 16px;"></i>
                Cari Artikel
            </button>
        </div>
    </div>
</form>

<?php if (isset($error)): ?>
    <div style="background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%); color: #6b4423; padding: 1.5rem; border-radius: 12px; border: 2px solid rgba(212, 175, 55, 0.3); box-shadow: 0 4px 15px rgba(107, 68, 35, 0.1); font-family: 'Times New Roman', serif;">
        <h4 style="color: #d4af37; margin-bottom: 0.5rem; font-size: 20px;"><i class="fas fa-exclamation-triangle" style="margin-right: 8px;"></i><?= esc($error); ?></h4>
        <p style="margin: 0; font-size: 16px;"><?= esc($message); ?></p>
    </div>
<?php else: ?>
    <!-- Enhanced Vintage Table Container -->
    <div style="background: linear-gradient(135deg, #f4f1e8 0%, #e8dcc0 100%); border-radius: 20px; box-shadow: 0 15px 40px rgba(107, 68, 35, 0.25), inset 0 3px 0 rgba(255, 255, 255, 0.4); overflow: hidden; border: 4px solid #d4af37; position: relative;">
        <!-- Enhanced vintage paper texture -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 20% 30%, rgba(139, 105, 20, 0.08) 1px, transparent 1px), radial-gradient(circle at 80% 60%, rgba(184, 160, 130, 0.08) 1px, transparent 1px), radial-gradient(circle at 40% 90%, rgba(139, 105, 20, 0.08) 1px, transparent 1px); background-size: 60px 60px, 90px 90px, 75px 75px; opacity: 0.6; pointer-events: none; z-index: 1; border-radius: 20px;"></div>

        <!-- Table header with ornamental design -->
        <div style="background: linear-gradient(135deg, #5d4e37 0%, #4a3f2a 100%); padding: 1.5rem; position: relative; z-index: 2;">
            <div style="text-align: center;">
                <h3 style="font-family: 'Playfair Display', serif; font-size: 24px; font-weight: 600; color: #d4af37; margin: 0; letter-spacing: 1.5px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                    <i class="fas fa-scroll" style="margin-right: 12px; font-size: 20px;"></i>
                    Daftar Artikel Terpublikasi
                </h3>
                <div style="width: 100px; height: 2px; background: linear-gradient(90deg, transparent, #d4af37, transparent); margin: 0.8rem auto; border-radius: 1px;"></div>
            </div>
        </div>

        <table style="width: 100%; border-collapse: collapse; font-family: 'Crimson Text', serif; font-size: 17px; position: relative; z-index: 2;">
            <thead>
                <tr style="background: linear-gradient(135deg, #8b6914 0%, #5d4e37 100%); color: #f4f1e8;">
                    <th style="padding: 1.5rem 1.2rem; text-align: left; font-family: 'Libre Baskerville', serif; font-weight: 700; font-size: 16px; letter-spacing: 1.2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); border-right: 2px solid rgba(255, 255, 255, 0.3);">
                        <i class="fas fa-hashtag" style="margin-right: 8px; font-size: 14px;"></i>ID
                    </th>
                    <th style="padding: 1.5rem 1.2rem; text-align: left; font-family: 'Libre Baskerville', serif; font-weight: 700; font-size: 16px; letter-spacing: 1.2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); border-right: 2px solid rgba(255, 255, 255, 0.3);">
                        <i class="fas fa-file-alt" style="margin-right: 8px; font-size: 14px;"></i>Judul Artikel
                    </th>
                    <th style="padding: 1.5rem 1.2rem; text-align: left; font-family: 'Libre Baskerville', serif; font-weight: 700; font-size: 16px; letter-spacing: 1.2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); border-right: 2px solid rgba(255, 255, 255, 0.3);">
                        <i class="fas fa-folder" style="margin-right: 8px; font-size: 14px;"></i>Kategori
                    </th>
                    <th style="padding: 1.5rem 1.2rem; text-align: left; font-family: 'Libre Baskerville', serif; font-weight: 700; font-size: 16px; letter-spacing: 1.2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); border-right: 2px solid rgba(255, 255, 255, 0.3);">
                        <i class="fas fa-toggle-on" style="margin-right: 8px; font-size: 14px;"></i>Status
                    </th>
                    <th style="padding: 1.5rem 1.2rem; text-align: center; font-family: 'Libre Baskerville', serif; font-weight: 700; font-size: 16px; letter-spacing: 1.2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);">
                        <i class="fas fa-cogs" style="margin-right: 8px; font-size: 14px;"></i>Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($artikel)): ?>
                    <?php $no = 1; foreach ($artikel as $item): ?>
                        <tr style="background: linear-gradient(135deg, #faf8f3 0%, #f2ede3 100%); border-bottom: 3px solid rgba(212, 175, 55, 0.2); transition: all 0.4s ease; position: relative; cursor: pointer;">
                            <td style="padding: 1.5rem 1.2rem; color: #5d4e37; font-family: 'Libre Baskerville', serif; font-weight: 700; font-size: 18px; border-right: 2px solid rgba(212, 175, 55, 0.2); text-align: center;">
                                <div style="background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); color: #fff; width: 35px; height: 35px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 16px; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); box-shadow: 0 3px 10px rgba(212, 175, 55, 0.3);">
                                    <?= esc($item['id']); ?>
                                </div>
                            </td>
                            <td style="padding: 1.5rem 1.2rem; color: #5d4e37; border-right: 2px solid rgba(212, 175, 55, 0.2); max-width: 350px;">
                                <div style="font-family: 'Playfair Display', serif; font-weight: 600; font-size: 19px; margin-bottom: 8px; line-height: 1.3; color: #4a3f2a;">
                                    <?= esc($item['judul']); ?>
                                </div>
                                <div style="font-family: 'Crimson Text', serif; font-size: 15px; color: #8b6914; font-style: italic; display: flex; align-items: center; gap: 6px;">
                                    <i class="fas fa-calendar-alt" style="color: #d4af37; font-size: 13px;"></i>
                                    <?= date('d M Y', strtotime($item['created_at'] ?? $item['tanggal'] ?? 'now')); ?>
                                </div>
                            </td>
                            <td style="padding: 1.5rem 1.2rem; color: #5d4e37; border-right: 2px solid rgba(212, 175, 55, 0.2);">
                                <span style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.2) 0%, rgba(184, 160, 130, 0.2) 100%); color: #5d4e37; padding: 8px 16px; border-radius: 20px; font-family: 'Libre Baskerville', serif; font-size: 14px; font-weight: 700; border: 2px solid rgba(212, 175, 55, 0.4); display: inline-flex; align-items: center; gap: 6px;">
                                    <i class="fas fa-tag" style="color: #d4af37; font-size: 12px;"></i>
                                    <?= esc($item['nama_kategori'] ?? 'Tanpa Kategori'); ?>
                                </span>
                            </td>
                            <td style="padding: 1.5rem 1.2rem; border-right: 2px solid rgba(212, 175, 55, 0.2);">
                                <?= $item['status'] ?
                                    '<span style="background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%); color: #fff; padding: 10px 16px; border-radius: 20px; font-family: \'Libre Baskerville\', serif; font-size: 14px; font-weight: 700; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4); box-shadow: 0 4px 12px rgba(34, 197, 94, 0.3); display: inline-flex; align-items: center; gap: 6px; border: 2px solid #16a34a;"><i class="fas fa-check-circle" style="font-size: 13px;"></i>Terpublikasi</span>' :
                                    '<span style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: #fff; padding: 10px 16px; border-radius: 20px; font-family: \'Libre Baskerville\', serif; font-size: 14px; font-weight: 700; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4); box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3); display: inline-flex; align-items: center; gap: 6px; border: 2px solid #d97706;"><i class="fas fa-edit" style="font-size: 13px;"></i>Draft</span>'; ?>
                            </td>
                            <td style="padding: 1.5rem 1.2rem; text-align: center;">
                                <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                                    <a href="/admin/artikel/edit/<?= $item['id']; ?>" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: #fff; padding: 10px 16px; border-radius: 12px; text-decoration: none; font-family: 'Libre Baskerville', serif; font-weight: 700; font-size: 14px; box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3), inset 0 2px 0 rgba(255, 255, 255, 0.2); text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4); transition: all 0.3s ease; border: 2px solid #2563eb; display: inline-flex; align-items: center; gap: 6px;">
                                        <i class="fas fa-edit" style="font-size: 13px;"></i>Edit
                                    </a>
                                    <a href="/admin/artikel/delete/<?= $item['id']; ?>" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: #fff; padding: 10px 16px; border-radius: 12px; text-decoration: none; font-family: 'Libre Baskerville', serif; font-weight: 700; font-size: 14px; box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3), inset 0 2px 0 rgba(255, 255, 255, 0.2); text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4); transition: all 0.3s ease; border: 2px solid #dc2626; display: inline-flex; align-items: center; gap: 6px;" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini? Tindakan ini tidak dapat dibatalkan.');">
                                        <i class="fas fa-trash-alt" style="font-size: 13px;"></i>Hapus
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" style="text-align: center; color: #8b6914; font-family: 'Crimson Text', serif; padding: 4rem; font-size: 20px; font-style: italic; background: linear-gradient(135deg, #faf8f3 0%, #f2ede3 100%);">
                            <div style="display: flex; flex-direction: column; align-items: center; gap: 1.5rem;">
                                <i class="fas fa-scroll" style="font-size: 64px; color: #d4af37; opacity: 0.7;"></i>
                                <div style="font-family: 'Playfair Display', serif; font-size: 24px; font-weight: 600; color: #5d4e37; margin-bottom: 0.5rem;">Belum Ada Artikel</div>
                                <div style="font-family: 'Crimson Text', serif; color: #8b6914;">Mulai menulis artikel pertama Anda untuk mengisi perpustakaan digital ini.</div>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php if ($pager): ?>
        <!-- Vintage Pagination -->
        <div style="margin-top: 2rem; display: flex; justify-content: center;">
            <div style="background: linear-gradient(135deg, #f9f6f0 0%, #f0e6d2 100%); padding: 1rem 1.5rem; border-radius: 15px; border: 2px solid rgba(212, 175, 55, 0.3); box-shadow: 0 4px 15px rgba(107, 68, 35, 0.1);">
                <div style="font-family: 'Crimson Text', serif; color: #5d4e37; font-weight: 600;">
                    <?= $pager->links(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<!-- Enhanced Vintage Styling -->
<style>
/* Pagination Styling */
.pagination {
    display: flex;
    gap: 0.8rem;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.pagination a, .pagination span {
    padding: 0.8rem 1.2rem !important;
    border-radius: 12px !important;
    font-family: 'Libre Baskerville', serif !important;
    font-weight: 700 !important;
    text-decoration: none !important;
    transition: all 0.3s ease !important;
    border: 3px solid rgba(212, 175, 55, 0.4) !important;
    background: linear-gradient(135deg, #faf8f3 0%, #f2ede3 100%) !important;
    color: #5d4e37 !important;
    font-size: 16px !important;
    letter-spacing: 0.5px !important;
    box-shadow: 0 3px 10px rgba(107, 68, 35, 0.1) !important;
}

.pagination a:hover {
    background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%) !important;
    color: #fff !important;
    transform: translateY(-3px) scale(1.05) !important;
    box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4) !important;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3) !important;
}

.pagination .active span {
    background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%) !important;
    color: #fff !important;
    box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4) !important;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3) !important;
}

/* Table Row Styling - No Hover Effects */
tbody tr {
    position: relative;
}

tbody tr:nth-child(even) {
    background: linear-gradient(135deg, #f4f1e8 0%, #e8dcc0 100%) !important;
}

tbody tr:nth-child(odd) {
    background: linear-gradient(135deg, #fefcf8 0%, #f9f6f0 100%) !important;
}

/* Enhanced Button Hover Effects */
a[style*="background: linear-gradient(135deg, #3b82f6"]:hover {
    transform: translateY(-3px) scale(1.05) !important;
    box-shadow: 0 6px 20px rgba(59, 130, 246, 0.5) !important;
}

a[style*="background: linear-gradient(135deg, #ef4444"]:hover {
    transform: translateY(-3px) scale(1.05) !important;
    box-shadow: 0 6px 20px rgba(239, 68, 68, 0.5) !important;
}

/* Enhanced Form Input Focus Effects */
input:focus, select:focus {
    border-color: #d4af37 !important;
    box-shadow: 0 0 0 5px rgba(212, 175, 55, 0.25) !important;
    outline: none !important;
    transform: scale(1.02) !important;
    background: linear-gradient(135deg, #fff 0%, #fefcf8 100%) !important;
}

input:hover, select:hover {
    border-color: rgba(212, 175, 55, 0.6) !important;
    box-shadow: 0 3px 10px rgba(107, 68, 35, 0.1) !important;
}

/* Enhanced Search Button Hover Effect */
button[style*="background: linear-gradient(135deg, #d4af37"]:hover {
    transform: translateY(-3px) scale(1.05) !important;
    box-shadow: 0 8px 25px rgba(212, 175, 55, 0.5) !important;
}

button[style*="background: linear-gradient(135deg, #d4af37"]::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

button[style*="background: linear-gradient(135deg, #d4af37"]:hover::before {
    left: 0;
}

/* Enhanced Add Button Hover Effect */
a[style*="background: linear-gradient(135deg, #d4af37"]:hover {
    transform: translateY(-3px) scale(1.05) !important;
    box-shadow: 0 10px 30px rgba(212, 175, 55, 0.5) !important;
}

/* Responsive Design */
@media (max-width: 1200px) {
    div[style*="grid-template-columns: 2fr 1fr auto"] {
        grid-template-columns: 1fr 1fr !important;
        gap: 1rem !important;
    }

    div[style*="grid-template-columns: 2fr 1fr auto"] > div:last-child {
        grid-column: 1 / -1 !important;
        justify-self: center !important;
    }
}

@media (max-width: 768px) {
    div[style*="grid-template-columns: 2fr 1fr auto"] {
        grid-template-columns: 1fr !important;
        gap: 1rem !important;
    }

    h2[style*="font-size: 42px"] {
        font-size: 32px !important;
    }

    h3[style*="font-size: 28px"] {
        font-size: 22px !important;
    }

    table {
        font-size: 14px !important;
    }

    th, td {
        padding: 1rem 0.8rem !important;
    }

    div[style*="display: flex; gap: 8px"] {
        flex-direction: column !important;
        gap: 0.5rem !important;
    }

    div[style*="display: flex; gap: 8px"] a {
        width: 100% !important;
        justify-content: center !important;
    }
}

@media (max-width: 480px) {
    .pagination {
        gap: 0.5rem !important;
    }

    .pagination a, .pagination span {
        padding: 0.6rem 0.8rem !important;
        font-size: 14px !important;
    }

    h2[style*="font-size: 42px"] {
        font-size: 24px !important;
        letter-spacing: 1px !important;
    }

    div[style*="padding: 2.5rem"] {
        padding: 1.5rem !important;
    }

    div[style*="padding: 2.5rem 2rem"] {
        padding: 1.5rem 1rem !important;
    }
}

/* Loading Animation for Table */
tbody tr {
    animation: fadeInUp 0.5s ease forwards;
    opacity: 0;
    transform: translateY(20px);
}

tbody tr:nth-child(1) { animation-delay: 0.1s; }
tbody tr:nth-child(2) { animation-delay: 0.2s; }
tbody tr:nth-child(3) { animation-delay: 0.3s; }
tbody tr:nth-child(4) { animation-delay: 0.4s; }
tbody tr:nth-child(5) { animation-delay: 0.5s; }

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Vintage Scrollbar */
::-webkit-scrollbar {
    width: 12px;
}

::-webkit-scrollbar-track {
    background: linear-gradient(135deg, #f4f1e8 0%, #e8dcc0 100%);
    border-radius: 6px;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%);
    border-radius: 6px;
    border: 2px solid #f4f1e8;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(135deg, #b8860b 0%, #9a7209 100%);
}
</style>

<?= $this->include('template/admin_footer'); ?>
