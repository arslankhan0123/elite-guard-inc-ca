<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .header {
            border-bottom: 2px solid #e74c3c;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .header h2 {
            margin: 0;
            color: #e74c3c;
            font-size: 24px;
        }
        .details {
            margin-bottom: 20px;
        }
        .details p {
            margin: 10px 0;
        }
        .details strong {
            width: 120px;
            display: inline-block;
            color: #555;
        }
        .message-box {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #e74c3c;
            font-style: italic;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #777;
            text-align: center;
            border-top: 1px solid #eee;
            padding-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Inquiry</h2>
        </div>
        
        <div class="details">
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone }}</p>
            <p><strong>Subject:</strong> {{ $contact->subject ?? 'N/A' }}</p>
        </div>

        <h3>Message:</h3>
        <div class="message-box">
            "{{ $contact->message }}"
        </div>

        <div class="footer">
            <p>This email was sent from the contact form on True North Build.</p>
        </div>
    </div>
</body>
</html>
