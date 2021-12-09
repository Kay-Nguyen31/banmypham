<?php
    class dangnhap extends controller{
        public function login(){
            $this->views("layout", "dangnhap");
        }
        public function manager(){
            $this->views("layout", "manager");
        }
    }
?>