//set array
let number = [10, 40, 30, 15]

//create canvas to draw
function setup() {
    createCanvas (800, 800)

}

function draw() {
    //accessing array and rectangle creation
    if (number > 20) {
        rect(100, 100, number, number) //use array values in rectangle
        //set color
        fill(224, 174, 245)

    }

    //accessing array and circle creation
    if (number < 20) {
        circle(0, 0, number) //use array value as radius in circle
        //set color
        fill(174, 245, 235)
    }
}
