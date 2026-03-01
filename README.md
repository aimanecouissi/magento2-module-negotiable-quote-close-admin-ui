# AimaneCouissi_NegotiableQuoteCloseAdminUi

[![Latest Stable Version](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/v)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui) [![Total Downloads](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/downloads)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui) [![Magento Version Require](https://img.shields.io/badge/magento-2.4.x-E68718)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui) [![License](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/license)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui) [![PHP Version Require](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/require/php)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui)

Adds a **Close** action to the Negotiable Quotes Admin UI — both as a button on the quote view page and as a mass action on the grid.

## Installation
```bash
composer require aimanecouissi/module-negotiable-quote-close-admin-ui
bin/magento module:enable AimaneCouissi_NegotiableQuoteCloseAdminUi
bin/magento setup:upgrade
bin/magento cache:flush
```

## Usage

Open any negotiable quote in **Admin → Sales → Quotes**. A **Close** button is shown on the view page when the current user has permission to close quotes, and is displayed as disabled if the quote is already closed or converted to an order. Multiple quotes can also be closed at once from the grid using the **Close** mass action.

## Uninstall
```bash
bin/magento module:disable AimaneCouissi_NegotiableQuoteCloseAdminUi
composer remove aimanecouissi/module-negotiable-quote-close-admin-ui
bin/magento setup:upgrade
bin/magento cache:flush
```

## License

[MIT](LICENSE)
