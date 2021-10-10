function initMap() {
    map = document.getElementById('map');
    let tokyoTower = {lat: 35.6585769, lng: 139.7454506};
    opt = {
        zoom: 13, //地図の縮尺を指定
        center: tokyoTower, //センターを東京タワーに指定
    };
    mapObj = new google.maps.Map(map, opt);

    marker = new google.maps.Marker({
        position: tokyoTower,
        map: mapObj,
        title: 'tokyotower',
    });
}