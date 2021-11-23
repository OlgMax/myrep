<form action="" method="post">
        <input type="text" class="form-control" name="id" hidden value="<?=$data['id'] ?>">

    <div class="col-sm-3">
        <label class="form-label">Subject</label>
        <input type="text" class="form-control" name="subject" value="<?=$data['subject'] ?>">
    </div>
    <div class="col-sm-3">
        <label class="form-label">Details</label>
        <input type="text" class="form-control" name="details" value="<?=$data['detail'] ?>">
    </div>
    <div class="col-sm-3">
        <label class="form-label">Author</label>
        <input type="text" class="form-control" name="author" value="<?=$data['author_id'] ?>">
    </div>

    <div class="col-12">
        <input type="submit" name="update" class="btn btn-primary" value="Update">
    </div>
    <br>
</form>
<table>
<?php foreach($data as $key => $row)  : ?>
    <tr>
        <?php foreach($row as $key => $value)  : ?>
            <td><?=$value ?></td>
        <?php endforeach; ?>
        <td><a href="update?<?=$row['id'] ?>"> Update</a></td>
        <td><a href="delete?<?=$row['id'] ?>"> delete</a></td>
    </tr>
<?php endforeach; ?>
</table>
