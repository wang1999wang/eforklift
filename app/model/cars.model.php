<?php
/*
* $Author ��PHPYUN�����Ŷ�
*
* ����: http://www.phpyun.com
*
* ��Ȩ���� 2009-2015 ��Ǩ�γ���Ϣ�������޹�˾������������Ȩ����
*
* ����������δ����Ȩǰ���£�����������ҵ��Ӫ�����ο����Լ��κ���ʽ���ٴη�����
 */
class cars_model extends model{
	function GetNewsBaseOnce($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
		return $this->DB_select_once("cars_base",$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
	}
	function GetNewsContentOnce($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
		return $this->DB_select_once("cars_content",$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
	}
	function GetNewsGroupOnce($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
		return $this->DB_select_once("cars_group",$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
	}
	function GetNewsGroupList($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
		return $this->DB_select_all("cars_group",$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
	}
	function GetNewsBaseList($Where=array(),$Options=array()){
		$WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
		return $this->DB_select_all("cars_base",$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
	}
    function AddNewsHits($Where=array()){
		$ID=(int)$Where['id'];
		if(!is_numeric($ID)){
			return null;
		}
        return $this->DB_update_all('cars_base',"`hits`=`hits`+'1'","`id`='".$ID."'");
    }
    function GetNewsNum($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_select_num('cars_base',$WhereStr);
    }
    function GetProperty($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('property',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function UpdateNews($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('cars_base',$ValuesStr,$WhereStr);
    }
    function UpdateNewsContent($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('cars_content',$ValuesStr,$WhereStr);
    }
    function AddNews($Values=array()){
        return $this->insert_into('cars_base',$Values);
    }
    function AddNewsContent($Values=array()){
        return $this->insert_into('cars_content',$Values);
    }
    function DeleteNews($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('cars_base',$WhereStr,"");
    }
    function DeleteNewsContent($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('cars_content',$WhereStr,"");
    }
}
?>