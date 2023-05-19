
$(function () {
    handleMemberPositions();
    handlePositionsNav();
});

function handleMemberPositions() {
    var memberPositon = $('.member-position.active'),
        member        = $('.member');
    
    // On page load:
    // THis goes through each member to grab their position and verify
    // if their position is related to the position navigation
    member.each(function() {
        var position = $(this).attr('data-position');

        if(position == memberPositon.text()) {
            $(this).addClass('visible');
        }
    })
}

function handlePositionsNav() {
    var memberPositon = $('.member-position'),
        member        = $('.member');

    // Change the active member position on mouse click
    memberPositon.on('click', function() {
        var activePosition = $(this).text();

        memberPositon.removeClass('active');
        $(this).addClass('active');

        member.removeClass('visible');
        
        //Go through each member to verify which members are related to the active position from the navigation
        member.each(function() {
            var position = $(this).attr('data-position');
    
            if(position == activePosition) {
                $(this).addClass('visible');
            }
        })
    });
}