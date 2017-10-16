$(document).ready(function() 
{
    $("#oc_bookingbundle_bookingform_nbVisitor").change(function ( event )
    {
        event.preventDefault();
        var nbvisitor = document.getElementById("oc_bookingbundle_bookingform_nbVisitor").value;
        var $newLinkLi = $('<li></li>');
        var $collectionHolder = $('ul.visitors');
        var prototype = $collectionHolder.data('prototype');
        var index = $collectionHolder.data('index');
        var newForm = prototype.replace(/__name__/g, index);
        var $newFormLi = $('<li></li>').append(newForm);
        
        $collectionHolder.append($newLinkLi);
        $newLinkLi.before($newFormLi);
       
        
        for (var iter = 0; iter = nbvisitor ; iter++) {

            $collectionHolder.append($newLinkLi);
            $collectionHolder.data('index', $collectionHolder.find(':input').length);
            $collectionHolder.data('index', index + iter );
            $newLinkLi.before($newFormLi);
          };

        $(".well").css("background-color", "black");
    });

});