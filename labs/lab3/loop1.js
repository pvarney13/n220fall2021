function setup() {
    createCanvas(400,400)
}

function draw(){
    background(243,15,132)
    stroke(66, 245, 93)
    noFill()

    for (let y = 0; y < 15; y++) {
        circle(200, 200, y * 30)
    
    }
}
