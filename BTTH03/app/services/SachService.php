<?php
require_once APP_ROOT.'/app/models/Sach.php';
class SachService{
    public function getAllSach(){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if ($conn != null){
            $sql = "SELECT * FROM Sach";
            $stmt = $conn->query($sql);

            $events = [];
            while ($row = $stmt->fetch()){
                $sach = new Sach($row['id'], $row['tenSach'], $row['namXuatBan'], $row['idTacGia']);
                $sachs[] = $sach;
            }
            return $sachs;
        }
    }

    public function insertSach(array $arguments){
        $dbconn = new DBConnection();
        $conn = $dbconn->getConnection();

        $insert = "INSERT INTO `Sach` (`ID`, `TenSach`,`NamXuaBan`) VALUES (null, :TenSach, :NamXuatBan, :TacGia)";
        $statement = $conn->prepare($insert);
        $statement->execute($arguments);
        $conn = null;
    }
}