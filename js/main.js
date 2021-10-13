// accordeon
function accordeon() {
	var panel = $('.panel_heading');

	if (panel.hasClass('in')) {
		$('.in').find('.block_hover').slideDown();
	}

	$('.panel_heading .block_title').on('click', function () {
		$(this).parent().toggleClass('in').find('.block_hover').slideToggle();
	});
}
accordeon();

//плавный скролл
$(".go_to").on("click", function (event) {
	//отменяем стандартную обработку нажатия по ссылке
	event.preventDefault();

	//забираем идентификатор бока с атрибута href
	var id = $(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
		top = $(id).offset().top;

	//анимируем переход на расстояние - top за 500 мс
	$('body,html').animate({ scrollTop: top - 70 }, 500);
});

$(".category-section .problem__item").each(function () {
	var count = $(this).find('.problem__list-item.hide').length;
	var container = $(this);
	$(this).find(".problem__more span").html(count);
	$(this).find(".problem__more").on("click", function () {
		count -= 6;

		container.find(".problem__list-item.hide:lt(6)").removeClass('hide');
		container.find(".problem__more span").html(count);
		if (count <= 0) {
			container.find(".problem__more").hide();
		}
		return false;
	});
});

$('.links-toggle-text').on('click', function () {
	$(this).parent().find('.statement-item').addClass('open-text');
});

$('.links-toggle-text').on('click', function (e) {
	e.preventDefault();

	var
		$this = $(this),
		content = $(this).parent().find('.statement-item');


	if (!$this.hasClass('trigger')) {
		$this.addClass('trigger');
		$this.html('Скрыть ТЕКСТ ЗАЯВЛЕНИЯ');

		content.addClass('open-text');
	} else {
		$this.removeClass('trigger');
		$this.html('ПОЛНЫЙ ТЕКСТ ЗАЯВЛЕНИЯ');

		content.removeClass('open-text');
	}
});

$('.js-example-basic-single').select2({ width: '100%' });