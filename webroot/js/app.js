$(document).ready(function() {
  $('#pageloader').hide();
  setTimeout(function () { $('#tableloader').hide(); $('#checker table').show(); }, 1500);
  $('input').attr('autocomplete','off');
    console.log("Design and Developed by Su Li - http://suyli.me \nCakephp 3.0");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $('nav').css('-webkit-box-shadow', '0px 5px 12px 0px rgba(0,0,0,0.05)');
        } else if (scroll == 0) {
            $('nav').css('box-shadow', 'none');
        }
    });

    $('#scroll').click(function() {
        $('html, body').animate({
            scrollTop: ($('#about').offset().top)
        }, 750);
    });
    $('#signup').attr('disabled', 'disabled');
    $('label[for=username]').text('Username *');
    $('label[for=password]').text('Password *');

});
