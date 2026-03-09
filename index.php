<?php include 'header.php'; ?>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="card goth-card p-5 shadow-lg text-center">
        <h1>Oráculo Zodiaco</h1>
        <p class="mb-5 opacity-75 italic"> Descubra a frequência que o universo reservou para você </p>
        
        <form action="show_zodiac_sign.php" method="POST">
            <div class="row g-2 justify-content-center">
                <div class="col-3">
                    <select name="dia" class="form-input-tarot select-mystic" required>
                        <option value="" disabled selected>DIA</option>
                        <?php for($i=1; $i<=31; $i++) echo "<option value='".str_pad($i, 2, "0", STR_PAD_LEFT)."'>$i</option>"; ?>
                    </select>
                </div>
                <div class="col-5">
                    <select name="mes" class="form-input-tarot select-mystic" required>
                        <option value="" disabled selected>LUA (MÊS)</option>
                        <option value="01">JANEIRO</option>
                        <option value="02">FEVEREIRO</option>
                        <option value="03">MARÇO</option>
                        <option value="04">ABRIL</option>
                        <option value="05">MAIO</option>
                        <option value="06">JUNHO</option>
                        <option value="07">JULHO</option>
                        <option value="08">AGOSTO</option>
                        <option value="09">SETEMBRO</option>
                        <option value="10">OUTUBRO</option>
                        <option value="11">NOVEMBRO</option>
                        <option value="12">DEZEMBRO</option>
                    </select>
                </div>
                <div class="col-4">
                    <input type="number" name="ano" placeholder="ERA (ANO)" class="form-input-tarot" min="1900" max="2026" required>
                </div>
            </div>
            <button type="submit" class="btn-tarot mt-5 w-100">REVELAR DESTINO</button>
        </form>
    </div>
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