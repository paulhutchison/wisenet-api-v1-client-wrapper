# Checklist

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checklist_id** | **int** | Primary Id for checklist that is auto generated | [optional] 
**checklist_item_id** | **int** | Associated Checklist Item Id | [optional] 
**entity_name** | **string** | See entity Entities | [optional] 
**record_id** | **int** | The RecordId for the EntityName. E.g. The LearnerId if EntityName &#x3D; Learner. | [optional] 
**date_due** | [**\DateTime**](\DateTime.md) | The due date for the checklist | [optional] 
**date_completed** | [**\DateTime**](\DateTime.md) | The date checklist was completed | [optional] 
**completed_flag** | **bool** | To indicate if the checklist has been completed or not | [optional] 
**staff_name** | **string** | Free text field for staff name associated with checklist | [optional] 
**notes** | **string** | Notes for checklist | [optional] 
**amount** | **double** | Checklist amount used for dollars | [optional] 
**tax_exempt_flag** | **bool** | To indicate if the checklist amount is tax exempt or not | [optional] 
**last_modified_time_stamp** | [**\DateTime**](\DateTime.md) | Date when the checklist was last modified | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

