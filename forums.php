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
    <div class="breadCrumbs breadCrumbs-forum"></div>

    <div class="container">
        <section class="forumPage">

            <h1>All for Paws Forum</h1>

            <span class="navigation">
                <a href="forums.html">Home</a>
            </span>

            <form class="contentFilter">
                <span class="input-group-6">
                    <label>Zoek op de titel.</label>
                    <input type="search" placeholder="Zoek op de titel..." name="zoekTitel">
                </span>

                <span class="input-group-6">
                    <label>Selecteer rubriek</label>
                    <select name="rubriek">
                        <option selected>Geen</option>
                        <option>Bulldog</option>
                        <option>Jack Russel</option>
                        <option>Chihuahua</option>
                        <option>Labrador</option>
                    </select>
                </span>
            </form>

            <table class="forumCategories">
                <thead>
                    <tr>
                        <td>Onderwerpen</td>
                        <td></td>
                        <td>Gewijzigd</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <h3><a href="forums_articles.html">Bulldogg</a></h3><p>Mijn lieve hond bella is ziek</p></td>

                        <td><p>3 Berichten</p><p>420x Bekeken</p></td>
                        <td>
                            <p>Door: <a href="#">Jelmer Evers</a></p>
                            <p>1 dag geleden</p>
                        </td>
                    </tr>

                    <tr>
                        <td><h3><a href="forums_articles.html">Jack Russel</a></h3><p>Mijn jack russel plast iedere nacht in de huiskamer, wat te doen?</p></td>
                        <td><p>3 Berichten</p><p>3x Bekeken</p></td>
                        <td><p>Door: <a href="#">Brian Postma</a></p><p>1 dag geleden</p></td>
                    </tr>

                    <tr>
                        <td><h3><a href="forums_articles.html">Chihuahua</a></h3><p>Mijn chihuahua wordt niet groter dan een rat, help mij!!!</p></td>
                        <td><p>3 Berichten</p><p>4x Bekeken</p></td>
                        <td><p>Door: <a href="#">Buddy Batsman</a></p><p>1 dag geleden</p></td>
                    </tr>

                    <tr>
                        <td>
                            <h3><a href="forums_articles.html">Labrador</a></h3>
                            <p>Kijk mijn lieve labrador, hij wordt al grijs</p>
                        </td>
                        <td><p>7 Berichten</p><p>24x Bekeken</p></td>
                        <td><p>Door: <a href="#">Henny Ho</a></p><p>1 dag geleden</p></td>
                    </tr>

                </tbody>
            </table>

        </section>
    </div>
</main>

<?php include("required/footer.php"); ?>

</body>
</html>