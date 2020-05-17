<?php

namespace CodeBot;

use GuzzleHttp\Client;

class CallSendApi
{
    const URL = 'https://graph.facebook.com/v2.6/me/messages';
    private $pageAcessToken;

    public function __construct(string $pageAcessToken)
    {
        $this->pageAcessToken = $pageAcessToken;
    }

    public function make(array $message, string $url = null, $method = 'POST'): string
    {
        $client = new Client;
        $url = $url ?? CallSendApi::URL;
        $response = $client->request($method, $url, [
            'json' => $message,
            'query' => ['access_token' => $this->pageAcessToken],
        ]);
        return (string) $response->getBody();
    }
}
