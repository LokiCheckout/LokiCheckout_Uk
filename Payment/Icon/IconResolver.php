<?php declare(strict_types=1);

namespace LokiCheckout\Uk\Payment\Icon;

use Magento\Framework\Module\Manager as ModuleManager;
use LokiCheckout\Core\Payment\Icon\IconResolverContext;
use LokiCheckout\Core\Payment\Icon\IconResolverInterface;

class IconResolver implements IconResolverInterface
{
    public function __construct(
        private ModuleManager $moduleManager,
    ) {
    }

    public function resolve(IconResolverContext $iconResolverContext): false|string
    {
        $paymentMethodCode = $iconResolverContext->getPaymentMethodCode();
        if (false === $this->moduleManager->isEnabled('@todo')) {
            return false;
        }

        if (!preg_match('/^@todo(.*)$/', $paymentMethodCode)) {
            return false;
        }

        return false;
    }
}
