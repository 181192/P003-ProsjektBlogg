<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/img/rocket.png">
    <title>Kalliainen Blog</title>

     <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
  	<!-- Navigation -->
  	<?php include('headermenu.php');?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/forside/DSC_0264.JPG')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Kalliainen</h1>
                        <hr class="small">
                        <span class="subheading">Mine Prosjekter</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
 <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
		<?php
			try {

				$stmt = $db->query('SELECT postID, postTitle, postPicture, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
				while($row = $stmt->fetch()){
                    echo '<div class="row">';
                        echo '<div class="col-sm-6">';
                            echo '<img src = "'.$row['postPicture'].'" class="img-responsive" alt="Artikkel Bilde">';
                            echo '</div>';
                    echo '</div>';
                    echo '<div>';
                    echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
					echo '<p><small><i>Postet '.date('j.m.Y H:i', strtotime($row['postDate'])).'</i></small></p>';
					echo '<p>'.$row['postDesc'].'</p>';				
					echo '<p><a href="viewpost.php?id='.$row['postID'].'">Les mer</a></p>';	
					echo '</div>';
				}

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>
				</div>
			</div>
		</div>
	</div>
 <!-- Footer -->
 <?php include('footer.php');?>  

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>
</html>