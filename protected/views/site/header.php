<link href="/nevergiveup/css/header.css" media="screen" rel="stylesheet" type="text/css">
<!--<script type="text/javascript" src="/nevergiveup/js/jquery.js"></script>-->
<script type="text/javascript" src="/nevergiveup/js/header.js"></script>
<script type="text/javascript" src="/nevergiveup/js/ejs_production.js"></script>

<div class="zingheader zme_header">
    <div class="zingtop">
        <div class="zingmain">
<!--            <script type="text/javascript">var zh = zm('#header .zingmain');show_ticker &amp;&amp; zh.addClass('moveLeft');zh.removeClass('hidden_vb');</script>-->
            <h1 class="zinglogo">
                <a title="Go to homepage" href="/h/giaosudau">
                   <img width="145" border="0" height="35" src="http://localhost/nevergiveup/images/header/uit.jpg" alt="Zing Me">
                </a>
            </h1>
            <form id="zmh_sf" method="get" action="/s/giaosudau/zingsearch">
                <div id="zingsearch" class="zingsearch">
                    <input type="text" onfocus="this.value=='Search Friend'?this.value='':''" autocomplete="off" id="textSearch" name="textSearch" class="zingbxsearch inputzing" value="Search Friend">
                    <input type="button" id="zmhs" class="zingbtnsearch" value="Search">
                </div>
            </form>
            <div class="zinguser">
                <div id="menuinfo" class="zingpersonal">
                    <div id="perheaderid" class="zingborder">
                        <div class="zingborderinner">
                            <span class="zingarrowuser"></span>
                            <a class="zingavtuser" href="/u/giaosudau">
                                <img src="http://3.1.s50.avatar.zdn.vn/avatar_files/3/c/d/8/giaosudau_50_3.jpg">
                            </a>
                            <a href="/u/giaosudau">
                                <span title="Mr Bean" class="zingnameuser"><strong>Profile</strong></span>
                            </a>
                        </div>
                    </div>
                    <div style="display: none;" id="sub" class="boxshadow_popup">
                        <div class="popup_edge_shadow">
                            <div class="popup_border">
                                <div class="overlap"></div>
                                <div class="popup_inner_cont">
                                    <!-- Begin Popup content -->
                                    <div class="thumb_avatar"><a href="/u/giaosudau"><img src="http://s120.avatar.zdn.vn/avatar_files/3/c/d/8/giaosudau_120_3.jpg"></a></div>
                                    <ul class="acc_user_menu">
                                        <li><a href="/u/giaosudau"><span class="icn icn_wallact"></span>Trang cá nhân</a></li>
                                        <li><a href="/pe/profile?_src=m"><span class="icn icn_editinfo"></span>Cập nhật thông tin</a></li>
                                        <li><a href="/pe/privacy?_src=m"><span class="icn icn_privacy"></span>Cài đặt riêng tư</a></li>
                                        <li><a href="/pe/notice/setup?_src=m"><span class="icn icn_infoboard"></span>Cài đặt thông báo</a></li>
                                        <li><a href="/fr/giaosudau/ownerf/mylist"><span class="icn icn_friends"></span>Bạn bè</a></li>
                                        <li><a href="/apps/credits?_src=m"><span class="icn icn_zmewallet"></span>Ví Zing Me</a></li>
                                        <li><a href="http://id.zing.vn/home/index.25.html"><span class="icn icn_changepass"></span>Đổi mật khẩu</a></li>
                                        <li><a href="http://login.me.zing.vn/login/logout"><span class="icn icn_logout"></span>Thoát</a></li>
                                    </ul>
                                    <div style="clear:both"></div>
                                    <p class="stt_newupdate">
                                        <a href="/u/giaosudau"><strong>Mr Bean</strong></a> <img class="note-l" src="http://img.me.zdn.vn/v3/images/blank.gif"> <span id="spStatusHeader">Ajax ..!</span> <img class="note-r" src="http://img.me.zdn.vn/v3/images/blank.gif"> <span id="spStatusDateHeader" class="stt_date">9:44 sáng Thứ ba </span>
                                    </p>
                                    <div style="clear:both"></div>
                                </div>
                                <!--								<div class="quik_update_sttbox">
                                                                                                        <a id="status-header-share" class="btn_L3" style="float:right" href="#"><em>Đăng</em></a>
                                                                                                        <input type="text" rel="Bạn đang nghĩ gì?" id="txtStatusHeader" class="qikstt_txtbox" value="Bạn đang nghĩ gì?">
                                                                                                </div>-->
                            </div>
                        </div>
                        <div class="notif_boxshadow">
                            <div style="float:right" class="ntifboxshd_right png"></div>
                            <div style="float:left" class="ntifboxshd_left png"></div>
                            <div class="ntifboxshd_center"></div>
                        </div>
                    </div>
                </div>
                <div class="zingaccuser">
                    <!--        Notification                            -->
                    <div tabindex="-1" id="ntbtn" class="zingnotify ntbtn">
                        <span style="display: none" id="ntcounter" class="zingcounter"></span>
                        <div style="display: none;" class="boxshadow_popup notify">
                            <div class="popup_edge_shadow">
                                <div class="popup_border" id="ntpopup">
                                    <div class="overlap notify"></div>
                                    <div class="ntpopup_head" id="ntpopup-head">
                                        <strong>Bạn có gì mới</strong></div>
                                    <div id="ntlist" class="notifbox_cont ntlist"><p class="notif_noitem">Bạn không có lời nhắn nào mới</p><div class="zme-notify-bottom">			<a onclick="zmNotifications.toggle('nt'); return false;" href="#" class="btn_L3 fr"><em>Đóng</em></a>			<p class="notif_bot_left fl">				<a href="/apps/notify?fromid=0&amp;count=30&amp;type=3&amp;masterpage=3">Xem tất cả</a>			</p>		</div></div>
                                </div>
                            </div>
                            <div class="notif_boxshadow">
                                <div style="float:right" class="ntifboxshd_right png"></div>
                                <div style="float:left" class="ntifboxshd_left png"></div>
                                <div class="ntifboxshd_center"></div>
                            </div>
                        </div>
                    </div>
                    <!--        Message                           -->
                    <div tabindex="-1" id="pmbtn" class="zingmessage ntbtn">
                        <span style="display: none" id="pmcounter" class="zingcounter"></span>
                        <div style="display: none;" class="boxshadow_popup message">
                            <div class="popup_edge_shadow">
                                <div class="popup_border" id="pmpopup">
                                    <div class="overlap message"></div>
                                    <div class="ntpopup_head" id="pmpopup-head">
                                        <strong id="pmpopup-title">Tin nhắn</strong></div>
                                    <div id="pmlist" class="notifbox_cont pmlist"><div onclick="window.location.href='/apps/msg?params=/view?id=7331964'" class="zme_notify">					<span class="img" id="pma_0" rel="ZMEA_49248204?id=1&amp;l=0&amp;size=42&amp;width=42&amp;height=42" rel_f="1"><img width="42" height="42" onerror="this.src='http://widget.me.zing.vn/images/160.gif';" src="http://7.1.s50.avatar.zdn.vn/avatar_files/7/6/d/d/ketnoitruongsa_42_2.jpg" m="0" id="wgapma_0" l="0" k="a.i.49248204.42" title="Triệu Kết Nối Đến Trường Sa"></span>					<div class="zme-notify-item-cont">						<p><span style="font-weight:bold" class="zme-notify-fr-name" id="pmd_0" rel="ZMED_49248204?id=1&amp;l=0" rel_f="1"><span m="0" id="wgdpmd_0" cnt="" n="" c="" l="0" k="d.i.49248204" title="Triệu Kết Nối Đến Trường Sa" href="#"><img src="http://img.me.zdn.vn/v3/images/icocom_sml.gif" style="margin: 0 5px 5px 0; vertical-align: middle;">Triệu Kết Nối Đến Trường Sa</span></span></p>						<p class="pmtxt">Hãy cùng cộng đồng Zing Me gắn hình đại diện của mình...</p>						<p class="zme-notify-time"><span class="notificon icn_msg12x12"></span>06:47 08/12/2011</p>					</div>					<div class="clr"></div>				</div><div class="zme-notify-bottom">			<a onclick="zmNotifications.toggle('pm'); return false;" class="btn_L3 fr" href="#"><em>Đóng</em></a>			<p class="notif_bot_left fl">				<strong class="lk_bullet">.</strong>				<a id="frViewAll" href="/apps/msg">Xem tất cả</a>				<strong class="lk_bullet">.</strong>				<a id="frInviteLink" href="/apps/msg?src=rdmsg">Gửi tin nhắn mới</a>			</p>		</div></div>
                                </div>
                            </div>
                            <div class="notif_boxshadow">
                                <div style="float:right" class="ntifboxshd_right png"></div>
                                <div style="float:left" class="ntifboxshd_left png"></div>
                                <div class="ntifboxshd_center"></div>
                            </div>
                        </div>
                    </div>
                    <!--        Friend                         -->
                    <div tabindex="-1" id="frbtn" class="zingmakefrd ntbtn">
                        <span style="display: none;" id="frcounter" class="zingcounter"></span>

                        <div style="display: none;" class="boxshadow_popup friend">
                            <div class="popup_edge_shadow"><div id="frpopup" class="popup_border">
                                    <div class="overlap friend"></div>
                                    <div id="frpopup-head" class="ntpopup_head">
                                        <strong>Friend Requests <span id="frtotal"></span></strong>
                                    </div>
                                    <div id="frlist" class="notifbox_cont frdlist">
                                        <!--                                      LOOP Here -->
                                        <div id ="replacehere">
                                        </div>

<!--                                        <p class="notif_noitem">Bạn không có lời mời kết bạn nào</p>-->
                                        <div class="zme-notify-bottom">	
                                            <a onclick="zmNotifications.toggle('fr');return false;" class="btn_L3 fr" href="#">	
                                                <em>Close</em>		
                                            </a>						
                                            <p class="notif_bot_left fl">						
                                                <a href="/fr/invite" id="frInviteLink">Search Friend</a>	
                                            </p>						
                                        </div>
                                    </div>
                                </div></div>
                            <div class="notif_boxshadow">
                                <div style="float:right" class="ntifboxshd_right png"></div>
                                <div style="float:left" class="ntifboxshd_left png"></div>
                                <div class="ntifboxshd_center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zingfamily">
                <ul class="zingtab">
                    <li><a class="selected" href="/nevergiveup/index.php/status"><span><strong>Profile</strong></span></a></li>
                    <li><a target="_blank" href="http://mp3.zing.vn"><span><strong>Friends</strong></span></a></li>
                    <li><a target="_blank" href="http://zing.vn"><span><strong>About</strong></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>