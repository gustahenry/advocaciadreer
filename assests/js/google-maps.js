
function initMap() {
var uluru = {lat: -23.467196, lng: -46.525824};
var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 17,
  center: uluru
});
var marker = new google.maps.Marker({
  position: uluru,
  map: map
});
}
$('.navas a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href');
      targetOffset = $(id).offset().top;
      
  $('html, body').animate({ 
    scrollTop: targetOffset - 100
  }, 500);
});
