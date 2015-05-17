<?php
	echo $this->Form->create('Post',array('type'=>'file'));
	echo $this->Form->input('h_id',array(
		'options'=>array('1'=>'h1','2'=>'h2'),
	));
	echo $this->Form->input('file',array('type'=>'file'));
	//echo $this->Form->input('file_dir',array('type'=>'hidden'));
	echo $this->Form->end('submit');	
?>