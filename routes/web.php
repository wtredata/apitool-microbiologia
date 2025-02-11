<?php


// Basicos de autenticacion

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();


// Permisos para Administradores
Route::middleware("admin")->group(function () {

  // Panel de control
  Route::get("/SeeSectionConfiguracion", "ConfiguracionController@section");

  // Institución
  Route::get("/SeeSectionInstitucion", "InstitucionController@section");
  Route::get("/SeeIndexInstitucion", "InstitucionController@index");
  Route::get("/SeeEditInstitucion", "InstitucionController@edit");
  Route::get("/SeeListInstitucion", "InstitucionController@listHTML");
  Route::get("/ShowInstitucion", "InstitucionController@show");
  Route::post("/StoreInstitucion", "InstitucionController@store");
  Route::put("/ChangeStatusInstitucion", "InstitucionController@status");
  Route::put("/UpdateInstitucion", "InstitucionController@update");
  Route::delete("/DestroyInstitucion", "InstitucionController@destroy");

  // Medio
  Route::get("/SeeSectionMedio", "MedioController@section");
  Route::get("/SeeIndexMedio", "MedioController@index");
  Route::get("/SeeIndexMedioCultivoLaboratorio", "MedioController@index");
  Route::get("/SeeEditMedio/{id}", "MedioController@edit")->name('formEdit.medio');
  Route::get("/ShowMedio", "MedioController@show");
  Route::get("/SeeListMedio", "MedioController@listHTML");
  Route::post("/storeLoteMedioLab", "MedioController@asignarloteLaboratorio")->name('store.medio.lote.lab');
  Route::post("/StoreMedio", "MedioController@store");
  Route::put("/ChangeStatusMedio", "MedioController@status");
  Route::put("/UpdateMedio/{id}", "MedioController@update")->name('update.medio');
  Route::delete("/DestroyMedio", "MedioController@destroy");
  Route::get("/GetDinamicModalControlConfiguracionMedios", "MedioController@sectionAsignacion");
  Route::get("/GetDinamicModalControlConfiguracionMediosCepa", "MedioController@sectionAsignacionCepa");
  Route::post("/StoreMedioCultivoLaboratorio", "MedioController@cultivo");
  Route::post("/StoreMedioCultivoLaboratorioCepa", "MedioController@cepa");

  // Cepa
  Route::get("/SeeSectionCepa", "CepaController@section");
  Route::get("/SeeIndexCepa", "CepaController@index");
  Route::get("/SeeEditCepa/{id}", "CepaController@edit")->name('formEdit.cepa');
  Route::get("/ShowCepa", "CepaController@show");
  Route::get("/SeeListCepa", "CepaController@listHTML");
  Route::post("/StoreCepa", "CepaController@store");
  Route::put("/ChangeStatusCepa", "CepaController@status");
  Route::put("/UpdateCepa/{id}", "CepaController@update")->name('update.cepa');
  Route::delete("/DestroyCepa", "CepaController@destroy");
  Route::get("/GetDinamicModalAsignacionCepa", "CepaController@sectionAsignacion");
  Route::post("/asignarLoteCepaMedio", "CepaController@asignarLoteCepaALoteMedio")->name('asignar.loteCepa.loteMedio');
  Route::post("/asignarLoteCepaTincion", "CepaController@asignarLoteCepaALoteTincion")->name('asignar.loteCepa.loteTincion');
  Route::post("/asignarLoteCepaPruebaSensi", "CepaController@asignarLoteCepaALotePruebaSensi")->name('asignar.loteCepa.lotePruebaSensi');

  Route::post("/registro/cepa/medios", "CepaController@controlCepaMedio")->name('registro.cepa.medio');
  Route::post("/registro/cepa/tinciones", "CepaController@controlCepaTincion")->name('registro.cepa.tincion');
  Route::post("/registro/cepa/pruebaSensi", "CepaController@controlCepaPrueba")->name('registro.cepa.prueba');
  
  Route::put("/update/cepa/medios/{id}", "CepaController@updateControlCepaMedio")->name('update.cepa.control');
  Route::put("/update/cepa/tinciones/{id}", "CepaController@updateControlCepaTincion")->name('update.cepa.control.tincion');
  Route::put("/update/cepa/pruebas/{id}", "CepaController@updateControlCepaPrueba")->name('update.cepa.control.prueba');

  Route::delete("/destroy/cepa/medios/{id}", "CepaController@destroyControlCepaMedio")->name('destroy.control.cepa.medio');
  Route::delete("/destroy/cepa/tinciones/{id}", "CepaController@destroyControlCepaTincion")->name('destroy.control.cepa.tincion');
  Route::delete("/destroy/cepa/pruebas/{id}", "CepaController@destroyControlCepaPrueba")->name('destroy.control.cepa.prueba');




  // Tinciones
  Route::get("/SeeSectionTincion", "TincionController@section");
  Route::get("/SeeIndexTincion", "TincionController@index");
  Route::get("/SeeIndexTincionLaboratorio", "TincionController@index");
  Route::get("/SeeEditTincion/{id}", "TincionController@edit")->name('formEdit.tincion');
  Route::get("/ShowTincion", "TincionController@show");
  Route::get("/SeeListTincion", "TincionController@listHTML");
  Route::post("/storeLoteTincionLab", "TincionController@asignarloteLaboratorio")->name('store.tincion.lote.lab');
  Route::post("/StoreTincion", "TincionController@store");
  Route::put("/ChangeStatusTincion", "TincionController@status");
  Route::put("/UpdateTincion/{id}", "TincionController@update")->name('update.tincion');
  Route::delete("/DestroyTincion", "TincionController@destroy");
  Route::get("/GetDinamicModalControlConfiguracionTinciones", "TincionController@sectionAsignacion");
  Route::get("/GetDinamicModalControlConfiguracionTincionesCepa", "TincionController@sectionAsignacionCepa");
  Route::post("/StoreTincionLaboratorio", "TincionController@tincioncultivo");
  Route::post("/StoreTincionLaboratorioCepa", "TincionController@tincioncepa");

  //compra lotes
  Route::post("/StoreLote/{itemId}/{section}", "CompraLoteController@store")->name('store.compra.lote');
  Route::put("/updateLote/{id}/{section}", "CompraLoteController@update")->name('update.compra.lote');
  Route::delete("/deleteLote/{id}/{section}", "CompraLoteController@destroy")->name('destroy.compra.lote');

  //Detalle modulo microbiologia
  Route::get("/microbiologia/detalleMedio/{id}/lab/{labId}", "MedioController@detalles")->name('microbiologia.medio.detalles');
  Route::get("/microbiologia/detalleTincion/{id}", "TincionController@detalles")->name('microbiologia.tincion.detalles');
  Route::get("/microbiologia/detallePruebaSensi/{id}", "PruebaController@detalles")->name('microbiologia.prueba.detalles');

  //Descarga de informes de controles de cepa
  Route::get("/microbiologia/Informe/ControlCepa/{loteId}/{section}","PDFController@generarPDF")->name('generar.informe.pdf');


  // Pruebas de sensibilidad
  Route::get("/SeeSectionPrueba", "PruebaController@section");
  Route::get("/SeeIndexPrueba", "PruebaController@index");
  Route::get("/SeeIndexPruebaLaboratorio", "PruebaController@index");
  Route::get("/SeeEditPrueba/{id}", "PruebaController@edit")->name('formEdit.prueba');
  Route::get("/ShowPrueba", "PruebaController@show");
  Route::get("/SeeListPrueba", "PruebaController@listHTML");
  Route::post("/StorePrueba", "PruebaController@store");
  Route::put("/ChangeStatusPrueba", "PruebaController@status");
  Route::put("/UpdatePrueba/{id}", "PruebaController@update")->name('update.prueba');
  Route::delete("/DestroyPrueba", "PruebaController@destroy");
  Route::get("/GetDinamicModalControlConfiguracionPruebas", "PruebaController@sectionAsignacion");
  Route::get("/GetDinamicModalControlConfiguracionPruebasCepa", "PruebaController@sectionAsignacionCepa");
  Route::post("/StorePruebaLaboratorio", "TincionController@cultivo");
  Route::post("/StorePruebaLaboratorio", "TincionController@cepa");


  // País
  Route::get("/SeeSectionPais", "PaisController@section");
  Route::get("/SeeIndexPais", "PaisController@index");
  Route::get("/SeeEditPais", "PaisController@edit");
  Route::get("/ShowPais", "PaisController@show");
  Route::get("/SeeListPais", "PaisController@listHTML");
  Route::post("/StorePais", "PaisController@store");
  Route::put("/ChangeStatusPais", "PaisController@status");
  Route::put("/UpdatePais", "PaisController@update");
  Route::delete("/DestroyPais", "PaisController@destroy");


  // Proveedor
  Route::get("/SeeSectionProveedor", "ProveedorController@section");
  Route::get("/SeeIndexProveedor", "ProveedorController@index");
  Route::get("/SeeEditProveedor", "ProveedorController@edit");
  Route::get("/SeeListProveedor", "ProveedorController@listHTML");
  Route::get("/ShowProveedor", "ProveedorController@show");
  Route::post("/StoreProveedor", "ProveedorController@store");
  Route::put("/ChangeStatusProveedor", "ProveedorController@status");
  Route::put("/UpdateProveedor", "ProveedorController@update");
  Route::delete("/DestroyProveedor", "ProveedorController@destroy");


  // Analizador
  Route::get("/SeeSectionAnalizador", "AnalizadorController@section");
  Route::get("/SeeIndexAnalizador", "AnalizadorController@index");
  Route::get("/SeeEditAnalizador", "AnalizadorController@edit");
  Route::get("/SeeListAnalizador", "AnalizadorController@listHTML");
  Route::get("/ShowAnalizador", "AnalizadorController@show");
  Route::post("/StoreAnalizador", "AnalizadorController@store");
  Route::put("/ChangeStatusAnalizador", "AnalizadorController@status");
  Route::put("/UpdateAnalizador", "AnalizadorController@update");
  Route::delete("/DestroyAnalizador", "AnalizadorController@destroy");


  // Metodologia
  Route::get("/SeeSectionMetodologia", "MetodologiaController@section");
  Route::get("/SeeIndexMetodologia", "MetodologiaController@index");
  Route::get("/SeeEditMetodologia", "MetodologiaController@edit");
  Route::get("/ShowMetodologia", "MetodologiaController@show");
  Route::post("/StoreMetodologia", "MetodologiaController@store");
  Route::put("/ChangeStatusMetodologia", "MetodologiaController@status");
  Route::put("/UpdateMetodologia", "MetodologiaController@update");
  Route::delete("/DestroyMetodologia", "MetodologiaController@destroy");

  // Unidad
  Route::get("/SeeSectionUnidad", "UnidadController@section");
  Route::get("/SeeIndexUnidad", "UnidadController@index");
  Route::get("/SeeEditUnidad", "UnidadController@edit");
  Route::get("/ShowUnidad", "UnidadController@show");
  Route::post("/StoreUnidad", "UnidadController@store");
  Route::put("/ChangeStatusUnidad", "UnidadController@status");
  Route::put("/UpdateUnidad", "UnidadController@update");
  Route::delete("/DestroyUnidad", "UnidadController@destroy");


  // Temperatura
  Route::get("/SeeSectionTemperatura", "TemperaturaController@section");
  Route::get("/SeeIndexTemperatura", "TemperaturaController@index");
  Route::get("/SeeEditTemperatura", "TemperaturaController@edit");
  Route::get("/ShowTemperatura", "TemperaturaController@show");
  Route::post("/StoreTemperatura", "TemperaturaController@store");
  Route::put("/ChangeStatusTemperatura", "TemperaturaController@status");
  Route::put("/UpdateTemperatura", "TemperaturaController@update");
  Route::delete("/DestroyTemperatura", "TemperaturaController@destroy");


  // Reactivo
  Route::get("/SeeSectionReactivo", "ReactivoController@section");
  Route::get("/SeeIndexReactivo", "ReactivoController@index");
  Route::get("/SeeEditReactivo", "ReactivoController@edit");
  Route::get("/SeeListReactivo", "ReactivoController@listHTML");
  Route::get("/ShowReactivo", "ReactivoController@show");
  Route::post("/StoreReactivo", "ReactivoController@store");
  Route::put("/ChangeStatusReactivo", "ReactivoController@status");
  Route::put("/UpdateReactivo", "ReactivoController@update");
  Route::delete("/DestroyReactivo", "ReactivoController@destroy");


  // Matriz
  Route::get("/SeeSectionMatriz", "MatrizController@section");
  Route::get("/SeeIndexMatriz", "MatrizController@index");
  Route::get("/SeeEditMatriz", "MatrizController@edit");
  Route::get("/SeeListMatriz", "MatrizController@listHTML");
  Route::get("/ShowMatriz", "MatrizController@show");
  Route::post("/StoreMatriz", "MatrizController@store");
  Route::put("/ChangeStatusMatriz", "MatrizController@status");
  Route::put("/UpdateMatriz", "MatrizController@update");
  Route::delete("/DestroyMatriz", "MatrizController@destroy");


  // Area de laboratorio
  /**Route::get("/SeeSectionAreaLaboratorio", "AreaLaboratorioController@section");
  Route::get("/SeeIndexAreaLaboratorio", "App\Http\Controllers\AreaLaboratorioController@index");
  Route::get("/SeeEditAreaLaboratorio", "App\Http\Controllers\AreaLaboratorioController@edit");
  Route::get("/SeeListAreaLaboratorio", "App\Http\Controllers\AreaLaboratorioController@listHTML");
  Route::get("/ShowAreaLaboratorio", "App\Http\Controllers\AreaLaboratorioController@show");
  Route::post("/StoreAreaLaboratorio", "App\Http\Controllers\AreaLaboratorioController@store");
  Route::put("/ChangeStatusAreaLaboratorio", "App\Http\Controllers\AreaLaboratorioController@status");
  Route::put("/UpdateAreaLaboratorio", "App\Http\Controllers\AreaLaboratorioController@update");
  Route::delete("/DestroyAreaLaboratorio", "App\Http\Controllers\AreaLaboratorioController@destroy"); **/


  // Fuente de APS
  Route::get("/SeeSectionFuenteETMP", "FuenteETMPController@section");
  Route::get("/SeeIndexFuenteETMP", "FuenteETMPController@index");
  Route::get("/SeeEditFuenteETMP", "FuenteETMPController@edit");
  Route::get("/SeeListFuenteETMP", "FuenteETMPController@listHTML");
  Route::get("/ShowFuenteETMP", "FuenteETMPController@show");
  Route::post("/StoreFuenteETMP", "FuenteETMPController@store");
  Route::put("/ChangeStatusFuenteETMP", "FuenteETMPController@status");
  Route::put("/UpdateFuenteETMP", "FuenteETMPController@update");
  Route::delete("/DestroyFuenteETMP", "FuenteETMPController@destroy");


  // Area
/**
  Route::get("/SeeSectionArea", "AreaController@section");
  Route::get("/SeeIndexArea", "AreaController@index");
  Route::get("/SeeEditArea", "AreaController@edit");
  Route::get("/SeeListArea", "AreaController@listHTML");
  Route::get("/ShowArea", "AreaController@show");
  Route::post("/StoreArea", "AreaController@store");
  Route::put("/ChangeStatusArea", "AreaController@status");
  Route::put("/UpdateArea", "AreaController@update");
  Route::delete("/DestroyArea", "AreaController@destroy"); 
 */

  // Ciudad
  Route::get("/SeeSectionCiudad", "CiudadController@section");
  Route::get("/SeeIndexCiudad", "CiudadController@index");
  Route::get("/SeeEditCiudad", "CiudadController@edit");
  Route::get("/ShowCiudad", "CiudadController@show");
  Route::get("/SeeListCiudad", "CiudadController@listHTML");
  Route::post("/StoreCiudad", "CiudadController@store");
  Route::put("/ChangeStatusCiudad", "CiudadController@status");
  Route::put("/UpdateCiudad", "CiudadController@update");
  Route::delete("/DestroyCiudad", "CiudadController@destroy");


  // Control
  Route::get("/SeeSectionControl", "ControlController@section");
  Route::get("/SeeIndexControl", "ControlController@index");
  Route::get("/SeeEditControl", "ControlController@edit");
  Route::get("/ShowControl", "ControlController@show");
  Route::get("/SeeListControl", "ControlController@listHTML");
  Route::post("/StoreControl", "ControlController@store");
  Route::put("/ChangeStatusControl", "ControlController@status");
  Route::put("/UpdateControl", "ControlController@update");
  Route::delete("/DestroyControl", "ControlController@destroy");


  // Lote
  Route::get("/SeeSectionLote", "LoteController@section");
  Route::get("/SeeIndexLote", "LoteController@index");
  Route::get("/SeeEditLote", "LoteController@edit");
  Route::get("/SeeListLote", "LoteController@listHTML");
  Route::get("/ShowLote", "LoteController@show");
  Route::post("/StoreLote", "LoteController@store");
  Route::put("/ChangeStatusLote", "LoteController@status");
  Route::put("/UpdateLote", "LoteController@update");
  Route::delete("/DestroyLote", "LoteController@destroy");


  // Sede
  Route::get("/SeeSectionSede", "SedeController@section");
  Route::get("/SeeIndexSede", "SedeController@index");
  Route::get("/SeeEditSede", "SedeController@edit");
  Route::get("/SeeListSede", "SedeController@listHTML");
  Route::get("/ShowSede", "SedeController@show");
  Route::post("/StoreSede", "SedeController@store");
  Route::put("/ChangeStatusSede", "SedeController@status");
  Route::put("/UpdateSede", "SedeController@update");
  Route::delete("/DestroySede", "SedeController@destroy");


  // Laboratorio
  Route::get("/SeeSectionLaboratorio", "LaboratorioController@section");
  Route::get("/SeeIndexLaboratorio", "LaboratorioController@index");
  Route::get("/SeeEditLaboratorio", "LaboratorioController@edit");
  Route::get("/SeeListLaboratorio", "LaboratorioController@listHTML");
  Route::get("/ShowLaboratorio", "LaboratorioController@show");
  Route::post("/StoreLaboratorio", "LaboratorioController@store");
  Route::put("/ChangeStatusLaboratorio", "LaboratorioController@status");
  Route::put("/UpdateLaboratorio", "LaboratorioController@update");
  Route::delete("/DestroyLaboratorio", "LaboratorioController@destroy");

  // Variabilidad Biológica
  Route::get("/SeeSectionVariabilidadBiologica", "VariabilidadBiologicaController@section");
  Route::get("/SeeIndexVariabilidadBiologica", "VariabilidadBiologicaController@index");
  Route::get("/SeeEditVariabilidadBiologica", "VariabilidadBiologicaController@edit");
  Route::get("/SeeListVariabilidadBiologica", "VariabilidadBiologicaController@listHTML");
  Route::get("/ShowVariabilidadBiologica", "VariabilidadBiologicaController@show");
  Route::post("/StoreVariabilidadBiologica", "VariabilidadBiologicaController@store");
  Route::put("/ChangeStatusVariabilidadBiologica", "VariabilidadBiologicaController@status");
  Route::put("/UpdateVariabilidadBiologica", "VariabilidadBiologicaController@update");
  Route::delete("/DestroyVariabilidadBiologica", "VariabilidadBiologicaController@destroy");


  // Analito
  Route::get("/SeeListAnalito", "AnalitoController@listHTML");
  Route::get("/SeeSectionAnalito", "AnalitoController@section");
  Route::get("/SeeIndexAnalito", "AnalitoController@index");
  Route::get("/SeeEditAnalito", "AnalitoController@edit");
  Route::get("/ShowAnalito", "AnalitoController@show");
  Route::post("/StoreAnalito", "AnalitoController@store");
  Route::put("/ChangeStatusAnalito", "AnalitoController@status");
  Route::put("/UpdateAnalito", "AnalitoController@update");
  Route::delete("/DestroyAnalito", "AnalitoController@destroy");
  Route::get("/GetDinamicModalAsignacionAnalito", "AnalitoController@sectionAsignacion");
  Route::post("/SaveAsignacionAnalito", "AnalitoController@asignacion");


  // Usuario
  Route::get("/SeeSectionUsuario", "UsuarioController@section");
  Route::get("/SeeIndexUsuario", "UsuarioController@index");
  Route::get("/SeeEditUsuario", "UsuarioController@edit");
  Route::get("/SeeListUsuario", "UsuarioController@listHTML");
  Route::get("/ShowUsuario", "UsuarioController@show");
  Route::post("/StoreUsuario", "UsuarioController@store");
  Route::put("/ChangeStatusUsuario", "UsuarioController@status");
  Route::put("/UpdateUsuario", "UsuarioController@update");
  Route::delete("/DestroyUsuario", "UsuarioController@destroy");
  Route::get("/GetDinamicModalAsignacionUsuario", "UsuarioController@sectionAsignacion");
  Route::post("/SaveAsignacionUsuario", "UsuarioController@asignacion");
  Route::get("/GetDinamicModalActualizacionPass", "UsuarioController@modalPass");
  Route::post("/StoreUsuarioPass", "UsuarioController@storePass");
});


