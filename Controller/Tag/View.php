<?php

namespace Mageplaza\Blog\Controller\Tag;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Store\Model\StoreManagerInterface;
use Mageplaza\Blog\Helper\Data as HelperBlog;
use Magento\Customer\Api\AccountManagementInterface;
use Magento\Customer\Model\Url as CustomerUrl;
use Magento\Customer\Model\Session;
use Symfony\Component\Config\Definition\Exception\Exception;

class View extends Action
{
	protected $resultPageFactory;
	protected $helperBlog;
	protected $accountManagement;
	protected $customerUrl;
	protected $session;
	protected $helperData;
	protected $storeManager;

	/**
	 * View constructor.
	 * @param \Magento\Framework\App\Action\Context $context
	 * @param \Magento\Store\Model\StoreManagerInterface $storeManager
	 * @param \Mageplaza\Blog\Helper\Data $helperBlog
	 * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
	 * @param \Magento\Customer\Api\AccountManagementInterface $accountManagement
	 * @param \Magento\Customer\Model\Url $customerUrl
	 * @param \Magento\Customer\Model\Session $customerSession
	 */
	public function __construct(
		Context $context,
		StoreManagerInterface $storeManager,
		HelperBlog $helperBlog,
		PageFactory $resultPageFactory,
		AccountManagementInterface $accountManagement,
		CustomerUrl $customerUrl,
		Session $customerSession
	) {
		parent::__construct($context);
		$this->storeManager      = $storeManager;
		$this->helperBlog      = $helperBlog;
		$this->resultPageFactory = $resultPageFactory;
		$this->accountManagement = $accountManagement;
		$this->customerUrl       = $customerUrl;
		$this->session           = $customerSession;

	}

	/**
	 * @return \Magento\Framework\View\Result\Page
	 */
	public function execute()
	{
		return $this->resultPageFactory->create();
	}


}