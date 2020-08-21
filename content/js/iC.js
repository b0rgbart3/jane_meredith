define(['jquery', 'pubsub', 'TweenLite', 'TimelineLite'], function($, pubsub, TweenLite, TimelineLite) {

    var flipped = false;
    var currentContainer = null;
    var content = null;
    var backside = null;

    // pubsub.sub('iC-clicked', function(event) {
              
    //         if (!flipped) {
            
    //             flip();
    //             flipped = true;
               
    //         } else {
         
    //             unflip();
    //             flipped = false;
    //         }
    // });

    function unflip(event) {

        

      //  var $content = $(event.target).closest('.infoContainerContent');
     //  var $backside = $($content).next('.infoBack');
        // t = new TimelineLite({onComplete: function() {
           
        // } });
      //  t.to(currentContainer,2, { 'transform':"rotateY(0deg)" })
      //  .to( content, .3, {'opacity':'1'}, "-=1.6")
        //.to( backside, .1, {'opacity':'0'},"-=1.6")

        ;
    }

    function flip(event) {
      

        

        // t = new TimelineLite({onComplete: function() {} });
        // console.log(backside);

        // t.to(currentContainer,1.8, { 'transform':"rotateY(180deg)" })

        //  .to( content, .3, {'opacity':'0'}, "-=1.3")

        // .to( backside, .1, {'transform':"rotateY(180deg)", "top":"0px"}, "-=1.3")
        // .to( backside, .2, {'opacity':'1'}, "-=1")

        // ;
        
    }
    // We can't bind to the infoContainer until the external ajax files are done loading
    // so we listen for a done-loading event and then do the binding.

    pubsub.sub('done-loading', function() {
    
        // $('.infoContainer').off().on('click', function(event) {
         
        //     event.stopPropagation();

        //     var $target = $(event.target);      
        //     currentContainer = $target.closest('.infoContainer');
        //     backside = $(currentContainer).find('.infoBack');
        //     content = $(currentContainer).find('.infoContainerContent');

           
         
        //     pubsub.pub('iC-clicked', event);
            

            
            
        //  });
    });

    return {
        // init: function() {
        //     flipped = false;
        // }
    }


});

