define(['jquery', 'pubsub', 'TweenLite', 'TimelineLite'], function($, pubsub, TweenLite, TimelineLite) {

    var slider;
    var sliderbooks = [];
    var bookDisplayCount = 0;
    var positions = [];
    var distance;
    var titles =[];
    var links = [];
    var spots = [];
    var clickDownTime;
    var clickHoldTime;
    var timePassed;
    var introDone = false;

    var maskWidth;
    var spotMarker = 0;
    var moving = "";
    var mving;
    var holding = 0;  // how long the user has been pressing the arrow
    var avargeBookWidth = 230;   // this is arbitrarily chosen
 

    function clear() {
        var rightPosition = positions[spots+1];
       // console.log(rightPosition);
        sliderbooks.css({"left":rightPosition, "width":distance});
    }

    function repLeft() {

        var lastTitle = titles.pop();
        titles.unshift(lastTitle);
        var lastLink = links.pop();
        links.unshift(lastLink);

        for (i = 0; i < spots+2; i++) {
            $(sliderbooks[i]).css({"left":positions[i]});
            $(sliderbooks[i]).find("img").attr("src", titles[i]);
            $(sliderbooks[i]).find("a").attr("href", links[i]);
            
        }
    }

    function repositionRight() {

        var firstTitle = titles.shift();
        titles.push(firstTitle);
        var firstLink = links.shift();
        links.push(firstLink);

        for (i = 0; i < spots+2; i++) {
            $(sliderbooks[i]).css({"left":positions[i]});
            $(sliderbooks[i]).find("img").attr("src", titles[i]);
            $(sliderbooks[i]).find("a").attr("href", links[i]);
            
        }
    }
 
    function moveRight() {
        clickHoldTime = new Date().getTime() / 1000;
        timePassed = clickHoldTime-clickDownTime;
        
        //console.log(timePassed);

        var movePercentage = holding / 100;
       // console.log('Move percentage:' + movePercentage);
        var moveAmount = 2 + (timePassed/2);
        // this is a crude way of keeping track of how long the
        // user has been holding the arrow button.  
        // (maybe convert this to an actual timer?)
        holding++;  
        //console.log(holding);

        // This is my crude animation to move the books a few pixels to the left
        // (while the user is holding the right arrow button).

       // sB2 = new TimelineLite();
        for (var i = 0; i < spots+2; i++) {
            var left = $(sliderbooks[i]).position().left;
            var newleft = left - moveAmount;
            
       
            $(sliderbooks[i]).css({"left":newleft});

            
            if (i == spots+1) {
                if (newleft <= positions[spots]) {
                    //sB2.kill();
                    repositionRight();
                }
            }
        }

    }
    function moveLeft() {
        clickHoldTime = new Date().getTime() / 1000;
        timePassed = clickHoldTime-clickDownTime;
        
        //console.log(timePassed);

        var movePercentage = holding / 100;
       // console.log('Move percentage:' + movePercentage);
        var moveAmount = 2 + (timePassed/2);
        // this is a crude way of keeping track of how long the
        // user has been holding the arrow button.  
        // (maybe convert this to an actual timer?)
        holding++;  
        //console.log(holding);

        // This is my crude animation to move the books a few pixels to the left
        // (while the user is holding the right arrow button).

       // sB2 = new TimelineLite();
        for (var i = 0; i < spots+2; i++) {
            var left = $(sliderbooks[i]).position().left;
            var newleft = left + moveAmount;
            
       
            $(sliderbooks[i]).css({"left":newleft});

            
            if (i == spots+1) {
                if (newleft >= positions[spots+2]) {
                    //sB2.kill();
                    repLeft();
                }
            }
        }

    }

    // The user has let go of the arrows - so let's clear the interval that
    // keeps the books scrolling
    pubsub.sub('donemoving', function() {
        moving="done";
        if (mving) { clearInterval(mving) };
        holding = 0;
    });

    // The user hit the right arrow, so let's start the interval of moving
    // everything (from the right)

    pubsub.sub('moveright', function() {
        clickDownTime = new Date().getTime() / 1000;
        

        if (introDone){
            mving = setInterval(function(){ 
            moveRight();
            }, 1);
        }
      
    });

    pubsub.sub('moveleft', function() {
        clickDownTime = new Date().getTime() / 1000;
        

        if (introDone){
            mving = setInterval(function(){ 
            moveLeft();
            }, 1);
        }
      
    });
    // The books have finished appearing on the page, so we can now
    // "turn on" the arrows

    function introComplete() {

          introDone = true;
          $('.arrowContainer').animate({"opacity":1}, 500);
          console.log('intro complete');
        
    }

    // The inital calculations have been made, so we can now animate the books
    // onto the page

    pubsub.sub('done-loading', function() {
        introDone = false;
        
        maskWidth = $('#sliderMask').innerWidth();
        // determine the number of spots available on the page based
        // on the width of the mask div

        spots = Math.round(maskWidth / avargeBookWidth);
        introPositionCount = 0;
        distance = (maskWidth / spots) *.9;
        margin = distance *.1;

        var remainder = maskWidth - ( spots*(distance+margin) );

        // The # of positions will = the # of spots + 2 
        // for one hidden position on either side of the mask

        // position the first xposition outside of the mask on the left
        pos = 0 - margin - avargeBookWidth;
        positions.push(pos);

        // create the X-positions based on the # of spots available
        for (var i = 0; i < spots+2; i++) {
            pos = ((distance + margin )*i) + remainder;
            positions.push(pos);
        }

        // position the last xposition outside of the mask on the right
        pos = pos + margin + avargeBookWidth;
        positions.push(pos);

        console.log(positions);

        clear();


        // This is the initial animation -- how the books appear on the page
        // for the first time -- which is a gentle slide-in
        sB = new TimelineLite();
        // for (var i = 0; i < spots+2; i++) {
        //    sB.to(sliderbooks[i], {duration: 3 + (i/14), width: distance, left: positions[i], onComplete: function() { introComplete(); } }, "-=1.7" );
        // }
        // sB.staggerTo(sliderbooks, 1, {x: function(i) {
        //     return "+=" + (i * 30);
        // }, ease:Power3.easeInOut}, 0.15, "frame1+=1");
        var subset = sliderbooks.slice(0, spots+2);
        sB.to(subset, {duration: 3 , width: distance, ease: "power2.out", left: function(i) { return (positions[i]);},   stagger: 0.3, onComplete: function() { introComplete(); } }, "-=1.7" );

    });

    function onTouchStartRight(event) {
        event.preventDefault();
        pubsub.pub('moveright');
    }

    function onTouchEndRight(event) {
        event.preventDefault();
        pubsub.pub('donemoving');
    }
    function onTouchStartLeft(event) {
        event.preventDefault();
        pubsub.pub('moveleft');
    }

    function onTouchEndLeft(event) {
        event.preventDefault();
        pubsub.pub('donemoving');
    }

    return {
        init: function() {
            console.log('initializing the slider');
            slider = $('#slider');
            sliderbooks = $('.slidingBook');
            
            $('#rightArrow').on('mousedown', function() {
                pubsub.pub('moveright');
             });
             $('#rightArrow').on('mouseup', function() {
                pubsub.pub('donemoving');
             });
             $('#leftArrow').on('mousedown', function() {
                pubsub.pub('moveleft');
             });
             $('#leftArrow').on('mouseup', function() {
                pubsub.pub('donemoving');
             });

            

             var rArrow = document.getElementById('rightArrow');
             if (rArrow) {
                 rArrow.addEventListener('touchstart', onTouchStartRight, {passive: false});
                 rArrow.addEventListener('touchend', onTouchEndRight, {passive: false});
             }
             var lArrow = document.getElementById('leftArrow');
             if (lArrow) {
                 lArrow.addEventListener('touchstart', onTouchStartLeft, {passive: false});
                 lArrow.addEventListener('touchend', onTouchEndLeft, {passive: false});
             }
  
            //  rArrow.on("touchstart", function(event) {
            //    event.preventDefault();
            //    console.log("touch");
            //  }, {passive:true});
         

             // Collect all the image and link information from the original HTML
             // layout - so we can store that info as array data

            for (var i =0; i < sliderbooks.length; i++) {
                var title = $(sliderbooks[i]).find("img").attr("src");
                titles.push(title);
               // console.log(title);
                var link = $(sliderbooks[i]).find("a").attr("href");
                links.push(link);
              //  console.log( "Link: " + link );
            }
            if (slider) {
            pubsub.pub('done-loading'); }


       }
    }


});

