<a href = "users/add">Add User</a>
<table>
   <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Password</th>
      <th>Edit</th>
      <th>Delete</th>
   </tr>

   <?php
      foreach ($results as $row):
         echo "<tr><td>".$row->id."</td>";
         echo "<td>".$row->username."</td>";
         echo "<td>".$row->password."</td>";
         echo "<td><a href = '".$this->Url->build
         (["controller" => "Users","action"=>"edit",$row->id])."'>Edit</a></td>";
         
         echo "<td><a href = '".$this->Url->build
         (["controller" => "Users","action"=> "delete",$row->id])."'>Delete</a></td></tr>";
      endforeach;
   ?>
</table>