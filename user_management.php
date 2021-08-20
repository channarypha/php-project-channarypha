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
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['password']; ?></td>
            <td><?php echo $user['position']; ?></td>
         </tr>
         <?php 
            endforeach;
         ?>
</table><br><br><br><br><br><br>