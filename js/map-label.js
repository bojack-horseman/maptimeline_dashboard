var map = L.map('mapid').setView([53.405029, -362.989655], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
//initial setting up of leaflet map
var popup = L.popup();
var circle = L.circle([40.78938, -433.959789], {
    color: 'green',
    fillColor: '#009688',
    fillOpacity: 0.5,
    radius: 300
}).addTo(map).bindPopup('<h2 class="font-weight-bold">The Ed Sullivan Show</h2><p>1964, Manhattan</p><img class="" style="height: 50px; width: 100px;" src="images/edsullivan-show.jpg" alt="">');
//interactive image visible on zoom with image
var circles = L.circle([53.405029, -362.989655], {
    color: 'blue',
    fillColor: '#23A8F3',
    fillOpacity: 0.5,
    radius: 400
}).addTo(map)
//circle on map to highlight birthplace of individual Beatles
//defining custom icon reusable entity
var LeafIcon = L.Icon.extend({
    options: {
        iconSize:     [38, 95],
        shadowSize:   [50, 64],
        iconAnchor:   [22, 94],
        shadowAnchor: [4, 62],
        popupAnchor:  [-3, -76]
    }
});
var johnIcon = new LeafIcon({iconUrl: 'images/john_lenon.png'}),
georgeIcon = new LeafIcon({iconUrl: 'images/george_harrison.png'}),
ringoIcon = new LeafIcon({iconUrl: 'images/ringo_starr.png'});
paulIcon = new LeafIcon({iconUrl: 'images/paul_mcartny.png'});
mapPin = new LeafIcon({iconUrl: 'images/map_pin.png'});
L.marker([53.405477, -362.984054], {icon: johnIcon}).addTo(map).bindPopup("I am john lenon.");
L.marker([53.405822, -362.98708], {icon: georgeIcon}).addTo(map).bindPopup("I am george harrison.");
L.marker([53.405029, -362.989655], {icon: ringoIcon}).addTo(map).bindPopup("I am ringo_starr.");
L.marker([53.404351, -362.992744], {icon: paulIcon}).addTo(map).bindPopup("I am paul mcartny.");
//assigning url and mapping the same on leaflet map.
$(function(){
    $('#timeline').scroll(function(){
        $('.year').each(function(){
            var year = $(this).find('h2').first().text(),
            title = $(this). find('.data').text(),
            lat = $(this).find('.latitud').text(),
            lon = $(this).find('.longitud').text();
            if($(this).offset().top < 300){
                $(this).find('.date').addClass('activeYear');
                $('#dataYear').html(year);
                if (!isNaN(lat)){
                    L.marker([lat, lon], {icon: mapPin}).addTo(map).bindPopup(title);
                }
            }else{
                $(this).find('.date').removeClass('activeYear');
            }
        });
    });
});
//function to change year on scroll, also pin points icon on map as per scroll data read from JSON file.
$(document).ready(function(){
    $('.box-highlight').click(function(){
        $('.box-highlight').removeClass('active');
        $(this).addClass('active');
    });
    //interactive UI over individual Beatles card
    $('.profile').click(function(){
        $(".log-out").toggleClass("profile_option");
    });
    //logout button options
});
