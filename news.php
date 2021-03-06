<?php
include('data/page/definitions.php');
$activePage = 'news';
?>
<!DOCTYPE html SYSTEM "about:legacy-compat">
<html xmlns="http://www.w3.org/1999/xhtml" manifest="cache.appcache" lang="de">
<head>
    <?php include('data/page/header.php'); ?>
    <script type="text/javascript" src="js/news.js"></script>
    <style type="text/css">@import url("css/news.css");</style>
    <title>Pfadi Gösgen :: NEWS</title>
</head>
<body class="nihilo">
<?php include('data/page/logo.php'); ?>
<div id="mitte">
    <?php include('data/page/navigation.php'); ?>
    <table id="short_news">
        <tr>
            <td>
                <div id="info_kasten_pfadi" class="info_kasten"><!--  Pfadi -->
                    <h1>Pfadi</h1>
                    <div id="pfadi">
                        <ul>
                            <li class="pointer">
                                <div><p>Laden...</p></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="info_kasten_woelfe" class="info_kasten"><!--  Woelfe -->
                    <h1>Wölfe</h1>
                    <div id="woelfe">
                        <ul>
                            <li class="pointer">
                                <div><p>Laden...</p></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="info_kasten_biber" class="info_kasten"><!--  Biber -->
                    <h1>Biber</h1>
                    <div id="biber">
                        <ul>
                            <li class="pointer">
                                <div><p>Laden...</p></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="info_kasten_pios" class="info_kasten"><!--  Pios -->
                    <h1>Pios</h1>
                    <div id="pios">
                        <ul>
                            <li class="pointer">
                                <div><p>Laden...</p></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div id="content">
        <div>
            <ul>
                <li>Laden...</li>
            </ul>
        </div>
        <div class="content_abstand"><br/></div>
    </div>
    <div class="content_abstand"><br/></div>
</div>
<?php include('data/page/footer.php') ?>
</body>
</html>