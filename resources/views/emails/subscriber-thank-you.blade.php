<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Newsletter Subscription Confirmation</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .email-header {
            background-color: #1e40af;
            /* Royal Blue */
            color: white;
            padding: 25px;
            text-align: center;
        }

        .email-header img {
            max-width: 180px;
            height: auto;
            margin-bottom: 15px;
        }

        .email-header h1 {
            margin: 0;
            font-weight: 600;
            font-size: 24px;
        }

        .email-body {
            padding: 30px;
            background-color: #ffffff;
            text-align: center;
        }

        .message-content {
            background-color: #f0f7ff;
            /* Light blue background */
            border-radius: 8px;
            padding: 30px;
            margin: 20px 0;
            text-align: left;
        }

        .greeting {
            font-size: 20px;
            color: #1e40af;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .message-text {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .blessing {
            font-size: 18px;
            font-weight: 600;
            color: #1e40af;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .church-name {
            font-size: 18px;
            font-weight: 700;
            color: #1e40af;
        }

        .email-footer {
            background-color: #1e40af;
            /* Royal Blue */
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 14px;
        }

        .gradient-divider {
            height: 4px;
            background: linear-gradient(to right, #1e40af, #3b82f6, #1e40af);
            margin: 0;
        }

        .social-links {
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .social-button {
            display: inline-block;
            background-color: white;
            color: #1e40af;
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            border-radius: 50%;
            margin: 0 8px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{ $message->embed(public_path('images/sorc web logo.png')) }}" alt="{{ config('app.name') }} Logo">
            <h1>Newsletter Subscription Confirmed</h1>
        </div>

        <div class="gradient-divider"></div>

        <div class="email-body">
            <div class="message-content">
                <div class="greeting">Dear Subscriber,</div>

                <div class="message-text">
                    Thank you for subscribing to our newsletter! We're excited to keep you updated with upcoming events,
                    teachings, and testimonies.
                </div>

                <div class="message-text">
                    You'll start receiving our updates soon. We promise to respect your inbox and only send content that
                    is valuable and relevant to our church community.
                </div>

                <div class="blessing">Stay blessed!</div>

                <div class="church-name">Springs of Restoration Church</div>
            </div>
        </div>

        <div class="gradient-divider"></div>

        <div class="email-footer">
            {{-- <div class="social-links">
                <a href="#" class="social-button">f</a>
                <a href="#" class="social-button">t</a>
                <a href="#" class="social-button">i</a>
            </div> --}}
            <p>&copy; {{ date('Y') }} {{ config('app.name') }} | All Rights Reserved</p>
        </div>
    </div>
</body>

</html>
