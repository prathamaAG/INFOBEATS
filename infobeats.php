<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Meta tags for defining document properties -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infobeats</title>
    <link rel="stylesheet" href="infobeats.css">
    <!-- Link to the external CSS file for styling -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto:wght@500&display=swap">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="logo.png" alt="Infobeats">
                <!-- Logo section -->
                <h1>INFOBEATS</h1>
            </div>
            <div class="nav-links">
                <!-- Each link represents a category -->
                <a href="#" class="nav-item" id="sports-link" onclick="onNavItemClick('sports')">Sports <span></span></a>
                <a href="#" class="nav-item" id="finance-link" onclick="onNavItemClick('finance')">Finance <span></span></a>
                <a href="#" class="nav-item" id="politics-link" onclick="onNavItemClick('politics')">Politics <span></span></a>
                <a href="#" class="nav-item" id="movies-link" onclick="onNavItemClick('movies')">Movies <span></span></a>
                <a href="#" class="nav-item" id="technology-link" onclick="onNavItemClick('technology')">Technology <span></span></a>
                <a href="#" class="nav-item" id="stocks-crypto-link" onclick="onNavItemClick('stocks')">Stocks & Crypto <span></span></a>
                <a href="about.html" class="nav-item">About</a>

            </div>
            <!-- Search bar section -->
            <div class="search-bar flex">
                <input id="search-text" type="text" class="news-input" placeholder="e.g. Science">
                <button id="search-button" class="search-button" onclick="searchNews()">Search</button>
            </div>
        </nav>
    </header>
    <main>
        <div class="cards-container container flex" id="cards-container"></div>
    </main>

    <template id="template-news-card">
        <div class="card">
            <div class="card-header">
                <img src="https://via.placeholder.com/400x200" alt="news-image" id="news-img">
            </div>
            <div class="card-content">
                <h3 id="news-title">This is the Title</h3>
                <h6 class="news-source" id="news-source">End Gadget 26/08/2023</h6>
                <p class="news-desc" id="news-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe quis voluptatum quisquam vitae doloremque facilis molestias quae ratione cumque!</p>
            </div>
        </div>
    </template>
    <script src="infobeats.js"></script>
</body>

</html>