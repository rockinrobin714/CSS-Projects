<?php
    if(isset($_POST('submit'))) {
        $from = $_POST('email');
        $to = 'robindykema@gmail.com';
        $subject = 'email signup';
        $body = 'Please sign me up to the mailing list';
        
        if!($_POST('email')){
            $emailError = '<div class="text-danger"><i class="icon-warning-sign"></i>Please enter a valid email address</div>'
        }
        
        if(!$emailError){
            if(mail ($to, $subject, $body, $from)){
                $result = '<div class="text-success"><i class="icon-check"></i> &nbsp; Thank you, we will keep you updated</div>'
            } else {
                $result = '<div class="text-danger"><i class="icon-warning-sign"></i>Sorry, there has been an error, please try again</div>';
            }
        }
    }
>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='css/style.css'>
    <link rel='stylesheet' href='font-awesome/css/font-awesome.css'>
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet"> </head>

<body>
    <section id='logo'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12 text-center'> <img src='img/my-logo.png' class='img-fluid'> </div>
            </div>
        </div>
    </section>
    <section id='intro'>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <p>We're working hard, we'll be ready to launch in...</p>
                </div>
            </div>
        </div>
    </section>
    <section id='counter'>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <div class="countdown"></div>
                </div>
            </div>
        </div>
    </section>
<section id='icons'>
    <div class='container'>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a ref='http://www.twitter.com' target='blank'> <i class="fa twitter fa-twitter-square fa-3x" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-inline-item"> <a ref='http://www.facebook.com'><i class="fa facebook fa-facebook-square fa-3x" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"> <a ref='http://www.google.com' target='blank'><i class="fa google fa-google-plus-square fa-3x" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"> <a ref='http://www.instagram.com' target='blank'><i class="fa instagram fa-instagram fa-3x" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
   <section id='signup'>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <form class='form-inline' role='form' method='post' action='#signup'>
                        <input type='email' class='form-control form-control-sm' name='email' placeholder='example@google.com'>
                        <button type='submit' class='btn btn-signup btn-sm' name='submit' value='send'>Find out more</button>
                    </form>
    <?php echo $emailError;?>
                <?php echo $result;?>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
    <script>
        $(function () {
            $('.countdown').countdown({
                date: "June 7, 2020 15:03:26"
            });
        });
    </script>
</body>

</html>