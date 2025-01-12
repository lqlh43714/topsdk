<?php
/**
 * TOP API: taobao.onebp.dkx.report.report.account.daylist request
 * 
 * @author auto create
 * @since 1.0, 2022.03.28
 */
class OnebpDkxReportReportAccountDaylistRequest
{
	/** 
	 * 请求体
	 **/
	private $apiServiceContext;
	
	/** 
	 * 报表查询参数
	 **/
	private $reportQuery;
	
	private $apiParas = array();
	
	public function setApiServiceContext($apiServiceContext)
	{
		$this->apiServiceContext = $apiServiceContext;
		$this->apiParas["api_service_context"] = $apiServiceContext;
	}

	public function getApiServiceContext()
	{
		return $this->apiServiceContext;
	}

	public function setReportQuery($reportQuery)
	{
		$this->reportQuery = $reportQuery;
		$this->apiParas["report_query"] = $reportQuery;
	}

	public function getReportQuery()
	{
		return $this->reportQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.dkx.report.report.account.daylist";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->apiServiceContext,"apiServiceContext");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
