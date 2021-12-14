<?php

    class user{
        private $db;
        function __construct($conn){
            $this->db = $conn;
        }
        public function getAdmin($usernamel, $passwordl){
            try{
                $sql = "select * from admin where username_adm = :usernamel AND password_adm = :passwordl";
                $stmt = $this-> db->prepare($sql);
                $stmt->bindparam(':usernamel', $usernamel);
                $stmt->bindparam(':passwordl', $passwordl);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
                }catch(PDOException $e){
                    echo $e->getMessage();
                    return false;
                }
        }
        public function getEditor($usernamel, $passwordl){
            try{
                $sql = "select * from editor where username_ed = :usernamel AND password_ed = :passwordl";
                $stmt = $this-> db->prepare($sql);
                $stmt->bindparam(':usernamel', $usernamel);
                $stmt->bindparam(':passwordl', $passwordl);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
                }catch(PDOException $e){
                    echo $e->getMessage();
                    return false;
                }
        }
    }
?>
