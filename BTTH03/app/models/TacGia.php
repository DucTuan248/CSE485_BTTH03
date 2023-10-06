<?php
class TheLoai{
    private $id;
    private $tenTacGia;
    public function __construct($id, $tenTacGia){
        $this->id = $id;
        $this->tenTacGia = $tenTacGia;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function gettenTacGia(){
        return $this->tenTacGia;
    }
    public function settenTacGia($tenTacGia){
        $this->tenTacGia = $tenTacGia;
    }

}