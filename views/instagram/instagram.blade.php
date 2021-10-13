<div class="row">
	<div class="col s12 center-align intro-instagram">
		<h5>#LuxMadrid</h5>
		<p>Vive la auténtica experiencia y comparte con nosotros <br>
			tu momento a través del hashtag #LuxMadrid</p>
	</div>
</div>

<div class="row">
	<div class="owl-carousel owl-theme"></div>
</div>

<div class="row center-align">
	<a style="text-transform: lowercase;" target="_blank" href="https://www.instagram.com/luxmadrid/?hl=es-la" class="my-btn not-btn">ver mas</a>
</div>

{!! Html::style('assets/owl/owl.carousel.min.css') !!}
{!! Html::style('assets/owl/owl.theme.default.min.css') !!}
{!! Html::script('assets/owl/owl.carousel.min.js') !!}
<script src="https://peterolson.github.io/BigInteger.js/BigInteger.min.js"></script>
<script>
	const config_owl = breack_points => ({
		loop: true,
		margin: 10,
		responsive: breack_points
	})

	const responsive_owl = {
		0: {
			items: 1
		},
		600: {
			items: 1
		},
		900: {
			items: 3

		},
	}

	const initCarousel = () => $('.owl-carousel').owlCarousel(config_owl(responsive_owl))

	const media_urls = [
		'https://api.instagram.com/oembed/?url=https://www.instagram.com/p/Bz5bRPvDl_T/?OMITSCRIPT=true',
		'https://api.instagram.com/oembed/?url=https://www.instagram.com/p/B0MEoMqjGZV/?OMITSCRIPT=true',
		'https://api.instagram.com/oembed/?url=https://www.instagram.com/p/B0GJmMiivvt/?OMITSCRIPT=true',
		'https://api.instagram.com/oembed/?url=https://www.instagram.com/p/B0AqAEpCX3a/?OMITSCRIPT=true'
	]

	const getMedia = array_media => {
		Promise.all(array_media.map(mapMultiple)).then(data => manageData(data));
	}

	const mapMultiple = url => fetch(url).then(res => res.json())

	const makeHtml = media => {
		return `<div class="item">
                    <div class=instagram-post>
                          <img src="${media.thumbnail_url}">
                          <div class="instagram-post-info">
                              <p>${media.title}</p>
                            <!--  <span>@${media.author_name}</span> -->
                              <a target="_blank" class="my-btn not-btn" href="${getInstagramUrlFromMediaId(media.media_id)}">Ver más</a>
                           </div>
                    </div>
               </div>`;
	}

	const manageData = data => {
		let instagram_posts = data.map(makeHtml)
		console.log(data)
		$('.owl-carousel').append(instagram_posts)
		initCarousel();
	}

	const getInstagramUrlFromMediaId = media_id => {
		const alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_';
		let shortenedId = '';
		media_id = media_id.substring(0, media_id.indexOf('_'));
		while (media_id > 0) {
			let remainder = bigInt(media_id).mod(64);
			media_id = bigInt(media_id).minus(remainder).divide(64).toString();
			shortenedId = alphabet.charAt(remainder) + shortenedId;
		}
		return `https://www.instagram.com/p/${shortenedId}/`;
	}

	getMedia(media_urls)

</script>

<style>
	.instagram-post {
		width: 100% !important;
		position: relative;
		cursor: pointer;
		padding: 0 2px;
		height: 430px;
		overflow: hidden;
	}

	.instagram-post-info {
		position: absolute;
		background-color: rgba(255, 255, 255, .7);
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		padding: 1rem;
		transition: all .3s;
		opacity: 0;
	}

	.instagram-post:hover .instagram-post-info {
		opacity: 1;
	}

	.instagram-post-info p {
		position: absolute;
		top: 30% !important;
		left: 50%;
		width: 80%;
		transform: translate(-50%, -50%);
		font-size: 12px;
		line-height: 19px;
		color: #616161;
	}

	.instagram-post-info a {
		position: absolute;
		bottom: 7%;
		left: 50%;
		transform: translateX(-50%);
		font-size: 14px;
		border: none;
		text-transform: lowercase;
	}

	.intro-instagram h5 {
		font-size: 23px;
		font-weight: 600;
	}

	.intro-instagram p {
		font-size: 16px;
		font-weight: 400;
	}

</style>
