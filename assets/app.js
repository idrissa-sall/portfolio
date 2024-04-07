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
            profilPicture.css('display', 'none');
            // affiche le texte avec le nom et prénom
            navbarNameJob.css('display', 'block');
            navbarNameJob.addClass('show-element animate__animated animate__bounce');
            navbarNameJob.removeClass('hidden-element');
        } else {
            // affiche la photo de profil
            profilPicture.addClass('show-element');
            profilPicture.removeClass('hidden-element');
            profilPicture.css('display', 'block');
            // masque le texte avec nom et prénom
            navbarNameJob.css('display', 'none');
            navbarNameJob.addClass('hidden-element');
            navbarNameJob.removeClass('show-element animate__animated animate__bounce');
        }
        
    });

    // owl-carousel js
    $(".owl-carousel").owlCarousel({
        //Basic Speeds
        slideSpeed : 200,
        paginationSpeed : 800,
     
        //Autoplay
        autoPlay : true,
        goToFirst : true,
        goToFirstSpeed : 1000,
     
        // Navigation
        navigation : false,
        navigationText : ["prev","next"],
        pagination : true,
        paginationNumbers: false,
     
        // Responsive
        responsive: true,
        items : 5,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsMobile : [479,1]
    });
    // end

    // isotope filter
    var $portfolioIsotope = $('.portfolio-isotope').isotope({
        itemSelector: '.project-col',
        layoutMode: 'fitRows'
    });

    $('.portfolio-button-row').on('click', 'button', function(){
        var filterValue = $(this).attr('data-filter');
        $portfolioIsotope.isotope({filter: filterValue});
    });
    // end
});