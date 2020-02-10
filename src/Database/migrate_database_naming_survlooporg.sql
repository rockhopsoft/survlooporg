
ALTER TABLE SLI_Installations RENAME TO sli_installations;
ALTER TABLE SLI_InstallStats RENAME TO sli_install_stats;
ALTER TABLE SLI_Requests RENAME TO sli_requests;
ALTER TABLE SLI_RequestSkills RENAME TO sli_request_skills;


ALTER TABLE sli_installations CHANGE `InstID` `inst_id` int(11);
ALTER TABLE sli_installations CHANGE `InstName` `inst_name` varchar(255);
ALTER TABLE sli_installations CHANGE `InstDesc` `inst_desc` text;
ALTER TABLE sli_installations CHANGE `InstURL` `inst_url` varchar(255);
ALTER TABLE sli_installations CHANGE `InstOnGitHub` `inst_on_github` varchar(255);
ALTER TABLE sli_installations CHANGE `InstLogoUrl` `inst_logo_url` varchar(255);
ALTER TABLE sli_installations CHANGE `InstIconUrl` `inst_icon_url` varchar(255);
ALTER TABLE sli_installations CHANGE `InstUserID` `inst_user_id` bigint(20);
ALTER TABLE sli_installations CHANGE `InstIPaddy` `inst_ip_addy` varchar(255);
ALTER TABLE sli_installations CHANGE `InstSubmissionProgress` `inst_submission_progress` int(11);
ALTER TABLE sli_installations CHANGE `InstVersionAB` `inst_version_ab` varchar(255);
ALTER TABLE sli_installations CHANGE `InstTreeVersion` `inst_tree_version` varchar(255);
ALTER TABLE sli_installations CHANGE `InstUniqueStr` `inst_unique_str` varchar(255);
ALTER TABLE sli_installations CHANGE `InstIsMobile` `inst_is_mobile` varchar(255);

ALTER TABLE sli_install_stats CHANGE `InstStatID` `inst_stat_id` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatInstallID` `inst_stat_install_id` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatDate` `inst_stat_date` date;
ALTER TABLE sli_install_stats CHANGE `InstStatDbTables` `inst_stat_db_tables` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatDbFields` `inst_stat_db_fields` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatDbLinks` `inst_stat_db_links` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatSurveys` `inst_stat_surveys` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatSurveyNodes` `inst_stat_survey_nodes` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatSurveyNodesMult` `inst_stat_survey_nodes_mult` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatSurveyNodesOpen` `inst_stat_survey_nodes_open` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatSurveyNodesNumb` `inst_stat_survey_nodes_numb` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatPages` `inst_stat_pages` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatPageNodes` `inst_stat_page_nodes` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatUsers` `inst_stat_users` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatSurvey1Complete` `inst_stat_survey1_complete` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatCodeLinesControllers` `inst_stat_lines_controllers` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatCodeLinesViews` `inst_stat_lines_views` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatBytesControllers` `inst_stat_bytes_controllers` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatBytesDatabase` `inst_stat_bytes_database` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatBytesUploads` `inst_stat_bytes_uploads` int(11);
ALTER TABLE sli_install_stats CHANGE `InstStatBytesViews` `inst_stat_bytes_views` int(11);

ALTER TABLE sli_requests CHANGE `ReqID` `req_id` int(11);
ALTER TABLE sli_requests CHANGE `ReqTitle` `req_title` varchar(255);
ALTER TABLE sli_requests CHANGE `ReqDescription` `req_description` text;
ALTER TABLE sli_requests CHANGE `ReqIsCoder` `req_is_coder` tinyint(1);
ALTER TABLE sli_requests CHANGE `ReqEmail` `req_email` varchar(255);
ALTER TABLE sli_requests CHANGE `ReqIsMobile` `req_is_mobile` varchar(255);
ALTER TABLE sli_requests CHANGE `ReqUserID` `req_user_id` bigint(20);
ALTER TABLE sli_requests CHANGE `ReqSubmissionProgress` `req_submission_progress` int(11);
ALTER TABLE sli_requests CHANGE `ReqUniqueStr` `req_unique_str` varchar(255);
ALTER TABLE sli_requests CHANGE `ReqTreeVersion` `req_tree_version` varchar(255);
ALTER TABLE sli_requests CHANGE `ReqVersionAB` `req_version_ab` varchar(255);
ALTER TABLE sli_requests CHANGE `ReqIPaddy` `req_ip_addy` varchar(255);

ALTER TABLE sli_request_skills CHANGE `ReqSklID` `req_skl_id` int(11);
ALTER TABLE sli_request_skills CHANGE `ReqSklRequestID` `req_skl_request_id` int(11);
ALTER TABLE sli_request_skills CHANGE `ReqSklSkill` `req_skl_skill` int(11);











