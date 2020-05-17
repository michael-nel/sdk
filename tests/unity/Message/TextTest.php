<?php

namespace CodeBot\Message;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testReturnArray()
    {
        $actual = (new Text(1))->message('Oiiii');
        $expected = [
            'recipient' => ['id' => 1],
            'message' > ['text' => 'Oiiii',
                'metadata' => 'DEVELOPER_DFINED_METADATA'],
        ];

        $this->assertEquals($actual, $expected);
    }

}
