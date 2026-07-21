<?php declare(strict_types=1);

namespace LokiCheckout\Uk\Payment\Redirect;

use LokiCheckout\Core\Payment\Redirect\RedirectResolverInterface;
use LokiCheckout\Core\Step\FinalStep\RedirectContext;

class RedirectResolver implements RedirectResolverInterface
{
    public function resolve(RedirectContext $redirectContext): false|string
    {
        return false;
    }
}
