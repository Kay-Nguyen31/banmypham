<?php
class controller
{
    public function models($FileName)
    {
        require "../go_with_me/mvc/models/database.php";
        $path = __DIR__ . "/../models/$FileName.php";
        if (file_exists($path)) {
            require $path;
            // return new $path();
        } else {
            echo "Not find Models";
        }
    }

    public function views($FolderName,$FileName)
    {
        $path = __DIR__ . "/../views/$FolderName/$FileName.php";
        if (file_exists($path)) {
            require $path;
            // echo $path;
        } else {
            echo "Not find Views";
            // echo $path;
        }
    }
}
