jQuery(document).ready(function($){
	$(function () {
		
		var hash = location.hash;	
		//hashの中に#tab～が存在するか調べる。
		hash = (hash.match(/^#tab\d+$/) || [])[0];
		
		//hashに要素が存在する場合、hashで取得した文字列（#tab2,#tab3等）から#より後を取得(tab2,tab3)	
		if($(hash).length){
			$('.ChangeElem_Panel').hide();
			$('.ChangeElem_Panel').eq(1).show();
			$('.ChangeElem_Btn').eq(1).addClass('is-active');
		} else {
			/*初期表示*/
			$('.ChangeElem_Panel').hide();
			$('.ChangeElem_Panel').eq(0).show();
			$('.ChangeElem_Btn').eq(0).addClass('is-active');
			/*クリックイベント*/
			$('.ChangeElem_Btn').each(function () {
				$(this).on('click', function () {
					var index = $('.ChangeElem_Btn').index(this);
					$('.ChangeElem_Btn').removeClass('is-active');
					$(this).addClass('is-active');
					$('.ChangeElem_Panel').hide();
					$('.ChangeElem_Panel').eq(index).show();
				});
			});
		}
	});
});