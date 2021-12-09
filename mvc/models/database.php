<?php
class database{
    public function connect()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "banmyphamm";
        $conn = mysqli_connect($host, $user, $pass, $db);
        return $conn;
    }
    public function closeConnect($conn)
    {
        mysqli_close($conn);
    }
    public function selectQuery($query)
    {
        $conn = $this->connect();
        $data = [];
        $rs = mysqli_query($conn, $query);
        while ($row = $rs->fetch_array()) {
            $data[] = $row;
        }
        $this->closeConnect($conn);
        return $data;
    }
    public function Query($query)
    {
        $conn = $this->connect();
        $data = mysqli_query($conn, $query);
        if($data == true)
        {
            $data = 1;
        }
        else
        {
            $data = 0;
        }
        $this->closeConnect($conn);
        return $data;
    }
}
