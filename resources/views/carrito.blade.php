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

<style> 
    body {
  animation: fadeIn 1s ease-in-out;
}
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

input {
  transition: all 0.3s ease, box-shadow 0.3s ease;
}
input:focus {
  outline: none;
  border-color: #e6b800;
  box-shadow: 0 0 8px #e6b800;
  transform: scale(1.03);
}

button {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
button:hover {
  transform: scale(1.08) rotate(-1deg);
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
}

.profile-btn {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  animation: pulse 2s infinite;
}
@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.05); box-shadow: 0 0 15px rgba(230,184,0,0.6); }
  100% { transform: scale(1); }
}

.container, .card {
  animation: slideInUp 0.8s ease;
}
@keyframes slideInUp {
  from { opacity: 0; transform: translateY(40px); }
  to { opacity: 1; transform: translateY(0); }
}

nav a {
  position: relative;
  transition: color 0.3s ease;
}
nav a::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: -4px;
  width: 100%;
  height: 2px;
  background: #e6b800;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.4s ease;
}
nav a:hover {
  color: #e6b800;
}
nav a:hover::after {
  transform: scaleX(1);
}

.social i {
  transition: transform 0.3s ease;
}
.social i:hover {
  transform: scale(1.3);
}
</style>
@endsection