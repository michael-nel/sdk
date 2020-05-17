<?php

namespace CodeBot\Message;

class Text implements Message
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
            'message' > ['text' => 'Oiiii',
                'metadata' => 'DEVELOPER_DFINED_METADATA'],
        ];
    }
}
