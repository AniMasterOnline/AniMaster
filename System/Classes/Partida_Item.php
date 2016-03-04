<?php
    require_once __DIR__."/../config.php";
    class Partida_Item{
        /*Atributs*/
        private $id_partida;
        private $id_item;
        
        //METODES
        public function add(){
            $db = new connexio();
            $db->query("INSERT INTO Partida_Item(id_item,id_partida) "
                    . "VALUES ('$this->id_item', '$this->id_partida')");
            $db->close();
        }
        public function delete($partida,$item){
            $db = new connexio();
            $sql = "delete from Partida_Item where id_partida = '$partida' and id_item = '$item'";
            $db->query($sql);
        }
        public function view_partida($partida){
            $db = new connexio();
            $sql = "SELECT * FROM Partida_Item where id_partida= '$partida'";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $Partida_Item = new Partida_Item($obj["id_partida"],$obj["id_item"]);
                //var_dump($Partida_Item);
                array_push($rtn, $Partida_Item);
            }
            $db->close();
            return $rtn;
        }
        public function view_all(){
            $db = new connexio();
            $sql = "SELECT * FROM Partida_Item;";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $Partida_Item = new Partida_Item($obj["id_partida"],$obj["id_item"]);
                //var_dump($Usuari_Partida);
                array_push($rtn, $Partida_Item);
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
            $this->id_item=0;
        }
        function __construct2($a1, $a2){
            $this->id_partida=$a1;
            $this->id_item=$a2;
        }
           
        //METODES SET
        public function setId_Partida($id_partida) {
            $this->id_partida = $id_partida;
        }
        public function setId_Item($id_item) {
            $this->id_item = $id_item;
        }
        
        
        //METODES GET 
        public function getId_Item(){
            return $this->id_item;
        }
        public function getId_Partida(){
            return $this->id_partida;
        }
    }
?>

