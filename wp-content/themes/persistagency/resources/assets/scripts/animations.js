 
let animSections = [];

(function() {

	var animElements, parallaxElems, lotties = {};

	function buildLotties() {
		console.log('buildLotties', lotties);

    for (var i = 0; i < animElements.length; i++) {
      var element = animElements[i];
			var dataAnim = element.dataset.animation;

			if(dataAnim && !animSections.includes(dataAnim)) {
				let animation = bodymovin.loadAnimation( {
					container: element.querySelector('.section-bg'),
					renderer: 'svg',
					loop: false,
					autoplay: false,
					path: obj.templateUrl + '/dist/animations/'+dataAnim+'/data.json',
					rendererSettings: {
						preserveAspectRatio: 'xMinYMin slice'
					}
				
				} );
				lotties[dataAnim] = animation;
			}
			
    }
		console.log('buildLotties', lotties);
	}

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
					// console.log(dataAnim);
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
		console.log('triggerLottie', elem.dataset.animation);
		if(lotties[elem.dataset.animation] != 'undefined') {
			setTimeout(() => { 
				lotties[elem.dataset.animation].play();
			}, 250);		
		}
	}

  window.addEventListener('scroll', checkSection);

  function init() {
		animElements = document.querySelectorAll('.anim-in');
		parallaxElems = document.querySelectorAll('.parallax');
    windowHeight = window.innerHeight - 200;
		buildLotties();
    checkSection();
	}

	var windowHeight = 0;
	init();



} )();