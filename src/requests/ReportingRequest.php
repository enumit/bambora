<?php

namespace enumit\Bambora\requests;

class ReportingRequest extends Request
{
    /**
     * Query for transactions using a date range and optional search criteria.
     * This method allows you to page your search results if you are expecting a lot of
     * results to be returned. The page start value begins at 1. If no records are found
     * the API will return a 404 error message. For details on the parameters and allowed
     * values for Criteria please visit the documentation http://dev.na.bambora.com
     *
     * @param $searchQuery
     * @return mixed
     */
    public function getReports($searchQuery)
    {
        return $this->setUrl($this->endpoint->getReportingUrl())
            ->setMethod($this->endpoint->getReportingMethod())
            ->setRequestData($searchQuery)
            ->sendData();
    }
}
