<?php

use Tests\TestCase;
use App\Billing\StripePaymentGateway;
use App\Billing\PaymentFailedException;
use Tests\Unit\Billing\PaymentGatewayContractTests;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/** 
 * @group integration
 */
class StipePaymentGatewayTest extends TestCase
{
    use PaymentGatewayContractTests;

    protected function getPaymentGateway()
    {
        return new StripePaymentGateway(config('services.stripe.secret'));
    }
}