@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            @component('admin.users.tabs-component',['user' => $form->getModel()])
                <div class="col-md-12">
                    <h3>Editar Perfil</h3>
                    <?php $icon = Icon::create('pencil');?>
                    {!!
                        form($form->add('salve', 'submit', [
                            'attr' => ['class' => 'btn btn-primary btn-block'],
                            'label' => $icon
                        ]))
                    !!}
                </div>
            @endcomponent
        </div>
    </div>
@endsection