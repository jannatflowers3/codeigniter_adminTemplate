<?php
if ($employes):?>
<table>
    <tr>
        <th>Emp code</th>
        <th>Name</th>
        <th>Email</th>
    </tr>


<?php foreach($employes as $employe):?>
<tr><td><?= $employe['employeeNumber']?></td>
<td><?= $employe['firstName']?></td>
<td><?= $employe['email']?></td>

</tr>


<?php endforeach ?>
</table>
<?php endif;
// print_r($employes);
?>