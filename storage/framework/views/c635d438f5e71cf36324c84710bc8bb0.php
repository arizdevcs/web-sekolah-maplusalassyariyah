<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - MA Plus Al Asy'ariyah</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <style>
        /* Reset dan base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #f8fafc;
            color: #334155;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            line-height: 1.5;
        }
        
        /* Container utama */
        .login-wrapper {
            width: 100%;
            max-width: 440px;
        }
        
        /* Header dengan logo sekolah */
        .school-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .school-logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            border-radius: 12px;
            margin-bottom: 16px;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15);
        }
        
        .school-logo-text {
            color: white;
            font-weight: 700;
            font-size: 24px;
        }
        
        .school-title {
            font-size: 28px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 6px;
            letter-spacing: -0.5px;
        }
        
        .school-subtitle {
            font-size: 16px;
            color: #64748b;
            font-weight: 500;
        }
        
        /* Card login */
        .login-card {
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05), 
                        0 1px 3px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }
        
        .login-title {
            font-size: 22px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 8px;
        }
        
        .login-subtitle {
            color: #64748b;
            margin-bottom: 32px;
            font-size: 15px;
        }
        
        /* Form elements */
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #475569;
            margin-bottom: 8px;
        }
        
        .input-wrapper {
            position: relative;
        }
        
        .form-input {
            width: 100%;
            padding: 14px 16px;
            font-size: 15px;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            background-color: white;
            transition: all 0.2s ease;
            color: #334155;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        
        .input-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            pointer-events: none;
        }
        
        /* Remember me */
        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 32px;
        }
        
        .checkbox-wrapper {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .custom-checkbox {
            width: 18px;
            height: 18px;
            border: 2px solid #cbd5e1;
            border-radius: 4px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            flex-shrink: 0;
        }
        
        .checkbox-wrapper input:checked + .custom-checkbox {
            background-color: #2563eb;
            border-color: #2563eb;
        }
        
        .checkbox-wrapper input:checked + .custom-checkbox svg {
            opacity: 1;
        }
        
        .checkbox-wrapper input {
            display: none;
        }
        
        .custom-checkbox svg {
            width: 12px;
            height: 12px;
            color: white;
            opacity: 0;
            transition: opacity 0.2s ease;
        }
        
        .checkbox-label {
            font-size: 14px;
            color: #475569;
            user-select: none;
        }
        
        /* Login button */
        .login-button {
            width: 100%;
            padding: 14px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-bottom: 32px;
        }
        
        .login-button:active {
            transform: translateY(0);
        }
        
        /* Back link */
        .back-link-container {
            text-align: center;
            padding-top: 24px;
            border-top: 1px solid #f1f5f9;
        }
        
        .back-link {
            display: inline-flex;
            align-items: center;
            color: #64748b;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.2s ease;
        }
        
        .back-link:hover {
            color: #2563eb;
        }
        
        .back-link svg {
            width: 16px;
            height: 16px;
            margin-right: 6px;
        }
        
        /* Error message */
        .error-message {
            background-color: #fef2f2;
            border: 1px solid #fee2e2;
            border-left: 4px solid #dc2626;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 24px;
            display: flex;
            align-items: flex-start;
        }
        
        .error-icon {
            color: #dc2626;
            margin-right: 12px;
            flex-shrink: 0;
            margin-top: 2px;
        }
        
        .error-text {
            color: #991b1b;
            font-size: 14px;
            line-height: 1.4;
        }
        
        /* Footer */
        .footer {
            text-align: center;
            margin-top: 40px;
            color: #94a3b8;
            font-size: 13px;
        }
        
        /* Responsive */
        @media (max-width: 480px) {
            .login-card {
                padding: 32px 24px;
            }
            
            .school-title {
                font-size: 24px;
            }
            
            .school-logo {
                width: 60px;
                height: 60px;
            }
            
            .school-logo-text {
                font-size: 20px;
            }
        }
        
        /* Animasi sederhana */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .login-card {
            animation: fadeIn 0.4s ease-out;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        

        <!-- Login Card -->
        <div class="login-card">
            <h2 class="login-title">Masuk ke Dashboard</h2>
            <p class="login-subtitle">Gunakan kredensial admin untuk mengakses panel</p>

            <?php if($errors->any()): ?>
            <div class="error-message">
                <div class="error-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                </div>
                <p class="error-text"><?php echo e($errors->first()); ?></p>
            </div>
            <?php endif; ?>

            <form action="<?php echo e(route('admin.login.submit')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label class="form-label">Email</label>
                    <div class="input-wrapper">
                        <input 
                            type="email" 
                            name="email" 
                            value="<?php echo e(old('email')); ?>" 
                            required 
                            autofocus
                            placeholder="Masukkan email"
                            class="form-input"
                        >
                        <div class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Kata Sandi</label>
                    <div class="input-wrapper">
                        <input 
                            type="password" 
                            name="password" 
                            required 
                            placeholder="Masukkan kata sandi"
                            class="form-input"
                        >
                        <div class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="remember-me">
                    <label class="checkbox-wrapper">
                        <input 
                            type="checkbox" 
                            name="remember" 
                            id="remember"
                            <?php echo e(old('remember') ? 'checked' : ''); ?>

                        >
                        <span class="custom-checkbox">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </span>
                        <span class="checkbox-label">Ingat saya</span>
                    </label>
                </div>

                <button type="submit" class="login-button">
                    Masuk
                </button>
            </form>

            <div class="back-link-container">
                <a href="<?php echo e(route('home')); ?>" class="back-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    Kembali ke Website
                </a>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2023 MA Plus Al Asy'ariyah • Panel Admin</p>
        </div>
    </div>

    <script>
        // Script sederhana untuk interaksi
        document.addEventListener('DOMContentLoaded', function() {
            // Focus pada input email saat halaman dimuat
            const emailInput = document.querySelector('input[name="email"]');
            if (emailInput && !emailInput.value) {
                emailInput.focus();
            }
            
            // Tambahkan efek aktif pada tombol login
            const loginButton = document.querySelector('.login-button');
            if (loginButton) {
                loginButton.addEventListener('mousedown', function() {
                    this.style.transform = 'translateY(0)';
                });
                
                loginButton.addEventListener('mouseup', function() {
                    this.style.transform = 'translateY(-1px)';
                });
            }
        });
    </script>
</body>
</html><?php /**PATH C:\sekolah-website\resources\views/admin/login.blade.php ENDPATH**/ ?>