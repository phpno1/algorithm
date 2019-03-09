<?php
/**
 * @package   Phpno1\Test\DataStructure
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\DataStructure;


use Phpno1\Algorithm\DataStructure\Queue;
use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{

    private $queue;


    public function test()
    {
        $this->queue = new Queue();

        $i = 0;
        while ($i < 10) {
            $this->queue->enqueue("Queue" . $i);

            $i++;
        }
    }
}