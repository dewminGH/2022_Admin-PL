<?php
require 'config.php';

$sql="select * from orders";
$res=$con->query($sql);

if($res->num_rows>0)
{

    echo('<table class="ui inverted grey table">
    <thead>
    <tr><th>Order ID</th>
    <th>Description</th>
    </tr></thead><tbody>');

    while($row=$res->fetch_assoc())
    {
        echo('<tr>
              <td>'.$row['order_id'].'</td>');
        echo('<td>'.$row['discription'].'</td>
              </tr>');
    }

    echo('</tbody></table>');
      
}
else
{
    echo('<div class="ui segment tertiary inverted gray">
    <div class="ui active dimmer tertiary inverted gray">
      <div class="ui indeterminate text loader">NO DATA FOUND</div>
    </div>
    <p></p>
  </div>');
}
?>