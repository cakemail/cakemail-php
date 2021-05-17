<?php


namespace Cakemail;


use ArrayAccess;
use Iterator;
use Cakemail\Lib\ApiException;

class Response implements ArrayAccess, Iterator  {
    private $obj;
    private $statusCode = null;
    private $headers = null;
    private $position = 0;

    public function __construct($obj) {
        if (is_array($obj) && !isset($obj['data'])) {
            $this->obj = $obj[0];
            $this->statusCode = $obj[1];
            $this->headers = $obj[2];
        } else {
            $this->obj = $obj;
        }
    }

    // the ArrayAccess interface's methods
    public function offsetSet($offset, $value) {
        // no response manipulation
    }

    public function offsetExists($offset) {
        return ($offset == 'pagination' ? isset($this->obj[$offset]) : isset($this->obj['data'][$offset]));
    }

    public function offsetUnset($offset) {
        // no response manipulation
    }

    public function offsetGet($offset) {
        if ($offset === 'pagination') {
            if (isset($this->obj['pagination'])) {
                return $this->obj['pagination'];
            } else {
                throw new ApiException('This method does not have pagination');
            }
        }
        if (isset($this->obj['data'][$offset])) {
            return $this->obj['data'][$offset];
        }
        if (isset($this->{$offset})) {
            return $this->{$offset};
        }
        if (isset($this->obj[$offset])) {
            return $this->obj[$offset];
        }
        throw new ApiException('Parameter not found');
    }

    // now the Iterator interface's methods
    public function rewind() {
        $this->position = 0;
    }

    public function current() {
        return $this->obj['data'][$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function valid() {
        // check if response is not an array
        if (!isset($this->obj['data'][0])) {
            return false;
        }
        return isset($this->obj['data'][$this->position]);
    }
}