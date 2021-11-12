let objects = [

    { color: "#FF0000", height: 100, width: 300 },
   
    { color: "#FFFF00", height: 200, width: 200 },
   
    { color: "#ff0000", height: 300, width: 100 },
   
   ];

   function makeDiv() {

   for (let i = 0; i < objects.length; i++) {
       let newDiv = document.createElement('div')
        newDiv.innerHTML = objects[i].color + "," + objects[i].height + "," + objects[i].width
        container.appendChild(newDiv)

        console.log( objects[i])
   }
}