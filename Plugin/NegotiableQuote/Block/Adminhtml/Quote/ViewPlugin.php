<?php
/**
 * Aimane Couissi - https://aimanecouissi.com
 * Copyright © Aimane Couissi 2026–present. All rights reserved.
 * Licensed under the MIT License. See LICENSE for details.
 */

declare(strict_types=1);

namespace AimaneCouissi\NegotiableQuoteCloseAdminUi\Plugin\NegotiableQuote\Block\Adminhtml\Quote;

use Magento\Framework\View\LayoutInterface;
use Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface;
use Magento\NegotiableQuote\Api\NegotiableQuoteRepositoryInterface;
use Magento\NegotiableQuote\Block\Adminhtml\Quote\View;

class ViewPlugin
{
    private const string ACL_RESOURCE = 'Magento_NegotiableQuote::close';

    /**
     * @param NegotiableQuoteRepositoryInterface $negotiableQuoteRepository
     */
    public function __construct(private readonly NegotiableQuoteRepositoryInterface $negotiableQuoteRepository)
    {
    }

    /**
     * Adds a Close button to the negotiable quote view.
     *
     * @param View $subject
     * @param LayoutInterface $layout
     * @return array
     */
    public function beforeSetLayout(View $subject, LayoutInterface $layout): array
    {
        $quoteId = $subject->getRequest()->getParam('quote_id');
        if (!$quoteId || !$subject->getAuthorization()->isAllowed(self::ACL_RESOURCE)) {
            return [$layout];
        }
        $quote = $this->negotiableQuoteRepository->getById($quoteId);
        $subject->addButton('quote_close', $this->getButtonData($subject, (string)$quote->getStatus()));
        return [$layout];
    }

    /**
     * Returns the button data for the Close button.
     *
     * @param View $subject
     * @param string $status
     * @return array
     */
    private function getButtonData(View $subject, string $status): array
    {
        $isFinished = in_array($status, [
            NegotiableQuoteInterface::STATUS_ORDERED,
            NegotiableQuoteInterface::STATUS_CLOSED
        ], true);
        $buttonData = [
            'label' => __('Close'),
            'sort_order' => 45,
        ];
        if ($isFinished) {
            $buttonData['disabled'] = true;
        } else {
            $closeUrl = $subject->getUrl('quotes/quote/close');
            $confirmationMsg = __('Are you sure you want to close this quote?');
            $buttonData['onclick'] = "confirmSetLocation('$confirmationMsg', '$closeUrl')";
        }
        return $buttonData;
    }
}
