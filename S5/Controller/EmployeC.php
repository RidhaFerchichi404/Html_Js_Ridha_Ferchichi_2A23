<?php

class EmployeC {

    function show($employe) {

        echo '
        <table border="1">
        <tr>
        <td>lastname</td>
        <td>firstname</td>
        <td>password</td>
        <td>phone</td>
        <td>Email</td>
        <td>Date of birth</td>
        
        </tr>
        <tr>
        <td>'. $employe->getLastName() .'</td>
        <td>'. $employe->getFirstName() .'</td>
        <td>'. $employe->getPassword() .'</td>
        <td>'. $employe->getPhone() .'</td>
        <td>'. $employe->getMail() .'</td>
        <td>'. $employe->getDob() .'</td>
        </tr>
        </table>
        ';
    }
}



?>