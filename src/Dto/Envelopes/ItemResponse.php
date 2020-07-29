<?php


namespace AnyComment\Dto\Envelopes;


class ItemResponse
{
    /**
     * @var array
     */
    public $items;

    /**
     * @var \AnyComment\Dto\Envelopes\ItemResponseLinks
     */
    public $_links;

    /**
     * @var \AnyComment\Dto\Envelopes\ItemResponseMeta
     */
    public $_meta;
}