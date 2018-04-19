<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        // ru__RG__core_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__core_homepage')), array (  '_controller' => 'CoreBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'ru',));
        }

        if (0 === strpos($pathinfo, '/my')) {
            // ru__RG__my_quest
            if ($pathinfo === '/my/quest/edit') {
                return array (  '_controller' => 'WebBundle\\Controller\\CustomerController::questEditAction',  '_locale' => 'ru',  '_route' => 'ru__RG__my_quest',);
            }

            // ru__RG__my_time
            if ($pathinfo === '/my/time/edit') {
                return array (  '_controller' => 'WebBundle\\Controller\\CustomerController::timeEditAction',  '_locale' => 'ru',  '_route' => 'ru__RG__my_time',);
            }

            // ru__RG__my_stat
            if ($pathinfo === '/my/statistic') {
                return array (  '_controller' => 'WebBundle\\Controller\\CustomerController::statisticAction',  '_locale' => 'ru',  '_route' => 'ru__RG__my_stat',);
            }

            // ru__RG__my_gallery
            if (0 === strpos($pathinfo, '/my/my_gallery') && preg_match('#^/my/my_gallery/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__my_gallery')), array (  '_controller' => 'WebBundle\\Controller\\CustomerController::galleryAction',  '_locale' => 'ru',));
            }

            // ru__RG__my_set_zakaz
            if ($pathinfo === '/my/bron/quest') {
                return array (  '_controller' => 'WebBundle\\Controller\\CustomerController::bronQuestsAction',  '_locale' => 'ru',  '_route' => 'ru__RG__my_set_zakaz',);
            }

            // ru__RG__admin_quest_zakaz
            if (0 === strpos($pathinfo, '/my/zakaz') && preg_match('#^/my/zakaz/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_quest_zakaz')), array (  '_controller' => 'WebBundle\\Controller\\CustomerController::zakazQuestAction',  '_locale' => 'ru',));
            }

            // ru__RG__admin_quest_edit
            if (0 === strpos($pathinfo, '/my/quest_edit') && preg_match('#^/my/quest_edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_quest_edit')), array (  '_controller' => 'WebBundle\\Controller\\CustomerController::editQuestAction',  '_locale' => 'ru',));
            }

        }

        // ru__RG__web_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ru__RG__web_homepage');
            }

            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'ru',  '_route' => 'ru__RG__web_homepage',);
        }

        if (0 === strpos($pathinfo, '/quest')) {
            // ru__RG__web_quests
            if ($pathinfo === '/quests') {
                return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::questsAction',  '_locale' => 'ru',  '_route' => 'ru__RG__web_quests',);
            }

            // ru__RG__web_quest
            if (preg_match('#^/quest/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__web_quest')), array (  '_controller' => 'WebBundle\\Controller\\DefaultController::questAction',  '_locale' => 'ru',));
            }

            // ru__RG__web_quest_frame
            if (0 === strpos($pathinfo, '/quest/frame') && preg_match('#^/quest/frame/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__web_quest_frame')), array (  '_controller' => 'WebBundle\\Controller\\DefaultController::questFrameAction',  '_locale' => 'ru',));
            }

        }

        // ru__RG__web_akcii
        if ($pathinfo === '/sale') {
            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::akciiAction',  '_locale' => 'ru',  '_route' => 'ru__RG__web_akcii',);
        }

        // ru__RG__web_rules
        if ($pathinfo === '/rules') {
            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::rulesAction',  '_locale' => 'ru',  '_route' => 'ru__RG__web_rules',);
        }

        // ru__RG__web_gallerey
        if ($pathinfo === '/gallerey') {
            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::gallereyAction',  '_locale' => 'ru',  '_route' => 'ru__RG__web_gallerey',);
        }

        // ru__RG__web_fransh
        if ($pathinfo === '/franshiza') {
            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::franshAction',  '_locale' => 'ru',  '_route' => 'ru__RG__web_fransh',);
        }

        // ru__RG__web_map
        if ($pathinfo === '/map') {
            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::mapAction',  '_locale' => 'ru',  '_route' => 'ru__RG__web_map',);
        }

        // ru__RG__web_work
        if ($pathinfo === '/work') {
            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::workAction',  '_locale' => 'ru',  '_route' => 'ru__RG__web_work',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // ru__RG__web_contact
            if ($pathinfo === '/contact') {
                return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::contactAction',  '_locale' => 'ru',  '_route' => 'ru__RG__web_contact',);
            }

            if (0 === strpos($pathinfo, '/category')) {
                // ru__RG__web_cat
                if (preg_match('#^/category/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__web_cat')), array (  '_controller' => 'WebBundle\\Controller\\DefaultController::categoryAction',  '_locale' => 'ru',));
                }

                // ru__RG__web_cat_pechi
                if (0 === strpos($pathinfo, '/category_pechi') && preg_match('#^/category_pechi/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__web_cat_pechi')), array (  '_controller' => 'WebBundle\\Controller\\DefaultController::categoryPechiAction',  '_locale' => 'ru',));
                }

            }

        }

        // ru__RG__my_mail
        if ($pathinfo === '/my/mail') {
            return array (  '_controller' => 'WebBundle\\Controller\\CustomerController::myMailAction',  '_locale' => 'ru',  '_route' => 'ru__RG__my_mail',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/core')) {
                if (0 === strpos($pathinfo, '/admin/core/quest')) {
                    // ru__RG__admin_core_quest_list
                    if ($pathinfo === '/admin/core/quest/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.quest',  '_sonata_name' => 'admin_core_quest_list',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_quest_list',);
                    }

                    // ru__RG__admin_core_quest_create
                    if ($pathinfo === '/admin/core/quest/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.quest',  '_sonata_name' => 'admin_core_quest_create',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_quest_create',);
                    }

                    // ru__RG__admin_core_quest_batch
                    if ($pathinfo === '/admin/core/quest/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.quest',  '_sonata_name' => 'admin_core_quest_batch',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_quest_batch',);
                    }

                    // ru__RG__admin_core_quest_edit
                    if (preg_match('#^/admin/core/quest/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_quest_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.quest',  '_sonata_name' => 'admin_core_quest_edit',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_quest_delete
                    if (preg_match('#^/admin/core/quest/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_quest_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.quest',  '_sonata_name' => 'admin_core_quest_delete',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_quest_show
                    if (preg_match('#^/admin/core/quest/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_quest_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.quest',  '_sonata_name' => 'admin_core_quest_show',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_quest_export
                    if ($pathinfo === '/admin/core/quest/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.quest',  '_sonata_name' => 'admin_core_quest_export',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_quest_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/core/type')) {
                    // ru__RG__admin_core_type_list
                    if ($pathinfo === '/admin/core/type/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'type.quest',  '_sonata_name' => 'admin_core_type_list',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_type_list',);
                    }

                    // ru__RG__admin_core_type_create
                    if ($pathinfo === '/admin/core/type/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'type.quest',  '_sonata_name' => 'admin_core_type_create',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_type_create',);
                    }

                    // ru__RG__admin_core_type_batch
                    if ($pathinfo === '/admin/core/type/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'type.quest',  '_sonata_name' => 'admin_core_type_batch',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_type_batch',);
                    }

                    // ru__RG__admin_core_type_edit
                    if (preg_match('#^/admin/core/type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_type_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'type.quest',  '_sonata_name' => 'admin_core_type_edit',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_type_delete
                    if (preg_match('#^/admin/core/type/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_type_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'type.quest',  '_sonata_name' => 'admin_core_type_delete',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_type_show
                    if (preg_match('#^/admin/core/type/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_type_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'type.quest',  '_sonata_name' => 'admin_core_type_show',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_type_export
                    if ($pathinfo === '/admin/core/type/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'type.quest',  '_sonata_name' => 'admin_core_type_export',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_type_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/core/akcii')) {
                    // ru__RG__admin_core_akcii_list
                    if ($pathinfo === '/admin/core/akcii/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'akcii.quest',  '_sonata_name' => 'admin_core_akcii_list',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_akcii_list',);
                    }

                    // ru__RG__admin_core_akcii_create
                    if ($pathinfo === '/admin/core/akcii/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'akcii.quest',  '_sonata_name' => 'admin_core_akcii_create',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_akcii_create',);
                    }

                    // ru__RG__admin_core_akcii_batch
                    if ($pathinfo === '/admin/core/akcii/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'akcii.quest',  '_sonata_name' => 'admin_core_akcii_batch',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_akcii_batch',);
                    }

                    // ru__RG__admin_core_akcii_edit
                    if (preg_match('#^/admin/core/akcii/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_akcii_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'akcii.quest',  '_sonata_name' => 'admin_core_akcii_edit',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_akcii_delete
                    if (preg_match('#^/admin/core/akcii/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_akcii_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'akcii.quest',  '_sonata_name' => 'admin_core_akcii_delete',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_akcii_show
                    if (preg_match('#^/admin/core/akcii/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_akcii_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'akcii.quest',  '_sonata_name' => 'admin_core_akcii_show',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_akcii_export
                    if ($pathinfo === '/admin/core/akcii/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'akcii.quest',  '_sonata_name' => 'admin_core_akcii_export',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_akcii_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/core/time')) {
                    // ru__RG__admin_core_time_list
                    if ($pathinfo === '/admin/core/time/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.time',  '_sonata_name' => 'admin_core_time_list',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_time_list',);
                    }

                    // ru__RG__admin_core_time_create
                    if ($pathinfo === '/admin/core/time/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.time',  '_sonata_name' => 'admin_core_time_create',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_time_create',);
                    }

                    // ru__RG__admin_core_time_batch
                    if ($pathinfo === '/admin/core/time/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.time',  '_sonata_name' => 'admin_core_time_batch',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_time_batch',);
                    }

                    // ru__RG__admin_core_time_edit
                    if (preg_match('#^/admin/core/time/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_time_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.time',  '_sonata_name' => 'admin_core_time_edit',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_time_delete
                    if (preg_match('#^/admin/core/time/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_time_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.time',  '_sonata_name' => 'admin_core_time_delete',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_time_show
                    if (preg_match('#^/admin/core/time/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_time_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.time',  '_sonata_name' => 'admin_core_time_show',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_time_export
                    if ($pathinfo === '/admin/core/time/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.time',  '_sonata_name' => 'admin_core_time_export',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_time_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/core/visit')) {
                    // ru__RG__admin_core_visit_list
                    if ($pathinfo === '/admin/core/visit/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.visit',  '_sonata_name' => 'admin_core_visit_list',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_visit_list',);
                    }

                    // ru__RG__admin_core_visit_create
                    if ($pathinfo === '/admin/core/visit/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.visit',  '_sonata_name' => 'admin_core_visit_create',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_visit_create',);
                    }

                    // ru__RG__admin_core_visit_batch
                    if ($pathinfo === '/admin/core/visit/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.visit',  '_sonata_name' => 'admin_core_visit_batch',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_visit_batch',);
                    }

                    // ru__RG__admin_core_visit_edit
                    if (preg_match('#^/admin/core/visit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_visit_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.visit',  '_sonata_name' => 'admin_core_visit_edit',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_visit_delete
                    if (preg_match('#^/admin/core/visit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_visit_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.visit',  '_sonata_name' => 'admin_core_visit_delete',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_visit_show
                    if (preg_match('#^/admin/core/visit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_visit_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.visit',  '_sonata_name' => 'admin_core_visit_show',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_visit_export
                    if ($pathinfo === '/admin/core/visit/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.visit',  '_sonata_name' => 'admin_core_visit_export',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_visit_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/core/prymeday')) {
                    // ru__RG__admin_core_prymeday_list
                    if ($pathinfo === '/admin/core/prymeday/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.pryme_day',  '_sonata_name' => 'admin_core_prymeday_list',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_prymeday_list',);
                    }

                    // ru__RG__admin_core_prymeday_create
                    if ($pathinfo === '/admin/core/prymeday/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.pryme_day',  '_sonata_name' => 'admin_core_prymeday_create',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_prymeday_create',);
                    }

                    // ru__RG__admin_core_prymeday_batch
                    if ($pathinfo === '/admin/core/prymeday/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.pryme_day',  '_sonata_name' => 'admin_core_prymeday_batch',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_prymeday_batch',);
                    }

                    // ru__RG__admin_core_prymeday_edit
                    if (preg_match('#^/admin/core/prymeday/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_prymeday_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.pryme_day',  '_sonata_name' => 'admin_core_prymeday_edit',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_prymeday_delete
                    if (preg_match('#^/admin/core/prymeday/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_prymeday_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.pryme_day',  '_sonata_name' => 'admin_core_prymeday_delete',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_prymeday_show
                    if (preg_match('#^/admin/core/prymeday/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_prymeday_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.pryme_day',  '_sonata_name' => 'admin_core_prymeday_show',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_prymeday_export
                    if ($pathinfo === '/admin/core/prymeday/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.pryme_day',  '_sonata_name' => 'admin_core_prymeday_export',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_prymeday_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/core/city')) {
                    // ru__RG__admin_core_city_list
                    if ($pathinfo === '/admin/core/city/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.city',  '_sonata_name' => 'admin_core_city_list',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_city_list',);
                    }

                    // ru__RG__admin_core_city_create
                    if ($pathinfo === '/admin/core/city/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.city',  '_sonata_name' => 'admin_core_city_create',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_city_create',);
                    }

                    // ru__RG__admin_core_city_batch
                    if ($pathinfo === '/admin/core/city/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.city',  '_sonata_name' => 'admin_core_city_batch',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_city_batch',);
                    }

                    // ru__RG__admin_core_city_edit
                    if (preg_match('#^/admin/core/city/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_city_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.city',  '_sonata_name' => 'admin_core_city_edit',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_city_delete
                    if (preg_match('#^/admin/core/city/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_city_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.city',  '_sonata_name' => 'admin_core_city_delete',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_city_show
                    if (preg_match('#^/admin/core/city/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_city_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.city',  '_sonata_name' => 'admin_core_city_show',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_city_export
                    if ($pathinfo === '/admin/core/city/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.city',  '_sonata_name' => 'admin_core_city_export',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_city_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/core/gallery')) {
                    // ru__RG__admin_core_gallery_list
                    if ($pathinfo === '/admin/core/gallery/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.gallery',  '_sonata_name' => 'admin_core_gallery_list',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_gallery_list',);
                    }

                    // ru__RG__admin_core_gallery_create
                    if ($pathinfo === '/admin/core/gallery/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.gallery',  '_sonata_name' => 'admin_core_gallery_create',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_gallery_create',);
                    }

                    // ru__RG__admin_core_gallery_batch
                    if ($pathinfo === '/admin/core/gallery/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.gallery',  '_sonata_name' => 'admin_core_gallery_batch',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_gallery_batch',);
                    }

                    // ru__RG__admin_core_gallery_edit
                    if (preg_match('#^/admin/core/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_gallery_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.gallery',  '_sonata_name' => 'admin_core_gallery_edit',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_gallery_delete
                    if (preg_match('#^/admin/core/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_gallery_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.gallery',  '_sonata_name' => 'admin_core_gallery_delete',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_gallery_show
                    if (preg_match('#^/admin/core/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_gallery_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.gallery',  '_sonata_name' => 'admin_core_gallery_show',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_gallery_export
                    if ($pathinfo === '/admin/core/gallery/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.gallery',  '_sonata_name' => 'admin_core_gallery_export',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_gallery_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/core/rule')) {
                    // ru__RG__admin_core_rule_list
                    if ($pathinfo === '/admin/core/rule/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.rule',  '_sonata_name' => 'admin_core_rule_list',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_rule_list',);
                    }

                    // ru__RG__admin_core_rule_create
                    if ($pathinfo === '/admin/core/rule/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.rule',  '_sonata_name' => 'admin_core_rule_create',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_rule_create',);
                    }

                    // ru__RG__admin_core_rule_batch
                    if ($pathinfo === '/admin/core/rule/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.rule',  '_sonata_name' => 'admin_core_rule_batch',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_rule_batch',);
                    }

                    // ru__RG__admin_core_rule_edit
                    if (preg_match('#^/admin/core/rule/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_rule_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.rule',  '_sonata_name' => 'admin_core_rule_edit',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_rule_delete
                    if (preg_match('#^/admin/core/rule/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_rule_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.rule',  '_sonata_name' => 'admin_core_rule_delete',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_rule_show
                    if (preg_match('#^/admin/core/rule/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_core_rule_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.rule',  '_sonata_name' => 'admin_core_rule_show',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_core_rule_export
                    if ($pathinfo === '/admin/core/rule/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.rule',  '_sonata_name' => 'admin_core_rule_export',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_core_rule_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                    // ru__RG__admin_sonata_user_user_list
                    if ($pathinfo === '/admin/sonata/user/user/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_sonata_user_user_list',);
                    }

                    // ru__RG__admin_sonata_user_user_create
                    if ($pathinfo === '/admin/sonata/user/user/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_sonata_user_user_create',);
                    }

                    // ru__RG__admin_sonata_user_user_batch
                    if ($pathinfo === '/admin/sonata/user/user/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_sonata_user_user_batch',);
                    }

                    // ru__RG__admin_sonata_user_user_edit
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_sonata_user_user_delete
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_sonata_user_user_show
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_sonata_user_user_export
                    if ($pathinfo === '/admin/sonata/user/user/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_sonata_user_user_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                    // ru__RG__admin_sonata_user_group_list
                    if ($pathinfo === '/admin/sonata/user/group/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_sonata_user_group_list',);
                    }

                    // ru__RG__admin_sonata_user_group_create
                    if ($pathinfo === '/admin/sonata/user/group/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_sonata_user_group_create',);
                    }

                    // ru__RG__admin_sonata_user_group_batch
                    if ($pathinfo === '/admin/sonata/user/group/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_sonata_user_group_batch',);
                    }

                    // ru__RG__admin_sonata_user_group_edit
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_sonata_user_group_delete
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_sonata_user_group_show
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',  '_locale' => 'ru',));
                    }

                    // ru__RG__admin_sonata_user_group_export
                    if ($pathinfo === '/admin/sonata/user/group/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_sonata_user_group_export',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // ru__RG__fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_locale' => 'ru',  '_route' => 'ru__RG__fos_user_security_login',);
                }

                // ru__RG__fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ru__RG__fos_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_locale' => 'ru',  '_route' => 'ru__RG__fos_user_security_check',);
                }
                not_ru__RG__fos_user_security_check:

            }

            // ru__RG__fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_locale' => 'ru',  '_route' => 'ru__RG__fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // ru__RG__sonata_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_security_login',);
                }

                // ru__RG__sonata_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ru__RG__sonata_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_security_check',);
                }
                not_ru__RG__sonata_user_security_check:

            }

            // ru__RG__sonata_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // ru__RG__fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ru__RG__fos_user_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_locale' => 'ru',  '_route' => 'ru__RG__fos_user_resetting_request',);
            }
            not_ru__RG__fos_user_resetting_request:

            // ru__RG__fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ru__RG__fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_locale' => 'ru',  '_route' => 'ru__RG__fos_user_resetting_send_email',);
            }
            not_ru__RG__fos_user_resetting_send_email:

            // ru__RG__fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ru__RG__fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_locale' => 'ru',  '_route' => 'ru__RG__fos_user_resetting_check_email',);
            }
            not_ru__RG__fos_user_resetting_check_email:

            if (0 === strpos($pathinfo, '/resetting/re')) {
                // ru__RG__fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ru__RG__fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__fos_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',  '_locale' => 'ru',));
                }
                not_ru__RG__fos_user_resetting_reset:

                // ru__RG__sonata_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ru__RG__sonata_user_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_resetting_request',);
                }
                not_ru__RG__sonata_user_resetting_request:

            }

            // ru__RG__sonata_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ru__RG__sonata_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_resetting_send_email',);
            }
            not_ru__RG__sonata_user_resetting_send_email:

            // ru__RG__sonata_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ru__RG__sonata_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_resetting_check_email',);
            }
            not_ru__RG__sonata_user_resetting_check_email:

            // ru__RG__sonata_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ru__RG__sonata_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__sonata_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',  '_locale' => 'ru',));
            }
            not_ru__RG__sonata_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // ru__RG__fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ru__RG__fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ru__RG__fos_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_locale' => 'ru',  '_route' => 'ru__RG__fos_user_profile_show',);
            }
            not_ru__RG__fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // ru__RG__fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_locale' => 'ru',  '_route' => 'ru__RG__fos_user_profile_edit_authentication',);
                }

                // ru__RG__fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_locale' => 'ru',  '_route' => 'ru__RG__fos_user_profile_edit',);
                }

            }

            // ru__RG__sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ru__RG__sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ru__RG__sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_profile_show',);
            }
            not_ru__RG__sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // ru__RG__sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_profile_edit_authentication',);
                }

                // ru__RG__sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_profile_edit',);
                }

            }

            if (0 === strpos($pathinfo, '/profile/change-password')) {
                // ru__RG__fos_user_change_password
                if ($pathinfo === '/profile/change-password') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ru__RG__fos_user_change_password;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_locale' => 'ru',  '_route' => 'ru__RG__fos_user_change_password',);
                }
                not_ru__RG__fos_user_change_password:

                // ru__RG__sonata_user_change_password
                if ($pathinfo === '/profile/change-password') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ru__RG__sonata_user_change_password;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_change_password',);
                }
                not_ru__RG__sonata_user_change_password:

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // ru__RG__nelmio_api_doc_index
            if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ru__RG__nelmio_api_doc_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',  '_locale' => 'ru',));
            }
            not_ru__RG__nelmio_api_doc_index:

            if (0 === strpos($pathinfo, '/admin')) {
                // ru__RG__sonata_admin_redirect
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ru__RG__sonata_admin_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_admin_redirect',);
                }

                // ru__RG__sonata_admin_dashboard
                if ($pathinfo === '/admin/dashboard') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/core')) {
                    // ru__RG__sonata_admin_retrieve_form_element
                    if ($pathinfo === '/admin/core/get-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_admin_retrieve_form_element',);
                    }

                    // ru__RG__sonata_admin_append_form_element
                    if ($pathinfo === '/admin/core/append-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_admin_append_form_element',);
                    }

                    // ru__RG__sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',  '_locale' => 'ru',));
                    }

                    // ru__RG__sonata_admin_set_object_field_value
                    if ($pathinfo === '/admin/core/set-object-field-value') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_admin_set_object_field_value',);
                    }

                }

                // ru__RG__sonata_admin_search
                if ($pathinfo === '/admin/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_admin_search',);
                }

                // ru__RG__sonata_admin_retrieve_autocomplete_items
                if ($pathinfo === '/admin/core/get-autocomplete-items') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_admin_retrieve_autocomplete_items',);
                }

                if (0 === strpos($pathinfo, '/admin/log')) {
                    if (0 === strpos($pathinfo, '/admin/login')) {
                        // ru__RG__sonata_user_admin_security_login
                        if ($pathinfo === '/admin/login') {
                            return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_admin_security_login',);
                        }

                        // ru__RG__sonata_user_admin_security_check
                        if ($pathinfo === '/admin/login_check') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_ru__RG__sonata_user_admin_security_check;
                            }

                            return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_admin_security_check',);
                        }
                        not_ru__RG__sonata_user_admin_security_check:

                    }

                    // ru__RG__sonata_user_admin_security_logout
                    if ($pathinfo === '/admin/logout') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_locale' => 'ru',  '_route' => 'ru__RG__sonata_user_admin_security_logout',);
                    }

                }

            }

        }

        // ru__RG__fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',  '_locale' => 'ru',));
        }

        // ru__RG__comur_api_upload
        if ($pathinfo === '/upload') {
            return array (  '_controller' => 'Comur\\ImageBundle\\Controller\\UploadController::uploadImageAction',  '_locale' => 'ru',  '_route' => 'ru__RG__comur_api_upload',);
        }

        // ru__RG__comur_api_crop
        if ($pathinfo === '/crop') {
            return array (  '_controller' => 'Comur\\ImageBundle\\Controller\\UploadController::cropImageAction',  '_locale' => 'ru',  '_route' => 'ru__RG__comur_api_crop',);
        }

        // ru__RG__comur_api_image_library
        if ($pathinfo === '/image-library') {
            return array (  '_controller' => 'Comur\\ImageBundle\\Controller\\UploadController::getLibraryImagesAction',  '_locale' => 'ru',  '_route' => 'ru__RG__comur_api_image_library',);
        }

        if (0 === strpos($pathinfo, '/restapi')) {
            if (0 === strpos($pathinfo, '/restapi/reserv')) {
                // ru__RG__index_reserv
                if (0 === strpos($pathinfo, '/restapi/reservs') && preg_match('#^/restapi/reservs/(?P<name>[^/]++)/index$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_ru__RG__index_reserv;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__index_reserv')), array (  '_controller' => 'RestApiBundle\\Controller\\DefaultController::indexAction',  '_format' => 'json',  '_locale' => 'ru',));
                }
                not_ru__RG__index_reserv:

                // ru__RG__reserved_reserv
                if ($pathinfo === '/restapi/reserved') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ru__RG__reserved_reserv;
                    }

                    return array (  '_controller' => 'RestApiBundle\\Controller\\DefaultController::reservedAction',  '_format' => 'json',  '_locale' => 'ru',  '_route' => 'ru__RG__reserved_reserv',);
                }
                not_ru__RG__reserved_reserv:

            }

            if (0 === strpos($pathinfo, '/restapi/s')) {
                // ru__RG__admit_reserv_reserved
                if ($pathinfo === '/restapi/set/reserved') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ru__RG__admit_reserv_reserved;
                    }

                    return array (  '_controller' => 'RestApiBundle\\Controller\\DefaultController::admitReservedAction',  '_format' => 'json',  '_locale' => 'ru',  '_route' => 'ru__RG__admit_reserv_reserved',);
                }
                not_ru__RG__admit_reserv_reserved:

                // ru__RG__success_reserv_time
                if ($pathinfo === '/restapi/success_time') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ru__RG__success_reserv_time;
                    }

                    return array (  '_controller' => 'RestApiBundle\\Controller\\DefaultController::successTimeAction',  '_format' => 'json',  '_locale' => 'ru',  '_route' => 'ru__RG__success_reserv_time',);
                }
                not_ru__RG__success_reserv_time:

            }

            // ru__RG__remove_reserv_time
            if ($pathinfo === '/restapi/remove_time') {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ru__RG__remove_reserv_time;
                }

                return array (  '_controller' => 'RestApiBundle\\Controller\\DefaultController::removeTimeAction',  '_format' => 'json',  '_locale' => 'ru',  '_route' => 'ru__RG__remove_reserv_time',);
            }
            not_ru__RG__remove_reserv_time:

            // ru__RG__time_reserv
            if ($pathinfo === '/restapi/time') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ru__RG__time_reserv;
                }

                return array (  '_controller' => 'RestApiBundle\\Controller\\DefaultController::timeAction',  '_format' => 'json',  '_locale' => 'ru',  '_route' => 'ru__RG__time_reserv',);
            }
            not_ru__RG__time_reserv:

            // ru__RG__send_reserv_sms
            if (0 === strpos($pathinfo, '/restapi/sendSMS') && preg_match('#^/restapi/sendSMS/(?P<textSms>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ru__RG__send_reserv_sms;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__send_reserv_sms')), array (  '_controller' => 'RestApiBundle\\Controller\\DefaultController::sendSmsAction',  '_format' => 'json',  '_locale' => 'ru',));
            }
            not_ru__RG__send_reserv_sms:

        }

        if (0 === strpos($pathinfo, '/api/v1/qg')) {
            // ru__RG__reserved_questgames
            if (0 === strpos($pathinfo, '/api/v1/qg/quests') && preg_match('#^/api/v1/qg/quests/(?P<id>[^/]++)/timeslots(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ru__RG__reserved_questgames;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__reserved_questgames')), array (  '_controller' => 'QuestGamesBundle\\Controller\\DefaultController::reservedAction',  '_format' => 'json',  '_locale' => 'ru',));
            }
            not_ru__RG__reserved_questgames:

            if (0 === strpos($pathinfo, '/api/v1/qg/s')) {
                // ru__RG__admit_questgames_reserved
                if ($pathinfo === '/api/v1/qg/set/reserved') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ru__RG__admit_questgames_reserved;
                    }

                    return array (  '_controller' => 'QuestGamesBundle\\Controller\\DefaultController::admitReservedAction',  '_format' => 'json',  '_locale' => 'ru',  '_route' => 'ru__RG__admit_questgames_reserved',);
                }
                not_ru__RG__admit_questgames_reserved:

                // ru__RG__success_questgames_time
                if ($pathinfo === '/api/v1/qg/success_time') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ru__RG__success_questgames_time;
                    }

                    return array (  '_controller' => 'QuestGamesBundle\\Controller\\DefaultController::successTimeAction',  '_format' => 'json',  '_locale' => 'ru',  '_route' => 'ru__RG__success_questgames_time',);
                }
                not_ru__RG__success_questgames_time:

            }

            // ru__RG__remove_questgames_time
            if ($pathinfo === '/api/v1/qg/remove_time') {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ru__RG__remove_questgames_time;
                }

                return array (  '_controller' => 'QuestGamesBundle\\Controller\\DefaultController::removeTimeAction',  '_format' => 'json',  '_locale' => 'ru',  '_route' => 'ru__RG__remove_questgames_time',);
            }
            not_ru__RG__remove_questgames_time:

            // ru__RG__time_questgames
            if ($pathinfo === '/api/v1/qg/time') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ru__RG__time_questgames;
                }

                return array (  '_controller' => 'QuestGamesBundle\\Controller\\DefaultController::timeAction',  '_format' => 'json',  '_locale' => 'ru',  '_route' => 'ru__RG__time_questgames',);
            }
            not_ru__RG__time_questgames:

            if (0 === strpos($pathinfo, '/api/v1/qg/quests')) {
                // ru__RG__check_questgames_reserved
                if (preg_match('#^/api/v1/qg/quests/(?P<id>[^/]++)/timeslots/(?P<timestamp>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ru__RG__check_questgames_reserved;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__check_questgames_reserved')), array (  '_controller' => 'QuestGamesBundle\\Controller\\DefaultController::checkReservedAction',  '_format' => 'json',  '_locale' => 'ru',));
                }
                not_ru__RG__check_questgames_reserved:

                // ru__RG__set_questgames_reserved
                if (preg_match('#^/api/v1/qg/quests/(?P<id>[^/]++)/timeslots/(?P<timestamp>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_ru__RG__set_questgames_reserved;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__set_questgames_reserved')), array (  '_controller' => 'QuestGamesBundle\\Controller\\DefaultController::setReservedAction',  '_format' => 'json',  '_locale' => 'ru',));
                }
                not_ru__RG__set_questgames_reserved:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
