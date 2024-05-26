document.getElementById('uploadForm').addEventListener('submit', async function(event) {
    event.preventDefault();

    const formData = new FormData();
    formData.append('image', document.getElementById('imageUpload').files[0]);

    try {
        const response = await fetch('upload.php', {
            method: 'POST',
            body: formData
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const result = await response.json();

        if (result.error) {
            document.getElementById('result').textContent = 'Error: ' + result.error;
        } else {
            document.getElementById('result').textContent = `Species identified: ${result.species}, Location: ${result.location}`;
            if (result.location) {
                showMap(result.location);
            }
        }
    } catch (error) {
        console.error('There has been a problem with your fetch operation:', error);
        document.getElementById('result').textContent = 'Error: ' + error.message;
    }
});

function showMap(location) {
    const [lat, lon] = location.split(',').map(coord => parseFloat(coord.trim()));

    const map = new ol.Map({
        target: 'map',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([lon, lat]),
            zoom: 8
        })
    });

    const marker = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([lon, lat]))
    });

    const vectorSource = new ol.source.Vector({
        features: [marker]
    });

    const markerVectorLayer = new ol.layer.Vector({
        source: vectorSource
    });

    map.addLayer(markerVectorLayer);
}
