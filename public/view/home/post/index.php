<head>
    <meta charset="UTF-8">
    <title>Создайте HTML-форму</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {margin: auto 20px;}
        table, tr, td, th {border: 1px solid #ccc; border-collapse: collapse;}
        th {width: 50%;}
    </style>
</head>
<body>
<form action="" method="post">
    <div class="col-sm-3">
        <label class="form-label">ID</label>
        <input type="text" class="form-control" name="id" value="<?=$data['id'] ?>">
    </div>
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
        <input type="submit" name="send" class="btn btn-primary">
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
    <td><a href="delete?<?=$row['id'] ?>"> Delete</a></td>
    </tr>
<?php endforeach; ?>
</table>
</body>