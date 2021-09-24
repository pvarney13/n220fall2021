let colors = [ "#faf9ed", "#f5c1ee", "#424030" ]

function setup() {
    createCanvas (800, 800)

}

function draw () {
    for (let i = 0; i < colors.length; i++) {

        rect(151 * i, 200, 150, 300)
        fill( colors[i] )
    
    }
}

