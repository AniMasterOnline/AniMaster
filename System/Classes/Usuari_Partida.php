<?php
    require_once "../config.php";
    class Usuari_Partida{
        /*Atributs*/
        private $id_usuari;
        private $id_partida;
        private $master;
        
        //METODES
        public function add(){
            $db = new connexio();
            $db->query("INSERT INTO Usuari_Partida(id_usuari,id_partida,master) "
                    . "VALUES ('$this->id_usuari', '$this->id_partida', '$this->master')");
            $db->close();
        }
        public function delete($user,$partida){
            $db = new connexio();
            $sql = "delete from Usuari_Partida where id_usuari = '$user' and id_partida = '$partida'";
            $db->query($sql);
        }
        public function view_all(){
            $db = new connexio();
            $sql = "SELECT * FROM Usuari_Partida;";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $Usuari_Partida = new Usuari_Partida($obj["id_usuari"],$obj["id_partida"],$obj["master"]);
                //var_dump($Usuari_Partida);
                array_push($rtn, $Usuari_Partida);
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
            $this->id_usuari=0;
            $this->id_partida="";
            $this->master="";
        }
        function __construct1($a1){
            $this->id_usuari=$a1;
            $this->id_partida="";
            $this->master="";
        }
        function __construct3($a1, $a2, $a3){
            $this->id_usuari=$a1;
            $this->id_partida=$a2;
            $this->master=$a3;
        }
           
        //METODES SET
        public function setId_Usuari($id_usuari) {
            $this->id_usuari = $id_usuari;
        }
        public function setId_Partida($id_partida) {
            $this->id_partida = $id_partida;
        }
        public function setMaster($master) {
            $this->master = $master;
        }
        
        //METODES GET 
        public function getId_Usuari(){
            return $this->id_usuari;
        }
        public function getId_Partida(){
            return $this->id_partida;
        }
        public function getMaster(){
            return $this->master;
        }
    }
?>

