# Workplace

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**workplace_id** | **int** | Primary Id for Workplace that is auto generated | [optional] 
**code** | **string** | Code used to identify the Workplace | [optional] 
**description** | **string** | Description used to identify the Workplace | [optional] 
**legal_name** | **string** | Legal Name used to identify the Workplace | [optional] 
**archived_flag** | **bool** | To indicate if Workplace is Archived | [optional] 
**phone** | **string** | Workplace Phone | [optional] 
**fax** | **string** | Workplace Fax | [optional] 
**email** | **string** | Workplace Email | [optional] 
**website** | **string** | Workplace Website | [optional] 
**street_address** | [**\Phwebs\Wisenet\Model\WorkplaceStreetAddress**](WorkplaceStreetAddress.md) |  | [optional] 
**postal_address** | [**\Phwebs\Wisenet\Model\WorkplacePostalAddress**](WorkplacePostalAddress.md) |  | [optional] 
**company_number** | **string** | Company Number of the Workplace | [optional] 
**business_number** | **string** | Business Number of the Workplace | [optional] 
**school_flag** | **bool** | To indicate if the Workplace is a School | [optional] 
**school_type_id** | **int** | Returns all School Type records. Used in Workplace. | [optional] 
**anzsic_id** | **int** | Notes regarding the Workplace | [optional] 
**general_notes** | **string** | Notes regarding the Workplace | [optional] 
**workplace_classification_id** | **int** | Returns all Wrokplace Classifications records. Used in Workplace. | [optional] 
**industry_size_id** | **int** | Returns all Industry Size records. Used in Workplace. | [optional] 
**head_office_workplace_id** | **int** | See entity Workplaces | [optional] 
**sync_to_sugar_crm** | **bool** | To indicate if the Workplace should be synced to SugarCrm or not | [optional] 
**sync_to_xero** | **bool** | To indicate if the Workplace should be synced to Xero or not | [optional] 
**accreditation_type_id** | **int** | Returns all Accreditation Type records. Used in Workplace. | [optional] 
**location_id** | **int** | Indicates that the Workplace is a training delivery location. When LocationId exists, the Location should be updated when changes occur to Workplace address. This field is only editable from the Location endpoint. | [optional] 
**last_modified_time_stamp** | [**\DateTime**](\DateTime.md) | Date when the Workplace was last modified | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

