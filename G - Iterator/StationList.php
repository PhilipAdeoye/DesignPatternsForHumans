<?php

namespace Radio;

use Countable;
use Iterator;

require_once 'RadioStation.php';

/**
 * Description of StationList
 *
 * @author Philip Adeoye
 */
class StationList implements Countable, Iterator {
    
    protected $stations = [];
    
    protected $counter;

    public function addStation(RadioStation $station) {
        $this->stations[] = $station;
    }
    
    public function removeStation(RadioStation $toRemove) {
        $toRemoveFrequency = $toRemove->getFrequency();
        
        $this->stations = array_filter($this->stations, function(RadioStation $station) use ($toRemoveFrequency) {
            return $station->getFrequency() !== $toRemoveFrequency;
        });
    }

    public function count(): int {
        return count($this->stations);
    }

    public function current(): RadioStation {
        return $this->stations[$this->counter];
    }

    public function key(): \scalar {
        return $this->counter;
    }

    public function next(): void {
        $this->counter++;
    }

    public function rewind(): void {
        $this->counter = 0;
    }

    public function valid(): bool {
        return isset($this->stations[$this->counter]);
    }

}
