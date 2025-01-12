<?php
/**
 * TOP API: taobao.onebp.display.adzone.find.bind.page request
 * 
 * @author auto create
 * @since 1.0, 2021.12.21
 */
class OnebpDisplayAdzoneFindBindPageRequest
{
	/** 
	 * 资源位查询条件信息
	 **/
	private $adzoneQuery;
	
	private $apiParas = array();
	
	public function setAdzoneQuery($adzoneQuery)
	{
		$this->adzoneQuery = $adzoneQuery;
		$this->apiParas["adzone_query"] = $adzoneQuery;
	}

	public function getAdzoneQuery()
	{
		return $this->adzoneQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.adzone.find.bind.page";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
