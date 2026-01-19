<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email</title>
        <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #f4f4f7;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            position: relative;
        }

        .container .lcp-background {
            position: absolute;
            object-fit: cover;
            top: 0;
            left: 0;
            opacity: 0.1;
            width: 100%;
            height: 100%;
        }
        .header {

            padding: 40px 20px;
            text-align: center;
        }

        .header h2 {
            color: black;
        }
        .logo {
            font-size: 32px;
            font-weight: bold;
            color: #ffffff;
            margin: 0;
        }
        .content {
            padding: 40px 30px;
            color: #333333;
        }
        h1 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            color: #666666;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            padding: 16px 40px;
            background: linear-gradient(135deg, #ff9c62 0%, #a50000 100%);
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            margin: 20px 0;
            transition: transform 0.2s;
        }
        .button:hover {
            transform: translateY(-2px);
        }
        .code {
            font-size: 32px;
            font-weight: bold;
            color: #667eea;
            letter-spacing: 8px;
            font-family: 'Courier New', monospace;
        }
        .alternative {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 30px;
            text-align: center;
            color: #999999;
            font-size: 14px;
        }
        .footer a {
            color: #667eea;
            text-decoration: none;
        }
        .span-letters {
            color: #FF5C00;
        }
        @media only screen and (max-width: 600px) {
            .content {
                padding: 30px 20px;
            }
            h1 {
                font-size: 20px;
            }
            .code {
                font-size: 24px;
                letter-spacing: 4px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="lcp-background" src="https://i.ibb.co/TDhmBN6M/home-lcp.png" alt=""/>
        <div class="header">
            <h2 class="logo"><span class="span-letters">T</span>o <span class="span-letters">D</span>o <span class="span-letters">L</span>ist <span class="span-letters">F</span>ullStack</h2>
        </div>

        <div class="content">
            <h1>Verify Your Email Address</h1>

            <p>Hi {{$username}},</p>

            <p>Thank you for signing up! We're excited to have you on board. To complete your registration and activate your account, please verify your email address.</p>

            <center>
                <a href="<?php echo $redirectLink?>" class="button" id="verify-button" target="__blank">Verify Email Address</a>
            </center>

            <div class="alternative">
                <p style="font-size: 14px;">If the button above doesn't work, copy and paste this link into your browser:</p>
                <p style="font-size: 14px; word-break: break-all; color: #667eea;">{{$redirectLink}}</p>
            </div>

            <p style="margin-top: 30px; font-size: 14px; color: #999;">This verification link will expire in 5 hours. If you didn't create an account, you can safely ignore this email.</p>
        </div>

        <div class="footer">
            <p>© 2025 To Do List Fullstack. All rights reserved.</p>
        </div>
    </div>
    <script>
    </script>
</body>
</html>
