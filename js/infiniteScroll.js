const count = 2;
const scrollArea = document.getElementsByClassName('content_list_area');
const contentList = document.getElementById('contentLists');

scrollArea.onscroll = function(e) {
  if((scrollArea.innerHeight + scrollArea.scrollY) >= scrollArea.offsetHeight) { 
    setTimeout(function(){
      console.log("작동중" + count++);
      // const addContent = document.createElement("div");
      // addContent.classList.add("box")
      // addContent.innerHTML = `<p>${++count}번째 블록</p>`
      // document.querySelector(contentList).appendChild(addContent);
    }, 1000)  
  }
}