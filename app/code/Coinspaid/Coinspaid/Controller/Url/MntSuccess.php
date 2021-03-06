<?php

namespace Coinspaid\Coinspaid\Controller\Url;

class MntSuccess extends \Magento\Framework\App\Action\Action
{
    /** @var \Magento\Framework\View\Result\PageFactory  */
    protected $resultPageFactory;


    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }


    /**
     * Load the page defined in view/frontend/layout/Coinspaid_url_mntsuccess.xml
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        //load model

        /* @var $paymentMethod \Magento\Authorizenet\Model\DirectPost */
        $paymentMethod = $this->_objectManager->create('Coinspaid\Coinspaid\Model\Coinspaid');

        //get request data
        $data = $this->getRequest()->getPostValue();

        $paymentMethod->processSuccess($data);
        //return $this->resultPageFactory->create();
    }

}
