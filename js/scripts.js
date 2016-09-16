jQuery(document).ready(function($) {

	var teste_sc = false;

	$(window).scroll(function(){
		
             var topo = $(document).scrollTop();

            if (topo >= 200) {
            	if(teste_sc === false){
             		teste_sc = true;
             		

                	$('.topo_scrool').addClass('topo_scrool_go');
             		 setTimeout(function(){ $('.topo_scrool').addClass('topo_scrool_go_after') },1);
            	}
             	
            }

            if (topo <= $('.faixa_topo').height() ) {
            	if(teste_sc === true){
               		teste_sc = false;
               		  $('.topo_scrool').removeClass('topo_scrool_go');
               		  setTimeout(function(){ $('.topo_scrool').removeClass('topo_scrool_go_after') },1);
            	}

            	
            }

    });



// 	$('#slideshow_p_all').cycle({
// 		fx:     'scrollHorz', 
// 		prev: '#slideshow_p_prev',
// 		next: '#slideshow_p_next',
// 		speed:  600,
// 		timeout: 4000,
// 		rev:true,
// 	});


// $('#slideshow_p_all').children().each(function(i) {
//         $('<p >a</p>')
//             .appendTo($('.slideshow_p_const')).click(function() {
//                 $('#slideshow_p_all').cycle(i);
//                 return false;
//             });
//     });



	$('#slideshow_p_all').bxSlider({
	  nextSelector: '#slideshow_p_prev',
	  prevSelector: '#slideshow_p_next',
	  nextText: '',
	  prevText: ''
	});




	$('#gentear_all_slider').bxSlider({
	 nextSelector: '#gentear_slide_p_prev',
	  prevSelector: '#gentear_slide_p_next',
	  nextText: '',
	  prevText: ''
	});

	$('#int_gentear_all_slider').bxSlider({
	 nextSelector: '#int_gentear_slide_p_prev',
	  prevSelector: '#int_gentear_slide_p_next',
	  nextText: '',
	  prevText: ''
	});




	var galerianoar_all = $('#galerianoar_all').bxSlider({
		  nextSelector: '#galerianoar_slide_p_next',
		  prevSelector: '#galerianoar_slide_p_prev',
		  nextText: '',
		  prevText: '',
		  pager: false,
		});

		if(index === true){
			$('.slide_total_gente').text(galerianoar_all.getSlideCount());

			$('#galerianoar_slide_p_prev, #galerianoar_slide_p_next').click(function() {
				$('.slide_atual_gente').text(galerianoar_all.getCurrentSlide()+1);
			});
		}






	$('.faixa_topo_box').cycle({
		fx:     'scrollHorz', 
		prev: '#slide_topo_prev',
		next: '#slide_topo_next',
		speed:  600,
		timeout: 4000,
		rev:true,
	});

	var testepause = true;
	$('#pausa_topo_pause').click(function() { 
		if(testepause === true){
	    	$('.faixa_topo_box').cycle('pause'); 
	    	
	    	$('#pausa_topo_pause').removeClass('fa-pause-circle-o').addClass('fa-play-circle');

	    	testepause = false;
		}else{
			$('.faixa_topo_box').cycle('resume'); 

			$('#pausa_topo_pause').removeClass('fa-play-circle').addClass('fa-pause-circle-o');

			testepause = true;
		}
	});


	function seta_data_topo(){
		var data = new Date(),
	    dia = data.getDate(),
	    mes = data.getMonth() + 1,
	    ano = data.getFullYear();
	    var mes2 = "";

	    if(mes==1){
	    	mes2 = "Jan";
	    }
	    if(mes==2){
	    	mes2 = "Fev";
	    }
	    if(mes==3){
	    	mes2 = "Mar";
	    }
	    if(mes==4){
	    	mes2 = "Abr";
	    }
	    if(mes==5){
	    	mes2 = "Maio";
	    }
	    if(mes==6){
	    	mes2 = "Jun";
	    }
	    if(mes==7){
	    	mes2 = "Jul";
	    }
	    if(mes==8){
	    	mes2 = "Ago";
	    }
	    if(mes==9){
	    	mes2 = "Set";
	    }
	    if(mes==10){
	    	mes2 = "Out";
	    }
	    if(mes==11){
	    	mes2 = "Nov";
	    }
	    if(mes==12){
	    	mes2 = "Dez";
	    }

	    $('.data_topo').text(dia+" de "+mes2+" de "+ano);
	    $('.hora_topo').text(data.getHours()+':'+data.getMinutes());
	 }

	seta_data_topo();

});