<html>
<head>
    <title><?php echo $generic['title'];?></title>
</head>
<body>
<div class="app">
    <h1><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/"><?php echo $app_config['APP_NAME'];?></a></h1>
</div>
<div class="header">
    <h2><?php echo $generic['title'];?></h2>
</div>
<div class="wrapper">
    <div class="container"><?php echo $generic['content'];?></div>
</div>
<div class="footer">
    Copyright &copy; <?php echo date('Y');?>
</div>
</body>
</html>