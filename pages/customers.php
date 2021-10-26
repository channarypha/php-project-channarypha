<br><br><br><br><table class="table table-striped" id="table">

        <tr>

            <th> First Name </th>
            <th> Last Name </th>
            <th> Phone </th>
            <th> Email </th>
            <th> Address </th>

        </tr>

        <?php 

            require_once ('inc/database.php') ;
            $customers = getAllCustomers() ;
            foreach ($customers as $customer) :

        ?>

        <tr>

            <td> <?php echo $customer['first_name'] ; ?> </td>
            <td> <?php echo $customer['last_name'] ; ?> </td>
            <td> <?php echo $customer['phone'] ; ?> </td>
            <td> <?php echo $customer['email'] ; ?> </td>
            <td> <?php echo $customer['address'] ; ?> </td>

         </tr>

         <?php 
            endforeach;
         ?>

</table><br><br><br><br><br><br>
   