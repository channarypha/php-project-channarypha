<br><br><br><br><table class="table table-striped" id="table">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Position</th>
        </tr>
        <?php   
            require_once('inc/database.php');
            $users = getAllUsers();
            foreach($users as $user):
        ?>
         <tr>
            <td><?=$user['username']?></td>
            <td><?=$user['password']?></td>
            <td><?=$user['position']?></td>
         </tr>
         <?php 
            endforeach;
         ?>
</table><br><br><br><br><br><br>