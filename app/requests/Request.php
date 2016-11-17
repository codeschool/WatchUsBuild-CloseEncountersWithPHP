<?php
namespace App\Requests;

/**
 * Request Class
 */
class Request
{
    public $id;
    public $depart_date;
    public $return_date;
    public $reason;
    public $email;

    public function __construct($data = null)
    {
        if (is_array($data)) {
            $this->depart_date = $data['depart_date'];
            $this->return_date = $data['return_date'];
            $this->email = $data['email'];
            $this->reason = $data['reason'];
        }
    }
}
