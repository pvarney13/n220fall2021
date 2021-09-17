function setup() {
    //make a canvas for the composition to be shown on
    createCanvas(2000, 1000);
  }
  
  function draw() {
      //create green color background
    background(27, 209, 151);
    for (let y = 32; y <= height; y += 8) {
        //ellipse shrink with each row and move right
        for (let x = 12; x <= width; x += 15) {
        ellipse(x + y, y, 20 - y/30, 20 - y/30);
        fill(27, 151, 209)
      }
    }
  }
  