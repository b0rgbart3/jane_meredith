$(document).ready( function() {
    var movingLeft = null;


  
      function init() {
      
      }

      init();


    $('#rightArrow').on('mousedown', function() {
      console.log('down');
        setTimeout(function run() {
            moveLeft();
            setTimeout(run, 100);
          }, 100);
       
    });


    // jquerymobile('#rightArrow').on({'touchstart': function(event) {
    //   event.preventDefault();
    //   console.log('longclick');
    // }});


    $('#leftArrow').on('mousedown', function() {
      
        setTimeout(function run() {
            moveRight();
            setTimeout(run, 100);
          }, 100);
    });
    $('#leftArrow').on('mouseup', function() {
        window.clearTimeout();
    });



});

moveLeft = function() {
    console.log('moveLefting');
    var slider = $("#slider");
    position = parseInt(slider.css("left"));
    newposition = position-40;
    slider.animate({left: newposition+"px"});

}

moveRight = function() {
    var slider = $("#slider");
    position = parseInt(slider.css("left"));
    newposition = position+80;
    if (newposition > 0 )
    {
        newposition = 0;
    }
    slider.animate({left: newposition+"px"});
}

