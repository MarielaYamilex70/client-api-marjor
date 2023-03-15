<h1>Nuevo Cliente</h1>

<form action="{{route('client.store')}}"  class='form' method="POST">
    @csrf
    {{-- @include('form')          --}}

    <div class="card bg-light">
        <div class="card-body">
            {{-- {{ auth()->user()->name }} --}}
    
            <div class="formGroup">
                <label for="labelFondoform">NOMBRE</label>
                <input name="name" type="text" id="name" class="form-control" >
            </div>
    
            <div class="formGroup">
                <label for="labelFondoForm">EMAIL</label>
                <input name="email" type="text" id="email" class="form-control" >
            </div>
    
            <div class="formGroup">
                <label for="labelFondoForm">TELEFONO</label>
                <input name="phone" type="text" id="phone" class="form-control" >
            </div>

            <div class="formGroup">
                <label for="labelFondoForm">DIRECCION</label>
                <input name="address" type="text" id="address" class="form-control" >
            </div>
    
    
        </div>
        <button type="submit">Enviar Datos</button>
    
                
    
            {{-- <input value="Enviar Datos" type="submit" class="btn btn-outline-danger" /> --}}
        </div>
    </div>
</form>