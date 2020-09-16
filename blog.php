<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
html{
    font-size: 10px;
    font-family: 'Montserrat', sans-serif;
    scroll-behavior: smooth;
}
a{
    text-decoration: none;
}
img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}
p{
    color: black;
    text-align: left;
    font-size: 1.4rem;
    line-height: 1.9rem;
}
.brand h1{
    font-size: 3rem;
    text-transform: uppercase;
    color: white;
    letter-spacing: .5rem;
    margin-right: 180px;
}
.brand h1 span{
    color: #60bc0f;
}
/*Header scetion*/
#header{
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: auto;
}
#header .header{
    min-height: 8vh;
    background-color: white;
    transition: .3s ease background-color;
}
#header .nav-bar{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    height: 100%;
    max-width: 1300px;
    padding: 0 10px;
}
#header .nav-list ul{
    list-style: none;
    position: absolute;
    background-color: rgb(31,30,30);
    width: 100vw;
    height: 100vh;
    left: 100%;
    top: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 1;
    overflow-x: hidden;
    transition: .5s ease left;
}
#header .nav-list ul.active{
    left: 0;
}
#header .nav-list ul a{
    font-size: 2.5rem;
    font-weight: 500;
    letter-spacing: .2rem;
    text-decoration: none;
    color: black;
    text-transform: uppercase;
    padding: 20px;
    display: block;
}
#header .nav-list ul a::after{
    content: attr(data-after);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    color: rgba(140,148,155,0.021);
    font-size: 13rem;
    letter-spacing: 50px;
    z-index: -1;
    transition: .3s ease letter-spacing;
}
#header .nav-list ul li:hover a::after{
    transform: translate(-50%, -50%) scale(1);
    letter-spacing: initial;

}
#header .nav-list ul li:hover a{
    color: #60bc0f;
}
#header .hamburger{
    height: 60px;
    width: 60px;
    display: inline-block;
    border: 3px solid white;
    border-radius: 50%;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 100;
    cursor: pointer;
    transform: scale(.7);
    margin-right: 20px;
}
#header .hamburger::after{
    position: absolute;
    content: '';
    height: 100%;
    width: 100%;
    border-radius: 50%;
    border: 3px solid white;
    animation: hambuger_puls .8s ease infinite;

}
#header .hamburger .bar{
    height: 2px;
    width: 30px;
    position: relative;
    background-color: white;
    z-index: -1;
}
#header .hamburger .bar::after,
#header .hamburger .bar::before{
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    background-color: white;
    transition: .3s ease;
    transition-property: top, bottom;
}
#header .hamburger .bar::after{
    top: 8px;
}
#header .hamburger .bar::before{
    bottom: 8px;
}
#header .hamburger.active .bar::before{
    bottom: 0;
}
#header .hamburger.active .bar::after{
    top: 0;
}

/*End Header scetion*/


/*Keyframes*/
@keyframes hambuger_puls{
    0%{
        opacity: 1;
        transform: scale(1);
    }
    100%{
        opacity: 0;
        transform: scale(1.4);
    }
}
@keyframes text_reveal_box{
    50%{
        width: 100%;
        left: 0;
    }
    100%{
        width: 0;
        left: 100%;
    }
}

@keyframes text_reveal{
    100%{
        color: white;
    }
}
@keyframes text_reveal_bigchange{
    100%{
        color: #fdbb00;
        font-weight: 500px;
    }
}

/*END Keyframes*/

/*media for desktop*/

@media only screen and (min-width: 1200px){
    /*header section*/
    #header .hamburger{
        display: none;
    }
    #header .nav-bar ul{
        position: initial;
        display: block;
        height: auto;
        width: fit-content;
        background-color: transparent;
    }
    #header .nav-list ul li{
        display: inline-block;

    }
    #header .nav-list ul li a{
        font-size: 1.6rem;
    }
    #header .nav-bar ul a:after{
        display: none;
    }
    /*End header section*/
}

</style>

</head>

