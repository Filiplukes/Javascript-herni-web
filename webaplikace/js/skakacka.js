var character = document.getElementById("character");

var block = document.getElementById("block");
var score = 0;
var run = false;
var lvl = 1;

function jump() {

    if (run === false) {
        $("#control").html("Skoč");
        score = 0;
        run = true;
        block.classList.add("blockRide" + lvl);


        var isDead = setInterval(function () {

            var characterTop = parseInt(window.getComputedStyle(character).getPropertyValue("top"));
            var blockLeft = parseInt(window.getComputedStyle(block).getPropertyValue("left"));

            if ((blockLeft < 20) && (blockLeft > -5) && (characterTop >= 130)) {
                // block.style.jump = "none";
                // block.style.display = "none";
                run = false;

                block.classList.remove("blockRide" + lvl);
                clearInterval(isDead);


                var dialog = document.getElementById('window');
                $("#konec").text("Konec hry! Tvoje Skóre je " + score);
                dialog.show();
                
                
                $.ajax({
                    url: "https://kraken.pedf.cuni.cz/~lukesf/insertscore.php",
                    data:{score:score,insert:"skakacka"},
                    type: 'POST',
                    success: function(result) {
                            console.log("Skóre uloženo!");
                            
                          }
                    });
           
                
                
                document.getElementById('exit').onclick = function () {
                    dialog.close();
                };

                $("#control").html("Restart");
                lvl = 1;
            } else {
                score = score + 1;
                $("#score").val(score);
                if (lvl < 3 && score > lvl * 1000) {
                    block.classList.remove("blockRide" + lvl);
                    lvl = lvl + 1;
                    block.classList.add("blockRide" + lvl);
                }
            }
        }, 10);


    }
    if (character.classList != "jump") {
        character.classList.add("jump");
    }

    setTimeout(function () {
        character.classList.remove("jump");
    }, 500);
}













