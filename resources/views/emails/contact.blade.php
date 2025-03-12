<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Contact Form Submission</title>
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

        .contact-details {
            background-color: #f8fafc;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
        }

        .message-box {
            background-color: #f0f7ff;
            /* Light blue background */
            border-left: 4px solid #1e40af;
            /* Royal Blue accent */
            padding: 20px;
            border-radius: 0 8px 8px 0;
            margin-top: 20px;
        }

        .label {
            color: #1e40af;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .value {
            margin-bottom: 15px;
            word-break: break-word;
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
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{ $message->embed(public_path('images/sorc web logo.png')) }}" alt="{{ config('app.name') }} Logo">
            <h1>New Contact Form Submission</h1>
        </div>

        <div class="gradient-divider"></div>

        <div class="email-body">
            <p>You have received a new contact form submission from the {{ config('app.name') }} website:</p>

            <div class="contact-details">
                <div class="label">Name:</div>
                <div class="value">{{ $data['name'] }}</div>

                <div class="label">Email:</div>
                <div class="value">{{ $data['email'] }}</div>

                <div class="label">Phone:</div>
                <div class="value">{{ $data['phone'] }}</div>

                <div class="label">Subject:</div>
                <div class="value">{{ $data['subject'] }}</div>
            </div>

            <div class="message-box">
                <div class="label">Message:</div>
                <div class="value">{{ $data['message'] }}</div>
            </div>
        </div>

        <div class="gradient-divider"></div>

        <div class="email-footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }} | All Rights Reserved</p>
        </div>
    </div>
</body>

</html>
