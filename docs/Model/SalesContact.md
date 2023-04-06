# SalesContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sales_contact_id** | **int** | Primary Id for sales contact that is auto generated | [optional] 
**sales_contact_guid** | **string** | The GUID of the sales contact | [optional] 
**first_name** | **string** | First Name of the sales contact | [optional] 
**last_name** | **string** | Last Name of the sales contact | [optional] 
**email** | **string** | Email of the sales contact | [optional] 
**mobile** | **string** | Mobile Number of the sales contact. Accepts numbers only. International format is preferable eg. +614xxxxxxxxx\&quot;. | [optional] 
**phone** | **string** | Phone Number of the sales contact | [optional] 
**position** | **string** | Position of the sales contact | [optional] 
**company** | **string** | Company of the sales contact | [optional] 
**owner_id** | **int** | See entity SalesPersons | [optional] 
**sales_contact_stage_id** | **int** | See combo SalesContactStages | [optional] 
**sales_contact_type_id** | **int** | See combo SalesContactTypes | [optional] 
**notes** | **string** | Any additional notes related to the sales contact | [optional] 
**sales_contact_relationships** | [**\Phwebs\Wisenet\Model\SalesContactRelationship[]**](SalesContactRelationship.md) |  | [optional] 
**created_on** | [**\DateTime**](\DateTime.md) | Date when the sales contact was created | [optional] 
**last_modified_time_stamp** | [**\DateTime**](\DateTime.md) | Date when the sales contact was last modified | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

