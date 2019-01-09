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
            </span>

            <form class="contentFilter">
                <label>Zoek op de titel.</label>
                <input type="search" placeholder="Zoek op de titel..." name="zoekTitel">
            </form>

            <table class="forumArticles">
                <thead>
                    <tr>
                        <td>Onderwerp</td>
                        <td>Aangemaakt</td>
                        <td>Door</td>
                        <td>Gewijzigd</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><h3><a href="forums_view.html">Mijn lieve hond bella is ziek</a></h3></td>
                        <td><p>29/11/2018 - 10:46</p></td>
                        <td><p><a href="#">Brian Postma</a></p></td>
                        <td><p>29/11/2018 - 10:52</p></td>
                    </tr>
                </tbody>
            </table>

        </section>

        <section class="bijdrageSchrijven">

            <label for="showArtikel">Schrijf een nieuw artikel.</label>
            <input type="checkbox" id="showArtikel" role="button">

            <div id="artikelWeergave">

                <h2>Schrijf hier je artikel</h2>

                <form>
                    <label>Titel</label>
                    <input type="text" name="articleTitle" placeholder="Schrijf hier uw titel">

                    <label>Selecteer categorie</label>
                    <select name="articleCategorie">
                        <option selected>Geen</option>
                        <option>Bulldog</option>
                        <option>Jack Russel</option>
                        <option>Chihuahua</option>
                        <option>Labrador</option>
                    </select>

                    <label>Beschrijf hier uw tekst</label>
                    <textarea name="bijdrageText" placeholder="Schrijf hier uw tekst"></textarea>

                    <input type="submit" name="articlePost" value="Verzenden">
                </form>
            </div>

        </section>
    </div>
</main>

<?php include("required/footer.php"); ?>

</body>
</html>