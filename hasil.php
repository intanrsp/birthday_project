<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday | Party Girl</title>
    <link rel="icon" type="image/png" href="images/Happy.png"/>
    <link rel="stylesheet" type="text/css" href="styles/hasil.css">

</head>
<body>

<div class="container">

<div class="fullscreen-bg">
            <video loop muted autoplay poster="poster.jpg" class="fullscreen-bg__video">
                <source src="images/vbg.mp4" type="video/mp4">
            </video>
        </div>

    <div class="wrapper">
        <div class="text">
    <table>
        <tr>
        <td><h3>HELLO</h3></td>
        <td><h4><?php echo $_POST['nama'] ?></h4></td>
        <td><h3>WE WISH YOU HAPPY BIRTHDAY ON</h3></td>
        <td><h4><?php echo $_POST['birth'] ?></h4></td>
        </tr>  
        
            <div class="button">
            <a href="index.html" class="next">Next &raquo</a>
        </div>
    </div>
    </div>
</div>
</body>
</html>