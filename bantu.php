<?php

class bantu{
    function redirect($target)
    {
        echo '
        <script>
        window.location = "' . $target . '";
        </script>
        ';
        exit;
    }
}
?>