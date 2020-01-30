<?php include("includes/header.php"); ?>
<?php
if(!$session->is_signed_in())
{
    header("Location: index.php");
  
}
if(empty($_GET['id']))
{
    header("Location: photos.php");
}
$comments= Comment::find_the_comments($_GET['id']);


?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            

            <?php include("includes/top_nav.php"); ?>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            

            <?php include("includes/side_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>



        <div id="page-wrapper">

            <div class="container-fluid">


           <!-- Page Heading -->
  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Comments
                        </h1>
                        <!--<a href="add_user.php" class="btn btn-primary">ADD USER</a>-->
                        
                    </div>
                </div>
                <!-- /.row -->
    <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Photo_id</th>
                                    <th>Author</th>
                                    <th>Body</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($comments as $comment) : ?>
                                <tr>
                                <td><?php echo $comment->id; ?></td>
                                <td><?php echo $comment->photo_id; ?></td>
                                <td><?php echo $comment->author; ?></td>   
                                <td><?php echo $comment->body; ?>
                                    <div class="action_links">
                                            <a href="delete_photo_comment.php?id=<?php echo $comment->id; ?>">Delete</a>   
                                    </div>
                                    </td>
                                    
                                </tr>
                            </tbody>
                            <?php endforeach; ?>

                        </table><!--End of Table-->
                    
                    
                    </div>
    </div>
    <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

              

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>