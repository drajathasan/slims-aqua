<?php
use SLiMS\DB;

defined('INDEX_AUTH') or die('Direct access is not allowed');

DB::getInstance()->query(<<<SQL
update `user` set `admin_template` = null where `user_id` = ?
SQL)->execute([$_SESSION['uid']??0]);

?>
<!DOCTYPE Html>
<html>
    <head>
        <title>SLiMS Aqua</title>
        <link href="<?= SWB ?>css/bootstrap.min.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Info</h4>
            <p>Nampaknya anda salah meletakan template. Pindahkan template ini ke dalam folder <code>plugins/</code> lalu aktifkan pluginnya, pilih template pada menu tema.</p>
            <hr>
            <a href="<?= AWB ?>">Refresh Halaman ini</a>
        </div>
    </body>
</html>