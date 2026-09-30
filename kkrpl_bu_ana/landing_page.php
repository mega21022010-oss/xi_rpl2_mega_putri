<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laundry Anti Gamon</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #fff7fb;
            color: #2d1b2e;
        }

        /* NAVBAR */
        nav {
            height: 75px;
            padding: 0 8%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background: white;

            box-shadow: 0 3px 15px rgba(0,0,0,0.06);

            position: relative;
            z-index: 10;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            color: #e83e8c;
        }

        .logo span {
            color: #7b3fe4;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #59465c;
            font-size: 14px;
        }

        .login-btn {
            background: #e83e8c;
            color: white !important;

            padding: 11px 22px;
            border-radius: 25px;

            font-weight: bold;

            box-shadow: 0 7px 18px rgba(232,62,140,.25);
        }

        /* HERO */
        .hero {
            min-height: calc(100vh - 75px);

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 60px 8%;

            overflow: hidden;

            background:
                radial-gradient(circle at 10% 20%, #ffd6e9 0, transparent 25%),
                radial-gradient(circle at 90% 80%, #e3d4ff 0, transparent 28%);
        }

        .hero-text {
            width: 55%;
        }

        .small-text {
            display: inline-block;

            padding: 9px 17px;

            background: #ffe1ef;
            color: #d72d7d;

            border-radius: 30px;

            font-size: 13px;
            font-weight: bold;

            margin-bottom: 22px;
        }

        .hero h1 {
            font-size: 65px;
            line-height: 1.03;

            letter-spacing: -2px;

            margin-bottom: 22px;
        }

        .hero h1 .pink {
            color: #e83e8c;
        }

        .hero h1 .purple {
            color: #7b3fe4;
        }

        .tagline {
            font-size: 21px;
            font-weight: bold;

            color: #5f4561;

            margin-bottom: 15px;
        }

        .description {
            max-width: 560px;

            color: #806f82;

            font-size: 16px;
            line-height: 1.7;

            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            gap: 13px;
        }

        .btn-main,
        .btn-second {
            padding: 14px 25px;

            border-radius: 30px;

            text-decoration: none;

            font-weight: bold;
        }

        .btn-main {
            background: #e83e8c;
            color: white;

            box-shadow: 0 10px 25px rgba(232,62,140,.3);
        }

        .btn-second {
            background: white;
            color: #7b3fe4;

            border: 1px solid #eaddec;
        }

        /* ILUSTRASI */
        .visual {
            width: 42%;
            height: 450px;

            position: relative;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .big-circle {
            width: 370px;
            height: 370px;

            background: #ffe1ef;

            border-radius: 50%;

            position: absolute;
        }

        .machine {
            width: 235px;
            height: 300px;

            background: white;

            border: 7px solid #e7ddea;

            border-radius: 28px;

            position: relative;
            z-index: 2;

            padding: 18px;

            box-shadow: 0 25px 55px rgba(91,48,96,.18);
        }

        .machine-header {
            height: 38px;

            background: #f5edf7;

            border-radius: 10px;

            margin-bottom: 17px;
        }

        .machine-door {
            width: 170px;
            height: 170px;

            border-radius: 50%;

            margin: auto;

            background: #f1e4f7;

            border: 12px solid #d8c6df;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .clothes {
            width: 105px;
            height: 105px;

            border-radius: 50%;

            background: linear-gradient(
                135deg,
                #e83e8c,
                #7b3fe4
            );

            position: relative;
        }

        .heart {
            position: absolute;

            font-size: 50px;

            color: white;

            top: 23px;
            left: 29px;
        }

        .bubble {
            position: absolute;

            z-index: 5;

            background: white;

            padding: 12px 17px;

            border-radius: 15px;

            font-size: 13px;

            font-weight: bold;

            box-shadow: 0 10px 25px rgba(0,0,0,.12);
        }

        .bubble.one {
            top: 55px;
            right: 0;

            color: #e83e8c;
        }

        .bubble.two {
            bottom: 55px;
            left: 0;

            color: #7b3fe4;
        }

        /* QUOTE */
        .quote {
            padding: 75px 8%;

            text-align: center;

            background: #2d1b2e;

            color: white;
        }

        .quote h2 {
            font-size: 35px;

            margin-bottom: 13px;
        }

        .quote p {
            color: #e9dce9;

            font-size: 17px;
        }

        /* FITUR */
        .features {
            padding: 80px 8%;

            background: white;
        }

        .section-title {
            text-align: center;

            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 32px;

            margin-bottom: 10px;
        }

        .section-title p {
            color: #806f82;
        }

        .cards {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 22px;
        }

        .card {
            padding: 30px;

            border-radius: 20px;

            background: #fff8fc;

            border: 1px solid #f1deeb;

            transition: .3s;
        }

        .card:hover {
            transform: translateY(-7px);

            box-shadow: 0 15px 30px rgba(80,30,70,.1);
        }

        .icon {
            width: 52px;
            height: 52px;

            border-radius: 15px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #ffe1ef;

            font-size: 24px;

            margin-bottom: 18px;
        }

        .card h3 {
            margin-bottom: 10px;
        }

        .card p {
            color: #806f82;

            line-height: 1.6;

            font-size: 14px;
        }

        /* FOOTER */
        footer {
            padding: 25px;

            text-align: center;

            background: #2d1b2e;

            color: #cdbdce;

            font-size: 13px;
        }

        /* RESPONSIVE */
        @media(max-width: 850px) {

            .hero {
                flex-direction: column;

                text-align: center;
            }

            .hero-text {
                width: 100%;
            }

            .hero h1 {
                font-size: 46px;
            }

            .description {
                margin-left: auto;
                margin-right: auto;
            }

            .buttons {
                justify-content: center;
            }

            .visual {
                width: 100%;
                margin-top: 40px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .nav-menu a:not(.login-btn) {
                display: none;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav>

    <div class="logo">
        🧺 Laundry<span>AntiGamon</span>
    </div>

    <div class="nav-menu">

        <a href="#home">
            Home
        </a>

        <a href="#fitur">
            Fitur
        </a>

        <a href="#cerita">
            Tentang
        </a>

        <a href="login.php" class="login-btn">
            Login
        </a>

    </div>

</nav>


<!-- HERO -->
<section class="hero" id="home">

    <div class="hero-text">

        <div class="small-text">
            🫧 TEMPAT BUAT MOVE ON
        </div>

        <h1>
            <span class="pink">LAUNDRY</span>
            <br>
            <span class="purple">ANTI GAMON</span>
        </h1>

        <div class="tagline">
            Hilang kenangannya, luntur cintanya. 💔
        </div>

        <p class="description">
            Baju kotor jangan ditumpuk, kenangan mantan juga.
            Serahkan cucianmu kepada kami dan biarkan mesin
            yang bekerja. Kamu? Tinggal move on.
        </p>

        <div class="buttons">

            <a href="login.php" class="btn-main">
                🫧 Cuci Sekarang
            </a>

            <a href="#fitur" class="btn-second">
                Lihat Layanan
            </a>

        </div>

    </div>


    <!-- GAMBAR MESIN CUCI -->
    <div class="visual">

        <div class="big-circle"></div>

        <div class="bubble one">
            💕 Mantan? Dicuci aja!
        </div>

        <div class="bubble two">
            ✨ Baju bersih, hati bersih
        </div>

        <div class="machine">

            <div class="machine-header"></div>

            <div class="machine-door">

                <div class="clothes">

                    <div class="heart">
                        ♥
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- QUOTE -->
<section class="quote" id="cerita">

    <h2>
        "Jangan dicuci perasaannya,<br>
        dicuci bajunya aja."
    </h2>

    <p>
        Karena yang perlu hilang itu noda, bukan harga diri. 😭
    </p>

</section>


<!-- FITUR -->
<section class="features" id="fitur">

    <div class="section-title">

        <h2>
            Kenapa Laundry Anti Gamon?
        </h2>

        <p>
            Cucian beres, hidup lanjut.
        </p>

    </div>


    <div class="cards">

        <div class="card">

            <div class="icon">
                🧺
            </div>

            <h3>
                Cucian Bersih
            </h3>

            <p>
                Pakaian kotor kami bantu proses sampai
                bersih dan siap dipakai lagi.
            </p>

        </div>


        <div class="card">

            <div class="icon">
                💔
            </div>

            <h3>
                Anti Gamon
            </h3>

            <p>
                Hilangkan noda dan kenangan dalam
                satu tempat. Walaupun mantan tetap
                nggak bisa dicuci.
            </p>

        </div>


        <div class="card">

            <div class="icon">
                ⚡
            </div>

            <h3>
                Cepat & Praktis
            </h3>

            <p>
                Tinggal masukkan data laundry,
                biarkan kami mengurus sisanya.
            </p>

        </div>

    </div>

</section>


<footer>

    © <?php echo date("Y"); ?>
    Laundry Anti Gamon — Hilang kenangannya, luntur cintanya.

</footer>

</body>
</html>