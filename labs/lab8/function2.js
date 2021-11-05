

function guessDivisible() {
    let inputVal = document.getElementById("guess").value
    let outVal = document.getElementById("div")

    if(inputVal%7 == 0) {
        outVal.innerHTML = "True"
    }else{
        outVal.innerHTML = "False"
    }
}


function divUpdate() {
    let inputVal = document.getElementById("guess").value
    let outVal = document.getElementById("div")

   guessDivisible();
}