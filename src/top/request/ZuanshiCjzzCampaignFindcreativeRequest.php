<?php
/**
 * TOP API: taobao.zuanshi.cjzz.campaign.findcreative request
 * 
 * @author auto create
 * @since 1.0, 2022.08.08
 */
class ZuanshiCjzzCampaignFindcreativeRequest
{
	/** 
	 * 未知人群探索
	 **/
	private $bizCode;
	
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.cjzz.campaign.findcreative";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
