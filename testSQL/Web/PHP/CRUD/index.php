<?php include('server.php'); ?>


<!DOCTYPE html>
<html>
<head>
     <title>Page Title</title>
     <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <?php if(isset($_SESSION['msg'])): ?>
    <div class="msg">
        <?php
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
    </div>
   <?php endif ?>
    <table>
        <thread>
            <tr>
                <th>Path</th>
                <th>Title</th>
                <th>Location</th>
                <th colspan="2"> Action </th>
            </tr>
        </thread>
        <tbody>
            <?php while($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['photoPath'] ?> </td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['location'] ?></td>
            <td>
                <a href="#">Edit</a>
            </td>
            <td>
                <a href="#">Delete</a>
            </td>
        </tr>
            <?php } ?>
        </tbody>
    </table>

<form method="POST" action="server.php">
    <div class="input-group">
        <label>URL</label>
        <input type="text" name="photoPath">
    </div>
    <div class="input-group">
        <label>Title</label>
        <input type="text" name="title">
    </div>
    <div class="input-group">
        <label>Location</label>
        <input type="text" name="location">
    </div>
    <div class="input-group">
        <button type="submit" name="save" class="btn">Save</button>
    </div>
</form>

</body>
</html>