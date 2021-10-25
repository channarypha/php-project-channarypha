<br><br><br><br><table class="table table-striped" id="table">

        <tr>

            <th>Customers</th>
            <th>Products</th>
            <th>Quantity</th>
            <th>Order Date</th>
            <th>Shipped Date</th>

        </tr>

        <?php 

            require_once('inc/database.php');
            $orders = getAllOrders();
            foreach($orders as $order):

        ?>

        <tr>

            <td><?=$order['first_name']?></td>
            <td><?=$order['product_name']?></td>
            <td><?=$order['quantity']?></td>
            <td><?=$order['order_date']?></td>

            <td>
                <?=$order['shipped_date']?>
            </td>

        </tr>

        <?php 

            endforeach;

        ?>

</table><br><br><br><br><br><br>
   