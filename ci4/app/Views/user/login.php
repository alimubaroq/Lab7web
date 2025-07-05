<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#6b4423">
    <title>Login - Luxarc Admin</title>
    <!-- Import Enhanced Vintage Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Crimson Text', serif;
            background: linear-gradient(135deg, #f4f1e8 0%, #e8dcc0 50%, #d4c5a0 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            position: relative;
            overflow-x: hidden;
        }

        /* Vintage paper texture overlay */
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
            z-index: 1;
        }
        .login-container {
            background: linear-gradient(135deg, #f9f6f0 0%, #f0e6d2 100%);
            padding: 3.5rem 3rem 3rem 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(107, 68, 35, 0.25), inset 0 2px 0 rgba(255, 255, 255, 0.3);
            width: 100%;
            max-width: 480px;
            border: 3px solid #d4af37;
            position: relative;
            z-index: 2;
        }

        /* Vintage paper texture for login container */
        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 25% 25%, rgba(184, 160, 130, 0.06) 1px, transparent 1px), radial-gradient(circle at 75% 50%, rgba(212, 197, 160, 0.06) 1px, transparent 1px), radial-gradient(circle at 50% 85%, rgba(184, 160, 130, 0.06) 1px, transparent 1px);
            background-size: 40px 40px, 60px 60px, 50px 50px;
            opacity: 0.4;
            pointer-events: none;
            z-index: 1;
            border-radius: 20px;
        }

        /* Vintage ornamental corners */
        .login-container::after {
            content: '';
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            border: 2px solid rgba(212, 175, 55, 0.3);
            border-radius: 15px;
            pointer-events: none;
            z-index: 1;
        }
        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
            position: relative;
            z-index: 2;
        }

        .login-header h1 {
            font-size: 42px;
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #5d4e37;
            letter-spacing: 3px;
            text-shadow: 3px 3px 6px rgba(93, 78, 55, 0.3);
            margin-bottom: 1rem;
            position: relative;
        }

        /* Decorative elements for title */
        .login-header h1::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
            border-radius: 2px;
        }

        .login-header p {
            color: #8b6914;
            font-family: 'Crimson Text', serif;
            font-size: 18px;
            font-style: italic;
            font-weight: 600;
            margin-top: 1.5rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 2;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 700;
            color: #5d4e37;
            font-family: 'Libre Baskerville', serif;
            letter-spacing: 1px;
            font-size: 16px;
        }

        .form-control {
            width: 100%;
            padding: 1rem 1.2rem;
            border: 2px solid rgba(212, 175, 55, 0.3);
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
            font-family: 'Crimson Text', serif;
            font-weight: 400;
            background: linear-gradient(135deg, #fefcf8 0%, #f9f6f0 100%);
            transition: all 0.3s ease;
            box-shadow: inset 0 2px 4px rgba(107, 68, 35, 0.1);
        }
        .form-control:focus {
            outline: none;
            border-color: #d4af37;
            box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.2);
            background: #fff;
        }

        .form-control:hover {
            border-color: rgba(212, 175, 55, 0.5);
        }

        .btn-login {
            width: 100%;
            padding: 1.2rem;
            background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Libre Baskerville', serif;
            font-weight: 700;
            letter-spacing: 1px;
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.2);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            border: 2px solid #b8860b;
            position: relative;
            overflow: hidden;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(212, 175, 55, 0.4), inset 0 2px 0 rgba(255, 255, 255, 0.3);
        }

        .btn-login:hover::before {
            left: 0;
        }

        .btn-login:active {
            transform: translateY(0);
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }
        .alert {
            padding: 1rem 1.2rem;
            margin-bottom: 1.5rem;
            border-radius: 10px;
            background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%);
            color: #6b4423;
            border: 2px solid rgba(212, 175, 55, 0.3);
            font-family: 'Crimson Text', serif;
            font-weight: 600;
            font-size: 16px;
            box-shadow: 0 4px 15px rgba(107, 68, 35, 0.1);
            position: relative;
            z-index: 2;
        }

        .login-footer {
            text-align: center;
            margin-top: 2rem;
            position: relative;
            z-index: 2;
        }

        .login-footer a {
            color: #5d4e37;
            text-decoration: none;
            font-family: 'Libre Baskerville', serif;
            font-weight: 700;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            background: rgba(212, 175, 55, 0.1);
            border: 1px solid rgba(212, 175, 55, 0.3);
            display: inline-block;
        }

        .login-footer a:hover {
            background: rgba(212, 175, 55, 0.2);
            color: #8b6914;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.2);
        }
        @media (max-width: 600px) {
            .login-container {
                padding: 2.5rem 1.5rem 2rem 1.5rem;
                border-radius: 15px;
                max-width: 90vw;
            }

            .login-header h1 {
                font-size: 32px;
                letter-spacing: 2px;
            }

            .login-header h1::after {
                width: 60px;
            }

            .form-control {
                padding: 0.9rem 1rem;
                font-size: 16px;
            }

            .btn-login {
                padding: 1rem;
                font-size: 16px;
            }
        }

        @media (max-width: 400px) {
            .login-container {
                padding: 2rem 1rem 1.5rem 1rem;
                margin: 1rem;
            }

            .login-header h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Admin Login</h1>
            <p>Silakan masuk untuk melanjutkan ke dashboard</p>
        </div>

        <?php if (session()->getFlashdata('flash_msg')): ?>
            <div class="alert">
                <?= session()->getFlashdata('flash_msg') ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="InputForEmail">Email</label>
                <input type="email" name="email" class="form-control" id="InputForEmail"
                       value="<?= set_value('email') ?>" required>
            </div>
            <div class="form-group">
                <label for="InputForPassword">Password</label>
                <input type="password" name="password" class="form-control" id="InputForPassword" required>
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>

        <div class="login-footer">
            <a href="<?= base_url('/'); ?>">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>
