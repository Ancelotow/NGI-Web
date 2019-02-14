<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_comptable_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\ComptableBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/comptable',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_geolocalisation-region-index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\RegionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/geolocalisation/region',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_geolocalisation-region-add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\RegionController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/geolocalisation/region/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_geolocalisation-dept-index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\DepartementController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/geolocalisation/departement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_geolocalisation-dept-add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\DepartementController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/geolocalisation/departement/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_geolocalisation-ville-index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\VilleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/geolocalisation/ville',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_geolocalisation-ville-add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\VilleController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/geolocalisation/ville/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_geolocalisation-carte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\ImmeubleController::mapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/geolocalisation/carte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_immeuble-index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\ImmeubleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_immeuble-add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\ImmeubleController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_proprietaire-index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\ProprietaireController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/gestion/proprietaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_proprietaire-add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\ProprietaireController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/gestion/proprietaire/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_proprietaire-pdf' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\ProprietaireController::pdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/proprietaire/pdf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_proprietaire-consult' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\ProprietaireController::consultAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/proprietaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_immeuble' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\ImmeubleController::uneCoproAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble/code',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_immeuble-pdf' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\ImmeubleController::pdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble/pdf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_immeuble-lot-add' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\LotController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble/ajout/lot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_immeuble-lot-pdf' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\LotController::pdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble/pdf/lot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_immeuble-lot-prop-add' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\ProprietaireController::prop_lotAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble/ajout/lot/proprietaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_immeuble-habitant-add' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\HabitantController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble/ajout/habitant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_immeuble-habitant-pdf' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\HabitantController::pdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble/pdf/habitant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_immeuble-ag-add' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\AGController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble/ajout/ag',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_immeuble-cs-add' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\CSController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble/ajout/cs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_immeuble-sinistre-add' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\SinistreController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble/ajout/sinistre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_sinistre-index' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\SinistreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/sinistre/code',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_sinistre-liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\SinistreController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/gestion/sinistre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_sinistre-pdf' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\SinistreController::pdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/immeuble/pdf/sinistre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_travaux-liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\TravauxController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/gestion/travaux',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_travaux-add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\TravauxController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/gestion/travaux/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_gestionnaire_travaux-index' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'NG\\GestionnaireBundle\\Controller\\TravauxController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/ng/gestion/travaux/code',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_administrateur_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\AdministrateurBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_administrateur_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\AdministrateurBundle\\Controller\\DefaultController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_administrateur_user-index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\AdministrateurBundle\\Controller\\UtilisateurController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/immobilier/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_administrateur_user-blocked' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NG\\AdministrateurBundle\\Controller\\UtilisateurController::blockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ng/immobilier/user/bloquer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_administrateur_user-actived' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NG\\AdministrateurBundle\\Controller\\UtilisateurController::activAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ng/immobilier/user/activer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_administrateur_partner-index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\AdministrateurBundle\\Controller\\PartenaireController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/immobilier/partenaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ng_administrateur_partner-add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NG\\AdministrateurBundle\\Controller\\PartenaireController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ng/immobilier/partenaire/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
