<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rock Paper Scissor Game</title>
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="scores">
            <p>Computer : 
                <span id="computer_score">0</span>
            </p>
            <p>
                You :
                <span id="user_score">0</span>
            </p>
        </div>
        <div class="weapons">
            <button onclick="checker('rock')">
                <i class="far fa-hand-rock"></i>
            </button>
            <button onclick="checker('paper')">
                <i class="far fa-hand-paper"></i>
            </button>
            <button onclick="checker('scissor')">
                <i class="far fa-hand-scissors"></i>
            </button>
        </div>
        <div class="details">
            <p id="user_choice"></p>
            <p id="comp_choice"></p>
            <p id="result"></p>
        </div>
        <input type="button" class="button" value="Reset Game" onclick="restart()">
    </div>
    <!--Script-->
    <script src="script.js"></script>
</body>
</html>