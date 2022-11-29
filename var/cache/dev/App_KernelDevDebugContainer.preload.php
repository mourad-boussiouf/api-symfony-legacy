<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerPWa3xkt\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerPWa3xkt/EntityManager_9a5be93.php';
require __DIR__.'/ContainerPWa3xkt/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerPWa3xkt/getValidator_ExpressionService.php';
require __DIR__.'/ContainerPWa3xkt/getValidator_EmailService.php';
require __DIR__.'/ContainerPWa3xkt/getTwig_Runtime_SerializerService.php';
require __DIR__.'/ContainerPWa3xkt/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerPWa3xkt/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerPWa3xkt/getTwigService.php';
require __DIR__.'/ContainerPWa3xkt/getSession_FactoryService.php';
require __DIR__.'/ContainerPWa3xkt/getServicesResetterService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerPWa3xkt/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerPWa3xkt/getSecrets_VaultService.php';
require __DIR__.'/ContainerPWa3xkt/getRouting_LoaderService.php';
require __DIR__.'/ContainerPWa3xkt/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerPWa3xkt/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerPWa3xkt/getErrorControllerService.php';
require __DIR__.'/ContainerPWa3xkt/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerPWa3xkt/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerPWa3xkt/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerPWa3xkt/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerPWa3xkt/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerPWa3xkt/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerPWa3xkt/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_Security_Voter_Security_Access_ExpressionVoterService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerPWa3xkt/getDebug_ApiPlatform_ArgumentResolver_PayloadService.php';
require __DIR__.'/ContainerPWa3xkt/getContainer_GetenvService.php';
require __DIR__.'/ContainerPWa3xkt/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerPWa3xkt/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerPWa3xkt/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerPWa3xkt/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerPWa3xkt/getCache_SystemClearerService.php';
require __DIR__.'/ContainerPWa3xkt/getCache_SystemService.php';
require __DIR__.'/ContainerPWa3xkt/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerPWa3xkt/getCache_AppClearerService.php';
require __DIR__.'/ContainerPWa3xkt/getCache_AppService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_SwaggerUi_ActionService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_StateProvider_ObjectService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_StateProvider_CreateService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Openapi_OptionsService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Openapi_FactoryService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Metadata_PropertySchema_OneOfRestrictionService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Metadata_PropertySchema_CollectionRestrictionService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Listener_View_WriteService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Listener_View_ValidateService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Listener_View_SerializeService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Listener_View_RespondService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Listener_Exception_ValidationService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Listener_ExceptionService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Jsonld_Action_ContextService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_JsonSchema_TypeFactoryService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Hydra_JsonSchema_SchemaFactoryService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Doctrine_Orm_State_RemoveProcessorService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Doctrine_Orm_State_PersistProcessorService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Doctrine_Orm_State_ItemProviderService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Doctrine_Orm_State_CollectionProviderService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Doctrine_Orm_QueryExtension_FilterService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Action_PlaceholderService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Action_NotFoundService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Action_NotExposedService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Action_ExceptionService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Action_EntrypointService.php';
require __DIR__.'/ContainerPWa3xkt/getApiPlatform_Action_DocumentationService.php';
require __DIR__.'/ContainerPWa3xkt/getTemplateControllerService.php';
require __DIR__.'/ContainerPWa3xkt/getRedirectControllerService.php';
require __DIR__.'/ContainerPWa3xkt/get_ServiceLocator_XUrKPVUService.php';
require __DIR__.'/ContainerPWa3xkt/get_ServiceLocator_THndrlService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Nelmio\CorsBundle\NelmioCorsBundle';
$classes[] = 'ApiPlatform\Symfony\Bundle\ApiPlatformBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'ApiPlatform\Documentation\Action\DocumentationAction';
$classes[] = 'ApiPlatform\Action\EntrypointAction';
$classes[] = 'ApiPlatform\Action\ExceptionAction';
$classes[] = 'ApiPlatform\Action\NotExposedAction';
$classes[] = 'ApiPlatform\Action\NotFoundAction';
$classes[] = 'ApiPlatform\Action\PlaceholderAction';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'ApiPlatform\Doctrine\Orm\Extension\EagerLoadingExtension';
$classes[] = 'ApiPlatform\Doctrine\Orm\Extension\FilterExtension';
$classes[] = 'ApiPlatform\Doctrine\Orm\Extension\FilterEagerLoadingExtension';
$classes[] = 'ApiPlatform\Doctrine\Orm\Extension\OrderExtension';
$classes[] = 'ApiPlatform\Doctrine\Orm\Extension\PaginationExtension';
$classes[] = 'ApiPlatform\State\Pagination\Pagination';
$classes[] = 'ApiPlatform\Doctrine\Orm\State\CollectionProvider';
$classes[] = 'ApiPlatform\Doctrine\Orm\State\ItemProvider';
$classes[] = 'ApiPlatform\Doctrine\Common\State\PersistProcessor';
$classes[] = 'ApiPlatform\Doctrine\Common\State\RemoveProcessor';
$classes[] = 'ApiPlatform\HttpCache\EventListener\AddHeadersListener';
$classes[] = 'ApiPlatform\Hydra\JsonSchema\SchemaFactory';
$classes[] = 'ApiPlatform\JsonSchema\SchemaFactory';
$classes[] = 'ApiPlatform\Hydra\EventListener\AddLinkHeaderListener';
$classes[] = 'ApiPlatform\JsonSchema\TypeFactory';
$classes[] = 'ApiPlatform\JsonLd\Action\ContextAction';
$classes[] = 'ApiPlatform\JsonLd\ContextBuilder';
$classes[] = 'ApiPlatform\Symfony\EventListener\ExceptionListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\ErrorListener';
$classes[] = 'ApiPlatform\Symfony\Validator\EventListener\ValidationExceptionListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\AddFormatListener';
$classes[] = 'Negotiation\Negotiator';
$classes[] = 'ApiPlatform\Symfony\EventListener\DeserializeListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\ReadListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\RespondListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\SerializeListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\ValidateListener';
$classes[] = 'ApiPlatform\Symfony\Validator\Validator';
$classes[] = 'ApiPlatform\Symfony\EventListener\QueryParameterValidateListener';
$classes[] = 'ApiPlatform\Api\QueryParameterValidator\QueryParameterValidator';
$classes[] = 'ApiPlatform\Symfony\EventListener\WriteListener';
$classes[] = 'ApiPlatform\State\CallableProcessor';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\CachedPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\ValidatorPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\ExtractorPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\AttributePropertyMetadataFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\DefaultPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\SerializerPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\PropertyInfoPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\CachedPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\PropertyInfoPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Extractor\XmlPropertyExtractor';
$classes[] = 'ApiPlatform\Metadata\Extractor\YamlPropertyExtractor';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaChoiceRestriction';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaCollectionRestriction';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaCountRestriction';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaFormat';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaGreaterThanOrEqualRestriction';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaGreaterThanRestriction';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLengthRestriction';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLessThanOrEqualRestriction';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLessThanRestriction';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaOneOfRestriction';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaRangeRestriction';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaRegexRestriction';
$classes[] = 'ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaUniqueRestriction';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\CachedResourceMetadataCollectionFactory';
$classes[] = 'ApiPlatform\Doctrine\Orm\Metadata\Resource\DoctrineOrmResourceCollectionMetadataFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\PhpDocResourceMetadataCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\AlternateUriResourceMetadataCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\FiltersResourceMetadataCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\FormatsResourceMetadataCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\InputOutputResourceMetadataCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\OperationNameResourceMetadataCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\LinkResourceMetadataCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\LinkFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\UriTemplateResourceMetadataCollectionFactory';
$classes[] = 'ApiPlatform\Operation\UnderscorePathSegmentNameGenerator';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\NotExposedOperationResourceMetadataCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\ExtractorResourceMetadataCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\AttributesResourceMetadataCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\CachedResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\AttributesResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Extractor\XmlResourceExtractor';
$classes[] = 'ApiPlatform\Metadata\Extractor\YamlResourceExtractor';
$classes[] = 'ApiPlatform\OpenApi\Factory\OpenApiFactory';
$classes[] = 'ApiPlatform\State\Pagination\PaginationOptions';
$classes[] = 'ApiPlatform\OpenApi\Options';
$classes[] = 'ApiPlatform\Api\ResourceClassResolver';
$classes[] = 'ApiPlatform\Symfony\Routing\Router';
$classes[] = 'ApiPlatform\Symfony\EventListener\DenyAccessListener';
$classes[] = 'ApiPlatform\Symfony\Security\ResourceAccessChecker';
$classes[] = 'ApiPlatform\Serializer\SerializerFilterContextBuilder';
$classes[] = 'ApiPlatform\Serializer\SerializerContextBuilder';
$classes[] = 'ApiPlatform\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'ApiPlatform\State\CreateProvider';
$classes[] = 'ApiPlatform\State\CallableProvider';
$classes[] = 'ApiPlatform\State\ObjectProvider';
$classes[] = 'ApiPlatform\Symfony\Bundle\EventListener\SwaggerUiListener';
$classes[] = 'ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiAction';
$classes[] = 'ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiContext';
$classes[] = 'ApiPlatform\Symfony\Routing\IriConverter';
$classes[] = 'ApiPlatform\Api\IdentifiersExtractor';
$classes[] = 'ApiPlatform\Metadata\Operation\Factory\OperationMetadataFactory';
$classes[] = 'ApiPlatform\Symfony\Routing\SkolemIriConverter';
$classes[] = 'ApiPlatform\Api\UriVariablesConverter';
$classes[] = 'ApiPlatform\Api\UriVariableTransformer\DateTimeUriVariableTransformer';
$classes[] = 'ApiPlatform\Api\UriVariableTransformer\IntegerUriVariableTransformer';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'ApiPlatform\Symfony\Bundle\ArgumentResolver\PayloadArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener';
$classes[] = 'Nelmio\CorsBundle\EventListener\CorsListener';
$classes[] = 'Nelmio\CorsBundle\Options\Resolver';
$classes[] = 'Nelmio\CorsBundle\Options\ConfigProvider';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpStanExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'ApiPlatform\Symfony\Routing\ApiLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'ApiPlatform\Symfony\Security\Core\Authorization\ExpressionLanguageProvider';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'ApiPlatform\OpenApi\Serializer\ApiGatewayNormalizer';
$classes[] = 'ApiPlatform\OpenApi\Serializer\OpenApiNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'ApiPlatform\Hydra\Serializer\ConstraintViolationListNormalizer';
$classes[] = 'ApiPlatform\Problem\Serializer\ConstraintViolationListNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\DocumentationNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\EntrypointNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\ErrorNormalizer';
$classes[] = 'ApiPlatform\Problem\Serializer\ErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'ApiPlatform\JsonLd\Serializer\ItemNormalizer';
$classes[] = 'ApiPlatform\Serializer\ItemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\CollectionFiltersNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\PartialCollectionViewNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\CollectionNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'ApiPlatform\JsonLd\Serializer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'ApiPlatform\Serializer\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\WebLinkExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\WebLink\EventListener\AddLinkHeaderListener';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/twig/ae/aecd8f8d31e1a9b058ec8f5d80330468.php';
require_once __DIR__.'/twig/a8/a8fdbd114edcf545c71002bde96d3c4d.php';
require_once __DIR__.'/twig/b4/b4c34cb8683279303820074ae5a2b630.php';
require_once __DIR__.'/twig/d8/d82a612290009cdf48241ea185bf417b.php';
require_once __DIR__.'/twig/c3/c31db41a96ba64ea0fc5bf82272bfe40.php';
require_once __DIR__.'/twig/05/051cfc764f8caa2a72e2405fcb9a318b.php';
require_once __DIR__.'/twig/e0/e08d94b57b3cd9d007d6cedf0f588929.php';
require_once __DIR__.'/twig/ad/adda86198a38289c9d572734c797e5fb.php';
require_once __DIR__.'/twig/13/130f1722b9844da840b616764e9a5807.php';
require_once __DIR__.'/twig/b7/b71a0adc0149ba76c2c6c0903d2763ba.php';
require_once __DIR__.'/twig/be/bedfd660b813e3ebd4f2d207fe3fe944.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$preloaded = Preloader::preload($classes, $preloaded);
