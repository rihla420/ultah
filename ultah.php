<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Selamat Ulang Tahun Rihla Maulida</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    height:100vh;
    background:linear-gradient(to top,#7fdc9f,#c8f5d9);
    overflow:hidden;
    color:#1f4f3a;
}

/* AWAN */
.cloud{
    position:absolute;
    top:15%;
    width:120px;
    height:60px;
    background:white;
    border-radius:50px;
    opacity:.8;
    animation:cloudMove 25s linear infinite;
}
.cloud:before,.cloud:after{
    content:'';
    position:absolute;
    background:white;
    width:60px;
    height:60px;
    border-radius:50%;
    top:-20px;
}
.cloud:before{left:15px;}
.cloud:after{right:15px;}

@keyframes cloudMove{
    from{left:-150px;}
    to{left:110%;}
}

/* GUNUNG */
.mountain{
    position:absolute;
    bottom:0;
    width:100%;
    height:50%;
    background:linear-gradient(to top,#4caf50,#81c784);
    clip-path:polygon(0 100%,15% 60%,30% 80%,50% 40%,70% 75%,85% 55%,100% 100%);
    animation:mountainMove 6s ease-in-out infinite alternate;
}
@keyframes mountainMove{
    from{transform:translateY(0);}
    to{transform:translateY(10px);}
}

/* KONTEN */
.container{
    position:relative;
    z-index:2;
    height:100%;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    padding:20px;
}

h1{
    font-size:2.5em;
    animation:fadeDown 2s ease;
}
h2{
    margin-top:10px;
    font-weight:400;
    animation:fadeUp 2.5s ease;
}

.card{
    background:rgba(241, 172, 172, 0.85);
    margin-top:25px;
    padding:20px;
    border-radius:15px;
    max-width:500px;
    box-shadow:0 10px 20px rgba(236, 115, 115, 0.15);
    animation:zoomIn 3s ease;
}

button{
    margin-top:15px;
    padding:12px 25px;
    border:none;
    border-radius:30px;
    background:#4caf50;
    color:blue;
    font-size:1em;
    cursor:pointer;
    transition:.3s;
}
button:hover{
    background:#388e3c;
    transform:scale(1.1);
}

/* ANIMASI */
@keyframes fadeDown{
    from{opacity:0;transform:translateY(-40px);}
    to{opacity:1;transform:translateY(0);}
}
@keyframes fadeUp{
    from{opacity:0;transform:translateY(40px);}
    to{opacity:1;transform:translateY(0);}
}
@keyframes zoomIn{
    from{opacity:0;transform:scale(.5);}
    to{opacity:1;transform:scale(1);}
}

.quote{
    display:none;
    margin-top:15px;
    font-style:italic;
}
</style>
</head>

<body>

<!-- AUDIO BASE64 -->
<audio id="bgMusic" loop>
    <source src="data:audio/mp3;base64,PASTE_AUDIO_BASE64_DI_SINI">
</audio>

<div class="cloud" style="animation-delay:0s"></div>
<div class="cloud" style="top:25%;animation-delay:8s"></div>
<div class="cloud" style="top:35%;animation-delay:15s"></div>

<div class="container">
    <h1>🎉 Selamat Ulang Tahun 🎉</h1>
    <h2>Rihla Maulida 🌱</h2>

    <div class="card">
        <p>
            Selamat ulang tahun, Rihla Maulida.
            Semoga hidupmu seteduh hutan hijau,
            seteguh gunung yang menjulang,
            dan setenang alam yang menenangkan hati.
        </p>

        <p style="margin-top:10px">
            🤲 <b>Doa:</b><br>
            Semoga Allah SWT senantiasa melimpahkan
            kesehatan, kebahagiaan, dan kemudahan
            dalam setiap langkah hidupmu.
        </p>

        <p class="quote" id="quote">
            "Jangan takut mendaki,
            karena puncak selalu indah
            bagi mereka yang sabar."
        </p>

        <button onclick="showQuote()">🌿 Kata Mutiara</button>
        <button onclick="toggleMusic()" id="musicBtn">▶️ Putar Musik</button>
    </div>
</div>

<div class="mountain"></div>

<script>
const music = document.getElementById("bgMusic");
const musicBtn = document.getElementById("musicBtn");
let playing = false;

function toggleMusic(){
    if(!playing){
        music.play();
        musicBtn.innerHTML = "⏸️ Hentikan Musik";
    }else{
        music.pause();
        musicBtn.innerHTML = "▶️ Putar Musik";
    }
    playing = !playing;
}

function showQuote(){
    const q = document.getElementById("quote");
    q.style.display = "block";
    q.style.animation = "fadeUp 1.5s ease";
}
</script>

</body>
</html>
