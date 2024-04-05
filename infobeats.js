// API key for accessing News API
const API_KEY = "9e47fc02119b4c46959b7a7805c6ee08";

// Base URL for fetching news data
const url = "https://newsapi.org/v2/everything?q=";

// Event listener for loading news when window is loaded
window.addEventListener("load", () => fetchNews("India"));

// Function to fetch news data based on query
async function fetchNews(query) {
    const res = await fetch(url + query + "&apiKey=" + API_KEY);
    const data = await res.json();
    bindData(data.articles);
}

// Function to bind fetched news data to HTML template
function bindData(articles) {
    const cardsContainer = document.getElementById("cards-container");
    const newsCardTemplate = document.getElementById("template-news-card");

    // Clear previous content in cards container
    cardsContainer.innerHTML = "";

    // Iterate through each article and bind data to card template
    articles.forEach((article) => {
        if (!article.urlToImage) return; // Skip articles without image
        const cardClone = newsCardTemplate.content.cloneNode(true);
        fillDataInCard(cardClone, article);
        cardsContainer.appendChild(cardClone);
    });
}

// Function to fill data into the news card template
function fillDataInCard(cardClone, article) {
    const newsImg = cardClone.querySelector("#news-img");
    const newsTitle = cardClone.querySelector("#news-title");
    const newsSource = cardClone.querySelector("#news-source");
    const newsDesc = cardClone.querySelector("#news-desc");

    // Fill data from article into respective elements of the card template
    newsImg.src = article.urlToImage;
    newsTitle.innerHTML = article.title;
    newsDesc.innerHTML = article.description;

    // Format and display source and date of the article
    const date = new Date(article.publishedAt).toLocaleString("en-US", {
        timeZone: "Asia/Jakarta",
    });

    newsSource.innerHTML = article.source.name + " · " + date;

    // Open article link in a new tab on card click
    cardClone.firstElementChild.addEventListener("click", () => {
        window.open(article.url, "_blank");
    });
}

// Variable to keep track of the currently selected navigation item
let curSelectedNav = null;

// Function to handle click event on navigation items
function onNavItemClick(id) {
    fetchNews(id); // Fetch news based on the clicked category
    const navItem = document.getElementById(id + "-link");
    if (curSelectedNav !== null) {
        curSelectedNav.classList.remove("active"); // Remove active class from previously selected nav item
    }
    curSelectedNav = navItem;
    curSelectedNav.classList.add("active"); // Add active class to currently selected nav item
}

// Function to search for news based on user input
function searchNews() {
    const searchText = document.getElementById("search-text").value;
    if (!searchText) return;
    fetchNews(searchText); // Fetch news based on search text
    if (curSelectedNav !== null) {
        curSelectedNav.classList.remove("active");
        curSelectedNav = null; // Reset currently selected nav item
    }
}