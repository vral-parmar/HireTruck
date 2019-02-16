<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<form action="#" method="POST">
<div class="container row">
    <div class="col form-group">
        <select class="dropdown btn form-control" name="secq" required>
            <option value="#" disabled selected >Select any of one</option>
            <option value="What is your favourite food?">What is your favourite food?</option>
            <option value="What is your favourite place?">What is your favourite place?</option>
            <option value="What is your First toy name?">What is your First toy name?</option>
            <option value="What is your first Mobile modal?">What is your first Mobile modal?</option>
            <option value="What is your favourite techer?">What is your favourite techer?</option>
            <option value="What is your best friend name?">What is your best friend name?</option>
            <option value="Who is your favourite teacher?">Who is your favourite techer?</option>
            <option value="What is your gift?">what is your first gift?</option>
        </select></div>
    <div class="col">
        <input type="text" name="secans" class="form-control" required placeholder="Your answer">
    </div>
</div>
<input type="submit" name="any"/>
</form>
</body>
</html>
<?php
if($_POST){
    $sec_type = $_POST['secq'];
    $sec_ans = $_POST['secans'];

    echo $sec_type.$sec_ans;
}
?>