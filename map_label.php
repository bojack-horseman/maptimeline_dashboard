<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" >
    <link rel="stylesheet" href="css/map-label.css" />
</head>
<body>
    <?php include 'header.php' ;?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 my-2">
                <div class="p-2 box-title">
                    <h1 class="text-center">The Beatles</h1>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 my-2">
                <div class="box-highlight p-3 active">
                    <div class="d-flex flex-row">
                        <img src="images/john_lenon.png" class="image_icon"/>
                        <div class="d-flex flex-column border-left mx-1">
                            <p class="mb-0 mx-1 text-info">John Lenon</p>
                            <p class="mb-0 mx-1 text-info">Vocalist</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 my-2">
                <div class="box-highlight p-3">
                    <div class="d-flex flex-row">
                        <img src="images/george_harrison.png" class="image_icon"/>
                        <div class="d-flex flex-column border-left mx-1">
                            <p class="mb-0 mx-1 text-danger">George Harrison</p>
                            <p class="mb-0 mx-1 text-danger">Guitarist</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 my-2">
                <div class="box-highlight p-3">
                    <div class="d-flex flex-row">
                        <img src="images/paul_mcartny.png" class="image_icon"/>
                        <div class="d-flex flex-column border-left mx-1">
                            <p class="mb-0 mx-1 text-success">Paul McCartney</p>
                            <p class="mb-0 mx-1 text-success">Piano</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 my-2">
                <div class="box-highlight p-3">
                    <div class="d-flex flex-row">
                        <img src="images/ringo_starr.png" class="image_icon"/>
                        <div class="d-flex flex-column border-left mx-1">
                            <p class="mb-0 mx-1 text-primary">Ringo Starr</p>
                            <p class="mb-0 mx-1 text-primary">Drummer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-8 my-2">
                <div class="p-2" id="mapid">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2" id="timeline">
                <div class="dataYear">Timeline:</div><div id="dataYear">Year</div>
                <div class="wrap">
                    <div class="timeline">
                        <?php include 'timeline_content.php' ;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ;?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
<script src= "js/map-label.js"></script>
</html>
