<?php
$this->views("container", "header_manager");
?>
<?php
if (isset($_GET['page'])) {
    $temp = $_GET['page'];
    $this->views("component", $temp);
} else {
    $this->views("component", "cpn_home");
}
?>
<?php
$this->views("container", "footer_manager");
?>