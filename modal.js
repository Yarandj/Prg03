//Haal de modal op
var modal = document.getElementById("myModal");

//Haal de span element op dat de modal sluit
var span = document.getElementsByClassName("close")[0];

//Wanneer er op de button wordt geklikt, open de modal
function openModal(title, text, image) {
    var afbeeldingen = "images/"; //Verander dit naar de juiste weg naar de map images
    document.getElementById("modal-title").innerHTML = title;
    document.getElementById("modal-image").src = afbeeldingen + image;
    document.getElementById("modal-info").innerHTML = text;
    modal.style.display = "block";
}

//Wanneer er op het span element wordt geklikt, sluit de modal
span.onclick = function () {
    modal.style.display = "none";
}

//Wanneer er buiten de modal wordt geklikt, sluit de modal
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}