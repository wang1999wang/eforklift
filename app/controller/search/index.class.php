<?php
class index_controller extends common{ 
	function index_action(){
        $adlist=$this->MODEL()->DB_select_all('ad');
        foreach($adlist as $k1=>$v1){
            $adlist_new[$v1['id']]=array('pic'=>FormatPicUrl(array('path'=>$v1['pic_url'])));
        }
        global $CONFIG;
        $q=trim($_GET['q']);
        $M=$this->MODEL('article');
        $datas=$M->DB_select_all('news_base',"title like '%{$q}%' or content like '%{$q}%' or description like '%{$q}%'");
        $this->yunset('datas',$datas);
        $this->yunset('position_list',array(970,1660,2420,3215,3960,4630,5490,6350,7260));
        $this->yunset('adlist',$adlist_new);
		$this->seo("echapinpai");
		$this->yun_tpl(array('index'));
	} 
}
?>