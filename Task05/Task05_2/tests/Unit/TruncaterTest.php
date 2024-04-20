<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Truncater;

class TruncaterTest extends TestCase
{
    public function testTruncate(): void
    {
        $title = 'Цыбисов Иван Евгеньевич';

        $truncater1 = new Truncater();

        $this->assertSame($title, $truncater1->truncate($title));

        $expected = "Цыбисов Иван...";
        $this->assertSame($expected, $truncater1->truncate($title, ['length' => 12]));

        $this->assertSame($title, $truncater1->truncate($title));

        $expected = "Цыбисов Иван***";
        $this->assertSame($expected, $truncater1->truncate($title, ['length' => 12, 'separator' => '***']));

        $expected = "Цыбисов Иван...";
        $this->assertSame($expected, $truncater1->truncate($title, ['length' => -11]));

        $truncater2 = new Truncater(['length' => 12, 'separator' => '!!!']);

        $expected = "Цыбисов Иван!!!";
        $this->assertSame($expected, $truncater2->truncate($title));
    }
}