<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the TacticChannelReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg262851(v=msads.90).aspx TacticChannelReportColumn Value Set
 *
 * @used-by TacticChannelReportRequest
 */
final class TacticChannelReportColumn
{
    /** The Name element of an Account. */
    const AccountName = 'AccountName';
    /** The Number element of an Account. */
    const AccountNumber = 'AccountNumber';
    /** The Id element of an Account. */
    const AccountId = 'AccountId';
    /** The time period of each report row. */
    const TimePeriod = 'TimePeriod';
    /** The name of the advertising tactic. */
    const Tactic = 'Tactic';
    /** The name of the channel provider that displayed the ads. */
    const Channel = 'Channel';
    /** The name of the campaign that you defined on a paid search provider other than Bing Ads. */
    const ThirdPartyCampaign = 'ThirdPartyCampaign';
    /** The name of the ad group that you defined on a paid search provider other than Bing Ads. */
    const ThirdPartyAdGroup = 'ThirdPartyAdGroup';
    /** The keyword to track that you defined on a paid search provider other than Bing Ads. */
    const ThirdPartyTerm = 'ThirdPartyTerm';
    /** The Name element of a Campaign. */
    const CampaignName = 'CampaignName';
    /** The Id element of a Campaign. */
    const CampaignId = 'CampaignId';
    /** The Name element of an AdGroup. */
    const AdGroupName = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AdGroupId = 'AdGroupId';
    /** The Text element of a Keyword. */
    const Keyword = 'Keyword';
    /** The Id element of a Keyword. */
    const KeywordId = 'KeywordId';
    /** The name of your event tracking or campaign analytics goal. */
    const Goal = 'Goal';
    /** The number of times that a user entered step 1 of the funnel. */
    const Step1Count = 'Step1Count';
    /** The number of times that a user entered step 2 of the funnel. */
    const Step2Count = 'Step2Count';
    /** The number of times that a user entered step 3 of the funnel. */
    const Step3Count = 'Step3Count';
    /** The number of times that a user entered step 4 of the funnel. */
    const Step4Count = 'Step4Count';
    /** The number of times that a user entered step 5 of the funnel. */
    const Step5Count = 'Step5Count';
    /** The number of conversions. */
    const Conversions = 'Conversions';
    /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
    const Assists = 'Assists';
    /** The cost per click (CPC) summed for each click. */
    const Spend = 'Spend';
    /** The funnel conversion rate is the percent of conversions completed by users who at minimum visited the webpage corresponding to step 1 of your goal. */
    const FunnelConversionRate = 'FunnelConversionRate';
    /** The revenue optionally reported by the advertiser as a result of conversions. */
    const Revenue = 'Revenue';
    /** The return on ad spend (ROAS). */
    const ReturnOnAdSpend = 'ReturnOnAdSpend';
}
