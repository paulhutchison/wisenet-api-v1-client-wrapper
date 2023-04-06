# AuditLog

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audit_log_id** | **int** | Primary Id of the Audit Log that is auto generated | [optional] 
**record_id** | **int** | Id of the record Audit Log entry is for | [optional] 
**entity_name** | **string** | Name of entity the Audit Log entry is for. See entities Entity for list of values | [optional] 
**audit_action** | **string** | Audit action of the Audit Log entry. I is for insert, U for update and D for delete. | [optional] 
**last_modified_time_stamp** | [**\DateTime**](\DateTime.md) | Date when the Audit Log entry was created | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

