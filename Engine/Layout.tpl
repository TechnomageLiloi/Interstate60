<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" type="image/png" href="<?php echo ROOT_URL; ?>/Signum.png">

        <!-- @todo: add function to link scripts and styles -->
        <script src="<?php echo ROOT_URL; ?>/vendor/technomage-liloi/rune-framework/Frontside/Library/Jquery.min.js"></script>
        <script src="<?php echo ROOT_URL; ?>/vendor/technomage-liloi/rune-framework/Frontside/Library/Underscore.min.js"></script>
        <script src="<?php echo ROOT_URL; ?>/vendor/technomage-liloi/rune-framework/Frontside/Library/Backbone.min.js"></script>
        <script src="<?php echo ROOT_URL; ?>/vendor/technomage-liloi/rune-api/Client/API.js"></script>
        <script src="<?php echo ROOT_URL; ?>/vendor/technomage-liloi/stylo/Source/Stylo.js"></script>

        <link href="<?php echo ROOT_URL; ?>/Engine/Style.css" rel="stylesheet" />
        <link href="<?php echo ROOT_URL; ?>/Engine/API/Style.css" rel="stylesheet" />

        <script src="<?php echo ROOT_URL; ?>/Engine/Bootstrap.js"></script>
        <script src="<?php echo ROOT_URL; ?>/Engine/API/Requests.js"></script>
        <script src="<?php echo ROOT_URL; ?>/Engine/API/Road/Requests.js"></script>

        <title>Interstate60</title>
    </head>
    <body>
        <div id="head">
            <a href="javascript:void(0)" onclick="I60.Road.search();" class="butn">Search...</a>
            <a href="javascript:void(0)" onclick="I60.Road.create();" class="butn">Create new step</a>
        </div>
        <div id="page">
            <script>
                I60.Road.search();
            </script>
        </div>
    </body>
</html>