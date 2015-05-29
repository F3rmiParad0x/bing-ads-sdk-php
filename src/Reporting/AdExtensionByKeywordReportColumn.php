<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the AdExtensionByKeywordReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj713610(v=msads.90).aspx AdExtensionByKeywordReportColumn Value Set
 *
 * @used-by AdExtensionByKeywordReportRequest
 */
final class AdExtensionByKeywordReportColumn
{
    /** The Name element of an Account. */
    const ACCOUNT_NAME = 'AccountName';
    /** The time period of each report row. */
    const TIME_PERIOD = 'TimePeriod';
    /** The Name element of a Campaign. */
    const CAMPAIGN_NAME = 'CampaignName';
    /** The Id element of a Campaign. */
    const CAMPAIGN_ID = 'CampaignId';
    /** The Name element of an AdGroup. */
    const AD_GROUP_NAME = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AD_GROUP_ID = 'AdGroupId';
    /** The Text element of a Keyword. */
    const KEYWORD = 'Keyword';
    /** The Id element of a Keyword. */
    const KEYWORD_ID = 'KeywordId';
    /** The type name that corresponds to the AdExtensionTypeId column. */
    const AD_EXTENSION_TYPE = 'AdExtensionType';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DEVICE_TYPE = 'DeviceType';
    /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
    const DEVICE_OS = 'DeviceOS';
    /** The ad extension item that the user clicked. */
    const CLICK_TYPE = 'ClickType';
    /** The number of times an ad has been displayed on search results pages. */
    const IMPRESSIONS = 'Impressions';
    /** The number of times that the ads in the account were clicked. */
    const CLICKS = 'Clicks';
    /** The number of billable and non-billable times that the ad extension was clicked. */
    const TOTAL_CLICKS = 'TotalClicks';
    /** The number of conversions. */
    const CONVERSIONS = 'Conversions';
    /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
    const CTR = 'Ctr';
    /** The average cost per click (CPC). */
    const AVERAGE_CPC = 'AverageCpc';
    /** The conversion rate as a percentage. */
    const CONVERSION_RATE = 'ConversionRate';
    /** The cost per click (CPC) summed for each click. */
    const SPEND = 'Spend';
    /** The Id element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
    const AD_EXTENSION_ID = 'AdExtensionId';
    /** The Version element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
    const AD_EXTENSION_VERSION = 'AdExtensionVersion';
    /** The Number element of an Account. */
    const ACCOUNT_NUMBER = 'AccountNumber';
    /** The Id element of an Account. */
    const ACCOUNT_ID = 'AccountId';
    /** The MatchType element of a Keyword. */
    const BID_MATCH_TYPE = 'BidMatchType';
    /** The match type used to deliver an ad. */
    const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';
    /** The Network element of an AdGroup. */
    const NETWORK = 'Network';
    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
    const TOP_VS_OTHER = 'TopVsOther';
    /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
    const ASSISTS = 'Assists';
    /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
    const EXTENDED_COST = 'ExtendedCost';
    /** The revenue optionally reported by the advertiser as a result of conversions. */
    const REVENUE = 'Revenue';
    /** The return on ad spend (ROAS). */
    const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';
    /** The cost per conversion. */
    const COST_PER_CONVERSION = 'CostPerConversion';
    /** The cost per assist. */
    const COST_PER_ASSIST = 'CostPerAssist';
    /** The revenue per conversion. */
    const REVENUE_PER_CONVERSION = 'RevenuePerConversion';
    /** The revenue per assist. */
    const REVENUE_PER_ASSIST = 'RevenuePerAssist';
}