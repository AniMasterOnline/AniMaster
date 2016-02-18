<?php
    require_once "../config.php";
    class Usuari{
        /*Atributs*/
        private $id_usuari;
        private $user;
        private $password;
        private $email;
        private $telefon;
        
        //METODES
        public function add(){
            $db = new connexio();
            $db->query("INSERT INTO Usuari(user,password,email,telefon) "
                    . "VALUES ('$this->user', '$this->password', '$this->email', '$this->telefon')");
            $db->close();
        }
        public function mod(){
            $db = new connexio();
            $db->query("UPDATE Usuari SET password='".$this->password."', email='".$this->email."', telefon='".$this->telefon." WHERE id_usuari= '".$this->id_usuari."'");
            $db->close();
        }
        function verificar_login($user,$password){ 
            $db = new connexio();
            $sql = "SELECT * FROM usuari WHERE user = '$user' and password = '$password'";
            $query = $db->query($sql);
            $count = 0;
            $datos = "";
            if ($query->num_rows > 0) {
                while($row = $query->fetch_assoc()) {
                    $count++;
                    $datos = $row;
                }
            } else {
                $count = 0;
            }
            $db->close();
            if($count == 1){
                return $datos;
            }else{
                return null;
            }
        }
        public function test1($var){
            $db = new connexio();
            $sql = "SELECT * FROM Usuari WHERE user= '$var';";
            $query = $db->query($sql);
            if ($query->num_rows > 0) {
                while($row = $query->fetch_assoc()) {
                    $res = true;
                }
            } else {
                $res = false;
            }
            $db->close();
            return $res;
        }
        public function test2($var){
            $db = new connexio();
            $sql = "SELECT * FROM Usuari WHERE email= '$var';";
            $query = $db->query($sql);
            if ($query->num_rows > 0) {
                while($row = $query->fetch_assoc()) {
                    $res = true;
                }
            } else {
                $res = false;
            }
            $db->close();
            return $res;
        }
        public function test3($var){
            $db = new connexio();
            $sql = "SELECT * FROM Usuari WHERE telefon= '$var';";
            $query = $db->query($sql);
            if ($query->num_rows > 0) {
                while($row = $query->fetch_assoc()) {
                    $res = true;
                }
            } else {
                $res = false;
            }
            $db->close();
            return $res;
        }
        public function view_all(){
            $db = new connexio();
            $sql = "SELECT * FROM Usuari;";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $Usuari = new Usuari($obj["id_usuari"],$obj["user"],$obj["password"],$obj["email"], $obj["telefon"]);
                //var_dump($Usuari);
                array_push($rtn, $Usuari);
            }
            $db->close();
            return $rtn;
        }
        public function delete($var){
            $db = new connexio();
            $sql = "delete from Usuari where id_usuari = $var";
            $db->query($sql);
        }
        
        //CONSTRUCTORS
        function __construct(){
            $args = func_get_args();
            $num = func_num_args();
            $f='__construct'. $num;
            if (method_exists($this, $f)) {
                call_user_func_array(array($this, $f), $args);
            }
        }
        function __construct0(){
            $this->id_usuari=0;
            $this->user="";
            $this->password="";
            $this->email="";
            $this->telefon="";
        }
        function __construct1($a1){
            $this->id_usuari=$a1;
            $this->user="";
            $this->password="";
            $this->email="";
            $this->telefon="";
        }
        function __construct4($a2, $a3, $a4, $a5){
            $this->id_usuari=0;
            $this->user=$a2;
            $this->password=$a3;
            $this->email=$a4;
            $this->telefon=$a5;
        }
        function __construct5($a1, $a2, $a3, $a4, $a5){
            $this->id_usuari=$a1;
            $this->user=$a2;
            $this->password=$a3;
            $this->email=$a4;
            $this->telefon=$a5;
        }
           
        //METODES SET
        public function setId_Usuari($id_usuari) {
            $this->id_usuari = $id_usuari;
        }
        public function setUser($user) {
            $this->user = $user;
        }
        public function setPassword($password) {
            $this->password = $password;
        }
        public function setEmail($email) {
            $this->email = $email;
        }
        public function setTelefon($telefon) {
            $this->telefon = $telefon;
        }
        
        //METODES GET 
        public function getId_Usuari(){
            return $this->id_usuari;
        }
        public function getUser(){
            return $this->user;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getTelefon(){
            return $this->telefon;
        }
    }