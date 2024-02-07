// search box search result boxes process starting

const searchBox = document.getElementById("searchBoxSh");
const MasterUl = document.getElementById("shList");

function userShShJS() {
    var searchBoxVal = searchBox.value;
    
    //sending data to searchResult.php

    var searchDataDtl = {
        searchResult: searchBoxVal
    };

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "searchResult.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Request finished successfully. Do processing here.
                try {
                    var parsedArray = JSON.parse(xhr.responseText);
                    // console.log(parsedArray);
                    MasterUl.innerHTML = "";
                    parsedArray.forEach(element => {
                        var anchorElement = document.createElement("a");
                        var listItemElement = document.createElement("li");
                        var spanElement = document.createElement("span");

                        anchorElement.setAttribute("href", "searchEmoji.php?emojiID="+element.id);
                        anchorElement.setAttribute("id", "searchRsPross");
                        spanElement.textContent = element.emoji+" : "+element.name;
                        listItemElement.appendChild(spanElement);
                        anchorElement.appendChild(listItemElement);
                        MasterUl.appendChild(anchorElement);
                    });
                    // Process the parsedArray here, e.g., update the UI with search results
                } catch (e) {
                    console.error("Error parsing JSON: " + e);
                }
            } else {
                console.error("Request failed with status: " + xhr.status);
            }
        }
    };
    xhr.send(JSON.stringify(searchDataDtl));
    
}

//this is for clear search result -------

document.getElementById("searchArea").addEventListener("click", function() {
    const MasterUl = document.getElementById("shList");
    MasterUl.innerHTML = "";
});


// search box vlue and process ending   

function searchBoxValPrss(){
    window.location.href = "searchEmoji.php?searchResult="+document.getElementById('searchBoxSh').value;
}



