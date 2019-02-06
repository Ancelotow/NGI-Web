<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/ng')) {
            // ng_comptable_homepage
            if ('/ng/comptable' === $pathinfo) {
                return array (  '_controller' => 'NG\\ComptableBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ng_comptable_homepage',);
            }

            if (0 === strpos($pathinfo, '/ng/ge')) {
                if (0 === strpos($pathinfo, '/ng/geolocalisation')) {
                    if (0 === strpos($pathinfo, '/ng/geolocalisation/region')) {
                        // ng_gestionnaire_geolocalisation-region-index
                        if ('/ng/geolocalisation/region' === $pathinfo) {
                            return array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\RegionController::indexAction',  '_route' => 'ng_gestionnaire_geolocalisation-region-index',);
                        }

                        // ng_gestionnaire_geolocalisation-region-add
                        if ('/ng/geolocalisation/region/ajout' === $pathinfo) {
                            return array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\RegionController::addAction',  '_route' => 'ng_gestionnaire_geolocalisation-region-add',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/ng/geolocalisation/departement')) {
                        // ng_gestionnaire_geolocalisation-dept-index
                        if ('/ng/geolocalisation/departement' === $pathinfo) {
                            return array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\DepartementController::indexAction',  '_route' => 'ng_gestionnaire_geolocalisation-dept-index',);
                        }

                        // ng_gestionnaire_geolocalisation-dept-add
                        if ('/ng/geolocalisation/departement/ajout' === $pathinfo) {
                            return array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\DepartementController::addAction',  '_route' => 'ng_gestionnaire_geolocalisation-dept-add',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/ng/geolocalisation/ville')) {
                        // ng_gestionnaire_geolocalisation-ville-index
                        if ('/ng/geolocalisation/ville' === $pathinfo) {
                            return array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\VilleController::indexAction',  '_route' => 'ng_gestionnaire_geolocalisation-ville-index',);
                        }

                        // ng_gestionnaire_geolocalisation-ville-add
                        if ('/ng/geolocalisation/ville/ajout' === $pathinfo) {
                            return array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\VilleController::addAction',  '_route' => 'ng_gestionnaire_geolocalisation-ville-add',);
                        }

                    }

                    // ng_gestionnaire_geolocalisation-carte
                    if ('/ng/geolocalisation/carte' === $pathinfo) {
                        return array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\ImmeubleController::mapAction',  '_route' => 'ng_gestionnaire_geolocalisation-carte',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/ng/gestion/immeuble')) {
                    // ng_gestionnaire_immeuble-index
                    if ('/ng/gestion/immeuble' === $pathinfo) {
                        return array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\ImmeubleController::indexAction',  '_route' => 'ng_gestionnaire_immeuble-index',);
                    }

                    if (0 === strpos($pathinfo, '/ng/gestion/immeuble/ajout')) {
                        // ng_gestionnaire_immeuble-add
                        if ('/ng/gestion/immeuble/ajout' === $pathinfo) {
                            return array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\ImmeubleController::addAction',  '_route' => 'ng_gestionnaire_immeuble-add',);
                        }

                        if (0 === strpos($pathinfo, '/ng/gestion/immeuble/ajout/lot')) {
                            // ng_gestionnaire_immeuble-lot-add
                            if (preg_match('#^/ng/gestion/immeuble/ajout/lot/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ng_gestionnaire_immeuble-lot-add')), array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\LotController::addAction',));
                            }

                            // ng_gestionnaire_immeuble-lot-prop-add
                            if (0 === strpos($pathinfo, '/ng/gestion/immeuble/ajout/lot/proprietaire') && preg_match('#^/ng/gestion/immeuble/ajout/lot/proprietaire/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ng_gestionnaire_immeuble-lot-prop-add')), array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\ProprietaireController::prop_lotAddAction',));
                            }

                        }

                        // ng_gestionnaire_immeuble-habitant-add
                        if (0 === strpos($pathinfo, '/ng/gestion/immeuble/ajout/habitant') && preg_match('#^/ng/gestion/immeuble/ajout/habitant/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ng_gestionnaire_immeuble-habitant-add')), array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\HabitantController::addAction',));
                        }

                        // ng_gestionnaire_immeuble-ag-add
                        if (0 === strpos($pathinfo, '/ng/gestion/immeuble/ajout/ag') && preg_match('#^/ng/gestion/immeuble/ajout/ag/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ng_gestionnaire_immeuble-ag-add')), array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\AGController::addAction',));
                        }

                        // ng_gestionnaire_immeuble-cs-add
                        if (0 === strpos($pathinfo, '/ng/gestion/immeuble/ajout/cs') && preg_match('#^/ng/gestion/immeuble/ajout/cs/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ng_gestionnaire_immeuble-cs-add')), array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\CSController::addAction',));
                        }

                    }

                    // ng_gestionnaire_immeuble
                    if (0 === strpos($pathinfo, '/ng/gestion/immeuble/code') && preg_match('#^/ng/gestion/immeuble/code/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ng_gestionnaire_immeuble')), array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\ImmeubleController::uneCoproAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/ng/gestion/proprietaire')) {
                    // ng_gestionnaire_proprietaire-index
                    if ('/ng/gestion/proprietaire' === $pathinfo) {
                        return array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\ProprietaireController::indexAction',  '_route' => 'ng_gestionnaire_proprietaire-index',);
                    }

                    // ng_gestionnaire_proprietaire-add
                    if ('/ng/gestion/proprietaire/ajout' === $pathinfo) {
                        return array (  '_controller' => 'NG\\GestionnaireBundle\\Controller\\ProprietaireController::addAction',  '_route' => 'ng_gestionnaire_proprietaire-add',);
                    }

                }

            }

            // ng_administrateur_homepage
            if ('/ng' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ng_administrateur_homepage');
                }

                return array (  '_controller' => 'NG\\AdministrateurBundle\\Controller\\DefaultController::homeAction',  '_route' => 'ng_administrateur_homepage',);
            }

            if (0 === strpos($pathinfo, '/ng/immobilier/user')) {
                // ng_administrateur_user-index
                if ('/ng/immobilier/user' === $pathinfo) {
                    return array (  '_controller' => 'NG\\AdministrateurBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'ng_administrateur_user-index',);
                }

                // ng_administrateur_user-blocked
                if (0 === strpos($pathinfo, '/ng/immobilier/user/bloquer') && preg_match('#^/ng/immobilier/user/bloquer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ng_administrateur_user-blocked')), array (  '_controller' => 'NG\\AdministrateurBundle\\Controller\\UtilisateurController::blockAction',));
                }

                // ng_administrateur_user-actived
                if (0 === strpos($pathinfo, '/ng/immobilier/user/activer') && preg_match('#^/ng/immobilier/user/activer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ng_administrateur_user-actived')), array (  '_controller' => 'NG\\AdministrateurBundle\\Controller\\UtilisateurController::activAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/ng/immobilier/partenaire')) {
                // ng_administrateur_partner-index
                if ('/ng/immobilier/partenaire' === $pathinfo) {
                    return array (  '_controller' => 'NG\\AdministrateurBundle\\Controller\\PartenaireController::indexAction',  '_route' => 'ng_administrateur_partner-index',);
                }

                // ng_administrateur_partner-add
                if ('/ng/immobilier/partenaire/ajout' === $pathinfo) {
                    return array (  '_controller' => 'NG\\AdministrateurBundle\\Controller\\PartenaireController::addAction',  '_route' => 'ng_administrateur_partner-add',);
                }

            }

        }

        // ng_administrateur_login
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ng_administrateur_login');
            }

            return array (  '_controller' => 'NG\\AdministrateurBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ng_administrateur_login',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile/' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register/' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
