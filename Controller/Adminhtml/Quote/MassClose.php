<?php
/**
 * Aimane Couissi - https://aimanecouissi.com
 * Copyright © Aimane Couissi 2026–present. All rights reserved.
 * Licensed under the MIT License. See LICENSE for details.
 */

declare(strict_types=1);

namespace AimaneCouissi\NegotiableQuoteCloseAdminUi\Controller\Adminhtml\Quote;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\NegotiableQuote\Controller\Adminhtml\Quote\AbstractMassAction;

class MassClose extends AbstractMassAction implements HttpPostActionInterface
{
    const string ADMIN_RESOURCE = 'Magento_NegotiableQuote::close';

    /**
     * @inheritDoc
     */
    protected function massAction(AbstractCollection $collection): ResultInterface
    {
        foreach ($collection as $quote) {
            $this->negotiableQuoteManagement->close((int)$quote->getId(), true);
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath($this->getComponentRefererUrl());
        return $resultRedirect;
    }
}
