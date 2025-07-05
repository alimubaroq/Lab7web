<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title); ?></title>
    <!-- Enhanced Vintage Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Crimson Text', serif;
            background: linear-gradient(135deg, #f9f6f0 0%, #f0e6d2 100%);
            margin: 0;
            color: #5d4e37;
            min-height: 100vh;
            background-attachment: fixed;
        }
        .admin-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .admin-header {
            background: linear-gradient(135deg, #f4f1e8 0%, #e8dcc0 100%);
            padding: 20px 35px;
            border-radius: 20px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 8px 25px rgba(93, 78, 55, 0.2), inset 0 2px 0 rgba(255, 255, 255, 0.3);
            border: 3px solid #d4af37;
            position: relative;
            overflow: hidden;
        }
        /* Vintage paper texture for admin header */
        .admin-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 25% 25%, rgba(184, 160, 130, 0.06) 1px, transparent 1px),
                        radial-gradient(circle at 75% 50%, rgba(212, 197, 160, 0.06) 1px, transparent 1px);
            background-size: 40px 40px, 60px 60px;
            opacity: 0.4;
            pointer-events: none;
            z-index: 1;
        }
        .admin-header h1 {
            font-size: 32px;
            font-weight: 700;
            margin: 0;
            color: #5d4e37;
            font-family: 'Playfair Display', serif;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(93, 78, 55, 0.2);
            position: relative;
            z-index: 2;
        }
        .admin-nav {
            position: relative;
            z-index: 2;
        }
        .admin-nav a {
            color: #5d4e37;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 600;
            padding: 12px 20px;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-family: 'Libre Baskerville', serif;
            font-size: 16px;
            background: linear-gradient(135deg, rgba(254, 252, 248, 0.8) 0%, rgba(244, 241, 232, 0.8) 100%);
            border: 2px solid rgba(139, 105, 20, 0.3);
            box-shadow: 0 2px 8px rgba(93, 78, 55, 0.1);
            letter-spacing: 0.5px;
        }
        .admin-nav a:hover {
            background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }
        .admin-nav a.active {
            background: linear-gradient(135deg, #8b6914 0%, #5d4e37 100%);
            color: #f4f1e8;
            box-shadow: 0 4px 15px rgba(139, 105, 20, 0.4);
        }
        .card {
            background: linear-gradient(135deg, #fefcf8 0%, #f9f6f0 100%);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(93, 78, 55, 0.15), inset 0 2px 0 rgba(255, 255, 255, 0.3);
            border: 3px solid rgba(212, 175, 55, 0.3);
            overflow: hidden;
            position: relative;
        }
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 15% 25%, rgba(139, 105, 20, 0.04) 1px, transparent 1px),
                        radial-gradient(circle at 85% 75%, rgba(184, 160, 130, 0.04) 1px, transparent 1px);
            background-size: 50px 50px, 70px 70px;
            opacity: 0.6;
            pointer-events: none;
            z-index: 1;
        }
        .card-header {
            background: linear-gradient(135deg, #f4f1e8 0%, #e8dcc0 100%);
            padding: 20px 25px;
            border-bottom: 3px solid rgba(212, 175, 55, 0.3);
            font-weight: 600;
            font-family: 'Playfair Display', serif;
            color: #5d4e37;
            font-size: 18px;
            position: relative;
            z-index: 2;
        }
        .card-body {
            padding: 25px;
            position: relative;
            z-index: 2;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-family: 'Crimson Text', serif;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid rgba(212, 175, 55, 0.2);
            font-weight: 600;
        }
        th {
            background: linear-gradient(135deg, #8b6914 0%, #5d4e37 100%);
            color: #f4f1e8;
            font-family: 'Libre Baskerville', serif;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        .btn {
            padding: 10px 16px;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            border: none;
            cursor: pointer;
            font-family: 'Libre Baskerville', serif;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        .btn-primary {
            background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%);
            border: 2px solid #b8860b;
        }
        .btn-danger {
            background: linear-gradient(135deg, #8b6914 0%, #5d4e37 100%);
            border: 2px solid #5d4e37;
        }
        .btn-success {
            background: linear-gradient(135deg, #d4af37 0%, #8b6914 100%);
            border: 2px solid #8b6914;
        }
        .btn-secondary {
            background: linear-gradient(135deg, #b8a082 0%, #8b6914 100%);
            border: 2px solid #8b6914;
        }
        .form-label {
            font-weight: 600;
            margin-bottom: 0.8rem;
            color: #5d4e37;
            font-family: 'Libre Baskerville', serif;
            font-size: 16px;
            letter-spacing: 0.5px;
        }
        .form-control, .form-select {
            display: block;
            width: 100%;
            padding: 12px 16px;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
            color: #5d4e37;
            background: linear-gradient(135deg, #fefcf8 0%, #f9f6f0 100%);
            background-clip: padding-box;
            border: 2px solid rgba(139, 105, 20, 0.3);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-family: 'Crimson Text', serif;
            box-shadow: 0 2px 8px rgba(93, 78, 55, 0.1);
        }
        .form-control:focus, .form-select:focus {
            border-color: #d4af37;
            outline: 0;
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.2);
            background: linear-gradient(135deg, #fff 0%, #fefcf8 100%);
        }
        .d-grid {
            display: grid;
        }
        .gap-2 {
            gap: 0.5rem;
        }
        .alert {
            padding: 18px 25px;
            margin-bottom: 25px;
            border: 3px solid transparent;
            border-radius: 15px;
            font-family: 'Crimson Text', serif;
            font-weight: 600;
            font-size: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .alert::before {
            content: '';
            position: absolute;
            top: 10px;
            left: 15px;
            width: 30px;
            height: 2px;
            background: linear-gradient(90deg, currentColor, transparent);
            opacity: 0.7;
        }
        .alert::after {
            content: '';
            position: absolute;
            top: 10px;
            right: 15px;
            width: 30px;
            height: 2px;
            background: linear-gradient(90deg, transparent, currentColor);
            opacity: 0.7;
        }
        .alert-success {
            color: #5d4e37;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-color: #d4af37;
        }
        .alert-danger {
            color: #5d4e37;
            background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%);
            border-color: #d4af37;
        }
    </style>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1><?= esc($title); ?></h1>
            <nav class="admin-nav">
                <a href="<?= base_url('/'); ?>">Home</a>
                <a href="<?= base_url('/user/logout'); ?>">Logout</a>
            </nav>
        </div>
        <div class="card">
            <?= $this->renderSection('content') ?>
        </div>
