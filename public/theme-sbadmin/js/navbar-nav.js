$(function(){
	var current = window.location.herf;
	$('ul.navbar-nav li a').each(function(){
		var $this = $(this);
		if($this.attr('herf') == current){
			$this.parents('li').addClass('active');
		}
	});
})