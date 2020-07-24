<?php


namespace AnyComment\Dto;

/**
 * Class ResponseEnvelope is generic response envelope returned from AnyComment REST API.
 *
 * @package AnyComment\Dto
 */
class ResponseEnvelope
{
    const STATUS_OK = 'ok';
    const STATUS_FAIL = 'fail';

    /**
     * @var string Status of the response. See constants above.¬
     */
    public string $status;

    /**
     * @var \stdClass|null
     */
    public $response;

    /**
     * @var null|string Error message when applicable.
     */
    public ?string $error = null;

    /**
     * Check whether response is success.
     *
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->status === self::STATUS_OK;
    }


    /**
     * Check whether response is failure.
     *
     * @return bool
     */
    public function isFailure(): bool
    {
        return $this->status === self::STATUS_FAIL;
    }
}
