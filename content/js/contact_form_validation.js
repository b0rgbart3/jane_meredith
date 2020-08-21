

$( document ).ready(function() {
    console.log( "ready!" );

let checkValidity = function(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}


$('#firstname').on('change', function() {
    $('#firstname').removeClass('error');
});
$('#lastname').on('change', function() {
    $('#lastname').removeClass('error');
});
$('#email').on('change', function() {
    $('#email').removeClass('error');
});
$('#message').on('change', function() {
    $('#message').removeClass('error');
});
$('#send').on('click', function(event) {

    let firstname = $('#firstname').val();
    let lastname = $('#lastname').val();
    let email = $('#email').val();
    let message= $('#message').val();

    let notice = $("#firstname").next('.notify');
    if (!firstname) {
        $('#firstname').addClass('error');
        
        notice.text("Please include your first name.");
    } else {
        notice.text("");
    }

    notice = $("#lastname").next('.notify');
    if (!lastname) {
        $('#lastname').addClass('error');
        
        notice.text("Please include your last name.");
    } else {
        notice.text("");
    }


    notice = $("#email").next('.notify');
    let validemail=false;
    if (!email) {
        $('#email').addClass('error');
        notice.text("Please include your email address.");
    } else {
        validemail = checkValidity(email);
        if (!validemail) {
            $('#email').addClass('error');
    
        notice.text("Please include a valid email address.");
        } else {
            notice.text("");
        }
    }
    notice = $("#message").next('.notify');
    if (!message) {
        $('#message').addClass('error');
        notice.text("Please include a message.");
 
    } else {
        notice.text("");
    }


    if( !firstname || !lastname || !email || !message || !validemail) {
        event.preventDefault();
     //   document.body.scrollTop = document.documentElement.scrollTop = $('#contactForm').offset().top;

        $('html, body').animate({
            scrollTop: $('#contactForm').offset().top
          }, 800, function(){
//could do something here
          });

    }

});


});