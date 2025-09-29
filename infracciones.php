<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tránsito - El Bolsón 🗻</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="infracciones">
        <h1>Infracciones</h1>
        <p>Seleccioná un artículo:</p>

        <!-- formulario -->
        <form method="get" action="infracciones.php">
            <select name="articulo">
                <option value="">-- Elegí un artículo --</option>

                <optgroup label="Artículo 48 - Prohibiciones al circular">
                    <option value="48a" <?php if (($_GET['articulo'] ?? '') == '48a') echo 'selected'; ?>>Art. 48 inc. a - Circular en contramano</option>
                    <option value="48b" <?php if (($_GET['articulo'] ?? '') == '48b') echo 'selected'; ?>>Art. 48 inc. b - Conducir sin licencia</option>
                    <option value="48c" <?php if (($_GET['articulo'] ?? '') == '48c') echo 'selected'; ?>>Art. 48 inc. c - Exceso de velocidad</option>
                    <option value="48d" <?php if (($_GET['articulo'] ?? '') == '48d') echo 'selected'; ?>>Art. 48 inc. d - Conducir alcoholizado o drogado</option>
                    <option value="48e" <?php if (($_GET['articulo'] ?? '') == '48e') echo 'selected'; ?>>Art. 48 inc. e - Exceso de ocupantes</option>
                    <option value="48f" <?php if (($_GET['articulo'] ?? '') == '48f') echo 'selected'; ?>>Art. 48 inc. f - Transporte indebido de personas/carga</option>
                    <option value="48g" <?php if (($_GET['articulo'] ?? '') == '48g') echo 'selected'; ?>>Art. 48 inc. g - Sin luces o patentes ilegibles</option>
                    <option value="48h" <?php if (($_GET['articulo'] ?? '') == '48h') echo 'selected'; ?>>Art. 48 inc. h - Uso indebido de sirenas/bocinas</option>
                    <option value="48i" <?php if (($_GET['articulo'] ?? '') == '48i') echo 'selected'; ?>>Art. 48 inc. i - Carga mal acondicionada o peligrosa</option>
                    <option value="48j" <?php if (($_GET['articulo'] ?? '') == '48j') echo 'selected'; ?>>Art. 48 inc. j - Contaminación (humo, gases, ruido)</option>
                    <option value="48k" <?php if (($_GET['articulo'] ?? '') == '48k') echo 'selected'; ?>>Art. 48 inc. k - Uso de celular al conducir</option>
                    <option value="48l" <?php if (($_GET['articulo'] ?? '') == '48l') echo 'selected'; ?>>Art. 48 inc. l - Sin cinturón o casco</option>
                    <option value="48m" <?php if (($_GET['articulo'] ?? '') == '48m') echo 'selected'; ?>>Art. 48 inc. m - Animales que entorpecen la conducción</option>
                    <option value="48n" <?php if (($_GET['articulo'] ?? '') == '48n') echo 'selected'; ?>>Art. 48 inc. n - Moto sin casco</option>
                    <option value="48o" <?php if (($_GET['articulo'] ?? '') == '48o') echo 'selected'; ?>>Art. 48 inc. o - Escape libre o sin silenciador</option>
                    <option value="48p" <?php if (($_GET['articulo'] ?? '') == '48p') echo 'selected'; ?>>Art. 48 inc. p - Conducir sin seguro</option>
                    <option value="48q" <?php if (($_GET['articulo'] ?? '') == '48q') echo 'selected'; ?>>Art. 48 inc. q - Sin documentación exigida</option>
                    <option value="48r" <?php if (($_GET['articulo'] ?? '') == '48r') echo 'selected'; ?>>Art. 48 inc. r - Adelantamiento en lugares prohibidos</option>
                    <option value="48s" <?php if (($_GET['articulo'] ?? '') == '48s') echo 'selected'; ?>>Art. 48 inc. s - Circular marcha atrás indebidamente</option>
                </optgroup>

                <optgroup label="Artículo 49 - Prohibiciones de estacionamiento y detención">
                    <option value="49a" <?php if (($_GET['articulo'] ?? '') == '49a') echo 'selected'; ?>>Art. 49 inc. a - Estacionar afectando seguridad</option>
                    <option value="49b" <?php if (($_GET['articulo'] ?? '') == '49b') echo 'selected'; ?>>Art. 49 inc. b - Esquinas, veredas o paradas</option>
                    <option value="49c" <?php if (($_GET['articulo'] ?? '') == '49c') echo 'selected'; ?>>Art. 49 inc. c - Frente a hospitales o escuelas</option>
                    <option value="49d" <?php if (($_GET['articulo'] ?? '') == '49d') echo 'selected'; ?>>Art. 49 inc. d - Frente a cines/teatros</option>
                    <option value="49e" <?php if (($_GET['articulo'] ?? '') == '49e') echo 'selected'; ?>>Art. 49 inc. e - Accesos de garages</option>
                    <option value="49f" <?php if (($_GET['articulo'] ?? '') == '49f') echo 'selected'; ?>>Art. 49 inc. f - Estacionar más de 5 días</option>
                    <option value="49g" <?php if (($_GET['articulo'] ?? '') == '49g') echo 'selected'; ?>>Art. 49 inc. g - Vehículos pesados sin autorización</option>
                    <option value="49h" <?php if (($_GET['articulo'] ?? '') == '49h') echo 'selected'; ?>>Art. 49 inc. h - Detención en lugares peligrosos</option>
                </optgroup>
                <option value="48t" <?= ($_GET['articulo'] ?? '') == '48t' ? 'selected' : '' ?>>Art. 48 inc. t - No respetar señales de tránsito</option>
                <option value="48u" <?= ($_GET['articulo'] ?? '') == '48u' ? 'selected' : '' ?>>Art. 48 inc. u - No respetar prioridad de peatones/ciclistas</option>
                <option value="48v" <?= ($_GET['articulo'] ?? '') == '48v' ? 'selected' : '' ?>>Art. 48 inc. v - Luces apagadas en condiciones de poca visibilidad</option>
                <option value="48w" <?= ($_GET['articulo'] ?? '') == '48w' ? 'selected' : '' ?>>Art. 48 inc. w - Maniobras peligrosas</option>
                <option value="48x" <?= ($_GET['articulo'] ?? '') == '48x' ? 'selected' : '' ?>>Art. 48 inc. x - No mantener distancia de seguridad</option>
                <option value="48y" <?= ($_GET['articulo'] ?? '') == '48y' ? 'selected' : '' ?>>Art. 48 inc. y - Conducir con frenos o neumáticos defectuosos</option>
                <option value="49o" <?= ($_GET['articulo'] ?? '') == '49o' ? 'selected' : '' ?>>Art. 49 inc. o - Zonas de carga y descarga</option>
                <option value="49p" <?= ($_GET['articulo'] ?? '') == '49p' ? 'selected' : '' ?>>Art. 49 inc. p - Zonas reservadas para transporte público/taxis</option>
                <option value="49q" <?= ($_GET['articulo'] ?? '') == '49q' ? 'selected' : '' ?>>Art. 49 inc. q - Zonas para vehículos eléctricos o bicicletas públicas</option>
                <option value="49r" <?= ($_GET['articulo'] ?? '') == '49r' ? 'selected' : '' ?>>Art. 49 inc. r - Calles angostas que impiden paso de emergencias</option>
                <option value="49s" <?= ($_GET['articulo'] ?? '') == '49s' ? 'selected' : '' ?>>Art. 49 inc. s - Áreas peatonales o plazas públicas</option>
                <option value="49t" <?= ($_GET['articulo'] ?? '') == '49t' ? 'selected' : '' ?>>Art. 49 inc. t - Zonas de obras o construcción</option>
                </optgroup>

            </select>
            <button type="submit">Ver</button>
        </form>


        <div class="texto-articulo">
            <?php
            if (isset($_GET['articulo'])) {
                $articulo = $_GET['articulo'];
                switch ($articulo) {
                    case "48a":
                        echo "<h2>Art. 48 inc. a</h2>
                  <p>Queda prohibido circular en contramano, salvo autorización de la autoridad competente.</p>";
                        break;
                    case "48b":
                        echo "<h2>Art. 48 inc. b</h2>
                  <p>Conducir un vehículo sin la licencia habilitante correspondiente.</p>";
                        break;
                    case "48c":
                        echo "<h2>Art. 48 inc. c</h2>
                  <p>Circular con exceso o defecto de velocidad respecto a la establecida.</p>";
                        break;
                    case "48d":
                        echo "<h2>Art. 48 inc. d</h2>
                  <p>Conducir con alcohol en sangre, estupefacientes o medicamentos que alteren la conducción.</p>";
                        break;
                    case "48e":
                        echo "<h2>Art. 48 inc. e</h2>
                  <p>Conducir con exceso de ocupantes en relación a la capacidad del vehículo.</p>";
                        break;
                    case "48f":
                        echo "<h2>Art. 48 inc. f</h2>
                  <p>Transportar personas o carga en lugares no habilitados o de manera indebida.</p>";
                        break;
                    case "48g":
                        echo "<h2>Art. 48 inc. g</h2>
                  <p>Circular sin luces reglamentarias, sin chapa patente, o con ellas ilegibles/adulteradas.</p>";
                        break;
                    case "48h":
                        echo "<h2>Art. 48 inc. h</h2>
                  <p>Usar indebidamente bocinas, sirenas u otros dispositivos de advertencia sonora.</p>";
                        break;
                    case "48i":
                        echo "<h2>Art. 48 inc. i</h2>
                  <p>Transportar carga mal acondicionada, peligrosa o sin autorización.</p>";
                        break;
                    case "48j":
                        echo "<h2>Art. 48 inc. j</h2>
                  <p>Circular con vehículos que emitan contaminantes (humo, gases, ruidos) en niveles superiores a los permitidos.</p>";
                        break;
                    case "48k":
                        echo "<h2>Art. 48 inc. k</h2>
                  <p>Conducir utilizando celular u otros dispositivos que afecten la atención.</p>";
                        break;
                    case "48l":
                        echo "<h2>Art. 48 inc. l</h2>
                  <p>No usar cinturón de seguridad, casco u otros elementos de protección obligatorios.</p>";
                        break;
                    case "48m":
                        echo "<h2>Art. 48 inc. m</h2>
                  <p>Transportar animales de forma que entorpezcan la conducción.</p>";
                        break;
                    case "48n":
                        echo "<h2>Art. 48 inc. n</h2>
                  <p>Transportar personas en moto sin casco reglamentario.</p>";
                        break;
                    case "48o":
                        echo "<h2>Art. 48 inc. o</h2>
                  <p>Circular con escape libre, roto o con silenciador ineficaz.</p>";
                        break;
                    case "48p":
                        echo "<h2>Art. 48 inc. p</h2>
                  <p>Conducir sin seguro obligatorio en vigencia.</p>";
                        break;
                    case "48q":
                        echo "<h2>Art. 48 inc. q</h2>
                  <p>Circular sin portar la documentación exigida: licencia, cédula, seguro, VTV, etc.</p>";
                        break;
                    case "48r":
                        echo "<h2>Art. 48 inc. r</h2>
                  <p>Adelantar en curvas, puentes, túneles, pasos a nivel o lugares prohibidos.</p>";
                        break;
                    case "48s":
                        echo "<h2>Art. 48 inc. s</h2>
                  <p>Circular marcha atrás en lugares no permitidos.</p>";
                        break;
                    case "48t":
                        echo "<h2>Art. 48 inc. t</h2>
                  <p>Conducir sin respetar las señales de tránsito, semáforos o indicaciones de inspectores.</p>";
                        break;
                    case "48u":
                        echo "<h2>Art. 48 inc. u</h2>
                  <p>No respetar la prioridad de paso a peatones, ciclistas o transporte público.</p>";
                        break;
                    case "48v":
                        echo "<h2>Art. 48 inc. v</h2>
                  <p>Circular con luces apagadas en condiciones de poca visibilidad o nocturnidad.</p>";
                        break;
                    case "48w":
                        echo "<h2>Art. 48 inc. w</h2>
                  <p>Realizar maniobras peligrosas como zigzagueo, giros bruscos o arranques repentinos.</p>";
                        break;
                    case "48x":
                        echo "<h2>Art. 48 inc. x</h2>
                  <p>No mantener la distancia de seguridad con otros vehículos, poniendo en riesgo colisiones.</p>";
                        break;
                    case "48y":
                        echo "<h2>Art. 48 inc. y</h2>
                  <p>Conducir vehículos con frenos defectuosos, neumáticos en mal estado o falta de mantenimiento esencial.</p>";
                        break;

                    // -------------------------
                    // ARTÍCULO 49
                    // -------------------------
                    case "49a":
                        echo "<h2>Art. 49 inc. a</h2>
                  <p>No se debe estacionar donde afecte la seguridad, visibilidad o fluidez del tránsito.</p>";
                        break;
                    case "49b":
                        echo "<h2>Art. 49 inc. b</h2>
                  <p>Prohibido estacionar en:</p>
                  <ol>
                    <li>Esquinas y ochavas.</li>
                    <li>Sendas peatonales o ciclovías.</li>
                    <li>Aceras, rieles o calzadas.</li>
                    <li>Diez metros antes o después de paradas de transporte.</li>
                  </ol>";
                        break;
                    case "49c":
                        echo "<h2>Art. 49 inc. c</h2>
                  <p>Prohibido estacionar frente a hospitales, escuelas y servicios públicos, hasta 10 metros a cada lado de la entrada.</p>";
                        break;
                    case "49d":
                        echo "<h2>Art. 49 inc. d</h2>
                  <p>No estacionar frente a cines, teatros y lugares similares durante su funcionamiento.</p>";
                        break;
                    case "49e":
                        echo "<h2>Art. 49 inc. e</h2>
                  <p>No estacionar en accesos de garages, cocheras o estacionamientos señalizados.</p>";
                        break;
                    case "49f":
                        echo "<h2>Art. 49 inc. f</h2>
                  <p>No se admite estacionar un vehículo por más de 5 días consecutivos en la vía pública o el plazo que fije la autoridad.</p>";
                        break;
                    case "49g":
                        echo "<h2>Art. 49 inc. g</h2>
                  <p>No estacionar ómnibus, camiones, acoplados, semirremolques o maquinaria especial fuera de los lugares habilitados.</p>";
                        break;
                    case "49h":
                        echo "<h2>Art. 49 inc. h</h2>
                  <p>No detenerse ni estacionar en lugares peligrosos.</p>";
                        break;
                    // -------------------------
                    // ARTÍCULO 49 - PROHIBICIONES DE ESTACIONAMIENTO Y DETENCIÓN
                    // -------------------------
                    case "49i":
                        echo "<h2>Art. 49 inc. i</h2>
          <p>No estacionar frente a hidrantes, bocas de incendio o accesos de bomberos.</p>";
                        break;
                    case "49j":
                        echo "<h2>Art. 49 inc. j</h2>
          <p>No estacionar sobre pasos peatonales, ciclovías o carriles exclusivos de transporte público.</p>";
                        break;
                    case "49k":
                        echo "<h2>Art. 49 inc. k</h2>
          <p>No estacionar en doble fila, bloqueando el tránsito de otros vehículos.</p>";
                        break;
                    case "49l":
                        echo "<h2>Art. 49 inc. l</h2>
          <p>No estacionar en paradas de transporte público, excepto cuando esté permitido.</p>";
                        break;
                    case "49m":
                        echo "<h2>Art. 49 inc. m</h2>
          <p>No estacionar en lugares señalizados con restricción horaria sin respetar el horario indicado.</p>";
                        break;
                    case "49n":
                        echo "<h2>Art. 49 inc. n</h2>
          <p>No estacionar sobre rampas de accesibilidad para personas con movilidad reducida.</p>";
                        break;
                    case "49o":
                        echo "<h2>Art. 49 inc. o</h2>
          <p>No estacionar en zonas de carga y descarga durante los horarios señalizados.</p>";
                        break;
                    case "49p":
                        echo "<h2>Art. 49 inc. p</h2>
          <p>No estacionar en zonas reservadas para taxis o transporte público, salvo autorización.</p>";
                        break;
                    case "49q":
                        echo "<h2>Art. 49 inc. q</h2>
          <p>No estacionar en lugares destinados a vehículos eléctricos, puntos de recarga o bicicletas públicas.</p>";
                        break;
                    case "49r":
                        echo "<h2>Art. 49 inc. r</h2>
          <p>No estacionar en calles angostas que impidan el paso de vehículos de emergencia.</p>";
                        break;
                    case "49s":
                        echo "<h2>Art. 49 inc. s</h2>
          <p>No estacionar en áreas peatonales o plazas públicas señalizadas como no transitables para vehículos.</p>";
                        break;
                    case "49t":
                        echo "<h2>Art. 49 inc. t</h2>
          <p>No estacionar en zonas de obras, construcción o mantenimiento vial, afectando la seguridad.</p>";
                        break;


                    // el dafult no se toca

                    default:
                        echo "<p>No se encontró el artículo.</p>";
                        break;
                }
            }
            ?>
        </div>
    </div>


</body>

</html>