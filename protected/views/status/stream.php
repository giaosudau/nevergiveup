

<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl . '/js/jquery.js');
$cs->registerScriptFile($baseUrl . '/js/easy-editable-text.js');
$cs->registerCssFile($baseUrl . '/css/edit-textbox.css');
?>


<title>Facebook</title>
</head>
<body>
    
    <label class="text_label">Nickname: </label><div class="edit"></div>
    <input type="text" value=<?php //echo $user->nickname    ?> />


    <div class="clear"></div>
    <p>
        <textarea id="status"></textarea>
    </p>
    <p>
        <button id="update">Update</button>
    </p>


    <div id="stream">
        <p class="status">
            This is a status that exists when the page loads
        </p>
    </div>

    <label class="text_label">Date of Birth</label><div class="edit"></div>
    <input type="text" value=<?php //$user->dob    ?> />

    <div class="clear"></div>

    <label class="text_label">About: </label><div class="edit"></div>
    <input type="text" value="Another text label" />

    <div class="clear"></div>

    <label class="text_label">This is the last text label</label><div class="edit"></div>
    <input type="text" value="This is the last text label" />

    <div class="clear"></div>

    <div class="row buttons">
        <?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>


