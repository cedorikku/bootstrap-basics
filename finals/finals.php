<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">
    <!-- STYLING -->
    <link rel="stylesheet" href="styles.css">
    <title>NotGPT</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top my-nav">
        <div class="container d-flex justify-content-between pt-3">
            <a href="#" class="navbar-brand h2">NotGPT</a>
            <!-- Extra navbar links on the right of the logo that would also be the content of the hamburger menu -->
            <div class="nav-links d-none">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="finals.php">Generator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="surprise.php">Surprise</a>
                    </li>
                </ul>
            </div>

            <!-- Side button using hamburger icon -->
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                aria-controls="offcanvasWithBothOptions">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Off canvas menu for mobile screens -->
    <div class="offcanvas offcanvas-end bg-black text-white text-center" data-bs-scroll="true" tabindex="-1"
        id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="finals.php">Generator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="surprise.php">Surprise</a>
                </li>
            </ul>

            <footer class="container fst-italic text-light">
                <div>
                    Made with <i class="fas fa-heart text-white"></i> by <a href="https://www.github.com/cedorikku"
                        target="_blank">Ced</a>.
                </div>
                <small class="d-block">
                    <p> This is not at all associated with the real thing. </p>
                </small>
            </footer>
        </div>
    </div>

    <h2 class="d-flex justify-content-center my-5 page-heading">
        Randomly Generated Verses
    </h2>

    <?php include 'helpers/display_verse.php'; ?>

    <div class="d-flex justify-content-center mb-5">
        <a href="finals.php" class="btn btn-light">
            <i class="fas fa-sync-alt"></i> Generate
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a4d1366482.js" crossorigin="anonymous"></script>

    <script>
        /* SCRIPT FOR ANIMATION PURPOSES */
        var verse = "<?php echo randomVerse($_SESSION['currentVerse']); ?>";
        var verseReference = "<?php echo $_SESSION['currentVerse']; ?>";
        var i = 0;
        var speed = 32; // in ms

        function typeWriter() {
            if (i < verse.length) {
                document.getElementById("verse").innerHTML += verse.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
            // When the typing is done, display the caret and the verse reference
            else {
                document.getElementById("caret").style.display = 'none';
                var verseRefElement = document.getElementById("verseReference");
                verseRefElement.innerHTML = verseReference;
                verseRefElement.classList.add("fadeIn");

                // add the border on top of the card-footer
                var cardFooter = document.querySelector(".card-footer");
                cardFooter.classList.add("border-top");
            }
        }

        // Call the function when the page loads
        window.onload = typeWriter;
    </script>
</body>

</html>