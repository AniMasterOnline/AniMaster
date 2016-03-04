<?php
    require_once __DIR__."/../config.php";
    class Item{
        /*Atributs*/
        private $id_item;
        public $nom;
        public $descripcio;
        
        //METODES
        public function add(){
            $db = new connexio();
            $db->query("INSERT INTO Item(id_item,nom,descripcio) "
                    ."VALUES ('$this->id_item', '$this->nom','$this->descripcio')");
            $db->close();
        }
        public function mod(){
            $db = new connexio();
            $db->query("UPDATE Item SET nom='$this->nom' descripcio='$this->descripcio' WHERE id_item= '$this->id_item'");
            $db->close();
        }
        public function delete($var){
            $db = new connexio();
            $sql = "delete from Item where id_item = $var";
            $db->query($sql);
        }
        function get_id(){ 
            $db = new connexio();
            $sql = "SELECT id_item FROM Item WHERE nom = '$this->nom'";
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
        public function view_all(){
            $db = new connexio();
            $sql = "SELECT * FROM Item;";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $Item = new Item($obj["id_item"],$obj["nom"],$obj["descripcio"]);
                //var_dump($Usuari);
                array_push($rtn, $Item);
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
            $this->id_item=0;
            $this->nom="";
            $this->descripcio="";
        }
        function __construct1($a1){
            $this->id_item=$a1;
            $this->nom="";
            $this->descripcio="";
        }
        function __construct2($a2, $a3){
            $this->id_item=0;
            $this->nom=$a2;
            $this->descripcio=$a3;
        }
        function __construct9($a1, $a2, $a3){
            $this->id_item=$a1;
            $this->nom=$a2;
            $this->descripcio=$a3;
        }
           
        //METODES SET
        public function setId_Item($var) {
            $this->id_item = $var;
        }
        public function setNom($var) {
            $this->nom = $var;
        }
        public function setDescripcio($var) {
            $this->descripcio = $var;
        }
        
        //METODES GET 
        public function getId_Enemigo(){
            return $this->id_item;
        }
        public function getNom(){
            return $this->nom;
        }
        public function getDescripcio(){
            return $this->descripcio;
        }
    }
?>
