<?php

namespace BingAds\Bulk;

/**
 * Gets the status of a bulk download request.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn600289(v=msads.90).aspx GetDetailedBulkDownloadStatus Request Object
 *
 * @used-by BingAdsBulkService::GetDetailedBulkDownloadStatus
 */
final class GetDetailedBulkDownloadStatusRequest
{
    /**
     * The identifier of the download request.
     *
     * @var string
     */
    public $RequestId;
}
