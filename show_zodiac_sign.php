<?php include 'header.php'; ?>

<?php
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$dia_mes_nasc = "$mes-$dia"; 

$signos = simplexml_load_file("signos.xml");
$signo_encontrado = null;

foreach ($signos->signo as $signo) {
    $inicio = DateTime::createFromFormat('d/m', (string)$signo->dataInicio)->format('m-d');
    $fim = DateTime::createFromFormat('d/m', (string)$signo->dataFim)->format('m-d');

    if ($inicio > $fim) { 
        if ($dia_mes_nasc >= $inicio || $dia_mes_nasc <= $fim) {
            $signo_encontrado = $signo;
        }
    } else {
        if ($dia_mes_nasc >= $inicio && $dia_mes_nasc <= $fim) {
            $signo_encontrado = $signo;
        }
    }
}
?>

<div class="container mt-5 py-5">
    <?php if ($signo_encontrado): ?>
        <div class="card goth-card p-5 mx-auto text-center" style="max-width: 650px;">
            <div class="mb-2" style="font-size: 2.5rem; color: #c5a35d;">✦</div>
            <h1><?= $signo_encontrado->signoNome ?></h1>
            <p class="text-uppercase mb-4" style="color: #c5a35d; letter-spacing: 4px;">"<?= $signo_encontrado->lema ?>"</p>

            <div class="row mb-4 g-0 border-gold">
                <div class="col-6 p-3 border-end-gold">
                    <small class="d-block text-uppercase opacity-50">Elemento</small>
                    <span class="fs-5"><?= $signo_encontrado->elemento ?></span>
                </div>
                <div class="col-6 p-3">
                    <small class="d-block text-uppercase opacity-50">Regente</small>
                    <span class="fs-5"><?= $signo_encontrado->regente ?></span>
                </div>
            </div>

            <hr class="my-4" style="border-color: rgba(197, 163, 93, 0.3);">
            <p class="fs-4 fw-light italic"><?= $signo_encontrado->descricao ?></p>

            <a href="index.php" class="btn-tarot mt-5 text-decoration-none d-block">Voltar ao Oráculo</a>
        </div>
    <?php else: ?>
        <div class="alert alert-warning">Os astros se alinharam de forma confusa. Tente novamente.</div>
    <?php endif; ?>
</div>

<script>
    particlesJS("particles-js", {
        "particles": {
            "number": { "value": 120 },
            "color": { "value": "#c5a35d" },
            "shape": { "type": "circle" },
            "opacity": { "value": 0.5, "random": true },
            "size": { "value": 3, "random": true },
            "line_linked": { "enable": false },
            "move": { "enable": true, "speed": 1 }
        }
    });
</script>
</body>
</html>