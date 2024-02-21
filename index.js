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

// search box process --------------


function userSearch() {
    document.getElementById('mainSearchBox').innerText = "Clear";
    const searchBoxVal = document.getElementById('searchBox').value;

    var formData = {
        shBoxVal: searchBoxVal
    }

    var jsonData = JSON.stringify(formData);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'searchForMan.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');

    // if user click search box anf fous it

 
    

    xhr.onreadystatechange = function () {
        
        if (xhr.readyState === 4) {
            console.log("Raw response from server:", xhr.responseText); // Log the raw response
    
            if (xhr.status === 200) {
                // Parse the JSON response
                try {
                    var response = JSON.parse(xhr.responseText);
                    console.log(response);
                    SHemojiArr = response.split(',');
                    shCover = document.querySelector(".imojiCll");
                    shCover.innerHTML = '';
                    for(let i =0;i<SHemojiArr.length;i++){
                        const span = document.createElement("span");
                        // console.log( SHemojiArr[i]);
                        span.textContent = SHemojiArr[i];
                        span.setAttribute("onclick", "addToCpx(this)");
                        shCover.appendChild(span);   
                    }
                    // console.log(SHemojiArr);
                    console.log("Success");
                } catch (error) {
                    console.error("Error parsing JSON: ", error);
                }
            } else {
                console.log("PHP not working");
            }
        }
    }
    

    // Send JSON data
    xhr.send(jsonData);
}


function hideSearch(){
        shCover.innerHTML = '';
        const searchBox = document.getElementById('searchBox');
        searchBox.value = '';
        document.getElementById('mainSearchBox').innerText = "Search";
        
}


// coppy box cear button process start ----------------
function clearSearchBox(){
    const cppBox = document.getElementById('cppBox');
    cppBox.value = '';
}
// coppy box cear button process end ----------------

