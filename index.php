<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emna Fetni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="jquery.js"></script>
    <script src="script.js"></script>

</head>
<body>
    <div class="logo-container">
        <img class="logo" src="logo-01-01.png"></img>
    </div>
    <div class="content-container">
        <div class="description-container">
            <h2>Hello, it's me</h2>
            <h1>Emna Fetni</h1>
            <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum repudiandae magnam ea voluptate labore itaque minima ipsa nemo dolorem rem error, sit hic possimus enim. Rerum iusto nemo qui repudiandae?</p>
        </div>
        <div class="image-container">
            <img class="her-picture" src="her.jpg">
        </div>
    </div>  
    <div class="scroll-button">
        <a href="#myworkssection"><button type="button" class="btn btn-outline-primary">Scroll to see more</button>   </a>
    </div>    
    <section class="my-works-section" id="myworkssection">
        <h1>My Works!</h1>
        <div class="works">
            <?php
                include("myworks.inc.php"); 
            ?>
        </div>
    </section>  
</body>
</html>