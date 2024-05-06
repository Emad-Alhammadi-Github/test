const massage = document.getElementById('delete_massage')


let id = 0;

function ShowDelete(i){
    id=i;
    console.log(id)
    massage.style.transform='scale(1)';
}
function Delete(){
    window.location.pathname=`/catogries/${id}`;
    console.log("dddddddddddddddd")
}
function Cansel(){
    massage.style.transform='scale(0)';
}