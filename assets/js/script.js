$(document).ready(function(){
    $('.page-scroll').on('click', function(e){
        
        //ambil isi href
        var href = $(this).attr('href');
        //tangkap elemen
        var elemen = $(href);

        $('html ').animate({
            scrollTop: elemen.offset().top - 50
        },200 , 'easeInOutExpo');

        e.preventDefault();
    
    });
});

