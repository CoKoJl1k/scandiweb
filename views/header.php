<!DOCTYPE html>
<head>
    <title>Products</title>

    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/default.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.5.1.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>
<body>
<div id="header">
    <div class="row">
        <div class="col-1"><a class="menu" href="<?php echo URL; ?>product/list">List of products</a></div>
        <div class="col-1"><a class="menu" href="<?php echo URL; ?>product/new">Add product</a></div>
    </div>
</div>
<div class="result"></div>

<div id="content">