function navBar(){
    const bars = document.getElementById('bars');
    const mobileNav = document.getElementById('mobileNav');

    let num = true;
    bars.addEventListener("click",function(){
        if(num === true){
            mobileNav.style.right = '0';
            num = false;
        }else{
            valueav.style.right = '200%';
            num = true;
        }
    });


}
navBar();


// ------------ coppy button styles---- start -------
const btnCpp = document.getElementById("btnCpp");
const imojiBox = document.querySelector(".imojiMdBox");
const copiedMsg = document.querySelector(".copiedMsg");
const emoji = document.querySelector(".imjSpan").textContent;

btnCpp.addEventListener("click", function () {
    btnCpp.style.padding = '3px 18px';
    btnCpp.style.fontSize = '14px';
    btnCpp.style.background = '#FF4C4C';
    copiedMsg.style.display = 'block';
    

    const textarea = document.createElement("textarea");
    textarea.value = emoji;
    document.body.appendChild(textarea);

    // Select the text in the textarea
    textarea.select();
    textarea.setSelectionRange(0, emoji.length);

    // Use the Clipboard API to copy the text
    document.execCommand("copy");

    // Remove the temporary textarea
    document.body.removeChild(textarea);

    // You can also use the Async Clipboard API if supported
    navigator.clipboard.writeText(emoji)

    
    setTimeout(function(){
        btnCpp.style.padding = '5px 20px';
        btnCpp.style.fontSize = '15px';
        btnCpp.style.background = "-webkit-linear-gradient(to right, #FF0080, #FF8C00, #40E0D0)";
        btnCpp.style.background = "linear-gradient(to right, #FF0080, #FF8C00, #40E0D0)";

        imojiBox.style.background = '#EAFFD7';
        imojiBox.style.border = '1px solid #30AD1A';
    }, 100);


    setTimeout(function(){
        copiedMsg.classList.remove('show');
        copiedMsg.classList.add('hide');
        imojiBox.style.background = '#fcedf4';
        copiedMsg.style.display = 'none';
        imojiBox.style.border = '1px solid rgb(248, 178, 178)';
    },4000)
    
    
})
// ------------ coppy button styles---- end -------





