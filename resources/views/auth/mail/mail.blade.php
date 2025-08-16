<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác Nhận Đăng Ký - BeeCloud</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #14b6a0 0%, #0891b2 100%);
            min-height: 100vh;
            padding: 20px;
            line-height: 1.6;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(20, 182, 160, 0.2);
            overflow: hidden;
            position: relative;
        }

        .email-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #14b6a0, #0891b2, #14b6a0);
            background-size: 200% 100%;
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {

            0%,
            100% {
                background-position: 200% 0;
            }

            50% {
                background-position: -200% 0;
            }
        }

        .header {
            background: linear-gradient(135deg, #14b6a0 0%, #0891b2 100%);
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .logo {
            font-size: 32px;
            font-weight: bold;
            color: white;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            position: relative;
            z-index: 2;
        }

        .content {
            padding: 40px 30px;
            background: white;
        }

        .greeting {
            font-size: 24px;
            color: #2d3748;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .username {
            color: #14b6a0;
            text-decoration: none;
            font-weight: bold;
        }

        .message {
            font-size: 16px;
            color: #4a5568;
            margin-bottom: 30px;
            line-height: 1.7;
        }

        .button-container {
            text-align: center;
            margin: 40px 0;
        }

        .button {
            display: inline-block;
            padding: 16px 40px;
            background: linear-gradient(135deg, #14b6a0 0%, #0891b2 100%);
            color: white !important;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            border-radius: 50px;
            box-shadow: 0 8px 25px rgba(20, 182, 160, 0.4);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(20, 182, 160, 0.5);
        }

        .button:hover::before {
            left: 100%;
        }

        .button:active {
            transform: translateY(-1px);
        }

        .disclaimer {
            font-size: 14px;
            color: #718096;
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            background: #f7fafc;
            border-radius: 12px;
            border-left: 4px solid #14b6a0;
        }

        .footer {
            background: #f8fafc;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }

        .footer-text {
            color: #718096;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: #14b6a0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #0891b2;
            transform: translateY(-2px);
        }

        @media (max-width: 600px) {
            .email-container {
                margin: 10px;
                border-radius: 15px;
            }

            .header {
                padding: 30px 20px;
            }

            .content {
                padding: 30px 20px;
            }

            .logo {
                font-size: 28px;
            }

            .greeting {
                font-size: 22px;
            }

            .button {
                padding: 14px 30px;
                font-size: 15px;
            }
        }

        .icon {
            display: inline-block;
            margin-right: 8px;
        }

        .check-icon {
            width: 20px;
            height: 20px;
            background: #14b6a0;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">🐝 BeeCloud</div>
            <div class="subtitle">Nền tảng dịch vụ đám mây hàng đầu</div>
        </div>

        <div class="content">
            <div class="greeting">
                Xin chào <span class="username">{{ $user->name }}</span>! 👋
            </div>

            <div class="message">
                Cảm ơn bạn đã chọn <strong>BeeCloud</strong> làm đối tác công nghệ của mình. Để hoàn tất quá trình đăng
                ký và bắt đầu trải nghiệm những tính năng tuyệt vời, vui lòng xác nhận tài khoản của bạn bằng cách nhấn
                vào nút bên dưới.
            </div>

            <div class="button-container">
                <a href="{{ route('confirm.registration', ['token' => $token]) }}" class="button">
                    <span class="check-icon">✓</span>
                    Xác Nhận Tài Khoản
                </a>
            </div>

            <div class="disclaimer">
                <strong>Lưu ý:</strong> Nếu bạn không thực hiện đăng ký này, vui lòng bỏ qua email này. Tài khoản sẽ tự
                động bị xóa sau 24 giờ nếu không được xác nhận.
            </div>
        </div>

        <div class="footer">
            <div class="footer-text">
                © 2024 BeeCloud. Tất cả quyền được bảo lưu.
            </div>
            <div class="social-links">
                <a href="#" class="social-link">📧</a>
                <a href="#" class="social-link">📱</a>
                <a href="#" class="social-link">🌐</a>
            </div>
        </div>
    </div>
</body>

</html>
