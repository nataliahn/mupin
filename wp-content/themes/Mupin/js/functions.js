$( document ).ready(function() {
	//Countdown
	$('#clock').countdown('2018/06/21 00:00:00')
	.on('update.countdown', function(event) {
	  var format = '<span class="horas">' + '%H:%M:%S' + '</span>';
	  if(event.offset.totalDays > 0) {
	    format = '<span class="dia">' + '%-d día%!d ' + '</span>' + format;
	  }
	  if(event.offset.weeks > 0) {
	    format = '<span class="semana">' + '%-w semana%!w ' + '</span>' + format;
	  }
	  $(this).html(event.strftime(format));
	})
	//Evento
	.on('finish.countdown', function(event) {
	  $(this).html('<span class="mensaje-mapu">' + 'Deuma afpule pun, mapuche mapu meu wengetuai itrovill monguen. Ka femngechi peumangen, wengetuai rakiduam, newen, ka kiñegün itrokom puche, Ka antü ñi mülerpuam doi küme monguen.' + '</span>')
	    .parent().addClass('disabled');

	});
});