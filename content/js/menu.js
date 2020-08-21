
define(['jquery', 'pubsub',  'TweenLite', 'TimelineLite'], function($, pubsub, TweenLite, TimelineLite) {

    pubsub.sub('burgerClick',function(event) {
        myMobileMenu(event);
    });

    function myMobileMenu(event) {
        console.log('burger got clickked');
        // if (event) {
            // event.stopPropagation();
            // event.preventDefault();
            var burger1 = $('.bar1');
            var burger2 = $('.bar2');
            var burger3 = $('.bar3');
            console.log("burgers" + burger1);

            
 
          //burgers.toggle('change');
            //let mM = document.getElementById('mobileMenu');
           $('.mobileMenu').toggleClass('show');

           burger1.toggleClass('state2');
           burger2.toggleClass('state2');
           burger3.toggleClass('state2');
        //   }
         
        }


    return {
        init: function() {
            $('.burger').on('click', function(event) { pubsub.pub('burgerClick', event);
         } );
            console.log('assigned burger click');
        },
        myMobileMenu: function(event) {
            myMobileMenu(event);
        }
    }
});

