$(document).ready(function(){
    // view friend request

    updateNotification();
    $("#frbtn").click(function(){
        if(!$(".friend").is(":visible")){
            $(".friend").css('display', 'inline');            
        }
            
        else
            $(".friend").css('display', 'none');
    });
    // get friend request
    function updateNotification(){        
        $.ajax({
            url: '/nevergiveup/index.php/site/updatenotification',
            type: "post",
            dataType: "json",
            success: function(data){            
                if(data.friend_request>0){
                    $(".zingcounter").show();
                    $(".zingcounter").text(data.friend_request); 
                    // load the template file, then render it with data
                    var html = new EJS({
                        url: '/nevergiveup/jstemplates/friend_request.ejs'
                    }).render(data);
                    //$("#frlist").append(html);
                    //$(html).replaceAll('#replacehere');
                    $('#replacehere').replaceWith('<div id="replacehere">'+html+'</div>') 
                // $("#replacehere").append(html);
                    
                }
                setTimeout(updateNotification,10000);
            },
            error: function(){
                setTimeout(updateNotification,10000);
            }
        });       
    }
    $(document).on('click', '.accept_btn', function(){
        var element = $(this);
        var accept_id = element.attr('id').substr(6);
        var dataString = 'user_id=' + accept_id;
        $.ajax({
            url: "/nevergiveup/index.php/site/acceptfriendrequest",
            type: "post",
            data: dataString,
            cache: false,
            success: function(data){
                if(data!=null){
                    element.hide();
                }
            },
            error: function(){
                
            }
        });    
    });
    
    $(document).on('click', '.deny_btn', function(){
        var element = $(this);
        var accept_id = element.attr('id').substr(7);
        var dataString = 'user_id=' + accept_id;
        $.ajax({
            url: "/nevergiveup/index.php/site/declinefriendrequest",
            type: "post",
            data: dataString,
            cache: false,
            success: function(data){
                if(data!=null){
                    element.hide();
                }
            },
            error: function(){
                
            }
        });    
    });
    
    
    
    
    
    
    
});









//function updateNotification(){
//    var url="";
//    var duration="";
//    url=$NOTIFICATION_URL;
//        
//    var ajaxOption={
//        url:url,
//        type:'post',
//        dataType:'json',
//        success : function(data){
//                    
//            var noOfChallenges=data.noOfChallenges;
//                    
//            if(noOfChallenges>0){
//                $("#span_new_no_of_challenges").css("display","block");
//                $("#span_new_no_of_challenges").empty().html(noOfChallenges);
//                $("#hd_no_of_challenges").val(noOfChallenges);
//                        
//            }
//            else
//                $("#span_new_no_of_challenges").css("display","none");
//                    
//            var noOfMessages=data.noOfMessages;
//                    
//            if(noOfMessages>0){
//                $("#span_new_no_of_messages").css("display","block");
//                $("#span_new_no_of_messages").empty().html("");
//                $("#span_new_no_of_messages").html(noOfMessages);
//                $("#hd_no_of_messages").val(noOfMessages);
//            }
//            else
//                $("#span_new_no_of_messages").css("display","none");
//                    
//            var noOfMatchNotices=data.noOfMatchNotices;
//            if(noOfMatchNotices>0){
//                $("#span_new_no_of_match_nofs").css("display","block");
//                $("#span_new_no_of_match_nofs").empty().html("");
//                $("#span_new_no_of_match_nofs").html(noOfMatchNotices);
//                $("#hd_no_of_matches").val(noOfMatchNotices);   
//            }
//            else
//                $("#span_new_no_of_match_nofs").css("display","none");
//                    
//            setTimeout("updateNotification()",10000);
//        },
//        error: function(){
//            setTimeout("updateNotification()",10000);
//        }
//
//    }
//            
//    $.ajax(ajaxOption);
//
//}
