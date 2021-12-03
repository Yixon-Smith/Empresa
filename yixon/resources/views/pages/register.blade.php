@extends('app')
@section('title', 'Crear Cuentas')
@section('content')
<section class="lg__page">
    <div class="container-fluid h-full p-lr-0" style="height: 100%;">
        <div class="row__fluid__container h-full" style="height: 100%;">
           <div class="wrap__styele__lg flex-col-l-m h-full w-full bg2">
                <div class="container__form_lg" style="margin: 0 auto;">
                    <div class="p-t-20">
                        <form action="{{route('guardar usuario')}}" name="formLogin"  method="post">
                            <h4 class="ltext-101 cl1">
                                Bienvenido
                            </h4>
                            <p class="stext-102 p-b-10">
                                Agrega tu Usuario y Contraseña para ingresar
                            </p>
                            @csrf
                            <div class="m-t-10 cl-error stext-101 dis-none data-error"></div>
                            <div class="form-group form_input__style_01 p-b-5 m-t-20">
                                <label for="name" class="cl2 clase-cl cl5 bg2">Nombre</label>
                                <input type="text" name="name" id="name" class=" w-full stext-101 p-lr-12 p-t-13 p-b-10 cl3 plh0 bg2 wbs-0 disabled"  placeholder="Ingresa tu nombre">
                            </div>
                            <div class="form-group form_input__style_01 p-b-5 m-t-20">
                                <label for="lastname" class="cl2 clase-cl cl5 bg2">Apellido</label>
                                <input type="text" name="lastname" id="lastname" class=" w-full stext-101 p-lr-12 p-t-13 p-b-10 cl3 plh0 bg2 wbs-0 disabled"  placeholder="Ingresa tu apellido">
                            </div>
                            <div class="form-group form_input__style_01 p-b-5 m-t-20">
                                <label for="email" class="cl2 clase-cl cl5 bg2">Correo</label>
                                <input type="txt" name="email" id="email" class=" w-full stext-101 p-lr-12 p-t-13 p-b-10 cl3 plh0 bg2 wbs-0 disabled"  placeholder="Ingresa tu correo">
                            </div>
                            <div class="m-t-10 cl-error stext-101 dis-none" data-error="email">Campo Incorrecto</div>
                            <div class="form-group form_input__style_01 m-t-25">
                                <label for="password" class="cl2 clase-cl cl5 bg2">Contraseña</label>
                                <input type="password" name="password" id="password" class=" w-full stext-101 p-lr-12 p-t-13 p-b-10 cl3 plh0 bg2 wbs-0 disabled"  placeholder="Ingresa tu contraseña">
                            </div>
                            <div class="m-t-25 w-full">
                                <button type="submit" class="flex-c-m w-full stext-103 bg1 bg3 cl0 p-tb-15 btn-shadow-box0 btn-submit">
                                    Crear Cuenta
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="p-t-20">
                        <div class="w-full flex-w">
                            <div class="w-full flex-w">
                                <p class="stext-104 m-r-5">¿Ya tienes una cuenta?</p>
                                <a href="{{route('login')}}" class="stext-105 text-decoration-01 cl4">Inicia Sesion</a>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
</section>
@endsection