# LocationFull

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location_id** | **int** | Primary Id for Location that is auto generated | [optional] 
**code** | **string** | Code used to identify the Location | [optional] 
**description** | **string** | Description used to identify the Location | [optional] 
**building_name** | **string** | Building Name of the Location Street Address | [optional] 
**unit_details** | **string** | Unit Details of the Location Street Address | [optional] 
**street_number** | **string** | Street Number of the Location Street Address | [optional] 
**street_name** | **string** | Street Name of the Location Street Address | [optional] 
**suburb** | **string** | Suburb of the Location Street Address | [optional] 
**postcode** | **string** | Postcode of the Location Street Address | [optional] 
**state_id** | **int** | See combo States. State of the Location Street Address | [optional] 
**country_id** | **int** | See combo Countries. Country of the Location Street Address | [optional] 
**effective_from_date** | [**\DateTime**](\DateTime.md) | Date Location is effective from | [optional] 
**effective_to_date** | [**\DateTime**](\DateTime.md) | Date Location is effective to | [optional] 
**capacity** | **int** | Number of people the Location can hold | [optional] 
**location_code_nzqa_alternative** | **string** | NZ only. An alternative Code used to identify the Location for NZQA if different to the main Code | [optional] 
**reference_workplace_id** | **int** | See entity Workplaces. Indicates that this Location is a training delivery location reference for the Workplace.  When WorkplaceId exists, the Location should be updated when changes occur to Workplace address. | [optional] 
**last_modified_time_stamp** | [**\DateTime**](\DateTime.md) | Date when the Location was last modified | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

