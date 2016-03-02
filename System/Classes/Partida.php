<?php
    require_once "../config.php";
    class Partida{
        /*Atributs*/
        private $id_partida;
        private $titol;
        private $descripcio;
        private $any_partida;
        private $nivel_sobrenatural;
        private $joc;
        
        //METODES
        public function add(){
            $db = new connexio();
            $db->query("INSERT INTO Partida(titol,descripcio,any_partida,nivel_sobrenatural,joc) "
                    . "VALUES ('$this->titol', '$this->descripcio', '$this->any_partida', '$this->nivel_sobrenatural', '$this->joc')");
            $db->close();
        }
        public function mod(){
            $db = new connexio();
            $db->query("UPDATE Partida SET titol='$this->titol',descripcio='$this->descripcio',any_partida='$this->any_partida',nivel_sobrenatural='$this->nivel_sobrenatural',joc='$this->joc' WHERE id_partida= '$this->id_partida'");
            $db->close();
        }
        public function delete($var){
            $db = new connexio();
            $sql = "delete from Partida where id_partida = $var";
            $db->query($sql);
        }
        public function view_all(){
            $db = new connexio();
            $sql = "SELECT * FROM Partida;";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $Partida = new Partida($obj["id_partida"],$obj["titol"],$obj["descripcio"],$obj["any_partida"], $obj["nivel_sobrenatural"], $obj["joc"]);
                //var_dump($Usuari);
                array_push($rtn, $Partida);
            }
            $db->close();
            return $rtn;
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
            $this->id_partida=0;
            $this->titol="";
            $this->descripcio="";
            $this->any_partida="";
            $this->nivel_sobrenatural="";
            $this->joc="";
        }
        function __construct1($a1){
            $this->id_partida=$a1;
            $this->titol="";
            $this->descripcio="";
            $this->any_partida="";
            $this->nivel_sobrenatural="";
            $this->joc="";
        }
        function __construct3($a2, $a3, $a4){
            $this->id_partida="";
            $this->titol=$a2;
            $this->descripcio=$a3;
            $this->any_partida=$a4;
            $this->nivel_sobrenatural="";
            $this->joc="";
        }
        function __construct5($a2, $a3, $a4, $a5, $a6){
            $this->id_partida="";
            $this->titol=$a2;
            $this->descripcio=$a3;
            $this->any_partida=$a4;
            $this->nivel_sobrenatural=$a5;
            $this->joc=$a6;
        }
        function __construct6($a1, $a2, $a3, $a4, $a5, $a6){
            $this->id_partida=$a1;
            $this->titol=$a2;
            $this->descripcio=$a3;
            $this->any_partida=$a4;
            $this->nivel_sobrenatural=$a5;
            $this->joc=$a6;
        }
           
        //METODES SET
        public function setId_Partida($var) {
            $this->id_partida = $var;
        }
        public function setTitol($var) {
            $this->titol = $var;
        }
        public function setDescripcio($var) {
            $this->descripcio = $var;
        }
        public function setAny_Partida($var) {
            $this->any_partida = $var;
        }
        public function setNivel_Sobrenatural($var) {
            $this->nivel_sobrenatural = $var;
        }
        public function setJoc($var) {
            $this->joc = $var;
        }
        
        //METODES GET 
        public function getId_Partida(){
            return $this->id_partida;
        }
        public function getTitol(){
            return $this->titol;
        }
        public function getDescripcio(){
            return $this->descripcio;
        }
        public function getAny_Partida(){
            return $this->any_partida;
        }
        public function getNivel_Sobrenatural(){
            return $this->nivel_sobrenatural;
        }
        public function getJoc(){
            return $this->joc;
        }
    }
?>