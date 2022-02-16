<?php

namespace PayAnyWay\PayAnyWay\Observer;

class ChangeStatusOrder implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $displayText = $observer->getData('mp_text');
        echo $displayText->getText() . " - Event </br>";
        $displayText->setText('Execute event successfully.');

        return $this;
    }
}
