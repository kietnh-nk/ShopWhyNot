<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mã OTP - Thay đổi mật khẩu</title>
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

        .header-content {
            position: relative;
            z-index: 2;
        }

        .logo {
            font-size: 32px;
            font-weight: bold;
            color: white;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
        }

        .security-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 16px;
            border-radius: 20px;
            color: white;
            font-size: 14px;
            margin-top: 15px;
            backdrop-filter: blur(10px);
        }

        .content {
            padding: 40px 30px;
            background: white;
            text-align: center;
        }

        .greeting {
            font-size: 24px;
            color: #2d3748;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .message {
            font-size: 16px;
            color: #4a5568;
            margin-bottom: 30px;
            line-height: 1.7;
        }

        .otp-container {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            border: 2px dashed #14b6a0;
            border-radius: 20px;
            padding: 30px;
            margin: 30px 0;
            position: relative;
            overflow: hidden;
        }

        .otp-container::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #14b6a0, #0891b2, #14b6a0, #0891b2);
            background-size: 400% 400%;
            border-radius: 20px;
            z-index: -1;
            animation: gradientShift 3s ease infinite;
        }

        @keyframes gradientShift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .otp-label {
            font-size: 16px;
            color: #718096;
            margin-bottom: 15px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .otp-code {
            font-size: 48px;
            font-weight: bold;
            color: #14b6a0;
            font-family: 'Courier New', monospace;
            letter-spacing: 8px;
            text-shadow: 0 2px 4px rgba(20, 182, 160, 0.2);
            margin: 20px 0;
            position: relative;
        }

        .otp-digits {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }

        .otp-digit {
            width: 60px;
            height: 60px;
            background: white;
            border: 2px solid #14b6a0;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            color: #14b6a0;
            box-shadow: 0 4px 12px rgba(20, 182, 160, 0.15);
            animation: digitPulse 2s ease-in-out infinite;
        }

        .otp-digit:nth-child(1) {
            animation-delay: 0s;
        }

        .otp-digit:nth-child(2) {
            animation-delay: 0.2s;
        }

        .otp-digit:nth-child(3) {
            animation-delay: 0.4s;
        }

        .otp-digit:nth-child(4) {
            animation-delay: 0.6s;
        }

        .otp-digit:nth-child(5) {
            animation-delay: 0.8s;
        }

        .otp-digit:nth-child(6) {
            animation-delay: 1s;
        }

        @keyframes digitPulse {

            0%,
            100% {
                transform: scale(1);
                box-shadow: 0 4px 12px rgba(20, 182, 160, 0.15);
            }

            50% {
                transform: scale(1.05);
                box-shadow: 0 6px 20px rgba(20, 182, 160, 0.3);
            }
        }

        .timer-container {
            background: #fff5f5;
            border: 1px solid #fed7d7;
            border-radius: 12px;
            padding: 20px;
            margin: 30px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .timer-icon {
            width: 24px;
            height: 24px;
            background: #e53e3e;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 12px;
            animation: timerPulse 1s ease-in-out infinite;
        }

        @keyframes timerPulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        .timer-text {
            color: #c53030;
            font-weight: 600;
            font-size: 16px;
        }

        .security-note {
            background: linear-gradient(135deg, #e6fffa 0%, #b2f5ea 100%);
            border-left: 4px solid #14b6a0;
            border-radius: 12px;
            padding: 20px;
            margin: 30px 0;
            text-align: left;
        }

        .security-note-title {
            font-weight: bold;
            color: #14b6a0;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .security-note-content {
            color: #2d5a52;
            font-size: 14px;
            line-height: 1.6;
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

        .support-info {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 15px;
            margin-top: 15px;
            font-size: 13px;
            color: #4a5568;
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

            .otp-code {
                font-size: 36px;
                letter-spacing: 4px;
            }

            .otp-digit {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .otp-digits {
                gap: 8px;
            }
        }

        .copy-button {
            background: #14b6a0;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 12px;
            cursor: pointer;
            margin-top: 10px;
            transition: all 0.3s ease;
        }

        .copy-button:hover {
            background: #0891b2;
            transform: translateY(-1px);
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <div class="header-content">
                <div class="logo">Thay đổi mật khẩu</div>
                <div class="subtitle">Xác thực bảo mật</div>
                <div class="security-badge">
                    🔒 Mã xác thực OTP
                </div>
            </div>
        </div>

        <div class="content">
            <div class="greeting">
                Xin chào! 👋
            </div>

            <div class="message">
                Bạn đã yêu cầu mã OTP để xác thực tài khoản. Vui lòng sử dụng mã bên dưới để hoàn tất quá trình xác
                thực.
            </div>

            <div class="otp-container">
                <div class="otp-label">Mã OTP của bạn</div>
                <div class="otp-digits">
                    {{-- <div class="otp-digit">{{ substr($otp, 0, 1) }}</div>
                    <div class="otp-digit">{{ substr($otp, 1, 1) }}</div>
                    <div class="otp-digit">{{ substr($otp, 2, 1) }}</div>
                    <div class="otp-digit">{{ substr($otp, 3, 1) }}</div>
                    <div class="otp-digit">{{ substr($otp, 4, 1) }}</div>
                    <div class="otp-digit">{{ substr($otp, 5, 1) }}</div> --}}

                    <div class="otp-code">{{ $otp }}</div>
                </div>
                
                {{-- <button class="copy-button" onclick="copyOTP()">📋 Sao chép mã</button> --}}
            </div>

            <div class="timer-container">
                <div class="timer-icon">⏱</div>
                <div class="timer-text">Mã này có hiệu lực trong 5 phút</div>
            </div>

            <div class="security-note">
                <div class="security-note-title">
                    🛡️ Lưu ý bảo mật
                </div>
                <div class="security-note-content">
                    • Không chia sẻ mã OTP này với bất kỳ ai<br>
                    • Chúng tôi sẽ không bao giờ yêu cầu mã OTP qua điện thoại<br>
                    • Nếu bạn không yêu cầu mã này, vui lòng bỏ qua email<br>
                    • Liên hệ hỗ trợ nếu có nghi ngờ bất thường
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer-text">
                © 2025 Devpro. Email này được gửi tự động, vui lòng không trả lời.
            </div>
            <div class="support-info">
                <strong>Cần hỗ trợ?</strong><br>
                📧 {{env('EMAIL')}} | 📞 {{env('PHONE')}}
            </div>
        </div>
    </div>


</body>

</html>
