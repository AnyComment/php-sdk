<?php


namespace AnyComment;

use InvalidArgumentException;
use JsonMapper;
use GuzzleHttp\Client;
use AnyComment\Dto\ResponseEnvelope;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\GuzzleException;
use AnyComment\Exceptions\ClassMapException;
use AnyComment\Exceptions\RequestFailException;

class Request
{
    /**
     * @var Config
     */
    private $config;

    /**
     * Request constructor.
     * @param Config $config
     */
    public function __construct($config)
    {
        if (!$config instanceof Config) {
            throw new InvalidArgumentException('Invalid config instance provided');
        }
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
    public function get($uri, $params = [])
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
    public function post($uri, $params = [])
    {
        if (empty($params)) {
            throw new \InvalidArgumentException('Missing POST parameters.');
        }

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
    public function mapResponse($response, $classNamespace)
    {
        if (!$response instanceof ResponseInterface) {
            throw new InvalidArgumentException('Wrong reponse instance provided');
        }

        if (empty($classNamespace)) {
            throw new \InvalidArgumentException('Mapping class namespace is not provided');
        }

        $array = json_decode((string)$response->getBody(), false);

        try {
            $mapper = new JsonMapper();
            /**
             * @var $mappedEnvelope ResponseEnvelope
             */
            $mappedEnvelope = $mapper->map($array, new ResponseEnvelope());
            $mappedResponse = !empty($mappedEnvelope->response)
                ? $mapper->map($mappedEnvelope->response, new $classNamespace)
                : null;
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
    private function request($method, $uri, $config = [])
    {
        if (!in_array($method, ['GET', 'POST', 'PUT', 'DELETE'])) {
            throw new \InvalidArgumentException('Unsupported request method type: ' . $method);
        }

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
            'base_uri' => $this->config->getBaseApiUrl(),
            'timeout' => 8.0,
        ]);
    }
}
