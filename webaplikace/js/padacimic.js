
var character = document.getElementById("character");
var fallBall = document.getElementById("fallBall");
var counter = 0;
var currentBlocks = [];
var run=false;
var blockLastTop;
var holeLastTop;




function move(side) {
            if (run) {
                var move = parseInt(window.getComputedStyle(character).getPropertyValue("left"));
                if ((side === "L") && (move > 0)) {
                    character.style.left = move - 15 + "px";
                } else {
                    if (move < 380)
                        character.style.left = move + 15 + "px";
                }
            }
        }




function start1() {

    if(!run){
        run=true;

        var blocks = setInterval(function () {

            var blockLast = document.getElementById("block" + (counter - 1));
            var holeLast = document.getElementById("hole" + (counter - 1));


            if (counter > 0) {
                blockLastTop = parseInt(getComputedStyle(blockLast).getPropertyValue("top"));
                holeLastTop = parseInt(getComputedStyle(holeLast).getPropertyValue("top"));

            }


            if ((blockLastTop < 400) || (counter === 0)) {
                var block = document.createElement("div");
                var hole = document.createElement("div");

                block.setAttribute("class", "block");
                hole.setAttribute("class", "hole");
                block.setAttribute("id", "block" + counter);
                hole.setAttribute("id", "hole" + counter);


                block.style.top = blockLastTop + 100 + "px";
                hole.style.top = holeLastTop + 100 + "px";


                var random = Math.floor(Math.random() * 360);
                hole.style.left = random + "px";

                fallBall.appendChild(block);
                fallBall.appendChild(hole);
                currentBlocks.push(counter);

                counter++;
                $("#score").val(counter-5);

            }

            var characterTop = parseInt(window.getComputedStyle(character).getPropertyValue("top"));
            var characterLeft = parseInt(window.getComputedStyle(character).getPropertyValue("left"));
            var drop = 0;


            if (characterTop <= 0) {

                var dialog = document.getElementById('window');
                $("#konec").text("Konec hry! Tvoje Skóre je " + (counter-5));
            
                
                dialog.show();
                
              
               $.ajax({
                url: "https://kraken.pedf.cuni.cz/~lukesf/insertscore.php",
                data:{score:(counter-5),insert:"padacimic"},
                type: 'POST',
                 success: function(result) {
                       console.log("Skóre uloženo!");
                   }
                });
           
                
                
                
                
                clearInterval(blocks);
                run=false;
                document.getElementById('exit').onclick = function () {
                    dialog.close();
                    location.reload();

                };
            }


            for (var i = 0; i < currentBlocks.length; i++) {
                let current = currentBlocks[i];
                let iblock = document.getElementById("block" + current);
                let ihole = document.getElementById("hole" + current);
                let iblockTop = parseFloat(window.getComputedStyle(iblock).getPropertyValue("top"));
                let iholeLeft = parseFloat(window.getComputedStyle(ihole).getPropertyValue("left"));
                iblock.style.top = iblockTop - 0.5 + "px";
                ihole.style.top = iblockTop - 0.5 + "px";
                if (iblockTop < -10) {
                    currentBlocks.shift();
                    iblock.remove();
                    ihole.remove();


                }

                if (iblockTop - 20 < characterTop && iblockTop > characterTop) {

                    drop++;
                    if (iholeLeft <= characterLeft && iholeLeft + 20 >= characterLeft) {
                        drop = 0;
                    }

                }

            }

            if (drop === 0) {
                if (characterTop < 480) {
                    character.style.top = characterTop + 2 + "px";
                }
            } else {
                character.style.top = characterTop - 0.5 + "px";
            }


        }, 1);
    }
}





document.addEventListener("keydown" , event => {


    if (event.key === "ArrowLeft") {
    move("L");

}
if (event.key === "ArrowRight") {
    move("R");
}

if (event.key === " ") {
    start1();
}


});