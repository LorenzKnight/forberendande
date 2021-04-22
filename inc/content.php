<div class="content">
    <?php if($_GET['id'] == "") {?>
        <h1 style="text-align:center;">Programmering Förberedande kurs</h1>
    <div class="msn">
        <P>by</p>
        <h3>Lorenzo Knight</h3>

    </div>
    <?php } ?>

    <?php if($_GET['id'] == 1) {?>
        <h1 style="text-align:center;">Function 1</h1>
    <div class="msn">
        <button type="" class="button" onclick="saludar();">click here</button>
        <h3 id="saludo">...</h3>
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 2) {?>
        <h1 style="text-align:center;">Function 2</h1>
    <div class="msn">
        <h3 id="title">Name</h3>

        <input class="textf" type="text" id="nombre" placeholder="Name..." style="text-align:center;" onkeyup="hola()" autocomplete="off"><br>

        <input class="textf" type="text" id="apellido" placeholder="Surname..." style="text-align:center;" onkeyup="hola()" autocomplete="off"><br>

        <input class="textf" type="text" id="edad" placeholder="Age..." style="text-align:center;" onkeyup="hola()" autocomplete="off"><br>
        
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 3) {?>
        <h1 style="text-align:center;">Function 3</h1>
    <div class="msn" id="msn">
        <button type="" class="button" onclick="changeColor();">click here</button>
        <h3 id="title">the console is white</h3>
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 4) {?>
        <h1 style="text-align:center;">Function 4</h1>
    <div class="msn" id="msn" >
        <h3 id="lafecha">...</h3>
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 5) {?>
        <h1 style="text-align:center;">Function 5</h1>
    <div class="msn" id="msn" style="margin:50px auto 0;">
        <h4>write two number bellow,<br>
         and i will guess which number is the bigger ;)</h4>

        <input class="textf" type="text" id="n1" placeholder="write a number here..." style="text-align:center;" autocomplete="off">

        <input class="textf" type="text" id="n2" placeholder="and other number here." style="text-align:center;" autocomplete="off">
        </br>
        </br>

        <button type="" class="button" onclick="bigNumber();">Guess</button>
            
        <h3 id="title">...</h3>
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 6) {?>
        <h1 style="text-align:center;">Function 6</h1>
    <div class="msn" id="msn" style="margin:50px auto 0;">
        <h4>Guess the number I'm thinking</h4>

        <input class="textf" type="text" id="num" placeholder="write a number here..." style="text-align:center;" autocomplete="off">
        </br>
        </br>

        <button type="" class="button" onclick="randomNumber();">Guess</button>
            
        <h3 id="title">...</h3>
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 7) {?>
        <h1 style="text-align:center;">Function 7</h1>
    <div class="msn" id="msn" style="margin:50px auto 0;">
        <h4>write the text you want to save</h4>

        <textarea id="comment" name="comment" rows="4" cols="40" placeholder="Write here..."></textarea>
        </br>
        </br>
        <button type="" class="button" id="save_btn">Save</button>
            
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 8) {?>
        <h1 style="text-align:center;">Function 8</h1>
    <div class="msn" id="msn" style="margin:50px auto 0;">

        <div style="width:180px; margin:0 auto; padding:20px; background-color:#F0F0F0; border-radius:7px;"><input type="file" id="file-input" /></div>
        <h4>File content:</h4>
        <pre id="contenido-archivo" style="width:300px; height:100px; margin:0 auto; border:1px solid #CCC; overflow:auto;"></pre>
            
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 9) {?>
        <h1 style="text-align:center;">Function 9</h1>
    <div class="msn" id="msn" style="margin:50px auto 0;">
        <h4>Root out, raised to 2 and raised to 10</h4>

        <input class="textf" type="text" id="num" placeholder="write a number here..." style="text-align:center;" autocomplete="off">
        </br>
        </br>

        <button type="" class="button" onclick="math();">Calculate</button>
            
        <h3 id="raiz">...</h3>
        <h3 id="potencia2">...</h3>
        <h3 id="potencia10">...</h3>
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 11) {?>
        <h1 style="text-align:center;">Function 11</h1>
    <div class="msn" id="msn" style="margin:50px auto 0;">
        <h4>Array</h4>

        <!-- <input class="textf" type="text" id="num" placeholder="write a number here..." style="text-align:center;" autocomplete="off">
        </br>
        </br> -->

        <button type="" class="button" onclick="arreglo();">Create</button>
            
        <h3 id="desorden">...</h3>
        <h3 id="orden">...</h3>
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 12) {?>
        <h1 style="text-align:center;">Function 12</h1>
    <div class="msn" id="msn" style="margin:50px auto 0;">
        <h4>Palindrom detector</h4>

        <input class="textf" type="text" id="palabra" placeholder="write here..." style="text-align:center;" autocomplete="off">
        </br>
        </br>

        <button type="" class="button" onclick="palindromo();">Detect</button>
            
        <h3 id="title">...</h3>
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 13) {?>
        <h1 style="text-align:center;">Function 13</h1>
    <div class="msn" id="msn" style="margin:50px auto 0;">
        <h4>write two number bellow,<br>
            and I'm going to show you all the numbers betwing ;)</h4>

        <input class="textf" type="text" id="n1" placeholder="write a number here..." style="text-align:center;" onkeyup="sumar();" autocomplete="off">

        <input class="textf" type="text" id="n2" placeholder="and other number here." style="text-align:center;" autocomplete="off">
        </br>
        </br>

        <button type="" class="button" onclick="numDentro();">Show</button>
            
        <h4 id="title">...</h4>
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 14) {?>
        <h1 style="text-align:center;">Function 14</h1>
    <div class="msn" id="msn" style="margin:50px auto 0; padding:80px 50px;">
        <h4>Write up to which number do you want to see.</h4>

        <input class="textf" type="text" id="numeros" placeholder="write one number here..." value="" style="text-align:center;" autocomplete="off">
        </br>
        </br>

        <button type="" class="button" onclick="numPar();">Detect</button>
            
        <h3 id="par">...</h3>
        <h3 id="impar">...</h3>
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 15) {?>
        <h1 style="text-align:center;">Function 15</h1>
    <div class="msn" id="msn" style="margin:50px auto 0; padding:80px 50px;">
        <h4>Enters a number of values (comma-separated numbers) which are then added and printed.</h4>

        <input class="textf" type="text" id="numeros" placeholder="write one number here..." value="" style="text-align:center;" autocomplete="off">
        </br>
        </br>

        <button type="" class="button" onclick="juntar();">Detect</button>
            
        <h3 id="title">...</h3>
    </div>
    <?php } ?>

    <?php if($_GET['id'] == 16) {?>
        <h1 style="text-align:center;">Function 16</h1>
    <div class="msn" id="msn" style="margin:50px auto 0; padding:10px 10px 20px;">
        <h4>write two number bellow,<br>
         and i will guess which number is the bigger ;)</h4>

        <input class="textf" type="text" id="n1" placeholder="Your character..." style="text-align:center;" autocomplete="off">

        <input class="textf" type="text" id="n2" placeholder="Your opponent..." style="text-align:center;" autocomplete="off">
        </br>
        </br>

        <button type="" class="button" onclick="competition();">Show</button>
            
        
        <table border="0" cellspacing="0" cellpadding="0" style="width:80%; font-size:14px; margin:10px auto 0; border:1px solid #CCC; border-radius:7px;">
            <tr height="20">
                <td width="20%"></td>
                <td width="30%" valign="middle" align="center"><h3 id="character">...</h3></td>
                <td width="30%" valign="middle" align="center"><h3 id="opponent">...</h3></td>
                <td width="20%"></td>
            </tr>
            <tr height="20">
                <td width="20%" style="color:#999;">Hp</td>
                <td width="30%"><p id="health1">...</p></td>
                <td width="30%"><p id="health2">...</p></td>
                <td width="20%"></td>
            </tr>
            <tr height="20">
                <td width="20%" style="color:#999;">Str</td>
                <td width="30%"><p id="strength1">...</p></td>
                <td width="30%"><p id="strength2">...</p></td>
                <td width="20%"></td>
            </tr>
            <tr height="20">
                <td width="20%" style="color:#999;">Luk</td>
                <td width="30%"><p id="lucky1">...</p></td>
                <td width="30%"><p id="lucky2">...</p></td>
                <td width="20%"></td>
            </tr>
        </table>
    </div>
    <?php } ?>
</div>