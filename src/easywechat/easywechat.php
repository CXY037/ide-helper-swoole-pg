<?php
/**
 * EasyWeChat IDE helper stubs
 * This file is not meant to be executed, it only provides IDE type hints.
 * Fixes type inference for Pay\Application::getClient() and Pay\Client HTTP methods.
 */

namespace EasyWeChat\Pay {

    use EasyWeChat\Kernel\HttpClient\Response;

    class Application
    {
        /**
         * @return Client
         */
        public function getClient(): Client {}
    }

    /**
     * @method Client withMchId(string $value = null)
     * @method Client withMchIdAs(string $key)
     */
    class Client
    {
        /**
         * @return Response
         */
        public function get(string $url, array $options = []): Response {}

        /**
         * @return Response
         */
        public function post(string $url, array $options = []): Response {}

        /**
         * @return Response
         */
        public function postJson(string $url, array $options = []): Response {}

        /**
         * @return Response
         */
        public function postXml(string $url, array $options = []): Response {}

        /**
         * @return Response
         */
        public function put(string $url, array $options = []): Response {}

        /**
         * @return Response
         */
        public function patch(string $url, array $options = []): Response {}

        /**
         * @return Response
         */
        public function patchJson(string $url, array $options = []): Response {}

        /**
         * @return Response
         */
        public function delete(string $url, array $options = []): Response {}
    }
}
