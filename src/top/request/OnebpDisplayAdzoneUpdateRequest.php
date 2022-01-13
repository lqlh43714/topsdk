<?php
/**
 * TOP API: taobao.onebp.display.adzone.update request
 * 
 * @author auto create
 * @since 1.0, 2021.12.21
 */
class OnebpDisplayAdzoneUpdateRequest
{
	/** 
	 * list
	 **/
	private $dataList;
	
	private $apiParas = array();
	
	public function setDataList($dataList)
	{
		$this->dataList = $dataList;
		$this->apiParas["data_list"] = $dataList;
	}

	public function getDataList()
	{
		return $this->dataList;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.adzone.update";
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