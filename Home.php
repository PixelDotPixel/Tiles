<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <meta charset="UTF-8">
        
        <title> Tiles </title>
        
    </head>
    
    <body onload="BuildBoard()">
        <div class="Block Banner">
                <img src="Images/Header.PNG" alt="Tiles">
        </div>
        <div class="LargeSpace"></div>
        <ul class="Navcontainer">
          <li class="NavList" ><a class="NavLink CurrentPage NL1" href="#home">Paint</a></li>
          <li class="NavList" ><a class="NavLink NL2" href="#news">Path</a></li>
          <li class="NavList" ><a class="NavLink NL3" href="#contact">Animate</a></li>
          <li class="NavList" ><a class="NavLink NL4" href="#contact">Algorithm</a></li>
          <li class="NavList" ><a class="NavLink NL5" href="#about">About</a></li>
        </ul>
        
        <div class="LargeSpace"></div>
            
         <div class="Block">
            <div class="Inline-Cluster Inline-Style-Color Inline-Cluster-Top">
                <div class="Block Font Medium"> Paint </div>
            </div> 
            
            <div class="Inline-Cluster-Middle Inline-Style-Color Inline-Cluster MediumSpace" id="InlineBorder">
                
                <div class="Inline-Container Sliver"></div>
                
                <div draggable="false" class="Inline-Container Full">
                    <table draggable="false" class="gameboard">
                        <?php
                            $columns=25;
                            $rows=25;
                            for($x = 0; $x < $columns; $x++) {
                                echo "<tr draggable=\"false\">";
                                for($y = 0; $y < $rows; $y++) {
                                    $function="Event($x,$y)";
                                    $function_test="PrintState($x,$y)";
                                    echo"<th><div draggable=\"true\" ondragover=\"$function\" onclick=\"$function_test\" class=\"Tile Inactive_Tile\" id=\"";
                                    echo $x;
                                    echo "_";
                                    echo $y;
                                    echo "\"></div></th>";
                                    echo "\n";
                                }
                                echo "</tr>";
                            }  
                        ?>
                    </table>

                </div>

                <div class="Inline-Container Sliver">
                    <table class="Pallet">
                        <tr>
                            <th draggable="false" class="Pallet P_Red"> <Button onclick="ChangeColor('P_Red')" class="Tile P_Red"></Button></th>
                            <th draggable="false" class="Pallet P_Pink"> <Button onclick="ChangeColor('P_Pink')" class="Tile P_Pink"></Button></th>
                        </tr>
                        <tr>
                            <th draggable="false" class="Pallet P_Blue"> <Button onclick="ChangeColor('P_Blue')" class="Tile P_Blue"></Button></th>
                             <th draggable="false" class="Pallet P_LBlue"> <Button onclick="ChangeColor('P_LBlue')" class="Tile P_LBlue"></Button></th>                           
                        </tr>
                        <tr>
                            <th draggable="false" class="Pallet P_Green"> <Button onclick="ChangeColor('P_Green')" class="Tile P_Green"></Button></th>
                            <th draggable="false" class="Pallet P_LGreen"> <Button onclick="ChangeColor('P_LGreen')" class="Tile P_LGreen"></Button></th> 
                        </tr>
                        <tr>
                            <th draggable="false" class="Pallet P_Yellow"> <Button onclick="ChangeColor('P_Yellow')" class="Tile P_Yellow"></Button></th>
                            <th draggable="false" class="Pallet P_Orange"> <Button onclick="ChangeColor('P_Orange')" class="Tile P_Orange"></Button></th> 
                        </tr>  
                        <tr>
                            <th draggable="false" class="Pallet P_White"> <Button onclick="ChangeColor('P_White')" class="Tile P_White"></Button></th>
                            <th draggable="false" class="Pallet P_Erase"> <Button onclick="ChangeColor('P_Erase')" class="Tile P_Erase"></Button></th> 
                        </tr> 
                    </table>
                    <div class="SmallSpace"></div>
                    <div class= "font">R: <input type="text" class="ColorVal" minlength="0" maxlength="3"/></div>
                    <div class="SmallSpace"></div>
                    <div class= "font">G: <input type="text" class="ColorVal" minlength="0" maxlength="3"/></div>
                    <div class="SmallSpace"></div>
                    <div class= "font">B: <input type="text" class="ColorVal" minlength="0" maxlength="3"/></div>
                </div>
                    
            </div>
            <div id="snackbar">Some text some message..</div>
            <div class="Inline-Cluster Inline-Style-Color Inline-Cluster-Bottom" id="InlineBorder">
                <Button class="Reset" onclick="Wand()">Wand</Button>
                <Button class="Reset" onclick="Reset()">Reset</Button>
            </div> 
        </div> 
        <script type="text/javascript" src="Game.js"></script>
    </body>
</html>