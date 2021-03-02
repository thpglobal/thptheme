
// The animation function, which takes an Element
const animateCountUp = el => {
	let frame = 0;
	const countTo = parseInt( el.innerHTML, 10 );
	const counter = setInterval( () => {
		frame++;
		const progress = easeOutQuad( frame / totalFrames );
		const currentCount = Math.round( countTo * progress );
		if ( parseInt( el.innerHTML, 10 ) !== currentCount ) {
			el.innerHTML = currentCount.toLocaleString();
		}
		if ( frame === totalFrames ) {
			clearInterval( counter );
		}
	}, frameDuration );
};

// Run the animation on all elements with a class of ‘countup’
const runAnimations = () => {
	// Enable the countups
	const animationDuration = 2000;
	const frameDuration = 1000 / 60;
	const totalFrames = Math.round( animationDuration / frameDuration );
	// An ease-out function that slows the count as it progresses
	const easeOutQuad = t => t * ( 2 - t );

	const countupEls = document.querySelectorAll( '.countup' );
	countupEls.forEach( animateCountUp );
};
window.onload=runAnimations;
