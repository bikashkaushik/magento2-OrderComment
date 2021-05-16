<?php
namespace Kaushikofficial\OrderComment\Observer;

class AddCommentToOrder implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        
        /** @var $order \Magento\Sales\Model\Order * */
        $order = $observer->getEvent()->getOrder();
        
        /** @var $quote \Magento\Quote\Model\Quote * */
        $quote = $observer->getEvent()->getQuote();

        $order->setData('kaushik_order_comment', $quote->getData('kaushik_order_comment'));
    }
}
