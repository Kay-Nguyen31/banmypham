<?php
$this->views("container", "header");
?>
<?php
if (isset($_GET['page'])) {
    $temp = $_GET['page'];
    $this->views("component", $temp);
} else {
    $this->views("component", "cpn_trangchu");
}
?>
<?php
$this->views("container", "footer");
?>