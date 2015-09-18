<?php
    $userInfo = array(
        'company'=>'whereAt Industries',
        'companyLogo'=> 'http://www.whereatcloud.com/wp-content/uploads/2015/02/Logo_FINAL-int-indx240.png',
        'country'=> 'NL',
        'bu'=>'Business Development',
        'first_name'=> ' Ivan',
        'last_name'=> ' Silvestrov',
        'gender'=> 'MALE',
        'position'=> 'Director Business Development',
        'phone'=> '+ 31 6 12 345 679',
        'email'=> 'ivan@whereatcloud.com',
        'alerts'=> 'ON'
    );

    $avatar = array(
        'MALE'=>'http://www.whereatcloud.com/wp-content/uploads/2015/09/man.png',
        'FEMALE'=>'http://www.whereatcloud.com/wp-content/uploads/2015/09/woman.png'
    );
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="css/app.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/app.js"></script>
</head>
<body>
<div class="user-info">
    <div class="row">
        <div class="col-xs-4">
            <div class="pull-left">
                <img src="<?php echo $userInfo['companyLogo'] ?>" class="image"/>
            </div>
            <div>
                | <?php echo $userInfo['company'] ?><br/>
                | <?php echo $userInfo['country'] ?><br/>
                | <?php echo $userInfo['bu'] ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-xs-4">
            <div class="pull-left">
                <img src="<?php echo $avatar[$userInfo['gender']] ?>" class="image"/>
            </div>
            <div>
                | <?php echo $userInfo['first_name'] ?><br/>
                | <?php echo $userInfo['last_name'] ?><br/>
                | <?php echo $userInfo['position'] ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-xs-4">
            | <?php echo $userInfo['phone'] ?><br/>
            | <?php echo $userInfo['email'] ?><br/>
            | Receive email alerts? <button type="button" id="email-alert-switch" class="btn toggle-switch <?php echo ($userInfo['alerts'] == 'OFF')?'off':'' ?>"><span class="on">YES</span><span class="off">NO</span></button>
        </div>
    </div>
</div>
</body>
</html>