<body>

    <!-- header section-->
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="index.html"><h1><span>GIVELIFE</span></h1></a>
                </div>
                <div class="nav-list">
                    <div class="hamburger"><div class="bar"></div></div>
                    <ul>
                        <li><a href="index.php" data-after="HOME">HOME</a></li>
                        <li><a href="donate.php" data-after="DONATE">DONATE</a></li>
                        <li><a href="#" data-after="CAUSES">CAUSES</a></li>
                        <li><a href="gallery.php" data-after="GALLERY">GALLERY</a></li>
                        <li><a href="howitwork.php" data-after="HOW IT WORKS?">HOW IT WORKS?</a></li>
                        <li><a href="contact.php" data-after="CONTACT">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- end header section-->
    
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8" style="font-size: 1.5rem;">
                
                <!-- Blog Post -->
                <div class="card mb-4" style="margin-top: 100px;">

                    <?php
                            include('admin/database/DBconfig.php');
                            $query = "SELECT * FROM blog_home WHERE id='1' ";
                            $query_run = mysqli_query($connection, $query);
                                if(mysqli_num_rows($query_run) > 0){
                                    foreach ($query_run as $row) {
                    ?>

                    <img class="card-img-top" src="admin/upload/<?php echo $row['image'];?>" alt="Card image cap">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $row['title']; ?></h1>
                        <p class="card-text"><?php echo $row['description']; ?></p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">Posted on <?php echo $row['date']; ?></div>

                    <?php
                        }
                        }
                        else{
                            echo "No Record Found";
                        }
                    ?>
                </div>
                <!-- Blog Post -->
                <div class="card mb-4">

                    <?php
                            include('admin/database/DBconfig.php');
                            $query = "SELECT * FROM blog_home WHERE id='3' ";
                            $query_run = mysqli_query($connection, $query);
                                if(mysqli_num_rows($query_run) > 0){
                                    foreach ($query_run as $row) {
                    ?>


                    <img class="card-img-top" src="admin/upload/<?php echo $row['image'];?>" alt="Card image cap">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $row['title']; ?></h1>
                        <p class="card-text"><?php echo $row['description']; ?></p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">Posted on <?php echo $row['date']; ?></div>

                    <?php
                        }
                        }
                        else{
                            echo "No Record Found";
                        }
                    ?>

                </div>
                <!-- Blog Post -->
                <div class="card mb-4">

                    <?php
                            include('admin/database/DBconfig.php');
                            $query = "SELECT * FROM blog_home WHERE id='4' ";
                            $query_run = mysqli_query($connection, $query);
                                if(mysqli_num_rows($query_run) > 0){
                                    foreach ($query_run as $row) {
                    ?>

                    <img class="card-img-top" src="admin/upload/<?php echo $row['image'];?>" alt="Card image cap">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $row['title']; ?></h1>
                        <p class="card-text"><?php echo $row['description']; ?></p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">Posted on <?php echo $row['date']; ?></div>

                    <?php
                        }
                        }
                        else{
                            echo "No Record Found";
                        }
                    ?>

                </div>
                <!-- Blog Post -->
                <div class="card mb-4">

                    <?php
                            include('admin/database/DBconfig.php');
                            $query = "SELECT * FROM blog_home WHERE id='5' ";
                            $query_run = mysqli_query($connection, $query);
                                if(mysqli_num_rows($query_run) > 0){
                                    foreach ($query_run as $row) {
                    ?>

                    <img class="card-img-top" src="admin/upload/<?php echo $row['image'];?>" alt="Card image cap">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $row['title']; ?></h1>
                        <p class="card-text"><?php echo $row['description']; ?></p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">Posted on <?php echo $row['date']; ?></div>

                    <?php
                        }
                        }
                        else{
                            echo "No Record Found";
                        }
                    ?>

                </div>
                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Older</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Newer &rarr;</a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4" style="margin-top: 85px; font-size: 1.5rem;">
                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header" >Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="#">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#">Tutorials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>