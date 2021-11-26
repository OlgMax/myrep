<?php include "head.html"; ?>
Delete ID <?=$_SERVER['REDIRECT_QUERY_STRING'] ?>?
<form action="" method="post">
<div class="col-12">
    <input type="submit" name="delete" class="btn btn-danger" value="Yes">
    <a href="index" class="btn btn-primary"> No</a>
</div>
</form>
