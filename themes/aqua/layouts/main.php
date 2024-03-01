<?php
_include('components.meta');
?>
<html>
    <head>
        <?= _yield('meta') ?>
    </head>
    <body>
        <div class="wrapper">
            <?= _yield('content') ?>
        </div>
    </body>
</html>