const ageBtn = document.getElementsByClassName("age_btn");
const ageRankWrap = document.getElementsByClassName("age_rank_wrap");

ageBtn.addEventListener('click', function() { 
  if(this.classList.contains('btnActive')) {
    ageRankWrap.classList.add('')
  }
})