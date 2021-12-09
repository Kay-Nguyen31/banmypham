<?php
class controller
{
    public function models($FileName)
    {
        require "../banmypham/mvc/models/database.php";
        $path = __DIR__ . "/../models/$FileName.php";
        if (file_exists($path)) {
            require $path;
            // return new $path();
        } else {
            echo "Not find Models";
        }
    }

    public function views($FolderName, $FileName)
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
    //function upload
    public function uploadFile()
    {
        $uploadType = ['image/png', 'image/jpg', 'image/jpeg'];
        $uploadSize = 10000000;
        $file = isset($_FILES['file']) ? $_FILES['file'] : [];
        $name = isset($_POST['name']) ? $_POST['name'] : date("h_m_s_d_m_Y");
        $folder = isset($_POST['folder']) ? $_POST['folder'] : "img";
        if (count($file) > 0) {
            $check = true;
            if ($file['size'] > $uploadSize) {
                $check = false;
                echo "vượt quá kích thước cho phép";
            }

            if ($check == true && in_array($file['type'], $uploadType)) {
                $path = __DIR__ . "/../../public/img/$folder/$name";
                if (!move_uploaded_file($file['tmp_name'], $path)) {
                    echo "Khong di chuyen duoc";
                }
            }
        } else {
            echo "Không đúng định dạng";
        }
    }
    public function getValue($method, $key, $error)
    {
        //1 la post 0 la get
        if (strcmp($method, 1) == 0) {
            return isset($_POST["$key"]) ? htmlspecialchars($_POST["$key"]) : $error;
        } else {
            return isset($_GET["$key"]) ? htmlspecialchars($_GET["$key"]) : $error;
        }
    }
}
