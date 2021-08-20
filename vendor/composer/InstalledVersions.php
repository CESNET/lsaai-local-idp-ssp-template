<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-master',
    'version' => 'dev-master',
    'aliases' => 
    array (
    ),
    'reference' => 'cfe94b7e6c3803958a6f5605821448f06a58aa35',
    'name' => 'lsaai/simplesamlphp-module-lsaai',
  ),
  'versions' => 
  array (
    'brick/math' => 
    array (
      'pretty_version' => '0.9.3',
      'version' => '0.9.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ca57d18f028f84f777b2168cd1911b0dee2343ae',
    ),
    'cesnet/simplesamlphp-module-chartjs' => 
    array (
      'pretty_version' => 'v2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '53f72785645529e4aba4a21786f2a853d81c9bc6',
    ),
    'cesnet/simplesamlphp-module-perun' => 
    array (
      'pretty_version' => 'v6.0.6',
      'version' => '6.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '12759e7384424ab23235a02837db480e63e95002',
    ),
    'fgrosse/phpasn1' => 
    array (
      'pretty_version' => 'v2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '20299033c35f4300eb656e7e8e88cf52d1d6694e',
    ),
    'gettext/gettext' => 
    array (
      'pretty_version' => 'v4.8.5',
      'version' => '4.8.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef2e312dff383fc0e4cd62dd39042e1157f137d4',
    ),
    'gettext/languages' => 
    array (
      'pretty_version' => '2.8.1',
      'version' => '2.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4ad818b6341e177b7c508ec4c37e18932a7b788a',
    ),
    'lsaai/simplesamlphp-module-lsaai' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => 'cfe94b7e6c3803958a6f5605821448f06a58aa35',
    ),
    'paragonie/constant_time_encoding' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f34c2b11eb9d2c9318e13540a1dbc2a3afbd939c',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.100',
      'version' => '9.99.100.0',
      'aliases' => 
      array (
      ),
      'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
    ),
    'phpfastcache/riak-client' => 
    array (
      'pretty_version' => '3.4.3',
      'version' => '3.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd771f75d16196006604a30bb15adc1c6a9b0fcc9',
    ),
    'phpmailer/phpmailer' => 
    array (
      'pretty_version' => 'v6.5.1',
      'version' => '6.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dd803df5ad7492e1b40637f7ebd258fee5ca7355',
    ),
    'phpseclib/phpseclib' => 
    array (
      'pretty_version' => '3.0.10',
      'version' => '3.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '62fcc5a94ac83b1506f52d7558d828617fac9187',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'robrichards/xmlseclibs' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f8f19e58f26cdb42c54b214ff8a820760292f8df',
    ),
    'simplesamlphp/assert' => 
    array (
      'pretty_version' => 'v0.0.13',
      'version' => '0.0.13.0',
      'aliases' => 
      array (
      ),
      'reference' => '5429921b320ca4f9d1844225884ac52f649ea1e3',
    ),
    'simplesamlphp/composer-module-installer' => 
    array (
      'pretty_version' => 'v1.1.8',
      'version' => '1.1.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '45161b5406f3e9c82459d0f9a5a1dba064953cfa',
    ),
    'simplesamlphp/saml2' => 
    array (
      'pretty_version' => 'v4.2.3',
      'version' => '4.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '04d0ed6c5e51cbb328afe1bdcba2cc7bd84d7e87',
    ),
    'simplesamlphp/simplesamlphp' => 
    array (
      'pretty_version' => 'v1.19.1',
      'version' => '1.19.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '59e08962c3890fc7be737591c3743fcbf770baa3',
    ),
    'simplesamlphp/simplesamlphp-module-adfs' => 
    array (
      'pretty_version' => 'v0.9.8',
      'version' => '0.9.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac2ba46a6b94ed48b527ac190b0fa99bcda8d98e',
    ),
    'simplesamlphp/simplesamlphp-module-authcrypt' => 
    array (
      'pretty_version' => 'v0.9.3',
      'version' => '0.9.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a2c1a761e2d94394a4f2d3499fd6f0853899530',
    ),
    'simplesamlphp/simplesamlphp-module-authfacebook' => 
    array (
      'pretty_version' => 'v0.9.3',
      'version' => '0.9.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9152731e939ad4a49e0f06da5f0009ebde0d2b5c',
    ),
    'simplesamlphp/simplesamlphp-module-authorize' => 
    array (
      'pretty_version' => 'v0.9.3',
      'version' => '0.9.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0593bfcb84fca9d9133f415246ab8ca51b412c92',
    ),
    'simplesamlphp/simplesamlphp-module-authtwitter' => 
    array (
      'pretty_version' => 'v0.9.1',
      'version' => '0.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '29a15e58061222632fea9eb2c807aef5e2c0d54a',
    ),
    'simplesamlphp/simplesamlphp-module-authwindowslive' => 
    array (
      'pretty_version' => 'v0.9.1',
      'version' => '0.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f40aecec6c0adaedb6693309840c98cec783876e',
    ),
    'simplesamlphp/simplesamlphp-module-authx509' => 
    array (
      'pretty_version' => 'v0.9.8',
      'version' => '0.9.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '66525b1ec4145ec8d0d0e9db4534624b6be4c1fb',
    ),
    'simplesamlphp/simplesamlphp-module-authyubikey' => 
    array (
      'pretty_version' => 'v0.9.1',
      'version' => '0.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8c27bfeb4981d2e6fa40a831e945f40c5a4ad3d2',
    ),
    'simplesamlphp/simplesamlphp-module-cas' => 
    array (
      'pretty_version' => 'v0.9.1',
      'version' => '0.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '63b72e4600550c507cdfc32fdd208ad59a64321e',
    ),
    'simplesamlphp/simplesamlphp-module-cdc' => 
    array (
      'pretty_version' => 'v0.9.1',
      'version' => '0.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '16a5bfac7299e04e5feb472af328e07598708166',
    ),
    'simplesamlphp/simplesamlphp-module-consent' => 
    array (
      'pretty_version' => 'v0.9.6',
      'version' => '0.9.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '2f84d15e96afb5a32b6d1cff93370f501ca7867d',
    ),
    'simplesamlphp/simplesamlphp-module-consentadmin' => 
    array (
      'pretty_version' => 'v0.9.1',
      'version' => '0.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '466e8d0d751f0080162d78e63ab2e125b24d17a1',
    ),
    'simplesamlphp/simplesamlphp-module-discopower' => 
    array (
      'pretty_version' => 'v0.9.1',
      'version' => '0.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '006c0617610f1bae11cf4d17e8ce4c509239a60e',
    ),
    'simplesamlphp/simplesamlphp-module-exampleattributeserver' => 
    array (
      'pretty_version' => 'v1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '63e0323e81c32bc3c9eaa01ea45194bb10153708',
    ),
    'simplesamlphp/simplesamlphp-module-expirycheck' => 
    array (
      'pretty_version' => 'v0.9.3',
      'version' => '0.9.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '59c59cdf87e2679257b46c07bb4c27666a11cc20',
    ),
    'simplesamlphp/simplesamlphp-module-ldap' => 
    array (
      'pretty_version' => 'v0.9.10',
      'version' => '0.9.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '78f04cbe41bfb9dcbcdeff4b5f12e67c060e1a77',
    ),
    'simplesamlphp/simplesamlphp-module-memcachemonitor' => 
    array (
      'pretty_version' => 'v0.9.2',
      'version' => '0.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '900b5c6b59913d9013b8dae090841a127ae55ae5',
    ),
    'simplesamlphp/simplesamlphp-module-memcookie' => 
    array (
      'pretty_version' => 'v1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '39535304e8d464b7baa1e82cb441fa432947ff57',
    ),
    'simplesamlphp/simplesamlphp-module-metarefresh' => 
    array (
      'pretty_version' => 'v0.9.6',
      'version' => '0.9.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e284306a7097297765b5b78a4e28f19f18d4e001',
    ),
    'simplesamlphp/simplesamlphp-module-negotiate' => 
    array (
      'pretty_version' => 'v0.9.11',
      'version' => '0.9.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e7c4597110c753a750cd522220fc2a5a34b7c1b8',
    ),
    'simplesamlphp/simplesamlphp-module-oauth' => 
    array (
      'pretty_version' => 'v0.9.2',
      'version' => '0.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd14d7aca6e699ec12b3f4dd0128373faa1a2cc61',
    ),
    'simplesamlphp/simplesamlphp-module-preprodwarning' => 
    array (
      'pretty_version' => 'v0.9.2',
      'version' => '0.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e032de33a75eb44857dc06d886ad94ee3af4638',
    ),
    'simplesamlphp/simplesamlphp-module-radius' => 
    array (
      'pretty_version' => 'v0.9.3',
      'version' => '0.9.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '36bd0f39f9a13f7eb96ead97c97c3634aa1c3f2d',
    ),
    'simplesamlphp/simplesamlphp-module-riak' => 
    array (
      'pretty_version' => 'v0.9.1',
      'version' => '0.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1a9d9545cb4e05b9205b34624850bb777aca991',
    ),
    'simplesamlphp/simplesamlphp-module-sanitycheck' => 
    array (
      'pretty_version' => 'v0.9.1',
      'version' => '0.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '15d6664eae73a233c3c4c72fd8a5c2be72b6ed2a',
    ),
    'simplesamlphp/simplesamlphp-module-smartattributes' => 
    array (
      'pretty_version' => 'v0.9.1',
      'version' => '0.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b45d3ecd916e359a9cae05f9ae9df09b5c42f4e6',
    ),
    'simplesamlphp/simplesamlphp-module-sqlauth' => 
    array (
      'pretty_version' => 'v0.9.3',
      'version' => '0.9.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c2dc4fc8aa6d8b2408131e09b39f06d8610ff374',
    ),
    'simplesamlphp/simplesamlphp-module-statistics' => 
    array (
      'pretty_version' => 'v0.9.6',
      'version' => '0.9.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '03fb6bdbbf5ce0a0cb257208db79aacac227ac10',
    ),
    'simplesamlphp/twig-configurable-i18n' => 
    array (
      'pretty_version' => 'v2.3.4',
      'version' => '2.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e2bffc7eed3112a0b3870ef5b4da0fd74c7c4b8a',
    ),
    'spomky-labs/base64url' => 
    array (
      'pretty_version' => 'v2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '7752ce931ec285da4ed1f4c5aa27e45e097be61d',
    ),
    'symfony/cache' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '944db6004fc374fbe032d18e07cce51cc4e1e661',
    ),
    'symfony/cache-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c0446463729b89dd4fa62e9aeecc80287323615d',
    ),
    'symfony/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '4268f3059c904c61636275182707f81645517a37',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.3.6',
      'version' => '5.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '51b71afd6d2dc8f5063199357b9880cea8d8bfe2',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a825e4b386066167a8b55487091cb62beec74c2',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f38c8804a9e97d23e0c8d63341088cd8a22d627',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '281f6c4660bcf5844bb0346fe3a4664722fe4c73',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f2fd2208157553874560f3645d4594303058c4bd',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '69fee1ad2332a7cbab3aca13591953da9cdb7a11',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0',
      ),
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '343f4fe324383ca46792cae728a3b6e2f708fb32',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '17f50e06018baec41551a71a15731287dbaab186',
    ),
    'symfony/framework-bundle' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '2c5ed14a5992a2d04dfdb238a5f9589bab0a68d8',
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.3.6',
      'version' => '5.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8388f7b7054a7401997008ce9cd8c6b0ab7ac75',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v5.3.6',
      'version' => '5.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '60030f209018356b3b553b9dbd84ad2071c1b7e0',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '46cd95797e9df938fdd2b03693b5fca5e64b01ce',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.23.1',
      'version' => '1.23.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '16880ba9c5ebe3642d1995ab866db29270b36535',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.23.1',
      'version' => '1.23.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9174a3d80210dca8daa7f31fec659150bbeabfc6',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fba8933c384d6476ab14fb7b8526e5287ca7e010',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.23.1',
      'version' => '1.23.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1100343ed1a92e3a38f9ae122fc0eb21602547be',
    ),
    'symfony/polyfill-php81' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e66119f3de95efc359483f810c4c3e6436279436',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '0a35d2f57d73c46ab6d042ced783b81d09a624c4',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v5.3.3',
      'version' => '5.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bd53358e3eccec6a670b5f33ab680d8dbe1d4ae1',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.3.6',
      'version' => '5.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '3dd8ddd1e260e58ecc61bb78da3b6584b3bfcba0',
    ),
    'symfony/var-exporter' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7898a65fc91e7c41de7a88c7db9aee9c0d432f0',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v5.3.6',
      'version' => '5.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '4500fe63dc9c6ffc32d3b1cb0448c329f9c814b7',
    ),
    'twig/extensions' => 
    array (
      'pretty_version' => 'v1.5.4',
      'version' => '1.5.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '57873c8b0c1be51caa47df2cdb824490beb16202',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v2.14.6',
      'version' => '2.14.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '27e5cf2b05e3744accf39d4c68a3235d9966d260',
    ),
    'web-token/jwt-checker' => 
    array (
      'pretty_version' => 'v2.2.10',
      'version' => '2.2.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f31d98155951739e2fae7455e8466ccddd08f50',
    ),
    'web-token/jwt-core' => 
    array (
      'pretty_version' => 'v2.2.10',
      'version' => '2.2.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '53beb6f6c1eec4fa93c1c3e5d9e5701e71fa1678',
    ),
    'web-token/jwt-key-mgmt' => 
    array (
      'pretty_version' => 'v2.2.10',
      'version' => '2.2.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '0b116379515700d237b4e5de86879078ccb09d8a',
    ),
    'web-token/jwt-signature' => 
    array (
      'pretty_version' => 'v2.2.10',
      'version' => '2.2.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '015b59aaf3b6e8fb9f5bd1338845b7464c7d8103',
    ),
    'web-token/jwt-signature-algorithm-rsa' => 
    array (
      'pretty_version' => 'v2.2.10',
      'version' => '2.2.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '513ad90eb5ef1886ff176727a769bda4618141b0',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
    ),
    'whitehat101/apr1-md5' => 
    array (
      'pretty_version' => 'v1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8b261c9fc0481b4e9fa9d01c6ca70867b5d5e819',
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }


        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            // @phpstan-ignore-next-line
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}
