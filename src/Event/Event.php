<?php

namespace jmowatt\Diary\Event;

use Carbon\Carbon;

class Event
{
    /**
     * @var Carbon
     */
    private $date;

    /**
     * Event constructor.
     * @param Carbon $date
     */
    public function __construct(Carbon $date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }
}