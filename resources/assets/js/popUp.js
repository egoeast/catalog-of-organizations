/**
 * Created by Admin on 09.06.2017.
 */

$(document).ready(function() {

    var modalElement = '#modal-katalog';
    var modalHeight = $(modalElement).height();

    $('a#katalog-link').click( function(event){
        event.preventDefault();

        var elementOffset = $(this).offset();
        var elementOffsetWindow = elementOffset.top-$(window).scrollTop();


        $(modalElement)
            .css('display', 'block')
            .animate({opacity: 1}, 200);

        if(elementOffsetWindow+modalHeight>$(window).height()) {
            $(modalElement).offset({ top: elementOffset.top-modalHeight-50, left: elementOffset.left-130 });
        } else {
            $(modalElement).offset({ top: elementOffset.top+30, left: elementOffset.left-130 });
        }
    });

    $('#modal_close').click( function(){
        $(modalElement)
            .animate({opacity: 0, top: '45%'}, 200,
                function(){
                    $(this).css('display', 'none');
                }
            );
    });
});

