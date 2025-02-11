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
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RhKDmOpP3IO4PBCM',
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
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
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
            '_route' => 'generated::8pyFYT4NtQ1byTxH',
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
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
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
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
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
            '_route' => 'generated::KjfWtEVIVZIUWw5Y',
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
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
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
            '_route' => 'password.update',
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
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
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
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
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
            '_route' => 'generated::FlJK3llQdTiDTVf1',
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
      '/SeeSectionConfiguracion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xikb71bnV6wARWSv',
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
      '/SeeSectionInstitucion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9eqLAdDZ5AR5NuBf',
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
      '/SeeIndexInstitucion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HFp043t5OekzmcXq',
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
      '/SeeEditInstitucion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lqktYYo5tgkCvrz3',
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
      '/SeeListInstitucion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FYDAa56foDOEkUnB',
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
      '/ShowInstitucion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5wHq9qCvg2oPzrB7',
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
      '/StoreInstitucion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HTAR2aRMWjIuVNmM',
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
      '/ChangeStatusInstitucion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hpTnaR7aJckNhyrR',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateInstitucion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HQbDprYXlvo6x1Pc',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyInstitucion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nBbtW309wgAq4iXH',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionMedio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pEIFVSkoUCnma1W7',
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
      '/SeeIndexMedio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L3mdaxgi4jcNCEiV',
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
      '/SeeIndexMedioCultivoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YJrEWQ5XLV9uHrDD',
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
      '/ShowMedio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jvq0SvQvnik3qv7M',
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
      '/SeeListMedio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pVU5UjR1o8S5BCxu',
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
      '/storeLoteMedioLab' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.medio.lote.lab',
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
      '/StoreMedio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nvKwkjffpDgqhBbO',
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
      '/ChangeStatusMedio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M24cbAjruRwobBaQ',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyMedio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fiBBPxg7Gl8sB9SY',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/GetDinamicModalControlConfiguracionMedios' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cd7Qxqt65F4gkdb0',
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
      '/GetDinamicModalControlConfiguracionMediosCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::01gT1E3GlSA40GcI',
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
      '/StoreMedioCultivoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FVCCDRR83Tw7OLl5',
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
      '/StoreMedioCultivoLaboratorioCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aDUbFqc5cnJymlT7',
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
      '/SeeSectionCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cro5gfHMneZkd5Ag',
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
      '/SeeIndexCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bcWNnZnNPzrm6VcN',
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
      '/ShowCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mcwoOLTos9l48QzG',
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
      '/SeeListCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nuHEajFrQykHaTNM',
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
      '/StoreCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SYxmZwO8hgQ4bAqv',
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
      '/ChangeStatusCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ex2WnvaGMgfWTvna',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4xVMOZjos6u2nvRI',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/GetDinamicModalAsignacionCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tNIKniCXS5PSPfy5',
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
      '/asignarLoteCepaMedio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'asignar.loteCepa.loteMedio',
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
      '/asignarLoteCepaTincion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'asignar.loteCepa.loteTincion',
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
      '/asignarLoteCepaPruebaSensi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'asignar.loteCepa.lotePruebaSensi',
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
      '/registro/cepa/medios' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'registro.cepa.medio',
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
      '/registro/cepa/tinciones' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'registro.cepa.tincion',
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
      '/registro/cepa/pruebaSensi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'registro.cepa.prueba',
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
      '/SeeSectionTincion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TNbNHcHWYV3tgNqD',
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
      '/SeeIndexTincion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jLMyHdEydkBVsxHX',
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
      '/SeeIndexTincionLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EDt3TmqbI5zfgbMy',
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
      '/ShowTincion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MjkLA1O5LyC8KMUl',
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
      '/SeeListTincion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IwxRrnna5cJ7JmEc',
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
      '/storeLoteTincionLab' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.tincion.lote.lab',
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
      '/StoreTincion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J3mpES0aDm02gbm6',
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
      '/ChangeStatusTincion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hJIyYkCLXlFZ7hmq',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyTincion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CsggSDEeaqKta6hX',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/GetDinamicModalControlConfiguracionTinciones' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aLExENQHQFBMXJhN',
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
      '/GetDinamicModalControlConfiguracionTincionesCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LL89S1NQj1p6j20k',
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
      '/StoreTincionLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cHw1wPzgfXzZbKpK',
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
      '/StoreTincionLaboratorioCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ffevPwCrycVheHWX',
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
      '/SeeSectionPrueba' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iK7rQiDTx6OXl5ui',
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
      '/SeeIndexPrueba' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U6LuGIKVuZRMEs5w',
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
      '/SeeIndexPruebaLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kAUJl2p1yHAFGBZ8',
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
      '/ShowPrueba' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aY8DH0YQ1VvFR0Mr',
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
      '/SeeListPrueba' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BVRpDjecn6EVL4Hs',
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
      '/StorePrueba' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lLwzmRQMKMXVdMRd',
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
      '/ChangeStatusPrueba' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VfnLpjCmvy4bbENE',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyPrueba' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NdAhtLtTjP8F4mv8',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/GetDinamicModalControlConfiguracionPruebas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1iZbPdufTDOawwY1',
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
      '/GetDinamicModalControlConfiguracionPruebasCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RmZDiYyxXCjNuUpN',
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
      '/StorePruebaLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KVEqOuOcPRhPuQrk',
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
      '/SeeSectionPais' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oZ3anZYZBYtGZffX',
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
      '/SeeIndexPais' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fElw77ueOc134F4d',
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
      '/SeeEditPais' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ScXm6vBeI7basftY',
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
      '/ShowPais' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YunGk5R4p8NzfQko',
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
      '/SeeListPais' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Y7tkqOuQuQkt035',
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
      '/StorePais' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CqlgUuiOQE2eV4L4',
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
      '/ChangeStatusPais' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LfvTjzVZD7LdEhj0',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdatePais' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tMNbKKhPrItJ8OCh',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyPais' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0Cgcgw0FSwLGDGB0',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionProveedor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HrUjlWXhAShlWja9',
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
      '/SeeIndexProveedor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mQ9ZLdOjWRWCGltY',
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
      '/SeeEditProveedor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CgVp76EE9MBFtow8',
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
      '/SeeListProveedor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pYQzbhWU2WGkdTGd',
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
      '/ShowProveedor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8rqh28qHFrTMh4r5',
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
      '/StoreProveedor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y7hdQdSaxAqeidOp',
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
      '/ChangeStatusProveedor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qaT4pn1L7ioIazRP',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateProveedor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m09k2IID1kkFhXVE',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyProveedor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R8jBCb8bqG89B5iE',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionAnalizador' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5xUp2Yd7fav1GDsd',
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
      '/SeeIndexAnalizador' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G33QpRTbeMt5j26I',
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
      '/SeeEditAnalizador' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bz6y22mpqoBoRXPZ',
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
      '/SeeListAnalizador' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qjjRgNXXPvVrvaXs',
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
      '/ShowAnalizador' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PgyyeQqLSUvswucZ',
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
      '/StoreAnalizador' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fo17gbzvDB406X47',
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
      '/ChangeStatusAnalizador' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7HcLm3Gv4RRVzx1Q',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateAnalizador' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NX8Y18ces1pUy6UH',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyAnalizador' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WdjndFvXAUdpR0Gn',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionMetodologia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MZYSmpdbiMXRxXdb',
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
      '/SeeIndexMetodologia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vNulm8TvZfUkEpEV',
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
      '/SeeEditMetodologia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UNhgmiOcXPnyVh1h',
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
      '/ShowMetodologia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hKhos1IjkACZFtn7',
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
      '/StoreMetodologia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X0BzcZ7DEPMk92Cw',
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
      '/ChangeStatusMetodologia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mpSZ3RSzqdDUK1Ut',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateMetodologia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gjcp1sotQOPtimx9',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyMetodologia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BYtxGaZdr1jmMvtb',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionUnidad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UgONjQiz2VsZCPlO',
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
      '/SeeIndexUnidad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IOkOfqUdtxPkJUqN',
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
      '/SeeEditUnidad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DEKWvth1Ynj3RoNf',
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
      '/ShowUnidad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wbmeYpQuWbRqcfN9',
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
      '/StoreUnidad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qxz432tNZZDh3Mgz',
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
      '/ChangeStatusUnidad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u4QtiNz3vYoLZteJ',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateUnidad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RKTYq7ZikKPiaRFf',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyUnidad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N8wBk5KW6r3rnnw5',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionTemperatura' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fbxJypUH0mj7Pgf5',
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
      '/SeeIndexTemperatura' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9B41nokh8OxSiy5z',
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
      '/SeeEditTemperatura' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BaiqHewQEtjifNhB',
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
      '/ShowTemperatura' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QpqXbRZJmKWSBCbP',
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
      '/StoreTemperatura' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qfg68uyixERqxjpA',
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
      '/ChangeStatusTemperatura' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J708KXJOCyNPfk6y',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateTemperatura' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UItuZOoVXWKOvuhB',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyTemperatura' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r7xFZKEqkmQOFjYc',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionReactivo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ImWbHMHgGuk2flFm',
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
      '/SeeIndexReactivo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nlFygQKLSm9Gm87O',
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
      '/SeeEditReactivo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K9NCeWh7fdtMc27S',
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
      '/SeeListReactivo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kOuWYlY0g0UVnXt1',
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
      '/ShowReactivo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BhbG92HX6CZxR0j4',
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
      '/StoreReactivo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jc7u3BlfyKZ01WPU',
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
      '/ChangeStatusReactivo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UqnMSKGPyz0b9o1Z',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateReactivo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QdVIX1ucneWq4eUq',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyReactivo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UezOdHL8OBmggNIi',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionMatriz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W7IICGf6ET3WNbdM',
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
      '/SeeIndexMatriz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UTsPvdnaIbUfFP0P',
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
      '/SeeEditMatriz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cQM8t13sPD2we4Nr',
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
      '/SeeListMatriz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iW253O2b7smB0OrC',
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
      '/ShowMatriz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lsettZfhPmH1F1Te',
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
      '/StoreMatriz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lQRHtLeYzqXprmn0',
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
      '/ChangeStatusMatriz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B3aYwkmhid599ARi',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateMatriz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8VaL3tI7ohaGDMrz',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyMatriz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1lN1yHRSL1clBp1s',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionFuenteETMP' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1bJ3wurXnfsauWnv',
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
      '/SeeIndexFuenteETMP' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dLlXaQ7AJe9IkcB1',
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
      '/SeeEditFuenteETMP' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CRpmqasheO8d34gm',
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
      '/SeeListFuenteETMP' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bframWhLHXzEns7W',
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
      '/ShowFuenteETMP' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2XEETAQqztZ9zwe5',
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
      '/StoreFuenteETMP' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LMp985Q4eNoTAVyN',
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
      '/ChangeStatusFuenteETMP' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1R0tjkiUHsHNCX4Q',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateFuenteETMP' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XtRDkTWy1Nf6uTBg',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyFuenteETMP' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FZ8Ure72QQPgLFII',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionCiudad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tRbYqz6qBqkSSPGE',
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
      '/SeeIndexCiudad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hwLE15z2bdOHwAGq',
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
      '/SeeEditCiudad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GzY5AiXN5yBLnWRI',
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
      '/ShowCiudad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3DZOgxszgjQ4purw',
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
      '/SeeListCiudad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m2JZzxwg0E8RbRmP',
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
      '/StoreCiudad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LadigKd1ol4RG8cU',
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
      '/ChangeStatusCiudad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aQffsW8CCZGach2f',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateCiudad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o1b0aduKTLJvqtQf',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyCiudad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ks1DFiCzn0nYR7c9',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionControl' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Oeu3DcZuqT63NTvx',
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
      '/SeeIndexControl' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hzAYr3sM3uRc6aNj',
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
      '/SeeEditControl' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CybicR20d5ZiAwtY',
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
      '/ShowControl' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DP9f9pDnYrBEoStp',
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
      '/SeeListControl' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iF7ear8LU7cag8Pw',
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
      '/StoreControl' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::43FgWQViRGRevJuJ',
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
      '/ChangeStatusControl' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4QAVVPTZTZcuRJtL',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateControl' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XSOEH9FFyBIK5jBl',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyControl' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gl2XVeeVhQJ7PU0Z',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionLote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IVQGGe9T33xOmvxZ',
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
      '/SeeIndexLote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ff2TO5GSdW9e7zhx',
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
      '/SeeEditLote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NDTvpPNmrfk7cOsu',
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
      '/SeeListLote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KW9lmcr6dAuhFXNn',
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
      '/ShowLote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UBQMSIl559fkPHKc',
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
      '/StoreLote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VkVQ5OUEOLPCOanf',
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
      '/ChangeStatusLote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7kUq5HB1zdTHVHQv',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateLote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zZM0qKTkXX2xGcyB',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyLote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oZlhBWWUsLopQhUW',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionSede' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JfEPzo5cU5ljyXbl',
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
      '/SeeIndexSede' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l6ZDW5biypTbmUdm',
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
      '/SeeEditSede' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::41GFHfZNrMflFvDP',
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
      '/SeeListSede' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xnoDCuW0jL7xEtpW',
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
      '/ShowSede' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kbwZzrRrTZeVIFjJ',
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
      '/StoreSede' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qp1MSNE7BUdrakvk',
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
      '/ChangeStatusSede' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DWlGs6giS9WkpFZe',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateSede' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D13hA2UYqiknPztX',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroySede' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R3sDPGSJKwpUbuft',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uxVcSOqOKYxC7Ue7',
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
      '/SeeIndexLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g5k4XAxOLYe8MPf5',
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
      '/SeeEditLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fZAjP9qdoEt7FORD',
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
      '/SeeListLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nCAu58KeM7Dls8oJ',
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
      '/ShowLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1xAGHof3Zm87X7Ic',
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
      '/StoreLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZOAVNgLiiyRYUFEi',
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
      '/ChangeStatusLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PbYh45krR64uze08',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uuIYGRtkiTle1iAG',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lvGgf2SGWk8Rom9v',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionVariabilidadBiologica' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o3ZCPhK3A0Ic0W0w',
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
      '/SeeIndexVariabilidadBiologica' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hFFhQMTYsmPh2pys',
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
      '/SeeEditVariabilidadBiologica' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k7EBspwlQIrsfTaK',
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
      '/SeeListVariabilidadBiologica' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IbibOyg7e9W8J9yK',
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
      '/ShowVariabilidadBiologica' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mpAGQSnDBS3z7EkJ',
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
      '/StoreVariabilidadBiologica' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NbYBq7yhfMbJLVW9',
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
      '/ChangeStatusVariabilidadBiologica' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zjOMoZl2oJBMa8G9',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateVariabilidadBiologica' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PN6Z8JN9xsyJtnk9',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyVariabilidadBiologica' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mm4FcyzngmzU6FP7',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeListAnalito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0yvAc2yW7ivxMAuv',
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
      '/SeeSectionAnalito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jhJ3VAivrUu8xJ3w',
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
      '/SeeIndexAnalito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tjQwC2niPvRRGdHW',
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
      '/SeeEditAnalito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9t6Zilh9dZO44fTx',
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
      '/ShowAnalito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ekfg1NbpfrFUYqfZ',
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
      '/StoreAnalito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DNKu4P1M49ckHrcH',
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
      '/ChangeStatusAnalito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GV8YApMaUZSpEgf2',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateAnalito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m0dXAZtk7lv0xXbC',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyAnalito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lh8qz8oTLQMyuXh9',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/GetDinamicModalAsignacionAnalito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oZQBSQDC8eNQEDFP',
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
      '/SaveAsignacionAnalito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2FVfYyd0iT00LWw0',
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
      '/SeeSectionUsuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UIUmk6ToucCYH94A',
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
      '/SeeIndexUsuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cfblIW9LyQHXA4Qw',
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
      '/SeeEditUsuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c0456psoDYVdAC89',
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
      '/SeeListUsuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pScd1TOiLzjzwQr1',
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
      '/ShowUsuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w9LRR6vDk70lxR7U',
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
      '/StoreUsuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FCTgLa4tUnkgjtaR',
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
      '/ChangeStatusUsuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iVor58yRwYeH3R4Z',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/UpdateUsuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2lE7ORK3HszcwMsu',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyUsuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vPkJIQrfIEMqV4GT',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/GetDinamicModalAsignacionUsuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HCQIoaCZGojODMcU',
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
      '/SaveAsignacionUsuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5fraCwFD7tt5gUcv',
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
      '/GetDinamicModalActualizacionPass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2QlfnJp9WE3MjK99',
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
      '/StoreUsuarioPass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6vuHXti5ZZbLUi8X',
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
      '/StoreControlLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7lHOfrUJ4Tyj5NgI',
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
      '/ChangeStatusControlLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GUTGiMaETwPs8KZX',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyControlLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V9xDzHnxxMOBVQC9',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeEditControlLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F6k0SNIhXXIdtlhd',
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
      '/UpdateControlLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LAnOpAI8fd1omrWF',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ShowControlLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JGikZaMLvxfmTvyW',
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
      '/GetDinamicModalCopiarLote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mzZFXVjzXOf7e7KV',
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
      '/StoreCopiarLote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::faW0PT6rMbDWdUZX',
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
      '/StoreAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D4jVDoyKcLVtX6Uy',
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
      '/ChangeStatusAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8WRH9za1o515vtdU',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DestroyAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::87Z3meGg7EXQKb4C',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeEditAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SBgH2r8a2TJrIL9q',
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
      '/UpdateAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F2Dzg2VUik3Tacpf',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ShowAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DNbmKHriuO0yOv8q',
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
      '/StoreError' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZKM7YXL8vnoJBtmF',
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
      '/DestroyError' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F8qR8QPfEfw9i02V',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/AsignarPredeterminadoError' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6BAwrdvfUZ0mgdaN',
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
      '/SeeEditError' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zm0Pset8j8blTiMQ',
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
      '/UpdateError' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ANwrf1uYCxzFMWyt',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ShowError' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5EMRzbbPa9GZfbxd',
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
      '/StoreDIANA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AJXU0i9M7atzIe7Y',
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
      '/DestroyDIANA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WN4QAfyyEtpqUan9',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/AsignarPredeterminadoDIANA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jnbPfrORXWtWzv3n',
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
      '/SeeEditDIANA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uQbNlcFErIhmnzrZ',
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
      '/UpdateDIANA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sihc3pePJKYCJSBx',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ShowDIANA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wOU8ClCOwwIYoYNe',
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
      '/SeeSectionAuditoria' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lo4B4UtuiWmZ9YjX',
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
      '/SeeIndexAuditoria' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ou78kQ2ra7wlSTde',
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
      '/ExportarPDFGraficaAuditoria' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lV9Mc7Z91h5EAOBb',
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
      '/ExportarGraficaAuditoria' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9bW3IsNBUwzNBI5P',
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
      '/guardarResultados' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LRBNTbjwGPG70d7v',
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
      '/DestroySerie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wL1MVgnmNakvk954',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guardarResultadosCualitativo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rzs6q5113sT1QVoR',
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
      '/guardarResultadoDefectoCualitativo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mkyl2oPigvIhxQiC',
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
      '/DestroySerieCualitativa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aLPJq2ZByBv86igJ',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/SeeSectionBienvenido' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2S8kqF4LczKqsiWw',
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
      '/SeeSectionResultado' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WhrcOnlXrvWAcXwL',
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
      '/SeeSectionResultadoCualitativo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eO4xp3QXhYrObeH2',
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
      '/SeeSectionResultadoMicrobiologia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'microbiologia.medios',
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
      '/SeeSectionResultadoTinciones' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'microbiologia.tinciones',
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
      '/SeeSectionResultadoPruebas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'microbiologia.pruebas',
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
      '/SeeSectionGraficaIntegrada' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XA1aBSRBTaqN7SDd',
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
      '/SeeSectionSigmometria' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::49yEPxJb3cjX4fuR',
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
      '/GetValoresSigmometria' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IKNyM8ntu9ziNtbb',
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
      '/GetTreeConfig' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jCYH86SMo1RQUs7g',
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
      '/GetTopLotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wdyj9xRoo3yFVooK',
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
      '/GetTopAnalitosByControlLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wXcPL7ONyHDvgm5e',
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
      '/GetTopAnalizadores' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kUEv7tWcKyj434VO',
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
      '/GetTopReactivos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ztfSUNxpNsjnXkPs',
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
      '/GetTopLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fp84dU1x0POevqC1',
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
      '/GetTopAnalitoLab' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OA0F9QFSSYPE2Dnw',
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
      '/GetMedioCultivo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IDE5lGztNwW2BE6z',
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
      '/GetTincion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::089Kn7UcgTXevzZe',
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
      '/GetPrueba' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h95jWJlTPR2eIoBb',
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
      '/GetCepa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LF6Xb2HmwkOB5szm',
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
      '/SeeListTemperatura' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TSkdScRuAW5QF79N',
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
      '/SeeListUnidad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p1ILOHGAw6ktj2AO',
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
      '/SeeListMetodologia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::91lZE02ufKr3nAZP',
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
      '/GetDinamicModalExportarGraficasIntegradas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NhQqzKzQieEqwj0W',
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
      '/GetDinamicModalExportarGraficasCualitativo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QsB9ySM1thOQwxAy',
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
      '/exportarGraficaIntegrada' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PPTVu1k1L8qABQXw',
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
      '/exportarGraficaCualitativo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VEpaK3wgJczW11V9',
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
      '/SeeReportGraficasIntegradas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lhVVa2UWypX8PqGX',
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
      '/SeeReportGraficasCualitativo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lhY7GOagQFLV8aWq',
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
      '/SeeReportGraficaSigmometria' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dwj0eiGuEqjnyFJ0',
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
      '/exportarGraficaSigmometria' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9LRJCKPCuMQ5QlyU',
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
      '/DeleteDocument' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::020JzL9TQQ0LgaCQ',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/DeleteDocumentSigmometria' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kwk0Wd37h25e9iUp',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reporteFinalGraficasIntegradas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reporteFinalGraficasIntegradas',
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
      '/reporteFinalGraficasCualitativo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reporteFinalGraficasCualitativo',
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
      '/reporteFinalGraficaSigmometria' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kmENPKHd9CGI7SVo',
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
      '/GetDinamicModalControlLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iufMEqfdLJN2wtFv',
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
      '/SeeIndexControlLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0oNnCw4N3vaFRoXT',
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
      '/GetDinamicModalAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YqsP7abvbanKN4ds',
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
      '/SeeIndexAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XXajlTCMkUFRjTwn',
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
      '/GetDinamicModalDIANA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4ldBuvBmRcWfSxCa',
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
      '/SeeIndexDIANA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9ufOiKNFsH3OrGDE',
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
      '/GetDinamicModalError' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ymM1LEgO93uDC0nX',
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
      '/SeeIndexError' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::26FiKZxaxDy7UWrc',
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
      '/ShowInfoAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JCKL0tPcU5E5Vhc5',
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
      '/ShowTitleResultadosAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5mxTls9NcKleH54S',
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
      '/ShowTitleResultadosAnalitoLaboratorioCualitativo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HKJVwZKeJ8mjFyR2',
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
      '/ShowResultadosAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bFAzMAxhpVNUkiCD',
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
      '/ShowResultadosAnalitoLaboratorioCualitativo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v7gq9ZAmLuIklWDI',
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
      '/ShowValoresEstadisticosAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yVH4YkG8TGoKmfKI',
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
      '/ShowValoresEstadisticosAnalitoLaboratorioCualitativo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cIcZc9QxB02HqW9h',
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
      '/GetValoresGeneralesAnalitoLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cjztgM2SYfZlrFcK',
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
      '/GenerarPdfCualitativo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'GenerarPdfCualitativo',
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
      '/SeeSectionComparativaInterlaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jdiULB33tbm3jcTN',
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
      '/ComparativaInterlaboratorioGraficas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iTd4f128ZCLcwZfU',
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
      '/ComparativaInterlaboratorioMesurandos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Iefh8c8jSTsmM4KN',
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
      '/ComparativaInterlaboratorioMetricasSigma' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a0iNubzPl2v0Rwja',
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
      '/ComparativaInterlaboratorioPercentiles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LMuHDXCHmZ8xTJRL',
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
      '/ComparativaInterlaboratorioErrorAnalitico' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KsLXQQQ6aoVuCkhl',
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
      '/ComparativaInterlaboratorioReportes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::newL04jKJmPmWcuv',
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
      '/ShowInfoCepaLaboratorio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NMMUW6YCjxkulCdu',
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
      '/imprimir' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::axU28DwKIhMKIjTc',
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
      '/downloadTree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'downloadTree',
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
      '/downloadCommit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'downloadCommit',
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1AM2tW6YXcC1iVNu',
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
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
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
      '/logout/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout.get',
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
    ),
    2 => 
    array (
      0 => '{^(?|/password/reset/([^/]++)(*:31)|/S(?|eeEdit(?|Medio/([^/]++)(*:66)|Cepa/([^/]++)(*:86)|Tincion/([^/]++)(*:109)|Prueba/([^/]++)(*:132))|toreLote/([^/]++)/([^/]++)(*:167))|/Update(?|Medio/([^/]++)(*:200)|Cepa/([^/]++)(*:221)|Tincion/([^/]++)(*:245)|Prueba/([^/]++)(*:268))|/update(?|/cepa/(?|medios/([^/]++)(*:311)|tinciones/([^/]++)(*:337)|pruebas/([^/]++)(*:361))|Lote/([^/]++)/([^/]++)(*:392))|/de(?|stroy/cepa/(?|medios/([^/]++)(*:436)|tinciones/([^/]++)(*:462)|pruebas/([^/]++)(*:486))|leteLote/([^/]++)/([^/]++)(*:521))|/microbiologia/(?|detalle(?|Medio/([^/]++)/lab/([^/]++)(*:585)|Tincion/([^/]++)(*:609)|PruebaSensi/([^/]++)(*:637))|Informe/ControlCepa/([^/]++)/([^/]++)(*:683)))/?$}sDu',
    ),
    3 => 
    array (
      31 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
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
      66 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'formEdit.medio',
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
      86 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'formEdit.cepa',
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
      109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'formEdit.tincion',
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
      132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'formEdit.prueba',
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
      167 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.compra.lote',
          ),
          1 => 
          array (
            0 => 'itemId',
            1 => 'section',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.medio',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      221 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.cepa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.tincion',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.prueba',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.cepa.control',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.cepa.control.tincion',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.cepa.control.prueba',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.compra.lote',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'section',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'destroy.control.cepa.medio',
          ),
          1 => 
          array (
            0 => 'id',
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
      462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'destroy.control.cepa.tincion',
          ),
          1 => 
          array (
            0 => 'id',
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
      486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'destroy.control.cepa.prueba',
          ),
          1 => 
          array (
            0 => 'id',
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
      521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'destroy.compra.lote',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'section',
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
      585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'microbiologia.medio.detalles',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'labId',
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
      609 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'microbiologia.tincion.detalles',
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
      637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'microbiologia.prueba.detalles',
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
      683 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generar.informe.pdf',
          ),
          1 => 
          array (
            0 => 'loteId',
            1 => 'section',
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
    'generated::RhKDmOpP3IO4PBCM' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000045f0000000000000000";}";s:4:"hash";s:44:"OrBfGsZcl0QhcybW7XLJjwKvIwoa2KkPNYv5CP3mvOc=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RhKDmOpP3IO4PBCM',
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
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
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
    'generated::8pyFYT4NtQ1byTxH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8pyFYT4NtQ1byTxH',
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
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
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
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
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
    'generated::KjfWtEVIVZIUWw5Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KjfWtEVIVZIUWw5Y',
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
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
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
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
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
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
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
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
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
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
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
    'generated::FlJK3llQdTiDTVf1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FlJK3llQdTiDTVf1',
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
    'generated::Xikb71bnV6wARWSv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionConfiguracion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfiguracionController@section',
        'controller' => 'App\\Http\\Controllers\\ConfiguracionController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Xikb71bnV6wARWSv',
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
    'generated::9eqLAdDZ5AR5NuBf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionInstitucion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\InstitucionController@section',
        'controller' => 'App\\Http\\Controllers\\InstitucionController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9eqLAdDZ5AR5NuBf',
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
    'generated::HFp043t5OekzmcXq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexInstitucion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\InstitucionController@index',
        'controller' => 'App\\Http\\Controllers\\InstitucionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HFp043t5OekzmcXq',
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
    'generated::lqktYYo5tgkCvrz3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditInstitucion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\InstitucionController@edit',
        'controller' => 'App\\Http\\Controllers\\InstitucionController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lqktYYo5tgkCvrz3',
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
    'generated::FYDAa56foDOEkUnB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListInstitucion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\InstitucionController@listHTML',
        'controller' => 'App\\Http\\Controllers\\InstitucionController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FYDAa56foDOEkUnB',
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
    'generated::5wHq9qCvg2oPzrB7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowInstitucion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\InstitucionController@show',
        'controller' => 'App\\Http\\Controllers\\InstitucionController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5wHq9qCvg2oPzrB7',
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
    'generated::HTAR2aRMWjIuVNmM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreInstitucion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\InstitucionController@store',
        'controller' => 'App\\Http\\Controllers\\InstitucionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HTAR2aRMWjIuVNmM',
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
    'generated::hpTnaR7aJckNhyrR' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusInstitucion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\InstitucionController@status',
        'controller' => 'App\\Http\\Controllers\\InstitucionController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hpTnaR7aJckNhyrR',
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
    'generated::HQbDprYXlvo6x1Pc' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateInstitucion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\InstitucionController@update',
        'controller' => 'App\\Http\\Controllers\\InstitucionController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HQbDprYXlvo6x1Pc',
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
    'generated::nBbtW309wgAq4iXH' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyInstitucion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\InstitucionController@destroy',
        'controller' => 'App\\Http\\Controllers\\InstitucionController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nBbtW309wgAq4iXH',
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
    'generated::pEIFVSkoUCnma1W7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionMedio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@section',
        'controller' => 'App\\Http\\Controllers\\MedioController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pEIFVSkoUCnma1W7',
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
    'generated::L3mdaxgi4jcNCEiV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexMedio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@index',
        'controller' => 'App\\Http\\Controllers\\MedioController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::L3mdaxgi4jcNCEiV',
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
    'generated::YJrEWQ5XLV9uHrDD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexMedioCultivoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@index',
        'controller' => 'App\\Http\\Controllers\\MedioController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YJrEWQ5XLV9uHrDD',
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
    'formEdit.medio' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditMedio/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@edit',
        'controller' => 'App\\Http\\Controllers\\MedioController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'formEdit.medio',
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
    'generated::jvq0SvQvnik3qv7M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowMedio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@show',
        'controller' => 'App\\Http\\Controllers\\MedioController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jvq0SvQvnik3qv7M',
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
    'generated::pVU5UjR1o8S5BCxu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListMedio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@listHTML',
        'controller' => 'App\\Http\\Controllers\\MedioController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pVU5UjR1o8S5BCxu',
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
    'store.medio.lote.lab' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'storeLoteMedioLab',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@asignarloteLaboratorio',
        'controller' => 'App\\Http\\Controllers\\MedioController@asignarloteLaboratorio',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.medio.lote.lab',
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
    'generated::nvKwkjffpDgqhBbO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreMedio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@store',
        'controller' => 'App\\Http\\Controllers\\MedioController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nvKwkjffpDgqhBbO',
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
    'generated::M24cbAjruRwobBaQ' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusMedio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@status',
        'controller' => 'App\\Http\\Controllers\\MedioController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::M24cbAjruRwobBaQ',
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
    'update.medio' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateMedio/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@update',
        'controller' => 'App\\Http\\Controllers\\MedioController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.medio',
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
    'generated::fiBBPxg7Gl8sB9SY' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyMedio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@destroy',
        'controller' => 'App\\Http\\Controllers\\MedioController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fiBBPxg7Gl8sB9SY',
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
    'generated::Cd7Qxqt65F4gkdb0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalControlConfiguracionMedios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@sectionAsignacion',
        'controller' => 'App\\Http\\Controllers\\MedioController@sectionAsignacion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Cd7Qxqt65F4gkdb0',
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
    'generated::01gT1E3GlSA40GcI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalControlConfiguracionMediosCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@sectionAsignacionCepa',
        'controller' => 'App\\Http\\Controllers\\MedioController@sectionAsignacionCepa',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::01gT1E3GlSA40GcI',
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
    'generated::FVCCDRR83Tw7OLl5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreMedioCultivoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@cultivo',
        'controller' => 'App\\Http\\Controllers\\MedioController@cultivo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FVCCDRR83Tw7OLl5',
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
    'generated::aDUbFqc5cnJymlT7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreMedioCultivoLaboratorioCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@cepa',
        'controller' => 'App\\Http\\Controllers\\MedioController@cepa',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aDUbFqc5cnJymlT7',
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
    'generated::cro5gfHMneZkd5Ag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@section',
        'controller' => 'App\\Http\\Controllers\\CepaController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cro5gfHMneZkd5Ag',
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
    'generated::bcWNnZnNPzrm6VcN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@index',
        'controller' => 'App\\Http\\Controllers\\CepaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bcWNnZnNPzrm6VcN',
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
    'formEdit.cepa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditCepa/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@edit',
        'controller' => 'App\\Http\\Controllers\\CepaController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'formEdit.cepa',
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
    'generated::mcwoOLTos9l48QzG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@show',
        'controller' => 'App\\Http\\Controllers\\CepaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mcwoOLTos9l48QzG',
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
    'generated::nuHEajFrQykHaTNM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@listHTML',
        'controller' => 'App\\Http\\Controllers\\CepaController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nuHEajFrQykHaTNM',
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
    'generated::SYxmZwO8hgQ4bAqv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@store',
        'controller' => 'App\\Http\\Controllers\\CepaController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SYxmZwO8hgQ4bAqv',
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
    'generated::ex2WnvaGMgfWTvna' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@status',
        'controller' => 'App\\Http\\Controllers\\CepaController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ex2WnvaGMgfWTvna',
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
    'update.cepa' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateCepa/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@update',
        'controller' => 'App\\Http\\Controllers\\CepaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.cepa',
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
    'generated::4xVMOZjos6u2nvRI' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@destroy',
        'controller' => 'App\\Http\\Controllers\\CepaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4xVMOZjos6u2nvRI',
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
    'generated::tNIKniCXS5PSPfy5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalAsignacionCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@sectionAsignacion',
        'controller' => 'App\\Http\\Controllers\\CepaController@sectionAsignacion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tNIKniCXS5PSPfy5',
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
    'asignar.loteCepa.loteMedio' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'asignarLoteCepaMedio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@asignarLoteCepaALoteMedio',
        'controller' => 'App\\Http\\Controllers\\CepaController@asignarLoteCepaALoteMedio',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'asignar.loteCepa.loteMedio',
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
    'asignar.loteCepa.loteTincion' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'asignarLoteCepaTincion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@asignarLoteCepaALoteTincion',
        'controller' => 'App\\Http\\Controllers\\CepaController@asignarLoteCepaALoteTincion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'asignar.loteCepa.loteTincion',
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
    'asignar.loteCepa.lotePruebaSensi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'asignarLoteCepaPruebaSensi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@asignarLoteCepaALotePruebaSensi',
        'controller' => 'App\\Http\\Controllers\\CepaController@asignarLoteCepaALotePruebaSensi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'asignar.loteCepa.lotePruebaSensi',
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
    'registro.cepa.medio' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'registro/cepa/medios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@controlCepaMedio',
        'controller' => 'App\\Http\\Controllers\\CepaController@controlCepaMedio',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'registro.cepa.medio',
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
    'registro.cepa.tincion' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'registro/cepa/tinciones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@controlCepaTincion',
        'controller' => 'App\\Http\\Controllers\\CepaController@controlCepaTincion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'registro.cepa.tincion',
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
    'registro.cepa.prueba' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'registro/cepa/pruebaSensi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@controlCepaPrueba',
        'controller' => 'App\\Http\\Controllers\\CepaController@controlCepaPrueba',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'registro.cepa.prueba',
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
    'update.cepa.control' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update/cepa/medios/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@updateControlCepaMedio',
        'controller' => 'App\\Http\\Controllers\\CepaController@updateControlCepaMedio',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.cepa.control',
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
    'update.cepa.control.tincion' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update/cepa/tinciones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@updateControlCepaTincion',
        'controller' => 'App\\Http\\Controllers\\CepaController@updateControlCepaTincion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.cepa.control.tincion',
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
    'update.cepa.control.prueba' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update/cepa/pruebas/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@updateControlCepaPrueba',
        'controller' => 'App\\Http\\Controllers\\CepaController@updateControlCepaPrueba',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.cepa.control.prueba',
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
    'destroy.control.cepa.medio' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'destroy/cepa/medios/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@destroyControlCepaMedio',
        'controller' => 'App\\Http\\Controllers\\CepaController@destroyControlCepaMedio',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'destroy.control.cepa.medio',
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
    'destroy.control.cepa.tincion' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'destroy/cepa/tinciones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@destroyControlCepaTincion',
        'controller' => 'App\\Http\\Controllers\\CepaController@destroyControlCepaTincion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'destroy.control.cepa.tincion',
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
    'destroy.control.cepa.prueba' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'destroy/cepa/pruebas/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@destroyControlCepaPrueba',
        'controller' => 'App\\Http\\Controllers\\CepaController@destroyControlCepaPrueba',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'destroy.control.cepa.prueba',
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
    'generated::TNbNHcHWYV3tgNqD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionTincion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@section',
        'controller' => 'App\\Http\\Controllers\\TincionController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TNbNHcHWYV3tgNqD',
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
    'generated::jLMyHdEydkBVsxHX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexTincion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@index',
        'controller' => 'App\\Http\\Controllers\\TincionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jLMyHdEydkBVsxHX',
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
    'generated::EDt3TmqbI5zfgbMy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexTincionLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@index',
        'controller' => 'App\\Http\\Controllers\\TincionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EDt3TmqbI5zfgbMy',
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
    'formEdit.tincion' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditTincion/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@edit',
        'controller' => 'App\\Http\\Controllers\\TincionController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'formEdit.tincion',
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
    'generated::MjkLA1O5LyC8KMUl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowTincion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@show',
        'controller' => 'App\\Http\\Controllers\\TincionController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MjkLA1O5LyC8KMUl',
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
    'generated::IwxRrnna5cJ7JmEc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListTincion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@listHTML',
        'controller' => 'App\\Http\\Controllers\\TincionController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IwxRrnna5cJ7JmEc',
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
    'store.tincion.lote.lab' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'storeLoteTincionLab',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@asignarloteLaboratorio',
        'controller' => 'App\\Http\\Controllers\\TincionController@asignarloteLaboratorio',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.tincion.lote.lab',
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
    'generated::J3mpES0aDm02gbm6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreTincion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@store',
        'controller' => 'App\\Http\\Controllers\\TincionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::J3mpES0aDm02gbm6',
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
    'generated::hJIyYkCLXlFZ7hmq' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusTincion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@status',
        'controller' => 'App\\Http\\Controllers\\TincionController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hJIyYkCLXlFZ7hmq',
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
    'update.tincion' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateTincion/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@update',
        'controller' => 'App\\Http\\Controllers\\TincionController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.tincion',
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
    'generated::CsggSDEeaqKta6hX' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyTincion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@destroy',
        'controller' => 'App\\Http\\Controllers\\TincionController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CsggSDEeaqKta6hX',
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
    'generated::aLExENQHQFBMXJhN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalControlConfiguracionTinciones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@sectionAsignacion',
        'controller' => 'App\\Http\\Controllers\\TincionController@sectionAsignacion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aLExENQHQFBMXJhN',
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
    'generated::LL89S1NQj1p6j20k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalControlConfiguracionTincionesCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@sectionAsignacionCepa',
        'controller' => 'App\\Http\\Controllers\\TincionController@sectionAsignacionCepa',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LL89S1NQj1p6j20k',
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
    'generated::cHw1wPzgfXzZbKpK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreTincionLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@tincioncultivo',
        'controller' => 'App\\Http\\Controllers\\TincionController@tincioncultivo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cHw1wPzgfXzZbKpK',
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
    'generated::ffevPwCrycVheHWX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreTincionLaboratorioCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@tincioncepa',
        'controller' => 'App\\Http\\Controllers\\TincionController@tincioncepa',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ffevPwCrycVheHWX',
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
    'store.compra.lote' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreLote/{itemId}/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CompraLoteController@store',
        'controller' => 'App\\Http\\Controllers\\CompraLoteController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.compra.lote',
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
    'update.compra.lote' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'updateLote/{id}/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CompraLoteController@update',
        'controller' => 'App\\Http\\Controllers\\CompraLoteController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.compra.lote',
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
    'destroy.compra.lote' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'deleteLote/{id}/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CompraLoteController@destroy',
        'controller' => 'App\\Http\\Controllers\\CompraLoteController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'destroy.compra.lote',
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
    'microbiologia.medio.detalles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'microbiologia/detalleMedio/{id}/lab/{labId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@detalles',
        'controller' => 'App\\Http\\Controllers\\MedioController@detalles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'microbiologia.medio.detalles',
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
    'microbiologia.tincion.detalles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'microbiologia/detalleTincion/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@detalles',
        'controller' => 'App\\Http\\Controllers\\TincionController@detalles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'microbiologia.tincion.detalles',
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
    'microbiologia.prueba.detalles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'microbiologia/detallePruebaSensi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@detalles',
        'controller' => 'App\\Http\\Controllers\\PruebaController@detalles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'microbiologia.prueba.detalles',
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
    'generar.informe.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'microbiologia/Informe/ControlCepa/{loteId}/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PDFController@generarPDF',
        'controller' => 'App\\Http\\Controllers\\PDFController@generarPDF',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generar.informe.pdf',
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
    'generated::iK7rQiDTx6OXl5ui' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionPrueba',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@section',
        'controller' => 'App\\Http\\Controllers\\PruebaController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iK7rQiDTx6OXl5ui',
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
    'generated::U6LuGIKVuZRMEs5w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexPrueba',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@index',
        'controller' => 'App\\Http\\Controllers\\PruebaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::U6LuGIKVuZRMEs5w',
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
    'generated::kAUJl2p1yHAFGBZ8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexPruebaLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@index',
        'controller' => 'App\\Http\\Controllers\\PruebaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kAUJl2p1yHAFGBZ8',
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
    'formEdit.prueba' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditPrueba/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@edit',
        'controller' => 'App\\Http\\Controllers\\PruebaController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'formEdit.prueba',
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
    'generated::aY8DH0YQ1VvFR0Mr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowPrueba',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@show',
        'controller' => 'App\\Http\\Controllers\\PruebaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aY8DH0YQ1VvFR0Mr',
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
    'generated::BVRpDjecn6EVL4Hs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListPrueba',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@listHTML',
        'controller' => 'App\\Http\\Controllers\\PruebaController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BVRpDjecn6EVL4Hs',
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
    'generated::lLwzmRQMKMXVdMRd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StorePrueba',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@store',
        'controller' => 'App\\Http\\Controllers\\PruebaController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lLwzmRQMKMXVdMRd',
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
    'generated::VfnLpjCmvy4bbENE' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusPrueba',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@status',
        'controller' => 'App\\Http\\Controllers\\PruebaController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VfnLpjCmvy4bbENE',
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
    'update.prueba' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdatePrueba/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@update',
        'controller' => 'App\\Http\\Controllers\\PruebaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.prueba',
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
    'generated::NdAhtLtTjP8F4mv8' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyPrueba',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@destroy',
        'controller' => 'App\\Http\\Controllers\\PruebaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NdAhtLtTjP8F4mv8',
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
    'generated::1iZbPdufTDOawwY1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalControlConfiguracionPruebas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@sectionAsignacion',
        'controller' => 'App\\Http\\Controllers\\PruebaController@sectionAsignacion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1iZbPdufTDOawwY1',
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
    'generated::RmZDiYyxXCjNuUpN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalControlConfiguracionPruebasCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@sectionAsignacionCepa',
        'controller' => 'App\\Http\\Controllers\\PruebaController@sectionAsignacionCepa',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RmZDiYyxXCjNuUpN',
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
    'generated::KVEqOuOcPRhPuQrk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StorePruebaLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@cepa',
        'controller' => 'App\\Http\\Controllers\\TincionController@cepa',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KVEqOuOcPRhPuQrk',
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
    'generated::oZ3anZYZBYtGZffX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionPais',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PaisController@section',
        'controller' => 'App\\Http\\Controllers\\PaisController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oZ3anZYZBYtGZffX',
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
    'generated::fElw77ueOc134F4d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexPais',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PaisController@index',
        'controller' => 'App\\Http\\Controllers\\PaisController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fElw77ueOc134F4d',
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
    'generated::ScXm6vBeI7basftY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditPais',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PaisController@edit',
        'controller' => 'App\\Http\\Controllers\\PaisController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ScXm6vBeI7basftY',
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
    'generated::YunGk5R4p8NzfQko' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowPais',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PaisController@show',
        'controller' => 'App\\Http\\Controllers\\PaisController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YunGk5R4p8NzfQko',
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
    'generated::4Y7tkqOuQuQkt035' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListPais',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PaisController@listHTML',
        'controller' => 'App\\Http\\Controllers\\PaisController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4Y7tkqOuQuQkt035',
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
    'generated::CqlgUuiOQE2eV4L4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StorePais',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PaisController@store',
        'controller' => 'App\\Http\\Controllers\\PaisController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CqlgUuiOQE2eV4L4',
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
    'generated::LfvTjzVZD7LdEhj0' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusPais',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PaisController@status',
        'controller' => 'App\\Http\\Controllers\\PaisController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LfvTjzVZD7LdEhj0',
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
    'generated::tMNbKKhPrItJ8OCh' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdatePais',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PaisController@update',
        'controller' => 'App\\Http\\Controllers\\PaisController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tMNbKKhPrItJ8OCh',
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
    'generated::0Cgcgw0FSwLGDGB0' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyPais',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PaisController@destroy',
        'controller' => 'App\\Http\\Controllers\\PaisController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0Cgcgw0FSwLGDGB0',
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
    'generated::HrUjlWXhAShlWja9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionProveedor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProveedorController@section',
        'controller' => 'App\\Http\\Controllers\\ProveedorController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HrUjlWXhAShlWja9',
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
    'generated::mQ9ZLdOjWRWCGltY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexProveedor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProveedorController@index',
        'controller' => 'App\\Http\\Controllers\\ProveedorController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mQ9ZLdOjWRWCGltY',
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
    'generated::CgVp76EE9MBFtow8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditProveedor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProveedorController@edit',
        'controller' => 'App\\Http\\Controllers\\ProveedorController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CgVp76EE9MBFtow8',
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
    'generated::pYQzbhWU2WGkdTGd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListProveedor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProveedorController@listHTML',
        'controller' => 'App\\Http\\Controllers\\ProveedorController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pYQzbhWU2WGkdTGd',
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
    'generated::8rqh28qHFrTMh4r5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowProveedor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProveedorController@show',
        'controller' => 'App\\Http\\Controllers\\ProveedorController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8rqh28qHFrTMh4r5',
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
    'generated::Y7hdQdSaxAqeidOp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreProveedor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProveedorController@store',
        'controller' => 'App\\Http\\Controllers\\ProveedorController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Y7hdQdSaxAqeidOp',
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
    'generated::qaT4pn1L7ioIazRP' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusProveedor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProveedorController@status',
        'controller' => 'App\\Http\\Controllers\\ProveedorController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qaT4pn1L7ioIazRP',
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
    'generated::m09k2IID1kkFhXVE' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateProveedor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProveedorController@update',
        'controller' => 'App\\Http\\Controllers\\ProveedorController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::m09k2IID1kkFhXVE',
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
    'generated::R8jBCb8bqG89B5iE' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyProveedor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProveedorController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProveedorController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::R8jBCb8bqG89B5iE',
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
    'generated::5xUp2Yd7fav1GDsd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionAnalizador',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalizadorController@section',
        'controller' => 'App\\Http\\Controllers\\AnalizadorController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5xUp2Yd7fav1GDsd',
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
    'generated::G33QpRTbeMt5j26I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexAnalizador',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalizadorController@index',
        'controller' => 'App\\Http\\Controllers\\AnalizadorController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::G33QpRTbeMt5j26I',
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
    'generated::bz6y22mpqoBoRXPZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditAnalizador',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalizadorController@edit',
        'controller' => 'App\\Http\\Controllers\\AnalizadorController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bz6y22mpqoBoRXPZ',
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
    'generated::qjjRgNXXPvVrvaXs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListAnalizador',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalizadorController@listHTML',
        'controller' => 'App\\Http\\Controllers\\AnalizadorController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qjjRgNXXPvVrvaXs',
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
    'generated::PgyyeQqLSUvswucZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowAnalizador',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalizadorController@show',
        'controller' => 'App\\Http\\Controllers\\AnalizadorController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PgyyeQqLSUvswucZ',
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
    'generated::Fo17gbzvDB406X47' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreAnalizador',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalizadorController@store',
        'controller' => 'App\\Http\\Controllers\\AnalizadorController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Fo17gbzvDB406X47',
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
    'generated::7HcLm3Gv4RRVzx1Q' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusAnalizador',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalizadorController@status',
        'controller' => 'App\\Http\\Controllers\\AnalizadorController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7HcLm3Gv4RRVzx1Q',
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
    'generated::NX8Y18ces1pUy6UH' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateAnalizador',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalizadorController@update',
        'controller' => 'App\\Http\\Controllers\\AnalizadorController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NX8Y18ces1pUy6UH',
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
    'generated::WdjndFvXAUdpR0Gn' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyAnalizador',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalizadorController@destroy',
        'controller' => 'App\\Http\\Controllers\\AnalizadorController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WdjndFvXAUdpR0Gn',
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
    'generated::MZYSmpdbiMXRxXdb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionMetodologia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MetodologiaController@section',
        'controller' => 'App\\Http\\Controllers\\MetodologiaController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MZYSmpdbiMXRxXdb',
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
    'generated::vNulm8TvZfUkEpEV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexMetodologia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MetodologiaController@index',
        'controller' => 'App\\Http\\Controllers\\MetodologiaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vNulm8TvZfUkEpEV',
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
    'generated::UNhgmiOcXPnyVh1h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditMetodologia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MetodologiaController@edit',
        'controller' => 'App\\Http\\Controllers\\MetodologiaController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UNhgmiOcXPnyVh1h',
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
    'generated::hKhos1IjkACZFtn7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowMetodologia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MetodologiaController@show',
        'controller' => 'App\\Http\\Controllers\\MetodologiaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hKhos1IjkACZFtn7',
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
    'generated::X0BzcZ7DEPMk92Cw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreMetodologia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MetodologiaController@store',
        'controller' => 'App\\Http\\Controllers\\MetodologiaController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::X0BzcZ7DEPMk92Cw',
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
    'generated::mpSZ3RSzqdDUK1Ut' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusMetodologia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MetodologiaController@status',
        'controller' => 'App\\Http\\Controllers\\MetodologiaController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mpSZ3RSzqdDUK1Ut',
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
    'generated::Gjcp1sotQOPtimx9' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateMetodologia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MetodologiaController@update',
        'controller' => 'App\\Http\\Controllers\\MetodologiaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Gjcp1sotQOPtimx9',
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
    'generated::BYtxGaZdr1jmMvtb' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyMetodologia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MetodologiaController@destroy',
        'controller' => 'App\\Http\\Controllers\\MetodologiaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BYtxGaZdr1jmMvtb',
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
    'generated::UgONjQiz2VsZCPlO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionUnidad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadController@section',
        'controller' => 'App\\Http\\Controllers\\UnidadController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UgONjQiz2VsZCPlO',
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
    'generated::IOkOfqUdtxPkJUqN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexUnidad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadController@index',
        'controller' => 'App\\Http\\Controllers\\UnidadController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IOkOfqUdtxPkJUqN',
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
    'generated::DEKWvth1Ynj3RoNf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditUnidad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadController@edit',
        'controller' => 'App\\Http\\Controllers\\UnidadController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DEKWvth1Ynj3RoNf',
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
    'generated::wbmeYpQuWbRqcfN9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowUnidad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadController@show',
        'controller' => 'App\\Http\\Controllers\\UnidadController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wbmeYpQuWbRqcfN9',
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
    'generated::qxz432tNZZDh3Mgz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreUnidad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadController@store',
        'controller' => 'App\\Http\\Controllers\\UnidadController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qxz432tNZZDh3Mgz',
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
    'generated::u4QtiNz3vYoLZteJ' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusUnidad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadController@status',
        'controller' => 'App\\Http\\Controllers\\UnidadController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::u4QtiNz3vYoLZteJ',
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
    'generated::RKTYq7ZikKPiaRFf' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateUnidad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadController@update',
        'controller' => 'App\\Http\\Controllers\\UnidadController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RKTYq7ZikKPiaRFf',
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
    'generated::N8wBk5KW6r3rnnw5' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyUnidad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadController@destroy',
        'controller' => 'App\\Http\\Controllers\\UnidadController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::N8wBk5KW6r3rnnw5',
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
    'generated::fbxJypUH0mj7Pgf5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionTemperatura',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TemperaturaController@section',
        'controller' => 'App\\Http\\Controllers\\TemperaturaController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fbxJypUH0mj7Pgf5',
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
    'generated::9B41nokh8OxSiy5z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexTemperatura',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TemperaturaController@index',
        'controller' => 'App\\Http\\Controllers\\TemperaturaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9B41nokh8OxSiy5z',
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
    'generated::BaiqHewQEtjifNhB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditTemperatura',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TemperaturaController@edit',
        'controller' => 'App\\Http\\Controllers\\TemperaturaController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BaiqHewQEtjifNhB',
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
    'generated::QpqXbRZJmKWSBCbP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowTemperatura',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TemperaturaController@show',
        'controller' => 'App\\Http\\Controllers\\TemperaturaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QpqXbRZJmKWSBCbP',
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
    'generated::qfg68uyixERqxjpA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreTemperatura',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TemperaturaController@store',
        'controller' => 'App\\Http\\Controllers\\TemperaturaController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qfg68uyixERqxjpA',
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
    'generated::J708KXJOCyNPfk6y' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusTemperatura',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TemperaturaController@status',
        'controller' => 'App\\Http\\Controllers\\TemperaturaController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::J708KXJOCyNPfk6y',
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
    'generated::UItuZOoVXWKOvuhB' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateTemperatura',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TemperaturaController@update',
        'controller' => 'App\\Http\\Controllers\\TemperaturaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UItuZOoVXWKOvuhB',
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
    'generated::r7xFZKEqkmQOFjYc' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyTemperatura',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TemperaturaController@destroy',
        'controller' => 'App\\Http\\Controllers\\TemperaturaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::r7xFZKEqkmQOFjYc',
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
    'generated::ImWbHMHgGuk2flFm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionReactivo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReactivoController@section',
        'controller' => 'App\\Http\\Controllers\\ReactivoController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ImWbHMHgGuk2flFm',
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
    'generated::nlFygQKLSm9Gm87O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexReactivo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReactivoController@index',
        'controller' => 'App\\Http\\Controllers\\ReactivoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nlFygQKLSm9Gm87O',
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
    'generated::K9NCeWh7fdtMc27S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditReactivo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReactivoController@edit',
        'controller' => 'App\\Http\\Controllers\\ReactivoController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::K9NCeWh7fdtMc27S',
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
    'generated::kOuWYlY0g0UVnXt1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListReactivo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReactivoController@listHTML',
        'controller' => 'App\\Http\\Controllers\\ReactivoController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kOuWYlY0g0UVnXt1',
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
    'generated::BhbG92HX6CZxR0j4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowReactivo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReactivoController@show',
        'controller' => 'App\\Http\\Controllers\\ReactivoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BhbG92HX6CZxR0j4',
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
    'generated::Jc7u3BlfyKZ01WPU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreReactivo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReactivoController@store',
        'controller' => 'App\\Http\\Controllers\\ReactivoController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Jc7u3BlfyKZ01WPU',
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
    'generated::UqnMSKGPyz0b9o1Z' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusReactivo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReactivoController@status',
        'controller' => 'App\\Http\\Controllers\\ReactivoController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UqnMSKGPyz0b9o1Z',
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
    'generated::QdVIX1ucneWq4eUq' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateReactivo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReactivoController@update',
        'controller' => 'App\\Http\\Controllers\\ReactivoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QdVIX1ucneWq4eUq',
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
    'generated::UezOdHL8OBmggNIi' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyReactivo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReactivoController@destroy',
        'controller' => 'App\\Http\\Controllers\\ReactivoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UezOdHL8OBmggNIi',
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
    'generated::W7IICGf6ET3WNbdM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionMatriz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MatrizController@section',
        'controller' => 'App\\Http\\Controllers\\MatrizController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::W7IICGf6ET3WNbdM',
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
    'generated::UTsPvdnaIbUfFP0P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexMatriz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MatrizController@index',
        'controller' => 'App\\Http\\Controllers\\MatrizController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UTsPvdnaIbUfFP0P',
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
    'generated::cQM8t13sPD2we4Nr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditMatriz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MatrizController@edit',
        'controller' => 'App\\Http\\Controllers\\MatrizController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cQM8t13sPD2we4Nr',
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
    'generated::iW253O2b7smB0OrC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListMatriz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MatrizController@listHTML',
        'controller' => 'App\\Http\\Controllers\\MatrizController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iW253O2b7smB0OrC',
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
    'generated::lsettZfhPmH1F1Te' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowMatriz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MatrizController@show',
        'controller' => 'App\\Http\\Controllers\\MatrizController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lsettZfhPmH1F1Te',
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
    'generated::lQRHtLeYzqXprmn0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreMatriz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MatrizController@store',
        'controller' => 'App\\Http\\Controllers\\MatrizController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lQRHtLeYzqXprmn0',
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
    'generated::B3aYwkmhid599ARi' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusMatriz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MatrizController@status',
        'controller' => 'App\\Http\\Controllers\\MatrizController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::B3aYwkmhid599ARi',
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
    'generated::8VaL3tI7ohaGDMrz' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateMatriz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MatrizController@update',
        'controller' => 'App\\Http\\Controllers\\MatrizController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8VaL3tI7ohaGDMrz',
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
    'generated::1lN1yHRSL1clBp1s' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyMatriz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\MatrizController@destroy',
        'controller' => 'App\\Http\\Controllers\\MatrizController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1lN1yHRSL1clBp1s',
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
    'generated::1bJ3wurXnfsauWnv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionFuenteETMP',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FuenteETMPController@section',
        'controller' => 'App\\Http\\Controllers\\FuenteETMPController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1bJ3wurXnfsauWnv',
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
    'generated::dLlXaQ7AJe9IkcB1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexFuenteETMP',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FuenteETMPController@index',
        'controller' => 'App\\Http\\Controllers\\FuenteETMPController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dLlXaQ7AJe9IkcB1',
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
    'generated::CRpmqasheO8d34gm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditFuenteETMP',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FuenteETMPController@edit',
        'controller' => 'App\\Http\\Controllers\\FuenteETMPController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CRpmqasheO8d34gm',
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
    'generated::bframWhLHXzEns7W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListFuenteETMP',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FuenteETMPController@listHTML',
        'controller' => 'App\\Http\\Controllers\\FuenteETMPController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bframWhLHXzEns7W',
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
    'generated::2XEETAQqztZ9zwe5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowFuenteETMP',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FuenteETMPController@show',
        'controller' => 'App\\Http\\Controllers\\FuenteETMPController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2XEETAQqztZ9zwe5',
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
    'generated::LMp985Q4eNoTAVyN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreFuenteETMP',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FuenteETMPController@store',
        'controller' => 'App\\Http\\Controllers\\FuenteETMPController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LMp985Q4eNoTAVyN',
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
    'generated::1R0tjkiUHsHNCX4Q' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusFuenteETMP',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FuenteETMPController@status',
        'controller' => 'App\\Http\\Controllers\\FuenteETMPController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1R0tjkiUHsHNCX4Q',
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
    'generated::XtRDkTWy1Nf6uTBg' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateFuenteETMP',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FuenteETMPController@update',
        'controller' => 'App\\Http\\Controllers\\FuenteETMPController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XtRDkTWy1Nf6uTBg',
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
    'generated::FZ8Ure72QQPgLFII' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyFuenteETMP',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FuenteETMPController@destroy',
        'controller' => 'App\\Http\\Controllers\\FuenteETMPController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FZ8Ure72QQPgLFII',
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
    'generated::tRbYqz6qBqkSSPGE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionCiudad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CiudadController@section',
        'controller' => 'App\\Http\\Controllers\\CiudadController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tRbYqz6qBqkSSPGE',
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
    'generated::hwLE15z2bdOHwAGq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexCiudad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CiudadController@index',
        'controller' => 'App\\Http\\Controllers\\CiudadController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hwLE15z2bdOHwAGq',
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
    'generated::GzY5AiXN5yBLnWRI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditCiudad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CiudadController@edit',
        'controller' => 'App\\Http\\Controllers\\CiudadController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GzY5AiXN5yBLnWRI',
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
    'generated::3DZOgxszgjQ4purw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowCiudad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CiudadController@show',
        'controller' => 'App\\Http\\Controllers\\CiudadController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3DZOgxszgjQ4purw',
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
    'generated::m2JZzxwg0E8RbRmP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListCiudad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CiudadController@listHTML',
        'controller' => 'App\\Http\\Controllers\\CiudadController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::m2JZzxwg0E8RbRmP',
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
    'generated::LadigKd1ol4RG8cU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreCiudad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CiudadController@store',
        'controller' => 'App\\Http\\Controllers\\CiudadController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LadigKd1ol4RG8cU',
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
    'generated::aQffsW8CCZGach2f' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusCiudad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CiudadController@status',
        'controller' => 'App\\Http\\Controllers\\CiudadController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aQffsW8CCZGach2f',
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
    'generated::o1b0aduKTLJvqtQf' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateCiudad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CiudadController@update',
        'controller' => 'App\\Http\\Controllers\\CiudadController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::o1b0aduKTLJvqtQf',
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
    'generated::Ks1DFiCzn0nYR7c9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyCiudad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CiudadController@destroy',
        'controller' => 'App\\Http\\Controllers\\CiudadController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Ks1DFiCzn0nYR7c9',
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
    'generated::Oeu3DcZuqT63NTvx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionControl',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlController@section',
        'controller' => 'App\\Http\\Controllers\\ControlController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Oeu3DcZuqT63NTvx',
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
    'generated::hzAYr3sM3uRc6aNj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexControl',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlController@index',
        'controller' => 'App\\Http\\Controllers\\ControlController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hzAYr3sM3uRc6aNj',
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
    'generated::CybicR20d5ZiAwtY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditControl',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlController@edit',
        'controller' => 'App\\Http\\Controllers\\ControlController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CybicR20d5ZiAwtY',
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
    'generated::DP9f9pDnYrBEoStp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowControl',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlController@show',
        'controller' => 'App\\Http\\Controllers\\ControlController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DP9f9pDnYrBEoStp',
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
    'generated::iF7ear8LU7cag8Pw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListControl',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlController@listHTML',
        'controller' => 'App\\Http\\Controllers\\ControlController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iF7ear8LU7cag8Pw',
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
    'generated::43FgWQViRGRevJuJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreControl',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlController@store',
        'controller' => 'App\\Http\\Controllers\\ControlController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::43FgWQViRGRevJuJ',
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
    'generated::4QAVVPTZTZcuRJtL' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusControl',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlController@status',
        'controller' => 'App\\Http\\Controllers\\ControlController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4QAVVPTZTZcuRJtL',
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
    'generated::XSOEH9FFyBIK5jBl' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateControl',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlController@update',
        'controller' => 'App\\Http\\Controllers\\ControlController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XSOEH9FFyBIK5jBl',
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
    'generated::gl2XVeeVhQJ7PU0Z' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyControl',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlController@destroy',
        'controller' => 'App\\Http\\Controllers\\ControlController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gl2XVeeVhQJ7PU0Z',
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
    'generated::IVQGGe9T33xOmvxZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionLote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LoteController@section',
        'controller' => 'App\\Http\\Controllers\\LoteController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IVQGGe9T33xOmvxZ',
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
    'generated::ff2TO5GSdW9e7zhx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexLote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LoteController@index',
        'controller' => 'App\\Http\\Controllers\\LoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ff2TO5GSdW9e7zhx',
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
    'generated::NDTvpPNmrfk7cOsu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditLote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LoteController@edit',
        'controller' => 'App\\Http\\Controllers\\LoteController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NDTvpPNmrfk7cOsu',
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
    'generated::KW9lmcr6dAuhFXNn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListLote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LoteController@listHTML',
        'controller' => 'App\\Http\\Controllers\\LoteController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KW9lmcr6dAuhFXNn',
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
    'generated::UBQMSIl559fkPHKc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowLote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LoteController@show',
        'controller' => 'App\\Http\\Controllers\\LoteController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UBQMSIl559fkPHKc',
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
    'generated::VkVQ5OUEOLPCOanf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreLote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LoteController@store',
        'controller' => 'App\\Http\\Controllers\\LoteController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VkVQ5OUEOLPCOanf',
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
    'generated::7kUq5HB1zdTHVHQv' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusLote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LoteController@status',
        'controller' => 'App\\Http\\Controllers\\LoteController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7kUq5HB1zdTHVHQv',
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
    'generated::zZM0qKTkXX2xGcyB' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateLote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LoteController@update',
        'controller' => 'App\\Http\\Controllers\\LoteController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zZM0qKTkXX2xGcyB',
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
    'generated::oZlhBWWUsLopQhUW' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyLote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LoteController@destroy',
        'controller' => 'App\\Http\\Controllers\\LoteController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oZlhBWWUsLopQhUW',
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
    'generated::JfEPzo5cU5ljyXbl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionSede',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SedeController@section',
        'controller' => 'App\\Http\\Controllers\\SedeController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JfEPzo5cU5ljyXbl',
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
    'generated::l6ZDW5biypTbmUdm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexSede',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SedeController@index',
        'controller' => 'App\\Http\\Controllers\\SedeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::l6ZDW5biypTbmUdm',
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
    'generated::41GFHfZNrMflFvDP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditSede',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SedeController@edit',
        'controller' => 'App\\Http\\Controllers\\SedeController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::41GFHfZNrMflFvDP',
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
    'generated::xnoDCuW0jL7xEtpW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListSede',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SedeController@listHTML',
        'controller' => 'App\\Http\\Controllers\\SedeController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xnoDCuW0jL7xEtpW',
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
    'generated::kbwZzrRrTZeVIFjJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowSede',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SedeController@show',
        'controller' => 'App\\Http\\Controllers\\SedeController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kbwZzrRrTZeVIFjJ',
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
    'generated::qp1MSNE7BUdrakvk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreSede',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SedeController@store',
        'controller' => 'App\\Http\\Controllers\\SedeController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qp1MSNE7BUdrakvk',
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
    'generated::DWlGs6giS9WkpFZe' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusSede',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SedeController@status',
        'controller' => 'App\\Http\\Controllers\\SedeController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DWlGs6giS9WkpFZe',
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
    'generated::D13hA2UYqiknPztX' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateSede',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SedeController@update',
        'controller' => 'App\\Http\\Controllers\\SedeController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D13hA2UYqiknPztX',
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
    'generated::R3sDPGSJKwpUbuft' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroySede',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SedeController@destroy',
        'controller' => 'App\\Http\\Controllers\\SedeController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::R3sDPGSJKwpUbuft',
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
    'generated::uxVcSOqOKYxC7Ue7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratorioController@section',
        'controller' => 'App\\Http\\Controllers\\LaboratorioController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uxVcSOqOKYxC7Ue7',
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
    'generated::g5k4XAxOLYe8MPf5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratorioController@index',
        'controller' => 'App\\Http\\Controllers\\LaboratorioController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::g5k4XAxOLYe8MPf5',
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
    'generated::fZAjP9qdoEt7FORD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratorioController@edit',
        'controller' => 'App\\Http\\Controllers\\LaboratorioController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fZAjP9qdoEt7FORD',
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
    'generated::nCAu58KeM7Dls8oJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratorioController@listHTML',
        'controller' => 'App\\Http\\Controllers\\LaboratorioController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nCAu58KeM7Dls8oJ',
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
    'generated::1xAGHof3Zm87X7Ic' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratorioController@show',
        'controller' => 'App\\Http\\Controllers\\LaboratorioController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1xAGHof3Zm87X7Ic',
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
    'generated::ZOAVNgLiiyRYUFEi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratorioController@store',
        'controller' => 'App\\Http\\Controllers\\LaboratorioController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZOAVNgLiiyRYUFEi',
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
    'generated::PbYh45krR64uze08' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratorioController@status',
        'controller' => 'App\\Http\\Controllers\\LaboratorioController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PbYh45krR64uze08',
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
    'generated::uuIYGRtkiTle1iAG' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratorioController@update',
        'controller' => 'App\\Http\\Controllers\\LaboratorioController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uuIYGRtkiTle1iAG',
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
    'generated::lvGgf2SGWk8Rom9v' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratorioController@destroy',
        'controller' => 'App\\Http\\Controllers\\LaboratorioController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lvGgf2SGWk8Rom9v',
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
    'generated::o3ZCPhK3A0Ic0W0w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionVariabilidadBiologica',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@section',
        'controller' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::o3ZCPhK3A0Ic0W0w',
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
    'generated::hFFhQMTYsmPh2pys' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexVariabilidadBiologica',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@index',
        'controller' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hFFhQMTYsmPh2pys',
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
    'generated::k7EBspwlQIrsfTaK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditVariabilidadBiologica',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@edit',
        'controller' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::k7EBspwlQIrsfTaK',
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
    'generated::IbibOyg7e9W8J9yK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListVariabilidadBiologica',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@listHTML',
        'controller' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IbibOyg7e9W8J9yK',
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
    'generated::mpAGQSnDBS3z7EkJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowVariabilidadBiologica',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@show',
        'controller' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mpAGQSnDBS3z7EkJ',
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
    'generated::NbYBq7yhfMbJLVW9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreVariabilidadBiologica',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@store',
        'controller' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NbYBq7yhfMbJLVW9',
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
    'generated::zjOMoZl2oJBMa8G9' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusVariabilidadBiologica',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@status',
        'controller' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zjOMoZl2oJBMa8G9',
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
    'generated::PN6Z8JN9xsyJtnk9' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateVariabilidadBiologica',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@update',
        'controller' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PN6Z8JN9xsyJtnk9',
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
    'generated::mm4FcyzngmzU6FP7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyVariabilidadBiologica',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@destroy',
        'controller' => 'App\\Http\\Controllers\\VariabilidadBiologicaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mm4FcyzngmzU6FP7',
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
    'generated::0yvAc2yW7ivxMAuv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListAnalito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoController@listHTML',
        'controller' => 'App\\Http\\Controllers\\AnalitoController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0yvAc2yW7ivxMAuv',
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
    'generated::jhJ3VAivrUu8xJ3w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionAnalito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoController@section',
        'controller' => 'App\\Http\\Controllers\\AnalitoController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jhJ3VAivrUu8xJ3w',
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
    'generated::tjQwC2niPvRRGdHW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexAnalito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoController@index',
        'controller' => 'App\\Http\\Controllers\\AnalitoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tjQwC2niPvRRGdHW',
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
    'generated::9t6Zilh9dZO44fTx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditAnalito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoController@edit',
        'controller' => 'App\\Http\\Controllers\\AnalitoController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9t6Zilh9dZO44fTx',
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
    'generated::Ekfg1NbpfrFUYqfZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowAnalito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoController@show',
        'controller' => 'App\\Http\\Controllers\\AnalitoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Ekfg1NbpfrFUYqfZ',
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
    'generated::DNKu4P1M49ckHrcH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreAnalito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoController@store',
        'controller' => 'App\\Http\\Controllers\\AnalitoController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DNKu4P1M49ckHrcH',
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
    'generated::GV8YApMaUZSpEgf2' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusAnalito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoController@status',
        'controller' => 'App\\Http\\Controllers\\AnalitoController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GV8YApMaUZSpEgf2',
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
    'generated::m0dXAZtk7lv0xXbC' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateAnalito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoController@update',
        'controller' => 'App\\Http\\Controllers\\AnalitoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::m0dXAZtk7lv0xXbC',
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
    'generated::lh8qz8oTLQMyuXh9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyAnalito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoController@destroy',
        'controller' => 'App\\Http\\Controllers\\AnalitoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lh8qz8oTLQMyuXh9',
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
    'generated::oZQBSQDC8eNQEDFP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalAsignacionAnalito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoController@sectionAsignacion',
        'controller' => 'App\\Http\\Controllers\\AnalitoController@sectionAsignacion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oZQBSQDC8eNQEDFP',
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
    'generated::2FVfYyd0iT00LWw0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'SaveAsignacionAnalito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoController@asignacion',
        'controller' => 'App\\Http\\Controllers\\AnalitoController@asignacion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2FVfYyd0iT00LWw0',
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
    'generated::UIUmk6ToucCYH94A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionUsuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@section',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UIUmk6ToucCYH94A',
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
    'generated::cfblIW9LyQHXA4Qw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexUsuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@index',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cfblIW9LyQHXA4Qw',
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
    'generated::c0456psoDYVdAC89' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditUsuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@edit',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::c0456psoDYVdAC89',
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
    'generated::pScd1TOiLzjzwQr1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListUsuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@listHTML',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pScd1TOiLzjzwQr1',
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
    'generated::w9LRR6vDk70lxR7U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowUsuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@show',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::w9LRR6vDk70lxR7U',
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
    'generated::FCTgLa4tUnkgjtaR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreUsuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@store',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FCTgLa4tUnkgjtaR',
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
    'generated::iVor58yRwYeH3R4Z' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusUsuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@status',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iVor58yRwYeH3R4Z',
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
    'generated::2lE7ORK3HszcwMsu' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateUsuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@update',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2lE7ORK3HszcwMsu',
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
    'generated::vPkJIQrfIEMqV4GT' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyUsuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@destroy',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vPkJIQrfIEMqV4GT',
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
    'generated::HCQIoaCZGojODMcU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalAsignacionUsuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@sectionAsignacion',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@sectionAsignacion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HCQIoaCZGojODMcU',
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
    'generated::5fraCwFD7tt5gUcv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'SaveAsignacionUsuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@asignacion',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@asignacion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5fraCwFD7tt5gUcv',
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
    'generated::2QlfnJp9WE3MjK99' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalActualizacionPass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@modalPass',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@modalPass',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2QlfnJp9WE3MjK99',
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
    'generated::6vuHXti5ZZbLUi8X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreUsuarioPass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@storePass',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@storePass',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6vuHXti5ZZbLUi8X',
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
    'generated::7lHOfrUJ4Tyj5NgI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreControlLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@store',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7lHOfrUJ4Tyj5NgI',
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
    'generated::GUTGiMaETwPs8KZX' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusControlLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@status',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GUTGiMaETwPs8KZX',
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
    'generated::V9xDzHnxxMOBVQC9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyControlLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@destroy',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::V9xDzHnxxMOBVQC9',
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
    'generated::F6k0SNIhXXIdtlhd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditControlLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@edit',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::F6k0SNIhXXIdtlhd',
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
    'generated::LAnOpAI8fd1omrWF' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateControlLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@update',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LAnOpAI8fd1omrWF',
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
    'generated::JGikZaMLvxfmTvyW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowControlLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@show',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JGikZaMLvxfmTvyW',
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
    'generated::mzZFXVjzXOf7e7KV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalCopiarLote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@sectionCopiarLote',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@sectionCopiarLote',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mzZFXVjzXOf7e7KV',
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
    'generated::faW0PT6rMbDWdUZX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreCopiarLote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@storeCopiarLote',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@storeCopiarLote',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::faW0PT6rMbDWdUZX',
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
    'generated::D4jVDoyKcLVtX6Uy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@store',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D4jVDoyKcLVtX6Uy',
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
    'generated::8WRH9za1o515vtdU' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'ChangeStatusAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@status',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8WRH9za1o515vtdU',
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
    'generated::87Z3meGg7EXQKb4C' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@destroy',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::87Z3meGg7EXQKb4C',
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
    'generated::SBgH2r8a2TJrIL9q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@edit',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SBgH2r8a2TJrIL9q',
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
    'generated::F2Dzg2VUik3Tacpf' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@update',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::F2Dzg2VUik3Tacpf',
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
    'generated::DNbmKHriuO0yOv8q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@show',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DNbmKHriuO0yOv8q',
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
    'generated::ZKM7YXL8vnoJBtmF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreError',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\APSController@store',
        'controller' => 'App\\Http\\Controllers\\APSController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZKM7YXL8vnoJBtmF',
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
    'generated::F8qR8QPfEfw9i02V' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyError',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\APSController@destroy',
        'controller' => 'App\\Http\\Controllers\\APSController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::F8qR8QPfEfw9i02V',
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
    'generated::6BAwrdvfUZ0mgdaN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'AsignarPredeterminadoError',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\APSController@asignarPredeterminado',
        'controller' => 'App\\Http\\Controllers\\APSController@asignarPredeterminado',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6BAwrdvfUZ0mgdaN',
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
    'generated::Zm0Pset8j8blTiMQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditError',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\APSController@edit',
        'controller' => 'App\\Http\\Controllers\\APSController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Zm0Pset8j8blTiMQ',
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
    'generated::ANwrf1uYCxzFMWyt' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateError',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\APSController@update',
        'controller' => 'App\\Http\\Controllers\\APSController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ANwrf1uYCxzFMWyt',
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
    'generated::5EMRzbbPa9GZfbxd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowError',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\APSController@show',
        'controller' => 'App\\Http\\Controllers\\APSController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5EMRzbbPa9GZfbxd',
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
    'generated::AJXU0i9M7atzIe7Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'StoreDIANA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\DIANAController@store',
        'controller' => 'App\\Http\\Controllers\\DIANAController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AJXU0i9M7atzIe7Y',
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
    'generated::WN4QAfyyEtpqUan9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroyDIANA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\DIANAController@destroy',
        'controller' => 'App\\Http\\Controllers\\DIANAController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WN4QAfyyEtpqUan9',
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
    'generated::jnbPfrORXWtWzv3n' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'AsignarPredeterminadoDIANA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\DIANAController@asignarPredeterminado',
        'controller' => 'App\\Http\\Controllers\\DIANAController@asignarPredeterminado',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jnbPfrORXWtWzv3n',
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
    'generated::uQbNlcFErIhmnzrZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeEditDIANA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\DIANAController@edit',
        'controller' => 'App\\Http\\Controllers\\DIANAController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uQbNlcFErIhmnzrZ',
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
    'generated::sihc3pePJKYCJSBx' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'UpdateDIANA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\DIANAController@update',
        'controller' => 'App\\Http\\Controllers\\DIANAController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sihc3pePJKYCJSBx',
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
    'generated::wOU8ClCOwwIYoYNe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowDIANA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\DIANAController@show',
        'controller' => 'App\\Http\\Controllers\\DIANAController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wOU8ClCOwwIYoYNe',
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
    'generated::lo4B4UtuiWmZ9YjX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionAuditoria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\AuditoriaController@section',
        'controller' => 'App\\Http\\Controllers\\AuditoriaController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lo4B4UtuiWmZ9YjX',
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
    'generated::Ou78kQ2ra7wlSTde' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexAuditoria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\AuditoriaController@index',
        'controller' => 'App\\Http\\Controllers\\AuditoriaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Ou78kQ2ra7wlSTde',
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
    'generated::lV9Mc7Z91h5EAOBb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ExportarPDFGraficaAuditoria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\PDFAuditoriaController@createPDF',
        'controller' => 'App\\Http\\Controllers\\PDFAuditoriaController@createPDF',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lV9Mc7Z91h5EAOBb',
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
    'generated::9bW3IsNBUwzNBI5P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ExportarGraficaAuditoria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'coordinador',
        ),
        'uses' => 'App\\Http\\Controllers\\PDFAuditoriaController@index',
        'controller' => 'App\\Http\\Controllers\\PDFAuditoriaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9bW3IsNBUwzNBI5P',
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
    'generated::LRBNTbjwGPG70d7v' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guardarResultados',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'operador',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultadoController@actualizarResultados',
        'controller' => 'App\\Http\\Controllers\\ResultadoController@actualizarResultados',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LRBNTbjwGPG70d7v',
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
    'generated::wL1MVgnmNakvk954' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroySerie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'operador',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultadoController@destroy',
        'controller' => 'App\\Http\\Controllers\\ResultadoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wL1MVgnmNakvk954',
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
    'generated::Rzs6q5113sT1QVoR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guardarResultadosCualitativo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'operador',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultadoCualitativoController@actualizarResultados',
        'controller' => 'App\\Http\\Controllers\\ResultadoCualitativoController@actualizarResultados',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Rzs6q5113sT1QVoR',
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
    'generated::mkyl2oPigvIhxQiC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guardarResultadoDefectoCualitativo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'operador',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultadoCualitativoController@actualizarDefectoResultados',
        'controller' => 'App\\Http\\Controllers\\ResultadoCualitativoController@actualizarDefectoResultados',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mkyl2oPigvIhxQiC',
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
    'generated::aLPJq2ZByBv86igJ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DestroySerieCualitativa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'operador',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultadoCualitativoController@destroy',
        'controller' => 'App\\Http\\Controllers\\ResultadoCualitativoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aLPJq2ZByBv86igJ',
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
    'generated::2S8kqF4LczKqsiWw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionBienvenido',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\BienvenidoController@section',
        'controller' => 'App\\Http\\Controllers\\BienvenidoController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2S8kqF4LczKqsiWw',
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
    'generated::WhrcOnlXrvWAcXwL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionResultado',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultadoController@section',
        'controller' => 'App\\Http\\Controllers\\ResultadoController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WhrcOnlXrvWAcXwL',
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
    'generated::eO4xp3QXhYrObeH2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionResultadoCualitativo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultadoCualitativoController@section',
        'controller' => 'App\\Http\\Controllers\\ResultadoCualitativoController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eO4xp3QXhYrObeH2',
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
    'microbiologia.medios' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionResultadoMicrobiologia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultadoMicrobiologiaController@section',
        'controller' => 'App\\Http\\Controllers\\ResultadoMicrobiologiaController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'microbiologia.medios',
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
    'microbiologia.tinciones' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionResultadoTinciones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultadoTincionesController@section',
        'controller' => 'App\\Http\\Controllers\\ResultadoTincionesController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'microbiologia.tinciones',
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
    'microbiologia.pruebas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionResultadoPruebas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultadoPruebasController@section',
        'controller' => 'App\\Http\\Controllers\\ResultadoPruebasController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'microbiologia.pruebas',
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
    'generated::XA1aBSRBTaqN7SDd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionGraficaIntegrada',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\GraficaIntegradaController@section',
        'controller' => 'App\\Http\\Controllers\\GraficaIntegradaController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XA1aBSRBTaqN7SDd',
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
    'generated::49yEPxJb3cjX4fuR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionSigmometria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\SigmometriaController@section',
        'controller' => 'App\\Http\\Controllers\\SigmometriaController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::49yEPxJb3cjX4fuR',
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
    'generated::IKNyM8ntu9ziNtbb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetValoresSigmometria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\SigmometriaController@getValoresByControlLaboratorio',
        'controller' => 'App\\Http\\Controllers\\SigmometriaController@getValoresByControlLaboratorio',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IKNyM8ntu9ziNtbb',
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
    'generated::jCYH86SMo1RQUs7g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetTreeConfig',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\TreeController@getTreeConfig',
        'controller' => 'App\\Http\\Controllers\\TreeController@getTreeConfig',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jCYH86SMo1RQUs7g',
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
    'generated::wdyj9xRoo3yFVooK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetTopLotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\LoteController@GetTopLotes',
        'controller' => 'App\\Http\\Controllers\\LoteController@GetTopLotes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wdyj9xRoo3yFVooK',
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
    'generated::wXcPL7ONyHDvgm5e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetTopAnalitosByControlLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoController@GetTopByControlLaboratorio',
        'controller' => 'App\\Http\\Controllers\\AnalitoController@GetTopByControlLaboratorio',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wXcPL7ONyHDvgm5e',
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
    'generated::kUEv7tWcKyj434VO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetTopAnalizadores',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalizadorController@GetTopAnalizadores',
        'controller' => 'App\\Http\\Controllers\\AnalizadorController@GetTopAnalizadores',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kUEv7tWcKyj434VO',
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
    'generated::ztfSUNxpNsjnXkPs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetTopReactivos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ReactivoController@GetTopReactivos',
        'controller' => 'App\\Http\\Controllers\\ReactivoController@GetTopReactivos',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ztfSUNxpNsjnXkPs',
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
    'generated::fp84dU1x0POevqC1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetTopLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratorioController@getTopLaboratory',
        'controller' => 'App\\Http\\Controllers\\LaboratorioController@getTopLaboratory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fp84dU1x0POevqC1',
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
    'generated::OA0F9QFSSYPE2Dnw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetTopAnalitoLab',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@getTopAnalitoLab',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@getTopAnalitoLab',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OA0F9QFSSYPE2Dnw',
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
    'generated::IDE5lGztNwW2BE6z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetMedioCultivo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\MedioController@GetMedioCultivo',
        'controller' => 'App\\Http\\Controllers\\MedioController@GetMedioCultivo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IDE5lGztNwW2BE6z',
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
    'generated::089Kn7UcgTXevzZe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetTincion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\TincionController@GetTincion',
        'controller' => 'App\\Http\\Controllers\\TincionController@GetTincion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::089Kn7UcgTXevzZe',
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
    'generated::h95jWJlTPR2eIoBb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetPrueba',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\PruebaController@GetPrueba',
        'controller' => 'App\\Http\\Controllers\\PruebaController@GetPrueba',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::h95jWJlTPR2eIoBb',
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
    'generated::LF6Xb2HmwkOB5szm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetCepa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@GetCepa',
        'controller' => 'App\\Http\\Controllers\\CepaController@GetCepa',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LF6Xb2HmwkOB5szm',
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
    'generated::TSkdScRuAW5QF79N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListTemperatura',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\TemperaturaController@listHTML',
        'controller' => 'App\\Http\\Controllers\\TemperaturaController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TSkdScRuAW5QF79N',
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
    'generated::p1ILOHGAw6ktj2AO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListUnidad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadController@listHTML',
        'controller' => 'App\\Http\\Controllers\\UnidadController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::p1ILOHGAw6ktj2AO',
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
    'generated::91lZE02ufKr3nAZP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeListMetodologia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\MetodologiaController@listHTML',
        'controller' => 'App\\Http\\Controllers\\MetodologiaController@listHTML',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::91lZE02ufKr3nAZP',
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
    'generated::NhQqzKzQieEqwj0W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalExportarGraficasIntegradas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@sectionExportarGraficasIntegradas',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@sectionExportarGraficasIntegradas',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NhQqzKzQieEqwj0W',
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
    'generated::QsB9ySM1thOQwxAy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalExportarGraficasCualitativo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@sectionExportarGraficasCualitativo',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@sectionExportarGraficasCualitativo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QsB9ySM1thOQwxAy',
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
    'generated::PPTVu1k1L8qABQXw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'exportarGraficaIntegrada',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@graficacionLote',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@graficacionLote',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PPTVu1k1L8qABQXw',
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
    'generated::VEpaK3wgJczW11V9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'exportarGraficaCualitativo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@graficacionLoteCualitativo',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@graficacionLoteCualitativo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VEpaK3wgJczW11V9',
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
    'generated::lhVVa2UWypX8PqGX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeReportGraficasIntegradas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\PDFGraficoIntegradoController@seeReport',
        'controller' => 'App\\Http\\Controllers\\PDFGraficoIntegradoController@seeReport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lhVVa2UWypX8PqGX',
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
    'generated::lhY7GOagQFLV8aWq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeReportGraficasCualitativo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\PDFGraficoIntegradoController@seeReportCualitativo',
        'controller' => 'App\\Http\\Controllers\\PDFGraficoIntegradoController@seeReportCualitativo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lhY7GOagQFLV8aWq',
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
    'generated::dwj0eiGuEqjnyFJ0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeReportGraficaSigmometria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\PDFGraficoSigmometriaController@seeReport',
        'controller' => 'App\\Http\\Controllers\\PDFGraficoSigmometriaController@seeReport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dwj0eiGuEqjnyFJ0',
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
    'generated::9LRJCKPCuMQ5QlyU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'exportarGraficaSigmometria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@graficacionLoteSigmometria',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@graficacionLoteSigmometria',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9LRJCKPCuMQ5QlyU',
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
    'generated::020JzL9TQQ0LgaCQ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DeleteDocument',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\PDFGraficoIntegradoController@eliminarInforme',
        'controller' => 'App\\Http\\Controllers\\PDFGraficoIntegradoController@eliminarInforme',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::020JzL9TQQ0LgaCQ',
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
    'generated::Kwk0Wd37h25e9iUp' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'DeleteDocumentSigmometria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\PDFGraficoSigmometriaController@eliminarInforme',
        'controller' => 'App\\Http\\Controllers\\PDFGraficoSigmometriaController@eliminarInforme',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Kwk0Wd37h25e9iUp',
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
    'reporteFinalGraficasIntegradas' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reporteFinalGraficasIntegradas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\PDFGraficoIntegradoController@generarInformeFinal',
        'controller' => 'App\\Http\\Controllers\\PDFGraficoIntegradoController@generarInformeFinal',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reporteFinalGraficasIntegradas',
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
    'reporteFinalGraficasCualitativo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reporteFinalGraficasCualitativo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\PDFGraficoIntegradoController@generarInformeFinalCualitativo',
        'controller' => 'App\\Http\\Controllers\\PDFGraficoIntegradoController@generarInformeFinalCualitativo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reporteFinalGraficasCualitativo',
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
    'generated::kmENPKHd9CGI7SVo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reporteFinalGraficaSigmometria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\PDFGraficoSigmometriaController@generarInformeFinal',
        'controller' => 'App\\Http\\Controllers\\PDFGraficoSigmometriaController@generarInformeFinal',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kmENPKHd9CGI7SVo',
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
    'generated::iufMEqfdLJN2wtFv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalControlLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@section',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iufMEqfdLJN2wtFv',
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
    'generated::0oNnCw4N3vaFRoXT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexControlLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ControlLaboratorioController@index',
        'controller' => 'App\\Http\\Controllers\\ControlLaboratorioController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0oNnCw4N3vaFRoXT',
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
    'generated::YqsP7abvbanKN4ds' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@section',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YqsP7abvbanKN4ds',
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
    'generated::XXajlTCMkUFRjTwn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@index',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XXajlTCMkUFRjTwn',
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
    'generated::4ldBuvBmRcWfSxCa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalDIANA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\DIANAController@section',
        'controller' => 'App\\Http\\Controllers\\DIANAController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4ldBuvBmRcWfSxCa',
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
    'generated::9ufOiKNFsH3OrGDE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexDIANA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\DIANAController@index',
        'controller' => 'App\\Http\\Controllers\\DIANAController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9ufOiKNFsH3OrGDE',
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
    'generated::ymM1LEgO93uDC0nX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetDinamicModalError',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\APSController@section',
        'controller' => 'App\\Http\\Controllers\\APSController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ymM1LEgO93uDC0nX',
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
    'generated::26FiKZxaxDy7UWrc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeIndexError',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\APSController@index',
        'controller' => 'App\\Http\\Controllers\\APSController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::26FiKZxaxDy7UWrc',
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
    'generated::JCKL0tPcU5E5Vhc5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowInfoAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@getInformacion',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@getInformacion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JCKL0tPcU5E5Vhc5',
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
    'generated::5mxTls9NcKleH54S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowTitleResultadosAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@getTitleResultados',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@getTitleResultados',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5mxTls9NcKleH54S',
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
    'generated::HKJVwZKeJ8mjFyR2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowTitleResultadosAnalitoLaboratorioCualitativo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioCualitativoController@getTitleResultados',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioCualitativoController@getTitleResultados',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HKJVwZKeJ8mjFyR2',
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
    'generated::bFAzMAxhpVNUkiCD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowResultadosAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@getResultados',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@getResultados',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bFAzMAxhpVNUkiCD',
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
    'generated::v7gq9ZAmLuIklWDI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowResultadosAnalitoLaboratorioCualitativo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioCualitativoController@getResultados',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioCualitativoController@getResultados',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::v7gq9ZAmLuIklWDI',
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
    'generated::yVH4YkG8TGoKmfKI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowValoresEstadisticosAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@getValoresEstadisticos',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@getValoresEstadisticos',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yVH4YkG8TGoKmfKI',
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
    'generated::cIcZc9QxB02HqW9h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowValoresEstadisticosAnalitoLaboratorioCualitativo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioCualitativoController@getValoresEstadisticos',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioCualitativoController@getValoresEstadisticos',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cIcZc9QxB02HqW9h',
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
    'generated::cjztgM2SYfZlrFcK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'GetValoresGeneralesAnalitoLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@getValoresGeneralesAnalito',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioController@getValoresGeneralesAnalito',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cjztgM2SYfZlrFcK',
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
    'GenerarPdfCualitativo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'GenerarPdfCualitativo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\AnalitoLaboratorioCualitativoController@generarPdfCualitativo',
        'controller' => 'App\\Http\\Controllers\\AnalitoLaboratorioCualitativoController@generarPdfCualitativo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'GenerarPdfCualitativo',
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
    'generated::jdiULB33tbm3jcTN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'SeeSectionComparativaInterlaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\ComparativaInterlaboratorioController@section',
        'controller' => 'App\\Http\\Controllers\\ComparativaInterlaboratorioController@section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jdiULB33tbm3jcTN',
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
    'generated::iTd4f128ZCLcwZfU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ComparativaInterlaboratorioGraficas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\comparativaInterlaboratorio\\GraficasInterlaboratorioController@__invoke',
        'controller' => 'App\\Http\\Controllers\\comparativaInterlaboratorio\\GraficasInterlaboratorioController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iTd4f128ZCLcwZfU',
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
    'generated::Iefh8c8jSTsmM4KN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ComparativaInterlaboratorioMesurandos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\comparativaInterlaboratorio\\MesurandosInterlaboratorioController@__invoke',
        'controller' => 'App\\Http\\Controllers\\comparativaInterlaboratorio\\MesurandosInterlaboratorioController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Iefh8c8jSTsmM4KN',
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
    'generated::a0iNubzPl2v0Rwja' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ComparativaInterlaboratorioMetricasSigma',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\comparativaInterlaboratorio\\MetricasSigmaInterlaboratorioController@__invoke',
        'controller' => 'App\\Http\\Controllers\\comparativaInterlaboratorio\\MetricasSigmaInterlaboratorioController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::a0iNubzPl2v0Rwja',
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
    'generated::LMuHDXCHmZ8xTJRL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ComparativaInterlaboratorioPercentiles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\comparativaInterlaboratorio\\PercentilesInterlaboratorioController@__invoke',
        'controller' => 'App\\Http\\Controllers\\comparativaInterlaboratorio\\PercentilesInterlaboratorioController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LMuHDXCHmZ8xTJRL',
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
    'generated::KsLXQQQ6aoVuCkhl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ComparativaInterlaboratorioErrorAnalitico',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\comparativaInterlaboratorio\\ErrorAnaliticoInterlaboratorioController@__invoke',
        'controller' => 'App\\Http\\Controllers\\comparativaInterlaboratorio\\ErrorAnaliticoInterlaboratorioController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KsLXQQQ6aoVuCkhl',
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
    'generated::newL04jKJmPmWcuv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ComparativaInterlaboratorioReportes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\comparativaInterlaboratorio\\ReportesInterlaboratorioController@__invoke',
        'controller' => 'App\\Http\\Controllers\\comparativaInterlaboratorio\\ReportesInterlaboratorioController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::newL04jKJmPmWcuv',
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
    'generated::NMMUW6YCjxkulCdu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ShowInfoCepaLaboratorio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\CepaController@getInformacion',
        'controller' => 'App\\Http\\Controllers\\CepaController@getInformacion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NMMUW6YCjxkulCdu',
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
    'generated::axU28DwKIhMKIjTc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'imprimir',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:331:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:112:"function () {
    $pdf = \\PDF::loadView(\'comparativo-interlaboratorio/graficas\');
    return $pdf->stream();
  }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005bd0000000000000000";}";s:4:"hash";s:44:"D+5phaAihf0ZlrwcbbWl+qzTDpHigYMc8N/PhMYvikY=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::axU28DwKIhMKIjTc',
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
    'downloadTree' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'downloadTree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\TreeController@downloadTree',
        'controller' => 'App\\Http\\Controllers\\TreeController@downloadTree',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'downloadTree',
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
    'downloadCommit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadCommit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lectura',
        ),
        'uses' => 'App\\Http\\Controllers\\TreeController@downloadCommit',
        'controller' => 'App\\Http\\Controllers\\TreeController@downloadCommit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'downloadCommit',
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
    'generated::1AM2tW6YXcC1iVNu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1AM2tW6YXcC1iVNu',
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
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
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
    'logout.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout.get',
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
