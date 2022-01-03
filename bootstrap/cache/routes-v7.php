<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2jsWA4n8yc3inSok',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSLogin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'CMSAuth',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSLogout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/forgotPassword/mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSForgotMail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSRoot',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/submitThumbnail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSSubmitThumbnail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/uploadThumbnail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSUploadThumbnail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/uploadContentImg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSContentImgUpload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSUser',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/users/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSUserAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/users/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSUserAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBanner',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/banner/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBannerAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/banner/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBannerAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBlog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/blog/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBlogAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/blog/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBlogAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSProduct',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/product/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSProductAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/product/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSProductAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/category/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSCategoryAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/category/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSCategoryAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/tag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSTag',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/tag/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSTagAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/tag/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSTagAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBrand',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/brand/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBrandAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/brand/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBrandAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSMenu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/menu/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSMenuAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/menu/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSMenuAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/message/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSMessageAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSPage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/page/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSPageAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/page/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSPageAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSService',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/service/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSServiceAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/service/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSServiceAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSLog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/translate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSTranslate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/translate/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSTranslateAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/translate/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSTranslateAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSSettings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/settings/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSSettingsAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSTeam',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/team/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSTeamAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/team/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSTeamAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSCustomer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/customer/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSCustomerAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/bank-accounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBankAccount',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/bank-accounts/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBankAccountAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/bank-accounts/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBankAccountAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSCoupon',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/coupon/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSCouponAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/coupon/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSCouponAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSOrders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/orders/submitShippingNo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSOrderShippingNum',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/orders/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSOrderUpdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSSlider',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/slider/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSSliderAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel/slider/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSSliderAction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/LanguageChange' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LanguageChange',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/actionLike' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BlogLike',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sendMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'SendMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/panel/(?|forgotPassword/reset(?|(?:/([^/]++))?(*:128)|(*:136))|t(?|humbnail/([^/]++)/([^/]++)(*:175)|ag/edit/([^/]++)/([^/]++)(*:208)|ranslate/edit/([^/]++)(*:238)|eam/edit/([^/]++)(*:263))|users/edit/([^/]++)(*:291)|b(?|an(?|ner/edit/([^/]++)(*:325)|k\\-accounts/edit/([^/]++)(*:358))|log/edit/([^/]++)/([^/]++)(*:393)|rand/edit/([^/]++)/([^/]++)(*:428))|p(?|roduct/edit/([^/]++)/([^/]++)(*:470)|age/edit/([^/]++)/([^/]++)(*:504))|c(?|ategory/edit/([^/]++)/([^/]++)(*:547)|ustomer/edit/([^/]++)(*:576)|oupon/edit/([^/]++)(*:603))|me(?|nu/edit/([^/]++)/([^/]++)(*:642)|ssage/browse/([^/]++)(*:671))|service/edit/([^/]++)/([^/]++)(*:710)|orders/browse/([^/]++)(*:740))|/([^/]++)?(*:759)|/lang/([^/]++)(*:781))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSForgotPage',
            'token' => NULL,
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSForgotCheck',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSThumbnail',
          ),
          1 => 
          array (
            0 => 'module',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      208 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSTagEdit',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSTranslateEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSTeamEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSUserEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBannerEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBankAccountEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBlogEdit',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSBrandEdit',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSProductEdit',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      504 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSPageEdit',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSCategoryEdit',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSCustomerEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSCouponEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSMenuEdit',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      671 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSMessageBrowse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      710 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSServiceEdit',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CMSOrderBrowse',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      759 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AppRoot',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      781 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ChangeLang',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2jsWA4n8yc3inSok' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000044211e9a000000001b5f8885";}";s:4:"hash";s:44:"EaJRTfBmBHx9Bvz1kyPOGtFSKzSry1NH+orTzsdcJok=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2jsWA4n8yc3inSok',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSLogin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Panel\\AuthController@login',
        'namespace' => NULL,
        'prefix' => 'panel',
        'where' => 
        array (
        ),
        'as' => 'CMSLogin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSLogout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Panel\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'panel',
        'where' => 
        array (
        ),
        'as' => 'CMSLogout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSAuth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\AuthController@checkLogin',
        'controller' => 'App\\Http\\Controllers\\Panel\\AuthController@checkLogin',
        'namespace' => NULL,
        'prefix' => 'panel',
        'where' => 
        array (
        ),
        'as' => 'CMSAuth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSForgotMail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/forgotPassword/mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\AuthController@sendMail',
        'controller' => 'App\\Http\\Controllers\\Panel\\AuthController@sendMail',
        'namespace' => NULL,
        'prefix' => 'panel/forgotPassword',
        'where' => 
        array (
        ),
        'as' => 'CMSForgotMail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSForgotPage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/forgotPassword/reset/{token?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\AuthController@reset',
        'controller' => 'App\\Http\\Controllers\\Panel\\AuthController@reset',
        'namespace' => NULL,
        'prefix' => 'panel/forgotPassword',
        'where' => 
        array (
        ),
        'as' => 'CMSForgotPage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSForgotCheck' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/forgotPassword/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\AuthController@checkForgot',
        'controller' => 'App\\Http\\Controllers\\Panel\\AuthController@checkForgot',
        'namespace' => NULL,
        'prefix' => 'panel/forgotPassword',
        'where' => 
        array (
        ),
        'as' => 'CMSForgotCheck',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSRoot' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\HomeController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Panel\\HomeController@dashboard',
        'namespace' => NULL,
        'prefix' => 'panel',
        'where' => 
        array (
        ),
        'as' => 'CMSRoot',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSThumbnail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/thumbnail/{module}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\ThumbnailController@thumbnail',
        'controller' => 'App\\Http\\Controllers\\Panel\\ThumbnailController@thumbnail',
        'namespace' => NULL,
        'prefix' => 'panel',
        'where' => 
        array (
        ),
        'as' => 'CMSThumbnail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSSubmitThumbnail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/submitThumbnail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\ThumbnailController@submit',
        'controller' => 'App\\Http\\Controllers\\Panel\\ThumbnailController@submit',
        'namespace' => NULL,
        'prefix' => 'panel',
        'where' => 
        array (
        ),
        'as' => 'CMSSubmitThumbnail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSUploadThumbnail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/uploadThumbnail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\UploadController@uploadThumbnail',
        'controller' => 'App\\Http\\Controllers\\Panel\\UploadController@uploadThumbnail',
        'namespace' => NULL,
        'prefix' => 'panel',
        'where' => 
        array (
        ),
        'as' => 'CMSUploadThumbnail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSContentImgUpload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/uploadContentImg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\UploadController@uploadContentImg',
        'controller' => 'App\\Http\\Controllers\\Panel\\UploadController@uploadContentImg',
        'namespace' => NULL,
        'prefix' => 'panel',
        'where' => 
        array (
        ),
        'as' => 'CMSContentImgUpload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSUser' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\UserController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\UserController@list',
        'namespace' => NULL,
        'prefix' => 'panel/users',
        'where' => 
        array (
        ),
        'as' => 'CMSUser',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSUserAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/users/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\UserController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\UserController@add',
        'namespace' => NULL,
        'prefix' => 'panel/users',
        'where' => 
        array (
        ),
        'as' => 'CMSUserAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSUserEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\UserController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/users',
        'where' => 
        array (
        ),
        'as' => 'CMSUserEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSUserAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/users/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\UserController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\UserController@action',
        'namespace' => NULL,
        'prefix' => 'panel/users',
        'where' => 
        array (
        ),
        'as' => 'CMSUserAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBanner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BannerController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\BannerController@list',
        'namespace' => NULL,
        'prefix' => 'panel/banner',
        'where' => 
        array (
        ),
        'as' => 'CMSBanner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBannerAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/banner/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BannerController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\BannerController@add',
        'namespace' => NULL,
        'prefix' => 'panel/banner',
        'where' => 
        array (
        ),
        'as' => 'CMSBannerAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBannerEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/banner/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BannerController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\BannerController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/banner',
        'where' => 
        array (
        ),
        'as' => 'CMSBannerEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBannerAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/banner/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BannerController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\BannerController@action',
        'namespace' => NULL,
        'prefix' => 'panel/banner',
        'where' => 
        array (
        ),
        'as' => 'CMSBannerAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBlog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BlogController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\BlogController@list',
        'namespace' => NULL,
        'prefix' => 'panel/blog',
        'where' => 
        array (
        ),
        'as' => 'CMSBlog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBlogAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/blog/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BlogController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\BlogController@add',
        'namespace' => NULL,
        'prefix' => 'panel/blog',
        'where' => 
        array (
        ),
        'as' => 'CMSBlogAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBlogEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/blog/edit/{id}/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\BlogController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/blog',
        'where' => 
        array (
        ),
        'as' => 'CMSBlogEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBlogAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/blog/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BlogController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\BlogController@action',
        'namespace' => NULL,
        'prefix' => 'panel/blog',
        'where' => 
        array (
        ),
        'as' => 'CMSBlogAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSProduct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\ProductController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\ProductController@list',
        'namespace' => NULL,
        'prefix' => 'panel/product',
        'where' => 
        array (
        ),
        'as' => 'CMSProduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSProductAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/product/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\ProductController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\ProductController@add',
        'namespace' => NULL,
        'prefix' => 'panel/product',
        'where' => 
        array (
        ),
        'as' => 'CMSProductAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSProductEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/product/edit/{id}/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/product',
        'where' => 
        array (
        ),
        'as' => 'CMSProductEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSProductAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/product/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\ProductController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\ProductController@action',
        'namespace' => NULL,
        'prefix' => 'panel/product',
        'where' => 
        array (
        ),
        'as' => 'CMSProductAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\CategoryController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\CategoryController@list',
        'namespace' => NULL,
        'prefix' => 'panel/category',
        'where' => 
        array (
        ),
        'as' => 'CMSCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSCategoryAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/category/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\CategoryController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\CategoryController@add',
        'namespace' => NULL,
        'prefix' => 'panel/category',
        'where' => 
        array (
        ),
        'as' => 'CMSCategoryAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSCategoryEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/category/edit/{id}/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/category',
        'where' => 
        array (
        ),
        'as' => 'CMSCategoryEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSCategoryAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/category/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\CategoryController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\CategoryController@action',
        'namespace' => NULL,
        'prefix' => 'panel/category',
        'where' => 
        array (
        ),
        'as' => 'CMSCategoryAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSTag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\TagController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\TagController@list',
        'namespace' => NULL,
        'prefix' => 'panel/tag',
        'where' => 
        array (
        ),
        'as' => 'CMSTag',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSTagAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/tag/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\TagController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\TagController@add',
        'namespace' => NULL,
        'prefix' => 'panel/tag',
        'where' => 
        array (
        ),
        'as' => 'CMSTagAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSTagEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/tag/edit/{id}/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\TagController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\TagController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/tag',
        'where' => 
        array (
        ),
        'as' => 'CMSTagEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSTagAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/tag/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\TagController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\TagController@action',
        'namespace' => NULL,
        'prefix' => 'panel/tag',
        'where' => 
        array (
        ),
        'as' => 'CMSTagAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBrand' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BrandController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\BrandController@list',
        'namespace' => NULL,
        'prefix' => 'panel/brand',
        'where' => 
        array (
        ),
        'as' => 'CMSBrand',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBrandAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/brand/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BrandController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\BrandController@add',
        'namespace' => NULL,
        'prefix' => 'panel/brand',
        'where' => 
        array (
        ),
        'as' => 'CMSBrandAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBrandEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/brand/edit/{id}/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BrandController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\BrandController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/brand',
        'where' => 
        array (
        ),
        'as' => 'CMSBrandEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBrandAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/brand/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BrandController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\BrandController@action',
        'namespace' => NULL,
        'prefix' => 'panel/brand',
        'where' => 
        array (
        ),
        'as' => 'CMSBrandAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSMenu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\MenuController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\MenuController@list',
        'namespace' => NULL,
        'prefix' => 'panel/menu',
        'where' => 
        array (
        ),
        'as' => 'CMSMenu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSMenuAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/menu/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\MenuController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\MenuController@add',
        'namespace' => NULL,
        'prefix' => 'panel/menu',
        'where' => 
        array (
        ),
        'as' => 'CMSMenuAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSMenuEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/menu/edit/{id}/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\MenuController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\MenuController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/menu',
        'where' => 
        array (
        ),
        'as' => 'CMSMenuEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSMenuAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/menu/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\MenuController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\MenuController@action',
        'namespace' => NULL,
        'prefix' => 'panel/menu',
        'where' => 
        array (
        ),
        'as' => 'CMSMenuAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSMessage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\MessageController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\MessageController@list',
        'namespace' => NULL,
        'prefix' => 'panel/message',
        'where' => 
        array (
        ),
        'as' => 'CMSMessage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSMessageBrowse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/message/browse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\MessageController@browse',
        'controller' => 'App\\Http\\Controllers\\Panel\\MessageController@browse',
        'namespace' => NULL,
        'prefix' => 'panel/message',
        'where' => 
        array (
        ),
        'as' => 'CMSMessageBrowse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSMessageAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/message/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\MessageController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\MessageController@action',
        'namespace' => NULL,
        'prefix' => 'panel/message',
        'where' => 
        array (
        ),
        'as' => 'CMSMessageAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSPage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\PageController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\PageController@list',
        'namespace' => NULL,
        'prefix' => 'panel/page',
        'where' => 
        array (
        ),
        'as' => 'CMSPage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSPageAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/page/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\PageController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\PageController@add',
        'namespace' => NULL,
        'prefix' => 'panel/page',
        'where' => 
        array (
        ),
        'as' => 'CMSPageAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSPageEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/page/edit/{id}/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\PageController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\PageController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/page',
        'where' => 
        array (
        ),
        'as' => 'CMSPageEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSPageAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/page/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\PageController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\PageController@action',
        'namespace' => NULL,
        'prefix' => 'panel/page',
        'where' => 
        array (
        ),
        'as' => 'CMSPageAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSService' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\ServiceController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\ServiceController@list',
        'namespace' => NULL,
        'prefix' => 'panel/service',
        'where' => 
        array (
        ),
        'as' => 'CMSService',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSServiceAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/service/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\ServiceController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\ServiceController@add',
        'namespace' => NULL,
        'prefix' => 'panel/service',
        'where' => 
        array (
        ),
        'as' => 'CMSServiceAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSServiceEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/service/edit/{id}/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\ServiceController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\ServiceController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/service',
        'where' => 
        array (
        ),
        'as' => 'CMSServiceEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSServiceAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/service/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\ServiceController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\ServiceController@action',
        'namespace' => NULL,
        'prefix' => 'panel/service',
        'where' => 
        array (
        ),
        'as' => 'CMSServiceAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSLog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\LogController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\LogController@list',
        'namespace' => NULL,
        'prefix' => 'panel',
        'where' => 
        array (
        ),
        'as' => 'CMSLog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSTranslate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/translate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\TranslateController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\TranslateController@list',
        'namespace' => NULL,
        'prefix' => 'panel/translate',
        'where' => 
        array (
        ),
        'as' => 'CMSTranslate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSTranslateAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/translate/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\TranslateController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\TranslateController@add',
        'namespace' => NULL,
        'prefix' => 'panel/translate',
        'where' => 
        array (
        ),
        'as' => 'CMSTranslateAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSTranslateEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/translate/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\TranslateController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\TranslateController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/translate',
        'where' => 
        array (
        ),
        'as' => 'CMSTranslateEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSTranslateAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/translate/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\TranslateController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\TranslateController@action',
        'namespace' => NULL,
        'prefix' => 'panel/translate',
        'where' => 
        array (
        ),
        'as' => 'CMSTranslateAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSSettings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\SettingsController@index',
        'controller' => 'App\\Http\\Controllers\\Panel\\SettingsController@index',
        'namespace' => NULL,
        'prefix' => 'panel/settings',
        'where' => 
        array (
        ),
        'as' => 'CMSSettings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSSettingsAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/settings/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\SettingsController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\SettingsController@action',
        'namespace' => NULL,
        'prefix' => 'panel/settings',
        'where' => 
        array (
        ),
        'as' => 'CMSSettingsAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSTeam' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\TeamController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\TeamController@list',
        'namespace' => NULL,
        'prefix' => 'panel/team',
        'where' => 
        array (
        ),
        'as' => 'CMSTeam',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSTeamAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/team/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\TeamController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\TeamController@add',
        'namespace' => NULL,
        'prefix' => 'panel/team',
        'where' => 
        array (
        ),
        'as' => 'CMSTeamAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSTeamEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/team/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\TeamController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\TeamController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/team',
        'where' => 
        array (
        ),
        'as' => 'CMSTeamEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSTeamAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/team/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\TeamController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\TeamController@action',
        'namespace' => NULL,
        'prefix' => 'panel/team',
        'where' => 
        array (
        ),
        'as' => 'CMSTeamAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSCustomer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\CustomerController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\CustomerController@list',
        'namespace' => NULL,
        'prefix' => 'panel/customer',
        'where' => 
        array (
        ),
        'as' => 'CMSCustomer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSCustomerEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/customer/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\CustomerController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\CustomerController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/customer',
        'where' => 
        array (
        ),
        'as' => 'CMSCustomerEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSCustomerAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/customer/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\CustomerController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\CustomerController@action',
        'namespace' => NULL,
        'prefix' => 'panel/customer',
        'where' => 
        array (
        ),
        'as' => 'CMSCustomerAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBankAccount' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/bank-accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BankAccountController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\BankAccountController@list',
        'namespace' => NULL,
        'prefix' => 'panel/bank-accounts',
        'where' => 
        array (
        ),
        'as' => 'CMSBankAccount',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBankAccountAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/bank-accounts/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BankAccountController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\BankAccountController@add',
        'namespace' => NULL,
        'prefix' => 'panel/bank-accounts',
        'where' => 
        array (
        ),
        'as' => 'CMSBankAccountAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBankAccountEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/bank-accounts/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BankAccountController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\BankAccountController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/bank-accounts',
        'where' => 
        array (
        ),
        'as' => 'CMSBankAccountEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSBankAccountAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/bank-accounts/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BankAccountController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\BankAccountController@action',
        'namespace' => NULL,
        'prefix' => 'panel/bank-accounts',
        'where' => 
        array (
        ),
        'as' => 'CMSBankAccountAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSCoupon' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\CouponController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\CouponController@list',
        'namespace' => NULL,
        'prefix' => 'panel/coupon',
        'where' => 
        array (
        ),
        'as' => 'CMSCoupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSCouponAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/coupon/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\CouponController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\CouponController@add',
        'namespace' => NULL,
        'prefix' => 'panel/coupon',
        'where' => 
        array (
        ),
        'as' => 'CMSCouponAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSCouponEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/coupon/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\CouponController@edit',
        'controller' => 'App\\Http\\Controllers\\Panel\\CouponController@edit',
        'namespace' => NULL,
        'prefix' => 'panel/coupon',
        'where' => 
        array (
        ),
        'as' => 'CMSCouponEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSCouponAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/coupon/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\CouponController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\CouponController@action',
        'namespace' => NULL,
        'prefix' => 'panel/coupon',
        'where' => 
        array (
        ),
        'as' => 'CMSCouponAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSOrders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\OrderController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\OrderController@list',
        'namespace' => NULL,
        'prefix' => 'panel/orders',
        'where' => 
        array (
        ),
        'as' => 'CMSOrders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSOrderBrowse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/orders/browse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\OrderController@browse',
        'controller' => 'App\\Http\\Controllers\\Panel\\OrderController@browse',
        'namespace' => NULL,
        'prefix' => 'panel/orders',
        'where' => 
        array (
        ),
        'as' => 'CMSOrderBrowse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSOrderShippingNum' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/orders/submitShippingNo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\OrderController@submitShippingNo',
        'controller' => 'App\\Http\\Controllers\\Panel\\OrderController@submitShippingNo',
        'namespace' => NULL,
        'prefix' => 'panel/orders',
        'where' => 
        array (
        ),
        'as' => 'CMSOrderShippingNum',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSOrderUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/orders/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\OrderController@updateStat',
        'controller' => 'App\\Http\\Controllers\\Panel\\OrderController@updateStat',
        'namespace' => NULL,
        'prefix' => 'panel/orders',
        'where' => 
        array (
        ),
        'as' => 'CMSOrderUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSSlider' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\SliderController@list',
        'controller' => 'App\\Http\\Controllers\\Panel\\SliderController@list',
        'namespace' => NULL,
        'prefix' => 'panel/slider',
        'where' => 
        array (
        ),
        'as' => 'CMSSlider',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSSliderAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/slider/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\SliderController@add',
        'controller' => 'App\\Http\\Controllers\\Panel\\SliderController@add',
        'namespace' => NULL,
        'prefix' => 'panel/slider',
        'where' => 
        array (
        ),
        'as' => 'CMSSliderAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CMSSliderAction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'panel/slider/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLogged',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\SliderController@action',
        'controller' => 'App\\Http\\Controllers\\Panel\\SliderController@action',
        'namespace' => NULL,
        'prefix' => 'panel/slider',
        'where' => 
        array (
        ),
        'as' => 'CMSSliderAction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LanguageChange' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'LanguageChange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LangController@changeLang',
        'controller' => 'App\\Http\\Controllers\\LangController@changeLang',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'LanguageChange',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'BlogLike' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'actionLike',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\BlogController@actionLike',
        'controller' => 'App\\Http\\Controllers\\Panel\\BlogController@actionLike',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'BlogLike',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'SendMessage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sendMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Panel\\MessageController@send',
        'controller' => 'App\\Http\\Controllers\\Panel\\MessageController@send',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'SendMessage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AppRoot' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'AppRoot',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ChangeLang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LangController@changeLang',
        'controller' => 'App\\Http\\Controllers\\LangController@changeLang',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ChangeLang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
