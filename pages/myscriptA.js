$(document).ready(function(){
	
	$('#IN').keyup(IN);
    /*$('#NC').keyup(NC);*/
	});
	function IN(){
		
		$.ajax({
			url:'IndexToName.php',
			type:'POST',
			data:{
				val1:$('#ID_user').val1(),
				val2:$('#assessment').val2(),
				val3:$('#id_subject').val3()
			}				
			}).done( function(msg){
				//$('#content').html(data);
				alert( "Записа е добавен: " + msg );
			});	
}

/*
 //////////////////////////////////
  
  
  $.ajax({
  method: "POST",
  url: "insert_assessment.php",
  data: "ID_user: "+ID_user+ "&assessment:" +assessment+ "&id_subject:" +id_subject }
})
  .done(function( msg ) {
    alert( "Записа е добавен: " + msg );
  });
   ///////////////////////////////
*/

/*	function NC(){		
		$.ajax({
			url:'NameToIndex.php',
			type:'POST',
			data:{
				val:$('#NC').val()
			}				
			}).done( function(data){
				$('#content2').html(data);
			});
                    }
                    function Myfunction(){
                        var txt = "";
                        if($("NC").validity.rangeOverflow){
                            txt = "Стойността е твърде голяма";
                        } 
                        $().innerHTML=txt;
}*/