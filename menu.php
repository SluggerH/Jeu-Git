<?php require('include/header.php'); ?>
<body>

    <div class="container">
        <H1 class="welcome">Select your caracter</H1>

        <div class="container-player">
            <div class="caracter guerrier">
                <div class="desc">
                    <img class="c" src="assets/guerrier.png" alt="guerrier">
                    <img class="d" src="assets/fiche_guerrier.png" alt="guerrier">
                </div>
                <h2>GUERRIER</h2>
                <button id="guerrier" class="game-button green">Select</button>
            </div>
            <div class="caracter mage">
                <div class="desc">
                    <img class="c" src="assets/mage.png" alt="mage">
                    <img class="d" src="assets/fiche_mage.png" alt="mage">
                </div>
                <h2>MAGE</h2>
                <button id="mage" class="game-button green">Select</button>
            </div>
        </div>

    </div>

</body>
<footer>
    <script>
        // Redirection page guerrier click button play

        var btn = document.getElementById('guerrier');
        btn.addEventListener('click', function() {
        document.location.href = 'guerrier';
        });

        // Redirection page mage click button play

        var btn = document.getElementById('mage');
        btn.addEventListener('click', function() {
        document.location.href = 'mage';
        });
    </script>
</footer>