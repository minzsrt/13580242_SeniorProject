<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Step 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
	
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <section class="text_right" style="height:60px; padding:20px;">
        <a style="cursor:pointer; color:#aeaeae;" onclick="window.location.href='/index'"><i class="fas fa-times-circle"></i></a>
    </section>


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="order_img_profile">
                    <img src="{{url($user->avatar)}}">
                </div>
                <h3 class="headder_text text_center review_username">จ้างงาน {{$user->username}}</h3>
            </div>
        </div>

        <div class="row margin_bomtom20">
            <div class="col">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
		</div>

		<div class="row">
			<div class="col-12">
				<h2 class="all_more_link">สถานที่</h2>
				<div id="pac-container">
					<input id="pac-input" class="form-control" type="text" placeholder="ชื่อสถานที่">
				</div>
				<div id="map"></div>
				<div id="infowindow-content">
					<img src="" width="16" height="16" id="place-icon">
					<span id="place-name" class="title"></span><br>
					<span id="place-address"></span>
				</div>

			</div>
		</div>
		
        <form action="/{{$username}}/order/step5" method="POST" class="mt-4">
			{{ csrf_field() }}
			
			<input type="hidden" name="place_id">
			<input type="hidden" name="place_name">
			<input type="hidden" name="lat">
			<input type="hidden" name="lng">
			<input type="hidden" name="url">
			<input type="hidden" name="address">

            <div class="row">
                <div class="col">
                    <button type="button" class="btn_color" onclick="window.location.href='/orderstep4'" style="background:#fff; border:1px solid #72AFD3; color:#72AFD3; width:100%; margin:0;">กลับ</button>
                </div>
                <div class="col">
                    <button type="submit" id="submit" class="btn_color" disabled style="background:#72AFD3; width:100%; margin:0;">ต่อไป</button>
                </div>
            </div>

        </form>
    </div>

	<script src="{{ mix('js/app.js') }}"></script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 13.736717,
                    lng: 100.523186
                },
                zoom: 10
            });
            var input = document.getElementById('pac-input');

            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);

            var infowindow = new google.maps.InfoWindow();
            var infowindowContent = document.getElementById('infowindow-content');
            infowindow.setContent(infowindowContent);

            var marker = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29)
			});
			
			$(input).on('change paste keyup', function () {
				$('input[name="place_id"]').val('')
				$('input[name="place_name"]').val('')
				$('input[name="lat"]').val('')
				$('input[name="lng"]').val('')
				$('input[name="address"]').val('')
				$('input[name="url"]').val('')
				$('button[type="submit"]').prop('disabled', true);
			})

            autocomplete.addListener('place_changed', function () {
                infowindow.close();
                marker.setVisible(false);
                var place = autocomplete.getPlace();
                if (!place.geometry) {
					$('button[type="submit"]').prop('disabled', true);
                    return;
				}
				$('input[name="place_id"]').val(place.place_id)
				$('input[name="place_name"]').val(place.name)
				$('input[name="lat"]').val(place.geometry.location.lat())
				$('input[name="lng"]').val(place.geometry.location.lng())
				$('input[name="address"]').val(place.formatted_address)
				$('input[name="url"]').val(place.url)
				$('button[type="submit"]').prop('disabled', false);

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17); // Why 17? Because it looks good.
                }
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }

                infowindowContent.children['place-icon'].src = place.icon;
                infowindowContent.children['place-name'].textContent = place.name;
                infowindowContent.children['place-address'].textContent = address;
                infowindow.open(map, marker);
            });
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBINeYvHLmwpkkSruROByI3sBP0v77-VIw&libraries=places&callback=initMap"
        async defer></script>
</body>

</html>
