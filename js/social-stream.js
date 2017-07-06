(function ($) {
Drupal.behaviors.social_stream = {
  attach: function (context, settings) {
    $('#social-stream').dcSocialStream(settings.social_stream);
    
  }
};
})(jQuery);

function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
  }
  return true;
}
