<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="shortcut icon" href="./statics/image/fav.ico" type="image/x-icon">
    <title>Contact</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
            text-align: center;
            overflow: hidden;
        }

        p {
            font-size: 34px;
        }

        .player {
            width: 400px;
            height: 400px;
        }
        @media (max-width: 600px) {
            p {
                font-size: 20px;
            }
            .player{
                width: 300px;
                height: 300px;
            }
        }

    </style>
</head>

<body>
    <p><b>Sorry, You have already participated in this event<br>You can't participate again</b></p>
    <lottie-player class="player" background="white" src="./statics/already.json" autoplay loop></lottie-player>
</body>

</html>