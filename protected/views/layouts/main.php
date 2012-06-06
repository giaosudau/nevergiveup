<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/zing/leftmenu-2.15.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

    
    <?php
$userid=Yii::app()->user->id;
?>    
    
    
    
    
    
    
    
    
    
<div class="container" id="page">

	<div id="header">
<!--		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>-->
             <?php $this->renderPartial('../site/header'); ?>
	</div><!-- header -->
        
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
                                array('label'=>'Profile', 'url'=>array('/profile/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'Register', 'url'=>array('/site/register'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div> 
<!--        mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
                
                
                
  <div id="left-menu">
						
<script type="text/javascript">
	var LeftMenu = {};
	LeftMenu.icons = {'sukien':'newv1.gif','longtuong':'Hot1.gif'};
	var ME_URL = 'http://me.zing.vn';
</script>
<div class="usermenult">
    <div class="boxusermenult">
	<div class="avtmenult">		
		<span id="avatar_11729935" rel="ZMEA_11729935?id=1&amp;l=1&amp;width=35&amp;height=35" rel_f="1">
                    <?php
                    echo '<a href="http://localhost/nevergiveup/index.php/profile/'.$userid.'">';
                        echo '<img k="a.i.11729935.50" width="35" height="35" l="1" id="wgaavatar_11729935" m="0" src="http://localhost/nevergiveup/images/user/'.$userid.'.jpg" onerror="this.src=&#39;http://widget.me.zing.vn/images/160.gif&#39;;" title="ATphan">'; ?>
                    </a></span>
	</div>
	<div class="namemenult">
            <?php
            
		echo '<span id="fullName_11729935" rel="ZMED_11729935?id=1&amp;l=1" rel_f="1"><a k="d.i.11729935" l="1" c="" n="" cnt="" id="wgdfullName_11729935" m="0" title="ATphan" href="http://localhost/nevergiveup/index.php/profile/'.$userid.'">'.Yii::app()->user->name.'</a></span>';
		echo '<a href="http://localhost/nevergiveup/index.php/profile/update" title="Chỉnh sửa thông tin"><span class="edit_notice editmenult"></span></a>';
	
            ?>
            </div>
    </div>        
    <div class="pointusermenult">
    	<span class="icn12x12 icn_point12x12"></span>
        <span class="ctnpointmenult">Điểm: <span class="txtpointusermenult">1.482</span></span>
    </div>
</div>
	<div class="menu-app">
		<a id="lwlc" href="http://localhost/nevergiveup/index.php/status" title="Welcome" class="current">
			<span class="menu-item ficon_wlc"></span>
			<span class="padleft">Welcome</span>							
		</a>
	</div>
<div class="menu-app">
	<a id="lnews" href="http://localhost/nevergiveup/index.php/status" title="Profile">
		<span class="menu-item ficon_status"></span>
		<span class="padleft">Profile</span>
	</a>
</div>
<ul class="submenu" id="core_sub_lfriend" style="display: none; ">
	<li id="core_lfriend_s"><a href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top" title="Tìm kiếm bạn">Tìm kiếm bạn</a></li>
	<li id="core_lfriend_r"><a href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top" title="Chờ kết bạn">Chờ kết bạn</a></li>
	<li id="core_lfriend_l"><a href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top" title="Danh sách bạn">Danh sách bạn</a></li>
</ul>
<div class="menu-app">
	<a id="lmsg" href="http://localhost/nevergiveup/index.php/site/page?view=about" title="Message">		
		<em id="msg_counter" class="dynamic_counter"></em>
		<span class="menu-item ficon_msg"> </span>
		<span class="padleft">Message</span>
	</a>
</div>
<ul class="submenu" style="display: none; " id="core_sub_lmsg">
	<li id="msgr"><a href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top" title="Tin đã nhận">Tin đã nhận</a></li>
	<li id="msgs"><a href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top" title="Tin đã gửi">Tin đã gửi</a></li>
</ul>
<div class="menu-app">
	<a id="lblog" href="http://localhost/nevergiveup/index.php/site/page?view=about" title="Blog">
		<span class="menu-item ficon_blog"></span>
		<span class="padleft">Blog</span>
	</a>
</div>
<ul class="submenu" style="display: none; " id="core_sub_lblog">
	<li id="blogp"><a href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top" title="Blog của tôi">Blog của tôi</a></li>
	<li id="blogf"><a href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top" title="Blog bạn bè">Blog bạn bè</a></li>
	<li id="blogpl"><a href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top" title="Cộng đồng">Cộng đồng</a></li>
	<li id="bloge"><a href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top" title="Sự kiện">Sự kiện&nbsp;<img border="0" src="./Zing Me   Chào mừng_files/Hot1.gif"></a></li>
</ul>
<div class="menu-app">
	<a id="lphoto" href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top" title="Photo">
		<em id="photo_counter" class="dynamic_counter" style="display:none"></em>
		<span class="menu-item ficon_photo"></span>
		<span class="padleft">Photo</span>
	</a>
</div>

<div class="menu-app">
	<a id="lgroup" href="http://localhost/nevergiveup/index.php/site/page?view=about" title="Group">
            <span class="menu-item ficon_group"></span>
		<span class="padleft">Group</span>
	</a>
</div>
<ul class="submenu" style="display: none; " id="core_sub_lgroup">
	<li id="groupm"><a href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top" title="Nhóm của tôi">Nhóm của tôi</a></li>
	<li id="groupl"><a href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top" title="Danh sách nhóm">Danh sách nhóm</a></li>
</ul>

<div class="menu-app">
	<a id="lsukien" href="http://localhost/nevergiveup/index.php/site/page?view=about" title="Event">
		<span class="menu-item ficon_sukien"></span>
		<span class="padleft">Event</span>
	</a>
</div>
<div class="menu-app">
	<a id="llink" href="http://localhost/nevergiveup/index.php/site/page?view=about" title="Link">
		<span class="menu-item ficon_link"></span>
		<span class="padleft">Link</span>
	</a>
</div>


<div class="menu-app">
    <a id="lscrible" href="http://localhost/nevergiveup/index.php/site/page?view=about" title="VIP profile">
        <span class="menu-item ficon_star"></span>
        <span class="padleft">VIP profile</span>
    </a>
</div>
<div class="l_menu_apps" id="l_menu_apps" style="">
	    
	    <div id="promote_label" class="titappli" style="display: none; "><a href="http://localhost/nevergiveup/index.php/site/page?view=about">Ứng dụng nổi bật</a></div>
	    <script type="text/javascript">
	LeftMenu.app_promote = [''];
</script>
		<div class="titappli"><a href="http://me.zing.vn/wlc#">Ứng dụng</a></div>
<div class="clr"></div>
		   <script type="text/javascript">
	LeftMenu.app_dynamic = ['happycity','happytribe','hangrong','longtuong','thapdienmaiphuc','ngoalong'];
</script>
<div id="left-app-bookmark">
			<div class="menu-app-sub">
		<a id="d_app_happycity" title="App1" href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top">
			<span class="menu-item-sub ficon_happycity"></span><span class="padleft" id="padleft_happycity">App 1<img src="http://localhost/nevergiveup/images/icon_hot.gif" border="0"></span><br class="clr">
		</a>
	</div>
				<div class="menu-app-sub">
		<a id="d_app_happytribe" title="App2" href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top">
			<span class="menu-item-sub ficon_happytribe"></span><span class="padleft" id="padleft_happytribe">App 2<img src="http://localhost/nevergiveup/images/icon_new.gif" border="0"></span><br class="clr">
		</a>
	</div>
				<div class="menu-app-sub">
		<a id="d_app_hangrong" title="App3" href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top">
			<span class="menu-item-sub ficon_hangrong"></span><span class="padleft" id="padleft_hangrong">App 3</span><br class="clr">
		</a>
	</div>
				<div class="menu-app-sub">
		<a id="d_app_longtuong" title="App4" href="http://localhost/nevergiveup/index.php/site/page?view=about" target="_top">
			<span class="menu-item-sub ficon_longtuong"></span><span class="padleft" id="padleft_longtuong">App 4<img src="http://localhost/nevergiveup/images/icon_new.gif" border="0"></span><br class="clr">
		</a>
	</div>
				<div class="menu-app-sub">
		<a id="d_app_thapdienmaiphuc" title="App5" href="http://me.zing.vn/apps/thapdienmaiphuc?_src=m" target="_top">
			<span class="menu-item-sub ficon_thapdienmaiphuc"></span><span class="padleft" id="padleft_thapdienmaiphuc">App 5</span><br class="clr">
		</a>
	</div>
				<div class="menu-app-sub">
		<a id="d_app_ngoalong" title="App6" href="http://me.zing.vn/apps/ngoalong?_src=m" target="_top">
			<span class="menu-item-sub ficon_ngoalong"></span><span class="padleft" id="padleft_ngoalong">App 6</span><br class="clr">
		</a>
	</div>
	</div>	
		    
	<div class="btn-viewmore">
		<input type="button" onclick="">
	</div>
</div>
</div>              
                
                
                
                
                
                

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
