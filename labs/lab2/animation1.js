function setup() { 
    createCanvas(600, 600);
    
  } 
  
  function draw() { 
    background(245, 155, 66);
    
    var fr = frameRate();
    print(fr);
    text(frameCount,300,300)
    textSize(72)
  }
