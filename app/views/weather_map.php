<!-- Currently typing in location doesn't change weather -->

<!DOCTYPE html>
<html>
<head>
    <title>Weather in San Antonio and elsewhere</title>
    <meta charset="utf=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style>
        #map-space{
            width:80%;
            height:400px;
        }

        #current-conditions-1 {
            height: 220px;
        }

        h2, h3, h4 {
            font-family: monospace;
            font-kerning: ;
        }

        #userInput  {
            width: 3rem;
            margin-top: 20px;
            text-align: center;
        }

    </style>
</head>
<body>
<div class="container-fluid">

    <!-- Map in this row below -->
    <div class="row">
        <div class="col-md-12" id="map-space">
            
        </div>
    </div>
    <!-- set the number of days to return -->
    <div class="row">
        <div class="col-md-12">
            <form name="inputAndButton">
                <label for="userInput">Change the number of days in your forecast? (16 is max)</label>
                <input id="userInput" name="userInput" type="text" value="3">
                <button id="userButton">Update</button>
            </form>
        </div>
    </div>
    <!-- Space to type in a location -->
    <div class="row">
        <div class="col-md-12">
            <form name="userLocationInput">
                <label for="userLocation">Drag the marker or type in here to chack a new location.</label>
                <input id="userLocation" name="userLocation" type="text">
                <button id="locationButton">Update</button>
        </div>
    </div>


    <!-- Conditions list here -->
    <div class="row" id="current-conditions">
        <!-- <div class="col-md-4" id="current-conditions-1">
        </div>
        <div class="col-md-4" id="current-conditions-2">
        </div>
        <div class="col-md-4" id="current-conditions-3">
        </div> -->
    </div>

</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEvzFqeOuQEyxPrW-drYZ0ORhWdffEs_w"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
(function() {
// "use strict";

// map beginning coordinates
var coordinates = {lat: 29.426791, lng: -98.489602}

// set map options
var mapOptions = {
    zoom: 8,
    center: coordinates,
    mapTypeId: google.maps.MapTypeId.HYBRID
    }


// render the map
var map = new google.maps.Map(document.getElementById("map-space"), mapOptions);

// set map marker
var marker = new google.maps.Marker({
    position: coordinates,
    map: map,
    draggable:true
});

// listen for movement of marker
marker.addListener("dragend", function() {
    coordinates = marker.getPosition();
    map.panTo(marker.getPosition());
    getWeatherInfo();
    console.log("new position: " + coordinates + typeof coordinates);
});

    
// function for event
var updateButtonListener = function(event) {
    event.preventDefault();
    // console.log("It clicked!");
    // howManyDays = document.forms.inputAndButton.userInput;
    getWeatherInfo();
}

// function for geocode
var updateLocation = function(event) {
    event.preventDefault();
    console.log("Button 2 clicked!");
    var geocoder=new google.maps.Geocoder();
    var address=document.getElementById("userLocation").value;
    geocoder.geocode({'address':address}, function(results, status) {
        if(status==google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            marker.setPosition(results[0].geometry.location);
            coordinates = marker.getPosition();
            getWeatherInfo();
        } else {
            alert('Unable to find location. Status: ' + status);
        }
    });
}

// listen for # of days Update button click
$("#userButton").click(updateButtonListener);

// listen for location Update button click
$("#locationButton").click(updateLocation);


// get Weather API
// make this a function that runs on load and at dragend

function getWeatherInfo() {
    // use jQuery to find the input userInput
    // look at its .val()
    // use that to control how many days to request

    howManyDays = $("#userInput").val();
    // console.log("howManyDays " + howManyDays);

    $("#current-conditions").html("");

    if (howManyDays > 16) {
        howManyDays = 16;
    }

    $.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
        APPID: "1a2500a8754b15cdaa2e73a0b2b3b26e",
        // q: "San Antonio, TX",
        lat: coordinates.lat,
        lon: coordinates.lng,
        units: "imperial",
        cnt: howManyDays
    }).done(function(data) {
        console.log(data);
        var city = "<div class='col-md-12'><h2>" + data.city.name + "</h2></div>";

        $("#current-conditions").append(city);
            
        // create variables for each of three times during the day
        for(var i=0; i < data.list.length; i++) {
            var morn = data.list[i].temp.morn;
            var max = data.list[i].temp.max;
            var night = data.list[i].temp.night;
            var weatherIcon = data.list[i].weather[0].icon;
            var weatherCode = data.list[i].weather[0].id;
            var weatherDesc = data.list[i].weather[0].main;
            // console.log(weatherIcon);
            // console.log(weatherCode);
            // console.log(weatherDesc);
            // figure out the days in the box/infowindow, whatever
            var d = new Date();
            var daysArray = new Array(7);
            daysArray[0]= "Sunday";
            daysArray[1]= "Monday";
            daysArray[2]= "Tuesday";
            daysArray[3]= "Wednesday";
            daysArray[4]= "Thursday";
            daysArray[5]= "Friday";
            daysArray[6]= "Saturday";
            if ([d.getDay()+i] < 7) {
                var weekday = daysArray[d.getDay()+i];
            } else if ([d.getDay()+i] >= 7 && [d.getDay()+i] < 14) {
                var weekday = daysArray[d.getDay()+(i-7)];
            } else {
                var weekday = daysArray[d.getDay()+(i-14)];
            };
            
            // console.log(daysArray[d.getDay()+i]);

            // box = string of html including all of the data
            var box;
            box = "<div class='col-xs-6 col-sm-4 col-md-3 col-lg-2' id='current-conditions-1'>" + 
                "<h3>" + weekday +  "</h3>" + 
                "<h4>Conditions: " + weatherDesc + "</h4>" + 
                "<img src='http://openweathermap.org/img/w/" +  weatherIcon + ".png' alt='weatherDesc'>" + 
                
                "<ul class='list-unstyled'>" + 
                    "<li>Morning: " +  morn +  "</li>" +
                    "<li>High: " +  max +  "</li>" + 
                    "<li>Night: " +  night +  "</li>" + 
                "</ul>" + 
                "</div>"; 
            

                $("#current-conditions").append(box);

        }; //end of for function

    }); //end of get
}; // end of getWeatherInfo function

getWeatherInfo();




})();
</script>
</body>
</html>