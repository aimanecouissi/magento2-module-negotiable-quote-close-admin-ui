# AimaneCouissi_NegotiableQuoteCloseAdminUi

[![Latest Stable Version](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/v)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui) [![Total Downloads](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/downloads)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui) [![Latest Unstable Version](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/v/unstable)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui) [![License](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/license)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui) [![PHP Version Require](http://poser.pugx.org/aimanecouissi/module-negotiable-quote-close-admin-ui/require/php)](https://packagist.org/packages/aimanecouissi/module-negotiable-quote-close-admin-ui)

Adds a **Close** action to the Negotiable Quote Admin UI, including a **Close** button on the quote view page and a **mass action** on the negotiable quotes listing.

## Installation
```bash
composer require aimanecouissi/module-negotiable-quote-close-admin-ui
bin/magento module:enable AimaneCouissi_NegotiableQuoteCloseAdminUi
bin/magento setup:upgrade
bin/magento cache:flush
```

## Usage
Open any negotiable quote in the Admin. A **Close** button is displayed on the quote view page when the current user has permission to close quotes. If the quote is already closed or converted to an order, the button is shown as disabled. From the negotiable quotes listing, one or more quotes can be selected and closed at once using the **Close** mass action.

## Uninstall
```bash
bin/magento module:disable AimaneCouissi_NegotiableQuoteCloseAdminUi
composer remove aimanecouissi/module-negotiable-quote-close-admin-ui
bin/magento setup:upgrade
bin/magento cache:flush
```

## License
[MIT](LICENSE)
