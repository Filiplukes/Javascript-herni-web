
var character = document.getElementById("character");
var block = document.getElementById("block");
var hole = document.getElementById("hole");
var block1 = document.getElementById("block1");
var hole1 = document.getElementById("hole1");
var start = 580;
var score = 0;
var run=false;
var blocks;
var freez = false;

$("control").hide();

function jump(){
    if(run) {
        var jump = parseInt(window.getComputedStyle(character).getPropertyValue("top"));

        if (jump > 19) {
            character.style.top = jump - 45 + "px";
        }
    }

}





document.addEventListener("keyup",event => {


    if(event.key === "ArrowUp"){
        if (run){
            jump();
        }else{
            if(!freez){ start1();}
        }

        }

});


function controlPoint(posHole){
    let hight = parseInt(window.getComputedStyle(character).getPropertyValue("top"));


    if ((hight < (posHole+50)) && (hight > (posHole-50)) ){
        score=score+10;
        $("#score").val(score);
         }
    else{
        clearInterval(blocks);
        run=false;
        freez=true;
        var dialog = document.getElementById('window');
        $("#konec").text("Konec hry! Tvoje Skóre je " + score + "!");
        dialog.show();
       
       
            $.ajax({
            url: "https://kraken.pedf.cuni.cz/~lukesf/insertscore.php",
            data:{score:score,insert:"flappy"},
            type: 'POST',
            success: function(result) {
                 console.log("Skóre uloženo!");
                }
              });
           
       
        
        document.getElementById('exit').onclick = function() {
            dialog.close();
            freez=false;
            location.reload();

        };

    }

    }



function start1() {

    if (!run) {
        run = true;
        $("#control2").hide();
        $("#control").show();
        blocks = setInterval(function () {


            var position = parseInt(window.getComputedStyle(character).getPropertyValue("top"));
            let move = parseInt(window.getComputedStyle(block).getPropertyValue("left"));
            let move1 = parseInt(window.getComputedStyle(block1).getPropertyValue("left"));

            if ((move > 20) && (move < 60)) {

                let posHole = parseInt(window.getComputedStyle(hole).getPropertyValue("top")) + 200;
                controlPoint(posHole + 280);

            }

            if ((move1 > 20) && (move1 < 60)) {

                let posHole = parseInt(window.getComputedStyle(hole1).getPropertyValue("top")) + 680;
                controlPoint(posHole + 280);

            }


            if (position < 380) {
                character.style.top = position + 1 + "px";
            }

            if (move > 0) {

                block.style.left = move - 1 + "px";
                hole.style.left = move - 1 + "px";
            } else {

                block.style.left = start + "px";
                hole.style.left = start + "px";
                let random = Math.floor(Math.random() * -300);
                hole.style.top = random - 120 + "px";

            }
            if (move1 > 0) {

                block1.style.left = move1 - 1 + "px";
                hole1.style.left = move1 - 1 + "px";
            } else {

                block1.style.left = start + "px";
                hole1.style.left = start + "px";
                let random = Math.floor(Math.random() * -300);
                hole1.style.top = random - 620 + "px";

            }


            score = score + 1;
            $("#score").val(score);

        }, 8);

    }
}

