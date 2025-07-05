<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Luxarc - Media Artikel & Berita dengan tampilan vintage yang elegan">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#5d4e37">
    <meta name="msapplication-TileColor" content="#d4af37">
    <meta name="format-detection" content="telephone=no">
    <title><?= esc($title ?? 'Luxarc - Media Artikel & Berita'); ?></title>
    <!-- Enhanced Vintage Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"></noscript>
    <style>
        body {
            font-family: 'Crimson Text', serif;
            background: linear-gradient(135deg, #f4f1e8 0%, #e8dcc0 50%, #d4c5a0 100%);
            background-attachment: fixed;
            margin: 0;
            color: #5d4e37;
            position: relative;
        }

        /* Vintage paper texture overlay for body */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 30%, rgba(212, 197, 160, 0.08) 1px, transparent 1px), radial-gradient(circle at 80% 60%, rgba(184, 160, 130, 0.08) 1px, transparent 1px), radial-gradient(circle at 40% 90%, rgba(212, 197, 160, 0.08) 1px, transparent 1px);
            background-size: 80px 80px, 120px 120px, 100px 100px;
            opacity: 0.4;
            pointer-events: none;
            z-index: -1;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 32px 32px 32px;
            background: linear-gradient(135deg, rgba(249, 246, 240, 0.95) 0%, rgba(240, 230, 210, 0.95) 100%);
            border-radius: 20px;
            box-shadow: 0 12px 40px rgba(107, 68, 35, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.3);
            border: 3px solid #d4af37;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            position: relative;
        }

        /* Vintage decorative border for container */
        .container::before {
            content: '';
            position: absolute;
            top: 12px;
            left: 12px;
            right: 12px;
            bottom: 12px;
            border: 1px solid #b8a082;
            border-radius: 15px;
            opacity: 0.4;
            pointer-events: none;
        }

        .container:hover {
            box-shadow: 0 16px 50px rgba(107, 68, 35, 0.3), inset 0 2px 0 rgba(255, 255, 255, 0.4);
            border-color: #b8860b;
            background: linear-gradient(135deg, rgba(249, 246, 240, 0.98) 0%, rgba(240, 230, 210, 0.98) 100%);
        }
        .main-header {
            background: linear-gradient(135deg, rgba(249, 246, 240, 0.9) 0%, rgba(240, 230, 210, 0.9) 100%);
            padding: 28px 42px;
            border-radius: 15px;
            margin-bottom: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 8px 30px rgba(107, 68, 35, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.3);
            border: 3px solid #d4af37;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            position: relative;
        }

        /* Vintage decorative corners for header */
        .main-header::before {
            content: '';
            position: absolute;
            top: 8px;
            left: 8px;
            right: 8px;
            bottom: 8px;
            border: 1px solid #b8a082;
            border-radius: 10px;
            opacity: 0.4;
            pointer-events: none;
        }

        .main-header:hover {
            box-shadow: 0 12px 40px rgba(107, 68, 35, 0.3), inset 0 2px 0 rgba(255, 255, 255, 0.4);
            border-color: #b8860b;
        }
        .main-header h1 {
            font-size: 38px;
            font-weight: 700;
            margin: 0;
            color: #5d4e37;
            font-family: 'Playfair Display', serif;
            letter-spacing: 4px;
            text-shadow: 2px 2px 4px rgba(107, 68, 35, 0.3), 0 0 20px rgba(212, 197, 160, 0.5);
            padding-right: 20px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .main-header h1:hover {
            color: #8b6914;
            text-shadow: 3px 3px 6px rgba(107, 68, 35, 0.4), 0 0 25px rgba(212, 175, 55, 0.6);
        }
        .main-nav {
            display: flex;
            gap: 12px;
            background: linear-gradient(135deg, #f9f6f0 0%, #f0e6d2 100%);
            border-radius: 10px;
            padding: 8px 24px;
            box-shadow: 0 4px 15px rgba(107, 68, 35, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.3);
            border: 2px solid #b8a082;
            position: relative;
            z-index: 2;
        }

        .main-nav a {
            color: #5d4e37;
            text-decoration: none;
            font-family: 'Libre Baskerville', serif;
            font-weight: 700;
            font-size: 18px;
            letter-spacing: 1px;
            padding: 10px 20px;
            border-radius: 6px;
            transition: all 0.3s ease;
            position: relative;
            background: transparent;
            margin-left: 0;
            border: 1px solid transparent;
        }

        .main-nav a:hover {
            background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%);
            color: #fff;
            box-shadow: 0 3px 12px rgba(212, 175, 55, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.2);
            border-color: #b8860b;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            transform: translateY(-1px);
        }

        .main-nav a.active {
            background: linear-gradient(135deg, #8b6914 0%, #6b4423 100%);
            color: #fff;
            box-shadow: 0 2px 8px rgba(107, 68, 35, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            border-color: #6b4423;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);
        }
        .content {
            background: linear-gradient(135deg, rgba(249, 246, 240, 0.8) 0%, rgba(240, 230, 210, 0.8) 100%);
            padding: 0;
            border-radius: 15px;
            box-shadow: none;
            border: none;
            position: relative;
            z-index: 2;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            color: #8b6914;
            font-family: 'Crimson Text', 'Times New Roman', serif;
            font-style: italic;
            font-size: 16px;
            padding: 20px;
            background: linear-gradient(135deg, rgba(249, 246, 240, 0.6) 0%, rgba(240, 230, 210, 0.6) 100%);
            border-radius: 10px;
            border: 1px solid #b8a082;
            box-shadow: 0 2px 10px rgba(107, 68, 35, 0.1);
            position: relative;
            z-index: 2;
        }
        @media (max-width: 768px) {
            .container {
                padding: 24px 16px 20px 16px;
                margin: 10px;
            }

            .main-header {
                flex-direction: column;
                align-items: center;
                padding: 20px 16px;
                gap: 20px;
            }

            .main-header h1 {
                font-size: 32px;
                letter-spacing: 2px;
                padding-right: 0;
                text-align: center;
            }

            .main-nav {
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
                padding: 8px 12px;
                gap: 8px;
            }

            .main-nav a {
                font-size: 16px;
                padding: 8px 16px;
                margin-bottom: 4px;
            }
        }

        @media (max-width: 480px) {
            .main-header h1 {
                font-size: 28px;
                letter-spacing: 1px;
            }

            .main-nav a {
                font-size: 14px;
                padding: 6px 12px;
            }
        }
    </style>
    <link rel="stylesheet" href="<?= base_url('assets/css/artikel.css'); ?>">
</head>
<body>
    <div class="container">
        <header class="main-header">
            <h1>luxarc</h1>
            <nav class="main-nav">
                <a href="<?= base_url('/'); ?>">Home</a>
                <a href="<?= base_url('/artikel'); ?>">Artikel</a>
                <a href="<?= base_url('/about'); ?>">About</a>
                <a href="<?= base_url('/contact'); ?>">Contact</a>
                <a href="<?= base_url('/user/login'); ?>">Login</a>
            </nav>
        </header>
        <main class="content">
