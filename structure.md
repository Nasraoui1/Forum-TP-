# Project Structure

ForumTP
├── bin
│   └── console
├── config
│   ├── packages
│   │   ├── cache.yaml
│   │   ├── doctrine_migrations.yaml
│   │   ├── doctrine.yaml
│   │   ├── framework.yaml
│   │   ├── mailer.yaml
│   │   ├── reset_password.yaml
│   │   ├── routing.yaml
│   │   ├── security.yaml
│   │   ├── twig.yaml
│   │   └── validator.yaml
│   ├── routes
│   │   ├── framework.yaml
│   │   └── security.yaml
│   ├── bundles.php
│   ├── preload.php
│   ├── routes.yaml
│   └── services.yaml
├── migrations
│   ├── .gitignore
│   ├── Version20250516134223.php
│   └── Version20250516141405.php
├── public
│   └── index.php
├── src
│   ├── Controller
│   │   ├── .gitignore
│   │   ├── AdminController.php
│   │   ├── CategoryController.php
│   │   ├── HomeController.php
│   │   ├── LanguageController.php
│   │   ├── ProfileController.php
│   │   ├── RegistrationController.php
│   │   ├── ReplyController.php
│   │   ├── ResetPasswordController.php
│   │   ├── SecurityController.php
│   │   └── TopicController.php
│   ├── DataFixtures
│   │   ├── AppFixtures.php
│   │   ├── CategoryFixtures.php
│   │   ├── LanguageFixtures.php
│   │   ├── ReplyFixtures.php
│   │   ├── TopicFixtures.php
│   │   └── UserFixtures.php
│   ├── Entity
│   │   ├── .gitignore
│   │   ├── Category.php
│   │   ├── Language.php
│   │   ├── Reply.php
│   │   ├── ResetPasswordRequest.php
│   │   ├── Topic.php
│   │   └── User.php
│   ├── Form
│   │   ├── CategoryTypeForm.php
│   │   ├── ChangePasswordForm.php
│   │   ├── LanguageForm.php
│   │   ├── LanguageTypeForm.php
│   │   ├── ProfileTypeForm.php
│   │   ├── RegistrationForm.php
│   │   ├── ReplyTypeForm.php
│   │   ├── ResetPasswordRequestForm.php
│   │   └── TopicTypeForm.php
│   ├── Repository
│   │   ├── .gitignore
│   │   ├── CategoryRepository.php
│   │   ├── LanguageRepository.php
│   │   ├── ReplyRepository.php
│   │   ├── ResetPasswordRequestRepository.php
│   │   ├── TopicRepository.php
│   │   └── UserRepository.php
│   ├── Security
│   │   ├── EmailVerifier.php
│   │   └── LoginFormAuthenticator.php
│   ├── BannedUserSubcriber.php
│   └── Kernel.php
├── templates
│   ├── admin
│   │   └── index.html.twig
│   ├── category
│   │   ├── index.html.twig
│   │   └── show.html.twig
│   ├── home
│   │   └── index.html.twig
│   ├── language
│   │   ├── _delete_form.html.twig
│   │   ├── _form.html.twig
│   │   ├── edit.html.twig
│   │   ├── index.html.twig
│   │   ├── new.html.twig
│   │   └── show.html.twig
│   ├── profile
│   │   ├── edit.html.twig
│   │   └── index.html.twig
│   ├── registration
│   │   ├── confirmation_email.html.twig
│   │   └── register.html.twig
│   ├── reply
│   │   └── index.html.twig
│   ├── reset_password
│   │   ├── check_email.html.twig
│   │   ├── email.html.twig
│   │   ├── request.html.twig
│   │   └── reset.html.twig
│   ├── security
│   │   └── login.html.twig
│   ├── topic
│   │   ├── index.html.twig
│   │   ├── new.html.twig
│   │   └── show.html.twig
│   └── base.html.twig
├── var
│   ├── cache
│   │   └── dev
│   │       ├── Container4XzGTsD
│   │       │   ├── App_KernelDevDebugContainer.php
│   │       │   ├── EntityManagerGhostEbeb667.php
│   │       │   ├── get_Console_Command_About_LazyService.php
│   │       │   ├── get_Console_Command_AssetsInstall_LazyService.php
│   │       │   ├── get_Console_Command_CacheClear_LazyService.php
│   │       │   ├── get_Console_Command_CachePoolClear_LazyService.php
│   │       │   ├── get_Console_Command_CachePoolDelete_LazyService.php
│   │       │   ├── get_Console_Command_CachePoolInvalidateTags_LazyService.php
│   │       │   ├── get_Console_Command_CachePoolList_LazyService.php
│   │       │   ├── get_Console_Command_CachePoolPrune_LazyService.php
│   │       │   ├── get_Console_Command_CacheWarmup_LazyService.php
│   │       │   ├── get_Console_Command_ConfigDebug_LazyService.php
│   │       │   ├── get_Console_Command_ConfigDumpReference_LazyService.php
│   │       │   ├── get_Console_Command_ContainerDebug_LazyService.php
│   │       │   ├── get_Console_Command_ContainerLint_LazyService.php
│   │       │   ├── get_Console_Command_DebugAutowiring_LazyService.php
│   │       │   ├── get_Console_Command_DotenvDebug_LazyService.php
│   │       │   ├── get_Console_Command_EventDispatcherDebug_LazyService.php
│   │       │   ├── get_Console_Command_FormDebug_LazyService.php
│   │       │   ├── get_Console_Command_MailerTest_LazyService.php
│   │       │   ├── get_Console_Command_RouterDebug_LazyService.php
│   │       │   ├── get_Console_Command_RouterMatch_LazyService.php
│   │       │   ├── get_Console_Command_SecretsDecryptToLocal_LazyService.php
│   │       │   ├── get_Console_Command_SecretsEncryptFromLocal_LazyService.php
│   │       │   ├── get_Console_Command_SecretsGenerateKey_LazyService.php
│   │       │   ├── get_Console_Command_SecretsList_LazyService.php
│   │       │   ├── get_Console_Command_SecretsRemove_LazyService.php
│   │       │   ├── get_Console_Command_SecretsSet_LazyService.php
│   │       │   ├── get_Console_Command_ValidatorDebug_LazyService.php
│   │       │   ├── get_Console_Command_YamlLint_LazyService.php
│   │       │   ├── get_Debug_Security_Voter_Security_Access_AuthenticatedVoterService.php
│   │       │   ├── get_Debug_Security_Voter_Security_Access_RoleHierarchyVoterService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_DefaultService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_RequestService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_ServiceService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_SessionService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_VariadicService.php
│   │       │   ├── get_Debug_ValueResolver_Doctrine_Orm_EntityValueResolverService.php
│   │       │   ├── get_Debug_ValueResolver_Security_SecurityTokenValueResolverService.php
│   │       │   ├── get_Debug_ValueResolver_Security_UserValueResolverService.php
│   │       │   ├── get_DoctrineMigrations_CurrentCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_DiffCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_DumpSchemaCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_ExecuteCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_GenerateCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_LatestCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_MigrateCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_RollupCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_StatusCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_SyncMetadataCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_UpToDateCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_VersionCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_VersionsCommand_LazyService.php
│   │       │   ├── get_Errored_RAYLtitService.php
│   │       │   ├── get_Errored_ZLEIovTService.php
│   │       │   ├── get_Maker_AutoCommand_MakeAuth_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeCommand_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeController_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeCrud_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeDockerDatabase_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeEntity_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeFixtures_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeForm_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeListener_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeMessage_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeMessengerMiddleware_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeMigration_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeRegistrationForm_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeResetPassword_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeSchedule_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeSecurityCustom_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeSecurityFormLogin_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeSerializerEncoder_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeSerializerNormalizer_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeStimulusController_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeTest_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeTwigComponent_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeTwigExtension_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeUser_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeValidator_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeVoter_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeWebhook_LazyService.php
│   │       │   ├── get_Security_Command_DebugFirewall_LazyService.php
│   │       │   ├── get_Security_Command_UserPasswordHash_LazyService.php
│   │       │   ├── get_Security_RequestMatcher_KLbKLHaService.php
│   │       │   ├── get_ServiceLocator_09A2dTtService.php
│   │       │   ├── get_ServiceLocator_0aVz0s0Service.php
│   │       │   ├── get_ServiceLocator_0R0BvAFService.php
│   │       │   ├── get_ServiceLocator_1SGciKService.php
│   │       │   ├── get_ServiceLocator_3opkxl5Service.php
│   │       │   ├── get_ServiceLocator_A6Xp9TdService.php
│   │       │   ├── get_ServiceLocator_CsMkqUaService.php
│   │       │   ├── get_ServiceLocator_DA0eNDfService.php
│   │       │   ├── get_ServiceLocator_JpvOrpTService.php
│   │       │   ├── get_ServiceLocator_Mhqdd2rService.php
│   │       │   ├── get_ServiceLocator_O0VupqYService.php
│   │       │   ├── get_ServiceLocator_O2p6Lk7Service.php
│   │       │   ├── get_ServiceLocator_QgQ8wqGService.php
│   │       │   ├── get_ServiceLocator_RqzNmSYService.php
│   │       │   ├── get_ServiceLocator_RSTd_NAService.php
│   │       │   ├── get_ServiceLocator_RvMNZGhService.php
│   │       │   ├── get_ServiceLocator_TcmhPFjService.php
│   │       │   ├── get_ServiceLocator_UVvF4gLService.php
│   │       │   ├── get_ServiceLocator_Y4Zrx_Service.php
│   │       │   ├── get_ServiceLocator_YC9eRGAService.php
│   │       │   ├── get_ServiceLocator_ZKjvjQmService.php
│   │       │   ├── get_Twig_Command_Debug_LazyService.php
│   │       │   ├── get_Twig_Command_Lint_LazyService.php
│   │       │   ├── getAdminControllerService.php
│   │       │   ├── getCache_App_TaggableService.php
│   │       │   ├── getCache_AppClearerService.php
│   │       │   ├── getCache_AppService.php
│   │       │   ├── getCache_GlobalClearerService.php
│   │       │   ├── getCache_SecurityIsGrantedAttributeExpressionLanguageService.php
│   │       │   ├── getCache_SystemClearerService.php
│   │       │   ├── getCache_SystemService.php
│   │       │   ├── getCache_ValidatorExpressionLanguageService.php
│   │       │   ├── getCacheWarmerService.php
│   │       │   ├── getCategoryControllerService.php
│   │       │   ├── getCategoryRepositoryService.php
│   │       │   ├── getCategoryService.php
│   │       │   ├── getCategoryTypeFormService.php
│   │       │   ├── getChangePasswordFormService.php
│   │       │   ├── getConfigBuilder_WarmerService.php
│   │       │   ├── getConsole_Command_AboutService.php
│   │       │   ├── getConsole_Command_AssetsInstallService.php
│   │       │   ├── getConsole_Command_CacheClearService.php
│   │       │   ├── getConsole_Command_CachePoolClearService.php
│   │       │   ├── getConsole_Command_CachePoolDeleteService.php
│   │       │   ├── getConsole_Command_CachePoolInvalidateTagsService.php
│   │       │   ├── getConsole_Command_CachePoolListService.php
│   │       │   ├── getConsole_Command_CachePoolPruneService.php
│   │       │   ├── getConsole_Command_CacheWarmupService.php
│   │       │   ├── getConsole_Command_ConfigDebugService.php
│   │       │   ├── getConsole_Command_ConfigDumpReferenceService.php
│   │       │   ├── getConsole_Command_ContainerDebugService.php
│   │       │   ├── getConsole_Command_ContainerLintService.php
│   │       │   ├── getConsole_Command_DebugAutowiringService.php
│   │       │   ├── getConsole_Command_DotenvDebugService.php
│   │       │   ├── getConsole_Command_EventDispatcherDebugService.php
│   │       │   ├── getConsole_Command_FormDebugService.php
│   │       │   ├── getConsole_Command_MailerTestService.php
│   │       │   ├── getConsole_Command_RouterDebugService.php
│   │       │   ├── getConsole_Command_RouterMatchService.php
│   │       │   ├── getConsole_Command_SecretsDecryptToLocalService.php
│   │       │   ├── getConsole_Command_SecretsEncryptFromLocalService.php
│   │       │   ├── getConsole_Command_SecretsGenerateKeyService.php
│   │       │   ├── getConsole_Command_SecretsListService.php
│   │       │   ├── getConsole_Command_SecretsRemoveService.php
│   │       │   ├── getConsole_Command_SecretsSetService.php
│   │       │   ├── getConsole_Command_ValidatorDebugService.php
│   │       │   ├── getConsole_Command_YamlLintService.php
│   │       │   ├── getConsole_CommandLoaderService.php
│   │       │   ├── getConsole_ErrorListenerService.php
│   │       │   ├── getContainer_EnvVarProcessorService.php
│   │       │   ├── getContainer_EnvVarProcessorsLocatorService.php
│   │       │   ├── getContainer_GetRoutingConditionServiceService.php
│   │       │   ├── getController_TemplateAttributeListenerService.php
│   │       │   ├── getDebug_ErrorHandlerConfiguratorService.php
│   │       │   ├── getDebug_Security_Firewall_Authenticator_MainService.php
│   │       │   ├── getDebug_Security_Voter_VoteListenerService.php
│   │       │   ├── getDoctrine_CacheClearMetadataCommandService.php
│   │       │   ├── getDoctrine_CacheClearQueryCacheCommandService.php
│   │       │   ├── getDoctrine_CacheClearResultCommandService.php
│   │       │   ├── getDoctrine_CacheCollectionRegionCommandService.php
│   │       │   ├── getDoctrine_ClearEntityRegionCommandService.php
│   │       │   ├── getDoctrine_ClearQueryRegionCommandService.php
│   │       │   ├── getDoctrine_DatabaseCreateCommandService.php
│   │       │   ├── getDoctrine_DatabaseDropCommandService.php
│   │       │   ├── getDoctrine_Dbal_DefaultConnection_EventManagerService.php
│   │       │   ├── getDoctrine_Dbal_DefaultConnectionService.php
│   │       │   ├── getDoctrine_FixturesLoadCommandService.php
│   │       │   ├── getDoctrine_MappingInfoCommandService.php
│   │       │   ├── getDoctrine_Migrations_DependencyFactoryService.php
│   │       │   ├── getDoctrine_Migrations_MigrationsFactoryService.php
│   │       │   ├── getDoctrine_Orm_Command_EntityManagerProviderService.php
│   │       │   ├── getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php
│   │       │   ├── getDoctrine_Orm_DefaultEntityManagerService.php
│   │       │   ├── getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php
│   │       │   ├── getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php
│   │       │   ├── getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php
│   │       │   ├── getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php
│   │       │   ├── getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php
│   │       │   ├── getDoctrine_Orm_ProxyCacheWarmerService.php
│   │       │   ├── getDoctrine_Orm_Validator_UniqueService.php
│   │       │   ├── getDoctrine_QueryDqlCommandService.php
│   │       │   ├── getDoctrine_QuerySqlCommandService.php
│   │       │   ├── getDoctrine_SchemaCreateCommandService.php
│   │       │   ├── getDoctrine_SchemaDropCommandService.php
│   │       │   ├── getDoctrine_SchemaUpdateCommandService.php
│   │       │   ├── getDoctrine_SchemaValidateCommandService.php
│   │       │   ├── getDoctrine_UlidGeneratorService.php
│   │       │   ├── getDoctrine_UuidGeneratorService.php
│   │       │   ├── getDoctrineMigrations_CurrentCommandService.php
│   │       │   ├── getDoctrineMigrations_DiffCommandService.php
│   │       │   ├── getDoctrineMigrations_DumpSchemaCommandService.php
│   │       │   ├── getDoctrineMigrations_ExecuteCommandService.php
│   │       │   ├── getDoctrineMigrations_GenerateCommandService.php
│   │       │   ├── getDoctrineMigrations_LatestCommandService.php
│   │       │   ├── getDoctrineMigrations_MigrateCommandService.php
│   │       │   ├── getDoctrineMigrations_RollupCommandService.php
│   │       │   ├── getDoctrineMigrations_StatusCommandService.php
│   │       │   ├── getDoctrineMigrations_SyncMetadataCommandService.php
│   │       │   ├── getDoctrineMigrations_UpToDateCommandService.php
│   │       │   ├── getDoctrineMigrations_VersionCommandService.php
│   │       │   ├── getDoctrineMigrations_VersionsCommandService.php
│   │       │   ├── getDoctrineService.php
│   │       │   ├── getErrorControllerService.php
│   │       │   ├── getForm_ChoiceListFactory_CachedService.php
│   │       │   ├── getForm_FactoryService.php
│   │       │   ├── getForm_Listener_PasswordHasherService.php
│   │       │   ├── getForm_RegistryService.php
│   │       │   ├── getForm_ServerParamsService.php
│   │       │   ├── getForm_Type_ChoiceService.php
│   │       │   ├── getForm_Type_ColorService.php
│   │       │   ├── getForm_Type_EntityService.php
│   │       │   ├── getForm_Type_FileService.php
│   │       │   ├── getForm_Type_FormService.php
│   │       │   ├── getForm_TypeExtension_CsrfService.php
│   │       │   ├── getForm_TypeExtension_Form_HttpFoundationService.php
│   │       │   ├── getForm_TypeExtension_Form_PasswordHasherService.php
│   │       │   ├── getForm_TypeExtension_Form_ValidatorService.php
│   │       │   ├── getForm_TypeExtension_Password_PasswordHasherService.php
│   │       │   ├── getForm_TypeGuesser_DoctrineService.php
│   │       │   ├── getForm_TypeGuesser_ValidatorService.php
│   │       │   ├── getFragment_Renderer_InlineService.php
│   │       │   ├── getHomeControllerService.php
│   │       │   ├── getLanguage2Service.php
│   │       │   ├── getLanguageControllerService.php
│   │       │   ├── getLanguageFormService.php
│   │       │   ├── getLanguageRepositoryService.php
│   │       │   ├── getLanguageService.php
│   │       │   ├── getLanguageTypeFormService.php
│   │       │   ├── getLoaderInterfaceService.php
│   │       │   ├── getLoginFormAuthenticatorService.php
│   │       │   ├── getMailer_MailerService.php
│   │       │   ├── getMailer_TransportFactory_NativeService.php
│   │       │   ├── getMailer_TransportFactory_NullService.php
│   │       │   ├── getMailer_TransportFactory_SendmailService.php
│   │       │   ├── getMailer_TransportFactory_SmtpService.php
│   │       │   ├── getMailer_TransportsService.php
│   │       │   ├── getMaker_AutoCommand_MakeAuthService.php
│   │       │   ├── getMaker_AutoCommand_MakeCommandService.php
│   │       │   ├── getMaker_AutoCommand_MakeControllerService.php
│   │       │   ├── getMaker_AutoCommand_MakeCrudService.php
│   │       │   ├── getMaker_AutoCommand_MakeDockerDatabaseService.php
│   │       │   ├── getMaker_AutoCommand_MakeEntityService.php
│   │       │   ├── getMaker_AutoCommand_MakeFixturesService.php
│   │       │   ├── getMaker_AutoCommand_MakeFormService.php
│   │       │   ├── getMaker_AutoCommand_MakeListenerService.php
│   │       │   ├── getMaker_AutoCommand_MakeMessageService.php
│   │       │   ├── getMaker_AutoCommand_MakeMessengerMiddlewareService.php
│   │       │   ├── getMaker_AutoCommand_MakeMigrationService.php
│   │       │   ├── getMaker_AutoCommand_MakeRegistrationFormService.php
│   │       │   ├── getMaker_AutoCommand_MakeResetPasswordService.php
│   │       │   ├── getMaker_AutoCommand_MakeScheduleService.php
│   │       │   ├── getMaker_AutoCommand_MakeSecurityCustomService.php
│   │       │   ├── getMaker_AutoCommand_MakeSecurityFormLoginService.php
│   │       │   ├── getMaker_AutoCommand_MakeSerializerEncoderService.php
│   │       │   ├── getMaker_AutoCommand_MakeSerializerNormalizerService.php
│   │       │   ├── getMaker_AutoCommand_MakeStimulusControllerService.php
│   │       │   ├── getMaker_AutoCommand_MakeTestService.php
│   │       │   ├── getMaker_AutoCommand_MakeTwigComponentService.php
│   │       │   ├── getMaker_AutoCommand_MakeTwigExtensionService.php
│   │       │   ├── getMaker_AutoCommand_MakeUserService.php
│   │       │   ├── getMaker_AutoCommand_MakeValidatorService.php
│   │       │   ├── getMaker_AutoCommand_MakeVoterService.php
│   │       │   ├── getMaker_AutoCommand_MakeWebhookService.php
│   │       │   ├── getMaker_DoctrineHelperService.php
│   │       │   ├── getMaker_EntityClassGeneratorService.php
│   │       │   ├── getMaker_FileLinkFormatterService.php
│   │       │   ├── getMaker_FileManagerService.php
│   │       │   ├── getMaker_GeneratorService.php
│   │       │   ├── getMaker_Renderer_FormTypeRendererService.php
│   │       │   ├── getManagerRegistryAwareConnectionProviderService.php
│   │       │   ├── getProfileControllerService.php
│   │       │   ├── getPropertyAccessorService.php
│   │       │   ├── getRedirectControllerService.php
│   │       │   ├── getRegistrationControllerService.php
│   │       │   ├── getRegistrationFormService.php
│   │       │   ├── getReplyControllerService.php
│   │       │   ├── getReplyRepositoryService.php
│   │       │   ├── getResetPasswordControllerService.php
│   │       │   ├── getResetPasswordRemoveExpiredCommandService.php
│   │       │   ├── getResetPasswordRequestFormService.php
│   │       │   ├── getResetPasswordRequestRepositoryService.php
│   │       │   ├── getRouter_CacheWarmerService.php
│   │       │   ├── getRouting_LoaderService.php
│   │       │   ├── getRunSqlCommandService.php
│   │       │   ├── getSecrets_VaultService.php
│   │       │   ├── getSecurity_AccessListenerService.php
│   │       │   ├── getSecurity_AccessMapService.php
│   │       │   ├── getSecurity_AuthenticationUtilsService.php
│   │       │   ├── getSecurity_Authenticator_Manager_MainService.php
│   │       │   ├── getSecurity_Authenticator_ManagersLocatorService.php
│   │       │   ├── getSecurity_Authenticator_RememberMe_MainService.php
│   │       │   ├── getSecurity_Authenticator_RememberMeHandler_MainService.php
│   │       │   ├── getSecurity_ChannelListenerService.php
│   │       │   ├── getSecurity_Command_DebugFirewallService.php
│   │       │   ├── getSecurity_Command_UserPasswordHashService.php
│   │       │   ├── getSecurity_Csrf_TokenManagerService.php
│   │       │   ├── getSecurity_Csrf_TokenStorageService.php
│   │       │   ├── getSecurity_Firewall_EventDispatcherLocatorService.php
│   │       │   ├── getSecurity_Firewall_Map_Context_DevService.php
│   │       │   ├── getSecurity_Firewall_Map_Context_MainService.php
│   │       │   ├── getSecurity_HelperService.php
│   │       │   ├── getSecurity_HttpUtilsService.php
│   │       │   ├── getSecurity_Listener_CheckAuthenticatorCredentialsService.php
│   │       │   ├── getSecurity_Listener_CheckRememberMeConditions_MainService.php
│   │       │   ├── getSecurity_Listener_CsrfProtectionService.php
│   │       │   ├── getSecurity_Listener_Main_UserProviderService.php
│   │       │   ├── getSecurity_Listener_PasswordMigratingService.php
│   │       │   ├── getSecurity_Listener_RememberMe_MainService.php
│   │       │   ├── getSecurity_Listener_Session_MainService.php
│   │       │   ├── getSecurity_Listener_UserChecker_MainService.php
│   │       │   ├── getSecurity_Listener_UserProviderService.php
│   │       │   ├── getSecurity_Logout_Listener_CsrfTokenClearingService.php
│   │       │   ├── getSecurity_Logout_Listener_Default_MainService.php
│   │       │   ├── getSecurity_PasswordHasherFactoryService.php
│   │       │   ├── getSecurity_RouteLoader_LogoutService.php
│   │       │   ├── getSecurity_User_Provider_Concrete_AppUserProviderService.php
│   │       │   ├── getSecurity_UserCheckerLocatorService.php
│   │       │   ├── getSecurity_UserPasswordHasherService.php
│   │       │   ├── getSecurity_Validator_UserPasswordService.php
│   │       │   ├── getSecurityControllerService.php
│   │       │   ├── getServicesResetterService.php
│   │       │   ├── getSession_FactoryService.php
│   │       │   ├── getSession_Handler_NativeService.php
│   │       │   ├── getSymfonycasts_ResetPassword_CleanerService.php
│   │       │   ├── getTemplateControllerService.php
│   │       │   ├── getTopicControllerService.php
│   │       │   ├── getTopicRepositoryService.php
│   │       │   ├── getTopicService.php
│   │       │   ├── getTwig_Command_DebugService.php
│   │       │   ├── getTwig_Command_LintService.php
│   │       │   ├── getTwig_Form_EngineService.php
│   │       │   ├── getTwig_Form_RendererService.php
│   │       │   ├── getTwig_Mailer_MessageListenerService.php
│   │       │   ├── getTwig_Runtime_HttpkernelService.php
│   │       │   ├── getTwig_Runtime_SecurityCsrfService.php
│   │       │   ├── getTwig_TemplateCacheWarmerService.php
│   │       │   ├── getTwigService.php
│   │       │   ├── getUserRepositoryService.php
│   │       │   ├── getUserService.php
│   │       │   ├── getValidator_BuilderService.php
│   │       │   ├── getValidator_EmailService.php
│   │       │   ├── getValidator_ExpressionService.php
│   │       │   ├── getValidator_Mapping_CacheWarmerService.php
│   │       │   ├── getValidator_NoSuspiciousCharactersService.php
│   │       │   ├── getValidator_NotCompromisedPasswordService.php
│   │       │   ├── getValidator_WhenService.php
│   │       │   ├── getValidatorService.php
│   │       │   ├── removed-ids.php
│   │       │   └── RequestPayloadValueResolverGhost3590451.php
│   │       ├── Container6BZf9xg
│   │       │   ├── App_KernelDevDebugContainer.php
│   │       │   ├── EntityManagerGhostEbeb667.php
│   │       │   ├── get_Console_Command_About_LazyService.php
│   │       │   ├── get_Console_Command_AssetsInstall_LazyService.php
│   │       │   ├── get_Console_Command_CacheClear_LazyService.php
│   │       │   ├── get_Console_Command_CachePoolClear_LazyService.php
│   │       │   ├── get_Console_Command_CachePoolDelete_LazyService.php
│   │       │   ├── get_Console_Command_CachePoolInvalidateTags_LazyService.php
│   │       │   ├── get_Console_Command_CachePoolList_LazyService.php
│   │       │   ├── get_Console_Command_CachePoolPrune_LazyService.php
│   │       │   ├── get_Console_Command_CacheWarmup_LazyService.php
│   │       │   ├── get_Console_Command_ConfigDebug_LazyService.php
│   │       │   ├── get_Console_Command_ConfigDumpReference_LazyService.php
│   │       │   ├── get_Console_Command_ContainerDebug_LazyService.php
│   │       │   ├── get_Console_Command_ContainerLint_LazyService.php
│   │       │   ├── get_Console_Command_DebugAutowiring_LazyService.php
│   │       │   ├── get_Console_Command_DotenvDebug_LazyService.php
│   │       │   ├── get_Console_Command_EventDispatcherDebug_LazyService.php
│   │       │   ├── get_Console_Command_FormDebug_LazyService.php
│   │       │   ├── get_Console_Command_MailerTest_LazyService.php
│   │       │   ├── get_Console_Command_RouterDebug_LazyService.php
│   │       │   ├── get_Console_Command_RouterMatch_LazyService.php
│   │       │   ├── get_Console_Command_SecretsDecryptToLocal_LazyService.php
│   │       │   ├── get_Console_Command_SecretsEncryptFromLocal_LazyService.php
│   │       │   ├── get_Console_Command_SecretsGenerateKey_LazyService.php
│   │       │   ├── get_Console_Command_SecretsList_LazyService.php
│   │       │   ├── get_Console_Command_SecretsRemove_LazyService.php
│   │       │   ├── get_Console_Command_SecretsSet_LazyService.php
│   │       │   ├── get_Console_Command_ValidatorDebug_LazyService.php
│   │       │   ├── get_Console_Command_YamlLint_LazyService.php
│   │       │   ├── get_Debug_Security_Voter_Security_Access_AuthenticatedVoterService.php
│   │       │   ├── get_Debug_Security_Voter_Security_Access_RoleHierarchyVoterService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_DefaultService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_RequestService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_ServiceService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_SessionService.php
│   │       │   ├── get_Debug_ValueResolver_ArgumentResolver_VariadicService.php
│   │       │   ├── get_Debug_ValueResolver_Doctrine_Orm_EntityValueResolverService.php
│   │       │   ├── get_Debug_ValueResolver_Security_SecurityTokenValueResolverService.php
│   │       │   ├── get_Debug_ValueResolver_Security_UserValueResolverService.php
│   │       │   ├── get_DoctrineMigrations_CurrentCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_DiffCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_DumpSchemaCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_ExecuteCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_GenerateCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_LatestCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_MigrateCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_RollupCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_StatusCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_SyncMetadataCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_UpToDateCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_VersionCommand_LazyService.php
│   │       │   ├── get_DoctrineMigrations_VersionsCommand_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeAuth_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeCommand_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeController_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeCrud_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeDockerDatabase_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeEntity_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeFixtures_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeForm_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeListener_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeMessage_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeMessengerMiddleware_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeMigration_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeRegistrationForm_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeResetPassword_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeSchedule_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeSecurityCustom_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeSecurityFormLogin_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeSerializerEncoder_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeSerializerNormalizer_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeStimulusController_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeTest_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeTwigComponent_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeTwigExtension_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeUser_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeValidator_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeVoter_LazyService.php
│   │       │   ├── get_Maker_AutoCommand_MakeWebhook_LazyService.php
│   │       │   ├── get_Security_Command_DebugFirewall_LazyService.php
│   │       │   ├── get_Security_Command_UserPasswordHash_LazyService.php
│   │       │   ├── get_Security_RequestMatcher_KLbKLHaService.php
│   │       │   ├── get_ServiceLocator_0aVz0s0Service.php
│   │       │   ├── get_ServiceLocator_0R0BvAFService.php
│   │       │   ├── get_ServiceLocator_1SGciKService.php
│   │       │   ├── get_ServiceLocator_3opkxl5Service.php
│   │       │   ├── get_ServiceLocator_A6Xp9TdService.php
│   │       │   ├── get_ServiceLocator_AHGni2ZService.php
│   │       │   ├── get_ServiceLocator_CsMkqUaService.php
│   │       │   ├── get_ServiceLocator_JpvOrpTService.php
│   │       │   ├── get_ServiceLocator_Mhqdd2rService.php
│   │       │   ├── get_ServiceLocator_O0VupqYService.php
│   │       │   ├── get_ServiceLocator_O2p6Lk7Service.php
│   │       │   ├── get_ServiceLocator_QgQ8wqGService.php
│   │       │   ├── get_ServiceLocator_RqzNmSYService.php
│   │       │   ├── get_ServiceLocator_RSTd_NAService.php
│   │       │   ├── get_ServiceLocator_RvMNZGhService.php
│   │       │   ├── get_ServiceLocator_S77vRczService.php
│   │       │   ├── get_ServiceLocator_TcmhPFjService.php
│   │       │   ├── get_ServiceLocator_UVvF4gLService.php
│   │       │   ├── get_ServiceLocator_Y4Zrx_Service.php
│   │       │   ├── get_ServiceLocator_YC9eRGAService.php
│   │       │   ├── get_ServiceLocator_ZKjvjQmService.php
│   │       │   ├── get_Twig_Command_Debug_LazyService.php
│   │       │   ├── get_Twig_Command_Lint_LazyService.php
│   │       │   ├── getAdminControllerService.php
│   │       │   ├── getCache_App_TaggableService.php
│   │       │   ├── getCache_AppClearerService.php
│   │       │   ├── getCache_AppService.php
│   │       │   ├── getCache_GlobalClearerService.php
│   │       │   ├── getCache_SecurityIsGrantedAttributeExpressionLanguageService.php
│   │       │   ├── getCache_SystemClearerService.php
│   │       │   ├── getCache_SystemService.php
│   │       │   ├── getCache_ValidatorExpressionLanguageService.php
│   │       │   ├── getCacheWarmerService.php
│   │       │   ├── getCategoryControllerService.php
│   │       │   ├── getCategoryRepositoryService.php
│   │       │   ├── getCategoryService.php
│   │       │   ├── getCategoryTypeFormService.php
│   │       │   ├── getChangePasswordFormService.php
│   │       │   ├── getConfigBuilder_WarmerService.php
│   │       │   ├── getConsole_Command_AboutService.php
│   │       │   ├── getConsole_Command_AssetsInstallService.php
│   │       │   ├── getConsole_Command_CacheClearService.php
│   │       │   ├── getConsole_Command_CachePoolClearService.php
│   │       │   ├── getConsole_Command_CachePoolDeleteService.php
│   │       │   ├── getConsole_Command_CachePoolInvalidateTagsService.php
│   │       │   ├── getConsole_Command_CachePoolListService.php
│   │       │   ├── getConsole_Command_CachePoolPruneService.php
│   │       │   ├── getConsole_Command_CacheWarmupService.php
│   │       │   ├── getConsole_Command_ConfigDebugService.php
│   │       │   ├── getConsole_Command_ConfigDumpReferenceService.php
│   │       │   ├── getConsole_Command_ContainerDebugService.php
│   │       │   ├── getConsole_Command_ContainerLintService.php
│   │       │   ├── getConsole_Command_DebugAutowiringService.php
│   │       │   ├── getConsole_Command_DotenvDebugService.php
│   │       │   ├── getConsole_Command_EventDispatcherDebugService.php
│   │       │   ├── getConsole_Command_FormDebugService.php
│   │       │   ├── getConsole_Command_MailerTestService.php
│   │       │   ├── getConsole_Command_RouterDebugService.php
│   │       │   ├── getConsole_Command_RouterMatchService.php
│   │       │   ├── getConsole_Command_SecretsDecryptToLocalService.php
│   │       │   ├── getConsole_Command_SecretsEncryptFromLocalService.php
│   │       │   ├── getConsole_Command_SecretsGenerateKeyService.php
│   │       │   ├── getConsole_Command_SecretsListService.php
│   │       │   ├── getConsole_Command_SecretsRemoveService.php
│   │       │   ├── getConsole_Command_SecretsSetService.php
│   │       │   ├── getConsole_Command_ValidatorDebugService.php
│   │       │   ├── getConsole_Command_YamlLintService.php
│   │       │   ├── getConsole_CommandLoaderService.php
│   │       │   ├── getConsole_ErrorListenerService.php
│   │       │   ├── getContainer_EnvVarProcessorService.php
│   │       │   ├── getContainer_EnvVarProcessorsLocatorService.php
│   │       │   ├── getContainer_GetRoutingConditionServiceService.php
│   │       │   ├── getController_TemplateAttributeListenerService.php
│   │       │   ├── getDebug_ErrorHandlerConfiguratorService.php
│   │       │   ├── getDebug_Security_Firewall_Authenticator_MainService.php
│   │       │   ├── getDebug_Security_Voter_VoteListenerService.php
│   │       │   ├── getDoctrine_CacheClearMetadataCommandService.php
│   │       │   ├── getDoctrine_CacheClearQueryCacheCommandService.php
│   │       │   ├── getDoctrine_CacheClearResultCommandService.php
│   │       │   ├── getDoctrine_CacheCollectionRegionCommandService.php
│   │       │   ├── getDoctrine_ClearEntityRegionCommandService.php
│   │       │   ├── getDoctrine_ClearQueryRegionCommandService.php
│   │       │   ├── getDoctrine_DatabaseCreateCommandService.php
│   │       │   ├── getDoctrine_DatabaseDropCommandService.php
│   │       │   ├── getDoctrine_Dbal_DefaultConnection_EventManagerService.php
│   │       │   ├── getDoctrine_Dbal_DefaultConnectionService.php
│   │       │   ├── getDoctrine_FixturesLoadCommandService.php
│   │       │   ├── getDoctrine_MappingInfoCommandService.php
│   │       │   ├── getDoctrine_Migrations_DependencyFactoryService.php
│   │       │   ├── getDoctrine_Migrations_MigrationsFactoryService.php
│   │       │   ├── getDoctrine_Orm_Command_EntityManagerProviderService.php
│   │       │   ├── getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php
│   │       │   ├── getDoctrine_Orm_DefaultEntityManagerService.php
│   │       │   ├── getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php
│   │       │   ├── getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php
│   │       │   ├── getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php
│   │       │   ├── getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php
│   │       │   ├── getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php
│   │       │   ├── getDoctrine_Orm_ProxyCacheWarmerService.php
│   │       │   ├── getDoctrine_Orm_Validator_UniqueService.php
│   │       │   ├── getDoctrine_QueryDqlCommandService.php
│   │       │   ├── getDoctrine_QuerySqlCommandService.php
│   │       │   ├── getDoctrine_SchemaCreateCommandService.php
│   │       │   ├── getDoctrine_SchemaDropCommandService.php
│   │       │   ├── getDoctrine_SchemaUpdateCommandService.php
│   │       │   ├── getDoctrine_SchemaValidateCommandService.php
│   │       │   ├── getDoctrine_UlidGeneratorService.php
│   │       │   ├── getDoctrine_UuidGeneratorService.php
│   │       │   ├── getDoctrineMigrations_CurrentCommandService.php
│   │       │   ├── getDoctrineMigrations_DiffCommandService.php
│   │       │   ├── getDoctrineMigrations_DumpSchemaCommandService.php
│   │       │   ├── getDoctrineMigrations_ExecuteCommandService.php
│   │       │   ├── getDoctrineMigrations_GenerateCommandService.php
│   │       │   ├── getDoctrineMigrations_LatestCommandService.php
│   │       │   ├── getDoctrineMigrations_MigrateCommandService.php
│   │       │   ├── getDoctrineMigrations_RollupCommandService.php
│   │       │   ├── getDoctrineMigrations_StatusCommandService.php
│   │       │   ├── getDoctrineMigrations_SyncMetadataCommandService.php
│   │       │   ├── getDoctrineMigrations_UpToDateCommandService.php
│   │       │   ├── getDoctrineMigrations_VersionCommandService.php
│   │       │   ├── getDoctrineMigrations_VersionsCommandService.php
│   │       │   ├── getDoctrineService.php
│   │       │   ├── getErrorControllerService.php
│   │       │   ├── getForm_ChoiceListFactory_CachedService.php
│   │       │   ├── getForm_FactoryService.php
│   │       │   ├── getForm_Listener_PasswordHasherService.php
│   │       │   ├── getForm_RegistryService.php
│   │       │   ├── getForm_ServerParamsService.php
│   │       │   ├── getForm_Type_ChoiceService.php
│   │       │   ├── getForm_Type_ColorService.php
│   │       │   ├── getForm_Type_EntityService.php
│   │       │   ├── getForm_Type_FileService.php
│   │       │   ├── getForm_Type_FormService.php
│   │       │   ├── getForm_TypeExtension_CsrfService.php
│   │       │   ├── getForm_TypeExtension_Form_HttpFoundationService.php
│   │       │   ├── getForm_TypeExtension_Form_PasswordHasherService.php
│   │       │   ├── getForm_TypeExtension_Form_ValidatorService.php
│   │       │   ├── getForm_TypeExtension_Password_PasswordHasherService.php
│   │       │   ├── getForm_TypeGuesser_DoctrineService.php
│   │       │   ├── getForm_TypeGuesser_ValidatorService.php
│   │       │   ├── getFragment_Renderer_InlineService.php
│   │       │   ├── getHomeControllerService.php
│   │       │   ├── getLanguage2Service.php
│   │       │   ├── getLanguageControllerService.php
│   │       │   ├── getLanguageFormService.php
│   │       │   ├── getLanguageRepositoryService.php
│   │       │   ├── getLanguageService.php
│   │       │   ├── getLanguageTypeFormService.php
│   │       │   ├── getLoaderInterfaceService.php
│   │       │   ├── getLoginFormAuthenticatorService.php
│   │       │   ├── getMailer_MailerService.php
│   │       │   ├── getMailer_TransportFactory_NativeService.php
│   │       │   ├── getMailer_TransportFactory_NullService.php
│   │       │   ├── getMailer_TransportFactory_SendmailService.php
│   │       │   ├── getMailer_TransportFactory_SmtpService.php
│   │       │   ├── getMailer_TransportsService.php
│   │       │   ├── getMaker_AutoCommand_MakeAuthService.php
│   │       │   ├── getMaker_AutoCommand_MakeCommandService.php
│   │       │   ├── getMaker_AutoCommand_MakeControllerService.php
│   │       │   ├── getMaker_AutoCommand_MakeCrudService.php
│   │       │   ├── getMaker_AutoCommand_MakeDockerDatabaseService.php
│   │       │   ├── getMaker_AutoCommand_MakeEntityService.php
│   │       │   ├── getMaker_AutoCommand_MakeFixturesService.php
│   │       │   ├── getMaker_AutoCommand_MakeFormService.php
│   │       │   ├── getMaker_AutoCommand_MakeListenerService.php
│   │       │   ├── getMaker_AutoCommand_MakeMessageService.php
│   │       │   ├── getMaker_AutoCommand_MakeMessengerMiddlewareService.php
│   │       │   ├── getMaker_AutoCommand_MakeMigrationService.php
│   │       │   ├── getMaker_AutoCommand_MakeRegistrationFormService.php
│   │       │   ├── getMaker_AutoCommand_MakeResetPasswordService.php
│   │       │   ├── getMaker_AutoCommand_MakeScheduleService.php
│   │       │   ├── getMaker_AutoCommand_MakeSecurityCustomService.php
│   │       │   ├── getMaker_AutoCommand_MakeSecurityFormLoginService.php
│   │       │   ├── getMaker_AutoCommand_MakeSerializerEncoderService.php
│   │       │   ├── getMaker_AutoCommand_MakeSerializerNormalizerService.php
│   │       │   ├── getMaker_AutoCommand_MakeStimulusControllerService.php
│   │       │   ├── getMaker_AutoCommand_MakeTestService.php
│   │       │   ├── getMaker_AutoCommand_MakeTwigComponentService.php
│   │       │   ├── getMaker_AutoCommand_MakeTwigExtensionService.php
│   │       │   ├── getMaker_AutoCommand_MakeUserService.php
│   │       │   ├── getMaker_AutoCommand_MakeValidatorService.php
│   │       │   ├── getMaker_AutoCommand_MakeVoterService.php
│   │       │   ├── getMaker_AutoCommand_MakeWebhookService.php
│   │       │   ├── getMaker_DoctrineHelperService.php
│   │       │   ├── getMaker_EntityClassGeneratorService.php
│   │       │   ├── getMaker_FileLinkFormatterService.php
│   │       │   ├── getMaker_FileManagerService.php
│   │       │   ├── getMaker_GeneratorService.php
│   │       │   ├── getMaker_Renderer_FormTypeRendererService.php
│   │       │   ├── getManagerRegistryAwareConnectionProviderService.php
│   │       │   ├── getProfileControllerService.php
│   │       │   ├── getPropertyAccessorService.php
│   │       │   ├── getRedirectControllerService.php
│   │       │   ├── getRegistrationControllerService.php
│   │       │   ├── getRegistrationFormService.php
│   │       │   ├── getReplyControllerService.php
│   │       │   ├── getReplyRepositoryService.php
│   │       │   ├── getResetPasswordControllerService.php
│   │       │   ├── getResetPasswordRemoveExpiredCommandService.php
│   │       │   ├── getResetPasswordRequestFormService.php
│   │       │   ├── getResetPasswordRequestRepositoryService.php
│   │       │   ├── getRouter_CacheWarmerService.php
│   │       │   ├── getRouting_LoaderService.php
│   │       │   ├── getRunSqlCommandService.php
│   │       │   ├── getSecrets_VaultService.php
│   │       │   ├── getSecurity_AccessListenerService.php
│   │       │   ├── getSecurity_AccessMapService.php
│   │       │   ├── getSecurity_AuthenticationUtilsService.php
│   │       │   ├── getSecurity_Authenticator_Manager_MainService.php
│   │       │   ├── getSecurity_Authenticator_ManagersLocatorService.php
│   │       │   ├── getSecurity_Authenticator_RememberMe_MainService.php
│   │       │   ├── getSecurity_Authenticator_RememberMeHandler_MainService.php
│   │       │   ├── getSecurity_ChannelListenerService.php
│   │       │   ├── getSecurity_Command_DebugFirewallService.php
│   │       │   ├── getSecurity_Command_UserPasswordHashService.php
│   │       │   ├── getSecurity_Csrf_TokenManagerService.php
│   │       │   ├── getSecurity_Csrf_TokenStorageService.php
│   │       │   ├── getSecurity_Firewall_EventDispatcherLocatorService.php
│   │       │   ├── getSecurity_Firewall_Map_Context_DevService.php
│   │       │   ├── getSecurity_Firewall_Map_Context_MainService.php
│   │       │   ├── getSecurity_HelperService.php
│   │       │   ├── getSecurity_HttpUtilsService.php
│   │       │   ├── getSecurity_Listener_CheckAuthenticatorCredentialsService.php
│   │       │   ├── getSecurity_Listener_CheckRememberMeConditions_MainService.php
│   │       │   ├── getSecurity_Listener_CsrfProtectionService.php
│   │       │   ├── getSecurity_Listener_Main_UserProviderService.php
│   │       │   ├── getSecurity_Listener_PasswordMigratingService.php
│   │       │   ├── getSecurity_Listener_RememberMe_MainService.php
│   │       │   ├── getSecurity_Listener_Session_MainService.php
│   │       │   ├── getSecurity_Listener_UserChecker_MainService.php
│   │       │   ├── getSecurity_Listener_UserProviderService.php
│   │       │   ├── getSecurity_Logout_Listener_CsrfTokenClearingService.php
│   │       │   ├── getSecurity_Logout_Listener_Default_MainService.php
│   │       │   ├── getSecurity_PasswordHasherFactoryService.php
│   │       │   ├── getSecurity_RouteLoader_LogoutService.php
│   │       │   ├── getSecurity_User_Provider_Concrete_AppUserProviderService.php
│   │       │   ├── getSecurity_UserCheckerLocatorService.php
│   │       │   ├── getSecurity_UserPasswordHasherService.php
│   │       │   ├── getSecurity_Validator_UserPasswordService.php
│   │       │   ├── getSecurityControllerService.php
│   │       │   ├── getServicesResetterService.php
│   │       │   ├── getSession_FactoryService.php
│   │       │   ├── getSession_Handler_NativeService.php
│   │       │   ├── getSymfonycasts_ResetPassword_CleanerService.php
│   │       │   ├── getTemplateControllerService.php
│   │       │   ├── getTopicControllerService.php
│   │       │   ├── getTopicRepositoryService.php
│   │       │   ├── getTopicService.php
│   │       │   ├── getTwig_Command_DebugService.php
│   │       │   ├── getTwig_Command_LintService.php
│   │       │   ├── getTwig_Form_EngineService.php
│   │       │   ├── getTwig_Form_RendererService.php
│   │       │   ├── getTwig_Mailer_MessageListenerService.php
│   │       │   ├── getTwig_Runtime_HttpkernelService.php
│   │       │   ├── getTwig_Runtime_SecurityCsrfService.php
│   │       │   ├── getTwig_TemplateCacheWarmerService.php
│   │       │   ├── getTwigService.php
│   │       │   ├── getUserRepositoryService.php
│   │       │   ├── getUserService.php
│   │       │   ├── getValidator_BuilderService.php
│   │       │   ├── getValidator_EmailService.php
│   │       │   ├── getValidator_ExpressionService.php
│   │       │   ├── getValidator_Mapping_CacheWarmerService.php
│   │       │   ├── getValidator_NoSuspiciousCharactersService.php
│   │       │   ├── getValidator_NotCompromisedPasswordService.php
│   │       │   ├── getValidator_WhenService.php
│   │       │   ├── getValidatorService.php
│   │       │   ├── removed-ids.php
│   │       │   └── RequestPayloadValueResolverGhost3590451.php
│   │       ├── doctrine
│   │       │   └── orm
│   │       │       └── Proxies
│   │       │           ├── __CG__AppEntityCategory.php
│   │       │           ├── __CG__AppEntityTopic.php
│   │       │           └── __CG__AppEntityUser.php
│   │       ├── pools
│   │       │   └── system
│   │       │       ├── 72hGAQVBSD
│   │       │       ├── 7Voh4U7pG4
│   │       │       └── mcKZT8zBtA
│   │       ├── Symfony
│   │       │   └── Config
│   │       │       ├── Doctrine
│   │       │       │   ├── Dbal
│   │       │       │   │   ├── ConnectionConfig
│   │       │       │   │   │   ├── ReplicaConfig.php
│   │       │       │   │   │   └── SlaveConfig.php
│   │       │       │   │   ├── ConnectionConfig.php
│   │       │       │   │   └── TypeConfig.php
│   │       │       │   ├── Orm
│   │       │       │   │   ├── EntityManagerConfig
│   │       │       │   │   │   ├── EntityListeners
│   │       │       │   │   │   │   ├── EntityConfig
│   │       │       │   │   │   │   │   ├── ListenerConfig
│   │       │       │   │   │   │   │   │   └── EventConfig.php
│   │       │       │   │   │   │   │   └── ListenerConfig.php
│   │       │       │   │   │   │   └── EntityConfig.php
│   │       │       │   │   │   ├── SecondLevelCache
│   │       │       │   │   │   │   ├── RegionConfig
│   │       │       │   │   │   │   │   └── CacheDriverConfig.php
│   │       │       │   │   │   │   ├── LoggerConfig.php
│   │       │       │   │   │   │   ├── RegionCacheDriverConfig.php
│   │       │       │   │   │   │   └── RegionConfig.php
│   │       │       │   │   │   ├── DqlConfig.php
│   │       │       │   │   │   ├── EntityListenersConfig.php
│   │       │       │   │   │   ├── FilterConfig.php
│   │       │       │   │   │   ├── MappingConfig.php
│   │       │       │   │   │   ├── MetadataCacheDriverConfig.php
│   │       │       │   │   │   ├── QueryCacheDriverConfig.php
│   │       │       │   │   │   ├── ResultCacheDriverConfig.php
│   │       │       │   │   │   └── SecondLevelCacheConfig.php
│   │       │       │   │   ├── ControllerResolverConfig.php
│   │       │       │   │   └── EntityManagerConfig.php
│   │       │       │   ├── DbalConfig.php
│   │       │       │   └── OrmConfig.php
│   │       │       ├── DoctrineMigrations
│   │       │       │   ├── Storage
│   │       │       │   │   └── TableStorageConfig.php
│   │       │       │   └── StorageConfig.php
│   │       │       ├── Framework
│   │       │       │   ├── Assets
│   │       │       │   │   └── PackageConfig.php
│   │       │       │   ├── Cache
│   │       │       │   │   └── PoolConfig.php
│   │       │       │   ├── Form
│   │       │       │   │   └── CsrfProtectionConfig.php
│   │       │       │   ├── HtmlSanitizer
│   │       │       │   │   └── SanitizerConfig.php
│   │       │       │   ├── HttpClient
│   │       │       │   │   ├── DefaultOptions
│   │       │       │   │   │   ├── RetryFailed
│   │       │       │   │   │   │   └── HttpCodeConfig.php
│   │       │       │   │   │   ├── PeerFingerprintConfig.php
│   │       │       │   │   │   └── RetryFailedConfig.php
│   │       │       │   │   ├── ScopedClientConfig
│   │       │       │   │   │   ├── RetryFailed
│   │       │       │   │   │   │   └── HttpCodeConfig.php
│   │       │       │   │   │   ├── PeerFingerprintConfig.php
│   │       │       │   │   │   └── RetryFailedConfig.php
│   │       │       │   │   ├── DefaultOptionsConfig.php
│   │       │       │   │   └── ScopedClientConfig.php
│   │       │       │   ├── Mailer
│   │       │       │   │   ├── EnvelopeConfig.php
│   │       │       │   │   └── HeaderConfig.php
│   │       │       │   ├── Messenger
│   │       │       │   │   ├── BusConfig
│   │       │       │   │   │   ├── DefaultMiddlewareConfig.php
│   │       │       │   │   │   └── MiddlewareConfig.php
│   │       │       │   │   ├── Serializer
│   │       │       │   │   │   └── SymfonySerializerConfig.php
│   │       │       │   │   ├── TransportConfig
│   │       │       │   │   │   └── RetryStrategyConfig.php
│   │       │       │   │   ├── BusConfig.php
│   │       │       │   │   ├── RoutingConfig.php
│   │       │       │   │   ├── SerializerConfig.php
│   │       │       │   │   └── TransportConfig.php
│   │       │       │   ├── Notifier
│   │       │       │   │   └── AdminRecipientConfig.php
│   │       │       │   ├── RateLimiter
│   │       │       │   │   ├── LimiterConfig
│   │       │       │   │   │   └── RateConfig.php
│   │       │       │   │   └── LimiterConfig.php
│   │       │       │   ├── Serializer
│   │       │       │   │   └── MappingConfig.php
│   │       │       │   ├── Translator
│   │       │       │   │   ├── ProviderConfig.php
│   │       │       │   │   └── PseudoLocalizationConfig.php
│   │       │       │   ├── Validation
│   │       │       │   │   ├── AutoMappingConfig.php
│   │       │       │   │   ├── MappingConfig.php
│   │       │       │   │   └── NotCompromisedPasswordConfig.php
│   │       │       │   ├── Webhook
│   │       │       │   │   └── RoutingConfig.php
│   │       │       │   ├── Workflows
│   │       │       │   │   ├── WorkflowsConfig
│   │       │       │   │   │   ├── AuditTrailConfig.php
│   │       │       │   │   │   ├── MarkingStoreConfig.php
│   │       │       │   │   │   ├── PlaceConfig.php
│   │       │       │   │   │   └── TransitionConfig.php
│   │       │       │   │   └── WorkflowsConfig.php
│   │       │       │   ├── AnnotationsConfig.php
│   │       │       │   ├── AssetMapperConfig.php
│   │       │       │   ├── AssetsConfig.php
│   │       │       │   ├── CacheConfig.php
│   │       │       │   ├── CsrfProtectionConfig.php
│   │       │       │   ├── EsiConfig.php
│   │       │       │   ├── ExceptionConfig.php
│   │       │       │   ├── FormConfig.php
│   │       │       │   ├── FragmentsConfig.php
│   │       │       │   ├── HtmlSanitizerConfig.php
│   │       │       │   ├── HttpCacheConfig.php
│   │       │       │   ├── HttpClientConfig.php
│   │       │       │   ├── LockConfig.php
│   │       │       │   ├── MailerConfig.php
│   │       │       │   ├── MessengerConfig.php
│   │       │       │   ├── NotifierConfig.php
│   │       │       │   ├── PhpErrorsConfig.php
│   │       │       │   ├── ProfilerConfig.php
│   │       │       │   ├── PropertyAccessConfig.php
│   │       │       │   ├── PropertyInfoConfig.php
│   │       │       │   ├── RateLimiterConfig.php
│   │       │       │   ├── RemoteeventConfig.php
│   │       │       │   ├── RequestConfig.php
│   │       │       │   ├── RouterConfig.php
│   │       │       │   ├── SchedulerConfig.php
│   │       │       │   ├── SecretsConfig.php
│   │       │       │   ├── SemaphoreConfig.php
│   │       │       │   ├── SerializerConfig.php
│   │       │       │   ├── SessionConfig.php
│   │       │       │   ├── SsiConfig.php
│   │       │       │   ├── TranslatorConfig.php
│   │       │       │   ├── UidConfig.php
│   │       │       │   ├── ValidationConfig.php
│   │       │       │   ├── WebhookConfig.php
│   │       │       │   ├── WebLinkConfig.php
│   │       │       │   └── WorkflowsConfig.php
│   │       │       ├── Security
│   │       │       │   ├── FirewallConfig
│   │       │       │   │   ├── AccessToken
│   │       │       │   │   │   ├── TokenHandler
│   │       │       │   │   │   │   ├── OidcConfig.php
│   │       │       │   │   │   │   └── OidcUserInfoConfig.php
│   │       │       │   │   │   └── TokenHandlerConfig.php
│   │       │       │   │   ├── Logout
│   │       │       │   │   │   └── DeleteCookieConfig.php
│   │       │       │   │   ├── RememberMe
│   │       │       │   │   │   ├── TokenProvider
│   │       │       │   │   │   │   └── DoctrineConfig.php
│   │       │       │   │   │   └── TokenProviderConfig.php
│   │       │       │   │   ├── AccessTokenConfig.php
│   │       │       │   │   ├── FormLoginConfig.php
│   │       │       │   │   ├── FormLoginLdapConfig.php
│   │       │       │   │   ├── HttpBasicConfig.php
│   │       │       │   │   ├── HttpBasicLdapConfig.php
│   │       │       │   │   ├── JsonLoginConfig.php
│   │       │       │   │   ├── JsonLoginLdapConfig.php
│   │       │       │   │   ├── LoginLinkConfig.php
│   │       │       │   │   ├── LoginThrottlingConfig.php
│   │       │       │   │   ├── LogoutConfig.php
│   │       │       │   │   ├── RememberMeConfig.php
│   │       │       │   │   ├── RemoteUserConfig.php
│   │       │       │   │   ├── SwitchUserConfig.php
│   │       │       │   │   └── X509Config.php
│   │       │       │   ├── ProviderConfig
│   │       │       │   │   ├── Memory
│   │       │       │   │   │   └── UserConfig.php
│   │       │       │   │   ├── ChainConfig.php
│   │       │       │   │   ├── LdapConfig.php
│   │       │       │   │   └── MemoryConfig.php
│   │       │       │   ├── AccessControlConfig.php
│   │       │       │   ├── AccessDecisionManagerConfig.php
│   │       │       │   ├── FirewallConfig.php
│   │       │       │   ├── PasswordHasherConfig.php
│   │       │       │   └── ProviderConfig.php
│   │       │       ├── Twig
│   │       │       │   ├── DateConfig.php
│   │       │       │   ├── GlobalConfig.php
│   │       │       │   ├── MailerConfig.php
│   │       │       │   └── NumberFormatConfig.php
│   │       │       ├── TwigExtra
│   │       │       │   ├── Commonmark
│   │       │       │   │   ├── CommonmarkConfig.php
│   │       │       │   │   ├── RendererConfig.php
│   │       │       │   │   └── SlugNormalizerConfig.php
│   │       │       │   ├── CacheConfig.php
│   │       │       │   ├── CommonmarkConfig.php
│   │       │       │   ├── CssinlinerConfig.php
│   │       │       │   ├── HtmlConfig.php
│   │       │       │   ├── InkyConfig.php
│   │       │       │   ├── IntlConfig.php
│   │       │       │   ├── MarkdownConfig.php
│   │       │       │   └── StringConfig.php
│   │       │       ├── DoctrineConfig.php
│   │       │       ├── DoctrineMigrationsConfig.php
│   │       │       ├── FrameworkConfig.php
│   │       │       ├── MakerConfig.php
│   │       │       ├── SecurityConfig.php
│   │       │       ├── SymfonycastsResetPasswordConfig.php
│   │       │       ├── SymfonycastsVerifyEmailConfig.php
│   │       │       ├── TwigConfig.php
│   │       │       └── TwigExtraConfig.php
│   │       ├── twig
│   │       │   ├── 06
│   │       │   │   └── 06e6202b91dedddd76e5ef5fc364080c.php
│   │       │   ├── 0d
│   │       │   │   └── 0d496484fbed353a95411a16d72fdfd4.php
│   │       │   ├── 22
│   │       │   │   └── 22f2706ea46f84db081150926b198a2a.php
│   │       │   ├── 2d
│   │       │   │   └── 2dc1dd52101741338c1e05f4f3fdc6ed.php
│   │       │   ├── 3a
│   │       │   │   └── 3a8b4b732359f1c183a7813969ada5da.php
│   │       │   ├── 3f
│   │       │   │   └── 3f92b4e677bd5c7934bab6c046ad16b6.php
│   │       │   ├── 41
│   │       │   │   └── 414f1a4ca2c8a177ccd17158dfa96f90.php
│   │       │   ├── 45
│   │       │   │   └── 45caafbf3eaaadb2fb7068a1446710eb.php
│   │       │   ├── 4b
│   │       │   │   └── 4b610510e626d7b63a190ecd32f36244.php
│   │       │   ├── 4c
│   │       │   │   ├── 4c0d39ab73782264f4643c4024d77c8e.php
│   │       │   │   └── 4ca3311e07448260c3f1781f270908d2.php
│   │       │   ├── 5f
│   │       │   │   └── 5f94e5ae849e0d57ecd2fcddb30c39c8.php
│   │       │   ├── 72
│   │       │   │   ├── 723590e0235fa1b4adac0b04ee7cab69.php
│   │       │   │   └── 72f894c195ff881ff5f1de2fa1bdd3d9.php
│   │       │   ├── 73
│   │       │   │   └── 732951719dd5a1a1a39d7438363b92b1.php
│   │       │   ├── 7e
│   │       │   │   └── 7e8c422739c96fe72b4cd3400d45335a.php
│   │       │   ├── 92
│   │       │   │   └── 926f8dcf5fc583bb128b6bcbec0d756c.php
│   │       │   ├── 99
│   │       │   │   └── 99fc43cb61aff34111a4946a212dfb8d.php
│   │       │   ├── 9c
│   │       │   │   └── 9c7997b3b1aa16019881c15e5e379d42.php
│   │       │   ├── 9e
│   │       │   │   └── 9e4c7a5f763e5b6d7de920a4486f9524.php
│   │       │   ├── aa
│   │       │   │   └── aafb4e3262915aabccbb680560299286.php
│   │       │   ├── b4
│   │       │   │   └── b41f77694dab88dc5da73daa944e83e8.php
│   │       │   ├── c3
│   │       │   │   ├── c34f97c15639bf9518a8129375bcc155.php
│   │       │   │   └── c37f3ce38199b3d6d622178142a718dc.php
│   │       │   ├── c5
│   │       │   │   └── c563ac4a2f7e3b20c3b11a3c574b3f50.php
│   │       │   ├── cb
│   │       │   │   └── cbeaf14243777b3d6ebd68861a527f46.php
│   │       │   ├── cd
│   │       │   │   └── cdfb213da9ae58ac1ad168b319c136a9.php
│   │       │   ├── de
│   │       │   │   └── de0e3c843acf4f041b5c4b72448b189d.php
│   │       │   ├── df
│   │       │   │   └── dfcc0356e2425c86af61b4a68ff78b3c.php
│   │       │   ├── e6
│   │       │   │   └── e640045c15f204276b4c051037263d84.php
│   │       │   ├── ea
│   │       │   │   └── eae49a3eb0479d16566e6b343f347d2c.php
│   │       │   ├── f0
│   │       │   │   └── f05404a4bb29611735457e8a619f1ed3.php
│   │       │   └── f1
│   │       │       └── f176afacdfffde37b17fe7587b525944.php
│   │       ├── annotations.map
│   │       ├── App_KernelDevDebugContainer.php
│   │       ├── App_KernelDevDebugContainer.php.lock
│   │       ├── App_KernelDevDebugContainer.php.meta
│   │       ├── App_KernelDevDebugContainer.preload.php
│   │       ├── App_KernelDevDebugContainer.xml
│   │       ├── App_KernelDevDebugContainer.xml.meta
│   │       ├── App_KernelDevDebugContainerCompiler.log
│   │       ├── App_KernelDevDebugContainerDeprecations.log
│   │       ├── Container4XzGTsD.legacy
│   │       ├── url_generating_routes.php
│   │       ├── url_generating_routes.php.meta
│   │       ├── url_matching_routes.php
│   │       ├── url_matching_routes.php.meta
│   │       └── validation.php
│   ├── log
│   └── data.db
├── vendor
│   ├── bin
│   │   ├── doctrine-dbal
│   │   ├── doctrine-dbal.bat
│   │   ├── doctrine-migrations
│   │   ├── doctrine-migrations.bat
│   │   ├── patch-type-declarations
│   │   ├── patch-type-declarations.bat
│   │   ├── php-parse
│   │   ├── php-parse.bat
│   │   ├── sql-formatter
│   │   ├── sql-formatter.bat
│   │   ├── var-dump-server
│   │   ├── var-dump-server.bat
│   │   ├── yaml-lint
│   │   └── yaml-lint.bat
│   ├── composer
│   │   ├── autoload_classmap.php
│   │   ├── autoload_files.php
│   │   ├── autoload_namespaces.php
│   │   ├── autoload_psr4.php
│   │   ├── autoload_real.php
│   │   ├── autoload_static.php
│   │   ├── ClassLoader.php
│   │   ├── installed.json
│   │   ├── installed.php
│   │   ├── InstalledVersions.php
│   │   ├── LICENSE
│   │   └── platform_check.php
│   ├── doctrine
│   │   ├── cache
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   └── release-on-milestone-closed.yml
│   │   │   │   └── FUNDING.yml
│   │   │   ├── docs
│   │   │   │   └── en
│   │   │   │       └── index.rst
│   │   │   ├── lib
│   │   │   │   └── Doctrine
│   │   │   │       └── Common
│   │   │   │           └── Cache
│   │   │   │               ├── Psr6
│   │   │   │               │   ├── CacheAdapter.php
│   │   │   │               │   ├── CacheItem.php
│   │   │   │               │   ├── DoctrineProvider.php
│   │   │   │               │   ├── InvalidArgument.php
│   │   │   │               │   └── TypedCacheItem.php
│   │   │   │               ├── Cache.php
│   │   │   │               ├── CacheProvider.php
│   │   │   │               ├── ClearableCache.php
│   │   │   │               ├── FlushableCache.php
│   │   │   │               ├── MultiDeleteCache.php
│   │   │   │               ├── MultiGetCache.php
│   │   │   │               ├── MultiOperationCache.php
│   │   │   │               └── MultiPutCache.php
│   │   │   ├── tests
│   │   │   │   ├── Doctrine
│   │   │   │   │   └── Tests
│   │   │   │   │       ├── Common
│   │   │   │   │       │   └── Cache
│   │   │   │   │       │       ├── Psr6
│   │   │   │   │       │       │   ├── CacheAdapterTest.php
│   │   │   │   │       │       │   └── DoctrineProviderTest.php
│   │   │   │   │       │       ├── ArrayCache.php
│   │   │   │   │       │       ├── ArrayCacheTest.php
│   │   │   │   │       │       ├── CacheProviderTest.php
│   │   │   │   │       │       └── CacheTest.php
│   │   │   │   │       └── DoctrineTestCase.php
│   │   │   │   └── travis
│   │   │   │       └── php.ini
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── build.properties
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── UPGRADE-1.11.md
│   │   │   └── UPGRADE-1.4.md
│   │   ├── collections
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── composer-lint.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── documentation.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   ├── static-analysis.yml
│   │   │   │   │   └── website-schema.yml
│   │   │   │   ├── dependabot.yml
│   │   │   │   └── FUNDING.yml
│   │   │   ├── docs
│   │   │   │   └── en
│   │   │   │       ├── derived-collections.rst
│   │   │   │       ├── expression-builder.rst
│   │   │   │       ├── expressions.rst
│   │   │   │       ├── index.rst
│   │   │   │       ├── lazy-collections.rst
│   │   │   │       ├── serialization.rst
│   │   │   │       └── sidebar.rst
│   │   │   ├── src
│   │   │   │   ├── Expr
│   │   │   │   │   ├── ClosureExpressionVisitor.php
│   │   │   │   │   ├── Comparison.php
│   │   │   │   │   ├── CompositeExpression.php
│   │   │   │   │   ├── Expression.php
│   │   │   │   │   ├── ExpressionVisitor.php
│   │   │   │   │   └── Value.php
│   │   │   │   ├── AbstractLazyCollection.php
│   │   │   │   ├── ArrayCollection.php
│   │   │   │   ├── Collection.php
│   │   │   │   ├── Criteria.php
│   │   │   │   ├── ExpressionBuilder.php
│   │   │   │   ├── Order.php
│   │   │   │   ├── ReadableCollection.php
│   │   │   │   └── Selectable.php
│   │   │   ├── stubs
│   │   │   │   └── array_find.phpstub
│   │   │   ├── tests
│   │   │   │   ├── Expr
│   │   │   │   │   ├── ComparisonTest.php
│   │   │   │   │   ├── CompositeExpressionTest.php
│   │   │   │   │   └── ValueTest.php
│   │   │   │   ├── StaticAnalysis
│   │   │   │   │   └── CustomCollection.php
│   │   │   │   ├── AbstractLazyArrayCollectionTest.php
│   │   │   │   ├── AbstractLazyCollectionTest.php
│   │   │   │   ├── ArrayCollectionTest.php
│   │   │   │   ├── ArrayCollectionTestCase.php
│   │   │   │   ├── ClosureExpressionVisitorTest.php
│   │   │   │   ├── CollectionTest.php
│   │   │   │   ├── CollectionTestCase.php
│   │   │   │   ├── CriteriaTest.php
│   │   │   │   ├── DerivedArrayCollection.php
│   │   │   │   ├── DerivedCollectionTest.php
│   │   │   │   ├── ExpressionBuilderTest.php
│   │   │   │   └── LazyArrayCollection.php
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── CONTRIBUTING.md
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpstan.neon.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── UPGRADE.md
│   │   ├── data-fixtures
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── documentation.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   └── static-analysis.yml
│   │   │   │   ├── dependabot.yml
│   │   │   │   └── FUNDING.yml
│   │   │   ├── docs
│   │   │   │   └── en
│   │   │   │       ├── explanation
│   │   │   │       │   └── transactions-and-purging.rst
│   │   │   │       ├── how-to
│   │   │   │       │   ├── fixture-ordering.rst
│   │   │   │       │   ├── loading-fixtures.rst
│   │   │   │       │   └── sharing-objects-between-fixtures.rst
│   │   │   │       ├── index.rst
│   │   │   │       └── sidebar.rst
│   │   │   ├── src
│   │   │   │   ├── Event
│   │   │   │   │   └── Listener
│   │   │   │   │       ├── MongoDBReferenceListener.php
│   │   │   │   │       └── ORMReferenceListener.php
│   │   │   │   ├── Exception
│   │   │   │   │   └── CircularReferenceException.php
│   │   │   │   ├── Executor
│   │   │   │   │   ├── AbstractExecutor.php
│   │   │   │   │   ├── MongoDBExecutor.php
│   │   │   │   │   ├── MultipleTransactionORMExecutor.php
│   │   │   │   │   ├── ORMExecutor.php
│   │   │   │   │   ├── ORMExecutorCommon.php
│   │   │   │   │   └── PHPCRExecutor.php
│   │   │   │   ├── Purger
│   │   │   │   │   ├── MongoDBPurger.php
│   │   │   │   │   ├── ORMPurger.php
│   │   │   │   │   ├── ORMPurgerInterface.php
│   │   │   │   │   ├── PHPCRPurger.php
│   │   │   │   │   └── PurgerInterface.php
│   │   │   │   ├── Sorter
│   │   │   │   │   ├── TopologicalSorter.php
│   │   │   │   │   └── Vertex.php
│   │   │   │   ├── AbstractFixture.php
│   │   │   │   ├── DependentFixtureInterface.php
│   │   │   │   ├── FixtureInterface.php
│   │   │   │   ├── Loader.php
│   │   │   │   ├── OrderedFixtureInterface.php
│   │   │   │   ├── ProxyReferenceRepository.php
│   │   │   │   ├── ReferenceRepository.php
│   │   │   │   └── SharedFixtureInterface.php
│   │   │   ├── tests
│   │   │   │   ├── Common
│   │   │   │   │   └── DataFixtures
│   │   │   │   │       ├── Executor
│   │   │   │   │       │   ├── AbstractExecutorTest.php
│   │   │   │   │       │   ├── ORMExecutorSharedFixtureTest.php
│   │   │   │   │       │   ├── ORMExecutorTest.php
│   │   │   │   │       │   └── PHPCRExecutorTest.php
│   │   │   │   │       ├── Purger
│   │   │   │   │       │   ├── MongoDBPurgerTest.php
│   │   │   │   │       │   ├── ORMPurgerExcludeTest.php
│   │   │   │   │       │   └── ORMPurgerTest.php
│   │   │   │   │       ├── Sorter
│   │   │   │   │       │   ├── TopologicalSorterTest.php
│   │   │   │   │       │   └── VertexTest.php
│   │   │   │   │       ├── TestDocument
│   │   │   │   │       │   └── Role.php
│   │   │   │   │       ├── TestEntity
│   │   │   │   │       │   ├── Group.php
│   │   │   │   │       │   ├── GroupWithSchema.php
│   │   │   │   │       │   ├── Link.php
│   │   │   │   │       │   ├── Quoted.php
│   │   │   │   │       │   ├── Role.php
│   │   │   │   │       │   ├── User.php
│   │   │   │   │       │   └── UserWithSchema.php
│   │   │   │   │       ├── TestFixtures
│   │   │   │   │       │   ├── MyFixture1.php
│   │   │   │   │       │   ├── MyFixture2.php
│   │   │   │   │       │   ├── NotAFixture.php
│   │   │   │   │       │   ├── RoleFixture.php
│   │   │   │   │       │   └── UserFixture.php
│   │   │   │   │       ├── TestPurgeEntity
│   │   │   │   │       │   ├── ExcludedEntity.php
│   │   │   │   │       │   └── IncludedEntity.php
│   │   │   │   │       ├── TestTypes
│   │   │   │   │       │   └── UuidType.php
│   │   │   │   │       ├── TestValueObjects
│   │   │   │   │       │   └── Uuid.php
│   │   │   │   │       ├── BaseTestCase.php
│   │   │   │   │       ├── DependentFixtureTest.php
│   │   │   │   │       ├── FixtureTest.php
│   │   │   │   │       ├── LoaderTest.php
│   │   │   │   │       ├── OrderedFixtureTest.php
│   │   │   │   │       ├── ProxyReferenceRepositoryTest.php
│   │   │   │   │       └── ReferenceRepositoryTest.php
│   │   │   │   └── Mock
│   │   │   │       ├── ForwardCompatibleEntityManager.php
│   │   │   │       └── Node.php
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpstan-baseline.neon
│   │   │   ├── phpstan.neon.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── UPGRADE.md
│   │   ├── dbal
│   │   │   ├── .github
│   │   │   │   ├── ISSUE_TEMPLATE
│   │   │   │   │   ├── Bug.md
│   │   │   │   │   ├── Feature_Request.md
│   │   │   │   │   └── Support_Question.md
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── documentation.yml
│   │   │   │   │   ├── lock-closed-issues.yml
│   │   │   │   │   ├── nightly.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   ├── stale.yml
│   │   │   │   │   └── static-analysis.yml
│   │   │   │   ├── dependabot.yml
│   │   │   │   ├── FUNDING.yml
│   │   │   │   └── PULL_REQUEST_TEMPLATE.md
│   │   │   ├── bin
│   │   │   │   ├── doctrine-dbal
│   │   │   │   └── doctrine-dbal.php
│   │   │   ├── ci
│   │   │   │   ├── appveyor
│   │   │   │   │   ├── mssql.sql2008r2sp2.sqlsrv.appveyor.xml
│   │   │   │   │   ├── mssql.sql2012sp1.sqlsrv.appveyor.xml
│   │   │   │   │   ├── mssql.sql2017.pdo_sqlsrv.appveyor.xml
│   │   │   │   │   └── mssql.sql2017.sqlsrv.appveyor.xml
│   │   │   │   └── github
│   │   │   │       └── phpunit
│   │   │   │           ├── ibm_db2.xml
│   │   │   │           ├── mysqli-tls.xml
│   │   │   │           ├── mysqli.xml
│   │   │   │           ├── oci8-21.xml
│   │   │   │           ├── oci8.xml
│   │   │   │           ├── pdo_mysql.xml
│   │   │   │           ├── pdo_oci-21.xml
│   │   │   │           ├── pdo_oci.xml
│   │   │   │           ├── pdo_pgsql.xml
│   │   │   │           ├── pdo_sqlite.xml
│   │   │   │           ├── pdo_sqlsrv.xml
│   │   │   │           ├── pgsql.xml
│   │   │   │           ├── sqlite3.xml
│   │   │   │           └── sqlsrv.xml
│   │   │   ├── docs
│   │   │   │   ├── en
│   │   │   │   │   ├── explanation
│   │   │   │   │   │   ├── dc2type-comments.rst
│   │   │   │   │   │   └── implicit-indexes.rst
│   │   │   │   │   ├── reference
│   │   │   │   │   │   ├── architecture.rst
│   │   │   │   │   │   ├── caching.rst
│   │   │   │   │   │   ├── cli-tools.rst
│   │   │   │   │   │   ├── configuration.rst
│   │   │   │   │   │   ├── data-retrieval-and-manipulation.rst
│   │   │   │   │   │   ├── introduction.rst
│   │   │   │   │   │   ├── known-vendor-issues.rst
│   │   │   │   │   │   ├── platforms.rst
│   │   │   │   │   │   ├── portability.rst
│   │   │   │   │   │   ├── query-builder.rst
│   │   │   │   │   │   ├── schema-manager.rst
│   │   │   │   │   │   ├── schema-representation.rst
│   │   │   │   │   │   ├── security.rst
│   │   │   │   │   │   ├── supporting-other-databases.rst
│   │   │   │   │   │   ├── testing.rst
│   │   │   │   │   │   ├── transactions.rst
│   │   │   │   │   │   └── types.rst
│   │   │   │   │   ├── index.rst
│   │   │   │   │   └── sidebar.rst
│   │   │   │   └── LICENSE.md
│   │   │   ├── src
│   │   │   │   ├── ArrayParameters
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── MissingNamedParameter.php
│   │   │   │   │   │   └── MissingPositionalParameter.php
│   │   │   │   │   └── Exception.php
│   │   │   │   ├── Cache
│   │   │   │   │   ├── ArrayResult.php
│   │   │   │   │   ├── CacheException.php
│   │   │   │   │   └── QueryCacheProfile.php
│   │   │   │   ├── Connections
│   │   │   │   │   └── PrimaryReadReplicaConnection.php
│   │   │   │   ├── Driver
│   │   │   │   │   ├── AbstractOracleDriver
│   │   │   │   │   │   └── EasyConnectString.php
│   │   │   │   │   ├── AbstractSQLiteDriver
│   │   │   │   │   │   └── Middleware
│   │   │   │   │   │       └── EnableForeignKeys.php
│   │   │   │   │   ├── AbstractSQLServerDriver
│   │   │   │   │   │   └── Exception
│   │   │   │   │   │       └── PortWithoutHost.php
│   │   │   │   │   ├── API
│   │   │   │   │   │   ├── IBMDB2
│   │   │   │   │   │   │   └── ExceptionConverter.php
│   │   │   │   │   │   ├── MySQL
│   │   │   │   │   │   │   └── ExceptionConverter.php
│   │   │   │   │   │   ├── OCI
│   │   │   │   │   │   │   └── ExceptionConverter.php
│   │   │   │   │   │   ├── PostgreSQL
│   │   │   │   │   │   │   └── ExceptionConverter.php
│   │   │   │   │   │   ├── SQLite
│   │   │   │   │   │   │   ├── ExceptionConverter.php
│   │   │   │   │   │   │   └── UserDefinedFunctions.php
│   │   │   │   │   │   ├── SQLSrv
│   │   │   │   │   │   │   └── ExceptionConverter.php
│   │   │   │   │   │   └── ExceptionConverter.php
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   └── UnknownParameterType.php
│   │   │   │   │   ├── IBMDB2
│   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   ├── CannotCopyStreamToStream.php
│   │   │   │   │   │   │   ├── CannotCreateTemporaryFile.php
│   │   │   │   │   │   │   ├── ConnectionError.php
│   │   │   │   │   │   │   ├── ConnectionFailed.php
│   │   │   │   │   │   │   ├── Factory.php
│   │   │   │   │   │   │   ├── PrepareFailed.php
│   │   │   │   │   │   │   └── StatementError.php
│   │   │   │   │   │   ├── Connection.php
│   │   │   │   │   │   ├── DataSourceName.php
│   │   │   │   │   │   ├── Driver.php
│   │   │   │   │   │   ├── Result.php
│   │   │   │   │   │   └── Statement.php
│   │   │   │   │   ├── Middleware
│   │   │   │   │   │   ├── AbstractConnectionMiddleware.php
│   │   │   │   │   │   ├── AbstractDriverMiddleware.php
│   │   │   │   │   │   ├── AbstractResultMiddleware.php
│   │   │   │   │   │   └── AbstractStatementMiddleware.php
│   │   │   │   │   ├── Mysqli
│   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   ├── ConnectionError.php
│   │   │   │   │   │   │   ├── ConnectionFailed.php
│   │   │   │   │   │   │   ├── FailedReadingStreamOffset.php
│   │   │   │   │   │   │   ├── HostRequired.php
│   │   │   │   │   │   │   ├── InvalidCharset.php
│   │   │   │   │   │   │   ├── InvalidOption.php
│   │   │   │   │   │   │   ├── NonStreamResourceUsedAsLargeObject.php
│   │   │   │   │   │   │   └── StatementError.php
│   │   │   │   │   │   ├── Initializer
│   │   │   │   │   │   │   ├── Charset.php
│   │   │   │   │   │   │   ├── Options.php
│   │   │   │   │   │   │   └── Secure.php
│   │   │   │   │   │   ├── Connection.php
│   │   │   │   │   │   ├── Driver.php
│   │   │   │   │   │   ├── Initializer.php
│   │   │   │   │   │   ├── Result.php
│   │   │   │   │   │   └── Statement.php
│   │   │   │   │   ├── OCI8
│   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   ├── ConnectionFailed.php
│   │   │   │   │   │   │   ├── Error.php
│   │   │   │   │   │   │   ├── InvalidConfiguration.php
│   │   │   │   │   │   │   ├── NonTerminatedStringLiteral.php
│   │   │   │   │   │   │   ├── SequenceDoesNotExist.php
│   │   │   │   │   │   │   └── UnknownParameterIndex.php
│   │   │   │   │   │   ├── Middleware
│   │   │   │   │   │   │   └── InitializeSession.php
│   │   │   │   │   │   ├── Connection.php
│   │   │   │   │   │   ├── ConvertPositionalToNamedPlaceholders.php
│   │   │   │   │   │   ├── Driver.php
│   │   │   │   │   │   ├── ExecutionMode.php
│   │   │   │   │   │   ├── Result.php
│   │   │   │   │   │   └── Statement.php
│   │   │   │   │   ├── PDO
│   │   │   │   │   │   ├── MySQL
│   │   │   │   │   │   │   └── Driver.php
│   │   │   │   │   │   ├── OCI
│   │   │   │   │   │   │   └── Driver.php
│   │   │   │   │   │   ├── PgSQL
│   │   │   │   │   │   │   └── Driver.php
│   │   │   │   │   │   ├── SQLite
│   │   │   │   │   │   │   └── Driver.php
│   │   │   │   │   │   ├── SQLSrv
│   │   │   │   │   │   │   ├── Connection.php
│   │   │   │   │   │   │   ├── Driver.php
│   │   │   │   │   │   │   └── Statement.php
│   │   │   │   │   │   ├── Connection.php
│   │   │   │   │   │   ├── Exception.php
│   │   │   │   │   │   ├── ParameterTypeMap.php
│   │   │   │   │   │   ├── PDOException.php
│   │   │   │   │   │   ├── Result.php
│   │   │   │   │   │   └── Statement.php
│   │   │   │   │   ├── PgSQL
│   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   ├── UnexpectedValue.php
│   │   │   │   │   │   │   └── UnknownParameter.php
│   │   │   │   │   │   ├── Connection.php
│   │   │   │   │   │   ├── ConvertParameters.php
│   │   │   │   │   │   ├── Driver.php
│   │   │   │   │   │   ├── Exception.php
│   │   │   │   │   │   ├── Result.php
│   │   │   │   │   │   └── Statement.php
│   │   │   │   │   ├── SQLite3
│   │   │   │   │   │   ├── Connection.php
│   │   │   │   │   │   ├── Driver.php
│   │   │   │   │   │   ├── Exception.php
│   │   │   │   │   │   ├── Result.php
│   │   │   │   │   │   └── Statement.php
│   │   │   │   │   ├── SQLSrv
│   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   └── Error.php
│   │   │   │   │   │   ├── Connection.php
│   │   │   │   │   │   ├── Driver.php
│   │   │   │   │   │   ├── Result.php
│   │   │   │   │   │   └── Statement.php
│   │   │   │   │   ├── AbstractDB2Driver.php
│   │   │   │   │   ├── AbstractException.php
│   │   │   │   │   ├── AbstractMySQLDriver.php
│   │   │   │   │   ├── AbstractOracleDriver.php
│   │   │   │   │   ├── AbstractPostgreSQLDriver.php
│   │   │   │   │   ├── AbstractSQLiteDriver.php
│   │   │   │   │   ├── AbstractSQLServerDriver.php
│   │   │   │   │   ├── Connection.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── FetchUtils.php
│   │   │   │   │   ├── Middleware.php
│   │   │   │   │   ├── Result.php
│   │   │   │   │   ├── ServerInfoAwareConnection.php
│   │   │   │   │   └── Statement.php
│   │   │   │   ├── Event
│   │   │   │   │   ├── Listeners
│   │   │   │   │   │   ├── OracleSessionInit.php
│   │   │   │   │   │   ├── SQLiteSessionInit.php
│   │   │   │   │   │   └── SQLSessionInit.php
│   │   │   │   │   ├── ConnectionEventArgs.php
│   │   │   │   │   ├── SchemaAlterTableAddColumnEventArgs.php
│   │   │   │   │   ├── SchemaAlterTableChangeColumnEventArgs.php
│   │   │   │   │   ├── SchemaAlterTableEventArgs.php
│   │   │   │   │   ├── SchemaAlterTableRemoveColumnEventArgs.php
│   │   │   │   │   ├── SchemaAlterTableRenameColumnEventArgs.php
│   │   │   │   │   ├── SchemaColumnDefinitionEventArgs.php
│   │   │   │   │   ├── SchemaCreateTableColumnEventArgs.php
│   │   │   │   │   ├── SchemaCreateTableEventArgs.php
│   │   │   │   │   ├── SchemaDropTableEventArgs.php
│   │   │   │   │   ├── SchemaEventArgs.php
│   │   │   │   │   ├── SchemaIndexDefinitionEventArgs.php
│   │   │   │   │   ├── TransactionBeginEventArgs.php
│   │   │   │   │   ├── TransactionCommitEventArgs.php
│   │   │   │   │   ├── TransactionEventArgs.php
│   │   │   │   │   └── TransactionRollBackEventArgs.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── ConnectionException.php
│   │   │   │   │   ├── ConnectionLost.php
│   │   │   │   │   ├── ConstraintViolationException.php
│   │   │   │   │   ├── DatabaseDoesNotExist.php
│   │   │   │   │   ├── DatabaseObjectExistsException.php
│   │   │   │   │   ├── DatabaseObjectNotFoundException.php
│   │   │   │   │   ├── DatabaseRequired.php
│   │   │   │   │   ├── DeadlockException.php
│   │   │   │   │   ├── DriverException.php
│   │   │   │   │   ├── ForeignKeyConstraintViolationException.php
│   │   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   │   ├── InvalidFieldNameException.php
│   │   │   │   │   ├── InvalidLockMode.php
│   │   │   │   │   ├── LockWaitTimeoutException.php
│   │   │   │   │   ├── MalformedDsnException.php
│   │   │   │   │   ├── NoKeyValue.php
│   │   │   │   │   ├── NonUniqueFieldNameException.php
│   │   │   │   │   ├── NotNullConstraintViolationException.php
│   │   │   │   │   ├── ReadOnlyException.php
│   │   │   │   │   ├── RetryableException.php
│   │   │   │   │   ├── SchemaDoesNotExist.php
│   │   │   │   │   ├── ServerException.php
│   │   │   │   │   ├── SyntaxErrorException.php
│   │   │   │   │   ├── TableExistsException.php
│   │   │   │   │   ├── TableNotFoundException.php
│   │   │   │   │   ├── TransactionRolledBack.php
│   │   │   │   │   └── UniqueConstraintViolationException.php
│   │   │   │   ├── Id
│   │   │   │   │   ├── TableGenerator.php
│   │   │   │   │   └── TableGeneratorSchemaVisitor.php
│   │   │   │   ├── Logging
│   │   │   │   │   ├── Connection.php
│   │   │   │   │   ├── DebugStack.php
│   │   │   │   │   ├── Driver.php
│   │   │   │   │   ├── LoggerChain.php
│   │   │   │   │   ├── Middleware.php
│   │   │   │   │   ├── SQLLogger.php
│   │   │   │   │   └── Statement.php
│   │   │   │   ├── Platforms
│   │   │   │   │   ├── Keywords
│   │   │   │   │   │   ├── DB2Keywords.php
│   │   │   │   │   │   ├── KeywordList.php
│   │   │   │   │   │   ├── MariaDb102Keywords.php
│   │   │   │   │   │   ├── MariaDBKeywords.php
│   │   │   │   │   │   ├── MySQL57Keywords.php
│   │   │   │   │   │   ├── MySQL80Keywords.php
│   │   │   │   │   │   ├── MySQL84Keywords.php
│   │   │   │   │   │   ├── MySQLKeywords.php
│   │   │   │   │   │   ├── OracleKeywords.php
│   │   │   │   │   │   ├── PostgreSQL100Keywords.php
│   │   │   │   │   │   ├── PostgreSQL94Keywords.php
│   │   │   │   │   │   ├── PostgreSQLKeywords.php
│   │   │   │   │   │   ├── ReservedKeywordsValidator.php
│   │   │   │   │   │   ├── SQLiteKeywords.php
│   │   │   │   │   │   ├── SQLServer2012Keywords.php
│   │   │   │   │   │   └── SQLServerKeywords.php
│   │   │   │   │   ├── MySQL
│   │   │   │   │   │   ├── CollationMetadataProvider
│   │   │   │   │   │   │   ├── CachingCollationMetadataProvider.php
│   │   │   │   │   │   │   └── ConnectionCollationMetadataProvider.php
│   │   │   │   │   │   ├── CollationMetadataProvider.php
│   │   │   │   │   │   └── Comparator.php
│   │   │   │   │   ├── SQLite
│   │   │   │   │   │   └── Comparator.php
│   │   │   │   │   ├── SQLServer
│   │   │   │   │   │   ├── SQL
│   │   │   │   │   │   │   └── Builder
│   │   │   │   │   │   │       └── SQLServerSelectSQLBuilder.php
│   │   │   │   │   │   └── Comparator.php
│   │   │   │   │   ├── AbstractMySQLPlatform.php
│   │   │   │   │   ├── AbstractPlatform.php
│   │   │   │   │   ├── DateIntervalUnit.php
│   │   │   │   │   ├── DB2111Platform.php
│   │   │   │   │   ├── DB2Platform.php
│   │   │   │   │   ├── MariaDb1010Platform.php
│   │   │   │   │   ├── MariaDb1027Platform.php
│   │   │   │   │   ├── MariaDb1043Platform.php
│   │   │   │   │   ├── MariaDb1052Platform.php
│   │   │   │   │   ├── MariaDb1060Platform.php
│   │   │   │   │   ├── MariaDBPlatform.php
│   │   │   │   │   ├── MySQL57Platform.php
│   │   │   │   │   ├── MySQL80Platform.php
│   │   │   │   │   ├── MySQL84Platform.php
│   │   │   │   │   ├── MySQLPlatform.php
│   │   │   │   │   ├── OraclePlatform.php
│   │   │   │   │   ├── PostgreSQL100Platform.php
│   │   │   │   │   ├── PostgreSQL120Platform.php
│   │   │   │   │   ├── PostgreSQL94Platform.php
│   │   │   │   │   ├── PostgreSQLPlatform.php
│   │   │   │   │   ├── SqlitePlatform.php
│   │   │   │   │   ├── SQLServer2012Platform.php
│   │   │   │   │   ├── SQLServerPlatform.php
│   │   │   │   │   └── TrimMode.php
│   │   │   │   ├── Portability
│   │   │   │   │   ├── Connection.php
│   │   │   │   │   ├── Converter.php
│   │   │   │   │   ├── Driver.php
│   │   │   │   │   ├── Middleware.php
│   │   │   │   │   ├── OptimizeFlags.php
│   │   │   │   │   ├── Result.php
│   │   │   │   │   └── Statement.php
│   │   │   │   ├── Query
│   │   │   │   │   ├── Expression
│   │   │   │   │   │   ├── CompositeExpression.php
│   │   │   │   │   │   └── ExpressionBuilder.php
│   │   │   │   │   ├── ForUpdate
│   │   │   │   │   │   └── ConflictResolutionMode.php
│   │   │   │   │   ├── ForUpdate.php
│   │   │   │   │   ├── Limit.php
│   │   │   │   │   ├── QueryBuilder.php
│   │   │   │   │   ├── QueryException.php
│   │   │   │   │   └── SelectQuery.php
│   │   │   │   ├── Schema
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── ColumnAlreadyExists.php
│   │   │   │   │   │   ├── ColumnDoesNotExist.php
│   │   │   │   │   │   ├── ForeignKeyDoesNotExist.php
│   │   │   │   │   │   ├── IndexAlreadyExists.php
│   │   │   │   │   │   ├── IndexDoesNotExist.php
│   │   │   │   │   │   ├── IndexNameInvalid.php
│   │   │   │   │   │   ├── InvalidTableName.php
│   │   │   │   │   │   ├── NamedForeignKeyRequired.php
│   │   │   │   │   │   ├── NamespaceAlreadyExists.php
│   │   │   │   │   │   ├── SequenceAlreadyExists.php
│   │   │   │   │   │   ├── SequenceDoesNotExist.php
│   │   │   │   │   │   ├── TableAlreadyExists.php
│   │   │   │   │   │   ├── TableDoesNotExist.php
│   │   │   │   │   │   ├── UniqueConstraintDoesNotExist.php
│   │   │   │   │   │   └── UnknownColumnOption.php
│   │   │   │   │   ├── Visitor
│   │   │   │   │   │   ├── AbstractVisitor.php
│   │   │   │   │   │   ├── CreateSchemaSqlCollector.php
│   │   │   │   │   │   ├── DropSchemaSqlCollector.php
│   │   │   │   │   │   ├── Graphviz.php
│   │   │   │   │   │   ├── NamespaceVisitor.php
│   │   │   │   │   │   ├── RemoveNamespacedAssets.php
│   │   │   │   │   │   └── Visitor.php
│   │   │   │   │   ├── AbstractAsset.php
│   │   │   │   │   ├── AbstractSchemaManager.php
│   │   │   │   │   ├── Column.php
│   │   │   │   │   ├── ColumnDiff.php
│   │   │   │   │   ├── Comparator.php
│   │   │   │   │   ├── Constraint.php
│   │   │   │   │   ├── DB2SchemaManager.php
│   │   │   │   │   ├── DefaultSchemaManagerFactory.php
│   │   │   │   │   ├── ForeignKeyConstraint.php
│   │   │   │   │   ├── Identifier.php
│   │   │   │   │   ├── Index.php
│   │   │   │   │   ├── LegacySchemaManagerFactory.php
│   │   │   │   │   ├── MySQLSchemaManager.php
│   │   │   │   │   ├── OracleSchemaManager.php
│   │   │   │   │   ├── PostgreSQLSchemaManager.php
│   │   │   │   │   ├── Schema.php
│   │   │   │   │   ├── SchemaConfig.php
│   │   │   │   │   ├── SchemaDiff.php
│   │   │   │   │   ├── SchemaException.php
│   │   │   │   │   ├── SchemaManagerFactory.php
│   │   │   │   │   ├── Sequence.php
│   │   │   │   │   ├── SqliteSchemaManager.php
│   │   │   │   │   ├── SQLServerSchemaManager.php
│   │   │   │   │   ├── Table.php
│   │   │   │   │   ├── TableDiff.php
│   │   │   │   │   ├── UniqueConstraint.php
│   │   │   │   │   └── View.php
│   │   │   │   ├── SQL
│   │   │   │   │   ├── Builder
│   │   │   │   │   │   ├── CreateSchemaObjectsSQLBuilder.php
│   │   │   │   │   │   ├── DefaultSelectSQLBuilder.php
│   │   │   │   │   │   ├── DropSchemaObjectsSQLBuilder.php
│   │   │   │   │   │   └── SelectSQLBuilder.php
│   │   │   │   │   ├── Parser
│   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   └── RegularExpressionError.php
│   │   │   │   │   │   ├── Exception.php
│   │   │   │   │   │   └── Visitor.php
│   │   │   │   │   └── Parser.php
│   │   │   │   ├── Tools
│   │   │   │   │   ├── Console
│   │   │   │   │   │   ├── Command
│   │   │   │   │   │   │   ├── CommandCompatibility.php
│   │   │   │   │   │   │   ├── ReservedWordsCommand.php
│   │   │   │   │   │   │   └── RunSqlCommand.php
│   │   │   │   │   │   ├── ConnectionProvider
│   │   │   │   │   │   │   └── SingleConnectionProvider.php
│   │   │   │   │   │   ├── ConnectionNotFound.php
│   │   │   │   │   │   ├── ConnectionProvider.php
│   │   │   │   │   │   └── ConsoleRunner.php
│   │   │   │   │   └── DsnParser.php
│   │   │   │   ├── Types
│   │   │   │   │   ├── ArrayType.php
│   │   │   │   │   ├── AsciiStringType.php
│   │   │   │   │   ├── BigIntType.php
│   │   │   │   │   ├── BinaryType.php
│   │   │   │   │   ├── BlobType.php
│   │   │   │   │   ├── BooleanType.php
│   │   │   │   │   ├── ConversionException.php
│   │   │   │   │   ├── DateImmutableType.php
│   │   │   │   │   ├── DateIntervalType.php
│   │   │   │   │   ├── DateTimeImmutableType.php
│   │   │   │   │   ├── DateTimeType.php
│   │   │   │   │   ├── DateTimeTzImmutableType.php
│   │   │   │   │   ├── DateTimeTzType.php
│   │   │   │   │   ├── DateType.php
│   │   │   │   │   ├── DecimalType.php
│   │   │   │   │   ├── FloatType.php
│   │   │   │   │   ├── GuidType.php
│   │   │   │   │   ├── IntegerType.php
│   │   │   │   │   ├── JsonType.php
│   │   │   │   │   ├── ObjectType.php
│   │   │   │   │   ├── PhpDateTimeMappingType.php
│   │   │   │   │   ├── PhpIntegerMappingType.php
│   │   │   │   │   ├── SimpleArrayType.php
│   │   │   │   │   ├── SmallIntType.php
│   │   │   │   │   ├── StringType.php
│   │   │   │   │   ├── TextType.php
│   │   │   │   │   ├── TimeImmutableType.php
│   │   │   │   │   ├── TimeType.php
│   │   │   │   │   ├── Type.php
│   │   │   │   │   ├── TypeRegistry.php
│   │   │   │   │   ├── Types.php
│   │   │   │   │   ├── VarDateTimeImmutableType.php
│   │   │   │   │   └── VarDateTimeType.php
│   │   │   │   ├── ArrayParameterType.php
│   │   │   │   ├── ColumnCase.php
│   │   │   │   ├── Configuration.php
│   │   │   │   ├── Connection.php
│   │   │   │   ├── ConnectionException.php
│   │   │   │   ├── Driver.php
│   │   │   │   ├── DriverManager.php
│   │   │   │   ├── Events.php
│   │   │   │   ├── Exception.php
│   │   │   │   ├── ExpandArrayParameters.php
│   │   │   │   ├── FetchMode.php
│   │   │   │   ├── LockMode.php
│   │   │   │   ├── ParameterType.php
│   │   │   │   ├── Query.php
│   │   │   │   ├── Result.php
│   │   │   │   ├── Statement.php
│   │   │   │   ├── TransactionIsolationLevel.php
│   │   │   │   └── VersionAwarePlatformDriver.php
│   │   │   ├── static-analysis
│   │   │   │   ├── abstract-schema-manager-covariant-template.php
│   │   │   │   ├── driver-manager-get-available-drivers-return-type.php
│   │   │   │   └── driver-manager-retrieves-correct-connection-type.php
│   │   │   ├── tests
│   │   │   │   ├── Cache
│   │   │   │   │   └── QueryCacheProfileTest.php
│   │   │   │   ├── Connection
│   │   │   │   │   ├── CachedQueryTest.php
│   │   │   │   │   ├── ExpandArrayParametersTest.php
│   │   │   │   │   └── LoggingTest.php
│   │   │   │   ├── Driver
│   │   │   │   │   ├── AbstractOracleDriver
│   │   │   │   │   │   └── EasyConnectStringTest.php
│   │   │   │   │   ├── IBMDB2
│   │   │   │   │   │   ├── DataSourceNameTest.php
│   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   ├── Middleware
│   │   │   │   │   │   ├── AbstractConnectionMiddlewareTest.php
│   │   │   │   │   │   ├── AbstractDriverMiddlewareTest.php
│   │   │   │   │   │   ├── AbstractResultMiddlewareTest.php
│   │   │   │   │   │   └── AbstractStatementMiddlewareTest.php
│   │   │   │   │   ├── Mysqli
│   │   │   │   │   │   ├── ConnectionTest.php
│   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   ├── OCI8
│   │   │   │   │   │   ├── ConvertPositionalToNamedPlaceholdersTest.php
│   │   │   │   │   │   ├── DriverTest.php
│   │   │   │   │   │   └── ExecutionModeTest.php
│   │   │   │   │   ├── PDO
│   │   │   │   │   │   ├── MySQL
│   │   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   │   ├── OCI
│   │   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   │   ├── PgSQL
│   │   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   │   ├── SQLite
│   │   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   │   ├── SQLSrv
│   │   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   │   └── ExceptionTest.php
│   │   │   │   │   ├── SQLSrv
│   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   ├── AbstractDB2DriverTestCase.php
│   │   │   │   │   ├── AbstractDriverTestCase.php
│   │   │   │   │   ├── AbstractMySQLDriverTestCase.php
│   │   │   │   │   ├── AbstractOracleDriverTestCase.php
│   │   │   │   │   ├── AbstractPostgreSQLDriverTestCase.php
│   │   │   │   │   ├── AbstractSQLiteDriverTestCase.php
│   │   │   │   │   ├── AbstractSQLServerDriverTestCase.php
│   │   │   │   │   └── VersionAwarePlatformDriverTest.php
│   │   │   │   ├── Events
│   │   │   │   │   ├── OracleSessionInitTest.php
│   │   │   │   │   └── SQLSessionInitTest.php
│   │   │   │   ├── Exception
│   │   │   │   │   └── InvalidArgumentExceptionTest.php
│   │   │   │   ├── Functional
│   │   │   │   │   ├── Connection
│   │   │   │   │   │   ├── ConnectionLostTest.php
│   │   │   │   │   │   ├── FetchEmptyTest.php
│   │   │   │   │   │   └── FetchTest.php
│   │   │   │   │   ├── Driver
│   │   │   │   │   │   ├── IBMDB2
│   │   │   │   │   │   │   ├── DriverTest.php
│   │   │   │   │   │   │   └── StatementTest.php
│   │   │   │   │   │   ├── Mysqli
│   │   │   │   │   │   │   ├── ConnectionTest.php
│   │   │   │   │   │   │   ├── DriverTest.php
│   │   │   │   │   │   │   ├── ResultTest.php
│   │   │   │   │   │   │   └── StatementTest.php
│   │   │   │   │   │   ├── OCI8
│   │   │   │   │   │   │   ├── ConnectionTest.php
│   │   │   │   │   │   │   ├── DriverTest.php
│   │   │   │   │   │   │   ├── ResultTest.php
│   │   │   │   │   │   │   └── StatementTest.php
│   │   │   │   │   │   ├── PDO
│   │   │   │   │   │   │   ├── MySQL
│   │   │   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   │   │   ├── OCI
│   │   │   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   │   │   ├── PgSQL
│   │   │   │   │   │   │   │   ├── ConnectionTest.php
│   │   │   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   │   │   ├── SQLite
│   │   │   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   │   │   └── SQLSrv
│   │   │   │   │   │   │       └── DriverTest.php
│   │   │   │   │   │   ├── PgSQL
│   │   │   │   │   │   │   ├── DriverTest.php
│   │   │   │   │   │   │   ├── ResultTest.php
│   │   │   │   │   │   │   └── StatementTest.php
│   │   │   │   │   │   ├── SQLite3
│   │   │   │   │   │   │   └── DriverTest.php
│   │   │   │   │   │   ├── SQLSrv
│   │   │   │   │   │   │   ├── DriverTest.php
│   │   │   │   │   │   │   └── StatementTest.php
│   │   │   │   │   │   ├── AbstractDriverTestCase.php
│   │   │   │   │   │   ├── AbstractPostgreSQLDriverTestCase.php
│   │   │   │   │   │   ├── DBAL6024Test.php
│   │   │   │   │   │   └── DBAL6044Test.php
│   │   │   │   │   ├── LockMode
│   │   │   │   │   │   └── NoneTest.php
│   │   │   │   │   ├── ParameterTypes
│   │   │   │   │   │   └── AsciiTest.php
│   │   │   │   │   ├── Platform
│   │   │   │   │   │   ├── AddColumnWithDefaultTest.php
│   │   │   │   │   │   ├── AlterColumnTest.php
│   │   │   │   │   │   ├── BitwiseExpressionTest.php
│   │   │   │   │   │   ├── ConcatExpressionTest.php
│   │   │   │   │   │   ├── DateExpressionTest.php
│   │   │   │   │   │   ├── DefaultExpressionTest.php
│   │   │   │   │   │   ├── LengthExpressionTest.php
│   │   │   │   │   │   ├── ModExpressionTest.php
│   │   │   │   │   │   ├── NewPrimaryKeyWithNewAutoIncrementColumnTest.php
│   │   │   │   │   │   ├── OtherSchemaTest.php
│   │   │   │   │   │   ├── PlatformRestrictionsTest.php
│   │   │   │   │   │   ├── QuotingTest.php
│   │   │   │   │   │   └── RenameColumnTest.php
│   │   │   │   │   ├── Query
│   │   │   │   │   │   └── QueryBuilderTest.php
│   │   │   │   │   ├── Schema
│   │   │   │   │   │   ├── MySQL
│   │   │   │   │   │   │   ├── ComparatorTest.php
│   │   │   │   │   │   │   ├── JsonCollationTest.php
│   │   │   │   │   │   │   └── PointType.php
│   │   │   │   │   │   ├── PostgreSQL
│   │   │   │   │   │   │   └── SchemaTest.php
│   │   │   │   │   │   ├── SQLite
│   │   │   │   │   │   │   └── ComparatorTest.php
│   │   │   │   │   │   ├── Types
│   │   │   │   │   │   │   ├── Money.php
│   │   │   │   │   │   │   └── MoneyType.php
│   │   │   │   │   │   ├── ComparatorTest.php
│   │   │   │   │   │   ├── ComparatorTestUtils.php
│   │   │   │   │   │   ├── CustomIntrospectionTest.php
│   │   │   │   │   │   ├── Db2SchemaManagerTest.php
│   │   │   │   │   │   ├── DefaultValueTest.php
│   │   │   │   │   │   ├── MySQLSchemaManagerTest.php
│   │   │   │   │   │   ├── OracleSchemaManagerTest.php
│   │   │   │   │   │   ├── PostgreSQLSchemaManagerTest.php
│   │   │   │   │   │   ├── SchemaManagerFunctionalTestCase.php
│   │   │   │   │   │   ├── SchemaTest.php
│   │   │   │   │   │   ├── SqliteSchemaManagerTest.php
│   │   │   │   │   │   └── SQLServerSchemaManagerTest.php
│   │   │   │   │   ├── SQL
│   │   │   │   │   │   ├── Builder
│   │   │   │   │   │   │   └── CreateAndDropSchemaObjectsSQLBuilderTest.php
│   │   │   │   │   │   └── ParserTest.php
│   │   │   │   │   ├── Ticket
│   │   │   │   │   │   ├── DBAL168Test.php
│   │   │   │   │   │   ├── DBAL202Test.php
│   │   │   │   │   │   ├── DBAL461Test.php
│   │   │   │   │   │   ├── DBAL510Test.php
│   │   │   │   │   │   └── DBAL752Test.php
│   │   │   │   │   ├── Types
│   │   │   │   │   │   ├── AsciiStringTest.php
│   │   │   │   │   │   ├── BinaryTest.php
│   │   │   │   │   │   ├── DecimalTest.php
│   │   │   │   │   │   ├── GuidTest.php
│   │   │   │   │   │   └── JsonTest.php
│   │   │   │   │   ├── AutoIncrementColumnTest.php
│   │   │   │   │   ├── BinaryDataAccessTest.php
│   │   │   │   │   ├── BlobTest.php
│   │   │   │   │   ├── ConnectionTest.php
│   │   │   │   │   ├── DataAccessTest.php
│   │   │   │   │   ├── ExceptionTest.php
│   │   │   │   │   ├── FetchBooleanTest.php
│   │   │   │   │   ├── ForeignKeyConstraintViolationsTest.php
│   │   │   │   │   ├── LegacyAPITest.php
│   │   │   │   │   ├── LikeWildcardsEscapingTest.php
│   │   │   │   │   ├── ModifyLimitQueryTest.php
│   │   │   │   │   ├── NamedParametersTest.php
│   │   │   │   │   ├── PortabilityTest.php
│   │   │   │   │   ├── PrimaryReadReplicaConnectionTest.php
│   │   │   │   │   ├── ResultTest.php
│   │   │   │   │   ├── StatementTest.php
│   │   │   │   │   ├── TableGeneratorTest.php
│   │   │   │   │   ├── TemporaryTableTest.php
│   │   │   │   │   ├── TransactionTest.php
│   │   │   │   │   ├── TypeConversionTest.php
│   │   │   │   │   ├── UniqueConstraintViolationsTest.php
│   │   │   │   │   └── WriteTest.php
│   │   │   │   ├── Logging
│   │   │   │   │   ├── DebugStackTest.php
│   │   │   │   │   ├── LoggerChainTest.php
│   │   │   │   │   └── MiddlewareTest.php
│   │   │   │   ├── Platforms
│   │   │   │   │   ├── MySQL
│   │   │   │   │   │   ├── CollationMetadataProvider
│   │   │   │   │   │   │   └── CachingCollationMetadataProviderTest.php
│   │   │   │   │   │   ├── ComparatorTest.php
│   │   │   │   │   │   └── MariaDbJsonComparatorTest.php
│   │   │   │   │   ├── SQLite
│   │   │   │   │   │   └── ComparatorTest.php
│   │   │   │   │   ├── SQLServer
│   │   │   │   │   │   └── ComparatorTest.php
│   │   │   │   │   ├── AbstractMySQLPlatformTestCase.php
│   │   │   │   │   ├── AbstractPlatformTestCase.php
│   │   │   │   │   ├── DB2PlatformTest.php
│   │   │   │   │   ├── MariaDb1027PlatformTest.php
│   │   │   │   │   ├── MariaDb1043PlatformTest.php
│   │   │   │   │   ├── MariaDb1052PlatformTest.php
│   │   │   │   │   ├── MySQL57PlatformTest.php
│   │   │   │   │   ├── MySQL84PlatformTest.php
│   │   │   │   │   ├── MySQLPlatformTest.php
│   │   │   │   │   ├── OraclePlatformTest.php
│   │   │   │   │   ├── PostgreSQL100PlatformTest.php
│   │   │   │   │   ├── PostgreSQLPlatformTest.php
│   │   │   │   │   ├── ReservedKeywordsValidatorTest.php
│   │   │   │   │   ├── SqlitePlatformTest.php
│   │   │   │   │   └── SQLServerPlatformTest.php
│   │   │   │   ├── Portability
│   │   │   │   │   ├── ConnectionTest.php
│   │   │   │   │   ├── ConverterTest.php
│   │   │   │   │   ├── OptimizeFlagsTest.php
│   │   │   │   │   ├── ResultTest.php
│   │   │   │   │   └── StatementTest.php
│   │   │   │   ├── Query
│   │   │   │   │   ├── Expression
│   │   │   │   │   │   ├── CompositeExpressionTest.php
│   │   │   │   │   │   └── ExpressionBuilderTest.php
│   │   │   │   │   └── QueryBuilderTest.php
│   │   │   │   ├── Schema
│   │   │   │   │   ├── Platforms
│   │   │   │   │   │   └── MySQLSchemaTest.php
│   │   │   │   │   ├── Visitor
│   │   │   │   │   │   ├── CreateSchemaSqlCollectorTest.php
│   │   │   │   │   │   ├── DropSchemaSqlCollectorTest.php
│   │   │   │   │   │   └── RemoveNamespacedAssetsTest.php
│   │   │   │   │   ├── AbstractComparatorTestCase.php
│   │   │   │   │   ├── ColumnDiffTest.php
│   │   │   │   │   ├── ColumnTest.php
│   │   │   │   │   ├── ForeignKeyConstraintTest.php
│   │   │   │   │   ├── IndexTest.php
│   │   │   │   │   ├── MySQLInheritCharsetTest.php
│   │   │   │   │   ├── SchemaTest.php
│   │   │   │   │   ├── SequenceTest.php
│   │   │   │   │   ├── SqliteSchemaManagerTest.php
│   │   │   │   │   ├── TableDiffTest.php
│   │   │   │   │   └── TableTest.php
│   │   │   │   ├── SQL
│   │   │   │   │   └── ParserTest.php
│   │   │   │   ├── Tools
│   │   │   │   │   ├── Console
│   │   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   │   └── select-1.txt
│   │   │   │   │   │   └── RunSqlCommandTest.php
│   │   │   │   │   └── DsnParserTest.php
│   │   │   │   ├── Types
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   └── UnserializeWithDeprecationObject.php
│   │   │   │   │   ├── ArrayTest.php
│   │   │   │   │   ├── AsciiStringTest.php
│   │   │   │   │   ├── BaseDateTypeTestCase.php
│   │   │   │   │   ├── BinaryTest.php
│   │   │   │   │   ├── BlobTest.php
│   │   │   │   │   ├── BooleanTest.php
│   │   │   │   │   ├── ConversionExceptionTest.php
│   │   │   │   │   ├── DateImmutableTypeTest.php
│   │   │   │   │   ├── DateIntervalTest.php
│   │   │   │   │   ├── DateTest.php
│   │   │   │   │   ├── DateTimeImmutableTypeTest.php
│   │   │   │   │   ├── DateTimeTest.php
│   │   │   │   │   ├── DateTimeTzImmutableTypeTest.php
│   │   │   │   │   ├── DateTimeTzTest.php
│   │   │   │   │   ├── DecimalTest.php
│   │   │   │   │   ├── FloatTest.php
│   │   │   │   │   ├── GuidTypeTest.php
│   │   │   │   │   ├── IntegerTest.php
│   │   │   │   │   ├── JsonTest.php
│   │   │   │   │   ├── ObjectTest.php
│   │   │   │   │   ├── SmallIntTest.php
│   │   │   │   │   ├── StringTest.php
│   │   │   │   │   ├── TimeImmutableTypeTest.php
│   │   │   │   │   ├── TimeTest.php
│   │   │   │   │   ├── TypeRegistryTest.php
│   │   │   │   │   ├── TypeTest.php
│   │   │   │   │   ├── VarDateTimeImmutableTypeTest.php
│   │   │   │   │   └── VarDateTimeTest.php
│   │   │   │   ├── ConfigurationTest.php
│   │   │   │   ├── ConnectionTest.php
│   │   │   │   ├── DriverManagerTest.php
│   │   │   │   ├── ExceptionTest.php
│   │   │   │   ├── FunctionalTestCase.php
│   │   │   │   ├── StatementTest.php
│   │   │   │   └── TestUtil.php
│   │   │   ├── .appveyor.yml
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── CONTRIBUTING.md
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpstan-baseline.neon
│   │   │   ├── phpstan.neon.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── UPGRADE.md
│   │   ├── deprecations
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── composer-lint.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   └── static-analysis.yml
│   │   │   │   └── dependabot.yml
│   │   │   ├── src
│   │   │   │   ├── PHPUnit
│   │   │   │   │   └── VerifyDeprecations.php
│   │   │   │   └── Deprecation.php
│   │   │   ├── test_fixtures
│   │   │   │   ├── src
│   │   │   │   │   ├── ConstructorDeprecation.php
│   │   │   │   │   ├── Foo.php
│   │   │   │   │   └── RootDeprecation.php
│   │   │   │   └── vendor
│   │   │   │       └── doctrine
│   │   │   │           └── foo
│   │   │   │               ├── Bar.php
│   │   │   │               └── Baz.php
│   │   │   ├── tests
│   │   │   │   ├── DeprecationTest.php
│   │   │   │   ├── EnvTest.php
│   │   │   │   └── VerifyDeprecationsTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml
│   │   │   ├── phpstan.neon
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── doctrine-bundle
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── composer-lint.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── documentation.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   ├── static-analysis.yml
│   │   │   │   │   └── test-dev-stability.yml
│   │   │   │   ├── dependabot.yml
│   │   │   │   ├── FUNDING.yml
│   │   │   │   └── stale.yml
│   │   │   ├── config
│   │   │   │   ├── schema
│   │   │   │   │   └── doctrine-1.0.xsd
│   │   │   │   ├── dbal.xml
│   │   │   │   ├── messenger.xml
│   │   │   │   ├── middlewares.xml
│   │   │   │   └── orm.xml
│   │   │   ├── docs
│   │   │   │   └── en
│   │   │   │       ├── configuration.rst
│   │   │   │       ├── custom-id-generators.rst
│   │   │   │       ├── entity-listeners.rst
│   │   │   │       ├── event-listeners.rst
│   │   │   │       ├── index.rst
│   │   │   │       ├── installation.rst
│   │   │   │       └── middlewares.rst
│   │   │   ├── src
│   │   │   │   ├── Attribute
│   │   │   │   │   ├── AsDoctrineListener.php
│   │   │   │   │   ├── AsEntityListener.php
│   │   │   │   │   └── AsMiddleware.php
│   │   │   │   ├── CacheWarmer
│   │   │   │   │   └── DoctrineMetadataCacheWarmer.php
│   │   │   │   ├── Command
│   │   │   │   │   ├── Proxy
│   │   │   │   │   │   ├── ClearMetadataCacheDoctrineCommand.php
│   │   │   │   │   │   ├── ClearQueryCacheDoctrineCommand.php
│   │   │   │   │   │   ├── ClearResultCacheDoctrineCommand.php
│   │   │   │   │   │   ├── CollectionRegionDoctrineCommand.php
│   │   │   │   │   │   ├── ConvertMappingDoctrineCommand.php
│   │   │   │   │   │   ├── CreateSchemaDoctrineCommand.php
│   │   │   │   │   │   ├── DoctrineCommandHelper.php
│   │   │   │   │   │   ├── DropSchemaDoctrineCommand.php
│   │   │   │   │   │   ├── EnsureProductionSettingsDoctrineCommand.php
│   │   │   │   │   │   ├── EntityRegionCacheDoctrineCommand.php
│   │   │   │   │   │   ├── InfoDoctrineCommand.php
│   │   │   │   │   │   ├── OrmProxyCommand.php
│   │   │   │   │   │   ├── QueryRegionCacheDoctrineCommand.php
│   │   │   │   │   │   ├── RunDqlDoctrineCommand.php
│   │   │   │   │   │   ├── RunSqlDoctrineCommand.php
│   │   │   │   │   │   ├── UpdateSchemaDoctrineCommand.php
│   │   │   │   │   │   └── ValidateSchemaCommand.php
│   │   │   │   │   ├── CreateDatabaseDoctrineCommand.php
│   │   │   │   │   ├── DoctrineCommand.php
│   │   │   │   │   ├── DropDatabaseDoctrineCommand.php
│   │   │   │   │   └── ImportMappingDoctrineCommand.php
│   │   │   │   ├── Controller
│   │   │   │   │   └── ProfilerController.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   └── DoctrineDataCollector.php
│   │   │   │   ├── Dbal
│   │   │   │   │   ├── BlacklistSchemaAssetFilter.php
│   │   │   │   │   ├── ManagerRegistryAwareConnectionProvider.php
│   │   │   │   │   ├── RegexSchemaAssetFilter.php
│   │   │   │   │   └── SchemaAssetsFilterManager.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── Compiler
│   │   │   │   │   │   ├── CacheCompatibilityPass.php
│   │   │   │   │   │   ├── CacheSchemaSubscriberPass.php
│   │   │   │   │   │   ├── DbalSchemaFilterPass.php
│   │   │   │   │   │   ├── DoctrineOrmMappingsPass.php
│   │   │   │   │   │   ├── EntityListenerPass.php
│   │   │   │   │   │   ├── IdGeneratorPass.php
│   │   │   │   │   │   ├── MiddlewaresPass.php
│   │   │   │   │   │   ├── RemoveLoggingMiddlewarePass.php
│   │   │   │   │   │   ├── RemoveProfilerControllerPass.php
│   │   │   │   │   │   └── ServiceRepositoryCompilerPass.php
│   │   │   │   │   ├── Configuration.php
│   │   │   │   │   └── DoctrineExtension.php
│   │   │   │   ├── EventSubscriber
│   │   │   │   │   └── EventSubscriberInterface.php
│   │   │   │   ├── Mapping
│   │   │   │   │   ├── ClassMetadataCollection.php
│   │   │   │   │   ├── ClassMetadataFactory.php
│   │   │   │   │   ├── ContainerEntityListenerResolver.php
│   │   │   │   │   ├── DisconnectedMetadataFactory.php
│   │   │   │   │   ├── EntityListenerServiceResolver.php
│   │   │   │   │   └── MappingDriver.php
│   │   │   │   ├── Middleware
│   │   │   │   │   ├── BacktraceDebugDataHolder.php
│   │   │   │   │   ├── ConnectionNameAwareInterface.php
│   │   │   │   │   ├── DebugMiddleware.php
│   │   │   │   │   └── IdleConnectionMiddleware.php
│   │   │   │   ├── Orm
│   │   │   │   │   └── ManagerRegistryAwareEntityManagerProvider.php
│   │   │   │   ├── Repository
│   │   │   │   │   ├── ContainerRepositoryFactory.php
│   │   │   │   │   ├── LazyServiceEntityRepository.php
│   │   │   │   │   ├── RepositoryFactoryCompatibility.php
│   │   │   │   │   ├── ServiceEntityRepository.php
│   │   │   │   │   ├── ServiceEntityRepositoryInterface.php
│   │   │   │   │   └── ServiceEntityRepositoryProxy.php
│   │   │   │   ├── Twig
│   │   │   │   │   └── DoctrineExtension.php
│   │   │   │   ├── ConnectionFactory.php
│   │   │   │   ├── DoctrineBundle.php
│   │   │   │   ├── ManagerConfigurator.php
│   │   │   │   └── Registry.php
│   │   │   ├── templates
│   │   │   │   └── Collector
│   │   │   │       ├── database.svg
│   │   │   │       ├── db.html.twig
│   │   │   │       ├── explain.html.twig
│   │   │   │       └── icon.svg
│   │   │   ├── tests
│   │   │   │   ├── Builder
│   │   │   │   │   └── BundleConfigurationBuilder.php
│   │   │   │   ├── Command
│   │   │   │   │   ├── Proxy
│   │   │   │   │   │   └── InfoDoctrineCommandTest.php
│   │   │   │   │   ├── CreateDatabaseDoctrineTest.php
│   │   │   │   │   ├── DropDatabaseDoctrineTest.php
│   │   │   │   │   └── ImportMappingDoctrineCommandTest.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   └── DoctrineDataCollectorTest.php
│   │   │   │   ├── Dbal
│   │   │   │   │   ├── RegexSchemaAssetFilterTest.php
│   │   │   │   │   └── SchemaAssetsFilterManagerTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── Compiler
│   │   │   │   │   │   ├── CacheCompatibilityPassTest.php
│   │   │   │   │   │   ├── EntityListenerPassTest.php
│   │   │   │   │   │   ├── IdGeneratorPassTest.php
│   │   │   │   │   │   ├── MiddlewarePassTest.php
│   │   │   │   │   │   └── RemoveLoggingMiddlewarePassTest.php
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── Bundles
│   │   │   │   │   │   │   ├── AttributesBundle
│   │   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   │   ├── Test.php
│   │   │   │   │   │   │   │   │   └── TestCustomIdGeneratorEntity.php
│   │   │   │   │   │   │   │   └── AttributesBundle.php
│   │   │   │   │   │   │   ├── NewXmlBundle
│   │   │   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   │   │   └── doctrine
│   │   │   │   │   │   │   │   │       └── Test.orm.xml
│   │   │   │   │   │   │   │   └── src
│   │   │   │   │   │   │   │       ├── Entity
│   │   │   │   │   │   │   │       │   └── Test.php
│   │   │   │   │   │   │   │       └── NewXmlBundle.php
│   │   │   │   │   │   │   ├── RepositoryServiceBundle
│   │   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   │   ├── TestCustomClassRepoEntity.php
│   │   │   │   │   │   │   │   │   ├── TestCustomServiceRepoEntity.php
│   │   │   │   │   │   │   │   │   └── TestDefaultRepoEntity.php
│   │   │   │   │   │   │   │   ├── Repository
│   │   │   │   │   │   │   │   │   ├── TestCustomClassRepoRepository.php
│   │   │   │   │   │   │   │   │   └── TestCustomServiceRepoRepository.php
│   │   │   │   │   │   │   │   └── RepositoryServiceBundle.php
│   │   │   │   │   │   │   ├── Vendor
│   │   │   │   │   │   │   │   └── AnnotationsBundle
│   │   │   │   │   │   │   │       ├── Entity
│   │   │   │   │   │   │   │       │   └── Test.php
│   │   │   │   │   │   │   │       └── AnnotationsBundle.php
│   │   │   │   │   │   │   ├── XmlBundle
│   │   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   │   └── Test.php
│   │   │   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   │   │   └── config
│   │   │   │   │   │   │   │   │       └── doctrine
│   │   │   │   │   │   │   │   │           └── Test.orm.xml
│   │   │   │   │   │   │   │   └── XmlBundle.php
│   │   │   │   │   │   │   └── YamlBundle
│   │   │   │   │   │   │       ├── Entity
│   │   │   │   │   │   │       │   └── Test.php
│   │   │   │   │   │   │       ├── Resources
│   │   │   │   │   │   │       │   └── config
│   │   │   │   │   │   │       │       └── doctrine
│   │   │   │   │   │   │       │           └── Test.orm.yml
│   │   │   │   │   │   │       └── YamlBundle.php
│   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   ├── xml
│   │   │   │   │   │   │   │   ├── dbal_allow_partial_url_override.xml
│   │   │   │   │   │   │   │   ├── dbal_allow_url_override.xml
│   │   │   │   │   │   │   │   ├── dbal_auto_commit.xml
│   │   │   │   │   │   │   │   ├── dbal_collect_schema_errors_disable_no_profiling.xml
│   │   │   │   │   │   │   │   ├── dbal_collect_schema_errors_disable.xml
│   │   │   │   │   │   │   │   ├── dbal_collect_schema_errors_enable.xml
│   │   │   │   │   │   │   │   ├── dbal_dbname_suffix.xml
│   │   │   │   │   │   │   │   ├── dbal_disable_type_comments.xml
│   │   │   │   │   │   │   │   ├── dbal_driver_schemes.xml
│   │   │   │   │   │   │   │   ├── dbal_logging.xml
│   │   │   │   │   │   │   │   ├── dbal_oracle_connectstring.xml
│   │   │   │   │   │   │   │   ├── dbal_oracle_instancename.xml
│   │   │   │   │   │   │   │   ├── dbal_result_cache.xml
│   │   │   │   │   │   │   │   ├── dbal_savepoints.xml
│   │   │   │   │   │   │   │   ├── dbal_schema_filter.xml
│   │   │   │   │   │   │   │   ├── dbal_schema_manager_factory.xml
│   │   │   │   │   │   │   │   ├── dbal_service_multiple_connections.xml
│   │   │   │   │   │   │   │   ├── dbal_service_single_connection.xml
│   │   │   │   │   │   │   │   ├── dbal_service_single_primary_replica_connection.xml
│   │   │   │   │   │   │   │   ├── dbal_types.xml
│   │   │   │   │   │   │   │   ├── orm_attach_entity_listener_tag.xml
│   │   │   │   │   │   │   │   ├── orm_attach_entity_listener.xml
│   │   │   │   │   │   │   │   ├── orm_attach_entity_listeners_two_connections.xml
│   │   │   │   │   │   │   │   ├── orm_attach_lazy_entity_listener.xml
│   │   │   │   │   │   │   │   ├── orm_caches.xml
│   │   │   │   │   │   │   │   ├── orm_entity_listener_abstract.xml
│   │   │   │   │   │   │   │   ├── orm_entity_listener_custom_resolver.xml
│   │   │   │   │   │   │   │   ├── orm_entity_listener_lazy_private.xml
│   │   │   │   │   │   │   │   ├── orm_entity_listener_lazy_resolver_without_interface.xml
│   │   │   │   │   │   │   │   ├── orm_entity_listener_resolver.xml
│   │   │   │   │   │   │   │   ├── orm_fetch_mode_subselect_batch_size.xml
│   │   │   │   │   │   │   │   ├── orm_filters.xml
│   │   │   │   │   │   │   │   ├── orm_functions.xml
│   │   │   │   │   │   │   │   ├── orm_hydration_mode.xml
│   │   │   │   │   │   │   │   ├── orm_identity_generation_preferences.xml
│   │   │   │   │   │   │   │   ├── orm_imports_import.xml
│   │   │   │   │   │   │   │   ├── orm_imports.xml
│   │   │   │   │   │   │   │   ├── orm_multiple_em_bundle_mappings.xml
│   │   │   │   │   │   │   │   ├── orm_namingstrategy.xml
│   │   │   │   │   │   │   │   ├── orm_no_lazy_ghost.xml
│   │   │   │   │   │   │   │   ├── orm_no_report_fields.xml
│   │   │   │   │   │   │   │   ├── orm_proxy.xml
│   │   │   │   │   │   │   │   ├── orm_quotestrategy.xml
│   │   │   │   │   │   │   │   ├── orm_repository_factory.xml
│   │   │   │   │   │   │   │   ├── orm_resolve_target_entity.xml
│   │   │   │   │   │   │   │   ├── orm_schema_ignore_classes.xml
│   │   │   │   │   │   │   │   ├── orm_second_level_cache.xml
│   │   │   │   │   │   │   │   ├── orm_service_multiple_entity_managers.xml
│   │   │   │   │   │   │   │   ├── orm_service_simple_single_entity_manager_without_dbname.xml
│   │   │   │   │   │   │   │   ├── orm_service_simple_single_entity_manager.xml
│   │   │   │   │   │   │   │   ├── orm_service_single_entity_manager.xml
│   │   │   │   │   │   │   │   ├── orm_single_em_bundle_mappings.xml
│   │   │   │   │   │   │   │   ├── orm_single_em_default_table_options.xml
│   │   │   │   │   │   │   │   ├── orm_single_em_dql_functions.xml
│   │   │   │   │   │   │   │   ├── orm_typedfieldmapper.xml
│   │   │   │   │   │   │   │   ├── well_known_schema_filter_default_tables_session.xml
│   │   │   │   │   │   │   │   └── well_known_schema_filter_overridden_tables_session.xml
│   │   │   │   │   │   │   └── yml
│   │   │   │   │   │   │       ├── dbal_allow_partial_url_override.yml
│   │   │   │   │   │   │       ├── dbal_allow_url_override.yml
│   │   │   │   │   │   │       ├── dbal_auto_commit.yml
│   │   │   │   │   │   │       ├── dbal_collect_schema_errors_disable_no_profiling.yml
│   │   │   │   │   │   │       ├── dbal_collect_schema_errors_disable.yml
│   │   │   │   │   │   │       ├── dbal_collect_schema_errors_enable.yml
│   │   │   │   │   │   │       ├── dbal_dbname_suffix.yml
│   │   │   │   │   │   │       ├── dbal_disable_type_comments.yml
│   │   │   │   │   │   │       ├── dbal_driver_schemes.yml
│   │   │   │   │   │   │       ├── dbal_logging.yml
│   │   │   │   │   │   │       ├── dbal_oracle_connectstring.yml
│   │   │   │   │   │   │       ├── dbal_oracle_instancename.yml
│   │   │   │   │   │   │       ├── dbal_result_cache.yml
│   │   │   │   │   │   │       ├── dbal_savepoints.yml
│   │   │   │   │   │   │       ├── dbal_schema_filter.yml
│   │   │   │   │   │   │       ├── dbal_schema_manager_factory.yml
│   │   │   │   │   │   │       ├── dbal_service_multiple_connections.yml
│   │   │   │   │   │   │       ├── dbal_service_single_connection.yml
│   │   │   │   │   │   │       ├── dbal_service_single_primary_replica_connection.yml
│   │   │   │   │   │   │       ├── dbal_types.yml
│   │   │   │   │   │   │       ├── orm_attach_entity_listener_tag.yml
│   │   │   │   │   │   │       ├── orm_attach_entity_listener.yml
│   │   │   │   │   │   │       ├── orm_attach_entity_listeners_two_connections.yml
│   │   │   │   │   │   │       ├── orm_attach_lazy_entity_listener.yml
│   │   │   │   │   │   │       ├── orm_caches.yml
│   │   │   │   │   │   │       ├── orm_entity_listener_abstract.yml
│   │   │   │   │   │   │       ├── orm_entity_listener_custom_resolver.yml
│   │   │   │   │   │   │       ├── orm_entity_listener_lazy_private.yml
│   │   │   │   │   │   │       ├── orm_entity_listener_lazy_resolver_without_interface.yml
│   │   │   │   │   │   │       ├── orm_entity_listener_resolver.yml
│   │   │   │   │   │   │       ├── orm_fetch_mode_subselect_batch_size.yml
│   │   │   │   │   │   │       ├── orm_filters.yml
│   │   │   │   │   │   │       ├── orm_functions.yml
│   │   │   │   │   │   │       ├── orm_hydration_mode.yml
│   │   │   │   │   │   │       ├── orm_identity_generation_preferences.yml
│   │   │   │   │   │   │       ├── orm_imports_import.yml
│   │   │   │   │   │   │       ├── orm_imports.yml
│   │   │   │   │   │   │       ├── orm_multiple_em_bundle_mappings.yml
│   │   │   │   │   │   │       ├── orm_namingstrategy.yml
│   │   │   │   │   │   │       ├── orm_no_lazy_ghost.yml
│   │   │   │   │   │   │       ├── orm_no_report_fields.yml
│   │   │   │   │   │   │       ├── orm_quotestrategy.yml
│   │   │   │   │   │   │       ├── orm_repository_factory.yml
│   │   │   │   │   │   │       ├── orm_resolve_target_entity.yml
│   │   │   │   │   │   │       ├── orm_schema_ignore_classes.yml
│   │   │   │   │   │   │       ├── orm_second_level_cache.yml
│   │   │   │   │   │   │       ├── orm_service_multiple_entity_managers.yml
│   │   │   │   │   │   │       ├── orm_service_simple_single_entity_manager_without_dbname.yml
│   │   │   │   │   │   │       ├── orm_service_simple_single_entity_manager.yml
│   │   │   │   │   │   │       ├── orm_service_single_entity_manager.yml
│   │   │   │   │   │   │       ├── orm_single_em_bundle_mappings.yml
│   │   │   │   │   │   │       ├── orm_single_em_default_table_options.yml
│   │   │   │   │   │   │       ├── orm_single_em_dql_functions.yml
│   │   │   │   │   │   │       ├── orm_typedfieldmapper.yml
│   │   │   │   │   │   │       ├── well_known_schema_filter_default_tables_session.yml
│   │   │   │   │   │   │       └── well_known_schema_filter_overridden_tables_session.yml
│   │   │   │   │   │   ├── CustomEntityListenerServiceResolver.php
│   │   │   │   │   │   ├── CustomIdGenerator.php
│   │   │   │   │   │   ├── DbalTestKernel.php
│   │   │   │   │   │   ├── InvokableEntityListener.php
│   │   │   │   │   │   ├── Php8EntityListener.php
│   │   │   │   │   │   ├── Php8EventListener.php
│   │   │   │   │   │   └── TestKernel.php
│   │   │   │   │   ├── AbstractDoctrineExtensionTestCase.php
│   │   │   │   │   ├── DoctrineExtensionTest.php
│   │   │   │   │   ├── TestDatetimeFunction.php
│   │   │   │   │   ├── TestFilter.php
│   │   │   │   │   ├── TestNumericFunction.php
│   │   │   │   │   ├── TestStringFunction.php
│   │   │   │   │   ├── TestType.php
│   │   │   │   │   ├── XmlDoctrineExtensionTest.php
│   │   │   │   │   ├── XMLSchemaTest.php
│   │   │   │   │   └── YamlDoctrineExtensionTest.php
│   │   │   │   ├── Mapping
│   │   │   │   │   ├── ContainerEntityListenerResolverTest.php
│   │   │   │   │   └── DisconnectedMetadataFactoryTest.php
│   │   │   │   ├── Middleware
│   │   │   │   │   ├── BacktraceDebugDataHolderTest.php
│   │   │   │   │   ├── DebugMiddlewareTest.php
│   │   │   │   │   └── IdleConnectionMiddlewareTest.php
│   │   │   │   ├── Repository
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── StubRepository.php
│   │   │   │   │   │   └── StubServiceRepository.php
│   │   │   │   │   ├── ContainerRepositoryFactoryTest.php
│   │   │   │   │   └── ServiceEntityRepositoryTest.php
│   │   │   │   ├── Twig
│   │   │   │   │   └── DoctrineExtensionTest.php
│   │   │   │   ├── baseline-ignore
│   │   │   │   ├── bootstrap.php
│   │   │   │   ├── BundleTest.php
│   │   │   │   ├── CacheSchemaSubscriberTest.php
│   │   │   │   ├── ConnectionFactoryTest.php
│   │   │   │   ├── ContainerTest.php
│   │   │   │   ├── LazyLoadingEntityManagerInterface.php
│   │   │   │   ├── LazyObjectEntityManagerInterface.php
│   │   │   │   ├── LockStoreSchemaListenerTest.php
│   │   │   │   ├── ProfilerTest.php
│   │   │   │   ├── RegistryTest.php
│   │   │   │   ├── ServiceRepositoryTest.php
│   │   │   │   ├── TestCase.php
│   │   │   │   ├── TestCaseAllPublicCompilerPass.php
│   │   │   │   └── UrlOverrideTest.php
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── .symfony.bundle.yaml
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpstan.neon.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── UPGRADE-2.10.md
│   │   │   ├── UPGRADE-2.12.md
│   │   │   ├── UPGRADE-2.13.md
│   │   │   └── UPGRADE-3.0.md
│   │   ├── doctrine-fixtures-bundle
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   └── static-analysis.yml
│   │   │   │   ├── dependabot.yml
│   │   │   │   └── FUNDING.yml
│   │   │   ├── config
│   │   │   │   └── services.xml
│   │   │   ├── docs
│   │   │   │   └── index.rst
│   │   │   ├── src
│   │   │   │   ├── Command
│   │   │   │   │   ├── CommandCompatibility.php
│   │   │   │   │   └── LoadDataFixturesDoctrineCommand.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── CompilerPass
│   │   │   │   │   │   ├── FixturesCompilerPass.php
│   │   │   │   │   │   └── PurgerFactoryCompilerPass.php
│   │   │   │   │   └── DoctrineFixturesExtension.php
│   │   │   │   ├── Loader
│   │   │   │   │   ├── SymfonyBridgeLoader.php
│   │   │   │   │   └── SymfonyFixturesLoader.php
│   │   │   │   ├── Purger
│   │   │   │   │   ├── ORMPurgerFactory.php
│   │   │   │   │   └── PurgerFactory.php
│   │   │   │   ├── DoctrineFixturesBundle.php
│   │   │   │   ├── Fixture.php
│   │   │   │   ├── FixtureGroupInterface.php
│   │   │   │   └── ORMFixtureInterface.php
│   │   │   ├── tests
│   │   │   │   ├── Command
│   │   │   │   │   └── LoadDataFixturesDoctrineCommandTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   └── FooBundle
│   │   │   │   │       ├── DataFixtures
│   │   │   │   │       │   ├── DependentOnRequiredConstructorArgsFixtures.php
│   │   │   │   │       │   ├── OtherFixtures.php
│   │   │   │   │       │   ├── RequiredConstructorArgsFixtures.php
│   │   │   │   │       │   ├── WithDeepDependenciesFixtures.php
│   │   │   │   │       │   └── WithDependenciesFixtures.php
│   │   │   │   │       └── FooBundle.php
│   │   │   │   ├── Purger
│   │   │   │   │   └── ORMPurgerFactoryTest.php
│   │   │   │   ├── IntegrationTest.php
│   │   │   │   └── IntegrationTestKernel.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── .symfony.bundle.yaml
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpstan-baseline.neon
│   │   │   ├── phpstan.neon.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── psalm.xml
│   │   │   ├── README.markdown
│   │   │   └── UPGRADE.md
│   │   ├── doctrine-migrations-bundle
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── composer-lint.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   └── static-analysis.yml
│   │   │   │   ├── dependabot.yml
│   │   │   │   └── FUNDING.yml
│   │   │   ├── config
│   │   │   │   ├── schema
│   │   │   │   │   └── doctrine_migrations-3.0.xsd
│   │   │   │   └── services.xml
│   │   │   ├── docs
│   │   │   │   └── index.rst
│   │   │   ├── src
│   │   │   │   ├── Collector
│   │   │   │   │   ├── MigrationsCollector.php
│   │   │   │   │   └── MigrationsFlattener.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── CompilerPass
│   │   │   │   │   │   └── ConfigureDependencyFactoryPass.php
│   │   │   │   │   ├── Configuration.php
│   │   │   │   │   └── DoctrineMigrationsExtension.php
│   │   │   │   ├── EventListener
│   │   │   │   │   └── SchemaFilterListener.php
│   │   │   │   ├── MigrationsFactory
│   │   │   │   │   └── ContainerAwareMigrationFactory.php
│   │   │   │   └── DoctrineMigrationsBundle.php
│   │   │   ├── templates
│   │   │   │   └── Collector
│   │   │   │       ├── icon-v3.svg
│   │   │   │       ├── icon.svg
│   │   │   │       └── migrations.html.twig
│   │   │   ├── tests
│   │   │   │   ├── Collector
│   │   │   │   │   ├── EventListener
│   │   │   │   │   │   └── SchemaFilterListenerTest.php
│   │   │   │   │   └── MigrationsFlattenerTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── DoctrineCommandsTest.php
│   │   │   │   │   └── DoctrineMigrationsExtensionTest.php
│   │   │   │   └── Fixtures
│   │   │   │       ├── Migrations
│   │   │   │       │   ├── ContainerAwareMigration.php
│   │   │   │       │   └── Migration001.php
│   │   │   │       ├── TestBundle
│   │   │   │       │   └── TestBundle.php
│   │   │   │       └── conf.xml
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── .symfony.bundle.yaml
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpstan-baseline.neon
│   │   │   ├── phpstan.neon.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.markdown
│   │   │   └── UPGRADE.md
│   │   ├── event-manager
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── composer-lint.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   └── static-analysis.yml
│   │   │   │   ├── dependabot.yml
│   │   │   │   └── FUNDING.yml
│   │   │   ├── docs
│   │   │   │   └── en
│   │   │   │       ├── reference
│   │   │   │       │   └── index.rst
│   │   │   │       ├── index.rst
│   │   │   │       └── sidebar.rst
│   │   │   ├── src
│   │   │   │   ├── EventArgs.php
│   │   │   │   ├── EventManager.php
│   │   │   │   └── EventSubscriber.php
│   │   │   ├── tests
│   │   │   │   └── EventManagerTest.php
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── .scrutinizer.yml
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpstan.neon.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── psalm-baseline.xml
│   │   │   ├── psalm.xml
│   │   │   ├── README.md
│   │   │   └── UPGRADE.md
│   │   ├── inflector
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   └── static-analysis.yml
│   │   │   │   └── FUNDING.yml
│   │   │   ├── docs
│   │   │   │   └── en
│   │   │   │       └── index.rst
│   │   │   ├── lib
│   │   │   │   └── Doctrine
│   │   │   │       └── Inflector
│   │   │   │           ├── Rules
│   │   │   │           │   ├── English
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── French
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── NorwegianBokmal
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── Portuguese
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── Spanish
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── Turkish
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── Pattern.php
│   │   │   │           │   ├── Patterns.php
│   │   │   │           │   ├── Ruleset.php
│   │   │   │           │   ├── Substitution.php
│   │   │   │           │   ├── Substitutions.php
│   │   │   │           │   ├── Transformation.php
│   │   │   │           │   ├── Transformations.php
│   │   │   │           │   └── Word.php
│   │   │   │           ├── CachedWordInflector.php
│   │   │   │           ├── GenericLanguageInflectorFactory.php
│   │   │   │           ├── Inflector.php
│   │   │   │           ├── InflectorFactory.php
│   │   │   │           ├── Language.php
│   │   │   │           ├── LanguageInflectorFactory.php
│   │   │   │           ├── NoopWordInflector.php
│   │   │   │           ├── RulesetInflector.php
│   │   │   │           └── WordInflector.php
│   │   │   ├── tests
│   │   │   │   └── Doctrine
│   │   │   │       └── Tests
│   │   │   │           └── Inflector
│   │   │   │               ├── Rules
│   │   │   │               │   ├── English
│   │   │   │               │   │   └── EnglishFunctionalTest.php
│   │   │   │               │   ├── French
│   │   │   │               │   │   └── FrenchFunctionalTest.php
│   │   │   │               │   ├── NorwegianBokmal
│   │   │   │               │   │   └── NorwegianBokmalFunctionalTest.php
│   │   │   │               │   ├── Portuguese
│   │   │   │               │   │   └── PortugueseFunctionalTest.php
│   │   │   │               │   ├── Spanish
│   │   │   │               │   │   └── SpanishFunctionalTest.php
│   │   │   │               │   ├── Turkish
│   │   │   │               │   │   └── TurkishFunctionalTest.php
│   │   │   │               │   ├── LanguageFunctionalTest.php
│   │   │   │               │   ├── PatternsTest.php
│   │   │   │               │   ├── PatternTest.php
│   │   │   │               │   ├── RulesetTest.php
│   │   │   │               │   ├── SubstitutionsTest.php
│   │   │   │               │   ├── SubstitutionTest.php
│   │   │   │               │   ├── TransformationsTest.php
│   │   │   │               │   ├── TransformationTest.php
│   │   │   │               │   └── WordTest.php
│   │   │   │               ├── CachedWordInflectorTest.php
│   │   │   │               ├── InflectorFactoryTest.php
│   │   │   │               ├── InflectorFunctionalTest.php
│   │   │   │               ├── InflectorTest.php
│   │   │   │               ├── NoopWordInflectorTest.php
│   │   │   │               └── RulesetInflectorTest.php
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpstan.neon.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── psalm.xml
│   │   │   └── README.md
│   │   ├── instantiator
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── phpbench.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   └── static-analysis.yml
│   │   │   │   └── FUNDING.yml
│   │   │   ├── docs
│   │   │   │   └── en
│   │   │   │       ├── index.rst
│   │   │   │       └── sidebar.rst
│   │   │   ├── src
│   │   │   │   └── Doctrine
│   │   │   │       └── Instantiator
│   │   │   │           ├── Exception
│   │   │   │           │   ├── ExceptionInterface.php
│   │   │   │           │   ├── InvalidArgumentException.php
│   │   │   │           │   └── UnexpectedValueException.php
│   │   │   │           ├── Instantiator.php
│   │   │   │           └── InstantiatorInterface.php
│   │   │   ├── tests
│   │   │   │   └── DoctrineTest
│   │   │   │       ├── InstantiatorPerformance
│   │   │   │       │   └── InstantiatorPerformanceBench.php
│   │   │   │       ├── InstantiatorTest
│   │   │   │       │   ├── Exception
│   │   │   │       │   │   ├── InvalidArgumentExceptionTest.php
│   │   │   │       │   │   └── UnexpectedValueExceptionTest.php
│   │   │   │       │   └── InstantiatorTest.php
│   │   │   │       └── InstantiatorTestAsset
│   │   │   │           ├── AbstractClassAsset.php
│   │   │   │           ├── ArrayObjectAsset.php
│   │   │   │           ├── ExceptionAsset.php
│   │   │   │           ├── FinalExceptionAsset.php
│   │   │   │           ├── PharAsset.php
│   │   │   │           ├── PharExceptionAsset.php
│   │   │   │           ├── SerializableArrayObjectAsset.php
│   │   │   │           ├── SerializableFinalInternalChildAsset.php
│   │   │   │           ├── SimpleEnumAsset.php
│   │   │   │           ├── SimpleSerializableAsset.php
│   │   │   │           ├── SimpleTraitAsset.php
│   │   │   │           ├── UnCloneableAsset.php
│   │   │   │           ├── UnserializeExceptionArrayObjectAsset.php
│   │   │   │           ├── WakeUpNoticesAsset.php
│   │   │   │           └── XMLReaderAsset.php
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── CONTRIBUTING.md
│   │   │   ├── LICENSE
│   │   │   ├── phpbench.json
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpmd.xml.dist
│   │   │   ├── phpstan.neon.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── psalm.xml
│   │   │   └── README.md
│   │   ├── lexer
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── composer-lint.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   └── static-analysis.yml
│   │   │   │   └── FUNDING.yml
│   │   │   ├── docs
│   │   │   │   └── en
│   │   │   │       ├── dql-parser.rst
│   │   │   │       ├── index.rst
│   │   │   │       ├── sidebar.rst
│   │   │   │       └── simple-parser-example.rst
│   │   │   ├── src
│   │   │   │   ├── AbstractLexer.php
│   │   │   │   └── Token.php
│   │   │   ├── tests
│   │   │   │   ├── AbstractLexerTest.php
│   │   │   │   ├── ConcreteLexer.php
│   │   │   │   ├── EnumLexer.php
│   │   │   │   ├── MutableLexer.php
│   │   │   │   ├── TokenTest.php
│   │   │   │   └── TokenType.php
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpstan.neon.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── psalm.xml
│   │   │   ├── README.md
│   │   │   └── UPGRADE.md
│   │   ├── migrations
│   │   │   ├── .github
│   │   │   │   ├── ISSUE_TEMPLATE
│   │   │   │   │   ├── BC_Break.md
│   │   │   │   │   ├── Bug.md
│   │   │   │   │   ├── Feature_Request.md
│   │   │   │   │   └── Support_Question.md
│   │   │   │   ├── workflows
│   │   │   │   │   ├── bc-check.yml
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── composer-lint.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   ├── static-analysis.yml
│   │   │   │   │   └── website-schema.yml
│   │   │   │   ├── dependabot.yml
│   │   │   │   ├── FUNDING.yml
│   │   │   │   └── PULL_REQUEST_TEMPLATE.md
│   │   │   ├── bin
│   │   │   │   ├── doctrine-migrations
│   │   │   │   └── doctrine-migrations.php
│   │   │   ├── docs
│   │   │   │   └── en
│   │   │   │       ├── explanation
│   │   │   │       │   └── implicit-commits.rst
│   │   │   │       ├── reference
│   │   │   │       │   ├── configuration.rst
│   │   │   │       │   ├── custom-configuration.rst
│   │   │   │       │   ├── custom-integration.rst
│   │   │   │       │   ├── events.rst
│   │   │   │       │   ├── generating-migrations.rst
│   │   │   │       │   ├── integrations.rst
│   │   │   │       │   ├── introduction.rst
│   │   │   │       │   ├── managing-migrations.rst
│   │   │   │       │   ├── migration-classes.rst
│   │   │   │       │   └── version-numbers.rst
│   │   │   │       ├── index.rst
│   │   │   │       └── sidebar.rst
│   │   │   ├── src
│   │   │   │   ├── Configuration
│   │   │   │   │   ├── Connection
│   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   ├── ConnectionNotSpecified.php
│   │   │   │   │   │   │   ├── FileNotFound.php
│   │   │   │   │   │   │   ├── InvalidConfiguration.php
│   │   │   │   │   │   │   └── LoaderException.php
│   │   │   │   │   │   ├── ConfigurationFile.php
│   │   │   │   │   │   ├── ConnectionLoader.php
│   │   │   │   │   │   ├── ConnectionRegistryConnection.php
│   │   │   │   │   │   └── ExistingConnection.php
│   │   │   │   │   ├── EntityManager
│   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   ├── FileNotFound.php
│   │   │   │   │   │   │   ├── InvalidConfiguration.php
│   │   │   │   │   │   │   └── LoaderException.php
│   │   │   │   │   │   ├── ConfigurationFile.php
│   │   │   │   │   │   ├── EntityManagerLoader.php
│   │   │   │   │   │   ├── ExistingEntityManager.php
│   │   │   │   │   │   └── ManagerRegistryEntityManager.php
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── ConfigurationException.php
│   │   │   │   │   │   ├── FileNotFound.php
│   │   │   │   │   │   ├── FrozenConfiguration.php
│   │   │   │   │   │   ├── InvalidLoader.php
│   │   │   │   │   │   └── UnknownConfigurationValue.php
│   │   │   │   │   ├── Migration
│   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   ├── InvalidConfigurationFormat.php
│   │   │   │   │   │   │   ├── InvalidConfigurationKey.php
│   │   │   │   │   │   │   ├── JsonNotValid.php
│   │   │   │   │   │   │   ├── MissingConfigurationFile.php
│   │   │   │   │   │   │   ├── XmlNotValid.php
│   │   │   │   │   │   │   ├── YamlNotAvailable.php
│   │   │   │   │   │   │   └── YamlNotValid.php
│   │   │   │   │   │   ├── XML
│   │   │   │   │   │   │   └── configuration.xsd
│   │   │   │   │   │   ├── ConfigurationArray.php
│   │   │   │   │   │   ├── ConfigurationFile.php
│   │   │   │   │   │   ├── ConfigurationFileWithFallback.php
│   │   │   │   │   │   ├── ConfigurationLoader.php
│   │   │   │   │   │   ├── ExistingConfiguration.php
│   │   │   │   │   │   ├── FormattedFile.php
│   │   │   │   │   │   ├── JsonFile.php
│   │   │   │   │   │   ├── PhpFile.php
│   │   │   │   │   │   ├── XmlFile.php
│   │   │   │   │   │   └── YamlFile.php
│   │   │   │   │   └── Configuration.php
│   │   │   │   ├── Event
│   │   │   │   │   ├── Listeners
│   │   │   │   │   │   └── AutoCommitListener.php
│   │   │   │   │   ├── MigrationsEventArgs.php
│   │   │   │   │   └── MigrationsVersionEventArgs.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── AbortMigration.php
│   │   │   │   │   ├── AlreadyAtVersion.php
│   │   │   │   │   ├── ControlException.php
│   │   │   │   │   ├── DependencyException.php
│   │   │   │   │   ├── DuplicateMigrationVersion.php
│   │   │   │   │   ├── FrozenDependencies.php
│   │   │   │   │   ├── FrozenMigration.php
│   │   │   │   │   ├── IrreversibleMigration.php
│   │   │   │   │   ├── MetadataStorageError.php
│   │   │   │   │   ├── MigrationClassNotFound.php
│   │   │   │   │   ├── MigrationConfigurationConflict.php
│   │   │   │   │   ├── MigrationException.php
│   │   │   │   │   ├── MigrationNotAvailable.php
│   │   │   │   │   ├── MigrationNotExecuted.php
│   │   │   │   │   ├── MissingDependency.php
│   │   │   │   │   ├── NoMigrationsFoundWithCriteria.php
│   │   │   │   │   ├── NoMigrationsToExecute.php
│   │   │   │   │   ├── NoTablesFound.php
│   │   │   │   │   ├── PlanAlreadyExecuted.php
│   │   │   │   │   ├── RollupFailed.php
│   │   │   │   │   ├── SkipMigration.php
│   │   │   │   │   └── UnknownMigrationVersion.php
│   │   │   │   ├── Finder
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── FinderException.php
│   │   │   │   │   │   ├── InvalidDirectory.php
│   │   │   │   │   │   └── NameIsReserved.php
│   │   │   │   │   ├── Finder.php
│   │   │   │   │   ├── GlobFinder.php
│   │   │   │   │   ├── MigrationFinder.php
│   │   │   │   │   └── RecursiveRegexFinder.php
│   │   │   │   ├── Generator
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── GeneratorException.php
│   │   │   │   │   │   ├── InvalidTemplateSpecified.php
│   │   │   │   │   │   └── NoChangesDetected.php
│   │   │   │   │   ├── ClassNameGenerator.php
│   │   │   │   │   ├── ConcatenationFileBuilder.php
│   │   │   │   │   ├── DiffGenerator.php
│   │   │   │   │   ├── FileBuilder.php
│   │   │   │   │   ├── Generator.php
│   │   │   │   │   └── SqlGenerator.php
│   │   │   │   ├── Metadata
│   │   │   │   │   ├── Storage
│   │   │   │   │   │   ├── MetadataStorage.php
│   │   │   │   │   │   ├── MetadataStorageConfiguration.php
│   │   │   │   │   │   ├── TableMetadataStorage.php
│   │   │   │   │   │   └── TableMetadataStorageConfiguration.php
│   │   │   │   │   ├── AvailableMigration.php
│   │   │   │   │   ├── AvailableMigrationsList.php
│   │   │   │   │   ├── AvailableMigrationsSet.php
│   │   │   │   │   ├── ExecutedMigration.php
│   │   │   │   │   ├── ExecutedMigrationsList.php
│   │   │   │   │   ├── MigrationPlan.php
│   │   │   │   │   └── MigrationPlanList.php
│   │   │   │   ├── Provider
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── NoMappingFound.php
│   │   │   │   │   │   └── ProviderException.php
│   │   │   │   │   ├── DBALSchemaDiffProvider.php
│   │   │   │   │   ├── EmptySchemaProvider.php
│   │   │   │   │   ├── LazySchema.php
│   │   │   │   │   ├── LazySchemaDiffProvider.php
│   │   │   │   │   ├── OrmSchemaProvider.php
│   │   │   │   │   ├── SchemaDiffProvider.php
│   │   │   │   │   ├── SchemaProvider.php
│   │   │   │   │   └── StubSchemaProvider.php
│   │   │   │   ├── Query
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   └── InvalidArguments.php
│   │   │   │   │   └── Query.php
│   │   │   │   ├── Tools
│   │   │   │   │   ├── Console
│   │   │   │   │   │   ├── Command
│   │   │   │   │   │   │   ├── CurrentCommand.php
│   │   │   │   │   │   │   ├── DiffCommand.php
│   │   │   │   │   │   │   ├── DoctrineCommand.php
│   │   │   │   │   │   │   ├── DumpSchemaCommand.php
│   │   │   │   │   │   │   ├── ExecuteCommand.php
│   │   │   │   │   │   │   ├── GenerateCommand.php
│   │   │   │   │   │   │   ├── LatestCommand.php
│   │   │   │   │   │   │   ├── ListCommand.php
│   │   │   │   │   │   │   ├── MigrateCommand.php
│   │   │   │   │   │   │   ├── RollupCommand.php
│   │   │   │   │   │   │   ├── StatusCommand.php
│   │   │   │   │   │   │   ├── SyncMetadataCommand.php
│   │   │   │   │   │   │   ├── UpToDateCommand.php
│   │   │   │   │   │   │   └── VersionCommand.php
│   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   ├── ConsoleException.php
│   │   │   │   │   │   │   ├── DependenciesNotSatisfied.php
│   │   │   │   │   │   │   ├── DirectoryDoesNotExist.php
│   │   │   │   │   │   │   ├── FileTypeNotSupported.php
│   │   │   │   │   │   │   ├── InvalidOptionUsage.php
│   │   │   │   │   │   │   ├── SchemaDumpRequiresNoMigrations.php
│   │   │   │   │   │   │   ├── VersionAlreadyExists.php
│   │   │   │   │   │   │   └── VersionDoesNotExist.php
│   │   │   │   │   │   ├── Helper
│   │   │   │   │   │   │   ├── ConfigurationHelper.php
│   │   │   │   │   │   │   ├── MigrationDirectoryHelper.php
│   │   │   │   │   │   │   └── MigrationStatusInfosHelper.php
│   │   │   │   │   │   ├── ConsoleInputMigratorConfigurationFactory.php
│   │   │   │   │   │   ├── ConsoleRunner.php
│   │   │   │   │   │   ├── InvalidAllOrNothingConfiguration.php
│   │   │   │   │   │   └── MigratorConfigurationFactory.php
│   │   │   │   │   ├── BooleanStringFormatter.php
│   │   │   │   │   ├── BytesFormatter.php
│   │   │   │   │   └── TransactionHelper.php
│   │   │   │   ├── Version
│   │   │   │   │   ├── AliasResolver.php
│   │   │   │   │   ├── AlphabeticalComparator.php
│   │   │   │   │   ├── Comparator.php
│   │   │   │   │   ├── CurrentMigrationStatusCalculator.php
│   │   │   │   │   ├── DbalExecutor.php
│   │   │   │   │   ├── DbalMigrationFactory.php
│   │   │   │   │   ├── DefaultAliasResolver.php
│   │   │   │   │   ├── Direction.php
│   │   │   │   │   ├── ExecutionResult.php
│   │   │   │   │   ├── Executor.php
│   │   │   │   │   ├── MigrationFactory.php
│   │   │   │   │   ├── MigrationPlanCalculator.php
│   │   │   │   │   ├── MigrationStatusCalculator.php
│   │   │   │   │   ├── SortedMigrationPlanCalculator.php
│   │   │   │   │   ├── State.php
│   │   │   │   │   └── Version.php
│   │   │   │   ├── AbstractMigration.php
│   │   │   │   ├── DbalMigrator.php
│   │   │   │   ├── DependencyFactory.php
│   │   │   │   ├── EventDispatcher.php
│   │   │   │   ├── Events.php
│   │   │   │   ├── FileQueryWriter.php
│   │   │   │   ├── FilesystemMigrationsRepository.php
│   │   │   │   ├── InlineParameterFormatter.php
│   │   │   │   ├── MigrationsRepository.php
│   │   │   │   ├── Migrator.php
│   │   │   │   ├── MigratorConfiguration.php
│   │   │   │   ├── ParameterFormatter.php
│   │   │   │   ├── QueryWriter.php
│   │   │   │   ├── Rollup.php
│   │   │   │   └── SchemaDumper.php
│   │   │   ├── tests
│   │   │   │   ├── Configuration
│   │   │   │   │   ├── _files
│   │   │   │   │   │   ├── config_basic.json
│   │   │   │   │   │   ├── config_basic.php
│   │   │   │   │   │   ├── config_basic.xml
│   │   │   │   │   │   ├── config_basic.yml
│   │   │   │   │   │   ├── config_custom_template.json
│   │   │   │   │   │   ├── config_custom_template.php
│   │   │   │   │   │   ├── config_custom_template.xml
│   │   │   │   │   │   ├── config_custom_template.yml
│   │   │   │   │   │   ├── config_instance.php
│   │   │   │   │   │   ├── config_invalid.json
│   │   │   │   │   │   ├── config_invalid.php
│   │   │   │   │   │   ├── config_invalid.xml
│   │   │   │   │   │   ├── config_invalid.yml
│   │   │   │   │   │   ├── config_malformed.json
│   │   │   │   │   │   ├── config_malformed.xml
│   │   │   │   │   │   ├── config_malformed.yml
│   │   │   │   │   │   ├── config_organize_by_year_and_month.json
│   │   │   │   │   │   ├── config_organize_by_year_and_month.php
│   │   │   │   │   │   ├── config_organize_by_year_and_month.xml
│   │   │   │   │   │   ├── config_organize_by_year_and_month.yml
│   │   │   │   │   │   ├── config_organize_by_year.json
│   │   │   │   │   │   ├── config_organize_by_year.php
│   │   │   │   │   │   ├── config_organize_by_year.xml
│   │   │   │   │   │   ├── config_organize_by_year.yml
│   │   │   │   │   │   ├── config_organize_invalid.json
│   │   │   │   │   │   ├── config_organize_invalid.php
│   │   │   │   │   │   ├── config_organize_invalid.xml
│   │   │   │   │   │   ├── config_organize_invalid.yml
│   │   │   │   │   │   ├── config.json
│   │   │   │   │   │   ├── config.php
│   │   │   │   │   │   ├── config.xml
│   │   │   │   │   │   └── config.yml
│   │   │   │   │   ├── _files_loader
│   │   │   │   │   │   └── migrations.php
│   │   │   │   │   ├── ConfigurationTestSource
│   │   │   │   │   │   └── Migrations
│   │   │   │   │   │       └── Version123.php
│   │   │   │   │   ├── Connection
│   │   │   │   │   │   ├── _files
│   │   │   │   │   │   │   ├── migrations-db.php
│   │   │   │   │   │   │   ├── sqlite-connection-instance.php
│   │   │   │   │   │   │   ├── sqlite-connection-invalid.php
│   │   │   │   │   │   │   └── sqlite-connection.php
│   │   │   │   │   │   ├── ConnectionLoaderTest.php
│   │   │   │   │   │   └── ConnectionRegistryLoaderTest.php
│   │   │   │   │   ├── EntityManager
│   │   │   │   │   │   ├── _files
│   │   │   │   │   │   │   ├── em-invalid.php
│   │   │   │   │   │   │   ├── em-loader.php
│   │   │   │   │   │   │   └── migrations-em.php
│   │   │   │   │   │   ├── EntityManagerRegistryLoaderTest.php
│   │   │   │   │   │   └── EntityManagerTest.php
│   │   │   │   │   ├── Migration
│   │   │   │   │   │   ├── ArrayLoaderTest.php
│   │   │   │   │   │   ├── ConfigurationFileWithFallbackTest.php
│   │   │   │   │   │   ├── FormattedFileTest.php
│   │   │   │   │   │   ├── JsonLoaderTest.php
│   │   │   │   │   │   ├── LoaderTestCase.php
│   │   │   │   │   │   ├── PhpLoaderTest.php
│   │   │   │   │   │   ├── XmlLoaderTest.php
│   │   │   │   │   │   └── YamlLoaderTest.php
│   │   │   │   │   └── ConfigurationTest.php
│   │   │   │   ├── Event
│   │   │   │   │   ├── Listeners
│   │   │   │   │   │   └── AutoCommitListenerTest.php
│   │   │   │   │   └── EventArgsTest.php
│   │   │   │   ├── Finder
│   │   │   │   │   ├── _features
│   │   │   │   │   │   ├── MultiNamespace
│   │   │   │   │   │   │   ├── Version0001.php
│   │   │   │   │   │   │   └── Version0002.php
│   │   │   │   │   │   └── MultiNamespaceNested
│   │   │   │   │   │       ├── Deep
│   │   │   │   │   │       │   └── Version0002.php
│   │   │   │   │   │       └── Version0001.php
│   │   │   │   │   ├── _files
│   │   │   │   │   │   ├── deep
│   │   │   │   │   │   │   ├── deeper
│   │   │   │   │   │   │   │   ├── ADeeperRandomClass.php
│   │   │   │   │   │   │   │   └── Version20150502000004.php
│   │   │   │   │   │   │   ├── Version20150502000003
│   │   │   │   │   │   │   │   ├── AnotherRandomClassNotStartingWithVersion.php
│   │   │   │   │   │   │   │   ├── ARandomClass.php
│   │   │   │   │   │   │   │   └── Version20150502000005.php
│   │   │   │   │   │   │   ├── InvalidVersion20150502000002.php
│   │   │   │   │   │   │   ├── Version1ResetVersions.php
│   │   │   │   │   │   │   └── Version20150502000003.php
│   │   │   │   │   │   ├── _symlinked_files
│   │   │   │   │   │   ├── DifferentNamingSchema.php
│   │   │   │   │   │   ├── InvalidVersion20150502000002.php
│   │   │   │   │   │   ├── NotAVersion.php
│   │   │   │   │   │   ├── Version20150502000000.php
│   │   │   │   │   │   ├── Version20150502000001.php
│   │   │   │   │   │   ├── Version20150502000006.sql
│   │   │   │   │   │   ├── Version20150502000007
│   │   │   │   │   │   └── Version20150502000008aphp
│   │   │   │   │   ├── _symlinked_files
│   │   │   │   │   │   └── Version1SymlinkedFile.php
│   │   │   │   │   ├── FinderTestCase.php
│   │   │   │   │   ├── GlobFinderTest.php
│   │   │   │   │   └── RecursiveRegexFinderTest.php
│   │   │   │   ├── Generator
│   │   │   │   │   ├── ClassNameGeneratorTest.php
│   │   │   │   │   ├── ConcatenationFileBuilderTest.php
│   │   │   │   │   ├── DiffGeneratorTest.php
│   │   │   │   │   ├── GeneratorTest.php
│   │   │   │   │   └── SqlGeneratorTest.php
│   │   │   │   ├── Metadata
│   │   │   │   │   ├── Storage
│   │   │   │   │   │   ├── ExistingTableMetadataStorageTest.php
│   │   │   │   │   │   ├── TableMetadataStorageConfigurationTest.php
│   │   │   │   │   │   └── TableMetadataStorageTest.php
│   │   │   │   │   ├── AvailableMigrationListTest.php
│   │   │   │   │   ├── ExecutedMigrationSetTest.php
│   │   │   │   │   └── MigrationPlanListTest.php
│   │   │   │   ├── MigrationRepository
│   │   │   │   │   ├── Migrations
│   │   │   │   │   │   ├── A
│   │   │   │   │   │   │   ├── A.php
│   │   │   │   │   │   │   └── B.php
│   │   │   │   │   │   └── B
│   │   │   │   │   │       └── C.php
│   │   │   │   │   ├── NoMigrations
│   │   │   │   │   │   └── .gitkeep
│   │   │   │   │   └── FilesystemMigrationsRepositoryTest.php
│   │   │   │   ├── Provider
│   │   │   │   │   ├── _files
│   │   │   │   │   │   ├── Doctrine.Migrations.Tests.Provider.A.dcm.xml
│   │   │   │   │   │   ├── Doctrine.Migrations.Tests.Provider.B.dcm.xml
│   │   │   │   │   │   └── Doctrine.Migrations.Tests.Provider.C.dcm.xml
│   │   │   │   │   ├── A.php
│   │   │   │   │   ├── B.php
│   │   │   │   │   ├── C.php
│   │   │   │   │   ├── ClassMetadataFactory.php
│   │   │   │   │   ├── EmptySchemaProviderTest.php
│   │   │   │   │   ├── OrmSchemaProviderTest.php
│   │   │   │   │   ├── SchemaDiffProviderTest.php
│   │   │   │   │   └── StubSchemaProviderTest.php
│   │   │   │   ├── Query
│   │   │   │   │   └── QueryTest.php
│   │   │   │   ├── Stub
│   │   │   │   │   ├── Functional
│   │   │   │   │   │   ├── MigrateNotTouchingTheSchema.php
│   │   │   │   │   │   └── MigrationThrowsError.php
│   │   │   │   │   ├── NonTransactional
│   │   │   │   │   │   └── MigrationNonTransactional.php
│   │   │   │   │   ├── AbstractMigrationStub.php
│   │   │   │   │   ├── AbstractMigrationWithoutDownStub.php
│   │   │   │   │   ├── CustomClassNameMigrationFactory.php
│   │   │   │   │   └── DoctrineRegistry.php
│   │   │   │   ├── Tools
│   │   │   │   │   ├── Console
│   │   │   │   │   │   ├── _wrong-config
│   │   │   │   │   │   │   └── cli-config.php
│   │   │   │   │   │   ├── Command
│   │   │   │   │   │   │   ├── _files
│   │   │   │   │   │   │   │   └── config.yml
│   │   │   │   │   │   │   ├── CurrentCommandTest.php
│   │   │   │   │   │   │   ├── DiffCommandTest.php
│   │   │   │   │   │   │   ├── DoctrineCommandTest.php
│   │   │   │   │   │   │   ├── DumpSchemaCommandTest.php
│   │   │   │   │   │   │   ├── ExecuteCommandTest.php
│   │   │   │   │   │   │   ├── GenerateCommandTest.php
│   │   │   │   │   │   │   ├── LatestCommandTest.php
│   │   │   │   │   │   │   ├── ListCommandTest.php
│   │   │   │   │   │   │   ├── MigrateCommandTest.php
│   │   │   │   │   │   │   ├── MigrationVersionTest.php
│   │   │   │   │   │   │   ├── RollupCommandTest.php
│   │   │   │   │   │   │   ├── StatusCommandTest.php
│   │   │   │   │   │   │   ├── SyncMetadataCommandTest.php
│   │   │   │   │   │   │   └── UpToDateCommandTest.php
│   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   └── cli-config.php
│   │   │   │   │   │   ├── Helper
│   │   │   │   │   │   │   └── MigrationDirectoryHelperTest.php
│   │   │   │   │   │   ├── legacy-config-orm
│   │   │   │   │   │   │   ├── cli-config.php
│   │   │   │   │   │   │   └── migrations.php
│   │   │   │   │   │   └── ConsoleRunnerTest.php
│   │   │   │   │   ├── BooleanStringFormatterTest.php
│   │   │   │   │   ├── BytesFormatterTest.php
│   │   │   │   │   └── TransactionHelperTest.php
│   │   │   │   ├── Version
│   │   │   │   │   ├── Fixture
│   │   │   │   │   │   ├── EmptyTestMigration.php
│   │   │   │   │   │   └── VersionExecutorTestMigration.php
│   │   │   │   │   ├── AliasResolverTest.php
│   │   │   │   │   ├── DbalFactoryTest.php
│   │   │   │   │   ├── ExecutionResultTest.php
│   │   │   │   │   ├── ExecutorTest.php
│   │   │   │   │   ├── MigrationPlanCalculatorTest.php
│   │   │   │   │   └── MigrationStatusCalculatorTest.php
│   │   │   │   ├── AbstractMigrationTest.php
│   │   │   │   ├── BoxPharCompileTest.php
│   │   │   │   ├── DependencyFactoryTest.php
│   │   │   │   ├── DependencyFactoryWithConnectionRegistryTest.php
│   │   │   │   ├── DependencyFactoryWithEntityManagerRegistryTest.php
│   │   │   │   ├── doctrine-migrations-phpstan-app.php
│   │   │   │   ├── FileQueryWriterTest.php
│   │   │   │   ├── Helper.php
│   │   │   │   ├── InlineParameterFormatterTest.php
│   │   │   │   ├── LogUtil.php
│   │   │   │   ├── MigrationTestCase.php
│   │   │   │   ├── MigratorConfigurationTest.php
│   │   │   │   ├── MigratorTest.php
│   │   │   │   ├── RollupTest.php
│   │   │   │   └── SchemaDumperTest.php
│   │   │   ├── .appveyor.yml
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── box.json.dist
│   │   │   ├── build-phar.sh
│   │   │   ├── build.properties.dev
│   │   │   ├── composer.json
│   │   │   ├── download-box.sh
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpstan.neon.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── UPGRADE.md
│   │   ├── orm
│   │   │   ├── .github
│   │   │   │   ├── PULL_REQUEST_TEMPLATE
│   │   │   │   │   ├── Failing_Test.md
│   │   │   │   │   ├── Improvement.md
│   │   │   │   │   └── New_Feature.md
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── documentation.yml
│   │   │   │   │   ├── phpbench.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   ├── stale.yml
│   │   │   │   │   ├── static-analysis.yml
│   │   │   │   │   └── website-schema.yml
│   │   │   │   └── dependabot.yml
│   │   │   ├── ci
│   │   │   │   └── github
│   │   │   │       └── phpunit
│   │   │   │           ├── mysqli.xml
│   │   │   │           ├── pdo_mysql.xml
│   │   │   │           ├── pdo_pgsql.xml
│   │   │   │           ├── pdo_sqlite.xml
│   │   │   │           ├── pgsql.xml
│   │   │   │           └── sqlite3.xml
│   │   │   ├── docs
│   │   │   │   ├── bin
│   │   │   │   │   ├── generate-docs.sh
│   │   │   │   │   └── install-dependencies.sh
│   │   │   │   ├── en
│   │   │   │   │   ├── cookbook
│   │   │   │   │   │   ├── advanced-field-value-conversion-using-custom-mapping-types.rst
│   │   │   │   │   │   ├── aggregate-fields.rst
│   │   │   │   │   │   ├── custom-mapping-types.rst
│   │   │   │   │   │   ├── decorator-pattern.rst
│   │   │   │   │   │   ├── dql-custom-walkers.rst
│   │   │   │   │   │   ├── dql-user-defined-functions.rst
│   │   │   │   │   │   ├── entities-in-session.rst
│   │   │   │   │   │   ├── implementing-arrayaccess-for-domain-objects.rst
│   │   │   │   │   │   ├── mysql-enums.rst
│   │   │   │   │   │   ├── resolve-target-entity-listener.rst
│   │   │   │   │   │   ├── sql-table-prefixes.rst
│   │   │   │   │   │   ├── strategy-cookbook-introduction.rst
│   │   │   │   │   │   ├── validation-of-entities.rst
│   │   │   │   │   │   └── working-with-datetime.rst
│   │   │   │   │   ├── reference
│   │   │   │   │   │   ├── advanced-configuration.rst
│   │   │   │   │   │   ├── architecture.rst
│   │   │   │   │   │   ├── association-mapping.rst
│   │   │   │   │   │   ├── attributes-reference.rst
│   │   │   │   │   │   ├── basic-mapping.rst
│   │   │   │   │   │   ├── batch-processing.rst
│   │   │   │   │   │   ├── best-practices.rst
│   │   │   │   │   │   ├── caching.rst
│   │   │   │   │   │   ├── change-tracking-policies.rst
│   │   │   │   │   │   ├── configuration.rst
│   │   │   │   │   │   ├── dql-doctrine-query-language.rst
│   │   │   │   │   │   ├── events.rst
│   │   │   │   │   │   ├── faq.rst
│   │   │   │   │   │   ├── filters.rst
│   │   │   │   │   │   ├── improving-performance.rst
│   │   │   │   │   │   ├── inheritance-mapping.rst
│   │   │   │   │   │   ├── installation.rst
│   │   │   │   │   │   ├── limitations-and-known-issues.rst
│   │   │   │   │   │   ├── metadata-drivers.rst
│   │   │   │   │   │   ├── namingstrategy.rst
│   │   │   │   │   │   ├── native-sql.rst
│   │   │   │   │   │   ├── partial-hydration.rst
│   │   │   │   │   │   ├── partial-objects.rst
│   │   │   │   │   │   ├── php-mapping.rst
│   │   │   │   │   │   ├── query-builder.rst
│   │   │   │   │   │   ├── second-level-cache.rst
│   │   │   │   │   │   ├── security.rst
│   │   │   │   │   │   ├── tools.rst
│   │   │   │   │   │   ├── transactions-and-concurrency.rst
│   │   │   │   │   │   ├── typedfieldmapper.rst
│   │   │   │   │   │   ├── unitofwork-associations.rst
│   │   │   │   │   │   ├── unitofwork.rst
│   │   │   │   │   │   ├── working-with-associations.rst
│   │   │   │   │   │   ├── working-with-objects.rst
│   │   │   │   │   │   └── xml-mapping.rst
│   │   │   │   │   ├── tutorials
│   │   │   │   │   │   ├── working-with-indexed-associations
│   │   │   │   │   │   │   ├── Market.php
│   │   │   │   │   │   │   └── market.xml
│   │   │   │   │   │   ├── composite-primary-keys.rst
│   │   │   │   │   │   ├── embeddables.rst
│   │   │   │   │   │   ├── extra-lazy-associations.rst
│   │   │   │   │   │   ├── getting-started-database.rst
│   │   │   │   │   │   ├── getting-started-models.rst
│   │   │   │   │   │   ├── getting-started.rst
│   │   │   │   │   │   ├── ordered-associations.rst
│   │   │   │   │   │   ├── override-field-association-mappings-in-subclasses.rst
│   │   │   │   │   │   ├── pagination.rst
│   │   │   │   │   │   └── working-with-indexed-associations.rst
│   │   │   │   │   ├── index.rst
│   │   │   │   │   ├── Makefile
│   │   │   │   │   └── sidebar.rst
│   │   │   │   ├── LICENSE.md
│   │   │   │   └── README.md
│   │   │   ├── src
│   │   │   │   ├── Cache
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── CacheException.php
│   │   │   │   │   │   ├── CannotUpdateReadOnlyCollection.php
│   │   │   │   │   │   ├── CannotUpdateReadOnlyEntity.php
│   │   │   │   │   │   ├── FeatureNotImplemented.php
│   │   │   │   │   │   ├── NonCacheableEntity.php
│   │   │   │   │   │   └── NonCacheableEntityAssociation.php
│   │   │   │   │   ├── Logging
│   │   │   │   │   │   ├── CacheLogger.php
│   │   │   │   │   │   ├── CacheLoggerChain.php
│   │   │   │   │   │   └── StatisticsCacheLogger.php
│   │   │   │   │   ├── Persister
│   │   │   │   │   │   ├── Collection
│   │   │   │   │   │   │   ├── AbstractCollectionPersister.php
│   │   │   │   │   │   │   ├── CachedCollectionPersister.php
│   │   │   │   │   │   │   ├── NonStrictReadWriteCachedCollectionPersister.php
│   │   │   │   │   │   │   ├── ReadOnlyCachedCollectionPersister.php
│   │   │   │   │   │   │   └── ReadWriteCachedCollectionPersister.php
│   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   ├── AbstractEntityPersister.php
│   │   │   │   │   │   │   ├── CachedEntityPersister.php
│   │   │   │   │   │   │   ├── NonStrictReadWriteCachedEntityPersister.php
│   │   │   │   │   │   │   ├── ReadOnlyCachedEntityPersister.php
│   │   │   │   │   │   │   └── ReadWriteCachedEntityPersister.php
│   │   │   │   │   │   └── CachedPersister.php
│   │   │   │   │   ├── Region
│   │   │   │   │   │   ├── DefaultRegion.php
│   │   │   │   │   │   ├── FileLockRegion.php
│   │   │   │   │   │   └── UpdateTimestampCache.php
│   │   │   │   │   ├── AssociationCacheEntry.php
│   │   │   │   │   ├── CacheConfiguration.php
│   │   │   │   │   ├── CacheEntry.php
│   │   │   │   │   ├── CacheException.php
│   │   │   │   │   ├── CacheFactory.php
│   │   │   │   │   ├── CacheKey.php
│   │   │   │   │   ├── CollectionCacheEntry.php
│   │   │   │   │   ├── CollectionCacheKey.php
│   │   │   │   │   ├── CollectionHydrator.php
│   │   │   │   │   ├── ConcurrentRegion.php
│   │   │   │   │   ├── DefaultCache.php
│   │   │   │   │   ├── DefaultCacheFactory.php
│   │   │   │   │   ├── DefaultCollectionHydrator.php
│   │   │   │   │   ├── DefaultEntityHydrator.php
│   │   │   │   │   ├── DefaultQueryCache.php
│   │   │   │   │   ├── EntityCacheEntry.php
│   │   │   │   │   ├── EntityCacheKey.php
│   │   │   │   │   ├── EntityHydrator.php
│   │   │   │   │   ├── Lock.php
│   │   │   │   │   ├── LockException.php
│   │   │   │   │   ├── QueryCache.php
│   │   │   │   │   ├── QueryCacheEntry.php
│   │   │   │   │   ├── QueryCacheKey.php
│   │   │   │   │   ├── QueryCacheValidator.php
│   │   │   │   │   ├── Region.php
│   │   │   │   │   ├── RegionsConfiguration.php
│   │   │   │   │   ├── TimestampCacheEntry.php
│   │   │   │   │   ├── TimestampCacheKey.php
│   │   │   │   │   ├── TimestampQueryCacheValidator.php
│   │   │   │   │   └── TimestampRegion.php
│   │   │   │   ├── Decorator
│   │   │   │   │   └── EntityManagerDecorator.php
│   │   │   │   ├── Event
│   │   │   │   │   ├── ListenersInvoker.php
│   │   │   │   │   ├── LoadClassMetadataEventArgs.php
│   │   │   │   │   ├── OnClassMetadataNotFoundEventArgs.php
│   │   │   │   │   ├── OnClearEventArgs.php
│   │   │   │   │   ├── OnFlushEventArgs.php
│   │   │   │   │   ├── PostFlushEventArgs.php
│   │   │   │   │   ├── PostLoadEventArgs.php
│   │   │   │   │   ├── PostPersistEventArgs.php
│   │   │   │   │   ├── PostRemoveEventArgs.php
│   │   │   │   │   ├── PostUpdateEventArgs.php
│   │   │   │   │   ├── PreFlushEventArgs.php
│   │   │   │   │   ├── PrePersistEventArgs.php
│   │   │   │   │   ├── PreRemoveEventArgs.php
│   │   │   │   │   └── PreUpdateEventArgs.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── ConfigurationException.php
│   │   │   │   │   ├── DuplicateFieldException.php
│   │   │   │   │   ├── EntityIdentityCollisionException.php
│   │   │   │   │   ├── EntityManagerClosed.php
│   │   │   │   │   ├── EntityMissingAssignedId.php
│   │   │   │   │   ├── InvalidEntityRepository.php
│   │   │   │   │   ├── InvalidHydrationMode.php
│   │   │   │   │   ├── ManagerException.php
│   │   │   │   │   ├── MissingIdentifierField.php
│   │   │   │   │   ├── MissingMappingDriverImplementation.php
│   │   │   │   │   ├── MultipleSelectorsFoundException.php
│   │   │   │   │   ├── NoMatchingPropertyException.php
│   │   │   │   │   ├── NotSupported.php
│   │   │   │   │   ├── ORMException.php
│   │   │   │   │   ├── PersisterException.php
│   │   │   │   │   ├── RepositoryException.php
│   │   │   │   │   ├── SchemaToolException.php
│   │   │   │   │   ├── UnexpectedAssociationValue.php
│   │   │   │   │   └── UnrecognizedIdentifierFields.php
│   │   │   │   ├── Id
│   │   │   │   │   ├── AbstractIdGenerator.php
│   │   │   │   │   ├── AssignedGenerator.php
│   │   │   │   │   ├── BigIntegerIdentityGenerator.php
│   │   │   │   │   ├── IdentityGenerator.php
│   │   │   │   │   └── SequenceGenerator.php
│   │   │   │   ├── Internal
│   │   │   │   │   ├── Hydration
│   │   │   │   │   │   ├── AbstractHydrator.php
│   │   │   │   │   │   ├── ArrayHydrator.php
│   │   │   │   │   │   ├── HydrationException.php
│   │   │   │   │   │   ├── ObjectHydrator.php
│   │   │   │   │   │   ├── ScalarColumnHydrator.php
│   │   │   │   │   │   ├── ScalarHydrator.php
│   │   │   │   │   │   ├── SimpleObjectHydrator.php
│   │   │   │   │   │   └── SingleScalarHydrator.php
│   │   │   │   │   ├── TopologicalSort
│   │   │   │   │   │   └── CycleDetectedException.php
│   │   │   │   │   ├── HydrationCompleteHandler.php
│   │   │   │   │   ├── NoUnknownNamedArguments.php
│   │   │   │   │   ├── QueryType.php
│   │   │   │   │   ├── SQLResultCasing.php
│   │   │   │   │   ├── StronglyConnectedComponents.php
│   │   │   │   │   └── TopologicalSort.php
│   │   │   │   ├── Mapping
│   │   │   │   │   ├── Builder
│   │   │   │   │   │   ├── AssociationBuilder.php
│   │   │   │   │   │   ├── ClassMetadataBuilder.php
│   │   │   │   │   │   ├── EmbeddedBuilder.php
│   │   │   │   │   │   ├── EntityListenerBuilder.php
│   │   │   │   │   │   ├── FieldBuilder.php
│   │   │   │   │   │   ├── ManyToManyAssociationBuilder.php
│   │   │   │   │   │   └── OneToManyAssociationBuilder.php
│   │   │   │   │   ├── Driver
│   │   │   │   │   │   ├── AttributeDriver.php
│   │   │   │   │   │   ├── AttributeReader.php
│   │   │   │   │   │   ├── DatabaseDriver.php
│   │   │   │   │   │   ├── LoadMappingFileImplementation.php
│   │   │   │   │   │   ├── ReflectionBasedDriver.php
│   │   │   │   │   │   ├── RepeatableAttributeCollection.php
│   │   │   │   │   │   ├── SimplifiedXmlDriver.php
│   │   │   │   │   │   └── XmlDriver.php
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── InvalidCustomGenerator.php
│   │   │   │   │   │   └── UnknownGeneratorType.php
│   │   │   │   │   ├── AnsiQuoteStrategy.php
│   │   │   │   │   ├── ArrayAccessImplementation.php
│   │   │   │   │   ├── AssociationMapping.php
│   │   │   │   │   ├── AssociationOverride.php
│   │   │   │   │   ├── AssociationOverrides.php
│   │   │   │   │   ├── AttributeOverride.php
│   │   │   │   │   ├── AttributeOverrides.php
│   │   │   │   │   ├── Cache.php
│   │   │   │   │   ├── ChainTypedFieldMapper.php
│   │   │   │   │   ├── ChangeTrackingPolicy.php
│   │   │   │   │   ├── ClassMetadata.php
│   │   │   │   │   ├── ClassMetadataFactory.php
│   │   │   │   │   ├── Column.php
│   │   │   │   │   ├── CustomIdGenerator.php
│   │   │   │   │   ├── DefaultEntityListenerResolver.php
│   │   │   │   │   ├── DefaultNamingStrategy.php
│   │   │   │   │   ├── DefaultQuoteStrategy.php
│   │   │   │   │   ├── DefaultTypedFieldMapper.php
│   │   │   │   │   ├── DiscriminatorColumn.php
│   │   │   │   │   ├── DiscriminatorColumnMapping.php
│   │   │   │   │   ├── DiscriminatorMap.php
│   │   │   │   │   ├── Embeddable.php
│   │   │   │   │   ├── Embedded.php
│   │   │   │   │   ├── EmbeddedClassMapping.php
│   │   │   │   │   ├── Entity.php
│   │   │   │   │   ├── EntityListenerResolver.php
│   │   │   │   │   ├── EntityListeners.php
│   │   │   │   │   ├── FieldMapping.php
│   │   │   │   │   ├── GeneratedValue.php
│   │   │   │   │   ├── GetReflectionClassImplementation.php
│   │   │   │   │   ├── HasLifecycleCallbacks.php
│   │   │   │   │   ├── Id.php
│   │   │   │   │   ├── Index.php
│   │   │   │   │   ├── InheritanceType.php
│   │   │   │   │   ├── InverseJoinColumn.php
│   │   │   │   │   ├── InverseSideMapping.php
│   │   │   │   │   ├── JoinColumn.php
│   │   │   │   │   ├── JoinColumnMapping.php
│   │   │   │   │   ├── JoinColumnProperties.php
│   │   │   │   │   ├── JoinColumns.php
│   │   │   │   │   ├── JoinTable.php
│   │   │   │   │   ├── JoinTableMapping.php
│   │   │   │   │   ├── ManyToMany.php
│   │   │   │   │   ├── ManyToManyAssociationMapping.php
│   │   │   │   │   ├── ManyToManyInverseSideMapping.php
│   │   │   │   │   ├── ManyToManyOwningSideMapping.php
│   │   │   │   │   ├── ManyToOne.php
│   │   │   │   │   ├── ManyToOneAssociationMapping.php
│   │   │   │   │   ├── MappedSuperclass.php
│   │   │   │   │   ├── MappingAttribute.php
│   │   │   │   │   ├── MappingException.php
│   │   │   │   │   ├── NamingStrategy.php
│   │   │   │   │   ├── OneToMany.php
│   │   │   │   │   ├── OneToManyAssociationMapping.php
│   │   │   │   │   ├── OneToOne.php
│   │   │   │   │   ├── OneToOneAssociationMapping.php
│   │   │   │   │   ├── OneToOneInverseSideMapping.php
│   │   │   │   │   ├── OneToOneOwningSideMapping.php
│   │   │   │   │   ├── OrderBy.php
│   │   │   │   │   ├── OwningSideMapping.php
│   │   │   │   │   ├── PostLoad.php
│   │   │   │   │   ├── PostPersist.php
│   │   │   │   │   ├── PostRemove.php
│   │   │   │   │   ├── PostUpdate.php
│   │   │   │   │   ├── PreFlush.php
│   │   │   │   │   ├── PrePersist.php
│   │   │   │   │   ├── PreRemove.php
│   │   │   │   │   ├── PreUpdate.php
│   │   │   │   │   ├── QuoteStrategy.php
│   │   │   │   │   ├── ReflectionEmbeddedProperty.php
│   │   │   │   │   ├── ReflectionEnumProperty.php
│   │   │   │   │   ├── ReflectionReadonlyProperty.php
│   │   │   │   │   ├── SequenceGenerator.php
│   │   │   │   │   ├── Table.php
│   │   │   │   │   ├── ToManyAssociationMapping.php
│   │   │   │   │   ├── ToManyAssociationMappingImplementation.php
│   │   │   │   │   ├── ToManyInverseSideMapping.php
│   │   │   │   │   ├── ToManyOwningSideMapping.php
│   │   │   │   │   ├── ToOneAssociationMapping.php
│   │   │   │   │   ├── ToOneInverseSideMapping.php
│   │   │   │   │   ├── ToOneOwningSideMapping.php
│   │   │   │   │   ├── TypedFieldMapper.php
│   │   │   │   │   ├── UnderscoreNamingStrategy.php
│   │   │   │   │   ├── UniqueConstraint.php
│   │   │   │   │   └── Version.php
│   │   │   │   ├── Persisters
│   │   │   │   │   ├── Collection
│   │   │   │   │   │   ├── AbstractCollectionPersister.php
│   │   │   │   │   │   ├── CollectionPersister.php
│   │   │   │   │   │   ├── ManyToManyPersister.php
│   │   │   │   │   │   └── OneToManyPersister.php
│   │   │   │   │   ├── Entity
│   │   │   │   │   │   ├── AbstractEntityInheritancePersister.php
│   │   │   │   │   │   ├── BasicEntityPersister.php
│   │   │   │   │   │   ├── CachedPersisterContext.php
│   │   │   │   │   │   ├── EntityPersister.php
│   │   │   │   │   │   ├── JoinedSubclassPersister.php
│   │   │   │   │   │   └── SingleTablePersister.php
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── CantUseInOperatorOnCompositeKeys.php
│   │   │   │   │   │   ├── InvalidOrientation.php
│   │   │   │   │   │   └── UnrecognizedField.php
│   │   │   │   │   ├── MatchingAssociationFieldRequiresObject.php
│   │   │   │   │   ├── PersisterException.php
│   │   │   │   │   ├── SqlExpressionVisitor.php
│   │   │   │   │   └── SqlValueVisitor.php
│   │   │   │   ├── Proxy
│   │   │   │   │   ├── Autoloader.php
│   │   │   │   │   ├── DefaultProxyClassNameResolver.php
│   │   │   │   │   ├── InternalProxy.php
│   │   │   │   │   ├── NotAProxyClass.php
│   │   │   │   │   └── ProxyFactory.php
│   │   │   │   ├── Query
│   │   │   │   │   ├── AST
│   │   │   │   │   │   ├── Functions
│   │   │   │   │   │   │   ├── AbsFunction.php
│   │   │   │   │   │   │   ├── AvgFunction.php
│   │   │   │   │   │   │   ├── BitAndFunction.php
│   │   │   │   │   │   │   ├── BitOrFunction.php
│   │   │   │   │   │   │   ├── ConcatFunction.php
│   │   │   │   │   │   │   ├── CountFunction.php
│   │   │   │   │   │   │   ├── CurrentDateFunction.php
│   │   │   │   │   │   │   ├── CurrentTimeFunction.php
│   │   │   │   │   │   │   ├── CurrentTimestampFunction.php
│   │   │   │   │   │   │   ├── DateAddFunction.php
│   │   │   │   │   │   │   ├── DateDiffFunction.php
│   │   │   │   │   │   │   ├── DateSubFunction.php
│   │   │   │   │   │   │   ├── FunctionNode.php
│   │   │   │   │   │   │   ├── IdentityFunction.php
│   │   │   │   │   │   │   ├── LengthFunction.php
│   │   │   │   │   │   │   ├── LocateFunction.php
│   │   │   │   │   │   │   ├── LowerFunction.php
│   │   │   │   │   │   │   ├── MaxFunction.php
│   │   │   │   │   │   │   ├── MinFunction.php
│   │   │   │   │   │   │   ├── ModFunction.php
│   │   │   │   │   │   │   ├── SizeFunction.php
│   │   │   │   │   │   │   ├── SqrtFunction.php
│   │   │   │   │   │   │   ├── SubstringFunction.php
│   │   │   │   │   │   │   ├── SumFunction.php
│   │   │   │   │   │   │   ├── TrimFunction.php
│   │   │   │   │   │   │   └── UpperFunction.php
│   │   │   │   │   │   ├── AggregateExpression.php
│   │   │   │   │   │   ├── ArithmeticExpression.php
│   │   │   │   │   │   ├── ArithmeticFactor.php
│   │   │   │   │   │   ├── ArithmeticTerm.php
│   │   │   │   │   │   ├── ASTException.php
│   │   │   │   │   │   ├── BetweenExpression.php
│   │   │   │   │   │   ├── CoalesceExpression.php
│   │   │   │   │   │   ├── CollectionMemberExpression.php
│   │   │   │   │   │   ├── ComparisonExpression.php
│   │   │   │   │   │   ├── ConditionalExpression.php
│   │   │   │   │   │   ├── ConditionalFactor.php
│   │   │   │   │   │   ├── ConditionalPrimary.php
│   │   │   │   │   │   ├── ConditionalTerm.php
│   │   │   │   │   │   ├── DeleteClause.php
│   │   │   │   │   │   ├── DeleteStatement.php
│   │   │   │   │   │   ├── EmptyCollectionComparisonExpression.php
│   │   │   │   │   │   ├── ExistsExpression.php
│   │   │   │   │   │   ├── FromClause.php
│   │   │   │   │   │   ├── GeneralCaseExpression.php
│   │   │   │   │   │   ├── GroupByClause.php
│   │   │   │   │   │   ├── HavingClause.php
│   │   │   │   │   │   ├── IdentificationVariableDeclaration.php
│   │   │   │   │   │   ├── IndexBy.php
│   │   │   │   │   │   ├── InListExpression.php
│   │   │   │   │   │   ├── InputParameter.php
│   │   │   │   │   │   ├── InstanceOfExpression.php
│   │   │   │   │   │   ├── InSubselectExpression.php
│   │   │   │   │   │   ├── Join.php
│   │   │   │   │   │   ├── JoinAssociationDeclaration.php
│   │   │   │   │   │   ├── JoinAssociationPathExpression.php
│   │   │   │   │   │   ├── JoinClassPathExpression.php
│   │   │   │   │   │   ├── JoinVariableDeclaration.php
│   │   │   │   │   │   ├── LikeExpression.php
│   │   │   │   │   │   ├── Literal.php
│   │   │   │   │   │   ├── NewObjectExpression.php
│   │   │   │   │   │   ├── Node.php
│   │   │   │   │   │   ├── NullComparisonExpression.php
│   │   │   │   │   │   ├── NullIfExpression.php
│   │   │   │   │   │   ├── OrderByClause.php
│   │   │   │   │   │   ├── OrderByItem.php
│   │   │   │   │   │   ├── ParenthesisExpression.php
│   │   │   │   │   │   ├── PartialObjectExpression.php
│   │   │   │   │   │   ├── PathExpression.php
│   │   │   │   │   │   ├── Phase2OptimizableConditional.php
│   │   │   │   │   │   ├── QuantifiedExpression.php
│   │   │   │   │   │   ├── RangeVariableDeclaration.php
│   │   │   │   │   │   ├── SelectClause.php
│   │   │   │   │   │   ├── SelectExpression.php
│   │   │   │   │   │   ├── SelectStatement.php
│   │   │   │   │   │   ├── SimpleArithmeticExpression.php
│   │   │   │   │   │   ├── SimpleCaseExpression.php
│   │   │   │   │   │   ├── SimpleSelectClause.php
│   │   │   │   │   │   ├── SimpleSelectExpression.php
│   │   │   │   │   │   ├── SimpleWhenClause.php
│   │   │   │   │   │   ├── Subselect.php
│   │   │   │   │   │   ├── SubselectFromClause.php
│   │   │   │   │   │   ├── SubselectIdentificationVariableDeclaration.php
│   │   │   │   │   │   ├── TypedExpression.php
│   │   │   │   │   │   ├── UpdateClause.php
│   │   │   │   │   │   ├── UpdateItem.php
│   │   │   │   │   │   ├── UpdateStatement.php
│   │   │   │   │   │   ├── WhenClause.php
│   │   │   │   │   │   └── WhereClause.php
│   │   │   │   │   ├── Exec
│   │   │   │   │   │   ├── AbstractSqlExecutor.php
│   │   │   │   │   │   ├── FinalizedSelectExecutor.php
│   │   │   │   │   │   ├── MultiTableDeleteExecutor.php
│   │   │   │   │   │   ├── MultiTableUpdateExecutor.php
│   │   │   │   │   │   ├── PreparedExecutorFinalizer.php
│   │   │   │   │   │   ├── SingleSelectExecutor.php
│   │   │   │   │   │   ├── SingleSelectSqlFinalizer.php
│   │   │   │   │   │   ├── SingleTableDeleteUpdateExecutor.php
│   │   │   │   │   │   └── SqlFinalizer.php
│   │   │   │   │   ├── Expr
│   │   │   │   │   │   ├── Andx.php
│   │   │   │   │   │   ├── Base.php
│   │   │   │   │   │   ├── Comparison.php
│   │   │   │   │   │   ├── Composite.php
│   │   │   │   │   │   ├── From.php
│   │   │   │   │   │   ├── Func.php
│   │   │   │   │   │   ├── GroupBy.php
│   │   │   │   │   │   ├── Join.php
│   │   │   │   │   │   ├── Literal.php
│   │   │   │   │   │   ├── Math.php
│   │   │   │   │   │   ├── OrderBy.php
│   │   │   │   │   │   ├── Orx.php
│   │   │   │   │   │   └── Select.php
│   │   │   │   │   ├── Filter
│   │   │   │   │   │   ├── FilterException.php
│   │   │   │   │   │   └── SQLFilter.php
│   │   │   │   │   ├── Expr.php
│   │   │   │   │   ├── FilterCollection.php
│   │   │   │   │   ├── Lexer.php
│   │   │   │   │   ├── OutputWalker.php
│   │   │   │   │   ├── Parameter.php
│   │   │   │   │   ├── ParameterTypeInferer.php
│   │   │   │   │   ├── Parser.php
│   │   │   │   │   ├── ParserResult.php
│   │   │   │   │   ├── Printer.php
│   │   │   │   │   ├── QueryException.php
│   │   │   │   │   ├── QueryExpressionVisitor.php
│   │   │   │   │   ├── ResultSetMapping.php
│   │   │   │   │   ├── ResultSetMappingBuilder.php
│   │   │   │   │   ├── SqlOutputWalker.php
│   │   │   │   │   ├── SqlWalker.php
│   │   │   │   │   ├── TokenType.php
│   │   │   │   │   ├── TreeWalker.php
│   │   │   │   │   ├── TreeWalkerAdapter.php
│   │   │   │   │   └── TreeWalkerChain.php
│   │   │   │   ├── Repository
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── InvalidFindByCall.php
│   │   │   │   │   │   └── InvalidMagicMethodCall.php
│   │   │   │   │   ├── DefaultRepositoryFactory.php
│   │   │   │   │   └── RepositoryFactory.php
│   │   │   │   ├── Tools
│   │   │   │   │   ├── Console
│   │   │   │   │   │   ├── Command
│   │   │   │   │   │   │   ├── ClearCache
│   │   │   │   │   │   │   │   ├── CollectionRegionCommand.php
│   │   │   │   │   │   │   │   ├── EntityRegionCommand.php
│   │   │   │   │   │   │   │   ├── MetadataCommand.php
│   │   │   │   │   │   │   │   ├── QueryCommand.php
│   │   │   │   │   │   │   │   ├── QueryRegionCommand.php
│   │   │   │   │   │   │   │   └── ResultCommand.php
│   │   │   │   │   │   │   ├── SchemaTool
│   │   │   │   │   │   │   │   ├── AbstractCommand.php
│   │   │   │   │   │   │   │   ├── CreateCommand.php
│   │   │   │   │   │   │   │   ├── DropCommand.php
│   │   │   │   │   │   │   │   └── UpdateCommand.php
│   │   │   │   │   │   │   ├── AbstractEntityManagerCommand.php
│   │   │   │   │   │   │   ├── GenerateProxiesCommand.php
│   │   │   │   │   │   │   ├── InfoCommand.php
│   │   │   │   │   │   │   ├── MappingDescribeCommand.php
│   │   │   │   │   │   │   ├── RunDqlCommand.php
│   │   │   │   │   │   │   └── ValidateSchemaCommand.php
│   │   │   │   │   │   ├── EntityManagerProvider
│   │   │   │   │   │   │   ├── ConnectionFromManagerProvider.php
│   │   │   │   │   │   │   ├── SingleManagerProvider.php
│   │   │   │   │   │   │   └── UnknownManagerException.php
│   │   │   │   │   │   ├── ConsoleRunner.php
│   │   │   │   │   │   ├── EntityManagerProvider.php
│   │   │   │   │   │   └── MetadataFilter.php
│   │   │   │   │   ├── Event
│   │   │   │   │   │   ├── GenerateSchemaEventArgs.php
│   │   │   │   │   │   └── GenerateSchemaTableEventArgs.php
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── MissingColumnException.php
│   │   │   │   │   │   └── NotSupported.php
│   │   │   │   │   ├── Pagination
│   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   └── RowNumberOverFunctionNotEnabled.php
│   │   │   │   │   │   ├── CountOutputWalker.php
│   │   │   │   │   │   ├── CountWalker.php
│   │   │   │   │   │   ├── LimitSubqueryOutputWalker.php
│   │   │   │   │   │   ├── LimitSubqueryWalker.php
│   │   │   │   │   │   ├── Paginator.php
│   │   │   │   │   │   ├── RootTypeWalker.php
│   │   │   │   │   │   ├── RowNumberOverFunction.php
│   │   │   │   │   │   └── WhereInWalker.php
│   │   │   │   │   ├── AttachEntityListenersListener.php
│   │   │   │   │   ├── Debug.php
│   │   │   │   │   ├── DebugUnitOfWorkListener.php
│   │   │   │   │   ├── ResolveTargetEntityListener.php
│   │   │   │   │   ├── SchemaTool.php
│   │   │   │   │   ├── SchemaValidator.php
│   │   │   │   │   ├── ToolEvents.php
│   │   │   │   │   └── ToolsException.php
│   │   │   │   ├── Utility
│   │   │   │   │   ├── HierarchyDiscriminatorResolver.php
│   │   │   │   │   ├── IdentifierFlattener.php
│   │   │   │   │   ├── LockSqlHelper.php
│   │   │   │   │   └── PersisterHelper.php
│   │   │   │   ├── AbstractQuery.php
│   │   │   │   ├── Cache.php
│   │   │   │   ├── Configuration.php
│   │   │   │   ├── EntityManager.php
│   │   │   │   ├── EntityManagerInterface.php
│   │   │   │   ├── EntityNotFoundException.php
│   │   │   │   ├── EntityRepository.php
│   │   │   │   ├── Events.php
│   │   │   │   ├── LazyCriteriaCollection.php
│   │   │   │   ├── NativeQuery.php
│   │   │   │   ├── NonUniqueResultException.php
│   │   │   │   ├── NoResultException.php
│   │   │   │   ├── OptimisticLockException.php
│   │   │   │   ├── ORMInvalidArgumentException.php
│   │   │   │   ├── ORMSetup.php
│   │   │   │   ├── PersistentCollection.php
│   │   │   │   ├── PessimisticLockException.php
│   │   │   │   ├── Query.php
│   │   │   │   ├── QueryBuilder.php
│   │   │   │   ├── TransactionRequiredException.php
│   │   │   │   ├── UnexpectedResultException.php
│   │   │   │   └── UnitOfWork.php
│   │   │   ├── tests
│   │   │   │   ├── Doctrine
│   │   │   │   │   └── Tests
│   │   │   │   │       └── ORM
│   │   │   │   │           └── Functional
│   │   │   │   │               └── Ticket
│   │   │   │   │                   └── LazyEagerCollectionTest.php
│   │   │   │   ├── Performance
│   │   │   │   │   ├── ChangeSet
│   │   │   │   │   │   └── UnitOfWorkComputeChangesBench.php
│   │   │   │   │   ├── Hydration
│   │   │   │   │   │   ├── MixedQueryFetchJoinArrayHydrationPerformanceBench.php
│   │   │   │   │   │   ├── MixedQueryFetchJoinFullObjectHydrationPerformanceBench.php
│   │   │   │   │   │   ├── MixedQueryFetchJoinPartialObjectHydrationPerformanceBench.php
│   │   │   │   │   │   ├── SimpleHydrationBench.php
│   │   │   │   │   │   ├── SimpleInsertPerformanceBench.php
│   │   │   │   │   │   ├── SimpleQueryArrayHydrationPerformanceBench.php
│   │   │   │   │   │   ├── SimpleQueryFullObjectHydrationPerformanceBench.php
│   │   │   │   │   │   ├── SimpleQueryPartialObjectHydrationPerformanceBench.php
│   │   │   │   │   │   ├── SimpleQueryScalarHydrationPerformanceBench.php
│   │   │   │   │   │   ├── SingleTableInheritanceHydrationPerformanceBench.php
│   │   │   │   │   │   └── SingleTableInheritanceInsertPerformanceBench.php
│   │   │   │   │   ├── LazyLoading
│   │   │   │   │   │   ├── ProxyInitializationTimeBench.php
│   │   │   │   │   │   └── ProxyInstantiationTimeBench.php
│   │   │   │   │   ├── Mock
│   │   │   │   │   │   ├── NonLoadingPersister.php
│   │   │   │   │   │   ├── NonProxyLoadingEntityManager.php
│   │   │   │   │   │   └── NonProxyLoadingUnitOfWork.php
│   │   │   │   │   ├── Query
│   │   │   │   │   │   └── QueryBoundParameterProcessingBench.php
│   │   │   │   │   └── EntityManagerFactory.php
│   │   │   │   ├── StaticAnalysis
│   │   │   │   │   ├── Mapping
│   │   │   │   │   │   └── class-metadata-constructor.php
│   │   │   │   │   ├── Tools
│   │   │   │   │   │   └── Pagination
│   │   │   │   │   │       └── paginator-covariant.php
│   │   │   │   │   └── get-metadata.php
│   │   │   │   ├── Tests
│   │   │   │   │   ├── DbalExtensions
│   │   │   │   │   │   ├── Connection.php
│   │   │   │   │   │   ├── QueryLog.php
│   │   │   │   │   │   └── SqlLogger.php
│   │   │   │   │   ├── DbalTypes
│   │   │   │   │   │   ├── CustomIdObject.php
│   │   │   │   │   │   ├── CustomIdObjectType.php
│   │   │   │   │   │   ├── CustomIntType.php
│   │   │   │   │   │   ├── GH8565EmployeePayloadType.php
│   │   │   │   │   │   ├── GH8565ManagerPayloadType.php
│   │   │   │   │   │   ├── NegativeToPositiveType.php
│   │   │   │   │   │   ├── Rot13Type.php
│   │   │   │   │   │   └── UpperCaseStringType.php
│   │   │   │   │   ├── EventListener
│   │   │   │   │   │   └── CacheMetadataListener.php
│   │   │   │   │   ├── Mocks
│   │   │   │   │   │   ├── ArrayResultFactory.php
│   │   │   │   │   │   ├── CacheEntryMock.php
│   │   │   │   │   │   ├── CacheKeyMock.php
│   │   │   │   │   │   ├── CacheRegionMock.php
│   │   │   │   │   │   ├── CompatibilityType.php
│   │   │   │   │   │   ├── ConcurrentRegionMock.php
│   │   │   │   │   │   ├── CustomTreeWalkerJoin.php
│   │   │   │   │   │   ├── EntityManagerMock.php
│   │   │   │   │   │   ├── EntityPersisterMock.php
│   │   │   │   │   │   ├── ExceptionConverterMock.php
│   │   │   │   │   │   ├── MetadataDriverMock.php
│   │   │   │   │   │   ├── NullSqlWalker.php
│   │   │   │   │   │   ├── SchemaManagerMock.php
│   │   │   │   │   │   ├── TimestampRegionMock.php
│   │   │   │   │   │   └── UnitOfWorkMock.php
│   │   │   │   │   ├── Models
│   │   │   │   │   │   ├── AbstractFetchEager
│   │   │   │   │   │   │   ├── AbstractRemoteControl.php
│   │   │   │   │   │   │   ├── MobileRemoteControl.php
│   │   │   │   │   │   │   └── User.php
│   │   │   │   │   │   ├── BigIntegers
│   │   │   │   │   │   │   └── BigIntegers.php
│   │   │   │   │   │   ├── Cache
│   │   │   │   │   │   │   ├── Action.php
│   │   │   │   │   │   │   ├── Address.php
│   │   │   │   │   │   │   ├── Attraction.php
│   │   │   │   │   │   │   ├── AttractionContactInfo.php
│   │   │   │   │   │   │   ├── AttractionInfo.php
│   │   │   │   │   │   │   ├── AttractionLocationInfo.php
│   │   │   │   │   │   │   ├── Bar.php
│   │   │   │   │   │   │   ├── Beach.php
│   │   │   │   │   │   │   ├── City.php
│   │   │   │   │   │   │   ├── Client.php
│   │   │   │   │   │   │   ├── ComplexAction.php
│   │   │   │   │   │   │   ├── Country.php
│   │   │   │   │   │   │   ├── Flight.php
│   │   │   │   │   │   │   ├── Login.php
│   │   │   │   │   │   │   ├── Person.php
│   │   │   │   │   │   │   ├── Restaurant.php
│   │   │   │   │   │   │   ├── State.php
│   │   │   │   │   │   │   ├── Token.php
│   │   │   │   │   │   │   ├── Travel.php
│   │   │   │   │   │   │   ├── Traveler.php
│   │   │   │   │   │   │   ├── TravelerProfile.php
│   │   │   │   │   │   │   └── TravelerProfileInfo.php
│   │   │   │   │   │   ├── CMS
│   │   │   │   │   │   │   ├── CmsAddress.php
│   │   │   │   │   │   │   ├── CmsAddressDTO.php
│   │   │   │   │   │   │   ├── CmsAddressDTONamedArgs.php
│   │   │   │   │   │   │   ├── CmsAddressListener.php
│   │   │   │   │   │   │   ├── CmsArticle.php
│   │   │   │   │   │   │   ├── CmsComment.php
│   │   │   │   │   │   │   ├── CmsDumbDTO.php
│   │   │   │   │   │   │   ├── CmsEmail.php
│   │   │   │   │   │   │   ├── CmsEmployee.php
│   │   │   │   │   │   │   ├── CmsGroup.php
│   │   │   │   │   │   │   ├── CmsPhonenumber.php
│   │   │   │   │   │   │   ├── CmsTag.php
│   │   │   │   │   │   │   ├── CmsUser.php
│   │   │   │   │   │   │   ├── CmsUserDTO.php
│   │   │   │   │   │   │   ├── CmsUserDTONamedArgs.php
│   │   │   │   │   │   │   └── CmsUserDTOVariadicArg.php
│   │   │   │   │   │   ├── Company
│   │   │   │   │   │   │   ├── CompanyAuction.php
│   │   │   │   │   │   │   ├── CompanyCar.php
│   │   │   │   │   │   │   ├── CompanyContract.php
│   │   │   │   │   │   │   ├── CompanyContractListener.php
│   │   │   │   │   │   │   ├── CompanyEmployee.php
│   │   │   │   │   │   │   ├── CompanyEvent.php
│   │   │   │   │   │   │   ├── CompanyFixContract.php
│   │   │   │   │   │   │   ├── CompanyFlexContract.php
│   │   │   │   │   │   │   ├── CompanyFlexUltraContract.php
│   │   │   │   │   │   │   ├── CompanyFlexUltraContractListener.php
│   │   │   │   │   │   │   ├── CompanyManager.php
│   │   │   │   │   │   │   ├── CompanyOrganization.php
│   │   │   │   │   │   │   ├── CompanyPerson.php
│   │   │   │   │   │   │   └── CompanyRaffle.php
│   │   │   │   │   │   ├── CompositeKeyInheritance
│   │   │   │   │   │   │   ├── JoinedChildClass.php
│   │   │   │   │   │   │   ├── JoinedDerivedChildClass.php
│   │   │   │   │   │   │   ├── JoinedDerivedIdentityClass.php
│   │   │   │   │   │   │   ├── JoinedDerivedRootClass.php
│   │   │   │   │   │   │   ├── JoinedRootClass.php
│   │   │   │   │   │   │   ├── SingleChildClass.php
│   │   │   │   │   │   │   └── SingleRootClass.php
│   │   │   │   │   │   ├── CompositeKeyRelations
│   │   │   │   │   │   │   ├── CustomerClass.php
│   │   │   │   │   │   │   └── InvoiceClass.php
│   │   │   │   │   │   ├── Customer
│   │   │   │   │   │   │   ├── CustomerType.php
│   │   │   │   │   │   │   ├── ExternalCustomer.php
│   │   │   │   │   │   │   └── InternalCustomer.php
│   │   │   │   │   │   ├── CustomType
│   │   │   │   │   │   │   ├── CustomIdObjectTypeChild.php
│   │   │   │   │   │   │   ├── CustomIdObjectTypeParent.php
│   │   │   │   │   │   │   ├── CustomTypeChild.php
│   │   │   │   │   │   │   ├── CustomTypeParent.php
│   │   │   │   │   │   │   └── CustomTypeUpperCase.php
│   │   │   │   │   │   ├── DataTransferObjects
│   │   │   │   │   │   │   ├── DtoWithArrayOfEnums.php
│   │   │   │   │   │   │   └── DtoWithEnum.php
│   │   │   │   │   │   ├── DDC117
│   │   │   │   │   │   │   ├── DDC117ApproveChanges.php
│   │   │   │   │   │   │   ├── DDC117Article.php
│   │   │   │   │   │   │   ├── DDC117ArticleDetails.php
│   │   │   │   │   │   │   ├── DDC117Editor.php
│   │   │   │   │   │   │   ├── DDC117Link.php
│   │   │   │   │   │   │   ├── DDC117Reference.php
│   │   │   │   │   │   │   └── DDC117Translation.php
│   │   │   │   │   │   ├── DDC1476
│   │   │   │   │   │   │   └── DDC1476EntityWithDefaultFieldType.php
│   │   │   │   │   │   ├── DDC1590
│   │   │   │   │   │   │   ├── DDC1590Entity.php
│   │   │   │   │   │   │   └── DDC1590User.php
│   │   │   │   │   │   ├── DDC1872
│   │   │   │   │   │   │   ├── DDC1872Bar.php
│   │   │   │   │   │   │   ├── DDC1872ExampleEntityWithoutOverride.php
│   │   │   │   │   │   │   ├── DDC1872ExampleEntityWithOverride.php
│   │   │   │   │   │   │   └── DDC1872ExampleTrait.php
│   │   │   │   │   │   ├── DDC2372
│   │   │   │   │   │   │   ├── Traits
│   │   │   │   │   │   │   │   └── DDC2372AddressAndAccessors.php
│   │   │   │   │   │   │   ├── DDC2372Address.php
│   │   │   │   │   │   │   ├── DDC2372Admin.php
│   │   │   │   │   │   │   └── DDC2372User.php
│   │   │   │   │   │   ├── DDC2504
│   │   │   │   │   │   │   ├── DDC2504ChildClass.php
│   │   │   │   │   │   │   ├── DDC2504OtherClass.php
│   │   │   │   │   │   │   └── DDC2504RootClass.php
│   │   │   │   │   │   ├── DDC2825
│   │   │   │   │   │   │   ├── ExplicitSchemaAndTable.php
│   │   │   │   │   │   │   └── SchemaAndTableInTableName.php
│   │   │   │   │   │   ├── DDC3231
│   │   │   │   │   │   │   ├── DDC3231EntityRepository.php
│   │   │   │   │   │   │   ├── DDC3231User1.php
│   │   │   │   │   │   │   ├── DDC3231User1NoNamespace.php
│   │   │   │   │   │   │   ├── DDC3231User2.php
│   │   │   │   │   │   │   └── DDC3231User2NoNamespace.php
│   │   │   │   │   │   ├── DDC3293
│   │   │   │   │   │   │   ├── DDC3293Address.php
│   │   │   │   │   │   │   ├── DDC3293User.php
│   │   │   │   │   │   │   └── DDC3293UserPrefixed.php
│   │   │   │   │   │   ├── DDC3346
│   │   │   │   │   │   │   ├── DDC3346Article.php
│   │   │   │   │   │   │   └── DDC3346Author.php
│   │   │   │   │   │   ├── DDC3579
│   │   │   │   │   │   │   ├── DDC3579Admin.php
│   │   │   │   │   │   │   ├── DDC3579Group.php
│   │   │   │   │   │   │   └── DDC3579User.php
│   │   │   │   │   │   ├── DDC3597
│   │   │   │   │   │   │   ├── Embeddable
│   │   │   │   │   │   │   │   └── DDC3597Dimension.php
│   │   │   │   │   │   │   ├── DDC3597Image.php
│   │   │   │   │   │   │   ├── DDC3597Media.php
│   │   │   │   │   │   │   └── DDC3597Root.php
│   │   │   │   │   │   ├── DDC3699
│   │   │   │   │   │   │   ├── DDC3699Child.php
│   │   │   │   │   │   │   ├── DDC3699Parent.php
│   │   │   │   │   │   │   ├── DDC3699RelationMany.php
│   │   │   │   │   │   │   └── DDC3699RelationOne.php
│   │   │   │   │   │   ├── DDC3711
│   │   │   │   │   │   │   ├── DDC3711EntityA.php
│   │   │   │   │   │   │   └── DDC3711EntityB.php
│   │   │   │   │   │   ├── DDC3899
│   │   │   │   │   │   │   ├── DDC3899Contract.php
│   │   │   │   │   │   │   ├── DDC3899FixContract.php
│   │   │   │   │   │   │   ├── DDC3899FlexContract.php
│   │   │   │   │   │   │   └── DDC3899User.php
│   │   │   │   │   │   ├── DDC4006
│   │   │   │   │   │   │   ├── DDC4006User.php
│   │   │   │   │   │   │   └── DDC4006UserId.php
│   │   │   │   │   │   ├── DDC5934
│   │   │   │   │   │   │   ├── DDC5934BaseContract.php
│   │   │   │   │   │   │   ├── DDC5934Contract.php
│   │   │   │   │   │   │   └── DDC5934Member.php
│   │   │   │   │   │   ├── DDC6412
│   │   │   │   │   │   │   └── DDC6412File.php
│   │   │   │   │   │   ├── DDC6573
│   │   │   │   │   │   │   ├── DDC6573Currency.php
│   │   │   │   │   │   │   ├── DDC6573Item.php
│   │   │   │   │   │   │   └── DDC6573Money.php
│   │   │   │   │   │   ├── DDC753
│   │   │   │   │   │   │   ├── DDC753CustomRepository.php
│   │   │   │   │   │   │   ├── DDC753DefaultRepository.php
│   │   │   │   │   │   │   ├── DDC753EntityWithCustomRepository.php
│   │   │   │   │   │   │   ├── DDC753EntityWithDefaultCustomRepository.php
│   │   │   │   │   │   │   ├── DDC753EntityWithInvalidRepository.php
│   │   │   │   │   │   │   └── DDC753InvalidRepository.php
│   │   │   │   │   │   ├── DDC869
│   │   │   │   │   │   │   ├── DDC869ChequePayment.php
│   │   │   │   │   │   │   ├── DDC869CreditCardPayment.php
│   │   │   │   │   │   │   ├── DDC869Payment.php
│   │   │   │   │   │   │   └── DDC869PaymentRepository.php
│   │   │   │   │   │   ├── DDC889
│   │   │   │   │   │   │   ├── DDC889Class.php
│   │   │   │   │   │   │   ├── DDC889Entity.php
│   │   │   │   │   │   │   └── DDC889SuperClass.php
│   │   │   │   │   │   ├── DDC964
│   │   │   │   │   │   │   ├── DDC964Address.php
│   │   │   │   │   │   │   ├── DDC964Admin.php
│   │   │   │   │   │   │   ├── DDC964Group.php
│   │   │   │   │   │   │   ├── DDC964Guest.php
│   │   │   │   │   │   │   └── DDC964User.php
│   │   │   │   │   │   ├── DirectoryTree
│   │   │   │   │   │   │   ├── AbstractContentItem.php
│   │   │   │   │   │   │   ├── Directory.php
│   │   │   │   │   │   │   └── File.php
│   │   │   │   │   │   ├── EagerFetchedCompositeOneToMany
│   │   │   │   │   │   │   ├── RootEntity.php
│   │   │   │   │   │   │   └── SecondLevel.php
│   │   │   │   │   │   ├── ECommerce
│   │   │   │   │   │   │   ├── ECommerceCart.php
│   │   │   │   │   │   │   ├── ECommerceCategory.php
│   │   │   │   │   │   │   ├── ECommerceCustomer.php
│   │   │   │   │   │   │   ├── ECommerceFeature.php
│   │   │   │   │   │   │   ├── ECommerceProduct.php
│   │   │   │   │   │   │   ├── ECommerceProduct2.php
│   │   │   │   │   │   │   └── ECommerceShipping.php
│   │   │   │   │   │   ├── Enums
│   │   │   │   │   │   │   ├── AccessLevel.php
│   │   │   │   │   │   │   ├── Card.php
│   │   │   │   │   │   │   ├── CardNativeEnum.php
│   │   │   │   │   │   │   ├── CardWithDefault.php
│   │   │   │   │   │   │   ├── CardWithNullable.php
│   │   │   │   │   │   │   ├── City.php
│   │   │   │   │   │   │   ├── FaultySwitch.php
│   │   │   │   │   │   │   ├── Product.php
│   │   │   │   │   │   │   ├── Quantity.php
│   │   │   │   │   │   │   ├── Scale.php
│   │   │   │   │   │   │   ├── Suit.php
│   │   │   │   │   │   │   ├── SwitchStatus.php
│   │   │   │   │   │   │   ├── TypedCard.php
│   │   │   │   │   │   │   ├── TypedCardEnumCompositeId.php
│   │   │   │   │   │   │   ├── TypedCardEnumId.php
│   │   │   │   │   │   │   ├── TypedCardNativeEnum.php
│   │   │   │   │   │   │   ├── Unit.php
│   │   │   │   │   │   │   └── UserStatus.php
│   │   │   │   │   │   ├── Forum
│   │   │   │   │   │   │   ├── ForumAvatar.php
│   │   │   │   │   │   │   ├── ForumBoard.php
│   │   │   │   │   │   │   ├── ForumCategory.php
│   │   │   │   │   │   │   ├── ForumEntry.php
│   │   │   │   │   │   │   └── ForumUser.php
│   │   │   │   │   │   ├── Generic
│   │   │   │   │   │   │   ├── BooleanModel.php
│   │   │   │   │   │   │   ├── DateTimeModel.php
│   │   │   │   │   │   │   ├── DecimalModel.php
│   │   │   │   │   │   │   ├── NonAlphaColumnsEntity.php
│   │   │   │   │   │   │   └── SerializationModel.php
│   │   │   │   │   │   ├── GeoNames
│   │   │   │   │   │   │   ├── Admin1.php
│   │   │   │   │   │   │   ├── Admin1AlternateName.php
│   │   │   │   │   │   │   ├── City.php
│   │   │   │   │   │   │   └── Country.php
│   │   │   │   │   │   ├── GH10132
│   │   │   │   │   │   │   ├── Complex.php
│   │   │   │   │   │   │   └── ComplexChild.php
│   │   │   │   │   │   ├── GH10288
│   │   │   │   │   │   │   └── GH10288People.php
│   │   │   │   │   │   ├── GH10334
│   │   │   │   │   │   │   ├── GH10334Foo.php
│   │   │   │   │   │   │   ├── GH10334FooCollection.php
│   │   │   │   │   │   │   ├── GH10334Product.php
│   │   │   │   │   │   │   ├── GH10334ProductType.php
│   │   │   │   │   │   │   └── GH10334ProductTypeId.php
│   │   │   │   │   │   ├── GH10336
│   │   │   │   │   │   │   ├── GH10336Entity.php
│   │   │   │   │   │   │   └── GH10336Relation.php
│   │   │   │   │   │   ├── GH11524
│   │   │   │   │   │   │   ├── GH11524Entity.php
│   │   │   │   │   │   │   ├── GH11524Listener.php
│   │   │   │   │   │   │   └── GH11524Relation.php
│   │   │   │   │   │   ├── GH7141
│   │   │   │   │   │   │   └── GH7141Article.php
│   │   │   │   │   │   ├── GH7316
│   │   │   │   │   │   │   └── GH7316Article.php
│   │   │   │   │   │   ├── GH7717
│   │   │   │   │   │   │   ├── GH7717Child.php
│   │   │   │   │   │   │   └── GH7717Parent.php
│   │   │   │   │   │   ├── GH8565
│   │   │   │   │   │   │   ├── GH8565Employee.php
│   │   │   │   │   │   │   ├── GH8565Manager.php
│   │   │   │   │   │   │   └── GH8565Person.php
│   │   │   │   │   │   ├── Global
│   │   │   │   │   │   │   └── GlobalNamespaceModel.php
│   │   │   │   │   │   ├── Hydration
│   │   │   │   │   │   │   ├── EntityWithArrayDefaultArrayValueM2M.php
│   │   │   │   │   │   │   └── SimpleEntity.php
│   │   │   │   │   │   ├── Issue5989
│   │   │   │   │   │   │   ├── Issue5989Employee.php
│   │   │   │   │   │   │   ├── Issue5989Manager.php
│   │   │   │   │   │   │   └── Issue5989Person.php
│   │   │   │   │   │   ├── Issue9300
│   │   │   │   │   │   │   ├── Issue9300Child.php
│   │   │   │   │   │   │   └── Issue9300Parent.php
│   │   │   │   │   │   ├── JoinedInheritanceType
│   │   │   │   │   │   │   ├── AnotherChildClass.php
│   │   │   │   │   │   │   ├── ChildClass.php
│   │   │   │   │   │   │   └── RootClass.php
│   │   │   │   │   │   ├── Legacy
│   │   │   │   │   │   │   ├── LegacyArticle.php
│   │   │   │   │   │   │   ├── LegacyCar.php
│   │   │   │   │   │   │   ├── LegacyUser.php
│   │   │   │   │   │   │   └── LegacyUserReference.php
│   │   │   │   │   │   ├── ManyToManyPersister
│   │   │   │   │   │   │   ├── ChildClass.php
│   │   │   │   │   │   │   ├── OtherParentClass.php
│   │   │   │   │   │   │   └── ParentClass.php
│   │   │   │   │   │   ├── MixedToOneIdentity
│   │   │   │   │   │   │   ├── CompositeToOneKeyState.php
│   │   │   │   │   │   │   └── Country.php
│   │   │   │   │   │   ├── Navigation
│   │   │   │   │   │   │   ├── NavCountry.php
│   │   │   │   │   │   │   ├── NavPhotos.php
│   │   │   │   │   │   │   ├── NavPointOfInterest.php
│   │   │   │   │   │   │   ├── NavTour.php
│   │   │   │   │   │   │   └── NavUser.php
│   │   │   │   │   │   ├── NonPublicSchemaJoins
│   │   │   │   │   │   │   └── User.php
│   │   │   │   │   │   ├── NullDefault
│   │   │   │   │   │   │   └── NullDefaultColumn.php
│   │   │   │   │   │   ├── OneToOneInverseSideLoad
│   │   │   │   │   │   │   ├── InverseSide.php
│   │   │   │   │   │   │   └── OwningSide.php
│   │   │   │   │   │   ├── OneToOneInverseSideWithAssociativeIdLoad
│   │   │   │   │   │   │   ├── InverseSide.php
│   │   │   │   │   │   │   ├── InverseSideIdTarget.php
│   │   │   │   │   │   │   └── OwningSide.php
│   │   │   │   │   │   ├── OneToOneSingleTableInheritance
│   │   │   │   │   │   │   ├── Cat.php
│   │   │   │   │   │   │   ├── LitterBox.php
│   │   │   │   │   │   │   └── Pet.php
│   │   │   │   │   │   ├── Pagination
│   │   │   │   │   │   │   ├── Company.php
│   │   │   │   │   │   │   ├── Department.php
│   │   │   │   │   │   │   ├── Logo.php
│   │   │   │   │   │   │   ├── User.php
│   │   │   │   │   │   │   └── User1.php
│   │   │   │   │   │   ├── PersistentObject
│   │   │   │   │   │   │   ├── PersistentCollectionContent.php
│   │   │   │   │   │   │   ├── PersistentCollectionHolder.php
│   │   │   │   │   │   │   └── PersistentEntity.php
│   │   │   │   │   │   ├── Project
│   │   │   │   │   │   │   ├── Project.php
│   │   │   │   │   │   │   ├── ProjectId.php
│   │   │   │   │   │   │   ├── ProjectInvalidMapping.php
│   │   │   │   │   │   │   └── ProjectName.php
│   │   │   │   │   │   ├── Quote
│   │   │   │   │   │   │   ├── Address.php
│   │   │   │   │   │   │   ├── City.php
│   │   │   │   │   │   │   ├── FullAddress.php
│   │   │   │   │   │   │   ├── Group.php
│   │   │   │   │   │   │   ├── NumericEntity.php
│   │   │   │   │   │   │   ├── Phone.php
│   │   │   │   │   │   │   └── User.php
│   │   │   │   │   │   ├── ReadonlyProperties
│   │   │   │   │   │   │   ├── Author.php
│   │   │   │   │   │   │   ├── Book.php
│   │   │   │   │   │   │   └── SimpleBook.php
│   │   │   │   │   │   ├── Reflection
│   │   │   │   │   │   │   ├── AbstractEmbeddable.php
│   │   │   │   │   │   │   ├── ArrayObjectExtendingClass.php
│   │   │   │   │   │   │   ├── ClassWithMixedProperties.php
│   │   │   │   │   │   │   ├── ConcreteEmbeddable.php
│   │   │   │   │   │   │   └── ParentClass.php
│   │   │   │   │   │   ├── Routing
│   │   │   │   │   │   │   ├── RoutingLeg.php
│   │   │   │   │   │   │   ├── RoutingLocation.php
│   │   │   │   │   │   │   ├── RoutingRoute.php
│   │   │   │   │   │   │   └── RoutingRouteBooking.php
│   │   │   │   │   │   ├── StockExchange
│   │   │   │   │   │   │   ├── Bond.php
│   │   │   │   │   │   │   ├── Market.php
│   │   │   │   │   │   │   └── Stock.php
│   │   │   │   │   │   ├── Taxi
│   │   │   │   │   │   │   ├── Car.php
│   │   │   │   │   │   │   ├── Driver.php
│   │   │   │   │   │   │   ├── PaidRide.php
│   │   │   │   │   │   │   └── Ride.php
│   │   │   │   │   │   ├── Tweet
│   │   │   │   │   │   │   ├── Tweet.php
│   │   │   │   │   │   │   ├── User.php
│   │   │   │   │   │   │   └── UserList.php
│   │   │   │   │   │   ├── TypedProperties
│   │   │   │   │   │   │   ├── Contact.php
│   │   │   │   │   │   │   ├── UserTyped.php
│   │   │   │   │   │   │   └── UserTypedWithCustomTypedField.php
│   │   │   │   │   │   ├── Upsertable
│   │   │   │   │   │   │   ├── Insertable.php
│   │   │   │   │   │   │   └── Updatable.php
│   │   │   │   │   │   ├── ValueConversionType
│   │   │   │   │   │   │   ├── AuxiliaryEntity.php
│   │   │   │   │   │   │   ├── InversedManyToManyCompositeIdEntity.php
│   │   │   │   │   │   │   ├── InversedManyToManyCompositeIdForeignKeyEntity.php
│   │   │   │   │   │   │   ├── InversedManyToManyEntity.php
│   │   │   │   │   │   │   ├── InversedManyToManyExtraLazyEntity.php
│   │   │   │   │   │   │   ├── InversedOneToManyCompositeIdEntity.php
│   │   │   │   │   │   │   ├── InversedOneToManyCompositeIdForeignKeyEntity.php
│   │   │   │   │   │   │   ├── InversedOneToManyEntity.php
│   │   │   │   │   │   │   ├── InversedOneToManyExtraLazyEntity.php
│   │   │   │   │   │   │   ├── InversedOneToOneCompositeIdEntity.php
│   │   │   │   │   │   │   ├── InversedOneToOneCompositeIdForeignKeyEntity.php
│   │   │   │   │   │   │   ├── InversedOneToOneEntity.php
│   │   │   │   │   │   │   ├── OwningManyToManyCompositeIdEntity.php
│   │   │   │   │   │   │   ├── OwningManyToManyCompositeIdForeignKeyEntity.php
│   │   │   │   │   │   │   ├── OwningManyToManyEntity.php
│   │   │   │   │   │   │   ├── OwningManyToManyExtraLazyEntity.php
│   │   │   │   │   │   │   ├── OwningManyToOneCompositeIdEntity.php
│   │   │   │   │   │   │   ├── OwningManyToOneCompositeIdForeignKeyEntity.php
│   │   │   │   │   │   │   ├── OwningManyToOneEntity.php
│   │   │   │   │   │   │   ├── OwningManyToOneExtraLazyEntity.php
│   │   │   │   │   │   │   ├── OwningManyToOneIdForeignKeyEntity.php
│   │   │   │   │   │   │   ├── OwningOneToOneCompositeIdEntity.php
│   │   │   │   │   │   │   ├── OwningOneToOneCompositeIdForeignKeyEntity.php
│   │   │   │   │   │   │   └── OwningOneToOneEntity.php
│   │   │   │   │   │   ├── ValueObjects
│   │   │   │   │   │   │   ├── Name.php
│   │   │   │   │   │   │   └── Person.php
│   │   │   │   │   │   ├── VersionedManyToOne
│   │   │   │   │   │   │   ├── Article.php
│   │   │   │   │   │   │   └── Category.php
│   │   │   │   │   │   ├── VersionedOneToOne
│   │   │   │   │   │   │   ├── FirstRelatedEntity.php
│   │   │   │   │   │   │   └── SecondRelatedEntity.php
│   │   │   │   │   │   └── InvalidXml.php
│   │   │   │   │   ├── ORM
│   │   │   │   │   │   ├── Cache
│   │   │   │   │   │   │   ├── Persister
│   │   │   │   │   │   │   │   ├── Collection
│   │   │   │   │   │   │   │   │   ├── CollectionPersisterTestCase.php
│   │   │   │   │   │   │   │   │   ├── NonStrictReadWriteCachedCollectionPersisterTest.php
│   │   │   │   │   │   │   │   │   ├── ReadOnlyCachedCollectionPersisterTest.php
│   │   │   │   │   │   │   │   │   └── ReadWriteCachedCollectionPersisterTest.php
│   │   │   │   │   │   │   │   └── Entity
│   │   │   │   │   │   │   │       ├── EntityPersisterTestCase.php
│   │   │   │   │   │   │   │       ├── NonStrictReadWriteCachedEntityPersisterTest.php
│   │   │   │   │   │   │   │       ├── ReadOnlyCachedEntityPersisterTest.php
│   │   │   │   │   │   │   │       └── ReadWriteCachedEntityPersisterTest.php
│   │   │   │   │   │   │   ├── CacheConfigTest.php
│   │   │   │   │   │   │   ├── CacheKeyTest.php
│   │   │   │   │   │   │   ├── CacheLoggerChainTest.php
│   │   │   │   │   │   │   ├── DefaultCacheFactoryTest.php
│   │   │   │   │   │   │   ├── DefaultCacheTest.php
│   │   │   │   │   │   │   ├── DefaultCollectionHydratorTest.php
│   │   │   │   │   │   │   ├── DefaultEntityHydratorTest.php
│   │   │   │   │   │   │   ├── DefaultQueryCacheTest.php
│   │   │   │   │   │   │   ├── DefaultRegionTest.php
│   │   │   │   │   │   │   ├── FileLockRegionTest.php
│   │   │   │   │   │   │   ├── RegionTestCase.php
│   │   │   │   │   │   │   └── StatisticsCacheLoggerTest.php
│   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   └── ConstructorTest.php
│   │   │   │   │   │   ├── Event
│   │   │   │   │   │   │   └── OnClassMetadataNotFoundEventArgsTest.php
│   │   │   │   │   │   ├── Functional
│   │   │   │   │   │   │   ├── Locking
│   │   │   │   │   │   │   │   ├── GearmanLockTest.php
│   │   │   │   │   │   │   │   ├── LockAgentWorker.php
│   │   │   │   │   │   │   │   ├── LockTest.php
│   │   │   │   │   │   │   │   └── OptimisticTest.php
│   │   │   │   │   │   │   ├── ParserResults
│   │   │   │   │   │   │   │   └── single_select_2_17_0.txt
│   │   │   │   │   │   │   ├── SchemaTool
│   │   │   │   │   │   │   │   ├── CompanySchemaTest.php
│   │   │   │   │   │   │   │   ├── DBAL483Test.php
│   │   │   │   │   │   │   │   ├── DDC214Test.php
│   │   │   │   │   │   │   │   ├── MySqlSchemaToolTest.php
│   │   │   │   │   │   │   │   └── PostgreSqlSchemaToolTest.php
│   │   │   │   │   │   │   ├── Ticket
│   │   │   │   │   │   │   │   ├── GH10049
│   │   │   │   │   │   │   │   │   ├── GH10049Test.php
│   │   │   │   │   │   │   │   │   ├── ReadOnlyPropertyInheritor.php
│   │   │   │   │   │   │   │   │   └── ReadOnlyPropertyOwner.php
│   │   │   │   │   │   │   │   ├── GH10661
│   │   │   │   │   │   │   │   │   ├── GH10661Test.php
│   │   │   │   │   │   │   │   │   ├── InvalidChildEntity.php
│   │   │   │   │   │   │   │   │   └── InvalidEntity.php
│   │   │   │   │   │   │   │   ├── GH11017
│   │   │   │   │   │   │   │   │   ├── GH11017Entity.php
│   │   │   │   │   │   │   │   │   ├── GH11017Enum.php
│   │   │   │   │   │   │   │   │   └── GH11017Test.php
│   │   │   │   │   │   │   │   ├── GH11037
│   │   │   │   │   │   │   │   │   ├── EntityStatus.php
│   │   │   │   │   │   │   │   │   ├── GH11037Test.php
│   │   │   │   │   │   │   │   │   ├── IntEntityStatus.php
│   │   │   │   │   │   │   │   │   ├── InvalidEntityWithTypedEnum.php
│   │   │   │   │   │   │   │   │   ├── StringEntityStatus.php
│   │   │   │   │   │   │   │   │   └── ValidEntityWithTypedEnum.php
│   │   │   │   │   │   │   │   ├── GH11072
│   │   │   │   │   │   │   │   │   ├── GH11072EntityAdvanced.php
│   │   │   │   │   │   │   │   │   ├── GH11072EntityBasic.php
│   │   │   │   │   │   │   │   │   └── GH11072Test.php
│   │   │   │   │   │   │   │   ├── GH11149
│   │   │   │   │   │   │   │   │   ├── EagerProduct.php
│   │   │   │   │   │   │   │   │   ├── EagerProductTranslation.php
│   │   │   │   │   │   │   │   │   ├── GH11149Test.php
│   │   │   │   │   │   │   │   │   └── Locale.php
│   │   │   │   │   │   │   │   ├── GH11386
│   │   │   │   │   │   │   │   │   ├── GH11386EntityCart.php
│   │   │   │   │   │   │   │   │   ├── GH11386EntityCustomer.php
│   │   │   │   │   │   │   │   │   ├── GH11386EnumType.php
│   │   │   │   │   │   │   │   │   └── GH11386Test.php
│   │   │   │   │   │   │   │   ├── GH9467
│   │   │   │   │   │   │   │   │   ├── GH9467Test.php
│   │   │   │   │   │   │   │   │   ├── JoinedInheritanceChild.php
│   │   │   │   │   │   │   │   │   ├── JoinedInheritanceNonInsertableColumn.php
│   │   │   │   │   │   │   │   │   ├── JoinedInheritanceNonUpdatableColumn.php
│   │   │   │   │   │   │   │   │   ├── JoinedInheritanceNonWritableColumn.php
│   │   │   │   │   │   │   │   │   ├── JoinedInheritanceRoot.php
│   │   │   │   │   │   │   │   │   └── JoinedInheritanceWritableColumn.php
│   │   │   │   │   │   │   │   ├── SwitchContextWithFilter
│   │   │   │   │   │   │   │   │   ├── ChangeFiltersTest.php
│   │   │   │   │   │   │   │   │   ├── CompanySQLFilter.php
│   │   │   │   │   │   │   │   │   ├── Order.php
│   │   │   │   │   │   │   │   │   └── User.php
│   │   │   │   │   │   │   │   ├── SwitchContextWithFilterAndIndexedRelation
│   │   │   │   │   │   │   │   │   ├── Category.php
│   │   │   │   │   │   │   │   │   ├── CategoryTypeSQLFilter.php
│   │   │   │   │   │   │   │   │   ├── ChangeFiltersTest.php
│   │   │   │   │   │   │   │   │   └── Company.php
│   │   │   │   │   │   │   │   ├── DDC1040Test.php
│   │   │   │   │   │   │   │   ├── DDC1041Test.php
│   │   │   │   │   │   │   │   ├── DDC1043Test.php
│   │   │   │   │   │   │   │   ├── DDC1080Test.php
│   │   │   │   │   │   │   │   ├── DDC1113Test.php
│   │   │   │   │   │   │   │   ├── DDC1129Test.php
│   │   │   │   │   │   │   │   ├── DDC1163Test.php
│   │   │   │   │   │   │   │   ├── DDC117Test.php
│   │   │   │   │   │   │   │   ├── DDC1181Test.php
│   │   │   │   │   │   │   │   ├── DDC1193Test.php
│   │   │   │   │   │   │   │   ├── DDC1209Test.php
│   │   │   │   │   │   │   │   ├── DDC1225Test.php
│   │   │   │   │   │   │   │   ├── DDC1228Test.php
│   │   │   │   │   │   │   │   ├── DDC1238Test.php
│   │   │   │   │   │   │   │   ├── DDC1250Test.php
│   │   │   │   │   │   │   │   ├── DDC1300Test.php
│   │   │   │   │   │   │   │   ├── DDC1301Test.php
│   │   │   │   │   │   │   │   ├── DDC1306Test.php
│   │   │   │   │   │   │   │   ├── DDC1335Test.php
│   │   │   │   │   │   │   │   ├── DDC1400Test.php
│   │   │   │   │   │   │   │   ├── DDC142Test.php
│   │   │   │   │   │   │   │   ├── DDC1430Test.php
│   │   │   │   │   │   │   │   ├── DDC1436Test.php
│   │   │   │   │   │   │   │   ├── DDC144Test.php
│   │   │   │   │   │   │   │   ├── DDC1452Test.php
│   │   │   │   │   │   │   │   ├── DDC1454Test.php
│   │   │   │   │   │   │   │   ├── DDC1458Test.php
│   │   │   │   │   │   │   │   ├── DDC1461Test.php
│   │   │   │   │   │   │   │   ├── DDC1514Test.php
│   │   │   │   │   │   │   │   ├── DDC1515Test.php
│   │   │   │   │   │   │   │   ├── DDC1526Test.php
│   │   │   │   │   │   │   │   ├── DDC1545Test.php
│   │   │   │   │   │   │   │   ├── DDC1548Test.php
│   │   │   │   │   │   │   │   ├── DDC1595Test.php
│   │   │   │   │   │   │   │   ├── DDC163Test.php
│   │   │   │   │   │   │   │   ├── DDC1643Test.php
│   │   │   │   │   │   │   │   ├── DDC1654Test.php
│   │   │   │   │   │   │   │   ├── DDC1655Test.php
│   │   │   │   │   │   │   │   ├── DDC1666Test.php
│   │   │   │   │   │   │   │   ├── DDC1685Test.php
│   │   │   │   │   │   │   │   ├── DDC168Test.php
│   │   │   │   │   │   │   │   ├── DDC1695Test.php
│   │   │   │   │   │   │   │   ├── DDC1707Test.php
│   │   │   │   │   │   │   │   ├── DDC1719Test.php
│   │   │   │   │   │   │   │   ├── DDC1757Test.php
│   │   │   │   │   │   │   │   ├── DDC1778Test.php
│   │   │   │   │   │   │   │   ├── DDC1787Test.php
│   │   │   │   │   │   │   │   ├── DDC1843Test.php
│   │   │   │   │   │   │   │   ├── DDC1884Test.php
│   │   │   │   │   │   │   │   ├── DDC1885Test.php
│   │   │   │   │   │   │   │   ├── DDC1918Test.php
│   │   │   │   │   │   │   │   ├── DDC1925Test.php
│   │   │   │   │   │   │   │   ├── DDC192Test.php
│   │   │   │   │   │   │   │   ├── DDC1995Test.php
│   │   │   │   │   │   │   │   ├── DDC1998Test.php
│   │   │   │   │   │   │   │   ├── DDC199Test.php
│   │   │   │   │   │   │   │   ├── DDC2012Test.php
│   │   │   │   │   │   │   │   ├── DDC2074Test.php
│   │   │   │   │   │   │   │   ├── DDC2084Test.php
│   │   │   │   │   │   │   │   ├── DDC2090Test.php
│   │   │   │   │   │   │   │   ├── DDC2106Test.php
│   │   │   │   │   │   │   │   ├── DDC211Test.php
│   │   │   │   │   │   │   │   ├── DDC2138Test.php
│   │   │   │   │   │   │   │   ├── DDC2175Test.php
│   │   │   │   │   │   │   │   ├── DDC2182Test.php
│   │   │   │   │   │   │   │   ├── DDC2214Test.php
│   │   │   │   │   │   │   │   ├── DDC2224Test.php
│   │   │   │   │   │   │   │   ├── DDC2252Test.php
│   │   │   │   │   │   │   │   ├── DDC2306Test.php
│   │   │   │   │   │   │   │   ├── DDC2346Test.php
│   │   │   │   │   │   │   │   ├── DDC2350Test.php
│   │   │   │   │   │   │   │   ├── DDC2359Test.php
│   │   │   │   │   │   │   │   ├── DDC237Test.php
│   │   │   │   │   │   │   │   ├── DDC2387Test.php
│   │   │   │   │   │   │   │   ├── DDC2415Test.php
│   │   │   │   │   │   │   │   ├── DDC2494Test.php
│   │   │   │   │   │   │   │   ├── DDC2519Test.php
│   │   │   │   │   │   │   │   ├── DDC2575Test.php
│   │   │   │   │   │   │   │   ├── DDC2579Test.php
│   │   │   │   │   │   │   │   ├── DDC258Test.php
│   │   │   │   │   │   │   │   ├── DDC2602Test.php
│   │   │   │   │   │   │   │   ├── DDC2655Test.php
│   │   │   │   │   │   │   │   ├── DDC2660Test.php
│   │   │   │   │   │   │   │   ├── DDC2692Test.php
│   │   │   │   │   │   │   │   ├── DDC2759Test.php
│   │   │   │   │   │   │   │   ├── DDC2775Test.php
│   │   │   │   │   │   │   │   ├── DDC2780Test.php
│   │   │   │   │   │   │   │   ├── DDC2790Test.php
│   │   │   │   │   │   │   │   ├── DDC279Test.php
│   │   │   │   │   │   │   │   ├── DDC2825Test.php
│   │   │   │   │   │   │   │   ├── DDC2862Test.php
│   │   │   │   │   │   │   │   ├── DDC2895Test.php
│   │   │   │   │   │   │   │   ├── DDC2931Test.php
│   │   │   │   │   │   │   │   ├── DDC2943Test.php
│   │   │   │   │   │   │   │   ├── DDC2984Test.php
│   │   │   │   │   │   │   │   ├── DDC2996Test.php
│   │   │   │   │   │   │   │   ├── DDC3033Test.php
│   │   │   │   │   │   │   │   ├── DDC3042Test.php
│   │   │   │   │   │   │   │   ├── DDC3068Test.php
│   │   │   │   │   │   │   │   ├── DDC309Test.php
│   │   │   │   │   │   │   │   ├── DDC3103Test.php
│   │   │   │   │   │   │   │   ├── DDC3123Test.php
│   │   │   │   │   │   │   │   ├── DDC3160Test.php
│   │   │   │   │   │   │   │   ├── DDC3170Test.php
│   │   │   │   │   │   │   │   ├── DDC3192Test.php
│   │   │   │   │   │   │   │   ├── DDC3223Test.php
│   │   │   │   │   │   │   │   ├── DDC3300Test.php
│   │   │   │   │   │   │   │   ├── DDC3303Test.php
│   │   │   │   │   │   │   │   ├── DDC331Test.php
│   │   │   │   │   │   │   │   ├── DDC3330Test.php
│   │   │   │   │   │   │   │   ├── DDC3346Test.php
│   │   │   │   │   │   │   │   ├── DDC345Test.php
│   │   │   │   │   │   │   │   ├── DDC353Test.php
│   │   │   │   │   │   │   │   ├── DDC3582Test.php
│   │   │   │   │   │   │   │   ├── DDC3597Test.php
│   │   │   │   │   │   │   │   ├── DDC3634Test.php
│   │   │   │   │   │   │   │   ├── DDC3644Test.php
│   │   │   │   │   │   │   │   ├── DDC3719Test.php
│   │   │   │   │   │   │   │   ├── DDC371Test.php
│   │   │   │   │   │   │   │   ├── DDC3785Test.php
│   │   │   │   │   │   │   │   ├── DDC381Test.php
│   │   │   │   │   │   │   │   ├── DDC3967Test.php
│   │   │   │   │   │   │   │   ├── DDC4003Test.php
│   │   │   │   │   │   │   │   ├── DDC4024Test.php
│   │   │   │   │   │   │   │   ├── DDC422Test.php
│   │   │   │   │   │   │   │   ├── DDC425Test.php
│   │   │   │   │   │   │   │   ├── DDC440Test.php
│   │   │   │   │   │   │   │   ├── DDC444Test.php
│   │   │   │   │   │   │   │   ├── DDC448Test.php
│   │   │   │   │   │   │   │   ├── DDC493Test.php
│   │   │   │   │   │   │   │   ├── DDC512Test.php
│   │   │   │   │   │   │   │   ├── DDC513Test.php
│   │   │   │   │   │   │   │   ├── DDC522Test.php
│   │   │   │   │   │   │   │   ├── DDC531Test.php
│   │   │   │   │   │   │   │   ├── DDC5684Test.php
│   │   │   │   │   │   │   │   ├── DDC588Test.php
│   │   │   │   │   │   │   │   ├── DDC599Test.php
│   │   │   │   │   │   │   │   ├── DDC618Test.php
│   │   │   │   │   │   │   │   ├── DDC6303Test.php
│   │   │   │   │   │   │   │   ├── DDC633Test.php
│   │   │   │   │   │   │   │   ├── DDC6460Test.php
│   │   │   │   │   │   │   │   ├── DDC6558Test.php
│   │   │   │   │   │   │   │   ├── DDC656Test.php
│   │   │   │   │   │   │   │   ├── DDC6573Test.php
│   │   │   │   │   │   │   │   ├── DDC657Test.php
│   │   │   │   │   │   │   │   ├── DDC698Test.php
│   │   │   │   │   │   │   │   ├── DDC69Test.php
│   │   │   │   │   │   │   │   ├── DDC719Test.php
│   │   │   │   │   │   │   │   ├── DDC735Test.php
│   │   │   │   │   │   │   │   ├── DDC736Test.php
│   │   │   │   │   │   │   │   ├── DDC748Test.php
│   │   │   │   │   │   │   │   ├── DDC767Test.php
│   │   │   │   │   │   │   │   ├── DDC7969Test.php
│   │   │   │   │   │   │   │   ├── DDC809Test.php
│   │   │   │   │   │   │   │   ├── DDC812Test.php
│   │   │   │   │   │   │   │   ├── DDC832Test.php
│   │   │   │   │   │   │   │   ├── DDC837Test.php
│   │   │   │   │   │   │   │   ├── DDC849Test.php
│   │   │   │   │   │   │   │   ├── DDC881Test.php
│   │   │   │   │   │   │   │   ├── DDC933Test.php
│   │   │   │   │   │   │   │   ├── DDC949Test.php
│   │   │   │   │   │   │   │   ├── DDC960Test.php
│   │   │   │   │   │   │   │   ├── DDC992Test.php
│   │   │   │   │   │   │   │   ├── GH10132Test.php
│   │   │   │   │   │   │   │   ├── GH10288Test.php
│   │   │   │   │   │   │   │   ├── GH10334Test.php
│   │   │   │   │   │   │   │   ├── GH10336Test.php
│   │   │   │   │   │   │   │   ├── GH10348Test.php
│   │   │   │   │   │   │   │   ├── GH10387Test.php
│   │   │   │   │   │   │   │   ├── GH10450Test.php
│   │   │   │   │   │   │   │   ├── GH10454Test.php
│   │   │   │   │   │   │   │   ├── GH10462Test.php
│   │   │   │   │   │   │   │   ├── GH10473Test.php
│   │   │   │   │   │   │   │   ├── GH10531Test.php
│   │   │   │   │   │   │   │   ├── GH10532Test.php
│   │   │   │   │   │   │   │   ├── GH10566Test.php
│   │   │   │   │   │   │   │   ├── GH10625Test.php
│   │   │   │   │   │   │   │   ├── GH10747Test.php
│   │   │   │   │   │   │   │   ├── GH10752Test.php
│   │   │   │   │   │   │   │   ├── GH10808Test.php
│   │   │   │   │   │   │   │   ├── GH10869Test.php
│   │   │   │   │   │   │   │   ├── GH10880Test.php
│   │   │   │   │   │   │   │   ├── GH10889Test.php
│   │   │   │   │   │   │   │   ├── GH10912Test.php
│   │   │   │   │   │   │   │   ├── GH10913Test.php
│   │   │   │   │   │   │   │   ├── GH10927Test.php
│   │   │   │   │   │   │   │   ├── GH11058Test.php
│   │   │   │   │   │   │   │   ├── GH11112Test.php
│   │   │   │   │   │   │   │   ├── GH11135Test.php
│   │   │   │   │   │   │   │   ├── GH11163Test.php
│   │   │   │   │   │   │   │   ├── GH11199Test.php
│   │   │   │   │   │   │   │   ├── GH11341Test.php
│   │   │   │   │   │   │   │   ├── GH11487Test.php
│   │   │   │   │   │   │   │   ├── GH11500Test.php
│   │   │   │   │   │   │   │   ├── GH11501Test.php
│   │   │   │   │   │   │   │   ├── GH11524Test.php
│   │   │   │   │   │   │   │   ├── GH2947Test.php
│   │   │   │   │   │   │   │   ├── GH5562Test.php
│   │   │   │   │   │   │   │   ├── GH5742Test.php
│   │   │   │   │   │   │   │   ├── GH5762Test.php
│   │   │   │   │   │   │   │   ├── GH5804Test.php
│   │   │   │   │   │   │   │   ├── GH5887Test.php
│   │   │   │   │   │   │   │   ├── GH5988Test.php
│   │   │   │   │   │   │   │   ├── GH5998Test.php
│   │   │   │   │   │   │   │   ├── GH6029Test.php
│   │   │   │   │   │   │   │   ├── GH6123Test.php
│   │   │   │   │   │   │   │   ├── GH6141Test.php
│   │   │   │   │   │   │   │   ├── GH6217Test.php
│   │   │   │   │   │   │   │   ├── GH6362Test.php
│   │   │   │   │   │   │   │   ├── GH6394Test.php
│   │   │   │   │   │   │   │   ├── GH6402Test.php
│   │   │   │   │   │   │   │   ├── GH6464Test.php
│   │   │   │   │   │   │   │   ├── GH6499OneToManyRelationshipTest.php
│   │   │   │   │   │   │   │   ├── GH6499OneToOneRelationshipTest.php
│   │   │   │   │   │   │   │   ├── GH6499Test.php
│   │   │   │   │   │   │   │   ├── GH6531Test.php
│   │   │   │   │   │   │   │   ├── GH6682Test.php
│   │   │   │   │   │   │   │   ├── GH6699Test.php
│   │   │   │   │   │   │   │   ├── GH6740Test.php
│   │   │   │   │   │   │   │   ├── GH6823Test.php
│   │   │   │   │   │   │   │   ├── GH6937Test.php
│   │   │   │   │   │   │   │   ├── GH7006Test.php
│   │   │   │   │   │   │   │   ├── GH7012Test.php
│   │   │   │   │   │   │   │   ├── GH7062Test.php
│   │   │   │   │   │   │   │   ├── GH7067Test.php
│   │   │   │   │   │   │   │   ├── GH7068Test.php
│   │   │   │   │   │   │   │   ├── GH7079Test.php
│   │   │   │   │   │   │   │   ├── GH7180Test.php
│   │   │   │   │   │   │   │   ├── GH7259Test.php
│   │   │   │   │   │   │   │   ├── GH7286Test.php
│   │   │   │   │   │   │   │   ├── GH7366Test.php
│   │   │   │   │   │   │   │   ├── GH7496WithToIterableTest.php
│   │   │   │   │   │   │   │   ├── GH7505Test.php
│   │   │   │   │   │   │   │   ├── GH7512Test.php
│   │   │   │   │   │   │   │   ├── GH7629Test.php
│   │   │   │   │   │   │   │   ├── GH7661Test.php
│   │   │   │   │   │   │   │   ├── GH7684Test.php
│   │   │   │   │   │   │   │   ├── GH7717Test.php
│   │   │   │   │   │   │   │   ├── GH7735Test.php
│   │   │   │   │   │   │   │   ├── GH7737Test.php
│   │   │   │   │   │   │   │   ├── GH7761Test.php
│   │   │   │   │   │   │   │   ├── GH7767Test.php
│   │   │   │   │   │   │   │   ├── GH7820Test.php
│   │   │   │   │   │   │   │   ├── GH7829Test.php
│   │   │   │   │   │   │   │   ├── GH7836Test.php
│   │   │   │   │   │   │   │   ├── GH7864Test.php
│   │   │   │   │   │   │   │   ├── GH7869Test.php
│   │   │   │   │   │   │   │   ├── GH7875Test.php
│   │   │   │   │   │   │   │   ├── GH7941Test.php
│   │   │   │   │   │   │   │   ├── GH8055Test.php
│   │   │   │   │   │   │   │   ├── GH8061Test.php
│   │   │   │   │   │   │   │   ├── GH8127Test.php
│   │   │   │   │   │   │   │   ├── GH8217Test.php
│   │   │   │   │   │   │   │   ├── GH8415Test.php
│   │   │   │   │   │   │   │   ├── GH8415ToManyAssociationTest.php
│   │   │   │   │   │   │   │   ├── GH8443Test.php
│   │   │   │   │   │   │   │   ├── GH8499Test.php
│   │   │   │   │   │   │   │   ├── GH8663Test.php
│   │   │   │   │   │   │   │   ├── GH8914Test.php
│   │   │   │   │   │   │   │   ├── GH9027Test.php
│   │   │   │   │   │   │   │   ├── GH9109Test.php
│   │   │   │   │   │   │   │   ├── GH9192Test.php
│   │   │   │   │   │   │   │   ├── GH9230Test.php
│   │   │   │   │   │   │   │   ├── GH9335Test.php
│   │   │   │   │   │   │   │   ├── GH9516Test.php
│   │   │   │   │   │   │   │   ├── GH9579Test.php
│   │   │   │   │   │   │   │   ├── GH9807Test.php
│   │   │   │   │   │   │   │   ├── Issue5989Test.php
│   │   │   │   │   │   │   │   ├── Issue9300Test.php
│   │   │   │   │   │   │   │   ├── Ticket2481Test.php
│   │   │   │   │   │   │   │   ├── Ticket4646InstanceOfAbstractTest.php
│   │   │   │   │   │   │   │   ├── Ticket4646InstanceOfMultiLevelTest.php
│   │   │   │   │   │   │   │   ├── Ticket4646InstanceOfParametricTest.php
│   │   │   │   │   │   │   │   ├── Ticket4646InstanceOfTest.php
│   │   │   │   │   │   │   │   └── Ticket4646InstanceOfWithMultipleParametersTest.php
│   │   │   │   │   │   │   ├── ValueConversionType
│   │   │   │   │   │   │   │   ├── ManyToManyCompositeIdForeignKeyTest.php
│   │   │   │   │   │   │   │   ├── ManyToManyCompositeIdTest.php
│   │   │   │   │   │   │   │   ├── ManyToManyExtraLazyTest.php
│   │   │   │   │   │   │   │   ├── ManyToManyTest.php
│   │   │   │   │   │   │   │   ├── OneToManyCompositeIdForeignKeyTest.php
│   │   │   │   │   │   │   │   ├── OneToManyCompositeIdTest.php
│   │   │   │   │   │   │   │   ├── OneToManyExtraLazyTest.php
│   │   │   │   │   │   │   │   ├── OneToManyTest.php
│   │   │   │   │   │   │   │   ├── OneToOneCompositeIdForeignKeyTest.php
│   │   │   │   │   │   │   │   ├── OneToOneCompositeIdTest.php
│   │   │   │   │   │   │   │   └── OneToOneTest.php
│   │   │   │   │   │   │   ├── AbstractFetchEagerTest.php
│   │   │   │   │   │   │   ├── AbstractManyToManyAssociationTestCase.php
│   │   │   │   │   │   │   ├── AdvancedAssociationTest.php
│   │   │   │   │   │   │   ├── AdvancedDqlQueryTest.php
│   │   │   │   │   │   │   ├── BasicFunctionalTest.php
│   │   │   │   │   │   │   ├── CascadeRemoveOrderTest.php
│   │   │   │   │   │   │   ├── ClassTableInheritanceSecondTest.php
│   │   │   │   │   │   │   ├── ClassTableInheritanceTest.php
│   │   │   │   │   │   │   ├── ClearEventTest.php
│   │   │   │   │   │   │   ├── CompositeKeyRelationsTest.php
│   │   │   │   │   │   │   ├── CompositePrimaryKeyTest.php
│   │   │   │   │   │   │   ├── CompositePrimaryKeyWithAssociationsTest.php
│   │   │   │   │   │   │   ├── CustomFunctionsTest.php
│   │   │   │   │   │   │   ├── CustomIdObjectTypeTest.php
│   │   │   │   │   │   │   ├── DatabaseDriverTest.php
│   │   │   │   │   │   │   ├── DatabaseDriverTestCase.php
│   │   │   │   │   │   │   ├── DefaultValuesTest.php
│   │   │   │   │   │   │   ├── DetachedEntityTest.php
│   │   │   │   │   │   │   ├── EagerFetchCollectionTest.php
│   │   │   │   │   │   │   ├── EagerFetchOneToManyWithCompositeKeyTest.php
│   │   │   │   │   │   │   ├── EntityListenersTest.php
│   │   │   │   │   │   │   ├── EntityRepositoryCriteriaTest.php
│   │   │   │   │   │   │   ├── EntityRepositoryTest.php
│   │   │   │   │   │   │   ├── EnumTest.php
│   │   │   │   │   │   │   ├── ExtraLazyCollectionTest.php
│   │   │   │   │   │   │   ├── FlushEventTest.php
│   │   │   │   │   │   │   ├── GH7877Test.php
│   │   │   │   │   │   │   ├── HydrationCacheTest.php
│   │   │   │   │   │   │   ├── IdentityMapTest.php
│   │   │   │   │   │   │   ├── IndexByAssociationTest.php
│   │   │   │   │   │   │   ├── InsertableUpdatableTest.php
│   │   │   │   │   │   │   ├── JoinedTableCompositeKeyTest.php
│   │   │   │   │   │   │   ├── LifecycleCallbackTest.php
│   │   │   │   │   │   │   ├── ManyToManyBasicAssociationTest.php
│   │   │   │   │   │   │   ├── ManyToManyBidirectionalAssociationTest.php
│   │   │   │   │   │   │   ├── ManyToManyEventTest.php
│   │   │   │   │   │   │   ├── ManyToManySelfReferentialAssociationTest.php
│   │   │   │   │   │   │   ├── ManyToManyUnidirectionalAssociationTest.php
│   │   │   │   │   │   │   ├── MappedSuperclassTest.php
│   │   │   │   │   │   │   ├── NativeQueryTest.php
│   │   │   │   │   │   │   ├── NewOperatorTest.php
│   │   │   │   │   │   │   ├── OneToManyBidirectionalAssociationTest.php
│   │   │   │   │   │   │   ├── OneToManyOrphanRemovalTest.php
│   │   │   │   │   │   │   ├── OneToManySelfReferentialAssociationTest.php
│   │   │   │   │   │   │   ├── OneToManyUnidirectionalAssociationTest.php
│   │   │   │   │   │   │   ├── OneToOneBidirectionalAssociationTest.php
│   │   │   │   │   │   │   ├── OneToOneEagerLoadingTest.php
│   │   │   │   │   │   │   ├── OneToOneInverseSideLoadAfterDqlQueryTest.php
│   │   │   │   │   │   │   ├── OneToOneInverseSideWithAssociativeIdLoadAfterDqlQueryTest.php
│   │   │   │   │   │   │   ├── OneToOneOrphanRemovalTest.php
│   │   │   │   │   │   │   ├── OneToOneSelfReferentialAssociationTest.php
│   │   │   │   │   │   │   ├── OneToOneSingleTableInheritanceTest.php
│   │   │   │   │   │   │   ├── OneToOneUnidirectionalAssociationTest.php
│   │   │   │   │   │   │   ├── OrderedCollectionTest.php
│   │   │   │   │   │   │   ├── OrderedJoinedTableInheritanceCollectionTest.php
│   │   │   │   │   │   │   ├── PaginationTest.php
│   │   │   │   │   │   │   ├── ParserResultSerializationTest.php
│   │   │   │   │   │   │   ├── PersistentCollectionCriteriaTest.php
│   │   │   │   │   │   │   ├── PersistentCollectionTest.php
│   │   │   │   │   │   │   ├── PostFlushEventTest.php
│   │   │   │   │   │   │   ├── PostLoadEventTest.php
│   │   │   │   │   │   │   ├── ProxiesLikeEntitiesTest.php
│   │   │   │   │   │   │   ├── QueryBuilderParenthesisTest.php
│   │   │   │   │   │   │   ├── QueryCacheTest.php
│   │   │   │   │   │   │   ├── QueryDqlFunctionTest.php
│   │   │   │   │   │   │   ├── QueryIterableTest.php
│   │   │   │   │   │   │   ├── QueryParameterTest.php
│   │   │   │   │   │   │   ├── QueryTest.php
│   │   │   │   │   │   │   ├── ReadonlyPropertiesTest.php
│   │   │   │   │   │   │   ├── ReadOnlyTest.php
│   │   │   │   │   │   │   ├── ReferenceProxyTest.php
│   │   │   │   │   │   │   ├── ResultCacheTest.php
│   │   │   │   │   │   │   ├── SchemaValidatorTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheCompositePrimaryKeyTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheCompositePrimaryKeyWithAssociationsTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheConcurrentTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheCriteriaTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheExtraLazyCollectionTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheFunctionalTestCase.php
│   │   │   │   │   │   │   ├── SecondLevelCacheJoinTableInheritanceTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheManyToManyTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheManyToOneTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheOneToManyTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheOneToOneTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheQueryCacheTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheRepositoryTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheSingleTableInheritanceTest.php
│   │   │   │   │   │   │   ├── SecondLevelCacheTest.php
│   │   │   │   │   │   │   ├── SequenceGeneratorTest.php
│   │   │   │   │   │   │   ├── SingleTableCompositeKeyTest.php
│   │   │   │   │   │   │   ├── SingleTableInheritanceTest.php
│   │   │   │   │   │   │   ├── SQLFilterTest.php
│   │   │   │   │   │   │   ├── StandardEntityPersisterTest.php
│   │   │   │   │   │   │   ├── TypeTest.php
│   │   │   │   │   │   │   ├── TypeValueSqlTest.php
│   │   │   │   │   │   │   ├── UnitOfWorkLifecycleTest.php
│   │   │   │   │   │   │   ├── ValueObjectsTest.php
│   │   │   │   │   │   │   └── VersionedOneToOneTest.php
│   │   │   │   │   │   ├── Hydration
│   │   │   │   │   │   │   ├── AbstractHydratorTest.php
│   │   │   │   │   │   │   ├── ArrayHydratorTest.php
│   │   │   │   │   │   │   ├── CustomHydratorTest.php
│   │   │   │   │   │   │   ├── HydrationTestCase.php
│   │   │   │   │   │   │   ├── ObjectHydratorTest.php
│   │   │   │   │   │   │   ├── ResultSetMappingTest.php
│   │   │   │   │   │   │   ├── ScalarColumnHydratorTest.php
│   │   │   │   │   │   │   ├── ScalarHydratorTest.php
│   │   │   │   │   │   │   ├── SimpleObjectHydratorTest.php
│   │   │   │   │   │   │   └── SingleScalarHydratorTest.php
│   │   │   │   │   │   ├── Id
│   │   │   │   │   │   │   ├── AssignedGeneratorTest.php
│   │   │   │   │   │   │   └── SequenceGeneratorTest.php
│   │   │   │   │   │   ├── Internal
│   │   │   │   │   │   │   ├── HydrationCompleteHandlerTest.php
│   │   │   │   │   │   │   ├── Node.php
│   │   │   │   │   │   │   ├── StronglyConnectedComponentsTest.php
│   │   │   │   │   │   │   └── TopologicalSortTest.php
│   │   │   │   │   │   ├── Mapping
│   │   │   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   │   │   └── AttributeEntityWithNestedJoinColumns.php
│   │   │   │   │   │   │   ├── invalid_xml
│   │   │   │   │   │   │   │   └── Doctrine.Tests.Models.InvalidXml.dcm.xml
│   │   │   │   │   │   │   ├── NamingStrategy
│   │   │   │   │   │   │   │   └── JoinColumnClassNamingStrategy.php
│   │   │   │   │   │   │   ├── php
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Enums.Card.php
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.TypedProperties.UserTypedWithCustomTypedField.php
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Upsertable.Insertable.php
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Upsertable.Updatable.php
│   │   │   │   │   │   │   │   └── Doctrine.Tests.ORM.Mapping.GH10288EnumTypePerson.php
│   │   │   │   │   │   │   ├── Symfony
│   │   │   │   │   │   │   │   ├── DriverTestCase.php
│   │   │   │   │   │   │   │   └── XmlDriverTest.php
│   │   │   │   │   │   │   ├── TypedFieldMapper
│   │   │   │   │   │   │   │   └── CustomIntAsStringTypedFieldMapper.php
│   │   │   │   │   │   │   ├── xml
│   │   │   │   │   │   │   │   ├── CatNoId.dcm.xml
│   │   │   │   │   │   │   │   ├── DDC2429Book.orm.xml
│   │   │   │   │   │   │   │   ├── DDC2429Novel.orm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Cache.City.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.CMS.CmsAddress.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.CMS.CmsUser.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Company.CompanyContract.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Company.CompanyFixContract.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Company.CompanyFlexContract.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Company.CompanyFlexUltraContract.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Company.CompanyPerson.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Customer.CustomerType.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC117.DDC117Translation.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC1476.DDC1476EntityWithDefaultFieldType.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC2825.ExplicitSchemaAndTable.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC2825.SchemaAndTableInTableName.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC3293.DDC3293Address.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC3293.DDC3293User.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC3293.DDC3293UserPrefixed.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC3579.DDC3579Admin.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC3579.DDC3579User.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC5934.DDC5934BaseContract.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC5934.DDC5934Contract.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC869.DDC869ChequePayment.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC869.DDC869CreditCardPayment.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC869.DDC869Payment.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC889.DDC889Class.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC889.DDC889Entity.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC889.DDC889SuperClass.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC964.DDC964Admin.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC964.DDC964Guest.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.DDC964.DDC964User.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Enums.Card.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Generic.BooleanModel.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.GH7141.GH7141Article.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.GH7316.GH7316Article.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Project.Project.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Project.ProjectInvalidMapping.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.TypedProperties.UserTyped.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.TypedProperties.UserTypedWithCustomTypedField.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Upsertable.Insertable.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.Upsertable.Updatable.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.ValueObjects.Name.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.ValueObjects.Person.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.Animal.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.Comment.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.CTI.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.DDC1170Entity.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.DDC807Entity.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.GH10288EnumTypePerson.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.ReservedWordInTableColumn.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.SingleTableEntityIncompleteDiscriminatorColumnMapping.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.SingleTableEntityNoDiscriminatorColumnMapping.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.User.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.UserIncorrectAttributes.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.UserIncorrectIndex.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.UserIncorrectUniqueConstraint.dcm.xml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.ORM.Mapping.UserMissingAttributes.dcm.xml
│   │   │   │   │   │   │   │   └── Doctrine.Tests.ORM.Mapping.XMLSLC.dcm.xml
│   │   │   │   │   │   │   ├── yaml
│   │   │   │   │   │   │   │   ├── Doctrine.Tests.Models.TypedProperties.UserTypedWithCustomTypedField.dcm.yml
│   │   │   │   │   │   │   │   └── Doctrine.Tests.ORM.Mapping.GH10288EnumTypePerson.dcm.yml
│   │   │   │   │   │   │   ├── AnsiQuoteStrategyTest.php
│   │   │   │   │   │   │   ├── AssociationMappingTest.php
│   │   │   │   │   │   │   ├── AttributeDriverTest.php
│   │   │   │   │   │   │   ├── AttributeReaderTest.php
│   │   │   │   │   │   │   ├── BasicInheritanceMappingTest.php
│   │   │   │   │   │   │   ├── ClassMetadataBuilderTest.php
│   │   │   │   │   │   │   ├── ClassMetadataFactoryTest.php
│   │   │   │   │   │   │   ├── ClassMetadataLoadEventTest.php
│   │   │   │   │   │   │   ├── ClassMetadataTest.php
│   │   │   │   │   │   │   ├── DefaultQuoteStrategyTest.php
│   │   │   │   │   │   │   ├── DiscriminatorColumnMappingTest.php
│   │   │   │   │   │   │   ├── EmbeddedClassMappingTest.php
│   │   │   │   │   │   │   ├── EntityListenerResolverTest.php
│   │   │   │   │   │   │   ├── FieldBuilderTest.php
│   │   │   │   │   │   │   ├── FieldMappingTest.php
│   │   │   │   │   │   │   ├── InverseSideMappingTest.php
│   │   │   │   │   │   │   ├── JoinColumnMappingTest.php
│   │   │   │   │   │   │   ├── JoinTableMappingTest.php
│   │   │   │   │   │   │   ├── ManyToManyOwningSideMappingTest.php
│   │   │   │   │   │   │   ├── ManyToOneAssociationMappingTest.php
│   │   │   │   │   │   │   ├── MappingDriverTestCase.php
│   │   │   │   │   │   │   ├── NamingStrategyTest.php
│   │   │   │   │   │   │   ├── OneToOneOwningSideMappingTest.php
│   │   │   │   │   │   │   ├── OwningSideMappingTest.php
│   │   │   │   │   │   │   ├── QuoteStrategyTest.php
│   │   │   │   │   │   │   ├── ReflectionEmbeddedPropertyTest.php
│   │   │   │   │   │   │   ├── ReflectionReadonlyPropertyTest.php
│   │   │   │   │   │   │   ├── StaticPHPMappingDriverTest.php
│   │   │   │   │   │   │   ├── TableMappingTest.php
│   │   │   │   │   │   │   ├── ToManyAssociationMappingTest.php
│   │   │   │   │   │   │   ├── TypedEnumFieldMapperTest.php
│   │   │   │   │   │   │   ├── TypedFieldMapperTest.php
│   │   │   │   │   │   │   └── XmlMappingDriverTest.php
│   │   │   │   │   │   ├── Performance
│   │   │   │   │   │   │   └── SecondLevelCacheTest.php
│   │   │   │   │   │   ├── Persisters
│   │   │   │   │   │   │   ├── Exception
│   │   │   │   │   │   │   │   └── UnrecognizedFieldTest.php
│   │   │   │   │   │   │   ├── BasicEntityPersisterCompositeTypeParametersTest.php
│   │   │   │   │   │   │   ├── BasicEntityPersisterCompositeTypeSqlTest.php
│   │   │   │   │   │   │   ├── BasicEntityPersisterTypeValueSqlTest.php
│   │   │   │   │   │   │   └── ManyToManyPersisterTest.php
│   │   │   │   │   │   ├── Proxy
│   │   │   │   │   │   │   └── ProxyFactoryTest.php
│   │   │   │   │   │   ├── Query
│   │   │   │   │   │   │   ├── CustomTreeWalkersJoinTest.php
│   │   │   │   │   │   │   ├── CustomTreeWalkersTest.php
│   │   │   │   │   │   │   ├── DeleteSqlGenerationTest.php
│   │   │   │   │   │   │   ├── ExprTest.php
│   │   │   │   │   │   │   ├── FilterCollectionTest.php
│   │   │   │   │   │   │   ├── LanguageRecognitionTest.php
│   │   │   │   │   │   │   ├── LexerTest.php
│   │   │   │   │   │   │   ├── NativeQueryTest.php
│   │   │   │   │   │   │   ├── ParameterTypeInfererTest.php
│   │   │   │   │   │   │   ├── ParserResultTest.php
│   │   │   │   │   │   │   ├── ParserTest.php
│   │   │   │   │   │   │   ├── QueryExpressionVisitorTest.php
│   │   │   │   │   │   │   ├── QueryTest.php
│   │   │   │   │   │   │   ├── SelectSqlGenerationTest.php
│   │   │   │   │   │   │   ├── SqlExpressionVisitorTest.php
│   │   │   │   │   │   │   ├── SqlWalkerTest.php
│   │   │   │   │   │   │   └── UpdateSqlGenerationTest.php
│   │   │   │   │   │   ├── Repository
│   │   │   │   │   │   │   └── DefaultRepositoryFactoryTest.php
│   │   │   │   │   │   ├── Tools
│   │   │   │   │   │   │   ├── Console
│   │   │   │   │   │   │   │   ├── Command
│   │   │   │   │   │   │   │   │   ├── SchemaTool
│   │   │   │   │   │   │   │   │   │   ├── Models
│   │   │   │   │   │   │   │   │   │   │   └── Keyboard.php
│   │   │   │   │   │   │   │   │   │   ├── CommandTestCase.php
│   │   │   │   │   │   │   │   │   │   ├── CreateCommandTest.php
│   │   │   │   │   │   │   │   │   │   └── DropCommandTest.php
│   │   │   │   │   │   │   │   │   ├── ClearCacheCollectionRegionCommandTest.php
│   │   │   │   │   │   │   │   │   ├── ClearCacheEntityRegionCommandTest.php
│   │   │   │   │   │   │   │   │   ├── ClearCacheQueryRegionCommandTest.php
│   │   │   │   │   │   │   │   │   ├── InfoCommandTest.php
│   │   │   │   │   │   │   │   │   ├── MappingDescribeCommandTest.php
│   │   │   │   │   │   │   │   │   ├── RunDqlCommandTest.php
│   │   │   │   │   │   │   │   │   └── ValidateSchemaCommandTest.php
│   │   │   │   │   │   │   │   ├── ConsoleRunnerTest.php
│   │   │   │   │   │   │   │   └── MetadataFilterTest.php
│   │   │   │   │   │   │   ├── Pagination
│   │   │   │   │   │   │   │   ├── CountOutputWalkerTest.php
│   │   │   │   │   │   │   │   ├── CountWalkerTest.php
│   │   │   │   │   │   │   │   ├── LimitSubqueryOutputWalkerTest.php
│   │   │   │   │   │   │   │   ├── LimitSubqueryWalkerTest.php
│   │   │   │   │   │   │   │   ├── PaginationTestCase.php
│   │   │   │   │   │   │   │   ├── PaginatorTest.php
│   │   │   │   │   │   │   │   ├── RootTypeWalkerTest.php
│   │   │   │   │   │   │   │   └── WhereInWalkerTest.php
│   │   │   │   │   │   │   ├── TestAsset
│   │   │   │   │   │   │   │   ├── ChildClass.php
│   │   │   │   │   │   │   │   ├── ChildWithSameAttributesClass.php
│   │   │   │   │   │   │   │   └── ParentClass.php
│   │   │   │   │   │   │   ├── AttachEntityListenersListenerTest.php
│   │   │   │   │   │   │   ├── DebugTest.php
│   │   │   │   │   │   │   ├── ResolveTargetEntityListenerTest.php
│   │   │   │   │   │   │   ├── SchemaToolTest.php
│   │   │   │   │   │   │   └── SchemaValidatorTest.php
│   │   │   │   │   │   ├── Utility
│   │   │   │   │   │   │   ├── HierarchyDiscriminatorResolverTest.php
│   │   │   │   │   │   │   ├── IdentifierFlattenerEnumIdTest.php
│   │   │   │   │   │   │   └── IdentifierFlattenerTest.php
│   │   │   │   │   │   ├── AbstractQueryTest.php
│   │   │   │   │   │   ├── ConfigurationTest.php
│   │   │   │   │   │   ├── EntityManagerTest.php
│   │   │   │   │   │   ├── EntityNotFoundExceptionTest.php
│   │   │   │   │   │   ├── LazyCriteriaCollectionTest.php
│   │   │   │   │   │   ├── ORMInvalidArgumentExceptionTest.php
│   │   │   │   │   │   ├── ORMSetupTest.php
│   │   │   │   │   │   ├── PersistentCollectionTest.php
│   │   │   │   │   │   ├── QueryBuilderTest.php
│   │   │   │   │   │   └── UnitOfWorkTest.php
│   │   │   │   │   ├── Proxy
│   │   │   │   │   │   └── AutoloaderTest.php
│   │   │   │   │   ├── IterableTester.php
│   │   │   │   │   ├── OrmFunctionalTestCase.php
│   │   │   │   │   ├── OrmTestCase.php
│   │   │   │   │   ├── TestInit.php
│   │   │   │   │   └── TestUtil.php
│   │   │   │   ├── .gitignore
│   │   │   │   ├── dbproperties.xml.dev
│   │   │   │   └── README.markdown
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── CONTRIBUTING.md
│   │   │   ├── doctrine-mapping.xsd
│   │   │   ├── LICENSE
│   │   │   ├── phpbench.json
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpstan-baseline.neon
│   │   │   ├── phpstan-dbal3.neon
│   │   │   ├── phpstan-params.neon
│   │   │   ├── phpstan.neon
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── run-all.sh
│   │   │   ├── SECURITY.md
│   │   │   └── UPGRADE.md
│   │   ├── persistence
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   ├── coding-standards.yml
│   │   │   │   │   ├── continuous-integration.yml
│   │   │   │   │   ├── release-on-milestone-closed.yml
│   │   │   │   │   └── static-analysis.yml
│   │   │   │   ├── dependabot.yml
│   │   │   │   └── FUNDING.yml
│   │   │   ├── docs
│   │   │   │   └── en
│   │   │   │       ├── reference
│   │   │   │       │   ├── index.rst
│   │   │   │       │   └── object-change-tracking.rst
│   │   │   │       ├── index.rst
│   │   │   │       └── sidebar.rst
│   │   │   ├── src
│   │   │   │   └── Persistence
│   │   │   │       ├── Event
│   │   │   │       │   ├── LifecycleEventArgs.php
│   │   │   │       │   ├── LoadClassMetadataEventArgs.php
│   │   │   │       │   ├── ManagerEventArgs.php
│   │   │   │       │   ├── OnClearEventArgs.php
│   │   │   │       │   └── PreUpdateEventArgs.php
│   │   │   │       ├── Mapping
│   │   │   │       │   ├── Driver
│   │   │   │       │   │   ├── ColocatedMappingDriver.php
│   │   │   │       │   │   ├── DefaultFileLocator.php
│   │   │   │       │   │   ├── FileDriver.php
│   │   │   │       │   │   ├── FileLocator.php
│   │   │   │       │   │   ├── MappingDriver.php
│   │   │   │       │   │   ├── MappingDriverChain.php
│   │   │   │       │   │   ├── PHPDriver.php
│   │   │   │       │   │   ├── StaticPHPDriver.php
│   │   │   │       │   │   └── SymfonyFileLocator.php
│   │   │   │       │   ├── AbstractClassMetadataFactory.php
│   │   │   │       │   ├── ClassMetadata.php
│   │   │   │       │   ├── ClassMetadataFactory.php
│   │   │   │       │   ├── MappingException.php
│   │   │   │       │   ├── ProxyClassNameResolver.php
│   │   │   │       │   ├── ReflectionService.php
│   │   │   │       │   ├── RuntimeReflectionService.php
│   │   │   │       │   └── StaticReflectionService.php
│   │   │   │       ├── Reflection
│   │   │   │       │   ├── EnumReflectionProperty.php
│   │   │   │       │   ├── RuntimePublicReflectionProperty.php
│   │   │   │       │   ├── RuntimeReflectionProperty.php
│   │   │   │       │   ├── TypedNoDefaultReflectionProperty.php
│   │   │   │       │   ├── TypedNoDefaultReflectionPropertyBase.php
│   │   │   │       │   └── TypedNoDefaultRuntimePublicReflectionProperty.php
│   │   │   │       ├── AbstractManagerRegistry.php
│   │   │   │       ├── ConnectionRegistry.php
│   │   │   │       ├── ManagerRegistry.php
│   │   │   │       ├── NotifyPropertyChanged.php
│   │   │   │       ├── ObjectManager.php
│   │   │   │       ├── ObjectManagerDecorator.php
│   │   │   │       ├── ObjectRepository.php
│   │   │   │       ├── PropertyChangedListener.php
│   │   │   │       └── Proxy.php
│   │   │   ├── tests
│   │   │   │   ├── Persistence
│   │   │   │   │   ├── Event
│   │   │   │   │   │   └── PreUpdateEventArgsTest.php
│   │   │   │   │   ├── Mapping
│   │   │   │   │   │   ├── _custom_ns
│   │   │   │   │   │   │   ├── dir
│   │   │   │   │   │   │   │   ├── sub
│   │   │   │   │   │   │   │   │   ├── subsub
│   │   │   │   │   │   │   │   │   │   └── subSubClass.yml
│   │   │   │   │   │   │   │   │   └── subClass.yml
│   │   │   │   │   │   │   │   └── stdClass.yml
│   │   │   │   │   │   │   └── dot
│   │   │   │   │   │   │       ├── stdClass.yml
│   │   │   │   │   │   │       ├── sub.subClass.yml
│   │   │   │   │   │   │       └── sub.subsub.subSubClass.yml
│   │   │   │   │   │   ├── _files
│   │   │   │   │   │   │   ├── Bar
│   │   │   │   │   │   │   │   └── subDirClass.yml
│   │   │   │   │   │   │   ├── colocated
│   │   │   │   │   │   │   │   └── TestClass.php
│   │   │   │   │   │   │   ├── Doctrine.Tests.Persistence.Mapping.PHPTestEntity.php
│   │   │   │   │   │   │   ├── global.yml
│   │   │   │   │   │   │   └── stdClass.yml
│   │   │   │   │   │   ├── _match_ns
│   │   │   │   │   │   │   ├── Bar
│   │   │   │   │   │   │   │   └── barEntity.yml
│   │   │   │   │   │   │   └── testEntity.yml
│   │   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   │   ├── Manager
│   │   │   │   │   │   │   │   └── Manager.php
│   │   │   │   │   │   │   ├── AnotherGlobalClass.php
│   │   │   │   │   │   │   ├── GlobalClass.php
│   │   │   │   │   │   │   ├── Model.php
│   │   │   │   │   │   │   ├── NotLoadedClass.php
│   │   │   │   │   │   │   └── TestClassMetadata.php
│   │   │   │   │   │   ├── AbstractClassMetadataFactoryTest.php
│   │   │   │   │   │   ├── ClassMetadataFactoryTest.php
│   │   │   │   │   │   ├── ColocatedMappingDriverTest.php
│   │   │   │   │   │   ├── DefaultFileLocatorTest.php
│   │   │   │   │   │   ├── DriverChainTest.php
│   │   │   │   │   │   ├── FileDriverTest.php
│   │   │   │   │   │   ├── PHPDriverTest.php
│   │   │   │   │   │   ├── RuntimeReflectionServiceTest.php
│   │   │   │   │   │   ├── StaticPHPDriverTest.php
│   │   │   │   │   │   ├── StaticReflectionServiceTest.php
│   │   │   │   │   │   ├── SymfonyFileLocatorTest.php
│   │   │   │   │   │   └── TestClassMetadataFactory.php
│   │   │   │   │   ├── ManagerRegistryTest.php
│   │   │   │   │   ├── ObjectManagerDecoratorTest.php
│   │   │   │   │   ├── OtherTestObject.php
│   │   │   │   │   ├── RuntimePublicReflectionPropertyTest.php
│   │   │   │   │   ├── RuntimeReflectionPropertyTest.php
│   │   │   │   │   ├── TestObject.php
│   │   │   │   │   └── TestObjectProxy.php
│   │   │   │   └── DoctrineTestCase.php
│   │   │   ├── tests_php74
│   │   │   │   └── Persistence
│   │   │   │       ├── Mapping
│   │   │   │       │   └── RuntimeReflectionServiceTest.php
│   │   │   │       └── Reflection
│   │   │   │           └── TypedNoDefaultReflectionPropertyTest.php
│   │   │   ├── tests_php81
│   │   │   │   └── Persistence
│   │   │   │       └── Reflection
│   │   │   │           └── EnumReflectionPropertyTest.php
│   │   │   ├── .doctrine-project.json
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── CONTRIBUTING.md
│   │   │   ├── LICENSE
│   │   │   ├── phpcs.xml.dist
│   │   │   ├── phpstan-baseline.neon
│   │   │   ├── phpstan.neon
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── UPGRADE.md
│   │   └── sql-formatter
│   │       ├── .github
│   │       │   ├── workflows
│   │       │   │   ├── coding-standards.yml
│   │       │   │   ├── continuous-integration.yml
│   │       │   │   ├── release-on-milestone-closed.yml
│   │       │   │   └── static-analysis.yml
│   │       │   └── dependabot.yml
│   │       ├── bin
│   │       │   └── sql-formatter
│   │       ├── examples
│   │       │   ├── cli.php
│   │       │   ├── examples.php
│   │       │   ├── readme_format_html.svg
│   │       │   └── readme_highlight_html.svg
│   │       ├── src
│   │       │   ├── CliHighlighter.php
│   │       │   ├── Cursor.php
│   │       │   ├── Highlighter.php
│   │       │   ├── HtmlHighlighter.php
│   │       │   ├── NullHighlighter.php
│   │       │   ├── SqlFormatter.php
│   │       │   ├── Token.php
│   │       │   └── Tokenizer.php
│   │       ├── tests
│   │       │   ├── clihighlight.txt
│   │       │   ├── compress.txt
│   │       │   ├── format-highlight.html
│   │       │   ├── format.txt
│   │       │   ├── highlight.html
│   │       │   ├── sql.sql
│   │       │   ├── SqlFormatterTest.php
│   │       │   └── TokenizerTest.php
│   │       ├── .gitattributes
│   │       ├── .gitignore
│   │       ├── composer.json
│   │       ├── CONTRIBUTING.md
│   │       ├── LICENSE.txt
│   │       ├── phpcs.xml.dist
│   │       ├── phpstan.neon.dist
│   │       ├── phpunit.xml.dist
│   │       └── README.md
│   ├── egulias
│   │   └── email-validator
│   │       ├── .github
│   │       │   ├── workflows
│   │       │   │   ├── static-analysis.yml
│   │       │   │   ├── tests.yml
│   │       │   │   └── upload-to-codacy.yml
│   │       │   ├── dependabot.yml
│   │       │   └── FUNDING.yml
│   │       ├── documentation
│   │       │   ├── Other.md
│   │       │   ├── RFC5321BNF.html
│   │       │   └── RFC5322BNF.html
│   │       ├── src
│   │       │   ├── Parser
│   │       │   │   ├── CommentStrategy
│   │       │   │   │   ├── CommentStrategy.php
│   │       │   │   │   ├── DomainComment.php
│   │       │   │   │   └── LocalComment.php
│   │       │   │   ├── Comment.php
│   │       │   │   ├── DomainLiteral.php
│   │       │   │   ├── DomainPart.php
│   │       │   │   ├── DoubleQuote.php
│   │       │   │   ├── FoldingWhiteSpace.php
│   │       │   │   ├── IDLeftPart.php
│   │       │   │   ├── IDRightPart.php
│   │       │   │   ├── LocalPart.php
│   │       │   │   └── PartParser.php
│   │       │   ├── Result
│   │       │   │   ├── Reason
│   │       │   │   │   ├── AtextAfterCFWS.php
│   │       │   │   │   ├── CharNotAllowed.php
│   │       │   │   │   ├── CommaInDomain.php
│   │       │   │   │   ├── CommentsInIDRight.php
│   │       │   │   │   ├── ConsecutiveAt.php
│   │       │   │   │   ├── ConsecutiveDot.php
│   │       │   │   │   ├── CRLFAtTheEnd.php
│   │       │   │   │   ├── CRLFX2.php
│   │       │   │   │   ├── CRNoLF.php
│   │       │   │   │   ├── DetailedReason.php
│   │       │   │   │   ├── DomainAcceptsNoMail.php
│   │       │   │   │   ├── DomainHyphened.php
│   │       │   │   │   ├── DomainTooLong.php
│   │       │   │   │   ├── DotAtEnd.php
│   │       │   │   │   ├── DotAtStart.php
│   │       │   │   │   ├── EmptyReason.php
│   │       │   │   │   ├── ExceptionFound.php
│   │       │   │   │   ├── ExpectingATEXT.php
│   │       │   │   │   ├── ExpectingCTEXT.php
│   │       │   │   │   ├── ExpectingDomainLiteralClose.php
│   │       │   │   │   ├── ExpectingDTEXT.php
│   │       │   │   │   ├── LabelTooLong.php
│   │       │   │   │   ├── LocalOrReservedDomain.php
│   │       │   │   │   ├── NoDNSRecord.php
│   │       │   │   │   ├── NoDomainPart.php
│   │       │   │   │   ├── NoLocalPart.php
│   │       │   │   │   ├── Reason.php
│   │       │   │   │   ├── RFCWarnings.php
│   │       │   │   │   ├── SpoofEmail.php
│   │       │   │   │   ├── UnableToGetDNSRecord.php
│   │       │   │   │   ├── UnclosedComment.php
│   │       │   │   │   ├── UnclosedQuotedString.php
│   │       │   │   │   ├── UnOpenedComment.php
│   │       │   │   │   └── UnusualElements.php
│   │       │   │   ├── InvalidEmail.php
│   │       │   │   ├── MultipleErrors.php
│   │       │   │   ├── Result.php
│   │       │   │   ├── SpoofEmail.php
│   │       │   │   └── ValidEmail.php
│   │       │   ├── Validation
│   │       │   │   ├── Exception
│   │       │   │   │   └── EmptyValidationList.php
│   │       │   │   ├── Extra
│   │       │   │   │   └── SpoofCheckValidation.php
│   │       │   │   ├── DNSCheckValidation.php
│   │       │   │   ├── DNSGetRecordWrapper.php
│   │       │   │   ├── DNSRecords.php
│   │       │   │   ├── EmailValidation.php
│   │       │   │   ├── MessageIDValidation.php
│   │       │   │   ├── MultipleValidationWithAnd.php
│   │       │   │   ├── NoRFCWarningsValidation.php
│   │       │   │   └── RFCValidation.php
│   │       │   ├── Warning
│   │       │   │   ├── AddressLiteral.php
│   │       │   │   ├── CFWSNearAt.php
│   │       │   │   ├── CFWSWithFWS.php
│   │       │   │   ├── Comment.php
│   │       │   │   ├── DeprecatedComment.php
│   │       │   │   ├── DomainLiteral.php
│   │       │   │   ├── EmailTooLong.php
│   │       │   │   ├── IPV6BadChar.php
│   │       │   │   ├── IPV6ColonEnd.php
│   │       │   │   ├── IPV6ColonStart.php
│   │       │   │   ├── IPV6Deprecated.php
│   │       │   │   ├── IPV6DoubleColon.php
│   │       │   │   ├── IPV6GroupCount.php
│   │       │   │   ├── IPV6MaxGroups.php
│   │       │   │   ├── LocalTooLong.php
│   │       │   │   ├── NoDNSMXRecord.php
│   │       │   │   ├── ObsoleteDTEXT.php
│   │       │   │   ├── QuotedPart.php
│   │       │   │   ├── QuotedString.php
│   │       │   │   ├── TLD.php
│   │       │   │   └── Warning.php
│   │       │   ├── EmailLexer.php
│   │       │   ├── EmailParser.php
│   │       │   ├── EmailValidator.php
│   │       │   ├── MessageIDParser.php
│   │       │   └── Parser.php
│   │       ├── tests
│   │       │   └── EmailValidator
│   │       │       ├── Dummy
│   │       │       │   ├── AnotherDummyReason.php
│   │       │       │   └── DummyReason.php
│   │       │       ├── Reason
│   │       │       │   └── MultipleErrorsTest.php
│   │       │       ├── Result
│   │       │       │   └── ResultTest.php
│   │       │       ├── Validation
│   │       │       │   ├── Extra
│   │       │       │   │   └── SpoofCheckValidationTest.php
│   │       │       │   ├── DNSCheckValidationTest.php
│   │       │       │   ├── IsEmailFunctionTests.php
│   │       │       │   ├── MessageIDValidationTest.php
│   │       │       │   ├── MultipleValidationWithAndTest.php
│   │       │       │   ├── NoRFCWarningsValidationTest.php
│   │       │       │   ├── RFCValidationDomainPartTest.php
│   │       │       │   └── RFCValidationTest.php
│   │       │       ├── EmailLexerTest.php
│   │       │       ├── EmailParserTest.php
│   │       │       ├── EmailValidatorTest.php
│   │       │       └── LexerTokensTest.php
│   │       ├── .gitattributes
│   │       ├── .gitignore
│   │       ├── composer.json
│   │       ├── CONTRIBUTING.md
│   │       ├── LICENSE
│   │       ├── phpunit.xml.dist
│   │       ├── psalm.xml
│   │       └── README.md
│   ├── nikic
│   │   └── php-parser
│   │       ├── .github
│   │       │   └── workflows
│   │       │       └── main.yml
│   │       ├── bin
│   │       │   └── php-parse
│   │       ├── doc
│   │       │   ├── component
│   │       │   │   ├── AST_builders.markdown
│   │       │   │   ├── Constant_expression_evaluation.markdown
│   │       │   │   ├── Error_handling.markdown
│   │       │   │   ├── FAQ.markdown
│   │       │   │   ├── JSON_representation.markdown
│   │       │   │   ├── Lexer.markdown
│   │       │   │   ├── Name_resolution.markdown
│   │       │   │   ├── Performance.markdown
│   │       │   │   ├── Pretty_printing.markdown
│   │       │   │   └── Walking_the_AST.markdown
│   │       │   ├── 0_Introduction.markdown
│   │       │   ├── 2_Usage_of_basic_components.markdown
│   │       │   └── README.md
│   │       ├── grammar
│   │       │   ├── parser.template
│   │       │   ├── php.y
│   │       │   ├── phpyLang.php
│   │       │   ├── README.md
│   │       │   └── rebuildParsers.php
│   │       ├── lib
│   │       │   └── PhpParser
│   │       │       ├── Builder
│   │       │       │   ├── Class_.php
│   │       │       │   ├── ClassConst.php
│   │       │       │   ├── Declaration.php
│   │       │       │   ├── Enum_.php
│   │       │       │   ├── EnumCase.php
│   │       │       │   ├── Function_.php
│   │       │       │   ├── FunctionLike.php
│   │       │       │   ├── Interface_.php
│   │       │       │   ├── Method.php
│   │       │       │   ├── Namespace_.php
│   │       │       │   ├── Param.php
│   │       │       │   ├── Property.php
│   │       │       │   ├── Trait_.php
│   │       │       │   ├── TraitUse.php
│   │       │       │   ├── TraitUseAdaptation.php
│   │       │       │   └── Use_.php
│   │       │       ├── Comment
│   │       │       │   └── Doc.php
│   │       │       ├── ErrorHandler
│   │       │       │   ├── Collecting.php
│   │       │       │   └── Throwing.php
│   │       │       ├── Internal
│   │       │       │   ├── DiffElem.php
│   │       │       │   ├── Differ.php
│   │       │       │   ├── PrintableNewAnonClassNode.php
│   │       │       │   ├── TokenPolyfill.php
│   │       │       │   └── TokenStream.php
│   │       │       ├── Lexer
│   │       │       │   ├── TokenEmulator
│   │       │       │   │   ├── AsymmetricVisibilityTokenEmulator.php
│   │       │       │   │   ├── AttributeEmulator.php
│   │       │       │   │   ├── EnumTokenEmulator.php
│   │       │       │   │   ├── ExplicitOctalEmulator.php
│   │       │       │   │   ├── KeywordEmulator.php
│   │       │       │   │   ├── MatchTokenEmulator.php
│   │       │       │   │   ├── NullsafeTokenEmulator.php
│   │       │       │   │   ├── PropertyTokenEmulator.php
│   │       │       │   │   ├── ReadonlyFunctionTokenEmulator.php
│   │       │       │   │   ├── ReadonlyTokenEmulator.php
│   │       │       │   │   ├── ReverseEmulator.php
│   │       │       │   │   └── TokenEmulator.php
│   │       │       │   └── Emulative.php
│   │       │       ├── Node
│   │       │       │   ├── Expr
│   │       │       │   │   ├── AssignOp
│   │       │       │   │   │   ├── BitwiseAnd.php
│   │       │       │   │   │   ├── BitwiseOr.php
│   │       │       │   │   │   ├── BitwiseXor.php
│   │       │       │   │   │   ├── Coalesce.php
│   │       │       │   │   │   ├── Concat.php
│   │       │       │   │   │   ├── Div.php
│   │       │       │   │   │   ├── Minus.php
│   │       │       │   │   │   ├── Mod.php
│   │       │       │   │   │   ├── Mul.php
│   │       │       │   │   │   ├── Plus.php
│   │       │       │   │   │   ├── Pow.php
│   │       │       │   │   │   ├── ShiftLeft.php
│   │       │       │   │   │   └── ShiftRight.php
│   │       │       │   │   ├── BinaryOp
│   │       │       │   │   │   ├── BitwiseAnd.php
│   │       │       │   │   │   ├── BitwiseOr.php
│   │       │       │   │   │   ├── BitwiseXor.php
│   │       │       │   │   │   ├── BooleanAnd.php
│   │       │       │   │   │   ├── BooleanOr.php
│   │       │       │   │   │   ├── Coalesce.php
│   │       │       │   │   │   ├── Concat.php
│   │       │       │   │   │   ├── Div.php
│   │       │       │   │   │   ├── Equal.php
│   │       │       │   │   │   ├── Greater.php
│   │       │       │   │   │   ├── GreaterOrEqual.php
│   │       │       │   │   │   ├── Identical.php
│   │       │       │   │   │   ├── LogicalAnd.php
│   │       │       │   │   │   ├── LogicalOr.php
│   │       │       │   │   │   ├── LogicalXor.php
│   │       │       │   │   │   ├── Minus.php
│   │       │       │   │   │   ├── Mod.php
│   │       │       │   │   │   ├── Mul.php
│   │       │       │   │   │   ├── NotEqual.php
│   │       │       │   │   │   ├── NotIdentical.php
│   │       │       │   │   │   ├── Plus.php
│   │       │       │   │   │   ├── Pow.php
│   │       │       │   │   │   ├── ShiftLeft.php
│   │       │       │   │   │   ├── ShiftRight.php
│   │       │       │   │   │   ├── Smaller.php
│   │       │       │   │   │   ├── SmallerOrEqual.php
│   │       │       │   │   │   └── Spaceship.php
│   │       │       │   │   ├── Cast
│   │       │       │   │   │   ├── Array_.php
│   │       │       │   │   │   ├── Bool_.php
│   │       │       │   │   │   ├── Double.php
│   │       │       │   │   │   ├── Int_.php
│   │       │       │   │   │   ├── Object_.php
│   │       │       │   │   │   ├── String_.php
│   │       │       │   │   │   └── Unset_.php
│   │       │       │   │   ├── Array_.php
│   │       │       │   │   ├── ArrayDimFetch.php
│   │       │       │   │   ├── ArrayItem.php
│   │       │       │   │   ├── ArrowFunction.php
│   │       │       │   │   ├── Assign.php
│   │       │       │   │   ├── AssignOp.php
│   │       │       │   │   ├── AssignRef.php
│   │       │       │   │   ├── BinaryOp.php
│   │       │       │   │   ├── BitwiseNot.php
│   │       │       │   │   ├── BooleanNot.php
│   │       │       │   │   ├── CallLike.php
│   │       │       │   │   ├── Cast.php
│   │       │       │   │   ├── ClassConstFetch.php
│   │       │       │   │   ├── Clone_.php
│   │       │       │   │   ├── Closure.php
│   │       │       │   │   ├── ClosureUse.php
│   │       │       │   │   ├── ConstFetch.php
│   │       │       │   │   ├── Empty_.php
│   │       │       │   │   ├── Error.php
│   │       │       │   │   ├── ErrorSuppress.php
│   │       │       │   │   ├── Eval_.php
│   │       │       │   │   ├── Exit_.php
│   │       │       │   │   ├── FuncCall.php
│   │       │       │   │   ├── Include_.php
│   │       │       │   │   ├── Instanceof_.php
│   │       │       │   │   ├── Isset_.php
│   │       │       │   │   ├── List_.php
│   │       │       │   │   ├── Match_.php
│   │       │       │   │   ├── MethodCall.php
│   │       │       │   │   ├── New_.php
│   │       │       │   │   ├── NullsafeMethodCall.php
│   │       │       │   │   ├── NullsafePropertyFetch.php
│   │       │       │   │   ├── PostDec.php
│   │       │       │   │   ├── PostInc.php
│   │       │       │   │   ├── PreDec.php
│   │       │       │   │   ├── PreInc.php
│   │       │       │   │   ├── Print_.php
│   │       │       │   │   ├── PropertyFetch.php
│   │       │       │   │   ├── ShellExec.php
│   │       │       │   │   ├── StaticCall.php
│   │       │       │   │   ├── StaticPropertyFetch.php
│   │       │       │   │   ├── Ternary.php
│   │       │       │   │   ├── Throw_.php
│   │       │       │   │   ├── UnaryMinus.php
│   │       │       │   │   ├── UnaryPlus.php
│   │       │       │   │   ├── Variable.php
│   │       │       │   │   ├── Yield_.php
│   │       │       │   │   └── YieldFrom.php
│   │       │       │   ├── Name
│   │       │       │   │   ├── FullyQualified.php
│   │       │       │   │   └── Relative.php
│   │       │       │   ├── Scalar
│   │       │       │   │   ├── MagicConst
│   │       │       │   │   │   ├── Class_.php
│   │       │       │   │   │   ├── Dir.php
│   │       │       │   │   │   ├── File.php
│   │       │       │   │   │   ├── Function_.php
│   │       │       │   │   │   ├── Line.php
│   │       │       │   │   │   ├── Method.php
│   │       │       │   │   │   ├── Namespace_.php
│   │       │       │   │   │   ├── Property.php
│   │       │       │   │   │   └── Trait_.php
│   │       │       │   │   ├── DNumber.php
│   │       │       │   │   ├── Encapsed.php
│   │       │       │   │   ├── EncapsedStringPart.php
│   │       │       │   │   ├── Float_.php
│   │       │       │   │   ├── Int_.php
│   │       │       │   │   ├── InterpolatedString.php
│   │       │       │   │   ├── LNumber.php
│   │       │       │   │   ├── MagicConst.php
│   │       │       │   │   └── String_.php
│   │       │       │   ├── Stmt
│   │       │       │   │   ├── TraitUseAdaptation
│   │       │       │   │   │   ├── Alias.php
│   │       │       │   │   │   └── Precedence.php
│   │       │       │   │   ├── Block.php
│   │       │       │   │   ├── Break_.php
│   │       │       │   │   ├── Case_.php
│   │       │       │   │   ├── Catch_.php
│   │       │       │   │   ├── Class_.php
│   │       │       │   │   ├── ClassConst.php
│   │       │       │   │   ├── ClassLike.php
│   │       │       │   │   ├── ClassMethod.php
│   │       │       │   │   ├── Const_.php
│   │       │       │   │   ├── Continue_.php
│   │       │       │   │   ├── Declare_.php
│   │       │       │   │   ├── DeclareDeclare.php
│   │       │       │   │   ├── Do_.php
│   │       │       │   │   ├── Echo_.php
│   │       │       │   │   ├── Else_.php
│   │       │       │   │   ├── ElseIf_.php
│   │       │       │   │   ├── Enum_.php
│   │       │       │   │   ├── EnumCase.php
│   │       │       │   │   ├── Expression.php
│   │       │       │   │   ├── Finally_.php
│   │       │       │   │   ├── For_.php
│   │       │       │   │   ├── Foreach_.php
│   │       │       │   │   ├── Function_.php
│   │       │       │   │   ├── Global_.php
│   │       │       │   │   ├── Goto_.php
│   │       │       │   │   ├── GroupUse.php
│   │       │       │   │   ├── HaltCompiler.php
│   │       │       │   │   ├── If_.php
│   │       │       │   │   ├── InlineHTML.php
│   │       │       │   │   ├── Interface_.php
│   │       │       │   │   ├── Label.php
│   │       │       │   │   ├── Namespace_.php
│   │       │       │   │   ├── Nop.php
│   │       │       │   │   ├── Property.php
│   │       │       │   │   ├── PropertyProperty.php
│   │       │       │   │   ├── Return_.php
│   │       │       │   │   ├── Static_.php
│   │       │       │   │   ├── StaticVar.php
│   │       │       │   │   ├── Switch_.php
│   │       │       │   │   ├── Trait_.php
│   │       │       │   │   ├── TraitUse.php
│   │       │       │   │   ├── TraitUseAdaptation.php
│   │       │       │   │   ├── TryCatch.php
│   │       │       │   │   ├── Unset_.php
│   │       │       │   │   ├── Use_.php
│   │       │       │   │   ├── UseUse.php
│   │       │       │   │   └── While_.php
│   │       │       │   ├── Arg.php
│   │       │       │   ├── ArrayItem.php
│   │       │       │   ├── Attribute.php
│   │       │       │   ├── AttributeGroup.php
│   │       │       │   ├── ClosureUse.php
│   │       │       │   ├── ComplexType.php
│   │       │       │   ├── Const_.php
│   │       │       │   ├── DeclareItem.php
│   │       │       │   ├── Expr.php
│   │       │       │   ├── FunctionLike.php
│   │       │       │   ├── Identifier.php
│   │       │       │   ├── InterpolatedStringPart.php
│   │       │       │   ├── IntersectionType.php
│   │       │       │   ├── MatchArm.php
│   │       │       │   ├── Name.php
│   │       │       │   ├── NullableType.php
│   │       │       │   ├── Param.php
│   │       │       │   ├── PropertyHook.php
│   │       │       │   ├── PropertyItem.php
│   │       │       │   ├── Scalar.php
│   │       │       │   ├── StaticVar.php
│   │       │       │   ├── Stmt.php
│   │       │       │   ├── UnionType.php
│   │       │       │   ├── UseItem.php
│   │       │       │   ├── VariadicPlaceholder.php
│   │       │       │   └── VarLikeIdentifier.php
│   │       │       ├── NodeVisitor
│   │       │       │   ├── CloningVisitor.php
│   │       │       │   ├── CommentAnnotatingVisitor.php
│   │       │       │   ├── FindingVisitor.php
│   │       │       │   ├── FirstFindingVisitor.php
│   │       │       │   ├── NameResolver.php
│   │       │       │   ├── NodeConnectingVisitor.php
│   │       │       │   └── ParentConnectingVisitor.php
│   │       │       ├── Parser
│   │       │       │   ├── Php7.php
│   │       │       │   └── Php8.php
│   │       │       ├── PrettyPrinter
│   │       │       │   └── Standard.php
│   │       │       ├── Builder.php
│   │       │       ├── BuilderFactory.php
│   │       │       ├── BuilderHelpers.php
│   │       │       ├── Comment.php
│   │       │       ├── compatibility_tokens.php
│   │       │       ├── ConstExprEvaluationException.php
│   │       │       ├── ConstExprEvaluator.php
│   │       │       ├── Error.php
│   │       │       ├── ErrorHandler.php
│   │       │       ├── JsonDecoder.php
│   │       │       ├── Lexer.php
│   │       │       ├── Modifiers.php
│   │       │       ├── NameContext.php
│   │       │       ├── Node.php
│   │       │       ├── NodeAbstract.php
│   │       │       ├── NodeDumper.php
│   │       │       ├── NodeFinder.php
│   │       │       ├── NodeTraverser.php
│   │       │       ├── NodeTraverserInterface.php
│   │       │       ├── NodeVisitor.php
│   │       │       ├── NodeVisitorAbstract.php
│   │       │       ├── Parser.php
│   │       │       ├── ParserAbstract.php
│   │       │       ├── ParserFactory.php
│   │       │       ├── PhpVersion.php
│   │       │       ├── PrettyPrinter.php
│   │       │       ├── PrettyPrinterAbstract.php
│   │       │       └── Token.php
│   │       ├── test
│   │       │   ├── code
│   │       │   │   ├── formatPreservation
│   │       │   │   │   ├── addingPropertyType.test
│   │       │   │   │   ├── anonClasses.test
│   │       │   │   │   ├── array_spread.test
│   │       │   │   │   ├── arrayInsertionWithComments.test
│   │       │   │   │   ├── arrow_function.test
│   │       │   │   │   ├── attributes.test
│   │       │   │   │   ├── basic.test
│   │       │   │   │   ├── blockConversion.test
│   │       │   │   │   ├── classMethodNop.test
│   │       │   │   │   ├── closure.test
│   │       │   │   │   ├── comments.test
│   │       │   │   │   ├── delAfterIdentifier.test
│   │       │   │   │   ├── emptyListInsertion.test
│   │       │   │   │   ├── enum.test
│   │       │   │   │   ├── fixup.test
│   │       │   │   │   ├── group_use.test
│   │       │   │   │   ├── indent.test
│   │       │   │   │   ├── inlineHtml.test
│   │       │   │   │   ├── insertionOfNullable.test
│   │       │   │   │   ├── listInsertion.test
│   │       │   │   │   ├── listInsertionIndentation.test
│   │       │   │   │   ├── listRemoval.test
│   │       │   │   │   ├── match.test
│   │       │   │   │   ├── modifierChange.test
│   │       │   │   │   ├── namedArgs.test
│   │       │   │   │   ├── nopCommentAtEnd.test
│   │       │   │   │   ├── property_hooks.test
│   │       │   │   │   ├── removalViaNull.test
│   │       │   │   │   ├── removingPropertyType.test
│   │       │   │   │   ├── rewriteVariableInterpolationString.test
│   │       │   │   │   └── traitAlias.test
│   │       │   │   ├── parser
│   │       │   │   │   ├── errorHandling
│   │       │   │   │   │   ├── eofError.test
│   │       │   │   │   │   ├── lexerErrors.test
│   │       │   │   │   │   └── recovery.test
│   │       │   │   │   ├── expr
│   │       │   │   │   │   ├── fetchAndCall
│   │       │   │   │   │   │   ├── args.test
│   │       │   │   │   │   │   ├── constantDeref.test
│   │       │   │   │   │   │   ├── constFetch.test
│   │       │   │   │   │   │   ├── funcCall.test
│   │       │   │   │   │   │   ├── namedArgs.test
│   │       │   │   │   │   │   ├── newDeref.test
│   │       │   │   │   │   │   ├── objectAccess.test
│   │       │   │   │   │   │   ├── simpleArrayAccess.test
│   │       │   │   │   │   │   ├── staticCall.test
│   │       │   │   │   │   │   └── staticPropertyFetch.test
│   │       │   │   │   │   ├── uvs
│   │       │   │   │   │   │   ├── constDeref.test
│   │       │   │   │   │   │   ├── globalNonSimpleVarError.test
│   │       │   │   │   │   │   ├── indirectCall.test
│   │       │   │   │   │   │   ├── isset.test
│   │       │   │   │   │   │   ├── misc.test
│   │       │   │   │   │   │   ├── new.test
│   │       │   │   │   │   │   ├── newInstanceofExpr.test
│   │       │   │   │   │   │   └── staticProperty.test
│   │       │   │   │   │   ├── alternative_array_syntax.test
│   │       │   │   │   │   ├── arrayDef.test
│   │       │   │   │   │   ├── arrayDestructuring.test
│   │       │   │   │   │   ├── arrayEmptyElemens.test
│   │       │   │   │   │   ├── arraySpread.test
│   │       │   │   │   │   ├── arrow_function.test
│   │       │   │   │   │   ├── assign.test
│   │       │   │   │   │   ├── assignNewByRef.test
│   │       │   │   │   │   ├── cast.test
│   │       │   │   │   │   ├── clone.test
│   │       │   │   │   │   ├── closure_use_trailing_comma.test
│   │       │   │   │   │   ├── closure.test
│   │       │   │   │   │   ├── comparison.test
│   │       │   │   │   │   ├── concatPrecedence.test
│   │       │   │   │   │   ├── constant_expr.test
│   │       │   │   │   │   ├── dynamicClassConst.test
│   │       │   │   │   │   ├── errorSuppress.test
│   │       │   │   │   │   ├── exit.test
│   │       │   │   │   │   ├── exprInIsset.test
│   │       │   │   │   │   ├── exprInList.test
│   │       │   │   │   │   ├── firstClassCallables.test
│   │       │   │   │   │   ├── includeAndEval.test
│   │       │   │   │   │   ├── issetAndEmpty.test
│   │       │   │   │   │   ├── keywordsInNamespacedName.test
│   │       │   │   │   │   ├── listReferences.test
│   │       │   │   │   │   ├── listWithKeys.test
│   │       │   │   │   │   ├── logic.test
│   │       │   │   │   │   ├── match.test
│   │       │   │   │   │   ├── math.test
│   │       │   │   │   │   ├── new.test
│   │       │   │   │   │   ├── newDeref.test
│   │       │   │   │   │   ├── newWithoutClass.test
│   │       │   │   │   │   ├── nullsafe.test
│   │       │   │   │   │   ├── print.test
│   │       │   │   │   │   ├── shellExec.test
│   │       │   │   │   │   ├── ternaryAndCoalesce.test
│   │       │   │   │   │   ├── throw.test
│   │       │   │   │   │   ├── trailingCommas.test
│   │       │   │   │   │   ├── variable.test
│   │       │   │   │   │   └── varVarPos.test
│   │       │   │   │   ├── scalar
│   │       │   │   │   │   ├── constantString.test
│   │       │   │   │   │   ├── docString.test
│   │       │   │   │   │   ├── docStringNewlines.test
│   │       │   │   │   │   ├── encapsedNegVarOffset.test
│   │       │   │   │   │   ├── encapsedString.test
│   │       │   │   │   │   ├── explicitOctal.test
│   │       │   │   │   │   ├── flexibleDocString.test
│   │       │   │   │   │   ├── flexibleDocStringErrors.test
│   │       │   │   │   │   ├── float.test
│   │       │   │   │   │   ├── int.test
│   │       │   │   │   │   ├── invalidOctal.test
│   │       │   │   │   │   ├── magicConst.test
│   │       │   │   │   │   ├── numberSeparators.test
│   │       │   │   │   │   └── unicodeEscape.test
│   │       │   │   │   ├── stmt
│   │       │   │   │   │   ├── class
│   │       │   │   │   │   │   ├── abstract.test
│   │       │   │   │   │   │   ├── anonymous.test
│   │       │   │   │   │   │   ├── asymmetric_visibility.test
│   │       │   │   │   │   │   ├── class_position.test
│   │       │   │   │   │   │   ├── conditional.test
│   │       │   │   │   │   │   ├── constModifierErrors.test
│   │       │   │   │   │   │   ├── constModifiers.test
│   │       │   │   │   │   │   ├── enum_with_string.test
│   │       │   │   │   │   │   ├── enum.test
│   │       │   │   │   │   │   ├── final.test
│   │       │   │   │   │   │   ├── implicitPublic.test
│   │       │   │   │   │   │   ├── interface.test
│   │       │   │   │   │   │   ├── modifier_error.test
│   │       │   │   │   │   │   ├── name.test
│   │       │   │   │   │   │   ├── php4Style.test
│   │       │   │   │   │   │   ├── property_hooks.test
│   │       │   │   │   │   │   ├── property_modifiers.test
│   │       │   │   │   │   │   ├── property_promotion.test
│   │       │   │   │   │   │   ├── propertyTypes.test
│   │       │   │   │   │   │   ├── readonly.test
│   │       │   │   │   │   │   ├── readonlyAnonyous.test
│   │       │   │   │   │   │   ├── readonlyAsClassName.test
│   │       │   │   │   │   │   ├── readonlyMethod.test
│   │       │   │   │   │   │   ├── shortEchoAsIdentifier.test
│   │       │   │   │   │   │   ├── simple.test
│   │       │   │   │   │   │   ├── staticMethod.test
│   │       │   │   │   │   │   ├── staticType.test
│   │       │   │   │   │   │   ├── trait.test
│   │       │   │   │   │   │   └── typedConstants.test
│   │       │   │   │   │   ├── function
│   │       │   │   │   │   │   ├── builtinTypeDeclarations.test
│   │       │   │   │   │   │   ├── byRef.test
│   │       │   │   │   │   │   ├── conditional.test
│   │       │   │   │   │   │   ├── defaultValues.test
│   │       │   │   │   │   │   ├── disjointNormalFormTypes.test
│   │       │   │   │   │   │   ├── exit_die_function.test
│   │       │   │   │   │   │   ├── intersectionTypes.test
│   │       │   │   │   │   │   ├── neverType.test
│   │       │   │   │   │   │   ├── nullableTypes.test
│   │       │   │   │   │   │   ├── nullFalseTrueTypes.test
│   │       │   │   │   │   │   ├── parameters_trailing_comma.test
│   │       │   │   │   │   │   ├── readonlyFunction.test
│   │       │   │   │   │   │   ├── returnTypes.test
│   │       │   │   │   │   │   ├── specialVars.test
│   │       │   │   │   │   │   ├── typeDeclarations.test
│   │       │   │   │   │   │   ├── typeVersions.test
│   │       │   │   │   │   │   ├── unionTypes.test
│   │       │   │   │   │   │   ├── variadic.test
│   │       │   │   │   │   │   └── variadicDefaultValue.test
│   │       │   │   │   │   ├── generator
│   │       │   │   │   │   │   ├── basic.test
│   │       │   │   │   │   │   ├── yieldPrecedence.test
│   │       │   │   │   │   │   └── yieldUnaryPrecedence.test
│   │       │   │   │   │   ├── loop
│   │       │   │   │   │   │   ├── do.test
│   │       │   │   │   │   │   ├── for.test
│   │       │   │   │   │   │   ├── foreach.test
│   │       │   │   │   │   │   └── while.test
│   │       │   │   │   │   ├── namespace
│   │       │   │   │   │   │   ├── alias.test
│   │       │   │   │   │   │   ├── braced.test
│   │       │   │   │   │   │   ├── commentAfterNamespace.test
│   │       │   │   │   │   │   ├── groupUse.test
│   │       │   │   │   │   │   ├── groupUseErrors.test
│   │       │   │   │   │   │   ├── groupUsePositions.test
│   │       │   │   │   │   │   ├── groupUseTrailingComma.test
│   │       │   │   │   │   │   ├── invalidName.test
│   │       │   │   │   │   │   ├── mix.test
│   │       │   │   │   │   │   ├── name.test
│   │       │   │   │   │   │   ├── nested.test
│   │       │   │   │   │   │   ├── notBraced.test
│   │       │   │   │   │   │   ├── nsAfterHashbang.test
│   │       │   │   │   │   │   ├── outsideStmt.test
│   │       │   │   │   │   │   └── outsideStmtInvalid.test
│   │       │   │   │   │   ├── attributes.test
│   │       │   │   │   │   ├── blocklessStatement.test
│   │       │   │   │   │   ├── const.test
│   │       │   │   │   │   ├── controlFlow.test
│   │       │   │   │   │   ├── declare.test
│   │       │   │   │   │   ├── echo.test
│   │       │   │   │   │   ├── haltCompiler.test
│   │       │   │   │   │   ├── haltCompilerInvalidSyntax.test
│   │       │   │   │   │   ├── haltCompilerOffset.test
│   │       │   │   │   │   ├── haltCompilerOutermostScope.test
│   │       │   │   │   │   ├── hashbang.test
│   │       │   │   │   │   ├── if.test
│   │       │   │   │   │   ├── inlineHTML.test
│   │       │   │   │   │   ├── multiCatch.test
│   │       │   │   │   │   ├── newInInitializer.test
│   │       │   │   │   │   ├── switch.test
│   │       │   │   │   │   ├── tryCatch_without_variable.test
│   │       │   │   │   │   ├── tryCatch.test
│   │       │   │   │   │   ├── tryWithoutCatch.test
│   │       │   │   │   │   └── unset.test
│   │       │   │   │   ├── blockComments.test
│   │       │   │   │   ├── commentAtEndOfClass.test
│   │       │   │   │   ├── comments.test
│   │       │   │   │   ├── emptyFile.test
│   │       │   │   │   ├── formattingAttributes.test
│   │       │   │   │   ├── nopPositions.test
│   │       │   │   │   └── semiReserved.test
│   │       │   │   └── prettyPrinter
│   │       │   │       ├── expr
│   │       │   │       │   ├── anonymousClass.test
│   │       │   │       │   ├── arrayDestructuring.test
│   │       │   │       │   ├── arraySpread.test
│   │       │   │       │   ├── arrow_function.test
│   │       │   │       │   ├── call.test
│   │       │   │       │   ├── closure.test
│   │       │   │       │   ├── constant_deref.test
│   │       │   │       │   ├── docStrings.test
│   │       │   │       │   ├── dynamicClassConstFetch.test
│   │       │   │       │   ├── firstClassCallables.test
│   │       │   │       │   ├── include.test
│   │       │   │       │   ├── intrinsics.test
│   │       │   │       │   ├── list.test
│   │       │   │       │   ├── literals.test
│   │       │   │       │   ├── match.test
│   │       │   │       │   ├── namedArgs.test
│   │       │   │       │   ├── newVariable.test
│   │       │   │       │   ├── nullsafe.test
│   │       │   │       │   ├── numbers.test
│   │       │   │       │   ├── operators.test
│   │       │   │       │   ├── parentheses.test
│   │       │   │       │   ├── shortArraySyntax.test
│   │       │   │       │   ├── stringEscaping.test
│   │       │   │       │   ├── throw.test
│   │       │   │       │   ├── uvs.test
│   │       │   │       │   ├── variables.test
│   │       │   │       │   └── yield.test
│   │       │   │       ├── stmt
│   │       │   │       │   ├── alias.test
│   │       │   │       │   ├── asymmetric_visibility.test
│   │       │   │       │   ├── attributes.test
│   │       │   │       │   ├── block.test
│   │       │   │       │   ├── break_continue.test
│   │       │   │       │   ├── class_const.test
│   │       │   │       │   ├── class.test
│   │       │   │       │   ├── const.test
│   │       │   │       │   ├── declare.test
│   │       │   │       │   ├── disjointNormalFormTypes.test
│   │       │   │       │   ├── do_while.test
│   │       │   │       │   ├── enum.test
│   │       │   │       │   ├── for.test
│   │       │   │       │   ├── foreach.test
│   │       │   │       │   ├── function_signatures.test
│   │       │   │       │   ├── global_static_variables.test
│   │       │   │       │   ├── goto.test
│   │       │   │       │   ├── groupUse.test
│   │       │   │       │   ├── haltCompiler.file-test
│   │       │   │       │   ├── if.test
│   │       │   │       │   ├── intersection_types.test
│   │       │   │       │   ├── multiCatch.test
│   │       │   │       │   ├── namespaces.test
│   │       │   │       │   ├── nullable_types.test
│   │       │   │       │   ├── param_comments.test
│   │       │   │       │   ├── properties.test
│   │       │   │       │   ├── property_hooks.test
│   │       │   │       │   ├── property_promotion.test
│   │       │   │       │   ├── readonly_class.test
│   │       │   │       │   ├── staticType.test
│   │       │   │       │   ├── switch.test
│   │       │   │       │   ├── throw.test
│   │       │   │       │   ├── traitUse.test
│   │       │   │       │   ├── tryCatch_without_variable.test
│   │       │   │       │   ├── tryCatch.test
│   │       │   │       │   ├── union_types.test
│   │       │   │       │   └── while.test
│   │       │   │       ├── comments.test
│   │       │   │       ├── commentsInCommaList.test
│   │       │   │       ├── indent.test
│   │       │   │       ├── inlineHTMLandPHPtest.file-test
│   │       │   │       ├── nestedInlineHTML.test
│   │       │   │       ├── onlyInlineHTML.file-test
│   │       │   │       └── onlyPHP.file-test
│   │       │   ├── fixtures
│   │       │   │   └── Suit.php
│   │       │   ├── PhpParser
│   │       │   │   ├── Builder
│   │       │   │   │   ├── ClassConstTest.php
│   │       │   │   │   ├── ClassTest.php
│   │       │   │   │   ├── EnumCaseTest.php
│   │       │   │   │   ├── EnumTest.php
│   │       │   │   │   ├── FunctionTest.php
│   │       │   │   │   ├── InterfaceTest.php
│   │       │   │   │   ├── MethodTest.php
│   │       │   │   │   ├── NamespaceTest.php
│   │       │   │   │   ├── ParamTest.php
│   │       │   │   │   ├── PropertyTest.php
│   │       │   │   │   ├── TraitTest.php
│   │       │   │   │   ├── TraitUseAdaptationTest.php
│   │       │   │   │   ├── TraitUseTest.php
│   │       │   │   │   └── UseTest.php
│   │       │   │   ├── ErrorHandler
│   │       │   │   │   ├── CollectingTest.php
│   │       │   │   │   └── ThrowingTest.php
│   │       │   │   ├── Internal
│   │       │   │   │   └── DifferTest.php
│   │       │   │   ├── Lexer
│   │       │   │   │   └── EmulativeTest.php
│   │       │   │   ├── Node
│   │       │   │   │   ├── Expr
│   │       │   │   │   │   └── CallableLikeTest.php
│   │       │   │   │   ├── Scalar
│   │       │   │   │   │   ├── DNumberTest.php
│   │       │   │   │   │   ├── MagicConstTest.php
│   │       │   │   │   │   ├── NumberTest.php
│   │       │   │   │   │   └── StringTest.php
│   │       │   │   │   ├── Stmt
│   │       │   │   │   │   ├── ClassConstTest.php
│   │       │   │   │   │   ├── ClassMethodTest.php
│   │       │   │   │   │   ├── ClassTest.php
│   │       │   │   │   │   ├── InterfaceTest.php
│   │       │   │   │   │   └── PropertyTest.php
│   │       │   │   │   ├── IdentifierTest.php
│   │       │   │   │   ├── NameTest.php
│   │       │   │   │   ├── ParamTest.php
│   │       │   │   │   └── PropertyHookTest.php
│   │       │   │   ├── NodeVisitor
│   │       │   │   │   ├── FindingVisitorTest.php
│   │       │   │   │   ├── FirstFindingVisitorTest.php
│   │       │   │   │   ├── NameResolverTest.php
│   │       │   │   │   ├── NodeConnectingVisitorTest.php
│   │       │   │   │   └── ParentConnectingVisitorTest.php
│   │       │   │   ├── Parser
│   │       │   │   │   ├── Php7Test.php
│   │       │   │   │   └── Php8Test.php
│   │       │   │   ├── BuilderFactoryTest.php
│   │       │   │   ├── BuilderHelpersTest.php
│   │       │   │   ├── CodeParsingTest.php
│   │       │   │   ├── CodeTestAbstract.php
│   │       │   │   ├── CodeTestParser.php
│   │       │   │   ├── CommentTest.php
│   │       │   │   ├── CompatibilityTest.php
│   │       │   │   ├── ConstExprEvaluatorTest.php
│   │       │   │   ├── ErrorTest.php
│   │       │   │   ├── JsonDecoderTest.php
│   │       │   │   ├── LexerTest.php
│   │       │   │   ├── ModifiersTest.php
│   │       │   │   ├── NameContextTest.php
│   │       │   │   ├── NodeAbstractTest.php
│   │       │   │   ├── NodeDumperTest.php
│   │       │   │   ├── NodeFinderTest.php
│   │       │   │   ├── NodeTraverserTest.php
│   │       │   │   ├── NodeVisitorForTesting.php
│   │       │   │   ├── ParserFactoryTest.php
│   │       │   │   ├── ParserTestAbstract.php
│   │       │   │   ├── PhpVersionTest.php
│   │       │   │   ├── PrettyPrinterTest.php
│   │       │   │   └── TokenTest.php
│   │       │   ├── bootstrap.php
│   │       │   └── updateTests.php
│   │       ├── test_old
│   │       │   ├── run-php-src.sh
│   │       │   └── run.php
│   │       ├── tools
│   │       │   ├── fuzzing
│   │       │   │   ├── generateCorpus.php
│   │       │   │   ├── php.dict
│   │       │   │   └── target.php
│   │       │   └── composer.json
│   │       ├── .editorconfig
│   │       ├── .gitattributes
│   │       ├── .gitignore
│   │       ├── .php-cs-fixer.dist.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── CONTRIBUTING.md
│   │       ├── LICENSE
│   │       ├── Makefile
│   │       ├── phpstan-baseline.neon
│   │       ├── phpstan.neon.dist
│   │       ├── phpunit.xml.dist
│   │       ├── README.md
│   │       ├── UPGRADE-1.0.md
│   │       ├── UPGRADE-2.0.md
│   │       ├── UPGRADE-3.0.md
│   │       ├── UPGRADE-4.0.md
│   │       └── UPGRADE-5.0.md
│   ├── psr
│   │   ├── cache
│   │   │   ├── src
│   │   │   │   ├── CacheException.php
│   │   │   │   ├── CacheItemInterface.php
│   │   │   │   ├── CacheItemPoolInterface.php
│   │   │   │   └── InvalidArgumentException.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.txt
│   │   │   └── README.md
│   │   ├── clock
│   │   │   ├── src
│   │   │   │   └── ClockInterface.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── container
│   │   │   ├── src
│   │   │   │   ├── ContainerExceptionInterface.php
│   │   │   │   ├── ContainerInterface.php
│   │   │   │   └── NotFoundExceptionInterface.php
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── event-dispatcher
│   │   │   ├── src
│   │   │   │   ├── EventDispatcherInterface.php
│   │   │   │   ├── ListenerProviderInterface.php
│   │   │   │   └── StoppableEventInterface.php
│   │   │   ├── .editorconfig
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   └── log
│   │       ├── src
│   │       │   ├── AbstractLogger.php
│   │       │   ├── InvalidArgumentException.php
│   │       │   ├── LoggerAwareInterface.php
│   │       │   ├── LoggerAwareTrait.php
│   │       │   ├── LoggerInterface.php
│   │       │   ├── LoggerTrait.php
│   │       │   ├── LogLevel.php
│   │       │   └── NullLogger.php
│   │       ├── .gitattributes
│   │       ├── .gitignore
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── README.md
│   ├── symfony
│   │   ├── cache
│   │   │   ├── Adapter
│   │   │   │   ├── AbstractAdapter.php
│   │   │   │   ├── AbstractTagAwareAdapter.php
│   │   │   │   ├── AdapterInterface.php
│   │   │   │   ├── ApcuAdapter.php
│   │   │   │   ├── ArrayAdapter.php
│   │   │   │   ├── ChainAdapter.php
│   │   │   │   ├── CouchbaseBucketAdapter.php
│   │   │   │   ├── CouchbaseCollectionAdapter.php
│   │   │   │   ├── DoctrineDbalAdapter.php
│   │   │   │   ├── FilesystemAdapter.php
│   │   │   │   ├── FilesystemTagAwareAdapter.php
│   │   │   │   ├── MemcachedAdapter.php
│   │   │   │   ├── NullAdapter.php
│   │   │   │   ├── ParameterNormalizer.php
│   │   │   │   ├── PdoAdapter.php
│   │   │   │   ├── PhpArrayAdapter.php
│   │   │   │   ├── PhpFilesAdapter.php
│   │   │   │   ├── ProxyAdapter.php
│   │   │   │   ├── Psr16Adapter.php
│   │   │   │   ├── RedisAdapter.php
│   │   │   │   ├── RedisTagAwareAdapter.php
│   │   │   │   ├── TagAwareAdapter.php
│   │   │   │   ├── TagAwareAdapterInterface.php
│   │   │   │   ├── TraceableAdapter.php
│   │   │   │   └── TraceableTagAwareAdapter.php
│   │   │   ├── DataCollector
│   │   │   │   └── CacheDataCollector.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── CacheCollectorPass.php
│   │   │   │   ├── CachePoolClearerPass.php
│   │   │   │   ├── CachePoolPass.php
│   │   │   │   └── CachePoolPrunerPass.php
│   │   │   ├── Exception
│   │   │   │   ├── CacheException.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   └── LogicException.php
│   │   │   ├── Marshaller
│   │   │   │   ├── DefaultMarshaller.php
│   │   │   │   ├── DeflateMarshaller.php
│   │   │   │   ├── MarshallerInterface.php
│   │   │   │   ├── SodiumMarshaller.php
│   │   │   │   └── TagAwareMarshaller.php
│   │   │   ├── Messenger
│   │   │   │   ├── EarlyExpirationDispatcher.php
│   │   │   │   ├── EarlyExpirationHandler.php
│   │   │   │   └── EarlyExpirationMessage.php
│   │   │   ├── Tests
│   │   │   │   ├── Adapter
│   │   │   │   │   ├── AbstractRedisAdapterTestCase.php
│   │   │   │   │   ├── AdapterTestCase.php
│   │   │   │   │   ├── ApcuAdapterTest.php
│   │   │   │   │   ├── ArrayAdapterTest.php
│   │   │   │   │   ├── ChainAdapterTest.php
│   │   │   │   │   ├── CouchbaseBucketAdapterTest.php
│   │   │   │   │   ├── CouchbaseCollectionAdapterTest.php
│   │   │   │   │   ├── DoctrineDbalAdapterTest.php
│   │   │   │   │   ├── FilesystemAdapterTest.php
│   │   │   │   │   ├── FilesystemTagAwareAdapterTest.php
│   │   │   │   │   ├── MaxIdLengthAdapterTest.php
│   │   │   │   │   ├── MemcachedAdapterTest.php
│   │   │   │   │   ├── NamespacedProxyAdapterTest.php
│   │   │   │   │   ├── NullAdapterTest.php
│   │   │   │   │   ├── PdoAdapterTest.php
│   │   │   │   │   ├── PhpArrayAdapterTest.php
│   │   │   │   │   ├── PhpArrayAdapterWithFallbackTest.php
│   │   │   │   │   ├── PhpFilesAdapterAppendOnlyTest.php
│   │   │   │   │   ├── PhpFilesAdapterTest.php
│   │   │   │   │   ├── PredisAdapterSentinelTest.php
│   │   │   │   │   ├── PredisAdapterTest.php
│   │   │   │   │   ├── PredisClusterAdapterTest.php
│   │   │   │   │   ├── PredisRedisClusterAdapterTest.php
│   │   │   │   │   ├── PredisTagAwareAdapterTest.php
│   │   │   │   │   ├── PredisTagAwareClusterAdapterTest.php
│   │   │   │   │   ├── ProxyAdapterAndRedisAdapterTest.php
│   │   │   │   │   ├── ProxyAdapterTest.php
│   │   │   │   │   ├── Psr16AdapterTest.php
│   │   │   │   │   ├── RedisAdapterSentinelTest.php
│   │   │   │   │   ├── RedisAdapterTest.php
│   │   │   │   │   ├── RedisArrayAdapterTest.php
│   │   │   │   │   ├── RedisClusterAdapterTest.php
│   │   │   │   │   ├── RedisTagAwareAdapterTest.php
│   │   │   │   │   ├── RedisTagAwareArrayAdapterTest.php
│   │   │   │   │   ├── RedisTagAwareClusterAdapterTest.php
│   │   │   │   │   ├── RelayAdapterSentinelTest.php
│   │   │   │   │   ├── RelayAdapterTest.php
│   │   │   │   │   ├── TagAwareAdapterTest.php
│   │   │   │   │   ├── TagAwareAndProxyAdapterIntegrationTest.php
│   │   │   │   │   ├── TagAwareTestTrait.php
│   │   │   │   │   ├── TraceableAdapterTest.php
│   │   │   │   │   └── TraceableTagAwareAdapterTest.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   └── CacheDataCollectorTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── CacheCollectorPassTest.php
│   │   │   │   │   ├── CachePoolClearerPassTest.php
│   │   │   │   │   ├── CachePoolPassTest.php
│   │   │   │   │   └── CachePoolPrunerPassTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── ExternalAdapter.php
│   │   │   │   │   ├── PrunableAdapter.php
│   │   │   │   │   ├── StringableTag.php
│   │   │   │   │   └── TestEnum.php
│   │   │   │   ├── Marshaller
│   │   │   │   │   ├── DefaultMarshallerTest.php
│   │   │   │   │   ├── DeflateMarshallerTest.php
│   │   │   │   │   └── SodiumMarshallerTest.php
│   │   │   │   ├── Messenger
│   │   │   │   │   ├── EarlyExpirationDispatcherTest.php
│   │   │   │   │   ├── EarlyExpirationHandlerTest.php
│   │   │   │   │   └── EarlyExpirationMessageTest.php
│   │   │   │   ├── Traits
│   │   │   │   │   ├── RedisProxiesTest.php
│   │   │   │   │   └── RedisTraitTest.php
│   │   │   │   ├── CacheItemTest.php
│   │   │   │   ├── LockRegistryTest.php
│   │   │   │   ├── Psr16CacheProxyTest.php
│   │   │   │   ├── Psr16CacheTest.php
│   │   │   │   └── Psr16CacheWithExternalAdapter.php
│   │   │   ├── Traits
│   │   │   │   ├── AbstractAdapterTrait.php
│   │   │   │   ├── ContractsTrait.php
│   │   │   │   ├── FilesystemCommonTrait.php
│   │   │   │   ├── FilesystemTrait.php
│   │   │   │   ├── ProxyTrait.php
│   │   │   │   ├── Redis5Proxy.php
│   │   │   │   ├── Redis6Proxy.php
│   │   │   │   ├── RedisCluster5Proxy.php
│   │   │   │   ├── RedisCluster6Proxy.php
│   │   │   │   ├── RedisClusterNodeProxy.php
│   │   │   │   ├── RedisClusterProxy.php
│   │   │   │   ├── RedisProxy.php
│   │   │   │   ├── RedisTrait.php
│   │   │   │   ├── RelayProxy.php
│   │   │   │   ├── RelayProxyTrait.php
│   │   │   │   └── ValueWrapper.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CacheItem.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── LockRegistry.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── PruneableInterface.php
│   │   │   ├── Psr16Cache.php
│   │   │   ├── README.md
│   │   │   └── ResettableInterface.php
│   │   ├── cache-contracts
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   └── close-pull-request.yml
│   │   │   │   └── PULL_REQUEST_TEMPLATE.md
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CacheInterface.php
│   │   │   ├── CacheTrait.php
│   │   │   ├── CallbackInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── ItemInterface.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── TagAwareCacheInterface.php
│   │   ├── clock
│   │   │   ├── Resources
│   │   │   │   └── now.php
│   │   │   ├── Test
│   │   │   │   └── ClockSensitiveTrait.php
│   │   │   ├── Tests
│   │   │   │   ├── ClockAwareTraitTest.php
│   │   │   │   ├── ClockBeforeClassTest.php
│   │   │   │   ├── ClockTest.php
│   │   │   │   ├── DatePointTest.php
│   │   │   │   ├── MockClockTest.php
│   │   │   │   ├── MonotonicClockTest.php
│   │   │   │   └── NativeClockTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Clock.php
│   │   │   ├── ClockAwareTrait.php
│   │   │   ├── ClockInterface.php
│   │   │   ├── composer.json
│   │   │   ├── DatePoint.php
│   │   │   ├── LICENSE
│   │   │   ├── MockClock.php
│   │   │   ├── MonotonicClock.php
│   │   │   ├── NativeClock.php
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── config
│   │   │   ├── Builder
│   │   │   │   ├── ClassBuilder.php
│   │   │   │   ├── ConfigBuilderGenerator.php
│   │   │   │   ├── ConfigBuilderGeneratorInterface.php
│   │   │   │   ├── ConfigBuilderInterface.php
│   │   │   │   ├── Method.php
│   │   │   │   └── Property.php
│   │   │   ├── Definition
│   │   │   │   ├── Builder
│   │   │   │   │   ├── ArrayNodeDefinition.php
│   │   │   │   │   ├── BooleanNodeDefinition.php
│   │   │   │   │   ├── BuilderAwareInterface.php
│   │   │   │   │   ├── EnumNodeDefinition.php
│   │   │   │   │   ├── ExprBuilder.php
│   │   │   │   │   ├── FloatNodeDefinition.php
│   │   │   │   │   ├── IntegerNodeDefinition.php
│   │   │   │   │   ├── MergeBuilder.php
│   │   │   │   │   ├── NodeBuilder.php
│   │   │   │   │   ├── NodeDefinition.php
│   │   │   │   │   ├── NodeParentInterface.php
│   │   │   │   │   ├── NormalizationBuilder.php
│   │   │   │   │   ├── NumericNodeDefinition.php
│   │   │   │   │   ├── ParentNodeDefinitionInterface.php
│   │   │   │   │   ├── ScalarNodeDefinition.php
│   │   │   │   │   ├── TreeBuilder.php
│   │   │   │   │   ├── ValidationBuilder.php
│   │   │   │   │   └── VariableNodeDefinition.php
│   │   │   │   ├── Configurator
│   │   │   │   │   └── DefinitionConfigurator.php
│   │   │   │   ├── Dumper
│   │   │   │   │   ├── XmlReferenceDumper.php
│   │   │   │   │   └── YamlReferenceDumper.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── DuplicateKeyException.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── ForbiddenOverwriteException.php
│   │   │   │   │   ├── InvalidConfigurationException.php
│   │   │   │   │   ├── InvalidDefinitionException.php
│   │   │   │   │   ├── InvalidTypeException.php
│   │   │   │   │   └── UnsetKeyException.php
│   │   │   │   ├── Loader
│   │   │   │   │   └── DefinitionFileLoader.php
│   │   │   │   ├── ArrayNode.php
│   │   │   │   ├── BaseNode.php
│   │   │   │   ├── BooleanNode.php
│   │   │   │   ├── ConfigurableInterface.php
│   │   │   │   ├── Configuration.php
│   │   │   │   ├── ConfigurationInterface.php
│   │   │   │   ├── EnumNode.php
│   │   │   │   ├── FloatNode.php
│   │   │   │   ├── IntegerNode.php
│   │   │   │   ├── NodeInterface.php
│   │   │   │   ├── NumericNode.php
│   │   │   │   ├── Processor.php
│   │   │   │   ├── PrototypedArrayNode.php
│   │   │   │   ├── PrototypeNodeInterface.php
│   │   │   │   ├── ScalarNode.php
│   │   │   │   └── VariableNode.php
│   │   │   ├── Exception
│   │   │   │   ├── FileLoaderImportCircularReferenceException.php
│   │   │   │   ├── FileLocatorFileNotFoundException.php
│   │   │   │   ├── LoaderLoadException.php
│   │   │   │   └── LogicException.php
│   │   │   ├── Loader
│   │   │   │   ├── DelegatingLoader.php
│   │   │   │   ├── DirectoryAwareLoaderInterface.php
│   │   │   │   ├── FileLoader.php
│   │   │   │   ├── GlobFileLoader.php
│   │   │   │   ├── Loader.php
│   │   │   │   ├── LoaderInterface.php
│   │   │   │   ├── LoaderResolver.php
│   │   │   │   ├── LoaderResolverInterface.php
│   │   │   │   └── ParamConfigurator.php
│   │   │   ├── Resource
│   │   │   │   ├── ClassExistenceResource.php
│   │   │   │   ├── ComposerResource.php
│   │   │   │   ├── DirectoryResource.php
│   │   │   │   ├── FileExistenceResource.php
│   │   │   │   ├── FileResource.php
│   │   │   │   ├── GlobResource.php
│   │   │   │   ├── ReflectionClassResource.php
│   │   │   │   ├── ResourceInterface.php
│   │   │   │   ├── SelfCheckingResourceChecker.php
│   │   │   │   └── SelfCheckingResourceInterface.php
│   │   │   ├── Tests
│   │   │   │   ├── Builder
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── AddToList
│   │   │   │   │   │   │   └── Symfony
│   │   │   │   │   │   │       └── Config
│   │   │   │   │   │   │           ├── AddToList
│   │   │   │   │   │   │           │   ├── Messenger
│   │   │   │   │   │   │           │   │   ├── ReceivingConfig.php
│   │   │   │   │   │   │           │   │   └── RoutingConfig.php
│   │   │   │   │   │   │           │   ├── Translator
│   │   │   │   │   │   │           │   │   ├── Books
│   │   │   │   │   │   │           │   │   │   └── PageConfig.php
│   │   │   │   │   │   │           │   │   └── BooksConfig.php
│   │   │   │   │   │   │           │   ├── MessengerConfig.php
│   │   │   │   │   │   │           │   └── TranslatorConfig.php
│   │   │   │   │   │   │           └── AddToListConfig.php
│   │   │   │   │   │   ├── ArrayExtraKeys
│   │   │   │   │   │   │   └── Symfony
│   │   │   │   │   │   │       └── Config
│   │   │   │   │   │   │           ├── ArrayExtraKeys
│   │   │   │   │   │   │           │   ├── BarConfig.php
│   │   │   │   │   │   │           │   ├── BazConfig.php
│   │   │   │   │   │   │           │   └── FooConfig.php
│   │   │   │   │   │   │           └── ArrayExtraKeysConfig.php
│   │   │   │   │   │   ├── NodeInitialValues
│   │   │   │   │   │   │   └── Symfony
│   │   │   │   │   │   │       └── Config
│   │   │   │   │   │   │           ├── NodeInitialValues
│   │   │   │   │   │   │           │   ├── Messenger
│   │   │   │   │   │   │           │   │   └── TransportsConfig.php
│   │   │   │   │   │   │           │   ├── MessengerConfig.php
│   │   │   │   │   │   │           │   └── SomeCleverNameConfig.php
│   │   │   │   │   │   │           └── NodeInitialValuesConfig.php
│   │   │   │   │   │   ├── Placeholders
│   │   │   │   │   │   │   └── Symfony
│   │   │   │   │   │   │       └── Config
│   │   │   │   │   │   │           └── PlaceholdersConfig.php
│   │   │   │   │   │   ├── PrimitiveTypes
│   │   │   │   │   │   │   └── Symfony
│   │   │   │   │   │   │       └── Config
│   │   │   │   │   │   │           └── PrimitiveTypesConfig.php
│   │   │   │   │   │   ├── ScalarNormalizedTypes
│   │   │   │   │   │   │   └── Symfony
│   │   │   │   │   │   │       └── Config
│   │   │   │   │   │   │           ├── ScalarNormalizedTypes
│   │   │   │   │   │   │           │   ├── Nested
│   │   │   │   │   │   │           │   │   ├── NestedListObjectConfig.php
│   │   │   │   │   │   │           │   │   └── NestedObjectConfig.php
│   │   │   │   │   │   │           │   ├── KeyedListObjectConfig.php
│   │   │   │   │   │   │           │   ├── ListObjectConfig.php
│   │   │   │   │   │   │           │   ├── NestedConfig.php
│   │   │   │   │   │   │           │   └── ObjectConfig.php
│   │   │   │   │   │   │           └── ScalarNormalizedTypesConfig.php
│   │   │   │   │   │   ├── VariableType
│   │   │   │   │   │   │   └── Symfony
│   │   │   │   │   │   │       └── Config
│   │   │   │   │   │   │           └── VariableTypeConfig.php
│   │   │   │   │   │   ├── AddToList.config.php
│   │   │   │   │   │   ├── AddToList.output.php
│   │   │   │   │   │   ├── AddToList.php
│   │   │   │   │   │   ├── ArrayExtraKeys.config.php
│   │   │   │   │   │   ├── ArrayExtraKeys.output.php
│   │   │   │   │   │   ├── ArrayExtraKeys.php
│   │   │   │   │   │   ├── NodeInitialValues.config.php
│   │   │   │   │   │   ├── NodeInitialValues.output.php
│   │   │   │   │   │   ├── NodeInitialValues.php
│   │   │   │   │   │   ├── Placeholders.config.php
│   │   │   │   │   │   ├── Placeholders.output.php
│   │   │   │   │   │   ├── Placeholders.php
│   │   │   │   │   │   ├── PrimitiveTypes.config.php
│   │   │   │   │   │   ├── PrimitiveTypes.output.php
│   │   │   │   │   │   ├── PrimitiveTypes.php
│   │   │   │   │   │   ├── ScalarNormalizedTypes.config.php
│   │   │   │   │   │   ├── ScalarNormalizedTypes.output.php
│   │   │   │   │   │   ├── ScalarNormalizedTypes.php
│   │   │   │   │   │   ├── VariableType.config.php
│   │   │   │   │   │   ├── VariableType.output.php
│   │   │   │   │   │   └── VariableType.php
│   │   │   │   │   └── GeneratedConfigTest.php
│   │   │   │   ├── Definition
│   │   │   │   │   ├── Builder
│   │   │   │   │   │   ├── ArrayNodeDefinitionTest.php
│   │   │   │   │   │   ├── BooleanNodeDefinitionTest.php
│   │   │   │   │   │   ├── EnumNodeDefinitionTest.php
│   │   │   │   │   │   ├── ExprBuilderTest.php
│   │   │   │   │   │   ├── NodeBuilderTest.php
│   │   │   │   │   │   ├── NodeDefinitionTest.php
│   │   │   │   │   │   ├── NumericNodeDefinitionTest.php
│   │   │   │   │   │   └── TreeBuilderTest.php
│   │   │   │   │   ├── Dumper
│   │   │   │   │   │   ├── XmlReferenceDumperTest.php
│   │   │   │   │   │   └── YamlReferenceDumperTest.php
│   │   │   │   │   ├── Loader
│   │   │   │   │   │   └── DefinitionFileLoaderTest.php
│   │   │   │   │   ├── ArrayNodeTest.php
│   │   │   │   │   ├── BaseNodeTest.php
│   │   │   │   │   ├── BooleanNodeTest.php
│   │   │   │   │   ├── EnumNodeTest.php
│   │   │   │   │   ├── FinalizationTest.php
│   │   │   │   │   ├── FloatNodeTest.php
│   │   │   │   │   ├── IntegerNodeTest.php
│   │   │   │   │   ├── MergeTest.php
│   │   │   │   │   ├── NormalizationTest.php
│   │   │   │   │   ├── PrototypedArrayNodeTest.php
│   │   │   │   │   └── ScalarNodeTest.php
│   │   │   │   ├── Exception
│   │   │   │   │   └── LoaderLoadExceptionTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── Again
│   │   │   │   │   │   └── foo.xml
│   │   │   │   │   ├── Builder
│   │   │   │   │   │   ├── BarNodeDefinition.php
│   │   │   │   │   │   ├── NodeBuilder.php
│   │   │   │   │   │   └── VariableNodeDefinition.php
│   │   │   │   │   ├── Configuration
│   │   │   │   │   │   ├── CustomNode.php
│   │   │   │   │   │   ├── CustomNodeDefinition.php
│   │   │   │   │   │   └── ExampleConfiguration.php
│   │   │   │   │   ├── Exclude
│   │   │   │   │   │   ├── ExcludeToo
│   │   │   │   │   │   │   └── AnotheExcludedFile.txt
│   │   │   │   │   │   └── AnExcludedFile.txt
│   │   │   │   │   ├── ExcludeTrailingSlash
│   │   │   │   │   │   ├── exclude
│   │   │   │   │   │   │   └── baz.txt
│   │   │   │   │   │   ├── bar.txt
│   │   │   │   │   │   └── foo.txt
│   │   │   │   │   ├── Include
│   │   │   │   │   │   ├── ExcludeFile.txt
│   │   │   │   │   │   ├── IncludeAnotherFile.txt
│   │   │   │   │   │   └── IncludeFile.txt
│   │   │   │   │   ├── Loader
│   │   │   │   │   │   └── node_simple.php
│   │   │   │   │   ├── Resource
│   │   │   │   │   │   ├── .hiddenFile
│   │   │   │   │   │   └── ConditionalClass.php
│   │   │   │   │   ├── Util
│   │   │   │   │   │   ├── document_type.xml
│   │   │   │   │   │   ├── invalid_schema.xml
│   │   │   │   │   │   ├── invalid.xml
│   │   │   │   │   │   ├── not_readable.xml
│   │   │   │   │   │   ├── schema.xsd
│   │   │   │   │   │   └── valid.xml
│   │   │   │   │   ├── BadFileName.php
│   │   │   │   │   ├── BadParent.php
│   │   │   │   │   ├── BarNode.php
│   │   │   │   │   ├── foo.xml
│   │   │   │   │   ├── ParseError.php
│   │   │   │   │   ├── some.phar
│   │   │   │   │   ├── TestEnum.php
│   │   │   │   │   └── TestEnum2.php
│   │   │   │   ├── Loader
│   │   │   │   │   ├── DelegatingLoaderTest.php
│   │   │   │   │   ├── FileLoaderTest.php
│   │   │   │   │   ├── LoaderResolverTest.php
│   │   │   │   │   └── LoaderTest.php
│   │   │   │   ├── Resource
│   │   │   │   │   ├── ClassExistenceResourceTest.php
│   │   │   │   │   ├── ComposerResourceTest.php
│   │   │   │   │   ├── DirectoryResourceTest.php
│   │   │   │   │   ├── FileExistenceResourceTest.php
│   │   │   │   │   ├── FileResourceTest.php
│   │   │   │   │   ├── GlobResourceTest.php
│   │   │   │   │   ├── ReflectionClassResourceTest.php
│   │   │   │   │   └── ResourceStub.php
│   │   │   │   ├── Util
│   │   │   │   │   └── XmlUtilsTest.php
│   │   │   │   ├── ConfigCacheFactoryTest.php
│   │   │   │   ├── ConfigCacheTest.php
│   │   │   │   ├── FileLocatorTest.php
│   │   │   │   └── ResourceCheckerConfigCacheTest.php
│   │   │   ├── Util
│   │   │   │   ├── Exception
│   │   │   │   │   ├── InvalidXmlException.php
│   │   │   │   │   └── XmlParsingException.php
│   │   │   │   └── XmlUtils.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── ConfigCache.php
│   │   │   ├── ConfigCacheFactory.php
│   │   │   ├── ConfigCacheFactoryInterface.php
│   │   │   ├── ConfigCacheInterface.php
│   │   │   ├── FileLocator.php
│   │   │   ├── FileLocatorInterface.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── ResourceCheckerConfigCache.php
│   │   │   ├── ResourceCheckerConfigCacheFactory.php
│   │   │   └── ResourceCheckerInterface.php
│   │   ├── console
│   │   │   ├── Attribute
│   │   │   │   └── AsCommand.php
│   │   │   ├── CI
│   │   │   │   └── GithubActionReporter.php
│   │   │   ├── Command
│   │   │   │   ├── Command.php
│   │   │   │   ├── CompleteCommand.php
│   │   │   │   ├── DumpCompletionCommand.php
│   │   │   │   ├── HelpCommand.php
│   │   │   │   ├── LazyCommand.php
│   │   │   │   ├── ListCommand.php
│   │   │   │   ├── LockableTrait.php
│   │   │   │   ├── SignalableCommandInterface.php
│   │   │   │   └── TraceableCommand.php
│   │   │   ├── CommandLoader
│   │   │   │   ├── CommandLoaderInterface.php
│   │   │   │   ├── ContainerCommandLoader.php
│   │   │   │   └── FactoryCommandLoader.php
│   │   │   ├── Completion
│   │   │   │   ├── Output
│   │   │   │   │   ├── BashCompletionOutput.php
│   │   │   │   │   ├── CompletionOutputInterface.php
│   │   │   │   │   ├── FishCompletionOutput.php
│   │   │   │   │   └── ZshCompletionOutput.php
│   │   │   │   ├── CompletionInput.php
│   │   │   │   ├── CompletionSuggestions.php
│   │   │   │   └── Suggestion.php
│   │   │   ├── DataCollector
│   │   │   │   └── CommandDataCollector.php
│   │   │   ├── Debug
│   │   │   │   └── CliRequest.php
│   │   │   ├── DependencyInjection
│   │   │   │   └── AddConsoleCommandPass.php
│   │   │   ├── Descriptor
│   │   │   │   ├── ApplicationDescription.php
│   │   │   │   ├── Descriptor.php
│   │   │   │   ├── DescriptorInterface.php
│   │   │   │   ├── JsonDescriptor.php
│   │   │   │   ├── MarkdownDescriptor.php
│   │   │   │   ├── ReStructuredTextDescriptor.php
│   │   │   │   ├── TextDescriptor.php
│   │   │   │   └── XmlDescriptor.php
│   │   │   ├── Event
│   │   │   │   ├── ConsoleCommandEvent.php
│   │   │   │   ├── ConsoleErrorEvent.php
│   │   │   │   ├── ConsoleEvent.php
│   │   │   │   ├── ConsoleSignalEvent.php
│   │   │   │   └── ConsoleTerminateEvent.php
│   │   │   ├── EventListener
│   │   │   │   └── ErrorListener.php
│   │   │   ├── Exception
│   │   │   │   ├── CommandNotFoundException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidOptionException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── MissingInputException.php
│   │   │   │   ├── NamespaceNotFoundException.php
│   │   │   │   ├── RunCommandFailedException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Formatter
│   │   │   │   ├── NullOutputFormatter.php
│   │   │   │   ├── NullOutputFormatterStyle.php
│   │   │   │   ├── OutputFormatter.php
│   │   │   │   ├── OutputFormatterInterface.php
│   │   │   │   ├── OutputFormatterStyle.php
│   │   │   │   ├── OutputFormatterStyleInterface.php
│   │   │   │   ├── OutputFormatterStyleStack.php
│   │   │   │   └── WrappableOutputFormatterInterface.php
│   │   │   ├── Helper
│   │   │   │   ├── DebugFormatterHelper.php
│   │   │   │   ├── DescriptorHelper.php
│   │   │   │   ├── Dumper.php
│   │   │   │   ├── FormatterHelper.php
│   │   │   │   ├── Helper.php
│   │   │   │   ├── HelperInterface.php
│   │   │   │   ├── HelperSet.php
│   │   │   │   ├── InputAwareHelper.php
│   │   │   │   ├── OutputWrapper.php
│   │   │   │   ├── ProcessHelper.php
│   │   │   │   ├── ProgressBar.php
│   │   │   │   ├── ProgressIndicator.php
│   │   │   │   ├── QuestionHelper.php
│   │   │   │   ├── SymfonyQuestionHelper.php
│   │   │   │   ├── Table.php
│   │   │   │   ├── TableCell.php
│   │   │   │   ├── TableCellStyle.php
│   │   │   │   ├── TableRows.php
│   │   │   │   ├── TableSeparator.php
│   │   │   │   └── TableStyle.php
│   │   │   ├── Input
│   │   │   │   ├── ArgvInput.php
│   │   │   │   ├── ArrayInput.php
│   │   │   │   ├── Input.php
│   │   │   │   ├── InputArgument.php
│   │   │   │   ├── InputAwareInterface.php
│   │   │   │   ├── InputDefinition.php
│   │   │   │   ├── InputInterface.php
│   │   │   │   ├── InputOption.php
│   │   │   │   ├── StreamableInputInterface.php
│   │   │   │   └── StringInput.php
│   │   │   ├── Logger
│   │   │   │   └── ConsoleLogger.php
│   │   │   ├── Messenger
│   │   │   │   ├── RunCommandContext.php
│   │   │   │   ├── RunCommandMessage.php
│   │   │   │   └── RunCommandMessageHandler.php
│   │   │   ├── Output
│   │   │   │   ├── AnsiColorMode.php
│   │   │   │   ├── BufferedOutput.php
│   │   │   │   ├── ConsoleOutput.php
│   │   │   │   ├── ConsoleOutputInterface.php
│   │   │   │   ├── ConsoleSectionOutput.php
│   │   │   │   ├── NullOutput.php
│   │   │   │   ├── Output.php
│   │   │   │   ├── OutputInterface.php
│   │   │   │   ├── StreamOutput.php
│   │   │   │   └── TrimmedBufferOutput.php
│   │   │   ├── Question
│   │   │   │   ├── ChoiceQuestion.php
│   │   │   │   ├── ConfirmationQuestion.php
│   │   │   │   └── Question.php
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   │   └── hiddeninput.exe
│   │   │   │   ├── completion.bash
│   │   │   │   ├── completion.fish
│   │   │   │   └── completion.zsh
│   │   │   ├── SignalRegistry
│   │   │   │   ├── SignalMap.php
│   │   │   │   └── SignalRegistry.php
│   │   │   ├── Style
│   │   │   │   ├── OutputStyle.php
│   │   │   │   ├── StyleInterface.php
│   │   │   │   └── SymfonyStyle.php
│   │   │   ├── Tester
│   │   │   │   ├── Constraint
│   │   │   │   │   └── CommandIsSuccessful.php
│   │   │   │   ├── ApplicationTester.php
│   │   │   │   ├── CommandCompletionTester.php
│   │   │   │   ├── CommandTester.php
│   │   │   │   └── TesterTrait.php
│   │   │   ├── Tests
│   │   │   │   ├── CI
│   │   │   │   │   └── GithubActionReporterTest.php
│   │   │   │   ├── Command
│   │   │   │   │   ├── CommandTest.php
│   │   │   │   │   ├── CompleteCommandTest.php
│   │   │   │   │   ├── DumpCompletionCommandTest.php
│   │   │   │   │   ├── HelpCommandTest.php
│   │   │   │   │   ├── ListCommandTest.php
│   │   │   │   │   ├── LockableTraitTest.php
│   │   │   │   │   └── SingleCommandApplicationTest.php
│   │   │   │   ├── CommandLoader
│   │   │   │   │   ├── ContainerCommandLoaderTest.php
│   │   │   │   │   └── FactoryCommandLoaderTest.php
│   │   │   │   ├── Completion
│   │   │   │   │   ├── Output
│   │   │   │   │   │   ├── BashCompletionOutputTest.php
│   │   │   │   │   │   ├── CompletionOutputTestCase.php
│   │   │   │   │   │   ├── FishCompletionOutputTest.php
│   │   │   │   │   │   └── ZshCompletionOutputTest.php
│   │   │   │   │   └── CompletionInputTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   └── AddConsoleCommandPassTest.php
│   │   │   │   ├── Descriptor
│   │   │   │   │   ├── AbstractDescriptorTestCase.php
│   │   │   │   │   ├── ApplicationDescriptionTest.php
│   │   │   │   │   ├── JsonDescriptorTest.php
│   │   │   │   │   ├── MarkdownDescriptorTest.php
│   │   │   │   │   ├── ObjectsProvider.php
│   │   │   │   │   ├── ReStructuredTextDescriptorTest.php
│   │   │   │   │   ├── TextDescriptorTest.php
│   │   │   │   │   └── XmlDescriptorTest.php
│   │   │   │   ├── EventListener
│   │   │   │   │   └── ErrorListenerTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── Style
│   │   │   │   │   │   └── SymfonyStyle
│   │   │   │   │   │       ├── command
│   │   │   │   │   │       │   ├── command_0.php
│   │   │   │   │   │       │   ├── command_1.php
│   │   │   │   │   │       │   ├── command_10.php
│   │   │   │   │   │       │   ├── command_11.php
│   │   │   │   │   │       │   ├── command_12.php
│   │   │   │   │   │       │   ├── command_13.php
│   │   │   │   │   │       │   ├── command_14.php
│   │   │   │   │   │       │   ├── command_15.php
│   │   │   │   │   │       │   ├── command_16.php
│   │   │   │   │   │       │   ├── command_17.php
│   │   │   │   │   │       │   ├── command_18.php
│   │   │   │   │   │       │   ├── command_19.php
│   │   │   │   │   │       │   ├── command_2.php
│   │   │   │   │   │       │   ├── command_20.php
│   │   │   │   │   │       │   ├── command_21.php
│   │   │   │   │   │       │   ├── command_22.php
│   │   │   │   │   │       │   ├── command_23.php
│   │   │   │   │   │       │   ├── command_3.php
│   │   │   │   │   │       │   ├── command_4_with_iterators.php
│   │   │   │   │   │       │   ├── command_4.php
│   │   │   │   │   │       │   ├── command_5.php
│   │   │   │   │   │       │   ├── command_6.php
│   │   │   │   │   │       │   ├── command_7.php
│   │   │   │   │   │       │   ├── command_8.php
│   │   │   │   │   │       │   ├── command_9.php
│   │   │   │   │   │       │   └── interactive_command_1.php
│   │   │   │   │   │       ├── output
│   │   │   │   │   │       │   ├── interactive_output_1.txt
│   │   │   │   │   │       │   ├── output_0.txt
│   │   │   │   │   │       │   ├── output_1.txt
│   │   │   │   │   │       │   ├── output_10.txt
│   │   │   │   │   │       │   ├── output_11.txt
│   │   │   │   │   │       │   ├── output_12.txt
│   │   │   │   │   │       │   ├── output_13.txt
│   │   │   │   │   │       │   ├── output_14.txt
│   │   │   │   │   │       │   ├── output_15.txt
│   │   │   │   │   │       │   ├── output_16.txt
│   │   │   │   │   │       │   ├── output_17.txt
│   │   │   │   │   │       │   ├── output_18.txt
│   │   │   │   │   │       │   ├── output_19.txt
│   │   │   │   │   │       │   ├── output_2.txt
│   │   │   │   │   │       │   ├── output_20.txt
│   │   │   │   │   │       │   ├── output_21.txt
│   │   │   │   │   │       │   ├── output_22.txt
│   │   │   │   │   │       │   ├── output_23.txt
│   │   │   │   │   │       │   ├── output_3.txt
│   │   │   │   │   │       │   ├── output_4_with_iterators.txt
│   │   │   │   │   │       │   ├── output_4.txt
│   │   │   │   │   │       │   ├── output_5.txt
│   │   │   │   │   │       │   ├── output_6.txt
│   │   │   │   │   │       │   ├── output_7.txt
│   │   │   │   │   │       │   ├── output_8.txt
│   │   │   │   │   │       │   └── output_9.txt
│   │   │   │   │   │       └── progress
│   │   │   │   │   │           ├── command_progress_iterate.php
│   │   │   │   │   │           ├── output_progress_iterate_no_shade.txt
│   │   │   │   │   │           └── output_progress_iterate_shade.txt
│   │   │   │   │   ├── application_1.json
│   │   │   │   │   ├── application_1.md
│   │   │   │   │   ├── application_1.rst
│   │   │   │   │   ├── application_1.txt
│   │   │   │   │   ├── application_1.xml
│   │   │   │   │   ├── application_2.json
│   │   │   │   │   ├── application_2.md
│   │   │   │   │   ├── application_2.rst
│   │   │   │   │   ├── application_2.txt
│   │   │   │   │   ├── application_2.xml
│   │   │   │   │   ├── application_filtered_namespace.txt
│   │   │   │   │   ├── application_gethelp.txt
│   │   │   │   │   ├── application_mbstring.md
│   │   │   │   │   ├── application_mbstring.rst
│   │   │   │   │   ├── application_mbstring.txt
│   │   │   │   │   ├── application_renderexception_doublewidth1.txt
│   │   │   │   │   ├── application_renderexception_doublewidth1decorated.txt
│   │   │   │   │   ├── application_renderexception_doublewidth2.txt
│   │   │   │   │   ├── application_renderexception_escapeslines.txt
│   │   │   │   │   ├── application_renderexception_linebreaks.txt
│   │   │   │   │   ├── application_renderexception1.txt
│   │   │   │   │   ├── application_renderexception2.txt
│   │   │   │   │   ├── application_renderexception3.txt
│   │   │   │   │   ├── application_renderexception3decorated.txt
│   │   │   │   │   ├── application_renderexception4.txt
│   │   │   │   │   ├── application_rendersynopsis_escapesline.txt
│   │   │   │   │   ├── application_run1.txt
│   │   │   │   │   ├── application_run2.txt
│   │   │   │   │   ├── application_run3.txt
│   │   │   │   │   ├── application_run4.txt
│   │   │   │   │   ├── application_run5.txt
│   │   │   │   │   ├── application_signalable.php
│   │   │   │   │   ├── application.dont_run_alternative_namespace_name.txt
│   │   │   │   │   ├── BarBucCommand.php
│   │   │   │   │   ├── BarHiddenCommand.php
│   │   │   │   │   ├── command_1.json
│   │   │   │   │   ├── command_1.md
│   │   │   │   │   ├── command_1.rst
│   │   │   │   │   ├── command_1.txt
│   │   │   │   │   ├── command_1.xml
│   │   │   │   │   ├── command_2.json
│   │   │   │   │   ├── command_2.md
│   │   │   │   │   ├── command_2.rst
│   │   │   │   │   ├── command_2.txt
│   │   │   │   │   ├── command_2.xml
│   │   │   │   │   ├── command_mbstring.md
│   │   │   │   │   ├── command_mbstring.rst
│   │   │   │   │   ├── command_mbstring.txt
│   │   │   │   │   ├── DescriptorApplication1.php
│   │   │   │   │   ├── DescriptorApplication2.php
│   │   │   │   │   ├── DescriptorApplicationMbString.php
│   │   │   │   │   ├── DescriptorCommand1.php
│   │   │   │   │   ├── DescriptorCommand2.php
│   │   │   │   │   ├── DescriptorCommand3.php
│   │   │   │   │   ├── DescriptorCommand4.php
│   │   │   │   │   ├── DescriptorCommandMbString.php
│   │   │   │   │   ├── DummyOutput.php
│   │   │   │   │   ├── Foo1Command.php
│   │   │   │   │   ├── Foo2Command.php
│   │   │   │   │   ├── Foo3Command.php
│   │   │   │   │   ├── Foo4Command.php
│   │   │   │   │   ├── Foo5Command.php
│   │   │   │   │   ├── Foo6Command.php
│   │   │   │   │   ├── FoobarCommand.php
│   │   │   │   │   ├── FooCommand.php
│   │   │   │   │   ├── FooHiddenCommand.php
│   │   │   │   │   ├── FooLock2Command.php
│   │   │   │   │   ├── FooLockCommand.php
│   │   │   │   │   ├── FooOptCommand.php
│   │   │   │   │   ├── FooSameCaseLowercaseCommand.php
│   │   │   │   │   ├── FooSameCaseUppercaseCommand.php
│   │   │   │   │   ├── FooSubnamespaced1Command.php
│   │   │   │   │   ├── FooSubnamespaced2Command.php
│   │   │   │   │   ├── FooWithoutAliasCommand.php
│   │   │   │   │   ├── input_argument_1.json
│   │   │   │   │   ├── input_argument_1.md
│   │   │   │   │   ├── input_argument_1.rst
│   │   │   │   │   ├── input_argument_1.txt
│   │   │   │   │   ├── input_argument_1.xml
│   │   │   │   │   ├── input_argument_2.json
│   │   │   │   │   ├── input_argument_2.md
│   │   │   │   │   ├── input_argument_2.rst
│   │   │   │   │   ├── input_argument_2.txt
│   │   │   │   │   ├── input_argument_2.xml
│   │   │   │   │   ├── input_argument_3.json
│   │   │   │   │   ├── input_argument_3.md
│   │   │   │   │   ├── input_argument_3.rst
│   │   │   │   │   ├── input_argument_3.txt
│   │   │   │   │   ├── input_argument_3.xml
│   │   │   │   │   ├── input_argument_4.json
│   │   │   │   │   ├── input_argument_4.md
│   │   │   │   │   ├── input_argument_4.rst
│   │   │   │   │   ├── input_argument_4.txt
│   │   │   │   │   ├── input_argument_4.xml
│   │   │   │   │   ├── input_argument_with_default_inf_value.json
│   │   │   │   │   ├── input_argument_with_default_inf_value.md
│   │   │   │   │   ├── input_argument_with_default_inf_value.rst
│   │   │   │   │   ├── input_argument_with_default_inf_value.txt
│   │   │   │   │   ├── input_argument_with_default_inf_value.xml
│   │   │   │   │   ├── input_argument_with_style.json
│   │   │   │   │   ├── input_argument_with_style.md
│   │   │   │   │   ├── input_argument_with_style.rst
│   │   │   │   │   ├── input_argument_with_style.txt
│   │   │   │   │   ├── input_argument_with_style.xml
│   │   │   │   │   ├── input_definition_1.json
│   │   │   │   │   ├── input_definition_1.md
│   │   │   │   │   ├── input_definition_1.rst
│   │   │   │   │   ├── input_definition_1.txt
│   │   │   │   │   ├── input_definition_1.xml
│   │   │   │   │   ├── input_definition_2.json
│   │   │   │   │   ├── input_definition_2.md
│   │   │   │   │   ├── input_definition_2.rst
│   │   │   │   │   ├── input_definition_2.txt
│   │   │   │   │   ├── input_definition_2.xml
│   │   │   │   │   ├── input_definition_3.json
│   │   │   │   │   ├── input_definition_3.md
│   │   │   │   │   ├── input_definition_3.rst
│   │   │   │   │   ├── input_definition_3.txt
│   │   │   │   │   ├── input_definition_3.xml
│   │   │   │   │   ├── input_definition_4.json
│   │   │   │   │   ├── input_definition_4.md
│   │   │   │   │   ├── input_definition_4.rst
│   │   │   │   │   ├── input_definition_4.txt
│   │   │   │   │   ├── input_definition_4.xml
│   │   │   │   │   ├── input_option_1.json
│   │   │   │   │   ├── input_option_1.md
│   │   │   │   │   ├── input_option_1.rst
│   │   │   │   │   ├── input_option_1.txt
│   │   │   │   │   ├── input_option_1.xml
│   │   │   │   │   ├── input_option_2.json
│   │   │   │   │   ├── input_option_2.md
│   │   │   │   │   ├── input_option_2.rst
│   │   │   │   │   ├── input_option_2.txt
│   │   │   │   │   ├── input_option_2.xml
│   │   │   │   │   ├── input_option_3.json
│   │   │   │   │   ├── input_option_3.md
│   │   │   │   │   ├── input_option_3.rst
│   │   │   │   │   ├── input_option_3.txt
│   │   │   │   │   ├── input_option_3.xml
│   │   │   │   │   ├── input_option_4.json
│   │   │   │   │   ├── input_option_4.md
│   │   │   │   │   ├── input_option_4.rst
│   │   │   │   │   ├── input_option_4.txt
│   │   │   │   │   ├── input_option_4.xml
│   │   │   │   │   ├── input_option_5.json
│   │   │   │   │   ├── input_option_5.md
│   │   │   │   │   ├── input_option_5.rst
│   │   │   │   │   ├── input_option_5.txt
│   │   │   │   │   ├── input_option_5.xml
│   │   │   │   │   ├── input_option_6.json
│   │   │   │   │   ├── input_option_6.md
│   │   │   │   │   ├── input_option_6.rst
│   │   │   │   │   ├── input_option_6.txt
│   │   │   │   │   ├── input_option_6.xml
│   │   │   │   │   ├── input_option_with_default_inf_value.json
│   │   │   │   │   ├── input_option_with_default_inf_value.md
│   │   │   │   │   ├── input_option_with_default_inf_value.rst
│   │   │   │   │   ├── input_option_with_default_inf_value.txt
│   │   │   │   │   ├── input_option_with_default_inf_value.xml
│   │   │   │   │   ├── input_option_with_style_array.json
│   │   │   │   │   ├── input_option_with_style_array.md
│   │   │   │   │   ├── input_option_with_style_array.rst
│   │   │   │   │   ├── input_option_with_style_array.txt
│   │   │   │   │   ├── input_option_with_style_array.xml
│   │   │   │   │   ├── input_option_with_style.json
│   │   │   │   │   ├── input_option_with_style.md
│   │   │   │   │   ├── input_option_with_style.rst
│   │   │   │   │   ├── input_option_with_style.txt
│   │   │   │   │   ├── input_option_with_style.xml
│   │   │   │   │   ├── MockableAppliationWithTerminalWidth.php
│   │   │   │   │   ├── stream_output_file.txt
│   │   │   │   │   ├── TestAmbiguousCommandRegistering.php
│   │   │   │   │   ├── TestAmbiguousCommandRegistering2.php
│   │   │   │   │   └── TestCommand.php
│   │   │   │   ├── Formatter
│   │   │   │   │   ├── NullOutputFormatterStyleTest.php
│   │   │   │   │   ├── NullOutputFormatterTest.php
│   │   │   │   │   ├── OutputFormatterStyleStackTest.php
│   │   │   │   │   ├── OutputFormatterStyleTest.php
│   │   │   │   │   └── OutputFormatterTest.php
│   │   │   │   ├── Helper
│   │   │   │   │   ├── AbstractQuestionHelperTestCase.php
│   │   │   │   │   ├── DescriptorHelperTest.php
│   │   │   │   │   ├── DumperNativeFallbackTest.php
│   │   │   │   │   ├── DumperTest.php
│   │   │   │   │   ├── FormatterHelperTest.php
│   │   │   │   │   ├── HelperSetTest.php
│   │   │   │   │   ├── HelperTest.php
│   │   │   │   │   ├── OutputWrapperTest.php
│   │   │   │   │   ├── ProcessHelperTest.php
│   │   │   │   │   ├── ProgressBarTest.php
│   │   │   │   │   ├── ProgressIndicatorTest.php
│   │   │   │   │   ├── QuestionHelperTest.php
│   │   │   │   │   ├── SymfonyQuestionHelperTest.php
│   │   │   │   │   ├── TableCellStyleTest.php
│   │   │   │   │   ├── TableStyleTest.php
│   │   │   │   │   └── TableTest.php
│   │   │   │   ├── Input
│   │   │   │   │   ├── ArgvInputTest.php
│   │   │   │   │   ├── ArrayInputTest.php
│   │   │   │   │   ├── InputArgumentTest.php
│   │   │   │   │   ├── InputDefinitionTest.php
│   │   │   │   │   ├── InputOptionTest.php
│   │   │   │   │   ├── InputTest.php
│   │   │   │   │   └── StringInputTest.php
│   │   │   │   ├── Logger
│   │   │   │   │   └── ConsoleLoggerTest.php
│   │   │   │   ├── Messenger
│   │   │   │   │   └── RunCommandMessageHandlerTest.php
│   │   │   │   ├── Output
│   │   │   │   │   ├── AnsiColorModeTest.php
│   │   │   │   │   ├── ConsoleOutputTest.php
│   │   │   │   │   ├── ConsoleSectionOutputTest.php
│   │   │   │   │   ├── NullOutputTest.php
│   │   │   │   │   ├── OutputTest.php
│   │   │   │   │   └── StreamOutputTest.php
│   │   │   │   ├── phpt
│   │   │   │   │   ├── signal
│   │   │   │   │   │   └── command_exit.phpt
│   │   │   │   │   ├── single_application
│   │   │   │   │   │   ├── arg.phpt
│   │   │   │   │   │   ├── default.phpt
│   │   │   │   │   │   ├── help_name.phpt
│   │   │   │   │   │   ├── version_default_name.phpt
│   │   │   │   │   │   └── version_name.phpt
│   │   │   │   │   └── uses_stdin_as_interactive_input.phpt
│   │   │   │   ├── Question
│   │   │   │   │   ├── ChoiceQuestionTest.php
│   │   │   │   │   ├── ConfirmationQuestionTest.php
│   │   │   │   │   └── QuestionTest.php
│   │   │   │   ├── SignalRegistry
│   │   │   │   │   ├── SignalMapTest.php
│   │   │   │   │   └── SignalRegistryTest.php
│   │   │   │   ├── Style
│   │   │   │   │   └── SymfonyStyleTest.php
│   │   │   │   ├── Tester
│   │   │   │   │   ├── Constraint
│   │   │   │   │   │   └── CommandIsSuccessfulTest.php
│   │   │   │   │   ├── ApplicationTesterTest.php
│   │   │   │   │   └── CommandTesterTest.php
│   │   │   │   ├── ApplicationTest.php
│   │   │   │   ├── ColorTest.php
│   │   │   │   ├── ConsoleEventsTest.php
│   │   │   │   ├── CursorTest.php
│   │   │   │   └── TerminalTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── Application.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Color.php
│   │   │   ├── composer.json
│   │   │   ├── ConsoleEvents.php
│   │   │   ├── Cursor.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── SingleCommandApplication.php
│   │   │   └── Terminal.php
│   │   ├── dependency-injection
│   │   │   ├── Argument
│   │   │   │   ├── AbstractArgument.php
│   │   │   │   ├── ArgumentInterface.php
│   │   │   │   ├── BoundArgument.php
│   │   │   │   ├── IteratorArgument.php
│   │   │   │   ├── LazyClosure.php
│   │   │   │   ├── RewindableGenerator.php
│   │   │   │   ├── ServiceClosureArgument.php
│   │   │   │   ├── ServiceLocator.php
│   │   │   │   ├── ServiceLocatorArgument.php
│   │   │   │   └── TaggedIteratorArgument.php
│   │   │   ├── Attribute
│   │   │   │   ├── AsAlias.php
│   │   │   │   ├── AsDecorator.php
│   │   │   │   ├── AsTaggedItem.php
│   │   │   │   ├── Autoconfigure.php
│   │   │   │   ├── AutoconfigureTag.php
│   │   │   │   ├── Autowire.php
│   │   │   │   ├── AutowireCallable.php
│   │   │   │   ├── AutowireDecorated.php
│   │   │   │   ├── AutowireIterator.php
│   │   │   │   ├── AutowireLocator.php
│   │   │   │   ├── AutowireServiceClosure.php
│   │   │   │   ├── Exclude.php
│   │   │   │   ├── TaggedIterator.php
│   │   │   │   ├── TaggedLocator.php
│   │   │   │   ├── Target.php
│   │   │   │   └── When.php
│   │   │   ├── Compiler
│   │   │   │   ├── AbstractRecursivePass.php
│   │   │   │   ├── AliasDeprecatedPublicServicesPass.php
│   │   │   │   ├── AnalyzeServiceReferencesPass.php
│   │   │   │   ├── AttributeAutoconfigurationPass.php
│   │   │   │   ├── AutoAliasServicePass.php
│   │   │   │   ├── AutowireAsDecoratorPass.php
│   │   │   │   ├── AutowirePass.php
│   │   │   │   ├── AutowireRequiredMethodsPass.php
│   │   │   │   ├── AutowireRequiredPropertiesPass.php
│   │   │   │   ├── CheckArgumentsValidityPass.php
│   │   │   │   ├── CheckCircularReferencesPass.php
│   │   │   │   ├── CheckDefinitionValidityPass.php
│   │   │   │   ├── CheckExceptionOnInvalidReferenceBehaviorPass.php
│   │   │   │   ├── CheckReferenceValidityPass.php
│   │   │   │   ├── CheckTypeDeclarationsPass.php
│   │   │   │   ├── Compiler.php
│   │   │   │   ├── CompilerPassInterface.php
│   │   │   │   ├── DecoratorServicePass.php
│   │   │   │   ├── DefinitionErrorExceptionPass.php
│   │   │   │   ├── ExtensionCompilerPass.php
│   │   │   │   ├── InlineServiceDefinitionsPass.php
│   │   │   │   ├── MergeExtensionConfigurationPass.php
│   │   │   │   ├── PassConfig.php
│   │   │   │   ├── PriorityTaggedServiceTrait.php
│   │   │   │   ├── RegisterAutoconfigureAttributesPass.php
│   │   │   │   ├── RegisterEnvVarProcessorsPass.php
│   │   │   │   ├── RegisterReverseContainerPass.php
│   │   │   │   ├── RegisterServiceSubscribersPass.php
│   │   │   │   ├── RemoveAbstractDefinitionsPass.php
│   │   │   │   ├── RemoveBuildParametersPass.php
│   │   │   │   ├── RemovePrivateAliasesPass.php
│   │   │   │   ├── RemoveUnusedDefinitionsPass.php
│   │   │   │   ├── ReplaceAliasByActualDefinitionPass.php
│   │   │   │   ├── ResolveBindingsPass.php
│   │   │   │   ├── ResolveChildDefinitionsPass.php
│   │   │   │   ├── ResolveClassPass.php
│   │   │   │   ├── ResolveDecoratorStackPass.php
│   │   │   │   ├── ResolveEnvPlaceholdersPass.php
│   │   │   │   ├── ResolveFactoryClassPass.php
│   │   │   │   ├── ResolveHotPathPass.php
│   │   │   │   ├── ResolveInstanceofConditionalsPass.php
│   │   │   │   ├── ResolveInvalidReferencesPass.php
│   │   │   │   ├── ResolveNamedArgumentsPass.php
│   │   │   │   ├── ResolveNoPreloadPass.php
│   │   │   │   ├── ResolveParameterPlaceHoldersPass.php
│   │   │   │   ├── ResolveReferencesToAliasesPass.php
│   │   │   │   ├── ResolveServiceSubscribersPass.php
│   │   │   │   ├── ResolveTaggedIteratorArgumentPass.php
│   │   │   │   ├── ServiceLocatorTagPass.php
│   │   │   │   ├── ServiceReferenceGraph.php
│   │   │   │   ├── ServiceReferenceGraphEdge.php
│   │   │   │   ├── ServiceReferenceGraphNode.php
│   │   │   │   └── ValidateEnvPlaceholdersPass.php
│   │   │   ├── Config
│   │   │   │   ├── ContainerParametersResource.php
│   │   │   │   └── ContainerParametersResourceChecker.php
│   │   │   ├── Dumper
│   │   │   │   ├── Dumper.php
│   │   │   │   ├── DumperInterface.php
│   │   │   │   ├── GraphvizDumper.php
│   │   │   │   ├── PhpDumper.php
│   │   │   │   ├── Preloader.php
│   │   │   │   ├── XmlDumper.php
│   │   │   │   └── YamlDumper.php
│   │   │   ├── Exception
│   │   │   │   ├── AutowiringFailedException.php
│   │   │   │   ├── BadMethodCallException.php
│   │   │   │   ├── EnvNotFoundException.php
│   │   │   │   ├── EnvParameterException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidParameterTypeException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── OutOfBoundsException.php
│   │   │   │   ├── ParameterCircularReferenceException.php
│   │   │   │   ├── ParameterNotFoundException.php
│   │   │   │   ├── RuntimeException.php
│   │   │   │   ├── ServiceCircularReferenceException.php
│   │   │   │   └── ServiceNotFoundException.php
│   │   │   ├── Extension
│   │   │   │   ├── AbstractExtension.php
│   │   │   │   ├── ConfigurableExtensionInterface.php
│   │   │   │   ├── ConfigurationExtensionInterface.php
│   │   │   │   ├── Extension.php
│   │   │   │   ├── ExtensionInterface.php
│   │   │   │   ├── ExtensionTrait.php
│   │   │   │   └── PrependExtensionInterface.php
│   │   │   ├── LazyProxy
│   │   │   │   ├── Instantiator
│   │   │   │   │   ├── InstantiatorInterface.php
│   │   │   │   │   ├── LazyServiceInstantiator.php
│   │   │   │   │   └── RealServiceInstantiator.php
│   │   │   │   └── PhpDumper
│   │   │   │       ├── DumperInterface.php
│   │   │   │       ├── LazyServiceDumper.php
│   │   │   │       └── NullDumper.php
│   │   │   ├── Loader
│   │   │   │   ├── Configurator
│   │   │   │   │   ├── Traits
│   │   │   │   │   │   ├── AbstractTrait.php
│   │   │   │   │   │   ├── ArgumentTrait.php
│   │   │   │   │   │   ├── AutoconfigureTrait.php
│   │   │   │   │   │   ├── AutowireTrait.php
│   │   │   │   │   │   ├── BindTrait.php
│   │   │   │   │   │   ├── CallTrait.php
│   │   │   │   │   │   ├── ClassTrait.php
│   │   │   │   │   │   ├── ConfiguratorTrait.php
│   │   │   │   │   │   ├── ConstructorTrait.php
│   │   │   │   │   │   ├── DecorateTrait.php
│   │   │   │   │   │   ├── DeprecateTrait.php
│   │   │   │   │   │   ├── FactoryTrait.php
│   │   │   │   │   │   ├── FileTrait.php
│   │   │   │   │   │   ├── FromCallableTrait.php
│   │   │   │   │   │   ├── LazyTrait.php
│   │   │   │   │   │   ├── ParentTrait.php
│   │   │   │   │   │   ├── PropertyTrait.php
│   │   │   │   │   │   ├── PublicTrait.php
│   │   │   │   │   │   ├── ShareTrait.php
│   │   │   │   │   │   ├── SyntheticTrait.php
│   │   │   │   │   │   └── TagTrait.php
│   │   │   │   │   ├── AbstractConfigurator.php
│   │   │   │   │   ├── AbstractServiceConfigurator.php
│   │   │   │   │   ├── AliasConfigurator.php
│   │   │   │   │   ├── ClosureReferenceConfigurator.php
│   │   │   │   │   ├── ContainerConfigurator.php
│   │   │   │   │   ├── DefaultsConfigurator.php
│   │   │   │   │   ├── EnvConfigurator.php
│   │   │   │   │   ├── FromCallableConfigurator.php
│   │   │   │   │   ├── InlineServiceConfigurator.php
│   │   │   │   │   ├── InstanceofConfigurator.php
│   │   │   │   │   ├── ParametersConfigurator.php
│   │   │   │   │   ├── PrototypeConfigurator.php
│   │   │   │   │   ├── ReferenceConfigurator.php
│   │   │   │   │   ├── ServiceConfigurator.php
│   │   │   │   │   └── ServicesConfigurator.php
│   │   │   │   ├── schema
│   │   │   │   │   └── dic
│   │   │   │   │       └── services
│   │   │   │   │           └── services-1.0.xsd
│   │   │   │   ├── ClosureLoader.php
│   │   │   │   ├── DirectoryLoader.php
│   │   │   │   ├── FileLoader.php
│   │   │   │   ├── GlobFileLoader.php
│   │   │   │   ├── IniFileLoader.php
│   │   │   │   ├── PhpFileLoader.php
│   │   │   │   ├── XmlFileLoader.php
│   │   │   │   └── YamlFileLoader.php
│   │   │   ├── ParameterBag
│   │   │   │   ├── ContainerBag.php
│   │   │   │   ├── ContainerBagInterface.php
│   │   │   │   ├── EnvPlaceholderParameterBag.php
│   │   │   │   ├── FrozenParameterBag.php
│   │   │   │   ├── ParameterBag.php
│   │   │   │   └── ParameterBagInterface.php
│   │   │   ├── Tests
│   │   │   │   ├── Argument
│   │   │   │   │   ├── AbstractArgumentTest.php
│   │   │   │   │   ├── RewindableGeneratorTest.php
│   │   │   │   │   └── TaggedIteratorArgumentTest.php
│   │   │   │   ├── Attribute
│   │   │   │   │   ├── AutowireCallableTest.php
│   │   │   │   │   ├── AutowireLocatorTest.php
│   │   │   │   │   └── AutowireTest.php
│   │   │   │   ├── Compiler
│   │   │   │   │   ├── AbstractRecursivePassTest.php
│   │   │   │   │   ├── AliasDeprecatedPublicServicesPassTest.php
│   │   │   │   │   ├── AnalyzeServiceReferencesPassTest.php
│   │   │   │   │   ├── AttributeAutoconfigurationPassTest.php
│   │   │   │   │   ├── AutoAliasServicePassTest.php
│   │   │   │   │   ├── AutowirePassTest.php
│   │   │   │   │   ├── AutowireRequiredMethodsPassTest.php
│   │   │   │   │   ├── AutowireRequiredPropertiesPassTest.php
│   │   │   │   │   ├── CheckArgumentsValidityPassTest.php
│   │   │   │   │   ├── CheckCircularReferencesPassTest.php
│   │   │   │   │   ├── CheckDefinitionValidityPassTest.php
│   │   │   │   │   ├── CheckExceptionOnInvalidReferenceBehaviorPassTest.php
│   │   │   │   │   ├── CheckReferenceValidityPassTest.php
│   │   │   │   │   ├── CheckTypeDeclarationsPassTest.php
│   │   │   │   │   ├── CustomExpressionLanguageFunctionTest.php
│   │   │   │   │   ├── DecoratorServicePassTest.php
│   │   │   │   │   ├── DefinitionErrorExceptionPassTest.php
│   │   │   │   │   ├── ExtensionCompilerPassTest.php
│   │   │   │   │   ├── InlineServiceDefinitionsPassTest.php
│   │   │   │   │   ├── IntegrationTest.php
│   │   │   │   │   ├── MergeExtensionConfigurationPassTest.php
│   │   │   │   │   ├── OptionalServiceClass.php
│   │   │   │   │   ├── PassConfigTest.php
│   │   │   │   │   ├── PriorityTaggedServiceTraitTest.php
│   │   │   │   │   ├── RegisterAutoconfigureAttributesPassTest.php
│   │   │   │   │   ├── RegisterEnvVarProcessorsPassTest.php
│   │   │   │   │   ├── RegisterReverseContainerPassTest.php
│   │   │   │   │   ├── RegisterServiceSubscribersPassTest.php
│   │   │   │   │   ├── RemoveBuildParametersPassTest.php
│   │   │   │   │   ├── RemoveUnusedDefinitionsPassTest.php
│   │   │   │   │   ├── ReplaceAliasByActualDefinitionPassTest.php
│   │   │   │   │   ├── ResolveBindingsPassTest.php
│   │   │   │   │   ├── ResolveChildDefinitionsPassTest.php
│   │   │   │   │   ├── ResolveClassPassTest.php
│   │   │   │   │   ├── ResolveFactoryClassPassTest.php
│   │   │   │   │   ├── ResolveHotPathPassTest.php
│   │   │   │   │   ├── ResolveInstanceofConditionalsPassTest.php
│   │   │   │   │   ├── ResolveInvalidReferencesPassTest.php
│   │   │   │   │   ├── ResolveNamedArgumentsPassTest.php
│   │   │   │   │   ├── ResolveNoPreloadPassTest.php
│   │   │   │   │   ├── ResolveParameterPlaceHoldersPassTest.php
│   │   │   │   │   ├── ResolveReferencesToAliasesPassTest.php
│   │   │   │   │   ├── ResolveTaggedIteratorArgumentPassTest.php
│   │   │   │   │   ├── ServiceLocatorTagPassTest.php
│   │   │   │   │   └── ValidateEnvPlaceholdersPassTest.php
│   │   │   │   ├── Config
│   │   │   │   │   ├── ContainerParametersResourceCheckerTest.php
│   │   │   │   │   └── ContainerParametersResourceTest.php
│   │   │   │   ├── Dumper
│   │   │   │   │   ├── GraphvizDumperTest.php
│   │   │   │   │   ├── PhpDumperTest.php
│   │   │   │   │   ├── PreloaderTest.php
│   │   │   │   │   ├── XmlDumperTest.php
│   │   │   │   │   └── YamlDumperTest.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── AutowiringFailedExceptionTest.php
│   │   │   │   │   └── InvalidParameterTypeExceptionTest.php
│   │   │   │   ├── Extension
│   │   │   │   │   ├── AbstractExtensionTest.php
│   │   │   │   │   └── ExtensionTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── AcmeConfig
│   │   │   │   │   │   └── NestedConfig.php
│   │   │   │   │   ├── Attribute
│   │   │   │   │   │   ├── CustomAnyAttribute.php
│   │   │   │   │   │   ├── CustomAutoconfiguration.php
│   │   │   │   │   │   ├── CustomMethodAttribute.php
│   │   │   │   │   │   ├── CustomParameterAttribute.php
│   │   │   │   │   │   └── CustomPropertyAttribute.php
│   │   │   │   │   ├── CheckTypeDeclarationsPass
│   │   │   │   │   │   ├── Bar.php
│   │   │   │   │   │   ├── BarErroredDependency.php
│   │   │   │   │   │   ├── BarMethodCall.php
│   │   │   │   │   │   ├── BarOptionalArgument.php
│   │   │   │   │   │   ├── BarOptionalArgumentNotNull.php
│   │   │   │   │   │   ├── Deprecated.php
│   │   │   │   │   │   ├── Foo.php
│   │   │   │   │   │   ├── FooObject.php
│   │   │   │   │   │   ├── IntersectionConstructor.php
│   │   │   │   │   │   ├── UnionConstructor.php
│   │   │   │   │   │   ├── UnionConstructorPHP82.php
│   │   │   │   │   │   ├── Waldo.php
│   │   │   │   │   │   ├── WaldoFoo.php
│   │   │   │   │   │   ├── WaldoInterface.php
│   │   │   │   │   │   └── Wobble.php
│   │   │   │   │   ├── config
│   │   │   │   │   │   ├── definition
│   │   │   │   │   │   │   ├── multiple
│   │   │   │   │   │   │   │   ├── bar.php
│   │   │   │   │   │   │   │   └── baz.php
│   │   │   │   │   │   │   └── foo.php
│   │   │   │   │   │   ├── anonymous.expected.yml
│   │   │   │   │   │   ├── anonymous.php
│   │   │   │   │   │   ├── basic.expected.yml
│   │   │   │   │   │   ├── basic.php
│   │   │   │   │   │   ├── child.expected.yml
│   │   │   │   │   │   ├── child.php
│   │   │   │   │   │   ├── closure.expected.yml
│   │   │   │   │   │   ├── closure.php
│   │   │   │   │   │   ├── config_builder.expected.yml
│   │   │   │   │   │   ├── config_builder.php
│   │   │   │   │   │   ├── defaults.expected.yml
│   │   │   │   │   │   ├── defaults.php
│   │   │   │   │   │   ├── env_configurator.php
│   │   │   │   │   │   ├── env_param.expected.yml
│   │   │   │   │   │   ├── env_param.php
│   │   │   │   │   │   ├── expression_factory.expected.yml
│   │   │   │   │   │   ├── expression_factory.php
│   │   │   │   │   │   ├── factory_short_notation.php
│   │   │   │   │   │   ├── from_callable.expected.yml
│   │   │   │   │   │   ├── from_callable.php
│   │   │   │   │   │   ├── inline_binding.expected.yml
│   │   │   │   │   │   ├── inline_binding.php
│   │   │   │   │   │   ├── inline_static_constructor.expected.yml
│   │   │   │   │   │   ├── inline_static_constructor.php
│   │   │   │   │   │   ├── instanceof_static_constructor.expected.yml
│   │   │   │   │   │   ├── instanceof_static_constructor.php
│   │   │   │   │   │   ├── instanceof.expected.yml
│   │   │   │   │   │   ├── instanceof.php
│   │   │   │   │   │   ├── lazy_fqcn.expected.yml
│   │   │   │   │   │   ├── lazy_fqcn.php
│   │   │   │   │   │   ├── nested_bundle_config.php
│   │   │   │   │   │   ├── object.expected.yml
│   │   │   │   │   │   ├── object.php
│   │   │   │   │   │   ├── php7.expected.yml
│   │   │   │   │   │   ├── php7.php
│   │   │   │   │   │   ├── prototype_array.expected.yml
│   │   │   │   │   │   ├── prototype_array.php
│   │   │   │   │   │   ├── prototype.expected.yml
│   │   │   │   │   │   ├── prototype.php
│   │   │   │   │   │   ├── remove.expected.yml
│   │   │   │   │   │   ├── remove.php
│   │   │   │   │   │   ├── services_autoconfigure_with_parent.php
│   │   │   │   │   │   ├── services_closure_argument.php
│   │   │   │   │   │   ├── services_with_enumeration.php
│   │   │   │   │   │   ├── services_with_service_locator_argument.php
│   │   │   │   │   │   ├── services.php
│   │   │   │   │   │   ├── services9.php
│   │   │   │   │   │   ├── stack.php
│   │   │   │   │   │   ├── static_constructor.expected.yml
│   │   │   │   │   │   ├── static_constructor.php
│   │   │   │   │   │   └── when_env.php
│   │   │   │   │   ├── Container
│   │   │   │   │   │   ├── ConstructorWithMandatoryArgumentsContainer.php
│   │   │   │   │   │   ├── ConstructorWithOptionalArgumentsContainer.php
│   │   │   │   │   │   ├── ConstructorWithoutArgumentsContainer.php
│   │   │   │   │   │   └── NoConstructorContainer.php
│   │   │   │   │   ├── containers
│   │   │   │   │   │   ├── container_abstract.php
│   │   │   │   │   │   ├── container_almost_circular.php
│   │   │   │   │   │   ├── container_deprecated_parameters.php
│   │   │   │   │   │   ├── container_env_in_id.php
│   │   │   │   │   │   ├── container_inline_requires.php
│   │   │   │   │   │   ├── container_non_scalar_tags.php
│   │   │   │   │   │   ├── container_service_locator_argument.php
│   │   │   │   │   │   ├── container_uninitialized_ref.php
│   │   │   │   │   │   ├── container10.php
│   │   │   │   │   │   ├── container11.php
│   │   │   │   │   │   ├── container12.php
│   │   │   │   │   │   ├── container13.php
│   │   │   │   │   │   ├── container14.php
│   │   │   │   │   │   ├── container15.php
│   │   │   │   │   │   ├── container16.php
│   │   │   │   │   │   ├── container17.php
│   │   │   │   │   │   ├── container19.php
│   │   │   │   │   │   ├── container21.php
│   │   │   │   │   │   ├── container24.php
│   │   │   │   │   │   ├── container33.php
│   │   │   │   │   │   ├── container34.php
│   │   │   │   │   │   ├── container8.php
│   │   │   │   │   │   ├── container9.php
│   │   │   │   │   │   └── CustomContainer.php
│   │   │   │   │   ├── directory
│   │   │   │   │   │   ├── import
│   │   │   │   │   │   │   └── import.yml
│   │   │   │   │   │   ├── recurse
│   │   │   │   │   │   │   ├── simple.ini
│   │   │   │   │   │   │   └── simple.yml
│   │   │   │   │   │   └── simple.php
│   │   │   │   │   ├── Extension
│   │   │   │   │   │   ├── InvalidConfig
│   │   │   │   │   │   │   ├── Configuration.php
│   │   │   │   │   │   │   └── InvalidConfigExtension.php
│   │   │   │   │   │   ├── SemiValidConfig
│   │   │   │   │   │   │   ├── Configuration.php
│   │   │   │   │   │   │   └── SemiValidConfigExtension.php
│   │   │   │   │   │   └── ValidConfig
│   │   │   │   │   │       ├── Configuration.php
│   │   │   │   │   │       └── ValidConfigExtension.php
│   │   │   │   │   ├── graphviz
│   │   │   │   │   │   ├── services_inline.dot
│   │   │   │   │   │   ├── services1.dot
│   │   │   │   │   │   ├── services10-1.dot
│   │   │   │   │   │   ├── services10.dot
│   │   │   │   │   │   ├── services13.dot
│   │   │   │   │   │   ├── services14.dot
│   │   │   │   │   │   ├── services17.dot
│   │   │   │   │   │   ├── services18.dot
│   │   │   │   │   │   └── services9.dot
│   │   │   │   │   ├── includes
│   │   │   │   │   │   ├── HotPath
│   │   │   │   │   │   │   ├── C1.php
│   │   │   │   │   │   │   ├── C2.php
│   │   │   │   │   │   │   ├── C3.php
│   │   │   │   │   │   │   ├── I1.php
│   │   │   │   │   │   │   ├── P1.php
│   │   │   │   │   │   │   └── T1.php
│   │   │   │   │   │   ├── schema
│   │   │   │   │   │   │   └── project-1.0.xsd
│   │   │   │   │   │   ├── AcmeExtension.php
│   │   │   │   │   │   ├── autowiring_classes_80.php
│   │   │   │   │   │   ├── autowiring_classes.php
│   │   │   │   │   │   ├── classes.php
│   │   │   │   │   │   ├── compositetype_classes.php
│   │   │   │   │   │   ├── createphar.php
│   │   │   │   │   │   ├── foo_lazy.php
│   │   │   │   │   │   ├── foo.php
│   │   │   │   │   │   ├── FooVariadic.php
│   │   │   │   │   │   ├── intersectiontype_classes.php
│   │   │   │   │   │   ├── MultipleArgumentsOptionalScalarNotReallyOptional.php
│   │   │   │   │   │   ├── ProjectExtension.php
│   │   │   │   │   │   ├── ProjectWithXsdExtension.php
│   │   │   │   │   │   ├── ProjectWithXsdExtensionInPhar.phar
│   │   │   │   │   │   └── uniontype_classes.php
│   │   │   │   │   ├── ini
│   │   │   │   │   │   ├── almostvalid.ini
│   │   │   │   │   │   ├── ini_with_wrong_ext.xml
│   │   │   │   │   │   ├── nonvalid.ini
│   │   │   │   │   │   ├── parameters.ini
│   │   │   │   │   │   ├── parameters1.ini
│   │   │   │   │   │   ├── parameters2.ini
│   │   │   │   │   │   ├── types.ini
│   │   │   │   │   │   └── when-env.ini
│   │   │   │   │   ├── php
│   │   │   │   │   │   ├── autowire_closure.php
│   │   │   │   │   │   ├── callable_adapter_consumer.php
│   │   │   │   │   │   ├── closure_proxy.php
│   │   │   │   │   │   ├── closure.php
│   │   │   │   │   │   ├── custom_container_class_constructor_without_arguments.php
│   │   │   │   │   │   ├── custom_container_class_with_mandatory_constructor_arguments.php
│   │   │   │   │   │   ├── custom_container_class_with_optional_constructor_arguments.php
│   │   │   │   │   │   ├── custom_container_class_without_constructor.php
│   │   │   │   │   │   ├── lazy_autowire_attribute_with_intersection.php
│   │   │   │   │   │   ├── lazy_autowire_attribute.php
│   │   │   │   │   │   ├── lazy_closure.php
│   │   │   │   │   │   ├── php_with_wrong_ext.yml
│   │   │   │   │   │   ├── return_foo_string.php
│   │   │   │   │   │   ├── services_adawson.php
│   │   │   │   │   │   ├── services_almost_circular_private.php
│   │   │   │   │   │   ├── services_almost_circular_public.php
│   │   │   │   │   │   ├── services_array_params.php
│   │   │   │   │   │   ├── services_base64_env.php
│   │   │   │   │   │   ├── services_closure_argument_compiled.php
│   │   │   │   │   │   ├── services_csv_env.php
│   │   │   │   │   │   ├── services_current_factory_inlining.php
│   │   │   │   │   │   ├── services_dedup_lazy.php
│   │   │   │   │   │   ├── services_deep_graph.php
│   │   │   │   │   │   ├── services_default_env.php
│   │   │   │   │   │   ├── services_deprecated_parameters_as_files.txt
│   │   │   │   │   │   ├── services_deprecated_parameters.php
│   │   │   │   │   │   ├── services_env_in_id.php
│   │   │   │   │   │   ├── services_errored_definition.php
│   │   │   │   │   │   ├── services_inline_requires.php
│   │   │   │   │   │   ├── services_inline_self_ref.php
│   │   │   │   │   │   ├── services_json_env.php
│   │   │   │   │   │   ├── services_locator.php
│   │   │   │   │   │   ├── services_new_in_initializer.php
│   │   │   │   │   │   ├── services_non_shared_duplicates.php
│   │   │   │   │   │   ├── services_non_shared_lazy_as_files.txt
│   │   │   │   │   │   ├── services_non_shared_lazy_ghost.php
│   │   │   │   │   │   ├── services_non_shared_lazy_public.php
│   │   │   │   │   │   ├── services_non_shared_lazy.php
│   │   │   │   │   │   ├── services_private_frozen.php
│   │   │   │   │   │   ├── services_private_in_expression.php
│   │   │   │   │   │   ├── services_query_string_env.php
│   │   │   │   │   │   ├── services_rot13_env.php
│   │   │   │   │   │   ├── services_service_locator_argument.php
│   │   │   │   │   │   ├── services_subscriber.php
│   │   │   │   │   │   ├── services_tsantos.php
│   │   │   │   │   │   ├── services_uninitialized_ref.php
│   │   │   │   │   │   ├── services_unsupported_characters.php
│   │   │   │   │   │   ├── services_url_env.php
│   │   │   │   │   │   ├── services_wither_annotation.php
│   │   │   │   │   │   ├── services_wither_lazy_non_shared.php
│   │   │   │   │   │   ├── services_wither_lazy.php
│   │   │   │   │   │   ├── services_wither_staticreturntype.php
│   │   │   │   │   │   ├── services_wither.php
│   │   │   │   │   │   ├── services1-1.php
│   │   │   │   │   │   ├── services1.php
│   │   │   │   │   │   ├── services10_as_files.txt
│   │   │   │   │   │   ├── services10.php
│   │   │   │   │   │   ├── services12.php
│   │   │   │   │   │   ├── services13.php
│   │   │   │   │   │   ├── services19.php
│   │   │   │   │   │   ├── services24.php
│   │   │   │   │   │   ├── services26.php
│   │   │   │   │   │   ├── services33.php
│   │   │   │   │   │   ├── services8.php
│   │   │   │   │   │   ├── services9_as_files.txt
│   │   │   │   │   │   ├── services9_compiled.php
│   │   │   │   │   │   ├── services9_inlined_factories_with_tagged_iterrator.txt
│   │   │   │   │   │   ├── services9_inlined_factories.txt
│   │   │   │   │   │   ├── services9_lazy_inlined_factories.txt
│   │   │   │   │   │   ├── simple.php
│   │   │   │   │   │   └── static_constructor.php
│   │   │   │   │   ├── Preload
│   │   │   │   │   │   ├── A.php
│   │   │   │   │   │   ├── B.php
│   │   │   │   │   │   ├── C.php
│   │   │   │   │   │   ├── D.php
│   │   │   │   │   │   ├── Dummy.php
│   │   │   │   │   │   ├── DummyWithInterface.php
│   │   │   │   │   │   ├── E.php
│   │   │   │   │   │   ├── F.php
│   │   │   │   │   │   ├── G.php
│   │   │   │   │   │   ├── IntersectionDummy.php
│   │   │   │   │   │   └── UnionDummy.php
│   │   │   │   │   ├── Prototype
│   │   │   │   │   │   ├── BadClasses
│   │   │   │   │   │   │   └── MissingParent.php
│   │   │   │   │   │   ├── OtherDir
│   │   │   │   │   │   │   ├── AnotherSub
│   │   │   │   │   │   │   │   └── DeeperBaz.php
│   │   │   │   │   │   │   ├── Component1
│   │   │   │   │   │   │   │   ├── Dir1
│   │   │   │   │   │   │   │   │   └── Service1.php
│   │   │   │   │   │   │   │   └── Dir2
│   │   │   │   │   │   │   │       └── Service2.php
│   │   │   │   │   │   │   ├── Component2
│   │   │   │   │   │   │   │   ├── Dir1
│   │   │   │   │   │   │   │   │   └── Service4.php
│   │   │   │   │   │   │   │   └── Dir2
│   │   │   │   │   │   │   │       └── Service5.php
│   │   │   │   │   │   │   └── Baz.php
│   │   │   │   │   │   ├── SinglyImplementedInterface
│   │   │   │   │   │   │   ├── Adapter
│   │   │   │   │   │   │   │   └── Adapter.php
│   │   │   │   │   │   │   ├── AnotherAdapter
│   │   │   │   │   │   │   │   └── Adapter.php
│   │   │   │   │   │   │   └── Port
│   │   │   │   │   │   │       └── PortInterface.php
│   │   │   │   │   │   ├── StaticConstructor
│   │   │   │   │   │   │   ├── PrototypeStaticConstructor.php
│   │   │   │   │   │   │   ├── PrototypeStaticConstructorAsArgument.php
│   │   │   │   │   │   │   └── PrototypeStaticConstructorInterface.php
│   │   │   │   │   │   ├── Sub
│   │   │   │   │   │   │   ├── Bar.php
│   │   │   │   │   │   │   └── BarInterface.php
│   │   │   │   │   │   ├── Foo.php
│   │   │   │   │   │   └── FooInterface.php
│   │   │   │   │   ├── PrototypeAsAlias
│   │   │   │   │   │   ├── AliasBarInterface.php
│   │   │   │   │   │   ├── AliasFooInterface.php
│   │   │   │   │   │   ├── WithAsAlias.php
│   │   │   │   │   │   ├── WithAsAliasDuplicate.php
│   │   │   │   │   │   ├── WithAsAliasIdMultipleInterface.php
│   │   │   │   │   │   ├── WithAsAliasInterface.php
│   │   │   │   │   │   ├── WithAsAliasMultiple.php
│   │   │   │   │   │   └── WithAsAliasMultipleInterface.php
│   │   │   │   │   ├── Utils
│   │   │   │   │   │   └── NotAService.php
│   │   │   │   │   ├── xml
│   │   │   │   │   │   ├── extension1
│   │   │   │   │   │   │   └── services.xml
│   │   │   │   │   │   ├── extension2
│   │   │   │   │   │   │   └── services.xml
│   │   │   │   │   │   ├── extensions
│   │   │   │   │   │   │   ├── services1.xml
│   │   │   │   │   │   │   ├── services2.xml
│   │   │   │   │   │   │   ├── services3.xml
│   │   │   │   │   │   │   ├── services4.xml
│   │   │   │   │   │   │   ├── services5.xml
│   │   │   │   │   │   │   ├── services6.xml
│   │   │   │   │   │   │   └── services7.xml
│   │   │   │   │   │   ├── bindings_and_inner_collections.xml
│   │   │   │   │   │   ├── class_from_id.xml
│   │   │   │   │   │   ├── closure.xml
│   │   │   │   │   │   ├── defaults_bindings.xml
│   │   │   │   │   │   ├── defaults_bindings2.xml
│   │   │   │   │   │   ├── deprecated_alias_definitions.xml
│   │   │   │   │   │   ├── from_callable.xml
│   │   │   │   │   │   ├── invalid_alias_definition.xml
│   │   │   │   │   │   ├── namespaces.xml
│   │   │   │   │   │   ├── nested_service_without_id.xml
│   │   │   │   │   │   ├── nonvalid.xml
│   │   │   │   │   │   ├── not_singly_implemented_interface_in_multiple_resources_with_previously_registered_alias.xml
│   │   │   │   │   │   ├── not_singly_implemented_interface_in_multiple_resources_with_previously_registered_alias2.xml
│   │   │   │   │   │   ├── not_singly_implemented_interface_in_multiple_resources.xml
│   │   │   │   │   │   ├── returns_clone.xml
│   │   │   │   │   │   ├── service_with_abstract_argument.xml
│   │   │   │   │   │   ├── services_abstract.xml
│   │   │   │   │   │   ├── services_autoconfigure_with_parent.xml
│   │   │   │   │   │   ├── services_autoconfigure.xml
│   │   │   │   │   │   ├── services_bindings.xml
│   │   │   │   │   │   ├── services_case.xml
│   │   │   │   │   │   ├── services_defaults_with_parent.xml
│   │   │   │   │   │   ├── services_deprecated.xml
│   │   │   │   │   │   ├── services_dump_load.xml
│   │   │   │   │   │   ├── services_inline_not_candidate.xml
│   │   │   │   │   │   ├── services_instanceof_with_parent.xml
│   │   │   │   │   │   ├── services_instanceof.xml
│   │   │   │   │   │   ├── services_lazy_fqcn.xml
│   │   │   │   │   │   ├── services_named_args.xml
│   │   │   │   │   │   ├── services_prototype_array_with_empty_node.xml
│   │   │   │   │   │   ├── services_prototype_array_with_space_node.xml
│   │   │   │   │   │   ├── services_prototype_array.xml
│   │   │   │   │   │   ├── services_prototype_constructor.xml
│   │   │   │   │   │   ├── services_prototype.xml
│   │   │   │   │   │   ├── services_tsantos.xml
│   │   │   │   │   │   ├── services_with_abstract_argument.xml
│   │   │   │   │   │   ├── services_with_array_tags.xml
│   │   │   │   │   │   ├── services_with_default_array.xml
│   │   │   │   │   │   ├── services_with_default_enumeration.xml
│   │   │   │   │   │   ├── services_with_default_object.xml
│   │   │   │   │   │   ├── services_with_enumeration.xml
│   │   │   │   │   │   ├── services_with_invalid_enumeration.xml
│   │   │   │   │   │   ├── services_with_service_closure.xml
│   │   │   │   │   │   ├── services_with_service_locator_argument.xml
│   │   │   │   │   │   ├── services_with_tagged_arguments.xml
│   │   │   │   │   │   ├── services_without_id.xml
│   │   │   │   │   │   ├── services1.xml
│   │   │   │   │   │   ├── services10.xml
│   │   │   │   │   │   ├── services13.xml
│   │   │   │   │   │   ├── services14.xml
│   │   │   │   │   │   ├── services2.xml
│   │   │   │   │   │   ├── services21.xml
│   │   │   │   │   │   ├── services23.xml
│   │   │   │   │   │   ├── services24.xml
│   │   │   │   │   │   ├── services28.xml
│   │   │   │   │   │   ├── services29.xml
│   │   │   │   │   │   ├── services3.xml
│   │   │   │   │   │   ├── services30.xml
│   │   │   │   │   │   ├── services4_bad_import_file_not_found.xml
│   │   │   │   │   │   ├── services4_bad_import_nonvalid.xml
│   │   │   │   │   │   ├── services4_bad_import_with_errors.xml
│   │   │   │   │   │   ├── services4_bad_import.xml
│   │   │   │   │   │   ├── services4.xml
│   │   │   │   │   │   ├── services5.xml
│   │   │   │   │   │   ├── services6.xml
│   │   │   │   │   │   ├── services7.xml
│   │   │   │   │   │   ├── services8.xml
│   │   │   │   │   │   ├── services9.xml
│   │   │   │   │   │   ├── singly_implemented_interface_in_multiple_resources.xml
│   │   │   │   │   │   ├── stack.xml
│   │   │   │   │   │   ├── static_constructor_and_factory.xml
│   │   │   │   │   │   ├── static_constructor.xml
│   │   │   │   │   │   ├── tag_with_empty_name.xml
│   │   │   │   │   │   ├── tag_with_name_attribute.xml
│   │   │   │   │   │   ├── tag_without_name.xml
│   │   │   │   │   │   ├── when-env.xml
│   │   │   │   │   │   ├── with_key_outside_collection.xml
│   │   │   │   │   │   ├── withdoctype.xml
│   │   │   │   │   │   └── xml_with_wrong_ext.php
│   │   │   │   │   ├── yaml
│   │   │   │   │   │   ├── bar
│   │   │   │   │   │   │   └── services.yml
│   │   │   │   │   │   ├── foo
│   │   │   │   │   │   │   └── services.yml
│   │   │   │   │   │   ├── integration
│   │   │   │   │   │   │   ├── autoconfigure_child_not_applied
│   │   │   │   │   │   │   │   ├── _child.yml
│   │   │   │   │   │   │   │   ├── expected.yml
│   │   │   │   │   │   │   │   └── main.yml
│   │   │   │   │   │   │   ├── autoconfigure_parent_child
│   │   │   │   │   │   │   │   ├── _child.yml
│   │   │   │   │   │   │   │   ├── expected.yml
│   │   │   │   │   │   │   │   └── main.yml
│   │   │   │   │   │   │   ├── autoconfigure_parent_child_tags
│   │   │   │   │   │   │   │   ├── _child.yml
│   │   │   │   │   │   │   │   ├── expected.yml
│   │   │   │   │   │   │   │   └── main.yml
│   │   │   │   │   │   │   ├── child_parent
│   │   │   │   │   │   │   │   ├── expected.yml
│   │   │   │   │   │   │   │   └── main.yml
│   │   │   │   │   │   │   ├── defaults_child_tags
│   │   │   │   │   │   │   │   ├── expected.yml
│   │   │   │   │   │   │   │   └── main.yml
│   │   │   │   │   │   │   ├── defaults_instanceof_importance
│   │   │   │   │   │   │   │   ├── expected.yml
│   │   │   │   │   │   │   │   └── main.yml
│   │   │   │   │   │   │   ├── defaults_parent_child
│   │   │   │   │   │   │   │   ├── _child.yml
│   │   │   │   │   │   │   │   ├── expected.yml
│   │   │   │   │   │   │   │   └── main.yml
│   │   │   │   │   │   │   ├── instanceof_and_calls
│   │   │   │   │   │   │   │   ├── expected.yml
│   │   │   │   │   │   │   │   └── main.yml
│   │   │   │   │   │   │   └── instanceof_parent_child
│   │   │   │   │   │   │       ├── _child.yml
│   │   │   │   │   │   │       ├── expected.yml
│   │   │   │   │   │   │       └── main.yml
│   │   │   │   │   │   ├── alt_call.yaml
│   │   │   │   │   │   ├── anonymous_services_alias.yml
│   │   │   │   │   │   ├── anonymous_services_in_instanceof.yml
│   │   │   │   │   │   ├── anonymous_services_in_parameters.yml
│   │   │   │   │   │   ├── anonymous_services.yml
│   │   │   │   │   │   ├── bad_alias.yml
│   │   │   │   │   │   ├── bad_calls.yml
│   │   │   │   │   │   ├── bad_decorates.yml
│   │   │   │   │   │   ├── bad_decoration_on_invalid_null.yml
│   │   │   │   │   │   ├── bad_empty_defaults.yml
│   │   │   │   │   │   ├── bad_empty_instanceof.yml
│   │   │   │   │   │   ├── bad_factory_syntax.yml
│   │   │   │   │   │   ├── bad_format.yml
│   │   │   │   │   │   ├── bad_import.yml
│   │   │   │   │   │   ├── bad_imports.yml
│   │   │   │   │   │   ├── bad_keyword.yml
│   │   │   │   │   │   ├── bad_parameters.yml
│   │   │   │   │   │   ├── bad_parent.yml
│   │   │   │   │   │   ├── bad_service.yml
│   │   │   │   │   │   ├── bad_services.yml
│   │   │   │   │   │   ├── badtag1.yml
│   │   │   │   │   │   ├── badtag2.yml
│   │   │   │   │   │   ├── class_from_id.yml
│   │   │   │   │   │   ├── closure.yml
│   │   │   │   │   │   ├── constructor_with_factory.yml
│   │   │   │   │   │   ├── defaults_bindings.yml
│   │   │   │   │   │   ├── defaults_bindings2.yml
│   │   │   │   │   │   ├── deprecated_alias_definitions_without_package_and_version.yml
│   │   │   │   │   │   ├── deprecated_alias_definitions.yml
│   │   │   │   │   │   ├── deprecated_definition_without_message.yml
│   │   │   │   │   │   ├── from_callable.yml
│   │   │   │   │   │   ├── nonvalid1.yml
│   │   │   │   │   │   ├── nonvalid2.yml
│   │   │   │   │   │   ├── not_singly_implemented_interface_in_multiple_resources_with_previously_registered_alias.yml
│   │   │   │   │   │   ├── not_singly_implemented_interface_in_multiple_resources_with_previously_registered_alias2.yml
│   │   │   │   │   │   ├── not_singly_implemented_interface_in_multiple_resources.yml
│   │   │   │   │   │   ├── null_config.yml
│   │   │   │   │   │   ├── returns_clone.yaml
│   │   │   │   │   │   ├── service_instanceof_factory.yml
│   │   │   │   │   │   ├── services_adawson.yml
│   │   │   │   │   │   ├── services_autoconfigure_with_parent.yml
│   │   │   │   │   │   ├── services_autoconfigure.yml
│   │   │   │   │   │   ├── services_bindings.yml
│   │   │   │   │   │   ├── services_case.yml
│   │   │   │   │   │   ├── services_configurator_short_syntax.yml
│   │   │   │   │   │   ├── services_deep_graph.yml
│   │   │   │   │   │   ├── services_defaults_with_parent.yml
│   │   │   │   │   │   ├── services_dump_load.yml
│   │   │   │   │   │   ├── services_inline.yml
│   │   │   │   │   │   ├── services_instanceof_with_parent.yml
│   │   │   │   │   │   ├── services_instanceof.yml
│   │   │   │   │   │   ├── services_lazy_fqcn.yml
│   │   │   │   │   │   ├── services_named_args.yml
│   │   │   │   │   │   ├── services_not_existing.yml
│   │   │   │   │   │   ├── services_prototype_namespace_without_resource.yml
│   │   │   │   │   │   ├── services_prototype_namespace.yml
│   │   │   │   │   │   ├── services_prototype_with_empty_node.yml
│   │   │   │   │   │   ├── services_prototype_with_null_node.yml
│   │   │   │   │   │   ├── services_prototype.yml
│   │   │   │   │   │   ├── services_short_syntax.yml
│   │   │   │   │   │   ├── services_underscore.yml
│   │   │   │   │   │   ├── services_with_abstract_argument.yml
│   │   │   │   │   │   ├── services_with_array_tags.yml
│   │   │   │   │   │   ├── services_with_default_array.yml
│   │   │   │   │   │   ├── services_with_default_enumeration.yml
│   │   │   │   │   │   ├── services_with_default_object.yml
│   │   │   │   │   │   ├── services_with_enumeration_enum_tag.yml
│   │   │   │   │   │   ├── services_with_enumeration.yml
│   │   │   │   │   │   ├── services_with_invalid_enumeration.yml
│   │   │   │   │   │   ├── services_with_service_closure.yml
│   │   │   │   │   │   ├── services_with_service_locator_argument.yml
│   │   │   │   │   │   ├── services_with_tagged_argument.yml
│   │   │   │   │   │   ├── services1.yml
│   │   │   │   │   │   ├── services10.yml
│   │   │   │   │   │   ├── services11.yml
│   │   │   │   │   │   ├── services13.yml
│   │   │   │   │   │   ├── services14.yml
│   │   │   │   │   │   ├── services2.yml
│   │   │   │   │   │   ├── services21.yml
│   │   │   │   │   │   ├── services23.yml
│   │   │   │   │   │   ├── services24.yml
│   │   │   │   │   │   ├── services26.yml
│   │   │   │   │   │   ├── services28.yml
│   │   │   │   │   │   ├── services29.yml
│   │   │   │   │   │   ├── services3.yml
│   │   │   │   │   │   ├── services30.yml
│   │   │   │   │   │   ├── services31_invalid_tags.yml
│   │   │   │   │   │   ├── services34.yml
│   │   │   │   │   │   ├── services4_bad_import_file_not_found.yml
│   │   │   │   │   │   ├── services4_bad_import_nonvalid.yml
│   │   │   │   │   │   ├── services4_bad_import_with_errors.yml
│   │   │   │   │   │   ├── services4_bad_import.yml
│   │   │   │   │   │   ├── services4.yml
│   │   │   │   │   │   ├── services6.yml
│   │   │   │   │   │   ├── services7.yml
│   │   │   │   │   │   ├── services8.yml
│   │   │   │   │   │   ├── services9.yml
│   │   │   │   │   │   ├── singly_implemented_interface_in_multiple_resources.yml
│   │   │   │   │   │   ├── stack.yaml
│   │   │   │   │   │   ├── static_constructor.yml
│   │   │   │   │   │   ├── tag_array_arguments.yml
│   │   │   │   │   │   ├── tag_name_empty_string.yml
│   │   │   │   │   │   ├── tag_name_no_string.yml
│   │   │   │   │   │   ├── tag_name_only.yml
│   │   │   │   │   │   ├── tagged_iterator_optional.yml
│   │   │   │   │   │   ├── when-env.yaml
│   │   │   │   │   │   └── yaml_with_wrong_ext.ini
│   │   │   │   │   ├── AcmeConfig.php
│   │   │   │   │   ├── array.json
│   │   │   │   │   ├── AutoconfigureAttributed.php
│   │   │   │   │   ├── AutoconfiguredInterface.php
│   │   │   │   │   ├── AutoconfiguredInterface2.php
│   │   │   │   │   ├── AutoconfiguredService1.php
│   │   │   │   │   ├── AutoconfiguredService2.php
│   │   │   │   │   ├── AutowireLocatorConsumer.php
│   │   │   │   │   ├── Bar.php
│   │   │   │   │   ├── BarFactory.php
│   │   │   │   │   ├── BarInterface.php
│   │   │   │   │   ├── BarTagClass.php
│   │   │   │   │   ├── CaseSensitiveClass.php
│   │   │   │   │   ├── ConstructNotExists.php
│   │   │   │   │   ├── CustomDefinition.php
│   │   │   │   │   ├── DeprecatedClass.php
│   │   │   │   │   ├── FactoryDummy.php
│   │   │   │   │   ├── FactoryDummyWithoutReturnTypes.php
│   │   │   │   │   ├── FooBarTaggedClass.php
│   │   │   │   │   ├── FooBarTaggedForDefaultPriorityClass.php
│   │   │   │   │   ├── FooClassWithDefaultArrayAttribute.php
│   │   │   │   │   ├── FooClassWithDefaultEnumAttribute.php
│   │   │   │   │   ├── FooClassWithDefaultObjectAttribute.php
│   │   │   │   │   ├── FooClassWithEnumAttribute.php
│   │   │   │   │   ├── FooForCircularWithAddCalls.php
│   │   │   │   │   ├── FooTagClass.php
│   │   │   │   │   ├── FooTaggedForInvalidDefaultMethodClass.php
│   │   │   │   │   ├── FooUnitEnum.php
│   │   │   │   │   ├── FooWithAbstractArgument.php
│   │   │   │   │   ├── IntBackedEnum.php
│   │   │   │   │   ├── IntTagClass.php
│   │   │   │   │   ├── MultipleArgumentBindings.php
│   │   │   │   │   ├── NamedArgumentsDummy.php
│   │   │   │   │   ├── NamedArgumentsVariadicsDummy.php
│   │   │   │   │   ├── NamedEnumArgumentDummy.php
│   │   │   │   │   ├── NamedIterableArgumentDummy.php
│   │   │   │   │   ├── NewInInitializer.php
│   │   │   │   │   ├── OptionalParameter.php
│   │   │   │   │   ├── ParentNotExists.php
│   │   │   │   │   ├── ReadOnlyClass.php
│   │   │   │   │   ├── ScalarFactory.php
│   │   │   │   │   ├── SimilarArgumentsDummy.php
│   │   │   │   │   ├── StaticConstructorAutoconfigure.php
│   │   │   │   │   ├── StaticMethodTag.php
│   │   │   │   │   ├── StdClassDecorator.php
│   │   │   │   │   ├── StringBackedEnum.php
│   │   │   │   │   ├── StubbedTranslator.php
│   │   │   │   │   ├── TaggedConsumerWithExclude.php
│   │   │   │   │   ├── TaggedIteratorConsumer.php
│   │   │   │   │   ├── TaggedIteratorConsumerWithDefaultIndexMethod.php
│   │   │   │   │   ├── TaggedIteratorConsumerWithDefaultIndexMethodAndWithDefaultPriorityMethod.php
│   │   │   │   │   ├── TaggedIteratorConsumerWithDefaultPriorityMethod.php
│   │   │   │   │   ├── TaggedLocatorConsumer.php
│   │   │   │   │   ├── TaggedLocatorConsumerConsumer.php
│   │   │   │   │   ├── TaggedLocatorConsumerFactory.php
│   │   │   │   │   ├── TaggedLocatorConsumerWithDefaultIndexMethod.php
│   │   │   │   │   ├── TaggedLocatorConsumerWithDefaultIndexMethodAndWithDefaultPriorityMethod.php
│   │   │   │   │   ├── TaggedLocatorConsumerWithDefaultPriorityMethod.php
│   │   │   │   │   ├── TaggedLocatorConsumerWithoutIndex.php
│   │   │   │   │   ├── TaggedLocatorConsumerWithServiceSubscriber.php
│   │   │   │   │   ├── TaggedService1.php
│   │   │   │   │   ├── TaggedService2.php
│   │   │   │   │   ├── TaggedService3.php
│   │   │   │   │   ├── TaggedService3Configurator.php
│   │   │   │   │   ├── TaggedService4.php
│   │   │   │   │   ├── TestDefinition1.php
│   │   │   │   │   ├── TestDefinition2.php
│   │   │   │   │   ├── TestDefinition3.php
│   │   │   │   │   ├── TestServiceSubscriber.php
│   │   │   │   │   ├── TestServiceSubscriberChild.php
│   │   │   │   │   ├── TestServiceSubscriberIntersection.php
│   │   │   │   │   ├── TestServiceSubscriberIntersectionWithTrait.php
│   │   │   │   │   ├── TestServiceSubscriberParent.php
│   │   │   │   │   ├── TestServiceSubscriberTrait.php
│   │   │   │   │   ├── TestServiceSubscriberUnion.php
│   │   │   │   │   ├── TestServiceSubscriberUnionWithTrait.php
│   │   │   │   │   ├── WitherStaticReturnType.php
│   │   │   │   │   ├── WithTarget.php
│   │   │   │   │   └── WithTargetAnonymous.php
│   │   │   │   ├── LazyProxy
│   │   │   │   │   ├── Instantiator
│   │   │   │   │   │   └── RealServiceInstantiatorTest.php
│   │   │   │   │   └── PhpDumper
│   │   │   │   │       ├── LazyServiceDumperTest.php
│   │   │   │   │       └── NullDumperTest.php
│   │   │   │   ├── Loader
│   │   │   │   │   ├── Configurator
│   │   │   │   │   │   └── EnvConfiguratorTest.php
│   │   │   │   │   ├── ClosureLoaderTest.php
│   │   │   │   │   ├── DirectoryLoaderTest.php
│   │   │   │   │   ├── FileLoaderTest.php
│   │   │   │   │   ├── GlobFileLoaderTest.php
│   │   │   │   │   ├── IniFileLoaderTest.php
│   │   │   │   │   ├── LoaderResolverTest.php
│   │   │   │   │   ├── PhpFileLoaderTest.php
│   │   │   │   │   ├── XmlFileLoaderTest.php
│   │   │   │   │   └── YamlFileLoaderTest.php
│   │   │   │   ├── ParameterBag
│   │   │   │   │   ├── ContainerBagTest.php
│   │   │   │   │   ├── EnvPlaceholderParameterBagTest.php
│   │   │   │   │   ├── FrozenParameterBagTest.php
│   │   │   │   │   └── ParameterBagTest.php
│   │   │   │   ├── AliasTest.php
│   │   │   │   ├── ChildDefinitionTest.php
│   │   │   │   ├── ContainerBuilderTest.php
│   │   │   │   ├── ContainerTest.php
│   │   │   │   ├── CrossCheckTest.php
│   │   │   │   ├── DefinitionTest.php
│   │   │   │   ├── EnvVarProcessorTest.php
│   │   │   │   ├── ParameterTest.php
│   │   │   │   ├── ReferenceTest.php
│   │   │   │   └── ServiceLocatorTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── Alias.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── ChildDefinition.php
│   │   │   ├── composer.json
│   │   │   ├── Container.php
│   │   │   ├── ContainerBuilder.php
│   │   │   ├── ContainerInterface.php
│   │   │   ├── Definition.php
│   │   │   ├── EnvVarLoaderInterface.php
│   │   │   ├── EnvVarProcessor.php
│   │   │   ├── EnvVarProcessorInterface.php
│   │   │   ├── ExpressionLanguage.php
│   │   │   ├── ExpressionLanguageProvider.php
│   │   │   ├── LICENSE
│   │   │   ├── Parameter.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── Reference.php
│   │   │   ├── ReverseContainer.php
│   │   │   ├── ServiceLocator.php
│   │   │   ├── TaggedContainerInterface.php
│   │   │   ├── TypedReference.php
│   │   │   └── Variable.php
│   │   ├── deprecation-contracts
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   └── close-pull-request.yml
│   │   │   │   └── PULL_REQUEST_TEMPLATE.md
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── function.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── doctrine-bridge
│   │   │   ├── ArgumentResolver
│   │   │   │   └── EntityValueResolver.php
│   │   │   ├── Attribute
│   │   │   │   └── MapEntity.php
│   │   │   ├── CacheWarmer
│   │   │   │   └── ProxyCacheWarmer.php
│   │   │   ├── DataCollector
│   │   │   │   ├── DoctrineDataCollector.php
│   │   │   │   └── ObjectParameter.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── CompilerPass
│   │   │   │   │   ├── DoctrineValidationPass.php
│   │   │   │   │   ├── RegisterEventListenersAndSubscribersPass.php
│   │   │   │   │   ├── RegisterMappingsPass.php
│   │   │   │   │   └── RegisterUidTypePass.php
│   │   │   │   ├── Security
│   │   │   │   │   └── UserProvider
│   │   │   │   │       └── EntityFactory.php
│   │   │   │   └── AbstractDoctrineExtension.php
│   │   │   ├── Form
│   │   │   │   ├── ChoiceList
│   │   │   │   │   ├── DoctrineChoiceLoader.php
│   │   │   │   │   ├── EntityLoaderInterface.php
│   │   │   │   │   ├── IdReader.php
│   │   │   │   │   └── ORMQueryBuilderLoader.php
│   │   │   │   ├── DataTransformer
│   │   │   │   │   └── CollectionToArrayTransformer.php
│   │   │   │   ├── EventListener
│   │   │   │   │   └── MergeDoctrineCollectionListener.php
│   │   │   │   ├── Type
│   │   │   │   │   ├── DoctrineType.php
│   │   │   │   │   └── EntityType.php
│   │   │   │   ├── DoctrineOrmExtension.php
│   │   │   │   └── DoctrineOrmTypeGuesser.php
│   │   │   ├── IdGenerator
│   │   │   │   ├── UlidGenerator.php
│   │   │   │   └── UuidGenerator.php
│   │   │   ├── Messenger
│   │   │   │   ├── AbstractDoctrineMiddleware.php
│   │   │   │   ├── DoctrineClearEntityManagerWorkerSubscriber.php
│   │   │   │   ├── DoctrineCloseConnectionMiddleware.php
│   │   │   │   ├── DoctrineOpenTransactionLoggerMiddleware.php
│   │   │   │   ├── DoctrinePingConnectionMiddleware.php
│   │   │   │   └── DoctrineTransactionMiddleware.php
│   │   │   ├── Middleware
│   │   │   │   └── Debug
│   │   │   │       ├── DBAL3
│   │   │   │       │   ├── Connection.php
│   │   │   │       │   └── Statement.php
│   │   │   │       ├── Connection.php
│   │   │   │       ├── DebugDataHolder.php
│   │   │   │       ├── Driver.php
│   │   │   │       ├── Middleware.php
│   │   │   │       ├── Query.php
│   │   │   │       └── Statement.php
│   │   │   ├── PropertyInfo
│   │   │   │   └── DoctrineExtractor.php
│   │   │   ├── SchemaListener
│   │   │   │   ├── AbstractSchemaListener.php
│   │   │   │   ├── DoctrineDbalCacheAdapterSchemaListener.php
│   │   │   │   ├── LockStoreSchemaListener.php
│   │   │   │   ├── MessengerTransportDoctrineSchemaListener.php
│   │   │   │   ├── PdoSessionHandlerSchemaListener.php
│   │   │   │   └── RememberMeTokenProviderDoctrineSchemaListener.php
│   │   │   ├── Security
│   │   │   │   ├── RememberMe
│   │   │   │   │   └── DoctrineTokenProvider.php
│   │   │   │   └── User
│   │   │   │       ├── EntityUserProvider.php
│   │   │   │       └── UserLoaderInterface.php
│   │   │   ├── Tests
│   │   │   │   ├── ArgumentResolver
│   │   │   │   │   └── EntityValueResolverTest.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   └── DoctrineDataCollectorTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── CompilerPass
│   │   │   │   │   │   ├── RegisterEventListenersAndSubscribersPassTest.php
│   │   │   │   │   │   ├── RegisterMappingsPassTest.php
│   │   │   │   │   │   └── RegisterUidTypePassTest.php
│   │   │   │   │   └── DoctrineExtensionTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── Attribute
│   │   │   │   │   │   └── UuidIdEntity.php
│   │   │   │   │   ├── Bundles
│   │   │   │   │   │   ├── AnnotationsBundle
│   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   └── Person.php
│   │   │   │   │   │   │   └── AnnotationsBundle.php
│   │   │   │   │   │   ├── AnnotationsOneLineBundle
│   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   └── Person.php
│   │   │   │   │   │   │   └── AnnotationsOneLineBundle.php
│   │   │   │   │   │   ├── AttributesBundle
│   │   │   │   │   │   │   ├── AnnotatedEntity
│   │   │   │   │   │   │   │   └── Person.php
│   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   └── Person.php
│   │   │   │   │   │   │   └── AttributesBundle.php
│   │   │   │   │   │   ├── FullEmbeddableAnnotationsBundle
│   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   └── Address.php
│   │   │   │   │   │   │   └── FullEmbeddableAnnotationsBundle.php
│   │   │   │   │   │   ├── FullEmbeddableAttributesBundle
│   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   └── Address.php
│   │   │   │   │   │   │   └── FullEmbeddableAttributesBundle.php
│   │   │   │   │   │   ├── NewAnnotationsBundle
│   │   │   │   │   │   │   └── src
│   │   │   │   │   │   │       ├── Entity
│   │   │   │   │   │   │       │   └── Person.php
│   │   │   │   │   │   │       └── NewAnnotationsBundle.php
│   │   │   │   │   │   ├── NewXmlBundle
│   │   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   │   └── doctrine
│   │   │   │   │   │   │   │       └── Person.orm.xml
│   │   │   │   │   │   │   └── src
│   │   │   │   │   │   │       ├── Entity
│   │   │   │   │   │   │       │   └── Person.php
│   │   │   │   │   │   │       └── NewXmlBundle.php
│   │   │   │   │   │   ├── PhpBundle
│   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   └── Person.php
│   │   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   │   └── config
│   │   │   │   │   │   │   │       └── doctrine
│   │   │   │   │   │   │   │           └── Person.orm.php
│   │   │   │   │   │   │   └── PhpBundle.php
│   │   │   │   │   │   ├── SrcXmlBundle
│   │   │   │   │   │   │   └── src
│   │   │   │   │   │   │       ├── Entity
│   │   │   │   │   │   │       │   └── Person.php
│   │   │   │   │   │   │       ├── Resources
│   │   │   │   │   │   │       │   └── config
│   │   │   │   │   │   │       │       └── doctrine
│   │   │   │   │   │   │       │           └── Person.orm.xml
│   │   │   │   │   │   │       └── SrcXmlBundle.php
│   │   │   │   │   │   ├── XmlBundle
│   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   └── Person.php
│   │   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   │   └── config
│   │   │   │   │   │   │   │       └── doctrine
│   │   │   │   │   │   │   │           └── Person.orm.xml
│   │   │   │   │   │   │   └── XmlBundle.php
│   │   │   │   │   │   └── YamlBundle
│   │   │   │   │   │       ├── Entity
│   │   │   │   │   │       │   └── Person.php
│   │   │   │   │   │       ├── Resources
│   │   │   │   │   │       │   └── config
│   │   │   │   │   │       │       └── doctrine
│   │   │   │   │   │       │           └── Person.orm.yml
│   │   │   │   │   │       └── YamlBundle.php
│   │   │   │   │   ├── Embeddable
│   │   │   │   │   │   └── Identifier.php
│   │   │   │   │   ├── Type
│   │   │   │   │   │   ├── StringWrapper.php
│   │   │   │   │   │   └── StringWrapperType.php
│   │   │   │   │   ├── AssociationEntity.php
│   │   │   │   │   ├── AssociationEntity2.php
│   │   │   │   │   ├── BaseUser.php
│   │   │   │   │   ├── CompositeIntIdEntity.php
│   │   │   │   │   ├── CompositeObjectNoToStringIdEntity.php
│   │   │   │   │   ├── CompositeStringIdEntity.php
│   │   │   │   │   ├── DoctrineLoaderEmbed.php
│   │   │   │   │   ├── DoctrineLoaderEntity.php
│   │   │   │   │   ├── DoctrineLoaderEnum.php
│   │   │   │   │   ├── DoctrineLoaderNestedEmbed.php
│   │   │   │   │   ├── DoctrineLoaderNoAutoMappingEntity.php
│   │   │   │   │   ├── DoctrineLoaderParentEntity.php
│   │   │   │   │   ├── DoubleNameEntity.php
│   │   │   │   │   ├── DoubleNullableNameEntity.php
│   │   │   │   │   ├── DummyManager.php
│   │   │   │   │   ├── EmbeddedIdentifierEntity.php
│   │   │   │   │   ├── Employee.php
│   │   │   │   │   ├── GroupableEntity.php
│   │   │   │   │   ├── GuidIdEntity.php
│   │   │   │   │   ├── LegacyQueryMock.php
│   │   │   │   │   ├── MockableRepository.php
│   │   │   │   │   ├── Person.php
│   │   │   │   │   ├── SingleAssociationToIntIdEntity.php
│   │   │   │   │   ├── SingleIntIdEntity.php
│   │   │   │   │   ├── SingleIntIdNoToStringEntity.php
│   │   │   │   │   ├── SingleIntIdStringWrapperNameEntity.php
│   │   │   │   │   ├── SingleStringCastableIdEntity.php
│   │   │   │   │   ├── SingleStringIdEntity.php
│   │   │   │   │   ├── UlidIdEntity.php
│   │   │   │   │   ├── User.php
│   │   │   │   │   └── UuidIdEntity.php
│   │   │   │   ├── Form
│   │   │   │   │   ├── ChoiceList
│   │   │   │   │   │   ├── DoctrineChoiceLoaderTest.php
│   │   │   │   │   │   └── ORMQueryBuilderLoaderTest.php
│   │   │   │   │   ├── DataTransformer
│   │   │   │   │   │   └── CollectionToArrayTransformerTest.php
│   │   │   │   │   ├── EventListener
│   │   │   │   │   │   └── MergeDoctrineCollectionListenerTest.php
│   │   │   │   │   ├── Type
│   │   │   │   │   │   ├── EntityTypePerformanceTest.php
│   │   │   │   │   │   └── EntityTypeTest.php
│   │   │   │   │   └── DoctrineOrmTypeGuesserTest.php
│   │   │   │   ├── IdGenerator
│   │   │   │   │   ├── UlidGeneratorTest.php
│   │   │   │   │   └── UuidGeneratorTest.php
│   │   │   │   ├── Messenger
│   │   │   │   │   ├── DoctrineClearEntityManagerWorkerSubscriberTest.php
│   │   │   │   │   ├── DoctrineCloseConnectionMiddlewareTest.php
│   │   │   │   │   ├── DoctrineOpenTransactionLoggerMiddlewareTest.php
│   │   │   │   │   ├── DoctrinePingConnectionMiddlewareTest.php
│   │   │   │   │   └── DoctrineTransactionMiddlewareTest.php
│   │   │   │   ├── Middleware
│   │   │   │   │   └── Debug
│   │   │   │   │       └── MiddlewareTest.php
│   │   │   │   ├── PropertyInfo
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── DoctrineDummy.php
│   │   │   │   │   │   ├── DoctrineEmbeddable.php
│   │   │   │   │   │   ├── DoctrineEnum.php
│   │   │   │   │   │   ├── DoctrineFooType.php
│   │   │   │   │   │   ├── DoctrineGeneratedValue.php
│   │   │   │   │   │   ├── DoctrineRelation.php
│   │   │   │   │   │   ├── DoctrineWithEmbedded.php
│   │   │   │   │   │   ├── EnumInt.php
│   │   │   │   │   │   ├── EnumString.php
│   │   │   │   │   │   └── Foo.php
│   │   │   │   │   └── DoctrineExtractorTest.php
│   │   │   │   ├── Resources
│   │   │   │   │   ├── orm
│   │   │   │   │   │   └── BaseUser.orm.xml
│   │   │   │   │   └── validator
│   │   │   │   │       └── BaseUser.xml
│   │   │   │   ├── SchemaListener
│   │   │   │   │   ├── DoctrineDbalCacheAdapterSchemaListenerTest.php
│   │   │   │   │   ├── LockStoreSchemaListenerTest.php
│   │   │   │   │   ├── MessengerTransportDoctrineSchemaListenerTest.php
│   │   │   │   │   └── PdoSessionHandlerSchemaListenerTest.php
│   │   │   │   ├── Security
│   │   │   │   │   ├── RememberMe
│   │   │   │   │   │   └── DoctrineTokenProviderTest.php
│   │   │   │   │   └── User
│   │   │   │   │       └── EntityUserProviderTest.php
│   │   │   │   ├── Types
│   │   │   │   │   ├── UlidTypeTest.php
│   │   │   │   │   └── UuidTypeTest.php
│   │   │   │   ├── Validator
│   │   │   │   │   ├── Constraints
│   │   │   │   │   │   ├── UniqueEntityTest.php
│   │   │   │   │   │   └── UniqueEntityValidatorTest.php
│   │   │   │   │   └── DoctrineLoaderTest.php
│   │   │   │   ├── ContainerAwareEventManagerTest.php
│   │   │   │   ├── DoctrineTestHelper.php
│   │   │   │   ├── ManagerRegistryTest.php
│   │   │   │   ├── TestManagerRegistry.php
│   │   │   │   └── TestRepositoryFactory.php
│   │   │   ├── Types
│   │   │   │   ├── AbstractUidType.php
│   │   │   │   ├── UlidType.php
│   │   │   │   └── UuidType.php
│   │   │   ├── Validator
│   │   │   │   ├── Constraints
│   │   │   │   │   ├── UniqueEntity.php
│   │   │   │   │   └── UniqueEntityValidator.php
│   │   │   │   ├── DoctrineInitializer.php
│   │   │   │   └── DoctrineLoader.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── ContainerAwareEventManager.php
│   │   │   ├── LICENSE
│   │   │   ├── ManagerRegistry.php
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── dotenv
│   │   │   ├── Command
│   │   │   │   ├── DebugCommand.php
│   │   │   │   └── DotenvDumpCommand.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── FormatException.php
│   │   │   │   ├── FormatExceptionContext.php
│   │   │   │   └── PathException.php
│   │   │   ├── Tests
│   │   │   │   ├── Command
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── Scenario1
│   │   │   │   │   │   │   ├── .env
│   │   │   │   │   │   │   ├── .env.local
│   │   │   │   │   │   │   ├── .env.prod.local
│   │   │   │   │   │   │   └── .env.test
│   │   │   │   │   │   ├── Scenario2
│   │   │   │   │   │   │   ├── .env.dist
│   │   │   │   │   │   │   ├── .env.local.php
│   │   │   │   │   │   │   └── .env.prod
│   │   │   │   │   │   └── Scenario3
│   │   │   │   │   │       ├── .env
│   │   │   │   │   │       └── .env.dist
│   │   │   │   │   ├── DebugCommandTest.php
│   │   │   │   │   └── DotenvDumpCommandTest.php
│   │   │   │   └── DotenvTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Dotenv.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── error-handler
│   │   │   ├── Error
│   │   │   │   ├── ClassNotFoundError.php
│   │   │   │   ├── FatalError.php
│   │   │   │   ├── OutOfMemoryError.php
│   │   │   │   ├── UndefinedFunctionError.php
│   │   │   │   └── UndefinedMethodError.php
│   │   │   ├── ErrorEnhancer
│   │   │   │   ├── ClassNotFoundErrorEnhancer.php
│   │   │   │   ├── ErrorEnhancerInterface.php
│   │   │   │   ├── UndefinedFunctionErrorEnhancer.php
│   │   │   │   └── UndefinedMethodErrorEnhancer.php
│   │   │   ├── ErrorRenderer
│   │   │   │   ├── CliErrorRenderer.php
│   │   │   │   ├── ErrorRendererInterface.php
│   │   │   │   ├── FileLinkFormatter.php
│   │   │   │   ├── HtmlErrorRenderer.php
│   │   │   │   └── SerializerErrorRenderer.php
│   │   │   ├── Exception
│   │   │   │   ├── FlattenException.php
│   │   │   │   └── SilencedErrorContext.php
│   │   │   ├── Internal
│   │   │   │   └── TentativeTypes.php
│   │   │   ├── Resources
│   │   │   │   ├── assets
│   │   │   │   │   ├── css
│   │   │   │   │   │   ├── error.css
│   │   │   │   │   │   ├── exception_full.css
│   │   │   │   │   │   └── exception.css
│   │   │   │   │   ├── images
│   │   │   │   │   │   ├── chevron-right.svg
│   │   │   │   │   │   ├── favicon.png.base64
│   │   │   │   │   │   ├── icon-book.svg
│   │   │   │   │   │   ├── icon-copy.svg
│   │   │   │   │   │   ├── icon-minus-square-o.svg
│   │   │   │   │   │   ├── icon-minus-square.svg
│   │   │   │   │   │   ├── icon-plus-square-o.svg
│   │   │   │   │   │   ├── icon-plus-square.svg
│   │   │   │   │   │   ├── icon-support.svg
│   │   │   │   │   │   ├── symfony-ghost.svg.php
│   │   │   │   │   │   └── symfony-logo.svg
│   │   │   │   │   └── js
│   │   │   │   │       └── exception.js
│   │   │   │   ├── bin
│   │   │   │   │   ├── extract-tentative-return-types.php
│   │   │   │   │   └── patch-type-declarations
│   │   │   │   └── views
│   │   │   │       ├── error.html.php
│   │   │   │       ├── exception_full.html.php
│   │   │   │       ├── exception.html.php
│   │   │   │       ├── logs.html.php
│   │   │   │       ├── trace.html.php
│   │   │   │       ├── traces_text.html.php
│   │   │   │       └── traces.html.php
│   │   │   ├── Tests
│   │   │   │   ├── ErrorEnhancer
│   │   │   │   │   ├── ClassNotFoundErrorEnhancerTest.php
│   │   │   │   │   ├── UndefinedFunctionErrorEnhancerTest.php
│   │   │   │   │   └── UndefinedMethodErrorEnhancerTest.php
│   │   │   │   ├── ErrorRenderer
│   │   │   │   │   ├── FileLinkFormatterTest.php
│   │   │   │   │   ├── HtmlErrorRendererTest.php
│   │   │   │   │   └── SerializerErrorRendererTest.php
│   │   │   │   ├── Exception
│   │   │   │   │   └── FlattenExceptionTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── FinalConstant
│   │   │   │   │   │   ├── FinalConstants.php
│   │   │   │   │   │   ├── FinalConstants2.php
│   │   │   │   │   │   ├── FinalConstantsInterface.php
│   │   │   │   │   │   ├── FinalConstantsInterface2.php
│   │   │   │   │   │   ├── OverrideFinalConstant.php
│   │   │   │   │   │   └── OverrideFinalConstant81.php
│   │   │   │   │   ├── FinalProperty
│   │   │   │   │   │   ├── FinalProperty.php
│   │   │   │   │   │   ├── OutsideFinalProperty.php
│   │   │   │   │   │   └── OverrideFinalPropertySameNamespace.php
│   │   │   │   │   ├── psr4
│   │   │   │   │   │   └── Psr4CaseMismatch.php
│   │   │   │   │   ├── AnnotatedClass.php
│   │   │   │   │   ├── casemismatch.php
│   │   │   │   │   ├── ClassAlias.php
│   │   │   │   │   ├── ClassWithAnnotatedParameters.php
│   │   │   │   │   ├── DefinitionInEvaluatedCode.php
│   │   │   │   │   ├── DeprecatedClass.php
│   │   │   │   │   ├── DeprecatedInterface.php
│   │   │   │   │   ├── ErrorHandlerThatUsesThePreviousOne.php
│   │   │   │   │   ├── ExtendedFinalMethod.php
│   │   │   │   │   ├── FinalClasses.php
│   │   │   │   │   ├── FinalMethod.php
│   │   │   │   │   ├── FinalMethod2Trait.php
│   │   │   │   │   ├── InterfaceWithAnnotatedParameters.php
│   │   │   │   │   ├── InternalClass.php
│   │   │   │   │   ├── InternalInterface.php
│   │   │   │   │   ├── InternalTrait.php
│   │   │   │   │   ├── InternalTrait2.php
│   │   │   │   │   ├── LoggerThatSetAnErrorHandler.php
│   │   │   │   │   ├── NonDeprecatedInterface.php
│   │   │   │   │   ├── notPsr0Bis.php
│   │   │   │   │   ├── OutsideInterface.php
│   │   │   │   │   ├── OverrideFinalProperty.php
│   │   │   │   │   ├── OverrideOutsideFinalProperty.php
│   │   │   │   │   ├── PEARClass.php
│   │   │   │   │   ├── pixel.png
│   │   │   │   │   ├── reallyNotPsr0.php
│   │   │   │   │   ├── ReturnType.php
│   │   │   │   │   ├── ReturnTypeGrandParent.php
│   │   │   │   │   ├── ReturnTypeInterface.php
│   │   │   │   │   ├── ReturnTypeParent.php
│   │   │   │   │   ├── ReturnTypeParentInterface.php
│   │   │   │   │   ├── StringErrorCodeException.php
│   │   │   │   │   ├── SubClassWithAnnotatedParameters.php
│   │   │   │   │   ├── Throwing.php
│   │   │   │   │   ├── TraitWithAnnotatedParameters.php
│   │   │   │   │   ├── TraitWithInternalMethod.php
│   │   │   │   │   ├── VirtualClass.php
│   │   │   │   │   ├── VirtualClassMagicCall.php
│   │   │   │   │   ├── VirtualInterface.php
│   │   │   │   │   ├── VirtualSubInterface.php
│   │   │   │   │   └── VirtualTrait.php
│   │   │   │   ├── Fixtures2
│   │   │   │   │   └── RequiredTwice.php
│   │   │   │   ├── phpt
│   │   │   │   │   ├── debug_class_loader.phpt
│   │   │   │   │   ├── decorate_exception_handler.phpt
│   │   │   │   │   ├── exception_rethrown.phpt
│   │   │   │   │   └── fatal_with_nested_handlers.phpt
│   │   │   │   ├── DebugClassLoaderTest.php
│   │   │   │   ├── ErrorHandlerTest.php
│   │   │   │   └── HeaderMock.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── BufferingLogger.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Debug.php
│   │   │   ├── DebugClassLoader.php
│   │   │   ├── ErrorHandler.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── ThrowableUtils.php
│   │   ├── event-dispatcher
│   │   │   ├── Attribute
│   │   │   │   └── AsEventListener.php
│   │   │   ├── Debug
│   │   │   │   ├── TraceableEventDispatcher.php
│   │   │   │   └── WrappedListener.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── AddEventAliasesPass.php
│   │   │   │   └── RegisterListenersPass.php
│   │   │   ├── Tests
│   │   │   │   ├── Debug
│   │   │   │   │   ├── TraceableEventDispatcherTest.php
│   │   │   │   │   └── WrappedListenerTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   └── RegisterListenersPassTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── CustomEvent.php
│   │   │   │   │   ├── TaggedInvokableListener.php
│   │   │   │   │   └── TaggedMultiListener.php
│   │   │   │   ├── ChildEventDispatcherTest.php
│   │   │   │   ├── EventDispatcherTest.php
│   │   │   │   ├── GenericEventTest.php
│   │   │   │   └── ImmutableEventDispatcherTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── EventDispatcher.php
│   │   │   ├── EventDispatcherInterface.php
│   │   │   ├── EventSubscriberInterface.php
│   │   │   ├── GenericEvent.php
│   │   │   ├── ImmutableEventDispatcher.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── event-dispatcher-contracts
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   └── close-pull-request.yml
│   │   │   │   └── PULL_REQUEST_TEMPLATE.md
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Event.php
│   │   │   ├── EventDispatcherInterface.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── filesystem
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── FileNotFoundException.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── IOException.php
│   │   │   │   ├── IOExceptionInterface.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Tests
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── MockStream
│   │   │   │   │   │   └── MockStream.php
│   │   │   │   │   └── web
│   │   │   │   │       ├── index.php
│   │   │   │   │       └── logo_symfony_header.png
│   │   │   │   ├── ExceptionTest.php
│   │   │   │   ├── FilesystemTest.php
│   │   │   │   ├── FilesystemTestCase.php
│   │   │   │   └── PathTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Filesystem.php
│   │   │   ├── LICENSE
│   │   │   ├── Path.php
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── finder
│   │   │   ├── Comparator
│   │   │   │   ├── Comparator.php
│   │   │   │   ├── DateComparator.php
│   │   │   │   └── NumberComparator.php
│   │   │   ├── Exception
│   │   │   │   ├── AccessDeniedException.php
│   │   │   │   └── DirectoryNotFoundException.php
│   │   │   ├── Iterator
│   │   │   │   ├── CustomFilterIterator.php
│   │   │   │   ├── DateRangeFilterIterator.php
│   │   │   │   ├── DepthRangeFilterIterator.php
│   │   │   │   ├── ExcludeDirectoryFilterIterator.php
│   │   │   │   ├── FilecontentFilterIterator.php
│   │   │   │   ├── FilenameFilterIterator.php
│   │   │   │   ├── FileTypeFilterIterator.php
│   │   │   │   ├── LazyIterator.php
│   │   │   │   ├── MultiplePcreFilterIterator.php
│   │   │   │   ├── PathFilterIterator.php
│   │   │   │   ├── RecursiveDirectoryIterator.php
│   │   │   │   ├── SizeRangeFilterIterator.php
│   │   │   │   ├── SortableIterator.php
│   │   │   │   └── VcsIgnoredFilterIterator.php
│   │   │   ├── Tests
│   │   │   │   ├── Comparator
│   │   │   │   │   ├── ComparatorTest.php
│   │   │   │   │   ├── DateComparatorTest.php
│   │   │   │   │   └── NumberComparatorTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── .dot
│   │   │   │   │   │   ├── b
│   │   │   │   │   │   │   ├── c.neon
│   │   │   │   │   │   │   └── d.neon
│   │   │   │   │   │   └── a
│   │   │   │   │   ├── A
│   │   │   │   │   │   ├── B
│   │   │   │   │   │   │   ├── C
│   │   │   │   │   │   │   │   └── abc.dat
│   │   │   │   │   │   │   └── ab.dat
│   │   │   │   │   │   └── a.dat
│   │   │   │   │   ├── copy
│   │   │   │   │   │   └── A
│   │   │   │   │   │       ├── B
│   │   │   │   │   │       │   ├── C
│   │   │   │   │   │       │   │   └── abc.dat.copy
│   │   │   │   │   │       │   └── ab.dat.copy
│   │   │   │   │   │       └── a.dat.copy
│   │   │   │   │   ├── gitignore
│   │   │   │   │   │   ├── git_root
│   │   │   │   │   │   │   └── search_root
│   │   │   │   │   │   │       ├── dir
│   │   │   │   │   │   │       │   ├── .gitignore
│   │   │   │   │   │   │       │   └── a.txt
│   │   │   │   │   │   │       ├── .gitignore
│   │   │   │   │   │   │       └── b.txt
│   │   │   │   │   │   ├── search_root
│   │   │   │   │   │   │   ├── dir
│   │   │   │   │   │   │   │   ├── .gitignore
│   │   │   │   │   │   │   │   ├── a.txt
│   │   │   │   │   │   │   │   ├── b.txt
│   │   │   │   │   │   │   │   └── c.txt
│   │   │   │   │   │   │   ├── .gitignore
│   │   │   │   │   │   │   ├── a.txt
│   │   │   │   │   │   │   ├── b.txt
│   │   │   │   │   │   │   └── c.txt
│   │   │   │   │   │   └── .gitignore
│   │   │   │   │   ├── one
│   │   │   │   │   │   ├── b
│   │   │   │   │   │   │   ├── c.neon
│   │   │   │   │   │   │   └── d.neon
│   │   │   │   │   │   ├── .dot
│   │   │   │   │   │   └── a
│   │   │   │   │   ├── r+e.gex[c]a(r)s
│   │   │   │   │   │   └── dir
│   │   │   │   │   │       └── bar.dat
│   │   │   │   │   ├── with space
│   │   │   │   │   │   └── foo.txt
│   │   │   │   │   ├── dolor.txt
│   │   │   │   │   ├── ipsum.txt
│   │   │   │   │   └── lorem.txt
│   │   │   │   ├── Iterator
│   │   │   │   │   ├── CustomFilterIteratorTest.php
│   │   │   │   │   ├── DateRangeFilterIteratorTest.php
│   │   │   │   │   ├── DepthRangeFilterIteratorTest.php
│   │   │   │   │   ├── ExcludeDirectoryFilterIteratorTest.php
│   │   │   │   │   ├── FilecontentFilterIteratorTest.php
│   │   │   │   │   ├── FilenameFilterIteratorTest.php
│   │   │   │   │   ├── FileTypeFilterIteratorTest.php
│   │   │   │   │   ├── InnerNameIterator.php
│   │   │   │   │   ├── Iterator.php
│   │   │   │   │   ├── IteratorTestCase.php
│   │   │   │   │   ├── LazyIteratorTest.php
│   │   │   │   │   ├── MockFileListIterator.php
│   │   │   │   │   ├── MockSplFileInfo.php
│   │   │   │   │   ├── MultiplePcreFilterIteratorTest.php
│   │   │   │   │   ├── PathFilterIteratorTest.php
│   │   │   │   │   ├── RealIteratorTestCase.php
│   │   │   │   │   ├── RecursiveDirectoryIteratorTest.php
│   │   │   │   │   ├── SizeRangeFilterIteratorTest.php
│   │   │   │   │   ├── SortableIteratorTest.php
│   │   │   │   │   ├── VcsIgnoredFilterIteratorTest.php
│   │   │   │   │   └── VfsIteratorTestTrait.php
│   │   │   │   ├── FinderOpenBasedirTest.php
│   │   │   │   ├── FinderTest.php
│   │   │   │   ├── GitignoreTest.php
│   │   │   │   └── GlobTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Finder.php
│   │   │   ├── Gitignore.php
│   │   │   ├── Glob.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── SplFileInfo.php
│   │   ├── flex
│   │   │   ├── .github
│   │   │   │   └── workflows
│   │   │   │       └── ci.yaml
│   │   │   ├── src
│   │   │   │   ├── Command
│   │   │   │   │   ├── DumpEnvCommand.php
│   │   │   │   │   ├── InstallRecipesCommand.php
│   │   │   │   │   ├── RecipesCommand.php
│   │   │   │   │   └── UpdateRecipesCommand.php
│   │   │   │   ├── Configurator
│   │   │   │   │   ├── AbstractConfigurator.php
│   │   │   │   │   ├── AddLinesConfigurator.php
│   │   │   │   │   ├── BundlesConfigurator.php
│   │   │   │   │   ├── ComposerScriptsConfigurator.php
│   │   │   │   │   ├── ContainerConfigurator.php
│   │   │   │   │   ├── CopyFromPackageConfigurator.php
│   │   │   │   │   ├── CopyFromRecipeConfigurator.php
│   │   │   │   │   ├── DockerComposeConfigurator.php
│   │   │   │   │   ├── DockerfileConfigurator.php
│   │   │   │   │   ├── DotenvConfigurator.php
│   │   │   │   │   ├── EnvConfigurator.php
│   │   │   │   │   ├── GitignoreConfigurator.php
│   │   │   │   │   └── MakefileConfigurator.php
│   │   │   │   ├── Event
│   │   │   │   │   └── UpdateEvent.php
│   │   │   │   ├── Unpack
│   │   │   │   │   ├── Operation.php
│   │   │   │   │   └── Result.php
│   │   │   │   ├── Update
│   │   │   │   │   ├── DiffHelper.php
│   │   │   │   │   ├── RecipePatch.php
│   │   │   │   │   ├── RecipePatcher.php
│   │   │   │   │   └── RecipeUpdate.php
│   │   │   │   ├── Configurator.php
│   │   │   │   ├── Downloader.php
│   │   │   │   ├── Flex.php
│   │   │   │   ├── GithubApi.php
│   │   │   │   ├── InformationOperation.php
│   │   │   │   ├── Lock.php
│   │   │   │   ├── Options.php
│   │   │   │   ├── PackageFilter.php
│   │   │   │   ├── PackageJsonSynchronizer.php
│   │   │   │   ├── PackageResolver.php
│   │   │   │   ├── Path.php
│   │   │   │   ├── Recipe.php
│   │   │   │   ├── Response.php
│   │   │   │   ├── ScriptExecutor.php
│   │   │   │   ├── SymfonyBundle.php
│   │   │   │   └── Unpacker.php
│   │   │   ├── tests
│   │   │   │   ├── Command
│   │   │   │   │   ├── DumpEnvCommandTest.php
│   │   │   │   │   └── UpdateRecipesCommandTest.php
│   │   │   │   ├── Configurator
│   │   │   │   │   ├── AddLinesConfiguratorTest.php
│   │   │   │   │   ├── BundlesConfiguratorTest.php
│   │   │   │   │   ├── ComposerScriptsConfiguratorTest.php
│   │   │   │   │   ├── ContainerConfiguratorTest.php
│   │   │   │   │   ├── CopyDirectoryFromPackageConfiguratorTest.php
│   │   │   │   │   ├── CopyFromPackageConfiguratorTest.php
│   │   │   │   │   ├── CopyFromRecipeConfiguratorTest.php
│   │   │   │   │   ├── DockerComposeConfiguratorTest.php
│   │   │   │   │   ├── DockerfileConfiguratorTest.php
│   │   │   │   │   ├── DotenvConfiguratorTest.php
│   │   │   │   │   ├── EnvConfiguratorTest.php
│   │   │   │   │   ├── GitignoreConfiguratorTest.php
│   │   │   │   │   └── MakefileConfiguratorTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── packageJson
│   │   │   │   │   │   ├── assets
│   │   │   │   │   │   │   └── controllers.json
│   │   │   │   │   │   ├── vendor
│   │   │   │   │   │   │   └── symfony
│   │   │   │   │   │   │       ├── existing-package
│   │   │   │   │   │   │       │   └── Resources
│   │   │   │   │   │   │       │       └── assets
│   │   │   │   │   │   │       │           └── package.json
│   │   │   │   │   │   │       ├── new-package
│   │   │   │   │   │   │       │   └── assets
│   │   │   │   │   │   │       │       └── package.json
│   │   │   │   │   │   │       └── package-no-file-package
│   │   │   │   │   │   │           └── assets
│   │   │   │   │   │   │               └── package.json
│   │   │   │   │   │   ├── elevated_dependencies_package.json
│   │   │   │   │   │   ├── package.json
│   │   │   │   │   │   └── stricter_constraints_package.json
│   │   │   │   │   ├── update_recipes
│   │   │   │   │   │   ├── composer.json
│   │   │   │   │   │   ├── console
│   │   │   │   │   │   └── symfony.lock
│   │   │   │   │   ├── vendor
│   │   │   │   │   │   ├── composer
│   │   │   │   │   │   │   └── ca-bundle
│   │   │   │   │   │   │       └── src
│   │   │   │   │   │   │           └── CaBundle.php
│   │   │   │   │   │   ├── doctrine
│   │   │   │   │   │   │   └── doctrine-cache-bundle
│   │   │   │   │   │   │       └── DoctrineCacheBundle.php
│   │   │   │   │   │   ├── dunglas
│   │   │   │   │   │   │   └── sylius-acme-plugin
│   │   │   │   │   │   │       └── src
│   │   │   │   │   │   │           └── DunglasSyliusAcmePlugin.php
│   │   │   │   │   │   ├── easycorp
│   │   │   │   │   │   │   ├── easy-deploy-bundle
│   │   │   │   │   │   │   │   └── src
│   │   │   │   │   │   │   │       └── EasyDeployBundle.php
│   │   │   │   │   │   │   └── easy-security-bundle
│   │   │   │   │   │   │       └── EasySecurityBundle.php
│   │   │   │   │   │   ├── eightpoints
│   │   │   │   │   │   │   └── guzzle-bundle
│   │   │   │   │   │   │       └── EightPoints
│   │   │   │   │   │   │           └── Bundle
│   │   │   │   │   │   │               └── GuzzleBundle
│   │   │   │   │   │   │                   └── GuzzleBundle.php
│   │   │   │   │   │   ├── sylius
│   │   │   │   │   │   │   └── shop-api-plugin
│   │   │   │   │   │   │       └── src
│   │   │   │   │   │   │           └── ShopApiPlugin.php
│   │   │   │   │   │   ├── symfony
│   │   │   │   │   │   │   ├── debug-bundle
│   │   │   │   │   │   │   │   └── DebugBundle.php
│   │   │   │   │   │   │   ├── dummy
│   │   │   │   │   │   │   │   ├── FirstDummyBundle
│   │   │   │   │   │   │   │   │   └── FirstDummyBundle.php
│   │   │   │   │   │   │   │   └── SecondDummyBundle
│   │   │   │   │   │   │   │       └── SecondDummyBundle.php
│   │   │   │   │   │   │   └── nouse-bundle
│   │   │   │   │   │   │       └── NouseBundle.php
│   │   │   │   │   │   ├── symfony-cmf
│   │   │   │   │   │   │   └── routing-bundle
│   │   │   │   │   │   │       └── CmfRoutingBundle.php
│   │   │   │   │   │   └── web-token
│   │   │   │   │   │       └── jwt-bundle
│   │   │   │   │   │           └── JoseFrameworkBundle.php
│   │   │   │   │   └── phpunit.xml.dist
│   │   │   │   ├── Update
│   │   │   │   │   ├── DiffHelperTest.php
│   │   │   │   │   ├── RecipePatcherTest.php
│   │   │   │   │   ├── RecipePatchTest.php
│   │   │   │   │   └── RecipeUpdateTest.php
│   │   │   │   ├── bootstrap.php
│   │   │   │   ├── FlexTest.php
│   │   │   │   ├── PackageFilterTest.php
│   │   │   │   ├── PackageJsonSynchronizerTest.php
│   │   │   │   ├── PackageResolverTest.php
│   │   │   │   ├── PathTest.php
│   │   │   │   ├── ScriptExecutorTest.php
│   │   │   │   ├── SymfonyBundleTest.php
│   │   │   │   └── UnpackerTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── .php-cs-fixer.dist.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── form
│   │   │   ├── ChoiceList
│   │   │   │   ├── Factory
│   │   │   │   │   ├── Cache
│   │   │   │   │   │   ├── AbstractStaticOption.php
│   │   │   │   │   │   ├── ChoiceAttr.php
│   │   │   │   │   │   ├── ChoiceFieldName.php
│   │   │   │   │   │   ├── ChoiceFilter.php
│   │   │   │   │   │   ├── ChoiceLabel.php
│   │   │   │   │   │   ├── ChoiceLoader.php
│   │   │   │   │   │   ├── ChoiceTranslationParameters.php
│   │   │   │   │   │   ├── ChoiceValue.php
│   │   │   │   │   │   ├── GroupBy.php
│   │   │   │   │   │   └── PreferredChoice.php
│   │   │   │   │   ├── CachingFactoryDecorator.php
│   │   │   │   │   ├── ChoiceListFactoryInterface.php
│   │   │   │   │   ├── DefaultChoiceListFactory.php
│   │   │   │   │   └── PropertyAccessDecorator.php
│   │   │   │   ├── Loader
│   │   │   │   │   ├── AbstractChoiceLoader.php
│   │   │   │   │   ├── CallbackChoiceLoader.php
│   │   │   │   │   ├── ChoiceLoaderInterface.php
│   │   │   │   │   ├── FilterChoiceLoaderDecorator.php
│   │   │   │   │   └── IntlCallbackChoiceLoader.php
│   │   │   │   ├── View
│   │   │   │   │   ├── ChoiceGroupView.php
│   │   │   │   │   ├── ChoiceListView.php
│   │   │   │   │   └── ChoiceView.php
│   │   │   │   ├── ArrayChoiceList.php
│   │   │   │   ├── ChoiceList.php
│   │   │   │   ├── ChoiceListInterface.php
│   │   │   │   └── LazyChoiceList.php
│   │   │   ├── Command
│   │   │   │   └── DebugCommand.php
│   │   │   ├── Console
│   │   │   │   ├── Descriptor
│   │   │   │   │   ├── Descriptor.php
│   │   │   │   │   ├── JsonDescriptor.php
│   │   │   │   │   └── TextDescriptor.php
│   │   │   │   └── Helper
│   │   │   │       └── DescriptorHelper.php
│   │   │   ├── DependencyInjection
│   │   │   │   └── FormPass.php
│   │   │   ├── Event
│   │   │   │   ├── PostSetDataEvent.php
│   │   │   │   ├── PostSubmitEvent.php
│   │   │   │   ├── PreSetDataEvent.php
│   │   │   │   ├── PreSubmitEvent.php
│   │   │   │   └── SubmitEvent.php
│   │   │   ├── Exception
│   │   │   │   ├── AccessException.php
│   │   │   │   ├── AlreadySubmittedException.php
│   │   │   │   ├── BadMethodCallException.php
│   │   │   │   ├── ErrorMappingException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidConfigurationException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── OutOfBoundsException.php
│   │   │   │   ├── RuntimeException.php
│   │   │   │   ├── StringCastException.php
│   │   │   │   ├── TransformationFailedException.php
│   │   │   │   └── UnexpectedTypeException.php
│   │   │   ├── Extension
│   │   │   │   ├── Core
│   │   │   │   │   ├── DataAccessor
│   │   │   │   │   │   ├── CallbackAccessor.php
│   │   │   │   │   │   ├── ChainAccessor.php
│   │   │   │   │   │   └── PropertyPathAccessor.php
│   │   │   │   │   ├── DataMapper
│   │   │   │   │   │   ├── CheckboxListMapper.php
│   │   │   │   │   │   ├── DataMapper.php
│   │   │   │   │   │   └── RadioListMapper.php
│   │   │   │   │   ├── DataTransformer
│   │   │   │   │   │   ├── ArrayToPartsTransformer.php
│   │   │   │   │   │   ├── BaseDateTimeTransformer.php
│   │   │   │   │   │   ├── BooleanToStringTransformer.php
│   │   │   │   │   │   ├── ChoicesToValuesTransformer.php
│   │   │   │   │   │   ├── ChoiceToValueTransformer.php
│   │   │   │   │   │   ├── DataTransformerChain.php
│   │   │   │   │   │   ├── DateIntervalToArrayTransformer.php
│   │   │   │   │   │   ├── DateIntervalToStringTransformer.php
│   │   │   │   │   │   ├── DateTimeImmutableToDateTimeTransformer.php
│   │   │   │   │   │   ├── DateTimeToArrayTransformer.php
│   │   │   │   │   │   ├── DateTimeToHtml5LocalDateTimeTransformer.php
│   │   │   │   │   │   ├── DateTimeToLocalizedStringTransformer.php
│   │   │   │   │   │   ├── DateTimeToRfc3339Transformer.php
│   │   │   │   │   │   ├── DateTimeToStringTransformer.php
│   │   │   │   │   │   ├── DateTimeToTimestampTransformer.php
│   │   │   │   │   │   ├── DateTimeZoneToStringTransformer.php
│   │   │   │   │   │   ├── IntegerToLocalizedStringTransformer.php
│   │   │   │   │   │   ├── IntlTimeZoneToStringTransformer.php
│   │   │   │   │   │   ├── MoneyToLocalizedStringTransformer.php
│   │   │   │   │   │   ├── NumberToLocalizedStringTransformer.php
│   │   │   │   │   │   ├── PercentToLocalizedStringTransformer.php
│   │   │   │   │   │   ├── StringToFloatTransformer.php
│   │   │   │   │   │   ├── UlidToStringTransformer.php
│   │   │   │   │   │   ├── UuidToStringTransformer.php
│   │   │   │   │   │   ├── ValueToDuplicatesTransformer.php
│   │   │   │   │   │   └── WeekToArrayTransformer.php
│   │   │   │   │   ├── EventListener
│   │   │   │   │   │   ├── FixUrlProtocolListener.php
│   │   │   │   │   │   ├── MergeCollectionListener.php
│   │   │   │   │   │   ├── ResizeFormListener.php
│   │   │   │   │   │   ├── TransformationFailureListener.php
│   │   │   │   │   │   └── TrimListener.php
│   │   │   │   │   ├── Type
│   │   │   │   │   │   ├── BaseType.php
│   │   │   │   │   │   ├── BirthdayType.php
│   │   │   │   │   │   ├── ButtonType.php
│   │   │   │   │   │   ├── CheckboxType.php
│   │   │   │   │   │   ├── ChoiceType.php
│   │   │   │   │   │   ├── CollectionType.php
│   │   │   │   │   │   ├── ColorType.php
│   │   │   │   │   │   ├── CountryType.php
│   │   │   │   │   │   ├── CurrencyType.php
│   │   │   │   │   │   ├── DateIntervalType.php
│   │   │   │   │   │   ├── DateTimeType.php
│   │   │   │   │   │   ├── DateType.php
│   │   │   │   │   │   ├── EmailType.php
│   │   │   │   │   │   ├── EnumType.php
│   │   │   │   │   │   ├── FileType.php
│   │   │   │   │   │   ├── FormType.php
│   │   │   │   │   │   ├── HiddenType.php
│   │   │   │   │   │   ├── IntegerType.php
│   │   │   │   │   │   ├── LanguageType.php
│   │   │   │   │   │   ├── LocaleType.php
│   │   │   │   │   │   ├── MoneyType.php
│   │   │   │   │   │   ├── NumberType.php
│   │   │   │   │   │   ├── PasswordType.php
│   │   │   │   │   │   ├── PercentType.php
│   │   │   │   │   │   ├── RadioType.php
│   │   │   │   │   │   ├── RangeType.php
│   │   │   │   │   │   ├── RepeatedType.php
│   │   │   │   │   │   ├── ResetType.php
│   │   │   │   │   │   ├── SearchType.php
│   │   │   │   │   │   ├── SubmitType.php
│   │   │   │   │   │   ├── TelType.php
│   │   │   │   │   │   ├── TextareaType.php
│   │   │   │   │   │   ├── TextType.php
│   │   │   │   │   │   ├── TimeType.php
│   │   │   │   │   │   ├── TimezoneType.php
│   │   │   │   │   │   ├── TransformationFailureExtension.php
│   │   │   │   │   │   ├── UlidType.php
│   │   │   │   │   │   ├── UrlType.php
│   │   │   │   │   │   ├── UuidType.php
│   │   │   │   │   │   └── WeekType.php
│   │   │   │   │   └── CoreExtension.php
│   │   │   │   ├── Csrf
│   │   │   │   │   ├── EventListener
│   │   │   │   │   │   └── CsrfValidationListener.php
│   │   │   │   │   ├── Type
│   │   │   │   │   │   └── FormTypeCsrfExtension.php
│   │   │   │   │   └── CsrfExtension.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   ├── EventListener
│   │   │   │   │   │   └── DataCollectorListener.php
│   │   │   │   │   ├── Proxy
│   │   │   │   │   │   ├── ResolvedTypeDataCollectorProxy.php
│   │   │   │   │   │   └── ResolvedTypeFactoryDataCollectorProxy.php
│   │   │   │   │   ├── Type
│   │   │   │   │   │   └── DataCollectorTypeExtension.php
│   │   │   │   │   ├── DataCollectorExtension.php
│   │   │   │   │   ├── FormDataCollector.php
│   │   │   │   │   ├── FormDataCollectorInterface.php
│   │   │   │   │   ├── FormDataExtractor.php
│   │   │   │   │   └── FormDataExtractorInterface.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   └── DependencyInjectionExtension.php
│   │   │   │   ├── HtmlSanitizer
│   │   │   │   │   ├── Type
│   │   │   │   │   │   └── TextTypeHtmlSanitizerExtension.php
│   │   │   │   │   └── HtmlSanitizerExtension.php
│   │   │   │   ├── HttpFoundation
│   │   │   │   │   ├── Type
│   │   │   │   │   │   └── FormTypeHttpFoundationExtension.php
│   │   │   │   │   ├── HttpFoundationExtension.php
│   │   │   │   │   └── HttpFoundationRequestHandler.php
│   │   │   │   ├── PasswordHasher
│   │   │   │   │   ├── EventListener
│   │   │   │   │   │   └── PasswordHasherListener.php
│   │   │   │   │   ├── Type
│   │   │   │   │   │   ├── FormTypePasswordHasherExtension.php
│   │   │   │   │   │   └── PasswordTypePasswordHasherExtension.php
│   │   │   │   │   └── PasswordHasherExtension.php
│   │   │   │   └── Validator
│   │   │   │       ├── Constraints
│   │   │   │       │   ├── Form.php
│   │   │   │       │   └── FormValidator.php
│   │   │   │       ├── EventListener
│   │   │   │       │   └── ValidationListener.php
│   │   │   │       ├── Type
│   │   │   │       │   ├── BaseValidatorExtension.php
│   │   │   │       │   ├── FormTypeValidatorExtension.php
│   │   │   │       │   ├── RepeatedTypeValidatorExtension.php
│   │   │   │       │   ├── SubmitTypeValidatorExtension.php
│   │   │   │       │   └── UploadValidatorExtension.php
│   │   │   │       ├── ViolationMapper
│   │   │   │       │   ├── MappingRule.php
│   │   │   │       │   ├── RelativePath.php
│   │   │   │       │   ├── ViolationMapper.php
│   │   │   │       │   ├── ViolationMapperInterface.php
│   │   │   │       │   ├── ViolationPath.php
│   │   │   │       │   └── ViolationPathIterator.php
│   │   │   │       ├── ValidatorExtension.php
│   │   │   │       └── ValidatorTypeGuesser.php
│   │   │   ├── Guess
│   │   │   │   ├── Guess.php
│   │   │   │   ├── TypeGuess.php
│   │   │   │   └── ValueGuess.php
│   │   │   ├── Resources
│   │   │   │   ├── config
│   │   │   │   │   └── validation.xml
│   │   │   │   └── translations
│   │   │   │       ├── validators.af.xlf
│   │   │   │       ├── validators.ar.xlf
│   │   │   │       ├── validators.az.xlf
│   │   │   │       ├── validators.be.xlf
│   │   │   │       ├── validators.bg.xlf
│   │   │   │       ├── validators.bs.xlf
│   │   │   │       ├── validators.ca.xlf
│   │   │   │       ├── validators.cs.xlf
│   │   │   │       ├── validators.cy.xlf
│   │   │   │       ├── validators.da.xlf
│   │   │   │       ├── validators.de.xlf
│   │   │   │       ├── validators.el.xlf
│   │   │   │       ├── validators.en.xlf
│   │   │   │       ├── validators.es.xlf
│   │   │   │       ├── validators.et.xlf
│   │   │   │       ├── validators.eu.xlf
│   │   │   │       ├── validators.fa.xlf
│   │   │   │       ├── validators.fi.xlf
│   │   │   │       ├── validators.fr.xlf
│   │   │   │       ├── validators.gl.xlf
│   │   │   │       ├── validators.he.xlf
│   │   │   │       ├── validators.hr.xlf
│   │   │   │       ├── validators.hu.xlf
│   │   │   │       ├── validators.hy.xlf
│   │   │   │       ├── validators.id.xlf
│   │   │   │       ├── validators.it.xlf
│   │   │   │       ├── validators.ja.xlf
│   │   │   │       ├── validators.lb.xlf
│   │   │   │       ├── validators.lt.xlf
│   │   │   │       ├── validators.lv.xlf
│   │   │   │       ├── validators.mk.xlf
│   │   │   │       ├── validators.mn.xlf
│   │   │   │       ├── validators.my.xlf
│   │   │   │       ├── validators.nb.xlf
│   │   │   │       ├── validators.nl.xlf
│   │   │   │       ├── validators.nn.xlf
│   │   │   │       ├── validators.no.xlf
│   │   │   │       ├── validators.pl.xlf
│   │   │   │       ├── validators.pt_BR.xlf
│   │   │   │       ├── validators.pt.xlf
│   │   │   │       ├── validators.ro.xlf
│   │   │   │       ├── validators.ru.xlf
│   │   │   │       ├── validators.sk.xlf
│   │   │   │       ├── validators.sl.xlf
│   │   │   │       ├── validators.sq.xlf
│   │   │   │       ├── validators.sr_Cyrl.xlf
│   │   │   │       ├── validators.sr_Latn.xlf
│   │   │   │       ├── validators.sv.xlf
│   │   │   │       ├── validators.th.xlf
│   │   │   │       ├── validators.tl.xlf
│   │   │   │       ├── validators.tr.xlf
│   │   │   │       ├── validators.uk.xlf
│   │   │   │       ├── validators.ur.xlf
│   │   │   │       ├── validators.uz.xlf
│   │   │   │       ├── validators.vi.xlf
│   │   │   │       ├── validators.zh_CN.xlf
│   │   │   │       └── validators.zh_TW.xlf
│   │   │   ├── Test
│   │   │   │   ├── Traits
│   │   │   │   │   └── ValidatorExtensionTrait.php
│   │   │   │   ├── FormBuilderInterface.php
│   │   │   │   ├── FormIntegrationTestCase.php
│   │   │   │   ├── FormInterface.php
│   │   │   │   ├── FormPerformanceTestCase.php
│   │   │   │   └── TypeTestCase.php
│   │   │   ├── Tests
│   │   │   │   ├── ChoiceList
│   │   │   │   │   ├── Factory
│   │   │   │   │   │   ├── Cache
│   │   │   │   │   │   │   └── ChoiceLoaderTest.php
│   │   │   │   │   │   ├── CachingFactoryDecoratorTest.php
│   │   │   │   │   │   ├── DefaultChoiceListFactoryTest.php
│   │   │   │   │   │   └── PropertyAccessDecoratorTest.php
│   │   │   │   │   ├── Loader
│   │   │   │   │   │   ├── CallbackChoiceLoaderTest.php
│   │   │   │   │   │   ├── FilterChoiceLoaderDecoratorTest.php
│   │   │   │   │   │   └── IntlCallbackChoiceLoaderTest.php
│   │   │   │   │   ├── AbstractChoiceListTestCase.php
│   │   │   │   │   ├── ArrayChoiceListTest.php
│   │   │   │   │   └── LazyChoiceListTest.php
│   │   │   │   ├── Command
│   │   │   │   │   └── DebugCommandTest.php
│   │   │   │   ├── Console
│   │   │   │   │   └── Descriptor
│   │   │   │   │       ├── AbstractDescriptorTestCase.php
│   │   │   │   │       ├── JsonDescriptorTest.php
│   │   │   │   │       └── TextDescriptorTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   └── FormPassTest.php
│   │   │   │   ├── Extension
│   │   │   │   │   ├── Core
│   │   │   │   │   │   ├── DataMapper
│   │   │   │   │   │   │   └── DataMapperTest.php
│   │   │   │   │   │   ├── DataTransformer
│   │   │   │   │   │   │   ├── Traits
│   │   │   │   │   │   │   │   └── DateTimeEqualsTrait.php
│   │   │   │   │   │   │   ├── ArrayToPartsTransformerTest.php
│   │   │   │   │   │   │   ├── BaseDateTimeTransformerTestCase.php
│   │   │   │   │   │   │   ├── BooleanToStringTransformerTest.php
│   │   │   │   │   │   │   ├── ChoicesToValuesTransformerTest.php
│   │   │   │   │   │   │   ├── ChoiceToValueTransformerTest.php
│   │   │   │   │   │   │   ├── DataTransformerChainTest.php
│   │   │   │   │   │   │   ├── DateIntervalTestCase.php
│   │   │   │   │   │   │   ├── DateIntervalToArrayTransformerTest.php
│   │   │   │   │   │   │   ├── DateIntervalToStringTransformerTest.php
│   │   │   │   │   │   │   ├── DateTimeImmutableToDateTimeTransformerTest.php
│   │   │   │   │   │   │   ├── DateTimeToArrayTransformerTest.php
│   │   │   │   │   │   │   ├── DateTimeToHtml5LocalDateTimeTransformerTest.php
│   │   │   │   │   │   │   ├── DateTimeToLocalizedStringTransformerTest.php
│   │   │   │   │   │   │   ├── DateTimeToRfc3339TransformerTest.php
│   │   │   │   │   │   │   ├── DateTimeToStringTransformerTest.php
│   │   │   │   │   │   │   ├── DateTimeToTimestampTransformerTest.php
│   │   │   │   │   │   │   ├── DateTimeZoneToStringTransformerTest.php
│   │   │   │   │   │   │   ├── IntegerToLocalizedStringTransformerTest.php
│   │   │   │   │   │   │   ├── IntlTimeZoneToStringTransformerTest.php
│   │   │   │   │   │   │   ├── MoneyToLocalizedStringTransformerTest.php
│   │   │   │   │   │   │   ├── NumberToLocalizedStringTransformerTest.php
│   │   │   │   │   │   │   ├── PercentToLocalizedStringTransformerTest.php
│   │   │   │   │   │   │   ├── StringToFloatTransformerTest.php
│   │   │   │   │   │   │   ├── UlidToStringTransformerTest.php
│   │   │   │   │   │   │   ├── UuidToStringTransformerTest.php
│   │   │   │   │   │   │   ├── ValueToDuplicatesTransformerTest.php
│   │   │   │   │   │   │   └── WeekToArrayTransformerTest.php
│   │   │   │   │   │   ├── EventListener
│   │   │   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   │   │   └── randomhash
│   │   │   │   │   │   │   ├── FixUrlProtocolListenerTest.php
│   │   │   │   │   │   │   ├── MergeCollectionListenerArrayObjectTest.php
│   │   │   │   │   │   │   ├── MergeCollectionListenerArrayTest.php
│   │   │   │   │   │   │   ├── MergeCollectionListenerCustomArrayObjectTest.php
│   │   │   │   │   │   │   ├── MergeCollectionListenerTestCase.php
│   │   │   │   │   │   │   ├── ResizeFormListenerTest.php
│   │   │   │   │   │   │   └── TrimListenerTest.php
│   │   │   │   │   │   ├── Type
│   │   │   │   │   │   │   ├── BaseTypeTestCase.php
│   │   │   │   │   │   │   ├── BirthdayTypeTest.php
│   │   │   │   │   │   │   ├── ButtonTypeTest.php
│   │   │   │   │   │   │   ├── CheckboxTypeTest.php
│   │   │   │   │   │   │   ├── ChoiceTypePerformanceTest.php
│   │   │   │   │   │   │   ├── ChoiceTypeTest.php
│   │   │   │   │   │   │   ├── ChoiceTypeTranslationTest.php
│   │   │   │   │   │   │   ├── CollectionTypeTest.php
│   │   │   │   │   │   │   ├── ColorTypeTest.php
│   │   │   │   │   │   │   ├── CountryTypeTest.php
│   │   │   │   │   │   │   ├── CurrencyTypeTest.php
│   │   │   │   │   │   │   ├── DateIntervalTypeTest.php
│   │   │   │   │   │   │   ├── DateTimeTypeTest.php
│   │   │   │   │   │   │   ├── DateTypeTest.php
│   │   │   │   │   │   │   ├── EnumTypeTest.php
│   │   │   │   │   │   │   ├── ExtendedChoiceTypeTest.php
│   │   │   │   │   │   │   ├── FileTypeTest.php
│   │   │   │   │   │   │   ├── FormTypeTest.php
│   │   │   │   │   │   │   ├── IntegerTypeTest.php
│   │   │   │   │   │   │   ├── LanguageTypeTest.php
│   │   │   │   │   │   │   ├── LocaleTypeTest.php
│   │   │   │   │   │   │   ├── MoneyTypeTest.php
│   │   │   │   │   │   │   ├── NumberTypeTest.php
│   │   │   │   │   │   │   ├── PasswordTypeTest.php
│   │   │   │   │   │   │   ├── PercentTypeTest.php
│   │   │   │   │   │   │   ├── RepeatedTypeTest.php
│   │   │   │   │   │   │   ├── SubmitTypeTest.php
│   │   │   │   │   │   │   ├── TextTypeTest.php
│   │   │   │   │   │   │   ├── TimeTypeTest.php
│   │   │   │   │   │   │   ├── TimezoneTypeTest.php
│   │   │   │   │   │   │   ├── UlidTypeTest.php
│   │   │   │   │   │   │   ├── UrlTypeTest.php
│   │   │   │   │   │   │   ├── UuidTypeTest.php
│   │   │   │   │   │   │   └── WeekTypeTest.php
│   │   │   │   │   │   └── CoreExtensionTest.php
│   │   │   │   │   ├── Csrf
│   │   │   │   │   │   ├── EventListener
│   │   │   │   │   │   │   └── CsrfValidationListenerTest.php
│   │   │   │   │   │   └── Type
│   │   │   │   │   │       └── FormTypeCsrfExtensionTest.php
│   │   │   │   │   ├── DataCollector
│   │   │   │   │   │   ├── Type
│   │   │   │   │   │   │   └── DataCollectorTypeExtensionTest.php
│   │   │   │   │   │   ├── DataCollectorExtensionTest.php
│   │   │   │   │   │   ├── FormDataCollectorTest.php
│   │   │   │   │   │   └── FormDataExtractorTest.php
│   │   │   │   │   ├── DependencyInjection
│   │   │   │   │   │   └── DependencyInjectionExtensionTest.php
│   │   │   │   │   ├── HtmlSanitizer
│   │   │   │   │   │   └── Type
│   │   │   │   │   │       └── TextTypeHtmlSanitizerExtensionTest.php
│   │   │   │   │   ├── HttpFoundation
│   │   │   │   │   │   └── HttpFoundationRequestHandlerTest.php
│   │   │   │   │   ├── PasswordHasher
│   │   │   │   │   │   └── Type
│   │   │   │   │   │       └── PasswordTypePasswordHasherExtensionTest.php
│   │   │   │   │   ├── Type
│   │   │   │   │   │   └── ItemFileType.php
│   │   │   │   │   └── Validator
│   │   │   │   │       ├── Constraints
│   │   │   │   │       │   ├── FormValidatorFunctionalTest.php
│   │   │   │   │       │   ├── FormValidatorPerformanceTest.php
│   │   │   │   │       │   └── FormValidatorTest.php
│   │   │   │   │       ├── EventListener
│   │   │   │   │       │   └── ValidationListenerTest.php
│   │   │   │   │       ├── Type
│   │   │   │   │       │   ├── BaseValidatorExtensionTestCase.php
│   │   │   │   │       │   ├── BirthdayTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── CheckboxTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── ChoiceTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── CollectionTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── ColorTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── CountryTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── CurrencyTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── DateIntervalTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── DateTimeTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── DateTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── EmailTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── FileTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── FormTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── HiddenTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── IntegerTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── LanguageTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── LocaleTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── MoneyTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── NumberTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── PasswordTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── PercentTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── RadioTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── RangeTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── RepeatedTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── SearchTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── SubmitTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── TelTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── TimeTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── TimezoneTypeValidatorExtensionTest.php
│   │   │   │   │       │   ├── UploadValidatorExtensionTest.php
│   │   │   │   │       │   └── UrlTypeValidatorExtensionTest.php
│   │   │   │   │       ├── ViolationMapper
│   │   │   │   │       │   ├── Fixtures
│   │   │   │   │       │   │   └── Issue.php
│   │   │   │   │       │   ├── ViolationMapperTest.php
│   │   │   │   │       │   └── ViolationPathTest.php
│   │   │   │   │       ├── ValidatorExtensionTest.php
│   │   │   │   │       └── ValidatorTypeGuesserTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── Debug
│   │   │   │   │   │   ├── A
│   │   │   │   │   │   │   └── AmbiguousType.php
│   │   │   │   │   │   └── B
│   │   │   │   │   │       └── AmbiguousType.php
│   │   │   │   │   ├── Descriptor
│   │   │   │   │   │   ├── default_option_with_normalizer.json
│   │   │   │   │   │   ├── default_option_with_normalizer.txt
│   │   │   │   │   │   ├── defaults_1.json
│   │   │   │   │   │   ├── defaults_1.txt
│   │   │   │   │   │   ├── deprecated_option.json
│   │   │   │   │   │   ├── deprecated_option.txt
│   │   │   │   │   │   ├── deprecated_options_of_type.json
│   │   │   │   │   │   ├── deprecated_options_of_type.txt
│   │   │   │   │   │   ├── overridden_option_with_default_closures.json
│   │   │   │   │   │   ├── overridden_option_with_default_closures.txt
│   │   │   │   │   │   ├── required_option_with_allowed_values.json
│   │   │   │   │   │   ├── required_option_with_allowed_values.txt
│   │   │   │   │   │   ├── resolved_form_type_1.json
│   │   │   │   │   │   ├── resolved_form_type_1.txt
│   │   │   │   │   │   ├── resolved_form_type_2.json
│   │   │   │   │   │   ├── resolved_form_type_2.txt
│   │   │   │   │   │   ├── types_with_deprecated_options.json
│   │   │   │   │   │   └── types_with_deprecated_options.txt
│   │   │   │   │   ├── AbstractAuthor.php
│   │   │   │   │   ├── AlternatingRowType.php
│   │   │   │   │   ├── Answer.php
│   │   │   │   │   ├── ArrayChoiceLoader.php
│   │   │   │   │   ├── Author.php
│   │   │   │   │   ├── AuthorInterface.php
│   │   │   │   │   ├── AuthorType.php
│   │   │   │   │   ├── BlockPrefixedFooTextType.php
│   │   │   │   │   ├── ChoiceSubType.php
│   │   │   │   │   ├── ChoiceTypeExtension.php
│   │   │   │   │   ├── ConfigurableFormType.php
│   │   │   │   │   ├── CustomArrayObject.php
│   │   │   │   │   ├── DummyFormRendererEngine.php
│   │   │   │   │   ├── FBooType.php
│   │   │   │   │   ├── FixedDataTransformer.php
│   │   │   │   │   ├── FixedFilterListener.php
│   │   │   │   │   ├── FixedTranslator.php
│   │   │   │   │   ├── foo
│   │   │   │   │   ├── Foo.php
│   │   │   │   │   ├── Foo1Bar2Type.php
│   │   │   │   │   ├── foo2
│   │   │   │   │   ├── foo3
│   │   │   │   │   ├── FooBarHTMLType.php
│   │   │   │   │   ├── FooSubType.php
│   │   │   │   │   ├── FooType.php
│   │   │   │   │   ├── FooTypeBarExtension.php
│   │   │   │   │   ├── FooTypeBazExtension.php
│   │   │   │   │   ├── FormWithSameParentType.php
│   │   │   │   │   ├── LazyChoiceTypeExtension.php
│   │   │   │   │   ├── Map.php
│   │   │   │   │   ├── NotMappedType.php
│   │   │   │   │   ├── NullFormTypeGuesser.php
│   │   │   │   │   ├── Number.php
│   │   │   │   │   ├── RecursiveFormTypeBar.php
│   │   │   │   │   ├── RecursiveFormTypeBaz.php
│   │   │   │   │   ├── RecursiveFormTypeFoo.php
│   │   │   │   │   ├── RepeatedPasswordField.php
│   │   │   │   │   ├── Suit.php
│   │   │   │   │   ├── TestExtension.php
│   │   │   │   │   ├── TranslatableTextAlign.php
│   │   │   │   │   ├── Type.php
│   │   │   │   │   ├── TypehintedPropertiesCar.php
│   │   │   │   │   └── User.php
│   │   │   │   ├── Guess
│   │   │   │   │   └── GuessTest.php
│   │   │   │   ├── Resources
│   │   │   │   │   └── TranslationFilesTest.php
│   │   │   │   ├── Util
│   │   │   │   │   ├── OrderedHashMapTest.php
│   │   │   │   │   ├── ServerParamsTest.php
│   │   │   │   │   └── StringUtilTest.php
│   │   │   │   ├── AbstractExtensionTest.php
│   │   │   │   ├── AbstractRequestHandlerTestCase.php
│   │   │   │   ├── ButtonBuilderTest.php
│   │   │   │   ├── ButtonTest.php
│   │   │   │   ├── CallbackTransformerTest.php
│   │   │   │   ├── CompoundFormPerformanceTest.php
│   │   │   │   ├── CompoundFormTest.php
│   │   │   │   ├── FormBuilderTest.php
│   │   │   │   ├── FormConfigTest.php
│   │   │   │   ├── FormErrorIteratorTest.php
│   │   │   │   ├── FormFactoryBuilderTest.php
│   │   │   │   ├── FormFactoryTest.php
│   │   │   │   ├── FormRegistryTest.php
│   │   │   │   ├── FormRendererTest.php
│   │   │   │   ├── NativeRequestHandlerTest.php
│   │   │   │   ├── ResolvedFormTypeTest.php
│   │   │   │   ├── SimpleFormTest.php
│   │   │   │   └── VersionAwareTest.php
│   │   │   ├── Util
│   │   │   │   ├── FormUtil.php
│   │   │   │   ├── InheritDataAwareIterator.php
│   │   │   │   ├── OptionsResolverWrapper.php
│   │   │   │   ├── OrderedHashMap.php
│   │   │   │   ├── OrderedHashMapIterator.php
│   │   │   │   ├── ServerParams.php
│   │   │   │   └── StringUtil.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── AbstractExtension.php
│   │   │   ├── AbstractRendererEngine.php
│   │   │   ├── AbstractType.php
│   │   │   ├── AbstractTypeExtension.php
│   │   │   ├── Button.php
│   │   │   ├── ButtonBuilder.php
│   │   │   ├── ButtonTypeInterface.php
│   │   │   ├── CallbackTransformer.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── ClearableErrorsInterface.php
│   │   │   ├── ClickableInterface.php
│   │   │   ├── composer.json
│   │   │   ├── DataAccessorInterface.php
│   │   │   ├── DataMapperInterface.php
│   │   │   ├── DataTransformerInterface.php
│   │   │   ├── FileUploadError.php
│   │   │   ├── Form.php
│   │   │   ├── FormBuilder.php
│   │   │   ├── FormBuilderInterface.php
│   │   │   ├── FormConfigBuilder.php
│   │   │   ├── FormConfigBuilderInterface.php
│   │   │   ├── FormConfigInterface.php
│   │   │   ├── FormError.php
│   │   │   ├── FormErrorIterator.php
│   │   │   ├── FormEvent.php
│   │   │   ├── FormEvents.php
│   │   │   ├── FormExtensionInterface.php
│   │   │   ├── FormFactory.php
│   │   │   ├── FormFactoryBuilder.php
│   │   │   ├── FormFactoryBuilderInterface.php
│   │   │   ├── FormFactoryInterface.php
│   │   │   ├── FormInterface.php
│   │   │   ├── FormRegistry.php
│   │   │   ├── FormRegistryInterface.php
│   │   │   ├── FormRenderer.php
│   │   │   ├── FormRendererEngineInterface.php
│   │   │   ├── FormRendererInterface.php
│   │   │   ├── Forms.php
│   │   │   ├── FormTypeExtensionInterface.php
│   │   │   ├── FormTypeGuesserChain.php
│   │   │   ├── FormTypeGuesserInterface.php
│   │   │   ├── FormTypeInterface.php
│   │   │   ├── FormView.php
│   │   │   ├── LICENSE
│   │   │   ├── NativeRequestHandler.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── PreloadedExtension.php
│   │   │   ├── README.md
│   │   │   ├── RequestHandlerInterface.php
│   │   │   ├── ResolvedFormType.php
│   │   │   ├── ResolvedFormTypeFactory.php
│   │   │   ├── ResolvedFormTypeFactoryInterface.php
│   │   │   ├── ResolvedFormTypeInterface.php
│   │   │   ├── ReversedTransformer.php
│   │   │   ├── SubmitButton.php
│   │   │   ├── SubmitButtonBuilder.php
│   │   │   └── SubmitButtonTypeInterface.php
│   │   ├── framework-bundle
│   │   │   ├── CacheWarmer
│   │   │   │   ├── AbstractPhpFileCacheWarmer.php
│   │   │   │   ├── CachePoolClearerCacheWarmer.php
│   │   │   │   ├── ConfigBuilderCacheWarmer.php
│   │   │   │   ├── RouterCacheWarmer.php
│   │   │   │   ├── SerializerCacheWarmer.php
│   │   │   │   ├── TranslationsCacheWarmer.php
│   │   │   │   └── ValidatorCacheWarmer.php
│   │   │   ├── Command
│   │   │   │   ├── AboutCommand.php
│   │   │   │   ├── AbstractConfigCommand.php
│   │   │   │   ├── AssetsInstallCommand.php
│   │   │   │   ├── BuildDebugContainerTrait.php
│   │   │   │   ├── CacheClearCommand.php
│   │   │   │   ├── CachePoolClearCommand.php
│   │   │   │   ├── CachePoolDeleteCommand.php
│   │   │   │   ├── CachePoolInvalidateTagsCommand.php
│   │   │   │   ├── CachePoolListCommand.php
│   │   │   │   ├── CachePoolPruneCommand.php
│   │   │   │   ├── CacheWarmupCommand.php
│   │   │   │   ├── ConfigDebugCommand.php
│   │   │   │   ├── ConfigDumpReferenceCommand.php
│   │   │   │   ├── ContainerDebugCommand.php
│   │   │   │   ├── ContainerLintCommand.php
│   │   │   │   ├── DebugAutowiringCommand.php
│   │   │   │   ├── EventDispatcherDebugCommand.php
│   │   │   │   ├── RouterDebugCommand.php
│   │   │   │   ├── RouterMatchCommand.php
│   │   │   │   ├── SecretsDecryptToLocalCommand.php
│   │   │   │   ├── SecretsEncryptFromLocalCommand.php
│   │   │   │   ├── SecretsGenerateKeysCommand.php
│   │   │   │   ├── SecretsListCommand.php
│   │   │   │   ├── SecretsRemoveCommand.php
│   │   │   │   ├── SecretsSetCommand.php
│   │   │   │   ├── TranslationDebugCommand.php
│   │   │   │   ├── TranslationUpdateCommand.php
│   │   │   │   ├── WorkflowDumpCommand.php
│   │   │   │   ├── XliffLintCommand.php
│   │   │   │   └── YamlLintCommand.php
│   │   │   ├── Console
│   │   │   │   ├── Descriptor
│   │   │   │   │   ├── Descriptor.php
│   │   │   │   │   ├── JsonDescriptor.php
│   │   │   │   │   ├── MarkdownDescriptor.php
│   │   │   │   │   ├── TextDescriptor.php
│   │   │   │   │   └── XmlDescriptor.php
│   │   │   │   ├── Helper
│   │   │   │   │   └── DescriptorHelper.php
│   │   │   │   └── Application.php
│   │   │   ├── Controller
│   │   │   │   ├── AbstractController.php
│   │   │   │   ├── ControllerResolver.php
│   │   │   │   ├── RedirectController.php
│   │   │   │   └── TemplateController.php
│   │   │   ├── DataCollector
│   │   │   │   ├── AbstractDataCollector.php
│   │   │   │   ├── RouterDataCollector.php
│   │   │   │   └── TemplateAwareDataCollectorInterface.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── Compiler
│   │   │   │   │   ├── AddDebugLogProcessorPass.php
│   │   │   │   │   ├── AssetsContextPass.php
│   │   │   │   │   ├── ContainerBuilderDebugDumpPass.php
│   │   │   │   │   ├── ErrorLoggerCompilerPass.php
│   │   │   │   │   ├── ProfilerPass.php
│   │   │   │   │   ├── RemoveUnusedSessionMarshallingHandlerPass.php
│   │   │   │   │   ├── TestServiceContainerRealRefPass.php
│   │   │   │   │   ├── TestServiceContainerWeakRefPass.php
│   │   │   │   │   └── UnusedTagsPass.php
│   │   │   │   ├── Configuration.php
│   │   │   │   ├── FrameworkExtension.php
│   │   │   │   └── VirtualRequestStackPass.php
│   │   │   ├── EventListener
│   │   │   │   ├── ConsoleProfilerListener.php
│   │   │   │   └── SuggestMissingPackageSubscriber.php
│   │   │   ├── HttpCache
│   │   │   │   └── HttpCache.php
│   │   │   ├── Kernel
│   │   │   │   └── MicroKernelTrait.php
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   │   └── check-unused-known-tags.php
│   │   │   │   └── config
│   │   │   │       ├── routing
│   │   │   │       │   ├── errors.xml
│   │   │   │       │   └── webhook.xml
│   │   │   │       ├── schema
│   │   │   │       │   └── symfony-1.0.xsd
│   │   │   │       ├── asset_mapper.php
│   │   │   │       ├── assets.php
│   │   │   │       ├── cache_debug.php
│   │   │   │       ├── cache.php
│   │   │   │       ├── collectors.php
│   │   │   │       ├── console.php
│   │   │   │       ├── debug_prod.php
│   │   │   │       ├── debug.php
│   │   │   │       ├── error_renderer.php
│   │   │   │       ├── esi.php
│   │   │   │       ├── form_csrf.php
│   │   │   │       ├── form_debug.php
│   │   │   │       ├── form.php
│   │   │   │       ├── fragment_listener.php
│   │   │   │       ├── fragment_renderer.php
│   │   │   │       ├── html_sanitizer.php
│   │   │   │       ├── http_client_debug.php
│   │   │   │       ├── http_client.php
│   │   │   │       ├── identity_translator.php
│   │   │   │       ├── lock.php
│   │   │   │       ├── mailer_debug.php
│   │   │   │       ├── mailer_transports.php
│   │   │   │       ├── mailer_webhook.php
│   │   │   │       ├── mailer.php
│   │   │   │       ├── messenger_debug.php
│   │   │   │       ├── messenger.php
│   │   │   │       ├── mime_type.php
│   │   │   │       ├── notifier_debug.php
│   │   │   │       ├── notifier_transports.php
│   │   │   │       ├── notifier_webhook.php
│   │   │   │       ├── notifier.php
│   │   │   │       ├── process.php
│   │   │   │       ├── profiling.php
│   │   │   │       ├── property_access.php
│   │   │   │       ├── property_info.php
│   │   │   │       ├── rate_limiter.php
│   │   │   │       ├── remote_event.php
│   │   │   │       ├── request.php
│   │   │   │       ├── routing.php
│   │   │   │       ├── scheduler.php
│   │   │   │       ├── secrets.php
│   │   │   │       ├── security_csrf.php
│   │   │   │       ├── semaphore.php
│   │   │   │       ├── serializer_debug.php
│   │   │   │       ├── serializer.php
│   │   │   │       ├── services.php
│   │   │   │       ├── session.php
│   │   │   │       ├── ssi.php
│   │   │   │       ├── test.php
│   │   │   │       ├── translation_debug.php
│   │   │   │       ├── translation_providers.php
│   │   │   │       ├── translation.php
│   │   │   │       ├── uid.php
│   │   │   │       ├── validator_debug.php
│   │   │   │       ├── validator.php
│   │   │   │       ├── web_link.php
│   │   │   │       ├── web.php
│   │   │   │       ├── webhook.php
│   │   │   │       ├── workflow_debug.php
│   │   │   │       └── workflow.php
│   │   │   ├── Routing
│   │   │   │   ├── Attribute
│   │   │   │   │   └── AsRoutingConditionService.php
│   │   │   │   ├── AttributeRouteControllerLoader.php
│   │   │   │   ├── DelegatingLoader.php
│   │   │   │   ├── RedirectableCompiledUrlMatcher.php
│   │   │   │   ├── RouteLoaderInterface.php
│   │   │   │   └── Router.php
│   │   │   ├── Secrets
│   │   │   │   ├── AbstractVault.php
│   │   │   │   ├── DotenvVault.php
│   │   │   │   └── SodiumVault.php
│   │   │   ├── Test
│   │   │   │   ├── BrowserKitAssertionsTrait.php
│   │   │   │   ├── DomCrawlerAssertionsTrait.php
│   │   │   │   ├── HttpClientAssertionsTrait.php
│   │   │   │   ├── KernelTestCase.php
│   │   │   │   ├── MailerAssertionsTrait.php
│   │   │   │   ├── NotificationAssertionsTrait.php
│   │   │   │   ├── TestBrowserToken.php
│   │   │   │   ├── TestContainer.php
│   │   │   │   ├── WebTestAssertionsTrait.php
│   │   │   │   └── WebTestCase.php
│   │   │   ├── Tests
│   │   │   │   ├── CacheWarmer
│   │   │   │   │   ├── ConfigBuilderCacheWarmerTest.php
│   │   │   │   │   ├── RouterCacheWarmerTest.php
│   │   │   │   │   ├── SerializerCacheWarmerTest.php
│   │   │   │   │   └── ValidatorCacheWarmerTest.php
│   │   │   │   ├── Command
│   │   │   │   │   ├── AboutCommand
│   │   │   │   │   │   ├── Fixture
│   │   │   │   │   │   │   └── TestAppKernel.php
│   │   │   │   │   │   └── AboutCommandTest.php
│   │   │   │   │   ├── CacheClearCommand
│   │   │   │   │   │   ├── Fixture
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── TestAppKernel.php
│   │   │   │   │   │   └── CacheClearCommandTest.php
│   │   │   │   │   ├── CachePoolClearCommandTest.php
│   │   │   │   │   ├── CachePoolDeleteCommandTest.php
│   │   │   │   │   ├── CachePoolInvalidateTagsCommandTest.php
│   │   │   │   │   ├── CachePruneCommandTest.php
│   │   │   │   │   ├── EventDispatcherDebugCommandTest.php
│   │   │   │   │   ├── RouterMatchCommandTest.php
│   │   │   │   │   ├── SecretsListCommandTest.php
│   │   │   │   │   ├── SecretsRemoveCommandTest.php
│   │   │   │   │   ├── SecretsSetCommandTest.php
│   │   │   │   │   ├── TranslationDebugCommandTest.php
│   │   │   │   │   ├── TranslationUpdateCommandCompletionTest.php
│   │   │   │   │   ├── TranslationUpdateCommandTest.php
│   │   │   │   │   ├── WorkflowDumpCommandTest.php
│   │   │   │   │   ├── XliffLintCommandTest.php
│   │   │   │   │   └── YamlLintCommandTest.php
│   │   │   │   ├── Console
│   │   │   │   │   ├── Descriptor
│   │   │   │   │   │   ├── AbstractDescriptorTestCase.php
│   │   │   │   │   │   ├── JsonDescriptorTest.php
│   │   │   │   │   │   ├── MarkdownDescriptorTest.php
│   │   │   │   │   │   ├── ObjectsProvider.php
│   │   │   │   │   │   ├── TextDescriptorTest.php
│   │   │   │   │   │   └── XmlDescriptorTest.php
│   │   │   │   │   └── ApplicationTest.php
│   │   │   │   ├── Controller
│   │   │   │   │   ├── AbstractControllerTest.php
│   │   │   │   │   ├── ControllerResolverTest.php
│   │   │   │   │   ├── RedirectControllerTest.php
│   │   │   │   │   ├── TemplateControllerTest.php
│   │   │   │   │   └── TestAbstractController.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   └── RouterDataCollectorTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── Compiler
│   │   │   │   │   │   ├── ProfilerPassTest.php
│   │   │   │   │   │   ├── TestServiceContainerRefPassesTest.php
│   │   │   │   │   │   ├── UnusedTagsPassTest.php
│   │   │   │   │   │   └── UnusedTagsPassUtils.php
│   │   │   │   │   ├── config
│   │   │   │   │   │   ├── serializer
│   │   │   │   │   │   │   └── foo.yml
│   │   │   │   │   │   └── validator
│   │   │   │   │   │       └── foo.xml
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── CustomPathBundle
│   │   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   │   └── config
│   │   │   │   │   │   │   │       ├── validation.xml
│   │   │   │   │   │   │   │       └── validation.yml
│   │   │   │   │   │   │   └── src
│   │   │   │   │   │   │       └── CustomPathBundle.php
│   │   │   │   │   │   ├── php
│   │   │   │   │   │   │   ├── asset_mapper_without_assets.php
│   │   │   │   │   │   │   ├── assets_disabled.php
│   │   │   │   │   │   │   ├── assets_version_strategy_as_service.php
│   │   │   │   │   │   │   ├── assets.php
│   │   │   │   │   │   │   ├── cache_app_redis_tag_aware_pool.php
│   │   │   │   │   │   │   ├── cache_app_redis_tag_aware.php
│   │   │   │   │   │   │   ├── cache.php
│   │   │   │   │   │   │   ├── csrf_needs_session.php
│   │   │   │   │   │   │   ├── csrf.php
│   │   │   │   │   │   │   ├── default_config.php
│   │   │   │   │   │   │   ├── esi_and_ssi_without_fragments.php
│   │   │   │   │   │   │   ├── esi_disabled.php
│   │   │   │   │   │   │   ├── exceptions.php
│   │   │   │   │   │   │   ├── form_csrf_disabled.php
│   │   │   │   │   │   │   ├── form_default_csrf.php
│   │   │   │   │   │   │   ├── form_no_csrf.php
│   │   │   │   │   │   │   ├── fragments_and_hinclude.php
│   │   │   │   │   │   │   ├── full.php
│   │   │   │   │   │   │   ├── html_sanitizer_default_allowed_link_and_media_hosts.php
│   │   │   │   │   │   │   ├── html_sanitizer_default_config.php
│   │   │   │   │   │   │   ├── html_sanitizer.php
│   │   │   │   │   │   │   ├── http_client_default_options.php
│   │   │   │   │   │   │   ├── http_client_full_default_options.php
│   │   │   │   │   │   │   ├── http_client_mock_response_factory.php
│   │   │   │   │   │   │   ├── http_client_override_default_options.php
│   │   │   │   │   │   │   ├── http_client_retry.php
│   │   │   │   │   │   │   ├── http_client_scoped_without_query_option.php
│   │   │   │   │   │   │   ├── http_client_xml_key.php
│   │   │   │   │   │   │   ├── mailer_with_disabled_message_bus.php
│   │   │   │   │   │   │   ├── mailer_with_dsn.php
│   │   │   │   │   │   │   ├── mailer_with_specific_message_bus.php
│   │   │   │   │   │   │   ├── mailer_with_transports.php
│   │   │   │   │   │   │   ├── mailer.php
│   │   │   │   │   │   │   ├── messenger_disabled.php
│   │   │   │   │   │   │   ├── messenger_middleware_factory_erroneous_format.php
│   │   │   │   │   │   │   ├── messenger_multiple_buses.php
│   │   │   │   │   │   │   ├── messenger_multiple_failure_transports_global.php
│   │   │   │   │   │   │   ├── messenger_multiple_failure_transports.php
│   │   │   │   │   │   │   ├── messenger_routing_invalid_transport.php
│   │   │   │   │   │   │   ├── messenger_routing_invalid_wildcard.php
│   │   │   │   │   │   │   ├── messenger_routing_single.php
│   │   │   │   │   │   │   ├── messenger_routing.php
│   │   │   │   │   │   │   ├── messenger_transport.php
│   │   │   │   │   │   │   ├── messenger_transports.php
│   │   │   │   │   │   │   ├── messenger.php
│   │   │   │   │   │   │   ├── notifier_with_disabled_message_bus.php
│   │   │   │   │   │   │   ├── notifier_with_specific_message_bus.php
│   │   │   │   │   │   │   ├── notifier_without_mailer.php
│   │   │   │   │   │   │   ├── notifier_without_messenger.php
│   │   │   │   │   │   │   ├── notifier_without_transports.php
│   │   │   │   │   │   │   ├── notifier.php
│   │   │   │   │   │   │   ├── php_errors_disabled.php
│   │   │   │   │   │   │   ├── php_errors_enabled.php
│   │   │   │   │   │   │   ├── php_errors_log_level.php
│   │   │   │   │   │   │   ├── php_errors_log_levels.php
│   │   │   │   │   │   │   ├── profiler_collect_serializer_data.php
│   │   │   │   │   │   │   ├── profiler.php
│   │   │   │   │   │   │   ├── property_accessor.php
│   │   │   │   │   │   │   ├── property_info.php
│   │   │   │   │   │   │   ├── request.php
│   │   │   │   │   │   │   ├── serializer_disabled.php
│   │   │   │   │   │   │   ├── serializer_enabled.php
│   │   │   │   │   │   │   ├── serializer_mapping_without_annotations.php
│   │   │   │   │   │   │   ├── serializer_mapping.php
│   │   │   │   │   │   │   ├── serializer_without_translator.php
│   │   │   │   │   │   │   ├── session_cookie_secure_auto.php
│   │   │   │   │   │   │   ├── session.php
│   │   │   │   │   │   │   ├── ssi_disabled.php
│   │   │   │   │   │   │   ├── translator_cache_dir_disabled.php
│   │   │   │   │   │   │   ├── translator_fallbacks.php
│   │   │   │   │   │   │   ├── validation_attributes.php
│   │   │   │   │   │   │   ├── validation_auto_mapping.php
│   │   │   │   │   │   │   ├── validation_email_validation_mode.php
│   │   │   │   │   │   │   ├── validation_mapping.php
│   │   │   │   │   │   │   ├── validation_multiple_static_methods.php
│   │   │   │   │   │   │   ├── validation_no_static_method.php
│   │   │   │   │   │   │   ├── validation_translation_domain.php
│   │   │   │   │   │   │   ├── web_link.php
│   │   │   │   │   │   │   ├── webhook_without_serializer.php
│   │   │   │   │   │   │   ├── webhook.php
│   │   │   │   │   │   │   ├── workflow_not_valid.php
│   │   │   │   │   │   │   ├── workflow_with_guard_expression.php
│   │   │   │   │   │   │   ├── workflow_with_multiple_transitions_with_same_name.php
│   │   │   │   │   │   │   ├── workflow_with_no_events_to_dispatch.php
│   │   │   │   │   │   │   ├── workflow_with_specified_events_to_dispatch.php
│   │   │   │   │   │   │   ├── workflow_with_support_and_support_strategy.php
│   │   │   │   │   │   │   ├── workflow_without_support_and_support_strategy.php
│   │   │   │   │   │   │   ├── workflows_enabled.php
│   │   │   │   │   │   │   ├── workflows_explicitly_enabled_named_workflows.php
│   │   │   │   │   │   │   ├── workflows_explicitly_enabled.php
│   │   │   │   │   │   │   └── workflows.php
│   │   │   │   │   │   ├── TestBundle
│   │   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   │   └── config
│   │   │   │   │   │   │   │       ├── serializer_mapping
│   │   │   │   │   │   │   │       │   ├── files
│   │   │   │   │   │   │   │       │   │   ├── foo.xml
│   │   │   │   │   │   │   │       │   │   └── foo.yml
│   │   │   │   │   │   │   │       │   ├── serialization.yaml
│   │   │   │   │   │   │   │       │   └── serialization.yml
│   │   │   │   │   │   │   │       ├── validation_mapping
│   │   │   │   │   │   │   │       │   ├── files
│   │   │   │   │   │   │   │       │   │   ├── foo.xml
│   │   │   │   │   │   │   │       │   │   └── foo.yml
│   │   │   │   │   │   │   │       │   ├── validation.yaml
│   │   │   │   │   │   │   │       │   └── validation.yml
│   │   │   │   │   │   │   │       ├── serialization.xml
│   │   │   │   │   │   │   │       ├── serialization.yml
│   │   │   │   │   │   │   │       ├── validation.xml
│   │   │   │   │   │   │   │       └── validation.yml
│   │   │   │   │   │   │   └── TestBundle.php
│   │   │   │   │   │   ├── translations
│   │   │   │   │   │   │   ├── domain.with.dots.en.yml
│   │   │   │   │   │   │   └── test_paths.en.yml
│   │   │   │   │   │   ├── xml
│   │   │   │   │   │   │   ├── asset_mapper_without_assets.xml
│   │   │   │   │   │   │   ├── asset_mapper.xml
│   │   │   │   │   │   │   ├── assets_disabled.xml
│   │   │   │   │   │   │   ├── assets_version_strategy_as_service.xml
│   │   │   │   │   │   │   ├── assets.xml
│   │   │   │   │   │   │   ├── cache_app_redis_tag_aware_pool.xml
│   │   │   │   │   │   │   ├── cache_app_redis_tag_aware.xml
│   │   │   │   │   │   │   ├── cache.xml
│   │   │   │   │   │   │   ├── csrf_disabled.xml
│   │   │   │   │   │   │   ├── csrf_needs_session.xml
│   │   │   │   │   │   │   ├── csrf.xml
│   │   │   │   │   │   │   ├── default_config.xml
│   │   │   │   │   │   │   ├── esi_and_ssi_without_fragments.xml
│   │   │   │   │   │   │   ├── esi_disabled.xml
│   │   │   │   │   │   │   ├── exceptions.xml
│   │   │   │   │   │   │   ├── form_csrf_disabled.xml
│   │   │   │   │   │   │   ├── form_csrf_sets_field_name.xml
│   │   │   │   │   │   │   ├── form_csrf_under_form_sets_field_name.xml
│   │   │   │   │   │   │   ├── form_default_csrf.xml
│   │   │   │   │   │   │   ├── form_no_csrf.xml
│   │   │   │   │   │   │   ├── fragments_and_hinclude.xml
│   │   │   │   │   │   │   ├── full.xml
│   │   │   │   │   │   │   ├── html_sanitizer_default_allowed_link_and_media_hosts.xml
│   │   │   │   │   │   │   ├── html_sanitizer_default_config.xml
│   │   │   │   │   │   │   ├── html_sanitizer.xml
│   │   │   │   │   │   │   ├── http_client_default_options.xml
│   │   │   │   │   │   │   ├── http_client_full_default_options.xml
│   │   │   │   │   │   │   ├── http_client_mock_response_factory.xml
│   │   │   │   │   │   │   ├── http_client_override_default_options.xml
│   │   │   │   │   │   │   ├── http_client_retry.xml
│   │   │   │   │   │   │   ├── http_client_scoped_without_query_option.xml
│   │   │   │   │   │   │   ├── http_client_xml_key.xml
│   │   │   │   │   │   │   ├── lock_named.xml
│   │   │   │   │   │   │   ├── lock.xml
│   │   │   │   │   │   │   ├── mailer_with_disabled_message_bus.xml
│   │   │   │   │   │   │   ├── mailer_with_dsn.xml
│   │   │   │   │   │   │   ├── mailer_with_specific_message_bus.xml
│   │   │   │   │   │   │   ├── mailer_with_transports.xml
│   │   │   │   │   │   │   ├── messenger_disabled.xml
│   │   │   │   │   │   │   ├── messenger_multiple_buses.xml
│   │   │   │   │   │   │   ├── messenger_multiple_failure_transports_global.xml
│   │   │   │   │   │   │   ├── messenger_multiple_failure_transports.xml
│   │   │   │   │   │   │   ├── messenger_routing_invalid_transport.xml
│   │   │   │   │   │   │   ├── messenger_routing_invalid_wildcard.xml
│   │   │   │   │   │   │   ├── messenger_routing_single.xml
│   │   │   │   │   │   │   ├── messenger_routing.xml
│   │   │   │   │   │   │   ├── messenger_schedule.xml
│   │   │   │   │   │   │   ├── messenger_transport.xml
│   │   │   │   │   │   │   ├── messenger_transports.xml
│   │   │   │   │   │   │   ├── messenger.xml
│   │   │   │   │   │   │   ├── notifier_with_disabled_message_bus.xml
│   │   │   │   │   │   │   ├── notifier_with_specific_message_bus.xml
│   │   │   │   │   │   │   ├── notifier_without_mailer.xml
│   │   │   │   │   │   │   ├── notifier_without_messenger.xml
│   │   │   │   │   │   │   ├── notifier_without_transports.xml
│   │   │   │   │   │   │   ├── notifier.xml
│   │   │   │   │   │   │   ├── php_errors_disabled.xml
│   │   │   │   │   │   │   ├── php_errors_enabled.xml
│   │   │   │   │   │   │   ├── php_errors_log_level.xml
│   │   │   │   │   │   │   ├── php_errors_log_levels.xml
│   │   │   │   │   │   │   ├── profiler_collect_serializer_data.xml
│   │   │   │   │   │   │   ├── profiler.xml
│   │   │   │   │   │   │   ├── property_accessor.xml
│   │   │   │   │   │   │   ├── property_info.xml
│   │   │   │   │   │   │   ├── rate_limiter.xml
│   │   │   │   │   │   │   ├── request.xml
│   │   │   │   │   │   │   ├── semaphore.xml
│   │   │   │   │   │   │   ├── serializer_disabled.xml
│   │   │   │   │   │   │   ├── serializer_enabled.xml
│   │   │   │   │   │   │   ├── serializer_mapping_without_annotations.xml
│   │   │   │   │   │   │   ├── serializer_mapping.xml
│   │   │   │   │   │   │   ├── serializer_without_translator.xml
│   │   │   │   │   │   │   ├── session_cookie_secure_auto.xml
│   │   │   │   │   │   │   ├── session.xml
│   │   │   │   │   │   │   ├── ssi_disabled.xml
│   │   │   │   │   │   │   ├── translator_cache_dir_disabled.xml
│   │   │   │   │   │   │   ├── translator_fallbacks.xml
│   │   │   │   │   │   │   ├── validation_attributes.xml
│   │   │   │   │   │   │   ├── validation_auto_mapping.xml
│   │   │   │   │   │   │   ├── validation_email_validation_mode.xml
│   │   │   │   │   │   │   ├── validation_mapping.xml
│   │   │   │   │   │   │   ├── validation_multiple_static_methods.xml
│   │   │   │   │   │   │   ├── validation_no_static_method.xml
│   │   │   │   │   │   │   ├── validation_translation_domain.xml
│   │   │   │   │   │   │   ├── web_link.xml
│   │   │   │   │   │   │   ├── webhook_without_serializer.xml
│   │   │   │   │   │   │   ├── webhook.xml
│   │   │   │   │   │   │   ├── workflow_not_valid.xml
│   │   │   │   │   │   │   ├── workflow_with_guard_expression.xml
│   │   │   │   │   │   │   ├── workflow_with_multiple_transitions_with_same_name.xml
│   │   │   │   │   │   │   ├── workflow_with_no_events_to_dispatch.xml
│   │   │   │   │   │   │   ├── workflow_with_specified_events_to_dispatch.xml
│   │   │   │   │   │   │   ├── workflow_with_support_and_support_strategy.xml
│   │   │   │   │   │   │   ├── workflow_without_support_and_support_strategy.xml
│   │   │   │   │   │   │   ├── workflows_enabled.xml
│   │   │   │   │   │   │   ├── workflows_explicitly_enabled_named_workflows.xml
│   │   │   │   │   │   │   ├── workflows_explicitly_enabled.xml
│   │   │   │   │   │   │   └── workflows.xml
│   │   │   │   │   │   └── yml
│   │   │   │   │   │       ├── asset_mapper_without_assets.yml
│   │   │   │   │   │       ├── assets_disabled.yml
│   │   │   │   │   │       ├── assets_version_strategy_as_service.yml
│   │   │   │   │   │       ├── assets.yml
│   │   │   │   │   │       ├── cache_app_redis_tag_aware_pool.yml
│   │   │   │   │   │       ├── cache_app_redis_tag_aware.yml
│   │   │   │   │   │       ├── cache.yml
│   │   │   │   │   │       ├── csrf_needs_session.yml
│   │   │   │   │   │       ├── csrf.yml
│   │   │   │   │   │       ├── default_config.yml
│   │   │   │   │   │       ├── esi_and_ssi_without_fragments.yml
│   │   │   │   │   │       ├── esi_disabled.yml
│   │   │   │   │   │       ├── exceptions.yml
│   │   │   │   │   │       ├── form_csrf_disabled.yml
│   │   │   │   │   │       ├── form_default_csrf.yml
│   │   │   │   │   │       ├── form_no_csrf.yml
│   │   │   │   │   │       ├── fragments_and_hinclude.yml
│   │   │   │   │   │       ├── full.yml
│   │   │   │   │   │       ├── html_sanitizer_default_allowed_link_and_media_hosts.yml
│   │   │   │   │   │       ├── html_sanitizer_default_config.yml
│   │   │   │   │   │       ├── html_sanitizer.yml
│   │   │   │   │   │       ├── http_client_default_options.yml
│   │   │   │   │   │       ├── http_client_full_default_options.yml
│   │   │   │   │   │       ├── http_client_mock_response_factory.yml
│   │   │   │   │   │       ├── http_client_override_default_options.yml
│   │   │   │   │   │       ├── http_client_retry.yml
│   │   │   │   │   │       ├── http_client_scoped_without_query_option.yml
│   │   │   │   │   │       ├── http_client_xml_key.yml
│   │   │   │   │   │       ├── lock_named.yml
│   │   │   │   │   │       ├── lock.yml
│   │   │   │   │   │       ├── mailer_with_disabled_message_bus.yml
│   │   │   │   │   │       ├── mailer_with_dsn.yml
│   │   │   │   │   │       ├── mailer_with_specific_message_bus.yml
│   │   │   │   │   │       ├── mailer_with_transports.yml
│   │   │   │   │   │       ├── messenger_disabled.yml
│   │   │   │   │   │       ├── messenger_middleware_factory_erroneous_format.yml
│   │   │   │   │   │       ├── messenger_multiple_buses.yml
│   │   │   │   │   │       ├── messenger_multiple_failure_transports_global.yml
│   │   │   │   │   │       ├── messenger_multiple_failure_transports.yml
│   │   │   │   │   │       ├── messenger_routing_invalid_transport.yml
│   │   │   │   │   │       ├── messenger_routing_invalid_wildcard.yml
│   │   │   │   │   │       ├── messenger_routing_single.yml
│   │   │   │   │   │       ├── messenger_routing.yml
│   │   │   │   │   │       ├── messenger_schedule.yml
│   │   │   │   │   │       ├── messenger_transport.yml
│   │   │   │   │   │       ├── messenger_transports.yml
│   │   │   │   │   │       ├── messenger_with_disabled_reset_on_message.yml
│   │   │   │   │   │       ├── messenger_with_explict_reset_on_message_legacy.yml
│   │   │   │   │   │       ├── messenger.yml
│   │   │   │   │   │       ├── notifier_with_disabled_message_bus.yml
│   │   │   │   │   │       ├── notifier_with_specific_message_bus.yml
│   │   │   │   │   │       ├── notifier_without_mailer.yml
│   │   │   │   │   │       ├── notifier_without_messenger.yml
│   │   │   │   │   │       ├── notifier_without_transports.yml
│   │   │   │   │   │       ├── notifier.yml
│   │   │   │   │   │       ├── php_errors_disabled.yml
│   │   │   │   │   │       ├── php_errors_enabled.yml
│   │   │   │   │   │       ├── php_errors_log_level.yml
│   │   │   │   │   │       ├── php_errors_log_levels.yml
│   │   │   │   │   │       ├── profiler_collect_serializer_data.yml
│   │   │   │   │   │       ├── profiler.yml
│   │   │   │   │   │       ├── property_accessor.yml
│   │   │   │   │   │       ├── property_info.yml
│   │   │   │   │   │       ├── request.yml
│   │   │   │   │   │       ├── semaphore_named.yml
│   │   │   │   │   │       ├── semaphore.yml
│   │   │   │   │   │       ├── serializer_disabled.yml
│   │   │   │   │   │       ├── serializer_enabled.yml
│   │   │   │   │   │       ├── serializer_mapping_without_annotations.yml
│   │   │   │   │   │       ├── serializer_mapping.yml
│   │   │   │   │   │       ├── serializer_without_translator.yml
│   │   │   │   │   │       ├── session_cookie_secure_auto.yml
│   │   │   │   │   │       ├── session.yml
│   │   │   │   │   │       ├── ssi_disabled.yml
│   │   │   │   │   │       ├── translator_cache_dir_disabled.yml
│   │   │   │   │   │       ├── translator_fallbacks.yml
│   │   │   │   │   │       ├── validation_attributes.yml
│   │   │   │   │   │       ├── validation_auto_mapping.yml
│   │   │   │   │   │       ├── validation_email_validation_mode.yml
│   │   │   │   │   │       ├── validation_mapping.yml
│   │   │   │   │   │       ├── validation_multiple_static_methods.yml
│   │   │   │   │   │       ├── validation_no_static_method.yml
│   │   │   │   │   │       ├── validation_translation_domain.yml
│   │   │   │   │   │       ├── web_link.yml
│   │   │   │   │   │       ├── webhook_without_serializer.yml
│   │   │   │   │   │       ├── webhook.yml
│   │   │   │   │   │       ├── workflow_not_valid.yml
│   │   │   │   │   │       ├── workflow_with_guard_expression.yml
│   │   │   │   │   │       ├── workflow_with_multiple_transitions_with_same_name.yml
│   │   │   │   │   │       ├── workflow_with_no_events_to_dispatch.yml
│   │   │   │   │   │       ├── workflow_with_specified_events_to_dispatch.yml
│   │   │   │   │   │       ├── workflow_with_support_and_support_strategy.yml
│   │   │   │   │   │       ├── workflow_without_support_and_support_strategy.yml
│   │   │   │   │   │       ├── workflows_enabled.yml
│   │   │   │   │   │       ├── workflows_explicitly_enabled_named_workflows.yml
│   │   │   │   │   │       ├── workflows_explicitly_enabled.yml
│   │   │   │   │   │       └── workflows.yml
│   │   │   │   │   ├── translations
│   │   │   │   │   │   ├── security.en.yaml
│   │   │   │   │   │   └── test_default.en.xlf
│   │   │   │   │   ├── ConfigurationTest.php
│   │   │   │   │   ├── FrameworkExtensionTestCase.php
│   │   │   │   │   ├── PhpFrameworkExtensionTest.php
│   │   │   │   │   ├── XmlFrameworkExtensionTest.php
│   │   │   │   │   └── YamlFrameworkExtensionTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── Descriptor
│   │   │   │   │   │   ├── cache
│   │   │   │   │   │   │   ├── KernelContainerWithDeprecations.log
│   │   │   │   │   │   │   └── KernelContainerWithoutDeprecations.log
│   │   │   │   │   │   ├── alias_1.json
│   │   │   │   │   │   ├── alias_1.md
│   │   │   │   │   │   ├── alias_1.txt
│   │   │   │   │   │   ├── alias_1.xml
│   │   │   │   │   │   ├── alias_2.json
│   │   │   │   │   │   ├── alias_2.md
│   │   │   │   │   │   ├── alias_2.txt
│   │   │   │   │   │   ├── alias_2.xml
│   │   │   │   │   │   ├── alias_with_definition_1.json
│   │   │   │   │   │   ├── alias_with_definition_1.md
│   │   │   │   │   │   ├── alias_with_definition_1.txt
│   │   │   │   │   │   ├── alias_with_definition_1.xml
│   │   │   │   │   │   ├── alias_with_definition_2.json
│   │   │   │   │   │   ├── alias_with_definition_2.md
│   │   │   │   │   │   ├── alias_with_definition_2.txt
│   │   │   │   │   │   ├── alias_with_definition_2.xml
│   │   │   │   │   │   ├── array_parameter.json
│   │   │   │   │   │   ├── array_parameter.md
│   │   │   │   │   │   ├── array_parameter.txt
│   │   │   │   │   │   ├── array_parameter.xml
│   │   │   │   │   │   ├── builder_1_arguments.json
│   │   │   │   │   │   ├── builder_1_arguments.md
│   │   │   │   │   │   ├── builder_1_arguments.txt
│   │   │   │   │   │   ├── builder_1_arguments.xml
│   │   │   │   │   │   ├── builder_1_public.json
│   │   │   │   │   │   ├── builder_1_public.md
│   │   │   │   │   │   ├── builder_1_public.txt
│   │   │   │   │   │   ├── builder_1_public.xml
│   │   │   │   │   │   ├── builder_1_services.json
│   │   │   │   │   │   ├── builder_1_services.md
│   │   │   │   │   │   ├── builder_1_services.txt
│   │   │   │   │   │   ├── builder_1_services.xml
│   │   │   │   │   │   ├── builder_1_tag1.json
│   │   │   │   │   │   ├── builder_1_tag1.md
│   │   │   │   │   │   ├── builder_1_tag1.txt
│   │   │   │   │   │   ├── builder_1_tag1.xml
│   │   │   │   │   │   ├── builder_1_tags.json
│   │   │   │   │   │   ├── builder_1_tags.md
│   │   │   │   │   │   ├── builder_1_tags.txt
│   │   │   │   │   │   ├── builder_1_tags.xml
│   │   │   │   │   │   ├── builder_priority_tag.json
│   │   │   │   │   │   ├── builder_priority_tag.md
│   │   │   │   │   │   ├── builder_priority_tag.txt
│   │   │   │   │   │   ├── builder_priority_tag.xml
│   │   │   │   │   │   ├── callable_1.json
│   │   │   │   │   │   ├── callable_1.md
│   │   │   │   │   │   ├── callable_1.txt
│   │   │   │   │   │   ├── callable_1.xml
│   │   │   │   │   │   ├── callable_2.json
│   │   │   │   │   │   ├── callable_2.md
│   │   │   │   │   │   ├── callable_2.txt
│   │   │   │   │   │   ├── callable_2.xml
│   │   │   │   │   │   ├── callable_3.json
│   │   │   │   │   │   ├── callable_3.md
│   │   │   │   │   │   ├── callable_3.txt
│   │   │   │   │   │   ├── callable_3.xml
│   │   │   │   │   │   ├── callable_4.json
│   │   │   │   │   │   ├── callable_4.md
│   │   │   │   │   │   ├── callable_4.txt
│   │   │   │   │   │   ├── callable_4.xml
│   │   │   │   │   │   ├── callable_5.json
│   │   │   │   │   │   ├── callable_5.md
│   │   │   │   │   │   ├── callable_5.txt
│   │   │   │   │   │   ├── callable_5.xml
│   │   │   │   │   │   ├── callable_6.json
│   │   │   │   │   │   ├── callable_6.md
│   │   │   │   │   │   ├── callable_6.txt
│   │   │   │   │   │   ├── callable_6.xml
│   │   │   │   │   │   ├── callable_7.json
│   │   │   │   │   │   ├── callable_7.md
│   │   │   │   │   │   ├── callable_7.txt
│   │   │   │   │   │   ├── callable_7.xml
│   │   │   │   │   │   ├── callable_from_callable.json
│   │   │   │   │   │   ├── callable_from_callable.md
│   │   │   │   │   │   ├── callable_from_callable.txt
│   │   │   │   │   │   ├── callable_from_callable.xml
│   │   │   │   │   │   ├── definition_1.json
│   │   │   │   │   │   ├── definition_1.md
│   │   │   │   │   │   ├── definition_1.txt
│   │   │   │   │   │   ├── definition_1.xml
│   │   │   │   │   │   ├── definition_2.json
│   │   │   │   │   │   ├── definition_2.md
│   │   │   │   │   │   ├── definition_2.txt
│   │   │   │   │   │   ├── definition_2.xml
│   │   │   │   │   │   ├── definition_3.json
│   │   │   │   │   │   ├── definition_3.md
│   │   │   │   │   │   ├── definition_3.txt
│   │   │   │   │   │   ├── definition_3.xml
│   │   │   │   │   │   ├── definition_arguments_1.json
│   │   │   │   │   │   ├── definition_arguments_1.md
│   │   │   │   │   │   ├── definition_arguments_1.txt
│   │   │   │   │   │   ├── definition_arguments_1.xml
│   │   │   │   │   │   ├── definition_arguments_2.json
│   │   │   │   │   │   ├── definition_arguments_2.md
│   │   │   │   │   │   ├── definition_arguments_2.txt
│   │   │   │   │   │   ├── definition_arguments_2.xml
│   │   │   │   │   │   ├── definition_arguments_3.json
│   │   │   │   │   │   ├── definition_arguments_3.md
│   │   │   │   │   │   ├── definition_arguments_3.txt
│   │   │   │   │   │   ├── definition_arguments_3.xml
│   │   │   │   │   │   ├── definition_arguments_with_enum.json
│   │   │   │   │   │   ├── definition_arguments_with_enum.md
│   │   │   │   │   │   ├── definition_arguments_with_enum.txt
│   │   │   │   │   │   ├── definition_arguments_with_enum.xml
│   │   │   │   │   │   ├── definition_arguments_without_class.json
│   │   │   │   │   │   ├── definition_arguments_without_class.md
│   │   │   │   │   │   ├── definition_arguments_without_class.txt
│   │   │   │   │   │   ├── definition_arguments_without_class.xml
│   │   │   │   │   │   ├── definition_without_class.json
│   │   │   │   │   │   ├── definition_without_class.md
│   │   │   │   │   │   ├── definition_without_class.txt
│   │   │   │   │   │   ├── definition_without_class.xml
│   │   │   │   │   │   ├── deprecated_parameter.json
│   │   │   │   │   │   ├── deprecated_parameter.md
│   │   │   │   │   │   ├── deprecated_parameter.txt
│   │   │   │   │   │   ├── deprecated_parameter.xml
│   │   │   │   │   │   ├── deprecated_parameters.json
│   │   │   │   │   │   ├── deprecated_parameters.md
│   │   │   │   │   │   ├── deprecated_parameters.txt
│   │   │   │   │   │   ├── deprecated_parameters.xml
│   │   │   │   │   │   ├── deprecations_empty.json
│   │   │   │   │   │   ├── deprecations_empty.md
│   │   │   │   │   │   ├── deprecations_empty.txt
│   │   │   │   │   │   ├── deprecations_empty.xml
│   │   │   │   │   │   ├── deprecations.json
│   │   │   │   │   │   ├── deprecations.md
│   │   │   │   │   │   ├── deprecations.txt
│   │   │   │   │   │   ├── deprecations.xml
│   │   │   │   │   │   ├── event_dispatcher_1_event1.json
│   │   │   │   │   │   ├── event_dispatcher_1_event1.md
│   │   │   │   │   │   ├── event_dispatcher_1_event1.txt
│   │   │   │   │   │   ├── event_dispatcher_1_event1.xml
│   │   │   │   │   │   ├── event_dispatcher_1_events.json
│   │   │   │   │   │   ├── event_dispatcher_1_events.md
│   │   │   │   │   │   ├── event_dispatcher_1_events.txt
│   │   │   │   │   │   ├── event_dispatcher_1_events.xml
│   │   │   │   │   │   ├── existing_class_def_1.json
│   │   │   │   │   │   ├── existing_class_def_1.md
│   │   │   │   │   │   ├── existing_class_def_1.txt
│   │   │   │   │   │   ├── existing_class_def_1.xml
│   │   │   │   │   │   ├── existing_class_def_2.json
│   │   │   │   │   │   ├── existing_class_def_2.md
│   │   │   │   │   │   ├── existing_class_def_2.txt
│   │   │   │   │   │   ├── existing_class_def_2.xml
│   │   │   │   │   │   ├── parameter.json
│   │   │   │   │   │   ├── parameter.md
│   │   │   │   │   │   ├── parameter.txt
│   │   │   │   │   │   ├── parameter.xml
│   │   │   │   │   │   ├── parameters_1.json
│   │   │   │   │   │   ├── parameters_1.md
│   │   │   │   │   │   ├── parameters_1.txt
│   │   │   │   │   │   ├── parameters_1.xml
│   │   │   │   │   │   ├── parameters_enums.json
│   │   │   │   │   │   ├── parameters_enums.md
│   │   │   │   │   │   ├── parameters_enums.txt
│   │   │   │   │   │   ├── parameters_enums.xml
│   │   │   │   │   │   ├── route_1_link.txt
│   │   │   │   │   │   ├── route_1.json
│   │   │   │   │   │   ├── route_1.md
│   │   │   │   │   │   ├── route_1.txt
│   │   │   │   │   │   ├── route_1.xml
│   │   │   │   │   │   ├── route_2_link.txt
│   │   │   │   │   │   ├── route_2.json
│   │   │   │   │   │   ├── route_2.md
│   │   │   │   │   │   ├── route_2.txt
│   │   │   │   │   │   ├── route_2.xml
│   │   │   │   │   │   ├── route_collection_1.json
│   │   │   │   │   │   ├── route_collection_1.md
│   │   │   │   │   │   ├── route_collection_1.txt
│   │   │   │   │   │   └── route_collection_1.xml
│   │   │   │   │   ├── Messenger
│   │   │   │   │   │   ├── BarMessage.php
│   │   │   │   │   │   ├── DummyMessage.php
│   │   │   │   │   │   ├── DummyMessageInterface.php
│   │   │   │   │   │   ├── DummySchedule.php
│   │   │   │   │   │   ├── DummyTask.php
│   │   │   │   │   │   ├── DummyTaskWithCustomReceiver.php
│   │   │   │   │   │   ├── FooMessage.php
│   │   │   │   │   │   └── SecondMessage.php
│   │   │   │   │   ├── Resources
│   │   │   │   │   │   ├── BaseBundle
│   │   │   │   │   │   │   └── views
│   │   │   │   │   │   │       ├── controller
│   │   │   │   │   │   │       │   └── custom.format.engine
│   │   │   │   │   │   │       └── base.format.engine
│   │   │   │   │   │   ├── translations
│   │   │   │   │   │   │   ├── domain.with.dots.en.yml
│   │   │   │   │   │   │   └── messages.fr.yml
│   │   │   │   │   │   ├── translations2
│   │   │   │   │   │   │   └── ccc.fr.yml
│   │   │   │   │   │   └── views
│   │   │   │   │   │       ├── resource.format.engine
│   │   │   │   │   │       ├── this.is.a.template.format.engine
│   │   │   │   │   │       └── translation.html.php
│   │   │   │   │   ├── Serialization
│   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   ├── author.yml
│   │   │   │   │   │   │   ├── does_not_exist.yaml
│   │   │   │   │   │   │   └── person.xml
│   │   │   │   │   │   ├── Author.php
│   │   │   │   │   │   └── Person.php
│   │   │   │   │   ├── Serializer
│   │   │   │   │   │   ├── CircularReferenceHandler.php
│   │   │   │   │   │   └── MaxDepthHandler.php
│   │   │   │   │   ├── TemplatePathsCache
│   │   │   │   │   │   ├── templates-empty.php
│   │   │   │   │   │   └── templates.php
│   │   │   │   │   ├── Validation
│   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   ├── author.yml
│   │   │   │   │   │   │   ├── categories.yml
│   │   │   │   │   │   │   ├── does_not_exist.yaml
│   │   │   │   │   │   │   └── person.xml
│   │   │   │   │   │   ├── Article.php
│   │   │   │   │   │   ├── Author.php
│   │   │   │   │   │   ├── Category.php
│   │   │   │   │   │   ├── Person.php
│   │   │   │   │   │   └── SubCategory.php
│   │   │   │   │   ├── BackslashClass.php
│   │   │   │   │   ├── ClassAliasExampleClass.php
│   │   │   │   │   ├── ClassAliasTargetClass.php
│   │   │   │   │   ├── ContainerExcluded.php
│   │   │   │   │   ├── DeclaredClass.php
│   │   │   │   │   ├── DeprecatedClass.php
│   │   │   │   │   ├── FooUnitEnum.php
│   │   │   │   │   ├── Suit.php
│   │   │   │   │   ├── templates.php
│   │   │   │   │   ├── TranslatableBackedEnum.php
│   │   │   │   │   └── WarmedClass.php
│   │   │   │   ├── Functional
│   │   │   │   │   ├── app
│   │   │   │   │   │   ├── AnnotatedController
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── ApiAttributesTest
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── AutowiringTypes
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   └── config.yml
│   │   │   │   │   │   ├── BundlePaths
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   └── config.yml
│   │   │   │   │   │   ├── CacheAttributeListener
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── CachePoolClear
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   └── config.yml
│   │   │   │   │   │   ├── CachePools
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   ├── default.yml
│   │   │   │   │   │   │   ├── redis_config.yml
│   │   │   │   │   │   │   └── redis_custom_config.yml
│   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   ├── default.yml
│   │   │   │   │   │   │   └── framework.yml
│   │   │   │   │   │   ├── ConfigDump
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   └── config.yml
│   │   │   │   │   │   ├── ContainerDebug
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   └── config.yml
│   │   │   │   │   │   ├── ContainerDump
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   └── config.yml
│   │   │   │   │   │   ├── ControllerServiceResolution
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── Fragment
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   ├── routing.yml
│   │   │   │   │   │   │   └── services.yml
│   │   │   │   │   │   ├── HttpClient
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   ├── routing.yml
│   │   │   │   │   │   │   └── services.yml
│   │   │   │   │   │   ├── Mailer
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   ├── routing.yml
│   │   │   │   │   │   │   └── services.yml
│   │   │   │   │   │   ├── Notifier
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   ├── routing.yml
│   │   │   │   │   │   │   └── services.yml
│   │   │   │   │   │   ├── Profiler
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── ProfilerCollectParameter
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── Psr4Routing
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── RouterDebug
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── RoutingConditionService
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   ├── routing.yml
│   │   │   │   │   │   │   ├── services_auto_configured.yml
│   │   │   │   │   │   │   └── services_manually_configured.yml
│   │   │   │   │   │   ├── Scheduler
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   └── config.yml
│   │   │   │   │   │   ├── Security
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── Serializer
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── default_context.yaml
│   │   │   │   │   │   ├── Session
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── Slugger
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── services.yml
│   │   │   │   │   │   ├── templates
│   │   │   │   │   │   │   └── fragment.html.twig
│   │   │   │   │   │   ├── TestServiceContainer
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   ├── services.yml
│   │   │   │   │   │   │   └── test_disabled.yml
│   │   │   │   │   │   ├── TransDebug
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── services.yml
│   │   │   │   │   │   ├── Uid
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config_disabled.yml
│   │   │   │   │   │   │   ├── config_enabled.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   └── AppKernel.php
│   │   │   │   │   ├── Bundle
│   │   │   │   │   │   ├── DefaultConfigTestBundle
│   │   │   │   │   │   │   ├── DependencyInjection
│   │   │   │   │   │   │   │   ├── Configuration.php
│   │   │   │   │   │   │   │   └── DefaultConfigTestExtension.php
│   │   │   │   │   │   │   └── DefaultConfigTestBundle.php
│   │   │   │   │   │   ├── ExtensionWithoutConfigTestBundle
│   │   │   │   │   │   │   ├── DependencyInjection
│   │   │   │   │   │   │   │   └── ExtensionWithoutConfigTestExtension.php
│   │   │   │   │   │   │   └── ExtensionWithoutConfigTestBundle.php
│   │   │   │   │   │   ├── LegacyBundle
│   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   └── LegacyPerson.php
│   │   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   │   │   ├── serialization.yaml
│   │   │   │   │   │   │   │   │   └── validation.yaml
│   │   │   │   │   │   │   │   ├── public
│   │   │   │   │   │   │   │   │   └── legacy.css
│   │   │   │   │   │   │   │   ├── translations
│   │   │   │   │   │   │   │   │   └── legacy.en.yaml
│   │   │   │   │   │   │   │   └── views
│   │   │   │   │   │   │   │       └── index.html.twig
│   │   │   │   │   │   │   └── LegacyBundle.php
│   │   │   │   │   │   ├── ModernBundle
│   │   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   │   ├── serialization.yaml
│   │   │   │   │   │   │   │   └── validation.yaml
│   │   │   │   │   │   │   ├── public
│   │   │   │   │   │   │   │   └── modern.css
│   │   │   │   │   │   │   ├── src
│   │   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   │   └── ModernPerson.php
│   │   │   │   │   │   │   │   └── ModernBundle.php
│   │   │   │   │   │   │   ├── templates
│   │   │   │   │   │   │   │   └── index.html.twig
│   │   │   │   │   │   │   └── translations
│   │   │   │   │   │   │       └── modern.en.yaml
│   │   │   │   │   │   ├── RoutingConditionServiceBundle
│   │   │   │   │   │   │   ├── Controller
│   │   │   │   │   │   │   │   └── DefaultController.php
│   │   │   │   │   │   │   ├── Service
│   │   │   │   │   │   │   │   ├── AutoConfiguredNonAliasedService.php
│   │   │   │   │   │   │   │   ├── AutoConfiguredService.php
│   │   │   │   │   │   │   │   ├── FooOriginalService.php
│   │   │   │   │   │   │   │   ├── FooReplacementService.php
│   │   │   │   │   │   │   │   └── ManuallyTaggedService.php
│   │   │   │   │   │   │   └── RoutingConditionServiceBundle.php
│   │   │   │   │   │   └── TestBundle
│   │   │   │   │   │       ├── AutowiringTypes
│   │   │   │   │   │       │   └── AutowiredServices.php
│   │   │   │   │   │       ├── Controller
│   │   │   │   │   │       │   ├── AnnotatedController.php
│   │   │   │   │   │       │   ├── EmailController.php
│   │   │   │   │   │       │   ├── FragmentController.php
│   │   │   │   │   │       │   ├── HttpClientController.php
│   │   │   │   │   │       │   ├── NotificationController.php
│   │   │   │   │   │       │   ├── ProfilerController.php
│   │   │   │   │   │       │   ├── SecurityController.php
│   │   │   │   │   │       │   ├── SessionController.php
│   │   │   │   │   │       │   ├── SubRequestController.php
│   │   │   │   │   │       │   ├── SubRequestServiceResolutionController.php
│   │   │   │   │   │       │   ├── TransController.php
│   │   │   │   │   │       │   └── UidController.php
│   │   │   │   │   │       ├── DependencyInjection
│   │   │   │   │   │       │   ├── Config
│   │   │   │   │   │       │   │   └── CustomConfig.php
│   │   │   │   │   │       │   ├── Configuration.php
│   │   │   │   │   │       │   └── TestExtension.php
│   │   │   │   │   │       ├── Resources
│   │   │   │   │   │       │   └── config
│   │   │   │   │   │       │       └── routing.yml
│   │   │   │   │   │       ├── Slugger
│   │   │   │   │   │       │   └── SlugConstructArgService.php
│   │   │   │   │   │       ├── Tests
│   │   │   │   │   │       │   └── MockClientCallback.php
│   │   │   │   │   │       ├── TestServiceContainer
│   │   │   │   │   │       │   ├── NonPublicService.php
│   │   │   │   │   │       │   ├── PrivateService.php
│   │   │   │   │   │       │   ├── PublicService.php
│   │   │   │   │   │       │   └── UnusedPrivateService.php
│   │   │   │   │   │       ├── TransDebug
│   │   │   │   │   │       │   ├── TransConstructArgService.php
│   │   │   │   │   │       │   ├── TransMethodCallsService.php
│   │   │   │   │   │       │   ├── TransPropertyService.php
│   │   │   │   │   │       │   └── TransSubscriberService.php
│   │   │   │   │   │       └── TestBundle.php
│   │   │   │   │   ├── Extension
│   │   │   │   │   │   └── TestDumpExtension.php
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   └── describe_env_vars.txt
│   │   │   │   │   ├── AbstractAttributeRoutingTestCase.php
│   │   │   │   │   ├── AbstractWebTestCase.php
│   │   │   │   │   ├── AnnotatedControllerTest.php
│   │   │   │   │   ├── ApiAttributesTest.php
│   │   │   │   │   ├── AutowiringTypesTest.php
│   │   │   │   │   ├── BundlePathsTest.php
│   │   │   │   │   ├── CacheAttributeListenerTest.php
│   │   │   │   │   ├── CachePoolClearCommandTest.php
│   │   │   │   │   ├── CachePoolListCommandTest.php
│   │   │   │   │   ├── CachePoolsTest.php
│   │   │   │   │   ├── ConfigDebugCommandTest.php
│   │   │   │   │   ├── ConfigDumpReferenceCommandTest.php
│   │   │   │   │   ├── ContainerDebugCommandTest.php
│   │   │   │   │   ├── ContainerDumpTest.php
│   │   │   │   │   ├── DebugAutowiringCommandTest.php
│   │   │   │   │   ├── FragmentTest.php
│   │   │   │   │   ├── HttpClientTest.php
│   │   │   │   │   ├── MailerTest.php
│   │   │   │   │   ├── NotificationTest.php
│   │   │   │   │   ├── ProfilerTest.php
│   │   │   │   │   ├── PropertyInfoTest.php
│   │   │   │   │   ├── Psr4RoutingTest.php
│   │   │   │   │   ├── RouterDebugCommandTest.php
│   │   │   │   │   ├── RoutingConditionServiceTest.php
│   │   │   │   │   ├── SchedulerTest.php
│   │   │   │   │   ├── SecurityTest.php
│   │   │   │   │   ├── SerializerTest.php
│   │   │   │   │   ├── SessionTest.php
│   │   │   │   │   ├── SluggerLocaleAwareTest.php
│   │   │   │   │   ├── SubRequestsTest.php
│   │   │   │   │   ├── TestServiceContainerTest.php
│   │   │   │   │   ├── TranslationDebugCommandTest.php
│   │   │   │   │   └── UidTest.php
│   │   │   │   ├── Kernel
│   │   │   │   │   ├── flex-style
│   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   └── bundles.php
│   │   │   │   │   │   └── src
│   │   │   │   │   │       └── FlexStyleMicroKernel.php
│   │   │   │   │   ├── ConcreteMicroKernel.php
│   │   │   │   │   └── MicroKernelTraitTest.php
│   │   │   │   ├── Routing
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   └── with_condition.yaml
│   │   │   │   │   ├── DelegatingLoaderTest.php
│   │   │   │   │   ├── RedirectableCompiledUrlMatcherTest.php
│   │   │   │   │   └── RouterTest.php
│   │   │   │   ├── Secrets
│   │   │   │   │   ├── DotenvVaultTest.php
│   │   │   │   │   └── SodiumVaultTest.php
│   │   │   │   ├── Test
│   │   │   │   │   ├── TestBrowserTokenTest.php
│   │   │   │   │   └── WebTestCaseTest.php
│   │   │   │   ├── Translation
│   │   │   │   │   └── TranslatorTest.php
│   │   │   │   ├── KernelBrowserTest.php
│   │   │   │   └── TestCase.php
│   │   │   ├── Translation
│   │   │   │   └── Translator.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── FrameworkBundle.php
│   │   │   ├── KernelBrowser.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── http-foundation
│   │   │   ├── Exception
│   │   │   │   ├── BadRequestException.php
│   │   │   │   ├── ConflictingHeadersException.php
│   │   │   │   ├── JsonException.php
│   │   │   │   ├── RequestExceptionInterface.php
│   │   │   │   ├── SessionNotFoundException.php
│   │   │   │   ├── SuspiciousOperationException.php
│   │   │   │   └── UnexpectedValueException.php
│   │   │   ├── File
│   │   │   │   ├── Exception
│   │   │   │   │   ├── AccessDeniedException.php
│   │   │   │   │   ├── CannotWriteFileException.php
│   │   │   │   │   ├── ExtensionFileException.php
│   │   │   │   │   ├── FileException.php
│   │   │   │   │   ├── FileNotFoundException.php
│   │   │   │   │   ├── FormSizeFileException.php
│   │   │   │   │   ├── IniSizeFileException.php
│   │   │   │   │   ├── NoFileException.php
│   │   │   │   │   ├── NoTmpDirFileException.php
│   │   │   │   │   ├── PartialFileException.php
│   │   │   │   │   ├── UnexpectedTypeException.php
│   │   │   │   │   └── UploadException.php
│   │   │   │   ├── File.php
│   │   │   │   ├── Stream.php
│   │   │   │   └── UploadedFile.php
│   │   │   ├── RateLimiter
│   │   │   │   ├── AbstractRequestRateLimiter.php
│   │   │   │   ├── PeekableRequestRateLimiterInterface.php
│   │   │   │   └── RequestRateLimiterInterface.php
│   │   │   ├── RequestMatcher
│   │   │   │   ├── AttributesRequestMatcher.php
│   │   │   │   ├── ExpressionRequestMatcher.php
│   │   │   │   ├── HostRequestMatcher.php
│   │   │   │   ├── IpsRequestMatcher.php
│   │   │   │   ├── IsJsonRequestMatcher.php
│   │   │   │   ├── MethodRequestMatcher.php
│   │   │   │   ├── PathRequestMatcher.php
│   │   │   │   ├── PortRequestMatcher.php
│   │   │   │   └── SchemeRequestMatcher.php
│   │   │   ├── Session
│   │   │   │   ├── Attribute
│   │   │   │   │   ├── AttributeBag.php
│   │   │   │   │   └── AttributeBagInterface.php
│   │   │   │   ├── Flash
│   │   │   │   │   ├── AutoExpireFlashBag.php
│   │   │   │   │   ├── FlashBag.php
│   │   │   │   │   └── FlashBagInterface.php
│   │   │   │   ├── Storage
│   │   │   │   │   ├── Handler
│   │   │   │   │   │   ├── AbstractSessionHandler.php
│   │   │   │   │   │   ├── IdentityMarshaller.php
│   │   │   │   │   │   ├── MarshallingSessionHandler.php
│   │   │   │   │   │   ├── MemcachedSessionHandler.php
│   │   │   │   │   │   ├── MigratingSessionHandler.php
│   │   │   │   │   │   ├── MongoDbSessionHandler.php
│   │   │   │   │   │   ├── NativeFileSessionHandler.php
│   │   │   │   │   │   ├── NullSessionHandler.php
│   │   │   │   │   │   ├── PdoSessionHandler.php
│   │   │   │   │   │   ├── RedisSessionHandler.php
│   │   │   │   │   │   ├── SessionHandlerFactory.php
│   │   │   │   │   │   └── StrictSessionHandler.php
│   │   │   │   │   ├── Proxy
│   │   │   │   │   │   ├── AbstractProxy.php
│   │   │   │   │   │   └── SessionHandlerProxy.php
│   │   │   │   │   ├── MetadataBag.php
│   │   │   │   │   ├── MockArraySessionStorage.php
│   │   │   │   │   ├── MockFileSessionStorage.php
│   │   │   │   │   ├── MockFileSessionStorageFactory.php
│   │   │   │   │   ├── NativeSessionStorage.php
│   │   │   │   │   ├── NativeSessionStorageFactory.php
│   │   │   │   │   ├── PhpBridgeSessionStorage.php
│   │   │   │   │   ├── PhpBridgeSessionStorageFactory.php
│   │   │   │   │   ├── SessionStorageFactoryInterface.php
│   │   │   │   │   └── SessionStorageInterface.php
│   │   │   │   ├── FlashBagAwareSessionInterface.php
│   │   │   │   ├── Session.php
│   │   │   │   ├── SessionBagInterface.php
│   │   │   │   ├── SessionBagProxy.php
│   │   │   │   ├── SessionFactory.php
│   │   │   │   ├── SessionFactoryInterface.php
│   │   │   │   ├── SessionInterface.php
│   │   │   │   └── SessionUtils.php
│   │   │   ├── Test
│   │   │   │   └── Constraint
│   │   │   │       ├── RequestAttributeValueSame.php
│   │   │   │       ├── ResponseCookieValueSame.php
│   │   │   │       ├── ResponseFormatSame.php
│   │   │   │       ├── ResponseHasCookie.php
│   │   │   │       ├── ResponseHasHeader.php
│   │   │   │       ├── ResponseHeaderLocationSame.php
│   │   │   │       ├── ResponseHeaderSame.php
│   │   │   │       ├── ResponseIsRedirected.php
│   │   │   │       ├── ResponseIsSuccessful.php
│   │   │   │       ├── ResponseIsUnprocessable.php
│   │   │   │       └── ResponseStatusCodeSame.php
│   │   │   ├── Tests
│   │   │   │   ├── File
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── directory
│   │   │   │   │   │   │   └── .empty
│   │   │   │   │   │   ├── -test
│   │   │   │   │   │   ├── .unknownextension
│   │   │   │   │   │   ├── case-sensitive-mime-type.xlsm
│   │   │   │   │   │   ├── other-file.example
│   │   │   │   │   │   ├── test
│   │   │   │   │   │   └── test.gif
│   │   │   │   │   ├── FakeFile.php
│   │   │   │   │   ├── FileTest.php
│   │   │   │   │   └── UploadedFileTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── response-functional
│   │   │   │   │   │   ├── common.inc
│   │   │   │   │   │   ├── cookie_raw_urlencode.expected
│   │   │   │   │   │   ├── cookie_raw_urlencode.php
│   │   │   │   │   │   ├── cookie_samesite_lax.expected
│   │   │   │   │   │   ├── cookie_samesite_lax.php
│   │   │   │   │   │   ├── cookie_samesite_strict.expected
│   │   │   │   │   │   ├── cookie_samesite_strict.php
│   │   │   │   │   │   ├── cookie_urlencode.expected
│   │   │   │   │   │   ├── cookie_urlencode.php
│   │   │   │   │   │   ├── deleted_cookie.expected
│   │   │   │   │   │   ├── deleted_cookie.php
│   │   │   │   │   │   ├── early_hints.php
│   │   │   │   │   │   ├── invalid_cookie_name.expected
│   │   │   │   │   │   └── invalid_cookie_name.php
│   │   │   │   │   ├── xml
│   │   │   │   │   │   └── http-status-codes.xml
│   │   │   │   │   └── FooEnum.php
│   │   │   │   ├── RateLimiter
│   │   │   │   │   ├── AbstractRequestRateLimiterTest.php
│   │   │   │   │   └── MockAbstractRequestRateLimiter.php
│   │   │   │   ├── RequestMatcher
│   │   │   │   │   ├── AttributesRequestMatcherTest.php
│   │   │   │   │   ├── ExpressionRequestMatcherTest.php
│   │   │   │   │   ├── HostRequestMatcherTest.php
│   │   │   │   │   ├── IpsRequestMatcherTest.php
│   │   │   │   │   ├── IsJsonRequestMatcherTest.php
│   │   │   │   │   ├── MethodRequestMatcherTest.php
│   │   │   │   │   ├── PathRequestMatcherTest.php
│   │   │   │   │   ├── PortRequestMatcherTest.php
│   │   │   │   │   └── SchemeRequestMatcherTest.php
│   │   │   │   ├── schema
│   │   │   │   │   ├── http-status-codes.rng
│   │   │   │   │   └── iana-registry.rng
│   │   │   │   ├── Session
│   │   │   │   │   ├── Attribute
│   │   │   │   │   │   └── AttributeBagTest.php
│   │   │   │   │   ├── Flash
│   │   │   │   │   │   ├── AutoExpireFlashBagTest.php
│   │   │   │   │   │   └── FlashBagTest.php
│   │   │   │   │   ├── Storage
│   │   │   │   │   │   ├── Handler
│   │   │   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   │   │   ├── common.inc
│   │   │   │   │   │   │   │   ├── empty_destroys.expected
│   │   │   │   │   │   │   │   ├── empty_destroys.php
│   │   │   │   │   │   │   │   ├── invalid_regenerate.expected
│   │   │   │   │   │   │   │   ├── invalid_regenerate.php
│   │   │   │   │   │   │   │   ├── read_only.expected
│   │   │   │   │   │   │   │   ├── read_only.php
│   │   │   │   │   │   │   │   ├── regenerate.expected
│   │   │   │   │   │   │   │   ├── regenerate.php
│   │   │   │   │   │   │   │   ├── storage.expected
│   │   │   │   │   │   │   │   ├── storage.php
│   │   │   │   │   │   │   │   ├── with_cookie_and_session.expected
│   │   │   │   │   │   │   │   ├── with_cookie_and_session.php
│   │   │   │   │   │   │   │   ├── with_cookie.expected
│   │   │   │   │   │   │   │   ├── with_cookie.php
│   │   │   │   │   │   │   │   ├── with_samesite_and_migration.expected
│   │   │   │   │   │   │   │   ├── with_samesite_and_migration.php
│   │   │   │   │   │   │   │   ├── with_samesite.expected
│   │   │   │   │   │   │   │   └── with_samesite.php
│   │   │   │   │   │   │   ├── stubs
│   │   │   │   │   │   │   │   └── mongodb.php
│   │   │   │   │   │   │   ├── AbstractRedisSessionHandlerTestCase.php
│   │   │   │   │   │   │   ├── AbstractSessionHandlerTest.php
│   │   │   │   │   │   │   ├── IdentityMarshallerTest.php
│   │   │   │   │   │   │   ├── MarshallingSessionHandlerTest.php
│   │   │   │   │   │   │   ├── MemcachedSessionHandlerTest.php
│   │   │   │   │   │   │   ├── MigratingSessionHandlerTest.php
│   │   │   │   │   │   │   ├── MongoDbSessionHandlerTest.php
│   │   │   │   │   │   │   ├── NativeFileSessionHandlerTest.php
│   │   │   │   │   │   │   ├── NullSessionHandlerTest.php
│   │   │   │   │   │   │   ├── PdoSessionHandlerTest.php
│   │   │   │   │   │   │   ├── PredisClusterSessionHandlerTest.php
│   │   │   │   │   │   │   ├── PredisSessionHandlerTest.php
│   │   │   │   │   │   │   ├── RedisArraySessionHandlerTest.php
│   │   │   │   │   │   │   ├── RedisClusterSessionHandlerTest.php
│   │   │   │   │   │   │   ├── RedisSessionHandlerTest.php
│   │   │   │   │   │   │   ├── RelaySessionHandlerTest.php
│   │   │   │   │   │   │   ├── SessionHandlerFactoryTest.php
│   │   │   │   │   │   │   └── StrictSessionHandlerTest.php
│   │   │   │   │   │   ├── Proxy
│   │   │   │   │   │   │   ├── AbstractProxyTest.php
│   │   │   │   │   │   │   └── SessionHandlerProxyTest.php
│   │   │   │   │   │   ├── MetadataBagTest.php
│   │   │   │   │   │   ├── MockArraySessionStorageTest.php
│   │   │   │   │   │   ├── MockFileSessionStorageTest.php
│   │   │   │   │   │   ├── NativeSessionStorageTest.php
│   │   │   │   │   │   └── PhpBridgeSessionStorageTest.php
│   │   │   │   │   └── SessionTest.php
│   │   │   │   ├── Test
│   │   │   │   │   └── Constraint
│   │   │   │   │       ├── RequestAttributeValueSameTest.php
│   │   │   │   │       ├── ResponseCookieValueSameTest.php
│   │   │   │   │       ├── ResponseFormatSameTest.php
│   │   │   │   │       ├── ResponseHasCookieTest.php
│   │   │   │   │       ├── ResponseHasHeaderTest.php
│   │   │   │   │       ├── ResponseHeaderLocationSameTest.php
│   │   │   │   │       ├── ResponseHeaderSameTest.php
│   │   │   │   │       ├── ResponseIsRedirectedTest.php
│   │   │   │   │       ├── ResponseIsSuccessfulTest.php
│   │   │   │   │       ├── ResponseIsUnprocessableTest.php
│   │   │   │   │       └── ResponseStatusCodeSameTest.php
│   │   │   │   ├── AcceptHeaderItemTest.php
│   │   │   │   ├── AcceptHeaderTest.php
│   │   │   │   ├── BinaryFileResponseTest.php
│   │   │   │   ├── CookieTest.php
│   │   │   │   ├── FileBagTest.php
│   │   │   │   ├── HeaderBagTest.php
│   │   │   │   ├── HeaderUtilsTest.php
│   │   │   │   ├── InputBagTest.php
│   │   │   │   ├── IpUtilsTest.php
│   │   │   │   ├── JsonResponseTest.php
│   │   │   │   ├── ParameterBagTest.php
│   │   │   │   ├── RedirectResponseTest.php
│   │   │   │   ├── RequestStackTest.php
│   │   │   │   ├── RequestTest.php
│   │   │   │   ├── ResponseFunctionalTest.php
│   │   │   │   ├── ResponseHeaderBagTest.php
│   │   │   │   ├── ResponseTest.php
│   │   │   │   ├── ResponseTestCase.php
│   │   │   │   ├── ServerBagTest.php
│   │   │   │   ├── StreamedJsonResponseTest.php
│   │   │   │   ├── StreamedResponseTest.php
│   │   │   │   ├── UriSignerTest.php
│   │   │   │   └── UrlHelperTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── AcceptHeader.php
│   │   │   ├── AcceptHeaderItem.php
│   │   │   ├── BinaryFileResponse.php
│   │   │   ├── ChainRequestMatcher.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Cookie.php
│   │   │   ├── FileBag.php
│   │   │   ├── HeaderBag.php
│   │   │   ├── HeaderUtils.php
│   │   │   ├── InputBag.php
│   │   │   ├── IpUtils.php
│   │   │   ├── JsonResponse.php
│   │   │   ├── LICENSE
│   │   │   ├── ParameterBag.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── RedirectResponse.php
│   │   │   ├── Request.php
│   │   │   ├── RequestMatcherInterface.php
│   │   │   ├── RequestStack.php
│   │   │   ├── Response.php
│   │   │   ├── ResponseHeaderBag.php
│   │   │   ├── ServerBag.php
│   │   │   ├── StreamedJsonResponse.php
│   │   │   ├── StreamedResponse.php
│   │   │   ├── UriSigner.php
│   │   │   └── UrlHelper.php
│   │   ├── http-kernel
│   │   │   ├── Attribute
│   │   │   │   ├── AsController.php
│   │   │   │   ├── AsTargetedValueResolver.php
│   │   │   │   ├── Cache.php
│   │   │   │   ├── MapDateTime.php
│   │   │   │   ├── MapQueryParameter.php
│   │   │   │   ├── MapQueryString.php
│   │   │   │   ├── MapRequestPayload.php
│   │   │   │   ├── ValueResolver.php
│   │   │   │   ├── WithHttpStatus.php
│   │   │   │   └── WithLogLevel.php
│   │   │   ├── Bundle
│   │   │   │   ├── AbstractBundle.php
│   │   │   │   ├── Bundle.php
│   │   │   │   ├── BundleExtension.php
│   │   │   │   └── BundleInterface.php
│   │   │   ├── CacheClearer
│   │   │   │   ├── CacheClearerInterface.php
│   │   │   │   ├── ChainCacheClearer.php
│   │   │   │   └── Psr6CacheClearer.php
│   │   │   ├── CacheWarmer
│   │   │   │   ├── CacheWarmer.php
│   │   │   │   ├── CacheWarmerAggregate.php
│   │   │   │   ├── CacheWarmerInterface.php
│   │   │   │   └── WarmableInterface.php
│   │   │   ├── Config
│   │   │   │   └── FileLocator.php
│   │   │   ├── Controller
│   │   │   │   ├── ArgumentResolver
│   │   │   │   │   ├── BackedEnumValueResolver.php
│   │   │   │   │   ├── DateTimeValueResolver.php
│   │   │   │   │   ├── DefaultValueResolver.php
│   │   │   │   │   ├── NotTaggedControllerValueResolver.php
│   │   │   │   │   ├── QueryParameterValueResolver.php
│   │   │   │   │   ├── RequestAttributeValueResolver.php
│   │   │   │   │   ├── RequestPayloadValueResolver.php
│   │   │   │   │   ├── RequestValueResolver.php
│   │   │   │   │   ├── ServiceValueResolver.php
│   │   │   │   │   ├── SessionValueResolver.php
│   │   │   │   │   ├── TraceableValueResolver.php
│   │   │   │   │   ├── UidValueResolver.php
│   │   │   │   │   └── VariadicValueResolver.php
│   │   │   │   ├── ArgumentResolver.php
│   │   │   │   ├── ArgumentResolverInterface.php
│   │   │   │   ├── ContainerControllerResolver.php
│   │   │   │   ├── ControllerReference.php
│   │   │   │   ├── ControllerResolver.php
│   │   │   │   ├── ControllerResolverInterface.php
│   │   │   │   ├── ErrorController.php
│   │   │   │   ├── TraceableArgumentResolver.php
│   │   │   │   ├── TraceableControllerResolver.php
│   │   │   │   └── ValueResolverInterface.php
│   │   │   ├── ControllerMetadata
│   │   │   │   ├── ArgumentMetadata.php
│   │   │   │   ├── ArgumentMetadataFactory.php
│   │   │   │   └── ArgumentMetadataFactoryInterface.php
│   │   │   ├── DataCollector
│   │   │   │   ├── AjaxDataCollector.php
│   │   │   │   ├── ConfigDataCollector.php
│   │   │   │   ├── DataCollector.php
│   │   │   │   ├── DataCollectorInterface.php
│   │   │   │   ├── DumpDataCollector.php
│   │   │   │   ├── EventDataCollector.php
│   │   │   │   ├── ExceptionDataCollector.php
│   │   │   │   ├── LateDataCollectorInterface.php
│   │   │   │   ├── LoggerDataCollector.php
│   │   │   │   ├── MemoryDataCollector.php
│   │   │   │   ├── RequestDataCollector.php
│   │   │   │   ├── RouterDataCollector.php
│   │   │   │   └── TimeDataCollector.php
│   │   │   ├── Debug
│   │   │   │   ├── ErrorHandlerConfigurator.php
│   │   │   │   ├── TraceableEventDispatcher.php
│   │   │   │   └── VirtualRequestStack.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── AddAnnotatedClassesToCachePass.php
│   │   │   │   ├── ConfigurableExtension.php
│   │   │   │   ├── ControllerArgumentValueResolverPass.php
│   │   │   │   ├── Extension.php
│   │   │   │   ├── FragmentRendererPass.php
│   │   │   │   ├── LazyLoadingFragmentHandler.php
│   │   │   │   ├── LoggerPass.php
│   │   │   │   ├── MergeExtensionConfigurationPass.php
│   │   │   │   ├── RegisterControllerArgumentLocatorsPass.php
│   │   │   │   ├── RegisterLocaleAwareServicesPass.php
│   │   │   │   ├── RemoveEmptyControllerArgumentLocatorsPass.php
│   │   │   │   ├── ResettableServicePass.php
│   │   │   │   └── ServicesResetter.php
│   │   │   ├── Event
│   │   │   │   ├── ControllerArgumentsEvent.php
│   │   │   │   ├── ControllerEvent.php
│   │   │   │   ├── ExceptionEvent.php
│   │   │   │   ├── FinishRequestEvent.php
│   │   │   │   ├── KernelEvent.php
│   │   │   │   ├── RequestEvent.php
│   │   │   │   ├── ResponseEvent.php
│   │   │   │   ├── TerminateEvent.php
│   │   │   │   └── ViewEvent.php
│   │   │   ├── EventListener
│   │   │   │   ├── AbstractSessionListener.php
│   │   │   │   ├── AddRequestFormatsListener.php
│   │   │   │   ├── CacheAttributeListener.php
│   │   │   │   ├── DebugHandlersListener.php
│   │   │   │   ├── DisallowRobotsIndexingListener.php
│   │   │   │   ├── DumpListener.php
│   │   │   │   ├── ErrorListener.php
│   │   │   │   ├── FragmentListener.php
│   │   │   │   ├── LocaleAwareListener.php
│   │   │   │   ├── LocaleListener.php
│   │   │   │   ├── ProfilerListener.php
│   │   │   │   ├── ResponseListener.php
│   │   │   │   ├── RouterListener.php
│   │   │   │   ├── SessionListener.php
│   │   │   │   ├── SurrogateListener.php
│   │   │   │   └── ValidateRequestListener.php
│   │   │   ├── Exception
│   │   │   │   ├── AccessDeniedHttpException.php
│   │   │   │   ├── BadRequestHttpException.php
│   │   │   │   ├── ConflictHttpException.php
│   │   │   │   ├── ControllerDoesNotReturnResponseException.php
│   │   │   │   ├── GoneHttpException.php
│   │   │   │   ├── HttpException.php
│   │   │   │   ├── HttpExceptionInterface.php
│   │   │   │   ├── InvalidMetadataException.php
│   │   │   │   ├── LengthRequiredHttpException.php
│   │   │   │   ├── LockedHttpException.php
│   │   │   │   ├── MethodNotAllowedHttpException.php
│   │   │   │   ├── NotAcceptableHttpException.php
│   │   │   │   ├── NotFoundHttpException.php
│   │   │   │   ├── PreconditionFailedHttpException.php
│   │   │   │   ├── PreconditionRequiredHttpException.php
│   │   │   │   ├── ResolverNotFoundException.php
│   │   │   │   ├── ServiceUnavailableHttpException.php
│   │   │   │   ├── TooManyRequestsHttpException.php
│   │   │   │   ├── UnauthorizedHttpException.php
│   │   │   │   ├── UnexpectedSessionUsageException.php
│   │   │   │   ├── UnprocessableEntityHttpException.php
│   │   │   │   └── UnsupportedMediaTypeHttpException.php
│   │   │   ├── Fragment
│   │   │   │   ├── AbstractSurrogateFragmentRenderer.php
│   │   │   │   ├── EsiFragmentRenderer.php
│   │   │   │   ├── FragmentHandler.php
│   │   │   │   ├── FragmentRendererInterface.php
│   │   │   │   ├── FragmentUriGenerator.php
│   │   │   │   ├── FragmentUriGeneratorInterface.php
│   │   │   │   ├── HIncludeFragmentRenderer.php
│   │   │   │   ├── InlineFragmentRenderer.php
│   │   │   │   ├── RoutableFragmentRenderer.php
│   │   │   │   └── SsiFragmentRenderer.php
│   │   │   ├── HttpCache
│   │   │   │   ├── AbstractSurrogate.php
│   │   │   │   ├── Esi.php
│   │   │   │   ├── HttpCache.php
│   │   │   │   ├── ResponseCacheStrategy.php
│   │   │   │   ├── ResponseCacheStrategyInterface.php
│   │   │   │   ├── Ssi.php
│   │   │   │   ├── Store.php
│   │   │   │   ├── StoreInterface.php
│   │   │   │   ├── SubRequestHandler.php
│   │   │   │   └── SurrogateInterface.php
│   │   │   ├── Log
│   │   │   │   ├── DebugLoggerConfigurator.php
│   │   │   │   ├── DebugLoggerInterface.php
│   │   │   │   └── Logger.php
│   │   │   ├── Profiler
│   │   │   │   ├── FileProfilerStorage.php
│   │   │   │   ├── Profile.php
│   │   │   │   ├── Profiler.php
│   │   │   │   └── ProfilerStorageInterface.php
│   │   │   ├── Resources
│   │   │   │   └── welcome.html.php
│   │   │   ├── Tests
│   │   │   │   ├── Attribute
│   │   │   │   │   └── WithLogLevelTest.php
│   │   │   │   ├── Bundle
│   │   │   │   │   └── BundleTest.php
│   │   │   │   ├── CacheClearer
│   │   │   │   │   ├── ChainCacheClearerTest.php
│   │   │   │   │   └── Psr6CacheClearerTest.php
│   │   │   │   ├── CacheWarmer
│   │   │   │   │   ├── CacheWarmerAggregateTest.php
│   │   │   │   │   └── CacheWarmerTest.php
│   │   │   │   ├── Config
│   │   │   │   │   └── FileLocatorTest.php
│   │   │   │   ├── Controller
│   │   │   │   │   ├── ArgumentResolver
│   │   │   │   │   │   ├── BackedEnumValueResolverTest.php
│   │   │   │   │   │   ├── DateTimeValueResolverTest.php
│   │   │   │   │   │   ├── NotTaggedControllerValueResolverTest.php
│   │   │   │   │   │   ├── QueryParameterValueResolverTest.php
│   │   │   │   │   │   ├── RequestPayloadValueResolverTest.php
│   │   │   │   │   │   ├── ServiceValueResolverTest.php
│   │   │   │   │   │   ├── TraceableValueResolverTest.php
│   │   │   │   │   │   └── UidValueResolverTest.php
│   │   │   │   │   ├── ArgumentResolverTest.php
│   │   │   │   │   ├── ContainerControllerResolverTest.php
│   │   │   │   │   ├── ControllerResolverTest.php
│   │   │   │   │   ├── ErrorControllerTest.php
│   │   │   │   │   ├── TraceableArgumentResolverTest.php
│   │   │   │   │   └── TraceableControllerResolverTest.php
│   │   │   │   ├── ControllerMetadata
│   │   │   │   │   ├── ArgumentMetadataFactoryTest.php
│   │   │   │   │   └── ArgumentMetadataTest.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   ├── Compiler.log
│   │   │   │   │   ├── ConfigDataCollectorTest.php
│   │   │   │   │   ├── DataCollectorTest.php
│   │   │   │   │   ├── DumpDataCollectorTest.php
│   │   │   │   │   ├── ExceptionDataCollectorTest.php
│   │   │   │   │   ├── LoggerDataCollectorTest.php
│   │   │   │   │   ├── MemoryDataCollectorTest.php
│   │   │   │   │   ├── RequestDataCollectorTest.php
│   │   │   │   │   ├── RouterDataCollectorTest.php
│   │   │   │   │   └── TimeDataCollectorTest.php
│   │   │   │   ├── Debug
│   │   │   │   │   ├── ErrorHandlerConfiguratorTest.php
│   │   │   │   │   └── TraceableEventDispatcherTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── AddAnnotatedClassesToCachePassTest.php
│   │   │   │   │   ├── ControllerArgumentValueResolverPassTest.php
│   │   │   │   │   ├── FragmentRendererPassTest.php
│   │   │   │   │   ├── LazyLoadingFragmentHandlerTest.php
│   │   │   │   │   ├── LoggerPassTest.php
│   │   │   │   │   ├── MergeExtensionConfigurationPassTest.php
│   │   │   │   │   ├── RegisterControllerArgumentLocatorsPassTest.php
│   │   │   │   │   ├── RegisterLocaleAwareServicesPassTest.php
│   │   │   │   │   ├── RemoveEmptyControllerArgumentLocatorsPassTest.php
│   │   │   │   │   ├── ResettableServicePassTest.php
│   │   │   │   │   └── ServicesResetterTest.php
│   │   │   │   ├── Event
│   │   │   │   │   ├── ControllerArgumentsEventTest.php
│   │   │   │   │   ├── ControllerEventTest.php
│   │   │   │   │   └── ExceptionEventTest.php
│   │   │   │   ├── EventListener
│   │   │   │   │   ├── AddRequestFormatsListenerTest.php
│   │   │   │   │   ├── CacheAttributeListenerTest.php
│   │   │   │   │   ├── DebugHandlersListenerTest.php
│   │   │   │   │   ├── DisallowRobotsIndexingListenerTest.php
│   │   │   │   │   ├── DumpListenerTest.php
│   │   │   │   │   ├── ErrorListenerTest.php
│   │   │   │   │   ├── FragmentListenerTest.php
│   │   │   │   │   ├── LocaleAwareListenerTest.php
│   │   │   │   │   ├── LocaleListenerTest.php
│   │   │   │   │   ├── ProfilerListenerTest.php
│   │   │   │   │   ├── ResponseListenerTest.php
│   │   │   │   │   ├── RouterListenerTest.php
│   │   │   │   │   ├── SessionListenerTest.php
│   │   │   │   │   ├── SurrogateListenerTest.php
│   │   │   │   │   └── ValidateRequestListenerTest.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── AccessDeniedHttpExceptionTest.php
│   │   │   │   │   ├── BadRequestHttpExceptionTest.php
│   │   │   │   │   ├── ConflictHttpExceptionTest.php
│   │   │   │   │   ├── GoneHttpExceptionTest.php
│   │   │   │   │   ├── HttpExceptionTest.php
│   │   │   │   │   ├── LengthRequiredHttpExceptionTest.php
│   │   │   │   │   ├── LockedHttpExceptionTest.php
│   │   │   │   │   ├── MethodNotAllowedHttpExceptionTest.php
│   │   │   │   │   ├── NotAcceptableHttpExceptionTest.php
│   │   │   │   │   ├── NotFoundHttpExceptionTest.php
│   │   │   │   │   ├── PreconditionFailedHttpExceptionTest.php
│   │   │   │   │   ├── PreconditionRequiredHttpExceptionTest.php
│   │   │   │   │   ├── ServiceUnavailableHttpExceptionTest.php
│   │   │   │   │   ├── TooManyRequestsHttpExceptionTest.php
│   │   │   │   │   ├── UnauthorizedHttpExceptionTest.php
│   │   │   │   │   ├── UnprocessableEntityHttpExceptionTest.php
│   │   │   │   │   └── UnsupportedMediaTypeHttpExceptionTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── AcmeFooBundle
│   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   └── config
│   │   │   │   │   │   │       ├── definition.php
│   │   │   │   │   │   │       └── services.php
│   │   │   │   │   │   └── AcmeFooBundle.php
│   │   │   │   │   ├── Attribute
│   │   │   │   │   │   ├── Bar.php
│   │   │   │   │   │   ├── Baz.php
│   │   │   │   │   │   └── Foo.php
│   │   │   │   │   ├── Bundle1Bundle
│   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   └── .gitkeep
│   │   │   │   │   │   └── foo.txt
│   │   │   │   │   ├── Controller
│   │   │   │   │   │   ├── AttributeController.php
│   │   │   │   │   │   ├── BasicTypesController.php
│   │   │   │   │   │   ├── CacheAttributeController.php
│   │   │   │   │   │   ├── ExtendingRequest.php
│   │   │   │   │   │   ├── ExtendingSession.php
│   │   │   │   │   │   ├── NullableController.php
│   │   │   │   │   │   └── VariadicController.php
│   │   │   │   │   ├── DataCollector
│   │   │   │   │   │   ├── CloneVarDataCollector.php
│   │   │   │   │   │   └── DummyController.php
│   │   │   │   │   ├── ExtensionNotValidBundle
│   │   │   │   │   │   ├── DependencyInjection
│   │   │   │   │   │   │   └── ExtensionNotValidExtension.php
│   │   │   │   │   │   └── ExtensionNotValidBundle.php
│   │   │   │   │   ├── ExtensionPresentBundle
│   │   │   │   │   │   ├── DependencyInjection
│   │   │   │   │   │   │   └── ExtensionPresentExtension.php
│   │   │   │   │   │   └── ExtensionPresentBundle.php
│   │   │   │   │   ├── ClearableService.php
│   │   │   │   │   ├── IntEnum.php
│   │   │   │   │   ├── KernelForTest.php
│   │   │   │   │   ├── KernelForTestWithLoadClassCache.php
│   │   │   │   │   ├── KernelWithoutBundles.php
│   │   │   │   │   ├── LazyResettableService.php
│   │   │   │   │   ├── MockableUploadFileWithClientSize.php
│   │   │   │   │   ├── MultiResettableService.php
│   │   │   │   │   ├── ResettableService.php
│   │   │   │   │   ├── Suit.php
│   │   │   │   │   ├── TestClient.php
│   │   │   │   │   ├── UsePropertyInDestruct.php
│   │   │   │   │   └── WithPublicObjectProperty.php
│   │   │   │   ├── Fragment
│   │   │   │   │   ├── EsiFragmentRendererTest.php
│   │   │   │   │   ├── FragmentHandlerTest.php
│   │   │   │   │   ├── HIncludeFragmentRendererTest.php
│   │   │   │   │   ├── InlineFragmentRendererTest.php
│   │   │   │   │   ├── RoutableFragmentRendererTest.php
│   │   │   │   │   └── SsiFragmentRendererTest.php
│   │   │   │   ├── HttpCache
│   │   │   │   │   ├── EsiTest.php
│   │   │   │   │   ├── HttpCacheTest.php
│   │   │   │   │   ├── HttpCacheTestCase.php
│   │   │   │   │   ├── ResponseCacheStrategyTest.php
│   │   │   │   │   ├── SsiTest.php
│   │   │   │   │   ├── StoreTest.php
│   │   │   │   │   ├── SubRequestHandlerTest.php
│   │   │   │   │   ├── TestHttpKernel.php
│   │   │   │   │   └── TestMultipleHttpKernel.php
│   │   │   │   ├── Log
│   │   │   │   │   └── LoggerTest.php
│   │   │   │   ├── Profiler
│   │   │   │   │   ├── FileProfilerStorageTest.php
│   │   │   │   │   └── ProfilerTest.php
│   │   │   │   ├── HttpClientKernelTest.php
│   │   │   │   ├── HttpKernelBrowserTest.php
│   │   │   │   ├── HttpKernelTest.php
│   │   │   │   ├── KernelTest.php
│   │   │   │   ├── Logger.php
│   │   │   │   └── TestHttpKernel.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── HttpClientKernel.php
│   │   │   ├── HttpKernel.php
│   │   │   ├── HttpKernelBrowser.php
│   │   │   ├── HttpKernelInterface.php
│   │   │   ├── Kernel.php
│   │   │   ├── KernelEvents.php
│   │   │   ├── KernelInterface.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── RebootableInterface.php
│   │   │   └── TerminableInterface.php
│   │   ├── mailer
│   │   │   ├── Command
│   │   │   │   └── MailerTestCommand.php
│   │   │   ├── DataCollector
│   │   │   │   └── MessageDataCollector.php
│   │   │   ├── Event
│   │   │   │   ├── FailedMessageEvent.php
│   │   │   │   ├── MessageEvent.php
│   │   │   │   ├── MessageEvents.php
│   │   │   │   └── SentMessageEvent.php
│   │   │   ├── EventListener
│   │   │   │   ├── EnvelopeListener.php
│   │   │   │   ├── MessageListener.php
│   │   │   │   ├── MessageLoggerListener.php
│   │   │   │   └── MessengerTransportListener.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── HttpTransportException.php
│   │   │   │   ├── IncompleteDsnException.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── RuntimeException.php
│   │   │   │   ├── TransportException.php
│   │   │   │   ├── TransportExceptionInterface.php
│   │   │   │   ├── UnexpectedResponseException.php
│   │   │   │   └── UnsupportedSchemeException.php
│   │   │   ├── Header
│   │   │   │   ├── MetadataHeader.php
│   │   │   │   └── TagHeader.php
│   │   │   ├── Messenger
│   │   │   │   ├── MessageHandler.php
│   │   │   │   └── SendEmailMessage.php
│   │   │   ├── Test
│   │   │   │   ├── Constraint
│   │   │   │   │   ├── EmailCount.php
│   │   │   │   │   └── EmailIsQueued.php
│   │   │   │   └── TransportFactoryTestCase.php
│   │   │   ├── Tests
│   │   │   │   ├── Command
│   │   │   │   │   └── MailerTestCommandTest.php
│   │   │   │   ├── EventListener
│   │   │   │   │   ├── MessageListenerTest.php
│   │   │   │   │   └── MessengerTransportListenerTest.php
│   │   │   │   ├── Exception
│   │   │   │   │   └── UnsupportedSchemeExceptionTest.php
│   │   │   │   ├── Transport
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── fake-failing-sendmail.php
│   │   │   │   │   │   └── fake-sendmail.php
│   │   │   │   │   ├── Smtp
│   │   │   │   │   │   ├── Stream
│   │   │   │   │   │   │   ├── AbstractStreamTest.php
│   │   │   │   │   │   │   └── SocketStreamTest.php
│   │   │   │   │   │   ├── DummyStream.php
│   │   │   │   │   │   ├── EsmtpTransportFactoryTest.php
│   │   │   │   │   │   ├── EsmtpTransportTest.php
│   │   │   │   │   │   └── SmtpTransportTest.php
│   │   │   │   │   ├── AbstractTransportTest.php
│   │   │   │   │   ├── DsnTest.php
│   │   │   │   │   ├── FailoverTransportTest.php
│   │   │   │   │   ├── NativeTransportFactoryTest.php
│   │   │   │   │   ├── NullTransportFactoryTest.php
│   │   │   │   │   ├── NullTransportTest.php
│   │   │   │   │   ├── RoundRobinTransportTest.php
│   │   │   │   │   ├── SendmailTransportFactoryTest.php
│   │   │   │   │   ├── SendmailTransportTest.php
│   │   │   │   │   └── TransportsTest.php
│   │   │   │   ├── EnvelopeTest.php
│   │   │   │   ├── MailerTest.php
│   │   │   │   ├── SentMessageTest.php
│   │   │   │   └── TransportTest.php
│   │   │   ├── Transport
│   │   │   │   ├── Smtp
│   │   │   │   │   ├── Auth
│   │   │   │   │   │   ├── AuthenticatorInterface.php
│   │   │   │   │   │   ├── CramMd5Authenticator.php
│   │   │   │   │   │   ├── LoginAuthenticator.php
│   │   │   │   │   │   ├── PlainAuthenticator.php
│   │   │   │   │   │   └── XOAuth2Authenticator.php
│   │   │   │   │   ├── Stream
│   │   │   │   │   │   ├── AbstractStream.php
│   │   │   │   │   │   ├── ProcessStream.php
│   │   │   │   │   │   └── SocketStream.php
│   │   │   │   │   ├── EsmtpTransport.php
│   │   │   │   │   ├── EsmtpTransportFactory.php
│   │   │   │   │   └── SmtpTransport.php
│   │   │   │   ├── AbstractApiTransport.php
│   │   │   │   ├── AbstractHttpTransport.php
│   │   │   │   ├── AbstractTransport.php
│   │   │   │   ├── AbstractTransportFactory.php
│   │   │   │   ├── Dsn.php
│   │   │   │   ├── FailoverTransport.php
│   │   │   │   ├── NativeTransportFactory.php
│   │   │   │   ├── NullTransport.php
│   │   │   │   ├── NullTransportFactory.php
│   │   │   │   ├── RoundRobinTransport.php
│   │   │   │   ├── SendmailTransport.php
│   │   │   │   ├── SendmailTransportFactory.php
│   │   │   │   ├── TransportFactoryInterface.php
│   │   │   │   ├── TransportInterface.php
│   │   │   │   └── Transports.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── DelayedEnvelope.php
│   │   │   ├── Envelope.php
│   │   │   ├── LICENSE
│   │   │   ├── Mailer.php
│   │   │   ├── MailerInterface.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── SentMessage.php
│   │   │   └── Transport.php
│   │   ├── maker-bundle
│   │   │   ├── _docs_build
│   │   │   │   ├── .gitignore
│   │   │   │   ├── build.php
│   │   │   │   ├── composer.json
│   │   │   │   ├── redirection_map
│   │   │   │   └── spelling_word_list.txt
│   │   │   ├── .github
│   │   │   │   └── workflows
│   │   │   │       ├── ci-docs.yaml
│   │   │   │       ├── ci-linux.yaml
│   │   │   │       ├── ci-static-analysis.yaml
│   │   │   │       └── ci-windows.yaml
│   │   │   ├── config
│   │   │   │   ├── help
│   │   │   │   │   ├── security
│   │   │   │   │   │   ├── MakeCustom.txt
│   │   │   │   │   │   └── MakeFormLogin.txt
│   │   │   │   │   ├── _WithTests.txt
│   │   │   │   │   ├── _WithUid.txt
│   │   │   │   │   ├── MakeAuth.txt
│   │   │   │   │   ├── MakeCommand.txt
│   │   │   │   │   ├── MakeController.txt
│   │   │   │   │   ├── MakeCrud.txt
│   │   │   │   │   ├── MakeDockerDatabase.txt
│   │   │   │   │   ├── MakeEntity.txt
│   │   │   │   │   ├── MakeFixture.txt
│   │   │   │   │   ├── MakeForm.txt
│   │   │   │   │   ├── MakeFunctionalTest.txt
│   │   │   │   │   ├── MakeListener.txt
│   │   │   │   │   ├── MakeMessage.txt
│   │   │   │   │   ├── MakeMiddleware.txt
│   │   │   │   │   ├── MakeMigration.txt
│   │   │   │   │   ├── MakeRegistrationForm.txt
│   │   │   │   │   ├── MakeResetPassword.txt
│   │   │   │   │   ├── MakeScheduler.txt
│   │   │   │   │   ├── MakeSerializerEncoder.txt
│   │   │   │   │   ├── MakeSerializerNormalizer.txt
│   │   │   │   │   ├── MakeStimulusController.txt
│   │   │   │   │   ├── MakeSubscriber.txt
│   │   │   │   │   ├── MakeTest.txt
│   │   │   │   │   ├── MakeTwigExtension.txt
│   │   │   │   │   ├── MakeUnitTest.txt
│   │   │   │   │   ├── MakeUser.txt
│   │   │   │   │   ├── MakeValidator.txt
│   │   │   │   │   ├── MakeVoter.txt
│   │   │   │   │   └── MakeWebhook.txt
│   │   │   │   ├── makers.xml
│   │   │   │   ├── php-cs-fixer.config.php
│   │   │   │   └── services.xml
│   │   │   ├── docs
│   │   │   │   └── index.rst
│   │   │   ├── src
│   │   │   │   ├── Command
│   │   │   │   │   └── MakerCommand.php
│   │   │   │   ├── Console
│   │   │   │   │   └── MigrationDiffFilteredOutput.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   └── CompilerPass
│   │   │   │   │       ├── MakeCommandRegistrationPass.php
│   │   │   │   │       ├── RemoveMissingParametersPass.php
│   │   │   │   │       └── SetDoctrineAnnotatedPrefixesPass.php
│   │   │   │   ├── Docker
│   │   │   │   │   └── DockerDatabaseServices.php
│   │   │   │   ├── Doctrine
│   │   │   │   │   ├── BaseCollectionRelation.php
│   │   │   │   │   ├── BaseRelation.php
│   │   │   │   │   ├── DoctrineHelper.php
│   │   │   │   │   ├── EntityClassGenerator.php
│   │   │   │   │   ├── EntityDetails.php
│   │   │   │   │   ├── EntityRegenerator.php
│   │   │   │   │   ├── EntityRelation.php
│   │   │   │   │   ├── ORMDependencyBuilder.php
│   │   │   │   │   ├── RelationManyToMany.php
│   │   │   │   │   ├── RelationManyToOne.php
│   │   │   │   │   ├── RelationOneToMany.php
│   │   │   │   │   ├── RelationOneToOne.php
│   │   │   │   │   └── StaticReflectionService.php
│   │   │   │   ├── Event
│   │   │   │   │   └── ConsoleErrorSubscriber.php
│   │   │   │   ├── Exception
│   │   │   │   │   └── RuntimeCommandException.php
│   │   │   │   ├── Maker
│   │   │   │   │   ├── Common
│   │   │   │   │   │   ├── CanGenerateTestsTrait.php
│   │   │   │   │   │   ├── EntityIdTypeEnum.php
│   │   │   │   │   │   ├── InstallDependencyTrait.php
│   │   │   │   │   │   └── UidTrait.php
│   │   │   │   │   ├── Security
│   │   │   │   │   │   ├── MakeCustomAuthenticator.php
│   │   │   │   │   │   └── MakeFormLogin.php
│   │   │   │   │   ├── AbstractMaker.php
│   │   │   │   │   ├── MakeAuthenticator.php
│   │   │   │   │   ├── MakeCommand.php
│   │   │   │   │   ├── MakeController.php
│   │   │   │   │   ├── MakeCrud.php
│   │   │   │   │   ├── MakeDockerDatabase.php
│   │   │   │   │   ├── MakeEntity.php
│   │   │   │   │   ├── MakeFixtures.php
│   │   │   │   │   ├── MakeForm.php
│   │   │   │   │   ├── MakeFunctionalTest.php
│   │   │   │   │   ├── MakeListener.php
│   │   │   │   │   ├── MakeMessage.php
│   │   │   │   │   ├── MakeMessengerMiddleware.php
│   │   │   │   │   ├── MakeMigration.php
│   │   │   │   │   ├── MakeRegistrationForm.php
│   │   │   │   │   ├── MakeResetPassword.php
│   │   │   │   │   ├── MakeSchedule.php
│   │   │   │   │   ├── MakeSerializerEncoder.php
│   │   │   │   │   ├── MakeSerializerNormalizer.php
│   │   │   │   │   ├── MakeStimulusController.php
│   │   │   │   │   ├── MakeSubscriber.php
│   │   │   │   │   ├── MakeTest.php
│   │   │   │   │   ├── MakeTwigComponent.php
│   │   │   │   │   ├── MakeTwigExtension.php
│   │   │   │   │   ├── MakeUnitTest.php
│   │   │   │   │   ├── MakeUser.php
│   │   │   │   │   ├── MakeValidator.php
│   │   │   │   │   ├── MakeVoter.php
│   │   │   │   │   └── MakeWebhook.php
│   │   │   │   ├── Renderer
│   │   │   │   │   └── FormTypeRenderer.php
│   │   │   │   ├── Resources
│   │   │   │   │   └── bin
│   │   │   │   │       └── php-cs-fixer-v3.49.0.phar
│   │   │   │   ├── Security
│   │   │   │   │   ├── Model
│   │   │   │   │   │   ├── Authenticator.php
│   │   │   │   │   │   └── AuthenticatorType.php
│   │   │   │   │   ├── InteractiveSecurityHelper.php
│   │   │   │   │   ├── SecurityConfigUpdater.php
│   │   │   │   │   ├── SecurityControllerBuilder.php
│   │   │   │   │   ├── UserClassBuilder.php
│   │   │   │   │   └── UserClassConfiguration.php
│   │   │   │   ├── Test
│   │   │   │   │   ├── MakerTestCase.php
│   │   │   │   │   ├── MakerTestDetails.php
│   │   │   │   │   ├── MakerTestEnvironment.php
│   │   │   │   │   ├── MakerTestKernel.php
│   │   │   │   │   ├── MakerTestProcess.php
│   │   │   │   │   └── MakerTestRunner.php
│   │   │   │   ├── Util
│   │   │   │   │   ├── ClassSource
│   │   │   │   │   │   └── Model
│   │   │   │   │   │       ├── ClassData.php
│   │   │   │   │   │       └── ClassProperty.php
│   │   │   │   │   ├── AutoloaderUtil.php
│   │   │   │   │   ├── ClassDetails.php
│   │   │   │   │   ├── ClassNameDetails.php
│   │   │   │   │   ├── ClassNameValue.php
│   │   │   │   │   ├── ClassSourceManipulator.php
│   │   │   │   │   ├── CliOutputHelper.php
│   │   │   │   │   ├── ComposeFileManipulator.php
│   │   │   │   │   ├── ComposerAutoloaderFinder.php
│   │   │   │   │   ├── MakerFileLinkFormatter.php
│   │   │   │   │   ├── PhpCompatUtil.php
│   │   │   │   │   ├── PrettyPrinter.php
│   │   │   │   │   ├── TemplateComponentGenerator.php
│   │   │   │   │   ├── TemplateLinter.php
│   │   │   │   │   ├── UseStatementGenerator.php
│   │   │   │   │   ├── YamlManipulationFailedException.php
│   │   │   │   │   └── YamlSourceManipulator.php
│   │   │   │   ├── ApplicationAwareMakerInterface.php
│   │   │   │   ├── ConsoleStyle.php
│   │   │   │   ├── DependencyBuilder.php
│   │   │   │   ├── EventRegistry.php
│   │   │   │   ├── FileManager.php
│   │   │   │   ├── Generator.php
│   │   │   │   ├── GeneratorTwigHelper.php
│   │   │   │   ├── InputAwareMakerInterface.php
│   │   │   │   ├── InputConfiguration.php
│   │   │   │   ├── MakerBundle.php
│   │   │   │   ├── MakerInterface.php
│   │   │   │   ├── Str.php
│   │   │   │   └── Validator.php
│   │   │   ├── templates
│   │   │   │   ├── authenticator
│   │   │   │   │   ├── EmptyAuthenticator.tpl.php
│   │   │   │   │   ├── EmptySecurityController.tpl.php
│   │   │   │   │   ├── login_form.tpl.php
│   │   │   │   │   └── LoginFormAuthenticator.tpl.php
│   │   │   │   ├── command
│   │   │   │   │   └── Command.tpl.php
│   │   │   │   ├── controller
│   │   │   │   │   ├── test
│   │   │   │   │   │   └── Test.tpl.php
│   │   │   │   │   ├── Controller.tpl.php
│   │   │   │   │   └── twig_template.tpl.php
│   │   │   │   ├── crud
│   │   │   │   │   ├── controller
│   │   │   │   │   │   └── Controller.tpl.php
│   │   │   │   │   ├── templates
│   │   │   │   │   │   ├── _delete_form.tpl.php
│   │   │   │   │   │   ├── _form.tpl.php
│   │   │   │   │   │   ├── edit.tpl.php
│   │   │   │   │   │   ├── index.tpl.php
│   │   │   │   │   │   ├── new.tpl.php
│   │   │   │   │   │   └── show.tpl.php
│   │   │   │   │   └── test
│   │   │   │   │       └── Test.EntityManager.tpl.php
│   │   │   │   ├── doctrine
│   │   │   │   │   ├── broadcast_twig_template.tpl.php
│   │   │   │   │   ├── Entity.tpl.php
│   │   │   │   │   ├── Fixtures.tpl.php
│   │   │   │   │   └── Repository.tpl.php
│   │   │   │   ├── event
│   │   │   │   │   ├── Listener.tpl.php
│   │   │   │   │   └── Subscriber.tpl.php
│   │   │   │   ├── form
│   │   │   │   │   └── Form.tpl.php
│   │   │   │   ├── message
│   │   │   │   │   ├── Message.tpl.php
│   │   │   │   │   └── MessageHandler.tpl.php
│   │   │   │   ├── middleware
│   │   │   │   │   └── Middleware.tpl.php
│   │   │   │   ├── registration
│   │   │   │   │   ├── RegistrationController.tpl.php
│   │   │   │   │   ├── Test.WithoutVerify.tpl.php
│   │   │   │   │   ├── Test.WithVerify.tpl.php
│   │   │   │   │   ├── twig_email.tpl.php
│   │   │   │   │   └── twig_template.tpl.php
│   │   │   │   ├── resetPassword
│   │   │   │   │   ├── ChangePasswordForm.tpl.php
│   │   │   │   │   ├── ResetPasswordController.tpl.php
│   │   │   │   │   ├── ResetPasswordRequestForm.tpl.php
│   │   │   │   │   ├── Test.ResetPasswordController.tpl.php
│   │   │   │   │   ├── twig_check_email.tpl.php
│   │   │   │   │   ├── twig_email.tpl.php
│   │   │   │   │   ├── twig_request.tpl.php
│   │   │   │   │   └── twig_reset.tpl.php
│   │   │   │   ├── scheduler
│   │   │   │   │   └── Schedule.tpl.php
│   │   │   │   ├── security
│   │   │   │   │   ├── custom
│   │   │   │   │   │   └── Authenticator.tpl.php
│   │   │   │   │   ├── formLogin
│   │   │   │   │   │   ├── login_form.tpl.php
│   │   │   │   │   │   ├── LoginController.tpl.php
│   │   │   │   │   │   └── Test.LoginController.tpl.php
│   │   │   │   │   ├── UserProvider.tpl.php
│   │   │   │   │   └── Voter.tpl.php
│   │   │   │   ├── serializer
│   │   │   │   │   ├── Encoder.tpl.php
│   │   │   │   │   └── Normalizer.tpl.php
│   │   │   │   ├── stimulus
│   │   │   │   │   └── Controller.tpl.php
│   │   │   │   ├── test
│   │   │   │   │   ├── ApiTestCase.tpl.php
│   │   │   │   │   ├── Functional.tpl.php
│   │   │   │   │   ├── KernelTestCase.tpl.php
│   │   │   │   │   ├── PantherTestCase.tpl.php
│   │   │   │   │   ├── TestCase.tpl.php
│   │   │   │   │   ├── Unit.tpl.php
│   │   │   │   │   └── WebTestCase.tpl.php
│   │   │   │   ├── twig
│   │   │   │   │   ├── component_template.tpl.php
│   │   │   │   │   ├── Component.tpl.php
│   │   │   │   │   ├── Extension.tpl.php
│   │   │   │   │   ├── LiveComponent.tpl.php
│   │   │   │   │   └── Runtime.tpl.php
│   │   │   │   ├── validator
│   │   │   │   │   ├── Constraint.tpl.php
│   │   │   │   │   └── Validator.tpl.php
│   │   │   │   ├── verifyEmail
│   │   │   │   │   └── EmailVerifier.tpl.php
│   │   │   │   ├── webhook
│   │   │   │   │   ├── RequestParser.tpl.php
│   │   │   │   │   └── WebhookConsumer.tpl.php
│   │   │   │   └── Class.tpl.php
│   │   │   ├── tests
│   │   │   │   ├── Command
│   │   │   │   │   └── MakerCommandTest.php
│   │   │   │   ├── Docker
│   │   │   │   │   └── DatabaseServicesTest.php
│   │   │   │   ├── Doctrine
│   │   │   │   │   ├── fixtures
│   │   │   │   │   │   ├── expected_no_overwrite
│   │   │   │   │   │   │   └── src
│   │   │   │   │   │   │       └── Entity
│   │   │   │   │   │   │           ├── BaseClient.php
│   │   │   │   │   │   │           ├── Client.php
│   │   │   │   │   │   │           ├── Embed.php
│   │   │   │   │   │   │           ├── Tag.php
│   │   │   │   │   │   │           ├── User.php
│   │   │   │   │   │   │           ├── UserAvatar.php
│   │   │   │   │   │   │           └── UserProfile.php
│   │   │   │   │   │   ├── expected_overwrite
│   │   │   │   │   │   │   └── src
│   │   │   │   │   │   │       └── Entity
│   │   │   │   │   │   │           ├── BaseClient.php
│   │   │   │   │   │   │           ├── Client.php
│   │   │   │   │   │   │           ├── Embed.php
│   │   │   │   │   │   │           ├── Tag.php
│   │   │   │   │   │   │           ├── User.php
│   │   │   │   │   │   │           ├── UserAvatar.php
│   │   │   │   │   │   │           └── UserProfile.php
│   │   │   │   │   │   └── source_project
│   │   │   │   │   │       └── src
│   │   │   │   │   │           └── Entity
│   │   │   │   │   │               ├── BaseClient.php
│   │   │   │   │   │               ├── Client.php
│   │   │   │   │   │               ├── Embed.php
│   │   │   │   │   │               ├── Tag.php
│   │   │   │   │   │               ├── TeamTrait.php
│   │   │   │   │   │               ├── TimestampableTrait.php
│   │   │   │   │   │               ├── User.php
│   │   │   │   │   │               ├── UserAvatar.php
│   │   │   │   │   │               └── UserProfile.php
│   │   │   │   │   ├── DoctrineHelperTest.php
│   │   │   │   │   └── EntityRegeneratorTest.php
│   │   │   │   ├── fixtures
│   │   │   │   │   ├── make-auth
│   │   │   │   │   │   ├── BlankAuthenticator.php
│   │   │   │   │   │   ├── LoginFlowTest.php.twig
│   │   │   │   │   │   ├── SecurityController-empty.php
│   │   │   │   │   │   └── UserProvider-no-entity.php
│   │   │   │   │   ├── make-command
│   │   │   │   │   │   └── tests
│   │   │   │   │   │       ├── it_makes_a_command_in_custom_namespace.php
│   │   │   │   │   │       └── it_makes_a_command.php
│   │   │   │   │   ├── make-controller
│   │   │   │   │   │   ├── expected
│   │   │   │   │   │   │   ├── FinalController.php
│   │   │   │   │   │   │   └── FinalControllerWithTemplate.php
│   │   │   │   │   │   └── tests
│   │   │   │   │   │       ├── it_generates_a_controller_with_twig.php
│   │   │   │   │   │       ├── it_generates_a_controller.php
│   │   │   │   │   │       └── it_generates_an_invokable_controller.php
│   │   │   │   │   ├── make-crud
│   │   │   │   │   │   ├── expected
│   │   │   │   │   │   │   └── WithCustomRepository.php
│   │   │   │   │   │   ├── tests
│   │   │   │   │   │   │   ├── it_generates_basic_crud.php
│   │   │   │   │   │   │   ├── it_generates_crud_with_custom_controller.php
│   │   │   │   │   │   │   └── it_generates_crud_with_custom_root_namespace.php
│   │   │   │   │   │   ├── SweetFood-custom-namespace.php
│   │   │   │   │   │   ├── SweetFood.php
│   │   │   │   │   │   ├── SweetFoodCustomRepository.php
│   │   │   │   │   │   └── SweetFoodRepository.php
│   │   │   │   │   ├── make-entity
│   │   │   │   │   │   ├── entities
│   │   │   │   │   │   │   └── attributes
│   │   │   │   │   │   │       ├── Enum
│   │   │   │   │   │   │       │   └── Role-basic.php
│   │   │   │   │   │   │       ├── Friend
│   │   │   │   │   │   │       │   └── User-sub-namespace.php
│   │   │   │   │   │   │       ├── User-basic.php
│   │   │   │   │   │   │       ├── User-custom-namespace.php
│   │   │   │   │   │   │       ├── User-invalid-method-no-property.php
│   │   │   │   │   │   │       ├── User-invalid-method.php
│   │   │   │   │   │   │       └── UserAvatarPhoto-basic.php
│   │   │   │   │   │   ├── regenerate
│   │   │   │   │   │   │   └── attributes
│   │   │   │   │   │   │       └── src
│   │   │   │   │   │   │           └── Entity
│   │   │   │   │   │   │               ├── User.php
│   │   │   │   │   │   │               └── UserAvatar.php
│   │   │   │   │   │   ├── regenerate-embeddable
│   │   │   │   │   │   │   └── attributes
│   │   │   │   │   │   │       └── src
│   │   │   │   │   │   │           └── Entity
│   │   │   │   │   │   │               ├── Food.php
│   │   │   │   │   │   │               └── Recipe.php
│   │   │   │   │   │   ├── regenerate-embedded
│   │   │   │   │   │   │   └── attributes
│   │   │   │   │   │   │       └── src
│   │   │   │   │   │   │           └── Entity
│   │   │   │   │   │   │               ├── Currency.php
│   │   │   │   │   │   │               ├── Invoice.php
│   │   │   │   │   │   │               └── Money.php
│   │   │   │   │   │   ├── tests
│   │   │   │   │   │   │   ├── it_adds_many_to_many_simple.php
│   │   │   │   │   │   │   ├── it_adds_many_to_many_with_custom_root_namespace.php
│   │   │   │   │   │   │   ├── it_adds_many_to_one_self_referencing.php
│   │   │   │   │   │   │   ├── it_adds_one_to_many_simple.php
│   │   │   │   │   │   │   ├── it_adds_one_to_one_simple.php
│   │   │   │   │   │   │   ├── it_creates_class_that_matches_existing_namespace.php
│   │   │   │   │   │   │   ├── it_regenerates_embeddable_entity.php
│   │   │   │   │   │   │   ├── it_regenerates_embedded_entities.php
│   │   │   │   │   │   │   ├── it_regenerates_entities.php
│   │   │   │   │   │   │   ├── it_regenerates_with_overwrite.php
│   │   │   │   │   │   │   └── it_updates_entity_many_to_one_no_inverse.php
│   │   │   │   │   │   ├── xml-mapping
│   │   │   │   │   │   │   └── config
│   │   │   │   │   │   │       └── doctrine
│   │   │   │   │   │   │           └── User.orm.xml
│   │   │   │   │   │   ├── GeneratedEntityTest.php.twig
│   │   │   │   │   │   └── Group-vendor.php
│   │   │   │   │   ├── make-form
│   │   │   │   │   │   ├── embeddable
│   │   │   │   │   │   │   ├── Food.php
│   │   │   │   │   │   │   └── Receipt.php
│   │   │   │   │   │   ├── inheritance
│   │   │   │   │   │   │   ├── Food.php
│   │   │   │   │   │   │   └── SourFood.php
│   │   │   │   │   │   ├── relation_many_to_many
│   │   │   │   │   │   │   ├── Book.php
│   │   │   │   │   │   │   └── Library.php
│   │   │   │   │   │   ├── relation_one_to_many
│   │   │   │   │   │   │   ├── Author.php
│   │   │   │   │   │   │   └── Book.php
│   │   │   │   │   │   ├── relation_one_to_one
│   │   │   │   │   │   │   ├── Librarian.php
│   │   │   │   │   │   │   └── Library.php
│   │   │   │   │   │   ├── tests
│   │   │   │   │   │   │   ├── it_generates_basic_form.php
│   │   │   │   │   │   │   ├── it_generates_form_with_embeddable_entity.php
│   │   │   │   │   │   │   ├── it_generates_form_with_entity.php
│   │   │   │   │   │   │   ├── it_generates_form_with_many_to_many_relation.php
│   │   │   │   │   │   │   ├── it_generates_form_with_many_to_one_relation.php
│   │   │   │   │   │   │   ├── it_generates_form_with_non_entity_dto.php
│   │   │   │   │   │   │   ├── it_generates_form_with_one_to_many_relation.php
│   │   │   │   │   │   │   ├── it_generates_form_with_one_to_one_relation.php
│   │   │   │   │   │   │   └── it_generates_form_with_single_table_inheritance_entity.php
│   │   │   │   │   │   ├── Property.php
│   │   │   │   │   │   ├── SourFood.php
│   │   │   │   │   │   └── TaskData.php
│   │   │   │   │   ├── make-functional
│   │   │   │   │   │   ├── MainController.php
│   │   │   │   │   │   └── routes.yaml
│   │   │   │   │   ├── make-listener
│   │   │   │   │   │   └── tests
│   │   │   │   │   │       ├── EventListener
│   │   │   │   │   │       │   ├── BarListener.php
│   │   │   │   │   │       │   ├── CustomListener.php
│   │   │   │   │   │       │   ├── FooBarListener.php
│   │   │   │   │   │       │   ├── FooListener.php
│   │   │   │   │   │       │   └── UnknownListener.php
│   │   │   │   │   │       └── EventSubscriber
│   │   │   │   │   │           ├── CustomSubscriber.php
│   │   │   │   │   │           ├── FooBarSubscriber.php
│   │   │   │   │   │           ├── FooSubscriber.php
│   │   │   │   │   │           └── UnknownSubscriber.php
│   │   │   │   │   ├── make-message
│   │   │   │   │   │   └── tests
│   │   │   │   │   │       ├── it_generates_basic_message.php
│   │   │   │   │   │       └── it_generates_message_with_transport.php
│   │   │   │   │   ├── make-migration
│   │   │   │   │   │   └── SpicyFood.php
│   │   │   │   │   ├── make-registration-form
│   │   │   │   │   │   ├── expected
│   │   │   │   │   │   │   ├── RegistrationControllerCustomAuthenticator.php
│   │   │   │   │   │   │   ├── RegistrationControllerFormLogin.php
│   │   │   │   │   │   │   └── RegistrationControllerNoLogin.php
│   │   │   │   │   │   ├── standard_setup
│   │   │   │   │   │   │   └── src
│   │   │   │   │   │   │       ├── Controller
│   │   │   │   │   │   │       │   └── TestingController.php
│   │   │   │   │   │   │       └── Security
│   │   │   │   │   │   │           └── StubAuthenticator.php
│   │   │   │   │   │   └── tests
│   │   │   │   │   │       ├── it_generates_registration_form_with_verification.php
│   │   │   │   │   │       └── it_generates_registration_with_entity_and_authenticator.php
│   │   │   │   │   ├── make-reset-password
│   │   │   │   │   │   ├── src
│   │   │   │   │   │   │   └── Controller
│   │   │   │   │   │   │       └── FixtureController.php
│   │   │   │   │   │   └── tests
│   │   │   │   │   │       └── it_generates_with_normal_setup.php
│   │   │   │   │   ├── make-schedule
│   │   │   │   │   │   ├── expected
│   │   │   │   │   │   │   ├── DefaultScheduleEmpty.php
│   │   │   │   │   │   │   ├── DefaultScheduleWithTransportName.php
│   │   │   │   │   │   │   ├── MyScheduleEmpty.php
│   │   │   │   │   │   │   └── MyScheduleWithMessage.php
│   │   │   │   │   │   └── standard_setup
│   │   │   │   │   │       └── src
│   │   │   │   │   │           └── Message
│   │   │   │   │   │               └── MessageFixture.php
│   │   │   │   │   ├── make-serializer-normalizer
│   │   │   │   │   │   ├── EntityFixture.php
│   │   │   │   │   │   ├── EntityFixtureNormalizer.php
│   │   │   │   │   │   └── FooBarNormalizer.php
│   │   │   │   │   ├── make-stimulus-controller
│   │   │   │   │   │   ├── with_classes.js
│   │   │   │   │   │   ├── with_targets_values_classes.js
│   │   │   │   │   │   ├── with_targets.js
│   │   │   │   │   │   ├── with_values.js
│   │   │   │   │   │   └── without_targets.js
│   │   │   │   │   ├── make-test
│   │   │   │   │   │   └── basic_setup
│   │   │   │   │   │       ├── config
│   │   │   │   │   │       │   └── routes.yaml
│   │   │   │   │   │       └── src
│   │   │   │   │   │           └── Controller
│   │   │   │   │   │               └── MainController.php
│   │   │   │   │   ├── make-twig-component
│   │   │   │   │   │   ├── tests
│   │   │   │   │   │   │   ├── it_generates_live_component.php
│   │   │   │   │   │   │   └── it_generates_twig_component.php
│   │   │   │   │   │   └── custom_twig_component.yaml
│   │   │   │   │   ├── make-user
│   │   │   │   │   │   ├── standard_setup
│   │   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   │   └── routes.yaml
│   │   │   │   │   │   │   └── src
│   │   │   │   │   │   │       ├── Controller
│   │   │   │   │   │   │       │   └── TestingController.php
│   │   │   │   │   │   │       └── Security
│   │   │   │   │   │   │           └── AutomaticAuthenticator.php
│   │   │   │   │   │   └── tests
│   │   │   │   │   │       ├── it_generates_entity_with_password_and_ulid.php
│   │   │   │   │   │       ├── it_generates_entity_with_password_and_uuid.php
│   │   │   │   │   │       ├── it_generates_entity_with_password.php
│   │   │   │   │   │       └── it_generates_non_entity_no_password.php
│   │   │   │   │   ├── make-validator
│   │   │   │   │   │   └── expected
│   │   │   │   │   │       ├── FooBar.php
│   │   │   │   │   │       └── FooBarValidator.php
│   │   │   │   │   ├── make-voter
│   │   │   │   │   │   └── expected
│   │   │   │   │   │       ├── FooBarVoter.php
│   │   │   │   │   │       └── not_final_FooBarVoter.php
│   │   │   │   │   ├── make-webhook
│   │   │   │   │   │   ├── RemoteServiceRequestParser.php
│   │   │   │   │   │   ├── RemoteServiceWebhookConsumer.php
│   │   │   │   │   │   └── webhook.yaml
│   │   │   │   │   ├── security
│   │   │   │   │   │   ├── make-custom-authenticator
│   │   │   │   │   │   │   └── expected
│   │   │   │   │   │   │       └── FixtureAuthenticator.php
│   │   │   │   │   │   └── make-form-login
│   │   │   │   │   │       ├── expected
│   │   │   │   │   │       │   ├── login_no_logout.html.twig
│   │   │   │   │   │       │   ├── login.html.twig
│   │   │   │   │   │       │   ├── LoginController.php
│   │   │   │   │   │       │   ├── SecurityController.php
│   │   │   │   │   │       │   └── SecurityControllerWithoutLogout.php
│   │   │   │   │   │       ├── FixtureController.php
│   │   │   │   │   │       └── LoginTest.php
│   │   │   │   │   └── template-linter
│   │   │   │   │       └── php-cs-fixer.test.php
│   │   │   │   ├── Maker
│   │   │   │   │   ├── Security
│   │   │   │   │   │   ├── MakeCustomAuthenticatorTest.php
│   │   │   │   │   │   └── MakeFormLoginTest.php
│   │   │   │   │   ├── FunctionalTest.php
│   │   │   │   │   ├── MakeAuthenticatorTest.php
│   │   │   │   │   ├── MakeCommandTest.php
│   │   │   │   │   ├── MakeControllerTest.php
│   │   │   │   │   ├── MakeCrudTest.php
│   │   │   │   │   ├── MakeDockerDatabaseTest.php
│   │   │   │   │   ├── MakeEntityTest.php
│   │   │   │   │   ├── MakeFixturesTest.php
│   │   │   │   │   ├── MakeFormTest.php
│   │   │   │   │   ├── MakeFunctionalTestTest.php
│   │   │   │   │   ├── MakeListenerTest.php
│   │   │   │   │   ├── MakeMessageTest.php
│   │   │   │   │   ├── MakeMessengerMiddlewareTest.php
│   │   │   │   │   ├── MakeMigrationTest.php
│   │   │   │   │   ├── MakeRegistrationFormTest.php
│   │   │   │   │   ├── MakeResetPasswordTest.php
│   │   │   │   │   ├── MakeScheduleTest.php
│   │   │   │   │   ├── MakeSerializerEncoderTest.php
│   │   │   │   │   ├── MakeSerializerNormalizerTest.php
│   │   │   │   │   ├── MakeStimulusControllerTest.php
│   │   │   │   │   ├── MakeSubscriberTest.php
│   │   │   │   │   ├── MakeTestTest.php
│   │   │   │   │   ├── MakeTwigComponentTest.php
│   │   │   │   │   ├── MakeTwigExtensionTest.php
│   │   │   │   │   ├── MakeUnitTestTest.php
│   │   │   │   │   ├── MakeUserTest.php
│   │   │   │   │   ├── MakeValidatorTest.php
│   │   │   │   │   ├── MakeVoterTest.php
│   │   │   │   │   ├── MakeWebhookTest.php
│   │   │   │   │   └── TemplateLinterTest.php
│   │   │   │   ├── Security
│   │   │   │   │   ├── fixtures
│   │   │   │   │   │   ├── expected
│   │   │   │   │   │   │   ├── SecurityController_login_logout.php
│   │   │   │   │   │   │   ├── SecurityController_login.php
│   │   │   │   │   │   │   ├── SecurityController_logout.php
│   │   │   │   │   │   │   ├── UserEntityWithEmailAsIdentifier.php
│   │   │   │   │   │   │   ├── UserEntityWithoutPassword.php
│   │   │   │   │   │   │   ├── UserEntityWithPassword.php
│   │   │   │   │   │   │   ├── UserEntityWithUser_IdentifierAsIdentifier.php
│   │   │   │   │   │   │   ├── UserModelWithEmailAsIdentifier.php
│   │   │   │   │   │   │   ├── UserModelWithoutPassword.php
│   │   │   │   │   │   │   └── UserModelWithPassword.php
│   │   │   │   │   │   └── source
│   │   │   │   │   │       ├── SecurityController.php
│   │   │   │   │   │       ├── UserEntity.php
│   │   │   │   │   │       └── UserModel.php
│   │   │   │   │   ├── yaml_fixtures
│   │   │   │   │   │   ├── expected_authenticator
│   │   │   │   │   │   │   ├── empty_source.yaml
│   │   │   │   │   │   │   ├── multiple_authenticators.yaml
│   │   │   │   │   │   │   ├── simple_security_source.yaml
│   │   │   │   │   │   │   ├── simple_security_with_firewalls_and_always_remember_me.yaml
│   │   │   │   │   │   │   ├── simple_security_with_firewalls_and_authenticator.yaml
│   │   │   │   │   │   │   ├── simple_security_with_firewalls_and_logout.yaml
│   │   │   │   │   │   │   ├── simple_security_with_firewalls_and_remember_me_checkbox.yaml
│   │   │   │   │   │   │   └── simple_security_with_firewalls.yaml
│   │   │   │   │   │   ├── expected_form_login
│   │   │   │   │   │   │   └── form_login.yaml
│   │   │   │   │   │   ├── expected_json_login
│   │   │   │   │   │   │   └── json_login.yaml
│   │   │   │   │   │   ├── expected_logout
│   │   │   │   │   │   │   └── logout.yaml
│   │   │   │   │   │   ├── expected_user_class
│   │   │   │   │   │   │   └── 5.3
│   │   │   │   │   │   │       ├── empty_source_model_email_with_password.yaml
│   │   │   │   │   │   │       ├── entity_email_with_password.yaml
│   │   │   │   │   │   │       ├── entity_username_no_password.yaml
│   │   │   │   │   │   │       ├── model_email_password_existing_providers.yaml
│   │   │   │   │   │   │       ├── model_email_with_password.yaml
│   │   │   │   │   │   │       ├── model_username_no_password.yaml
│   │   │   │   │   │   │       ├── security_52_complex_entity_email_with_password.yaml
│   │   │   │   │   │   │       ├── security_52_entity_email_with_password.yaml
│   │   │   │   │   │   │       └── simple_security_with_single_memory_provider_configured.yaml
│   │   │   │   │   │   └── source
│   │   │   │   │   │       ├── empty_security.yaml
│   │   │   │   │   │       ├── multiple_authenticators.yaml
│   │   │   │   │   │       ├── multiple_providers_security.yaml
│   │   │   │   │   │       ├── simple_security_with_firewalls_and_authenticator.yaml
│   │   │   │   │   │       ├── simple_security_with_firewalls_and_logout.yaml
│   │   │   │   │   │       ├── simple_security_with_firewalls.yaml
│   │   │   │   │   │       ├── simple_security_with_single_memory_provider_configured.yaml
│   │   │   │   │   │       └── simple_security.yaml
│   │   │   │   │   ├── InteractiveSecurityHelperTest.php
│   │   │   │   │   ├── SecurityConfigUpdaterTest.php
│   │   │   │   │   ├── SecurityControllerBuilderTest.php
│   │   │   │   │   └── UserClassBuilderTest.php
│   │   │   │   ├── Test
│   │   │   │   │   └── MakerTestDetailsTest.php
│   │   │   │   ├── tmp
│   │   │   │   │   └── .gitignore
│   │   │   │   ├── Util
│   │   │   │   │   ├── ClassSource
│   │   │   │   │   │   └── ClassDataTest.php
│   │   │   │   │   ├── fixtures
│   │   │   │   │   │   ├── add_class_attribute
│   │   │   │   │   │   │   ├── User_empty.php
│   │   │   │   │   │   │   └── User_simple.php
│   │   │   │   │   │   ├── add_constructor
│   │   │   │   │   │   │   ├── User_with_constructor_constante.php
│   │   │   │   │   │   │   ├── UserEmpty_with_constructor.php
│   │   │   │   │   │   │   └── UserSimple_with_constructor.php
│   │   │   │   │   │   ├── add_entity_field
│   │   │   │   │   │   │   ├── legacy
│   │   │   │   │   │   │   │   └── User_simple_object.php
│   │   │   │   │   │   │   ├── User_simple_datetime.php
│   │   │   │   │   │   │   ├── User_simple_object.php
│   │   │   │   │   │   │   ├── User_simple_prop_already_exists.php
│   │   │   │   │   │   │   ├── User_simple_prop_zero.php
│   │   │   │   │   │   │   ├── User_simple_ulid.php
│   │   │   │   │   │   │   ├── User_simple_uuid.php
│   │   │   │   │   │   │   └── User_simple.php
│   │   │   │   │   │   ├── add_getter
│   │   │   │   │   │   │   ├── User_bool_begins_with_has.php
│   │   │   │   │   │   │   ├── User_bool_begins_with_is.php
│   │   │   │   │   │   │   ├── User_empty.php
│   │   │   │   │   │   │   ├── User_no_props.php
│   │   │   │   │   │   │   ├── User_simple_bool.php
│   │   │   │   │   │   │   └── User_simple.php
│   │   │   │   │   │   ├── add_many_to_many_relation
│   │   │   │   │   │   │   ├── User_simple_inverse.php
│   │   │   │   │   │   │   ├── User_simple_no_inverse.php
│   │   │   │   │   │   │   └── User_simple_owning.php
│   │   │   │   │   │   ├── add_many_to_one_relation
│   │   │   │   │   │   │   ├── User_empty_other_namespace.php
│   │   │   │   │   │   │   ├── User_simple_no_inverse.php
│   │   │   │   │   │   │   ├── User_simple_not_nullable.php
│   │   │   │   │   │   │   ├── User_simple_nullable.php
│   │   │   │   │   │   │   ├── User_simple_other_namespace.php
│   │   │   │   │   │   │   └── User_with_relation_same_and_other_namespaces.php
│   │   │   │   │   │   ├── add_method
│   │   │   │   │   │   │   ├── Controller_with_action.php
│   │   │   │   │   │   │   └── UserEmpty_with_newMethod.php
│   │   │   │   │   │   ├── add_one_to_many_relation
│   │   │   │   │   │   │   ├── legacy
│   │   │   │   │   │   │   │   ├── User_simple_orphan_removal.php
│   │   │   │   │   │   │   │   ├── User_simple.php
│   │   │   │   │   │   │   │   └── User_with_use_statements.php
│   │   │   │   │   │   │   ├── User_simple_orphan_removal.php
│   │   │   │   │   │   │   ├── User_simple.php
│   │   │   │   │   │   │   └── User_with_use_statements.php
│   │   │   │   │   │   ├── add_one_to_one_relation
│   │   │   │   │   │   │   ├── legacy
│   │   │   │   │   │   │   │   └── User_simple_self.php
│   │   │   │   │   │   │   ├── User_simple_no_inverse_not_nullable.php
│   │   │   │   │   │   │   ├── User_simple_no_inverse.php
│   │   │   │   │   │   │   ├── User_simple_owning.php
│   │   │   │   │   │   │   ├── User_simple_self.php
│   │   │   │   │   │   │   ├── User_with_use_statements_avoid_duplicate_use_alias.php
│   │   │   │   │   │   │   ├── User_with_use_statements_avoid_duplicate_use.php
│   │   │   │   │   │   │   ├── UserProfile_simple_inverse_not_nullable.php
│   │   │   │   │   │   │   └── UserProfile_simple_inverse.php
│   │   │   │   │   │   ├── add_property
│   │   │   │   │   │   │   ├── User_empty.php
│   │   │   │   │   │   │   ├── User_no_props_constants.php
│   │   │   │   │   │   │   ├── User_no_props.php
│   │   │   │   │   │   │   └── User_simple.php
│   │   │   │   │   │   ├── add_setter
│   │   │   │   │   │   │   ├── User_bool_begins_with_is.php
│   │   │   │   │   │   │   ├── User_empty.php
│   │   │   │   │   │   │   ├── User_no_props.php
│   │   │   │   │   │   │   ├── User_simple_null_type.php
│   │   │   │   │   │   │   └── User_simple.php
│   │   │   │   │   │   ├── add_trait
│   │   │   │   │   │   │   ├── User_with_const_trait.php
│   │   │   │   │   │   │   ├── User_with_only_trait.php
│   │   │   │   │   │   │   ├── User_with_prop_trait.php
│   │   │   │   │   │   │   └── User_with_trait_trait.php
│   │   │   │   │   │   ├── clear_classNode_stmts
│   │   │   │   │   │   │   └── UserProfile_stmts_clear.php
│   │   │   │   │   │   ├── implements_interface
│   │   │   │   │   │   │   ├── User_simple_with_interface.php
│   │   │   │   │   │   │   └── User_simple.php
│   │   │   │   │   │   └── source
│   │   │   │   │   │       ├── EmptyController.php
│   │   │   │   │   │       ├── User_empty.php
│   │   │   │   │   │       ├── User_no_props_constants.php
│   │   │   │   │   │       ├── User_no_props.php
│   │   │   │   │   │       ├── User_only_props.php
│   │   │   │   │   │       ├── User_simple_with_interface.php
│   │   │   │   │   │       ├── User_simple.php
│   │   │   │   │   │       ├── User_some_props.php
│   │   │   │   │   │       ├── User_with_const.php
│   │   │   │   │   │       ├── User_with_constructor.php
│   │   │   │   │   │       ├── User_with_relation.php
│   │   │   │   │   │       ├── User_with_trait.php
│   │   │   │   │   │       ├── User_with_use_statements.php
│   │   │   │   │   │       └── UserProfile_simple.php
│   │   │   │   │   ├── yaml_fixtures
│   │   │   │   │   │   ├── add_array_to_null.test
│   │   │   │   │   │   ├── add_comment_start.test
│   │   │   │   │   │   ├── add_comment_to_sequence.test
│   │   │   │   │   │   ├── add_indented_array.test
│   │   │   │   │   │   ├── add_item_and_sort_natural.test
│   │   │   │   │   │   ├── add_item_and_sort.test
│   │   │   │   │   │   ├── add_item_on_config_with_bind.test
│   │   │   │   │   │   ├── add_item_to_start_of_top_level_hash.test
│   │   │   │   │   │   ├── add_key_to_2nd_level_hash.test
│   │   │   │   │   │   ├── add_key_to_null.test
│   │   │   │   │   │   ├── add_multiple_comments.test
│   │   │   │   │   │   ├── add_new_item_in_multiline_hash.test
│   │   │   │   │   │   ├── add_new_line_middle.test
│   │   │   │   │   │   ├── add_new_line_start.test
│   │   │   │   │   │   ├── add_simple_scalar_to_hash.test
│   │   │   │   │   │   ├── array_semicolon_separator.test
│   │   │   │   │   │   ├── blank_line_null_value.test
│   │   │   │   │   │   ├── change_end_of_file.test
│   │   │   │   │   │   ├── change_key_type_from_array.test
│   │   │   │   │   │   ├── change_start_of_file.test
│   │   │   │   │   │   ├── complex_string_to_array.test
│   │   │   │   │   │   ├── deeper_hash_emptied.test
│   │   │   │   │   │   ├── deeper_hash_inline_item_prepend_no_spaces.test
│   │   │   │   │   │   ├── deeper_hash_inline_item_prepend_with_spaces.test
│   │   │   │   │   │   ├── deeper_hash_item_add_middle.test
│   │   │   │   │   │   ├── deeper_hash_item_appended.test
│   │   │   │   │   │   ├── deeper_hash_item_comment_location_prepend.test
│   │   │   │   │   │   ├── deeper_hash_item_prepend.test
│   │   │   │   │   │   ├── deeper_hash_item_removed.test
│   │   │   │   │   │   ├── deeper_hash_item_replaced.test
│   │   │   │   │   │   ├── deeper_hash_replace_key_eof.test
│   │   │   │   │   │   ├── duplicate_keys_in_file.test
│   │   │   │   │   │   ├── find_value_after_comment_containing_value_string.test
│   │   │   │   │   │   ├── full_security_example.test
│   │   │   │   │   │   ├── inline_hash_append_item.test
│   │   │   │   │   │   ├── inline_hash_remove_item.test
│   │   │   │   │   │   ├── inline_hash_remove_middle_item.test
│   │   │   │   │   │   ├── inline_sequence_add_first_item.test
│   │   │   │   │   │   ├── inline_sequence_remove_middle_item.test
│   │   │   │   │   │   ├── inline_sequene_append_item.test
│   │   │   │   │   │   ├── keyed_array_item.test
│   │   │   │   │   │   ├── keys_with_simple_quotes.test
│   │   │   │   │   │   ├── last_value_is_blank.test
│   │   │   │   │   │   ├── multiline_sequence_append_item.test
│   │   │   │   │   │   ├── multiline_string_before_property.test
│   │   │   │   │   │   ├── multiline_string_remove_line.test
│   │   │   │   │   │   ├── multiline_string_with_blank_line.test
│   │   │   │   │   │   ├── multiline_string_without_update.test
│   │   │   │   │   │   ├── multiline_string.test
│   │   │   │   │   │   ├── new_line_comment_location.test
│   │   │   │   │   │   ├── new_line_with_root_level_comment.test
│   │   │   │   │   │   ├── security_password_hashtag.test
│   │   │   │   │   │   ├── simple_bool_change.test
│   │   │   │   │   │   ├── simple_has_add_multiple_items.test
│   │   │   │   │   │   ├── simple_hash_add_first_item.test
│   │   │   │   │   │   ├── simple_hash_add_indexed_item.test
│   │   │   │   │   │   ├── simple_hash_add_item.test
│   │   │   │   │   │   ├── simple_hash_remove_item.test
│   │   │   │   │   │   ├── simple_hash_type_mismatch_add_first_item.test
│   │   │   │   │   │   ├── simple_sequence_add_array_with_comments.test
│   │   │   │   │   │   ├── simple_sequence_add_array.test
│   │   │   │   │   │   ├── simple_sequence_add_item.test
│   │   │   │   │   │   ├── simple_sequence_change_item.test
│   │   │   │   │   │   ├── simple_string_change_double_quotes.test
│   │   │   │   │   │   ├── simple_string_change_single_quotes.test
│   │   │   │   │   │   ├── simple_string_change.test
│   │   │   │   │   │   ├── string_to_array_with_eof_blank_line.test
│   │   │   │   │   │   └── string_to_array.test
│   │   │   │   │   ├── AutoloaderUtilTest.php
│   │   │   │   │   ├── ClassDetailsTest.php
│   │   │   │   │   ├── ClassSourceManipulatorTest.php
│   │   │   │   │   ├── CliOutputHelperTest.php
│   │   │   │   │   ├── ComposeFileManipulatorTest.php
│   │   │   │   │   ├── ComposerAutoloaderFinderTest.php
│   │   │   │   │   ├── MakerFileLinkFormatterTest.php
│   │   │   │   │   ├── PhpCompatUtilTest.php
│   │   │   │   │   ├── TemplateComponentGeneratorTest.php
│   │   │   │   │   ├── TemplateLinterTest.php
│   │   │   │   │   ├── UseStatementGeneratorTest.php
│   │   │   │   │   └── YamlSourceManipulatorTest.php
│   │   │   │   ├── DependencyBuilderTest.php
│   │   │   │   ├── EventRegistryTest.php
│   │   │   │   ├── FileManagerTest.php
│   │   │   │   ├── GeneratorTest.php
│   │   │   │   ├── GeneratorTwigHelperTest.php
│   │   │   │   ├── RegexTest.php
│   │   │   │   ├── StrTest.php
│   │   │   │   └── ValidatorTest.php
│   │   │   ├── tools
│   │   │   │   ├── php-cs-fixer
│   │   │   │   │   └── composer.json
│   │   │   │   ├── phpstan
│   │   │   │   │   ├── includes
│   │   │   │   │   │   ├── .gitignore
│   │   │   │   │   │   └── composer.json
│   │   │   │   │   └── composer.json
│   │   │   │   └── twigcs
│   │   │   │       ├── src
│   │   │   │       │   └── MakerTwigRuleSet.php
│   │   │   │       ├── .twig_cs.dist
│   │   │   │       └── composer.json
│   │   │   ├── .doctor-rst.yaml
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── .php-cs-fixer.dist.php
│   │   │   ├── .symfony.bundle.yaml
│   │   │   ├── composer.json
│   │   │   ├── docker-compose.yml
│   │   │   ├── LICENSE
│   │   │   ├── phpstan.dist.neon
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── mime
│   │   │   ├── Crypto
│   │   │   │   ├── DkimOptions.php
│   │   │   │   ├── DkimSigner.php
│   │   │   │   ├── SMime.php
│   │   │   │   ├── SMimeEncrypter.php
│   │   │   │   └── SMimeSigner.php
│   │   │   ├── DependencyInjection
│   │   │   │   └── AddMimeTypeGuesserPass.php
│   │   │   ├── Encoder
│   │   │   │   ├── AddressEncoderInterface.php
│   │   │   │   ├── Base64ContentEncoder.php
│   │   │   │   ├── Base64Encoder.php
│   │   │   │   ├── Base64MimeHeaderEncoder.php
│   │   │   │   ├── ContentEncoderInterface.php
│   │   │   │   ├── EightBitContentEncoder.php
│   │   │   │   ├── EncoderInterface.php
│   │   │   │   ├── IdnAddressEncoder.php
│   │   │   │   ├── MimeHeaderEncoderInterface.php
│   │   │   │   ├── QpContentEncoder.php
│   │   │   │   ├── QpEncoder.php
│   │   │   │   ├── QpMimeHeaderEncoder.php
│   │   │   │   └── Rfc2231Encoder.php
│   │   │   ├── Exception
│   │   │   │   ├── AddressEncoderException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── RfcComplianceException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Header
│   │   │   │   ├── AbstractHeader.php
│   │   │   │   ├── DateHeader.php
│   │   │   │   ├── HeaderInterface.php
│   │   │   │   ├── Headers.php
│   │   │   │   ├── IdentificationHeader.php
│   │   │   │   ├── MailboxHeader.php
│   │   │   │   ├── MailboxListHeader.php
│   │   │   │   ├── ParameterizedHeader.php
│   │   │   │   ├── PathHeader.php
│   │   │   │   └── UnstructuredHeader.php
│   │   │   ├── HtmlToTextConverter
│   │   │   │   ├── DefaultHtmlToTextConverter.php
│   │   │   │   ├── HtmlToTextConverterInterface.php
│   │   │   │   └── LeagueHtmlToMarkdownConverter.php
│   │   │   ├── Part
│   │   │   │   ├── Multipart
│   │   │   │   │   ├── AlternativePart.php
│   │   │   │   │   ├── DigestPart.php
│   │   │   │   │   ├── FormDataPart.php
│   │   │   │   │   ├── MixedPart.php
│   │   │   │   │   └── RelatedPart.php
│   │   │   │   ├── AbstractMultipartPart.php
│   │   │   │   ├── AbstractPart.php
│   │   │   │   ├── DataPart.php
│   │   │   │   ├── File.php
│   │   │   │   ├── MessagePart.php
│   │   │   │   ├── SMimePart.php
│   │   │   │   └── TextPart.php
│   │   │   ├── Resources
│   │   │   │   └── bin
│   │   │   │       └── update_mime_types.php
│   │   │   ├── Test
│   │   │   │   └── Constraint
│   │   │   │       ├── EmailAddressContains.php
│   │   │   │       ├── EmailAttachmentCount.php
│   │   │   │       ├── EmailHasHeader.php
│   │   │   │       ├── EmailHeaderSame.php
│   │   │   │       ├── EmailHtmlBodyContains.php
│   │   │   │       ├── EmailSubjectContains.php
│   │   │   │       └── EmailTextBodyContains.php
│   │   │   ├── Tests
│   │   │   │   ├── _data
│   │   │   │   │   ├── ca.crt
│   │   │   │   │   ├── ca.key
│   │   │   │   │   ├── ca.srl
│   │   │   │   │   ├── create-cert.sh
│   │   │   │   │   ├── encrypt.crt
│   │   │   │   │   ├── encrypt.key
│   │   │   │   │   ├── encrypt2.crt
│   │   │   │   │   ├── encrypt2.key
│   │   │   │   │   ├── intermediate.crt
│   │   │   │   │   ├── intermediate.key
│   │   │   │   │   ├── sign.crt
│   │   │   │   │   ├── sign.key
│   │   │   │   │   ├── sign2.crt
│   │   │   │   │   ├── sign2.key
│   │   │   │   │   ├── sign3.crt
│   │   │   │   │   └── sign3.key
│   │   │   │   ├── Crypto
│   │   │   │   │   ├── DkimSignerTest.php
│   │   │   │   │   ├── SMimeEncrypterTest.php
│   │   │   │   │   ├── SMimeSignerTest.php
│   │   │   │   │   └── SMimeTestCase.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   └── AddMimeTypeGuesserPassTest.php
│   │   │   │   ├── Encoder
│   │   │   │   │   ├── Base64EncoderTest.php
│   │   │   │   │   ├── Base64MimeHeaderEncoderTest.php
│   │   │   │   │   ├── IdnAddressEncoderTest.php
│   │   │   │   │   ├── QpEncoderTest.php
│   │   │   │   │   ├── QpMimeHeaderEncoderTest.php
│   │   │   │   │   └── Rfc2231EncoderTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── mimetypes
│   │   │   │   │   │   ├── directory
│   │   │   │   │   │   │   └── .empty
│   │   │   │   │   │   ├── -test
│   │   │   │   │   │   ├── .unknownextension
│   │   │   │   │   │   ├── abc.csv
│   │   │   │   │   │   ├── other-file.example
│   │   │   │   │   │   ├── test
│   │   │   │   │   │   └── test.gif
│   │   │   │   │   ├── samples
│   │   │   │   │   │   └── charsets
│   │   │   │   │   │       ├── iso-2022-jp
│   │   │   │   │   │       │   └── one.txt
│   │   │   │   │   │       ├── iso-8859-1
│   │   │   │   │   │       │   └── one.txt
│   │   │   │   │   │       └── utf-8
│   │   │   │   │   │           ├── one.txt
│   │   │   │   │   │           ├── three.txt
│   │   │   │   │   │           └── two.txt
│   │   │   │   │   ├── web
│   │   │   │   │   │   ├── index.php
│   │   │   │   │   │   └── logo_symfony_header.png
│   │   │   │   │   ├── content.txt
│   │   │   │   │   ├── foo_attachment.txt
│   │   │   │   │   └── test.docx
│   │   │   │   ├── Header
│   │   │   │   │   ├── DateHeaderTest.php
│   │   │   │   │   ├── HeadersTest.php
│   │   │   │   │   ├── IdentificationHeaderTest.php
│   │   │   │   │   ├── MailboxHeaderTest.php
│   │   │   │   │   ├── MailboxListHeaderTest.php
│   │   │   │   │   ├── ParameterizedHeaderTest.php
│   │   │   │   │   ├── PathHeaderTest.php
│   │   │   │   │   └── UnstructuredHeaderTest.php
│   │   │   │   ├── HtmlToTextConverter
│   │   │   │   │   ├── DefaultHtmlToTextConverterTest.php
│   │   │   │   │   └── LeagueHtmlToMarkdownConverterTest.php
│   │   │   │   ├── Part
│   │   │   │   │   ├── Multipart
│   │   │   │   │   │   ├── AlternativePartTest.php
│   │   │   │   │   │   ├── DigestPartTest.php
│   │   │   │   │   │   ├── FormDataPartTest.php
│   │   │   │   │   │   ├── MixedPartTest.php
│   │   │   │   │   │   └── RelatedPartTest.php
│   │   │   │   │   ├── DataPartTest.php
│   │   │   │   │   ├── MessagePartTest.php
│   │   │   │   │   └── TextPartTest.php
│   │   │   │   ├── AbstractMimeTypeGuesserTestCase.php
│   │   │   │   ├── AddressTest.php
│   │   │   │   ├── CharacterStreamTest.php
│   │   │   │   ├── DraftEmailTest.php
│   │   │   │   ├── EmailTest.php
│   │   │   │   ├── FileBinaryMimeTypeGuesserTest.php
│   │   │   │   ├── FileinfoMimeTypeGuesserTest.php
│   │   │   │   ├── MessageConverterTest.php
│   │   │   │   ├── MessageTest.php
│   │   │   │   ├── MimeTypesTest.php
│   │   │   │   └── RawMessageTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── Address.php
│   │   │   ├── BodyRendererInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── CharacterStream.php
│   │   │   ├── composer.json
│   │   │   ├── DraftEmail.php
│   │   │   ├── Email.php
│   │   │   ├── FileBinaryMimeTypeGuesser.php
│   │   │   ├── FileinfoMimeTypeGuesser.php
│   │   │   ├── LICENSE
│   │   │   ├── Message.php
│   │   │   ├── MessageConverter.php
│   │   │   ├── MimeTypeGuesserInterface.php
│   │   │   ├── MimeTypes.php
│   │   │   ├── MimeTypesInterface.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── RawMessage.php
│   │   │   └── README.md
│   │   ├── options-resolver
│   │   │   ├── Debug
│   │   │   │   └── OptionsResolverIntrospector.php
│   │   │   ├── Exception
│   │   │   │   ├── AccessException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidOptionsException.php
│   │   │   │   ├── MissingOptionsException.php
│   │   │   │   ├── NoConfigurationException.php
│   │   │   │   ├── NoSuchOptionException.php
│   │   │   │   ├── OptionDefinitionException.php
│   │   │   │   └── UndefinedOptionsException.php
│   │   │   ├── Tests
│   │   │   │   ├── Debug
│   │   │   │   │   └── OptionsResolverIntrospectorTest.php
│   │   │   │   └── OptionsResolverTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── OptionConfigurator.php
│   │   │   ├── Options.php
│   │   │   ├── OptionsResolver.php
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── password-hasher
│   │   │   ├── Command
│   │   │   │   └── UserPasswordHashCommand.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidPasswordException.php
│   │   │   │   └── LogicException.php
│   │   │   ├── Hasher
│   │   │   │   ├── CheckPasswordLengthTrait.php
│   │   │   │   ├── MessageDigestPasswordHasher.php
│   │   │   │   ├── MigratingPasswordHasher.php
│   │   │   │   ├── NativePasswordHasher.php
│   │   │   │   ├── PasswordHasherAwareInterface.php
│   │   │   │   ├── PasswordHasherFactory.php
│   │   │   │   ├── PasswordHasherFactoryInterface.php
│   │   │   │   ├── Pbkdf2PasswordHasher.php
│   │   │   │   ├── PlaintextPasswordHasher.php
│   │   │   │   ├── SodiumPasswordHasher.php
│   │   │   │   ├── UserPasswordHasher.php
│   │   │   │   └── UserPasswordHasherInterface.php
│   │   │   ├── Tests
│   │   │   │   ├── Command
│   │   │   │   │   └── UserPasswordHashCommandTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── TestLegacyPasswordAuthenticatedUser.php
│   │   │   │   │   └── TestPasswordAuthenticatedUser.php
│   │   │   │   └── Hasher
│   │   │   │       ├── MessageDigestPasswordHasherTest.php
│   │   │   │       ├── MigratingPasswordHasherTest.php
│   │   │   │       ├── NativePasswordHasherTest.php
│   │   │   │       ├── PasswordHasherFactoryTest.php
│   │   │   │       ├── Pbkdf2PasswordHasherTest.php
│   │   │   │       ├── PlaintextPasswordHasherTest.php
│   │   │   │       ├── SodiumPasswordHasherTest.php
│   │   │   │       └── UserPasswordHasherTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LegacyPasswordHasherInterface.php
│   │   │   ├── LICENSE
│   │   │   ├── PasswordHasherInterface.php
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── polyfill-intl-grapheme
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap80.php
│   │   │   ├── composer.json
│   │   │   ├── Grapheme.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── polyfill-intl-icu
│   │   │   ├── DateFormat
│   │   │   │   ├── AmPmTransformer.php
│   │   │   │   ├── DayOfWeekTransformer.php
│   │   │   │   ├── DayOfYearTransformer.php
│   │   │   │   ├── DayTransformer.php
│   │   │   │   ├── FullTransformer.php
│   │   │   │   ├── Hour1200Transformer.php
│   │   │   │   ├── Hour1201Transformer.php
│   │   │   │   ├── Hour2400Transformer.php
│   │   │   │   ├── Hour2401Transformer.php
│   │   │   │   ├── HourTransformer.php
│   │   │   │   ├── MinuteTransformer.php
│   │   │   │   ├── MonthTransformer.php
│   │   │   │   ├── QuarterTransformer.php
│   │   │   │   ├── SecondTransformer.php
│   │   │   │   ├── TimezoneTransformer.php
│   │   │   │   ├── Transformer.php
│   │   │   │   └── YearTransformer.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── MethodArgumentNotImplementedException.php
│   │   │   │   ├── MethodArgumentValueNotImplementedException.php
│   │   │   │   ├── MethodNotImplementedException.php
│   │   │   │   ├── NotImplementedException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Resources
│   │   │   │   ├── stubs
│   │   │   │   │   ├── Collator.php
│   │   │   │   │   ├── IntlDateFormatter.php
│   │   │   │   │   ├── Locale.php
│   │   │   │   │   └── NumberFormatter.php
│   │   │   │   └── currencies.php
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap80.php
│   │   │   ├── Collator.php
│   │   │   ├── composer.json
│   │   │   ├── Currencies.php
│   │   │   ├── Icu.php
│   │   │   ├── IntlDateFormatter.php
│   │   │   ├── LICENSE
│   │   │   ├── Locale.php
│   │   │   ├── NumberFormatter.php
│   │   │   └── README.md
│   │   ├── polyfill-intl-idn
│   │   │   ├── Resources
│   │   │   │   └── unidata
│   │   │   │       ├── deviation.php
│   │   │   │       ├── disallowed_STD3_mapped.php
│   │   │   │       ├── disallowed_STD3_valid.php
│   │   │   │       ├── disallowed.php
│   │   │   │       ├── DisallowedRanges.php
│   │   │   │       ├── ignored.php
│   │   │   │       ├── mapped.php
│   │   │   │       ├── Regex.php
│   │   │   │       └── virama.php
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap80.php
│   │   │   ├── composer.json
│   │   │   ├── Idn.php
│   │   │   ├── Info.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── polyfill-intl-normalizer
│   │   │   ├── Resources
│   │   │   │   ├── stubs
│   │   │   │   │   └── Normalizer.php
│   │   │   │   └── unidata
│   │   │   │       ├── canonicalComposition.php
│   │   │   │       ├── canonicalDecomposition.php
│   │   │   │       ├── combiningClass.php
│   │   │   │       └── compatibilityDecomposition.php
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap80.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Normalizer.php
│   │   │   └── README.md
│   │   ├── polyfill-mbstring
│   │   │   ├── Resources
│   │   │   │   └── unidata
│   │   │   │       ├── caseFolding.php
│   │   │   │       ├── lowerCase.php
│   │   │   │       ├── titleCaseRegexp.php
│   │   │   │       └── upperCase.php
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap80.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Mbstring.php
│   │   │   └── README.md
│   │   ├── polyfill-php83
│   │   │   ├── Resources
│   │   │   │   └── stubs
│   │   │   │       ├── DateError.php
│   │   │   │       ├── DateException.php
│   │   │   │       ├── DateInvalidOperationException.php
│   │   │   │       ├── DateInvalidTimeZoneException.php
│   │   │   │       ├── DateMalformedIntervalStringException.php
│   │   │   │       ├── DateMalformedPeriodStringException.php
│   │   │   │       ├── DateMalformedStringException.php
│   │   │   │       ├── DateObjectError.php
│   │   │   │       ├── DateRangeError.php
│   │   │   │       ├── Override.php
│   │   │   │       └── SQLite3Exception.php
│   │   │   ├── bootstrap.php
│   │   │   ├── bootstrap81.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Php83.php
│   │   │   └── README.md
│   │   ├── polyfill-php84
│   │   │   ├── Resources
│   │   │   │   └── stubs
│   │   │   │       └── Deprecated.php
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Php84.php
│   │   │   └── README.md
│   │   ├── process
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── ProcessFailedException.php
│   │   │   │   ├── ProcessSignaledException.php
│   │   │   │   ├── ProcessTimedOutException.php
│   │   │   │   ├── RunProcessFailedException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Messenger
│   │   │   │   ├── RunProcessContext.php
│   │   │   │   ├── RunProcessMessage.php
│   │   │   │   └── RunProcessMessageHandler.php
│   │   │   ├── Pipes
│   │   │   │   ├── AbstractPipes.php
│   │   │   │   ├── PipesInterface.php
│   │   │   │   ├── UnixPipes.php
│   │   │   │   └── WindowsPipes.php
│   │   │   ├── Tests
│   │   │   │   ├── Fixtures
│   │   │   │   │   └── memory.php
│   │   │   │   ├── Messenger
│   │   │   │   │   └── RunProcessMessageHandlerTest.php
│   │   │   │   ├── CreateNewConsoleTest.php
│   │   │   │   ├── ErrorProcessInitiator.php
│   │   │   │   ├── ExecutableFinderTest.php
│   │   │   │   ├── KillableProcessWithOutput.php
│   │   │   │   ├── NonStopableProcess.php
│   │   │   │   ├── OutputMemoryLimitProcess.php
│   │   │   │   ├── PhpExecutableFinderTest.php
│   │   │   │   ├── PhpProcessTest.php
│   │   │   │   ├── PhpSubprocessTest.php
│   │   │   │   ├── PipeStdinInStdoutStdErrStreamSelect.php
│   │   │   │   ├── ProcessFailedExceptionTest.php
│   │   │   │   ├── ProcessTest.php
│   │   │   │   ├── SignalListener.php
│   │   │   │   └── ThreeSecondProcess.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── ExecutableFinder.php
│   │   │   ├── InputStream.php
│   │   │   ├── LICENSE
│   │   │   ├── PhpExecutableFinder.php
│   │   │   ├── PhpProcess.php
│   │   │   ├── PhpSubprocess.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── Process.php
│   │   │   ├── ProcessUtils.php
│   │   │   └── README.md
│   │   ├── property-access
│   │   │   ├── Exception
│   │   │   │   ├── AccessException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidPropertyPathException.php
│   │   │   │   ├── NoSuchIndexException.php
│   │   │   │   ├── NoSuchPropertyException.php
│   │   │   │   ├── OutOfBoundsException.php
│   │   │   │   ├── RuntimeException.php
│   │   │   │   ├── UnexpectedTypeException.php
│   │   │   │   └── UninitializedPropertyException.php
│   │   │   ├── Tests
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── ExtendedUninitializedProperty.php
│   │   │   │   │   ├── NonTraversableArrayObject.php
│   │   │   │   │   ├── ReturnTyped.php
│   │   │   │   │   ├── TestAdderRemoverInvalidArgumentLength.php
│   │   │   │   │   ├── TestAdderRemoverInvalidMethods.php
│   │   │   │   │   ├── TestClass.php
│   │   │   │   │   ├── TestClassIsWritable.php
│   │   │   │   │   ├── TestClassMagicCall.php
│   │   │   │   │   ├── TestClassMagicGet.php
│   │   │   │   │   ├── TestClassSetValue.php
│   │   │   │   │   ├── TestClassTypedProperty.php
│   │   │   │   │   ├── TestClassTypeErrorInsideCall.php
│   │   │   │   │   ├── TestPublicPropertyDynamicallyCreated.php
│   │   │   │   │   ├── TestPublicPropertyGetterOnObject.php
│   │   │   │   │   ├── TestPublicPropertyGetterOnObjectMagicGet.php
│   │   │   │   │   ├── TestSingularAndPluralProps.php
│   │   │   │   │   ├── Ticket5775Object.php
│   │   │   │   │   ├── TraversableArrayObject.php
│   │   │   │   │   ├── TypeHinted.php
│   │   │   │   │   ├── UninitializedObjectProperty.php
│   │   │   │   │   ├── UninitializedPrivateProperty.php
│   │   │   │   │   └── UninitializedProperty.php
│   │   │   │   ├── PropertyAccessorArrayAccessTestCase.php
│   │   │   │   ├── PropertyAccessorArrayObjectTest.php
│   │   │   │   ├── PropertyAccessorArrayTest.php
│   │   │   │   ├── PropertyAccessorBuilderTest.php
│   │   │   │   ├── PropertyAccessorCollectionTestCase.php
│   │   │   │   ├── PropertyAccessorNonTraversableArrayObjectTest.php
│   │   │   │   ├── PropertyAccessorTest.php
│   │   │   │   ├── PropertyAccessorTraversableArrayObjectTest.php
│   │   │   │   ├── PropertyPathBuilderTest.php
│   │   │   │   ├── PropertyPathTest.php
│   │   │   │   ├── TestPluralAdderRemoverAndSetter.php
│   │   │   │   └── TestPluralAdderRemoverAndSetterSameSingularAndPlural.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── PropertyAccess.php
│   │   │   ├── PropertyAccessor.php
│   │   │   ├── PropertyAccessorBuilder.php
│   │   │   ├── PropertyAccessorInterface.php
│   │   │   ├── PropertyPath.php
│   │   │   ├── PropertyPathBuilder.php
│   │   │   ├── PropertyPathInterface.php
│   │   │   ├── PropertyPathIterator.php
│   │   │   ├── PropertyPathIteratorInterface.php
│   │   │   └── README.md
│   │   ├── property-info
│   │   │   ├── DependencyInjection
│   │   │   │   ├── PropertyInfoConstructorPass.php
│   │   │   │   └── PropertyInfoPass.php
│   │   │   ├── Extractor
│   │   │   │   ├── ConstructorArgumentTypeExtractorInterface.php
│   │   │   │   ├── ConstructorExtractor.php
│   │   │   │   ├── PhpDocExtractor.php
│   │   │   │   ├── PhpStanExtractor.php
│   │   │   │   ├── ReflectionExtractor.php
│   │   │   │   └── SerializerExtractor.php
│   │   │   ├── PhpStan
│   │   │   │   ├── NameScope.php
│   │   │   │   └── NameScopeFactory.php
│   │   │   ├── Tests
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── PropertyInfoConstructorPassTest.php
│   │   │   │   │   └── PropertyInfoPassTest.php
│   │   │   │   ├── Extractor
│   │   │   │   │   ├── ConstructorExtractorTest.php
│   │   │   │   │   ├── PhpDocExtractorTest.php
│   │   │   │   │   ├── PhpStanExtractorTest.php
│   │   │   │   │   ├── ReflectionExtractorTest.php
│   │   │   │   │   └── SerializerExtractorTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── Extractor
│   │   │   │   │   │   └── DummyNamespace.php
│   │   │   │   │   ├── RootDummy
│   │   │   │   │   │   └── RootDummyItem.php
│   │   │   │   │   ├── TraitUsage
│   │   │   │   │   │   ├── AnotherNamespace
│   │   │   │   │   │   │   ├── DummyInAnotherNamespace.php
│   │   │   │   │   │   │   └── DummyTraitInAnotherNamespace.php
│   │   │   │   │   │   ├── DummyTrait.php
│   │   │   │   │   │   ├── DummyUsedInTrait.php
│   │   │   │   │   │   └── DummyUsingTrait.php
│   │   │   │   │   ├── AdderRemoverDummy.php
│   │   │   │   │   ├── ConstructorDummy.php
│   │   │   │   │   ├── ConstructorDummyWithoutDocBlock.php
│   │   │   │   │   ├── DefaultValue.php
│   │   │   │   │   ├── DockBlockFallback.php
│   │   │   │   │   ├── Dummy.php
│   │   │   │   │   ├── DummyCollection.php
│   │   │   │   │   ├── DummyExtractor.php
│   │   │   │   │   ├── DummyNamespace.php
│   │   │   │   │   ├── DummyTraitExternal.php
│   │   │   │   │   ├── DummyUnionType.php
│   │   │   │   │   ├── IgnorePropertyDummy.php
│   │   │   │   │   ├── IntRangeDummy.php
│   │   │   │   │   ├── InvalidDummy.php
│   │   │   │   │   ├── NoProperties.php
│   │   │   │   │   ├── NotInstantiable.php
│   │   │   │   │   ├── NullExtractor.php
│   │   │   │   │   ├── ParentDummy.php
│   │   │   │   │   ├── Php71Dummy.php
│   │   │   │   │   ├── Php74Dummy.php
│   │   │   │   │   ├── Php7Dummy.php
│   │   │   │   │   ├── Php7ParentDummy.php
│   │   │   │   │   ├── Php80Dummy.php
│   │   │   │   │   ├── Php80PromotedDummy.php
│   │   │   │   │   ├── Php81Dummy.php
│   │   │   │   │   ├── Php82Dummy.php
│   │   │   │   │   ├── PhpStanPseudoTypesDummy.php
│   │   │   │   │   ├── PseudoTypeDummy.php
│   │   │   │   │   ├── PseudoTypesDummy.php
│   │   │   │   │   └── SnakeCaseDummy.php
│   │   │   │   ├── AbstractPropertyInfoExtractorTest.php
│   │   │   │   ├── PropertyInfoCacheExtractorTest.php
│   │   │   │   ├── PropertyInfoExtractorTest.php
│   │   │   │   └── TypeTest.php
│   │   │   ├── Util
│   │   │   │   ├── PhpDocTypeHelper.php
│   │   │   │   └── PhpStanTypeHelper.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── PropertyAccessExtractorInterface.php
│   │   │   ├── PropertyDescriptionExtractorInterface.php
│   │   │   ├── PropertyInfoCacheExtractor.php
│   │   │   ├── PropertyInfoExtractor.php
│   │   │   ├── PropertyInfoExtractorInterface.php
│   │   │   ├── PropertyInitializableExtractorInterface.php
│   │   │   ├── PropertyListExtractorInterface.php
│   │   │   ├── PropertyReadInfo.php
│   │   │   ├── PropertyReadInfoExtractorInterface.php
│   │   │   ├── PropertyTypeExtractorInterface.php
│   │   │   ├── PropertyWriteInfo.php
│   │   │   ├── PropertyWriteInfoExtractorInterface.php
│   │   │   ├── README.md
│   │   │   └── Type.php
│   │   ├── routing
│   │   │   ├── Annotation
│   │   │   │   └── Route.php
│   │   │   ├── Attribute
│   │   │   │   └── Route.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── AddExpressionLanguageProvidersPass.php
│   │   │   │   └── RoutingResolverPass.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidParameterException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── MethodNotAllowedException.php
│   │   │   │   ├── MissingMandatoryParametersException.php
│   │   │   │   ├── NoConfigurationException.php
│   │   │   │   ├── ResourceNotFoundException.php
│   │   │   │   ├── RouteCircularReferenceException.php
│   │   │   │   ├── RouteNotFoundException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Generator
│   │   │   │   ├── Dumper
│   │   │   │   │   ├── CompiledUrlGeneratorDumper.php
│   │   │   │   │   ├── GeneratorDumper.php
│   │   │   │   │   └── GeneratorDumperInterface.php
│   │   │   │   ├── CompiledUrlGenerator.php
│   │   │   │   ├── ConfigurableRequirementsInterface.php
│   │   │   │   ├── UrlGenerator.php
│   │   │   │   └── UrlGeneratorInterface.php
│   │   │   ├── Loader
│   │   │   │   ├── Configurator
│   │   │   │   │   ├── Traits
│   │   │   │   │   │   ├── AddTrait.php
│   │   │   │   │   │   ├── HostTrait.php
│   │   │   │   │   │   ├── LocalizedRouteTrait.php
│   │   │   │   │   │   ├── PrefixTrait.php
│   │   │   │   │   │   └── RouteTrait.php
│   │   │   │   │   ├── AliasConfigurator.php
│   │   │   │   │   ├── CollectionConfigurator.php
│   │   │   │   │   ├── ImportConfigurator.php
│   │   │   │   │   ├── RouteConfigurator.php
│   │   │   │   │   └── RoutingConfigurator.php
│   │   │   │   ├── schema
│   │   │   │   │   └── routing
│   │   │   │   │       └── routing-1.0.xsd
│   │   │   │   ├── AttributeClassLoader.php
│   │   │   │   ├── AttributeDirectoryLoader.php
│   │   │   │   ├── AttributeFileLoader.php
│   │   │   │   ├── ClosureLoader.php
│   │   │   │   ├── ContainerLoader.php
│   │   │   │   ├── DirectoryLoader.php
│   │   │   │   ├── GlobFileLoader.php
│   │   │   │   ├── ObjectLoader.php
│   │   │   │   ├── PhpFileLoader.php
│   │   │   │   ├── Psr4DirectoryLoader.php
│   │   │   │   ├── XmlFileLoader.php
│   │   │   │   └── YamlFileLoader.php
│   │   │   ├── Matcher
│   │   │   │   ├── Dumper
│   │   │   │   │   ├── CompiledUrlMatcherDumper.php
│   │   │   │   │   ├── CompiledUrlMatcherTrait.php
│   │   │   │   │   ├── MatcherDumper.php
│   │   │   │   │   ├── MatcherDumperInterface.php
│   │   │   │   │   └── StaticPrefixCollection.php
│   │   │   │   ├── CompiledUrlMatcher.php
│   │   │   │   ├── ExpressionLanguageProvider.php
│   │   │   │   ├── RedirectableUrlMatcher.php
│   │   │   │   ├── RedirectableUrlMatcherInterface.php
│   │   │   │   ├── RequestMatcherInterface.php
│   │   │   │   ├── TraceableUrlMatcher.php
│   │   │   │   ├── UrlMatcher.php
│   │   │   │   └── UrlMatcherInterface.php
│   │   │   ├── Requirement
│   │   │   │   ├── EnumRequirement.php
│   │   │   │   └── Requirement.php
│   │   │   ├── Tests
│   │   │   │   ├── Attribute
│   │   │   │   │   └── RouteTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── AddExpressionLanguageProvidersPassTest.php
│   │   │   │   │   └── RoutingResolverPassTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── alias
│   │   │   │   │   │   ├── alias.php
│   │   │   │   │   │   ├── alias.xml
│   │   │   │   │   │   ├── alias.yaml
│   │   │   │   │   │   ├── expected.php
│   │   │   │   │   │   ├── invalid-alias.yaml
│   │   │   │   │   │   ├── invalid-deprecated-no-package.xml
│   │   │   │   │   │   ├── invalid-deprecated-no-package.yaml
│   │   │   │   │   │   ├── invalid-deprecated-no-version.xml
│   │   │   │   │   │   ├── invalid-deprecated-no-version.yaml
│   │   │   │   │   │   └── override.yaml
│   │   │   │   │   ├── AnnotationFixtures
│   │   │   │   │   │   └── InvokableFQCNAliasConflictController.php
│   │   │   │   │   ├── AttributedClasses
│   │   │   │   │   │   ├── AbstractClass.php
│   │   │   │   │   │   ├── BarClass.php
│   │   │   │   │   │   ├── BazClass.php
│   │   │   │   │   │   ├── EncodingClass.php
│   │   │   │   │   │   ├── FooClass.php
│   │   │   │   │   │   └── FooTrait.php
│   │   │   │   │   ├── AttributeFixtures
│   │   │   │   │   │   ├── AbstractClassController.php
│   │   │   │   │   │   ├── ActionPathController.php
│   │   │   │   │   │   ├── BazClass.php
│   │   │   │   │   │   ├── DefaultValueController.php
│   │   │   │   │   │   ├── EncodingClass.php
│   │   │   │   │   │   ├── ExplicitLocalizedActionPathController.php
│   │   │   │   │   │   ├── ExtendedRoute.php
│   │   │   │   │   │   ├── ExtendedRouteOnClassController.php
│   │   │   │   │   │   ├── ExtendedRouteOnMethodController.php
│   │   │   │   │   │   ├── FooController.php
│   │   │   │   │   │   ├── GlobalDefaultsClass.php
│   │   │   │   │   │   ├── InvokableController.php
│   │   │   │   │   │   ├── InvokableFQCNAliasConflictController.php
│   │   │   │   │   │   ├── InvokableLocalizedController.php
│   │   │   │   │   │   ├── InvokableMethodController.php
│   │   │   │   │   │   ├── LocalizedActionPathController.php
│   │   │   │   │   │   ├── LocalizedMethodActionControllers.php
│   │   │   │   │   │   ├── LocalizedPrefixLocalizedActionController.php
│   │   │   │   │   │   ├── LocalizedPrefixMissingLocaleActionController.php
│   │   │   │   │   │   ├── LocalizedPrefixMissingRouteLocaleActionController.php
│   │   │   │   │   │   ├── LocalizedPrefixWithRouteWithoutLocale.php
│   │   │   │   │   │   ├── MethodActionControllers.php
│   │   │   │   │   │   ├── MethodsAndSchemes.php
│   │   │   │   │   │   ├── MissingRouteNameController.php
│   │   │   │   │   │   ├── NothingButNameController.php
│   │   │   │   │   │   ├── PrefixedActionLocalizedRouteController.php
│   │   │   │   │   │   ├── PrefixedActionPathController.php
│   │   │   │   │   │   ├── RequirementsWithoutPlaceholderNameController.php
│   │   │   │   │   │   ├── RouteWithEnv.php
│   │   │   │   │   │   ├── RouteWithPrefixController.php
│   │   │   │   │   │   ├── RouteWithPriorityController.php
│   │   │   │   │   │   └── Utf8ActionControllers.php
│   │   │   │   │   ├── Attributes
│   │   │   │   │   │   └── FooAttributes.php
│   │   │   │   │   ├── AttributesFixtures
│   │   │   │   │   │   ├── AttributesClassParamAfterCommaController.php
│   │   │   │   │   │   ├── AttributesClassParamAfterParenthesisController.php
│   │   │   │   │   │   ├── AttributesClassParamInlineAfterCommaController.php
│   │   │   │   │   │   ├── AttributesClassParamInlineAfterParenthesisController.php
│   │   │   │   │   │   ├── AttributesClassParamInlineQuotedAfterCommaController.php
│   │   │   │   │   │   ├── AttributesClassParamInlineQuotedAfterParenthesisController.php
│   │   │   │   │   │   ├── AttributesClassParamQuotedAfterCommaController.php
│   │   │   │   │   │   └── AttributesClassParamQuotedAfterParenthesisController.php
│   │   │   │   │   ├── controller
│   │   │   │   │   │   ├── empty_wildcard
│   │   │   │   │   │   │   └── .gitignore
│   │   │   │   │   │   ├── import__controller.xml
│   │   │   │   │   │   ├── import__controller.yml
│   │   │   │   │   │   ├── import_controller.xml
│   │   │   │   │   │   ├── import_controller.yml
│   │   │   │   │   │   ├── import_override_defaults.xml
│   │   │   │   │   │   ├── import_override_defaults.yml
│   │   │   │   │   │   ├── override_defaults.xml
│   │   │   │   │   │   ├── override_defaults.yml
│   │   │   │   │   │   ├── routing.xml
│   │   │   │   │   │   └── routing.yml
│   │   │   │   │   ├── directory
│   │   │   │   │   │   ├── recurse
│   │   │   │   │   │   │   ├── routes1.yml
│   │   │   │   │   │   │   └── routes2.yml
│   │   │   │   │   │   └── routes3.yml
│   │   │   │   │   ├── directory_import
│   │   │   │   │   │   └── import.yml
│   │   │   │   │   ├── dumper
│   │   │   │   │   │   ├── compiled_url_matcher0.php
│   │   │   │   │   │   ├── compiled_url_matcher1.php
│   │   │   │   │   │   ├── compiled_url_matcher10.php
│   │   │   │   │   │   ├── compiled_url_matcher11.php
│   │   │   │   │   │   ├── compiled_url_matcher12.php
│   │   │   │   │   │   ├── compiled_url_matcher13.php
│   │   │   │   │   │   ├── compiled_url_matcher14.php
│   │   │   │   │   │   ├── compiled_url_matcher2.php
│   │   │   │   │   │   ├── compiled_url_matcher3.php
│   │   │   │   │   │   ├── compiled_url_matcher4.php
│   │   │   │   │   │   ├── compiled_url_matcher5.php
│   │   │   │   │   │   ├── compiled_url_matcher6.php
│   │   │   │   │   │   ├── compiled_url_matcher7.php
│   │   │   │   │   │   ├── compiled_url_matcher8.php
│   │   │   │   │   │   └── compiled_url_matcher9.php
│   │   │   │   │   ├── Enum
│   │   │   │   │   │   ├── TestIntBackedEnum.php
│   │   │   │   │   │   ├── TestStringBackedEnum.php
│   │   │   │   │   │   ├── TestStringBackedEnum2.php
│   │   │   │   │   │   └── TestUnitEnum.php
│   │   │   │   │   ├── glob
│   │   │   │   │   │   ├── bar.xml
│   │   │   │   │   │   ├── bar.yml
│   │   │   │   │   │   ├── baz.xml
│   │   │   │   │   │   ├── baz.yml
│   │   │   │   │   │   ├── import_multiple.xml
│   │   │   │   │   │   ├── import_multiple.yml
│   │   │   │   │   │   ├── import_single.xml
│   │   │   │   │   │   ├── import_single.yml
│   │   │   │   │   │   ├── php_dsl_bar.php
│   │   │   │   │   │   ├── php_dsl_baz.php
│   │   │   │   │   │   └── php_dsl.php
│   │   │   │   │   ├── import_with_name_prefix
│   │   │   │   │   │   ├── routing.xml
│   │   │   │   │   │   └── routing.yml
│   │   │   │   │   ├── import_with_no_trailing_slash
│   │   │   │   │   │   ├── routing.xml
│   │   │   │   │   │   └── routing.yml
│   │   │   │   │   ├── locale_and_host
│   │   │   │   │   │   ├── import-with-host-expected-collection.php
│   │   │   │   │   │   ├── import-with-locale-and-host-expected-collection.php
│   │   │   │   │   │   ├── import-with-single-host-expected-collection.php
│   │   │   │   │   │   ├── import-without-host-expected-collection.php
│   │   │   │   │   │   ├── imported.php
│   │   │   │   │   │   ├── imported.xml
│   │   │   │   │   │   ├── imported.yml
│   │   │   │   │   │   ├── importer-with-host.php
│   │   │   │   │   │   ├── importer-with-host.xml
│   │   │   │   │   │   ├── importer-with-host.yml
│   │   │   │   │   │   ├── importer-with-locale-and-host.php
│   │   │   │   │   │   ├── importer-with-locale-and-host.xml
│   │   │   │   │   │   ├── importer-with-locale-and-host.yml
│   │   │   │   │   │   ├── importer-with-single-host.php
│   │   │   │   │   │   ├── importer-with-single-host.xml
│   │   │   │   │   │   ├── importer-with-single-host.yml
│   │   │   │   │   │   ├── importer-without-host.php
│   │   │   │   │   │   ├── importer-without-host.xml
│   │   │   │   │   │   └── importer-without-host.yml
│   │   │   │   │   ├── localized
│   │   │   │   │   │   ├── imported-with-locale-but-not-localized.xml
│   │   │   │   │   │   ├── imported-with-locale-but-not-localized.yml
│   │   │   │   │   │   ├── imported-with-locale.xml
│   │   │   │   │   │   ├── imported-with-locale.yml
│   │   │   │   │   │   ├── imported-with-utf8.php
│   │   │   │   │   │   ├── imported-with-utf8.xml
│   │   │   │   │   │   ├── imported-with-utf8.yml
│   │   │   │   │   │   ├── importer-with-controller-default.yml
│   │   │   │   │   │   ├── importer-with-locale-imports-non-localized-route.xml
│   │   │   │   │   │   ├── importer-with-locale-imports-non-localized-route.yml
│   │   │   │   │   │   ├── importer-with-locale.xml
│   │   │   │   │   │   ├── importer-with-locale.yml
│   │   │   │   │   │   ├── importer-with-utf8.php
│   │   │   │   │   │   ├── importer-with-utf8.xml
│   │   │   │   │   │   ├── importer-with-utf8.yml
│   │   │   │   │   │   ├── importing-localized-route.yml
│   │   │   │   │   │   ├── localized-prefix.yml
│   │   │   │   │   │   ├── localized-route.yml
│   │   │   │   │   │   ├── missing-locale-in-importer.yml
│   │   │   │   │   │   ├── not-localized.yml
│   │   │   │   │   │   ├── officially_formatted_locales.yml
│   │   │   │   │   │   ├── route-without-path-or-locales.yml
│   │   │   │   │   │   ├── utf8.php
│   │   │   │   │   │   ├── utf8.xml
│   │   │   │   │   │   └── utf8.yml
│   │   │   │   │   ├── OtherAnnotatedClasses
│   │   │   │   │   │   ├── NoStartTagClass.php
│   │   │   │   │   │   └── VariadicClass.php
│   │   │   │   │   ├── psr4-controllers-redirection
│   │   │   │   │   │   ├── psr4-attributes.php
│   │   │   │   │   │   ├── psr4-attributes.xml
│   │   │   │   │   │   └── psr4-attributes.yaml
│   │   │   │   │   ├── Psr4Controllers
│   │   │   │   │   │   ├── SubNamespace
│   │   │   │   │   │   │   ├── EvenDeeperNamespace
│   │   │   │   │   │   │   │   └── MyOtherController.php
│   │   │   │   │   │   │   ├── IrrelevantClass.php
│   │   │   │   │   │   │   ├── IrrelevantEnum.php
│   │   │   │   │   │   │   ├── IrrelevantInterface.php
│   │   │   │   │   │   │   ├── MyAbstractController.php
│   │   │   │   │   │   │   ├── MyChildController.php
│   │   │   │   │   │   │   ├── MyControllerWithATrait.php
│   │   │   │   │   │   │   └── SomeSharedImplementation.php
│   │   │   │   │   │   ├── MyController.php
│   │   │   │   │   │   └── MyUnannotatedController.php
│   │   │   │   │   ├── annotated.php
│   │   │   │   │   ├── bad_format.yml
│   │   │   │   │   ├── bar.xml
│   │   │   │   │   ├── class-attributes.php
│   │   │   │   │   ├── class-attributes.xml
│   │   │   │   │   ├── class-attributes.yaml
│   │   │   │   │   ├── collection-defaults.php
│   │   │   │   │   ├── CustomCompiledRoute.php
│   │   │   │   │   ├── CustomRouteCompiler.php
│   │   │   │   │   ├── CustomXmlFileLoader.php
│   │   │   │   │   ├── defaults.php
│   │   │   │   │   ├── defaults.xml
│   │   │   │   │   ├── defaults.yml
│   │   │   │   │   ├── empty.yml
│   │   │   │   │   ├── file_resource.yml
│   │   │   │   │   ├── foo.xml
│   │   │   │   │   ├── foo1.xml
│   │   │   │   │   ├── imported-with-defaults.php
│   │   │   │   │   ├── imported-with-defaults.xml
│   │   │   │   │   ├── imported-with-defaults.yml
│   │   │   │   │   ├── importer-with-defaults.php
│   │   │   │   │   ├── importer-with-defaults.xml
│   │   │   │   │   ├── importer-with-defaults.yml
│   │   │   │   │   ├── incomplete.yml
│   │   │   │   │   ├── list_defaults.xml
│   │   │   │   │   ├── list_in_list_defaults.xml
│   │   │   │   │   ├── list_in_map_defaults.xml
│   │   │   │   │   ├── list_null_values.xml
│   │   │   │   │   ├── localized.xml
│   │   │   │   │   ├── map_defaults.xml
│   │   │   │   │   ├── map_in_list_defaults.xml
│   │   │   │   │   ├── map_in_map_defaults.xml
│   │   │   │   │   ├── map_null_values.xml
│   │   │   │   │   ├── missing_id.xml
│   │   │   │   │   ├── missing_path.xml
│   │   │   │   │   ├── namespaceprefix.xml
│   │   │   │   │   ├── nonesense_resource_plus_path.yml
│   │   │   │   │   ├── nonesense_type_without_resource.yml
│   │   │   │   │   ├── nonvalid-deprecated-route.xml
│   │   │   │   │   ├── nonvalid.xml
│   │   │   │   │   ├── nonvalid.yml
│   │   │   │   │   ├── nonvalid2.yml
│   │   │   │   │   ├── nonvalidkeys.yml
│   │   │   │   │   ├── nonvalidnode.xml
│   │   │   │   │   ├── nonvalidroute.xml
│   │   │   │   │   ├── null_values.xml
│   │   │   │   │   ├── php_dsl_i18n.php
│   │   │   │   │   ├── php_dsl_sub_i18n.php
│   │   │   │   │   ├── php_dsl_sub_root.php
│   │   │   │   │   ├── php_dsl_sub.php
│   │   │   │   │   ├── php_dsl.php
│   │   │   │   │   ├── php_object_dsl.php
│   │   │   │   │   ├── psr4-attributes.php
│   │   │   │   │   ├── psr4-attributes.xml
│   │   │   │   │   ├── psr4-attributes.yaml
│   │   │   │   │   ├── psr4-controllers-redirection.php
│   │   │   │   │   ├── psr4-controllers-redirection.xml
│   │   │   │   │   ├── psr4-controllers-redirection.yaml
│   │   │   │   │   ├── RedirectableUrlMatcher.php
│   │   │   │   │   ├── requirements_without_placeholder_name.yml
│   │   │   │   │   ├── scalar_defaults.xml
│   │   │   │   │   ├── special_route_name.yml
│   │   │   │   │   ├── TraceableAttributeClassLoader.php
│   │   │   │   │   ├── validpattern.php
│   │   │   │   │   ├── validpattern.xml
│   │   │   │   │   ├── validpattern.yml
│   │   │   │   │   ├── validresource.php
│   │   │   │   │   ├── validresource.xml
│   │   │   │   │   ├── validresource.yml
│   │   │   │   │   ├── when-env.xml
│   │   │   │   │   ├── when-env.yml
│   │   │   │   │   ├── with_define_path_variable.php
│   │   │   │   │   └── withdoctype.xml
│   │   │   │   ├── Generator
│   │   │   │   │   ├── Dumper
│   │   │   │   │   │   └── CompiledUrlGeneratorDumperTest.php
│   │   │   │   │   └── UrlGeneratorTest.php
│   │   │   │   ├── Loader
│   │   │   │   │   ├── AttributeClassLoaderTest.php
│   │   │   │   │   ├── AttributeDirectoryLoaderTest.php
│   │   │   │   │   ├── AttributeFileLoaderTest.php
│   │   │   │   │   ├── ClosureLoaderTest.php
│   │   │   │   │   ├── ContainerLoaderTest.php
│   │   │   │   │   ├── DirectoryLoaderTest.php
│   │   │   │   │   ├── FileLocatorStub.php
│   │   │   │   │   ├── GlobFileLoaderTest.php
│   │   │   │   │   ├── ObjectLoaderTest.php
│   │   │   │   │   ├── PhpFileLoaderTest.php
│   │   │   │   │   ├── Psr4DirectoryLoaderTest.php
│   │   │   │   │   ├── XmlFileLoaderTest.php
│   │   │   │   │   └── YamlFileLoaderTest.php
│   │   │   │   ├── Matcher
│   │   │   │   │   ├── Dumper
│   │   │   │   │   │   ├── CompiledUrlMatcherDumperTest.php
│   │   │   │   │   │   └── StaticPrefixCollectionTest.php
│   │   │   │   │   ├── CompiledRedirectableUrlMatcherTest.php
│   │   │   │   │   ├── CompiledUrlMatcherTest.php
│   │   │   │   │   ├── ExpressionLanguageProviderTest.php
│   │   │   │   │   ├── RedirectableUrlMatcherTest.php
│   │   │   │   │   ├── TraceableUrlMatcherTest.php
│   │   │   │   │   └── UrlMatcherTest.php
│   │   │   │   ├── Requirement
│   │   │   │   │   ├── EnumRequirementTest.php
│   │   │   │   │   └── RequirementTest.php
│   │   │   │   ├── CompiledRouteTest.php
│   │   │   │   ├── RequestContextTest.php
│   │   │   │   ├── RouteCollectionTest.php
│   │   │   │   ├── RouteCompilerTest.php
│   │   │   │   ├── RouterTest.php
│   │   │   │   └── RouteTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── Alias.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── CompiledRoute.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── RequestContext.php
│   │   │   ├── RequestContextAwareInterface.php
│   │   │   ├── Route.php
│   │   │   ├── RouteCollection.php
│   │   │   ├── RouteCompiler.php
│   │   │   ├── RouteCompilerInterface.php
│   │   │   ├── Router.php
│   │   │   └── RouterInterface.php
│   │   ├── runtime
│   │   │   ├── Internal
│   │   │   │   ├── Console
│   │   │   │   │   ├── Command
│   │   │   │   │   │   └── CommandRuntime.php
│   │   │   │   │   ├── Input
│   │   │   │   │   │   └── InputInterfaceRuntime.php
│   │   │   │   │   ├── Output
│   │   │   │   │   │   └── OutputInterfaceRuntime.php
│   │   │   │   │   └── ApplicationRuntime.php
│   │   │   │   ├── HttpFoundation
│   │   │   │   │   ├── RequestRuntime.php
│   │   │   │   │   └── ResponseRuntime.php
│   │   │   │   ├── HttpKernel
│   │   │   │   │   └── HttpKernelInterfaceRuntime.php
│   │   │   │   ├── autoload_runtime.template
│   │   │   │   ├── BasicErrorHandler.php
│   │   │   │   ├── ComposerPlugin.php
│   │   │   │   ├── MissingDotenv.php
│   │   │   │   └── SymfonyErrorHandler.php
│   │   │   ├── Resolver
│   │   │   │   ├── ClosureResolver.php
│   │   │   │   └── DebugClosureResolver.php
│   │   │   ├── Runner
│   │   │   │   ├── Symfony
│   │   │   │   │   ├── ConsoleApplicationRunner.php
│   │   │   │   │   ├── HttpKernelRunner.php
│   │   │   │   │   └── ResponseRunner.php
│   │   │   │   └── ClosureRunner.php
│   │   │   ├── Tests
│   │   │   │   └── phpt
│   │   │   │       ├── .env
│   │   │   │       ├── application.php
│   │   │   │       ├── application.phpt
│   │   │   │       ├── autoload.php
│   │   │   │       ├── command_list.php
│   │   │   │       ├── command_list.phpt
│   │   │   │       ├── command.php
│   │   │   │       ├── command.phpt
│   │   │   │       ├── command2.php
│   │   │   │       ├── command2.phpt
│   │   │   │       ├── dotenv_overload_command_debug_exists_0_to_1.php
│   │   │   │       ├── dotenv_overload_command_debug_exists_0_to_1.phpt
│   │   │   │       ├── dotenv_overload_command_debug_exists_1_to_0.php
│   │   │   │       ├── dotenv_overload_command_debug_exists_1_to_0.phpt
│   │   │   │       ├── dotenv_overload_command_env_conflict.php
│   │   │   │       ├── dotenv_overload_command_env_conflict.phpt
│   │   │   │       ├── dotenv_overload_command_env_exists.php
│   │   │   │       ├── dotenv_overload_command_env_exists.phpt
│   │   │   │       ├── dotenv_overload_command_no_debug.php
│   │   │   │       ├── dotenv_overload_command_no_debug.phpt
│   │   │   │       ├── dotenv_overload.php
│   │   │   │       ├── dotenv_overload.phpt
│   │   │   │       ├── generic-request.php
│   │   │   │       ├── generic-request.phpt
│   │   │   │       ├── hello.php
│   │   │   │       ├── hello.phpt
│   │   │   │       ├── kernel-loop.php
│   │   │   │       ├── kernel-loop.phpt
│   │   │   │       ├── kernel.php
│   │   │   │       ├── kernel.phpt
│   │   │   │       ├── request.php
│   │   │   │       ├── request.phpt
│   │   │   │       ├── runtime-options.php
│   │   │   │       └── runtime-options.phpt
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── GenericRuntime.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── ResolverInterface.php
│   │   │   ├── RunnerInterface.php
│   │   │   ├── RuntimeInterface.php
│   │   │   └── SymfonyRuntime.php
│   │   ├── security-bundle
│   │   │   ├── CacheWarmer
│   │   │   │   └── ExpressionCacheWarmer.php
│   │   │   ├── Command
│   │   │   │   └── DebugFirewallCommand.php
│   │   │   ├── DataCollector
│   │   │   │   └── SecurityDataCollector.php
│   │   │   ├── Debug
│   │   │   │   ├── TraceableFirewallListener.php
│   │   │   │   ├── TraceableListenerTrait.php
│   │   │   │   ├── WrappedLazyListener.php
│   │   │   │   └── WrappedListener.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── Compiler
│   │   │   │   │   ├── AddExpressionLanguageProvidersPass.php
│   │   │   │   │   ├── AddSecurityVotersPass.php
│   │   │   │   │   ├── AddSessionDomainConstraintPass.php
│   │   │   │   │   ├── CleanRememberMeVerifierPass.php
│   │   │   │   │   ├── MakeFirewallsEventDispatcherTraceablePass.php
│   │   │   │   │   ├── RegisterCsrfFeaturesPass.php
│   │   │   │   │   ├── RegisterEntryPointPass.php
│   │   │   │   │   ├── RegisterGlobalSecurityEventListenersPass.php
│   │   │   │   │   ├── RegisterLdapLocatorPass.php
│   │   │   │   │   ├── RegisterTokenUsageTrackingPass.php
│   │   │   │   │   ├── ReplaceDecoratedRememberMeHandlerPass.php
│   │   │   │   │   └── SortFirewallListenersPass.php
│   │   │   │   ├── Security
│   │   │   │   │   ├── AccessToken
│   │   │   │   │   │   ├── OidcTokenHandlerFactory.php
│   │   │   │   │   │   ├── OidcUserInfoTokenHandlerFactory.php
│   │   │   │   │   │   ├── ServiceTokenHandlerFactory.php
│   │   │   │   │   │   └── TokenHandlerFactoryInterface.php
│   │   │   │   │   ├── Factory
│   │   │   │   │   │   ├── AbstractFactory.php
│   │   │   │   │   │   ├── AccessTokenFactory.php
│   │   │   │   │   │   ├── AuthenticatorFactoryInterface.php
│   │   │   │   │   │   ├── CustomAuthenticatorFactory.php
│   │   │   │   │   │   ├── FirewallListenerFactoryInterface.php
│   │   │   │   │   │   ├── FormLoginFactory.php
│   │   │   │   │   │   ├── FormLoginLdapFactory.php
│   │   │   │   │   │   ├── HttpBasicFactory.php
│   │   │   │   │   │   ├── HttpBasicLdapFactory.php
│   │   │   │   │   │   ├── JsonLoginFactory.php
│   │   │   │   │   │   ├── JsonLoginLdapFactory.php
│   │   │   │   │   │   ├── LdapFactoryTrait.php
│   │   │   │   │   │   ├── LoginLinkFactory.php
│   │   │   │   │   │   ├── LoginThrottlingFactory.php
│   │   │   │   │   │   ├── RememberMeFactory.php
│   │   │   │   │   │   ├── RemoteUserFactory.php
│   │   │   │   │   │   ├── SignatureAlgorithmFactory.php
│   │   │   │   │   │   ├── StatelessAuthenticatorFactoryInterface.php
│   │   │   │   │   │   └── X509Factory.php
│   │   │   │   │   └── UserProvider
│   │   │   │   │       ├── InMemoryFactory.php
│   │   │   │   │       ├── LdapFactory.php
│   │   │   │   │       └── UserProviderFactoryInterface.php
│   │   │   │   ├── MainConfiguration.php
│   │   │   │   └── SecurityExtension.php
│   │   │   ├── EventListener
│   │   │   │   ├── FirewallListener.php
│   │   │   │   └── VoteListener.php
│   │   │   ├── LoginLink
│   │   │   │   └── FirewallAwareLoginLinkHandler.php
│   │   │   ├── RememberMe
│   │   │   │   ├── DecoratedRememberMeHandler.php
│   │   │   │   └── FirewallAwareRememberMeHandler.php
│   │   │   ├── Resources
│   │   │   │   ├── config
│   │   │   │   │   ├── schema
│   │   │   │   │   │   └── security-1.0.xsd
│   │   │   │   │   ├── collectors.php
│   │   │   │   │   ├── console.php
│   │   │   │   │   ├── debug_console.php
│   │   │   │   │   ├── password_hasher.php
│   │   │   │   │   ├── security_authenticator_access_token.php
│   │   │   │   │   ├── security_authenticator_login_link.php
│   │   │   │   │   ├── security_authenticator_remember_me.php
│   │   │   │   │   ├── security_authenticator.php
│   │   │   │   │   ├── security_debug.php
│   │   │   │   │   ├── security_listeners.php
│   │   │   │   │   ├── security.php
│   │   │   │   │   └── templating_twig.php
│   │   │   │   └── views
│   │   │   │       └── Collector
│   │   │   │           ├── icon.svg
│   │   │   │           └── security.html.twig
│   │   │   ├── Routing
│   │   │   │   └── LogoutRouteLoader.php
│   │   │   ├── Security
│   │   │   │   ├── FirewallAwareTrait.php
│   │   │   │   ├── FirewallConfig.php
│   │   │   │   ├── FirewallContext.php
│   │   │   │   ├── FirewallMap.php
│   │   │   │   ├── LazyFirewallContext.php
│   │   │   │   └── UserAuthenticator.php
│   │   │   ├── Tests
│   │   │   │   ├── CacheWarmer
│   │   │   │   │   └── ExpressionCacheWarmerTest.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   └── SecurityDataCollectorTest.php
│   │   │   │   ├── Debug
│   │   │   │   │   └── TraceableFirewallListenerTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── Compiler
│   │   │   │   │   │   ├── AddExpressionLanguageProvidersPassTest.php
│   │   │   │   │   │   ├── AddSecurityVotersPassTest.php
│   │   │   │   │   │   ├── AddSessionDomainConstraintPassTest.php
│   │   │   │   │   │   ├── MakeFirewallsEventDispatcherTraceablePassTest.php
│   │   │   │   │   │   ├── RegisterEntryPointsPassTest.php
│   │   │   │   │   │   ├── RegisterGlobalSecurityEventListenersPassTest.php
│   │   │   │   │   │   ├── RegisterTokenUsageTrackingPassTest.php
│   │   │   │   │   │   └── SortFirewallListenersPassTest.php
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── php
│   │   │   │   │   │   │   ├── access_decision_manager_customized_config.php
│   │   │   │   │   │   │   ├── access_decision_manager_default_strategy.php
│   │   │   │   │   │   │   ├── access_decision_manager_service_and_strategy.php
│   │   │   │   │   │   │   ├── access_decision_manager_service.php
│   │   │   │   │   │   │   ├── access_decision_manager_strategy_service.php
│   │   │   │   │   │   │   ├── argon2i_hasher.php
│   │   │   │   │   │   │   ├── authenticator_manager.php
│   │   │   │   │   │   │   ├── bcrypt_hasher.php
│   │   │   │   │   │   │   ├── container1.php
│   │   │   │   │   │   │   ├── firewall_patterns.php
│   │   │   │   │   │   │   ├── firewall_provider.php
│   │   │   │   │   │   │   ├── firewall_undefined_provider.php
│   │   │   │   │   │   │   ├── listener_provider.php
│   │   │   │   │   │   │   ├── listener_undefined_provider.php
│   │   │   │   │   │   │   ├── logout_clear_site_data.php
│   │   │   │   │   │   │   ├── merge_import.php
│   │   │   │   │   │   │   ├── merge.php
│   │   │   │   │   │   │   ├── migrating_hasher.php
│   │   │   │   │   │   │   ├── no_custom_user_checker.php
│   │   │   │   │   │   │   ├── remember_me_options.php
│   │   │   │   │   │   │   └── sodium_hasher.php
│   │   │   │   │   │   ├── UserProvider
│   │   │   │   │   │   │   └── DummyProvider.php
│   │   │   │   │   │   ├── xml
│   │   │   │   │   │   │   ├── access_decision_manager_customized_config.xml
│   │   │   │   │   │   │   ├── access_decision_manager_default_strategy.xml
│   │   │   │   │   │   │   ├── access_decision_manager_service_and_strategy.xml
│   │   │   │   │   │   │   ├── access_decision_manager_service.xml
│   │   │   │   │   │   │   ├── access_decision_manager_strategy_service.xml
│   │   │   │   │   │   │   ├── argon2i_hasher.xml
│   │   │   │   │   │   │   ├── authenticator_manager.xml
│   │   │   │   │   │   │   ├── bcrypt_hasher.xml
│   │   │   │   │   │   │   ├── container1.xml
│   │   │   │   │   │   │   ├── firewall_provider.xml
│   │   │   │   │   │   │   ├── firewall_undefined_provider.xml
│   │   │   │   │   │   │   ├── listener_provider.xml
│   │   │   │   │   │   │   ├── listener_undefined_provider.xml
│   │   │   │   │   │   │   ├── logout_clear_site_data.xml
│   │   │   │   │   │   │   ├── merge_import.xml
│   │   │   │   │   │   │   ├── merge.xml
│   │   │   │   │   │   │   ├── migrating_hasher.xml
│   │   │   │   │   │   │   ├── no_custom_user_checker.xml
│   │   │   │   │   │   │   ├── remember_me_options.xml
│   │   │   │   │   │   │   └── sodium_hasher.xml
│   │   │   │   │   │   └── yml
│   │   │   │   │   │       ├── access_decision_manager_customized_config.yml
│   │   │   │   │   │       ├── access_decision_manager_default_strategy.yml
│   │   │   │   │   │       ├── access_decision_manager_service_and_strategy.yml
│   │   │   │   │   │       ├── access_decision_manager_service.yml
│   │   │   │   │   │       ├── access_decision_manager_strategy_service.yml
│   │   │   │   │   │       ├── argon2i_hasher.yml
│   │   │   │   │   │       ├── authenticator_manager.yml
│   │   │   │   │   │       ├── bcrypt_hasher.yml
│   │   │   │   │   │       ├── container1.yml
│   │   │   │   │   │       ├── firewall_patterns.yml
│   │   │   │   │   │       ├── firewall_provider.yml
│   │   │   │   │   │       ├── firewall_undefined_provider.yml
│   │   │   │   │   │       ├── listener_provider.yml
│   │   │   │   │   │       ├── listener_undefined_provider.yml
│   │   │   │   │   │       ├── logout_clear_site_data.yml
│   │   │   │   │   │       ├── merge_import.yml
│   │   │   │   │   │       ├── merge.yml
│   │   │   │   │   │       ├── migrating_hasher.yml
│   │   │   │   │   │       ├── no_custom_user_checker.yml
│   │   │   │   │   │       ├── remember_me_options.yml
│   │   │   │   │   │       └── sodium_hasher.yml
│   │   │   │   │   ├── Security
│   │   │   │   │   │   └── Factory
│   │   │   │   │   │       ├── AbstractFactoryTest.php
│   │   │   │   │   │       ├── AccessTokenFactoryTest.php
│   │   │   │   │   │       └── LoginLinkFactoryTest.php
│   │   │   │   │   ├── CompleteConfigurationTestCase.php
│   │   │   │   │   ├── MainConfigurationTest.php
│   │   │   │   │   ├── PhpCompleteConfigurationTest.php
│   │   │   │   │   ├── SecurityExtensionTest.php
│   │   │   │   │   ├── XmlCompleteConfigurationTest.php
│   │   │   │   │   └── YamlCompleteConfigurationTest.php
│   │   │   │   ├── EventListener
│   │   │   │   │   └── VoteListenerTest.php
│   │   │   │   ├── Functional
│   │   │   │   │   ├── app
│   │   │   │   │   │   ├── AbstractTokenCompareRoles
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── AccessToken
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config_anonymous.yml
│   │   │   │   │   │   │   ├── config_body_custom.yml
│   │   │   │   │   │   │   ├── config_body_default.yml
│   │   │   │   │   │   │   ├── config_custom_user_loader.yml
│   │   │   │   │   │   │   ├── config_header_custom.yml
│   │   │   │   │   │   │   ├── config_header_default.yml
│   │   │   │   │   │   │   ├── config_multiple_extractors.yml
│   │   │   │   │   │   │   ├── config_no_extractors.yml
│   │   │   │   │   │   │   ├── config_no_handler.yml
│   │   │   │   │   │   │   ├── config_oidc.yml
│   │   │   │   │   │   │   ├── config_query_custom.yml
│   │   │   │   │   │   │   ├── config_query_default.yml
│   │   │   │   │   │   │   ├── config_self_contained_token.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── AliasedEvents
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   └── config.yml
│   │   │   │   │   │   ├── Authenticator
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   ├── custom_handlers.yml
│   │   │   │   │   │   │   ├── firewall_user_provider.yml
│   │   │   │   │   │   │   ├── implicit_user_provider.yml
│   │   │   │   │   │   │   ├── multiple_firewall_user_provider.yml
│   │   │   │   │   │   │   ├── multiple_firewalls.yml
│   │   │   │   │   │   │   ├── no_user_provider.yml
│   │   │   │   │   │   │   ├── routing.yml
│   │   │   │   │   │   │   └── security.yml
│   │   │   │   │   │   ├── AutowiringTypes
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   └── config.yml
│   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   ├── default.yml
│   │   │   │   │   │   │   ├── framework.yml
│   │   │   │   │   │   │   └── twig.yml
│   │   │   │   │   │   ├── CsrfFormLogin
│   │   │   │   │   │   │   ├── base_config.yml
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   ├── routes_as_path.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── FirewallEntryPoint
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config_form_login.yml
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── JsonLogin
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   ├── custom_handlers.yml
│   │   │   │   │   │   │   ├── routing.yml
│   │   │   │   │   │   │   └── switchuser_stateless.yml
│   │   │   │   │   │   ├── JsonLoginLdap
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   └── config.yml
│   │   │   │   │   │   ├── LoginLink
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── Logout
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config_access.yml
│   │   │   │   │   │   │   ├── config_cookie_clearing.yml
│   │   │   │   │   │   │   ├── config_csrf_enabled.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── LogoutWithoutSessionInvalidation
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── MissingUserProvider
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── RememberMe
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── clear_on_change_config.yml
│   │   │   │   │   │   │   ├── config_persistent.yml
│   │   │   │   │   │   │   ├── config_session.yml
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   ├── routing.yml
│   │   │   │   │   │   │   └── stateless_config.yml
│   │   │   │   │   │   ├── RememberMeCookie
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── SecurityHelper
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── config_logout_csrf.yml
│   │   │   │   │   │   │   ├── config.yml
│   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   ├── StandardFormLogin
│   │   │   │   │   │   │   ├── base_config.yml
│   │   │   │   │   │   │   ├── bundles.php
│   │   │   │   │   │   │   ├── invalid_ip_access_control.yml
│   │   │   │   │   │   │   ├── localized_form_failure_handler.yml
│   │   │   │   │   │   │   ├── localized_routes_with_forward.yml
│   │   │   │   │   │   │   ├── localized_routes.yml
│   │   │   │   │   │   │   ├── login_throttling.yml
│   │   │   │   │   │   │   ├── routes_as_path.yml
│   │   │   │   │   │   │   ├── routing.yml
│   │   │   │   │   │   │   └── switchuser.yml
│   │   │   │   │   │   ├── templates
│   │   │   │   │   │   │   └── base.html.twig
│   │   │   │   │   │   └── AppKernel.php
│   │   │   │   │   ├── Bundle
│   │   │   │   │   │   ├── AccessTokenBundle
│   │   │   │   │   │   │   ├── Controller
│   │   │   │   │   │   │   │   ├── BarController.php
│   │   │   │   │   │   │   │   └── FooController.php
│   │   │   │   │   │   │   ├── Security
│   │   │   │   │   │   │   │   ├── Handler
│   │   │   │   │   │   │   │   │   └── AccessTokenHandler.php
│   │   │   │   │   │   │   │   └── Http
│   │   │   │   │   │   │   │       ├── JsonAuthenticationFailureHandler.php
│   │   │   │   │   │   │   │       └── JsonAuthenticationSuccessHandler.php
│   │   │   │   │   │   │   └── AccessTokenBundle.php
│   │   │   │   │   │   ├── AuthenticatorBundle
│   │   │   │   │   │   │   ├── ApiAuthenticator.php
│   │   │   │   │   │   │   ├── AuthenticatorBundle.php
│   │   │   │   │   │   │   ├── DummyFormLoginFactory.php
│   │   │   │   │   │   │   ├── LoginFormAuthenticator.php
│   │   │   │   │   │   │   ├── ProfileController.php
│   │   │   │   │   │   │   └── SecurityController.php
│   │   │   │   │   │   ├── AutowiringBundle
│   │   │   │   │   │   │   ├── AutowiredServices.php
│   │   │   │   │   │   │   └── AutowiringBundle.php
│   │   │   │   │   │   ├── CsrfFormLoginBundle
│   │   │   │   │   │   │   ├── Controller
│   │   │   │   │   │   │   │   └── LoginController.php
│   │   │   │   │   │   │   ├── Form
│   │   │   │   │   │   │   │   └── UserLoginType.php
│   │   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   │   │   └── views
│   │   │   │   │   │   │   │       └── Login
│   │   │   │   │   │   │   │           ├── after_login.html.twig
│   │   │   │   │   │   │   │           └── login.html.twig
│   │   │   │   │   │   │   └── CsrfFormLoginBundle.php
│   │   │   │   │   │   ├── EventBundle
│   │   │   │   │   │   │   ├── DependencyInjection
│   │   │   │   │   │   │   │   └── EventExtension.php
│   │   │   │   │   │   │   ├── EventSubscriber
│   │   │   │   │   │   │   │   └── TestSubscriber.php
│   │   │   │   │   │   │   └── EventBundle.php
│   │   │   │   │   │   ├── FirewallEntryPointBundle
│   │   │   │   │   │   │   ├── DependencyInjection
│   │   │   │   │   │   │   │   └── FirewallEntryPointExtension.php
│   │   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   │   └── config
│   │   │   │   │   │   │   │       └── services.xml
│   │   │   │   │   │   │   ├── Security
│   │   │   │   │   │   │   │   └── EntryPointStub.php
│   │   │   │   │   │   │   └── FirewallEntryPointBundle.php
│   │   │   │   │   │   ├── FormLoginBundle
│   │   │   │   │   │   │   ├── Controller
│   │   │   │   │   │   │   │   ├── LocalizedController.php
│   │   │   │   │   │   │   │   └── LoginController.php
│   │   │   │   │   │   │   ├── DependencyInjection
│   │   │   │   │   │   │   │   └── FormLoginExtension.php
│   │   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   │   │   ├── localized_routing.yml
│   │   │   │   │   │   │   │   │   └── routing.yml
│   │   │   │   │   │   │   │   └── views
│   │   │   │   │   │   │   │       ├── Localized
│   │   │   │   │   │   │   │       │   └── login.html.twig
│   │   │   │   │   │   │   │       └── Login
│   │   │   │   │   │   │   │           ├── after_login.html.twig
│   │   │   │   │   │   │   │           └── login.html.twig
│   │   │   │   │   │   │   ├── Security
│   │   │   │   │   │   │   │   └── LocalizedFormFailureHandler.php
│   │   │   │   │   │   │   └── FormLoginBundle.php
│   │   │   │   │   │   ├── JsonLoginBundle
│   │   │   │   │   │   │   ├── Controller
│   │   │   │   │   │   │   │   └── TestController.php
│   │   │   │   │   │   │   ├── Security
│   │   │   │   │   │   │   │   └── Http
│   │   │   │   │   │   │   │       ├── JsonAuthenticationFailureHandler.php
│   │   │   │   │   │   │   │       └── JsonAuthenticationSuccessHandler.php
│   │   │   │   │   │   │   └── JsonLoginBundle.php
│   │   │   │   │   │   ├── LoginLink
│   │   │   │   │   │   │   └── TestCustomLoginLinkSuccessHandler.php
│   │   │   │   │   │   ├── MissingUserProviderBundle
│   │   │   │   │   │   │   └── MissingUserProviderBundle.php
│   │   │   │   │   │   ├── RememberMeBundle
│   │   │   │   │   │   │   ├── Controller
│   │   │   │   │   │   │   │   └── ProfileController.php
│   │   │   │   │   │   │   ├── Security
│   │   │   │   │   │   │   │   ├── StaticTokenProvider.php
│   │   │   │   │   │   │   │   └── UserChangingUserProvider.php
│   │   │   │   │   │   │   └── RememberMeBundle.php
│   │   │   │   │   │   ├── RequestTrackerBundle
│   │   │   │   │   │   │   ├── DependencyInjection
│   │   │   │   │   │   │   │   └── RequestTrackerExtension.php
│   │   │   │   │   │   │   ├── EventSubscriber
│   │   │   │   │   │   │   │   └── RequestTrackerSubscriber.php
│   │   │   │   │   │   │   └── RequestTrackerBundle.php
│   │   │   │   │   │   ├── SecuredPageBundle
│   │   │   │   │   │   │   ├── Controller
│   │   │   │   │   │   │   │   └── AdminController.php
│   │   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   │   └── config
│   │   │   │   │   │   │   │       └── routing.yml
│   │   │   │   │   │   │   ├── Security
│   │   │   │   │   │   │   │   └── Core
│   │   │   │   │   │   │   │       └── User
│   │   │   │   │   │   │   │           └── ArrayUserProvider.php
│   │   │   │   │   │   │   └── SecuredPageBundle.php
│   │   │   │   │   │   └── TestBundle.php
│   │   │   │   │   ├── AbstractWebTestCase.php
│   │   │   │   │   ├── AccessTokenTest.php
│   │   │   │   │   ├── AuthenticationCommencingTest.php
│   │   │   │   │   ├── AuthenticatorTest.php
│   │   │   │   │   ├── AutowiringTypesTest.php
│   │   │   │   │   ├── CsrfFormLoginTest.php
│   │   │   │   │   ├── EventAliasTest.php
│   │   │   │   │   ├── FirewallEntryPointTest.php
│   │   │   │   │   ├── FormLoginTest.php
│   │   │   │   │   ├── JsonLoginLdapTest.php
│   │   │   │   │   ├── JsonLoginTest.php
│   │   │   │   │   ├── LocalizedRoutesAsPathTest.php
│   │   │   │   │   ├── LoginLinkAuthenticationTest.php
│   │   │   │   │   ├── LogoutTest.php
│   │   │   │   │   ├── MissingUserProviderTest.php
│   │   │   │   │   ├── RememberMeCookieTest.php
│   │   │   │   │   ├── RememberMeTest.php
│   │   │   │   │   ├── SecurityRoutingIntegrationTest.php
│   │   │   │   │   ├── SecurityTest.php
│   │   │   │   │   └── SwitchUserTest.php
│   │   │   │   ├── LoginLink
│   │   │   │   │   └── FirewallAwareLoginLinkHandlerTest.php
│   │   │   │   ├── Routing
│   │   │   │   │   └── LogoutRouteLoaderTest.php
│   │   │   │   ├── Security
│   │   │   │   │   ├── FirewallConfigTest.php
│   │   │   │   │   ├── FirewallContextTest.php
│   │   │   │   │   ├── FirewallMapTest.php
│   │   │   │   │   └── UserAuthenticatorTest.php
│   │   │   │   └── SecurityTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── Security.php
│   │   │   └── SecurityBundle.php
│   │   ├── security-core
│   │   │   ├── Authentication
│   │   │   │   ├── RememberMe
│   │   │   │   │   ├── CacheTokenVerifier.php
│   │   │   │   │   ├── InMemoryTokenProvider.php
│   │   │   │   │   ├── PersistentToken.php
│   │   │   │   │   ├── PersistentTokenInterface.php
│   │   │   │   │   ├── TokenProviderInterface.php
│   │   │   │   │   └── TokenVerifierInterface.php
│   │   │   │   ├── Token
│   │   │   │   │   ├── Storage
│   │   │   │   │   │   ├── TokenStorage.php
│   │   │   │   │   │   ├── TokenStorageInterface.php
│   │   │   │   │   │   └── UsageTrackingTokenStorage.php
│   │   │   │   │   ├── AbstractToken.php
│   │   │   │   │   ├── NullToken.php
│   │   │   │   │   ├── PreAuthenticatedToken.php
│   │   │   │   │   ├── RememberMeToken.php
│   │   │   │   │   ├── SwitchUserToken.php
│   │   │   │   │   ├── TokenInterface.php
│   │   │   │   │   └── UsernamePasswordToken.php
│   │   │   │   ├── AuthenticationTrustResolver.php
│   │   │   │   └── AuthenticationTrustResolverInterface.php
│   │   │   ├── Authorization
│   │   │   │   ├── Strategy
│   │   │   │   │   ├── AccessDecisionStrategyInterface.php
│   │   │   │   │   ├── AffirmativeStrategy.php
│   │   │   │   │   ├── ConsensusStrategy.php
│   │   │   │   │   ├── PriorityStrategy.php
│   │   │   │   │   └── UnanimousStrategy.php
│   │   │   │   ├── Voter
│   │   │   │   │   ├── AuthenticatedVoter.php
│   │   │   │   │   ├── CacheableVoterInterface.php
│   │   │   │   │   ├── ExpressionVoter.php
│   │   │   │   │   ├── RoleHierarchyVoter.php
│   │   │   │   │   ├── RoleVoter.php
│   │   │   │   │   ├── TraceableVoter.php
│   │   │   │   │   ├── Voter.php
│   │   │   │   │   └── VoterInterface.php
│   │   │   │   ├── AccessDecisionManager.php
│   │   │   │   ├── AccessDecisionManagerInterface.php
│   │   │   │   ├── AuthorizationChecker.php
│   │   │   │   ├── AuthorizationCheckerInterface.php
│   │   │   │   ├── ExpressionLanguage.php
│   │   │   │   ├── ExpressionLanguageProvider.php
│   │   │   │   └── TraceableAccessDecisionManager.php
│   │   │   ├── Event
│   │   │   │   ├── AuthenticationEvent.php
│   │   │   │   ├── AuthenticationSuccessEvent.php
│   │   │   │   └── VoteEvent.php
│   │   │   ├── Exception
│   │   │   │   ├── AccessDeniedException.php
│   │   │   │   ├── AccountExpiredException.php
│   │   │   │   ├── AccountStatusException.php
│   │   │   │   ├── AuthenticationCredentialsNotFoundException.php
│   │   │   │   ├── AuthenticationException.php
│   │   │   │   ├── AuthenticationExpiredException.php
│   │   │   │   ├── AuthenticationServiceException.php
│   │   │   │   ├── BadCredentialsException.php
│   │   │   │   ├── CookieTheftException.php
│   │   │   │   ├── CredentialsExpiredException.php
│   │   │   │   ├── CustomUserMessageAccountStatusException.php
│   │   │   │   ├── CustomUserMessageAuthenticationException.php
│   │   │   │   ├── DisabledException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InsufficientAuthenticationException.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidCsrfTokenException.php
│   │   │   │   ├── LazyResponseException.php
│   │   │   │   ├── LockedException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── LogoutException.php
│   │   │   │   ├── ProviderNotFoundException.php
│   │   │   │   ├── RuntimeException.php
│   │   │   │   ├── SessionUnavailableException.php
│   │   │   │   ├── TokenNotFoundException.php
│   │   │   │   ├── TooManyLoginAttemptsAuthenticationException.php
│   │   │   │   ├── UnsupportedUserException.php
│   │   │   │   └── UserNotFoundException.php
│   │   │   ├── Resources
│   │   │   │   └── translations
│   │   │   │       ├── security.af.xlf
│   │   │   │       ├── security.ar.xlf
│   │   │   │       ├── security.az.xlf
│   │   │   │       ├── security.be.xlf
│   │   │   │       ├── security.bg.xlf
│   │   │   │       ├── security.bs.xlf
│   │   │   │       ├── security.ca.xlf
│   │   │   │       ├── security.cs.xlf
│   │   │   │       ├── security.cy.xlf
│   │   │   │       ├── security.da.xlf
│   │   │   │       ├── security.de.xlf
│   │   │   │       ├── security.el.xlf
│   │   │   │       ├── security.en.xlf
│   │   │   │       ├── security.es.xlf
│   │   │   │       ├── security.et.xlf
│   │   │   │       ├── security.eu.xlf
│   │   │   │       ├── security.fa.xlf
│   │   │   │       ├── security.fi.xlf
│   │   │   │       ├── security.fr.xlf
│   │   │   │       ├── security.gl.xlf
│   │   │   │       ├── security.he.xlf
│   │   │   │       ├── security.hr.xlf
│   │   │   │       ├── security.hu.xlf
│   │   │   │       ├── security.hy.xlf
│   │   │   │       ├── security.id.xlf
│   │   │   │       ├── security.it.xlf
│   │   │   │       ├── security.ja.xlf
│   │   │   │       ├── security.lb.xlf
│   │   │   │       ├── security.lt.xlf
│   │   │   │       ├── security.lv.xlf
│   │   │   │       ├── security.mk.xlf
│   │   │   │       ├── security.mn.xlf
│   │   │   │       ├── security.my.xlf
│   │   │   │       ├── security.nb.xlf
│   │   │   │       ├── security.nl.xlf
│   │   │   │       ├── security.nn.xlf
│   │   │   │       ├── security.no.xlf
│   │   │   │       ├── security.pl.xlf
│   │   │   │       ├── security.pt_BR.xlf
│   │   │   │       ├── security.pt.xlf
│   │   │   │       ├── security.ro.xlf
│   │   │   │       ├── security.ru.xlf
│   │   │   │       ├── security.sk.xlf
│   │   │   │       ├── security.sl.xlf
│   │   │   │       ├── security.sq.xlf
│   │   │   │       ├── security.sr_Cyrl.xlf
│   │   │   │       ├── security.sr_Latn.xlf
│   │   │   │       ├── security.sv.xlf
│   │   │   │       ├── security.th.xlf
│   │   │   │       ├── security.tl.xlf
│   │   │   │       ├── security.tr.xlf
│   │   │   │       ├── security.uk.xlf
│   │   │   │       ├── security.ur.xlf
│   │   │   │       ├── security.uz.xlf
│   │   │   │       ├── security.vi.xlf
│   │   │   │       ├── security.zh_CN.xlf
│   │   │   │       └── security.zh_TW.xlf
│   │   │   ├── Role
│   │   │   │   ├── Role.php
│   │   │   │   ├── RoleHierarchy.php
│   │   │   │   ├── RoleHierarchyInterface.php
│   │   │   │   └── SwitchUserRole.php
│   │   │   ├── Signature
│   │   │   │   ├── Exception
│   │   │   │   │   ├── ExpiredSignatureException.php
│   │   │   │   │   └── InvalidSignatureException.php
│   │   │   │   ├── ExpiredSignatureStorage.php
│   │   │   │   └── SignatureHasher.php
│   │   │   ├── Test
│   │   │   │   └── AccessDecisionStrategyTestCase.php
│   │   │   ├── Tests
│   │   │   │   ├── Authentication
│   │   │   │   │   ├── RememberMe
│   │   │   │   │   │   ├── CacheTokenVerifierTest.php
│   │   │   │   │   │   ├── InMemoryTokenProviderTest.php
│   │   │   │   │   │   └── PersistentTokenTest.php
│   │   │   │   │   ├── Token
│   │   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   │   ├── CustomUser.php
│   │   │   │   │   │   │   └── switch-user-token-4.4.txt
│   │   │   │   │   │   ├── Storage
│   │   │   │   │   │   │   ├── TokenStorageTest.php
│   │   │   │   │   │   │   └── UsageTrackingTokenStorageTest.php
│   │   │   │   │   │   ├── AbstractTokenTest.php
│   │   │   │   │   │   ├── PreAuthenticatedTokenTest.php
│   │   │   │   │   │   ├── RememberMeTokenTest.php
│   │   │   │   │   │   ├── SwitchUserTokenTest.php
│   │   │   │   │   │   └── UsernamePasswordTokenTest.php
│   │   │   │   │   └── AuthenticationTrustResolverTest.php
│   │   │   │   ├── Authorization
│   │   │   │   │   ├── Strategy
│   │   │   │   │   │   ├── AffirmativeStrategyTest.php
│   │   │   │   │   │   ├── ConsensusStrategyTest.php
│   │   │   │   │   │   ├── PriorityStrategyTest.php
│   │   │   │   │   │   └── UnanimousStrategyTest.php
│   │   │   │   │   ├── Voter
│   │   │   │   │   │   ├── AuthenticatedVoterTest.php
│   │   │   │   │   │   ├── ExpressionVoterTest.php
│   │   │   │   │   │   ├── RoleHierarchyVoterTest.php
│   │   │   │   │   │   ├── RoleVoterTest.php
│   │   │   │   │   │   ├── TraceableVoterTest.php
│   │   │   │   │   │   └── VoterTest.php
│   │   │   │   │   ├── AccessDecisionManagerTest.php
│   │   │   │   │   ├── AuthorizationCheckerTest.php
│   │   │   │   │   ├── ExpressionLanguageTest.php
│   │   │   │   │   └── TraceableAccessDecisionManagerTest.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── CustomUserMessageAuthenticationExceptionTest.php
│   │   │   │   │   └── UserNotFoundExceptionTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── DummyVoter.php
│   │   │   │   │   └── MockableUsernamePasswordTokenWithRoles.php
│   │   │   │   ├── Resources
│   │   │   │   │   └── TranslationFilesTest.php
│   │   │   │   ├── Role
│   │   │   │   │   ├── LegacyRoleTest.php
│   │   │   │   │   └── RoleHierarchyTest.php
│   │   │   │   ├── Signature
│   │   │   │   │   └── ExpiredSignatureStorageTest.php
│   │   │   │   ├── User
│   │   │   │   │   ├── ChainUserCheckerTest.php
│   │   │   │   │   ├── ChainUserProviderTest.php
│   │   │   │   │   ├── InMemoryUserCheckerTest.php
│   │   │   │   │   ├── InMemoryUserProviderTest.php
│   │   │   │   │   ├── InMemoryUserTest.php
│   │   │   │   │   └── OidcUserTest.php
│   │   │   │   └── Validator
│   │   │   │       └── Constraints
│   │   │   │           ├── UserPasswordTest.php
│   │   │   │           └── UserPasswordValidatorTestCase.php
│   │   │   ├── User
│   │   │   │   ├── AttributesBasedUserProviderInterface.php
│   │   │   │   ├── ChainUserChecker.php
│   │   │   │   ├── ChainUserProvider.php
│   │   │   │   ├── EquatableInterface.php
│   │   │   │   ├── InMemoryUser.php
│   │   │   │   ├── InMemoryUserChecker.php
│   │   │   │   ├── InMemoryUserProvider.php
│   │   │   │   ├── LegacyPasswordAuthenticatedUserInterface.php
│   │   │   │   ├── MissingUserProvider.php
│   │   │   │   ├── OidcUser.php
│   │   │   │   ├── PasswordAuthenticatedUserInterface.php
│   │   │   │   ├── PasswordUpgraderInterface.php
│   │   │   │   ├── UserCheckerInterface.php
│   │   │   │   ├── UserInterface.php
│   │   │   │   └── UserProviderInterface.php
│   │   │   ├── Validator
│   │   │   │   └── Constraints
│   │   │   │       ├── UserPassword.php
│   │   │   │       └── UserPasswordValidator.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── AuthenticationEvents.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── security-csrf
│   │   │   ├── Exception
│   │   │   │   └── TokenNotFoundException.php
│   │   │   ├── Tests
│   │   │   │   ├── TokenGenerator
│   │   │   │   │   └── UriSafeTokenGeneratorTest.php
│   │   │   │   ├── TokenStorage
│   │   │   │   │   ├── NativeSessionTokenStorageTest.php
│   │   │   │   │   └── SessionTokenStorageTest.php
│   │   │   │   └── CsrfTokenManagerTest.php
│   │   │   ├── TokenGenerator
│   │   │   │   ├── TokenGeneratorInterface.php
│   │   │   │   └── UriSafeTokenGenerator.php
│   │   │   ├── TokenStorage
│   │   │   │   ├── ClearableTokenStorageInterface.php
│   │   │   │   ├── NativeSessionTokenStorage.php
│   │   │   │   ├── SessionTokenStorage.php
│   │   │   │   └── TokenStorageInterface.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── CsrfToken.php
│   │   │   ├── CsrfTokenManager.php
│   │   │   ├── CsrfTokenManagerInterface.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   └── README.md
│   │   ├── security-http
│   │   │   ├── AccessToken
│   │   │   │   ├── Oidc
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── InvalidSignatureException.php
│   │   │   │   │   │   └── MissingClaimException.php
│   │   │   │   │   ├── OidcTokenHandler.php
│   │   │   │   │   ├── OidcTrait.php
│   │   │   │   │   └── OidcUserInfoTokenHandler.php
│   │   │   │   ├── AccessTokenExtractorInterface.php
│   │   │   │   ├── AccessTokenHandlerInterface.php
│   │   │   │   ├── ChainAccessTokenExtractor.php
│   │   │   │   ├── FormEncodedBodyExtractor.php
│   │   │   │   ├── HeaderAccessTokenExtractor.php
│   │   │   │   └── QueryAccessTokenExtractor.php
│   │   │   ├── Attribute
│   │   │   │   ├── CurrentUser.php
│   │   │   │   └── IsGranted.php
│   │   │   ├── Authentication
│   │   │   │   ├── AuthenticationFailureHandlerInterface.php
│   │   │   │   ├── AuthenticationSuccessHandlerInterface.php
│   │   │   │   ├── AuthenticationUtils.php
│   │   │   │   ├── AuthenticatorManager.php
│   │   │   │   ├── AuthenticatorManagerInterface.php
│   │   │   │   ├── CustomAuthenticationFailureHandler.php
│   │   │   │   ├── CustomAuthenticationSuccessHandler.php
│   │   │   │   ├── DefaultAuthenticationFailureHandler.php
│   │   │   │   ├── DefaultAuthenticationSuccessHandler.php
│   │   │   │   └── UserAuthenticatorInterface.php
│   │   │   ├── Authenticator
│   │   │   │   ├── Debug
│   │   │   │   │   ├── TraceableAuthenticator.php
│   │   │   │   │   └── TraceableAuthenticatorManagerListener.php
│   │   │   │   ├── Passport
│   │   │   │   │   ├── Badge
│   │   │   │   │   │   ├── BadgeInterface.php
│   │   │   │   │   │   ├── CsrfTokenBadge.php
│   │   │   │   │   │   ├── PasswordUpgradeBadge.php
│   │   │   │   │   │   ├── PreAuthenticatedUserBadge.php
│   │   │   │   │   │   ├── RememberMeBadge.php
│   │   │   │   │   │   └── UserBadge.php
│   │   │   │   │   ├── Credentials
│   │   │   │   │   │   ├── CredentialsInterface.php
│   │   │   │   │   │   ├── CustomCredentials.php
│   │   │   │   │   │   └── PasswordCredentials.php
│   │   │   │   │   ├── Passport.php
│   │   │   │   │   └── SelfValidatingPassport.php
│   │   │   │   ├── Token
│   │   │   │   │   └── PostAuthenticationToken.php
│   │   │   │   ├── AbstractAuthenticator.php
│   │   │   │   ├── AbstractLoginFormAuthenticator.php
│   │   │   │   ├── AbstractPreAuthenticatedAuthenticator.php
│   │   │   │   ├── AccessTokenAuthenticator.php
│   │   │   │   ├── AuthenticatorInterface.php
│   │   │   │   ├── FallbackUserLoader.php
│   │   │   │   ├── FormLoginAuthenticator.php
│   │   │   │   ├── HttpBasicAuthenticator.php
│   │   │   │   ├── InteractiveAuthenticatorInterface.php
│   │   │   │   ├── JsonLoginAuthenticator.php
│   │   │   │   ├── LoginLinkAuthenticator.php
│   │   │   │   ├── RememberMeAuthenticator.php
│   │   │   │   ├── RemoteUserAuthenticator.php
│   │   │   │   └── X509Authenticator.php
│   │   │   ├── Authorization
│   │   │   │   └── AccessDeniedHandlerInterface.php
│   │   │   ├── Controller
│   │   │   │   ├── SecurityTokenValueResolver.php
│   │   │   │   └── UserValueResolver.php
│   │   │   ├── EntryPoint
│   │   │   │   ├── Exception
│   │   │   │   │   └── NotAnEntryPointException.php
│   │   │   │   └── AuthenticationEntryPointInterface.php
│   │   │   ├── Event
│   │   │   │   ├── AuthenticationTokenCreatedEvent.php
│   │   │   │   ├── CheckPassportEvent.php
│   │   │   │   ├── InteractiveLoginEvent.php
│   │   │   │   ├── LazyResponseEvent.php
│   │   │   │   ├── LoginFailureEvent.php
│   │   │   │   ├── LoginSuccessEvent.php
│   │   │   │   ├── LogoutEvent.php
│   │   │   │   ├── SwitchUserEvent.php
│   │   │   │   └── TokenDeauthenticatedEvent.php
│   │   │   ├── EventListener
│   │   │   │   ├── CheckCredentialsListener.php
│   │   │   │   ├── CheckRememberMeConditionsListener.php
│   │   │   │   ├── ClearSiteDataLogoutListener.php
│   │   │   │   ├── CookieClearingLogoutListener.php
│   │   │   │   ├── CsrfProtectionListener.php
│   │   │   │   ├── CsrfTokenClearingLogoutListener.php
│   │   │   │   ├── DefaultLogoutListener.php
│   │   │   │   ├── IsGrantedAttributeListener.php
│   │   │   │   ├── LoginThrottlingListener.php
│   │   │   │   ├── PasswordMigratingListener.php
│   │   │   │   ├── RememberMeListener.php
│   │   │   │   ├── SessionLogoutListener.php
│   │   │   │   ├── SessionStrategyListener.php
│   │   │   │   ├── UserCheckerListener.php
│   │   │   │   └── UserProviderListener.php
│   │   │   ├── Firewall
│   │   │   │   ├── AbstractListener.php
│   │   │   │   ├── AccessListener.php
│   │   │   │   ├── AuthenticatorManagerListener.php
│   │   │   │   ├── ChannelListener.php
│   │   │   │   ├── ContextListener.php
│   │   │   │   ├── ExceptionListener.php
│   │   │   │   ├── FirewallListenerInterface.php
│   │   │   │   ├── LogoutListener.php
│   │   │   │   └── SwitchUserListener.php
│   │   │   ├── Impersonate
│   │   │   │   └── ImpersonateUrlGenerator.php
│   │   │   ├── LoginLink
│   │   │   │   ├── Exception
│   │   │   │   │   ├── ExpiredLoginLinkException.php
│   │   │   │   │   ├── InvalidLoginLinkAuthenticationException.php
│   │   │   │   │   ├── InvalidLoginLinkException.php
│   │   │   │   │   └── InvalidLoginLinkExceptionInterface.php
│   │   │   │   ├── LoginLinkDetails.php
│   │   │   │   ├── LoginLinkHandler.php
│   │   │   │   ├── LoginLinkHandlerInterface.php
│   │   │   │   └── LoginLinkNotification.php
│   │   │   ├── Logout
│   │   │   │   └── LogoutUrlGenerator.php
│   │   │   ├── RateLimiter
│   │   │   │   └── DefaultLoginRateLimiter.php
│   │   │   ├── RememberMe
│   │   │   │   ├── AbstractRememberMeHandler.php
│   │   │   │   ├── PersistentRememberMeHandler.php
│   │   │   │   ├── RememberMeDetails.php
│   │   │   │   ├── RememberMeHandlerInterface.php
│   │   │   │   ├── ResponseListener.php
│   │   │   │   └── SignatureRememberMeHandler.php
│   │   │   ├── Session
│   │   │   │   ├── SessionAuthenticationStrategy.php
│   │   │   │   └── SessionAuthenticationStrategyInterface.php
│   │   │   ├── Tests
│   │   │   │   ├── AccessToken
│   │   │   │   │   └── Oidc
│   │   │   │   │       ├── OidcTokenHandlerTest.php
│   │   │   │   │       └── OidcUserInfoTokenHandlerTest.php
│   │   │   │   ├── Authentication
│   │   │   │   │   ├── AuthenticationUtilsTest.php
│   │   │   │   │   ├── AuthenticatorManagerTest.php
│   │   │   │   │   ├── DefaultAuthenticationFailureHandlerTest.php
│   │   │   │   │   └── DefaultAuthenticationSuccessHandlerTest.php
│   │   │   │   ├── Authenticator
│   │   │   │   │   ├── AccessToken
│   │   │   │   │   │   ├── ChainedAccessTokenExtractorsTest.php
│   │   │   │   │   │   ├── FormEncodedBodyAccessTokenAuthenticatorTest.php
│   │   │   │   │   │   ├── HeaderAccessTokenAuthenticatorTest.php
│   │   │   │   │   │   └── QueryAccessTokenAuthenticatorTest.php
│   │   │   │   │   ├── Debug
│   │   │   │   │   │   └── TraceableAuthenticatorTest.php
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   └── PasswordUpgraderProvider.php
│   │   │   │   │   ├── Passport
│   │   │   │   │   │   └── Badge
│   │   │   │   │   │       └── UserBadgeTest.php
│   │   │   │   │   ├── AbstractAuthenticatorTest.php
│   │   │   │   │   ├── AbstractLoginFormAuthenticatorTest.php
│   │   │   │   │   ├── AccessTokenAuthenticatorTest.php
│   │   │   │   │   ├── FormLoginAuthenticatorTest.php
│   │   │   │   │   ├── HttpBasicAuthenticatorTest.php
│   │   │   │   │   ├── InMemoryAccessTokenHandler.php
│   │   │   │   │   ├── JsonLoginAuthenticatorTest.php
│   │   │   │   │   ├── LoginLinkAuthenticatorTest.php
│   │   │   │   │   ├── RememberMeAuthenticatorTest.php
│   │   │   │   │   ├── RemoteUserAuthenticatorTest.php
│   │   │   │   │   └── X509AuthenticatorTest.php
│   │   │   │   ├── Controller
│   │   │   │   │   ├── SecurityTokenValueResolverTest.php
│   │   │   │   │   └── UserValueResolverTest.php
│   │   │   │   ├── EventListener
│   │   │   │   │   ├── CheckCredentialsListenerTest.php
│   │   │   │   │   ├── CheckRememberMeConditionsListenerTest.php
│   │   │   │   │   ├── ClearSiteDataLogoutListenerTest.php
│   │   │   │   │   ├── CookieClearingLogoutListenerTest.php
│   │   │   │   │   ├── CsrfProtectionListenerTest.php
│   │   │   │   │   ├── CsrfTokenClearingLogoutListenerTest.php
│   │   │   │   │   ├── IsGrantedAttributeListenerTest.php
│   │   │   │   │   ├── LoginThrottlingListenerTest.php
│   │   │   │   │   ├── PasswordMigratingListenerTest.php
│   │   │   │   │   ├── RememberMeListenerTest.php
│   │   │   │   │   ├── SessionLogoutListenerTest.php
│   │   │   │   │   ├── SessionStrategyListenerTest.php
│   │   │   │   │   ├── UserCheckerListenerTest.php
│   │   │   │   │   └── UserProviderListenerTest.php
│   │   │   │   ├── Firewall
│   │   │   │   │   ├── AccessListenerTest.php
│   │   │   │   │   ├── ChannelListenerTest.php
│   │   │   │   │   ├── ContextListenerTest.php
│   │   │   │   │   ├── ExceptionListenerTest.php
│   │   │   │   │   ├── LogoutListenerTest.php
│   │   │   │   │   └── SwitchUserListenerTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── DummyAuthenticator.php
│   │   │   │   │   ├── DummySupportsAuthenticator.php
│   │   │   │   │   ├── IsGrantedAttributeController.php
│   │   │   │   │   └── IsGrantedAttributeMethodsController.php
│   │   │   │   ├── LoginLink
│   │   │   │   │   └── LoginLinkHandlerTest.php
│   │   │   │   ├── Logout
│   │   │   │   │   └── LogoutUrlGeneratorTest.php
│   │   │   │   ├── RememberMe
│   │   │   │   │   ├── PersistentRememberMeHandlerTest.php
│   │   │   │   │   ├── ResponseListenerTest.php
│   │   │   │   │   └── SignatureRememberMeHandlerTest.php
│   │   │   │   ├── Session
│   │   │   │   │   └── SessionAuthenticationStrategyTest.php
│   │   │   │   ├── Util
│   │   │   │   │   └── TargetPathTraitTest.php
│   │   │   │   ├── AccessMapTest.php
│   │   │   │   ├── FirewallMapTest.php
│   │   │   │   ├── FirewallTest.php
│   │   │   │   └── HttpUtilsTest.php
│   │   │   ├── Util
│   │   │   │   └── TargetPathTrait.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── AccessMap.php
│   │   │   ├── AccessMapInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Firewall.php
│   │   │   ├── FirewallMap.php
│   │   │   ├── FirewallMapInterface.php
│   │   │   ├── HttpUtils.php
│   │   │   ├── LICENSE
│   │   │   ├── ParameterBagUtils.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── SecurityEvents.php
│   │   │   └── SecurityRequestAttributes.php
│   │   ├── service-contracts
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   └── close-pull-request.yml
│   │   │   │   └── PULL_REQUEST_TEMPLATE.md
│   │   │   ├── Attribute
│   │   │   │   ├── Required.php
│   │   │   │   └── SubscribedService.php
│   │   │   ├── Test
│   │   │   │   ├── ServiceLocatorTest.php
│   │   │   │   └── ServiceLocatorTestCase.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── ResetInterface.php
│   │   │   ├── ServiceCollectionInterface.php
│   │   │   ├── ServiceLocatorTrait.php
│   │   │   ├── ServiceMethodsSubscriberTrait.php
│   │   │   ├── ServiceProviderInterface.php
│   │   │   ├── ServiceSubscriberInterface.php
│   │   │   └── ServiceSubscriberTrait.php
│   │   ├── stopwatch
│   │   │   ├── Tests
│   │   │   │   ├── StopwatchEventTest.php
│   │   │   │   ├── StopwatchPeriodTest.php
│   │   │   │   └── StopwatchTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── Section.php
│   │   │   ├── Stopwatch.php
│   │   │   ├── StopwatchEvent.php
│   │   │   └── StopwatchPeriod.php
│   │   ├── string
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Inflector
│   │   │   │   ├── EnglishInflector.php
│   │   │   │   ├── FrenchInflector.php
│   │   │   │   └── InflectorInterface.php
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   │   └── update-data.php
│   │   │   │   ├── data
│   │   │   │   │   ├── wcswidth_table_wide.php
│   │   │   │   │   └── wcswidth_table_zero.php
│   │   │   │   ├── functions.php
│   │   │   │   └── WcswidthDataGenerator.php
│   │   │   ├── Slugger
│   │   │   │   ├── AsciiSlugger.php
│   │   │   │   └── SluggerInterface.php
│   │   │   ├── Tests
│   │   │   │   ├── Inflector
│   │   │   │   │   ├── EnglishInflectorTest.php
│   │   │   │   │   └── FrenchInflectorTest.php
│   │   │   │   ├── Slugger
│   │   │   │   │   └── AsciiSluggerTest.php
│   │   │   │   ├── AbstractAsciiTestCase.php
│   │   │   │   ├── AbstractUnicodeTestCase.php
│   │   │   │   ├── ByteStringTest.php
│   │   │   │   ├── CodePointStringTest.php
│   │   │   │   ├── FunctionsTest.php
│   │   │   │   ├── LazyStringTest.php
│   │   │   │   ├── SluggerTest.php
│   │   │   │   └── UnicodeStringTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── AbstractString.php
│   │   │   ├── AbstractUnicodeString.php
│   │   │   ├── ByteString.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── CodePointString.php
│   │   │   ├── composer.json
│   │   │   ├── LazyString.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── UnicodeString.php
│   │   ├── translation-contracts
│   │   │   ├── .github
│   │   │   │   ├── workflows
│   │   │   │   │   └── close-pull-request.yml
│   │   │   │   └── PULL_REQUEST_TEMPLATE.md
│   │   │   ├── Test
│   │   │   │   └── TranslatorTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── LocaleAwareInterface.php
│   │   │   ├── README.md
│   │   │   ├── TranslatableInterface.php
│   │   │   ├── TranslatorInterface.php
│   │   │   └── TranslatorTrait.php
│   │   ├── twig-bridge
│   │   │   ├── Attribute
│   │   │   │   └── Template.php
│   │   │   ├── Command
│   │   │   │   ├── DebugCommand.php
│   │   │   │   └── LintCommand.php
│   │   │   ├── DataCollector
│   │   │   │   └── TwigDataCollector.php
│   │   │   ├── ErrorRenderer
│   │   │   │   └── TwigErrorRenderer.php
│   │   │   ├── EventListener
│   │   │   │   └── TemplateAttributeListener.php
│   │   │   ├── Extension
│   │   │   │   ├── AssetExtension.php
│   │   │   │   ├── CsrfExtension.php
│   │   │   │   ├── CsrfRuntime.php
│   │   │   │   ├── DumpExtension.php
│   │   │   │   ├── ExpressionExtension.php
│   │   │   │   ├── FormExtension.php
│   │   │   │   ├── HtmlSanitizerExtension.php
│   │   │   │   ├── HttpFoundationExtension.php
│   │   │   │   ├── HttpKernelExtension.php
│   │   │   │   ├── HttpKernelRuntime.php
│   │   │   │   ├── ImportMapExtension.php
│   │   │   │   ├── ImportMapRuntime.php
│   │   │   │   ├── LogoutUrlExtension.php
│   │   │   │   ├── ProfilerExtension.php
│   │   │   │   ├── RoutingExtension.php
│   │   │   │   ├── SecurityExtension.php
│   │   │   │   ├── SerializerExtension.php
│   │   │   │   ├── SerializerRuntime.php
│   │   │   │   ├── StopwatchExtension.php
│   │   │   │   ├── TranslationExtension.php
│   │   │   │   ├── WebLinkExtension.php
│   │   │   │   ├── WorkflowExtension.php
│   │   │   │   └── YamlExtension.php
│   │   │   ├── Form
│   │   │   │   └── TwigRendererEngine.php
│   │   │   ├── Mime
│   │   │   │   ├── BodyRenderer.php
│   │   │   │   ├── NotificationEmail.php
│   │   │   │   ├── TemplatedEmail.php
│   │   │   │   └── WrappedTemplatedEmail.php
│   │   │   ├── Node
│   │   │   │   ├── DumpNode.php
│   │   │   │   ├── FormThemeNode.php
│   │   │   │   ├── RenderBlockNode.php
│   │   │   │   ├── SearchAndRenderBlockNode.php
│   │   │   │   ├── StopwatchNode.php
│   │   │   │   ├── TransDefaultDomainNode.php
│   │   │   │   └── TransNode.php
│   │   │   ├── NodeVisitor
│   │   │   │   ├── Scope.php
│   │   │   │   ├── TranslationDefaultDomainNodeVisitor.php
│   │   │   │   └── TranslationNodeVisitor.php
│   │   │   ├── Resources
│   │   │   │   └── views
│   │   │   │       ├── Email
│   │   │   │       │   ├── default
│   │   │   │       │   │   └── notification
│   │   │   │       │   │       ├── body.html.twig
│   │   │   │       │   │       └── body.txt.twig
│   │   │   │       │   └── zurb_2
│   │   │   │       │       ├── notification
│   │   │   │       │       │   ├── body.html.twig
│   │   │   │       │       │   ├── body.txt.twig
│   │   │   │       │       │   ├── content_markdown.html.twig
│   │   │   │       │       │   └── local.css
│   │   │   │       │       └── main.css
│   │   │   │       └── Form
│   │   │   │           ├── bootstrap_3_horizontal_layout.html.twig
│   │   │   │           ├── bootstrap_3_layout.html.twig
│   │   │   │           ├── bootstrap_4_horizontal_layout.html.twig
│   │   │   │           ├── bootstrap_4_layout.html.twig
│   │   │   │           ├── bootstrap_5_horizontal_layout.html.twig
│   │   │   │           ├── bootstrap_5_layout.html.twig
│   │   │   │           ├── bootstrap_base_layout.html.twig
│   │   │   │           ├── form_div_layout.html.twig
│   │   │   │           ├── form_table_layout.html.twig
│   │   │   │           ├── foundation_5_layout.html.twig
│   │   │   │           ├── foundation_6_layout.html.twig
│   │   │   │           └── tailwind_2_layout.html.twig
│   │   │   ├── Test
│   │   │   │   ├── Traits
│   │   │   │   │   └── RuntimeLoaderProvider.php
│   │   │   │   └── FormLayoutTestCase.php
│   │   │   ├── Tests
│   │   │   │   ├── Command
│   │   │   │   │   ├── DebugCommandTest.php
│   │   │   │   │   └── LintCommandTest.php
│   │   │   │   ├── ErrorRenderer
│   │   │   │   │   └── TwigErrorRendererTest.php
│   │   │   │   ├── EventListener
│   │   │   │   │   └── TemplateAttributeListenerTest.php
│   │   │   │   ├── Extension
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── templates
│   │   │   │   │   │   │   └── form
│   │   │   │   │   │   │       ├── child_label.html.twig
│   │   │   │   │   │   │       ├── custom_widgets.html.twig
│   │   │   │   │   │   │       ├── page_dynamic_extends.html.twig
│   │   │   │   │   │   │       ├── parent_label.html.twig
│   │   │   │   │   │   │       ├── theme_extends.html.twig
│   │   │   │   │   │   │       ├── theme_use.html.twig
│   │   │   │   │   │   │       └── theme.html.twig
│   │   │   │   │   │   ├── SerializerModelFixture.php
│   │   │   │   │   │   └── StubTranslator.php
│   │   │   │   │   ├── AbstractBootstrap3HorizontalLayoutTestCase.php
│   │   │   │   │   ├── AbstractBootstrap3LayoutTestCase.php
│   │   │   │   │   ├── AbstractBootstrap4HorizontalLayoutTestCase.php
│   │   │   │   │   ├── AbstractBootstrap4LayoutTestCase.php
│   │   │   │   │   ├── AbstractBootstrap5HorizontalLayoutTestCase.php
│   │   │   │   │   ├── AbstractBootstrap5LayoutTestCase.php
│   │   │   │   │   ├── AbstractDivLayoutTestCase.php
│   │   │   │   │   ├── AbstractLayoutTestCase.php
│   │   │   │   │   ├── AbstractTableLayoutTestCase.php
│   │   │   │   │   ├── DumpExtensionTest.php
│   │   │   │   │   ├── ExpressionExtensionTest.php
│   │   │   │   │   ├── FormExtensionBootstrap3HorizontalLayoutTest.php
│   │   │   │   │   ├── FormExtensionBootstrap3LayoutTest.php
│   │   │   │   │   ├── FormExtensionBootstrap4HorizontalLayoutTest.php
│   │   │   │   │   ├── FormExtensionBootstrap4LayoutTest.php
│   │   │   │   │   ├── FormExtensionBootstrap5HorizontalLayoutTest.php
│   │   │   │   │   ├── FormExtensionBootstrap5LayoutTest.php
│   │   │   │   │   ├── FormExtensionDivLayoutTest.php
│   │   │   │   │   ├── FormExtensionFieldHelpersTest.php
│   │   │   │   │   ├── FormExtensionTableLayoutTest.php
│   │   │   │   │   ├── HtmlSanitizerExtensionTest.php
│   │   │   │   │   ├── HttpFoundationExtensionTest.php
│   │   │   │   │   ├── HttpKernelExtensionTest.php
│   │   │   │   │   ├── ImportMapExtensionTest.php
│   │   │   │   │   ├── RoutingExtensionTest.php
│   │   │   │   │   ├── SerializerExtensionTest.php
│   │   │   │   │   ├── StopwatchExtensionTest.php
│   │   │   │   │   ├── TranslationExtensionTest.php
│   │   │   │   │   ├── WebLinkExtensionTest.php
│   │   │   │   │   └── WorkflowExtensionTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── extractor
│   │   │   │   │   │   ├── syntax_error.twig
│   │   │   │   │   │   └── with_translations.html.twig
│   │   │   │   │   ├── Resources
│   │   │   │   │   │   └── BarBundle
│   │   │   │   │   │       └── views
│   │   │   │   │   │           └── base.html.twig
│   │   │   │   │   ├── templates
│   │   │   │   │   │   ├── bundles
│   │   │   │   │   │   │   ├── TwigBundle
│   │   │   │   │   │   │   │   └── error.html.twig
│   │   │   │   │   │   │   ├── UnknownBundle
│   │   │   │   │   │   │   │   └── base.html.twig
│   │   │   │   │   │   │   └── WebProfileBundle
│   │   │   │   │   │   │       └── Profiler
│   │   │   │   │   │   │           └── base.html.twig
│   │   │   │   │   │   └── base.html.twig
│   │   │   │   │   ├── vendors
│   │   │   │   │   │   └── twig-bundle
│   │   │   │   │   │       └── Resources
│   │   │   │   │   │           └── views
│   │   │   │   │   │               ├── base.html.twig
│   │   │   │   │   │               └── error.html.twig
│   │   │   │   │   └── TemplateAttributeController.php
│   │   │   │   ├── Mime
│   │   │   │   │   ├── BodyRendererTest.php
│   │   │   │   │   ├── NotificationEmailTest.php
│   │   │   │   │   └── TemplatedEmailTest.php
│   │   │   │   ├── Node
│   │   │   │   │   ├── DumpNodeTest.php
│   │   │   │   │   ├── FormThemeTest.php
│   │   │   │   │   ├── SearchAndRenderBlockNodeTest.php
│   │   │   │   │   └── TransNodeTest.php
│   │   │   │   ├── NodeVisitor
│   │   │   │   │   ├── ScopeTest.php
│   │   │   │   │   ├── TranslationDefaultDomainNodeVisitorTest.php
│   │   │   │   │   ├── TranslationNodeVisitorTest.php
│   │   │   │   │   └── TwigNodeProvider.php
│   │   │   │   ├── TokenParser
│   │   │   │   │   └── FormThemeTokenParserTest.php
│   │   │   │   ├── Translation
│   │   │   │   │   └── TwigExtractorTest.php
│   │   │   │   └── AppVariableTest.php
│   │   │   ├── TokenParser
│   │   │   │   ├── DumpTokenParser.php
│   │   │   │   ├── FormThemeTokenParser.php
│   │   │   │   ├── StopwatchTokenParser.php
│   │   │   │   ├── TransDefaultDomainTokenParser.php
│   │   │   │   └── TransTokenParser.php
│   │   │   ├── Translation
│   │   │   │   └── TwigExtractor.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── AppVariable.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── UndefinedCallableHandler.php
│   │   ├── twig-bundle
│   │   │   ├── CacheWarmer
│   │   │   │   └── TemplateCacheWarmer.php
│   │   │   ├── Command
│   │   │   │   └── LintCommand.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── Compiler
│   │   │   │   │   ├── ExtensionPass.php
│   │   │   │   │   ├── RuntimeLoaderPass.php
│   │   │   │   │   ├── TwigEnvironmentPass.php
│   │   │   │   │   └── TwigLoaderPass.php
│   │   │   │   ├── Configurator
│   │   │   │   │   └── EnvironmentConfigurator.php
│   │   │   │   ├── Configuration.php
│   │   │   │   └── TwigExtension.php
│   │   │   ├── Resources
│   │   │   │   └── config
│   │   │   │       ├── schema
│   │   │   │       │   └── twig-1.0.xsd
│   │   │   │       ├── console.php
│   │   │   │       ├── form.php
│   │   │   │       ├── importmap.php
│   │   │   │       ├── mailer.php
│   │   │   │       └── twig.php
│   │   │   ├── Tests
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── AcmeBundle
│   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   └── views
│   │   │   │   │   │   │       └── layout.html.twig
│   │   │   │   │   │   └── AcmeBundle.php
│   │   │   │   │   ├── Compiler
│   │   │   │   │   │   ├── ExtensionPassTest.php
│   │   │   │   │   │   ├── TwigEnvironmentPassTest.php
│   │   │   │   │   │   └── TwigLoaderPassTest.php
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── php
│   │   │   │   │   │   │   ├── customTemplateEscapingGuesser.php
│   │   │   │   │   │   │   ├── empty.php
│   │   │   │   │   │   │   ├── extra.php
│   │   │   │   │   │   │   ├── formats.php
│   │   │   │   │   │   │   ├── full.php
│   │   │   │   │   │   │   └── mailer.php
│   │   │   │   │   │   ├── templates
│   │   │   │   │   │   │   ├── bundles
│   │   │   │   │   │   │   │   ├── AcmeBundle
│   │   │   │   │   │   │   │   │   └── layout.html.twig
│   │   │   │   │   │   │   │   └── BarBundle
│   │   │   │   │   │   │   │       └── layout.html.twig
│   │   │   │   │   │   │   └── layout.html.twig
│   │   │   │   │   │   ├── xml
│   │   │   │   │   │   │   ├── customTemplateEscapingGuesser.xml
│   │   │   │   │   │   │   ├── empty.xml
│   │   │   │   │   │   │   ├── extra.xml
│   │   │   │   │   │   │   ├── formats.xml
│   │   │   │   │   │   │   ├── full.xml
│   │   │   │   │   │   │   └── mailer.xml
│   │   │   │   │   │   └── yml
│   │   │   │   │   │       ├── customTemplateEscapingGuesser.yml
│   │   │   │   │   │       ├── empty.yml
│   │   │   │   │   │       ├── extra.yml
│   │   │   │   │   │       ├── formats.yml
│   │   │   │   │   │       ├── full.yml
│   │   │   │   │   │       └── mailer.yml
│   │   │   │   │   ├── ConfigurationTest.php
│   │   │   │   │   └── TwigExtensionTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   └── templates
│   │   │   │   │       ├── BarBundle
│   │   │   │   │       │   └── Resources
│   │   │   │   │       │       └── views
│   │   │   │   │       │           └── index.html.twig
│   │   │   │   │       └── Foo
│   │   │   │   │           ├── index.html.twig
│   │   │   │   │           └── not-twig.js
│   │   │   │   ├── Functional
│   │   │   │   │   ├── Resources
│   │   │   │   │   │   └── config
│   │   │   │   │   │       └── empty_routing.yml
│   │   │   │   │   ├── templates
│   │   │   │   │   │   └── index.html.twig
│   │   │   │   │   ├── EmptyAppTest.php
│   │   │   │   │   └── NoTemplatingEntryTest.php
│   │   │   │   ├── TemplateIteratorTest.php
│   │   │   │   └── TestCase.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── TemplateIterator.php
│   │   │   └── TwigBundle.php
│   │   ├── validator
│   │   │   ├── Attribute
│   │   │   │   └── HasNamedArguments.php
│   │   │   ├── Command
│   │   │   │   └── DebugCommand.php
│   │   │   ├── Constraints
│   │   │   │   ├── AbstractComparison.php
│   │   │   │   ├── AbstractComparisonValidator.php
│   │   │   │   ├── All.php
│   │   │   │   ├── AllValidator.php
│   │   │   │   ├── AtLeastOneOf.php
│   │   │   │   ├── AtLeastOneOfValidator.php
│   │   │   │   ├── Bic.php
│   │   │   │   ├── BicValidator.php
│   │   │   │   ├── Blank.php
│   │   │   │   ├── BlankValidator.php
│   │   │   │   ├── Callback.php
│   │   │   │   ├── CallbackValidator.php
│   │   │   │   ├── CardScheme.php
│   │   │   │   ├── CardSchemeValidator.php
│   │   │   │   ├── Cascade.php
│   │   │   │   ├── Choice.php
│   │   │   │   ├── ChoiceValidator.php
│   │   │   │   ├── Cidr.php
│   │   │   │   ├── CidrValidator.php
│   │   │   │   ├── Collection.php
│   │   │   │   ├── CollectionValidator.php
│   │   │   │   ├── Composite.php
│   │   │   │   ├── Compound.php
│   │   │   │   ├── CompoundValidator.php
│   │   │   │   ├── Count.php
│   │   │   │   ├── Country.php
│   │   │   │   ├── CountryValidator.php
│   │   │   │   ├── CountValidator.php
│   │   │   │   ├── CssColor.php
│   │   │   │   ├── CssColorValidator.php
│   │   │   │   ├── Currency.php
│   │   │   │   ├── CurrencyValidator.php
│   │   │   │   ├── Date.php
│   │   │   │   ├── DateTime.php
│   │   │   │   ├── DateTimeValidator.php
│   │   │   │   ├── DateValidator.php
│   │   │   │   ├── DisableAutoMapping.php
│   │   │   │   ├── DivisibleBy.php
│   │   │   │   ├── DivisibleByValidator.php
│   │   │   │   ├── Email.php
│   │   │   │   ├── EmailValidator.php
│   │   │   │   ├── EnableAutoMapping.php
│   │   │   │   ├── EqualTo.php
│   │   │   │   ├── EqualToValidator.php
│   │   │   │   ├── Existence.php
│   │   │   │   ├── Expression.php
│   │   │   │   ├── ExpressionLanguageProvider.php
│   │   │   │   ├── ExpressionSyntax.php
│   │   │   │   ├── ExpressionSyntaxValidator.php
│   │   │   │   ├── ExpressionValidator.php
│   │   │   │   ├── File.php
│   │   │   │   ├── FileValidator.php
│   │   │   │   ├── GreaterThan.php
│   │   │   │   ├── GreaterThanOrEqual.php
│   │   │   │   ├── GreaterThanOrEqualValidator.php
│   │   │   │   ├── GreaterThanValidator.php
│   │   │   │   ├── GroupSequence.php
│   │   │   │   ├── GroupSequenceProvider.php
│   │   │   │   ├── Hostname.php
│   │   │   │   ├── HostnameValidator.php
│   │   │   │   ├── Iban.php
│   │   │   │   ├── IbanValidator.php
│   │   │   │   ├── IdenticalTo.php
│   │   │   │   ├── IdenticalToValidator.php
│   │   │   │   ├── Image.php
│   │   │   │   ├── ImageValidator.php
│   │   │   │   ├── Ip.php
│   │   │   │   ├── IpValidator.php
│   │   │   │   ├── Isbn.php
│   │   │   │   ├── IsbnValidator.php
│   │   │   │   ├── IsFalse.php
│   │   │   │   ├── IsFalseValidator.php
│   │   │   │   ├── Isin.php
│   │   │   │   ├── IsinValidator.php
│   │   │   │   ├── IsNull.php
│   │   │   │   ├── IsNullValidator.php
│   │   │   │   ├── Issn.php
│   │   │   │   ├── IssnValidator.php
│   │   │   │   ├── IsTrue.php
│   │   │   │   ├── IsTrueValidator.php
│   │   │   │   ├── Json.php
│   │   │   │   ├── JsonValidator.php
│   │   │   │   ├── Language.php
│   │   │   │   ├── LanguageValidator.php
│   │   │   │   ├── Length.php
│   │   │   │   ├── LengthValidator.php
│   │   │   │   ├── LessThan.php
│   │   │   │   ├── LessThanOrEqual.php
│   │   │   │   ├── LessThanOrEqualValidator.php
│   │   │   │   ├── LessThanValidator.php
│   │   │   │   ├── Locale.php
│   │   │   │   ├── LocaleValidator.php
│   │   │   │   ├── Luhn.php
│   │   │   │   ├── LuhnValidator.php
│   │   │   │   ├── Negative.php
│   │   │   │   ├── NegativeOrZero.php
│   │   │   │   ├── NoSuspiciousCharacters.php
│   │   │   │   ├── NoSuspiciousCharactersValidator.php
│   │   │   │   ├── NotBlank.php
│   │   │   │   ├── NotBlankValidator.php
│   │   │   │   ├── NotCompromisedPassword.php
│   │   │   │   ├── NotCompromisedPasswordValidator.php
│   │   │   │   ├── NotEqualTo.php
│   │   │   │   ├── NotEqualToValidator.php
│   │   │   │   ├── NotIdenticalTo.php
│   │   │   │   ├── NotIdenticalToValidator.php
│   │   │   │   ├── NotNull.php
│   │   │   │   ├── NotNullValidator.php
│   │   │   │   ├── Optional.php
│   │   │   │   ├── PasswordStrength.php
│   │   │   │   ├── PasswordStrengthValidator.php
│   │   │   │   ├── Positive.php
│   │   │   │   ├── PositiveOrZero.php
│   │   │   │   ├── Range.php
│   │   │   │   ├── RangeValidator.php
│   │   │   │   ├── Regex.php
│   │   │   │   ├── RegexValidator.php
│   │   │   │   ├── Required.php
│   │   │   │   ├── Sequentially.php
│   │   │   │   ├── SequentiallyValidator.php
│   │   │   │   ├── Time.php
│   │   │   │   ├── TimeValidator.php
│   │   │   │   ├── Timezone.php
│   │   │   │   ├── TimezoneValidator.php
│   │   │   │   ├── Traverse.php
│   │   │   │   ├── Type.php
│   │   │   │   ├── TypeValidator.php
│   │   │   │   ├── Ulid.php
│   │   │   │   ├── UlidValidator.php
│   │   │   │   ├── Unique.php
│   │   │   │   ├── UniqueValidator.php
│   │   │   │   ├── Url.php
│   │   │   │   ├── UrlValidator.php
│   │   │   │   ├── Uuid.php
│   │   │   │   ├── UuidValidator.php
│   │   │   │   ├── Valid.php
│   │   │   │   ├── ValidValidator.php
│   │   │   │   ├── When.php
│   │   │   │   ├── WhenValidator.php
│   │   │   │   └── ZeroComparisonConstraintTrait.php
│   │   │   ├── Context
│   │   │   │   ├── ExecutionContext.php
│   │   │   │   ├── ExecutionContextFactory.php
│   │   │   │   ├── ExecutionContextFactoryInterface.php
│   │   │   │   └── ExecutionContextInterface.php
│   │   │   ├── DataCollector
│   │   │   │   └── ValidatorDataCollector.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── AddAutoMappingConfigurationPass.php
│   │   │   │   ├── AddConstraintValidatorsPass.php
│   │   │   │   └── AddValidatorInitializersPass.php
│   │   │   ├── Exception
│   │   │   │   ├── BadMethodCallException.php
│   │   │   │   ├── ConstraintDefinitionException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── GroupDefinitionException.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidOptionsException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── MappingException.php
│   │   │   │   ├── MissingOptionsException.php
│   │   │   │   ├── NoSuchMetadataException.php
│   │   │   │   ├── OutOfBoundsException.php
│   │   │   │   ├── RuntimeException.php
│   │   │   │   ├── UnexpectedTypeException.php
│   │   │   │   ├── UnexpectedValueException.php
│   │   │   │   ├── UnsupportedMetadataException.php
│   │   │   │   ├── ValidationFailedException.php
│   │   │   │   └── ValidatorException.php
│   │   │   ├── Mapping
│   │   │   │   ├── Factory
│   │   │   │   │   ├── BlackHoleMetadataFactory.php
│   │   │   │   │   ├── LazyLoadingMetadataFactory.php
│   │   │   │   │   └── MetadataFactoryInterface.php
│   │   │   │   ├── Loader
│   │   │   │   │   ├── schema
│   │   │   │   │   │   └── dic
│   │   │   │   │   │       └── constraint-mapping
│   │   │   │   │   │           └── constraint-mapping-1.0.xsd
│   │   │   │   │   ├── AbstractLoader.php
│   │   │   │   │   ├── AttributeLoader.php
│   │   │   │   │   ├── AutoMappingTrait.php
│   │   │   │   │   ├── FileLoader.php
│   │   │   │   │   ├── FilesLoader.php
│   │   │   │   │   ├── LoaderChain.php
│   │   │   │   │   ├── LoaderInterface.php
│   │   │   │   │   ├── PropertyInfoLoader.php
│   │   │   │   │   ├── StaticMethodLoader.php
│   │   │   │   │   ├── XmlFileLoader.php
│   │   │   │   │   ├── XmlFilesLoader.php
│   │   │   │   │   ├── YamlFileLoader.php
│   │   │   │   │   └── YamlFilesLoader.php
│   │   │   │   ├── AutoMappingStrategy.php
│   │   │   │   ├── CascadingStrategy.php
│   │   │   │   ├── ClassMetadata.php
│   │   │   │   ├── ClassMetadataInterface.php
│   │   │   │   ├── GenericMetadata.php
│   │   │   │   ├── GetterMetadata.php
│   │   │   │   ├── MemberMetadata.php
│   │   │   │   ├── MetadataInterface.php
│   │   │   │   ├── PropertyMetadata.php
│   │   │   │   ├── PropertyMetadataInterface.php
│   │   │   │   └── TraversalStrategy.php
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   │   └── sync-iban-formats.php
│   │   │   │   └── translations
│   │   │   │       ├── validators.af.xlf
│   │   │   │       ├── validators.ar.xlf
│   │   │   │       ├── validators.az.xlf
│   │   │   │       ├── validators.be.xlf
│   │   │   │       ├── validators.bg.xlf
│   │   │   │       ├── validators.bs.xlf
│   │   │   │       ├── validators.ca.xlf
│   │   │   │       ├── validators.cs.xlf
│   │   │   │       ├── validators.cy.xlf
│   │   │   │       ├── validators.da.xlf
│   │   │   │       ├── validators.de.xlf
│   │   │   │       ├── validators.el.xlf
│   │   │   │       ├── validators.en.xlf
│   │   │   │       ├── validators.es.xlf
│   │   │   │       ├── validators.et.xlf
│   │   │   │       ├── validators.eu.xlf
│   │   │   │       ├── validators.fa.xlf
│   │   │   │       ├── validators.fi.xlf
│   │   │   │       ├── validators.fr.xlf
│   │   │   │       ├── validators.gl.xlf
│   │   │   │       ├── validators.he.xlf
│   │   │   │       ├── validators.hr.xlf
│   │   │   │       ├── validators.hu.xlf
│   │   │   │       ├── validators.hy.xlf
│   │   │   │       ├── validators.id.xlf
│   │   │   │       ├── validators.it.xlf
│   │   │   │       ├── validators.ja.xlf
│   │   │   │       ├── validators.lb.xlf
│   │   │   │       ├── validators.lt.xlf
│   │   │   │       ├── validators.lv.xlf
│   │   │   │       ├── validators.mk.xlf
│   │   │   │       ├── validators.mn.xlf
│   │   │   │       ├── validators.my.xlf
│   │   │   │       ├── validators.nb.xlf
│   │   │   │       ├── validators.nl.xlf
│   │   │   │       ├── validators.nn.xlf
│   │   │   │       ├── validators.no.xlf
│   │   │   │       ├── validators.pl.xlf
│   │   │   │       ├── validators.pt_BR.xlf
│   │   │   │       ├── validators.pt.xlf
│   │   │   │       ├── validators.ro.xlf
│   │   │   │       ├── validators.ru.xlf
│   │   │   │       ├── validators.sk.xlf
│   │   │   │       ├── validators.sl.xlf
│   │   │   │       ├── validators.sq.xlf
│   │   │   │       ├── validators.sr_Cyrl.xlf
│   │   │   │       ├── validators.sr_Latn.xlf
│   │   │   │       ├── validators.sv.xlf
│   │   │   │       ├── validators.th.xlf
│   │   │   │       ├── validators.tl.xlf
│   │   │   │       ├── validators.tr.xlf
│   │   │   │       ├── validators.uk.xlf
│   │   │   │       ├── validators.ur.xlf
│   │   │   │       ├── validators.uz.xlf
│   │   │   │       ├── validators.vi.xlf
│   │   │   │       ├── validators.zh_CN.xlf
│   │   │   │       └── validators.zh_TW.xlf
│   │   │   ├── Test
│   │   │   │   └── ConstraintValidatorTestCase.php
│   │   │   ├── Tests
│   │   │   │   ├── Command
│   │   │   │   │   └── DebugCommandTest.php
│   │   │   │   ├── Constraints
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── bar
│   │   │   │   │   │   ├── BicTypedDummy.php
│   │   │   │   │   │   ├── ccc.txt
│   │   │   │   │   │   ├── ChildA.php
│   │   │   │   │   │   ├── ChildB.php
│   │   │   │   │   │   ├── foo
│   │   │   │   │   │   ├── invalid-content.gif
│   │   │   │   │   │   ├── MinMaxTyped.php
│   │   │   │   │   │   ├── test_16by9.gif
│   │   │   │   │   │   ├── test_4by3.gif
│   │   │   │   │   │   ├── test_corrupted.gif
│   │   │   │   │   │   ├── test_landscape.gif
│   │   │   │   │   │   ├── test_portrait.gif
│   │   │   │   │   │   ├── test.gif
│   │   │   │   │   │   ├── test.png.gif
│   │   │   │   │   │   ├── TypedDummy.php
│   │   │   │   │   │   ├── uppercased-extension.TXT
│   │   │   │   │   │   └── WhenTestWithAttributes.php
│   │   │   │   │   ├── AbstractComparisonValidatorTestCase.php
│   │   │   │   │   ├── AllTest.php
│   │   │   │   │   ├── AllValidatorTest.php
│   │   │   │   │   ├── AtLeastOneOfTest.php
│   │   │   │   │   ├── AtLeastOneOfValidatorTest.php
│   │   │   │   │   ├── BicValidatorTest.php
│   │   │   │   │   ├── BlankValidatorTest.php
│   │   │   │   │   ├── CallbackValidatorTest.php
│   │   │   │   │   ├── CardSchemeTest.php
│   │   │   │   │   ├── CardSchemeValidatorTest.php
│   │   │   │   │   ├── CascadeTest.php
│   │   │   │   │   ├── ChoiceTest.php
│   │   │   │   │   ├── ChoiceValidatorTest.php
│   │   │   │   │   ├── CidrTest.php
│   │   │   │   │   ├── CidrValidatorTest.php
│   │   │   │   │   ├── CollectionTest.php
│   │   │   │   │   ├── CollectionValidatorArrayObjectTest.php
│   │   │   │   │   ├── CollectionValidatorArrayTest.php
│   │   │   │   │   ├── CollectionValidatorCustomArrayObjectTest.php
│   │   │   │   │   ├── CollectionValidatorTestCase.php
│   │   │   │   │   ├── CompositeTest.php
│   │   │   │   │   ├── CompoundTest.php
│   │   │   │   │   ├── CompoundValidatorTest.php
│   │   │   │   │   ├── CountryTest.php
│   │   │   │   │   ├── CountryValidatorTest.php
│   │   │   │   │   ├── CountTest.php
│   │   │   │   │   ├── CountValidatorArrayTest.php
│   │   │   │   │   ├── CountValidatorCountableTest.php
│   │   │   │   │   ├── CountValidatorTestCase.php
│   │   │   │   │   ├── CssColorTest.php
│   │   │   │   │   ├── CssColorValidatorTest.php
│   │   │   │   │   ├── CurrencyTest.php
│   │   │   │   │   ├── CurrencyValidatorTest.php
│   │   │   │   │   ├── DateTest.php
│   │   │   │   │   ├── DateTimeTest.php
│   │   │   │   │   ├── DateTimeValidatorTest.php
│   │   │   │   │   ├── DateValidatorTest.php
│   │   │   │   │   ├── DisableAutoMappingTest.php
│   │   │   │   │   ├── DivisibleByTest.php
│   │   │   │   │   ├── DivisibleByValidatorTest.php
│   │   │   │   │   ├── EmailTest.php
│   │   │   │   │   ├── EmailValidatorTest.php
│   │   │   │   │   ├── EnableAutoMappingTest.php
│   │   │   │   │   ├── EqualToTest.php
│   │   │   │   │   ├── EqualToValidatorTest.php
│   │   │   │   │   ├── ExpressionSyntaxTest.php
│   │   │   │   │   ├── ExpressionSyntaxValidatorTest.php
│   │   │   │   │   ├── ExpressionTest.php
│   │   │   │   │   ├── ExpressionValidatorTest.php
│   │   │   │   │   ├── FileTest.php
│   │   │   │   │   ├── FileValidatorObjectTest.php
│   │   │   │   │   ├── FileValidatorPathTest.php
│   │   │   │   │   ├── FileValidatorTestCase.php
│   │   │   │   │   ├── GreaterThanOrEqualTest.php
│   │   │   │   │   ├── GreaterThanOrEqualValidatorTest.php
│   │   │   │   │   ├── GreaterThanOrEqualValidatorWithPositiveOrZeroConstraintTest.php
│   │   │   │   │   ├── GreaterThanTest.php
│   │   │   │   │   ├── GreaterThanValidatorTest.php
│   │   │   │   │   ├── GreaterThanValidatorWithPositiveConstraintTest.php
│   │   │   │   │   ├── GroupSequenceProviderTest.php
│   │   │   │   │   ├── GroupSequenceTest.php
│   │   │   │   │   ├── HostnameTest.php
│   │   │   │   │   ├── HostnameValidatorTest.php
│   │   │   │   │   ├── IbanValidatorTest.php
│   │   │   │   │   ├── IdenticalToTest.php
│   │   │   │   │   ├── IdenticalToValidatorTest.php
│   │   │   │   │   ├── ImageTest.php
│   │   │   │   │   ├── ImageValidatorTest.php
│   │   │   │   │   ├── IpTest.php
│   │   │   │   │   ├── IpValidatorTest.php
│   │   │   │   │   ├── IsbnTest.php
│   │   │   │   │   ├── IsbnValidatorTest.php
│   │   │   │   │   ├── IsFalseValidatorTest.php
│   │   │   │   │   ├── IsinTest.php
│   │   │   │   │   ├── IsinValidatorTest.php
│   │   │   │   │   ├── IsNullValidatorTest.php
│   │   │   │   │   ├── IssnTest.php
│   │   │   │   │   ├── IssnValidatorTest.php
│   │   │   │   │   ├── IsTrueValidatorTest.php
│   │   │   │   │   ├── JsonTest.php
│   │   │   │   │   ├── JsonValidatorTest.php
│   │   │   │   │   ├── LanguageTest.php
│   │   │   │   │   ├── LanguageValidatorTest.php
│   │   │   │   │   ├── LengthTest.php
│   │   │   │   │   ├── LengthValidatorTest.php
│   │   │   │   │   ├── LessThanOrEqualTest.php
│   │   │   │   │   ├── LessThanOrEqualValidatorTest.php
│   │   │   │   │   ├── LessThanOrEqualValidatorWithNegativeOrZeroConstraintTest.php
│   │   │   │   │   ├── LessThanTest.php
│   │   │   │   │   ├── LessThanValidatorTest.php
│   │   │   │   │   ├── LessThanValidatorWithNegativeConstraintTest.php
│   │   │   │   │   ├── LocaleTest.php
│   │   │   │   │   ├── LocaleValidatorTest.php
│   │   │   │   │   ├── LuhnTest.php
│   │   │   │   │   ├── LuhnValidatorTest.php
│   │   │   │   │   ├── NegativeOrZeroTest.php
│   │   │   │   │   ├── NegativeTest.php
│   │   │   │   │   ├── NoSuspiciousCharactersValidatorTest.php
│   │   │   │   │   ├── NotBlankTest.php
│   │   │   │   │   ├── NotBlankValidatorTest.php
│   │   │   │   │   ├── NotCompromisedPasswordTest.php
│   │   │   │   │   ├── NotCompromisedPasswordValidatorTest.php
│   │   │   │   │   ├── NotEqualToTest.php
│   │   │   │   │   ├── NotEqualToValidatorTest.php
│   │   │   │   │   ├── NotIdenticalToTest.php
│   │   │   │   │   ├── NotIdenticalToValidatorTest.php
│   │   │   │   │   ├── NotNullValidatorTest.php
│   │   │   │   │   ├── PasswordStrengthTest.php
│   │   │   │   │   ├── PasswordStrengthValidatorTest.php
│   │   │   │   │   ├── PositiveOrZeroTest.php
│   │   │   │   │   ├── PositiveTest.php
│   │   │   │   │   ├── RangeTest.php
│   │   │   │   │   ├── RangeValidatorTest.php
│   │   │   │   │   ├── RegexTest.php
│   │   │   │   │   ├── RegexValidatorTest.php
│   │   │   │   │   ├── SequentiallyTest.php
│   │   │   │   │   ├── SequentiallyValidatorTest.php
│   │   │   │   │   ├── TimeTest.php
│   │   │   │   │   ├── TimeValidatorTest.php
│   │   │   │   │   ├── TimezoneTest.php
│   │   │   │   │   ├── TimezoneValidatorTest.php
│   │   │   │   │   ├── TraverseTest.php
│   │   │   │   │   ├── TypeTest.php
│   │   │   │   │   ├── TypeValidatorTest.php
│   │   │   │   │   ├── UlidTest.php
│   │   │   │   │   ├── UlidValidatorTest.php
│   │   │   │   │   ├── UniqueTest.php
│   │   │   │   │   ├── UniqueValidatorTest.php
│   │   │   │   │   ├── UrlTest.php
│   │   │   │   │   ├── UrlValidatorTest.php
│   │   │   │   │   ├── UuidTest.php
│   │   │   │   │   ├── UuidValidatorTest.php
│   │   │   │   │   ├── ValidTest.php
│   │   │   │   │   ├── ValidValidatorTest.php
│   │   │   │   │   ├── WhenTest.php
│   │   │   │   │   └── WhenValidatorTest.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   └── ValidatorDataCollectorTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── AddAutoMappingConfigurationPassTest.php
│   │   │   │   │   ├── AddConstraintValidatorsPassTest.php
│   │   │   │   │   └── AddValidatorInitializersPassTest.php
│   │   │   │   ├── Dummy
│   │   │   │   │   ├── DummyClassOne.php
│   │   │   │   │   ├── DummyClassTwo.php
│   │   │   │   │   ├── DummyGroupProvider.php
│   │   │   │   │   └── TraitPass.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── Attribute
│   │   │   │   │   │   └── GroupProviderDto.php
│   │   │   │   │   ├── NestedAttribute
│   │   │   │   │   │   ├── Entity.php
│   │   │   │   │   │   ├── EntityParent.php
│   │   │   │   │   │   └── GroupSequenceProviderEntity.php
│   │   │   │   │   ├── AbstractPropertyGetter.php
│   │   │   │   │   ├── CallbackClass.php
│   │   │   │   │   ├── CascadedChild.php
│   │   │   │   │   ├── CascadingEntity.php
│   │   │   │   │   ├── CascadingEntityIntersection.php
│   │   │   │   │   ├── CascadingEntityUnion.php
│   │   │   │   │   ├── ChildGetterInterface.php
│   │   │   │   │   ├── ClassConstraint.php
│   │   │   │   │   ├── ConstraintA.php
│   │   │   │   │   ├── ConstraintB.php
│   │   │   │   │   ├── ConstraintC.php
│   │   │   │   │   ├── ConstraintChoiceWithPreset.php
│   │   │   │   │   ├── ConstraintWithRequiredArgument.php
│   │   │   │   │   ├── ConstraintWithStaticProperty.php
│   │   │   │   │   ├── ConstraintWithTypedProperty.php
│   │   │   │   │   ├── ConstraintWithValue.php
│   │   │   │   │   ├── ConstraintWithValueAsDefault.php
│   │   │   │   │   ├── Countable.php
│   │   │   │   │   ├── CustomArrayObject.php
│   │   │   │   │   ├── DummyConstraint.php
│   │   │   │   │   ├── DummyConstraintValidator.php
│   │   │   │   │   ├── Entity_74_Proxy.php
│   │   │   │   │   ├── Entity_74.php
│   │   │   │   │   ├── Entity_81.php
│   │   │   │   │   ├── EntityInterfaceA.php
│   │   │   │   │   ├── EntityInterfaceB.php
│   │   │   │   │   ├── EntityParentInterface.php
│   │   │   │   │   ├── EntityStaticCar.php
│   │   │   │   │   ├── EntityStaticCarTurbo.php
│   │   │   │   │   ├── EntityStaticVehicle.php
│   │   │   │   │   ├── EntityWithGroupedConstraintOnMethods.php
│   │   │   │   │   ├── FailingConstraint.php
│   │   │   │   │   ├── FailingConstraintValidator.php
│   │   │   │   │   ├── FakeMetadataFactory.php
│   │   │   │   │   ├── FilesLoader.php
│   │   │   │   │   ├── GroupSequenceProviderChildEntity.php
│   │   │   │   │   ├── InvalidConstraint.php
│   │   │   │   │   ├── PropertyConstraint.php
│   │   │   │   │   ├── PropertyGetter.php
│   │   │   │   │   ├── PropertyGetterInterface.php
│   │   │   │   │   ├── PropertyInfoLoaderEntity.php
│   │   │   │   │   ├── PropertyInfoLoaderNoAutoMappingEntity.php
│   │   │   │   │   ├── Reference.php
│   │   │   │   │   ├── TestEnum.php
│   │   │   │   │   └── ToString.php
│   │   │   │   ├── Mapping
│   │   │   │   │   ├── Factory
│   │   │   │   │   │   ├── BlackHoleMetadataFactoryTest.php
│   │   │   │   │   │   └── LazyLoadingMetadataFactoryTest.php
│   │   │   │   │   ├── Loader
│   │   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   │   ├── ConstraintWithNamedArguments.php
│   │   │   │   │   │   │   └── ConstraintWithoutValueWithNamedArguments.php
│   │   │   │   │   │   ├── AbstractStaticMethodLoader.php
│   │   │   │   │   │   ├── AttributeLoaderTest.php
│   │   │   │   │   │   ├── bad-format.yml
│   │   │   │   │   │   ├── constraint-mapping-non-strings.xml
│   │   │   │   │   │   ├── constraint-mapping-required-arg.xml
│   │   │   │   │   │   ├── constraint-mapping-required-arg.yml
│   │   │   │   │   │   ├── constraint-mapping.xml
│   │   │   │   │   │   ├── constraint-mapping.yml
│   │   │   │   │   │   ├── empty-mapping.yml
│   │   │   │   │   │   ├── FilesLoaderTest.php
│   │   │   │   │   │   ├── LoaderChainTest.php
│   │   │   │   │   │   ├── mapping-with-constants.yml
│   │   │   │   │   │   ├── nonvalid-mapping.yml
│   │   │   │   │   │   ├── PropertyInfoLoaderTest.php
│   │   │   │   │   │   ├── StaticMethodLoaderTest.php
│   │   │   │   │   │   ├── withdoctype.xml
│   │   │   │   │   │   ├── XmlFileLoaderTest.php
│   │   │   │   │   │   └── YamlFileLoaderTest.php
│   │   │   │   │   ├── ClassMetadataTest.php
│   │   │   │   │   ├── GetterMetadataTest.php
│   │   │   │   │   ├── MemberMetadataTest.php
│   │   │   │   │   └── PropertyMetadataTest.php
│   │   │   │   ├── Resources
│   │   │   │   │   └── TranslationFilesTest.php
│   │   │   │   ├── Test
│   │   │   │   │   └── ConstraintValidatorTestCaseTest.php
│   │   │   │   ├── Util
│   │   │   │   │   └── PropertyPathTest.php
│   │   │   │   ├── Validator
│   │   │   │   │   ├── RecursiveValidatorTest.php
│   │   │   │   │   └── TraceableValidatorTest.php
│   │   │   │   ├── Violation
│   │   │   │   │   └── ConstraintViolationBuilderTest.php
│   │   │   │   ├── ConstraintTest.php
│   │   │   │   ├── ConstraintValidatorFactoryTest.php
│   │   │   │   ├── ConstraintValidatorTest.php
│   │   │   │   ├── ConstraintViolationListTest.php
│   │   │   │   ├── ConstraintViolationTest.php
│   │   │   │   ├── ContainerConstraintValidatorFactoryTest.php
│   │   │   │   ├── IcuCompatibilityTrait.php
│   │   │   │   ├── ValidationTest.php
│   │   │   │   └── ValidatorBuilderTest.php
│   │   │   ├── Util
│   │   │   │   └── PropertyPath.php
│   │   │   ├── Validator
│   │   │   │   ├── ContextualValidatorInterface.php
│   │   │   │   ├── LazyProperty.php
│   │   │   │   ├── RecursiveContextualValidator.php
│   │   │   │   ├── RecursiveValidator.php
│   │   │   │   ├── TraceableValidator.php
│   │   │   │   └── ValidatorInterface.php
│   │   │   ├── Violation
│   │   │   │   ├── ConstraintViolationBuilder.php
│   │   │   │   └── ConstraintViolationBuilderInterface.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Constraint.php
│   │   │   ├── ConstraintValidator.php
│   │   │   ├── ConstraintValidatorFactory.php
│   │   │   ├── ConstraintValidatorFactoryInterface.php
│   │   │   ├── ConstraintValidatorInterface.php
│   │   │   ├── ConstraintViolation.php
│   │   │   ├── ConstraintViolationInterface.php
│   │   │   ├── ConstraintViolationList.php
│   │   │   ├── ConstraintViolationListInterface.php
│   │   │   ├── ContainerConstraintValidatorFactory.php
│   │   │   ├── GroupProviderInterface.php
│   │   │   ├── GroupSequenceProviderInterface.php
│   │   │   ├── LICENSE
│   │   │   ├── ObjectInitializerInterface.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   ├── Validation.php
│   │   │   └── ValidatorBuilder.php
│   │   ├── var-dumper
│   │   │   ├── Caster
│   │   │   │   ├── AmqpCaster.php
│   │   │   │   ├── ArgsStub.php
│   │   │   │   ├── Caster.php
│   │   │   │   ├── ClassStub.php
│   │   │   │   ├── ConstStub.php
│   │   │   │   ├── CutArrayStub.php
│   │   │   │   ├── CutStub.php
│   │   │   │   ├── DateCaster.php
│   │   │   │   ├── DoctrineCaster.php
│   │   │   │   ├── DOMCaster.php
│   │   │   │   ├── DsCaster.php
│   │   │   │   ├── DsPairStub.php
│   │   │   │   ├── EnumStub.php
│   │   │   │   ├── ExceptionCaster.php
│   │   │   │   ├── FFICaster.php
│   │   │   │   ├── FiberCaster.php
│   │   │   │   ├── FrameStub.php
│   │   │   │   ├── GmpCaster.php
│   │   │   │   ├── ImagineCaster.php
│   │   │   │   ├── ImgStub.php
│   │   │   │   ├── IntlCaster.php
│   │   │   │   ├── LinkStub.php
│   │   │   │   ├── MemcachedCaster.php
│   │   │   │   ├── MysqliCaster.php
│   │   │   │   ├── PdoCaster.php
│   │   │   │   ├── PgSqlCaster.php
│   │   │   │   ├── ProxyManagerCaster.php
│   │   │   │   ├── RdKafkaCaster.php
│   │   │   │   ├── RedisCaster.php
│   │   │   │   ├── ReflectionCaster.php
│   │   │   │   ├── ResourceCaster.php
│   │   │   │   ├── ScalarStub.php
│   │   │   │   ├── SplCaster.php
│   │   │   │   ├── StubCaster.php
│   │   │   │   ├── SymfonyCaster.php
│   │   │   │   ├── TraceStub.php
│   │   │   │   ├── UninitializedStub.php
│   │   │   │   ├── UuidCaster.php
│   │   │   │   ├── XmlReaderCaster.php
│   │   │   │   └── XmlResourceCaster.php
│   │   │   ├── Cloner
│   │   │   │   ├── Internal
│   │   │   │   │   └── NoDefault.php
│   │   │   │   ├── AbstractCloner.php
│   │   │   │   ├── ClonerInterface.php
│   │   │   │   ├── Cursor.php
│   │   │   │   ├── Data.php
│   │   │   │   ├── DumperInterface.php
│   │   │   │   ├── Stub.php
│   │   │   │   └── VarCloner.php
│   │   │   ├── Command
│   │   │   │   ├── Descriptor
│   │   │   │   │   ├── CliDescriptor.php
│   │   │   │   │   ├── DumpDescriptorInterface.php
│   │   │   │   │   └── HtmlDescriptor.php
│   │   │   │   └── ServerDumpCommand.php
│   │   │   ├── Dumper
│   │   │   │   ├── ContextProvider
│   │   │   │   │   ├── CliContextProvider.php
│   │   │   │   │   ├── ContextProviderInterface.php
│   │   │   │   │   ├── RequestContextProvider.php
│   │   │   │   │   └── SourceContextProvider.php
│   │   │   │   ├── AbstractDumper.php
│   │   │   │   ├── CliDumper.php
│   │   │   │   ├── ContextualizedDumper.php
│   │   │   │   ├── DataDumperInterface.php
│   │   │   │   ├── HtmlDumper.php
│   │   │   │   └── ServerDumper.php
│   │   │   ├── Exception
│   │   │   │   └── ThrowingCasterException.php
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   │   └── var-dump-server
│   │   │   │   ├── css
│   │   │   │   │   └── htmlDescriptor.css
│   │   │   │   ├── functions
│   │   │   │   │   └── dump.php
│   │   │   │   └── js
│   │   │   │       └── htmlDescriptor.js
│   │   │   ├── Server
│   │   │   │   ├── Connection.php
│   │   │   │   └── DumpServer.php
│   │   │   ├── Test
│   │   │   │   └── VarDumperTestTrait.php
│   │   │   ├── Tests
│   │   │   │   ├── Caster
│   │   │   │   │   ├── CasterTest.php
│   │   │   │   │   ├── DateCasterTest.php
│   │   │   │   │   ├── DoctrineCasterTest.php
│   │   │   │   │   ├── ExceptionCasterTest.php
│   │   │   │   │   ├── FFICasterTest.php
│   │   │   │   │   ├── FiberCasterTest.php
│   │   │   │   │   ├── GmpCasterTest.php
│   │   │   │   │   ├── IntlCasterTest.php
│   │   │   │   │   ├── MemcachedCasterTest.php
│   │   │   │   │   ├── MysqliCasterTest.php
│   │   │   │   │   ├── PdoCasterTest.php
│   │   │   │   │   ├── RdKafkaCasterTest.php
│   │   │   │   │   ├── RedisCasterTest.php
│   │   │   │   │   ├── ReflectionCasterTest.php
│   │   │   │   │   ├── SplCasterTest.php
│   │   │   │   │   ├── StubCasterTest.php
│   │   │   │   │   ├── SymfonyCasterTest.php
│   │   │   │   │   └── XmlReaderCasterTest.php
│   │   │   │   ├── Cloner
│   │   │   │   │   ├── DataTest.php
│   │   │   │   │   ├── StubTest.php
│   │   │   │   │   └── VarClonerTest.php
│   │   │   │   ├── Command
│   │   │   │   │   ├── Descriptor
│   │   │   │   │   │   ├── CliDescriptorTest.php
│   │   │   │   │   │   └── HtmlDescriptorTest.php
│   │   │   │   │   └── ServerDumpCommandTest.php
│   │   │   │   ├── Dumper
│   │   │   │   │   ├── ContextProvider
│   │   │   │   │   │   └── RequestContextProviderTest.php
│   │   │   │   │   ├── functions
│   │   │   │   │   │   ├── dd_with_multiple_args.phpt
│   │   │   │   │   │   ├── dd_with_named_args.phpt
│   │   │   │   │   │   ├── dd_with_null.phpt
│   │   │   │   │   │   ├── dd_with_single_arg.phpt
│   │   │   │   │   │   ├── dump_data_collector_with_spl_array.phpt
│   │   │   │   │   │   ├── dump_with_multiple_args.phpt
│   │   │   │   │   │   ├── dump_with_named_args.phpt
│   │   │   │   │   │   ├── dump_with_null.phpt
│   │   │   │   │   │   ├── dump_with_single_arg.phpt
│   │   │   │   │   │   └── dump_without_args.phpt
│   │   │   │   │   ├── CliDumperTest.php
│   │   │   │   │   ├── ContextualizedDumperTest.php
│   │   │   │   │   ├── FunctionsTest.php
│   │   │   │   │   ├── HtmlDumperTest.php
│   │   │   │   │   └── ServerDumperTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── BackedEnumFixture.php
│   │   │   │   │   ├── DateTimeChild.php
│   │   │   │   │   ├── dumb-var.php
│   │   │   │   │   ├── dump_server.php
│   │   │   │   │   ├── ExtendsReflectionTypeFixture.php
│   │   │   │   │   ├── FooInterface.php
│   │   │   │   │   ├── GeneratorDemo.php
│   │   │   │   │   ├── LotsOfAttributes.php
│   │   │   │   │   ├── MyAttribute.php
│   │   │   │   │   ├── NotLoadableClass.php
│   │   │   │   │   ├── Php74.php
│   │   │   │   │   ├── Php81Enums.php
│   │   │   │   │   ├── Php82NullStandaloneReturnType.php
│   │   │   │   │   ├── ReflectionIntersectionTypeFixture.php
│   │   │   │   │   ├── ReflectionNamedTypeFixture.php
│   │   │   │   │   ├── ReflectionUnionTypeFixture.php
│   │   │   │   │   ├── ReflectionUnionTypeWithIntersectionFixture.php
│   │   │   │   │   ├── Twig.php
│   │   │   │   │   ├── UnitEnumFixture.php
│   │   │   │   │   └── xml_reader.xml
│   │   │   │   ├── Server
│   │   │   │   │   └── ConnectionTest.php
│   │   │   │   └── Test
│   │   │   │       └── VarDumperTestTraitTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── VarDumper.php
│   │   ├── var-exporter
│   │   │   ├── Exception
│   │   │   │   ├── ClassNotFoundException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── LogicException.php
│   │   │   │   └── NotInstantiableTypeException.php
│   │   │   ├── Internal
│   │   │   │   ├── Exporter.php
│   │   │   │   ├── Hydrator.php
│   │   │   │   ├── LazyObjectRegistry.php
│   │   │   │   ├── LazyObjectState.php
│   │   │   │   ├── LazyObjectTrait.php
│   │   │   │   ├── Reference.php
│   │   │   │   ├── Registry.php
│   │   │   │   └── Values.php
│   │   │   ├── Tests
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── LazyGhost
│   │   │   │   │   │   ├── ChildMagicClass.php
│   │   │   │   │   │   ├── ChildStdClass.php
│   │   │   │   │   │   ├── ChildTestClass.php
│   │   │   │   │   │   ├── ClassWithUninitializedObjectProperty.php
│   │   │   │   │   │   ├── LazyClass.php
│   │   │   │   │   │   ├── MagicClass.php
│   │   │   │   │   │   ├── NoMagicClass.php
│   │   │   │   │   │   ├── ReadOnlyClass.php
│   │   │   │   │   │   └── TestClass.php
│   │   │   │   │   ├── LazyProxy
│   │   │   │   │   │   ├── FinalPublicClass.php
│   │   │   │   │   │   ├── Php82NullStandaloneReturnType.php
│   │   │   │   │   │   ├── ReadOnlyClass.php
│   │   │   │   │   │   ├── StringMagicGetClass.php
│   │   │   │   │   │   ├── TestClass.php
│   │   │   │   │   │   ├── TestOverwritePropClass.php
│   │   │   │   │   │   ├── TestUnserializeClass.php
│   │   │   │   │   │   └── TestWakeupClass.php
│   │   │   │   │   ├── __serialize-but-no-__unserialize.php
│   │   │   │   │   ├── __unserialize-but-no-__serialize.php
│   │   │   │   │   ├── abstract-parent.php
│   │   │   │   │   ├── array-iterator.php
│   │   │   │   │   ├── array-object-custom.php
│   │   │   │   │   ├── array-object.php
│   │   │   │   │   ├── bool.php
│   │   │   │   │   ├── clone.php
│   │   │   │   │   ├── datetime.php
│   │   │   │   │   ├── error.php
│   │   │   │   │   ├── external-references.php
│   │   │   │   │   ├── final-array-iterator.php
│   │   │   │   │   ├── final-error.php
│   │   │   │   │   ├── final-stdclass.php
│   │   │   │   │   ├── foo-serializable.php
│   │   │   │   │   ├── FooReadonly.php
│   │   │   │   │   ├── FooSerializable.php
│   │   │   │   │   ├── FooUnitEnum.php
│   │   │   │   │   ├── hard-references-recursive.php
│   │   │   │   │   ├── hard-references.php
│   │   │   │   │   ├── incomplete-class.php
│   │   │   │   │   ├── lf-ending-string.php
│   │   │   │   │   ├── multiline-string.php
│   │   │   │   │   ├── MySerializable.php
│   │   │   │   │   ├── partially-indexed-array.php
│   │   │   │   │   ├── php74-serializable.php
│   │   │   │   │   ├── private-constructor.php
│   │   │   │   │   ├── private.php
│   │   │   │   │   ├── readonly.php
│   │   │   │   │   ├── serializable.php
│   │   │   │   │   ├── simple-array.php
│   │   │   │   │   ├── SimpleObject.php
│   │   │   │   │   ├── spl-object-storage.php
│   │   │   │   │   ├── unit-enum.php
│   │   │   │   │   ├── var-on-sleep.php
│   │   │   │   │   ├── wakeup-refl.php
│   │   │   │   │   └── wakeup.php
│   │   │   │   ├── InstantiatorTest.php
│   │   │   │   ├── LazyGhostTraitTest.php
│   │   │   │   ├── LazyProxyTraitTest.php
│   │   │   │   ├── ProxyHelperTest.php
│   │   │   │   └── VarExporterTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Hydrator.php
│   │   │   ├── Instantiator.php
│   │   │   ├── LazyGhostTrait.php
│   │   │   ├── LazyObjectInterface.php
│   │   │   ├── LazyProxyTrait.php
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── ProxyHelper.php
│   │   │   ├── README.md
│   │   │   └── VarExporter.php
│   │   └── yaml
│   │       ├── Command
│   │       │   └── LintCommand.php
│   │       ├── Exception
│   │       │   ├── DumpException.php
│   │       │   ├── ExceptionInterface.php
│   │       │   ├── ParseException.php
│   │       │   └── RuntimeException.php
│   │       ├── Resources
│   │       │   └── bin
│   │       │       └── yaml-lint
│   │       ├── Tag
│   │       │   └── TaggedValue.php
│   │       ├── Tests
│   │       │   ├── Command
│   │       │   │   └── LintCommandTest.php
│   │       │   ├── Fixtures
│   │       │   │   ├── arrow.gif
│   │       │   │   ├── booleanMappingKeys.yml
│   │       │   │   ├── embededPhp.yml
│   │       │   │   ├── escapedCharacters.yml
│   │       │   │   ├── FooBackedEnum.php
│   │       │   │   ├── FooUnitEnum.php
│   │       │   │   ├── index.yml
│   │       │   │   ├── nonStringKeys.yml
│   │       │   │   ├── not_readable.yml
│   │       │   │   ├── nullMappingKey.yml
│   │       │   │   ├── numericMappingKeys.yml
│   │       │   │   ├── sfComments.yml
│   │       │   │   ├── sfCompact.yml
│   │       │   │   ├── sfMergeKey.yml
│   │       │   │   ├── sfObjects.yml
│   │       │   │   ├── sfQuotes.yml
│   │       │   │   ├── sfTests.yml
│   │       │   │   ├── unindentedCollections.yml
│   │       │   │   ├── YtsAnchorAlias.yml
│   │       │   │   ├── YtsBasicTests.yml
│   │       │   │   ├── YtsBlockMapping.yml
│   │       │   │   ├── YtsDocumentSeparator.yml
│   │       │   │   ├── YtsErrorTests.yml
│   │       │   │   ├── YtsFlowCollections.yml
│   │       │   │   ├── YtsFoldedScalars.yml
│   │       │   │   ├── YtsNullsAndEmpties.yml
│   │       │   │   ├── YtsSpecificationExamples.yml
│   │       │   │   └── YtsTypeTransfers.yml
│   │       │   ├── DumperTest.php
│   │       │   ├── InlineTest.php
│   │       │   ├── ParseExceptionTest.php
│   │       │   ├── ParserTest.php
│   │       │   └── YamlTest.php
│   │       ├── .gitattributes
│   │       ├── .gitignore
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── Dumper.php
│   │       ├── Escaper.php
│   │       ├── Inline.php
│   │       ├── LICENSE
│   │       ├── Parser.php
│   │       ├── phpunit.xml.dist
│   │       ├── README.md
│   │       ├── Unescaper.php
│   │       └── Yaml.php
│   ├── symfonycasts
│   │   ├── reset-password-bundle
│   │   │   ├── .github
│   │   │   │   └── workflows
│   │   │   │       └── ci.yaml
│   │   │   ├── docs
│   │   │   │   └── manual-setup.md
│   │   │   ├── src
│   │   │   │   ├── Command
│   │   │   │   │   └── ResetPasswordRemoveExpiredCommand.php
│   │   │   │   ├── Controller
│   │   │   │   │   └── ResetPasswordControllerTrait.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── Configuration.php
│   │   │   │   │   └── SymfonyCastsResetPasswordExtension.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── ExpiredResetPasswordTokenException.php
│   │   │   │   │   ├── FakeRepositoryException.php
│   │   │   │   │   ├── InvalidResetPasswordTokenException.php
│   │   │   │   │   ├── ResetPasswordExceptionInterface.php
│   │   │   │   │   └── TooManyPasswordRequestsException.php
│   │   │   │   ├── Generator
│   │   │   │   │   ├── ResetPasswordRandomGenerator.php
│   │   │   │   │   └── ResetPasswordTokenGenerator.php
│   │   │   │   ├── Model
│   │   │   │   │   ├── ResetPasswordRequestInterface.php
│   │   │   │   │   ├── ResetPasswordRequestTrait.php
│   │   │   │   │   ├── ResetPasswordToken.php
│   │   │   │   │   └── ResetPasswordTokenComponents.php
│   │   │   │   ├── Persistence
│   │   │   │   │   ├── Fake
│   │   │   │   │   │   └── FakeResetPasswordInternalRepository.php
│   │   │   │   │   ├── Repository
│   │   │   │   │   │   └── ResetPasswordRequestRepositoryTrait.php
│   │   │   │   │   └── ResetPasswordRequestRepositoryInterface.php
│   │   │   │   ├── Resources
│   │   │   │   │   ├── config
│   │   │   │   │   │   └── reset_password_services.xml
│   │   │   │   │   └── translations
│   │   │   │   │       ├── ResetPasswordBundle.ar.xlf
│   │   │   │   │       ├── ResetPasswordBundle.ca.xlf
│   │   │   │   │       ├── ResetPasswordBundle.cs.xlf
│   │   │   │   │       ├── ResetPasswordBundle.da.xlf
│   │   │   │   │       ├── ResetPasswordBundle.de.xlf
│   │   │   │   │       ├── ResetPasswordBundle.el.xlf
│   │   │   │   │       ├── ResetPasswordBundle.en.xlf
│   │   │   │   │       ├── ResetPasswordBundle.es.xlf
│   │   │   │   │       ├── ResetPasswordBundle.fa.xlf
│   │   │   │   │       ├── ResetPasswordBundle.fi.xlf
│   │   │   │   │       ├── ResetPasswordBundle.fr.xlf
│   │   │   │   │       ├── ResetPasswordBundle.hu.xlf
│   │   │   │   │       ├── ResetPasswordBundle.id.xlf
│   │   │   │   │       ├── ResetPasswordBundle.it.xlf
│   │   │   │   │       ├── ResetPasswordBundle.ja.xlf
│   │   │   │   │       ├── ResetPasswordBundle.mk.xlf
│   │   │   │   │       ├── ResetPasswordBundle.mn.xlf
│   │   │   │   │       ├── ResetPasswordBundle.pl.xlf
│   │   │   │   │       ├── ResetPasswordBundle.pt.xlf
│   │   │   │   │       ├── ResetPasswordBundle.ro.xlf
│   │   │   │   │       ├── ResetPasswordBundle.ru.xlf
│   │   │   │   │       ├── ResetPasswordBundle.sk.xlf
│   │   │   │   │       ├── ResetPasswordBundle.sr.xlf
│   │   │   │   │       ├── ResetPasswordBundle.tr.xlf
│   │   │   │   │       ├── ResetPasswordBundle.uk.xlf
│   │   │   │   │       └── ResetPasswordBundle+intl-icu.nl.xlf
│   │   │   │   ├── Util
│   │   │   │   │   └── ResetPasswordCleaner.php
│   │   │   │   ├── ResetPasswordHelper.php
│   │   │   │   ├── ResetPasswordHelperInterface.php
│   │   │   │   └── SymfonyCastsResetPasswordBundle.php
│   │   │   ├── tests
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── App
│   │   │   │   │   │   ├── config
│   │   │   │   │   │   │   ├── packages
│   │   │   │   │   │   │   │   └── reset_password.yaml
│   │   │   │   │   │   │   └── routes.yaml
│   │   │   │   │   │   ├── src
│   │   │   │   │   │   │   ├── Controller
│   │   │   │   │   │   │   │   └── ResetPasswordController.php
│   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   └── ResetPasswordRequest.php
│   │   │   │   │   │   │   ├── Form
│   │   │   │   │   │   │   │   ├── ChangePasswordFormType.php
│   │   │   │   │   │   │   │   └── ResetPasswordRequestFormType.php
│   │   │   │   │   │   │   └── Repository
│   │   │   │   │   │   │       └── ResetPasswordRequestRepository.php
│   │   │   │   │   │   ├── templates
│   │   │   │   │   │   │   └── reset_password
│   │   │   │   │   │   │       ├── check_email.html.twig
│   │   │   │   │   │   │       ├── email.html.twig
│   │   │   │   │   │   │       ├── request.html.twig
│   │   │   │   │   │   │       └── reset.html.twig
│   │   │   │   │   │   ├── tests
│   │   │   │   │   │   │   └── ResetPasswordControllerTest.php
│   │   │   │   │   │   └── .env
│   │   │   │   │   ├── Entity
│   │   │   │   │   │   ├── ResetPasswordTestFixtureRequest.php
│   │   │   │   │   │   └── ResetPasswordTestFixtureUser.php
│   │   │   │   │   └── ResetPasswordTestFixtureRequestRepository.php
│   │   │   │   ├── FunctionalTests
│   │   │   │   │   ├── Command
│   │   │   │   │   │   └── ResetPasswordRemoveExpiredCommandTest.php
│   │   │   │   │   ├── Persistence
│   │   │   │   │   │   └── ResetPasswordRequestRepositoryTest.php
│   │   │   │   │   └── ResetPasswordFunctionalTest.php
│   │   │   │   ├── IntegrationTests
│   │   │   │   │   ├── ResetPasswordInterfaceAutowireTest.php
│   │   │   │   │   └── ResetPasswordServiceDefinitionTest.php
│   │   │   │   ├── tmp
│   │   │   │   │   └── .gitignore
│   │   │   │   ├── UnitTests
│   │   │   │   │   ├── Command
│   │   │   │   │   │   └── ResetPasswordRemoveExpiredCommandTest.php
│   │   │   │   │   ├── Controller
│   │   │   │   │   │   └── ResetPasswordControllerTraitTest.php
│   │   │   │   │   ├── Exception
│   │   │   │   │   │   ├── ResetPasswordExceptionTest.php
│   │   │   │   │   │   └── TooManyPasswordRequestsExceptionTest.php
│   │   │   │   │   ├── Generator
│   │   │   │   │   │   ├── ResetPasswordRandomGeneratorTest.php
│   │   │   │   │   │   └── ResetPasswordTokenGeneratorTest.php
│   │   │   │   │   ├── Model
│   │   │   │   │   │   ├── ResetPasswordRequestTraitTest.php
│   │   │   │   │   │   ├── ResetPasswordTokenComponentsTest.php
│   │   │   │   │   │   └── ResetPasswordTokenTest.php
│   │   │   │   │   ├── Persistence
│   │   │   │   │   │   ├── FakeResetPasswordInternalRepositoryTest.php
│   │   │   │   │   │   └── ResetPasswordRequestRepositoryTraitTest.php
│   │   │   │   │   ├── Util
│   │   │   │   │   │   └── ResetPasswordCleanerTest.php
│   │   │   │   │   └── ResetPasswordHelperTest.php
│   │   │   │   └── ResetPasswordTestKernel.php
│   │   │   ├── tools
│   │   │   │   ├── php-cs-fixer
│   │   │   │   │   └── composer.json
│   │   │   │   ├── phpstan
│   │   │   │   │   └── composer.json
│   │   │   │   └── .gitignore
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── .php-cs-fixer.dist.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── phpstan-baseline.neon
│   │   │   ├── phpstan.dist.neon
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── UPGRADING.md
│   │   └── verify-email-bundle
│   │       ├── .github
│   │       │   └── workflows
│   │       │       └── ci.yaml
│   │       ├── src
│   │       │   ├── DependencyInjection
│   │       │   │   ├── Configuration.php
│   │       │   │   └── SymfonyCastsVerifyEmailExtension.php
│   │       │   ├── Exception
│   │       │   │   ├── ExpiredSignatureException.php
│   │       │   │   ├── InvalidSignatureException.php
│   │       │   │   ├── VerifyEmailExceptionInterface.php
│   │       │   │   └── WrongEmailVerifyException.php
│   │       │   ├── Factory
│   │       │   │   └── UriSignerFactory.php
│   │       │   ├── Generator
│   │       │   │   └── VerifyEmailTokenGenerator.php
│   │       │   ├── Model
│   │       │   │   └── VerifyEmailSignatureComponents.php
│   │       │   ├── Resources
│   │       │   │   ├── config
│   │       │   │   │   └── verify_email_services.xml
│   │       │   │   └── translations
│   │       │   │       ├── VerifyEmailBundle.ar.xlf
│   │       │   │       ├── VerifyEmailBundle.ca.xlf
│   │       │   │       ├── VerifyEmailBundle.cs.xlf
│   │       │   │       ├── VerifyEmailBundle.da.xlf
│   │       │   │       ├── VerifyEmailBundle.de.xlf
│   │       │   │       ├── VerifyEmailBundle.el.xlf
│   │       │   │       ├── VerifyEmailBundle.en.xlf
│   │       │   │       ├── VerifyEmailBundle.es.xlf
│   │       │   │       ├── VerifyEmailBundle.fa.xlf
│   │       │   │       ├── VerifyEmailBundle.fi.xlf
│   │       │   │       ├── VerifyEmailBundle.fr.xlf
│   │       │   │       ├── VerifyEmailBundle.hu.xlf
│   │       │   │       ├── VerifyEmailBundle.id.xlf
│   │       │   │       ├── VerifyEmailBundle.it.xlf
│   │       │   │       ├── VerifyEmailBundle.ja.xlf
│   │       │   │       ├── VerifyEmailBundle.mk.xlf
│   │       │   │       ├── VerifyEmailBundle.mn.xlf
│   │       │   │       ├── VerifyEmailBundle.pl.xlf
│   │       │   │       ├── VerifyEmailBundle.pt.xlf
│   │       │   │       ├── VerifyEmailBundle.ro.xlf
│   │       │   │       ├── VerifyEmailBundle.ru.xlf
│   │       │   │       ├── VerifyEmailBundle.sk.xlf
│   │       │   │       ├── VerifyEmailBundle.sr.xlf
│   │       │   │       ├── VerifyEmailBundle.tr.xlf
│   │       │   │       ├── VerifyEmailBundle.uk.xlf
│   │       │   │       └── VerifyEmailBundle+intl-icu.nl.xlf
│   │       │   ├── Util
│   │       │   │   └── VerifyEmailQueryUtility.php
│   │       │   ├── SymfonyCastsVerifyEmailBundle.php
│   │       │   ├── VerifyEmailHelper.php
│   │       │   └── VerifyEmailHelperInterface.php
│   │       ├── tests
│   │       │   ├── AcceptanceTests
│   │       │   │   └── VerifyEmailAcceptanceTest.php
│   │       │   ├── FunctionalTests
│   │       │   │   └── VerifyEmailHelperFunctionalTest.php
│   │       │   ├── IntegrationTests
│   │       │   │   ├── VerifyEmailBundleAutowireTest.php
│   │       │   │   └── VerifyEmailServiceDefinitionTest.php
│   │       │   ├── UnitTests
│   │       │   │   ├── Exception
│   │       │   │   │   └── VerifyEmailExceptionTest.php
│   │       │   │   ├── Generator
│   │       │   │   │   └── VerifyEmailTokenGeneratorTest.php
│   │       │   │   ├── Model
│   │       │   │   │   └── VerifyEmailSignatureComponentsTest.php
│   │       │   │   ├── Util
│   │       │   │   │   └── VerifyEmailQueryTest.php
│   │       │   │   └── VerifyEmailHelperTest.php
│   │       │   └── VerifyEmailTestKernel.php
│   │       ├── tools
│   │       │   ├── php-cs-fixer
│   │       │   │   └── composer.json
│   │       │   ├── phpstan
│   │       │   │   └── composer.json
│   │       │   └── .gitignore
│   │       ├── .gitattributes
│   │       ├── .gitignore
│   │       ├── .php-cs-fixer.dist.php
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       ├── phpstan-baseline.neon
│   │       ├── phpstan.dist.neon
│   │       ├── phpunit.xml.dist
│   │       ├── README.md
│   │       └── UPGRADING.md
│   ├── twig
│   │   ├── extra-bundle
│   │   │   ├── DependencyInjection
│   │   │   │   ├── Compiler
│   │   │   │   │   └── MissingExtensionSuggestorPass.php
│   │   │   │   ├── Configuration.php
│   │   │   │   └── TwigExtraExtension.php
│   │   │   ├── Resources
│   │   │   │   └── config
│   │   │   │       ├── cache.php
│   │   │   │       ├── cssinliner.php
│   │   │   │       ├── html.php
│   │   │   │       ├── inky.php
│   │   │   │       ├── intl.php
│   │   │   │       ├── markdown_league.php
│   │   │   │       ├── markdown.php
│   │   │   │       ├── string.php
│   │   │   │       └── suggestor.php
│   │   │   ├── Tests
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   └── TwigExtraExtensionTest.php
│   │   │   │   ├── Fixture
│   │   │   │   │   ├── views
│   │   │   │   │   │   └── markdown_to_html.html.twig
│   │   │   │   │   └── Kernel.php
│   │   │   │   └── IntegrationTest.php
│   │   │   ├── .gitattributes
│   │   │   ├── .gitignore
│   │   │   ├── composer.json
│   │   │   ├── Extensions.php
│   │   │   ├── LeagueCommonMarkConverterFactory.php
│   │   │   ├── LICENSE
│   │   │   ├── MissingExtensionSuggestor.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── README.md
│   │   │   └── TwigExtraBundle.php
│   │   └── twig
│   │       ├── .github
│   │       │   ├── workflows
│   │       │   │   ├── ci.yml
│   │       │   │   └── documentation.yml
│   │       │   └── dependabot.yml
│   │       ├── bin
│   │       │   └── generate_operators_precedence.php
│   │       ├── doc
│   │       │   ├── _build
│   │       │   │   ├── build.php
│   │       │   │   ├── composer.json
│   │       │   │   └── composer.lock
│   │       │   ├── filters
│   │       │   │   ├── abs.rst
│   │       │   │   ├── batch.rst
│   │       │   │   ├── capitalize.rst
│   │       │   │   ├── column.rst
│   │       │   │   ├── convert_encoding.rst
│   │       │   │   ├── country_name.rst
│   │       │   │   ├── currency_name.rst
│   │       │   │   ├── currency_symbol.rst
│   │       │   │   ├── data_uri.rst
│   │       │   │   ├── date_modify.rst
│   │       │   │   ├── date.rst
│   │       │   │   ├── default.rst
│   │       │   │   ├── escape.rst
│   │       │   │   ├── filter.rst
│   │       │   │   ├── find.rst
│   │       │   │   ├── first.rst
│   │       │   │   ├── format_currency.rst
│   │       │   │   ├── format_date.rst
│   │       │   │   ├── format_datetime.rst
│   │       │   │   ├── format_number.rst
│   │       │   │   ├── format_time.rst
│   │       │   │   ├── format.rst
│   │       │   │   ├── html_to_markdown.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── inky_to_html.rst
│   │       │   │   ├── inline_css.rst
│   │       │   │   ├── invoke.rst
│   │       │   │   ├── join.rst
│   │       │   │   ├── json_encode.rst
│   │       │   │   ├── keys.rst
│   │       │   │   ├── language_name.rst
│   │       │   │   ├── last.rst
│   │       │   │   ├── length.rst
│   │       │   │   ├── locale_name.rst
│   │       │   │   ├── lower.rst
│   │       │   │   ├── map.rst
│   │       │   │   ├── markdown_to_html.rst
│   │       │   │   ├── merge.rst
│   │       │   │   ├── nl2br.rst
│   │       │   │   ├── number_format.rst
│   │       │   │   ├── plural.rst
│   │       │   │   ├── raw.rst
│   │       │   │   ├── reduce.rst
│   │       │   │   ├── replace.rst
│   │       │   │   ├── reverse.rst
│   │       │   │   ├── round.rst
│   │       │   │   ├── shuffle.rst
│   │       │   │   ├── singular.rst
│   │       │   │   ├── slice.rst
│   │       │   │   ├── slug.rst
│   │       │   │   ├── sort.rst
│   │       │   │   ├── spaceless.rst
│   │       │   │   ├── split.rst
│   │       │   │   ├── striptags.rst
│   │       │   │   ├── timezone_name.rst
│   │       │   │   ├── title.rst
│   │       │   │   ├── trim.rst
│   │       │   │   ├── u.rst
│   │       │   │   ├── upper.rst
│   │       │   │   └── url_encode.rst
│   │       │   ├── functions
│   │       │   │   ├── attribute.rst
│   │       │   │   ├── block.rst
│   │       │   │   ├── constant.rst
│   │       │   │   ├── country_names.rst
│   │       │   │   ├── country_timezones.rst
│   │       │   │   ├── currency_names.rst
│   │       │   │   ├── cycle.rst
│   │       │   │   ├── date.rst
│   │       │   │   ├── dump.rst
│   │       │   │   ├── enum_cases.rst
│   │       │   │   ├── enum.rst
│   │       │   │   ├── html_classes.rst
│   │       │   │   ├── html_cva.rst
│   │       │   │   ├── include.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── language_names.rst
│   │       │   │   ├── locale_names.rst
│   │       │   │   ├── max.rst
│   │       │   │   ├── min.rst
│   │       │   │   ├── parent.rst
│   │       │   │   ├── random.rst
│   │       │   │   ├── range.rst
│   │       │   │   ├── script_names.rst
│   │       │   │   ├── source.rst
│   │       │   │   ├── template_from_string.rst
│   │       │   │   └── timezone_names.rst
│   │       │   ├── tags
│   │       │   │   ├── apply.rst
│   │       │   │   ├── autoescape.rst
│   │       │   │   ├── block.rst
│   │       │   │   ├── cache.rst
│   │       │   │   ├── deprecated.rst
│   │       │   │   ├── do.rst
│   │       │   │   ├── embed.rst
│   │       │   │   ├── extends.rst
│   │       │   │   ├── flush.rst
│   │       │   │   ├── for.rst
│   │       │   │   ├── from.rst
│   │       │   │   ├── guard.rst
│   │       │   │   ├── if.rst
│   │       │   │   ├── import.rst
│   │       │   │   ├── include.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── macro.rst
│   │       │   │   ├── sandbox.rst
│   │       │   │   ├── set.rst
│   │       │   │   ├── types.rst
│   │       │   │   ├── use.rst
│   │       │   │   ├── verbatim.rst
│   │       │   │   └── with.rst
│   │       │   ├── tests
│   │       │   │   ├── constant.rst
│   │       │   │   ├── defined.rst
│   │       │   │   ├── divisibleby.rst
│   │       │   │   ├── empty.rst
│   │       │   │   ├── even.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── iterable.rst
│   │       │   │   ├── mapping.rst
│   │       │   │   ├── null.rst
│   │       │   │   ├── odd.rst
│   │       │   │   ├── sameas.rst
│   │       │   │   └── sequence.rst
│   │       │   ├── .doctor-rst.yaml
│   │       │   ├── advanced.rst
│   │       │   ├── api.rst
│   │       │   ├── coding_standards.rst
│   │       │   ├── deprecated.rst
│   │       │   ├── index.rst
│   │       │   ├── installation.rst
│   │       │   ├── internals.rst
│   │       │   ├── intro.rst
│   │       │   ├── operators_precedence.rst
│   │       │   ├── recipes.rst
│   │       │   ├── sandbox.rst
│   │       │   └── templates.rst
│   │       ├── extra
│   │       │   ├── cache-extra
│   │       │   │   ├── Node
│   │       │   │   │   └── CacheNode.php
│   │       │   │   ├── Tests
│   │       │   │   │   ├── Fixtures
│   │       │   │   │   │   ├── cache_complex.test
│   │       │   │   │   │   ├── cache_with_blocks.test
│   │       │   │   │   │   ├── cache.test
│   │       │   │   │   │   └── macro.test
│   │       │   │   │   ├── FunctionalTest.php
│   │       │   │   │   └── IntegrationTest.php
│   │       │   │   ├── TokenParser
│   │       │   │   │   └── CacheTokenParser.php
│   │       │   │   ├── .gitattributes
│   │       │   │   ├── .gitignore
│   │       │   │   ├── CacheExtension.php
│   │       │   │   ├── CacheRuntime.php
│   │       │   │   ├── composer.json
│   │       │   │   ├── LICENSE
│   │       │   │   ├── phpunit.xml.dist
│   │       │   │   └── README.md
│   │       │   ├── cssinliner-extra
│   │       │   │   ├── Resources
│   │       │   │   │   └── functions.php
│   │       │   │   ├── Tests
│   │       │   │   │   ├── Fixtures
│   │       │   │   │   │   └── inline_css.test
│   │       │   │   │   ├── IntegrationTest.php
│   │       │   │   │   └── LegacyFunctionsTest.php
│   │       │   │   ├── .gitattributes
│   │       │   │   ├── .gitignore
│   │       │   │   ├── composer.json
│   │       │   │   ├── CssInlinerExtension.php
│   │       │   │   ├── LICENSE
│   │       │   │   ├── phpunit.xml.dist
│   │       │   │   └── README.md
│   │       │   ├── html-extra
│   │       │   │   ├── Resources
│   │       │   │   │   └── functions.php
│   │       │   │   ├── Tests
│   │       │   │   │   ├── Fixtures
│   │       │   │   │   │   ├── data_uri.test
│   │       │   │   │   │   ├── html_classes_with_unsupported_arg.test
│   │       │   │   │   │   ├── html_classes_with_unsupported_key.test
│   │       │   │   │   │   ├── html_classes.test
│   │       │   │   │   │   ├── html_cva_pass_to_template.test
│   │       │   │   │   │   └── html_cva.test
│   │       │   │   │   ├── CvaTest.php
│   │       │   │   │   ├── IntegrationTest.php
│   │       │   │   │   └── LegacyFunctionsTest.php
│   │       │   │   ├── .gitattributes
│   │       │   │   ├── .gitignore
│   │       │   │   ├── composer.json
│   │       │   │   ├── Cva.php
│   │       │   │   ├── HtmlExtension.php
│   │       │   │   ├── LICENSE
│   │       │   │   ├── phpunit.xml.dist
│   │       │   │   └── README.md
│   │       │   ├── inky-extra
│   │       │   │   ├── Resources
│   │       │   │   │   └── functions.php
│   │       │   │   ├── Tests
│   │       │   │   │   ├── Fixtures
│   │       │   │   │   │   └── inky.test
│   │       │   │   │   ├── IntegrationTest.php
│   │       │   │   │   └── LegacyFunctionsTest.php
│   │       │   │   ├── .gitattributes
│   │       │   │   ├── .gitignore
│   │       │   │   ├── composer.json
│   │       │   │   ├── InkyExtension.php
│   │       │   │   ├── LICENSE
│   │       │   │   ├── phpunit.xml.dist
│   │       │   │   └── README.md
│   │       │   ├── intl-extra
│   │       │   │   ├── Tests
│   │       │   │   │   ├── Fixtures
│   │       │   │   │   │   ├── country_name.test
│   │       │   │   │   │   ├── country_names.test
│   │       │   │   │   │   ├── country_timezones.test
│   │       │   │   │   │   ├── currency_name.test
│   │       │   │   │   │   ├── currency_names.test
│   │       │   │   │   │   ├── currency_symbol.test
│   │       │   │   │   │   ├── format_currency.test
│   │       │   │   │   │   ├── format_date_ICU72.test
│   │       │   │   │   │   ├── format_date_php8_ICU72.test
│   │       │   │   │   │   ├── format_date_php8.test
│   │       │   │   │   │   ├── format_date.test
│   │       │   │   │   │   ├── format_number.test
│   │       │   │   │   │   ├── language_name.test
│   │       │   │   │   │   ├── language_names.test
│   │       │   │   │   │   ├── locale_name.test
│   │       │   │   │   │   ├── locale_names.test
│   │       │   │   │   │   ├── script_names.test
│   │       │   │   │   │   ├── timezone_name.test
│   │       │   │   │   │   └── timezone_names.test
│   │       │   │   │   ├── IntegrationTest.php
│   │       │   │   │   └── IntlExtensionTest.php
│   │       │   │   ├── .gitattributes
│   │       │   │   ├── .gitignore
│   │       │   │   ├── composer.json
│   │       │   │   ├── IntlExtension.php
│   │       │   │   ├── LICENSE
│   │       │   │   ├── phpunit.xml.dist
│   │       │   │   └── README.md
│   │       │   ├── markdown-extra
│   │       │   │   ├── Resources
│   │       │   │   │   └── functions.php
│   │       │   │   ├── Tests
│   │       │   │   │   ├── Fixtures
│   │       │   │   │   │   └── html_to_markdown.test
│   │       │   │   │   ├── FunctionalTest.php
│   │       │   │   │   ├── IntegrationTest.php
│   │       │   │   │   └── LegacyFunctionsTest.php
│   │       │   │   ├── .gitattributes
│   │       │   │   ├── .gitignore
│   │       │   │   ├── composer.json
│   │       │   │   ├── DefaultMarkdown.php
│   │       │   │   ├── ErusevMarkdown.php
│   │       │   │   ├── LeagueMarkdown.php
│   │       │   │   ├── LICENSE
│   │       │   │   ├── MarkdownExtension.php
│   │       │   │   ├── MarkdownInterface.php
│   │       │   │   ├── MarkdownRuntime.php
│   │       │   │   ├── MichelfMarkdown.php
│   │       │   │   ├── phpunit.xml.dist
│   │       │   │   └── README.md
│   │       │   ├── string-extra
│   │       │   │   ├── Tests
│   │       │   │   │   ├── Fixtures
│   │       │   │   │   │   ├── plural_es.test
│   │       │   │   │   │   ├── plural-invalid-language.test
│   │       │   │   │   │   ├── plural.test
│   │       │   │   │   │   ├── singular_es.test
│   │       │   │   │   │   ├── singular-invalid-language.test
│   │       │   │   │   │   ├── singular.test
│   │       │   │   │   │   ├── slug.test
│   │       │   │   │   │   └── string.test
│   │       │   │   │   └── IntegrationTest.php
│   │       │   │   ├── .gitattributes
│   │       │   │   ├── .gitignore
│   │       │   │   ├── composer.json
│   │       │   │   ├── LICENSE
│   │       │   │   ├── phpunit.xml.dist
│   │       │   │   ├── README.md
│   │       │   │   └── StringExtension.php
│   │       │   └── twig-extra-bundle
│   │       │       ├── DependencyInjection
│   │       │       │   ├── Compiler
│   │       │       │   │   └── MissingExtensionSuggestorPass.php
│   │       │       │   ├── Configuration.php
│   │       │       │   └── TwigExtraExtension.php
│   │       │       ├── Resources
│   │       │       │   └── config
│   │       │       │       ├── cache.php
│   │       │       │       ├── cssinliner.php
│   │       │       │       ├── html.php
│   │       │       │       ├── inky.php
│   │       │       │       ├── intl.php
│   │       │       │       ├── markdown_league.php
│   │       │       │       ├── markdown.php
│   │       │       │       ├── string.php
│   │       │       │       └── suggestor.php
│   │       │       ├── Tests
│   │       │       │   ├── DependencyInjection
│   │       │       │   │   └── TwigExtraExtensionTest.php
│   │       │       │   ├── Fixture
│   │       │       │   │   ├── views
│   │       │       │   │   │   └── markdown_to_html.html.twig
│   │       │       │   │   └── Kernel.php
│   │       │       │   └── IntegrationTest.php
│   │       │       ├── .gitattributes
│   │       │       ├── .gitignore
│   │       │       ├── composer.json
│   │       │       ├── Extensions.php
│   │       │       ├── LeagueCommonMarkConverterFactory.php
│   │       │       ├── LICENSE
│   │       │       ├── MissingExtensionSuggestor.php
│   │       │       ├── phpunit.xml.dist
│   │       │       ├── README.md
│   │       │       └── TwigExtraBundle.php
│   │       ├── src
│   │       │   ├── Attribute
│   │       │   │   ├── AsTwigFilter.php
│   │       │   │   ├── AsTwigFunction.php
│   │       │   │   ├── AsTwigTest.php
│   │       │   │   ├── FirstClassTwigCallableReady.php
│   │       │   │   └── YieldReady.php
│   │       │   ├── Cache
│   │       │   │   ├── CacheInterface.php
│   │       │   │   ├── ChainCache.php
│   │       │   │   ├── FilesystemCache.php
│   │       │   │   ├── NullCache.php
│   │       │   │   ├── ReadOnlyFilesystemCache.php
│   │       │   │   └── RemovableCacheInterface.php
│   │       │   ├── Error
│   │       │   │   ├── Error.php
│   │       │   │   ├── LoaderError.php
│   │       │   │   ├── RuntimeError.php
│   │       │   │   └── SyntaxError.php
│   │       │   ├── ExpressionParser
│   │       │   │   ├── Infix
│   │       │   │   │   ├── ArgumentsTrait.php
│   │       │   │   │   ├── ArrowExpressionParser.php
│   │       │   │   │   ├── BinaryOperatorExpressionParser.php
│   │       │   │   │   ├── ConditionalTernaryExpressionParser.php
│   │       │   │   │   ├── DotExpressionParser.php
│   │       │   │   │   ├── FilterExpressionParser.php
│   │       │   │   │   ├── FunctionExpressionParser.php
│   │       │   │   │   ├── IsExpressionParser.php
│   │       │   │   │   ├── IsNotExpressionParser.php
│   │       │   │   │   └── SquareBracketExpressionParser.php
│   │       │   │   ├── Prefix
│   │       │   │   │   ├── GroupingExpressionParser.php
│   │       │   │   │   ├── LiteralExpressionParser.php
│   │       │   │   │   └── UnaryOperatorExpressionParser.php
│   │       │   │   ├── AbstractExpressionParser.php
│   │       │   │   ├── ExpressionParserDescriptionInterface.php
│   │       │   │   ├── ExpressionParserInterface.php
│   │       │   │   ├── ExpressionParsers.php
│   │       │   │   ├── ExpressionParserType.php
│   │       │   │   ├── InfixAssociativity.php
│   │       │   │   ├── InfixExpressionParserInterface.php
│   │       │   │   ├── PrecedenceChange.php
│   │       │   │   └── PrefixExpressionParserInterface.php
│   │       │   ├── Extension
│   │       │   │   ├── AbstractExtension.php
│   │       │   │   ├── AttributeExtension.php
│   │       │   │   ├── CoreExtension.php
│   │       │   │   ├── DebugExtension.php
│   │       │   │   ├── EscaperExtension.php
│   │       │   │   ├── ExtensionInterface.php
│   │       │   │   ├── GlobalsInterface.php
│   │       │   │   ├── LastModifiedExtensionInterface.php
│   │       │   │   ├── OptimizerExtension.php
│   │       │   │   ├── ProfilerExtension.php
│   │       │   │   ├── RuntimeExtensionInterface.php
│   │       │   │   ├── SandboxExtension.php
│   │       │   │   ├── StagingExtension.php
│   │       │   │   ├── StringLoaderExtension.php
│   │       │   │   └── YieldNotReadyExtension.php
│   │       │   ├── Loader
│   │       │   │   ├── ArrayLoader.php
│   │       │   │   ├── ChainLoader.php
│   │       │   │   ├── FilesystemLoader.php
│   │       │   │   └── LoaderInterface.php
│   │       │   ├── Node
│   │       │   │   ├── Expression
│   │       │   │   │   ├── Binary
│   │       │   │   │   │   ├── AbstractBinary.php
│   │       │   │   │   │   ├── AddBinary.php
│   │       │   │   │   │   ├── AndBinary.php
│   │       │   │   │   │   ├── BinaryInterface.php
│   │       │   │   │   │   ├── BitwiseAndBinary.php
│   │       │   │   │   │   ├── BitwiseOrBinary.php
│   │       │   │   │   │   ├── BitwiseXorBinary.php
│   │       │   │   │   │   ├── ConcatBinary.php
│   │       │   │   │   │   ├── DivBinary.php
│   │       │   │   │   │   ├── ElvisBinary.php
│   │       │   │   │   │   ├── EndsWithBinary.php
│   │       │   │   │   │   ├── EqualBinary.php
│   │       │   │   │   │   ├── FloorDivBinary.php
│   │       │   │   │   │   ├── GreaterBinary.php
│   │       │   │   │   │   ├── GreaterEqualBinary.php
│   │       │   │   │   │   ├── HasEveryBinary.php
│   │       │   │   │   │   ├── HasSomeBinary.php
│   │       │   │   │   │   ├── InBinary.php
│   │       │   │   │   │   ├── LessBinary.php
│   │       │   │   │   │   ├── LessEqualBinary.php
│   │       │   │   │   │   ├── MatchesBinary.php
│   │       │   │   │   │   ├── ModBinary.php
│   │       │   │   │   │   ├── MulBinary.php
│   │       │   │   │   │   ├── NotEqualBinary.php
│   │       │   │   │   │   ├── NotInBinary.php
│   │       │   │   │   │   ├── NullCoalesceBinary.php
│   │       │   │   │   │   ├── OrBinary.php
│   │       │   │   │   │   ├── PowerBinary.php
│   │       │   │   │   │   ├── RangeBinary.php
│   │       │   │   │   │   ├── SpaceshipBinary.php
│   │       │   │   │   │   ├── StartsWithBinary.php
│   │       │   │   │   │   ├── SubBinary.php
│   │       │   │   │   │   └── XorBinary.php
│   │       │   │   │   ├── Filter
│   │       │   │   │   │   ├── DefaultFilter.php
│   │       │   │   │   │   └── RawFilter.php
│   │       │   │   │   ├── FunctionNode
│   │       │   │   │   │   ├── EnumCasesFunction.php
│   │       │   │   │   │   └── EnumFunction.php
│   │       │   │   │   ├── Ternary
│   │       │   │   │   │   └── ConditionalTernary.php
│   │       │   │   │   ├── Test
│   │       │   │   │   │   ├── ConstantTest.php
│   │       │   │   │   │   ├── DefinedTest.php
│   │       │   │   │   │   ├── DivisiblebyTest.php
│   │       │   │   │   │   ├── EvenTest.php
│   │       │   │   │   │   ├── NullTest.php
│   │       │   │   │   │   ├── OddTest.php
│   │       │   │   │   │   ├── SameasTest.php
│   │       │   │   │   │   └── TrueTest.php
│   │       │   │   │   ├── Unary
│   │       │   │   │   │   ├── AbstractUnary.php
│   │       │   │   │   │   ├── NegUnary.php
│   │       │   │   │   │   ├── NotUnary.php
│   │       │   │   │   │   ├── PosUnary.php
│   │       │   │   │   │   ├── SpreadUnary.php
│   │       │   │   │   │   ├── StringCastUnary.php
│   │       │   │   │   │   └── UnaryInterface.php
│   │       │   │   │   ├── Variable
│   │       │   │   │   │   ├── AssignContextVariable.php
│   │       │   │   │   │   ├── AssignTemplateVariable.php
│   │       │   │   │   │   ├── ContextVariable.php
│   │       │   │   │   │   ├── LocalVariable.php
│   │       │   │   │   │   └── TemplateVariable.php
│   │       │   │   │   ├── AbstractExpression.php
│   │       │   │   │   ├── ArrayExpression.php
│   │       │   │   │   ├── ArrowFunctionExpression.php
│   │       │   │   │   ├── AssignNameExpression.php
│   │       │   │   │   ├── BlockReferenceExpression.php
│   │       │   │   │   ├── CallExpression.php
│   │       │   │   │   ├── ConditionalExpression.php
│   │       │   │   │   ├── ConstantExpression.php
│   │       │   │   │   ├── FilterExpression.php
│   │       │   │   │   ├── FunctionExpression.php
│   │       │   │   │   ├── GetAttrExpression.php
│   │       │   │   │   ├── InlinePrint.php
│   │       │   │   │   ├── ListExpression.php
│   │       │   │   │   ├── MacroReferenceExpression.php
│   │       │   │   │   ├── MethodCallExpression.php
│   │       │   │   │   ├── NameExpression.php
│   │       │   │   │   ├── NullCoalesceExpression.php
│   │       │   │   │   ├── OperatorEscapeInterface.php
│   │       │   │   │   ├── ParentExpression.php
│   │       │   │   │   ├── ReturnArrayInterface.php
│   │       │   │   │   ├── ReturnBoolInterface.php
│   │       │   │   │   ├── ReturnNumberInterface.php
│   │       │   │   │   ├── ReturnPrimitiveTypeInterface.php
│   │       │   │   │   ├── ReturnStringInterface.php
│   │       │   │   │   ├── SupportDefinedTestDeprecationTrait.php
│   │       │   │   │   ├── SupportDefinedTestInterface.php
│   │       │   │   │   ├── SupportDefinedTestTrait.php
│   │       │   │   │   ├── TempNameExpression.php
│   │       │   │   │   ├── TestExpression.php
│   │       │   │   │   └── VariadicExpression.php
│   │       │   │   ├── AutoEscapeNode.php
│   │       │   │   ├── BlockNode.php
│   │       │   │   ├── BlockReferenceNode.php
│   │       │   │   ├── BodyNode.php
│   │       │   │   ├── CaptureNode.php
│   │       │   │   ├── CheckSecurityCallNode.php
│   │       │   │   ├── CheckSecurityNode.php
│   │       │   │   ├── CheckToStringNode.php
│   │       │   │   ├── DeprecatedNode.php
│   │       │   │   ├── DoNode.php
│   │       │   │   ├── EmbedNode.php
│   │       │   │   ├── EmptyNode.php
│   │       │   │   ├── FlushNode.php
│   │       │   │   ├── ForElseNode.php
│   │       │   │   ├── ForLoopNode.php
│   │       │   │   ├── ForNode.php
│   │       │   │   ├── IfNode.php
│   │       │   │   ├── ImportNode.php
│   │       │   │   ├── IncludeNode.php
│   │       │   │   ├── MacroNode.php
│   │       │   │   ├── ModuleNode.php
│   │       │   │   ├── NameDeprecation.php
│   │       │   │   ├── Node.php
│   │       │   │   ├── NodeCaptureInterface.php
│   │       │   │   ├── NodeOutputInterface.php
│   │       │   │   ├── Nodes.php
│   │       │   │   ├── PrintNode.php
│   │       │   │   ├── SandboxNode.php
│   │       │   │   ├── SetNode.php
│   │       │   │   ├── TextNode.php
│   │       │   │   ├── TypesNode.php
│   │       │   │   └── WithNode.php
│   │       │   ├── NodeVisitor
│   │       │   │   ├── AbstractNodeVisitor.php
│   │       │   │   ├── EscaperNodeVisitor.php
│   │       │   │   ├── NodeVisitorInterface.php
│   │       │   │   ├── OptimizerNodeVisitor.php
│   │       │   │   ├── SafeAnalysisNodeVisitor.php
│   │       │   │   ├── SandboxNodeVisitor.php
│   │       │   │   └── YieldNotReadyNodeVisitor.php
│   │       │   ├── Profiler
│   │       │   │   ├── Dumper
│   │       │   │   │   ├── BaseDumper.php
│   │       │   │   │   ├── BlackfireDumper.php
│   │       │   │   │   ├── HtmlDumper.php
│   │       │   │   │   └── TextDumper.php
│   │       │   │   ├── Node
│   │       │   │   │   ├── EnterProfileNode.php
│   │       │   │   │   └── LeaveProfileNode.php
│   │       │   │   ├── NodeVisitor
│   │       │   │   │   └── ProfilerNodeVisitor.php
│   │       │   │   └── Profile.php
│   │       │   ├── Resources
│   │       │   │   ├── core.php
│   │       │   │   ├── debug.php
│   │       │   │   ├── escaper.php
│   │       │   │   └── string_loader.php
│   │       │   ├── Runtime
│   │       │   │   └── EscaperRuntime.php
│   │       │   ├── RuntimeLoader
│   │       │   │   ├── ContainerRuntimeLoader.php
│   │       │   │   ├── FactoryRuntimeLoader.php
│   │       │   │   └── RuntimeLoaderInterface.php
│   │       │   ├── Sandbox
│   │       │   │   ├── SecurityError.php
│   │       │   │   ├── SecurityNotAllowedFilterError.php
│   │       │   │   ├── SecurityNotAllowedFunctionError.php
│   │       │   │   ├── SecurityNotAllowedMethodError.php
│   │       │   │   ├── SecurityNotAllowedPropertyError.php
│   │       │   │   ├── SecurityNotAllowedTagError.php
│   │       │   │   ├── SecurityPolicy.php
│   │       │   │   ├── SecurityPolicyInterface.php
│   │       │   │   └── SourcePolicyInterface.php
│   │       │   ├── Test
│   │       │   │   ├── IntegrationTestCase.php
│   │       │   │   └── NodeTestCase.php
│   │       │   ├── TokenParser
│   │       │   │   ├── AbstractTokenParser.php
│   │       │   │   ├── ApplyTokenParser.php
│   │       │   │   ├── AutoEscapeTokenParser.php
│   │       │   │   ├── BlockTokenParser.php
│   │       │   │   ├── DeprecatedTokenParser.php
│   │       │   │   ├── DoTokenParser.php
│   │       │   │   ├── EmbedTokenParser.php
│   │       │   │   ├── ExtendsTokenParser.php
│   │       │   │   ├── FlushTokenParser.php
│   │       │   │   ├── ForTokenParser.php
│   │       │   │   ├── FromTokenParser.php
│   │       │   │   ├── GuardTokenParser.php
│   │       │   │   ├── IfTokenParser.php
│   │       │   │   ├── ImportTokenParser.php
│   │       │   │   ├── IncludeTokenParser.php
│   │       │   │   ├── MacroTokenParser.php
│   │       │   │   ├── SandboxTokenParser.php
│   │       │   │   ├── SetTokenParser.php
│   │       │   │   ├── TokenParserInterface.php
│   │       │   │   ├── TypesTokenParser.php
│   │       │   │   ├── UseTokenParser.php
│   │       │   │   └── WithTokenParser.php
│   │       │   ├── Util
│   │       │   │   ├── CallableArgumentsExtractor.php
│   │       │   │   ├── DeprecationCollector.php
│   │       │   │   ├── ReflectionCallable.php
│   │       │   │   └── TemplateDirIterator.php
│   │       │   ├── AbstractTwigCallable.php
│   │       │   ├── Compiler.php
│   │       │   ├── DeprecatedCallableInfo.php
│   │       │   ├── Environment.php
│   │       │   ├── ExpressionParser.php
│   │       │   ├── ExtensionSet.php
│   │       │   ├── FileExtensionEscapingStrategy.php
│   │       │   ├── Lexer.php
│   │       │   ├── Markup.php
│   │       │   ├── NodeTraverser.php
│   │       │   ├── OperatorPrecedenceChange.php
│   │       │   ├── Parser.php
│   │       │   ├── Source.php
│   │       │   ├── Template.php
│   │       │   ├── TemplateWrapper.php
│   │       │   ├── Token.php
│   │       │   ├── TokenStream.php
│   │       │   ├── TwigCallableInterface.php
│   │       │   ├── TwigFilter.php
│   │       │   ├── TwigFunction.php
│   │       │   └── TwigTest.php
│   │       ├── tests
│   │       │   ├── Cache
│   │       │   │   ├── ChainTest.php
│   │       │   │   ├── FilesystemTest.php
│   │       │   │   └── ReadOnlyFilesystemTest.php
│   │       │   ├── Extension
│   │       │   │   ├── Fixtures
│   │       │   │   │   ├── ExtensionWithAttributes.php
│   │       │   │   │   ├── FilterWithoutValue.php
│   │       │   │   │   └── TestWithoutValue.php
│   │       │   │   ├── AttributeExtensionTest.php
│   │       │   │   ├── CoreTest.php
│   │       │   │   ├── EscaperTest.php
│   │       │   │   ├── LegacyDebugFunctionsTest.php
│   │       │   │   ├── LegacyStringLoaderFunctionsTest.php
│   │       │   │   ├── SandboxTest.php
│   │       │   │   └── StringLoaderExtensionTest.php
│   │       │   ├── Fixtures
│   │       │   │   ├── autoescape
│   │       │   │   │   ├── block.test
│   │       │   │   │   └── name.test
│   │       │   │   ├── errors
│   │       │   │   │   ├── extends
│   │       │   │   │   │   ├── include.twig
│   │       │   │   │   │   └── index.twig
│   │       │   │   │   ├── base.html
│   │       │   │   │   ├── index.html
│   │       │   │   │   ├── no_line_and_context_exception_include_line_1.twig
│   │       │   │   │   ├── no_line_and_context_exception_include_line_5.twig
│   │       │   │   │   └── no_line_and_context_exception.twig
│   │       │   │   ├── exceptions
│   │       │   │   │   ├── child_contents_outside_blocks.test
│   │       │   │   │   ├── exception_in_extension_extends.test
│   │       │   │   │   ├── exception_in_extension_include.test
│   │       │   │   │   ├── multiline_array_with_undefined_variable_again.test
│   │       │   │   │   ├── multiline_array_with_undefined_variable.test
│   │       │   │   │   ├── multiline_function_with_undefined_variable.test
│   │       │   │   │   ├── multiline_function_with_unknown_argument.test
│   │       │   │   │   ├── multiline_tag_with_undefined_variable.test
│   │       │   │   │   ├── strict_comparison_operator.test
│   │       │   │   │   ├── syntax_error_in_reused_template.test
│   │       │   │   │   ├── unclosed_tag.test
│   │       │   │   │   ├── undefined_parent.test
│   │       │   │   │   ├── undefined_template_in_child_template.test
│   │       │   │   │   └── undefined_trait.test
│   │       │   │   ├── expressions
│   │       │   │   │   ├── _self.test
│   │       │   │   │   ├── array_call.test
│   │       │   │   │   ├── array.test
│   │       │   │   │   ├── attributes.test
│   │       │   │   │   ├── binary.test
│   │       │   │   │   ├── bitwise.test
│   │       │   │   │   ├── call_argument_defined_twice.test
│   │       │   │   │   ├── call_argument_unpacking_before_normal.test
│   │       │   │   │   ├── call_argument_unpacking.test
│   │       │   │   │   ├── call_positional_arg_after_named_arg.test
│   │       │   │   │   ├── comparison_precedence.test
│   │       │   │   │   ├── comparison.test
│   │       │   │   │   ├── const.test
│   │       │   │   │   ├── divisibleby.test
│   │       │   │   │   ├── dot_as_concatenation.test
│   │       │   │   │   ├── dotdot.test
│   │       │   │   │   ├── dynamic_attribute.test
│   │       │   │   │   ├── ends_with.test
│   │       │   │   │   ├── exponential_numbers.test
│   │       │   │   │   ├── floats.test
│   │       │   │   │   ├── grouping.test
│   │       │   │   │   ├── has_every.test
│   │       │   │   │   ├── has_some.test
│   │       │   │   │   ├── literals.test
│   │       │   │   │   ├── magic_call.test
│   │       │   │   │   ├── matches_error_compilation.test
│   │       │   │   │   ├── matches_error_runtime.test
│   │       │   │   │   ├── matches.test
│   │       │   │   │   ├── method_call.test
│   │       │   │   │   ├── negative_numbers.test
│   │       │   │   │   ├── not_arrow_fn.test
│   │       │   │   │   ├── not.test
│   │       │   │   │   ├── operators_as_variables.test
│   │       │   │   │   ├── postfix.test
│   │       │   │   │   ├── power.test
│   │       │   │   │   ├── sameas.test
│   │       │   │   │   ├── spread_array_operator.test
│   │       │   │   │   ├── spread_mapping_operator.test
│   │       │   │   │   ├── starts_with.test
│   │       │   │   │   ├── string_operator_as_var_assignment.test
│   │       │   │   │   ├── strings.test
│   │       │   │   │   ├── ternary_operator_noelse.test
│   │       │   │   │   ├── ternary_operator_nothen.test
│   │       │   │   │   ├── ternary_operator.test
│   │       │   │   │   ├── two_word_operators_as_variables.test
│   │       │   │   │   ├── unary_macro_arguments.test
│   │       │   │   │   ├── unary_precedence.test
│   │       │   │   │   ├── unary.test
│   │       │   │   │   ├── underscored_numbers_error.test
│   │       │   │   │   └── underscored_numbers.test
│   │       │   │   ├── extensions
│   │       │   │   │   └── anonymous_functions.test
│   │       │   │   ├── filters
│   │       │   │   │   ├── abs.test
│   │       │   │   │   ├── arrow_reserved_names.test
│   │       │   │   │   ├── batch_float.test
│   │       │   │   │   ├── batch_with_empty_fill.test
│   │       │   │   │   ├── batch_with_exact_elements.test
│   │       │   │   │   ├── batch_with_fill.test
│   │       │   │   │   ├── batch_with_keys.test
│   │       │   │   │   ├── batch_with_more_elements.test
│   │       │   │   │   ├── batch_with_zero_elements.test
│   │       │   │   │   ├── batch.test
│   │       │   │   │   ├── capitalize.test
│   │       │   │   │   ├── column.test
│   │       │   │   │   ├── convert_encoding.test
│   │       │   │   │   ├── date_default_format_interval.test
│   │       │   │   │   ├── date_default_format.test
│   │       │   │   │   ├── date_immutable.test
│   │       │   │   │   ├── date_interval.test
│   │       │   │   │   ├── date_modify.test
│   │       │   │   │   ├── date_namedargs.test
│   │       │   │   │   ├── date_time_zone_conversion.test
│   │       │   │   │   ├── date.test
│   │       │   │   │   ├── default.test
│   │       │   │   │   ├── dynamic_filter.test
│   │       │   │   │   ├── escape_html_attr.test
│   │       │   │   │   ├── escape_javascript.test
│   │       │   │   │   ├── escape_non_supported_charset.test
│   │       │   │   │   ├── escape.test
│   │       │   │   │   ├── filter.test
│   │       │   │   │   ├── find.test
│   │       │   │   │   ├── first.test
│   │       │   │   │   ├── force_escape.test
│   │       │   │   │   ├── format.test
│   │       │   │   │   ├── invoke.test
│   │       │   │   │   ├── join.test
│   │       │   │   │   ├── json_encode.test
│   │       │   │   │   ├── last.test
│   │       │   │   │   ├── length_utf8.test
│   │       │   │   │   ├── length.test
│   │       │   │   │   ├── lower.test
│   │       │   │   │   ├── map.test
│   │       │   │   │   ├── merge.test
│   │       │   │   │   ├── nl2br.test
│   │       │   │   │   ├── number_format_default.test
│   │       │   │   │   ├── number_format.test
│   │       │   │   │   ├── raw.test
│   │       │   │   │   ├── reduce_key.test
│   │       │   │   │   ├── reduce.test
│   │       │   │   │   ├── replace_invalid_arg.test
│   │       │   │   │   ├── replace.test
│   │       │   │   │   ├── reverse.test
│   │       │   │   │   ├── round.test
│   │       │   │   │   ├── shuffle.test
│   │       │   │   │   ├── slice.test
│   │       │   │   │   ├── sort_with_arrow.test
│   │       │   │   │   ├── sort.test
│   │       │   │   │   ├── spaceless.legacy.test
│   │       │   │   │   ├── special_chars.test
│   │       │   │   │   ├── split_utf8.test
│   │       │   │   │   ├── split.test
│   │       │   │   │   ├── static_calls.test
│   │       │   │   │   ├── striptags.test
│   │       │   │   │   ├── title.test
│   │       │   │   │   ├── trailing_commas.test
│   │       │   │   │   ├── trim.test
│   │       │   │   │   ├── upper.test
│   │       │   │   │   └── urlencode.test
│   │       │   │   ├── functions
│   │       │   │   │   ├── enum
│   │       │   │   │   │   ├── invalid_dynamic_enum.test
│   │       │   │   │   │   ├── invalid_enum_escaping.test
│   │       │   │   │   │   ├── invalid_enum.test
│   │       │   │   │   │   ├── invalid_literal_type.test
│   │       │   │   │   │   └── valid.test
│   │       │   │   │   ├── enum_cases
│   │       │   │   │   │   ├── invalid_dynamic_enum.test
│   │       │   │   │   │   ├── invalid_enum_escaping.test
│   │       │   │   │   │   ├── invalid_enum.test
│   │       │   │   │   │   ├── invalid_literal_type.test
│   │       │   │   │   │   └── valid.test
│   │       │   │   │   ├── include
│   │       │   │   │   │   ├── assignment.test
│   │       │   │   │   │   ├── autoescaping.test
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── expression.test
│   │       │   │   │   │   ├── ignore_missing_exists.test
│   │       │   │   │   │   ├── ignore_missing.test
│   │       │   │   │   │   ├── include_missing_extends.test
│   │       │   │   │   │   ├── missing_nested.test
│   │       │   │   │   │   ├── missing.test
│   │       │   │   │   │   ├── sandbox_disabling_ignore_missing.test
│   │       │   │   │   │   ├── sandbox_disabling.test
│   │       │   │   │   │   ├── sandbox.test
│   │       │   │   │   │   ├── template_instance.test
│   │       │   │   │   │   ├── templates_as_array.test
│   │       │   │   │   │   ├── with_context.test
│   │       │   │   │   │   └── with_variables.test
│   │       │   │   │   ├── attribute_with_wrong_args.legacy.test
│   │       │   │   │   ├── attribute.legacy.test
│   │       │   │   │   ├── block_with_template.test
│   │       │   │   │   ├── block_without_name.test
│   │       │   │   │   ├── block_without_parent.test
│   │       │   │   │   ├── block.test
│   │       │   │   │   ├── constant.test
│   │       │   │   │   ├── cycle_empty_mapping.test
│   │       │   │   │   ├── cycle_empty_sequence.test
│   │       │   │   │   ├── cycle_without_enough_args.test
│   │       │   │   │   ├── cycle.test
│   │       │   │   │   ├── date_namedargs.test
│   │       │   │   │   ├── date.test
│   │       │   │   │   ├── deprecated.test
│   │       │   │   │   ├── dump_array.test
│   │       │   │   │   ├── dump.test
│   │       │   │   │   ├── dynamic_function.test
│   │       │   │   │   ├── include_template_from_string.test
│   │       │   │   │   ├── magic_call.test
│   │       │   │   │   ├── magic_static_call.test
│   │       │   │   │   ├── max_without_args.test
│   │       │   │   │   ├── max.test
│   │       │   │   │   ├── min.test
│   │       │   │   │   ├── parent_in_condition.test
│   │       │   │   │   ├── parent_outside_of_a_block.test
│   │       │   │   │   ├── range.test
│   │       │   │   │   ├── recursive_block_with_inheritance.test
│   │       │   │   │   ├── source.test
│   │       │   │   │   ├── special_chars.test
│   │       │   │   │   ├── static_calls.test
│   │       │   │   │   ├── template_from_string_error_php80.test
│   │       │   │   │   ├── template_from_string_error.test
│   │       │   │   │   ├── template_from_string.test
│   │       │   │   │   ├── trailing_commas.test
│   │       │   │   │   ├── undefined_block_deep.test
│   │       │   │   │   └── undefined_block.test
│   │       │   │   ├── macros
│   │       │   │   │   ├── arrow_as_arg.test
│   │       │   │   │   ├── default_values.test
│   │       │   │   │   ├── macro_with_capture.test
│   │       │   │   │   ├── nested_calls.test
│   │       │   │   │   ├── reserved_variables.test
│   │       │   │   │   ├── simple.test
│   │       │   │   │   ├── trailing_commas.test
│   │       │   │   │   ├── unknown_macro_different_template.test
│   │       │   │   │   ├── unknown_macro.test
│   │       │   │   │   ├── varargs_argument.test
│   │       │   │   │   ├── varargs.test
│   │       │   │   │   └── with_filters.test
│   │       │   │   ├── operators
│   │       │   │   │   ├── concat_vs_add_sub.test
│   │       │   │   │   ├── contat_vs_add_sub.legacy.test
│   │       │   │   │   ├── minus_vs_pipe.legacy.test
│   │       │   │   │   ├── not_precedence.legacy.test
│   │       │   │   │   └── not_precedence.test
│   │       │   │   ├── regression
│   │       │   │   │   ├── 4029-iterator_to_array.test
│   │       │   │   │   ├── 4033-missing-unwrap.test
│   │       │   │   │   ├── block_names_unicity.test
│   │       │   │   │   ├── combined_debug_info.test
│   │       │   │   │   ├── empty_token.test
│   │       │   │   │   ├── markup_test.test
│   │       │   │   │   ├── multi_word_tests.test
│   │       │   │   │   ├── simple_xml_element.test
│   │       │   │   │   └── strings_like_numbers.test
│   │       │   │   ├── tags
│   │       │   │   │   ├── apply
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── json_encode.test
│   │       │   │   │   │   ├── multiple.test
│   │       │   │   │   │   ├── nested.test
│   │       │   │   │   │   ├── scope.test
│   │       │   │   │   │   ├── with_for_tag.test
│   │       │   │   │   │   └── with_if_tag.test
│   │       │   │   │   ├── autoescape
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── blocks.test
│   │       │   │   │   │   ├── double_escaping.test
│   │       │   │   │   │   ├── functions.test
│   │       │   │   │   │   ├── literal.test
│   │       │   │   │   │   ├── nested.test
│   │       │   │   │   │   ├── objects.test
│   │       │   │   │   │   ├── raw.test
│   │       │   │   │   │   ├── strategy.test
│   │       │   │   │   │   ├── type.test
│   │       │   │   │   │   ├── with_filters_arguments.test
│   │       │   │   │   │   ├── with_filters.test
│   │       │   │   │   │   ├── with_pre_escape_filters.test
│   │       │   │   │   │   └── with_preserves_safety_filters.test
│   │       │   │   │   ├── block
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── block_unique_name.test
│   │       │   │   │   │   ├── conditional_block.test
│   │       │   │   │   │   └── special_chars.test
│   │       │   │   │   ├── deprecated
│   │       │   │   │   │   ├── block.legacy.test
│   │       │   │   │   │   ├── macro.legacy.test
│   │       │   │   │   │   ├── template.legacy.test
│   │       │   │   │   │   ├── with_package_version.legacy.test
│   │       │   │   │   │   └── with_package.legacy.test
│   │       │   │   │   ├── embed
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── complex_dynamic_parent.test
│   │       │   │   │   │   ├── dynamic_parent.test
│   │       │   │   │   │   ├── embed_ignore_missing.test
│   │       │   │   │   │   ├── error_line.test
│   │       │   │   │   │   ├── multiple.test
│   │       │   │   │   │   ├── nested.test
│   │       │   │   │   │   └── with_extends.test
│   │       │   │   │   ├── for
│   │       │   │   │   │   ├── context.test
│   │       │   │   │   │   ├── else.test
│   │       │   │   │   │   ├── for_on_strings.test
│   │       │   │   │   │   ├── inner_variables.test
│   │       │   │   │   │   ├── keys_and_values.test
│   │       │   │   │   │   ├── keys.test
│   │       │   │   │   │   ├── loop_context_local.test
│   │       │   │   │   │   ├── loop_context.test
│   │       │   │   │   │   ├── nested_else.test
│   │       │   │   │   │   ├── objects_countable.test
│   │       │   │   │   │   ├── objects.test
│   │       │   │   │   │   ├── recursive.test
│   │       │   │   │   │   ├── reserved_names.test
│   │       │   │   │   │   └── values.test
│   │       │   │   │   ├── guard
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── exception.test
│   │       │   │   │   │   ├── nested.test
│   │       │   │   │   │   └── throwing_handler.test
│   │       │   │   │   ├── if
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── empty_body.test
│   │       │   │   │   │   └── expression.test
│   │       │   │   │   ├── include
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── expression.test
│   │       │   │   │   │   ├── ignore_missing_exists.test
│   │       │   │   │   │   ├── ignore_missing.test
│   │       │   │   │   │   ├── include_missing_extends.test
│   │       │   │   │   │   ├── missing_nested.test
│   │       │   │   │   │   ├── missing.test
│   │       │   │   │   │   ├── only.test
│   │       │   │   │   │   ├── template_instance.test
│   │       │   │   │   │   ├── templates_as_array.test
│   │       │   │   │   │   └── with_variables.test
│   │       │   │   │   ├── inheritance
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── block_expr.test
│   │       │   │   │   │   ├── block_expr2.test
│   │       │   │   │   │   ├── capturing_block.test
│   │       │   │   │   │   ├── conditional_block_nested.test
│   │       │   │   │   │   ├── conditional_block.test
│   │       │   │   │   │   ├── conditional.test
│   │       │   │   │   │   ├── dynamic_parent_from_include.test
│   │       │   │   │   │   ├── dynamic.test
│   │       │   │   │   │   ├── empty.test
│   │       │   │   │   │   ├── extends_as_array_with_empty_name.test
│   │       │   │   │   │   ├── extends_as_array_with_nested_blocks.test
│   │       │   │   │   │   ├── extends_as_array.test
│   │       │   │   │   │   ├── extends_in_block.test
│   │       │   │   │   │   ├── extends_in_macro.test
│   │       │   │   │   │   ├── extends_with_nested_blocks.test
│   │       │   │   │   │   ├── multiple_dynamic.test
│   │       │   │   │   │   ├── multiple.test
│   │       │   │   │   │   ├── nested_blocks_parent_only.test
│   │       │   │   │   │   ├── nested_blocks.test
│   │       │   │   │   │   ├── nested_inheritance.test
│   │       │   │   │   │   ├── parent_as_template_wrapper.test
│   │       │   │   │   │   ├── parent_change.test
│   │       │   │   │   │   ├── parent_isolation.test
│   │       │   │   │   │   ├── parent_nested.test
│   │       │   │   │   │   ├── parent_without_extends_but_traits.test
│   │       │   │   │   │   ├── parent_without_extends.test
│   │       │   │   │   │   ├── parent.test
│   │       │   │   │   │   ├── template_instance.test
│   │       │   │   │   │   └── use.test
│   │       │   │   │   ├── macro
│   │       │   │   │   │   ├── argument_reserved_names.test
│   │       │   │   │   │   ├── auto_import_blocks.test
│   │       │   │   │   │   ├── auto_import_without_blocks.test
│   │       │   │   │   │   ├── auto_import.test
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── colon_not_supported_as_default_separator.test
│   │       │   │   │   │   ├── endmacro_name.test
│   │       │   │   │   │   ├── external.test
│   │       │   │   │   │   ├── from_embed_with_global_macro.test
│   │       │   │   │   │   ├── from_in_block_is_local.test
│   │       │   │   │   │   ├── from_local_override.test
│   │       │   │   │   │   ├── from_macro_in_a_macro.test
│   │       │   │   │   │   ├── from_macros_in_parent.test
│   │       │   │   │   │   ├── from_nested_blocks_with_global_macro.test
│   │       │   │   │   │   ├── from_nested_blocks.test
│   │       │   │   │   │   ├── from_recursive.test
│   │       │   │   │   │   ├── from_reserved_names.test
│   │       │   │   │   │   ├── from_self_parent.test
│   │       │   │   │   │   ├── from_syntax_error.test
│   │       │   │   │   │   ├── from.test
│   │       │   │   │   │   ├── global.test
│   │       │   │   │   │   ├── import_and_blocks.test
│   │       │   │   │   │   ├── import_embed_with_global_macro.test
│   │       │   │   │   │   ├── import_from_string_template.test
│   │       │   │   │   │   ├── import_in_block_is_local.test
│   │       │   │   │   │   ├── import_local_override.test
│   │       │   │   │   │   ├── import_macro_in_a_macro.test
│   │       │   │   │   │   ├── import_macros_in_parent.test
│   │       │   │   │   │   ├── import_nested_blocks_with_global_macro.test
│   │       │   │   │   │   ├── import_nested_blocks.test
│   │       │   │   │   │   ├── import_reserved_names.test
│   │       │   │   │   │   ├── import_same_parent_and_child.test
│   │       │   │   │   │   ├── import_self_parent.test
│   │       │   │   │   │   ├── import_syntax_error.test
│   │       │   │   │   │   ├── named_arguments.test
│   │       │   │   │   │   ├── self_import.test
│   │       │   │   │   │   ├── special_chars.test
│   │       │   │   │   │   └── super_globals.test
│   │       │   │   │   ├── sandbox
│   │       │   │   │   │   ├── array.legacy.test
│   │       │   │   │   │   ├── not_valid1.legacy.test
│   │       │   │   │   │   ├── not_valid2.legacy.test
│   │       │   │   │   │   └── simple.legacy.test
│   │       │   │   │   ├── set
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── capture_scope.test
│   │       │   │   │   │   ├── capture-empty.test
│   │       │   │   │   │   ├── capture.test
│   │       │   │   │   │   ├── expression.test
│   │       │   │   │   │   ├── inheritance_overriding.test
│   │       │   │   │   │   ├── inheritance.test
│   │       │   │   │   │   ├── mutating.test
│   │       │   │   │   │   └── reserved_names.test
│   │       │   │   │   ├── use
│   │       │   │   │   │   ├── aliases.test
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── deep_empty.test
│   │       │   │   │   │   ├── deep.test
│   │       │   │   │   │   ├── inheritance.test
│   │       │   │   │   │   ├── inheritance2.test
│   │       │   │   │   │   ├── multiple_aliases.test
│   │       │   │   │   │   ├── multiple.test
│   │       │   │   │   │   ├── parent_block.test
│   │       │   │   │   │   ├── parent_block2.test
│   │       │   │   │   │   ├── parent_block3.test
│   │       │   │   │   │   ├── use_aliased_block_overridden.test
│   │       │   │   │   │   └── use_with_parent.test
│   │       │   │   │   ├── verbatim
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   └── whitespace_control.test
│   │       │   │   │   ├── with
│   │       │   │   │   │   ├── basic.test
│   │       │   │   │   │   ├── expression.test
│   │       │   │   │   │   ├── globals.test
│   │       │   │   │   │   ├── iterable.test
│   │       │   │   │   │   ├── nested.test
│   │       │   │   │   │   ├── with_no_mapping.test
│   │       │   │   │   │   └── with_only.test
│   │       │   │   │   ├── from.test
│   │       │   │   │   └── special_chars.test
│   │       │   │   ├── tests
│   │       │   │   │   ├── array.test
│   │       │   │   │   ├── constant.test
│   │       │   │   │   ├── defined_for_attribute.legacy.test
│   │       │   │   │   ├── defined_for_attribute.test
│   │       │   │   │   ├── defined_for_blocks_with_template.test
│   │       │   │   │   ├── defined_for_blocks.test
│   │       │   │   │   ├── defined_for_constants.test
│   │       │   │   │   ├── defined_for_macros.test
│   │       │   │   │   ├── defined_on_complex_expr.test
│   │       │   │   │   ├── defined.test
│   │       │   │   │   ├── dynamic_test.test
│   │       │   │   │   ├── empty.test
│   │       │   │   │   ├── even.test
│   │       │   │   │   ├── in_with_iterator.test
│   │       │   │   │   ├── in_with_objects.test
│   │       │   │   │   ├── in.test
│   │       │   │   │   ├── iterable.test
│   │       │   │   │   ├── mapping.test
│   │       │   │   │   ├── null_coalesce_block.test
│   │       │   │   │   ├── null_coalesce.legacy.test
│   │       │   │   │   ├── null_coalesce.test
│   │       │   │   │   ├── odd.test
│   │       │   │   │   └── sequence.test
│   │       │   │   └── whitespace
│   │       │   │       ├── trim_block.test
│   │       │   │       ├── trim_delimiter_as_strings.test
│   │       │   │       ├── trim_left.test
│   │       │   │       ├── trim_line_left.test
│   │       │   │       ├── trim_line_right.test
│   │       │   │       └── trim_right.test
│   │       │   ├── Loader
│   │       │   │   ├── Fixtures
│   │       │   │   │   ├── inheritance
│   │       │   │   │   │   ├── array_inheritance_empty_parent.html.twig
│   │       │   │   │   │   ├── array_inheritance_nonexistent_parent.html.twig
│   │       │   │   │   │   ├── array_inheritance_valid_parent.html.twig
│   │       │   │   │   │   ├── parent.html.twig
│   │       │   │   │   │   └── spare_parent.html.twig
│   │       │   │   │   ├── named
│   │       │   │   │   │   └── index.html
│   │       │   │   │   ├── named_bis
│   │       │   │   │   │   └── index.html
│   │       │   │   │   ├── named_final
│   │       │   │   │   │   └── index.html
│   │       │   │   │   ├── named_quater
│   │       │   │   │   │   └── named_absolute.html
│   │       │   │   │   ├── named_ter
│   │       │   │   │   │   └── index.html
│   │       │   │   │   ├── normal
│   │       │   │   │   │   └── index.html
│   │       │   │   │   ├── normal_bis
│   │       │   │   │   │   └── index.html
│   │       │   │   │   ├── normal_final
│   │       │   │   │   │   └── index.html
│   │       │   │   │   ├── normal_ter
│   │       │   │   │   │   └── index.html
│   │       │   │   │   ├── phar
│   │       │   │   │   │   └── phar-sample.phar
│   │       │   │   │   └── themes
│   │       │   │   │       ├── theme1
│   │       │   │   │       │   └── blocks.html.twig
│   │       │   │   │       └── theme2
│   │       │   │   │           └── blocks.html.twig
│   │       │   │   ├── ArrayTest.php
│   │       │   │   ├── ChainTest.php
│   │       │   │   └── FilesystemTest.php
│   │       │   ├── Node
│   │       │   │   ├── Expression
│   │       │   │   │   ├── Binary
│   │       │   │   │   │   ├── AddTest.php
│   │       │   │   │   │   ├── AndTest.php
│   │       │   │   │   │   ├── ConcatTest.php
│   │       │   │   │   │   ├── DivTest.php
│   │       │   │   │   │   ├── FloorDivTest.php
│   │       │   │   │   │   ├── ModTest.php
│   │       │   │   │   │   ├── MulTest.php
│   │       │   │   │   │   ├── NullCoalesceTest.php
│   │       │   │   │   │   ├── OrTest.php
│   │       │   │   │   │   └── SubTest.php
│   │       │   │   │   ├── Filter
│   │       │   │   │   │   └── RawTest.php
│   │       │   │   │   ├── Ternary
│   │       │   │   │   │   └── ConditionalTernaryTest.php
│   │       │   │   │   ├── Unary
│   │       │   │   │   │   ├── NegTest.php
│   │       │   │   │   │   ├── NotTest.php
│   │       │   │   │   │   └── PosTest.php
│   │       │   │   │   ├── Variable
│   │       │   │   │   │   ├── AssignContextVariableTest.php
│   │       │   │   │   │   └── ContextVariableTest.php
│   │       │   │   │   ├── ArrayTest.php
│   │       │   │   │   ├── CallTest.php
│   │       │   │   │   ├── ConditionalTest.php
│   │       │   │   │   ├── ConstantTest.php
│   │       │   │   │   ├── FilterTest.php
│   │       │   │   │   ├── FilterTestExtension.php
│   │       │   │   │   ├── FunctionTest.php
│   │       │   │   │   ├── GetAttrTest.php
│   │       │   │   │   ├── NullCoalesceTest.php
│   │       │   │   │   ├── ParentTest.php
│   │       │   │   │   └── TestTest.php
│   │       │   │   ├── AutoEscapeTest.php
│   │       │   │   ├── BlockReferenceTest.php
│   │       │   │   ├── BlockTest.php
│   │       │   │   ├── DeprecatedTest.php
│   │       │   │   ├── DoTest.php
│   │       │   │   ├── ForTest.php
│   │       │   │   ├── IfTest.php
│   │       │   │   ├── ImportTest.php
│   │       │   │   ├── IncludeTest.php
│   │       │   │   ├── MacroTest.php
│   │       │   │   ├── ModuleTest.php
│   │       │   │   ├── NodeTest.php
│   │       │   │   ├── PrintTest.php
│   │       │   │   ├── SandboxTest.php
│   │       │   │   ├── SetTest.php
│   │       │   │   ├── TextTest.php
│   │       │   │   └── TypesTest.php
│   │       │   ├── NodeVisitor
│   │       │   │   ├── OptimizerTest.php
│   │       │   │   └── SandboxTest.php
│   │       │   ├── Profiler
│   │       │   │   ├── Dumper
│   │       │   │   │   ├── BlackfireTest.php
│   │       │   │   │   ├── HtmlTest.php
│   │       │   │   │   ├── ProfilerTestCase.php
│   │       │   │   │   └── TextTest.php
│   │       │   │   └── ProfileTest.php
│   │       │   ├── Runtime
│   │       │   │   └── EscaperRuntimeTest.php
│   │       │   ├── TokenParser
│   │       │   │   ├── GuardTokenParserTest.php
│   │       │   │   └── TypesTokenParserTest.php
│   │       │   ├── Util
│   │       │   │   ├── CallableArgumentsExtractorTest.php
│   │       │   │   └── DeprecationCollectorTest.php
│   │       │   ├── CompilerTest.php
│   │       │   ├── ContainerRuntimeLoaderTest.php
│   │       │   ├── CustomExtensionTest.php
│   │       │   ├── DeprecatedCallableInfoTest.php
│   │       │   ├── drupal_test.sh
│   │       │   ├── DummyBackedEnum.php
│   │       │   ├── DummyUnitEnum.php
│   │       │   ├── EnvironmentTest.php
│   │       │   ├── ErrorTest.php
│   │       │   ├── ExpressionParserTest.php
│   │       │   ├── FactoryRuntimeLoaderTest.php
│   │       │   ├── FileExtensionEscapingStrategyTest.php
│   │       │   ├── FilesystemHelper.php
│   │       │   ├── IntegrationTest.php
│   │       │   ├── LexerTest.php
│   │       │   ├── ParserTest.php
│   │       │   ├── TemplateTest.php
│   │       │   ├── TemplateWrapperTest.php
│   │       │   └── TokenStreamTest.php
│   │       ├── .editorconfig
│   │       ├── .gitattributes
│   │       ├── .gitignore
│   │       ├── .php-cs-fixer.dist.php
│   │       ├── CHANGELOG
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── phpstan-baseline.neon
│   │       ├── phpstan.neon.dist
│   │       ├── phpunit.xml.dist
│   │       └── README.rst
│   ├── autoload_runtime.php
│   └── autoload.php
├── .env
├── .env.dev
├── .gitignore
├── compose.override.yaml
├── compose.yaml
├── composer.json
├── composer.lock
├── README.md
└── symfony.lock
