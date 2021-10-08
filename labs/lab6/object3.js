let box = []

function setup () {
    createCanvas(800, 400)

    for (let i = 0; i < 3; i++) {
        box[i] = new Box (random(width), random(height))

    }
}

function draw () {
    background(166, 197, 247)

    for (let i = 0; i < 3; i++) {

        box[i].body ()
        box[i].move ()
    }
}

class Box {
    constructor(x,y) {

    this.x = x
    this.y = y
    }

    body() {
        rect(this.x, this.y, 75, 25)
    }

    move(){
        this.x++;
        
        if (this.x > width){
          this.x = 0;
        }
    }
}   