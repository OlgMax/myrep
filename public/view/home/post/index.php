<?php include "head.html"; ?>
<body>
<a class="btn btn-warning" href="create"> Create</a>
<table class="table table-striped">
<?php foreach($data as $key => $row)  : ?>
<tr>
    <?php foreach($row as $key => $value)  : ?>
    <td><?=$value ?></td>
    <?php endforeach; ?>
    <td><a class="btn btn-primary" href="update?<?=$row['id'] ?>"> Update</a></td>
    <td><a class="btn btn-danger" href="delete?<?=$row['id'] ?>"> Delete</a></td>
    </tr>
<?php endforeach; ?>
</table>
</body>
