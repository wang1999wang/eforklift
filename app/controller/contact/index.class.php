<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2015 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class index_controller extends common{ 
	function index_action(){	
        $adlist=$this->MODEL()->DB_select_all('ad');
        foreach($adlist as $k1=>$v1){
            $adlist_new[$v1['id']]=array('pic'=>FormatPicUrl(array('path'=>$v1['pic_url'])));
        }
        $this->yunset('adlist',$adlist_new);
		$this->seo("lianxiwomen");
		$this->yun_tpl(array('index'));
	} 
}
?>