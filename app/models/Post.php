<?php
namespace Models;
use Models\Common\Model;
class Post extends Model
{
    public function getPosts(array $filters = [])
    {
        $select = $this->select();
        $select->setTableNames('posts');
        if(isset($_POST['send'])){
            $select->setWhereCondition('id='.$_POST['id']);
        }
        return $select->execute();
    }

    public function createPost()
    {
        $insert = $this->insert();
        $insert->setTableNames('posts');
        $insert->setFieldNames('subject, detail, author_id');
        $insert->setValues("'$_POST[subject]', '$_POST[details]', '$_POST[author]'");
        return $insert->execute();
    }

    public function deletePost()
    {
        $delete = $this->delete();
        $delete->setTableNames('posts');
        if (!empty($_SERVER['REDIRECT_QUERY_STRING'])) {
            if(isset($_POST['delete'])){
                $delete->setWhereCondition('id='.$_SERVER['REDIRECT_QUERY_STRING']);
            }
        }
        return $delete->execute();
    }

    public function updatePost(array $filters = [])
    {
        $update = $this->update();
        $update->setTableNames('posts');
        if(isset($_POST['update']))
        {
            $update->setWhereCondition('id='.$_SERVER['REDIRECT_QUERY_STRING']);
            if (!empty($_POST['subject'])) {
                $update->setFieldNames('subject');
                $update->setValues("$_POST[subject]");
            }
            if (!empty($_POST['details'])) {
                $update->setFieldNames('detail');
                $update->setValues("$_POST[details]");
            }
            if (!empty($_POST['author'])) {
                $update->setFieldNames('author_id');
                $update->setValues("$_POST[author]");
            }
            $update->setWhereCondition('id='.$_SERVER['REDIRECT_QUERY_STRING']);
        }
        return $update->execute();
    }
}


