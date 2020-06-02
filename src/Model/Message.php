<?php

namespace CakephpTwilio\Model;

use Cake\Core\Configure;

class Message
{
    protected $to;

    protected $from;

    protected $body;

    /**
     * Message constructor.
     * @param $to
     * @param $from
     * @param $body
     */
    public function __construct($to, $body, $from = null)
    {
        $this->to = $to;
        $this->body = $body;

        if ($from == null) {
            $this->from = Configure::read('Twilio.From');
        } else {
            $this->from = $from;
        }
    }

    /**
     * @return mixed
     */
    public function getTo() : string
    {
        return $this->to;
    }

    /**
     * @return mixed
     */
    public function getFrom() : string
    {
        return $this->from;
    }

    /**
     * @return mixed
     */
    public function getBody() :string
    {
        return $this->body;
    }

}
