<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/filesaver.js"></script>
    <script defer src="js/funciones.js" ></script>
    <script>
        function fecha() {
            var title = document.getElementById('lafecha');
            const fecha = new Date();
            title.innerHTML = fecha;
            console.log(fecha);
        }
        window.onload = fecha;
    </script>
    <title>Document</title>
</head>

<body>

    <div class="wrapp">
        <a href="#" style="color:#FFF; text-decoration:none; font-size:20px;" onclick="close_window();return false;"><div class="off_button">+</div></a>
        <?php include("inc/menu.php"); ?>
        <?php include("inc/content.php"); ?>
    </div>
    
</body>
</html>
















<script>
    function getRandomColor() {
        mensage = document.getElementById("msn");

        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
        console.log(color);

        mensage.style.backgroundColor= color;
    }
    function setRandomColor() {
        $("#msn").css("background-color", getRandomColor());
        // console.log('\x1b[36m%s\x1b[0m', 'I am cyan');
    }
</script>