<?php
include("indexheader.php");
?>
	<!-- ... end Header Standard Landing  -->
	<div class="header-spacer--standard"></div>

	<div class="stunning-header-content">
		<h1 class="stunning-header-title">Contacts</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="#">Home</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>Contacts</span>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>
</div>

<!-- End Stunning header -->


<section class="mt-0">
	<div class="section">

		<!----------------------------------------------- Map --------------------------------------------------------->

		<div id="map" style="height: 480px"></div>

		<!-- JS library for Map Leaflet -->
		<script src="js/libs/leaflet.min.js"></script>
		<script src="js/libs/MarkerClusterGroup.min.js"></script>
		<!-- ...end JS library for Map Leaflet -->

		<!-- JS-init for Map -->
		<script>

			/* -----------------------
  				* Create the map
  				* https://leafletjs.com/
  			* --------------------- */

			maps = {
				maps: {
					mapUSA: {
						config: {
							id: 'map',
							map: {
								center: new L.LatLng(38.897663, -77.036575),
								zoom: 12,
								maxZoom: 18,
								layers: new L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
									maxZoom: 16,
									attribution: ''
								})
							},
							icon: {
								iconSize  : [36, 54],
								iconAnchor: [22, 94],
								className : 'icon-map'
							}
						},
						markers: [
							{
								coords: [38.897663, -77.036575],
								icon: 'map-marker.png'
							}
						]
					}
				},
				init: function () {
					var _this = this;

					for (var key in this.maps) {
						var data = this.maps[key];

						if (!data.config || !data.markers) {
							continue;
						}

						if (!document.getElementById(data.config.id)) {
							continue;
						}

						var map = new L.map(data.config.id, data.config.map);
						var cluster = L.markerClusterGroup({
							iconCreateFunction: function (cluster) {
								var childCount = cluster.getChildCount();
								var config = data.config.cluster;
								return new L.DivIcon({
									html: '<div><span>' + childCount + '</span></div>',
									className: 'marker-cluster marker-cluster-' + key,
									iconSize: new L.Point(config.iconSize[0], config.iconSize[1])
								});
							}
						});
						data.markers.forEach(function (item) {
							data.config.icon['iconUrl'] = './img/' + item.icon;
							var icon = L.icon(data.config.icon);

							var marker = L.marker(item.coords, {icon: icon});
							cluster.addLayer(marker);
						});

						map.addLayer(cluster);
						this.disableScroll(jQuery("#" + data.config.id), map);
					}
				},
				disableScroll: function ($map, map) {
					map.scrollWheelZoom.disable();

					$map.bind('mousewheel DOMMouseScroll', function (event) {
						event.stopPropagation();
						if (event.ctrlKey == true) {
							event.preventDefault();
							map.scrollWheelZoom.enable();
							setTimeout(function () {
								map.scrollWheelZoom.disable();
							}, 1000);
						} else {
							map.scrollWheelZoom.disable();
						}
					});
				}
			};

			document.addEventListener("DOMContentLoaded", function() {
				maps.init();
			});
		</script>

		<!-- ... end JS-init for Map -->

		<!------------------------------------------- ... end Map ----------------------------------------------------->

	</div>
</section>


<section class="medium-padding120">
	<div class="container">
		<div class="row">
			<div class="col col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

				
				<!-- Contact Item -->
				
				<div class="contact-item-wrap">
					<h3 class="contact-title">Olympus HQ</h3>
					<div class="contact-item">
						<a href="#">254 W58th St, New York NY 10001, USA</a>
					</div>
					<div class="contact-item">
						<h6 class="sub-title">General Inquiries:</h6>
						<a href="mailto:">hqinquiries@olympus.com</a>
					</div>
				</div>
				
				<!-- ... end Contact Item -->
			</div>

			<div class="col col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

				
				<!-- Contact Item -->
				
				<div class="contact-item-wrap">
					<h3 class="contact-title">Press and Media</h3>
					<div class="contact-item">
						<h6 class="sub-title">Jenny Stevens:</h6>
						<a href="mailto:">jennymedia@olympus.com</a>
					</div>
					<div class="contact-item">
						<h6 class="sub-title">Skype:</h6>
						<a href="#">Stevens Press</a>
					</div>
				</div>
				
				<!-- ... end Contact Item -->

			</div>
			<div class="col col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

				
				<!-- Contact Item -->
				
				<div class="contact-item-wrap">
					<h3 class="contact-title">Business Chat</h3>
					<div class="contact-item">
						<h6 class="sub-title">Marc Jackson:</h6>
						<a href="mailto:">jacksonbusiness@olympus.com</a>
					</div>
					<div class="contact-item">
						<h6 class="sub-title">Skype:</h6>
						<a href="#">Jackson Business</a>
					</div>
				</div>
				
				<!-- ... end Contact Item -->

			</div>
			<div class="col col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

				
				<!-- Contact Item -->
				
				<div class="contact-item-wrap">
					<h3 class="contact-title">Human Resources</h3>
					<div class="contact-item">
						<h6 class="sub-title">Stella Karenson:</h6>
						<a href="mailto:">stellahhrr@olympus.com</a>
					</div>
					<div class="contact-item">
						<h6 class="sub-title">Skype:</h6>
						<a href="#">Karenson HHRR</a>
					</div>
				</div>
				
				<!-- ... end Contact Item -->

			</div>
		</div>
	</div>
</section>




<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation">
	<div class="container">
		<div class="row">
			<div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
				<a href="index.php" class="btn btn-primary btn-lg" >Register your <?php echo $_SESSION['project_title']; ?> now..!</a>
			</div>
		</div>
	</div>
	<img class="first-img" alt="guy" src="img/guy.webp" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" width="297" height="254">
	<img class="second-img" alt="rocket" src="img/rocket1.webp" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">
	<div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->

<?php
include("indexfooter.php");
?>