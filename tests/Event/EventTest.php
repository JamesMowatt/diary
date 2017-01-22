<?php

namespace jmowatt\Diary\Event;

use Carbon\Carbon;

class EventTest extends \PHPUnit_Framework_TestCase
{
    public function test_get_date_returns_instance_of_carbon()
    {
        $event = new Event(new Carbon());

        $this->assertInstanceOf(Carbon::class, $event->getDate());
    }
}
