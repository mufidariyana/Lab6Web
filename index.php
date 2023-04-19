<?php
include 'template/header.php';

$mod = isset($_REQUEST['mod']) ? $_REQUEST['mod'] : ''; // pastikan $mod sudah didefinisikan
?>

<div class="container">
    <h2>Selamat Datang</h2>
    <table class="table">

    </table>
</div>
<div class="container">
    <div class="main">
        <table>

            <?php
            switch ($mod) {

                case "home":
                    require("module/home.php");
                    break;
                case "tambah":
                    require("module/artikel/tambah.php");
                    break;
                case "edit":
                    require("module/artikel/edit.php");
                    break;
                case "simpan":
                    require("module/artikel/simpan.php");
                    break;
                default:
                    require("module/home.php");
            }
            ?>
        </table>
    </div>
</div>

<?php
include 'template/footer.php';
?>
