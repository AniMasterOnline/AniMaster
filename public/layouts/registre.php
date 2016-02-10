<form METHOD="POST" ACTION="">
    <form id="registre" method="post" action="system/protocols/registrarUsuari.php"> 
        <table align="center" BORDER=0>
            <TR>
                <TD>
                    <input class="input" id="user" placeholder="Usuari *" value="" type="text" name="user" maxlength="25" required autofocus>
                </TD>
            </TR>
            <TR>
                <TD>
                    <input class="input" id="pass" placeholder="Contraseña *" value="" type="password" name="password" maxlength="16" required>
                </TD>
            </TR>
            <TR>
                <TD>
                    <input class="input" id="pass" placeholder="Repeteix Contraseña *" value="" type="password" name="repeat-password" maxlength="16" required>
                </TD>
            </TR>
            <TR>
                <TD>
                    <input class="input" id="email" placeholder="email *" value="" type="text" name="email" maxlength="30" required>
                </TD>
            </TR>
            <TR>
                <TD>
                    <input class="input" id="phone" placeholder="Telefon" value="" type="number" name="telefon" maxlength="9">
                </TD>
            </TR>
            <TR>
                <TD>
                    <input class="input" id="logbutton" type="submit" value="Registrat">
                </TD>
            </TR>
            <TR>
                <TD>
                    <p>Al registrarte, aceptas las <a class="link" href="#">Condiciones de Servicio</a> y la <a class="link" href="#">Política de Privacidad</a>, 
                    incluyendo el <a class="link" href="#">Uso de Cookies</a>. Otros podrán encontrarte por correo electrónico 
                    o por número de teléfono cuando sea proporcionado.</p>
                </TD>
            </TR>
        </table>
    </form>
</form>
<LINK REL=StyleSheet HREF="public/css/loginStyle.css" TYPE="text/css" MEDIA=screen>

