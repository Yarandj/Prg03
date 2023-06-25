//Haal items op van local storage of een lege array als deze niet gevonden is
let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

//Functie om een item toe te voegen aan de array en het updaten van de lijst met favorieten
function addToFavorites(title) {
    //Controleer of dat de item al in de lijst bestaan
    if (favorites.includes(title)) {
        alert('This item is already in favorites');
        return;
    }
    //Voeg item toe aan de array
    favorites.push(title);
    //Update favorietenlijst
    updateFavoritesList();
    //Update local storage
    localStorage.setItem('favorites', JSON.stringify(favorites));
}

//Functie om de favorietenlijst te updaten
function updateFavoritesList() {
    let favoritesList = document.getElementById('favorites-list');
    //Tekst
    favoritesList.innerHTML = 'Uw favorieten onderwerpen';
    //Loop door de items en voeg ze toe aan de lijst
    favorites.forEach(function (title) {
        let li = document.createElement('li');
        li.textContent = title;
        //Maak een button om items te verwijderen van de lijst
        let removeButton = document.createElement('button');
        removeButton.textContent = "❌";
        removeButton.onclick = function () {
            //Verwijder het item uit de array
            favorites.splice(favorites.indexOf(title), 1);
            //Update favorietenlijst
            updateFavoritesList();
            //Update local storage
            localStorage.setItem('favorites', JSON.stringify(favorites));
        }
        li.appendChild(removeButton);
        favoritesList.appendChild(li);
    });
}

//Laad de favorietenlijst
window.onload = function () {
    updateFavoritesList();
}