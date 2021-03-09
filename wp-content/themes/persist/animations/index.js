const homeAnimation = bodymovin.loadAnimation( {
	container: document.getElementById( 'home_marquee' ),
	renderer: 'svg',
	loop: true,
	autoplay: true,
	setSpeed: 1,
	path: obj.templateUrl + '/animations/home/data.json',
} );
