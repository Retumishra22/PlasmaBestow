var mymap = L.map('mapid').setView([18.9894, 73.1175], 16);

var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
         
         // Adding layer to the map
         mymap.addLayer(layer);

var marker = L.marker([18.9894, 73.1175]).addTo(mymap);


marker.bindPopup("<b>Plasma Bestow</b><br>Pillai's colloege of Engineering").openPopup();

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);