 <div class="header-box">
    <?php
    $self = $_SERVER['PHP_SELF'];
    echo '<div class="header-nav">';
        echo'<ul class="nav">';
            if (strpos($self,"index")) { 
                echo'<li><a id="active" href="index.php">Inicio</a> <span class="flecha">&#9660</span></li>';
            }else{
                echo'<li><a href="index.php">Inicio</a> <span class="flecha">&#9660</span></li>';
            }
            if (strpos($self,"media")) { 
                echo'<li><a id="active" href="#Media">Media <span class="flecha">&#9660</span></a>';
            }else{
                echo'<li><a href="#Media">Media <span class="flecha">&#9660</span></a>';
            }
                echo'<ul>';
                    echo'<li><a href="">Submenu1 <span class="flecha">&#9660</span></a></li>';
                    echo'<li><a href="">Submenu2 <span class="flecha">&#9660</span></a></li>';
                    echo'<li><a href="">Submenu3 <span class="flecha">&#9660</span></a></li>';
                    echo'<li><a href="">Submenu4 <span class="flecha">&#9660</span></a>';
                        echo'<ul>';
                            echo'<li><a href="">Submenu1 <span class="flecha">&#9660</span></a></li>';
                            echo'<li><a href="">Submenu2 <span class="flecha">&#9660</span></a></li>';
                            echo'<li><a href="">Submenu3 <span class="flecha">&#9660</span></a></li>';
                            echo'<li><a href="">Submenu4 <span class="flecha">&#9660</span></a></li>';
                        echo'</ul>';
                    echo'</li>';
                echo'</ul>';
            echo'</li>';
            if (strpos($self,"novedades")) { 
                echo'<li><a id="active" href="#Novedades">Novedades <span class="flecha">&#9660</span></a></li>';
            }else{
                echo'<li><a href="#Novedades">Novedades <span class="flecha">&#9660</span></a></li>';
            }
            if (strpos($self,"mesa")) { 
                echo'<li><a id="active" href="#Mi Mesa">Mi Mesa <span class="flecha">&#9660</span></a></li>';
            }else{
                echo'<li><a href="#Mi Mesa">Mi Mesa <span class="flecha">&#9660</span></a></li>';
            }
            if (strpos($self,"signup")) {
                echo'<li style="float:right;"><a  id="active" href="signup.php">Signup <span class="flecha">&#9660</span></a></li>';
            }else{
                if (strpos($self,"login")) { 
                    echo'<li style="float:right;"><a  id="active" href="login.php">Login <span class="flecha">&#9660</span></a></li>';
                }else{
                    echo'<li style="float:right;"><a href="login.php">Login <span class="flecha">&#9660</span></a></li>';
                }
            }
        echo'</ul>';
    echo'</div>';
    ?>
    <div class="header-logo">
    </div>
</div>



