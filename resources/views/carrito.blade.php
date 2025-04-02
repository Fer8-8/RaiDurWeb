@extends('layouts.navbar')

@section('content')
    <div class="d-flex">
        <div class="card shadow-lg m-4 border-0 rounded-4 p-4 d-flex flex-row
" style="width:70%">
            <div class="d-flex flex-column flex-fill p-2 align-items-center">
                <h2 class="text-center fw-semibold">DETALLES DE TU PEDIDO</h2>
                <img src="Images/cisternas1.png" width="280px" alt="cisterna">

                <div class="d-flex w-100 justify-content-between px-4">
                    <h4>Cisterna 500lt</h4> <h4>Precio</h4>
                </div>
                <div class="d-flex w-100 justify-content-between px-4">
                    <p>Diametro de 1.84/ altura de 2m</p> <h5 class="text-danger fw-bold">$8,600.99</h5>
                </div>
                <div class="input-group input-group-sm align-self-start ms-4" style="width: 80px;">
                    <button class="btn btn-outline-secondary" type="button" onclick="decrement()">−</button>
                    <input type="text" class="form-control text-center" id="quantity" value="1" readonly>
                    <button class="btn btn-outline-secondary" type="button" onclick="increment()">+</button>
                </div>
            </div>
            <div class="p-5 d-flex justify-content-start">
                <div class="me-4">
                    <p class="fs-5">Productos:</p>
                    <p class="fs-5">Envío:</p>
                    <p class="fs-5">Subtotal:</p>
                </div>
                <div class="">
                    <p class="text-danger fw-bold fs-5">$8,600.00</p>
                    <p class="text-danger fw-bold fs-5">$250.00</p>
                    <p class="text-danger fw-bold fs-5">$8,850.00</p>
                </div>
                <button>
                    
                </button>

            </div>
        </div>
        <div  style="width: 25%">
            <div style="height: 200px" class="card shadow-lg m-4 border-0 rounded-4 p-4 w-auto">

            </div>
        </div>    
    </div>
    
    <script>
    function increment() {
        let quantity = document.getElementById("quantity");
        quantity.value = parseInt(quantity.value) + 1;
    }

    function decrement() {
        let quantity = document.getElementById("quantity");
        if (quantity.value > 1) {
            quantity.value = parseInt(quantity.value) - 1;
        }
    }
</script>
@endsection