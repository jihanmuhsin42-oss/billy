<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $pesan = $_POST['pesan'];
    $tempat = $_POST['tempat'];

    mysqli_query($conn, "INSERT INTO teman
    (nama, tanggal, pesan, tempat)

    VALUES 
    (
        '$nama',
        '$tanggal',
        '$pesan',
        '$tempat'
    )
    ");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musin & Billy</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="background"></div>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            <img src="foto/logo-nav.png" alt="logo">
            <span>PONPES RIYADHUL ULUM</span>
        </div>

        <div class="menu">
            <a href="#story">Story</a>
            <a href="#daftar">Pesan</a>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">

        <div class="hero-content">

            <div class="logo-icon">
                <img src="foto/logo-nav.png" alt="logo">
            </div>

            <p class="welcome">
                SELAMAT DATANG
            </p>

            <h1>
                Billy <span>&</span> Muhsin
            </h1>

            <p class="tanggal">
                EST : 2026 - 2027
            </p>

            <p class="hero-text">
                Selamat datang mas Billy, kita teman di PPRU ini.
                Jangan lupakan aku MUSIN ya.
                Ini aku buat pada tanggal 19/05/2026 jam 17:09.
            </p>

            <a href="#daftar" class="btn">
                Kirim Pesan
            </a>

        </div>

    </section>

    <!-- STORY -->
    <section id="story">

        <h2>Memori Kami</h2>

        <div class="story-container">

            <div class="story-image">
                <img src="foto/1.jpg" alt="foto">
            </div>

            <div class="story-image">
                <img src="foto/2.jpg" alt="foto">
            </div>

            <div class="story-image">
                <img src="foto/3.jpg" alt="foto">
            </div>

            <div class="story-image">
                <img src="foto/4.jpg" alt="foto">
            </div>

            <div class="story-image">
                <img src="foto/5.jpg" alt="foto">
            </div>

            <div class="story-image">
                <img src="foto/6.jpg" alt="foto">
            </div>

            <div class="story-image">
                <img src="foto/7.jpg" alt="foto">
            </div>

            <div class="story-image">
                <img src="foto/8.jpg" alt="foto">
            </div>

            <div class="story-image">
                <img src="foto/9.jpg" alt="foto">
            </div>

            <div class="story-image">
                <img src="foto/10.jpg" alt="foto">
            </div>

            <div class="story-image">
                <img src="foto/11.jpg" alt="foto">
            </div>

            <div class="story-image">
                <img src="foto/12.jpg" alt="foto">
            </div>

        </div>

        <div class="story-text">
            Dipertemukan oleh sabilillah,
            dipisahkan oleh sabilillah,
            maka surga baginya.
        </div>

    </section>

    <!-- MAP -->
    <section class="lokasi">

        <div class="container">

            <h2>Lokasi</h2>

            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1664.8934789893528!2d100.54934903830782!3d0.7114490818255053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302b2db7703c4703%3A0x7176ec95f02be81c!2sYAYASAN%20TUAH%20AMANAT%20UMAT!5e1!3m2!1sen!2sid!4v1770697792180!5m2!1sen!2sid"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

        </div>

    </section>

    <!-- FORM -->
    <section id="daftar">

        <h2>Pesan</h2>

        <form method="post">

            <div class="form-container">

                <input 
                    type="text"
                    name="nama"
                    placeholder="Isi nama"
                    required
                >

                <input 
                    type="text"
                    name="tanggal"
                    placeholder="Isi tanggal"
                    required
                >

                <input 
                    type="text"
                    name="pesan"
                    placeholder="Isi pesan"
                    required
                >

                <input 
                    type="text"
                    name="tempat"
                    placeholder="Isi tempat"
                    required
                >

                <button type="submit" name="simpan">
                    Kirim Pesan
                </button>

            </div>

        </form>

    </section>

</body>
</html>