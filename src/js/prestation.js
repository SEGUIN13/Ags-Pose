"use strict";

//Déclaration variable + assignation variable
let thumbnails =document.querySelectorAll(".zoom-thumbnail");
//console.log(thumbnails);

//evite que l'on puisse cliquer une image selectionnée afin de ne pas relancer la fonction

// fonction lorsque on clique sur la miniature faire avance reculer au click
function OnClickThumbnails()
{

    if(this.classList.contains("selected") === true)
    {
        return;
    }
    // Déclaration et assignation des variables
    let figure = document.getElementById("zoom");
    let picture = document.querySelector(".zoom-picture"); //balise img de l'image agrandie
    let src = this.dataset.target; // attribut datasetjs=datatoto html permet de stocker l'image gd format
    let text = this.getAttribute("alt");//on recupere la légende de l'image

    figure.classList.add("zoom-out");  /*Ajouter à figure la class zoom out puisque par défaut
 la class zoom in est appliquée*/
    window.setTimeout(function()
    {
        picture.setAttribute ("src", src);
        document.querySelector(".zoom-legend").textContent = text;
        let newFigure = figure.cloneNode(true);
        newFigure.classList.remove("zoom-out");
        document.querySelector(".slide").append(newFigure);
        figure.remove();
    },500);


    //enlever la classe selected
    document.querySelector(".selected").classList.remove("selected");
    this.classList.add("selected");
    return false;

}


function OnClickSwitched()
{

    let compteur;

    let thumbnails = document.querySelectorAll('.zoom-thumbnail');
    compteur=document.querySelector('.selected').getAttribute('id');

    if (this.classList.contains('btn-left') == true)
    {
        compteur--;
        if (compteur < 1)
        {
            compteur++;
        }
    }

    else if (this.classList.contains('btn-right') == true)
    {
        compteur++;
        if (compteur > thumbnails.length)
        {
            compteur--;
        }
    }
    document.querySelector('.selected').classList.remove('selected');
    document.getElementById(compteur).classList.add('selected');

    let selectionner = document.getElementById(compteur).dataset.target;
    let title = document.getElementById(compteur).getAttribute('alt');
    document.querySelector('.zoom-legend').textContent = title;

    console.log(selectionner);
    document.querySelector('.zoom-picture').setAttribute('src', selectionner);
    document.querySelector('.zoom-picture').setAttribute('alt', title);

}

thumbnails = document.querySelectorAll( '.zoom-thumbnail' );

for (var i = 0; i < thumbnails.length; i++)
{
    thumbnails[i].addEventListener( 'click', OnClickThumbnails);
}

let switched = document.querySelectorAll('.btn');

for (var i = 0; i < switched.length; i++)
{
    switched[i].addEventListener('click', OnClickSwitched,);
}

