# AimaneCouissi_NegotiableQuoteCloseAdminUi

[![Latest Stable Version](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/v)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui) [![Total Downloads](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/downloads)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui) [![Magento Version](https://img.shields.io/badge/magento-2.4.x-E68718)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui) [![License](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/license)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui) [![PHP Version Require](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/require/php)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui)

Adds **Close** actions to negotiable quote views and the **Admin → Sales → Quotes** grid. The module provides both a
quote view button and a grid mass action for closing negotiable quotes from the Admin.

## Installation

```bash
composer require aimanecouissi/module-negotiable-quote-close-admin-ui
bin/magento module:enable AimaneCouissi_NegotiableQuoteCloseAdminUi
bin/magento setup:upgrade
bin/magento cache:flush
```

## Usage

Open a negotiable quote from the **Admin → Sales → Quotes** grid. The **Close** button appears on the quote view page
when the current Admin user has the **Close** permission, and the button is disabled when the quote is already closed or
converted to an order.

The **Close** mass action appears in the **Admin → Sales → Quotes** grid and closes selected quotes.

## Uninstall

```bash
bin/magento module:disable AimaneCouissi_NegotiableQuoteCloseAdminUi
composer remove aimanecouissi/module-negotiable-quote-close-admin-ui
bin/magento setup:upgrade
bin/magento cache:flush
```

## Changelog

See [CHANGELOG](CHANGELOG.md) for all recent changes.

## License

[MIT](LICENSE)
