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
class cars_controller extends common{ 
	function news_tpl($tpl){
        $this->yunset('get',$_GET);
        $CacheList=$this->MODEL('cache')->GetCache('com');
        $this->yunset($CacheList);
		$this->yuntpl(array('default/cars/'.$tpl));
	}
}
?>