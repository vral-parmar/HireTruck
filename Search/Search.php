<!DOCTYPE html>
<html>
<head>

    <title>Live Search using AJAX</title>
    <!-- Including jQuery is required. -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- Including our scripting file. -->
    <script type="text/javascript" src="script.js"></script>
    <!-- Including CSS file. -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- Search box. -->
<p>Search</p>
<form name="search_form" method="post" action="results.php">

    <input name="search "type="text" placeholder="Search" />
    <input type="submit" name="Submit" value="Search" />
    <!-- <div id="display"></div> -->
    <br>
    <b>Ex: </b><i>Viral, Prince, Kesha, Gayatri, Ridham, HireTruck</i>
    <br/>

</body>
</html>
