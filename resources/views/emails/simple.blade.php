<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help New Customer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333333;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
            color: #555555;
        }
        .customer-info {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #888888;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>New Customer</h2>

    <div class="customer-info">
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Question:</strong></p>
        <p>{{ $question }}</p>
    </div>

    <p>We have received the above inquiry from the customer. Please review and respond as soon as possible.</p>

    <p class="footer">
        Best regards,<br>
        Support Team | Company Name | Address | Phone Number
    </p>
</div>
</body>
</html>
