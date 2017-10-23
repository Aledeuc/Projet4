$(function() {
    
    var $newLinkLi = $('<li></li>');
    var $collectionHolder = $('ul.visitors');
    $collectionHolder.append($newLinkLi);
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $(".addVisitor").click( function(e) {
        e.preventDefault();
        
        addTagForm($collectionHolder, $newLinkLi);
    });
    
});

function addTagForm($collectionHolder, $newLinkLi) {
    var prototype = $collectionHolder.data('prototype');
    var index = $collectionHolder.data('index');
    var newForm = prototype.replace(/__name__/g, index);
    $collectionHolder.data('index', index + 1);
    var $newFormLi = $('<li></li>').append(newForm);
    $newFormLi.append('<button href="#" class="removeTag">X</button>');
    $newLinkLi.before($newFormLi);
    
    $('.removeTag').click(function(e) {
        e.preventDefault();
        
        $(this).parent().remove();
        
        return false;
    });
}