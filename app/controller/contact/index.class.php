<?php
/*
* $Author ��PHPYUN�����Ŷ�
*
* ����: http://www.phpyun.com
*
* ��Ȩ���� 2009-2015 ��Ǩ�γ���Ϣ�������޹�˾������������Ȩ����
*
* ���������δ����Ȩǰ���£�����������ҵ��Ӫ�����ο����Լ��κ���ʽ���ٴη�����
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