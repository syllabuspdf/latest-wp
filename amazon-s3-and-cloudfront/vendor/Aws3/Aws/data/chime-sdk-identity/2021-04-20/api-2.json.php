<?php

namespace DeliciousBrains\WP_Offload_Media\Aws3;

// This file was auto-generated from sdk-root/src/data/chime-sdk-identity/2021-04-20/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2021-04-20', 'endpointPrefix' => 'identity-chime', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Chime SDK Identity', 'serviceId' => 'Chime SDK Identity', 'signatureVersion' => 'v4', 'signingName' => 'chime', 'uid' => 'chime-sdk-identity-2021-04-20'], 'operations' => ['CreateAppInstance' => ['name' => 'CreateAppInstance', 'http' => ['method' => 'POST', 'requestUri' => '/app-instances', 'responseCode' => 201], 'input' => ['shape' => 'CreateAppInstanceRequest'], 'output' => ['shape' => 'CreateAppInstanceResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'CreateAppInstanceAdmin' => ['name' => 'CreateAppInstanceAdmin', 'http' => ['method' => 'POST', 'requestUri' => '/app-instances/{appInstanceArn}/admins', 'responseCode' => 201], 'input' => ['shape' => 'CreateAppInstanceAdminRequest'], 'output' => ['shape' => 'CreateAppInstanceAdminResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'CreateAppInstanceUser' => ['name' => 'CreateAppInstanceUser', 'http' => ['method' => 'POST', 'requestUri' => '/app-instance-users', 'responseCode' => 201], 'input' => ['shape' => 'CreateAppInstanceUserRequest'], 'output' => ['shape' => 'CreateAppInstanceUserResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'DeleteAppInstance' => ['name' => 'DeleteAppInstance', 'http' => ['method' => 'DELETE', 'requestUri' => '/app-instances/{appInstanceArn}', 'responseCode' => 204], 'input' => ['shape' => 'DeleteAppInstanceRequest'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'DeleteAppInstanceAdmin' => ['name' => 'DeleteAppInstanceAdmin', 'http' => ['method' => 'DELETE', 'requestUri' => '/app-instances/{appInstanceArn}/admins/{appInstanceAdminArn}', 'responseCode' => 204], 'input' => ['shape' => 'DeleteAppInstanceAdminRequest'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'DeleteAppInstanceUser' => ['name' => 'DeleteAppInstanceUser', 'http' => ['method' => 'DELETE', 'requestUri' => '/app-instance-users/{appInstanceUserArn}', 'responseCode' => 204], 'input' => ['shape' => 'DeleteAppInstanceUserRequest'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'DeregisterAppInstanceUserEndpoint' => ['name' => 'DeregisterAppInstanceUserEndpoint', 'http' => ['method' => 'DELETE', 'requestUri' => '/app-instance-users/{appInstanceUserArn}/endpoints/{endpointId}', 'responseCode' => 204], 'input' => ['shape' => 'DeregisterAppInstanceUserEndpointRequest'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'DescribeAppInstance' => ['name' => 'DescribeAppInstance', 'http' => ['method' => 'GET', 'requestUri' => '/app-instances/{appInstanceArn}'], 'input' => ['shape' => 'DescribeAppInstanceRequest'], 'output' => ['shape' => 'DescribeAppInstanceResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'DescribeAppInstanceAdmin' => ['name' => 'DescribeAppInstanceAdmin', 'http' => ['method' => 'GET', 'requestUri' => '/app-instances/{appInstanceArn}/admins/{appInstanceAdminArn}', 'responseCode' => 200], 'input' => ['shape' => 'DescribeAppInstanceAdminRequest'], 'output' => ['shape' => 'DescribeAppInstanceAdminResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'DescribeAppInstanceUser' => ['name' => 'DescribeAppInstanceUser', 'http' => ['method' => 'GET', 'requestUri' => '/app-instance-users/{appInstanceUserArn}'], 'input' => ['shape' => 'DescribeAppInstanceUserRequest'], 'output' => ['shape' => 'DescribeAppInstanceUserResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'DescribeAppInstanceUserEndpoint' => ['name' => 'DescribeAppInstanceUserEndpoint', 'http' => ['method' => 'GET', 'requestUri' => '/app-instance-users/{appInstanceUserArn}/endpoints/{endpointId}', 'responseCode' => 200], 'input' => ['shape' => 'DescribeAppInstanceUserEndpointRequest'], 'output' => ['shape' => 'DescribeAppInstanceUserEndpointResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'GetAppInstanceRetentionSettings' => ['name' => 'GetAppInstanceRetentionSettings', 'http' => ['method' => 'GET', 'requestUri' => '/app-instances/{appInstanceArn}/retention-settings', 'responseCode' => 200], 'input' => ['shape' => 'GetAppInstanceRetentionSettingsRequest'], 'output' => ['shape' => 'GetAppInstanceRetentionSettingsResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'ListAppInstanceAdmins' => ['name' => 'ListAppInstanceAdmins', 'http' => ['method' => 'GET', 'requestUri' => '/app-instances/{appInstanceArn}/admins', 'responseCode' => 200], 'input' => ['shape' => 'ListAppInstanceAdminsRequest'], 'output' => ['shape' => 'ListAppInstanceAdminsResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'ListAppInstanceUserEndpoints' => ['name' => 'ListAppInstanceUserEndpoints', 'http' => ['method' => 'GET', 'requestUri' => '/app-instance-users/{appInstanceUserArn}/endpoints', 'responseCode' => 200], 'input' => ['shape' => 'ListAppInstanceUserEndpointsRequest'], 'output' => ['shape' => 'ListAppInstanceUserEndpointsResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'ListAppInstanceUsers' => ['name' => 'ListAppInstanceUsers', 'http' => ['method' => 'GET', 'requestUri' => '/app-instance-users'], 'input' => ['shape' => 'ListAppInstanceUsersRequest'], 'output' => ['shape' => 'ListAppInstanceUsersResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'ListAppInstances' => ['name' => 'ListAppInstances', 'http' => ['method' => 'GET', 'requestUri' => '/app-instances'], 'input' => ['shape' => 'ListAppInstancesRequest'], 'output' => ['shape' => 'ListAppInstancesResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'ListTagsForResource' => ['name' => 'ListTagsForResource', 'http' => ['method' => 'GET', 'requestUri' => '/tags', 'responseCode' => 200], 'input' => ['shape' => 'ListTagsForResourceRequest'], 'output' => ['shape' => 'ListTagsForResourceResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'PutAppInstanceRetentionSettings' => ['name' => 'PutAppInstanceRetentionSettings', 'http' => ['method' => 'PUT', 'requestUri' => '/app-instances/{appInstanceArn}/retention-settings', 'responseCode' => 200], 'input' => ['shape' => 'PutAppInstanceRetentionSettingsRequest'], 'output' => ['shape' => 'PutAppInstanceRetentionSettingsResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'RegisterAppInstanceUserEndpoint' => ['name' => 'RegisterAppInstanceUserEndpoint', 'http' => ['method' => 'POST', 'requestUri' => '/app-instance-users/{appInstanceUserArn}/endpoints', 'responseCode' => 201], 'input' => ['shape' => 'RegisterAppInstanceUserEndpointRequest'], 'output' => ['shape' => 'RegisterAppInstanceUserEndpointResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'TagResource' => ['name' => 'TagResource', 'http' => ['method' => 'POST', 'requestUri' => '/tags?operation=tag-resource', 'responseCode' => 204], 'input' => ['shape' => 'TagResourceRequest'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'UntagResource' => ['name' => 'UntagResource', 'http' => ['method' => 'POST', 'requestUri' => '/tags?operation=untag-resource', 'responseCode' => 204], 'input' => ['shape' => 'UntagResourceRequest'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'UpdateAppInstance' => ['name' => 'UpdateAppInstance', 'http' => ['method' => 'PUT', 'requestUri' => '/app-instances/{appInstanceArn}', 'responseCode' => 200], 'input' => ['shape' => 'UpdateAppInstanceRequest'], 'output' => ['shape' => 'UpdateAppInstanceResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'UpdateAppInstanceUser' => ['name' => 'UpdateAppInstanceUser', 'http' => ['method' => 'PUT', 'requestUri' => '/app-instance-users/{appInstanceUserArn}', 'responseCode' => 200], 'input' => ['shape' => 'UpdateAppInstanceUserRequest'], 'output' => ['shape' => 'UpdateAppInstanceUserResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'UpdateAppInstanceUserEndpoint' => ['name' => 'UpdateAppInstanceUserEndpoint', 'http' => ['method' => 'PUT', 'requestUri' => '/app-instance-users/{appInstanceUserArn}/endpoints/{endpointId}', 'responseCode' => 200], 'input' => ['shape' => 'UpdateAppInstanceUserEndpointRequest'], 'output' => ['shape' => 'UpdateAppInstanceUserEndpointResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnauthorizedClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]]], 'shapes' => ['AllowMessages' => ['type' => 'string', 'enum' => ['ALL', 'NONE']], 'AppInstance' => ['type' => 'structure', 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn'], 'Name' => ['shape' => 'NonEmptyResourceName'], 'CreatedTimestamp' => ['shape' => 'Timestamp'], 'LastUpdatedTimestamp' => ['shape' => 'Timestamp'], 'Metadata' => ['shape' => 'Metadata']]], 'AppInstanceAdmin' => ['type' => 'structure', 'members' => ['Admin' => ['shape' => 'Identity'], 'AppInstanceArn' => ['shape' => 'ChimeArn'], 'CreatedTimestamp' => ['shape' => 'Timestamp']]], 'AppInstanceAdminList' => ['type' => 'list', 'member' => ['shape' => 'AppInstanceAdminSummary']], 'AppInstanceAdminSummary' => ['type' => 'structure', 'members' => ['Admin' => ['shape' => 'Identity']]], 'AppInstanceList' => ['type' => 'list', 'member' => ['shape' => 'AppInstanceSummary']], 'AppInstanceRetentionSettings' => ['type' => 'structure', 'members' => ['ChannelRetentionSettings' => ['shape' => 'ChannelRetentionSettings']]], 'AppInstanceSummary' => ['type' => 'structure', 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn'], 'Name' => ['shape' => 'NonEmptyResourceName'], 'Metadata' => ['shape' => 'Metadata']]], 'AppInstanceUser' => ['type' => 'structure', 'members' => ['AppInstanceUserArn' => ['shape' => 'ChimeArn'], 'Name' => ['shape' => 'UserName'], 'Metadata' => ['shape' => 'Metadata'], 'CreatedTimestamp' => ['shape' => 'Timestamp'], 'LastUpdatedTimestamp' => ['shape' => 'Timestamp']]], 'AppInstanceUserEndpoint' => ['type' => 'structure', 'members' => ['AppInstanceUserArn' => ['shape' => 'SensitiveChimeArn'], 'EndpointId' => ['shape' => 'SensitiveString64'], 'Name' => ['shape' => 'SensitiveString1600'], 'Type' => ['shape' => 'AppInstanceUserEndpointType'], 'ResourceArn' => ['shape' => 'SensitiveChimeArn'], 'EndpointAttributes' => ['shape' => 'EndpointAttributes'], 'CreatedTimestamp' => ['shape' => 'Timestamp'], 'LastUpdatedTimestamp' => ['shape' => 'Timestamp'], 'AllowMessages' => ['shape' => 'AllowMessages'], 'EndpointState' => ['shape' => 'EndpointState']]], 'AppInstanceUserEndpointSummary' => ['type' => 'structure', 'members' => ['AppInstanceUserArn' => ['shape' => 'SensitiveChimeArn'], 'EndpointId' => ['shape' => 'SensitiveString64'], 'Name' => ['shape' => 'SensitiveString1600'], 'Type' => ['shape' => 'AppInstanceUserEndpointType'], 'AllowMessages' => ['shape' => 'AllowMessages'], 'EndpointState' => ['shape' => 'EndpointState']]], 'AppInstanceUserEndpointSummaryList' => ['type' => 'list', 'member' => ['shape' => 'AppInstanceUserEndpointSummary']], 'AppInstanceUserEndpointType' => ['type' => 'string', 'enum' => ['APNS', 'APNS_SANDBOX', 'GCM']], 'AppInstanceUserList' => ['type' => 'list', 'member' => ['shape' => 'AppInstanceUserSummary']], 'AppInstanceUserSummary' => ['type' => 'structure', 'members' => ['AppInstanceUserArn' => ['shape' => 'ChimeArn'], 'Name' => ['shape' => 'UserName'], 'Metadata' => ['shape' => 'Metadata']]], 'BadRequestException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ChannelRetentionSettings' => ['type' => 'structure', 'members' => ['RetentionDays' => ['shape' => 'RetentionDays']]], 'ChimeArn' => ['type' => 'string', 'max' => 1600, 'min' => 5, 'pattern' => 'arn:[a-z0-9-\\.]{1,63}:[a-z0-9-\\.]{0,63}:[a-z0-9-\\.]{0,63}:[a-z0-9-\\.]{0,63}:[^/].{0,1023}'], 'ClientRequestToken' => ['type' => 'string', 'max' => 64, 'min' => 2, 'pattern' => '[-_a-zA-Z0-9]*', 'sensitive' => \true], 'ConflictException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 409], 'exception' => \true], 'CreateAppInstanceAdminRequest' => ['type' => 'structure', 'required' => ['AppInstanceAdminArn', 'AppInstanceArn'], 'members' => ['AppInstanceAdminArn' => ['shape' => 'ChimeArn'], 'AppInstanceArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceArn']]], 'CreateAppInstanceAdminResponse' => ['type' => 'structure', 'members' => ['AppInstanceAdmin' => ['shape' => 'Identity'], 'AppInstanceArn' => ['shape' => 'ChimeArn']]], 'CreateAppInstanceRequest' => ['type' => 'structure', 'required' => ['Name', 'ClientRequestToken'], 'members' => ['Name' => ['shape' => 'NonEmptyResourceName'], 'Metadata' => ['shape' => 'Metadata'], 'ClientRequestToken' => ['shape' => 'ClientRequestToken', 'idempotencyToken' => \true], 'Tags' => ['shape' => 'TagList']]], 'CreateAppInstanceResponse' => ['type' => 'structure', 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn']]], 'CreateAppInstanceUserRequest' => ['type' => 'structure', 'required' => ['AppInstanceArn', 'AppInstanceUserId', 'Name', 'ClientRequestToken'], 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn'], 'AppInstanceUserId' => ['shape' => 'UserId'], 'Name' => ['shape' => 'UserName'], 'Metadata' => ['shape' => 'Metadata'], 'ClientRequestToken' => ['shape' => 'ClientRequestToken', 'idempotencyToken' => \true], 'Tags' => ['shape' => 'TagList']]], 'CreateAppInstanceUserResponse' => ['type' => 'structure', 'members' => ['AppInstanceUserArn' => ['shape' => 'ChimeArn']]], 'DeleteAppInstanceAdminRequest' => ['type' => 'structure', 'required' => ['AppInstanceAdminArn', 'AppInstanceArn'], 'members' => ['AppInstanceAdminArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceAdminArn'], 'AppInstanceArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceArn']]], 'DeleteAppInstanceRequest' => ['type' => 'structure', 'required' => ['AppInstanceArn'], 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceArn']]], 'DeleteAppInstanceUserRequest' => ['type' => 'structure', 'required' => ['AppInstanceUserArn'], 'members' => ['AppInstanceUserArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceUserArn']]], 'DeregisterAppInstanceUserEndpointRequest' => ['type' => 'structure', 'required' => ['AppInstanceUserArn', 'EndpointId'], 'members' => ['AppInstanceUserArn' => ['shape' => 'SensitiveChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceUserArn'], 'EndpointId' => ['shape' => 'SensitiveString64', 'location' => 'uri', 'locationName' => 'endpointId']]], 'DescribeAppInstanceAdminRequest' => ['type' => 'structure', 'required' => ['AppInstanceAdminArn', 'AppInstanceArn'], 'members' => ['AppInstanceAdminArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceAdminArn'], 'AppInstanceArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceArn']]], 'DescribeAppInstanceAdminResponse' => ['type' => 'structure', 'members' => ['AppInstanceAdmin' => ['shape' => 'AppInstanceAdmin']]], 'DescribeAppInstanceRequest' => ['type' => 'structure', 'required' => ['AppInstanceArn'], 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceArn']]], 'DescribeAppInstanceResponse' => ['type' => 'structure', 'members' => ['AppInstance' => ['shape' => 'AppInstance']]], 'DescribeAppInstanceUserEndpointRequest' => ['type' => 'structure', 'required' => ['AppInstanceUserArn', 'EndpointId'], 'members' => ['AppInstanceUserArn' => ['shape' => 'SensitiveString1600', 'location' => 'uri', 'locationName' => 'appInstanceUserArn'], 'EndpointId' => ['shape' => 'SensitiveString64', 'location' => 'uri', 'locationName' => 'endpointId']]], 'DescribeAppInstanceUserEndpointResponse' => ['type' => 'structure', 'members' => ['AppInstanceUserEndpoint' => ['shape' => 'AppInstanceUserEndpoint']]], 'DescribeAppInstanceUserRequest' => ['type' => 'structure', 'required' => ['AppInstanceUserArn'], 'members' => ['AppInstanceUserArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceUserArn']]], 'DescribeAppInstanceUserResponse' => ['type' => 'structure', 'members' => ['AppInstanceUser' => ['shape' => 'AppInstanceUser']]], 'EndpointAttributes' => ['type' => 'structure', 'required' => ['DeviceToken'], 'members' => ['DeviceToken' => ['shape' => 'NonEmptySensitiveString1600'], 'VoipDeviceToken' => ['shape' => 'NonEmptySensitiveString1600']]], 'EndpointState' => ['type' => 'structure', 'required' => ['Status'], 'members' => ['Status' => ['shape' => 'EndpointStatus'], 'StatusReason' => ['shape' => 'EndpointStatusReason']]], 'EndpointStatus' => ['type' => 'string', 'enum' => ['ACTIVE', 'INACTIVE']], 'EndpointStatusReason' => ['type' => 'string', 'enum' => ['INVALID_DEVICE_TOKEN', 'INVALID_PINPOINT_ARN']], 'ErrorCode' => ['type' => 'string', 'enum' => ['BadRequest', 'Conflict', 'Forbidden', 'NotFound', 'PreconditionFailed', 'ResourceLimitExceeded', 'ServiceFailure', 'AccessDenied', 'ServiceUnavailable', 'Throttled', 'Throttling', 'Unauthorized', 'Unprocessable', 'VoiceConnectorGroupAssociationsExist', 'PhoneNumberAssociationsExist']], 'ForbiddenException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 403], 'exception' => \true], 'GetAppInstanceRetentionSettingsRequest' => ['type' => 'structure', 'required' => ['AppInstanceArn'], 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceArn']]], 'GetAppInstanceRetentionSettingsResponse' => ['type' => 'structure', 'members' => ['AppInstanceRetentionSettings' => ['shape' => 'AppInstanceRetentionSettings'], 'InitiateDeletionTimestamp' => ['shape' => 'Timestamp']]], 'Identity' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => 'ChimeArn'], 'Name' => ['shape' => 'ResourceName']]], 'ListAppInstanceAdminsRequest' => ['type' => 'structure', 'required' => ['AppInstanceArn'], 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceArn'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'max-results'], 'NextToken' => ['shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'next-token']]], 'ListAppInstanceAdminsResponse' => ['type' => 'structure', 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn'], 'AppInstanceAdmins' => ['shape' => 'AppInstanceAdminList'], 'NextToken' => ['shape' => 'NextToken']]], 'ListAppInstanceUserEndpointsRequest' => ['type' => 'structure', 'required' => ['AppInstanceUserArn'], 'members' => ['AppInstanceUserArn' => ['shape' => 'SensitiveChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceUserArn'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'max-results'], 'NextToken' => ['shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'next-token']]], 'ListAppInstanceUserEndpointsResponse' => ['type' => 'structure', 'members' => ['AppInstanceUserEndpoints' => ['shape' => 'AppInstanceUserEndpointSummaryList'], 'NextToken' => ['shape' => 'NextToken']]], 'ListAppInstanceUsersRequest' => ['type' => 'structure', 'required' => ['AppInstanceArn'], 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn', 'location' => 'querystring', 'locationName' => 'app-instance-arn'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'max-results'], 'NextToken' => ['shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'next-token']]], 'ListAppInstanceUsersResponse' => ['type' => 'structure', 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn'], 'AppInstanceUsers' => ['shape' => 'AppInstanceUserList'], 'NextToken' => ['shape' => 'NextToken']]], 'ListAppInstancesRequest' => ['type' => 'structure', 'members' => ['MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'max-results'], 'NextToken' => ['shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'next-token']]], 'ListAppInstancesResponse' => ['type' => 'structure', 'members' => ['AppInstances' => ['shape' => 'AppInstanceList'], 'NextToken' => ['shape' => 'NextToken']]], 'ListTagsForResourceRequest' => ['type' => 'structure', 'required' => ['ResourceARN'], 'members' => ['ResourceARN' => ['shape' => 'ChimeArn', 'location' => 'querystring', 'locationName' => 'arn']]], 'ListTagsForResourceResponse' => ['type' => 'structure', 'members' => ['Tags' => ['shape' => 'TagList']]], 'MaxResults' => ['type' => 'integer', 'max' => 50, 'min' => 1], 'Metadata' => ['type' => 'string', 'max' => 1024, 'min' => 0, 'pattern' => '.*', 'sensitive' => \true], 'NextToken' => ['type' => 'string', 'max' => 2048, 'min' => 0, 'pattern' => '.*', 'sensitive' => \true], 'NonEmptyResourceName' => ['type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u007E\\u0085\\u00A0-\\uD7FF\\uE000-\\uFFFD\\u10000-\\u10FFFF]*', 'sensitive' => \true], 'NonEmptySensitiveString1600' => ['type' => 'string', 'max' => 1600, 'min' => 1, 'pattern' => '.*', 'sensitive' => \true], 'PutAppInstanceRetentionSettingsRequest' => ['type' => 'structure', 'required' => ['AppInstanceArn', 'AppInstanceRetentionSettings'], 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceArn'], 'AppInstanceRetentionSettings' => ['shape' => 'AppInstanceRetentionSettings']]], 'PutAppInstanceRetentionSettingsResponse' => ['type' => 'structure', 'members' => ['AppInstanceRetentionSettings' => ['shape' => 'AppInstanceRetentionSettings'], 'InitiateDeletionTimestamp' => ['shape' => 'Timestamp']]], 'RegisterAppInstanceUserEndpointRequest' => ['type' => 'structure', 'required' => ['AppInstanceUserArn', 'Type', 'ResourceArn', 'EndpointAttributes', 'ClientRequestToken'], 'members' => ['AppInstanceUserArn' => ['shape' => 'SensitiveChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceUserArn'], 'Name' => ['shape' => 'SensitiveString1600'], 'Type' => ['shape' => 'AppInstanceUserEndpointType'], 'ResourceArn' => ['shape' => 'SensitiveChimeArn'], 'EndpointAttributes' => ['shape' => 'EndpointAttributes'], 'ClientRequestToken' => ['shape' => 'ClientRequestToken', 'idempotencyToken' => \true], 'AllowMessages' => ['shape' => 'AllowMessages']]], 'RegisterAppInstanceUserEndpointResponse' => ['type' => 'structure', 'members' => ['AppInstanceUserArn' => ['shape' => 'SensitiveChimeArn'], 'EndpointId' => ['shape' => 'SensitiveString64']]], 'ResourceLimitExceededException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ResourceName' => ['type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u007E\\u0085\\u00A0-\\uD7FF\\uE000-\\uFFFD\\u10000-\\u10FFFF]*', 'sensitive' => \true], 'RetentionDays' => ['type' => 'integer', 'max' => 5475, 'min' => 1], 'SensitiveChimeArn' => ['type' => 'string', 'max' => 1600, 'min' => 5, 'pattern' => 'arn:[a-z0-9-\\.]{1,63}:[a-z0-9-\\.]{0,63}:[a-z0-9-\\.]{0,63}:[a-z0-9-\\.]{0,63}:[^/].{0,1023}', 'sensitive' => \true], 'SensitiveString1600' => ['type' => 'string', 'max' => 1600, 'min' => 0, 'pattern' => '.*', 'sensitive' => \true], 'SensitiveString64' => ['type' => 'string', 'max' => 64, 'min' => 0, 'pattern' => '.*', 'sensitive' => \true], 'ServiceFailureException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 500], 'exception' => \true, 'fault' => \true], 'ServiceUnavailableException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 503], 'exception' => \true, 'fault' => \true], 'String' => ['type' => 'string'], 'Tag' => ['type' => 'structure', 'required' => ['Key', 'Value'], 'members' => ['Key' => ['shape' => 'TagKey'], 'Value' => ['shape' => 'TagValue']]], 'TagKey' => ['type' => 'string', 'max' => 128, 'min' => 1, 'sensitive' => \true], 'TagKeyList' => ['type' => 'list', 'member' => ['shape' => 'TagKey'], 'max' => 50, 'min' => 1], 'TagList' => ['type' => 'list', 'member' => ['shape' => 'Tag'], 'max' => 50, 'min' => 1], 'TagResourceRequest' => ['type' => 'structure', 'required' => ['ResourceARN', 'Tags'], 'members' => ['ResourceARN' => ['shape' => 'ChimeArn'], 'Tags' => ['shape' => 'TagList']]], 'TagValue' => ['type' => 'string', 'max' => 256, 'min' => 1, 'sensitive' => \true], 'ThrottledClientException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 429], 'exception' => \true], 'Timestamp' => ['type' => 'timestamp'], 'UnauthorizedClientException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 401], 'exception' => \true], 'UntagResourceRequest' => ['type' => 'structure', 'required' => ['ResourceARN', 'TagKeys'], 'members' => ['ResourceARN' => ['shape' => 'ChimeArn'], 'TagKeys' => ['shape' => 'TagKeyList']]], 'UpdateAppInstanceRequest' => ['type' => 'structure', 'required' => ['AppInstanceArn', 'Name', 'Metadata'], 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceArn'], 'Name' => ['shape' => 'NonEmptyResourceName'], 'Metadata' => ['shape' => 'Metadata']]], 'UpdateAppInstanceResponse' => ['type' => 'structure', 'members' => ['AppInstanceArn' => ['shape' => 'ChimeArn']]], 'UpdateAppInstanceUserEndpointRequest' => ['type' => 'structure', 'required' => ['AppInstanceUserArn', 'EndpointId'], 'members' => ['AppInstanceUserArn' => ['shape' => 'SensitiveChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceUserArn'], 'EndpointId' => ['shape' => 'SensitiveString64', 'location' => 'uri', 'locationName' => 'endpointId'], 'Name' => ['shape' => 'SensitiveString1600'], 'AllowMessages' => ['shape' => 'AllowMessages']]], 'UpdateAppInstanceUserEndpointResponse' => ['type' => 'structure', 'members' => ['AppInstanceUserArn' => ['shape' => 'SensitiveChimeArn'], 'EndpointId' => ['shape' => 'SensitiveString64']]], 'UpdateAppInstanceUserRequest' => ['type' => 'structure', 'required' => ['AppInstanceUserArn', 'Name', 'Metadata'], 'members' => ['AppInstanceUserArn' => ['shape' => 'ChimeArn', 'location' => 'uri', 'locationName' => 'appInstanceUserArn'], 'Name' => ['shape' => 'UserName'], 'Metadata' => ['shape' => 'Metadata']]], 'UpdateAppInstanceUserResponse' => ['type' => 'structure', 'members' => ['AppInstanceUserArn' => ['shape' => 'ChimeArn']]], 'UserId' => ['type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[A-Za-z0-9]([A-Za-z0-9\\:\\-\\_\\.\\@]{0,62}[A-Za-z0-9])?', 'sensitive' => \true], 'UserName' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '.*\\S.*', 'sensitive' => \true]]];
