<!-- Debug Mode --> 
<?php include "System/Errors.php"; ?>

<!-- Menu --> 
<div class="header-box">
    <?php
    $self = $_SERVER['PHP_SELF'];
    echo '<div class="header-nav">';
        echo'<ul class="nav">';
            if (!strpos($self,"mesa")) { 
                if (strpos($self,"index")) { 
                    echo'<li><a id="active" href="index.php">Inici</a> <span class="flecha">&#9660</span></li>';
                }else{
                    echo'<li><a href="index.php">Inici</a> <span class="flecha">&#9660</span></li>';
                }
                if (strpos($self,"media")) { 
                    echo'<li class="ocultar"><a id="active" href="#Media">Media <span class="flecha">&#9660</span></a></li>';
                }else{
                    echo'<li class="ocultar"><a href="#Media" >Media <span class="flecha">&#9660</span></a> </li>';
                }
                if (strpos($self,"novedades")) { 
                    echo'<li><a id="active" href="devblog.php">Novetats<span class="flecha">&#9660</span></a></li>';
                }else{
                    echo'<li><a href="devblog.php">Novetats <span class="flecha">&#9660</span></a></li>';
                }
            }
            session_start();
            if(!isset($_SESSION['usuari'])){
                if (strpos($self,"signup")) {
                    echo'<li style="float:right;"><a  id="active" href="signup.php">Signup <span class="flecha">&#9660</span></a></li>';
                }else{
                    if (strpos($self,"login")) { 
                        echo'<li style="float:right;"><a  id="active" href="login.php">Login <span class="flecha">&#9660</span></a></li>';
                    }else{
                        echo'<li style="float:right;"><a href="login.php">Login <span class="flecha">&#9660</span></a></li>';
                    }
                }
            }else{
                $value=$_SESSION['usuari'];
                    if (strpos($self,"panel")) { 
                        echo'<li style="float:right;"><a  id="active" href="panel.php">Hola, ';
                        echo $value['user'];
                        echo'<span class="flecha">&#9660</span></a>';
                            echo'<ul class="panel-ul">';
                                echo'<div class="panel-zone">';
                                    echo'<div class="panel-img">';
                                        echo'<img src="Public/img/jugador/login.png">';
                                    echo'</div>';
                                    echo'<div class="panel-links">';
                                        echo'<a href="panel.php"> Panell de ';
                                        echo $value['user'];
                                        echo'</a>';
                                        echo'<a href="logout.php">Sortir</a>';
                                    echo'</div>';
                                echo'</div>';
                            echo'</ul>';
                        echo'</li>';
                    }else{
                        echo'<li style="float:right;"><a href="panel.php">Hola, ';
                        echo $value['user'];
                        echo'<span class="flecha">&#9660</span></a>';
                            echo'<ul class="panel-ul">';
                                echo'<div class="panel-zone">';
                                    echo'<div class="panel-img">';
                                        echo'<img src="Public/img/jugador/login.png">';
                                    echo'</div>';
                                    echo'<div class="panel-links">';
                                        echo'<a href="panel.php"> Panell de ';
                                        echo $value['user'];
                                        echo'</a>';
                                        echo'<a href="logout.php">Sortir</a>';
                                    echo'</div>';
                                echo'</div>';
                            echo'</ul>';
                        echo'</li>';
                    }
                    if (strpos($self,"mesa")) { 
                        echo'<li><a id="active" href="mesav2.php">Taulell <span class="flecha">&#9660</span></a></li>';
                    }else{
                        echo'<li><a href="mesav2.php">Taulell <span class="flecha">&#9660</span></a></li>';
                    }
            }
        echo'</ul>';
    echo'</div>';
    ?>
    <div class="header-logo">
        <?php
            //var_dump($value);
        ?>
    </div>
</div>