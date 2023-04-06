# LearnerAuDemographics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employment_status_id** | **int** | See combo EmploymentStatuses | [optional] 
**occupation_identifier_id** | **int** | See combo OccupationIdentifiers | [optional] 
**industry_of_employment_id** | **int** | See combo IndustriesOfEmployment | [optional] 
**is_still_at_school** | **string** | To indicate if the learner is at secondary school or not | [optional] 
**highest_school_level_completed_id** | **int** | See combo HighestSchoolLevelCompleted | [optional] 
**highest_school_level_completed_year** | **string** | The year the highest school level was completed | [optional] 
**country_of_birth_id** | **int** | See combo Countries | [optional] 
**has_prior_educational_achievement_id** | **int** | See combo PriorEducationFlags | [optional] 
**prior_education_achievements** | [**\Phwebs\Wisenet\Model\LearnerAuDemographicsPriorEducationAchievement[]**](LearnerAuDemographicsPriorEducationAchievement.md) |  | [optional] 
**primary_language_id** | **int** | See combo Languages | [optional] 
**spoken_english_proficiency_id** | **int** | See combo SpokenEnglishProficiencies | [optional] 
**english_test_score** | [**\Phwebs\Wisenet\Model\LearnerAuDemographicsEnglishTestScore**](LearnerAuDemographicsEnglishTestScore.md) |  | [optional] 
**disability_flag_id** | **int** | See combo DisabilityFlags | [optional] 
**disability_ids** | **int[]** | Obsolete. Use Disabilities instead | [optional] 
**disabilities** | [**\Phwebs\Wisenet\Model\LearnerAuDemographicsDisability[]**](LearnerAuDemographicsDisability.md) |  | [optional] 
**disability_advice_required** | **bool** | To indicate if the learner opted for advice on support services, equipment and facilities | [optional] 
**indigenous_status_id** | **int** | See combo FhIndigenousStatuses | [optional] 
**fee_help** | [**\Phwebs\Wisenet\Model\LearnerAuDemographicsFeeHelp**](LearnerAuDemographicsFeeHelp.md) |  | [optional] 
**citizenships** | [**\Phwebs\Wisenet\Model\LearnerAuDemographicsCitizenship[]**](LearnerAuDemographicsCitizenship.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

