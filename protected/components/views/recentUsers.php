<ul>
<?php foreach($this->getRecentUsers() as $user): ?>
<div>
<?php echo $user->username; ?> add user.
</div>
<div>
<?php
echo CHtml::link('User Info', CHtml::encode($user->getUrl()));  ?></div> 
<?php endforeach; ?>
</ul>
