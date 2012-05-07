$(document).ready(function(){
	
        
    var newStatus;
    var minLength=1;
    $("button#update").click(function(){
        newStatus=$.trim($("textarea#status").val()); // get status

        if(newStatus.length>minLength)
        {
            $("div#stream").prepend('<p class="status newStatus">'+newStatus+'</p>');
            $('.newStatus').animate({
                opacity: 3.0
            }, 5000);
            $("textarea#status").val('').focus(); // clear status box
        }
        else
        {
            alert("no status!");
        }

    });
        
        
        
        
    $('.edit').click(function(){
        $(this).hide();
        $(this).prev().hide();
        $(this).next().show();
        $(this).next().select();
    });
	
	
    $('input[type="text"]').blur(function() {  
        if ($.trim(this.value) == ''){  
            this.value = (this.defaultValue ? this.defaultValue : '');  
        }
        else{
            $(this).prev().prev().html(this.value);
        }
		 
        $(this).hide();
        $(this).prev().show();
        $(this).prev().prev().show();
    });
	  
    $('input[type="text"]').keypress(function(event) {
        if (event.keyCode == '13') {
            if ($.trim(this.value) == ''){  
                this.value = (this.defaultValue ? this.defaultValue : '');  
            }
            else
            {
                $(this).prev().prev().html(this.value);
            }
			 
            $(this).hide();
            $(this).prev().show();
            $(this).prev().prev().show();
        }
    });
		  
});

