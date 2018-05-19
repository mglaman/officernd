<?php

namespace mglaman\OfficeRND;

class Configuration
{

    protected $slug;

    protected $token;

    public function __construct($slug, $token)
    {
        $this->slug = $slug;
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }
}
