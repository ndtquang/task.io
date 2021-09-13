function togglebar() {

    var y = document.getElementById('span-bar');    
    y.classList.toggle('change');  
    var x = document.getElementById('close');    
    x.classList.toggle('close')
    var z = document.getElementById('header-nav');
    z.classList.toggle('show');

};
$(document).ready(function () {
    //---------------------------------------
    $('.c-bot1').slick({
        dots:true,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
          {
              breakpoint: 768,
              settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 2
              }
          },
      
        ]
    });
   
});