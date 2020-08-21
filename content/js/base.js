"use strict";

require(['jquery',  'pubsub', 'menu', 'bookSlider', 'TweenLite', 'TimelineLite'], function($, pubsub, menu, bookSlider, TweenLite, TimelineLite) {


    // our only dom ready event
    $(document).ready(function() { 
        console.log('page done loading');

        // if ( $.mobile ) {
        //     //jq mobile loaded
        //     console.log('jquery mobile has loaded');
        //  } else {
        //    // not
        //    console.log('jquery has not loaded.');
        //  } 
        var purl = window.location.href.split('/');
        var page = purl[purl.length-1].split('.');
        var name = page[page.length-2];
        if (name == 'index'|| !name) { 
        bookSlider.init(); } else {
            console.log("purl: " + purl);
            console.log("page" + page);
            console.log("name" + name);
        }
        menu.init();
 
        
        var query = null;
        if (window['query'] && window['query'] != null) {
            query = window['query'];
        }
        // var type = window.location.hash.substr(1);
        // console.log("type: " + type);

    //    if (query) {


    //    } else {
   
    //    }

    
    //     $('html').on('click',function(e) {
    //        // pubsub.pub('choose-nothing');
    //     });

        $('.outsidelink').click(function(e){
            e.preventDefault();
            e.stopPropagation();
            return false;
        });
        

        $(window).on('resize', function() {
           
         setTimeout(function(){  location.reload(); }, 3000);

            //$('#sliderContainer').hide();
           // pubsub.pub('done-loading');
            // var list = page.getList();
        
      
            // var highest = 0;
            // if (list) {
            // for (var i = 0; i < list.length; i++ ) {
            
            //     var projectIdentifier = $('.project' +i)[0];
           
            //     var imageInProject = $(projectIdentifier).find('.art')[0];
           
            //     if (imageInProject && isInViewport(imageInProject)) {
            //         highest = i;
            //   }
            // }}

            // pubsub.pub('image-in-view', highest );

        });
        
    });


});

