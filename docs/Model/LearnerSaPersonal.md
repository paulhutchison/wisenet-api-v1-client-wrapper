# LearnerSaPersonal

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_active** | **bool** | To indicate if the learner is active or not | [optional] 
**title** | **string** | Preferred title of the learner. For example: Mr, Mrs, Miss, Ms, Dr, Rev, Hon etc. | [optional] 
**first_name** | **string** | First name of learner | [optional] 
**middle_name** | **string** | Middle name of learner | [optional] 
**last_name** | **string** | Last name of learner | [optional] 
**suffix** | **string** | Suffix of the learner. For example: Jr, Sr etc. | [optional] 
**preferred_named** | **string** | Preferred informal name of learner | [optional] 
**previous_name** | **string** | Maiden name or any previous name of the learner | [optional] 
**date_of_birth** | [**\DateTime**](\DateTime.md) | Date of the birth of the learner | [optional] 
**gender_id** | **int** | See combos Genders | [optional] 
**national_identifier** | **string** | National Identifier of the learner | [optional] 
**alternative_identifier** | **string** | Alternative National Identifier of the learner | [optional] 
**alternative_identifier_type_id** | **int** | See combo SaAlternativeIdentifierTypes | [optional] 
**learner_alt1_number** | **string** | RefExternal. An alternative custom identifier for external purposes | [optional] 
**learner_alt2_number** | **string** | Ref External Plus. An alternative custom identifier | [optional] 
**learner_number** | **string** | Auto generated unique learner identifier | [optional] 
**learner_export_number** | **string** | Auto generated unique learner identifier used for export purposes | [optional] 
**driver_license** | **string** | Driver License | [optional] 
**target_group_id** | **int** | See combo TargetGroupsLearner | [optional] 
**sync_to_xero** | **bool** | To indicate if the learner should be synced to Xero or not | [optional] 
**previous_info** | [**\Phwebs\Wisenet\Model\LearnerSaPersonalPreviousInfo**](LearnerSaPersonalPreviousInfo.md) |  | [optional] 
**phone_numbers** | [**\Phwebs\Wisenet\Model\LearnerSaPersonalPhoneNumbers**](LearnerSaPersonalPhoneNumbers.md) |  | [optional] 
**email_addresses** | [**\Phwebs\Wisenet\Model\LearnerSaPersonalEmailAddresses**](LearnerSaPersonalEmailAddresses.md) |  | [optional] 
**website_url** | **string** | Any website URL relevant to learner contact details | [optional] 
**request_privacy** | **bool** | To indicate if the learner requests privacy or not | [optional] 
**street_address** | [**\Phwebs\Wisenet\Model\LearnerSaPersonalStreetAddress**](LearnerSaPersonalStreetAddress.md) |  | [optional] 
**postal_address** | [**\Phwebs\Wisenet\Model\LearnerSaPersonalPostalAddress**](LearnerSaPersonalPostalAddress.md) |  | [optional] 
**permanent_address** | [**\Phwebs\Wisenet\Model\LearnerSaPersonalPermanentAddress**](LearnerSaPersonalPermanentAddress.md) |  | [optional] 
**healthcare_opt_out** | **bool** | To indicate if the learner opts out of health care | [optional] 
**healthcare_number** | **string** | Health Care Number of the learner | [optional] 
**healthcare_expiry_date** | [**\DateTime**](\DateTime.md) | Expiry Date of learner&#x27;s health care | [optional] 
**general_notes** | **string** | General notes related to the learner | [optional] 
**special_requirements** | **string** | Any special requirements that the learner might have | [optional] 
**vaccine_status_id** | **int** | Vaccine Status Id | [optional] 
**vaccine_status_notes** | **string** | Vaccination notes | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

