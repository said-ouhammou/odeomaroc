<!-- <h2>Nouveau message de contact</h2>

<p><strong>Nom:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Téléphone:</strong> {{ $data['phone'] ?? 'Non fourni' }}</p>
<p><strong>Sujet:</strong> {{ $data['subject'] }}</p>
<p><strong>Message:</strong></p>
<p>{{ $data['message'] }}</p> -->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 12px;
        }

        p strong {
            color: #555;
        }

        .message {
            font-size: 16px;
            padding: 10px;
            background-color: #f1f1f1;
            border-radius: 4px;
            color: #333;
            border: 1px solid #ddd;
        }

        .footer {
            font-size: 14px;
            color: #888;
            text-align: center;
            margin-top: 30px;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Nouveau message de contact</h2>

        <p><strong>Nom:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Téléphone:</strong> {{ $data['phone'] ?? 'Non fourni' }}</p>
        <p><strong>Sujet:</strong> {{ $data['subject'] }}</p>
        
        <p><strong>Message:</strong></p>
        <p class="message">{{ $data['message'] }}</p>

        <div class="footer">
            <p>Merci de votre message! Nous reviendrons vers vous bientôt.</p>
            <p><a href="mailto:contact@odeo.ma">Contactez-nous</a> pour toute autre question.</p>
        </div>
    </div>

</body>
</html>
