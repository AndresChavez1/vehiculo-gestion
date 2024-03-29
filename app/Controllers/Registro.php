<?php

namespace App\Controllers;

use App\Models\RegistroCredencialesModel;
use App\Models\RegistroModel;

class Registro extends BaseController {
    
    public function login()
    {   
        $credencial = new RegistroCredencialesModel();
        $registro = new RegistroModel();
        helper(['form']);
        $data = [];

        //
        if($this->request->getMethod() == 'post'){
            //Reglas de validación 
            $rules = [
                'correo' => 'required|max_length[50]valid_email',
                'contraseña' => 'required|min_length[8]|max_length[255]|validar[correo, contraseña]'
            ];
            //Mensajes de error customizados
            $errors = [
                'contraseña' => [
                    'validar' => 'Correo o Contraseña incorrectos'
                ]
            ];
            //Validación no exitosa
            if(! $this->validate($rules, $errors)){
                $data['validation'] = $this->validator;
            }else{

                $user = $credencial
                ->select('personal.*, credenciales.id_credencial, credenciales.correo')
                ->join('personal', 'personal.id_personal = credenciales.personal')
                ->where('correo', $this->request->getPost('correo'))->first();
                $this->setUser($user);
                

                return redirect()->to(base_url('/tablero'));
             }
        }
        return view('vehiculo-gestion/login', $data);
    }

    private function setUser($user){
        $data = [
            'id_personal' => $user['id_personal'],
            'nombres' => $user['nombres'],
            'apellidos' => $user['apellidos'],
            'telefono' => $user['telefono'],
            'cedula' => $user['cedula'],
            'tipo_sangre' => $user['tipo_sangre'],
            'ciudad_nacimiento' => $user['ciudad_nacimiento'],
            'fecha_nacimiento' => $user['fecha_nacimiento'],
            'id_credencial' => $user['id_credencial'], 
            'correo' => $user['correo'],
            'rol' => $user['rol'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function registro()
    {
        $credencial = new RegistroCredencialesModel();
        $registro = new RegistroModel();
        helper(['form']);
        $data['rol'] = $registro->getRol();
        $data['rango'] = $registro->getRango();
        $data['tipo_sangre'] = $registro->getTipoSangre();

        //
        if($this->request->getMethod() == 'post'){
            //Reglas de validación 
            $rules = [
                'rol' => 'required',
                'nombres' => 'required|max_length[50]|alpha_space',
                'apellidos' => 'required|max_length[50]|alpha_space',
                'cedula' => 'required|exact_length[10]|integer|is_unique[personal.cedula]',
                'fecha_nacimiento' => 'required|valid_date|',
                'tipo_sangre' => 'required',
                'ciudad_nacimiento' => 'required|alpha_space',
                'telefono' => 'required|regex_match[^0\d{9}$]',
                'rango' => 'required|',
                'correo' => 'required|max_length[50]|is_unique[credenciales.correo]',
                'contraseña' => 'required|max_length[50]',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                //Validación exitosa
                $dataUsuario = [
                    'rol' =>$this->request->getPost('rol'),
                    'nombres' =>$this->request->getPost('nombres'),
                    'apellidos' =>$this->request->getPost('apellidos'),
                    'cedula' =>$this->request->getPost('cedula'),
                    'tipo_sangre' =>$this->request->getPost('tipo_sangre'),
                    'ciudad_nacimiento' =>$this->request->getPost('ciudad_nacimiento'),
                    'fecha_nacimiento' =>$this->request->getPost('fecha_nacimiento'),
                    'telefono' =>$this->request->getPost('telefono'),
                    'rango' =>$this->request->getPost('rango')
                ]; 

                $dataCredencial = [
                    'correo' =>$this->request->getPost('correo'),
                    'contraseña' =>$this->request->getPost('contraseña')
                ];

                $registro->transStart();
                $registro->save($dataUsuario);
                $id_usuario = $registro->insertID();
                $dataCredencial['personal'] = $id_usuario;
                $credencial->save($dataCredencial);
                $registro->transComplete();
                $session = session();
                $session->setFlashdata('success', 'Registro Exitoso');
                return redirect()->to(base_url('/login'));
            }
        }
        return view('vehiculo-gestion/registro', $data);
    }

    public function perfil(){
        $registro = new RegistroModel();
        helper(['form']);
        if($this->request->getMethod() == 'post'){
            //Reglas de validación 
            $rules = [
                'nombres' => 'required|max_length[50]|alpha_space',
                'apellidos' => 'required|max_length[50]|alpha_space',
                'fecha_nacimiento' => 'required|valid_date|',
                'ciudad_nacimiento' => 'required|alpha_space',
                'telefono' => 'required|regex_match[^0\d{9}$]',
            ];



            if(! $this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                //Validación exitosa
                $dataUsuario = [
                    'id_personal' => session()->get('id_personal'),
                    'nombres' =>$this->request->getPost('nombres'),
                    'apellidos' =>$this->request->getPost('apellidos'),
                    'ciudad_nacimiento' =>$this->request->getPost('ciudad_nacimiento'),
                    'fecha_nacimiento' =>$this->request->getPost('fecha_nacimiento'),
                    'telefono' =>$this->request->getPost('telefono'),
                ]; 


                $registro->save($dataUsuario);

                session()->setFlashdata('success', 'Actualización Exitosa');
                return redirect()->to(base_url('perfil'));
            }
        
        }
        $data['user'] = $registro
        ->where('id_personal', session()->get('id_personal'))->first();
        $data['rol'] = $registro->getRol();
        $data['rango'] = $registro->getRango();
        $data['tipo_sangre'] = $registro->getTipoSangre();
        return view('vehiculo-gestion/perfil', $data);
    }

    public function contraseña(){
        $credencial = new RegistroCredencialesModel();
        helper(['form']);
        
        if($this->request->getMethod() == 'post'){
            //Reglas de validación 
            if($this->request->getPost('contraseña') != ''){
                $rules = [
                    'contraseña' => 'required|max_length[50]',
                    'confirmar_contraseña' => 'matches[contraseña]',
                ];
            }

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                //Validación exitosa
                
                if($this->request->getPost('contraseña') != ''){
                    $dataCredenciales = [
                        'id_credencial' => session()->get('id_credencial'),
                        'personal' => session()->get('id_personal'),
                        'contraseña' =>$this->request->getPost('contraseña'),
                    ];
                }


                $credencial->save($dataCredenciales);


                session()->setFlashdata('success', 'Actualización Exitosa');
                return redirect()->to(base_url('cambiar-contrasenia'));
            }
        
        }

        return view('vehiculo-gestion/cambiar-contrasenia');
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('inicio'));
    }
}