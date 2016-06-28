$(document).ready(function() {
    positionCenter($('#popup')); 
    positionCenter($('#popup2')); 
	
    $('#show_popup').click(function() { // При клике по ссылке, показываем всплывающее окно
        $('#popup, #overlay').fadeIn(300);
        // $('body').css("overflow","hidden"); 
    });

    $('#show_popup2').click(function() { // При клике по ссылке, показываем всплывающее окно
        $('#popup2, #overlay').fadeIn(300);
        // $('body').css("overflow","hidden"); 
    });


	
    $('#close_popup').click(function() { // Скрываем всплывающее окно при клике по кнопке закрыть
		$('#popup, #overlay').fadeOut(300);
        // $('body').css("overflow","auto");
    });

    $('#close_popup2').click(function() { // Скрываем всплывающее окно при клике по кнопке закрыть
        $('#popup2, #overlay').fadeOut(300);
        // $('body').css("overflow","auto");
    });
	
    function positionCenter(elem) { // Функция, которая позиционирует всплывающее окно по центру
        elem.css({
            marginTop: '-' + elem.height() / 2 + 'px',
			marginLeft: '-' + elem.width() / 2 + 'px'
        });
    }
});