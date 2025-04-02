@extends('layouts.app')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - RaiDur</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="script.js"></script>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Saira:wght@300;400;600&display=swap');

        .container2 {
            font-family: 'Saira', sans-serif;
            background: #f5f5f5;
            display: flex;
            color: #1b2d2a;
        }

        .sidebar {
            background: #0a0a0a;
            width: 250px;
            height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: column;
            color: white;
        }

        .sidebar h2 {
            color: #ffcc00;
            margin-bottom: 20px;
        }

        .menu-item1 {
            padding: 10px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .menu-item1:hover {
            background: rgba(255, 204, 0, 0.2);
        }

        .content1 {
            flex-grow: 1;
            padding: 20px;
        }

        .card1 {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .stats {
            display: flex;
            justify-content: space-between;
        }

        .charts-container {
            display: flex;
            justify-content: space-between;
        }

        .chart-card {
            width: 48%;
            background: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        canvas {
            width: 100% !important;
            height: 300px !important;
        }
    </style>
@endsection

@section('content')
<div class="container2 ">
    <div class="sidebar">
        <h2>RaiDur</h2>
        <div class="menu-item1">Dashboard</div>
        <div class="menu-item1">Ventas y pagos</div>
        <div class="menu-item1">Facturas</div>
        <div class="menu-item1">Contabilidad</div>
        <div class="menu-item1">Compras</div>
        <div class="menu-item1">Modificación de producto</div>
        <div class="menu-item1">Agregar descuento</div>
    </div>
    
    <div class="content1">
        <h1>Dashboard</h1>
        
        <div class="card1 stats">
            <div>
                <h3>Ganancias Totales</h3>
                <p>$32,540</p>
            </div>
            <div>
                <h3>Órdenes</h3>
                <p>2,879</p>
            </div>
            <div>
                <h3>Clientes</h3>
                <p>3,512</p>
            </div>
        </div>
        
        <div class="charts-container">
            <div class="chart-card">
                <h3>Ingresos Mensuales</h3>
                <canvas id="chart-ingresos"></canvas>
            </div>
            
            <div class="chart-card">
                <h3>Órdenes por Semana</h3>
                <canvas id="chart-ordenes"></canvas>
            </div>
        </div>
    </div>
    
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctxIngresos = document.getElementById('chart-ingresos').getContext('2d');
            const ctxOrdenes = document.getElementById('chart-ordenes').getContext('2d');
            
            new Chart(ctxIngresos, {
                type: 'bar',
                data: {
                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
                    datasets: [{
                        label: 'Ingresos',
                        data: [15000, 18000, 20000, 22000, 24000, 27000],
                        backgroundColor: '#ffcc00'
                    }]
                }
            });
            
            new Chart(ctxOrdenes, {
                type: 'line',
                data: {
                    labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
                    datasets: [{
                        label: 'Órdenes',
                        data: [120, 180, 260, 300, 450, 600, 750],
                        borderColor: '#ffcc00',
                        fill: false
                    }]
                }
            });
        });
    </script>
@endsection