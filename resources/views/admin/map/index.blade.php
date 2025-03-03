@extends('admin.layouts.main')

@section('container')
    <div class="card container-fluid">
        <div class="card-body">
            <div id="map" style="height: 500px; margin: 50px;">
                <script>
                    // var map = L.map('map').setView([-0.471852, 117.160556], 13);
                    var curLocation = [0, 0];
                    if (curLocation[0] == 0 && curLocation[1] == 0) {
                        curLocation = [<?= $maps[0]->x ?>, <?= $maps[0]->y ?>]
                    }
                    var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                        osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                        osm = L.tileLayer(osmUrl, {
                            maxZoom: 18,
                            attribution: osmAttrib
                        });
                    var map = L.map('map').setView([<?= $maps[0]->x ?>, <?= $maps[0]->y ?>], 13).addLayer(osm);

                    var data = [
                        <?php foreach ($maps as $key => $value) { ?>
                            {"lokasi":[<?= $value->x ?>, <?= $value->y ?>], "nama":"<?= $value->nama ?>"
                            },
                        <?php } ?>
                    ];

                    //layer contain searched elements
                    var markersLayer = new L.LayerGroup();
                    map.addLayer(markersLayer);

                    //Search dengan menandai titik yang dicari
                    map.addControl( new L.Control.Search({
                        layer: markersLayer,
                        initial: false,
                        zoom: 18,
                        collapsed: true
                    }) );

                    ////////////populate map with markers from sample data
                    for(i in data) {
                        var nama = data[i].nama;  //value searched
                        var lokasi = data[i].lokasi;      //position found
                        var marker = new L.circleMarker(new L.latLng(lokasi), {title: nama} );//see property searched
                        marker.bindPopup('Nama: '+ nama );
                        markersLayer.addLayer(marker);
                    }

                </script>
                @foreach ($maps as $data)
                    <script>
                        var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>]).addTo(map);

                        L.circleMarker([ <?= $data->x ?>, <?= $data->y ?>]).addTo(map)
                        .bindPopup('<?= $data->nama ?>'+ '<br>' + '<?= $data->alamat ?>' + '<br>' + '<?= $data->no_hp ?>' +
                            '<br><a href="/admin/peta/<?= strtolower($data->nama) ?>" class="text-decoration-none text-dark">Selengkapnya</a>')
                        .openPopup();
                    </script>
                @endforeach
            </div>
        </div>
    </div>
@endsection