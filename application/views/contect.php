<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Home</title>
    <link type="text/css" rel="stylesheet" href="<?= base_url('tool/css/s2.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url('tool/css/bootstrap.min.css') ?>">
    <script src="<?= base_url('tool/js/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('tool/js/myjs.js') ?>"></script>
    <script>

    </script>
</head>

<body>
    <div class="container-fluid" style="background:blue;color:white;">
        <div class="col-sm-3">
            <h1>Online Food HUB</h1>
        </div>
        <div class="col-sm-9"><br>
            <button id="btn">--</button>
            <div id='nav'>
                <?php 
                include('user_header.php');
                ?>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="banner">
        <div id="form" class="col-sm-7">
            <h2>Online Food Hub Pvt LTD</h2>
            <p>E-Mail :onlinefoodhub@example.com</p>
            <p>+91 9876543210</p>
        </div>
    </div>
    <div class="footer">
        <div class="container-fluid">
            <h2><a href="index.php">SQ One Recharge</a></h2>
            <p>© 2019 SQ One Order And Recharge. All Rights Reserved | Design by The Blazers </p>
            <ul>
                <li><a class="face1" href="#"></a></li>
                <li><a class="face2" href="#"></a></li>
                <li><a class="face3" href="#"></a></li>
                <li><a class="face4" href="#"></a></li>
            </ul>
        </div>
    </div>
</body>

</html> 