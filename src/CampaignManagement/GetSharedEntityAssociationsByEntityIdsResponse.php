<?php

namespace BingAds\CampaignManagement;

/**
 * Gets associations between a campaign and a shared entity such as a negative keyword list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743771(v=msads.90).aspx GetSharedEntityAssociationsByEntityIds Response Object
 *
 * @uses SharedEntityAssociation
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
 */
final class GetSharedEntityAssociationsByEntityIdsResponse
{
    /**
     * An array of objects that associate a campaign with a shared entity such as a negative keyword list.
     *
     * @var SharedEntityAssociation[]
     */
    public $Associations;
    /**
     * An array of BatchError objects that contain details for any associations that were not successfully returned.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
