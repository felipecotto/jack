$(document).ready(function(){
	
	$('.menuBtn').click(function() {
		$(this).toggleClass('act');
			if($(this).hasClass('act')) {
				$('.mainMenu').addClass('act');
			}
			else {
				$('.mainMenu').removeClass('act');
			}
	});

    var swiper2 = new Swiper('.swiper-container2', {
        paginationClickable: true,
        effect: 'fade',
        autoplay: 10000,
        autoplayDisableOnInteraction: false,
        loop: true,
        preventClicks: false,
        preventClicksPropagation: false
    });

    var swiper1 = new Swiper('.swiper-container1', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        loop: true,
        preventClicks: false,
        preventClicksPropagation: false
    });

});

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

$("#form_newsletter").submit(function(event){
	event.preventDefault();
		$.ajax({
			type: "POST",
			url: "mail.php", 
			async: true,
			data: {
				name: $("#name").val(),
				email: $("#email").val(),
			}, 
		success: function(data) { 
			swal("Mensagem Enviada", "Em Breve entraremos em contato", "success");
			$('#form_newsletter')[0].reset();
		}
     });
});