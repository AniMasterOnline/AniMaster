<form id="registre" method="post" action="/System/Protocols/registrarUsuari.php"> 
    <table align="center" BORDER=0>
        <TR>
            <TD>
            <input class="input" id="user" placeholder="Usuari *" value="" type="text" name="TempUser" maxlength="25" required autofocus>
            </TD>
        </TR>
        <TR>
            <TD>
            <input class="input" id="pass" placeholder="Contraseña *" value="" type="password" name="TempPassword" maxlength="16" required>
            </TD>
        </TR>
        <TR>
            <TD>
            <input class="input" id="pass2" placeholder="Repeteix Contraseña *" value="" type="password" name="TempRepeatPassword" maxlength="16" required>
            </TD>
        </TR>
        <TR>
            <TD>
            <input class="input" id="email" placeholder="email *" value="" type="text" name="TempEmail" maxlength="30" required>
            </TD>
        </TR>
        <TR>
            <TD>
            <input class="input" id="phone" placeholder="Telefon" value="" type="number" name="TempTelefon" maxlength="9">
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
<LINK REL=StyleSheet HREF="Public/css/loginStyle.css" TYPE="text/css" MEDIA=screen>

