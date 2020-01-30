<?php include("includes/init.php")?>
<?php 
    if(!$session->is_signed_in())
    {
        header("Location: index.php");
      
    }

    if(empty($_GET['id']))
    {
        header("Location:comments.php");
    }

    $comment=Comment::find_by_id($_GET['id']);
    if($comment)
    {
        $comment->delete();
        
        header("Location:comments.php");

    }
    else
    {

        header("Location:comments.php");
    }

?>