/*
    Slider
*/
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
});


/*
    Filterable portfolio
*/
jQuery(document).ready(function() {
    $clientsHolder = $('ul.portfolio-img');
    $clientsClone = $clientsHolder.clone(); 
 
    $('.filter-portfolio a').click(function(e) {
        e.preventDefault();
        $filterClass = $(this).attr('class');
 
        $('.filter-portfolio a').attr('id', '');
        $(this).attr('id', 'active-imgs');
 
        if($filterClass == 'all'){
            $filters = $clientsClone.find('li');
        }
        else {
            $filters = $clientsClone.find('li[data-type~='+ $filterClass +']');
        }
 
        $clientsHolder.quicksand($filters, {duration: 700}, function() {
            $("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});
        });
    });
});


/*
    Pretty Photo
*/
jQuery(document).ready(function() {
    $("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});
});


/*
    Show latest tweets
*/
        $(document).ready(function(){
            $('#tweets').tweetable({
                username: 'janpetras21', 
                time: true,
                rotate: true,
                speed: 6000, 
                replies: false,
                position: 'append',
                failed: "No tweets available",
                html5: true,
                onComplete:function(jQueryul){
                    jQuery('time').timeago();
                }
            });
        });


/*
    Flickr feed
*/
$(document).ready(function() {
    $('.flickr-feed').jflickrfeed({
        limit: 8,
        qstrings: {
            id: '95600357@N02'
        },
        itemTemplate: '<li><a href="{{link}}" target="_blank"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
    });
});


/*
    Google maps
*/
    $(document).ready(function(){
    $("#map").gMap({ controls: true,
                scrollwheel: true,
                draggable: true,
                markers: [{ latitude: 59.272828,
                            longitude: 18.134787,
                            icon: { image: "http://www.google.com/mapfiles/marker.png",
                            iconsize: [32, 47],
                            iconanchor: [32,47],
                            infowindowanchor: [12, 0] } }
                                ],
                            icon: { image: "http://www.google.com/mapfiles/marker.png", 
                            iconsize: [26, 46],
                            iconanchor: [12, 46],
                            infowindowanchor: [12, 0] },
                            latitude: 59.272828,
                            longitude: 18.134787,
                            zoom: 15, });
  });
        
/*
    Contact form
*/
jQuery(document).ready(function() {
    $('.contact-form form').submit(function() {

        $('.contact-form form .nameLabel').html('Name');
        $('.contact-form form .emailLabel').html('Email');
        $('.contact-form form .messageLabel').html('Message');

        var postdata = $('.contact-form form').serialize();
        $.ajax({
            type: 'POST',
            url: 'assets/sendmail.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                if(json.nameMessage != '') {
                    $('.contact-form form .nameLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.nameMessage + '</span>');
                }
                if(json.emailMessage != '') {
                    $('.contact-form form .emailLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.emailMessage + '</span>');
                }
                if(json.messageMessage != '') {
                    $('.contact-form form .messageLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.messageMessage + '</span>');
                }
                if(json.nameMessage == '' && json.emailMessage == '' && json.messageMessage == '') {
                    $('.contact-form form').fadeOut('fast', function() {
                        $('.contact-form').append('<p><span class="violet">Thanks for contacting me!</span> I will get back to you very soon.</p>');
                    });
                }
            }
        });
        return false;
    });
});


