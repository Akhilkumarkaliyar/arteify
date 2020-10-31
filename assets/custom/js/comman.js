$(function() {
    $(".numericOnly").bind('keypress',function(e){ 
    	if(e.keyCode == '9' || e.keyCode == '16'){  
    		return;  
    	}  
    	var code;  
    	if (e.keyCode) code = e.keyCode;  
    	else if (e.which) code = e.which; 		
    	if(e.which == 46)  
    		return false;  
    	if (code == 8 || code == 46 )  
    		return true;  
    	if (code < 48 || code > 57 || code == 118)  
    		return false;  
    });
    /*$(".numericOnly").bind("paste",function(e) {  
    	e.preventDefault();  
    });*/
    $(".numericOnly").bind('mouseenter',function(e){  
      var val = $(this).val();  
      if (val!='0'){  
    	   val=val.replace(/[^0-9]+/g, "")  
    	   $(this).val(val);  
      }  
    });
    
    $(".decimalnumericOnly").bind('keypress',function(e){
		if(e.keyCode == '9' || e.keyCode == '16'){  
    		return;  
    	}
        var insrtval=this.value;
        var REgXp = new RegExp(/^\d*\.\d\d$/);
        if (REgXp.test(insrtval))
        {
            return false;
        }
    	var code;  
    	if (e.keyCode) code = e.keyCode;  
    	else if (e.which) code = e.which;
    	if (code == 8)  
    		return true; 
        if (code == 46 || code == 45)
            return true; 
    	if (code < 48 || code > 57)  
    		return false;
        
    });
    $(".decimalnumericOnly").bind("paste",function(e) {  
    	e.preventDefault();  
    });
    

    $("#search").on("keyup",function(){
        gridloader(1);
    });
});
$(function() {
  $('body').on('keypress', '.remove_first_space', function(e) { 
    console.log(this.value);
    if (e.which === 32 &&  e.target.selectionStart === 0) {
      return false;
    }  
  });
});
$(function() {
  $('body').on('keydown', '.numericOnly', function(e) { 
    console.log(this.value);
    if(e.keyCode == '9' || e.keyCode == '16'){  
    		return;  
    	}  
    	var code;  
    	if (e.keyCode) code = e.keyCode;  
    	else if (e.which) code = e.which; 		
    	if(e.which == 46)  
    		return false;  
    	if (code == 8 || code == 46 )  
    		return true;  
    	if (code < 48 || code > 57 || code == 118)  
    		return false;  
  });
});