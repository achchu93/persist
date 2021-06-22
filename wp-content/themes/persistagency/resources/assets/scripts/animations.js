
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
						preserveAspectRatio: 'xMinYMin slice',
					},

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

				if(element.classList.contains('scroll-fade-in') && element.classList.contains('anim-in')){
					element.classList.add('start-fade-in');
					element.classList.remove('fade-in');
				}

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

	function fadeInSection(section){
    for (var i = 0; i < animElements.length; i++) {
      var element = animElements[i];

      var positionFromTop = animElements[i].getBoundingClientRect().top;
      if (positionFromTop - windowHeight <= 0) {
				console.log('fadeIn', section);
				if(element.classList.contains('fade-in')){
					element.classList.add('start-fade-in');
					element.classList.remove('fade-in');
				}

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
		if(!elem.dataset.animationdelay) elem.dataset.animationdelay = 0;
		console.log('triggerLottie', elem.dataset.animationdelay);
		if(lotties[elem.dataset.animation] != 'undefined') {
			setTimeout(() => {
				lotties[elem.dataset.animation].play();
				lotties[elem.dataset.animation].addEventListener('complete', function() {
					console.log(elem.dataset.animation, 'done!');
					fadeInSection(elem.dataset.animation);
				})
			}, elem.dataset.animationdelay);
		}
	}

  function runStatsCounter(){
    $('.stats-value').each(function(){

      if( $(this).is('.progress') || $(this).is('.complete') ){
        return;
      }

      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();

      var elemTop = $(this).offset().top;
      var elemBottom = elemTop + $(this).height();

      var isVisible = ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));

      if( isVisible ){

        var elem = $(this);
        var thisText = $(this).text();
        var statsValue = thisText.replace(/\D/g, '');

        $(this)
          .prop('Counter', 0)
          .animate(
            {
              Counter: statsValue,
            },
            {
              duration: 4000,
              easing: 'swing',
              step: function(now) {
                var pieces = thisText.split( statsValue );
                var formatted = Math.ceil(now).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
                elem.text(pieces.join(formatted));
              },
              start: function(){
                elem.addClass('progress');
              },
              complete: function(){
                elem.removeClass('progress');
                elem.addClass('complete');
              }
            }
          );

      }

    });
  }

  window.addEventListener('scroll', checkSection);
  window.addEventListener('scroll', runStatsCounter);

  function init() {
		animElements = document.querySelectorAll('.anim-in');
		parallaxElems = document.querySelectorAll('.parallax');
    windowHeight = window.innerHeight - 200;
		buildLotties();
    checkSection();
    runStatsCounter();
		console.log(document.body.clientWidth);
		if( $('body.home').length && document.body.clientWidth > 640 ){

			document.documentElement.style.scrollSnapType = "y mandatory";
		}
		setTimeout(function(){
			const pageHeader = document.getElementById('pageHeader');
			pageHeader.classList.add('start-fade-in');
			pageHeader.classList.remove('fade-in');
		}, 500);



	}

	var windowHeight = 0;
	init();

} )();
