window.addEventListener('load', init);

let item;
let buttonId

function init(){
    getJSONData()

    item = document.getElementById("myModal")
    item.addEventListener("click", buttonClickHandler);
}

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

async function getJSONData(){
    try {
        let response = await fetch("http://localhost/PRG03-2022-2023/assignment/webservice-start/index.php");
        let Jason = await response.json();

        Jason.forEach((information) => {
            console.log(information);
            let button = document.createElement("button");
            button.innerText = information.name;

            button.setAttribute("id", information.id);
            document.getElementById("myModal").appendChild(button);
        });
    } catch (error){
        console.log("there was an error fetching data. ",error)
    }
}

// async function getJSONData() {
//     try{
//         const response = await fetch("http://localhost/php/PRG03-2022-2023/assignment/webservice-start/index.php/")
//         const data = await response.json();
//         data.forEach((image) => {
//             const modal = document.createElement("myModal");
//             let div1 = document.createElement("div");
//
//             modal.setAttribute("id", "myModal");
//             modal.setAttribute("className", "modal");
//             let div2 = document.createElement("div");
//             modal.setAttribute("className", "modal-content");
//             let span = document.createElement("span");
//             modal.setAttribute("id", "close");
//             modal.setAttribute("className", "close");
//             let h3 = document.createElement("h3");
//             modal.setAttribute("id", "modal-title");
//             modal.setAttribute("className", "modal-title");
//             let plaatje = document.createElement("img");
//             modal.setAttribute("id", "modal-image");
//             let p = document.createElement("p");
//             modal.setAttribute("id", "modal-info");
//
//             modal.addEventListener("click", buttonClickHandler);
//             modal.setAttribute("class", "mx-auto w-100 h-100 mb-5");
//             modal.setAttribute("src", image.image);
//             document.getElementById('pop-up').appendChild(modal);
//             document.getElementById(image.id).src = image.image;
//
//             let button = document.createElement('button');
//             button.innerHTML = 'details';
//
//             button.dataset.id = image.id;
//             modal.appendChild(button);
//
//         });
//     } catch (error) {
//         //error detected console logging it
//         console.log("there was an error fetching data. ", error)
//     }
// }

async function editJSONDetails(id) {
    try {
        let response = await fetch("http://localhost/PRG03-2022-2023/assignment/webservice-start/index.php/?id=" + id);
        let Jason = await response.json();

        let details = document.getElementById("details");
        details.innerHTML = Jason.details;
    }catch (error){
    console.log("there was an error fetching data. ",error)
}
}

function buttonClickHandler (e){
    let clickedItem = e.target;

    if (clickedItem.nodeName !== 'BUTTON'){
        return;
    }

    buttonId = clickedItem.id;

    editJSONDetails(id);
}

span = document.getElementById('close')
span.addEventListener('click', closeModal)

window.addEventListener('click', closeModalOutside)

function closeModal(){
    modal.style.display = "none";
}

function closeModalOutside(){
    if (event.target == modal) {
         modal.style.display = "none";
     }
}

// //Wanneer er op het span element wordt geklikt, sluit de modal
// span.onclick = function () {
//     modal.style.display = "none";
// }
//
// //Wanneer er buiten de modal wordt geklikt, sluit de modal
// window.onclick = function (event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }