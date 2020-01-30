<?php include("includes/header.php"); ?>
<?php
if(!$session->is_signed_in())
{
    header("Location: index.php");
  
}
$page=!empty($_GET['page']) ? $_GET['page'] : 1;
$items_per_page=4;
$items_total_count=Photo::count_all();

$paginate= new Paginate($page, $items_per_page, $items_total_count);

$sql="SELECT * FROM photos ";
$sql.="LIMIT {$items_per_page} ";
$sql.="OFFSET {$paginate->offset()}";

$photos= Photo::find_by_query($sql);


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
                            Photos
                            
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">

                <ul class="pagination">

                <?php 
                    if($paginate->page_total()>1)
                    {
                        if($paginate->has_next())
                        {
                            echo "<li class='next'><a href='photos.php?page={$paginate->next()}'>Next</a></li>";
                        }


               

                        for($i=1; $i<=$paginate->page_total(); $i++)
                        {
                            if($i==$paginate->current_page)
                            {
                                echo "<li class='active' ><a href='photos.php?page={$i}'>{$i}</a></li>";
                                
                            }
                            else
                            {
                                echo "<li><a href='photos.php?page={$i}'>{$i}</a></li>";
                                
                            }
                            
                            
                        }

                        if($paginate->has_previous())
                        {
                            echo " <li class='previous'><a href='photos.php?page={$paginate->previous()}'>Previous</a></li>";
                        }
                    }
                ?>
                    
                   
                </ul>
            
            
            </div>
            
    <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>ID</th>
                                    <th>File Name</th>
                                    <th>Title</th>
                                    <th>Size</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($photos as $photo) : ?>
                                <tr>
                                    <td><img class="admin-photo-thumbnail"src="<?php echo $photo->picture_path(); ?>"alt="">
                                        <div class="actions_link">
                                            <a href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a>
                                            <a href="edit_photo.php?id=<?php echo $photo->id; ?>">Edit</a>
                                            <a href="../photo2.php?id=<?php echo $photo->id; ?>">View</a>
                                        
                                        </div>
                                    
                                    </td>
                                    <td><?php echo $photo->id; ?></td>
                                    <td><?php echo $photo->filename; ?></td>
                                    <td><?php echo $photo->title; ?></td>
                                    <td><?php echo $photo->size; ?></td>
                                    <td>
                                    <a href="photo_coment.php?id=<?php echo $photo->id; ?>">
                                   
                                        <?php
                                            $comments=Comment::find_the_comments($photo->id);
                                            echo count($comments);
                                        
                                        ?>
                                    </a></td>
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