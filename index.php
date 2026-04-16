<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Noah">
    <title>Oma's Kost</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include 'header.php'; ?>

<main>

<section class="hero">

<div class="hero-text">
    <h1>Welkom bij Oma's Kost</h1>
    <p>Geniet van traditionele gerechten zoals vroeger bij oma thuis.</p>

    <a href="reserveren.php" class="btn">Reserveer een tafel</a>
</div>

</section>


<section class="home-info">

<div class="info-card">
    <h2>Verse ingrediënten</h2>
    <p>Onze gerechten worden dagelijks bereid met verse producten.</p>
</div>

<div class="info-card">
    <h2>Gezellige sfeer</h2>
    <p>Een warm restaurant waar iedereen zich thuis voelt.</p>
</div>

<div class="info-card">
    <h2>Traditionele recepten</h2>
    <p>Recepten zoals oma ze vroeger maakte.</p>
</div>

</section>

<section class="slideshow">

    <h2>Onze gerechten</h2>

    <div class="slider">

        <div class="slide active">
        <img src="img/Stamppot/boerenkool.jpg" alt="De verste boerenkool in Nederland">
        </div>

        <div class="slide">
        <img src="img/Pannenkoek/pannenkoek.jpg" alt="Lekker verse pannenkoeken">
        </div>

        <div class="slide">
        <img src="img/Drank/sundae.jpg" alt="Sundae met een biertje">
    </div>

</div>

<div class="slider-buttons">
    <button id="prev">❮</button>
    <button id="next">❯</button>
</div>

</section>

</main>

<?php include 'footer.php'; ?>