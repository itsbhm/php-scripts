// Services slider
$(window).load(function(){
	$('#services-slider').carouFredSel({
		auto: false,
		swipe: {
			onTouch: true,
			onMouse: false
		},
		prev: '#services-prev',
		next: '#services-next',
		responsive: true,
		width: '100%',
		height: 'variable', 
		scroll: 1,
		items: {
			width: 360,
			height: 'variable',
			visible: {
				min: 1,
				max: 3
			}
		}
	});
});