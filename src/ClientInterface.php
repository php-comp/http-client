<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2018/11/21
 * Time: 3:35 PM
 */

namespace PhpComp\Http\Client;

/**
 * Interface ClientInterface
 * @package PhpComp\Http\Client
 */
interface ClientInterface extends \Psr\Http\Client\ClientInterface
{
    // request method list
    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const PATCH = 'PATCH';
    const DELETE = 'DELETE';
    const HEAD = 'HEAD';
    const OPTIONS = 'OPTIONS';
    const TRACE = 'TRACE';
    const SEARCH = 'SEARCH';

    /**
     * @return bool
     */
    public static function isAvailable(): bool ;

    /**
     * @return bool
     */
    public function isOk(): bool ;

    /**
     * @return bool
     */
    public function isFail(): bool ;

    /**
     * @return string
     */
    public function __toString(): string ;

    /**
     * GET
     * {@inheritdoc}
     */
    public function get(string $url, $data = null, array $headers = [], array $options = []);

    /**
     * POST
     * {@inheritdoc}
     */
    public function post(string $url, $data = null, array $headers = [], array $options = []);

    /**
     * PUT
     * {@inheritdoc}
     */
    public function put(string $url, $data = null, array $headers = [], array $options = []);

    /**
     * PATCH
     * {@inheritdoc}
     */
    public function patch(string $url, $data = null, array $headers = [], array $options = []);

    /**
     * DELETE
     * {@inheritdoc}
     */
    public function delete(string $url, $data = null, array $headers = [], array $options = []);

    /**
     * OPTIONS
     * {@inheritdoc}
     */
    public function options(string $url, $data = null, array $headers = [], array $options = []);

    /**
     * HEAD
     * {@inheritdoc}
     */
    public function head(string $url, $data = [], array $headers = [], array $options = []);

    /**
     * TRACE
     * {@inheritdoc}
     */
    public function trace(string $url, $data = [], array $headers = [], array $options = []);

    /**
     * Send request to remote URL
     * @param $url
     * @param array $data
     * @param string $method
     * @param array $headers
     * @param array $options
     * @return self
     */
    public function request(string $url, $data = null, string $method = self::GET, array $headers = [], array $options = []);
}
