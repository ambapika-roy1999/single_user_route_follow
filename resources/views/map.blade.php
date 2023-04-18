<html>
  <head>
    <title>Place Searches</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>
    <style>
      /* 
 * Always set the map height explicitly to define the size of the div element
 * that contains the map. 
 */
#map {
  height: 100%;
}

/* 
 * Optional: Makes the sample page fill the window. 
 */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}
    </style>
  </head>
  <body>
    <div id="map"></div>

    <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises
      with https://www.npmjs.com/package/@googlemaps/js-api-loader.
      -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&libraries=places&v=weekly"
      defer
    ></script>
   <script>
          function initMap() {
            
  // const myLatLng = { lat:22.578486637422827, lng:88.37824154074133};
  const myLatLng = {lat:22.604575278515313, lng:88.37576882153124 };
  const mylatlong= { lat:22.60402919058299, lng:88.3763864083939};
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 19,
    center: myLatLng
  });

  
  const flightPlanCoordinates = [
    { lat:22.604575278515313, lng:88.37576882153124, tag: 'CatarCraft', color:'orange', type:'store' },
    { lat:22.60453668963043, lng:88.3756932901428, tag: '--', color:'red', type:'--'},
    { lat:22.604407408607194, lng:88.37584530591637, tag: '--', color:'red', type:'--'},
    { lat:22.60427654846609, lng:88.37597280527409, tag: '--', color:'red', type:'--'},
    { lat:22.604248533845464, lng:88.37603634164803, tag: '--', color:'red', type:'--'},
    { lat:22.604356362467875, lng:88.37609715885063, tag: 'Mahabir masala store', color:'green', type:'store'},
    { lat:22.60426604298402, lng:88.37606668737887, tag: '--', color:'red', type:'--'},
    { lat:22.604248533845464, lng:88.37606194585844, tag: '--', color:'red', type:'--'},
    { lat:22.604210013732768 , lng:88.37607901533202, tag: '--', color:'red', type:'--'},
    { lat:22.604180748244023, lng:88.37609715885063, tag: '--', color:'purple', type:'--'},

    { lat:22.604090475576303 , lng:88.37619283772551, tag: '--', color:'red', type:'--'},
    { lat:22.604040502725457 , lng:88.37625147968393, tag: '--', color:'red', type:'--'},
    { lat:22.604016682428572, lng:88.37628035952426, tag: '--', color:'red', type:'--'},
    { lat:22.603989444548446, lng:88.37632461597295, tag: '--', color:'red', type:'--'},
    { lat:22.604041444128413, lng:88.37633936812247, tag: '--', color:'red', type:'--'},
    { lat:22.60402919058299, lng:88.3763864083939, tag: 'SBI ATM', color:'blue', type:'store'},
  ];
  // const flightPlanCoordinates = [
  //   { lat:25.5950627420115, lng:85.14125562061554, tag: 'Dhruv music academy', color:'orange', type:'store' },
  //   { lat:25.595153260811745 , lng:85.14122517190339, tag: '--', color:'red', type:'--'},
  //   { lat:25.5953200593187, lng:85.14121276687176, tag: '--', color:'red', type:'--'},
  //   { lat:25.59554889835519 , lng:85.14116878540284, tag: '--', color:'red', type:'--'},
  //   { lat:25.59565772388029, lng:85.14114510307306, tag: '--', color:'red', type:'--'},
  //   { lat:25.595785873431726, lng:85.14112029301482, tag: '--', color:'red', type:'--'},
  //   { lat:25.59580316344006, lng:85.14110676025578, tag: '--', color:'red', type:'--'},
  //   { lat:25.595824521682196, lng:85.14114961399274, tag: 'Anmol Agro Store', color:'green', type:'store'},
  //   { lat:25.59586316992168, lng:85.1412522374176, tag: '--', color:'red', type:'--'},
  //   { lat:25.59587639168446, lng: 85.14126351471678, tag: '--', color:'red', type:'--'},
  //   { lat:25.595873340508557, lng:85.1412691533664, tag: '--', color:'red', type:'--'},
  //   { lat:25.59588859638724, lng: 85.14132892305213, tag: '--', color:'red', type:'--'},
  //   { lat:25.59590080108878 , lng: 85.14136613813949, tag: '--', color:'red', type:'--'},
  //   { lat:25.595891647562734, lng: 85.14141011960636 , tag: '--', color:'red', type:'--'},
  //   { lat:25.59589063050425, lng:  85.1414180137158 , tag: '--', color:'red', type:'--'},
  //   { lat:25.595854016392785 , lng:85.14141350279613 , tag: '--', color:'red', type:'--'},
  //   { lat:25.595836726391802, lng: 85.14142365236542 , tag: '--', color:'red', type:'--'},
  //   { lat:25.595807231678467, lng: 85.14142703555517 , tag: '--', color:'red', type:'--'},
  //   { lat:25.595810282856046 , lng: 85.141457484263 , tag: 'Magadh institute of computer', color:'green', type:'store'},
  // ];
  const flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    geodesic: true,
    strokeColor: "#FF0000",
    strokeOpacity: 1.0,
    strokeWeight: 5,
  });

  let markers = [];
  flightPath.setMap(map);
  for(let i=0; i<flightPlanCoordinates.length;i++){
    let s;
    if(flightPlanCoordinates[i].type=='store'){
     s = "https://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
    }
    else
    {
      s="https://maps.google.com/mapfiles/ms/icons/red-dot.png"
    }
   
    
if(flightPlanCoordinates[i].tag=='--'){
  const marker= new google.maps.Marker({
      position: flightPlanCoordinates[i],
      map,
      title: flightPlanCoordinates[i].tag
    });
    markers.push(marker);
    hideMarkers();

}
else{

   new google.maps.Marker({
      position: flightPlanCoordinates[i],
      map,
      title: flightPlanCoordinates[i].tag,
      label: {text:flightPlanCoordinates[i].tag==='--'?" ":flightPlanCoordinates[i].tag, color: '#040600  ',  fontWeight: "bold"},
      icon: {
        url:s,
        strokeColor: "red",
        scale: 3
      }
    });
   
}
   
  }
  function hideMarkers() {
  setMapOnAll(null);
}
function setMapOnAll(map) {
  for (let i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}
}
window.initMap = initMap;
    </script>
  </body>
</html>