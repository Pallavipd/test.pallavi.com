<table class = "table table-bordered table-striped">
 <thead>
   <tr>
     <th>id</th>
     <th>email</th>
     <th>password</th>
    </tr>
 </thead>

 <tbody>
    <?php
      foreach ($rows as $row) {
        echo '<tr>
          <td><a href = "/example/index/'.$row->id.'">'.$row->id .'</a></td>
          <td>'.$row->email .'</td>
          <td>'.$row->password .'</td>
        </tr>';
      }
    ?>
  </tbody>
</table>