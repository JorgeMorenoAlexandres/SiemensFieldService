<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Personal;
use App\Certificaiones;

class PersonalController extends Controller
{
    //Proteger ruta
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        $inicio = true;
        return view('menu/menu',compact('inicio'));
    }

    public function mostarPersonal()
    {   
        $PersonalQuery = DB::table(DB::raw('siemens.personal p, siemens.certificaciones c'))
        ->select('P.id_personal','P.nombre','P.apellidos','P.id_certificacion','c.desc_certificaciones')
        ->where('P.id_certificacion' , DB::raw('C.idcertificaciones'))
        ->paginate(15);           

        return view('personal/buscar', compact('PersonalQuery'));
    }

    public function buscarPersonalPost(Request $request)
    {  
         $apellidos        = $request->input("apellidos");
         $certificacion    = $request->input("certificacion");
         $tipoConsulta     = $request['tipoConsulta'];

        if ($request->isMethod('post')){

                if($tipoConsulta == 1){
                    $PersonalQuery = DB::table(DB::raw('siemens.personal p, siemens.certificaciones c'))
                    ->select('P.id_personal','P.nombre','P.apellidos','P.id_certificacion','c.desc_certificaciones')
                    ->where('P.id_certificacion',DB::raw('C.idcertificaciones'))->where('P.apellidos','like', ''.$apellidos.'%')->get();
                    return $PersonalQuery;
                }

                else if($tipoConsulta == 2){
                    $PersonalQuery = DB::table(DB::raw('siemens.personal p, siemens.certificaciones c'))
                    ->select('P.id_personal','P.nombre','P.apellidos','P.id_certificacion','c.desc_certificaciones')
                    ->where('P.id_certificacion',DB::raw('C.idcertificaciones'))->where('c.desc_certificaciones','like', ''.$certificacion.'%')->get();
                    return $PersonalQuery;
                }

                else if($tipoConsulta == 3){
                    $PersonalQuery = DB::table(DB::raw('siemens.personal p, siemens.certificaciones c'))
                    ->select('P.id_personal','P.nombre','P.apellidos','P.id_certificacion','c.desc_certificaciones')
                    ->where('P.id_certificacion',DB::raw('C.idcertificaciones'))->where('P.apellidos','like', ''.$apellidos.'%')
                    ->where('c.desc_certificaciones','like', ''.$certificacion.'%')->get();
                    return $PersonalQuery;
                }
            }

    }
    

    public function mostarCertificaciones()
    {   
        return view('certificaciones/certificaciones');
    }

    public function agregarPersonal()
    {   
        return view('personal/agregar');
    }

    public function agregarPersonalPost(Request $request)
    {   
        $input = $request->all();


        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

    public function editarPersonal()
    {   
        return view('personal/editar');
    }

    public function eliminarPersonal()
    {   
        return view('personal/eliminar');
    }

    public function ajaxRequest()
    {
    }

    public function ajaxRequestPost(Request $request)
    {
         if ($request->isMethod('post')){
        //     $nombre = $request->input("apellidos");
        //     $nombre = $request->input("certificacion");

        //     $PersonalQuery = DB::table(DB::raw('siemens.personal p, siemens.certificaciones c'))
        //     ->select('P.id_personal','P.nombre','P.apellidos','P.id_certificacion','c.desc_certificaciones')
        //     ->where('P.id_certificacion' , DB::raw('C.idcertificaciones'))
            return $request;
        }
        // $input = $request->all();
        // return $input;
        // return response()->json(['var'=>$input]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
