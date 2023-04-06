# Opportunity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**opportunity_id** | **int** | Primary Id for opportunity that is auto generated | [optional] 
**opportunity_guid** | **string** | The GUID of the record | [optional] 
**sales_contact_id** | **int** | See entity SalesContacts | [optional] 
**description** | **string** | Brief description of the opportunity | [optional] 
**notes** | **string** | Additional Notes related to the opportunity | [optional] 
**opportunity_stage_id** | **int** | See combo OpportunityStages | [optional] 
**owner_id** | **int** | See entity SalesPersons | [optional] 
**opportunity_source_id** | **int** | See combo OpportunitySources | [optional] 
**opportunity_type_id** | **int** | See combo OpportunityTypes | [optional] 
**amount** | **double** | Amount of the opportunity | [optional] 
**close_date** | [**\DateTime**](\DateTime.md) | Close Date of the opportunity | [optional] 
**close_lost_reason_id** | **int** | See combo CloseLostReasons | [optional] 
**referring_sales_contact_id** | **int** | See entity Sales Contact | [optional] 
**referring_entity_name** | **string** | Allows either &#x27;Workplace&#x27; or &#x27;Agent&#x27; | [optional] 
**referring_record_id** | **int** | Either the WorkplaceId or AgentId depending on provided ReferringEntityName | [optional] 
**documents** | [**\Phwebs\Wisenet\Model\Document[]**](Document.md) | See Documents and Files section above | [optional] 
**pipeline_id** | **int** | Id of related pipeline | [optional] 
**previous_identifier** | **string** | Previoius identifier | [optional] 
**tag_ids** | [**\Phwebs\Wisenet\Model\TagBasic[]**](TagBasic.md) | Ids used to identify Tags | [optional] 
**created_on** | [**\DateTime**](\DateTime.md) | Date when the opportunity was created | [optional] 
**last_modified_time_stamp** | [**\DateTime**](\DateTime.md) | Date when the opportunity was last modified | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

