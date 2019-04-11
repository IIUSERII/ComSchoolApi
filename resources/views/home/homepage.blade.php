<?php

$dataPoints = array(
    array("label"=> "Etudiants", "y"=> 590),
    array("label"=> "Transports", "y"=> 261),
    array("label"=> "Chauffeurs", "y"=> 158),
    array("label"=> "Parents", "y"=> 72),
);

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>ComSchool - Admin Panel</title>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                data: [{
                    type: "pie",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>

</head>

<body>

    <div class="wrapper">

        <div class="split sidebar" ng-app="sidebar">

            <div class="logo"></div>

            <div class="menu">

                <ul class="menu_ul">

                    <a href=""><li><i style="color:#ff9ff3;" class="fas fa-tachometer-alt"></i>Dashboard</li></a>
                    <a href=""><li><i style="color:#feca57;" class="fas fa-cogs"></i>Parametres</li></a>
                    <a href=""><li><i style="color:#2e86de;" class="fas fa-user-tie"></i>Parents</li></a>
                    <a href=""><li><i style="color:#00d2d3;" class="fas fa-user-graduate"></i>Etudiants</li></a>
                    <a href=""><li><i style="color:#10ac84;" class="fas fa-user-alt"></i>Chauffeurs</li></a>
                    <a href=""><li><i style="color:#48dbfb;" class="fas fa-bus"></i>Transports</li></a>
                    <a href=""><li><i style="color:#ee5253;" class="fas fa-sign-out-alt"></i>Deconnexion</li></a>

                </ul>

            </div>

        </div>

        <div class="split content" ng-app="content">

            <div class="header">

                <div class="center">

                    <div class="data">

                        <form>

                            <input type="text" name="query" placeholder="Recherchez vos etudiants, transports, parents, chauffeurs ....">
                            <select>
                                <option>Tous</option>
                                <option>Etudiants</option>
                                <option>Parents</option>
                                <option>Transports</option>
                                <option>Chauffeurs</option>
                            </select>

                        </form>

                    </div>

                </div>

            </div>

            <div class="main_content">

                <div class="title_div">

                    <h1 class="title">Dashboard :</h1>

                </div>

                <div class="div_40">

                    <div id="chartContainer" style="height: 250px;float:left; width: 100%;"></div>

                </div>

                <div class="div_right">

                    <div class="center">
                        <h3>Transport en course</h3>
                        <h3 class="nbr">0</h3>
                    </div>

                </div>

                <div style="height:300px;" class="full_div">
                    <div id="map"></div>
                </div>

                <div class="full_div">

                    <div class="table">

                        <table>

                            <tr>
                                <th>Nom Transport</th>
                                <th>Matricule</th>
                                <th>Chauffeur</th>
                                <th>Nombre d'etudiants</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Hassan / Agdal</td>
                                <td>12398 - b - 1</td>
                                <td>Youssef Laarossi</td>
                                <td>30</td>
                                <td class="modifier"><i class="fas fa-pen"></i></td>
                                <td class="supprimer"><i class="fas fa-trash"></i></td>
                            </tr>

                            <tr>
                                <td>Hassan / Agdal</td>
                                <td>12398 - b - 1</td>
                                <td>Youssef Laarossi</td>
                                <td>30</td>
                                <td class="modifier"><i class="fas fa-pen"></i></td>
                                <td class="supprimer"><i class="fas fa-trash"></i></td>
                            </tr>
                            <tr>
                                <td>Hassan / Agdal</td>
                                <td>12398 - b - 1</td>
                                <td>Youssef Laarossi</td>
                                <td>30</td>
                                <td class="modifier"><i class="fas fa-pen"></i></td>
                                <td class="supprimer"><i class="fas fa-trash"></i></td>
                            </tr>

                        </table>

                    </div>

                </div>

                <div class="full_div">

                    <div class="table">

                        <table>

                            <tr>
                                <th>Nom Chauffeur</th>
                                <th>Numéro Telephone</th>
                                <th>Transport Associé</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Omar Nassik</td>
                                <td>0661105450</td>
                                <td>Hassan / Agdal</td>
                                <td class="modifier"><i class="fas fa-pen"></i></td>
                                <td class="supprimer"><i class="fas fa-trash"></i></td>
                            </tr>

                            <tr>
                                <td>Omar Nassik</td>
                                <td>0661105450</td>
                                <td>Hassan / Agdal</td>
                                <td class="modifier"><i class="fas fa-pen"></i></td>
                                <td class="supprimer"><i class="fas fa-trash"></i></td>
                            </tr>

                            <tr>
                                <td>Omar Nassik</td>
                                <td>0661105450</td>
                                <td>Hassan / Agdal</td>
                                <td class="modifier"><i class="fas fa-pen"></i></td>
                                <td class="supprimer"><i class="fas fa-trash"></i></td>
                            </tr>

                            <tr>
                                <td>Omar Nassik</td>
                                <td>0661105450</td>
                                <td>Hassan / Agdal</td>
                                <td class="modifier"><i class="fas fa-pen"></i></td>
                                <td class="supprimer"><i class="fas fa-trash"></i></td>
                            </tr>

                            <tr>
                                <td>Omar Nassik</td>
                                <td>0661105450</td>
                                <td>Hassan / Agdal</td>
                                <td class="modifier"><i class="fas fa-pen"></i></td>
                                <td class="supprimer"><i class="fas fa-trash"></i></td>
                            </tr>


                        </table>

                    </div>

                </div>

                <div class="full_div">

                    <div class="table">

                        <table>

                            <tr>
                                <th>Nom Transport</th>
                                <th>Matricule</th>
                                <th>Chauffeur</th>
                                <th>Nombre d'etudiants</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Hassan / Agdal</td>
                                <td>12398 - b - 1</td>
                                <td>Youssef Laarossi</td>
                                <td>30</td>
                                <td class="modifier"><i class="fas fa-pen"></i></td>
                                <td class="supprimer"><i class="fas fa-trash"></i></td>
                            </tr>

                            <tr>
                                <td>Hassan / Agdal</td>
                                <td>12398 - b - 1</td>
                                <td>Youssef Laarossi</td>
                                <td>30</td>
                                <td class="modifier"><i class="fas fa-pen"></i></td>
                                <td class="supprimer"><i class="fas fa-trash"></i></td>
                            </tr>
                            <tr>
                                <td>Hassan / Agdal</td>
                                <td>12398 - b - 1</td>
                                <td>Youssef Laarossi</td>
                                <td>30</td>
                                <td class="modifier"><i class="fas fa-pen"></i></td>
                                <td class="supprimer"><i class="fas fa-trash"></i></td>
                            </tr>

                        </table>

                    </div>

                </div>


            </div>



        </div>

    </div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
    // The following example creates complex markers to indicate beaches near
    // Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
    // to the base of the flagpole.

    function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: {lat: -33.9, lng: 151.2}
    });

    setMarkers(map);
    }

    // Data for the markers consisting of a name, a LatLng and a zIndex for the
    // order in which these markers should display on top of each other.
    var beaches = [
    ['Bondi Beach', -33.890542, 151.274856, 4],
    ['Coogee Beach', -33.923036, 151.259052, 5],
    ['Cronulla Beach', -34.028249, 151.157507, 3],
    ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
    ['Maroubra Beach', -33.950198, 151.259302, 1]
    ];

    function setMarkers(map) {
    // Adds markers to the map.

    // Marker sizes are expressed as a Size of X,Y where the origin of the image
    // (0,0) is located in the top left of the image.

    // Origins, anchor positions and coordinates of the marker increase in the X
    // direction to the right and in the Y direction down.
    var image = {
    url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(20, 32),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(0, 32)
    };
    // Shapes define the clickable region of the icon. The type defines an HTML
    // <area> element 'poly' which traces out a polygon as a series of X,Y points.
    // The final coordinate closes the poly by connecting to the first coordinate.
    var shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: 'poly'
    };
    for (var i = 0; i < beaches.length; i++) {
    var beach = beaches[i];
    var marker = new google.maps.Marker({
    position: {lat: beach[1], lng: beach[2]},
    map: map,
    icon: image,
    shape: shape,
    title: beach[0],
    zIndex: beach[3]
    });
    }
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6M0CYsQrfWDKIvRKXLNc-mRhtJ9YQZLs&callback=initMap">
    </script>
</body>

</html>
