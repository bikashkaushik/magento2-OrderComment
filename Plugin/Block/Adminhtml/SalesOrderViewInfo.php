<?php
namespace Kaushikofficial\OrderComment\Plugin\Block\Adminhtml;

class SalesOrderViewInfo
{
    /**
     * @param \Magento\Sales\Block\Adminhtml\Order\View\Info $subject
     * @param string $result
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function afterToHtml(
        \Magento\Sales\Block\Adminhtml\Order\View\Info $subject,
        $result
    ) {
        $commentBlock = $subject->getLayout()->getBlock('order_comments');
        if ($commentBlock !== false) {
            $commentBlock->setOrderComment($subject->getOrder()
                                                   ->getData('kaushik_order_comment'));
            $result = $result . $commentBlock->toHtml();
        }
        return $result;
    }
}
