<?php
require_once APP_ROOT.'/app/models/TacGia.php';
class TacGiaService{
    public function getAllTacGia(){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if ($conn != null){
            $sql = "SELECT * FROM TacGia";
            $stmt = $conn->query($sql);

            $events = [];
            while ($row = $stmt->fetch()){
                $tacgia = new TacGia($row['id'], $row['tenTacGia'],);
                $tacgias[] = $tacgia;
            }
            return $tacgias;
        }
    }
}