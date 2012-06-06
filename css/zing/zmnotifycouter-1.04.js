var zmNotifyCounter = (function (){
    return {	
        getTotalFriendRequest:function(url, uid) {
			var id = zm.intval(uid);
			if(!url || id <= 0){
				return;
			}
			var urlreal = url + "?uid=" + id;			
            zm.post(urlreal,{}, {
                dataType:'json'
            }, function(resp) {
				if(resp.total){
					zm("#lfr_counter").show();					
					zmNotifyCounter.setAppCounter({id:'lfr', number:resp.total});
				}
            });
       },
	   getTotalNewMessage:function(url, uid) {					   
		   var id = zm.intval(uid);
			if(!url || id <= 0){
				return;
			}
			var urlreal = url + "?uid=" + id;	
			zm.post(urlreal,{},{dataType:'json'},function(resp) {
				if(resp.total > 0){
					zm("#msg_counter").show();
					zmNotifyCounter.setAppCounter({id:'msg', number:resp.total});
				}
			});
		},
		setAppCounter: function(data) {			
			zm('#' + data.id + '_counter').text(zm.intval(data.number))[data.number==0?'hide':'show']();
		},
		increaseAppCounter: function(data) {
			var cur = zmNotifyCounter.getCurCounter(data.id);
			zm('#' + data.id + '_counter').text(cur+1);
		},
		decreaseAppCounter: function(data) {
			var cur = zmNotifyCounter.getCurCounter(data.id);			
			var val = cur - 1;
			if(val > 0 ){							
				zm('#' + data.id + '_counter').text(val);
			}else{
				zm('#' + data.id + '_counter').hide();
			}
		},
		getCurCounter: function(id) {
			return zm.intval(zm('#' + id + '_counter').text());
		}
	}
})();
zm.ready(function(){	
	zmXCall.register('setAppCounter', zmNotifyCounter.setAppCounter);
	zmXCall.register('increaseAppCounter', zmNotifyCounter.increaseAppCounter);
	zmXCall.register('decreaseAppCounter', zmNotifyCounter.decreaseAppCounter);
});