// Permisos para Administradores y coordinadores
Route::middleware("coordinador")->group(function () {

  // Gestion completa de controles de laboratorio
  Route::post("/StoreControlLaboratorio", "ControlLaboratorioController@store");
  Route::put("/ChangeStatusControlLaboratorio", "ControlLaboratorioController@status");
  Route::delete("/DestroyControlLaboratorio", "ControlLaboratorioController@destroy");
  Route::get("/SeeEditControlLaboratorio", "ControlLaboratorioController@edit");
  Route::put("/UpdateControlLaboratorio", "ControlLaboratorioController@update");
  Route::get("/ShowControlLaboratorio", "ControlLaboratorioController@show");

  // Copiado de lote
  Route::get("/GetDinamicModalCopiarLote", "ControlLaboratorioController@sectionCopiarLote");
  Route::post("/StoreCopiarLote", "ControlLaboratorioController@storeCopiarLote");


  // Gestion completa de analito de laboratorio
  Route::post("/StoreAnalitoLaboratorio", "AnalitoLaboratorioController@store");
  Route::put("/ChangeStatusAnalitoLaboratorio", "AnalitoLaboratorioController@status");
  Route::delete("/DestroyAnalitoLaboratorio", "AnalitoLaboratorioController@destroy");
  Route::get("/SeeEditAnalitoLaboratorio", "AnalitoLaboratorioController@edit");
  Route::put("/UpdateAnalitoLaboratorio", "AnalitoLaboratorioController@update");
  Route::get("/ShowAnalitoLaboratorio", "AnalitoLaboratorioController@show");


  // Gestion completa de Error o APS
  Route::post("/StoreError", "APSController@store");
  Route::delete("/DestroyError", "APSController@destroy");
  Route::post("/AsignarPredeterminadoError", "APSController@asignarPredeterminado");
  Route::get("/SeeEditError", "APSController@edit");
  Route::put("/UpdateError", "APSController@update");
  Route::get("/ShowError", "APSController@show");


  // Gestion completa de Valor DIANA
  Route::post("/StoreDIANA", "DIANAController@store");
  Route::delete("/DestroyDIANA", "DIANAController@destroy");
  Route::post("/AsignarPredeterminadoDIANA", "DIANAController@asignarPredeterminado");
  Route::get("/SeeEditDIANA", "DIANAController@edit");
  Route::put("/UpdateDIANA", "DIANAController@update");
  Route::get("/ShowDIANA", "DIANAController@show");

  // Modulo de auditoria
  Route::get("/SeeSectionAuditoria", "AuditoriaController@section");
  Route::get("/SeeIndexAuditoria", "AuditoriaController@index");
  Route::post("/ExportarPDFGraficaAuditoria", "PDFAuditoriaController@createPDF");
  Route::get("/ExportarGraficaAuditoria", "PDFAuditoriaController@index");
});


