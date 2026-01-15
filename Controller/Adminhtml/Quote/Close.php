<?php
/**
 * Aimane Couissi - https://aimanecouissi.com
 * Copyright © Aimane Couissi 2026–present. All rights reserved.
 * Licensed under the MIT License. See LICENSE for details.
 */

declare(strict_types=1);

namespace AimaneCouissi\NegotiableQuoteCloseAdminUi\Controller\Adminhtml\Quote;

use Exception;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\NegotiableQuote\Controller\Adminhtml\Quote;

class Close extends Quote implements HttpGetActionInterface
{
    const string ADMIN_RESOURCE = 'Magento_NegotiableQuote::close';

    /**
     * @inheritDoc
     */
    public function execute(): ResultInterface
    {
        $quote = $this->getQuote();
        if ($quote) {
            try {
                $this->negotiableQuoteManagement->close($quote->getId(), true);
            } catch (Exception $e) {
                $this->logger->critical($e);
                $this->messageManager->addErrorMessage(__('Something went wrong during quote closing.'));
            }
        }
        return $this->getRedirect($quote);
    }
}
