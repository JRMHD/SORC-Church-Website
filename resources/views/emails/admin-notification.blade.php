<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - New Newsletter Subscription</title>
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
        }

        .subscription-box {
            background-color: #f0f7ff;
            /* Light blue background */
            border-left: 4px solid #1e40af;
            /* Royal Blue accent */
            padding: 20px;
            border-radius: 0 8px 8px 0;
            margin: 20px 0;
        }

        .label {
            color: #1e40af;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .value {
            margin-bottom: 15px;
            word-break: break-word;
            font-size: 16px;
        }

        .email-value {
            padding: 8px 12px;
            background-color: rgba(30, 64, 175, 0.1);
            border-radius: 4px;
            display: inline-block;
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

        .notification-text {
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{ $message->embed(public_path('images/sorc web logo.png')) }}" alt="{{ config('app.name') }} Logo">
            <h1>New Newsletter Subscription</h1>
        </div>

        <div class="gradient-divider"></div>

        <div class="email-body">
            <p class="notification-text">A new user has subscribed to the newsletter.</p>

            <div class="subscription-box">
                <div class="label">Subscriber Email:</div>
                <div class="value">
                    <span class="email-value">{{ $email }}</span>
                </div>

                <div class="label">Date Subscribed:</div>
                <div class="value">{{ date('F j, Y') }} at {{ date('g:i A') }}</div>
            </div>

            <p class="notification-text">
                You can manage all newsletter subscribers through the Control Panel.
            </p>
        </div>

        <div class="gradient-divider"></div>

        <div class="email-footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }} | All Rights Reserved</p>
        </div>
    </div>
</body>

</html>
