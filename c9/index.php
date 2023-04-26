<?php
    require_once 'web_service_nbrm.php';
?>

<div>
    <table>
        <thead>
            <tr>
                <th>NazivMak</th>
                <th>Drzava</th>
                <th>Sreden</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($parsed_string->KursZbir as $record){
                echo "
                    <tr>
                        <td>$record->NazivMak<td>
                        <td>$record->Drzava<td>
                        <td>$record->Sreden<td>
                    </tr>
                ";
            }
            ?>
        </tbody>
    </table>
</div>