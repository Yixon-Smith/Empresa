@extends('app')
@section('title', 'Iniciar Sesion')
@section('content')
<section class="lg__page">
    <div class="container-fluid h-full p-lr-0" style="height: 100%;">
        <div class="row__fluid__container h-full" style="height: 100%;">
           <div class="wrap__styele__lg flex-col-l-m h-full w-full bg2">
                <div class="container__form_lg" style="margin: 0 auto;">
                    <div class="p-t-20">
                        <form action="{{route('login dashboard')}}" name="formLogin"  method="post">
                        @csrf   
                        <div class="m-t-10 cl-error stext-101 dis-none data-error"></div>
                            <div class="form-group form_input__style_01 p-b-5 m-t-20">
                                <label for="email" class="cl2 clase-cl cl5 bg2">Correo Electrónico</label>
                                <input type="txt" name="email" id="email" class=" w-full stext-101 p-lr-12 p-t-13 p-b-10 cl3 plh0 bg2 wbs-0 disabled"  placeholder="example@email.com">
                                <div class="contendor__icon_input">
                                    <div class="w-full h-full flex-col-l-m">
                                        <i class="icon-mail fs18 cl1 clase-cl cl5 p-t-2"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-10 cl-error stext-101 dis-none" data-error="email">Campo Incorrecto</div>
                            <div class="form-group form_input__style_01 m-t-25">
                                <label for="password" class="cl2 clase-cl cl5 bg2">Contraseña</label>
                                <input type="password" name="password" id="password" class=" w-full stext-101 p-lr-12 p-t-13 p-b-10 cl3 plh0 bg2 wbs-0 disabled"  placeholder="Introduce tu contraseña">
                            </div>
                            <div class="m-t-25 w-full">
                                <button type="submit" class="flex-c-m w-full stext-103 bg1 bg3 cl0 p-tb-15 btn-shadow-box0 btn-submit">
                                    Ingresar
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="p-t-20">
                        <div class="w-full flex-w">
                            <p class="stext-104 m-r-5">¿Aún no tienes una cuenta?</p>
                            <a href="{{route('crear cuenta')}}" class="stext-105 text-decoration-01 cl4">Regístrate Aquí</a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
</section>
@endsection