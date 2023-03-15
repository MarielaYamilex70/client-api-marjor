<h1>Editar Cliente</h1>

<form action="{{route('client.update')}}"  class='form' method="POST">
    @csrf
    {{-- @include('form')          --}}

    <div class="card bg-light">
        <div class="card-body">
            {{-- {{ auth()->user()->name }} --}}
            <input name="id" type="hidden" id="id" class="form-control" value="@if(!empty($data['clients']['id'])) {{$data['clients']['id']}} @endif">
            
            <div class="formGroup">
                <label for="labelFondoform">NOMBRE</label>
                <input name="name" type="text" id="name" class="form-control" value="@if(!empty($data['clients']['name'])) {{$data['clients']['name']}} @endif">
            </div>
    
            <div class="formGroup">
                <label for="labelFondoForm">EMAIL</label>
                <input name="email" type="text" id="email" class="form-control" value="@if(!empty($data['clients']['email'])) {{$data['clients']['email']}} @endif">
            </div>
    
            <div class="formGroup">
                <label for="labelFondoForm">TELEFONO</label>
                <input name="phone" type="text" id="phone" class="form-control" value="@if(!empty($data['clients']['phone'])) {{$data['clients']['phone']}} @endif">
            </div>

            <div class="formGroup">
                <label for="labelFondoForm">DIRECCION</label>
                <input name="address" type="text" id="address" class="form-control" value="@if(!empty($data['clients']['address'])) {{$data['clients']['address']}} @endif">
            </div>
    
    
        </div>
        <button type="submit">Enviar Datos</button>
    
                
    
            {{-- <input value="Enviar Datos" type="submit" class="btn btn-outline-danger" /> --}}
        </div>
    </div>
</form>