let badwords = ["clear","water","tires"]

let count

function findBad() {

    count = 0;

    let text = ""
    
    text = document.getElementById("userinput").value
    let words = []
    
    words = text.split(" ")
 
    for(let i = 0; i < badwords.length; i++) {
        
        for(let p = 0; p < words.length; p++){
            if(words[p] == badwords[i]) {
        
                count++
            }
        }
    }
    
    if (count == 0) {
        document.querySelector(".output").innerHTML = "No bad word found"
    }
    
    else {
        document.querySelector(".output").innerHTML = "Bad word found<br>Total bad words : " + count
    }
   
    document.getElementById("userinput").value = ""
}
