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
    <title>All for Paws - Videopagina</title>

</head>

<body>

<?php include("required/header.php"); ?>

<main>
    <div class="container">
        <section class="videopage">

            <h1>Video's van verschillende hondenrassen!</h1>

            <form class="contentFilter">
                <span class="input-group-6">
                    <label>Zoek op de titel.</label>
                    <input type="search" placeholder="Zoek op de titel..." name="zoekTitel">
                </span>

                <span class="input-group-6">
                    <label>Selecteer rubriek</label>
                    <select name="rubriek">
                        <option selected>Geen</option>
                        <option>Grote honden</option>
                        <option>Bulldog</option>
                        <option>Duitse herder</option>
                        <option>Franse bulldog</option>
                        <option>Beagle</option>
                        <option>Jack russel</option>
                        <option>Golden retriever</option>
                        <option>Huskey</option>
                        <option>Boxer</option>
                        <option>Chihuahua</option>
                    </select>
                </span>
            </form>

            <iframe name="Youtube" allowfullscreen></iframe>

            <div class="row">
                <div class="col-3">
                    <h2>Grote honden</h2>
                    <a href="https://www.youtube.com/embed/nKv4hb5jyAU" target="Youtube"> <img src="img/Grotehond.PNG" alt="hond" class="hond"/></a>
                    <p> Ben je benieuwd naar jou hond in het groot? <br>Klik dan op dit plaatje en bekijk de video boven in!</p>
                </div>

                <div class="col-3">
                    <h2>Bulldog</h2>
                    <a href="https://www.youtube.com/embed/nyZk6CGdfhM" target="Youtube"> <img src="img/Bulldog.PNG" alt="hond" class="hond"/></a>
                    <p> Altijd al willen weten hoe een Bulldog eruit ziet? <br>Bekijk dan hier de grappigste bulldog video's!</p>
                </div>

                <div class="col-3">
                    <h2>Duitse herder</h2>
                    <a href="https://www.youtube.com/embed/mZIGAedhyzo" target="Youtube"> <img src="img/Duitseherder.PNG" alt="hond" class="hond"/> </a>
                    <p> Altijd al willen weten hoe een Duitse Herder eruit ziet? <br>Bekijk dan hier de 10 leukste weetjes!</p>
                </div>

                <div class="col-3">
                    <h2>Franse bulldog</h2>
                    <a href="https://www.youtube.com/embed/ezsxd16BtI4" target="Youtube"> <img src="img/Fransebulldog.PNG" alt="hond" class="hond"/> </a>
                    <p> Altijd al willen weten hoe een Franse bulldog? <br>Bekijk dan hier de grappigste Franse bulldog video's!</p>
                </div>

                <div class="col-3">
                    <h2>Beagle</h2>
                    <a href="https://www.youtube.com/embed/bx7BjjqHf2U" target="Youtube"> <img src="img/Beagle.PNG" alt="hond" class="hond"/> </a>
                    <p> Altijd al willen weten hoe een Beagle eruit ziet? <br> Bekijk dan hier de grappigste Beagle video's!</p>
                </div>

                <div class="col-3">
                    <h2>Jack russel</h2>
                    <a href="https://www.youtube.com/embed/0mrp2NnOe9w" target="Youtube"> <img src="img/Jackrussel.PNG" alt="hond" class="hond"/> </a>
                    <p> Altijd al willen weten hoe een Jack russel eruit ziet? Bekijk dan hier de grappigste Jack russel video's!</p>
                </div>

                <div class="col-3">
                    <h2>Golden retriever</h2>
                    <a href="https://www.youtube.com/embed/a6KGPBflhiM" target="Youtube"> <img src="img/Goldenretriever.PNG" alt="hond" class="hond"/> </a>
                    <p> Altijd al willen weten hoe een Golden retriever eruit ziet? Bekijk dan hier de schattigste Golden retriever video's!</p>
                </div>

                <div class="col-3">
                    <h2>Huskey</h2>
                    <a href="https://www.youtube.com/embed/SGc2RqEGaXM" target="Youtube"> <img src="img/Huskey.PNG" alt="hond" class="hond"/> </a>
                    <p> Altijd al willen weten hoe een Huskey eruit ziet? <br>Bekijk dan deze leuke Huskey complicatie!</p>
                </div>

                <div class="col-3">
                    <h2>Boxer</h2>
                    <a href="https://www.youtube.com/embed/heVWn3fusxA" target="Youtube"> <img src="img/Boxer.PNG" alt="hond" class="hond"/> </a>
                    <p> Altijd al willen weten hoe een Boxer eruit ziet? <br>Bekijk dan deze leuke Boxer complicatie!</p>
                </div>

                <div class="col-3">
                    <h2>Chihuahua</h2>
                    <a href="https://www.youtube.com/embed/3z9gO6U5U2Y" target="Youtube"> <img src="img/Chihuahua.PNG" alt="hond" class="hond"/> </a>
                    <p> Altijd al willen weten hoe een Chihuahua eruit ziet? <br>Bekijk dan hier de grappigste Chihuahua video's!</p>
                </div>

            </div>
        </section>
    </div>

</main>

<?php include("required/footer.php"); ?>

</body>
</html>