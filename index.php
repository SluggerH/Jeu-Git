<?php require('include/header.php'); ?>
<body>

    <div class="container">
        <H1 class="welcome">Welcome on board Captain !</H1>

        <button id="menu" class="game-button">Play</button>
        <!-- <button class="game-button orange">Potion</button>
        <button class="game-button red">Defense</button>
        <button class="game-button green">Attack</button> -->
    </div>

</body>
<footer>
    <script>
        // Redirection page menu click button play

        var btn = document.getElementById('menu');
        btn.addEventListener('click', function() {
        document.location.href = 'menu';
        });
    </script>
</footer>