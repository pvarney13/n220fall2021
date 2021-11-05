function getString() {
    let store = ["fruits", "vegetables", "cheeses"]

    document.getElementById("1").innerHTML = store.indexOf("fruits")
    document.getElementById("2").innerHTML = store.indexOf("vegetables")
    document.getElementById("3").innerHTML = store.indexOf("cheeses")
}