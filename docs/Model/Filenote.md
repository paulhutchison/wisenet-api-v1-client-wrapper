# Filenote

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**filenote_id** | **int** | Primary Id for FilenoteId that is auto generated. | [optional] 
**record_id** | **int** | The RecordId for the EntityName. E.g. The LearnerId if EntityName &#x3D; Learner. | 
**entity_name** | **string** | See entity Entities. | 
**record_info** | **string** | Read only field. Returns info about the record. | [optional] 
**name** | **string** | Name used to identify the Filenote. | 
**description** | **string** | Body of the Filenote in HTML format. | [optional] 
**created_on** | [**\DateTime**](\DateTime.md) | The date the Filenote was created | [optional] 
**created_by_user_id** | **int** | The Id of the User who created the Filenote | [optional] 
**assigned_to** | [**\Phwebs\Wisenet\Model\AssignedToFilenote**](AssignedToFilenote.md) |  | [optional] 
**learner_visibility** | [**\Phwebs\Wisenet\Model\LearnerVisibilityFilenote**](LearnerVisibilityFilenote.md) |  | [optional] 
**trainer_visibility** | [**\Phwebs\Wisenet\Model\TrainerVisibilityFilenote**](TrainerVisibilityFilenote.md) |  | [optional] 
**online_enrolment_visibility** | [**\Phwebs\Wisenet\Model\OnlineEnrolmentVisibilityFilenote**](OnlineEnrolmentVisibilityFilenote.md) |  | [optional] 
**documents** | [**\Phwebs\Wisenet\Model\Document[]**](Document.md) | See Documents and Files section above | [optional] 
**last_modified_time_stamp** | [**\DateTime**](\DateTime.md) | Date when the Filenote was last modified | [optional] 
**last_modified_user_id** | **int** | The UserId of the user who last modified the Filenote | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

