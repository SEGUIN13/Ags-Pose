
const form = document.getElementById('contact-form');
form.addEventListener('submit', function(event)
{  //arret de la soumission
    event.preventDefault(); 
    //console.log('Soumission stoppée!');
    // stocker les données du formulaire
    const data = new FormData(form);

    //requete ajax
    //const url = '/ajax' si structure avec routes
    const url = '../ajax.php';// pour structure avec fichier

    //Creation objet d'option
    const options ={
        method: 'POST', // choix de methode HTTP
        body: data  // Placer la variable data dans le corps de la requete
    };
    //requête 
    fetch(url,options).then(function(rawResponse){
        // on extrait le texte contenu dans la réponse du serveur(gros objet)
        return rawResponse.text();        
    })
    .then(function(textResponse){
        // on récupère le texte contenu dans le corps de la réponse
        //window.alert('Votre message a bien été envoyé !');
        const b = document.querySelector('.form');
        const box =document.createElement('div');       
        //const text = document.createTextNode('Votre message a bien été transmis');
        box.textContent ="Votre message à bien été transmis";
        b.prepend(box);
        //b.append(text);
        form.reset();       

    })
});


//console.log('Coucou from contact')


