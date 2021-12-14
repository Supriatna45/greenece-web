<?php
    class crud{
        private $db;
        function __construct($conn){
            $this->db = $conn;
        }
        public function insertCst($name, $hp, $waktu, $email, $namaj){
            try{
                $sql = "INSERT INTO cst (namacst, nohp, deadline, emcst, id_serv) VALUES (:nama_cst, :nohp, :deadline, :emcst, :id_serv)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':nama_cst', $name);
                $stmt->bindparam(':nohp', $hp);
                $stmt->bindparam(':deadline', $waktu);
                $stmt->bindparam(':emcst', $email);
                $stmt->bindparam(':id_serv', $namaj);
                
                $stmt->execute();
                return true;
            } catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function getServ(){
            try{
            $sql = "SELECT * FROM serv";
            $result = $this->db->query($sql);
            return $result;
            }catch(PDOException $e){
               echo $e->getMessage();
               return false;
           }
        }
        public function getServ2($namaj){
            try{
                $sql = "select * from serv where id_serv = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $namaj);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
                }catch(PDOException $e){
                   echo $e->getMessage();
                   return false;
               }
            }
        public function getCst($id){
            try{
            $sql = "SELECT * FROM cst c inner join serv s on c.id_serv = s.id_serv where idcst = :idcst";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':idcst', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            }catch(PDOException $e){
               echo $e->getMessage();
               return false;
           }
       }
        public function getCst2(){
            try{
            $sql = "SELECT * FROM cst c inner join serv s on c.id_serv = s.id_serv";
            $result = $this->db->query($sql);
            return $result;
            }catch(PDOException $e){
               echo $e->getMessage();
               return false;
           }
       }
       public function getLog(){
        try{
        $sql = "SELECT * FROM logcourse";
        $result = $this->db->query($sql);
        return $result;
        }catch(PDOException $e){
           echo $e->getMessage();
           return false;
       }
   }
        public function getAdmin(){
            try{
            $sql = "SELECT * FROM admin";
            $result3 = $this->db->query($sql);
            return $result3;
            }catch(PDOException $e){
            echo $e->getMessage();
            return false;
            }
        }
        public function getEditor(){
            try{
            $sql = "SELECT * FROM dosen";
            $result = $this->db->query($sql);
            return $result;
            }catch(PDOException $e){
            echo $e->getMessage();
            return false;
            }
        }
        public function editCst($name, $hp, $waktu, $email, $namaj, $id){
            try{ 
                $sql = "UPDATE cst SET namacst=:nama_cst, nohp=:nohp, deadline=:deadline, emcst=:emcst, id_serv=:id_serv WHERE idcst = :id"; 
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':nama_cst', $name);
                $stmt->bindparam(':id', $id);
                $stmt->bindparam(':nohp', $hp);
                $stmt->bindparam(':deadline', $waktu);
                $stmt->bindparam(':emcst', $email);
                $stmt->bindparam(':id_serv', $namaj);

                $stmt->execute();
                return true;
            } catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        public function editMahasiswa($id, $name, $nim, $prodi, $jurusan, $email, $namas){
            try{ 
                $sql = "UPDATE mahasiswa SET nama_mhs=:nama_mhs, nim=:nim, prodi=:prodi, jurusan=:jurusan, email=:email, id_seminar=:namas WHERE id_mhs = :id"; 
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':nama_mhs', $name);
                $stmt->bindparam(':nim', $nim);
                $stmt->bindparam(':prodi', $prodi);
                $stmt->bindparam(':jurusan', $jurusan);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':id', $id);
                $stmt->bindparam(':namas', $namas);
                $stmt->execute();
                return true;
            } catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteCst($id){
            try{ 
                $sql = "delete from cst where idcst = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function getMahasiswaDetails($id){
            try{
            $sql = "SELECT * FROM mahasiswa m inner join seminar s on m.id_seminar = s.id_seminar where id_mhs = :id";            
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            }catch(PDOException $e){
               echo $e->getMessage();
               return false;
           }
        }
        public function getSeminarById($namas){
            try{
                $sql = "SELECT * FROM seminar where id_seminar = :namas";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':namas', $namas);
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