let header = document.querySelector( 'header .dropdown-menu' ),
	menuBtn = document.querySelector( '#menu-btn' );

menuBtn.addEventListener( 'click', () => {
	header.classList.toggle( 'open' );
} );