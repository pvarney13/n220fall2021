let number = 13

function myGuess() {
    let inputVal = document.getElementById("guess").value
    let outVal = document.getElementById("divs")

    if (inputVal < number) {
        outVal.innerHTML = "Your Guess is Too Low"
    }

    if (inputVal == number) {
        outVal.innerHTML = "Congrats! You Guessed the Number!"
    }

    if (inputVal > number) {
        outVal.innerHTML = "Your Guess is Too High "
    }
}