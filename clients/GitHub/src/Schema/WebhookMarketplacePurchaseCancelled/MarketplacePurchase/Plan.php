<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchaseCancelled\MarketplacePurchase;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Plan
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"bullets":{"type":"array","items":{"type":["string","null"]}},"description":{"type":"string"},"has_free_trial":{"type":"boolean"},"id":{"type":"integer"},"monthly_price_in_cents":{"type":"integer"},"name":{"type":"string"},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string"},"unit_name":{"type":["string","null"]},"yearly_price_in_cents":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"bullets":["generated_bullets"],"description":"generated_description","has_free_trial":false,"id":13,"monthly_price_in_cents":13,"name":"generated_name","price_model":"generated_price_model","unit_name":"generated_unit_name","yearly_price_in_cents":13}';
    /**
     * @var array<string>
     */
    public ?array $bullets;
    public ?string $description;
    public ?bool $has_free_trial;
    public ?int $id;
    public ?int $monthly_price_in_cents;
    public ?string $name;
    public ?string $price_model;
    public ?string $unit_name;
    public ?int $yearly_price_in_cents;
    public function __construct(array $bullets, string $description, bool $has_free_trial, int $id, int $monthly_price_in_cents, string $name, string $price_model, string $unit_name, int $yearly_price_in_cents)
    {
        $this->bullets = $bullets;
        $this->description = $description;
        $this->has_free_trial = $has_free_trial;
        $this->id = $id;
        $this->monthly_price_in_cents = $monthly_price_in_cents;
        $this->name = $name;
        $this->price_model = $price_model;
        $this->unit_name = $unit_name;
        $this->yearly_price_in_cents = $yearly_price_in_cents;
    }
}
