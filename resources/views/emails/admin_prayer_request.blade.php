<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Prayer Request Submission</title>
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

        .prayer-time {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .prayer-time-item {
            flex: 0 0 48%;
        }

        .consent-badges {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-yes {
            background-color: #dcfce7;
            color: #166534;
        }

        .badge-no {
            background-color: #fee2e2;
            color: #991b1b;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{ $message->embed(public_path('images/sorc web logo.png')) }}" alt="{{ config('app.name') }} Logo">
            <h1>New Prayer Request Submission</h1>
        </div>

        <div class="gradient-divider"></div>

        <div class="email-body">
            <p>You have received a new prayer request from the {{ config('app.name') }} website:</p>

            <div class="contact-details">
                <div class="label">Name:</div>
                <div class="value">{{ $prayerRequest->name }}</div>

                <div class="label">Email:</div>
                <div class="value">{{ $prayerRequest->email }}</div>

                <div class="label">Phone:</div>
                <div class="value">{{ $prayerRequest->phone }}</div>

                <div class="label">Location:</div>
                <div class="value">{{ $prayerRequest->location }}</div>

                <div class="prayer-time">
                    <div class="prayer-time-item">
                        <div class="label">Preferred Prayer Date:</div>
                        <div class="value">
                            {{ \Carbon\Carbon::parse($prayerRequest->preferred_date)->format('F j, Y') }}</div>
                    </div>

                    <div class="prayer-time-item">
                        <div class="label">Preferred Prayer Time:</div>
                        <div class="value">{{ \Carbon\Carbon::parse($prayerRequest->preferred_time)->format('g:i A') }}
                        </div>
                    </div>
                </div>

                <div class="label">Type of Prayer Request:</div>
                <div class="value">{{ ucfirst($prayerRequest->prayer_type) }}</div>

                <div class="label">Consent Information:</div>
                <div class="consent-badges">
                    <span class="badge {{ $prayerRequest->privacy_consent ? 'badge-yes' : 'badge-no' }}">
                        Privacy Consent: {{ $prayerRequest->privacy_consent ? 'Yes' : 'No' }}
                    </span>
                    <span class="badge {{ $prayerRequest->public_sharing ? 'badge-yes' : 'badge-no' }}">
                        Public Sharing: {{ $prayerRequest->public_sharing ? 'Yes' : 'No' }}
                    </span>
                </div>
            </div>

            <div class="message-box">
                <div class="label">Prayer Request:</div>
                <div class="value">{{ $prayerRequest->prayer_request }}</div>
            </div>
        </div>

        <div class="gradient-divider"></div>

        <div class="email-footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }} | All Rights Reserved</p>
        </div>
    </div>
</body>

</html>
