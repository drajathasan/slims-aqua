<?php
use SLiMS\DB;

defined('INDEX_AUTH') or die('Direct access is not allowed');

$dirname = basename(__DIR__);
$themes_url = AWB . 'admin_template/' . $dirname . '/';

DB::getInstance()->prepare(<<<SQL
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
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-column align-items-center justify-content-center" style="min-height: 100vh">
                    <img style="width:500px" src="<?= $themes_url ?>themes/aqua/assets/img/car-op.svg"/>
                    <h2 class="my-3">Yah!</h2>
                    <p>Kamu salah meletakan template ini. Tonton <a href="#">video ini</a>, setelah itu pindahkan template ini ke direktori <code>plugins/</code></p>
                    <a href="<?= AWB ?>" class="btn btn-primary rounded-pill">Reset Template</a>
                </div>
            </div>
        </div>
    </body>
</html>