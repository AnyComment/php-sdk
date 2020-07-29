<?php


namespace AnyComment\Dto\Envelopes;

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
    public $status;

    /**
     * @var \stdClass|null
     */
    public $response;

    /**
     * @var mixed Error message when applicable.
     */
    public $error = null;

    /**
     * Check whether response is success.
     *
     * @return bool
     */
    public function isSuccess()
    {
        return $this->status === self::STATUS_OK;
    }


    /**
     * Check whether response is failure.
     *
     * @return bool
     */
    public function isFailure()
    {
        return $this->status === self::STATUS_FAIL;
    }
}
