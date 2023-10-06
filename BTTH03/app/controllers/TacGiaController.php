<?php
require_once APP_ROOT.'/app/services/TacGiaService.php';
class TacGiaController{
    public function index(){

        $TacGiaService = new TacGiaService();
        $tacgias = $TacGiaService->getAllTacGia();

        include APP_ROOT.'/app/views/home/index.php';
    }
}