

function breakString () {
    let input = document.getElementById("userinput")
    let output = document.getElementById("output")
    let check = input.value

    let splitSentence = check.split(",")

    for (let i = 0; i < splitSentence.length; i++) {
        if (splitSentence.includes("1")) {
            output.innerHTML = "Winner!"
        } 
        
        else {
            output.innerHTML = "Not a Winner :("
        }
        
    }
}