//Login Panel - Landing Page

$('#register-link').click(function(e) {
    $('#login-form').hide();
    $('#register-form').removeClass('hide-form');
    $('#register-form').show();
});

$('#login-link').click(function(e) {
    $('#register-form').hide();
    $('#login-form').show();
});

$('.login-btn').click(function(){
    $('.login-btn').addClass('disabled');
});

//Getting Started Page

// Step 1
$('#step-1-btn').click(function(e) {
    $('#step-2-form').addClass('hide-form');
    $('#step-3-form').addClass('hide-form');
    $('#step-1-form').removeClass('hide-form');
    $('#step-1-form').show();
    $('#step-2-btn').removeClass('active-step-btn');
    $('#step-3-btn').removeClass('active-step-btn');
    $('#step-1-btn').addClass('active-step-btn');
    $('#next-step-btn').removeClass('hide-form');
});

// Step 2
$('#step-2-btn').click(function(e) {
    $('#step-1-form').addClass('hide-form');
    $('#step-3-form').addClass('hide-form');
    $('#step-2-form').removeClass('hide-form');
    $('#step-2-form').show();
    $('#step-1-btn').removeClass('active-step-btn');
    $('#step-3-btn').removeClass('active-step-btn');
    $('#step-2-btn').addClass('active-step-btn');
    $('#next-step-btn').removeClass('hide-form');
});

// Step 3
$('#step-3-btn').click(function(e) {
    $('#step-1-form').addClass('hide-form');
    $('#step-2-form').addClass('hide-form');
    $('#step-3-form').removeClass('hide-form');
    $('#step-3-form').show();
    $('#step-1-btn').removeClass('active-step-btn');
    $('#step-2-btn').removeClass('active-step-btn');
    $('#step-3-btn').addClass('active-step-btn');
    $('#next-step-btn').addClass('hide-form');
});

// Next Step Btn
$('#next-step-btn').click(function(e) {
    if (!$('#step-1-form').hasClass('hide-form')){
        $('#step-1-form').addClass('hide-form');
        $('#step-2-form').removeClass('hide-form');
        $('#step-2-form').show();
        $('#step-1-btn').removeClass('active-step-btn');
        $('#step-2-btn').addClass('active-step-btn');
        $('#next-step-btn').removeClass('hide-form');
    } else if (!$('#step-2-form').hasClass('hide-form')){
        $('#step-2-form').addClass('hide-form');
        $('#step-3-form').removeClass('hide-form');
        $('#step-3-form').show();
        $('#step-2-btn').removeClass('active-step-btn');
        $('#step-3-btn').addClass('active-step-btn');
        $('#next-step-btn').addClass('hide-form');
    }
});
