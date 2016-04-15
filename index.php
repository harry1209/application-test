<?php
  $people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
   );
?>
<!doctype html>
<html>
   <table cellpadding='5'>
     <tr>
       <th>id</th>
       <th>first_name</th>
       <th>last_name</th>
       <th>email</th>
       <th></th>       
     </tr>
     <? foreach ($people as $row) : ?>
     <tr>
       <td align="center"><? echo $row["id"]; ?></td>
       <td align="center"><? echo $row["first_name"]; ?></td>
       <td align="center"><? echo $row["last_name"]; ?></td>
       <td align="center"><? echo $row["email"]; ?></td>
       <td align="center"><? echo "<button onclick='alert(\"". $row['first_name'] . " " . $row['last_name'] . "    " . $row['email'] ."\")'>Click Me</button>"; ?></td>
     </tr>
     <? endforeach; ?>
   </table>
</html>
