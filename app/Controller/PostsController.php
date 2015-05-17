<?php
class PostsController extends AppController {
    
 
    function import() {
       // $c = $this->Post->import('posts.xls');
    //   $filename="/CSV_IMPORT_CAKEPHP/files/file/file/1/posts.xls";
     //  pr(filename);
        $this->loadModel('File');
        if($this->request->is('post')){
        	pr($this->data);
        	$h_id = $this->request->data['Post']['h_id'];
            //	pr($h_id);die();

        	//$c = $this->Post->import($this->request->data['Post']['file']['name'],$h_id);
        	//$this->File->save($this->data['Post']);
           // $file_id=$this->File->getLastInsertId();
            //pr($file_id);
            //$c = $this->Post->import($this->request->data['Post']['file']['name'],$h_id,$file_id);
           // debug($c);
            $file=$this->data['Post']['file'];
            move_uploaded_file($this->data['Post']['file']['tmp_name'], TMP.'uploads'.DS.'Post'.DS.$this->data['Post']['file']['name']);
             
            $c = $this->Post->import($this->request->data['Post']['file']['name'],$h_id);

        }
    }
}
?>