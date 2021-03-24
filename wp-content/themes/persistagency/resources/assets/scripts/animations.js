 
let animSections = [];

(function() {

	var animElements;

  function checkSection() {
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

	function triggerLottie(elem) {
		console.log('triggerLottie');

		setTimeout(() => { 
			bodymovin.loadAnimation( {
				container: elem,
				renderer: 'svg',
				loop: false,
				autoplay: true,
				setSpeed: 1,
				path: obj.templateUrl + '/dist/animations/'+elem.dataset.animation+'/home.json',
			} );
		}, 250);		

	}

  window.addEventListener('scroll', checkSection);

  function init() {

		animElements = document.querySelectorAll('.anim-in');
    windowHeight = window.innerHeight - 200;
    checkSection();
	}

	var windowHeight = 0;
	init();



} )();