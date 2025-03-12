<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Prayer Request Confirmation</title>
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

        .scripture {
            font-style: italic;
            padding: 15px;
            background-color: rgba(30, 64, 175, 0.1);
            border-radius: 6px;
            margin: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{ $message->embed(public_path('images/sorc web logo.png')) }}" alt="{{ config('app.name') }} Logo">
            <h1>Prayer Request Confirmation</h1>
        </div>

        <div class="gradient-divider"></div>

        <div class="email-body">
            <div class="message-content">
                <div class="greeting">Dear {{ $prayerRequest->name }},</div>

                <div class="message-text">
                    Thank you for reaching out to us with your prayer request. We have received it and our prayer team
                    has been notified.
                </div>

                <div class="message-text">
                    Rest assured that our team will be praying for your needs as specified in your request. We believe
                    in the power of prayer and stand with you in faith.
                </div>

                <div class="scripture">
                    "Do not be anxious about anything, but in every situation, by prayer and petition, with
                    thanksgiving, present your requests to God." - Philippians 4:6
                </div>

                <div class="blessing">God bless you!</div>
            </div>
        </div>

        <div class="gradient-divider"></div>

        <div class="email-footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }} | All Rights Reserved</p>
        </div>
    </div>
</body>

</html>
