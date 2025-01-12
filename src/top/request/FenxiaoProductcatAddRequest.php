<?php
/**
 * TOP API: taobao.fenxiao.productcat.add request
 * 
 * @author auto create
 * @since 1.0, 2023.04.26
 */
class FenxiaoProductcatAddRequest
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
		return "taobao.fenxiao.productcat.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentCostPercent,"agentCostPercent");
		RequestCheckUtil::checkNotNull($this->dealerCostPercent,"dealerCostPercent");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,10,"name");
		RequestCheckUtil::checkNotNull($this->retailHighPercent,"retailHighPercent");
		RequestCheckUtil::checkNotNull($this->retailLowPercent,"retailLowPercent");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
