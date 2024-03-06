import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';


$(function(){

    // détecte le scroll de la fenêtre et affiche ou non la photo de profil
    var profilPicture = $('#profil-picture');
    var navbarNameJob = $('#navbar-name-job');

    $(window).on('scroll', (e) => {
        var scroll = $(window).scrollTop();

        if(scroll > 470)
        {
            // masque la photo de profil
            profilPicture.addClass('hidden-element');
            profilPicture.removeClass('show-element');
            // affiche le texte avec le nom et prénom
            navbarNameJob.css('display', 'block');
            navbarNameJob.addClass('show-element animate__animated animate__bounce');
            navbarNameJob.removeClass('hidden-element');
        } else {
            // affiche la photo de profil
            profilPicture.addClass('show-element');
            profilPicture.removeClass('hidden-element');
            // masque le texte avec nom et prénom
            navbarNameJob.css('display', 'none');
            navbarNameJob.addClass('hidden-element');
            navbarNameJob.removeClass('show-element animate__animated animate__bounce');
        }
        
    });

    
});