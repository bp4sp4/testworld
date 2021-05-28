function openPopup(el) {
  $('.modal').hide();
  $('#' + el).css("display", "flex");
  $('#' + el).fadeIn(200);
  $('#fp-nav').css("display","none");
}

function closePopup() {
  $('.modal').fadeOut(300);
  $('#fp-nav').css("display","flex");
}
