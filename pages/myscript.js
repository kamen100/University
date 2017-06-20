$(document).ready(function(){
	
	$('#IN').keyup(IN);
        $('#NC').keyup(NC);
	});
	function IN(){
		
		$.ajax({
			url:'IndexToName.php',
			type:'POST',
			data:{
				val1:$('#IN').val()
			}				
			}).done( function(data){
				$('#content').html(data);
			});	
}


	function NC(){		
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
                    }