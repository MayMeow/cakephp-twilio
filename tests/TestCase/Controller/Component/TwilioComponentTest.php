<?php
declare(strict_types=1);

namespace CakephpTwilio\Test\TestCase\Controller\Component;

use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;
use CakephpTwilio\Controller\Component\TwilioComponent;

/**
 * CakephpTwilio\Controller\Component\TwilioComponent Test Case
 */
class TwilioComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CakephpTwilio\Controller\Component\TwilioComponent
     */
    protected $Twilio;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Twilio = new TwilioComponent($registry);
    }

    /**
     * @return void
     */
    public function testComponentClass()
    {
        $this->assertInstanceOf(TwilioComponent::class, $this->Twilio);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Twilio);

        parent::tearDown();
    }
}
