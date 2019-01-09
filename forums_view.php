<!DOCTYPE html>
<html lang="nl">
<head>

    <!-- De UTF waar de website in gecodeerd wordt -->
    <meta charset="UTF-8">

    <!-- Standaard descriptie voor SEO -->
    <meta name="description" content="Brian Postma en Jelmer Evers" />
    <meta name="keywords" content="honden, leuke dieren, dierenvoedsel, hondenspeeltjes, speeltjes, speelgoed, hondenspeelgoed, all for paws, allforpaws" />
    <meta name="author" content="All for Paws; Jelmer Evers, Brian Postma">
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <?php include("required/general.php"); ?>

    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- De titel die bovenaan weergegeven word -->
    <title>All for Paws - Forum Pagina</title>

</head>

<body>

<?php include("required/header.php"); ?>

<main>
    <div class="container">
        <section class="forumPage">

            <h1>All for Paws Forum</h1>

            <span class="navigation">
                <a href="forums.html">Home</a>
                <a href="forums_articles.html">Categorienaam</a>
                <a href="forums_view.html">Artikel</a>
            </span>

            <article>
                <h2>Mijn lieve hond bella is ziek</h2>

                <div class="forumBox">
                    <div class="forum_userInformation">
                        <img src="img/jelmer200x200.png" alt="profielfoto">
                        <span><a href="#">Jelmer Evers</a></span>
                        <span>Gemaakt op: 28/11/2018 22:22</span>
                    </div>
                    <p>Mijn hond heeft gisterenavond een koekje gegeten waar chocolade in zat, en vandaag doet hij een beetje vreemd. Volgens mij is mijn hond niet goed in orde.</p>
                    <span><a href="#">Like</a></span>
                    <span><a href="#">Reageer</a></span>
                </div>

                <div class="forumBox">
                    <div class="forum_userInformation">
                        <img src="img/BrianPostma400x400.png" alt="profielfoto">
                        <span><a href="#">Brian Postma</a></span>
                        <span>Gemaakt op: 29/11/2018 10:18</span>
                    </div>
                    <p>Erg vervelend, ik weet niet zo goed wat ik er mee moet doen...</p>
                    <span><a href="#">Like</a></span>
                    <span><a href="#">Reageer</a></span>
                </div>

                <div class="forumBox">
                    <div class="forum_userInformation">
                        <img src="img/jelmer200x200.png" alt="profielfoto">
                        <span><a href="#">Jelmer Evers</a></span>
                        <span>Gemaakt op: 29/11/2018 10:18</span>
                    </div>
                    <p>Ik ga er binnenkort mee naar de dierenarts!</p>
                    <span><a href="#">Like</a></span>
                    <span><a href="#">Reageer</a></span>
                </div>

            </article>

            <form>
                <h3>Reageer hier</h3>
                <textarea placeholder="Vul hier je tekst in." name="textPost"></textarea>
                <input type="submit" value="Reageer" name="submitPost">
            </form>

        </section>
    </div>
</main>

<?php include("required/footer.php"); ?>

</body>
</html>