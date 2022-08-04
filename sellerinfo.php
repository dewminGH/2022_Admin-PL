<?php
require 'config.php';

$sql="select * from seller";
$res=$con->query($sql);

if($res->num_rows>0)
{

    echo('<table class="ui inverted grey table">
    <thead>
    <tr><th>Company Name</th>
    <th>Email</th>
    <th>Contact Number</th>
    <th>Pass</th>
    <th>District</th>
    </tr></thead><tbody>');

    while($row=$res->fetch_assoc())
    {
        echo('<tr>
              <td>'.$row['Company_Name'].'</td>');
        echo('<td>'.$row['Email'].'</td>');
        echo('<td>'.$row['Contact_Number'].'</td>');
        echo('<td>'.$row['Pass'].'</td>');
        echo('<td>'.$row['District'].'</td>
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