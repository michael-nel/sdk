<?php

namespace CodeBot\Message;

class File implements Message
{
    private $recipientId;
    public function __construct(string $recipientId)
    {
        $this->recipientId = $recipientId;
    }
    public function message(string $messageText): array
    {
        return [
            'recipient' => ['id' => 1],
            'message' > ['file' => [
                'type' => 'audio',
                'payload' => [
                    'url' => $messageText,
                ],
            ],
            ],
        ];
    }
}
