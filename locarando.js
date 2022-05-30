/* JQuery */


$('.produit_image').slick( {
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
});


/* JS */

document.addEventListener("DOMContentLoaded",function() {

let equipement = document.getElementById('equipement');
let couchage = document.getElementById('couchage');
let mobilier = document.getElementById('mobilier');
let cuisine = document.getElementById('cuisine');
let hydratation = document.getElementById('hydratation');
let hygiene = document.getElementById('hygiene');
let equipement_produit = document.getElementById('equipement_produit');
let couchage_produit = document.getElementById('couchage_produit');
let mobilier_produit = document.getElementById('mobilier_produit');

let equip = document.getElementById('equip');


couchage.addEventListener('click',function(){
    equipement_produit.style.display = "none" ;
    mobilier_produit.style.display = "none";
    couchage_produit.style.display = "block";
})
equipement.addEventListener('click',function(){
    equipement_produit.style.display = "block" ;
    mobilier_produit.style.display = "none";
    couchage_produit.style.display = "none";
})
mobilier.addEventListener('click',function(){
    equipement_produit.style.display = "none" ;
    mobilier_produit.style.display = "block";
    couchage_produit.style.display = "none";
})
    
equip.addEventListener('click',function(){
    equipement_produit.style.display = "block";
} )   
    
    
    
});