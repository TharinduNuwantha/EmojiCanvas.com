function navBar(){
    const bars = document.getElementById('bars');
    const mobileNav = document.getElementById('mobileNav');

    let num = true;
    bars.addEventListener("click",function(){
        if(num === true){
            mobileNav.style.right = '0';
            num = false;
        }else{
            mobileNav.style.right = '200%';
            num = true;
        }
    });


}
navBar();

