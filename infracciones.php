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
    <div class="formulario">
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
    <p>Está prohibido manejar en contramano. Solo se puede hacer si un agente de tránsito o la autoridad lo autoriza de forma especial.</p>";
                            break;

                        case "48b":
                            echo "<h2>Art. 48 inc. b</h2>
    <p>No se puede conducir sin tener la licencia de conducir válida para ese tipo de vehículo. Ejemplo: no podés manejar un camión con una licencia de auto común.</p>";
                            break;

                        case "48c":
                            echo "<h2>Art. 48 inc. c</h2>
    <p>No está permitido ir más rápido o más lento que la velocidad máxima o mínima que indiquen las normas o los carteles. Ir demasiado lento también puede ser peligroso.</p>";
                            break;

                        case "48d":
                            echo "<h2>Art. 48 inc. d</h2>
    <p>No se puede manejar si tomaste alcohol, consumiste drogas o algún medicamento que te haga perder reflejos o atención. Aun una pequeña dosis puede afectar tu manejo.</p>";
                            break;

                        case "48e":
                            echo "<h2>Art. 48 inc. e</h2>
    <p>No podés llevar más personas de las que el vehículo permite. Ejemplo: un auto de 5 plazas no puede llevar 6 ocupantes.</p>";
                            break;

                        case "48f":
                            echo "<h2>Art. 48 inc. f</h2>
    <p>No se puede llevar personas o cosas en lugares inseguros, como en el baúl, en el techo o en partes del vehículo que no están pensadas para eso.</p>";
                            break;

                        case "48g":
                            echo "<h2>Art. 48 inc. g</h2>
    <p>No está permitido circular sin luces reglamentarias, sin patente, o con la patente tapada, rota o alterada para que no se lea.</p>";
                            break;

                        case "48h":
                            echo "<h2>Art. 48 inc. h</h2>
    <p>No se puede usar la bocina de forma molesta, ni sirenas u otros sonidos que solo pueden usar ambulancias, bomberos o policías.</p>";
                            break;

                        case "48i":
                            echo "<h2>Art. 48 inc. i</h2>
    <p>No se puede transportar cargas peligrosas o mal aseguradas que puedan caerse o poner en riesgo a otros, salvo que tengas los permisos necesarios.</p>";
                            break;

                        case "48j":
                            echo "<h2>Art. 48 inc. j</h2>
    <p>No se puede circular con autos o motos que larguen demasiado humo, gases, líquidos o ruidos porque contaminan o molestan.</p>";
                            break;

                        case "48k":
                            echo "<h2>Art. 48 inc. k</h2>
    <p>No está permitido usar el celular, auriculares u otros aparatos que te distraigan mientras manejás.</p>";
                            break;

                        case "48l":
                            echo "<h2>Art. 48 inc. l</h2>
    <p>Es obligatorio usar cinturón de seguridad, casco en motos y cualquier otro elemento de seguridad según el vehículo.</p>";
                            break;

                        case "48m":
                            echo "<h2>Art. 48 inc. m</h2>
    <p>No podés llevar animales sueltos dentro del auto que puedan distraerte o entorpecer tu manejo. Deben ir sujetos o en jaulas.</p>";
                            break;

                        case "48n":
                            echo "<h2>Art. 48 inc. n</h2>
    <p>Está prohibido llevar pasajeros en moto sin casco. Todos los que viajen tienen que usarlo.</p>";
                            break;

                        case "48o":
                            echo "<h2>Art. 48 inc. o</h2>
    <p>No se puede circular con el escape roto, libre o que haga demasiado ruido porque molesta y contamina.</p>";
                            break;

                        case "48p":
                            echo "<h2>Art. 48 inc. p</h2>
    <p>Es obligatorio tener seguro vigente. Si no lo tenés al día, no podés circular.</p>";
                            break;

                        case "48q":
                            echo "<h2>Art. 48 inc. q</h2>
    <p>Siempre hay que llevar encima los papeles del auto y del conductor: licencia, cédula, seguro, VTV, etc.</p>";
                            break;

                        case "48r":
                            echo "<h2>Art. 48 inc. r</h2>
    <p>No podés adelantar en curvas, puentes, túneles, pasos a nivel o cualquier lugar donde no veas bien o esté prohibido.</p>";
                            break;

                        case "48s":
                            echo "<h2>Art. 48 inc. s</h2>
    <p>No se puede ir marcha atrás en calles o rutas salvo que sea necesario y en lugares permitidos (ejemplo: estacionar).</p>";
                            break;

                        case "48t":
                            echo "<h2>Art. 48 inc. t</h2>
    <p>Siempre hay que respetar semáforos, señales de tránsito y las indicaciones de los inspectores o policías de tránsito.</p>";
                            break;

                        case "48u":
                            echo "<h2>Art. 48 inc. u</h2>
    <p>Hay que darle prioridad de paso a peatones en la senda peatonal, a ciclistas y al transporte público en determinadas situaciones.</p>";
                            break;

                        case "48v":
                            echo "<h2>Art. 48 inc. v</h2>
    <p>No podés circular sin luces cuando hay poca visibilidad (de noche, con niebla o lluvia fuerte). Encenderlas es obligatorio.</p>";
                            break;

                        case "48w":
                            echo "<h2>Art. 48 inc. w</h2>
    <p>No está permitido hacer maniobras peligrosas como zigzaguear, girar sin aviso o arrancar de golpe.</p>";
                            break;

                        case "48x":
                            echo "<h2>Art. 48 inc. x</h2>
    <p>Siempre hay que mantener una distancia prudente con el vehículo de adelante. Si no, podés chocar en caso de frenada repentina.</p>";
                            break;

                        case "48y":
                            echo "<h2>Art. 48 inc. y</h2>
    <p>No podés manejar un vehículo con frenos rotos, neumáticos gastados o en mal estado. El auto debe estar en condiciones seguras.</p>";
                            break;


                        // -------------------------
                        // ARTÍCULO 49
                        // -------------------------

                        case "49a":
                            echo "<h2>Art. 49 inc. a</h2>
            <p>No se debe estacionar donde pueda afectar la seguridad, la visibilidad o interrumpir el tránsito. 
            Ejemplo: dejar el auto en una curva o en un lugar donde tapa la visión de los demás conductores.</p>";
                            break;

                        case "49b":
                            echo "<h2>Art. 49 inc. b</h2>
            <p>Está prohibido estacionar en:</p>
            <ul>
              <li><b>Esquinas y ochavas:</b> porque impide ver a los que cruzan.</li>
              <li><b>Sendas peatonales o ciclovías:</b> porque bloquea el paso de peatones y ciclistas.</li>
              <li><b>Sobre aceras, rieles o la calzada:</b> porque no son lugares destinados a vehículos.</li>
              <li><b>A 10 metros antes o después de una parada de colectivos:</b> para no molestar a los que suben y bajan.</li>
            </ul>";
                            break;

                        case "49c":
                            echo "<h2>Art. 49 inc. c</h2>
            <p>No se puede estacionar frente a hospitales, escuelas u otros servicios públicos, en un radio de 10 metros de las entradas. 
            Esto es para dejar libre el acceso en emergencias.</p>";
                            break;

                        case "49d":
                            echo "<h2>Art. 49 inc. d</h2>
            <p>Está prohibido estacionar frente a cines, teatros o lugares similares mientras estén funcionando, 
            porque genera congestión y bloquea salidas de emergencia.</p>";
                            break;

                        case "49e":
                            echo "<h2>Art. 49 inc. e</h2>
            <p>No se puede estacionar en la entrada o salida de garages, cocheras o estacionamientos. 
            Si bloqueás, impedís que los dueños puedan entrar o salir.</p>";
                            break;

                        case "49f":
                            echo "<h2>Art. 49 inc. f</h2>
            <p>No se puede dejar un auto estacionado en la vía pública más de 5 días seguidos (o el plazo que defina la autoridad). 
            Los autos abandonados ocupan lugar y se convierten en un problema de seguridad.</p>";
                            break;

                        case "49g":
                            echo "<h2>Art. 49 inc. g</h2>
            <p>No se puede estacionar colectivos, camiones, acoplados, semirremolques o maquinaria especial en la calle, salvo en lugares habilitados. 
            Estos vehículos grandes ocupan espacio y dificultan la visibilidad.</p>";
                            break;

                        case "49h":
                            echo "<h2>Art. 49 inc. h</h2>
            <p>No se puede detenerse o estacionar en lugares peligrosos, por ejemplo, en una curva cerrada, un puente o una pendiente pronunciada.</p>";
                            break;

                        case "49i":
                            echo "<h2>Art. 49 inc. i</h2>
            <p>No estacionar frente a hidrantes o bocas de incendio, ni en los accesos de bomberos. 
            Si hay un incendio, ese espacio debe estar libre para las emergencias.</p>";
                            break;

                        case "49j":
                            echo "<h2>Art. 49 inc. j</h2>
            <p>No estacionar sobre pasos peatonales, ciclovías ni en carriles exclusivos de colectivos o taxis. 
            Son espacios reservados para quienes los usan.</p>";
                            break;

                        case "49k":
                            echo "<h2>Art. 49 inc. k</h2>
            <p>Está prohibido estacionar en doble fila, porque bloquea a los autos que ya están estacionados y entorpece el tránsito.</p>";
                            break;

                        case "49l":
                            echo "<h2>Art. 49 inc. l</h2>
            <p>No se puede estacionar en paradas de colectivos, salvo que esté expresamente permitido y fuera del horario de funcionamiento.</p>";
                            break;

                        case "49m":
                            echo "<h2>Art. 49 inc. m</h2>
            <p>No estacionar en lugares donde hay carteles de restricción horaria sin respetar lo que dice el cartel. 
            Ejemplo: estacionar en zona de carga en horario prohibido.</p>";
                            break;

                        case "49n":
                            echo "<h2>Art. 49 inc. n</h2>
            <p>No estacionar sobre rampas para personas con movilidad reducida. 
            Si bloqueás una rampa, impedís el acceso a sillas de ruedas o cochecitos de bebé.</p>";
                            break;

                        case "49o":
                            echo "<h2>Art. 49 inc. o</h2>
            <p>No estacionar en zonas de carga y descarga durante el horario reservado para esa actividad. 
            Esos espacios son necesarios para que los comercios reciban mercadería.</p>";
                            break;

                        case "49p":
                            echo "<h2>Art. 49 inc. p</h2>
            <p>No estacionar en lugares reservados para taxis, remises o transporte público, salvo que tengas autorización especial.</p>";
                            break;

                        case "49q":
                            echo "<h2>Art. 49 inc. q</h2>
            <p>No estacionar en zonas destinadas a vehículos eléctricos, puntos de recarga o bicicletas públicas. 
            Esos espacios son exclusivos para esos usos.</p>";
                            break;

                        case "49r":
                            echo "<h2>Art. 49 inc. r</h2>
            <p>No estacionar en calles angostas donde se dificulte el paso de ambulancias, bomberos u otros vehículos de emergencia.</p>";
                            break;

                        case "49s":
                            echo "<h2>Art. 49 inc. s</h2>
            <p>No estacionar en áreas peatonales o plazas públicas donde está prohibido circular con vehículos. 
            Estos lugares son solo para peatones.</p>";
                            break;

                        case "49t":
                            echo "<h2>Art. 49 inc. t</h2>
            <p>No estacionar en zonas donde hay obras, construcción o mantenimiento vial, porque obstruye el trabajo y la seguridad de los operarios.</p>";



                            // el dafult no se toca

                        default:
                            echo "<p>No se encontró el artículo.</p>";
                            break;
                    }
                }
                ?>
            </div>
        </div>
        <img src="multimedia/d9b849a8-fbc4-437c-8961-858d671f824a.png">
        </div>
        <!-- footer / pie de pagina -->
        <?php include 'footer.php' ?>

</body>

</html>