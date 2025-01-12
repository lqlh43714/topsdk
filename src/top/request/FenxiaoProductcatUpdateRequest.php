<?php
/**
 * TOP API: taobao.fenxiao.productcat.update request
 * 
 * @author auto create
 * @since 1.0, 2023.04.26
 */
class FenxiaoProductcatUpdateRequest
{
	/** 
	 * 代销默认采购价比例，注意：100.00%，则输入为10000
	 **/
	private $agentCostPercent;
	
	/** 
	 * 经销默认采购价比例，注意：100.00%，则输入为10000
	 **/
	private $dealerCostPercent;
	
	/** 
	 * 产品线名称
	 **/
	private $name;
	
	/** 
	 * 产品线ID
	 **/
	private $productLineId;
	
	/** 
	 * 最高零售价比例，注意：100.00%，则输入为10000
	 **/
	private $retailHighPercent;
	
	/** 
	 * 最低零售价比例，注意：100.00%，则输入为10000
	 **/
	private $retailLowPercent;
	
	private $apiParas = array();
	
	public function setAgentCostPercent($agentCostPercent)
	{
		$this->agentCostPercent = $agentCostPercent;
		$this->apiParas["agent_cost_percent"] = $agentCostPercent;
	}

	public function getAgentCostPercent()
	{
		return $this->agentCostPercent;
	}

	public function setDealerCostPercent($dealerCostPercent)
	{
		$this->dealerCostPercent = $dealerCostPercent;
		$this->apiParas["dealer_cost_percent"] = $dealerCostPercent;
	}

	public function getDealerCostPercent()
	{
		return $this->dealerCostPercent;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setProductLineId($productLineId)
	{
		$this->productLineId = $productLineId;
		$this->apiParas["product_line_id"] = $productLineId;
	}

	public function getProductLineId()
	{
		return $this->productLineId;
	}

	public function setRetailHighPercent($retailHighPercent)
	{
		$this->retailHighPercent = $retailHighPercent;
		$this->apiParas["retail_high_percent"] = $retailHighPercent;
	}

	public function getRetailHighPercent()
	{
		return $this->retailHighPercent;
	}

	public function setRetailLowPercent($retailLowPercent)
	{
		$this->retailLowPercent = $retailLowPercent;
		$this->apiParas["retail_low_percent"] = $retailLowPercent;
	}

	public function getRetailLowPercent()
	{
		return $this->retailLowPercent;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.productcat.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->name,10,"name");
		RequestCheckUtil::checkNotNull($this->productLineId,"productLineId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
