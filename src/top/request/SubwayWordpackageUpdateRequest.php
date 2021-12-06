<?php
/**
 * TOP API: taobao.subway.wordpackage.update request
 * 
 * @author auto create
 * @since 1.0, 2021.05.28
 */
class SubwayWordpackageUpdateRequest
{
	/** 
	 * 推广组Id
	 **/
	private $adgroupId;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 词包列表
	 **/
	private $wordPackageDTOS;
	
	private $apiParas = array();
	
	public function setAdgroupId($adgroupId)
	{
		$this->adgroupId = $adgroupId;
		$this->apiParas["adgroup_id"] = $adgroupId;
	}

	public function getAdgroupId()
	{
		return $this->adgroupId;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setWordPackageDTOS($wordPackageDTOS)
	{
		$this->wordPackageDTOS = $wordPackageDTOS;
		$this->apiParas["word_package_d_t_o_s"] = $wordPackageDTOS;
	}

	public function getWordPackageDTOS()
	{
		return $this->wordPackageDTOS;
	}

	public function getApiMethodName()
	{
		return "taobao.subway.wordpackage.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
