const homeAnimation = bodymovin.loadAnimation({
	container: document.getElementById('home_marquee'),
	renderer: 'svg',
	loop: false,
	autoplay: true,
	path: obj.templateUrl+'/animations/home/data.json'
})