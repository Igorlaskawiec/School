
let yes = new Audio("yes.wav");
let no = new Audio("no.wav");

//let password = prompt("Podaj haslo:");
let password = "Hello World";
password = password.toUpperCase();//Hello World->HELLO WORLD
// "Hello World" => "---- -----";

let password1 = "";//"----- -----"
let failedCount = 0;

for(let i = 0; i < password.length; i++) {
    if (password.charAt(i) == " ") {
        password1 += " ";
    } else {
        password1 += "-";
    }
    //password1 += password.charAt(i) == " " ? " " : "-";
    
}

function show_password() {
    let blok_plansza = document.getElementById("plansza");
    //console.log(blok_plansza);
    blok_plansza.innerHTML = password1;
}

window.onload = start;

//let litery = new Array(26);
let litery = [];
litery.push("A");
litery.push("B");
litery.push("C");
litery.push("D");
litery.push("E");
litery.push("F");
litery.push("G");
litery.push("H");
litery.push("I");
litery.push("J");
litery.push("K");
litery.push("L");
litery.push("M");
litery.push("N");
litery.push("O");
litery.push("P");
litery.push("Q");
litery.push("R");
litery.push("S");
litery.push("T");
litery.push("U");
litery.push("V");
litery.push("W");
litery.push("X");
litery.push("Y");
litery.push("Z");

console.log(litery);

function start() {
    //litery:
    let tresc_diva_alfabet = "";

    for (let i = 0; i < 26; i++) {
        //id="lit1"
        tresc_diva_alfabet +=
            "<div "
            + "id='lit" + i + "'"
            + "class='litera' onclick='check(" + i + ")'>"
            + litery[i]
            + "</div>";
    }

    document.getElementById("alfabet").innerHTML = tresc_diva_alfabet;

    show_password();
}

function check(nr) {
    //A in password??? 
    let existLetter = false;
    //console.log(password);
    for (let i = 0; i < password.length; i++) {
        //password[i] == password.charAt(i);
        if (password.charAt(i) == litery[nr]) {
            password1 = password1.changeChar(i, litery[nr]);
            show_password();
            existLetter = true;
        }
    }
   
    if (existLetter) {
        yes.play();
        document.getElementById("lit" + nr).style.background = "#003300";

    } else {
        no.play();
        failedCount++;
        document.getElementById("lit" + nr).setAttribute("onclick", ";");
        document.getElementById("lit" + nr).style.background = "red";
        document.getElementById("szubienica").innerHTML = 
            //"<img src='./img/s"+failedCount+".jpg' />";
            //"<img src=\"./img/s"+failedCount+".jpg\" />";
            //'<img src=\'./img/s'+failedCount+'.jpg\' />';
            //'<img src="./img/s'+failedCount+'.jpg" />';
            `<img src='./img/s${failedCount}.jpg' />`;

        if (password == password1) {
            showEndGameMessage("Podano");
        }   
        
        if (failedCount >= 9) {
            showEndGameMessage("Przegrana!");
        }
    }
    
}

function showEndGameMessage(firstWordOfMessage) {
    document.getElementById("alfabet").innerHTML =
        `${firstWordOfMessage} Prawidlowe haslo: ${password}`
        + "<br/><br/>"
        + "<span class='reset' onclick='location.reload()'>"
            + "Jeszcze raz?"
        "</span>";
}


String.prototype.changeChar = function(index, newChar) {//(4, "E")
    //this == ----- -----
    if (index >= this.length) {
        return this.toString();
    } else {
        let changed_string =
            this.substring(0, index) + newChar + this.substring(index + 1); 
        return changed_string; // ----E -----
    }
}

//console.log(password1);// ----- -----
//console.log(password1.changeChar(4, "E"));


