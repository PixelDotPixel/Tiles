var color = " P_Red";
var delay_C = " P_Black";
var board = [];

function Event( x, y) {
    var ID_toChange = x.toString() + '_' + y.toString();
    var index = (x + (y*25)) % (25*25); //needs fixing
    board[index].color=color;
      $("#" + ID_toChange).attr('class', 'Tile Active_Tile' + delay_C).delay(30)
         .queue(function() {
                $(this).attr('class', 'Tile Active_Tile' + color).dequeue();
            }
        );
}

function Clear( x, y) {
    var ID_toChange = x.toString() + '_' + y.toString();
    
      $("#" + ID_toChange).attr('class', 'Tile Active_Tile' + delay_C).delay(400)
         .queue(function() {
                $(this).attr('class', 'Tile Active_Tile P_White').dequeue();
            }
        );
}

function ChangeColor(x) {
    color=" "+x;
    var selected = document.querySelector('Pallet ' + color);
    var style = getComputedStyle(selected);
    var backgroundColor = style.background;
    
    PrintLog(backgroundColor);
    //document.getElementById("InlineBorder").style.borderBottomColor = backgroundColor + ' !important';
    
    
}

function Cascade() {
    "uses strict";
    var temp = color;
    color = " P_White";
    for(var i = 0; i < board.length(); i++){
        Clear(board[i].x_loc, board[i].y_loc);
    }
}

function Reset() {
    var i = 0;
    for(i = 0; i < board.length; i++){
        board[i].color=" P_White";
        Clear(board[i].x_loc, board[i].y_loc);
    }
}

function BuildBoard() {
    var x = 0;
    var y = 0;
    var Rows = 25;
    var Columns = 25;
    
    for (x = 0; x < Columns; x++) {
        for (y = 0; y < Rows; y++) {
            board.push({x_loc: x, y_loc: y, color: ' P_White', state: 'Inactive_Tile'});
        }
    }
}

function PrintState(x, y){
    var z = document.getElementById("snackbar");
    var index = (x + (y*25)) % (25*25); //needs fixing
    
    var toPrint = "X: " + board[index].x_loc + " Y: " + board[index].y_loc + " color: " + board[index].color +" State: " + board[index].state;
    
    z.innerHTML = toPrint;
    z.className = "show";
    setTimeout(function(){ z.className = z.className.replace("show", ""); }, 3000);
}

function PrintLog(x){
    var z = document.getElementById("snackbar");
    var y = x.toString;
    z.innerHTML = y;
    z.className = "show";
    setTimeout(function(){ z.className = z.className.replace("show", ""); }, 3000);
}

function Wand(){
    var i = 0;
    var temp = color;
    color = " P_Black"; 
    for(i = 0; i < board.length; i++){
        if(board[i].color == " P_White"){
            var x = i % 25;
            var y = Math.floor(i/25);
            var ID_toChange = x.toString() + '_' + y.toString();
            $("#" + ID_toChange).attr('class', 'Tile Active_Tile' + delay_C).delay(30)
                .queue(function() {
                    $(this).attr('class', 'Tile Active_Tile P_Erase').dequeue();
                }
            ); 
        }
    }
    color = temp;
}

/*function PrintState(x, y){
    var z = document.getElementById("snackbar");
    var indexLoc = (x * y) % (25 * 25);
    var toPrint = "X: " + board.index(indexLoc).x + " Y: " + board.index(indexLoc).y + " Color: " + board.index(indexLoc).color + " State: " + board.index(indexLoc).state;
    z.innerHTML = "x";
    z.className = "show";
    setTimeout(function(){ z.className = z.className.replace("show", ""); }, 3000);
}*/