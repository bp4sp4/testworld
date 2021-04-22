$('.age_btn').click(function () {
    const tab_id = $(this).attr('data-tab');

    $('.age_btn').removeClass('current');
    $('.age_rank_wrap').removeClass('current');

    $(this).addClass('current');
    $("#" + tab_id).addClass('current');

});
