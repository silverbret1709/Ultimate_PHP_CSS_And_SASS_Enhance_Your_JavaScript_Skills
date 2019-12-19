<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,400,700|Nunito+Sans:300,400,700|Open+Sans:300,400,700|Roboto:100,300,400,700" rel="stylesheet">
    <!-- CSS styles -->

    <link rel="stylesheet" type="text/css" href="vendors/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <!--Summernote-->
    <script src="vendors/js/jquery-3.4.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

    <title>Profile Admin, manage your ads, payment and campaigns from one place</title>
</head>
<body>
<?php if (!isLoggedIn()) : ?>
<?php header('Location: ../login.php'); ?>
<?php endif;?>

<?php echo flashSuccess('success');?>
<?php echo flashDanger('fail');?>
