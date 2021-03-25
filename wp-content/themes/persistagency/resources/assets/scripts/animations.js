 
let animSections = [];

(function() {

	var animElements, parallaxElems;

  function checkSection() {
		parallaxSection();
		// var scrolled = window.pageYOffset;

		//fade in
    for (var i = 0; i < animElements.length; i++) {
      var element = animElements[i];
			var dataAnim = element.dataset.animation;
			
      var positionFromTop = animElements[i].getBoundingClientRect().top;
      if (positionFromTop - windowHeight <= 0) {

        element.classList.add('anim-in-element');
        element.classList.remove('anim-in');

				if(dataAnim && !animSections.includes(dataAnim)) {
					console.log(dataAnim);
					animSections.push(dataAnim);
					triggerLottie(element) 

				}
				
				// console.log(element.dataset.animation);
				// element.style.marginTop = - (scrolled * 0.2) + 'px';
      }
    }
  }

  function parallaxSection() {
    for (var i = 0; i < parallaxElems.length; i++) {
      var element = parallaxElems[i];
			// if(debounceTimer) {
			// 	window.clearTimeout(debounceTimer);
			// }
			// debounceTimer = window.setTimeout(function() {
				var scrolled = window.pageYOffset;
				var scrollPos = -(scrolled * 0.15);
				element.style.transform = `translate(0, ${scrollPos}px)`;
			// }, 100);
		}
  }

	function triggerLottie(elem) {
		console.log('triggerLottie');
		let animation = bodymovin.loadAnimation( {
			container: elem.querySelector('.section-bg'),
			renderer: 'svg',
			loop: false,
			autoplay: true,
			path: obj.templateUrl + '/dist/animations/'+elem.dataset.animation+'/data.json',
		} );

		setTimeout(() => { 
			animation.play();
		}, 250);		

	}

  window.addEventListener('scroll', checkSection);

  function init() {

		animElements = document.querySelectorAll('.anim-in');
		parallaxElems = document.querySelectorAll('.parallax');
    windowHeight = window.innerHeight - 200;
    checkSection();
	}

	var windowHeight = 0;
	init();



} )();