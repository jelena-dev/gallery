<?php include("includes/init.php")?>
<?php 
    if(!$session->is_signed_in())
    {
        header("Location: index.php");
      
    }

    if(empty($_GET['id']))
    {
        header("Location:users.php");
    }

    $photo=User::find_by_id($_GET['id']);
    if($photo)
    {
        $photo->delete();
        
        header("Location:users.php");

    }
    else
    {

        header("Location:users.php");
    }

?>