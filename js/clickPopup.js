function openPopup(el) {
  $('.modal').hide();
  $('#' + el).css("display", "flex")
  $('#' + el).fadeIn(200);
}

function closePopup() {
   $('.modal').fadeOut(300);
}
