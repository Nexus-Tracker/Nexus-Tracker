function initMap() {
  // Get the map element
  const mapElement = document.querySelector('.simple-map');

  // Get map data from attributes
  const latLng = mapElement.dataset.latlng.split(',').map(parseFloat);
  const zoom = parseInt(mapElement.dataset.zoom);
  const mapType = mapElement.dataset.type;
  const markersData = JSON.parse(mapElement.dataset.markers);

  // Create a new map instance
  const map = new google.maps.Map(mapElement, {
      center: new google.maps.LatLng(latLng[0], latLng[1]),
      zoom: zoom,
      mapTypeId: mapType
  });

  // Create markers
  markersData.forEach(markerData => {
      const marker = new google.maps.Marker({
          position: new google.maps.LatLng(markerData.locationlatlng.split(',').map(parseFloat)),
          title: markerData.title,
          icon: markerData.custompinimage ? { url: markerData.custompinimage } : undefined
      });
      marker.setMap(map);
  });

  // Apply custom styling (optional)
  const styles = JSON.parse(mapElement.dataset.style);
  map.setOptions({ styles: styles });
}
