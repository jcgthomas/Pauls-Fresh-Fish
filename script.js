$("document").ready(() => {

    //About page slideshow function
    $("#aboutGallery > img:gt(0)").hide();

    setInterval(function() { 
        $('#aboutGallery > img:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#aboutGallery');
        },  5000);

})