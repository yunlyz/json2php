<?php
namespace jay;

class Demo
{
	/** @var string */
	private $orderName;

	/** @var string */
	private $merchantName;

	/** @var string */
	private $description;

	/** @var string */
	private $couponType;

	/** @var string */
	private $budget;

	/** @var string */
	private $dailyBudget;

	/** @var string */
	private $beginTime;

	/** @var string */
	private $endTime;

	/** @var string */
	private $bankNo;

	/** @var string */
	private $payMethod;


	/**
	 * @return string
	 */
	public function getOrderName()
	{
		return $this->orderName;
	}


	/**
	 * @param $orderName string
	 */
	public function setOrderName($orderName)
	{
		$this->orderName = $orderName;
	}


	/**
	 * @return string
	 */
	public function getMerchantName()
	{
		return $this->merchantName;
	}


	/**
	 * @param $merchantName string
	 */
	public function setMerchantName($merchantName)
	{
		$this->merchantName = $merchantName;
	}


	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}


	/**
	 * @param $description string
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}


	/**
	 * @return string
	 */
	public function getCouponType()
	{
		return $this->couponType;
	}


	/**
	 * @param $couponType string
	 */
	public function setCouponType($couponType)
	{
		$this->couponType = $couponType;
	}


	/**
	 * @return string
	 */
	public function getBudget()
	{
		return $this->budget;
	}


	/**
	 * @param $budget string
	 */
	public function setBudget($budget)
	{
		$this->budget = $budget;
	}


	/**
	 * @return string
	 */
	public function getDailyBudget()
	{
		return $this->dailyBudget;
	}


	/**
	 * @param $dailyBudget string
	 */
	public function setDailyBudget($dailyBudget)
	{
		$this->dailyBudget = $dailyBudget;
	}


	/**
	 * @return string
	 */
	public function getBeginTime()
	{
		return $this->beginTime;
	}


	/**
	 * @param $beginTime string
	 */
	public function setBeginTime($beginTime)
	{
		$this->beginTime = $beginTime;
	}


	/**
	 * @return string
	 */
	public function getEndTime()
	{
		return $this->endTime;
	}


	/**
	 * @param $endTime string
	 */
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
	}


	/**
	 * @return string
	 */
	public function getBankNo()
	{
		return $this->bankNo;
	}


	/**
	 * @param $bankNo string
	 */
	public function setBankNo($bankNo)
	{
		$this->bankNo = $bankNo;
	}


	/**
	 * @return string
	 */
	public function getPayMethod()
	{
		return $this->payMethod;
	}


	/**
	 * @param $payMethod string
	 */
	public function setPayMethod($payMethod)
	{
		$this->payMethod = $payMethod;
	}
}