// Permisos para Administradores, coordinadores y operadores
Route::middleware("operador")->group(function () {
  // Gestión de resultados
  Route::post("/guardarResultados", "ResultadoController@actualizarResultados");
  Route::delete("/DestroySerie", "ResultadoController@destroy");

  Route::post("/guardarResultadosCualitativo", "ResultadoCualitativoController@actualizarResultados");
  Route::post("/guardarResultadoDefectoCualitativo", "ResultadoCualitativoController@actualizarDefectoResultados");

  Route::delete("/DestroySerieCualitativa", "ResultadoCualitativoController@destroy");
});


// Permisos para Administradores, coordinadores, operadores y usuarios de letura
Route::middleware("lectura")->group(function () {

  // Paneles de bienvenida, resultados, y graficas
  Route::get("/SeeSectionBienvenido", "BienvenidoController@section");
  Route::get("/SeeSectionResultado", "ResultadoController@section");
  Route::get("/SeeSectionResultadoCualitativo", "ResultadoCualitativoController@section");
  Route::get("/SeeSectionResultadoMicrobiologia", "ResultadoMicrobiologiaController@section")->name("microbiologia.medios");
  Route::get("/SeeSectionResultadoTinciones", "ResultadoTincionesController@section")->name('microbiologia.tinciones');
  Route::get("/SeeSectionResultadoPruebas", "ResultadoPruebasController@section")->name('microbiologia.pruebas');
  Route::get("/SeeSectionGraficaIntegrada", "GraficaIntegradaController@section");
  Route::get("/SeeSectionSigmometria", "SigmometriaController@section");
  Route::get("/GetValoresSigmometria", "SigmometriaController@getValoresByControlLaboratorio");

  // Configuracion de lotes y analitFos de laboratorio según el usuario que ha iniciado
  Route::get("/GetTreeConfig", "TreeController@getTreeConfig");
  Route::get("/GetTopLotes", "LoteController@GetTopLotes");
  Route::get("/GetTopAnalitosByControlLaboratorio", "AnalitoController@GetTopByControlLaboratorio");
  Route::get("/GetTopAnalizadores", "AnalizadorController@GetTopAnalizadores");
  Route::get("/GetTopReactivos", "ReactivoController@GetTopReactivos");
  Route::get("/GetTopLaboratorio", "LaboratorioController@getTopLaboratory");
  Route::get("/GetTopAnalitoLab", "AnalitoLaboratorioController@getTopAnalitoLab");
  Route::get('/GetMedioCultivo', "MedioController@GetMedioCultivo");
  Route::get('/GetTincion', "TincionController@GetTincion");
  Route::get('/GetPrueba', "PruebaController@GetPrueba");
  Route::get('/GetCepa', "CepaController@GetCepa");
  Route::get("/SeeListTemperatura", "TemperaturaController@listHTML");
  Route::get("/SeeListUnidad", "UnidadController@listHTML");
  Route::get("/SeeListMetodologia", "MetodologiaController@listHTML");

  // Exportación de graficos integrados y SigET
  Route::get("/GetDinamicModalExportarGraficasIntegradas", "ControlLaboratorioController@sectionExportarGraficasIntegradas");
  Route::get("/GetDinamicModalExportarGraficasCualitativo", "ControlLaboratorioController@sectionExportarGraficasCualitativo");
  Route::get("/exportarGraficaIntegrada", "ControlLaboratorioController@graficacionLote");
  Route::get("/exportarGraficaCualitativo", "ControlLaboratorioController@graficacionLoteCualitativo");
  Route::get('/SeeReportGraficasIntegradas', 'PDFGraficoIntegradoController@seeReport');
  Route::get('/SeeReportGraficasCualitativo', 'PDFGraficoIntegradoController@seeReportCualitativo');
  Route::get('/SeeReportGraficaSigmometria', 'PDFGraficoSigmometriaController@seeReport');
  Route::get("/exportarGraficaSigmometria", "ControlLaboratorioController@graficacionLoteSigmometria");
  Route::delete('/DeleteDocument', 'PDFGraficoIntegradoController@eliminarInforme');
  Route::delete('/DeleteDocumentSigmometria', 'PDFGraficoSigmometriaController@eliminarInforme');
  Route::post("/reporteFinalGraficasIntegradas", "PDFGraficoIntegradoController@generarInformeFinal")->name("reporteFinalGraficasIntegradas");
  Route::post("/reporteFinalGraficasCualitativo", "PDFGraficoIntegradoController@generarInformeFinalCualitativo")->name("reporteFinalGraficasCualitativo");
  Route::post("/reporteFinalGraficaSigmometria", "PDFGraficoSigmometriaController@generarInformeFinal");

  // Panel de configuracion de controles de laboratorio
  Route::get("/GetDinamicModalControlLaboratorio", "ControlLaboratorioController@section");
  Route::get("/SeeIndexControlLaboratorio", "ControlLaboratorioController@index");

  // Visualizacion de analitos de laboratorio
  Route::get("/GetDinamicModalAnalitoLaboratorio", "AnalitoLaboratorioController@section");
  Route::get("/SeeIndexAnalitoLaboratorio", "AnalitoLaboratorioController@index");

  // Cambio de DIANA
  Route::get("/GetDinamicModalDIANA", "DIANAController@section");
  Route::get("/SeeIndexDIANA", "DIANAController@index");

  // Cambio de APS
  Route::get("/GetDinamicModalError", "APSController@section");
  Route::get("/SeeIndexError", "APSController@index");

  // Informacion de un analito de laboratorio
  Route::get("/ShowInfoAnalitoLaboratorio", "AnalitoLaboratorioController@getInformacion");
  Route::get("/ShowTitleResultadosAnalitoLaboratorio", "AnalitoLaboratorioController@getTitleResultados");
  Route::get("/ShowTitleResultadosAnalitoLaboratorioCualitativo", "AnalitoLaboratorioCualitativoController@getTitleResultados");
  Route::get("/ShowResultadosAnalitoLaboratorio", "AnalitoLaboratorioController@getResultados");
  Route::get("/ShowResultadosAnalitoLaboratorioCualitativo", "AnalitoLaboratorioCualitativoController@getResultados");
  Route::get("/ShowValoresEstadisticosAnalitoLaboratorio", "AnalitoLaboratorioController@getValoresEstadisticos");
  Route::get("/ShowValoresEstadisticosAnalitoLaboratorioCualitativo", "AnalitoLaboratorioCualitativoController@getValoresEstadisticos");
  Route::get("/GetValoresGeneralesAnalitoLaboratorio", "AnalitoLaboratorioController@getValoresGeneralesAnalito");
  Route::post("/GenerarPdfCualitativo", "AnalitoLaboratorioCualitativoController@generarPdfCualitativo")->name('GenerarPdfCualitativo');

  // Comparativa Interlaboratorio
  Route::get("/SeeSectionComparativaInterlaboratorio", "ComparativaInterlaboratorioController@section");
  Route::get("/ComparativaInterlaboratorioGraficas", "comparativaInterlaboratorio\GraficasInterlaboratorioController");
  Route::get("/ComparativaInterlaboratorioMesurandos", "comparativaInterlaboratorio\MesurandosInterlaboratorioController");
  Route::get("/ComparativaInterlaboratorioMetricasSigma", "comparativaInterlaboratorio\MetricasSigmaInterlaboratorioController");
  Route::get("/ComparativaInterlaboratorioPercentiles", "comparativaInterlaboratorio\PercentilesInterlaboratorioController");
  Route::get("/ComparativaInterlaboratorioErrorAnalitico", "comparativaInterlaboratorio\ErrorAnaliticoInterlaboratorioController");
  Route::get("/ComparativaInterlaboratorioReportes", "comparativaInterlaboratorio\ReportesInterlaboratorioController");

  Route::get("/ShowInfoCepaLaboratorio", "CepaController@getInformacion");

  Route::get("/imprimir", function () {
    $pdf = PDF::loadView('comparativo-interlaboratorio/graficas');
    return $pdf->stream();
  });
  Route::get("/downloadTree", "TreeController@downloadTree")->name('downloadTree');
  Route::post("/downloadCommit", "TreeController@downloadCommit")->name('downloadCommit');
});

// Inicio y cierre de sesión
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout/get', 'Auth\LoginController@logout')->name('logout.get');
