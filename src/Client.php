<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive;

use Pipedrive\Controllers;

/**
 * Pipedrive client class
 */
class Client
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $oAuthClientId = null,
        $oAuthClientSecret = null,
        $oAuthRedirectUri = null,
        $apiToken = null
    ) {
        Configuration::$apiToken = $apiToken ? $apiToken : Configuration::$apiToken;
        Configuration::$oAuthClientId = $oAuthClientId ? $oAuthClientId : Configuration::$oAuthClientId;
        Configuration::$oAuthClientSecret = $oAuthClientSecret ? $oAuthClientSecret : Configuration::$oAuthClientSecret;
        Configuration::$oAuthRedirectUri = $oAuthRedirectUri ? $oAuthRedirectUri : Configuration::$oAuthRedirectUri;
        Configuration::$oAuthToken = (object)['accessToken' => null];
    }
    /**
     * Singleton access to Activities controller
     * @return Controllers\ActivitiesController The *Singleton* instance
     */
    public function getActivities()
    {
        return Controllers\ActivitiesController::getInstance();
    }
    /**
     * Singleton access to ActivityFields controller
     * @return Controllers\ActivityFieldsController The *Singleton* instance
     */
    public function getActivityFields()
    {
        return Controllers\ActivityFieldsController::getInstance();
    }
    /**
     * Singleton access to ActivityTypes controller
     * @return Controllers\ActivityTypesController The *Singleton* instance
     */
    public function getActivityTypes()
    {
        return Controllers\ActivityTypesController::getInstance();
    }
    /**
     * Singleton access to Currencies controller
     * @return Controllers\CurrenciesController The *Singleton* instance
     */
    public function getCurrencies()
    {
        return Controllers\CurrenciesController::getInstance();
    }
    /**
     * Singleton access to DealFields controller
     * @return Controllers\DealFieldsController The *Singleton* instance
     */
    public function getDealFields()
    {
        return Controllers\DealFieldsController::getInstance();
    }
    /**
     * Singleton access to Deals controller
     * @return Controllers\DealsController The *Singleton* instance
     */
    public function getDeals()
    {
        return Controllers\DealsController::getInstance();
    }
    /**
     * Singleton access to Files controller
     * @return Controllers\FilesController The *Singleton* instance
     */
    public function getFiles()
    {
        return Controllers\FilesController::getInstance();
    }
    /**
     * Singleton access to Filters controller
     * @return Controllers\FiltersController The *Singleton* instance
     */
    public function getFilters()
    {
        return Controllers\FiltersController::getInstance();
    }
    /**
     * Singleton access to GlobalMessages controller
     * @return Controllers\GlobalMessagesController The *Singleton* instance
     */
    public function getGlobalMessages()
    {
        return Controllers\GlobalMessagesController::getInstance();
    }
    /**
     * Singleton access to Goals controller
     * @return Controllers\GoalsController The *Singleton* instance
     */
    public function getGoals()
    {
        return Controllers\GoalsController::getInstance();
    }
    /**
     * Singleton access to MailMessages controller
     * @return Controllers\MailMessagesController The *Singleton* instance
     */
    public function getMailMessages()
    {
        return Controllers\MailMessagesController::getInstance();
    }
    /**
     * Singleton access to MailThreads controller
     * @return Controllers\MailThreadsController The *Singleton* instance
     */
    public function getMailThreads()
    {
        return Controllers\MailThreadsController::getInstance();
    }
    /**
     * Singleton access to NoteFields controller
     * @return Controllers\NoteFieldsController The *Singleton* instance
     */
    public function getNoteFields()
    {
        return Controllers\NoteFieldsController::getInstance();
    }
    /**
     * Singleton access to Notes controller
     * @return Controllers\NotesController The *Singleton* instance
     */
    public function getNotes()
    {
        return Controllers\NotesController::getInstance();
    }
    /**
     * Singleton access to OrganizationFields controller
     * @return Controllers\OrganizationFieldsController The *Singleton* instance
     */
    public function getOrganizationFields()
    {
        return Controllers\OrganizationFieldsController::getInstance();
    }
    /**
     * Singleton access to OrganizationRelationships controller
     * @return Controllers\OrganizationRelationshipsController The *Singleton* instance
     */
    public function getOrganizationRelationships()
    {
        return Controllers\OrganizationRelationshipsController::getInstance();
    }
    /**
     * Singleton access to Organizations controller
     * @return Controllers\OrganizationsController The *Singleton* instance
     */
    public function getOrganizations()
    {
        return Controllers\OrganizationsController::getInstance();
    }
    /**
     * Singleton access to PermissionSets controller
     * @return Controllers\PermissionSetsController The *Singleton* instance
     */
    public function getPermissionSets()
    {
        return Controllers\PermissionSetsController::getInstance();
    }
    /**
     * Singleton access to PersonFields controller
     * @return Controllers\PersonFieldsController The *Singleton* instance
     */
    public function getPersonFields()
    {
        return Controllers\PersonFieldsController::getInstance();
    }
    /**
     * Singleton access to Persons controller
     * @return Controllers\PersonsController The *Singleton* instance
     */
    public function getPersons()
    {
        return Controllers\PersonsController::getInstance();
    }
    /**
     * Singleton access to Pipelines controller
     * @return Controllers\PipelinesController The *Singleton* instance
     */
    public function getPipelines()
    {
        return Controllers\PipelinesController::getInstance();
    }
    /**
     * Singleton access to ProductFields controller
     * @return Controllers\ProductFieldsController The *Singleton* instance
     */
    public function getProductFields()
    {
        return Controllers\ProductFieldsController::getInstance();
    }
    /**
     * Singleton access to Products controller
     * @return Controllers\ProductsController The *Singleton* instance
     */
    public function getProducts()
    {
        return Controllers\ProductsController::getInstance();
    }
    /**
     * Singleton access to Recents controller
     * @return Controllers\RecentsController The *Singleton* instance
     */
    public function getRecents()
    {
        return Controllers\RecentsController::getInstance();
    }
    /**
     * Singleton access to Roles controller
     * @return Controllers\RolesController The *Singleton* instance
     */
    public function getRoles()
    {
        return Controllers\RolesController::getInstance();
    }
    /**
     * Singleton access to SearchResults controller
     * @return Controllers\SearchResultsController The *Singleton* instance
     */
    public function getSearchResults()
    {
        return Controllers\SearchResultsController::getInstance();
    }
    /**
     * Singleton access to Stages controller
     * @return Controllers\StagesController The *Singleton* instance
     */
    public function getStages()
    {
        return Controllers\StagesController::getInstance();
    }
    /**
     * Singleton access to Teams controller
     * @return Controllers\TeamsController The *Singleton* instance
     */
    public function getTeams()
    {
        return Controllers\TeamsController::getInstance();
    }
    /**
     * Singleton access to UserConnections controller
     * @return Controllers\UserConnectionsController The *Singleton* instance
     */
    public function getUserConnections()
    {
        return Controllers\UserConnectionsController::getInstance();
    }
    /**
     * Singleton access to UserSettings controller
     * @return Controllers\UserSettingsController The *Singleton* instance
     */
    public function getUserSettings()
    {
        return Controllers\UserSettingsController::getInstance();
    }
    /**
     * Singleton access to Users controller
     * @return Controllers\UsersController The *Singleton* instance
     */
    public function getUsers()
    {
        return Controllers\UsersController::getInstance();
    }
    /**
     * Singleton access to Webhooks controller
     * @return Controllers\WebhooksController The *Singleton* instance
     */
    public function getWebhooks()
    {
        return Controllers\WebhooksController::getInstance();
    }
    /**
     * Singleton access to ItemSearch controller
     * @return Controllers\ItemSearchController The *Singleton* instance
     */
    public function getItemSearch()
    {
        return Controllers\ItemSearchController::getInstance();
    }
    /**
     * Singleton access to OAuthAuthorization controller
     * @return Controllers\OAuthAuthorizationController The *Singleton* instance
     */
    public function getOAuthAuthorization()
    {
        return Controllers\OAuthAuthorizationController::getInstance();
    }
    /**
     * Get OAuth 2 authorization manager
     * @return OAuthManager
     */
    public function auth()
    {
        return OAuthManager::getInstance();
    }
}