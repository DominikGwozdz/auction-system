<?php

namespace AppBundle\Twig;


class DateExtension extends \Twig_Extension
{
    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter("expireDate", [$this, "expireDate"])
        ];
    }

    //Not working good (shows 0 days if <24h) TODO fix date difference
    /**
     * @param \DateTime $expiresAt
     * @return string
     * @throws \Exception
     */
    public function expireDate(\DateTime $expiresAt)
    {
        if($expiresAt < new \DateTime("-7 days")) {
            return $expiresAt->format("Y-m-d H:i");
        }

        if($expiresAt > new \DateTime("-1 day")) {
            return "za " . $expiresAt->diff(new \DateTime())->days . " dni";
        }

        return "za " . $expiresAt->format("H") . " godz. " . $expiresAt->format("i") . " min.";

    }

}