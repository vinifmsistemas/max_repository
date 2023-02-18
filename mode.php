<?php

switch ($pageCur[0]) {
    default:
        $url = (isset($_GET['url'])) ? $_GET['url'] : 'index.php';
        $pageCur = array_filter(explode('/', $url));
        if (file_exists("src/{$pageCur[0]}.php")) {
            include("src/{$pageCur[0]}.php");
        } elseif (file_exists("./lib/{$pageCur[0]}.php")) {
            include("./lib/{$pageCur[0]}.php");
        } else {
            if ($pageCur[0] != 'home') {
                ?>
                <script>
                    window.location.href = '/home';
                </script>
                <?

            }
        }
        break;
}    