$(document).ready(function(){
    $(document).on('click', '.btn_addfriend', function(){
        var element = $(this);
        var friend_id = element.attr("id").substr(9);
        var dataString = "friend_id=" + friend_id;
       
        $.ajax({
            type: "POST",
            url: "/nevergiveup/index.php/site/sendfriendrequest",
            data: dataString,
            cache: false,
            success: function(data){     
                $("#addfriend"+friend_id).text("Friend Request Sent");
            }
               
        });
       
    });
});