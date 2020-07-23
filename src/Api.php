<?php


namespace AnyComment;

use JsonMapper;
use GuzzleHttp\Client;
use AnyComment\Dto\ResponseEnvelope;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\GuzzleException;
use AnyComment\Exceptions\ClassMapException;
use AnyComment\Exceptions\RequestFailException;

class Api
{
    /**
     * @var AnyCommentConfig
     */
    private $config;

    /**
     * Request constructor.
     * @param AnyCommentConfig $config
     */
    public function __construct(AnyCommentConfig $config)
    {
        $this->config = $config;
    }

    /**
     * Send GET request to provided URI.
     *
     * @param $uri
     * @param array $params
     * @return \Psr\Http\Message\ResponseInterface
     * @throws RequestFailException
     */
    public function get($uri, array $params = [])
    {
        return $this->request('GET', $uri, [
            'query' => $params
        ]);
    }

    /**
     * Send POST request to provided URI.
     * @param string $uri
     * @param array $params
     * @return \Psr\Http\Message\ResponseInterface
     * @throws RequestFailException
     */
    public function post(string $uri, array $params)
    {
        return $this->request('POST', $uri, [
            'form_params' => $params
        ]);
    }

    /**
     * Map response object into a provided class.
     *
     * @param ResponseInterface $response Response object.
     * @param string $classNamespace Class namespace where to map response.
     * @return mixed
     * @throws ClassMapException
     */
    public function mapResponse(ResponseInterface $response, string $classNamespace)
    {
        $array = json_decode((string)$response->getBody(), false);

        try {
            $mapper = new JsonMapper();
            /**
             * @var $mappedEnvelope ResponseEnvelope
             */
            $mappedEnvelope = $mapper->map($array, new ResponseEnvelope());
            $mappedResponse = $mapper->map($mappedEnvelope->response, new $classNamespace);
            $mappedEnvelope->response = $mappedResponse;
        } catch (\JsonMapper_Exception $exception) {
            throw new ClassMapException(
                "Unable to map response into $classNamespace, error: " . $exception->getMessage(),
                0,
                $exception
            );
        }

        return $mappedEnvelope;
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $config
     * @return \Psr\Http\Message\ResponseInterface
     * @throws RequestFailException
     */
    private function request(string $method, string $uri, array $config = [])
    {
        if (!isset($config['query']['token'])) {
            $config['query']['token'] = $this->config->getApiKey();
        }
        $client = $this->getClient();

        try {
            return $client->request($method, $uri, $config);
        } catch (GuzzleException $exception) {
            throw new RequestFailException(
                "Failed to request {$method}: {$uri}, error: " . $exception->getMessage(),
                0,
                $exception
            );
        }
    }

    /**
     * @return Client
     */
    private function getClient()
    {
        return new Client([
            'base_uri' => $this->config->getApiUrl(),
            'timeout' => 8.0,
        ]);
    }
}
