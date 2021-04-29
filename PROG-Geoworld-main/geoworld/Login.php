<?php
session_start();
/**
 * L'inclusion de ce script déclenche la connexion à la base de données
 *
 * PHP version 7
 *
 * @category  Connexion_DB
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */
?>

<?php require_once 'header.php'; ?>
<html>
<link rel="stylesheet" href="coul.css">
<form action="Session.php" method="post" >
    <body>
    <table>
            <h1> Bienvenue!</h1>
        
            <td> <input type="text" name="login" class="inputbasic"> </td>
        
        
            <td>  <input type="password" name="pwd" class="inputbasic "> </td>
        
        
    </table>
    <input type=submit >
</body>
</form>

</html>
