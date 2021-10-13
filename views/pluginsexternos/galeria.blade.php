<div id="lgn-sr-container"></div>

<script>
	$('document').ready(function(event) {
		$.ajax({
			url: 'https://leguidenoir.com/assets/social_room/js/social-room-loader.min.js',
			dataType: 'script',
			cache: true,
			success: function() {
				$.socialRoomLoader({
					unique: "76436",
					hash: "e92346975a990e33bb48b0162d34fb48",
					lang: "ES",
					type: "gallery"
				});
				$('.lgn-lookbtn').attr("href", "{{ url('galeria')}}");
			}
		});
	});

</script>
