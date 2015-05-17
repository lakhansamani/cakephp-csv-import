<?php
App::uses('File', 'Utility');
class File extends AppModel {
    //var $name = 'Post';
     public $actsAs = array(
        'Upload.Upload' => array(
            'file' => array(
                'fields' => array(
                    'dir' => 'file_dir'
                )
            )
        )
    );
  
 
}