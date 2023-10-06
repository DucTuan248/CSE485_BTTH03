<?php
require_once APP_ROOT.'/app/services/SachService.php';
class SachController{
    public function index(){

        $SachService = new SachService();
        $sachs = $SachService->getAllSach();

        include APP_ROOT.'/app/views/home/index.php';
    }
    public function insertSach()
    {
        $SachService = new SachService();
        if (isset($_POST['add'])) {
            $title = trim($_POST['txttenSach'] ?? '');
            $editor = trim($_POST['txtnamXuatBan'] ?? '');
            if (!empty($tenSach) and !empty($namXuatBan) ) {
                $arguments['tenSach'] = $tenSach;
                $arguments['namXuatBan'] = $namXuatBan;
                $SachService->insert($arguments);
                header("location:?controller=sach");
            } else {
                $mess = "Bạn vui lòng nhập đầy đủ thông tin";
                header("location:?controller=sach&action=add&mess=$mess");
            }
        }
    }
}