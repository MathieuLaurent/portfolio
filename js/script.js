gsap.registerPlugin(ScrollTrigger);

gsap.to('.blocDroitePresentation',{
    x:-50,
    duration: 2,
    scrollTrigger : '.blocDroitePresentation'
});
gsap.to('.slide',{
    x:100,
    duration: 2,
    scrollTrigger : '.slide'
});


function validationForm(){
    var lancer ="oui";

    if(document.getElementById("nom").value==""){
        alert("Saisissez votre Nom");
        lancer="non";
    }
    if(document.getElementById("prenom").value==""){
        alert("Saisissez votre Prénom");
        lancer="non";
    }
    if(document.getElementById("email").value==""){
        alert("Saisissez votre adresse email");
        lancer="non";
    }
    if(document.getElementById("Objet").value==""){
        alert("Saisissez un objet");
        lancer="non";
    }
    if(document.getElementById("description").value==""){
        alert("Saisissez votre message");
        lancer="non";
    }
}
