<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
    <title>Portofolio App</title>
</head>

<body>
    <div class="container">
        <?php 
            echo $this->include('partials/navbar');
        ?>
        <!-- section content -->
        <?php
            echo $this->renderSection('content');
        ?>
        <!-- end section content -->
        <div class="row mt-4">
            <?php
                echo $this->include('partials/footer');
            ?>
        </div>
    </div>
    <?php
        echo $this->renderSection('scripts');
    ?>
</body>

</html>