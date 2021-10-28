user = "Username"
pass = "Password"

function myEntry() {
    let inputVal1 = document.getElementById("us")
    let inputVal2 = document.getElementById("ps")
    let outVal = document.getElementById("protect")

    if ((inputVal1 == user)&&(inputVal2 == pass)) {
        outVal.innerHTML = "Success!"
    } else {
       outVal.innerHTML = "Wrong Information"
    }
}