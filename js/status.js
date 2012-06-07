$(document).ready(function(){
    //    $("#hint").click(function(){
    //        // alert('Yes');
    //        $("#comment_id").slideToggle(300);
    //        $("#buser_2870117628").hide();
    //        $(this).toggleClass("active");
    //    });
    //    $("#comment_link").click(function(){
    //        //alert('Yes');
    //        $("#comment_id").slideToggle(300);
    //        $("#buser_2870117628").hide();
    //        $(this).toggleClass("active");
    //                    
    //    });                
                
                
    $(".input_box").elastic().css("height","30px"); 
    
    $(".input_box").focus(function(){
        $(this).filter(function(){
            return $(this).val() == "" || $(this).val() == "So what's on your mind?"
        }).val("").css("color","#000000");
    });

    $(".input_box").blur(function(){
        $(this).filter(function(){
            return $(this).val() == ""
        }).val("So what's on your mind?").css("color","#808080");
    });
    
    
    
    $(".input_box").keyup(function()
    {
        var content=$(this).val();
        var urlRegex = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
        // Filtering URL from the content using regular expressions
        var url= content.match(urlRegex);

        if(url.length>0)
        {
            $("#linkbox").slideDown('show');
            $("#linkbox").html("<img src='/nevergiveup/images/link_loader.gif'>");
            // Getting cross domain data 
            $.get("/nevergiveup/index.php/site/extractingurl?url="+url,function(response)
            {
                // Loading <title></title>data
                var title=(/<title>(.*?)<\/title>/m).exec(response)[1];
                // Loading first .png image src='' data 
                var logo=(/src='(.*?).png'/m).exec(response)[1];
                $("#linkbox").html("<img src='"+logo+".png' class='img'/><div><b>"+title+"</b><br/>"+url)
            });

        }
        return false;
    });

    
    
    
$(document).on('click', '.comment_submit', function(){
    var element = $(this);
    var status_id = element.attr("id");
    var comment = $("#txtComment"+status_id).val();
    var dataString = 'comment='+ comment + '&status_id=' + status_id;
    if(comment=='')
    {
        alert("Please Enter Some Text");
    }
    else
    {
            
        $.ajax({
            type: "POST",
            url: "/nevergiveup/index.php/status/ajaxcomment",
            data: dataString,
            cache: false,
            success: function(html){  
                obj = JSON && JSON.parse(html) || $.parseJSON(html);                
                    
                if(obj.error=="false"){
                    var data ='<div id ="'+
                    obj.comment.comment_id
                    +'" class="rowcomment">'+
                    '<div class="rowcommentlt">'+
                    '<a><img width="40" height="40"'
                    +'src="/nevergiveup/images/uploads/'
                    + obj.comment.avatar
                    +'">'
                    +'</a>'+
                    obj.comment.message +
                    '</div></div>';          
                
                    $("#box_comment"+obj.comment.status_id).append(data).slideDown("slow");   
                }
                else {
                    alert("Error");
                }
                    
                    
            }
        });
    }
    return false;
});
 




$("#share").click(function(){
    var a_p = "";
    var d = new Date();
    var curr_hour = d.getHours();
    if (curr_hour < 12){
        a_p = "am";
    }else{
        a_p = "pm";
    }
    if (curr_hour == 0){
        curr_hour = 12;
    }
    if (curr_hour > 12){
        curr_hour = curr_hour - 12;
    }
    var curr_min = d.getMinutes();
    curr_min = curr_min + "";
    if (curr_min.length == 1){
        curr_min = "0" + curr_min;
    }
    var m_names = new Array("Jan", "Feb", "Mar", 
        "Apr", "May", "Jun", "Jul", "Aug", "Sep", 
        "Oct", "Nov", "Dec");
    var d = new Date();
    var curr_date = d.getDate();
    var curr_month = d.getMonth();
    var curr_year = d.getFullYear();
    var date = m_names[curr_month] +" "+ curr_date +" "+"at"+" "
    + curr_hour + ":" + curr_min + " " + a_p;
 
    $(".loading").show();
    var status=$(".input_box").val();
    if(status == "So what's on your mind?"){
        $(".loading").hide();
    }else{
        var DATA = 'status=' + status + '&date=' +date;
        $.ajax({
                
            type: "POST",
            url: "/nevergiveup/index.php/status/ajaxcreate",
            data: DATA,
            cache: false,
            success: function(data){ 
                //                    var html = new EJS({
                //                        url: '/nevergiveup/jstemplates/status.ejs'
                //                    }).render(data);
                $("#linkbox").hide();
                
                $(data +$("#linkbox")).prependTo(".timeline").slideDown("slow");
                $("#linkbox").prependTo(".sttext").slideDown("slow");
                $(".loading").hide();
                $(".input_box").val("So what's on your mind?").css("color","#808080")
                .css("height","30px");
            }
        });
    }
    return false;
});
});                  


//                    obj = JSON && JSON.parse(data) || $.parseJSON(data);
//                    //alert(obj.status.picture);
//                    $(obj.status.message).prependTo(".timeline").slideDown("slow");    


