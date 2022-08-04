<?php
require 'config.php';

$sql="select * from item";
$res=$con->query($sql);

if($res->num_rows>0)
{

    echo('<table class="ui inverted grey table">
    <thead>
    <tr><th>Product ID</th>
    <th>Type</th>
    <th>Quntity</th>
    <th>LKR</th>
    </tr></thead><tbody>');

    while($row=$res->fetch_assoc())
    {
        echo('<tr>
              <td>'.$row['product_id'].'</td>');
        echo('<td>'.$row['product_type'].'</td>');
        echo('<td>'.$row['product_quntity'].'</td>');
        echo('<td>'.$row['product_price'].'</td>
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