<?php
  class User {
    public $name;
    public $pass;
    public $permission = false;
    public $id;
  }

  class Admin extends User
  {
    public $permission = true;
  }
  
  $user1 = new User();
  //$user1->id = spl_object_id($user1);
  $user1->name = "Anna";
  $user1->pass = "123456";
  $user1->id = spl_object_id($user1);
  var_dump($user1);

  $admin1 = new Admin();
  $admin1->name = "Boss";
  $admin1->pass = "56789";
  $admin1->id = spl_object_id($admin1);

  var_dump($admin1);
  $users = [$user1, $admin1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Passord</th>
      <th>Permissions</th>
    </thead>
    <tbody>
      <?php 
      foreach ($users as $user): ?>
        <tr>
          <td><?php echo $user->id ?></td>
          <td><?php echo $user->name ?></td>
          <td><?php echo $user->pass ?></td>
          <td>
            <?php 
              if ($user->permission == 1) {
                echo "ADMIN";
              };
            ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  
</body>
</html>
