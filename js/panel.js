jQuery(document).ready(function($){
	$(function() {
		//最初は全てのパネルを非表示に
		$('#panel > dd').hide();
		$('#panel > dt')
		.click(function(e){
			//選択したパネルを開く
			$('+dd', this).slideToggle(500);
		})
	});
});