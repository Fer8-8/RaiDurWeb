@extends('layouts.app')

@section('head')
<title>Cuestionario Inteligente</title>
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
  <link href="https://fonts.googleapis.com/css2?family=Saira:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    .container2 {
      font-family: 'Saira', sans-serif;
      background: #f5f7fa;
      color: #333;
      display: flex;
      height: 100vh;
      margin: 0;
    }
    .left-section {
      width: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      position: relative;
      padding-right: 20px;
    }
    .right-section {
      width: 50%;
      background: black;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      position: relative;
    }
    .right-section::before {
      content: "";
      position: absolute;
      left: -15px;
      width: 30px;
      height: 100%;
      background: linear-gradient(to right, rgba(245, 247, 250, 1) 0%, rgba(245, 247, 250, 0) 100%);
      z-index: 1;
    }
    .video-container video {
      width: 100%;
      height: 100vh;
      object-fit: cover;
    }
    .progress-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 10px;
      background: #ddd;
    }
    .progress-bar {
      width: 0%;
      height: 10px;
      background: linear-gradient(to right, #FFD700, #FFA500, #FF8C00, #FF4500, #000000);
      transition: width 0.5s ease-in-out;
    }
    .container1 {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.15);
      width: 350px;
      transition: transform 0.4s ease, opacity 0.4s ease;
    }
    .container.animate {
      transform: scale(1.05);
      opacity: 0.9;
    }
    h2 {
      color: #FF8C00;
      font-weight: 600;
    }
    p {
      color: #666;
      font-size: 14px;
      font-weight: 400;
    }
    input {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ddd;
      font-size: 16px;
    }
    button {
      padding: 10px 20px;
      background: #FF8C00;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      transition: background 0.3s, transform 0.2s ease-in-out;
    }
    button:hover {
      background: #FFA500;
      transform: scale(1.05);
    }
  </style>
@endsection

@section('content')
  <div class="container2">
  <div class="left-section">
    <div class="progress-container">
      <div class="progress-bar" id="progress"></div>
    </div>
    <div class="container1" id="card">
      <h2 id="question"></h2>
      <p>Por favor, responde con datos numéricos</p>
      <input type="number" id="answer" placeholder="Tu respuesta aquí">
      <br>
      <button onclick="nextQuestion()">Siguiente</button>
    </div>
  </div>
  <div class="right-section">
    <div class="video-container">
      <video id="question-video" autoplay muted loop>
        <source src="Images/casa.mp4" type="video/mp4">
      </video>
    </div>
  </div>

  <script>
    let model;
    async function loadModel() {
      model = tf.sequential();
      model.add(tf.layers.dense({inputShape: [5], units: 12, activation: 'relu'}));
      model.add(tf.layers.dense({units: 12, activation: 'sigmoid'}));
      model.compile({ optimizer: 'adam', loss: 'binaryCrossentropy', metrics: ['accuracy'] });
    }

    let responses = [];
    let currentQuestion = 0;
    const questions = [
      { question: "¿Cuál es el tamaño de tu vivienda en m²?", type: "number", video: "Images/casa.mp4" },
      { question: "¿Cuántas personas viven en la casa?", type: "number", video: "Images/casa.mp4" },
      { question: "¿Cuánto consumes de agua al mes (litros)?", type: "number", video: "Images/water.mp4" },
      { question: "¿Cuál es tu consumo mensual de energía en kWh?", type: "number", video: "Images/luz.mp4" },
      { question: "¿Qué tan accesibles son los servicios públicos en tu zona? (1-10)", type: "number", video: "Images/casa.mp4" }
    ];

    const products = [
      "cisterna_10000", "cisterna_5000", "cisterna_2700", "cisterna_1100",
      "tinaco_1100", "tinaco_750", "tinaco_450",
      "boiler_16", "boiler_6",
      "biodigestor_2500", "biodigestor_600",
      "calentador_solar"
    ];

    function nextQuestion() {
      const input = document.getElementById("answer");
      responses.push(parseFloat(input.value) || 0);
      input.value = "";
      animateCard();
      currentQuestion++;
      if (currentQuestion < questions.length) {
        updateQuestion();
        updateSlider();
        updateVideo();
      } else {
        predict(responses.slice(0, 5));
      }
    }

    function updateQuestion() {
      document.getElementById("question").innerText = questions[currentQuestion].question;
    }

    function updateSlider() {
      document.getElementById("progress").style.width = `${((currentQuestion + 1) / questions.length) * 100}%`;
    }

    function updateVideo() {
      document.getElementById("question-video").src = questions[currentQuestion].video;
    }

    function animateCard() {
      const card = document.getElementById("card");
      card.classList.add("animate");
      setTimeout(() => card.classList.remove("animate"), 300);
    }

    async function predict(newData) {
      await loadModel();
      const xTrain = tf.tensor2d([
        [200, 6, 8000, 1500, 4],
        [90, 2, 2000, 500, 9],
        [140, 4, 4500, 1000, 6]
      ]);
      const yTrain = tf.tensor2d([
        [1,1,0,0,1,0,0,1,0,1,0,1],
        [0,0,0,1,1,1,1,0,1,0,1,0],
        [0,1,1,0,1,0,0,1,0,0,0,1]
      ]);
      await model.fit(xTrain, yTrain, {epochs: 100});

      const input = tf.tensor2d([newData], [1, 5]);
      const prediction = model.predict(input);
      const output = prediction.arraySync()[0];
      const recommended = products.filter((_, index) => output[index] > 0.5);

      document.querySelector(".container").innerHTML = `
        <h2>Cuestionario finalizado ✅</h2>
        <p>Basado en tus respuestas, te recomendamos los siguientes productos:</p>
        <ul style='text-align:left; padding-left: 20px;'>
          ${recommended.map(p => `<li>${p.replace(/_/g, ' ').toUpperCase()}</li>`).join('')}
        </ul>
      `;

      responses = [];
      currentQuestion = 0;
    }

    window.onload = () => {
      updateQuestion();
    }
  </script>
</div>
@endsection