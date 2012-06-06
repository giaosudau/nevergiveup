<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
//$cs->registerScriptFile($baseUrl . '/js/jquery.js');
$cs->registerScriptFile($baseUrl . '/js/jquery.elastic.js');
$cs->registerCssFile($baseUrl . '/css/status.css');
$cs->registerScriptFile($baseUrl . '/js/status.js');
?>

<body>

    <div class="con">
        <div class="pd">
            <div class="share">Share:</div>
            <div class="status">Status</div>
            <div class="loading"></div>
        </div>
        <form>
            <div class="img_top"></div>
            <div class="text_status">
                <textarea class="input_box"></textarea> So what's on your mind?</div>
            <div class="button_outside_border_blue" id="share">
                <div class="button_inside_border_blue">
                    Share
                </div>
            </div>
        </form>

        <div class="clear"></div>
        <div class="load_status_out"></div>
        <ol id="update" class="timeline"> 


            <?php
            $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $dataProvider,
                'summaryText' => '',
                'itemView' => '_view',
            ));
            ?>
        </ol>
    </div>
    
    

</body>




















