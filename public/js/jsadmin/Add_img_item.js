const img =document.getElementById('img_new_item');
const p =document.getElementById('p');

function img_click(){
 setTimeout(
   function(){
      img.src='../img/c.png';
      p.innerText='The picture has been Added';
      img.style.width="150px";
   },1000
 )
    

 }