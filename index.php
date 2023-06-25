<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Eten op rolletjes - Reizen</title>
    <link rel="stylesheet" href="../css/output.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="">
<div class="pl-4 mb-2 sm:mb-0 flex flex-row">
    <div class="h-20 w-20 self-center mr-2">
        <a href="home.html"><img class="h-20 w-20 self-center" src="images/logo.jpg"/>
        </a>
    </div>
    <div>
        <p class="pt-6 text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Eten op
            rolletjes</p>
    </div>
</div>
<nav class=" sticky top-0 bg-gray-200 text-center grid grid-cols-4 border-solid border-gray-500">
    <a href="beweging.html" class="border-2 p-5 border-gray-500 font-medium">Beweging</a>
    <a href="index.php" class="border-y-2 border-r-2 p-5 border-gray-500 font-medium">Reizen</a>
    <a href="toegankelijkheid.html" class="border-y-2  p-5 border-gray-500 font-medium">Toegankelijkheid</a>
    <a href="index.php" class="border-2 p-5 border-gray-500 font-medium">Voorzieningen</a>
</nav>
<img src="reizenBanner.jpg" class="w-screen h-64">
<div class="mx-20">
    <div class="mx-20">
        <div class="text-center my-10">
            <h1 class="text-5xl">Reizen</h1>
        </div>
        <!-- component -->
        <?php
        //Laad content van bestand in PHP variabele
        $reizenList = file_get_contents("reizen.json");

        //Zet de code om van Json naar PHP object
        $reizenListJson = json_decode($reizenList);

        //Loop door lijst met details en bijbehorende informatie en geef de titel met de modal
        foreach ($reizenListJson->reizen as $index => $reis) {
            foreach ($reis->details as $detail) {
                echo "<p><a href='#' onclick='openModal(\"$detail->title\",\"$detail->text\",\"$detail->afbeelding\")'>$detail->title</a> <button onclick='addToFavorites(\"$detail->title\")'>✅</button></p>";
            }
            if ($index != count($reizenListJson->reizen) - 1) {
                echo "<hr>"; //Voeg een lijn toe om de data af te scheiden van elk onderwerp
            }
        }
        ?>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span id="close" class="close">&times;</span>
                <h3 id="modal-title" class="modal-title"></h3>
                <img id="modal-image">
                <p id="modal-info"></p>
            </div>
        </div>
        <div id="pop-up"></div>
        <ul id="favorites-list" class="favorites-list"></ul>
        <nav class="bg-white shadow">
            <div class="container mx-auto px-6 py-3 ">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex justify-between items-center">
                        <div class="text-xl font-semibold text-gray-700">
                            <a href="#"
                               class="text-gray-800 text-xl font-bold hover:text-gray-700 md:text-2xl">Reizen met de
                                trein</a>
                        </div>

                        <!-- Mobile menu button -->
                        <div class="flex md:hidden">
                            <button type="button"
                                    class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                                    aria-label="toggle menu">
                                <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                    <path fill-rule="evenodd"
                                          d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <a href="reizenTrein.html">
            <div class="w-full bg-cover bg-center"
                 style="height:32rem; background-image: url(https://media.nu.nl/m/nvbxfhpa3pkz_wd1280/reizen-met-de-trein-haast-onmogelijk-voor-mensen-met-een-beperking.jpg);">
                <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
                    <div class="text-center">
                        <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl">Hoe worden treinen
                            toegankelijk
                            gemaakt</h1>
                        <button class="mt-4 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            Openen
                        </button>
                    </div>
                </div>
            </div>
        </a>
        <!-- component -->
        <div class="pt-10"></div>
        <nav class="bg-white shadow">
            <div class="container mx-auto px-6 py-3 ">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex justify-between items-center">
                        <div class="text-xl font-semibold text-gray-700">
                            <a href="#"
                               class="text-gray-800 text-xl font-bold hover:text-gray-700 md:text-2xl">Reizen met de
                                bus</a>
                        </div>

                        <!-- Mobile menu button -->
                        <div class="flex md:hidden">
                            <button type="button"
                                    class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                                    aria-label="toggle menu">
                                <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                    <path fill-rule="evenodd"
                                          d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <a href="reizenBus.html">
            <div class="w-full bg-cover bg-center"
                 style="height:32rem; background-image: url(https://images0.persgroep.net/rcs/D6GZmPFLWkbS-yDcj5WBl1ZKWoM/diocontent/70168812/_fitwidth/763?appId=93a17a8fd81db0de025c8abd1cca1279&quality=0.8);">
                <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
                    <div class="text-center">
                        <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl">Hoe worden bussen
                            toegankelijk
                            gemaakt</h1>
                        <button class="mt-4 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            Openen
                        </button>
                    </div>
                </div>
            </div>
        </a>
        <!-- component -->
        <div class="pt-10">
            <nav class="bg-white shadow">
                <div class="container mx-auto px-6 py-3 ">
                    <div class="md:flex md:items-center md:justify-between">
                        <div class="flex justify-between items-center">
                            <div class="text-xl font-semibold text-gray-700">
                                <a href="#"
                                   class="text-gray-800 text-xl font-bold hover:text-gray-700 md:text-2xl">Reizen met de
                                    tram</a>
                            </div>

                            <!-- Mobile menu button -->
                            <div class="flex md:hidden">
                                <button type="button"
                                        class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                                        aria-label="toggle menu">
                                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                        <path fill-rule="evenodd"
                                              d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <a href="reizenTram.html">
                <div class="w-full bg-cover bg-center"
                     style="height:32rem; background-image: url(https://help.delijn.be/hc/article_attachments/360049465751/Rolstoelgebruiker-aanperron_tcm3-23967.jpg);">
                    <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
                        <div class="text-center">
                            <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl">Hoe worden trams
                                toegankelijk
                                gemaakt</h1>
                            <button class="mt-4 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                Openen
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <!-- component -->
            <div class="pt-10"></div>
            <nav class="bg-white shadow">
                <div class="container mx-auto px-6 py-3 ">
                    <div class="md:flex md:items-center md:justify-between">
                        <div class="flex justify-between items-center">
                            <div class="text-xl font-semibold text-gray-700">
                                <a href="#"
                                   class="text-gray-800 text-xl font-bold hover:text-gray-700 md:text-2xl">Reizen met de
                                    metro</a>
                            </div>

                            <!-- Mobile menu button -->
                            <div class="flex md:hidden">
                                <button type="button"
                                        class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                                        aria-label="toggle menu">
                                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                        <path fill-rule="evenodd"
                                              d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <a href="reizenMetro.html">
                <div class="w-full bg-cover bg-center"
                     style="height:32rem; background-image: url(https://mskidsweb.nl/wp-content/uploads/2022/11/Man-in-rolstoel-metro-UG.jpg);">
                    <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
                        <div class="text-center">
                            <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl">Hoe worden metro's
                                toegankelijk
                                gemaakt</h1>
                            <button class="mt-4 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                Openen
                            </button>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
    <div class="pt-10">
        <footer class="shadow dark:bg-gray-200">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm sm:text-center">© 2023 <a href="home.html" class="hover:underline">Eten op Rolletjes™</a>. All Rights Reserved.
            </span>
            </div>
        </footer>
    </div>
</div>
</body>
<script type="text/javascript" src="favorites.js" defer></script>
<script type="text/javascript" src="modal2.js" defer></script>
</html>