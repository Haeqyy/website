<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Controller</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(45deg, #FF6B6B, #4ECDC4, #45B7D1);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 800px;
            width: 90%;
            transform: translateY(0);
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .container:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
            position: relative;
            padding-bottom: 15px;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(to right, #FF6B6B, #4ECDC4);
            border-radius: 2px;
        }

        .neon-text {
            text-shadow: 0 0 10px rgba(78, 205, 196, 0.5),
                         0 0 20px rgba(78, 205, 196, 0.3),
                         0 0 30px rgba(78, 205, 196, 0.1);
        }

        .decoration {
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(45deg, #FF6B6B, #4ECDC4);
            filter: blur(50px);
            opacity: 0.5;
        }

        .decoration:nth-child(1) {
            top: 20%;
            left: 20%;
        }

        .decoration:nth-child(2) {
            bottom: 20%;
            right: 20%;
        }

        @media (max-width: 600px) {
            .container {
                width: 95%;
                padding: 2rem;
            }

            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="decoration"></div>
    <div class="decoration"></div>
    <div class="container">
        <h1 class="neon-text">Contoh Controller</h1>
    </div>

    <!-- Tambahkan link font Poppins dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</body>
</html>