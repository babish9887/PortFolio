const togglebtn=document.querySelector(".togglebtn");
const togglebtnicon=document.querySelector(".togglebtn i");

const dropdownmenu=document.querySelector(".dropdown");

var isopen=false;
togglebtn.onclick=function(){

    if(dropdownmenu.style.display==="none"){
        dropdownmenu.style.display="block";
        isopen=true;
    }
    else    {
    dropdownmenu.style.display="none";
        isopen=false;
}
    togglebtnicon.classList = isopen? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
}

dropdownmenu.onclick=function(){
    if(isopen){
        dropdownmenu.style.display="none";
        togglebtnicon.classList='fa-solid fa-bars'
    }
}
